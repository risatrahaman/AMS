create database ams;

create table users(
uid varchar(10),
fname varchar(30),
lname varchar(30),
phone int,
address varchar(255),
email varchar(50),
password varchar(255),
primary key (uid)
);

create table admin (
uid varchar(10) not null,
aid varchar(10) not null,
primary key (aid),
foreign key (uid) references users(uid)
);

create table customer (
uid varchar(10) not null,
cid varchar(10) not null,
distance_covered int,
type varchar(10),
primary key (cid),
foreign key (uid) references users(uid)
);

create table airport (
airport_code varchar(3) not null,
airport_name varchar(50) not null,
destination varchar(30) not null,
primary key (airport_code)
);

create table flight (
fid int not null,
economy_price int not null,
business_price int not null,
seat_remaining int,
airport_code varchar(3) not null,
primary key (fid),
foreign key (airport_code) references airport(airport_code)
);

create table ticket (
book_id int not null,
fid int not null,
discount int,
payment int,
seat_type varchar(10) not null,
cid int not null,
book_date date not null,
fdate date,
ftime time,
primary key (book_id),
foreign key (fid) references flight(fid)
);

create table help (
hid int auto_increment,
htype varchar(50),
primary key (hid)
);

create table ask (
cid varchar(10) not null,
hid int not null,
hdate date,
htime time,
foreign key (cid) references customer(cid),
foreign key (hid) references help(hid)
);

create table feedback (
cid varchar(10) not null,
feed_id int auto_increment,
feed_date date,
description varchar(1000),
primary key (feed_id),
foreign key (cid) references customer(cid)
);

create table coupon (
coupon_code char(5) not null,
validity date,
type varchar(10),
cid varchar(10) not null,
primary key(coupon_code),
foreign key (cid) references customer(cid)
);

create table leisure (
lname varchar(50) not null,
ltype varchar(30) not null,
airport_code varchar(3) not null,
primary key (lname),
foreign key (airport_code) references airport(airport_code)
);

create table car_service (
car_model varchar(30) not null,
pick_up varchar(30),
drop_off varchar(30),
airport_code varchar(3) not null,
primary key (car_model),
foreign key (airport_code) references airport(airport_code)
);

INSERT INTO users VALUES
(1, 'Michael', 'Scott', 01123456789, 'Scranton', 'prison_mike@gmail.com', 'azkaban'),
(2, 'Jim', 'Halpert', 01223456789, 'Utica', 'phillyjim@gmail.com', 'baseball'),
(3, 'Pam', 'Beesley', 01323456789, 'New York', 'artistpam@gmail.com', 'artislife'),
(4, 'Dwight', 'Schrute', 01423456789, 'Vermont', 'beetfarmer@gmail.com', 'battlestar'),
(5, 'Kelly', 'Kapoor', 01523456789, 'New Jersey', 'glamkelly@gmail.com', 'ryanfire');

INSERT INTO airport VALUES
('DAC', 'Hazrat Shahjalal Airport', 'Chittagong'),
('CTG', 'Shah Amanat Airport', 'Sylhet'),
('Jes', 'Jashore Airport', 'Syedpur');
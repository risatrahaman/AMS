create database ams;

create table user (
uid varchar(10),
fname varchar(15),
lname varchar(15),
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
foreign key (uid) references user(uid)
);

create table customer (
uid varchar(10) not null,
cid varchar(10) not null,
distance_covered int,
type varchar(10),
primary key (cid),
foreign key (uid) references user(uid)
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
airport_code varchar(3) not null.
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
hid varchar(50) not null,
htime time,
hdate date,
foreign key (cid) references customer(cid),
foreign key (hid) references help(hid)
);

create table feedback (
cid varchar(10) not null,
feed_id int auto_increment,
description varchar(1000),
feed_date date,
primary key (feed_id),
foreign key (cid) references customer(cid)
);

create table coupon (
cid varchar(10) not null,
coupon_code char(5) not null,
validity date,
type varchar(10),
primary key(coupon_code),
foreign key (cid) references customer(cid)
);

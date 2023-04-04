create database ams;

create table user (
uid int not null,
email varchar(50),
password varchar(30),
phone int,
fname varchar(15),
lname varchar(15),
address varchar(255),
primary key (uid)
);

create table admin (
uid int not null,
aid int not null,
primary key (aid),
foreign key (uid) references user(uid)
);

create table customer (
uid int not null,
cid int not null,
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
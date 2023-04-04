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
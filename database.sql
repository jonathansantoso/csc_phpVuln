create database testing;
use database testing;

create table users(
    id int NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    PRIMARY KEY(id)
);

insert into users(username, password, email) values('jonathan', 'asdasd', 'jonathan@binus.edu');

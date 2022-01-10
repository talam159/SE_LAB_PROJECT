CREATE DATABASE if not exists music;
use music;

CREATE table booking (
    id int(10) AUTO_INCREMENT UNIQUE,
    event varchar(20) NOT NULL,
    date date NOT NULL,
    place varchar(100) NOT NULL,
    email varchar(30) NOT NULL,
    number int(20) NOT NULL,
    place varchar(30) NOT NULL,
    price int(10) NOT NULL,
    advance_pay int(10) NOT NULL,
    due_pay int(10) NOT NULL,
    status varchar(30) NOT NULL
    
    PRIMARY KEY(id) 
);


CREATE DATABASE if not exists music;
use music;

CREATE table booking (
    id int(10) AUTO_INCREMENT UNIQUE,
    event varchar(20) NOT NULL,
    date date NOT NULL,
    place varchar(100) NOT NULL,
    email varchar(30) NOT NULL,
    number int(20) NOT NULL,
    status varchar(20) ,
    
    PRIMARY KEY(id) 
);



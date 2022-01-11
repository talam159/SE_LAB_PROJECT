CREATE DATABASE if not exists hire;
use hire;

CREATE table booking (
    id int(10) AUTO_INCREMENT UNIQUE,
    office_name varchar(20) NOT NULL,
    start_date date NOT NULL,
    place varchar(100) NOT NULL,
    email varchar(30) NOT NULL,
    number int(20) NOT NULL,
    
    PRIMARY KEY(id) 
);


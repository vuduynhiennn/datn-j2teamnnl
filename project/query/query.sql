CREATE DATABASE j2teamStore;

USE j2teamStore;

CREATE TABLE level (
    levelID int(10) AUTO_INCREMENT, 
    levelName varchar(20) not null,
    primary key(levelID)
)


CREATE TABLE admin (
    adID int AUTO_INCREMENT,
    adName varchar(20) not null,
    password varchar(20) not null,
    primary key(adID)
)

CREATE TABLE subAdmin (
    subadID int AUTO_INCREMENT,
    subadName nvarchar(20) not null,
    password varchar(20) not null,
    primary key(subadID)
)


CREATE TABLE customer (
    ctID int AUTO_INCREMENT,
    firstName varchar(20) not null,
    lastName varchar(20) not null,
    userName varchar(50) not null,
    phone varchar(15) not null,
    email varchar(40) not null,
    address varchar(40) not null,
    primary key(ctID)
)


CREATE TABLE product (
    prID int AUTO_INCREMENT,
    firstName varchar(20) not null,
    lastName varchar(20) not null,
    userName varchar(50) not null,
    phone varchar(15) not null,
    email varchar(40) not null,
    address varchar(40) not null,
    primary key(prID)
)
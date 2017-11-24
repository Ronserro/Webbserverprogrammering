create database form;

use form;

create table register (username varchar(32) PRIMARY KEY, full_name varchar(32), mail varchar(32) UNIQUE, birthday date, password varchar(32));
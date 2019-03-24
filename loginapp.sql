drop database if exists loginapp;
create database loginapp;

drop user if exists loginapp;
grant all privileges on
  loginapp.*
to
  'loginapp'@localhost
identified by
  'loginapp';

use loginapp;
drop table if exists users;
create table users(
  id int AUTO_INCREMENT PRIMARY KEY,
  username varchar(32),
  password varchar(32)
);

insert into users
  (username, password)
values
  ("bob", "password1"),
  ("james", "password2");

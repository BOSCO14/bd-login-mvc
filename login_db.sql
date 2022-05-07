create database if not exists login_db
default charset utf8mb4
default collate utf8mb4_general_ci;

use login_db;

create table if not exists usuario(
id int not null auto_increment primary key,
nome varchar(100)not null,
email varchar(100)not null unique,
senha varchar(255)not null)Engine=InnoDB default charset=utf8mb4;
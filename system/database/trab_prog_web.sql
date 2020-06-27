create database trab_prog_web;
use trab_prog_web;
create table aluno (
 matricula int not null AUTO_INCREMENT,
 nome varchar(30),
 email varchar(50) not null,
 senha varchar(50) not null,
 primary key (matricula)

 );
create table Carro(
 placa varchar(8) not null,
 marca varchar(45) not null,
 modelo varchar(45) not null,
 ano int not null,
 cor varchar(20),
 primary key(placa)
);
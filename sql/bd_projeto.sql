drop database if exists bd_projeto;
create database bd_projeto;
use bd_projeto;
create table if not exists tb_objeto(
  cod_obj int primary key auto_increment,
  desc_obj varchar(100) not null,
  cor_obj varchar(30),
  marca_obj varchar(30),
  local_enc varchar(50),
  data_enc date
  );

create table if not exists tb_perdi(
  cod_obj int primary key auto_increment,
  nome_pessoa varchar(100),
  desc_obj varchar(100) not null,
  cor_obj varchar(30),
  marca_obj varchar(30),
  data_perd date,
  email_pessoa varchar(80)
);
Drop database if exists bd_projeto;
create database bd_projeto;
use bd_projeto;
create table tb_objeto
(
  cod_obj int primary key auto_increment,
  desc_obj varchar(100) not null,
  cor_obj varchar(30),
  tam_obj varchar(20),
  marca_obj varchar(30),
  ponto_obj char(1)
  );

select *from tb_objeto;
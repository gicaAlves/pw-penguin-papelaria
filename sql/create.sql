create database penguin_papelaria
default character set utf8
default collate utf8_general_ci;

use penguin_papelaria;

create table categoria
(
	cod_cat int primary key auto_increment,
    nome_cat varchar (50) not null
)
default charset utf8;
    
create table produtos
(
	cod_prod int primary key auto_increment,
    cod_cat int not null,
    nome_prod varchar (100) not null,
    preco_prod decimal(6,4) not null,
    desc_prod varchar(500) not null,
    quant_prod int not null,
    img_prod varchar(200) not null,
    nov_prod boolean not null default false,
    constraint fk_cod_cat foreign key (cod_cat) references categoria(cod_cat)    
)
default charset utf8;

create table usuario
(
	cod_usu int primary key auto_increment,
    nome_usu varchar (100) not null,
    email_usu varchar (200) not null,
    senha_usu varchar(10) not null,
    zap_usu boolean not null,
    cep_usu char (9) not null,
    num_end_usu int not null
)
default charset utf8;
    
drop table usuario;    

drop table produtos;
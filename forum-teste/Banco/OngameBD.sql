create database Ongame;
use Ongame;

create table NovoTopico
(
id_topico int primary key auto_increment not null,
Titulo varchar(50) not null,
Usuario varchar(60) not null ,
Avatar varchar(100) not null,
mensagem varchar (300) not null
);

create table Post
(
id_post int primary key auto_increment not null, 
Usuario varchar(60) not null ,
Avatar varchar(100) not null,
mensagem varchar (300) not null,
id_topico int
);


alter table post 
add constraint fk_post_topico
foreign key (id_topico)
references NovoTopico(id_topico);
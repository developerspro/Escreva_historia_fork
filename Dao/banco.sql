create database escrevasuahistoria;
use escrevasuahistoria;

create table usuario(
id int primary key auto_increment,
nome varchar(60) not null,
email varchar(60) not null,
nome_usuario varchar(30) not null,
senha varchar(20) not null);

create table publicacao(
id int primary key auto_increment,
id_usuario_fk int, 
titulo varchar(50) not null,
capa varchar(30) not null,
artigo longtext not null,
data date,
hora time,
foreign key(id_usuario_fk)references usuario(id));

create table comentarios(
id int primary key auto_increment,
id_usuario_fk int,
id_publicacao_fk int,
comentario text,
foreign key(id_usuario_fk)references usuario(id),
foreign key (id_publicacao_fk) references publicacao(id));

create table permissoes(
id int primary key auto_increment,
id_usuario_fk int,
permissoes varchar(30),
foreign key(id_usuario_fk) references usuario(id));
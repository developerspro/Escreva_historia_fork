create database escrevasuahistoria;
use escrevasuahistoria;

create table usuario(
id int primary key auto_increment,
nome varchar(60) not null,
email varchar(60) not null,
nome_usuario varchar(30) not null,
senha varchar(20) not null,
qntdseguidor int not null default "0",
biografia varchar(150) not null default" ",
capa varchar(250) not null default" ",
banner varchar(250) not null default " ");

create table publicacao(
id int primary key auto_increment,
id_usuario_fk int, 
titulo varchar(50) not null,
capa varchar(30) not null,
artigo longtext not null,
qntdpublicacao int not null default "0",
data date,
hora time,
foreign key(id_usuario_fk)references usuario(id));

create table comentarios(
id int primary key auto_increment,
id_usuario_fk int,
id_publicacao_fk int,
comentario text,
qntdcomentario int not null default "0",
foreign key(id_usuario_fk)references usuario(id),
foreign key (id_publicacao_fk) references publicacao(id));

create table permissoes(
id int primary key auto_increment,
id_usuario_fk int,
permissoes varchar(30),
foreign key(id_usuario_fk) references usuario(id));

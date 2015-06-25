-- grant all privileges on *.* to pizzeria@localhost identified by '1234';
grant all privileges on *.* to pizzeria@localhost identified by '1234';
drop database if exists pizzeria;
create database if not exists pizzeria;
use pizzeria;

create table tipoUsuarios(
id int(1) primary key,
descripcion varchar(15) not null);

create table usuarios(
user varchar(30) primary key,
password varchar(20) not null,
tipo int(1) not null,
foreign key (tipo) references tipoUsuarios(id));

create table clientes(
id varchar(10) primary key,
nombre varchar(15) not null,
apellido varchar(15) not null,
direccion varchar(30) not null,
barrio varchar(20) not null,
telefono varchar(15) not null,
email varchar(20) not null,
puntos int(10),
foreign key (email) references usuarios(user));

-- create table pedido(
-- id int auto_increment primary key,
--
-- );

create table grupos(
id int auto_increment primary key,
descripcion varchar(15));

create table productos(
id int auto_increment primary key,
descripcion varchar(20) not null,
valor1 int (7),
valor2 int (7),
valor3 int (7),
grupo int(1),
foreign key (grupo) references grupos(id));


INSERT INTO tipousuarios (id, descripcion) VALUES
(1, 'administrador'),
(2, 'empleado'),
(3, 'cliente');

INSERT INTO grupos (id, descripcion) VALUES
(1, 'pizzas'),
(2, 'entrantes'),
(3, 'postres'),
(4, 'bebidas');

INSERT INTO productos (id, descripcion, valor1, valor2, valor3, grupo) VALUES
('1', 'Tres delicias', '15000', '22000', '30000', '1'),
('2', 'Pollo con almendras', '15000', '22000', '30000', '1'),
('3', 'Ternera con bambú', '15000', '22000', '30000', '1'),
('4', 'Cerdo agridulce', '15000', '22000', '30000', '1');

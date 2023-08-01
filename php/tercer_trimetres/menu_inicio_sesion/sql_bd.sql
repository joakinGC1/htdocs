drop database bd_utv;

create database if not exists bd_utv;
use bd_utv;



drop table if exists empleado;
create table if not exists empleado (
	id_emple int primary key auto_increment ,
    nombre varchar(50),
    apellido varchar(50) ,
    contrasena varchar(30),
    is_admin  BOOLEAN NOT NULL ,
    img VARCHAR(250)
);

drop table if exists cliente;
create table if not exists cliente(
	id_cliente int primary key auto_increment,
    nombre varchar(50),
    apellido varchar(50)
);

drop table if exists compra;
create table if not exists compra(
	id_compra int primary key auto_increment,
    fecha date not null,
    id_cliente_fk int,
    estado boolean not null,
    total float(2) not null
);

drop table if exists contenido_compra;
create table if not exists contenido_compra(
	id_contenido_compra int primary key auto_increment,
    id_compra_fk int,
    id_producto_fk int,
    cantidad int 
);

drop table if exists producto;
create table if not exists producto(
	id_producto int primary key auto_increment,
    nombre varchar(50),
    id_categoria_fk int,
    precio float(2)
);

drop table if exists categoria;
create table if not exists categoria(
	id_categoria int auto_increment primary key,
    nombre_generos varchar(50),
    is_active boolean not null
);

drop table if exists notificaciones;
create table if not exists notificaciones(
	id_not int auto_increment primary key,
    nombre varchar(50) not null,
    is_active boolean not null,
    fecha date not null
);

drop table if exists mensajes;
create table if not exists mensajes(
	id_men int auto_increment primary key,
    mensaje varchar(250) not null,
    fecha date not null,
    id_empleado1 int,
    id_empleado2 int
);

alter table compra add constraint id_cliente_compra foreign key(id_cliente_fk)references cliente(id_cliente);
alter table contenido_compra add constraint fk_compra_contenido foreign key(id_compra_fk) references compra(id_compra);
alter table contenido_compra add constraint fk_producto_contenido foreign key(id_producto_fk) references producto(id_producto);
alter table producto add constraint fk_categoria_producto foreign key(id_categoria_fk)  references categoria(id_categoria);
alter table mensajes add constraint fk_mensaje foreign key(id_empleado1) references empleado(id_emple);
alter table mensajes add constraint fk_mensaje2 foreign key(id_empleado2) references empleado(id_emple);

insert into empleado(nombre,apellido,contrasena,is_admin,img) values('Joaquin','Contreras','prueba1',true,"../img/user1.jpg");
insert into empleado(nombre,apellido,contrasena,is_admin,img) values("Sergio","antoño","prueba2",true,"../img/user2.jpg");
insert into empleado(nombre,apellido,contrasena,is_admin,img) values("Pepe","sabio","prueba3",false,"../img/user3.jpg");

select * from empleado;

insert into cliente(nombre,apellido) values('pepe','antoniez');
insert into cliente(nombre,apellido) values('Antonio','motoz');
insert into cliente(nombre,apellido) values('Steve','Jobs');

select * from cliente;


insert into categoria(nombre_generos,is_active) values('Comida Animal',true);
insert into categoria(nombre_generos,is_active) values('Higiene',true);
insert into categoria(nombre_generos,is_active) values('Limpieza',true);

select * from categoria;

insert into producto(nombre,id_categoria_fk,precio) values ('Pedigree',1,100);
insert into producto(nombre,id_categoria_fk,precio) values ('Jabon Alta Calidad',2,500);
insert into producto(nombre,id_categoria_fk,precio) values ('Lavandina',3,250);

select * from producto;

insert into compra(fecha,id_cliente_fk,estado,total) values ('2023-04-12',2,true,1000);
insert into compra(fecha,id_cliente_fk,estado,total) values ('2023-04-13',1,false,250);
insert into compra(fecha,id_cliente_fk,estado,total) values ('2023-04-13',2,true,400);

select * from compra;

insert into contenido_compra (id_compra_fk,id_producto_fk,cantidad) values(1,3,2);
insert into contenido_compra (id_compra_fk,id_producto_fk,cantidad) values(1,2,1);
insert into contenido_compra (id_compra_fk,id_producto_fk,cantidad) values(2,3,1);
insert into contenido_compra (id_compra_fk,id_producto_fk,cantidad) values(2,1,4);


select * from contenido_compra ;

select * from  compra;

insert into mensajes (mensaje,fecha, id_empleado1,id_empleado2) values ('Hola Gaston','2023-04-12',2,1);
insert into mensajes (mensaje,fecha, id_empleado1,id_empleado2) values ('KEchauu','2023-04-12',1,2);
insert into mensajes (mensaje,fecha, id_empleado1,id_empleado2) values ('No me digas PEPON','2023-04-12',2,3);

/*select * from empleado where nombre="Joaquin"and contrasena="prueba1" and is_admin=true;

update categoria set nombre_generos = "cambio" where id_categoria = 3;
select * from categoria;
update categoria set nombre_generos = "Limpieza" where id_categoria = 3;

DELETE FROM categoria WHERE id_categoria= 3;

update producto set  nombre = 'Lavadina', id_categoria_fk = 10 where id_producto = 8;


select * from producto inner join categoria on id_categoria_fk = id_categoria;


select * from compra inner join contenido_compra  on id_compra = id_compra_fk
inner join producto on id_producto = id_producto_fk
inner join cliente on id_cliente_fk = id_cliente;

select id_contenido_compra, id_compra_fk, fecha, producto.nombre Producto, cantidad, cliente.nombre Cliente    
	from contenido_compra 
		inner join compra on id_compra = id_compra_fk
        inner join producto on id_producto = id_producto_fk
        inner join cliente on id_cliente = id_cliente_fk;
        
select id_compra id, fecha, nombre, apellido from compra 
		inner join cliente on id_cliente_fk = id_cliente;




select  producto.nombre Producto, cantidad, cliente.nombre Cliente    
            from contenido_compra 
                inner join compra on id_compra = id_compra_fk
                inner join producto on id_producto = id_producto_fk
                inner join cliente on id_cliente = id_cliente_fk
                where compra.id_compra = 5;
                
update empleado set nombre = 'Pepea' ,apellido = 'sabioss' , is_admin = 1 where id_emple =3;

SELECT nombre,contrasena FROM empleado where nombre = "Joaquin" and is_admin = 1;

select * from notificaciones order by id_not desc limit 5;*/


Create table usuario(
id_usuario INT NOT NULL ,
email varchar(45),
telefono INT,
Direccion varchar(45),
Contraseña Varchar(45),
primary key (id_usuario)
);

Create table Rol(
id_rol INT NOT NULL,
Nombre_rol varchar(45),
Primary key (id_rol)
);

Create table tipo_diligenciamiento(
id_tipodiligenciamiento INT NOT NULL,
Fecha date,
resultado Varchar(45),
PRIMARY KEY (id_tipodiligenciamiento)
);

Create table raza (
id_raza INT NOT NULL,
nombre Varchar(45),
PRIMARY KEY (id_raza)
);

Create table Fundacion(
id_fundacion INT NOT NULL,
nombre Varchar(45),
direccion Varchar(45),
telefono Varchar(45),
email Varchar(45),
PRIMARY KEY (id_fundacion)
);

Create table Mascotas(
id_mascotas INT NOT NULL,
nombre varchar(45),
Condiciones varchar(45),
disponibilidad Varchar(45)
);

Use usuario;

INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0001','Andes@gmail.com','3003670','Cll 79 #50-92','Andres1234');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0002','Maria@gmail.com','3345687','Cll 80 #56-78','Maria123');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0003','Camilo@gmail.com','3254768','Cll 49 #67-113','Camilo1234');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0004','Jose@gmail.com','2456789','Cll 123 #89-12','Jose123');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0005','Dani@gmail.com','5687349','Cll 67 #78-12','Dani45');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0006','Daniela@gmail.com','2345670','Cll 56 #88-78','daniela123');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0007','Andres@gmail.com','3456789','Cll 34 #67-34','andres12345');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0008','juan@gmail.com','1234568','Cll 34 #67-78','Juanc123');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0009','Luis@gmail.com','9012345','Cll 45 #78-75','Luisito12');
INSERT INTO usuario(id_usuario,email,telefono,Direccion,Contraseña) VALUES ('0010','pedro@gmail.com','6789340','Cll 78 #56-68','Pedro123');

Use fundacion;

INSERT INTO fundacion(id_fundacion,nombre,direccion,telefono,email) VALUES ('0001','Fundacion Animal','Cll 79 #50-92','3003670','FundaciónAnimal@gmail.com');

Use mascotas;

INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0001','Tobi','Buen estado','Disponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0002','Manchas','Buen estado','No disponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0003','Pecas','Buen estado','Disponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0004','Doki','Buen estado','Disponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0005','Pelusa','Buen estado','No disponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0006','Julito','Buen estado','Disponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0007','Firulais','Buen estado','Daiponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0008','Garritas','Buen estado','No disponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0009','Luna','Buen estado','No disponible');
INSERT INTO mascotas(id_mascotas,nombre,Condiciones,disponibilidad) VALUES ('0010','Cafesito','Buen estado','No disponible');

Use raza;

INSERT INTO raza(id_raza,nombre) VALUES ('0001','Bulldog');
INSERT INTO raza(id_raza,nombre) VALUES ('0002','Labrador retriever');
INSERT INTO raza(id_raza,nombre) VALUES ('0003','Pastor Aleman');
INSERT INTO raza(id_raza,nombre) VALUES ('0004','Poodie');
INSERT INTO raza(id_raza,nombre) VALUES ('0005','Golden retriever');
INSERT INTO raza(id_raza,nombre) VALUES ('0006','Chihuahua');
INSERT INTO raza(id_raza,nombre) VALUES ('0007','Bulldog Frances');
INSERT INTO raza(id_raza,nombre) VALUES ('0008','Persa');
INSERT INTO raza(id_raza,nombre) VALUES ('0009','Esfinge');
INSERT INTO raza(id_raza,nombre) VALUES ('0010','Ragdoll');

Use rol;

INSERT INTO rol(id_rol,Nombre_rol) VALUES ('000001','Usuario');
INSERT INTO rol(id_rol,Nombre_rol) VALUES ('000002','Administrador');
INSERT INTO rol(id_rol,Nombre_rol) VALUES ('000003','Cliente');
INSERT INTO rol(id_rol,Nombre_rol) VALUES ('000004','Donante');

Use tipo_diligenciamiento;

INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000001','2022-04-16','Aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000002','2022-02-24','No aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000003','2022-04-30','No aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000004','2022-05-25','Aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000005','2022-06-19','Aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000006','2022-03-07','No aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000007','2022-01-23','Aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000008','2022-02-12','No aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000009','2022-04-11','Aprobado');
INSERT INTO tipo_diligenciamiento(id_tipodiligenciamiento,Fecha,resultado) VALUES ('000010','2022-03-27','Aprobado');

delimiter //
create procedure fundacion(in letra char)
begin 
Select *from fundacion
where letra like concat('%',letra,'%');
end//
delimiter ;
Call fundacion ('A');

delimiter //
create procedure mascotas(in letra char)
begin 
Select *from mascotas
where letra like concat('%',letra,'%');
end//
delimiter ;
Call mascotas('P');

delimiter //
create procedure raza(in letra char)
begin 
Select *from raza
where raza like concat('%',letra,'%');
end//
delimiter ;
Call raza('B');

delimiter //
create procedure rol(in letra char)
begin 
Select *from rol
where letra like concat('%',letra,'%');
end//
delimiter ;
Call rol('A');

delimiter //
create procedure tipo_diligenciamiento(in letra char)
begin 
Select *from tipo_diligenciamiento
where letra like concat('%',letra,'%');
end//
delimiter ;
Call tipo_diligenciamiento('e');

delimiter //
create procedure usuario(in letra char)
begin 
Select *from usuario
where letra like concat('%',letra,'%');
end//
delimiter ;
Call usuario('A');





DROP DATABASE IF EXISTS financiamientodb; 

CREATE DATABASE financiamientodb;

USE financiamientodb;

CREATE TABLE Direcciones (
    id_direccion int,
    sector varchar(100),
    calle varchar(100),
    casa int,
    constraint pk_id_direcciones primary key(id_direccion)
);

CREATE TABLE Administradores(
    cedula_admin int not null,
    nombre varchar(100) not null,
    apellido varchar(100) not null,
    correo varchar(30) not null,
    clave varchaR(30) not null,
    direccion int not null,
    constraint pk_cedula_admin primary key(cedula_admin),
    constraint fk_direccion_admin foreign key(direccion) references direcciones(id_direccion)
);

CREATE TABLE Intereses(
    id_interes int not null,
    tasa float not null,
    fecha_agregacion date,
    constraint pk_intereses primary key(id_interes)
);

CREATE TABLE Clientes(
    cedula_cliente int not null, 
    nombre varchar(100),
    apellido varchar(100),
    correo varchar(30),
    clave varchar(30),
    direccion int not null,
    constraint pk_cedula_cliente primary key(cedula_cliente),
    constraint fk_direccion_cliente foreign key(direccion) references direcciones(id_direccion)
);

CREATE TABLE Correos_Enviados(
    id_correo_enviado int not null,
    client int not null,
    fecha_envio date,
    detalle text,
    constraint fk_client foreign key(client) references clientes(cedula_cliente)
);

CREATE TABLE Solicitudes(
    id_solicitud int not null,
    tipo char(10),
    fecha_solicitud date,
    comentario text,
    cliente int not null,
    constraint pk_solicitudes primary key(id_solicitud),
    constraint fk_cliente foreign key(cliente) 
    references Clientes(cedula_cliente)
);

CREATE TABLE Financiamientos(
    id_financiamiento int not null,
    monto decimal not null,
    interes int not null,
    fecha_solicitud date,
    fecha_aprovacion date,
    constraint pk_id_financiamiento 
    primary key(id_financiamiento),
    constraint fk_interes foreign key(interes)
    references intereses(id_interes)
);

CREATE TABLE Financiamientos_Aprobados(
    id_financiamiento_aprob int not null,
    cliente int not null,
    financiamiento int not null,
    administrador int not null,
    
    constraint pk_financiamientos_aprob
    primary key(id_financiamiento_aprob),
    
    constraint fk_cliente_finanAprob foreign key(cliente)
    references clientes(cedula_cliente),

    constraint fk_financiamientoAprob foreign key(financiamiento)
    references financiamientos(id_financiamiento),

    constraint fk_administrador_FinanAprob foreign key(administrador)
    references administradores(cedula_admin)
    
);

CREATE TABLE Prestamos(
    id_prestamo int not null,
    monto decimal,
    interes int not null,
    fecha_solicitud date,
    fecha_aprovacion date,

    constraint pk_prestamos primary key(id_prestamo),
    constraint fk_interes_prestamos foreign key(interes)
    references intereses(id_interes)
);

CREATE TABLE Prestamos_Aprobados(
    id_prestamo_aprob int not null,
    cliente int not null,
    prestamo int not null,
    administrador int not null,

    constraint pk_prestamosAprob primary key(id_prestamo_aprob),
    
    constraint fk_cliente_PrestAprob foreign key (cliente) 
    references clientes(cedula_cliente),

    constraint fk_prestamo_aprob foreign key (prestamo) 
    references prestamos(id_prestamo),

    constraint fk_administrador foreign key (administrador) 
    references administradores(cedula_admin)
);

DESCRIBE Direcciones;
DESCRIBE Administradores;
DESCRIBE Intereses;
DESCRIBE Clientes;
DESCRIBE Intereses;
DESCRIBE Correos_Enviados;
DESCRIBE Solicitudes;
DESCRIBE Financiamientos;
DESCRIBE Financiamientos_Aprobados;
DESCRIBE Prestamos;
DESCRIBE Prestamos_Aprobados;


SHOW TABLES;
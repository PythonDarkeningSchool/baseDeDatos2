use sales;

CREATE TABLE usuarios (
    id_usuario int IDENTITY(1,1) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    password text NOT NULL,
    fechaCaptura date NOT NULL,
); 

CREATE TABLE categorias (
    id_categoria int IDENTITY(1,1) PRIMARY KEY,
    id_usuario int NOT NULL,
    nombreCategoria VARCHAR(150) NOT NULL,
    fechaCaptura date NOT NULL
);

CREATE TABLE imagenes (
    id_imagen int IDENTITY(1,1) PRIMARY KEY,
    id_categoria int NOT NULL,
    nombre VARCHAR(500) NOT NULL,
    ruta VARCHAR(500) NOT NULL,
    fechaSubida date NOT NULL,
);

CREATE TABLE articulos (
    id_producto int IDENTITY(1,1) PRIMARY KEY,
    id_categoria int NOT NULL,
    id_imagen int NOT NULL,
    id_usuario int NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(500) NOT NULL,
    cantidad int NOT NULL,
    precio float NOT NULL,
    fechaCaptura date NOT NULL,
);

CREATE TABLE clientes(
    id_cliente int IDENTITY(1,1) PRIMARY KEY,
    id_usuario int NOT NULL,
    nombre VARCHAR(200) NOT NULL,
    apellido VARCHAR(200) NOT NULL,
    direccion VARCHAR(200) NOT NULL,
    email VARCHAR(200),
    telefono VARCHAR(200) NOT NULL,
    rfc VARCHAR(200),
);

CREATE TABLE ventas (
    id_venta int IDENTITY(1, 1) PRIMARY KEY,
    id_cliente int NOT NULL,
    id_producto int NOT NULL,
    id_usuario int NOT NULL,
    precio float,
    fechaCompra date NOT NULL,
);
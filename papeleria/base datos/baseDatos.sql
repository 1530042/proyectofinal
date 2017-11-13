create table Empleado ( 
    Usuario varchar(15) primary key,
    Nombre varchar(20) not null,
    ApellidoPaterno varchar(15) not null,
    ApellidoMaterno varchar(15),
    Telefono varchar(10) not null,
    CorreoElectronico varchar(40) not null,
    TipoUsuario varchar(20) not null,
    Contrasena varchar(20) not null,
    Biografia varchar(1000) not null
);

create table Categorias (
	IDCategoria int AUTO_INCREMENT primary key,
	Nombre varchar(50) not null
);

create table Marcas(
	IDMarca int AUTO_INCREMENT primary key,
	Nombre varchar(50) not null
);

create table Productos (
	CodigoBarras varchar(30) primary key,
	Descripcion varchar(150) not null,
	PrecioCosto decimal(7, 2) not null,
	PrecioVenta decimal(7, 2) not null,
	IDCategoria int,
	CantidadMinima int not null,
	IDMarca int,
	FOREIGN KEY(IDCategoria) REFERENCES Categorias(IDCategoria),
	FOREIGN KEY(IDMarca) REFERENCES Marcas(IDMarca) 
);

create table Inventarios (
	IDInventario int AUTO_INCREMENT,
	CodigoBarras varchar(30),
	CantidadActual int not null,
	PRIMARY KEY (IDInventario, CodigoBarras),
	FOREIGN KEY (CodigoBarras) REFERENCES Productos(CodigoBarras)
);

create table Proveedores (
	IDProveedor int AUTO_INCREMENT primary key,
	Nombre varchar(50) not null,
	RFC varchar(15) not null,
	Calle varchar(30),
	Numero varchar(5),
	Colonia varchar(30),
	Ciudad varchar(30),
	Estado varchar(30),
	Telefono char(10)
);


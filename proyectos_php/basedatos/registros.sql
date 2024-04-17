CREATE DATABASE registro_usuarios;
/*Con el USE es para la base de datos principal*/
USE registro_usuarios;

CREATE TABLE registros(
	rut VARCHAR(50) NOT NULL, 
	nombre VARCHAR(50) NOT NULL,
	apellido VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	contraseña VARCHAR(50) NOT NULL,
	PRIMARY KEY(rut)
)charset=latin1;

INSERT INTO registros(rut, nombre, apellido, email, contraseña) VALUES
("194126743", "Mauricio", "Gonzalez", "mauricio@gmail.com", "CL2024"),
("153204209", "Tabita", "Amanda", "tabinda@hotmail.com", "CL2024");
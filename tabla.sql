
CREATE TABLE `users` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`username` varchar(60) NOT NULL,
	`password` varchar(100) NOT NULL,
	`permiso` int (1) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


CREATE TABLE `empresa`(
	`RazonSocial` varchar(70) NOT NULL,
	`nit` varchar(20) NOT NULL,
	`RepLegal` varchar(50) NOT NULL,
	`Actividad` varchar(100) NOT NULL,
	`pais` varchar(30) NOT NULL,
	`telefono` varchar(20) NOT NULL,
	`telefonoFax` varchar(20) NOT NULL,
	`direccion` varchar(80) NOT NULL,
	`correo` varchar(60) NOT NULL,
	PRIMARY KEY(`nit`)
);

CREATE TABLE `natural`(
	`nombre` varchar(70) NOT NULL,
	`apellido` varchar(70) NOT NULL,
	`cedula` varchar(20) NOT NULL,
	`fechaNac` date NOT NULL,
	`sexo` varchar(1) NOT NULL,
	`direccion` varchar(80) NOT NULL,
	`pais` varchar(30) NOT NULL,
	`telefono` varchar(20) NOT NULL,
	`celular` varchar(20) NOT NULL,
	`correo` varchar(60) NOT NULL,
	`tipo` varchar(15) NOT NULL,
	PRIMARY KEY(`cedula`)
);


CREATE TABLE `curso`(
	`id` int(7) NOT NULL,
	`nombre` varchar(120) NOT NULL,
	`estado` varchar(12) NOT NULL,
	`fechaIniInfo` date NOT NULL,
	`fechaFinInfo` date NOT NULL,
	`fechaIniInscripcion` date NOT NULL,
	`fechaFinInscripcion` date NOT NULL,
	`fechaIniCurso` date NOT NULL,
	`fechaFinCurso`	 date NOT NULL,
	`cantInscritos` varchar(2) NOT NULL,
	`cantMatriculados` varchar(2) NOT NULL,
	`descBasica` varchar(150) NOT NULL,	
	`objetivo` varchar(140) NOT NULL,
	`justificacion` varchar(200) NOT NULL,
	`facilitadores` mediumtext, 
	`numConsignacion` varchar(50) NOT NULL,
	PRIMARY KEY(`id`)
)AUTO_INCREMENT=1;

CREATE TABLE `capaon`(
	`id` int(10) NOT NULL,
	`mision` mediumtext NOT NULL,
	`vision` mediumtext NOT NULL,
	`quieneSomos` mediumtext NOT NULL,
	PRIMARY KEY(`id`)
);

CREATE TABLE `contactenos`(
	`id` int(10) NOT NULL,
	`nombre` varchar(80) NOT NULL,
	`correo` varchar(60) NOT NULL,
	`mesaje` mediumtext,
	PRIMARY KEY(`id`)
);
/*
CREATE TABLE ``(
	``
	PRIMARY KEY(``)
);
*/
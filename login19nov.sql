-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2012 a las 02:46:19
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capaon`
--

CREATE TABLE IF NOT EXISTS `capaon` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mision` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `vision` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quieneSomos` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `capaon`
--

INSERT INTO `capaon` (`id`, `mision`, `vision`, `quieneSomos`) VALUES
(3, 'Lograr a través de nuestros servicios, transmitir conocimientos y desarrollar habilidades en los participantes y  ayudar a  formar profesionales capaces de desenvolverse   en  sus  áreas  de trabajo, contribuyendo al éxito personal y de sus organizaciones.', 'Somos  una  empresa  líder  en el mercado nacional dedicada a entregar servicios de capacitación para particulares  o  grupos   empresariales,  contando para ello, con un conjunto de profesionales altamente formados en  diversas  disciplinas que nos permiten brindar un servicio de alta calidad.', 'Somos  una  empresa  líder  en el mercado nacional dedicada a entregar servicios de capacitación para particulares  o  grupos   empresariales,  contando para ello, con un conjunto de profesionales altamente formados en  diversas  disciplinas que nos permiten brindar un servicio de alta calidad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactenos`
--

CREATE TABLE IF NOT EXISTS `contactenos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `mesaje` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) NOT NULL,
  `estado` varchar(12) NOT NULL,
  `fechaIniInfo` date NOT NULL,
  `fechaFinInfo` date NOT NULL,
  `fechaIniInscripcion` date NOT NULL,
  `fechaFinInscripcion` date NOT NULL,
  `fechaIniCurso` date NOT NULL,
  `fechaFinCurso` date NOT NULL,
  `cantInscritos` varchar(2) NOT NULL,
  `cantMatriculados` varchar(2) NOT NULL,
  `descBasica` varchar(300) NOT NULL,
  `objetivo` varchar(300) NOT NULL,
  `justificacion` varchar(200) NOT NULL,
  `facilitadores` mediumtext,
  `numConsignacion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombre`, `estado`, `fechaIniInfo`, `fechaFinInfo`, `fechaIniInscripcion`, `fechaFinInscripcion`, `fechaIniCurso`, `fechaFinCurso`, `cantInscritos`, `cantMatriculados`, `descBasica`, `objetivo`, `justificacion`, `facilitadores`, `numConsignacion`) VALUES
(3, 'Calidad en el Desarrollo de Software', 'Abierto', '2012-11-15', '2012-11-22', '2012-11-23', '2012-12-21', '2013-01-01', '2013-06-07', '', '', 'Describir los conceptos fundamentales de la Calidad del Software desde los diferentes enfoques para establecer la calidad, aplicarla y darle seguimiento a través del rol de revisor de calidad, en el proceso del desarrollo de software y su ciclo de vida.\r\n\r\nEstablecer las bases conceptuales para los ', '1. Reconocer los conceptos básicos de la Calidad del Software en el proceso de desarrollo de software.\r\n\r\n2. Identificar y determinar los enfoques de calidad de software necesarios en una organización, ya sea orientado al producto, al proceso, o en ambos.\r\n\r\n3. Identificar las tareas principales \r\n\r', 'Unidad 1: Conceptos Básicos de la Calidad del Software\r\n\r\nUnidad 2: Calidad del Producto y Calidad del Proceso\r\n\r\nUnidad 3: Aseguramiento de la Calidad del Software (SQA)\r\n\r\nUnidad 4: El Ciclo de Vida', 'información tomada de cursos virtuales del sena ', ''),
(4, 'java eee', 'Abierto', '2012-11-01', '2012-11-09', '2012-11-12', '2012-11-15', '2012-11-20', '2012-11-30', '', '', 'el cursos consta de conocimientos basicos de java eee y su objetivo se centra en el manejo de conexiones', 'aprender sobre el manejo de java ee', 'conocer los principales componentede java ee las librerias y su funcionamiento', 'camilo lopez, lina sanchez, carolina gonzalez, angela valbuena', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `RazonSocial` varchar(70) NOT NULL,
  `nit` varchar(20) NOT NULL DEFAULT '',
  `RepLegal` varchar(50) NOT NULL,
  `Actividad` varchar(100) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `telefonoFax` varchar(20) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `correo` varchar(60) NOT NULL,
  PRIMARY KEY (`nit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`RazonSocial`, `nit`, `RepLegal`, `Actividad`, `pais`, `telefono`, `telefonoFax`, `direccion`, `correo`) VALUES
('dkfjgnd', '43567345', 'sldkjfbnslkdj', 'lkdsjfnsldkjnfb', 'Colombia', '573146651371', '573146651371', 'risaralda pereira', 'dlkfgn@dlkfgn.kfjg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscrito`
--

CREATE TABLE IF NOT EXISTS `inscrito` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_curso` int(5) NOT NULL,
  `cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `creacion` date NOT NULL,
  `actualizar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `inscrito`
--

INSERT INTO `inscrito` (`id`, `id_curso`, `cedula`, `tipo`, `estado`, `creacion`, `actualizar`, `nombre`, `correo`, `telefono`) VALUES
(1, 3, '435673', 'natural', 'matriculado', '0000-00-00', '0000-00-00 00:00:00', 'Camilo Andres', 'correo@cor.com', '1234567'),
(2, 4, '435673', 'natural', 'matriculado', '0000-00-00', '0000-00-00 00:00:00', '', '', ''),
(3, 4, '11111', 'empleado', 'matriculado', '0000-00-00', '0000-00-00 00:00:00', 'rosa aponte', 'vall@hotma.com', '67788299297'),
(4, 4, '2223312', 'natural', 'matriculado', '0000-00-00', '0000-00-00 00:00:00', 'maria valbuena', 'valluuuuu@hotma.com', '6778829929');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `natural`
--

CREATE TABLE IF NOT EXISTS `natural` (
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
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `natural`
--

INSERT INTO `natural` (`nombre`, `apellido`, `cedula`, `fechaNac`, `sexo`, `direccion`, `pais`, `telefono`, `celular`, `correo`, `tipo`) VALUES
('rosa', 'aponte', '11111', '2012-11-21', 'f', 'hshjshjs hshshkwk', 'hapskd lkdk dklk', '567844347', '67788299297', 'valluuuuu89@hotma.com', 'empleado'),
('angela', 'valbuena', '1116235', '0000-00-00', 'f', 'car 78 87', 'colombia', '3451920', '5679804325', 'vall@hotma.com', 'natural'),
('angela', 'valbuena', '18566667', '2012-11-14', 'f', 'car 78 87', 'colombia', '3451920', '5679804325', 'vall@hotma.com', 'natural'),
('maria', 'valbuena', '2223312', '2012-11-15', 'f', 'hshjshjs hshsh', 'gahgdshgs', '56784434', '6778829929', 'valluuuuu@hotma.com', 'natural'),
('Camilo Andres', 'Lopez', '435673', '2012-11-17', 'm', 'risaralda pereira', 'Colombia', '573146651371', '1234567', 'correo@cor.com', 'natural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `permiso` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permiso`) VALUES
(1, 'capaon@hotmail.com', 'fc9fd0226beb58761a8acde44e106bee', 0),
(2, 'dlkfgn@dlk', 'fcea920f7412b5da7be0cf42b8c93759', 1),
(3, 'correo@cor.com', 'fcea920f7412b5da7be0cf42b8c93759', 2),
(4, 'vall@hotma.com', '5124d1c68ad5adc62b07ef39570cf7a3', 2),
(5, 'vall@hotma.com', 'fcea920f7412b5da7be0cf42b8c93759', 2),
(6, 'valluuuuu@hotma.com', 'fcea920f7412b5da7be0cf42b8c93759', 2),
(7, 'valluuuuu89@hotma.com', '25f9e794323b453885f5181f1b624d0b', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

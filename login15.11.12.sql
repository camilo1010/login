-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-11-2012 a las 14:30:50
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
('Camilo Andres', 'Lopez', '435673', '0000-00-00', 'm', 'risaralda pereira', 'Colombia', '573146651371', '1234567', 'correo@cor.com', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permiso`) VALUES
(1, 'camilo', '231badb19b93e44f47da1bd64a8147f2', 0),
(2, 'dlkfgn@dlk', 'fcea920f7412b5da7be0cf42b8c93759', 1),
(3, 'correo@cor.com', 'fcea920f7412b5da7be0cf42b8c93759', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

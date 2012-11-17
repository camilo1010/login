-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-11-2012 a las 17:47:16
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
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(7) NOT NULL,
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
  `descBasica` varchar(150) NOT NULL,
  `objetivo` varchar(140) NOT NULL,
  `justificacion` varchar(200) NOT NULL,
  `facilitadores` mediumtext,
  `numConsignacion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombre`, `estado`, `fechaIniInfo`, `fechaFinInfo`, `fechaIniInscripcion`, `fechaFinInscripcion`, `fechaIniCurso`, `fechaFinCurso`, `cantInscritos`, `cantMatriculados`, `descBasica`, `objetivo`, `justificacion`, `facilitadores`, `numConsignacion`) VALUES
(0, 'seguridad in', 'Abierto', '2012-11-08', '2012-11-30', '2012-11-21', '2013-01-09', '2013-01-24', '2013-01-31', '', '', 'holhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

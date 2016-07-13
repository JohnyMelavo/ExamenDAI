-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2016 a las 03:20:23
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `postulantes`
--
CREATE DATABASE IF NOT EXISTS `postulantes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `postulantes`;

-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla `comunas`
--

CREATE TABLE IF NOT EXISTS `comunas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(70) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`id`, `descripcion`) VALUES
(1, 'Alhue'),
(2, 'Buin'),
(3, 'Calera de Tango'),
(4, 'Cerrillos'),
(5, 'Cerro Navia'),
(6, 'Colina'),
(7, 'Conchali'),
(8, 'Curacavi'),
(9, 'El Bosque '),
(10, 'El Monte'),
(11, 'Estacion Central '),
(12, 'Huechuraba'),
(13, 'Independencia'),
(14, 'Isla de Maipo'),
(15, 'Lampa'),
(16, 'La Cisterna'),
(17, 'La Florida'),
(18, 'La Granja'),
(19, 'La Pintana'),
(20, 'La Reina'),
(21, 'Las Condes'),
(22, 'Lo Barnechea'),
(23, 'Lo Espejo'),
(24, 'Lo Prado'),
(25, 'Macul'),
(26, 'Maipu'),
(27, 'Maríi Pinto'),
(28, 'Melipilla'),
(29, 'Nunoa'),
(30, 'Tiltil'),
(31, 'Padre Hurtado'),
(32, 'Pedro Aguirre Cerda'),
(33, 'Penaflor'),
(34, 'Penalolen'),
(35, 'Pirque'),
(36, 'Providencia'),
(37, 'Pudahuel'),
(38, 'Puente Alto'),
(39, 'Talagante'),
(40, 'San Ramon'), 
(41, 'San Bernardo'),
(42, 'San Miguel'),
(43, 'San Joaquin'),
(44, 'San Jose de Maipo'),
(45, 'Santiago'),
(46, 'San Pedro'),
(47, 'Paine'),
(48, 'Quilicura'),
(49, 'Quinta Normal'),
(50, 'Recoleta'),
(51, 'Renca'),
(52, 'Renca'),
(53, 'Vitacura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE IF NOT EXISTS `educacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `educacion`
--

INSERT INTO `educacion` (`id`, `descripcion`) VALUES
(0, 'No Posee'),
(1, 'Profesional'),
(2, 'Tecnico'),
(3, 'Media'),
(4, 'Basica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE IF NOT EXISTS `modalidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`id`, `descripcion`) VALUES
(1, 'Diurna'),
(2, 'Vespertina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `descripcion`) VALUES
(1, 'Java'),
(2, '.NET'),
(3, 'PHP');

-- --------------------------------------------------------



--
-- Estructura de tabla para la tabla `estadoSolicitud`
--

CREATE TABLE IF NOT EXISTS `estadoSolicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `estadoSolicitud`
--

INSERT INTO `estadoSolicitud` (`id`, `descripcion`) VALUES
(1, 'Estado Pendiente'),
(2, 'Estado Aprobado'),
(3, 'Estado Rechazado');

-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `apellido_pat` varchar(255) NOT NULL,
  `apellido_mat` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `telefono` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `id_comuna` int(5) NOT NULL,
  `educacion` int(5) NOT NULL,
  `experiencia` boolean NOT NULL,
  `experiencia_anios` int(5),
  `modalidad` int(11) NOT NULL,
  `curso` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  FOREIGN KEY (`id_comuna`) REFERENCES comunas(`id`),
  FOREIGN KEY (`educacion`) REFERENCES educacion(`id`),
  FOREIGN KEY (`modalidad`) REFERENCES modalidad(`id`),
  FOREIGN KEY (`curso`) REFERENCES curso(`id`),
  FOREIGN KEY (`estado`) REFERENCES estadoSolicitud(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `rut`, `nombre`, `password`, `apellido_pat`, `apellido_mat`, `fecha_nacimiento`, `sexo`, `telefono`, `email`, `direccion`, `id_comuna`, `educacion`, `experiencia`, `experiencia_anios`, `modalidad`, `curso`, `user_created_at`) VALUES
(5, '123456789', 'Admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin', 'Administrador', '2016-06-09', 'X', 123456789, 'admin@admin.admin', 'calle falsa 123', 15, 1, true, 15, 1, 1, '2016-06-09 00:24:49'),
(6, '177008796', 'Joseph', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Perez', 'Carmona', '1991-03-26', 'M', 50010078, 'jose.perez@peluka.info', 'antonio varas 666', 20, 2, true, 2, 2, 2, '2016-06-30 16:59:35'),
(7, '186948483', 'Jonathan', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Espinoza', 'Brain', '1994-01-01', 'M', 23004500, 'jonathanespinozab@gmail.com', 'antonio varas 666', 35, 3, false, 0, 2, 3, '2016-06-30 16:59:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

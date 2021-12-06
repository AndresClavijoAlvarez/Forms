-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-07-2012 a las 16:47:24
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `forms`
--
CREATE DATABASE `forms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `forms`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

DROP TABLE IF EXISTS `almacen`;
CREATE TABLE IF NOT EXISTS `almacen` (
  `almacen_codigo` varchar(6) NOT NULL,
  `almacen_nombre` varchar(30) NOT NULL,
  `almacen_ciudad` varchar(6) NOT NULL,
  `almacen_zona` varchar(3) NOT NULL,
  PRIMARY KEY (`almacen_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`almacen_codigo`, `almacen_nombre`, `almacen_ciudad`, `almacen_zona`) VALUES
('6601', 'Pereira Plazoleta', '66001', 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `perfil_codigo` varchar(1) NOT NULL,
  `perfil_nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`perfil_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`perfil_codigo`, `perfil_nombre`) VALUES
('S', 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_usuario` varchar(30) NOT NULL,
  `usuario_contraseña` varchar(30) NOT NULL,
  `usuario_perfil` varchar(1) NOT NULL,
  PRIMARY KEY (`usuario_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_usuario`, `usuario_contraseña`, `usuario_perfil`) VALUES
('sistemas', '-b12345', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

DROP TABLE IF EXISTS `zona`;
CREATE TABLE IF NOT EXISTS `zona` (
  `zona_zona` varchar(3) NOT NULL,
  `zona_nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`zona_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`zona_zona`, `zona_nombre`) VALUES
('I', 'ZONA I (Eje Cafetero y Sur)'),
('II', 'ZONA II (Antioquia y Centro)'),
('III', 'ZONA III (Bogotá y Alrededores)'),
('IV', 'ZONA IV (Santanderes)'),
('V', 'ZONA V (Costa sin Cartagena)'),
('VI', 'ZONA VI (Cartagena)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

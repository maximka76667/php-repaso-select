-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `descargas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE IF NOT EXISTS `programas` (
  `nombre` varchar(100) NOT NULL,
  `version` varchar(15) NOT NULL,
  `descripcion` text NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `votos` int(11) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `descargas` bigint(11) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`nombre`, `version`, `descripcion`, `puntuacion`, `votos`, `fecha_publicacion`, `descargas`) VALUES
('AIMP', '3.50.1277', 'Experimenta una calidad de audio impresionante', 5, 6000, '2013-04-09', 125268),
('Ares', '2.2.4', 'Descarga todo tipo de archivos', 5, 3000, '2010-06-08', 268007),
('Recuva', '1.47.948', 'Recupera archivos borrados sin querer', 3, 1000, '2009-06-16', 2500),
('Spotify', '0.9.0.153', 'Escucha y comparte tu música cuando quieras', 4, 1500, '2012-11-12', 458975),
('uTorrent', '3.3.0.29677', 'El cliente Torrent más rápido y ligero', 4, 3000, '2009-06-21', 398741),
('VLC media player', '2.0.7', 'El mejor reproductor gratuito de vídeo', 5, 10000, '2007-03-13', 689745);

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

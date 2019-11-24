-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2019 a las 08:28:35
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fenologia_UNAM`
--
CREATE DATABASE IF NOT EXISTS `fenologia_UNAM` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fenologia_UNAM`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivos`
--

DROP TABLE IF EXISTS `cultivos`;
CREATE TABLE IF NOT EXISTS `cultivos` (
  `id_cultivo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cultivo`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivos`
--

INSERT INTO `cultivos` (`id_cultivo`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'si soy de rancho', NULL, '2019-11-24 07:18:38', '2019-11-24 07:18:38'),
(2, 'holaaa', '2019-11-24 07:17:11', '2019-11-24 07:17:11', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidad`
--

DROP TABLE IF EXISTS `disponibilidad`;
CREATE TABLE IF NOT EXISTS `disponibilidad` (
  `id_disponible` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_disponible`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'ahuevo que si', '2019-11-24 08:19:00', '2019-11-24 08:21:40', '2019-11-24 08:21:40'),
(3, 'Israel Loza Alvarado', '2019-11-24 08:26:50', '2019-11-24 08:27:50', '2019-11-24 08:27:50'),
(4, 'Cesar Primero', '2019-11-24 08:28:14', '2019-11-24 08:28:14', NULL),
(5, 'Fernanda Loza', '2019-11-24 08:28:21', '2019-11-24 08:28:21', NULL),
(6, 'Valeria Loza', '2019-11-24 08:28:29', '2019-11-24 08:28:29', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_extremos`
--

DROP TABLE IF EXISTS `eventos_extremos`;
CREATE TABLE IF NOT EXISTS `eventos_extremos` (
  `id_evento_extremo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_evento_extremo`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos_extremos`
--

INSERT INTO `eventos_extremos` (`id_evento_extremo`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lluvia con Granizo', '2019-11-24 06:56:49', '2019-11-24 06:56:49', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos_metereologicos`
--

DROP TABLE IF EXISTS `eventos_metereologicos`;
CREATE TABLE IF NOT EXISTS `eventos_metereologicos` (
  `id_eventometereo` int(11) NOT NULL AUTO_INCREMENT,
  `id_evento_extremo` int(11) DEFAULT NULL,
  `id_disponible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventometereo`),
  KEY `id_disponible` (`id_disponible`),
  KEY `id_evento_extremo` (`id_evento_extremo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fases_fenologicas`
--

DROP TABLE IF EXISTS `fases_fenologicas`;
CREATE TABLE IF NOT EXISTS `fases_fenologicas` (
  `id_fasefeno` int(11) NOT NULL AUTO_INCREMENT,
  `id_cultivo` int(11) DEFAULT NULL,
  `id_frutal` int(11) DEFAULT NULL,
  `id_forestalconif` int(11) DEFAULT NULL,
  `id_forestalhojaancha` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_fasefeno`),
  KEY `id_cultivo` (`id_cultivo`),
  KEY `id_frutal` (`id_frutal`),
  KEY `id_forestalconif` (`id_forestalconif`),
  KEY `id_forestalhojaancha` (`id_forestalhojaancha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faunas_migratorias`
--

DROP TABLE IF EXISTS `faunas_migratorias`;
CREATE TABLE IF NOT EXISTS `faunas_migratorias` (
  `id_fauna_migratoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `id_disponible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_fauna_migratoria`),
  KEY `id_disponible` (`id_disponible`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forestales_coniferas`
--

DROP TABLE IF EXISTS `forestales_coniferas`;
CREATE TABLE IF NOT EXISTS `forestales_coniferas` (
  `id_forestalconif` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_forestalconif`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `forestales_coniferas`
--

INSERT INTO `forestales_coniferas` (`id_forestalconif`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ererer', '2019-11-24 07:35:13', '2019-11-24 07:37:15', '2019-11-24 07:37:15'),
(2, 'hola perro', '2019-11-24 07:37:38', '2019-11-24 08:32:41', '2019-11-24 08:32:41'),
(3, 'como estas', '2019-11-24 07:37:45', '2019-11-24 08:33:35', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forestales_hojas_anchas`
--

DROP TABLE IF EXISTS `forestales_hojas_anchas`;
CREATE TABLE IF NOT EXISTS `forestales_hojas_anchas` (
  `id_forestalhojaancha` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_forestalhojaancha`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `forestales_hojas_anchas`
--

INSERT INTO `forestales_hojas_anchas` (`id_forestalhojaancha`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'OKKKK\n', NULL, NULL, NULL),
(2, 'Orale vaaa', '2019-11-24 08:02:36', '2019-11-24 08:02:36', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formatos_finales_observaciones`
--

DROP TABLE IF EXISTS `formatos_finales_observaciones`;
CREATE TABLE IF NOT EXISTS `formatos_finales_observaciones` (
  `id_formato_final` int(11) NOT NULL AUTO_INCREMENT,
  `id_formato_observacion` int(11) DEFAULT NULL,
  `id_informacion_anual` int(11) DEFAULT NULL,
  `id_percepcioncambioclimatico` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_formato_final`),
  KEY `id_formato_observacion` (`id_formato_observacion`),
  KEY `id_informacion_anual` (`id_informacion_anual`),
  KEY `id_percepcioncambioclimatico` (`id_percepcioncambioclimatico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_de_observacion`
--

DROP TABLE IF EXISTS `formato_de_observacion`;
CREATE TABLE IF NOT EXISTS `formato_de_observacion` (
  `id_formato_observacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_disponible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_formato_observacion`),
  KEY `id_disponible` (`id_disponible`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frutales`
--

DROP TABLE IF EXISTS `frutales`;
CREATE TABLE IF NOT EXISTS `frutales` (
  `id_frutal` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_frutal`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frutales`
--

INSERT INTO `frutales` (`id_frutal`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Manzanas', NULL, '2019-11-24 01:12:02', '2019-11-24 01:12:02'),
(2, 'Nisperos', NULL, '2019-11-24 13:07:02', '2019-11-24 13:07:02'),
(3, 'Naranjas', '2019-11-24 00:57:19', '2019-11-24 00:57:19', NULL),
(4, 'Peras', '2019-11-24 01:02:48', '2019-11-24 01:02:48', NULL),
(5, 'Tunas', '2019-11-24 13:02:28', '2019-11-24 13:02:28', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hongos`
--

DROP TABLE IF EXISTS `hongos`;
CREATE TABLE IF NOT EXISTS `hongos` (
  `id_hongo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `id_disponible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_hongo`),
  KEY `id_disponible` (`id_disponible`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informaciones_anuales`
--

DROP TABLE IF EXISTS `informaciones_anuales`;
CREATE TABLE IF NOT EXISTS `informaciones_anuales` (
  `id_informacion_anual` int(11) NOT NULL AUTO_INCREMENT,
  `id_temporada` int(11) DEFAULT NULL,
  `vegetacion` varchar(100) DEFAULT NULL,
  `fauna` varchar(100) DEFAULT NULL,
  `id_fauna_migratoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_informacion_anual`),
  KEY `id_temporada` (`id_temporada`),
  KEY `id_fauna_migratoria` (`id_fauna_migratoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones_complementarias`
--

DROP TABLE IF EXISTS `observaciones_complementarias`;
CREATE TABLE IF NOT EXISTS `observaciones_complementarias` (
  `id_observacionc` int(11) NOT NULL AUTO_INCREMENT,
  `id_hongo` int(11) DEFAULT NULL,
  `id_polinizador` int(11) DEFAULT NULL,
  `id_plaga` int(11) DEFAULT NULL,
  `id_eventometereo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_observacionc`),
  KEY `id_hongo` (`id_hongo`),
  KEY `id_polinizador` (`id_polinizador`),
  KEY `id_plaga` (`id_plaga`),
  KEY `id_eventometereo` (`id_eventometereo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `percepciones_cambios_climaticos`
--

DROP TABLE IF EXISTS `percepciones_cambios_climaticos`;
CREATE TABLE IF NOT EXISTS `percepciones_cambios_climaticos` (
  `id_percepcioncambioclimatico` int(11) NOT NULL AUTO_INCREMENT,
  `clima_vegetacion` varchar(100) DEFAULT NULL,
  `cantidad_hongos` int(11) DEFAULT NULL,
  `meses_lluvias_anteriores` int(11) DEFAULT NULL,
  `meses_heladas_anteriores` int(11) DEFAULT NULL,
  `lluvias_sequias_heladas_anteriores` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_percepcioncambioclimatico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plagas`
--

DROP TABLE IF EXISTS `plagas`;
CREATE TABLE IF NOT EXISTS `plagas` (
  `id_plaga` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `id_disponible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_plaga`),
  KEY `id_disponible` (`id_disponible`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `polinizadores`
--

DROP TABLE IF EXISTS `polinizadores`;
CREATE TABLE IF NOT EXISTS `polinizadores` (
  `id_polinizador` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `id_disponible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_polinizador`),
  KEY `id_disponible` (`id_disponible`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros_semanales`
--

DROP TABLE IF EXISTS `registros_semanales`;
CREATE TABLE IF NOT EXISTS `registros_semanales` (
  `id_registrosem` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(25) DEFAULT NULL,
  `rancheria` varchar(50) DEFAULT NULL,
  `nombre_comunidad` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `nombre_especie` varchar(50) DEFAULT NULL,
  `id_fasefeno` int(11) DEFAULT NULL,
  `id_observacionc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_registrosem`),
  UNIQUE KEY `correo` (`correo`),
  KEY `id_estado` (`id_estado`),
  KEY `id_fasefeno` (`id_fasefeno`),
  KEY `id_observacionc` (`id_observacionc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporadas`
--

DROP TABLE IF EXISTS `temporadas`;
CREATE TABLE IF NOT EXISTS `temporadas` (
  `id_temporada` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  PRIMARY KEY (`id_temporada`),
  KEY `id_tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

DROP TABLE IF EXISTS `tipos`;
CREATE TABLE IF NOT EXISTS `tipos` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hello', NULL, '2019-11-24 04:06:58', '2019-11-24 04:06:58'),
(2, 'Isra', '2019-11-24 04:06:10', '2019-11-24 04:06:10', NULL),
(3, 'helloss', '2019-11-24 04:10:12', '2019-11-24 06:58:15', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `eventos_metereologicos`
--
ALTER TABLE `eventos_metereologicos`
  ADD CONSTRAINT `eventos_metereologicos_ibfk_1` FOREIGN KEY (`id_disponible`) REFERENCES `disponibilidad` (`id_disponible`),
  ADD CONSTRAINT `eventos_metereologicos_ibfk_2` FOREIGN KEY (`id_evento_extremo`) REFERENCES `eventos_extremos` (`id_evento_extremo`);

--
-- Filtros para la tabla `fases_fenologicas`
--
ALTER TABLE `fases_fenologicas`
  ADD CONSTRAINT `fases_fenologicas_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`),
  ADD CONSTRAINT `fases_fenologicas_ibfk_2` FOREIGN KEY (`id_frutal`) REFERENCES `frutales` (`id_frutal`),
  ADD CONSTRAINT `fases_fenologicas_ibfk_3` FOREIGN KEY (`id_forestalconif`) REFERENCES `forestales_coniferas` (`id_forestalconif`),
  ADD CONSTRAINT `fases_fenologicas_ibfk_4` FOREIGN KEY (`id_forestalhojaancha`) REFERENCES `forestales_hojas_anchas` (`id_forestalhojaancha`);

--
-- Filtros para la tabla `faunas_migratorias`
--
ALTER TABLE `faunas_migratorias`
  ADD CONSTRAINT `faunas_migratorias_ibfk_1` FOREIGN KEY (`id_disponible`) REFERENCES `disponibilidad` (`id_disponible`);

--
-- Filtros para la tabla `formatos_finales_observaciones`
--
ALTER TABLE `formatos_finales_observaciones`
  ADD CONSTRAINT `formatos_finales_observaciones_ibfk_1` FOREIGN KEY (`id_formato_observacion`) REFERENCES `formato_de_observacion` (`id_formato_observacion`),
  ADD CONSTRAINT `formatos_finales_observaciones_ibfk_2` FOREIGN KEY (`id_informacion_anual`) REFERENCES `informaciones_anuales` (`id_informacion_anual`),
  ADD CONSTRAINT `formatos_finales_observaciones_ibfk_3` FOREIGN KEY (`id_percepcioncambioclimatico`) REFERENCES `percepciones_cambios_climaticos` (`id_percepcioncambioclimatico`);

--
-- Filtros para la tabla `formato_de_observacion`
--
ALTER TABLE `formato_de_observacion`
  ADD CONSTRAINT `formato_de_observacion_ibfk_1` FOREIGN KEY (`id_disponible`) REFERENCES `disponibilidad` (`id_disponible`);

--
-- Filtros para la tabla `hongos`
--
ALTER TABLE `hongos`
  ADD CONSTRAINT `hongos_ibfk_1` FOREIGN KEY (`id_disponible`) REFERENCES `disponibilidad` (`id_disponible`);

--
-- Filtros para la tabla `informaciones_anuales`
--
ALTER TABLE `informaciones_anuales`
  ADD CONSTRAINT `informaciones_anuales_ibfk_1` FOREIGN KEY (`id_temporada`) REFERENCES `temporadas` (`id_temporada`),
  ADD CONSTRAINT `informaciones_anuales_ibfk_2` FOREIGN KEY (`id_fauna_migratoria`) REFERENCES `faunas_migratorias` (`id_fauna_migratoria`);

--
-- Filtros para la tabla `observaciones_complementarias`
--
ALTER TABLE `observaciones_complementarias`
  ADD CONSTRAINT `observaciones_complementarias_ibfk_1` FOREIGN KEY (`id_hongo`) REFERENCES `hongos` (`id_hongo`),
  ADD CONSTRAINT `observaciones_complementarias_ibfk_2` FOREIGN KEY (`id_polinizador`) REFERENCES `hongos` (`id_hongo`),
  ADD CONSTRAINT `observaciones_complementarias_ibfk_3` FOREIGN KEY (`id_plaga`) REFERENCES `plagas` (`id_plaga`),
  ADD CONSTRAINT `observaciones_complementarias_ibfk_4` FOREIGN KEY (`id_eventometereo`) REFERENCES `eventos_metereologicos` (`id_eventometereo`);

--
-- Filtros para la tabla `plagas`
--
ALTER TABLE `plagas`
  ADD CONSTRAINT `plagas_ibfk_1` FOREIGN KEY (`id_disponible`) REFERENCES `disponibilidad` (`id_disponible`);

--
-- Filtros para la tabla `polinizadores`
--
ALTER TABLE `polinizadores`
  ADD CONSTRAINT `polinizadores_ibfk_1` FOREIGN KEY (`id_disponible`) REFERENCES `disponibilidad` (`id_disponible`);

--
-- Filtros para la tabla `registros_semanales`
--
ALTER TABLE `registros_semanales`
  ADD CONSTRAINT `registros_semanales_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`),
  ADD CONSTRAINT `registros_semanales_ibfk_2` FOREIGN KEY (`id_fasefeno`) REFERENCES `fases_fenologicas` (`id_fasefeno`),
  ADD CONSTRAINT `registros_semanales_ibfk_3` FOREIGN KEY (`id_observacionc`) REFERENCES `observaciones_complementarias` (`id_observacionc`);

--
-- Filtros para la tabla `temporadas`
--
ALTER TABLE `temporadas`
  ADD CONSTRAINT `temporadas_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipos` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-09-2024 a las 22:01:21
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecn1_docente`
--
CREATE DATABASE IF NOT EXISTS `ecn1_docente` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `ecn1_docente`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

DROP TABLE IF EXISTS `agentes`;
CREATE TABLE IF NOT EXISTS `agentes` (
  `id_rh` int NOT NULL,
  `apellido_Nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `cuil` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` int NOT NULL,
  `ficha` int NOT NULL,
  `IngresoEst` date NOT NULL,
  `ultima_DJ` date NOT NULL,
  `en_actividad` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_rh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`id_rh`, `apellido_Nombre`, `cuil`, `dni`, `ficha`, `IngresoEst`, `ultima_DJ`, `en_actividad`) VALUES
(1, '7U7E', '20-14686314-1', 14686314, 447457, '2024-09-12', '2024-09-01', 0),
(27, 'Celeste ', '202721542154', 53418187, 123321, '2024-09-10', '2024-09-08', 1),
(12543, 'Daloy, daiana analia', '23-84789324-1', 47584548, 127548, '2024-09-04', '2024-09-04', 1),
(1065140, 'Arnau, Matias Ezequiel', '20-27774958-1', 27774958, 446904, '2010-04-12', '1981-08-10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

DROP TABLE IF EXISTS `asignaturas`;
CREATE TABLE IF NOT EXISTS `asignaturas` (
  `asignatura` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `1º año` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `2º año` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `3º año` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `4º año` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `5º año` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`asignatura`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`asignatura`, `codigo`, `1º año`, `2º año`, `3º año`, `4º año`, `5º año`) VALUES
('ALFARERIA Y MAOSAICO', '5093-316', '', '', '', '3 hs', ''),
('ARTE PUBLICO, PROD.CERAMICA Y GESTION CULTURAL', '9209-316', '', '', '', '', '6 hs'),
('ARTE,CULTURA Y SOCIEDAD ', '696-316', '', '', '', '', '4 hs'),
('ARTES MUSICA ', '3026-9991', '3 hs', '3hs', '', '', ''),
('ARTES TEATRO', '3027-9991', '3 hs ', '3 hs', '', '', ''),
('ARTES VISUALES Y MULTIMEDIA', '3608-316', '', '', '', '3 hs', ''),
('BIOLOGIA ', '6015-9991', '4 hs', '4 hs', '3 hs', '', ''),
('DIBUJO', '6055-316', '2 hs', '2 hs', '3 hs', '4 hs', '4 hs'),
('ECONOMIA', '6065-9000', '', '', '3 hs', '', ''),
('ED. FISICA', '60681-9991', '3 hs', '3 hs', '3 hs', '3 hs', '3 hs'),
('ED. TECNOLOGIA', '4835-9991', '2 hs', '2 hs', '', '', ''),
('EDUCACION CIUDADANA ', '6062 ( ?)', '2 hs ', '2 hs', '', '', ''),
('ESMALTADO SOBRE METAL Y VITRAL', '3950-316', '', '', '', '', '3 hs'),
('EXTRA CLASE', '', '', '', '', '', ''),
('FILOSOFIA ', '6095-9000', '', '', '', '', '2 hs'),
('FISICA', '6099-9991', '', '', '', '3 hs', ''),
('FISICO QUIMICA', '6102-9000', '', '', '4 hs', '', ''),
('FORMACION ETICA Y CIUDADANA', '5620-9991', '', '', '2 hs ', '2 hs', '2 hs'),
('GEOGRAFIA', '6107-9991', '3 hs', '3 hs', '2 hs', '2 hs', ''),
('Grupo 1 F', '', '', '', '', '', ''),
('Grupo 1 M', '', '', '', '', '', ''),
('Grupo 2 F', '', '', '', '', '', ''),
('Grupo 2 M', '', '', '', '', '', ''),
('Grupo 3 F', '', '', '', '', '', ''),
('Grupo 3 M', '', '', '', '', '', ''),
('Grupo 4 F', '', '', '', '', '', ''),
('Grupo 4 M', '', '', '', '', '', ''),
('Grupo 5 F', '', '', '', '', '', ''),
('Grupo 5 M', '', '', '', '', '', ''),
('Grupo 6 F', '', '', '', '', '', ''),
('Grupo 6 M', '', '', '', '', '', ''),
('Grupo 7 F', '', '', '', '', '', ''),
('Grupo 7 M', '', '', '', '', '', ''),
('Grupo 8 F', '', '', '', '', '', ''),
('Grupo 8 M', '', '', '', '', '', ''),
('Grupo 9 F', '', '', '', '', '', ''),
('Grupo 9 M', '', '', '', '', '', ''),
('HISTORIA ', '6116-9991', '4 hs', '4 hs', '2 hs', '2 hs', ''),
('HISTORIA DE LAS ARTES', '3437-316', '', '', '', '4 hs', ''),
('HISTORIA ORIENTADA', '3432', '', '', '', '', '2 hs'),
('LENGUA Y LITERATURA', '6152-9991', '5 hs ', '5 hs', '4 hs', '4 hs', '4 hs'),
('LENGUAJE VISUAL', '2064-316', '2 hs ', '2 hs ', '2 hs ', '', ''),
('LENGUAJES COMBINADOS', '3435-316', '', '', '3 hs ', '', ''),
('LENGUAS ADICIONALES FRANCES', '300002-9991', '4 hs ', '4 hs ', '3 hs ', '3 hs ', '3 hs '),
('LENGUAS ADICIONALES INGLES', '300003-9991', '4 hs ', '4 hs ', '3 hs', '3 hs', '3 hs'),
('MATEMATICA', '6169-9991', '5 hs', '5 hs', '4 hs', '4 hs', '4 hs'),
('PROFUNDIZACION NES HS 162', '', '', '', '', '', ''),
('QUIMICA ', '6229-9000', '', '', '', '', '4 hs'),
('TALLER CERAMICO', '6247-2', '6 hs ', '6 hs', '8 hs', '10 hs', '10 hs'),
('TECNOLOGIA CERAMICA', '6264-316', '', '', '', '', '2 hs'),
('TECNOLOGIA DE LA INFORMACION', '1598-9000', '', '', '2 hs ', '2 hs', '2 hs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

DROP TABLE IF EXISTS `familia`;
CREATE TABLE IF NOT EXISTS `familia` (
  `id_familia` int NOT NULL AUTO_INCREMENT,
  `id_rh` int NOT NULL,
  `parentesco` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  PRIMARY KEY (`id_familia`),
  KEY `rel_familia` (`id_rh`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id_familia`, `id_rh`, `parentesco`, `nombre`, `apellido`, `fecha_nac`) VALUES
(1, 1065140, 'hija', 'Celeste', 'Arnau Daloy', '2013-08-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_agente`
--

DROP TABLE IF EXISTS `ficha_agente`;
CREATE TABLE IF NOT EXISTS `ficha_agente` (
  `id_ficha` int NOT NULL AUTO_INCREMENT,
  `id_rh` int NOT NULL,
  `domicilio` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `localidad` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cp` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel_fijo` int NOT NULL,
  `tel_celular` int NOT NULL,
  `correoElectrinico_Bue` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correoElectronico_alt` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_ficha`),
  KEY `ficha_agente_ibfk_1` (`id_rh`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ficha_agente`
--

INSERT INTO `ficha_agente` (`id_ficha`, `id_rh`, `domicilio`, `localidad`, `cp`, `tel_fijo`, `tel_celular`, `correoElectrinico_Bue`, `correoElectronico_alt`) VALUES
(1, 1065140, 'Av. Montes de Oca 511 piso 11 dto C', 'Barracas / Caba', '1270', 0, 1155069327, 'matias.arnau@bue.edu.ar', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pof`
--

DROP TABLE IF EXISTS `pof`;
CREATE TABLE IF NOT EXISTS `pof` (
  `id_pof` int NOT NULL,
  `id_rh` int NOT NULL,
  `rol` int NOT NULL,
  `fecha_inicio_rol` date NOT NULL,
  `fecha_fin_rol` date NOT NULL,
  `situacion` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `doc_respaldatoria_alta` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `horas` int NOT NULL,
  `tipo_de_hora` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_puesto` int NOT NULL,
  `pxc` tinyint(1) NOT NULL,
  `lic_en_este_cargo` tinyint(1) NOT NULL,
  `tipo_lic` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `comp_tp` int NOT NULL,
  `Doc_remplazado` int NOT NULL,
  `Puesto_nro` int NOT NULL,
  PRIMARY KEY (`id_pof`),
  KEY `rel_pof` (`id_rh`),
  KEY `rel_situacion` (`situacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pof`
--

INSERT INTO `pof` (`id_pof`, `id_rh`, `rol`, `fecha_inicio_rol`, `fecha_fin_rol`, `situacion`, `doc_respaldatoria_alta`, `horas`, `tipo_de_hora`, `id_puesto`, `pxc`, `lic_en_este_cargo`, `tipo_lic`, `comp_tp`, `Doc_remplazado`, `Puesto_nro`) VALUES
(0, 1065140, 12, '0000-00-00', '0000-00-00', 'Titular', '', 0, '', 0, 0, 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion`
--

DROP TABLE IF EXISTS `situacion`;
CREATE TABLE IF NOT EXISTS `situacion` (
  `id_situacion` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `situacion` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`situacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `situacion`
--

INSERT INTO `situacion` (`id_situacion`, `situacion`) VALUES
('6', 'Docentes Interinos Especiales'),
('7', 'E.D.I - Espacio Definición Institucional'),
('8', 'Int. con Hcat (Tutores)'),
('3', 'Interino'),
('0', 'No Docente'),
('4', 'Suplente'),
('2', 'Titular'),
('5', 'Transitorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `familia`
--
ALTER TABLE `familia`
  ADD CONSTRAINT `rel_familia` FOREIGN KEY (`id_rh`) REFERENCES `agentes` (`id_rh`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `ficha_agente`
--
ALTER TABLE `ficha_agente`
  ADD CONSTRAINT `ficha_agente_ibfk_1` FOREIGN KEY (`id_rh`) REFERENCES `agentes` (`id_rh`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `pof`
--
ALTER TABLE `pof`
  ADD CONSTRAINT `rel_pof` FOREIGN KEY (`id_rh`) REFERENCES `agentes` (`id_rh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rel_situacion` FOREIGN KEY (`situacion`) REFERENCES `situacion` (`situacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-05-2025 a las 22:52:23
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
-- Base de datos: `ecn1_de2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

DROP TABLE IF EXISTS `agentes`;
CREATE TABLE IF NOT EXISTS `agentes` (
  `id_rh` int NOT NULL,
  `apellido_Nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `cuil` varchar(13) COLLATE utf8mb4_spanish_ci NOT NULL,
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
(15, 'Palermo, Martin bj', '20-45666681-1', 27564879, 547591, '2024-09-05', '0000-00-00', 1),
(27, 'Muguiwara, Celeste ', '20-11418187-7', 11418187, 123321, '2024-09-10', '2024-09-01', 1),
(741, 'Perez, Juan', '2074125896', 7412, 854796, '2024-11-18', '0000-00-00', 0),
(12344, 'Centurion, Miguel', '20-45666681-1', 45666681, 147854, '2024-09-15', '0000-00-00', 1),
(12356, 'Palos, Monica', '20-23473371-1', 23473371, 456789, '2024-09-23', '2024-09-24', 1),
(123456, 'Gomez, Claudio', '20-27748456-1', 27748456, 471852, '2014-01-07', '2024-09-25', 0),
(123567, 'Paez, Gisela Antonella', '20-15484954-0', 15484954, 1234567, '2024-09-19', '0000-00-00', 1),
(1065140, 'Arnau, Matias Ezequiel', '20-27774958-1', 27774958, 446904, '2010-04-12', '1981-08-10', 1),
(7410000, 'Colapinto, Franco', '2074125896', 7412, 854796, '2024-11-18', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

DROP TABLE IF EXISTS `asignaturas`;
CREATE TABLE IF NOT EXISTS `asignaturas` (
  `asignatura` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `codigo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `1º año` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `2º año` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `3º año` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `4º año` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `5º año` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`asignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
-- Estructura de tabla para la tabla `ciclo_lectivo`
--

DROP TABLE IF EXISTS `ciclo_lectivo`;
CREATE TABLE IF NOT EXISTS `ciclo_lectivo` (
  `id_cl` int NOT NULL AUTO_INCREMENT,
  `año` year NOT NULL,
  PRIMARY KEY (`id_cl`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ciclo_lectivo`
--

INSERT INTO `ciclo_lectivo` (`id_cl`, `año`) VALUES
(1, '2024'),
(2, '2025'),
(3, '2026'),
(4, '2027'),
(5, '2028'),
(6, '2029'),
(7, '2030');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_division`
--

DROP TABLE IF EXISTS `curso_division`;
CREATE TABLE IF NOT EXISTS `curso_division` (
  `id_curso_division` int NOT NULL AUTO_INCREMENT,
  `curso` varchar(50) NOT NULL,
  PRIMARY KEY (`id_curso_division`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `curso_division`
--

INSERT INTO `curso_division` (`id_curso_division`, `curso`) VALUES
(1, '1º 1ª  B.E.C. T.M.'),
(2, '1º 2ª  B.E.C. T.M'),
(3, '1º 3ª  B.E.C. T.T'),
(4, '1º 4ª  B.E.C. T.T'),
(5, '2º 1ª  B.E.C. T.M'),
(6, '2º 2ª  B.E.C. T.M'),
(7, '2º 3ª  B.E.C. T.T'),
(8, '2º 4ª  B.E.C. T.T'),
(9, '3º 1ª  B.E.C. T.M'),
(10, '3º 2ª  B.E.C. T.M'),
(11, '3º 3ª  B.E.C. T.T'),
(12, '4º 1ª  B.E.C. T.M'),
(13, '4º 2ª  B.E.C. T.M'),
(14, '4º 3ª  B.E.C. T.T'),
(15, '5º 1ª  B.E.C. T.M'),
(16, '5º 2ª  B.E.C. T.M'),
(17, '5º 3ª  B.E.C. T.T'),
(18, '1º 1ª  T.C.A  T.M'),
(19, '1º 2ª  T.C.A  T.M'),
(20, '2º  T.C.A  T.M '),
(21, '3º  T.C.A  T.M'),
(22, '1º  T.C.A  T.T'),
(23, '2º  T.C.A  T.T'),
(24, '3º  T.C.A  T.T'),
(25, '1º 1ª  T.C.A  T.N'),
(26, '1º 2ª  T.C.A  T.N'),
(27, '2º  T.C.A  T.N'),
(28, '3º  T.C.A  T.N'),
(29, '1º AUX Vitral T.M'),
(30, '2º AUX Vitral T.M'),
(31, '1º AUX Alfareria T.T'),
(32, '2º AUX Alfareria T.T'),
(33, '1º AUX Decoracion T.T'),
(34, '2º AUX Decoracion T.T'),
(35, '1º AUX Esm.s/Metales T.T'),
(36, '2º AUX Esm.s/Metales T.T'),
(37, '1º AUX Modelado T.T'),
(38, '2º AUX Modelado T.T'),
(39, '1º AUX Molderia T.T'),
(40, '2º AUX Molderia T.T ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int NOT NULL AUTO_INCREMENT,
  `estado` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Realizado'),
(2, 'En Tramitacion '),
(3, 'Urgente'),
(4, 'Listo a la espe'),
(5, 'Caratulado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id_estudiante` int NOT NULL AUTO_INCREMENT,
  `apellidoNombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `apellidoNombre`, `dni`) VALUES
(1, 'Arnau, Matias Ezequiel', '27774958'),
(2, 'Anarnau Aloy, Celeste ', '53418187'),
(3, 'Perez, Juan', '11391123'),
(5, 'Arance, Matias ', '11111111'),
(6, 'D´Alua, Daina', '31256332'),
(7, 'Lopez, Martin ', '13245632'),
(8, 'Quiroga, Micaela ', '94321456'),
(9, 'Sanchez, Jose ', '25147963'),
(10, 'Cabrera, Camilo', '23456789'),
(11, 'Mamani, Pedro', '13159753'),
(12, 'Ortiz, Milagros', '94357987'),
(13, 'Pintor, mirta', '53418187'),
(14, 'Gutierrez, Elsa', '20568192');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

DROP TABLE IF EXISTS `familia`;
CREATE TABLE IF NOT EXISTS `familia` (
  `id_familia` int NOT NULL AUTO_INCREMENT,
  `id_rh` int NOT NULL,
  `vinculo_ag` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  PRIMARY KEY (`id_familia`),
  KEY `rel_familia` (`id_rh`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id_familia`, `id_rh`, `vinculo_ag`, `nombre`, `apellido`, `fecha_nac`) VALUES
(1, 1065140, 'hija', 'Celeste', 'Arnau Daloy', '2013-08-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiaestudiante`
--

DROP TABLE IF EXISTS `familiaestudiante`;
CREATE TABLE IF NOT EXISTS `familiaestudiante` (
  `id_famEst` int NOT NULL AUTO_INCREMENT,
  `1_Vinculo Estudiante` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `1_apellido y nombre` varchar(75) COLLATE utf8mb4_spanish_ci NOT NULL,
  `1_dni` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `1_domicilio` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `1_mail` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `1_Telefono` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `2_Vinculo Estudiante` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `2_apellido y nombre` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `2_dni` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `2_mail` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `2_Telefono` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_estudiante` int NOT NULL,
  PRIMARY KEY (`id_famEst`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `familiaestudiante`
--

INSERT INTO `familiaestudiante` (`id_famEst`, `1_Vinculo Estudiante`, `1_apellido y nombre`, `1_dni`, `1_domicilio`, `1_mail`, `1_Telefono`, `2_Vinculo Estudiante`, `2_apellido y nombre`, `2_dni`, `2_mail`, `2_Telefono`, `observaciones`, `id_estudiante`) VALUES
(2, 'papa', 'arnau matias ezequiel', '27774958', 'Av. montes de oca 511 piso 11 dto c, barracas, caba', 'arnaumatias@gemail.com', '1155069327', '', '', '', '', '', 'estoy probando la tabla ', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_agente`
--

DROP TABLE IF EXISTS `ficha_agente`;
CREATE TABLE IF NOT EXISTS `ficha_agente` (
  `id_ficha` int NOT NULL AUTO_INCREMENT,
  `id_rh` int NOT NULL,
  `domicilio` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `localidad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `cp` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tel_fijo` int NOT NULL,
  `tel_celular` int NOT NULL,
  `correoElectrinico_Bue` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `correoElectronico_alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
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
-- Estructura de tabla para la tabla `inscripciones`
--

DROP TABLE IF EXISTS `inscripciones`;
CREATE TABLE IF NOT EXISTS `inscripciones` (
  `id_inscripcion` int NOT NULL AUTO_INCREMENT,
  `estudiante` int NOT NULL,
  `curso` int NOT NULL,
  `cicloLectivo` int NOT NULL,
  PRIMARY KEY (`id_inscripcion`),
  KEY `id_Curso` (`curso`),
  KEY `rel_cl` (`cicloLectivo`),
  KEY `rel_est` (`estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id_inscripcion`, `estudiante`, `curso`, `cicloLectivo`) VALUES
(3, 1, 1, 1),
(4, 2, 1, 1),
(5, 5, 1, 1),
(6, 5, 3, 1),
(7, 2, 15, 6),
(8, 2, 15, 6),
(9, 2, 15, 6),
(10, 2, 15, 6),
(11, 2, 15, 6),
(12, 2, 15, 6),
(13, 2, 15, 6),
(14, 2, 15, 6),
(15, 2, 15, 6),
(16, 2, 15, 6),
(17, 2, 15, 6),
(18, 2, 15, 6),
(19, 2, 15, 6),
(20, 2, 15, 6),
(21, 2, 15, 6),
(22, 2, 15, 6),
(23, 2, 15, 6),
(24, 1, 15, 2),
(25, 1, 15, 2),
(26, 2, 15, 6),
(27, 6, 1, 1),
(28, 8, 1, 1),
(29, 9, 18, 1),
(30, 1, 1, 3),
(31, 1, 20, 3),
(32, 11, 1, 1),
(33, 6, 18, 2),
(34, 1, 12, 1),
(35, 1, 16, 1),
(36, 10, 1, 1),
(37, 7, 1, 1),
(38, 7, 1, 3),
(39, 12, 1, 1),
(40, 13, 1, 1),
(41, 14, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `docente` varchar(100) DEFAULT NULL,
  `curso_division_id` int NOT NULL,
  `horario` text,
  PRIMARY KEY (`id_materia`),
  KEY `curso_division_id` (`curso_division_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pof`
--

DROP TABLE IF EXISTS `pof`;
CREATE TABLE IF NOT EXISTS `pof` (
  `id_pof` int NOT NULL AUTO_INCREMENT,
  `id_rh` int NOT NULL,
  `rol` int NOT NULL,
  `fecha_inicio_rol` date NOT NULL,
  `fecha_fin_rol` date NOT NULL,
  `situacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `doc_respaldatoria_alta` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `horas` int NOT NULL,
  `tipo_de_hora` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_puesto` int NOT NULL,
  `pxc` tinyint(1) NOT NULL,
  `lic_en_este_cargo` tinyint(1) NOT NULL,
  `tipo_lic` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `comp_tp` int NOT NULL,
  `Doc_remplazado` int NOT NULL,
  `Puesto_nro` int NOT NULL,
  PRIMARY KEY (`id_pof`),
  KEY `rel_pof` (`id_rh`),
  KEY `rel_situacion` (`situacion`),
  KEY `relDocenteRemp` (`Doc_remplazado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pof`
--

INSERT INTO `pof` (`id_pof`, `id_rh`, `rol`, `fecha_inicio_rol`, `fecha_fin_rol`, `situacion`, `doc_respaldatoria_alta`, `horas`, `tipo_de_hora`, `id_puesto`, `pxc`, `lic_en_este_cargo`, `tipo_lic`, `comp_tp`, `Doc_remplazado`, `Puesto_nro`) VALUES
(3, 1065140, 2, '2024-09-10', '0000-00-00', 'Titular', '', 0, '', 0, 0, 0, '', 0, 0, 154784569);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion`
--

DROP TABLE IF EXISTS `situacion`;
CREATE TABLE IF NOT EXISTS `situacion` (
  `id_situacion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `situacion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
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
-- Estructura de tabla para la tabla `tramitaciones`
--

DROP TABLE IF EXISTS `tramitaciones`;
CREATE TABLE IF NOT EXISTS `tramitaciones` (
  `id_tram` int NOT NULL AUTO_INCREMENT,
  `trabajado` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `docente` int NOT NULL,
  `expediente` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tramite` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `puestoPof` int NOT NULL,
  `rol` int NOT NULL,
  `cargo_año_div_turno` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_abm` date NOT NULL,
  `docente_ant` int NOT NULL,
  `pase` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `observaciones` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_tram`),
  KEY `rel_estado` (`estado`),
  KEY `rel_doc` (`docente`),
  KEY `rel_docAnt.` (`docente_ant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`) VALUES
(12, '7u7e', '$2y$10$uec3m3gbwGHgOmICQAkvhe2eHzwY0ZfCLokMFMA6.likoVIejArOu', 'arnaumatias@gmail.com'),
(13, 'cele', '$2y$10$I8I2vUeE06DSb5dxseoNre./h9dOXZkMxOPHt.zPOlG4dYhEXTcJG', 'cele@gmail.com'),
(14, 'cele', '$2y$10$Bw0683wl4ke21tC5Wmfsg.bgdAz6xCUwscRWl6Cbo5XW1GQJnsAPC', 'cele@gmail.com'),
(15, 'cele', '$2y$10$WOiS9nMX/2H.PzeIPoOIJOvnT9FqeMeBs/MPs/BufTgsaIksDlDCW', 'cele@gmail.com'),
(16, 'cele', '$2y$10$1JcVv7uURcHT8VpV35WSn.nGtUx9CjAahJ3EMnvYIOwlx6qJ.UvIO', 'cele@gmail.com'),
(17, 'cele', '$2y$10$Q8iLPwcKzt6g4PbKrPjYlOxtftukY0MBQMAuf2t.ZfzNo.ghbGIGi', 'cele@gmail.com'),
(18, 'juan', '$2y$10$nveCKCYAMwBSQdVYl02XTergovyD2WsxZJisyGHVWfBj80SUVSpiO', '1564@gmail'),
(19, 'dai', '$2y$10$Oqi62cqiGzTdHocxWmcXHeBTlOyM5WyrvxkNfZO7fOAmWxtvkPtrq', 'dai@gmail.com'),
(20, 'cali', '$2y$10$gs2.TS8YSfknUk.9tuDYJu8k2yzHj0816WIxO07CL.0vKvai0upd2', 'cali@gmail.com'),
(21, 'daiana', '$2y$10$QiV0tb5UFbqLIIVfqUjAAeXZLBjHw7pxhIhyQt0sY5K5fH1eB29B2', 'd@gmail.com'),
(22, 'elsa ', '$2y$10$YHSmaYntpngcufm7mc3FberiIX9ibJiRWbfKx58SaSRQshr.rVZYa', 'eslsa@gmail.com'),
(23, 'matias', '$2y$10$UhoHvbDwGpB2AF32E51wB.P9xgQUqDaH9uEr73rPe1Uor.2qs3kZy', 'arnaumatias@gmail.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `familia`
--
ALTER TABLE `familia`
  ADD CONSTRAINT `rel_familia` FOREIGN KEY (`id_rh`) REFERENCES `agentes` (`id_rh`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `familiaestudiante`
--
ALTER TABLE `familiaestudiante`
  ADD CONSTRAINT `rel_est_fam` FOREIGN KEY (`id_famEst`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `ficha_agente`
--
ALTER TABLE `ficha_agente`
  ADD CONSTRAINT `ficha_agente_ibfk_1` FOREIGN KEY (`id_rh`) REFERENCES `agentes` (`id_rh`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `id_Curso` FOREIGN KEY (`curso`) REFERENCES `curso_division` (`id_curso_division`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rel_cl` FOREIGN KEY (`cicloLectivo`) REFERENCES `ciclo_lectivo` (`id_cl`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `pof`
--
ALTER TABLE `pof`
  ADD CONSTRAINT `rel_pof` FOREIGN KEY (`id_rh`) REFERENCES `agentes` (`id_rh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rel_situacion` FOREIGN KEY (`situacion`) REFERENCES `situacion` (`situacion`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `tramitaciones`
--
ALTER TABLE `tramitaciones`
  ADD CONSTRAINT `rel_doc` FOREIGN KEY (`docente`) REFERENCES `agentes` (`id_rh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rel_docAnt.` FOREIGN KEY (`docente_ant`) REFERENCES `agentes` (`id_rh`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `rel_estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`id_estado`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

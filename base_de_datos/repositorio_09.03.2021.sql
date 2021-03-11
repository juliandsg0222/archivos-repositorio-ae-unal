-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2021 a las 22:05:52
-- Versión del servidor: 10.5.8-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repositorio_ae_manizales_unal_2021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCat` int(11) NOT NULL,
  `nomCat` varchar(50) NOT NULL,
  `desCat` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCat`, `nomCat`, `desCat`) VALUES
(2, 'FORMACIÃ“N INTEGRAL', 'Cultura, deportes, estudiantes auxiliares, becarios'),
(7, 'HOMOLOGACIONES', 'InformaciÃ³n relacionada con Homologaciones'),
(8, 'RECONOCIMIENTOS POR DESEMPEÃ‘O ACADÃ‰MICO', 'Grados de honor, exenciones, matriculas de honor, admisiÃ³n automÃ¡tica, estudiantes auxiliares y becarios'),
(14, 'DOBLE TITULACIÃ“N', 'Registros de doble titulaciÃ³n'),
(15, 'RELACIÃ“N CANTIDAD ESTUDIANTE PROFESOR', 'Registros de estudiantes y docentes para calcular'),
(16, 'COMISIÃ“N DOCENTES', 'Comisiones de estudios y comisiones regulares'),
(17, 'MOVILIDAD ESTUDIANTIL SALIENTE', 'Movilidad por convenios, participaciÃ³n en eventos, movilidad intersedes'),
(18, 'RECONOCIMIENTO A TRABAJOS DE ESTUDIANTES', 'Mejores trabajos de grado, premios y ponencias'),
(19, 'EXTENSIÃ“N', 'Proyectos y actividades de extensiÃ³n'),
(20, 'RECURSOS BIBLIOGRÃFICOS', 'ActualizaciÃ³n BibliogrÃ¡fica'),
(21, 'MOVILIDAD ESTUDIANTIL ENTRANTE', 'Reporte SIA, reporte ORI'),
(22, 'PARTICIPACIÃ“N EN PROG DE BIENESTAR', 'Cultura, deportes, servicios de salud, acompaÃ±amiento, gestiÃ³n y fomento socioeconÃ³mico'),
(23, 'INVESTIGACIÃ“N', 'ParticipaciÃ³n de estudiantes en actividades de investigaciÃ³n, resultados de grupos y semilleros, grupos de investigaciÃ³n clasificados, resultados de grupos reconocidos por COLCIENCIAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_tema`
--

CREATE TABLE `cat_tema` (
  `idCat` int(11) NOT NULL,
  `idTem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_tema`
--

INSERT INTO `cat_tema` (`idCat`, `idTem`) VALUES
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(7, 1),
(7, 2),
(8, 6),
(8, 7),
(8, 8),
(8, 11),
(8, 12),
(8, 13),
(8, 14),
(14, 9),
(14, 10),
(15, 8),
(15, 15),
(16, 8),
(16, 15),
(16, 16),
(16, 17),
(17, 18),
(17, 19),
(17, 20),
(18, 21),
(18, 22),
(19, 23),
(20, 24),
(21, 9),
(21, 10),
(22, 4),
(22, 5),
(22, 25),
(22, 26),
(22, 27),
(23, 28),
(23, 29),
(23, 30),
(23, 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuente`
--

CREATE TABLE `fuente` (
  `idFue` int(11) NOT NULL,
  `nomFue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fuente`
--

INSERT INTO `fuente` (`idFue`, `nomFue`) VALUES
(2, 'BIENESTAR UNIVERSITARIO'),
(3, 'VICERRECTORIA GENERAL'),
(6, 'SIA - DIRECCIÃ“N ACADÃ‰MICA'),
(7, 'SINAB'),
(8, 'DECANATURA FIA'),
(9, 'DIMA'),
(10, 'SECRETARIA DE SEDE'),
(11, 'ORI'),
(12, 'DIRECCIÃ“N DE PERSONAL'),
(13, 'SECRETARIA FCEN'),
(14, 'SECRETARIA FADMIN'),
(15, 'SECRETARIA FIA'),
(16, 'VICEDECANATURA FIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicador`
--

CREATE TABLE `indicador` (
  `idInd` int(11) NOT NULL,
  `numInd` varchar(11) NOT NULL,
  `nomInd` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `indicador`
--

INSERT INTO `indicador` (`idInd`, `numInd`, `nomInd`) VALUES
(1, '2.5.8', 'NÃºmero de homologaciones y oportunidades de doble titulaciÃ³n que han adelantado en el programa.'),
(4, '2.6.11', 'NÃºmero de  estudiantes que participan de los espacios y estrategias ofrecidos por la universidad (centros de estudio, proyectos de desarrollo empresarial y demÃ¡s actividades acadÃ©micas y culturales etc.) que contribuyan a su formaciÃ³n integral.'),
(5, '2.7.13', 'Reconocimientos por su desempeÃ±o acadÃ©mico.'),
(7, '3.12.8', 'RelaciÃ³n de profesores con respecto a estudiantes en el  componente disciplinar â€“profesional.'),
(8, '5.29.4', 'Estudiantes nacionales e internacionales que han venido a cursar asignaturas o actividades acadÃ©micas del programa en los Ãºltimos aÃ±os. '),
(9, '2.4.3', 'PoblaciÃ³n de estudiantes que ingresÃ³ al programa (regulares y excepcionales), puntajes pruebas de admisiÃ³n (estandarizado, mÃ­nimo y mÃ¡ximo)'),
(10, '2.5.7', 'Estudiantes matriculados en el programa acadÃ©mico'),
(12, '2.7.12', 'DesempeÃ±o de los estudiantes del programa en las pruebas de estado de educaciÃ³n superior. Calificaciones promedio con respecto al promedio nacional.'),
(13, '2.9.17', 'Tasas de deserciÃ³n estudiantil por motivos acadÃ©micos y no acadÃ©micos, acumulada y por cohortes. - Tasas de repitencia de asignaturas. - Tasas de graduaciÃ³n'),
(14, '3.12.6', 'Profesores que tienen relaciÃ³n con el programa, relacionando el nivel de formaciÃ³n, tipo de vinculaciÃ³n, tiempo de vinculaciÃ³n, dedicaciÃ³n y experiencia profesional.'),
(15, '3.12.7', 'Porcentaje de tiempo que cada profesor del programa dedica a la docencia, a la investigaciÃ³n o a la creaciÃ³n artÃ­stica, a la extensiÃ³n o proyecciÃ³n social, o a la atenciÃ³n de funciones administrativas'),
(17, '3.13.11', 'Profesores que han participado en actividades de capacitaciÃ³n y actualizaciÃ³n, acadÃ©mica y pedagÃ³gica'),
(18, '3.14.14', 'Profesores que han recibido estÃ­mulos y reconocimiento por el ejercicio de la docencia, la investigaciÃ³n, la creaciÃ³n artÃ­stica y cultural, la extensiÃ³n o proyecciÃ³n social y la cooperaciÃ³n internacional'),
(19, '4.19.11', 'Evidencia de la movilidad estudiantil con otras instituciones nacionales e internacionales'),
(20, '4.21.16', 'DuraciÃ³n media real del programa por cohorte de ingreso excluyendo doble titulaciÃ³n'),
(21, '4.23.20', 'RelaciÃ³n de los trabajos de los estudiantes del programa que han merecido premios o reconocimientos'),
(22, '4.25.26', 'Proyectos y actividades de extensiÃ³n o proyecciÃ³n hacia la comunidad, en las que ha participado la comunidad acadÃ©mica. Describa su impacto'),
(23, '4.26.30', 'Pertinencia, actualizaciÃ³n y suficiencia del material bibliogrÃ¡fico con que cuenta el programa para apoyar el desarrollo de sus actividades acadÃ©micas'),
(24, '4.28.34', 'Laboratorios, talleres, salas de audiovisuales, campos de prÃ¡ctica, utilizados para cumplir los objetivos del programa'),
(25, '5.29.2', 'Profesores, estudiantes y egresados que han participado de actividades acadÃ©micas o de intercambio en instituciones extranjeras'),
(26, '5.29.6', 'Profesores o expertos visitantes nacionales y extranjeros, y misiones nacionales o extranjeras, que ha recibido el programa relacionando los objetivos, duraciÃ³n y resultados de su estadÃ­a'),
(27, '5.29.7', 'Profesores y estudiantes del programa que han participado en redes o actividades de cooperaciÃ³n acadÃ©mica y profesional con programas nacionales e internacionales de reconocido liderazgo en el Ã¡rea'),
(28, '5.29.8', 'Reconocimientos otorgados al programa en el medio local, regional, nacional o internacional.'),
(29, '6.30.3', 'ParticipaciÃ³n de los estudiantes en los programas institucionales de formaciÃ³n en investigaciÃ³n. (Convocatorias internas, semilleros investigaciÃ³n, jÃ³venes investigadores, etc.)'),
(30, '6.30.4', 'Actividades acadÃ©micas â€“cursos electivos, seminarios, pasantÃ­as, eventosâ€“derivados de grupos y semilleros de investigaciÃ³n'),
(31, '6.31.5', 'Grupos de investigaciÃ³n reconocidos por COLCIENCIAS o por otro organismo en los cuales participan estudiantes y profesores relacionados con el programa'),
(32, '6.31.6', 'Resultados productos de los Grupos de investigaciÃ³n y semilleros reconocidos por COLCIENCIAS o por otro organismo en los cuales participan estudiantes y profesores relacionados con el programa'),
(33, '7.32.2', 'ParticipaciÃ³n de Profesores, Estudiantes y personal administrativo en programas de bienestar Universitario'),
(34, '10.38.1', 'EstadÃ­sticas de utilizaciÃ³n de aulas, laboratorios, talleres, salas de estudio para los alumnos, salas de cÃ³mputo, auditorios y salas de conferencias, que mÃ¡s utilizan los estudiantes del programa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `idPer` int(11) NOT NULL,
  `nomPer` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`idPer`, `nomPer`) VALUES
(2, '2016-3'),
(3, '2017-1'),
(4, '2017-3'),
(5, '2018-1'),
(6, '2018-3'),
(7, '2019-1'),
(8, '2019-3'),
(9, '2020-1'),
(10, '2020-3'),
(15, '2021-1'),
(16, '2021-3'),
(17, '2022-1'),
(18, '2016-1'),
(19, '2015-3'),
(20, '2015-1'),
(21, '2014-3'),
(22, '2014-1'),
(23, '2011-3'),
(24, '2013-1'),
(25, '2012-3'),
(26, '2013-3'),
(27, '2012-1'),
(28, '2011-1'),
(29, '2010-3'),
(30, '2010-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idProg` int(11) NOT NULL,
  `nomProg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idProg`, `nomProg`) VALUES
(1, 'INGENIERÃA CIVIL'),
(2, 'INGENIERÃA FÃSICA'),
(3, 'INGENIERÃA INDUSTRIAL'),
(4, 'ADMINISTRACIÃ“N DE SISTEMAS INFORMÃTICOS'),
(5, 'ARQUITECTURA'),
(6, 'GESTION CULTURAL Y COMUNICATIVA'),
(7, 'INGENIERÃA ELECTRÃ“NICA'),
(8, 'INGENIERÃA ELÃ‰CTRICA'),
(9, 'INGENIERÃA QUÃMICA'),
(10, 'ADMINISTRACIÃ“N DE EMPRESAS (N)'),
(11, 'ADMINISTRACIÃ“N DE EMPRESAS (D)'),
(12, 'MATEMÃTICAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idReg` int(11) NOT NULL,
  `fechaReg` date NOT NULL,
  `nomReg` varchar(50) NOT NULL,
  `desReg` varchar(400) NOT NULL,
  `linkReg` mediumtext NOT NULL,
  `idInd` int(11) NOT NULL,
  `idFue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idReg`, `fechaReg`, `nomReg`, `desReg`, `linkReg`, `idInd`, `idFue`) VALUES
(1, '2021-01-15', 'GuÃ­a de AutoevaluaciÃ³n Pregrado', 'GuÃ­a de AutoevaluaciÃ³n Pregrado V2013', 'https://drive.google.com/file/d/1cK7K_TVZr4LrGEQTyQuDjlotloSyzxDX/view?usp=sharing', 1, 3),
(2, '2021-01-15', 'Becarios', 'Becarios desde 2018-1 hasta 2019-3 de AdministraciÃ³n de Empresas (D)', 'https://drive.google.com/file/d/1aFmLQxGWS_wwJbszHREWoc1QEIFpmc76/view?usp=sharing', 4, 2),
(7, '2021-02-23', 'Ganador Mejor Trabajo de Grado 2019', 'Mejores trabajos de grado', 'https://drive.google.com/file/d/10Eqgo241NXglw2x0vJ8Lo_YhWkdGbqTL/view?usp=sharing', 8, 3),
(9, '2021-03-09', 'Adquisiciones Biblioteca 2018-2019', 'Adquisiones registradas en 2018 y 2019 clasificadas por programa y por mÃ©todo de adquisiciÃ³n (depÃ³sito institucional o legal, canje, compra, obsequio)', 'https://drive.google.com/file/d/1Gbqx-Kgv1Sh7XJad9Tm4fRrX6K_9o7AH/view?usp=sharing', 23, 7),
(10, '2021-03-09', 'Consolidado AcompaÃ±amiento 2018-2 a 2019-2', 'Consolidado participaciÃ³n en actividades de AcompaÃ±amiento 2018-2 a 2019-2', 'https://drive.google.com/file/d/1jQgJVbHrHbhksfFGx_WSduUn0WWGDrYi/view?usp=sharing', 33, 2),
(11, '2021-03-09', 'Consolidado Deportes 2018-2 al 2019-2', 'Consolidado participaciÃ³n en Deportes 2018-2 al 2019-2', 'https://drive.google.com/file/d/12R1T820fr5xSBFFd2tqlJWR1qhqNPvNq/view?usp=sharing', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_per`
--

CREATE TABLE `reg_per` (
  `idReg` int(11) NOT NULL,
  `idPer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reg_per`
--

INSERT INTO `reg_per` (`idReg`, `idPer`) VALUES
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(2, 2),
(7, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_prog`
--

CREATE TABLE `reg_prog` (
  `idReg` int(11) NOT NULL,
  `idProg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reg_prog`
--

INSERT INTO `reg_prog` (`idReg`, `idProg`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(2, 4),
(2, 7),
(7, 1),
(7, 2),
(7, 3),
(7, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nomRol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nomRol`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'EDITOR'),
(3, 'VISUALIZADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `idTem` int(11) NOT NULL,
  `nomTem` varchar(50) NOT NULL,
  `desTem` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`idTem`, `nomTem`, `desTem`) VALUES
(1, 'HOMOLOGACIONES', 'InformaciÃ³n de homologaciones'),
(2, 'DOBLE TITULACIÃ“N', 'InformaciÃ³n de Doble TitulaciÃ³n'),
(4, 'CULTURA', 'SecciÃ³n de Cultura ofrecida por Bienestar Universitario'),
(5, 'DEPORTES', 'SecciÃ³n de Deportes ofrecida por Bienestar Universitario'),
(6, 'ESTUDIANTES AUXILIARES', 'VÃ­nculo AcadÃ©mico para realizaciÃ³n de labores en la universidad'),
(7, 'BECARIOS', 'Estudiantes que brindan monitorias'),
(8, 'ESTUDIANTES MATRICULADOS', 'Registros de nÃºmero de estudiantes matriculados para calcular relaciÃ³n estudiantes vs profesores'),
(9, 'REPORTES SIA', 'Reportes de movilidad entrante suministrador por el SIA'),
(10, 'REPORTES ORI', 'Reporte de movilidad estudiantil entrante suministrado por la ORI'),
(11, 'GRADOS DE HONOR', 'Resoluciones de grados de honor por parte de CdeS'),
(12, 'EXENCIONES', 'Exenciones de pago de matrÃ­cula'),
(13, 'MATRICULAS DE HONOR', 'Resoluciones de Matriculas de Honor'),
(14, 'ADMISIÃ“N AUTOMÃTICA', 'AdmisiÃ³n automÃ¡tica de graduados a programas de posgrado'),
(15, 'DOCENTES', 'Registros de nÃºmero de docentes vinculados para calcular relaciÃ³n estudiantes vs profesores'),
(16, 'ESTUDIOS', 'Comisiones de docentes por estudios de posgrado'),
(17, 'REGULARES', 'Comisiones regulares de docentes '),
(18, 'MOVILIDAD POR CONVENIOS', 'Movilidad saliente registrada por convenios'),
(19, 'PARTICIPACIÃ“N EN EVENTOS', 'Movilidad registrada por participaciÃ³n en eventos internos y externos'),
(20, 'INTERSEDE', 'Movilidad registrada entre sedes de la UNAL'),
(21, 'MEJORES TRABAJOS DE GRADO', 'Ganadores del Concurso Anual de Mejores Trabajos de Grado en la UNAL'),
(22, 'PREMIOS Y PONENCIAS', 'Reconocimientos a estudiantes por ponencias y participaciÃ³n en concursos'),
(23, 'PROYECTOS Y ACTIVIDADES DE EXTENSIÃ“N', 'Registros de actividades de extensiÃ³n de los programas y de docentes'),
(24, 'ACTUALIZACIÃ“N BIBLIOGRÃFICA', 'ActualizaciÃ³n de recursos bibliogrÃ¡ficos por depÃ³sito institucional o legal, canje, compra u obsequio'),
(25, 'SERVICIOS DE SALUD', 'ParticipaciÃ³n de estudiantes en los servicios de Salud de Bienestar Universitario'),
(26, 'ACOMPAÃ‘AMIENTO', 'ParticipaciÃ³n de estudiantes en los servicios de acompaÃ±amiento de Bienestar Universitario'),
(27, 'GESTIÃ“N Y FOMENTO SOCIOECONÃ“MICO', 'ParticipaciÃ³n de estudiantes en los servicios de gestiÃ³n y fomento socioeconÃ³mico de Bienestar Universitario'),
(28, 'PARTICIPACIÃ“N DE ESTUDIANTES', 'ParticipaciÃ³n de estudiantes en actividades de investigaciÃ³n'),
(29, 'RESULTADOS DE GRUPOS Y SEMILLEROS', 'Resultados de grupos y semilleros de investigaciÃ³n'),
(30, 'GRUPOS DE INVESTIGACIÃ“N CLASIFICADOS', 'ClasificaciÃ³n de grupos de investigaciÃ³n segÃºn MINCIENCIAS'),
(31, 'RESULTADOS DE GRUPOS RECONOCIDOS POR MINCIENCIAS', 'Resultados de grupos de investigaciÃ³n reconocidos por MINCIENCIAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema_ind`
--

CREATE TABLE `tema_ind` (
  `idTem` int(11) NOT NULL,
  `idInd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tema_ind`
--

INSERT INTO `tema_ind` (`idTem`, `idInd`) VALUES
(1, 1),
(2, 1),
(4, 4),
(5, 4),
(6, 4),
(6, 5),
(7, 4),
(7, 5),
(8, 7),
(9, 4),
(9, 8),
(10, 8),
(11, 5),
(12, 5),
(13, 5),
(14, 5),
(15, 7),
(15, 17),
(15, 25),
(15, 27),
(16, 17),
(16, 25),
(16, 27),
(17, 17),
(17, 25),
(17, 27),
(18, 19),
(19, 19),
(20, 19),
(21, 5),
(22, 21),
(23, 22),
(24, 23),
(25, 33),
(26, 33),
(27, 33),
(28, 29),
(29, 30),
(30, 31),
(31, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsu` int(11) NOT NULL,
  `usuUsu` varchar(20) NOT NULL,
  `nomUsu` varchar(80) NOT NULL,
  `passUsu` mediumtext NOT NULL,
  `rolUsu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsu`, `usuUsu`, `nomUsu`, `passUsu`, `rolUsu`) VALUES
(9, 'maduqueram', 'ALEXANDRA DUQUE', '$2y$10$kPA6LhtIi4S98uAtSf9WCeKJ3E1gPkAfmTWDEPCaVTKrZ/GgQ2zZu', 1),
(10, 'ghhernandezh', 'GUILLERMO HERNÃNDEZ', '$2y$10$/asuEmodQwUCA/aquaeYEekbe9uFdI66.aITftSRuk.z8mkpHesiu', 1),
(14, 'anmorozcoma', 'ÃNGELA OROZCO', '$2y$10$Gfu8bEfe9HAknQp/Qj92TeGKqDL8FEsbCipuaadPS14bTzWVdU79u', 1),
(15, 'jsibanezr', 'JOHAN SEBASTIÃN IBAÃ‘EZ RAMÃREZ', '$2y$10$PgEOdJP1j543hZSMYxSWK.urODaKJaw01hbJsxrvA71iHLvTVNR1y', 1),
(16, 'mapuertal', 'MÃ“NICA PUERTA', '$2y$10$XhpoMMrDDc37mzgjyOCDR.UJfe8b8yVQQpE6i/HNDv2nvTbDa0mUm', 1),
(23, 'judsanchezga', 'JULIÃN DAVID SÃNCHEZ GALLEGO', '$2y$10$JqbC4k13xnXgaZskzyNz2.vz5qJFOZNZyjpu/NFOmnBLv4/psKd3q', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCat`);

--
-- Indices de la tabla `cat_tema`
--
ALTER TABLE `cat_tema`
  ADD PRIMARY KEY (`idCat`,`idTem`),
  ADD KEY `idTem` (`idTem`);

--
-- Indices de la tabla `fuente`
--
ALTER TABLE `fuente`
  ADD PRIMARY KEY (`idFue`);

--
-- Indices de la tabla `indicador`
--
ALTER TABLE `indicador`
  ADD PRIMARY KEY (`idInd`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`idPer`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idProg`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idReg`),
  ADD KEY `idInd` (`idInd`),
  ADD KEY `idFue` (`idFue`);

--
-- Indices de la tabla `reg_per`
--
ALTER TABLE `reg_per`
  ADD PRIMARY KEY (`idReg`,`idPer`),
  ADD KEY `idPer` (`idPer`);

--
-- Indices de la tabla `reg_prog`
--
ALTER TABLE `reg_prog`
  ADD PRIMARY KEY (`idReg`,`idProg`),
  ADD KEY `idProg` (`idProg`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`idTem`);

--
-- Indices de la tabla `tema_ind`
--
ALTER TABLE `tema_ind`
  ADD PRIMARY KEY (`idTem`,`idInd`),
  ADD KEY `idInd` (`idInd`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsu`),
  ADD KEY `rolUsu` (`rolUsu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `fuente`
--
ALTER TABLE `fuente`
  MODIFY `idFue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `indicador`
--
ALTER TABLE `indicador`
  MODIFY `idInd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `idPer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `idProg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idReg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `idTem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cat_tema`
--
ALTER TABLE `cat_tema`
  ADD CONSTRAINT `cat_tema_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categoria` (`idCat`),
  ADD CONSTRAINT `cat_tema_ibfk_2` FOREIGN KEY (`idTem`) REFERENCES `tema` (`idTem`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`idInd`) REFERENCES `indicador` (`idInd`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`idFue`) REFERENCES `fuente` (`idFue`);

--
-- Filtros para la tabla `reg_per`
--
ALTER TABLE `reg_per`
  ADD CONSTRAINT `reg_per_ibfk_1` FOREIGN KEY (`idReg`) REFERENCES `registro` (`idReg`),
  ADD CONSTRAINT `reg_per_ibfk_2` FOREIGN KEY (`idPer`) REFERENCES `periodo` (`idPer`);

--
-- Filtros para la tabla `reg_prog`
--
ALTER TABLE `reg_prog`
  ADD CONSTRAINT `reg_prog_ibfk_1` FOREIGN KEY (`idReg`) REFERENCES `registro` (`idReg`),
  ADD CONSTRAINT `reg_prog_ibfk_2` FOREIGN KEY (`idProg`) REFERENCES `programa` (`idProg`);

--
-- Filtros para la tabla `tema_ind`
--
ALTER TABLE `tema_ind`
  ADD CONSTRAINT `tema_ind_ibfk_1` FOREIGN KEY (`idTem`) REFERENCES `tema` (`idTem`),
  ADD CONSTRAINT `tema_ind_ibfk_2` FOREIGN KEY (`idInd`) REFERENCES `indicador` (`idInd`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rolUsu`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

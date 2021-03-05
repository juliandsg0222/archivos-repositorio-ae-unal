-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2021 a las 23:00:36
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(2, 'FORMACIÃ“N INTEGRAL', 'Actividades ofrecidas por Bienestar Universitario'),
(7, 'INFORMACIÃ“N SOBRE ESTUDIANTES', 'InformaciÃ³n relacionada con Homologaciones y opciones de Doble TitulaciÃ³n'),
(8, 'RELACIÃ“N PROFESOR-ESTUDIANTE', 'Sin descripciÃ³n'),
(14, 'MOVILIDAD ESTUDIANTIL ENTRANTE', 'Movilidad estudiantil entrante de la sede');

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
(8, 8),
(14, 9),
(14, 10);

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
(3, 'VICERRECTORIA GENERAL');

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
(5, '2.7.13', 'Reconocimientos por su desempeÃ±o.'),
(7, '3.12.8', 'RelaciÃ³n de profesores con respecto a estudiantes en el  componente disciplinar â€“profesional.'),
(8, '5.29.4', 'Estudiantes nacionales e internacionales que han venido a cursar asignaturas o actividades acadÃ©micas del programa en los Ãºltimos aÃ±os. ');

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
(17, '2022-1');

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
  `nomReg` varchar(50) NOT NULL,
  `desReg` varchar(400) NOT NULL,
  `linkReg` mediumtext NOT NULL,
  `idInd` int(11) NOT NULL,
  `idFue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idReg`, `nomReg`, `desReg`, `linkReg`, `idInd`, `idFue`) VALUES
(1, 'GuÃ­a de AutoevaluaciÃ³n Pregrado', 'GuÃ­a de AutoevaluaciÃ³n Pregrado V2013', 'https://drive.google.com/file/d/1cK7K_TVZr4LrGEQTyQuDjlotloSyzxDX/view?usp=sharing', 1, 3),
(2, 'Becarios', 'Becarios desde 2018-1 hasta 2019-3 de AdministraciÃ³n de Empresas (D)', 'https://drive.google.com/file/d/1aFmLQxGWS_wwJbszHREWoc1QEIFpmc76/view?usp=sharing', 4, 2),
(6, 'Becarios GestiÃ³n Cultural', 'Contiene informaciÃ³n sobre becarios del perÃ­odo entre 2018-1 y 2019-3', 'https://drive.google.com/file/d/1MozLSEJDjV5QxqDdvjMIeTzC52edJoVM/view?usp=sharing', 4, 2),
(7, 'Ganador Mejor Trabajo de Grado 2019', 'Mejores trabajos de grado', 'https://drive.google.com/file/d/10Eqgo241NXglw2x0vJ8Lo_YhWkdGbqTL/view?usp=sharing', 8, 3);

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
(6, 5),
(6, 6),
(6, 7),
(6, 8),
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
(6, 6),
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
(8, 'ESTUDIANTES', 'Sin diligenciar'),
(9, 'REPORTES SIA', 'Reportes de movilidad entrante suministrador por el SIA'),
(10, 'REPORTES ORI', 'Reporte de movilidad estudiantil entrante suministrado por la ORI');

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
(9, 8),
(10, 8);

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
(18, 'prueba', 'Prueba', '$2y$10$tMgw99IncuQ8fUDpgJDvLO3KvMvWWogJ/QjvHP3ee3pVqZAYUvEs2', 1),
(19, 'visualizador', 'USUARIO VISUALIZADOR', '$2y$10$eHV/s1jKLdjSudxsaZo.tO31NPhJOcrtwuYS/6MpyoHkdHzpfuyna', 3),
(20, 'editor', 'USUARIO EDITOR', '$2y$10$HOdTbtnpEgtYLZm4tHEl8eai62q6AGj2zoqNx7QTDkmGkhC/Kp38.', 2),
(23, 'judsanchezga', 'JULIAN DAVID SANCHEZ GALLEGO', '$2y$10$JqbC4k13xnXgaZskzyNz2.vz5qJFOZNZyjpu/NFOmnBLv4/psKd3q', 1);

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
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `fuente`
--
ALTER TABLE `fuente`
  MODIFY `idFue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `indicador`
--
ALTER TABLE `indicador`
  MODIFY `idInd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `idPer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `idProg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `idReg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `idTem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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

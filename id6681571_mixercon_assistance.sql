-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-06-2019 a las 12:31:36
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id6681571_mixercon_assistance`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Dia`
--

CREATE TABLE `Dia` (
  `DiaID` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Actual` datetime NOT NULL,
  `Hora_Ingreso` datetime NOT NULL,
  `Hora_Salida` datetime NOT NULL,
  `Minutos_Tolerancia` int(11) NOT NULL,
  `HorarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Dia`
--

INSERT INTO `Dia` (`DiaID`, `Nombre`, `Fecha_Actual`, `Hora_Ingreso`, `Hora_Salida`, `Minutos_Tolerancia`, `HorarioID`) VALUES
(2, 'Lunes', '2019-05-27 00:00:00', '2019-05-27 06:00:00', '2019-05-27 18:00:00', 30, 1),
(3, 'Martes', '2019-05-28 00:00:00', '2019-05-28 06:00:00', '2019-05-28 18:00:00', 30, 1),
(4, 'Miercoles', '2019-05-29 00:00:00', '2019-05-29 06:00:00', '2019-05-29 18:00:00', 30, 1),
(5, 'Jueves', '2019-05-30 00:00:00', '2019-05-30 06:00:00', '2019-05-30 18:00:00', 30, 1),
(6, 'Viernes', '2019-05-31 00:00:00', '2019-05-31 06:00:00', '2019-05-31 18:00:00', 30, 1),
(7, 'Sabado', '2019-06-01 00:00:00', '2019-06-01 06:00:00', '2019-06-01 18:00:00', 30, 1),
(8, 'Domingo', '2019-06-02 00:00:00', '2019-06-02 06:00:00', '2019-06-02 18:00:00', 30, 1),
(9, 'Lunes', '2019-06-03 00:00:00', '2019-06-03 06:00:00', '2019-06-03 18:00:00', 30, 3),
(10, 'Martes', '2019-06-04 00:00:00', '2019-06-04 06:00:00', '2019-06-04 18:00:00', 30, 3),
(11, 'Miercoles', '2019-06-05 00:00:00', '2019-06-05 06:00:00', '2019-06-05 18:00:00', 30, 3),
(12, 'Jueves', '2019-06-06 00:00:00', '2019-06-06 06:00:00', '2019-06-06 18:00:00', 30, 3),
(13, 'Viernes', '2019-06-07 00:00:00', '2019-06-07 06:00:00', '2019-06-07 18:00:00', 30, 3),
(14, 'Sabado', '2019-06-08 00:00:00', '2019-06-08 06:00:00', '2019-06-08 18:00:00', 30, 3),
(15, 'Domingo', '2019-06-09 00:00:00', '2019-06-09 06:00:00', '2019-06-09 18:00:00', 30, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Horario`
--

CREATE TABLE `Horario` (
  `HorarioID` int(11) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_Fin` datetime NOT NULL,
  `Turno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Horario`
--

INSERT INTO `Horario` (`HorarioID`, `Fecha_Inicio`, `Fecha_Fin`, `Turno`) VALUES
(1, '2019-05-27 00:00:00', '2019-06-02 00:00:00', 1),
(3, '2019-06-03 00:00:00', '2019-06-09 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marca`
--

CREATE TABLE `Marca` (
  `MarcaID` int(11) NOT NULL,
  `Tipo_Marca` int(11) NOT NULL,
  `Hora_Marca` datetime NOT NULL,
  `Respuesta` text COLLATE utf8_unicode_ci NOT NULL,
  `Minutos_Diferencia` int(11) NOT NULL,
  `Latitud` double NOT NULL,
  `Longitud` double NOT NULL,
  `UsuarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Marca`
--

INSERT INTO `Marca` (`MarcaID`, `Tipo_Marca`, `Hora_Marca`, `Respuesta`, `Minutos_Diferencia`, `Latitud`, `Longitud`, `UsuarioID`) VALUES
(1, 0, '2019-06-02 18:45:00', 'Fuera de Tiempo', 45, -12.0833393, -77.0946694, 2),
(2, 0, '2019-06-02 18:51:00', 'Fuera de Tiempo', 45, -12.0833393, -77.0946694, 2),
(3, 1, '2019-06-02 18:00:00', 'Salida Válida', 45, -12.0874459, -77.0521308, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Permiso`
--

CREATE TABLE `Permiso` (
  `PermisoID` int(11) NOT NULL,
  `Nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Permiso`
--

INSERT INTO `Permiso` (`PermisoID`, `Nombre`, `Descripcion`) VALUES
(1, 'Ingresar Aplicativo Movil', 'Permiso para poder ingresar dentro del aplicativo movil'),
(2, 'Ingresar Aplicativo Web', 'Permiso para poder ingresar al aplicativo web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sede`
--

CREATE TABLE `Sede` (
  `SedeID` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Latitud` double NOT NULL,
  `Longitud` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Sede`
--

INSERT INTO `Sede` (`SedeID`, `Nombre`, `Latitud`, `Longitud`) VALUES
(1, 'Villa', -12.2052537, -76.9761157),
(2, 'Villa 2', -12.201136, -76.9724837),
(3, 'Villa 3', -12.2071953, -76.9740442),
(4, 'Universidad Peruana de Ciencias Aplicadas - San Isidro', -12.0874459, -77.0521308);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `UsuarioID` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Estado` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Sector` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Area` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Codigo_Empleado` int(11) NOT NULL,
  `SedeID` int(11) NOT NULL,
  `HorarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`UsuarioID`, `Nombre`, `Estado`, `Sector`, `Contrasena`, `Area`, `Codigo_Empleado`, `SedeID`, `HorarioID`) VALUES
(1, 'Manuel Sirvas', 'ACTIVO', '01', '123456', 'Sistemas', 72715633, 1, 3),
(2, 'Gustavo Carrillo', 'ACTIVO', '01', '654321', 'Sistemas', 71625040, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario_Permiso`
--

CREATE TABLE `Usuario_Permiso` (
  `Usuario_PermisoID` int(11) NOT NULL,
  `PermisoID` int(11) NOT NULL,
  `UsuarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Dia`
--
ALTER TABLE `Dia`
  ADD PRIMARY KEY (`DiaID`),
  ADD KEY `HorarioID` (`HorarioID`);

--
-- Indices de la tabla `Horario`
--
ALTER TABLE `Horario`
  ADD PRIMARY KEY (`HorarioID`);

--
-- Indices de la tabla `Marca`
--
ALTER TABLE `Marca`
  ADD PRIMARY KEY (`MarcaID`),
  ADD KEY `UsuarioID` (`UsuarioID`);

--
-- Indices de la tabla `Permiso`
--
ALTER TABLE `Permiso`
  ADD PRIMARY KEY (`PermisoID`);

--
-- Indices de la tabla `Sede`
--
ALTER TABLE `Sede`
  ADD PRIMARY KEY (`SedeID`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`UsuarioID`),
  ADD UNIQUE KEY `Codigo_Empleado` (`Codigo_Empleado`),
  ADD KEY `SedeID` (`SedeID`),
  ADD KEY `HorarioID` (`HorarioID`);

--
-- Indices de la tabla `Usuario_Permiso`
--
ALTER TABLE `Usuario_Permiso`
  ADD PRIMARY KEY (`Usuario_PermisoID`),
  ADD KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `PermisoID` (`PermisoID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Dia`
--
ALTER TABLE `Dia`
  MODIFY `DiaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `Horario`
--
ALTER TABLE `Horario`
  MODIFY `HorarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Marca`
--
ALTER TABLE `Marca`
  MODIFY `MarcaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Permiso`
--
ALTER TABLE `Permiso`
  MODIFY `PermisoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Sede`
--
ALTER TABLE `Sede`
  MODIFY `SedeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `UsuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Usuario_Permiso`
--
ALTER TABLE `Usuario_Permiso`
  MODIFY `Usuario_PermisoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Dia`
--
ALTER TABLE `Dia`
  ADD CONSTRAINT `Dia_ibfk_1` FOREIGN KEY (`HorarioID`) REFERENCES `Horario` (`HorarioID`);

--
-- Filtros para la tabla `Marca`
--
ALTER TABLE `Marca`
  ADD CONSTRAINT `Marca_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `Usuario` (`UsuarioID`);

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`SedeID`) REFERENCES `Sede` (`SedeID`),
  ADD CONSTRAINT `Usuario_ibfk_2` FOREIGN KEY (`HorarioID`) REFERENCES `Horario` (`HorarioID`);

--
-- Filtros para la tabla `Usuario_Permiso`
--
ALTER TABLE `Usuario_Permiso`
  ADD CONSTRAINT `Usuario_Permiso_ibfk_1` FOREIGN KEY (`UsuarioID`) REFERENCES `Usuario` (`UsuarioID`),
  ADD CONSTRAINT `Usuario_Permiso_ibfk_2` FOREIGN KEY (`PermisoID`) REFERENCES `Permiso` (`PermisoID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

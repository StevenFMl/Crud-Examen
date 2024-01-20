-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2024 a las 03:01:05
-- Versión del servidor: 10.4.24-MariaDB-log
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_empleado` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Cargo` varchar(50) NOT NULL,
  `Salario` decimal(10,0) NOT NULL,
  `Fecha_contratacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_empleado`, `Nombre`, `Cargo`, `Salario`, `Fecha_contratacion`) VALUES
(1, 'Steven', 'Empleado', '5000', '2024-01-19'),
(5, 'Anderson', 'Administrador', '5000', '2024-01-19'),
(6, 'Flores', 'Empleado', '500', '2024-01-19'),
(7, 'Poter', 'Administrador', '500', '2024-01-19'),
(8, 'Wilmer', 'Empresario', '1000', '2024-01-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `ID_proyecto` int(11) NOT NULL,
  `ID_empleado_responsable` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`ID_proyecto`, `ID_empleado_responsable`, `Nombre`, `Fecha_inicio`, `Fecha_fin`) VALUES
(2, 1, 'Marco Teoricccc', '2024-01-19', '2024-01-25'),
(4, 5, 'dsa', '2024-01-19', '2024-01-19'),
(10, 7, 'tttttttttttttt', '2024-01-19', '2024-01-19'),
(11, 8, 'Trabajos Online', '2024-01-19', '2024-01-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_empleado`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`ID_proyecto`),
  ADD UNIQUE KEY `ID_empleado_responsable` (`ID_empleado_responsable`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `ID_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`ID_empleado_responsable`) REFERENCES `empleados` (`ID_empleado`);
COMMIT;
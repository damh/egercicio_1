-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2021 a las 19:44:07
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notas_damh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_damh`
--

CREATE TABLE `alumnos_damh` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Genero` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos_damh`
--

INSERT INTO `alumnos_damh` (`Id`, `Nombre`, `Fecha_nacimiento`, `Genero`) VALUES
(2, 'diego', '2021-06-10', 'masculino'),
(3, 'diego', '2021-06-08', 'masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_damh`
--

CREATE TABLE `nota_damh` (
  `Id` int(11) DEFAULT NULL,
  `Nota` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nota_damh`
--

INSERT INTO `nota_damh` (`Id`, `Nota`) VALUES
(3, 5),
(2, 3),
(2, 5),
(2, 5),
(2, 1),
(2, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos_damh`
--
ALTER TABLE `alumnos_damh`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `nota_damh`
--
ALTER TABLE `nota_damh`
  ADD KEY `nota_damh` (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos_damh`
--
ALTER TABLE `alumnos_damh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nota_damh`
--
ALTER TABLE `nota_damh`
  ADD CONSTRAINT `nota_damh` FOREIGN KEY (`Id`) REFERENCES `alumnos_damh` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

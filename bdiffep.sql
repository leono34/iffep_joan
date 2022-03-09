-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2022 a las 09:14:43
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdiffep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `IdAlumno` int(4) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(9) NOT NULL,
  `contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`IdAlumno`, `Nombre`, `Email`, `celular`, `contraseña`) VALUES
(1001, 'Melisa Vargas', 'megabyte@gmail.com', 923435020, '1234sa57'),
(1002, 'Macha Huallipe Joan Isael', 'anayamul@gmail.com', 923423520, '1234'),
(1003, 'Berlin', 'iestpffaa@gmail.com', 973523426, '123456'),
(1004, 'Altazor', 'admin@gmail.com', 974563524, '1234567'),
(1005, 'Camilo', 'camila@gmail.com', 923456234, '1qwe23'),
(1006, 'Navarrete', 'navarrete@gmail.com', 975432566, '1234'),
(1007, 'Lambramani', 'lambramani@gmail.com', 975643233, '1234'),
(1098, 'Altazor camilo', 'silviaceniza@gmail.com', 923435023, '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`IdAlumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

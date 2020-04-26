-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2020 a las 21:46:53
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `personas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Alexandra', 'Prada', 'calle 12', '4252514', 'Alexa.123@hotmail.com'),
(2, 'jose', 'Batman', 'cale1221', '245332', 'btx@gmail.com'),
(4, 'Maria', 'Lopez', 'calle 25 #12-33', '49274274', 'maria@hotmail.com'),
(5, 'Patricia', 'Perez', 'avenida 34-23', '359891489', 'patrix@hotmail.com'),
(6, 'Oscar', 'Gomez', 'calle 24', '19824991', 'oscarin@outlook.com'),
(7, 'Juan', 'Cordoba', 'carrera 5 #13-33', '98419849', 'juanLol@outlook.com'),
(8, 'El ', 'brayan', 'Mi direccion es la calle pai', '24155923', 'laplataolavida@hotmail.com'),
(9, 'Bruce', 'Wayne', 'Ciudad gótica 32', '4124090', 'batman@yahoo.com'),
(10, 'Michael', 'Jackson', 'Barrio Billie Jean', '9482948', 'auuuuuuu@gmail.com'),
(11, 'juana', 'prado', 'calle 74', '214148124', 'juana@outlook.com'),
(12, 'Manuel', 'Gomez', 'calle 24 #12-32', '5745324', 'manuelito@yahoo.es'),
(13, 'Andres', 'Martinez', 'carrera 25', '41241253', 'andres@example.com'),
(14, 'Andres', 'Martinez', 'carrera 25', '41241253', 'andres@example.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

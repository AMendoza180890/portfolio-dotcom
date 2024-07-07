-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2024 a las 08:36:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbportfolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproject`
--

CREATE TABLE `tblproject` (
  `id` int(11) NOT NULL,
  `nameProject` text DEFAULT NULL,
  `descriptionProject` text DEFAULT NULL,
  `linkProject` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tblproject`
--

INSERT INTO `tblproject` (`id`, `nameProject`, `descriptionProject`, `linkProject`) VALUES
(1, 'ianLAMP', 'This is my dockerized LAMP stack self-hosting project. It further expands upon my ian-web and portfolio-dot-com projects. I created a searchable database of items in the Projects section of my portfolio website to showcase my skills.', 'https://github.com/iancalbreath/ianLAMP'),
(2, 'python-termfactor-calculator', 'This is a termial and factorial calculator I developed for my Python class.', 'https://github.com/iancalbreath/python-termfactor-calculator'),
(3, 'SQL-exercise-solutions-Hackerrank.com', 'These are the solutions I developed to the problems demonstrated by hackerrank.com\'s SQL exercises.', 'https://github.com/iancalbreath/SQL-exercise-solutions-Hackerrank.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblproject`
--
ALTER TABLE `tblproject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblproject`
--
ALTER TABLE `tblproject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

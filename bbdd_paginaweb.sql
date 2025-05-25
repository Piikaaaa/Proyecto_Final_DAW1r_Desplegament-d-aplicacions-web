-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql211.infinityfree.com
-- Tiempo de generación: 25-05-2025 a las 05:32:31
-- Versión del servidor: 10.6.19-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_39000541_juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `caratula` varchar(255) DEFAULT NULL,
  `plataforma` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `titulo`, `caratula`, `plataforma`, `genero`, `anio`) VALUES
(1, 'Grand Theft Auto V Enhanced', 'imagenes/gtav.jpg', 'PC', 'Acción, Aventuras, Mundo abierto', 2025),
(2, 'Dead Island 2', 'imagenes/deadisland2.jpg', 'PC', 'Acción, Terror', 2023),
(3, 'The Witcher 3', 'imagenes/witcher3.jpg', 'PC', 'RPG', 2015),
(4, 'Cyberpunk 2077', 'imagenes/cyberpunk2077.jpg', 'PC', 'Acción', 2020),
(5, 'Minecraft: Java Edition', 'imagenes/minecraft.jpg', 'PC', 'Sandbox', 2011),
(6, 'Among Us', 'imagenes/amongus.jpg', 'PC', 'Multijugador', 2018),
(7, 'Valorant', 'imagenes/valorant.jpg', 'PC', 'Acción, FPS', 2021),
(8, 'Rainbow Six Siege', 'imagenes/r6.jpg', 'PC', 'Acción, FPS, Estrategia', 2015);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

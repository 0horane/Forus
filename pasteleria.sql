-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2021 a las 16:27:22
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasteleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Recipe_ID` int(11) NOT NULL,
  `Text` longtext NOT NULL,
  `Created_At` datetime NOT NULL,
  `Deleted_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorites`
--

CREATE TABLE `favorites` (
  `User_id` int(10) UNSIGNED NOT NULL,
  `Recipes_id` int(10) UNSIGNED NOT NULL,
  `Created_At` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipes`
--

CREATE TABLE `recipes` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Description` longtext NOT NULL,
  `Views` int(11) DEFAULT NULL,
  `ingredients` longtext NOT NULL,
  `steps` longtext NOT NULL,
  `img_path` varchar(64) DEFAULT NULL,
  `Created_At` datetime NOT NULL,
  `Deleted_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(64) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `PhoneNumber` varchar(64) DEFAULT NULL,
  `Created_At` datetime NOT NULL,
  `Deleted_At` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recipes`
--
ALTER TABLE `recipes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2023 a las 15:27:40
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `market`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dos`
--

CREATE TABLE `dos` (
  `id` int(11) NOT NULL,
  `last_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Firs_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `delected_at` timestamp NULL DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Firs_Name`, `Last_Name`, `email`, `password`, `created_at`, `updated_at`, `delected_at`, `id`) VALUES
('luis', 'Lopez', 'lalopez.0259@unicesmag.ed', 'Luisx2701', '2023-04-21 12:57:10', NULL, NULL, 1),
('joan', 'ayala', 'joan@gmail.com', '1234', '2023-04-21 13:44:21', NULL, NULL, 8),
('luis', 'Lopez', 'lalopez.0259@unicesmag.ed', 'Luisx2701', '2023-04-24 12:27:50', NULL, NULL, 40),
('Dorian', 'Bolaños', 'doritos@gmail.com', '123456', '2023-04-24 12:50:58', NULL, NULL, 53),
('luis', 'lopez', 'luis@gmail.com', 'lopez2701', '2023-04-24 12:56:25', NULL, NULL, 56),
('luis', 'lopez', 'luis@gmail.com', 'lopez2701', '2023-04-24 12:56:41', NULL, NULL, 57),
('jonh', 'Bolaños', 'doritos@gmail.com', 'e10adc3949ba59abbe56e057f', '2023-04-24 13:17:05', NULL, NULL, 61),
('dasda', 'sdasdad', 'asdsada', '8f4031bfc7640c5f267b11b6f', '2023-04-28 13:36:18', NULL, NULL, 70),
('dasda', 'sdasdad', 'asdsada', '8f4031bfc7640c5f267b11b6f', '2023-04-28 13:36:22', NULL, NULL, 71);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

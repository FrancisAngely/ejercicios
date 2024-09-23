-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2024 a las 18:23:04
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
-- Base de datos: `dashboard1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `created_at`, `updated_at`) VALUES
(2, 'Fer', 'Suarez', '2024-09-17 18:49:16', '2024-09-17 18:49:16'),
(3, 'Bruno Jose', 'Caceres', '2024-09-17 18:49:29', '2024-09-17 18:49:29'),
(5, 'Carmen ', 'Gamboa', '2024-09-18 03:46:11', '2024-09-18 06:46:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `iva` double NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `imagen`, `precio`, `iva`, `stock`, `created_at`, `update_at`) VALUES
(3, 'movil', 'iphone', 1000, 12, 2, '2024-09-19 08:32:17', '2024-09-19 08:32:17'),
(4, 'ordenador', 'nilox', 1200, 12, 8000, '2024-09-19 08:39:00', '2024-09-19 08:39:00'),
(5, '', 'productos/producto_5.jpg', 0, 0, 0, '2024-09-23 05:12:08', '2024-09-23 05:53:08'),
(6, 'Iphone 17', ' ', 50000, 20, 1, '2024-09-23 05:12:42', '2024-09-23 05:12:42'),
(7, 'Iphone 16', 'productos/producto_7.png', 0, 0, 0, '2024-09-23 05:16:32', '2024-09-23 05:16:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `pass`, `nombre`, `apellidos`, `email`, `created_at`, `updated_at`) VALUES
(5, 'fagg', '12345', 'Francis ', 'Gamboa', 'francis@correo.com', '2024-09-18 07:22:56', '2024-09-19 06:58:26'),
(6, 'BrunoCat', 'asdf', 'Bruno', 'Caceres', 'Brunogatito@catlive.com', '2024-09-19 06:59:11', '2024-09-19 06:59:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

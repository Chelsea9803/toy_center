-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2021 a las 17:00:16
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `toys_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `cli_nombre` varchar(245) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `ma_id` int(11) NOT NULL,
  `ma_nombre` varchar(45) NOT NULL,
  `ma_active` varchar(10) NOT NULL DEFAULT 'SI'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`ma_id`, `ma_nombre`, `ma_active`) VALUES
(1, 'TOYS', 'SI'),
(2, 'LEGO', 'NO'),
(3, 'MATEL', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `per_id` int(11) NOT NULL,
  `per_nombre` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`per_id`, `per_nombre`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `prd_id` int(11) NOT NULL,
  `prd_nombre` varchar(165) NOT NULL,
  `prd_cost` decimal(30,2) NOT NULL,
  `prd_price` decimal(30,2) NOT NULL,
  `prd_stock` int(10) NOT NULL,
  `ma_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `url_prod` varchar(500) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`prd_id`, `prd_nombre`, `prd_cost`, `prd_price`, `prd_stock`, `ma_id`, `pro_id`, `url_prod`) VALUES
(1, 'MUÑECO 1', '100.00', '2500.00', 8, 1, 1, 'Imagen1.jpg'),
(2, 'MUÑECO 2', '500.00', '2500.00', 10, 1, 1, 'Imagen2.jpg'),
(3, 'MUÑECO 3', '300.00', '8000.00', 5, 1, 1, 'Imagen3.jpg'),
(4, 'MUÑECO 4', '500.00', '2500.00', 3, 1, 1, 'Imagen4.jpg'),
(5, 'MUÑECO 5', '630.00', '7500.00', 1, 1, 1, 'Imagen5.jpg'),
(6, 'MUÑECO 6', '893.00', '8900.00', 10, 1, 1, 'Imagen6.jpg'),
(7, 'MUÑECO 7', '790.00', '9000.00', 10, 1, 1, 'Imagen7.jpg'),
(8, 'MUÑECO 8', '678.00', '99000.00', 10, 1, 1, 'Imagen8.jpg'),
(9, 'MUÑECO 9', '8909.00', '98000.00', 10, 1, 1, 'Imagen9.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_ventas`
--

CREATE TABLE `products_ventas` (
  `products_prd_id` int(11) DEFAULT NULL,
  `ventas_ven_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `pro_id` int(11) NOT NULL,
  `pro_nit` varchar(30) NOT NULL,
  `pro_nombre` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`pro_id`, `pro_nit`, `pro_nombre`) VALUES
(1, '12345658', 'MATELL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_nombre` varchar(200) NOT NULL,
  `user_email` varchar(165) DEFAULT NULL,
  `user_pass` varchar(200) NOT NULL,
  `user_active` varchar(10) NOT NULL,
  `per_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_nombre`, `user_email`, `user_pass`, `user_active`, `per_id`) VALUES
(1, 'usuario 1', 'd@d.com', '12345', 'si', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ven_id` int(11) NOT NULL,
  `ven_factura` varchar(45) DEFAULT NULL,
  `ven_valor` varchar(45) DEFAULT NULL,
  `ven_cliente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`ma_id`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`per_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `ma_id` (`ma_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indices de la tabla `products_ventas`
--
ALTER TABLE `products_ventas`
  ADD KEY `products_prd_id` (`products_prd_id`),
  ADD KEY `ventas_ven_id` (`ventas_ven_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `per_id` (`per_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ven_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ma_id`) REFERENCES `marcas` (`ma_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `proveedores` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `products_ventas`
--
ALTER TABLE `products_ventas`
  ADD CONSTRAINT `products_ventas_ibfk_1` FOREIGN KEY (`ventas_ven_id`) REFERENCES `ventas` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ventas_ibfk_2` FOREIGN KEY (`products_prd_id`) REFERENCES `products` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`per_id`) REFERENCES `perfiles` (`per_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

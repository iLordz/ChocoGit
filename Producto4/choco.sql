-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2024 a las 08:44:34
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `choco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adicionales_chocolate`
--

CREATE TABLE `adicionales_chocolate` (
  `idadicionales_chocolate` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `adicionales_chocolate`
--

INSERT INTO `adicionales_chocolate` (`idadicionales_chocolate`, `nombre`, `precio`) VALUES
(1, 'Nueces', 5.00),
(2, 'Fruta seca', 10.00),
(3, 'Caramelo', 8.00),
(4, 'Cacahuate', 5.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decoraciones_chocolate`
--

CREATE TABLE `decoraciones_chocolate` (
  `iddecoraciones_chocolate` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `decoraciones_chocolate`
--

INSERT INTO `decoraciones_chocolate` (`iddecoraciones_chocolate`, `nombre`, `precio`) VALUES
(1, 'Glaseado', 5.00),
(2, 'Chispas', 3.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envolturas_chocolate`
--

CREATE TABLE `envolturas_chocolate` (
  `idenvolturas_chocolate` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `envolturas_chocolate`
--

INSERT INTO `envolturas_chocolate` (`idenvolturas_chocolate`, `nombre`, `precio`) VALUES
(1, 'Papel aluminio', 4.00),
(2, 'Papel celofan', 6.00),
(3, 'Caja de regalo', 10.00),
(4, 'Envoltura dorada', 15.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos_chocolate`
--

CREATE TABLE `modelos_chocolate` (
  `idmodelos_chocolate` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modelos_chocolate`
--

INSERT INTO `modelos_chocolate` (`idmodelos_chocolate`, `nombre`, `precio`) VALUES
(1, 'Flor', 10.00),
(2, 'Globo', 15.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `sabor` varchar(50) DEFAULT NULL,
  `tipo_chocolate` varchar(50) DEFAULT NULL,
  `tamaño` varchar(20) DEFAULT NULL,
  `decoracion` varchar(50) DEFAULT NULL,
  `envoltura` varchar(50) DEFAULT NULL,
  `adicionales` varchar(100) DEFAULT NULL,
  `fecha_pedido` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `modelo`, `sabor`, `tipo_chocolate`, `tamaño`, `decoracion`, `envoltura`, `adicionales`, `fecha_pedido`) VALUES
(18, 'Flor', 'Fresa', 'Chocolate negro', 'Chico', 'Glaseado', 'Papel aluminio', 'Nueces', '2024-03-22 07:44:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Contraseña` varchar(255) NOT NULL,
  `Rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `Nombre`, `Correo`, `Contraseña`, `Rol`) VALUES
(1, 'oscar', 'heddy4132@gmail.com', '$2y$10$/qVJzIh4ludxy6slpRT9Z.5Xm0JWoz.fygHfmw9b0fb8oEk2cGD3u', 1),
(2, 'q', 'q@q', '$2y$10$oORqSUVfdaueVnmLwJj1ueBYoRA5rSQo.gBXlY8Qxb9eq2WfieK2a', 2),
(3, 'David', 'davidgaspar51@gmail.com', '$2y$10$vo0ax.rsEfcVmowE3uib0Otz1OqI5BH7m5paGgAc0cfkUf9UyZTba', 0),
(5, 'Osvaldo', 'alejandrogaspar89@gmail.com', '$2y$10$IWHFaHdF8bujmRMwooOlYu5cJDZWl9wbGZqSAtLhqZ.I79KWO7Adq', 2),
(7, 'david', 'david@gmail.com', '$2y$10$65RhrHsCHHLg7umXxHjrr.53sBseIgJ2K5GkMvgOEPMzkKGIyyrGS', 2),
(8, '1', '1@gmail.com', '$2y$10$9bF8868wNw7jNqpQRjKxCuJ6InFRz9aMBO2mOldCvRRDqk01CIH9.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabores_chocolate`
--

CREATE TABLE `sabores_chocolate` (
  `idsabores_chocolate` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sabores_chocolate`
--

INSERT INTO `sabores_chocolate` (`idsabores_chocolate`, `nombre`, `precio`) VALUES
(1, 'Fresa', 5.00),
(2, 'Chocolate', 6.00),
(3, 'Vainilla', 4.00),
(4, 'Limón', 7.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamanios_chocolate`
--

CREATE TABLE `tamanios_chocolate` (
  `idtamanios_chocolate` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tamanios_chocolate`
--

INSERT INTO `tamanios_chocolate` (`idtamanios_chocolate`, `nombre`, `precio`) VALUES
(1, 'Chico', 20.00),
(2, 'Mediano', 35.00),
(3, 'Grande', 65.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_chocolate`
--

CREATE TABLE `tipos_chocolate` (
  `idtipos_chocolate` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos_chocolate`
--

INSERT INTO `tipos_chocolate` (`idtipos_chocolate`, `nombre`, `precio`) VALUES
(1, 'Chocolate negro', 50.00),
(2, 'Chocolate con leche', 42.00),
(3, 'Chocolate blanco', 37.00),
(4, 'Chocolate amargo', 55.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adicionales_chocolate`
--
ALTER TABLE `adicionales_chocolate`
  ADD PRIMARY KEY (`idadicionales_chocolate`);

--
-- Indices de la tabla `decoraciones_chocolate`
--
ALTER TABLE `decoraciones_chocolate`
  ADD PRIMARY KEY (`iddecoraciones_chocolate`);

--
-- Indices de la tabla `envolturas_chocolate`
--
ALTER TABLE `envolturas_chocolate`
  ADD PRIMARY KEY (`idenvolturas_chocolate`);

--
-- Indices de la tabla `modelos_chocolate`
--
ALTER TABLE `modelos_chocolate`
  ADD PRIMARY KEY (`idmodelos_chocolate`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sabores_chocolate`
--
ALTER TABLE `sabores_chocolate`
  ADD PRIMARY KEY (`idsabores_chocolate`);

--
-- Indices de la tabla `tamanios_chocolate`
--
ALTER TABLE `tamanios_chocolate`
  ADD PRIMARY KEY (`idtamanios_chocolate`);

--
-- Indices de la tabla `tipos_chocolate`
--
ALTER TABLE `tipos_chocolate`
  ADD PRIMARY KEY (`idtipos_chocolate`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adicionales_chocolate`
--
ALTER TABLE `adicionales_chocolate`
  MODIFY `idadicionales_chocolate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `decoraciones_chocolate`
--
ALTER TABLE `decoraciones_chocolate`
  MODIFY `iddecoraciones_chocolate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `envolturas_chocolate`
--
ALTER TABLE `envolturas_chocolate`
  MODIFY `idenvolturas_chocolate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modelos_chocolate`
--
ALTER TABLE `modelos_chocolate`
  MODIFY `idmodelos_chocolate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `sabores_chocolate`
--
ALTER TABLE `sabores_chocolate`
  MODIFY `idsabores_chocolate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tamanios_chocolate`
--
ALTER TABLE `tamanios_chocolate`
  MODIFY `idtamanios_chocolate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipos_chocolate`
--
ALTER TABLE `tipos_chocolate`
  MODIFY `idtipos_chocolate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

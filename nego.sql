-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2024 a las 21:00:35
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
-- Base de datos: `nego`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combos`
--

CREATE TABLE `combos` (
  `idCombo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `combos`
--

INSERT INTO `combos` (`idCombo`, `nombre`) VALUES
(1, 'Milanesa napolitana + Vaso de Coca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combos_info`
--

CREATE TABLE `combos_info` (
  `idCombo` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `combos_info`
--

INSERT INTO `combos_info` (`idCombo`, `idProducto`, `cantidad`) VALUES
(1, 1, 1),
(1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` int(11) NOT NULL,
  `idSucursal` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `dni` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `idSucursal`, `nombre`, `apellido`, `dni`, `email`, `telefono`) VALUES
(1, 1, 'Juan', 'Vidal', 10584923, 'juanvidal534@gmail.com', 1193847283);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `idIngrediente` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`idIngrediente`, `nombre`) VALUES
(1, 'Pan para hamburguesa'),
(2, 'Pan para pancho'),
(3, 'Salchicha'),
(4, 'Paty'),
(5, 'Lechuga'),
(6, 'Tomate'),
(7, 'Coca-Cola'),
(8, 'Carne-lomo'),
(9, 'Carne-paleta'),
(10, 'Pan Rallado'),
(11, 'Huevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `idProductos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `idUsuario`, `direccion`, `idProductos`) VALUES
(1, 1, 'Luis María Drago 394', '2,3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_info`
--

CREATE TABLE `pedidos_info` (
  `idPedido` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `url_imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `precio`, `tipo`, `url_imagen`) VALUES
(1, 'Milanesa', 150, 'comida', ''),
(2, 'Hamburguesa', 200, 'comida', ''),
(3, 'Vaso de Coca-Cola', 50, 'bebida', ''),
(7, 'Empanda', 10, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_ingredientes`
--

CREATE TABLE `productos_ingredientes` (
  `idProducto` int(11) NOT NULL,
  `idIngrediente` int(11) NOT NULL,
  `cantidad` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos_ingredientes`
--

INSERT INTO `productos_ingredientes` (`idProducto`, `idIngrediente`, `cantidad`) VALUES
(1, 9, '1'),
(2, 1, '2'),
(3, 7, '250ml');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `idSucursal` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `horaIngreso` time NOT NULL,
  `horaSalida` time NOT NULL,
  `telefono` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`idSucursal`, `nombre`, `direccion`, `horaIngreso`, `horaSalida`, `telefono`) VALUES
(1, 'Super panchos', ' san juan 333', '08:00:00', '16:00:00', 911234343),
(8, 'Panchos Don José', 'Buenos Aires 1554', '09:30:00', '17:30:00', 1158473295);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales_stock`
--

CREATE TABLE `sucursales_stock` (
  `idSucursal` int(11) NOT NULL,
  `idIngrediente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `email`, `password`) VALUES
(1, 'pato', 'patito123@gmail.com', '123'),
(2, 'asddsa', 'wdwd@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(3, 'santi', 'hola@gmai.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `combos`
--
ALTER TABLE `combos`
  ADD PRIMARY KEY (`idCombo`);

--
-- Indices de la tabla `combos_info`
--
ALTER TABLE `combos_info`
  ADD KEY `fk_combos` (`idCombo`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`idIngrediente`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `pedidos_info`
--
ALTER TABLE `pedidos_info`
  ADD KEY `fk_pedidos` (`idPedido`),
  ADD KEY `fk_productos` (`idProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `productos_ingredientes`
--
ALTER TABLE `productos_ingredientes`
  ADD KEY `fk_producto` (`idProducto`),
  ADD KEY `fk_ingrediente` (`idIngrediente`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`idSucursal`);

--
-- Indices de la tabla `sucursales_stock`
--
ALTER TABLE `sucursales_stock`
  ADD KEY `fk_sucursal` (`idSucursal`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `combos`
--
ALTER TABLE `combos`
  MODIFY `idCombo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `idIngrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

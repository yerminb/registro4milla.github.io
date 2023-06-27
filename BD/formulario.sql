-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2023 a las 01:13:01
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id_formulario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `edad` varchar(3) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tipo_sangre` varchar(10) NOT NULL,
  `contacto_emergencia` varchar(50) NOT NULL,
  `telefono_emergencia` varchar(20) NOT NULL,
  `fecha_actual` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_formulario`, `nombre`, `apellido`, `dni`, `edad`, `departamento`, `municipio`, `direccion`, `telefono`, `tipo_sangre`, `contacto_emergencia`, `telefono_emergencia`, `fecha_actual`) VALUES
(12, 'YERMIN NOEL', 'CRUZ BARRIENTOS', '0101199303', '30', '', '', 'COL. LAS DELICIAS', '96558908', '', 'ANA', '98909879', ''),
(13, 'egf', 'erf', 'efr', '323', '', '', ',kmkmp', 's2324', '2', 'mmpmp', 'knono', ''),
(14, 'hola', 'hola1', 'hola2', '30', '', '', 'knok', '234324', '1', 'm ', '211e1', ''),
(15, 'no', 'ibib', '76869879', '89', '4', '53', 'lknnkn', '7687787', '1', 'lnlknln', '76876', ''),
(16, 'dlkk', '76', '8090', '898', '5', '72', 'kk', '76876', '2', 'kkm;;l', '98979', ''),
(17, '77688', '87987', '8787', '78', '', '54', '8', '887', '1', '779', '7787', ''),
(18, '77688', '87987', '8787', '78', '', '54', '8', '887', '1', '779', '7787', ''),
(19, '77688', '87987', '8787', '78', '4', '54', '8', '887', '1', '779', '7787', ''),
(20, 'klm', 'hgj', '78', '8', '3', '38', 'lknl', '87678', '1', 'LN90', '90', ''),
(21, 'kmlk', 'jnm', '8', '98', '5', '71', 'mlkmk', '123', '1', 'kln', '9', ''),
(22, 'h', '67', '87', '7', '5', '74', '8', '8', '2', '8', '7', ''),
(23, '7', '8', '8', '8', '8', '131', 'ho@hotmail.com=o----', '89', '2', '-09', '-09', ''),
(24, '089', '09-09', '09', '98', '3', '', 'kjlkj', '909', '2', '-', '88', ''),
(25, 'k;lk', 'lk;l', '878', '87', '5', '74', '8', '87', '2', '878', '97', ''),
(26, 'PRUEBA', 'CRUZ', '0101', '30', '2', '29', 'COL. LAS DELICIAS', '12313132', '1', 'CARLAS', '121212', ''),
(27, '00', '00', '8798', '878', '1', '13', 'lknk', '980', '1', 'kn;k', '90809', ''),
(28, 'iuo', 'io', '87', '76', '5', '73', '876', '7887', 'Selecciona', '76', '867', ''),
(29, 'opi', 'opi', '987', '87', '3', '43', 'hjkbh', '798', '2', 'HJHBK', '8789', ''),
(30, 'NNNNNNNN', 'BV', '87', '897', '5', '75', '798', '778', '1', '8798', '798', ''),
(31, 'nm,', 'l', '65', '56', '5', '76', 'yy8', '80876', '2', '6vhgv', '6878', ''),
(32, 'ultima', 'ojb', '8787', '898', '10', '153', 'kmnkln', '789789', '1', 'knnkjbj', '897087', ''),
(33, 'nkjbnj', 'jbblk ', '879', '78', '5', '72', 'jkbljb', '897897', '1', 'uhoil', '7909', ''),
(34, 'iug', 'bhbh', '07', '88', '6', '92', 'jhvkv', '70', 'Selecciona', 'hkvjh', '089708', ''),
(35, 'oop', 'jj', '798', '9', '6', '96', 'jhlb', '789', 'Selecciona', 'lbj', '789', ''),
(36, 'lhjhv', '766', '786', '769', '2', '30', '767', '767', '1', '76', '80', '2023-06-27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_formulario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

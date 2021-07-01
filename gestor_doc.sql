-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2021 a las 09:12:30
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor_doc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(50) COLLATE utf8_bin NOT NULL,
  `actividad` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `documento` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_documento`, `nombre`, `categoria`, `actividad`, `fecha`, `documento`) VALUES
(1, 'JUAN', 'Escuela', '0', '2021-06-21', 'archivos/21-06-21-21-44-47 -Actividades lunes 21 de junio.pdf'),
(2, 'SANDRA', 'Trabajo', '0', '2021-06-01', 'archivos/21-06-21-21-47-33 -Tecnológico Nacional de México-chido.docx'),
(3, 'Sara', 'Academia', '0', '2021-06-08', 'archivos/22-06-21-06-07-12 -002-06 Formato de Tarjeta de Control de Servicio Social TecNM-VI-PO-002-06.doc'),
(4, 'SARAI', 'Escuela', 'Artes', '2021-06-16', 'archivos/24-06-21-18-39-48 -Reporte tecnico.docx'),
(5, 'Eduardo', 'archivos', 'juntas', '2021-06-01', 'archivos/28-06-21-20-21-28 -gestor-tareas.sql'),
(6, 'Ximena', 'Academia', 'Artes', '2021-06-07', 'Academia/29-06-21-06-59-26 -Recibo-202106.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

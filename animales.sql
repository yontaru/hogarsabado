-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2020 a las 21:12:07
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hogarsabado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `tipoanimal` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `comida` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `edad`, `tipoanimal`, `descripcion`, `comida`, `foto`) VALUES
(1, 'Tigre', 7, 2, 'Encontrado en cautiverio', 'Carne', 'https://github.com/yontaru/FotoAnimales/blob/main/tigre.jpeg?raw=true'),
(2, 'Caballo', 2, 1, 'Abandonado en una carretera', 'Avena', 'https://github.com/yontaru/FotoAnimales/blob/main/caballo.jpg?raw=true'),
(3, 'Leon', 5, 2, 'En cautiverio para exhibicón, rescatado en estado de desnutrición', 'Carne', 'https://github.com/yontaru/FotoAnimales/blob/main/leon.png?raw=true'),
(4, 'Gato', 2, 1, 'Encontrado en una alcantarilla con problemas respiratorios', 'Whiskas', 'https://github.com/yontaru/FotoAnimales/blob/main/gato.jpg?raw=true'),
(5, 'Perro', 4, 1, 'usado para peleas clandestinas, rescatado con heridas en la cabeza', 'Dogourmet', 'https://github.com/yontaru/FotoAnimales/blob/main/perro.jpg?raw=true'),
(6, 'Elefante', 8, 2, 'Enjaulado por  cazadores, rescatado antes de su exportación, sin colmillos', 'Suplementos', 'https://github.com/yontaru/FotoAnimales/blob/main/elefante.jpg?raw=true'),
(7, 'Orangután', 10, 2, 'Rescatado antes de que los cazadores se llevaran la jaula donde lo atraparon, con heridas  en los br', 'Banana', 'https://github.com/yontaru/FotoAnimales/blob/main/orangutan.jpg?raw=true'),
(8, 'Tucán', 5, 1, 'Maltratado por su antiguo dueño, se rescata con evidencia de cortes en sus alas', 'Semillas', 'https://github.com/yontaru/FotoAnimales/blob/main/tucan.jpg?raw=true'),
(9, 'Rinoceronte', 7, 2, 'Se logra rescatar luego de que unos cazadores quisieran cortarle el cuerno, presenta heridas en las ', 'Pasto', 'https://github.com/yontaru/FotoAnimales/blob/main/rinoceronte.jpg?raw=true'),
(10, 'Tortuga', 50, 1, 'Hallada en un restaurante usada para poner huevos y venderlos.', 'Algas', 'https://github.com/yontaru/FotoAnimales/blob/main/tortuga.jpg?raw=true');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

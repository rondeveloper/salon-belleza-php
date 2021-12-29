-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-12-2021 a las 22:27:43
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salon de belleza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE IF NOT EXISTS `agenda` (
  `ID_AGENDA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_SUCURSAL` int(11) NOT NULL,
  `AGENDA_CITA` text COLLATE utf8_spanish_ci NOT NULL,
  `AGENDA_FECHA_INICIO_FIN` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_AGENDA`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SUCURSAL` (`ID_SUCURSAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

DROP TABLE IF EXISTS `cita`;
CREATE TABLE IF NOT EXISTS `cita` (
  `ID_CITA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_SERVICIO` int(11) NOT NULL,
  `ID_CLIENTE` int(11) NOT NULL,
  `ID_SUCURSAL` int(11) NOT NULL,
  `TIPO_DE_SERVICIO` text COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_DE_LA_CITA` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `HORA_DE_LA_CITA` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `ID_ESTILISTA` int(11) NOT NULL,
  `ESTADO_DE_LA_CITA` text COLLATE utf8_spanish_ci NOT NULL,
  `VALOR` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_CITA`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SUCURSAL` (`ID_SUCURSAL`),
  KEY `ID_SERVICIO` (`ID_SERVICIO`),
  KEY `ID_CLIENTE` (`ID_CLIENTE`),
  KEY `ID_ESTILISTA` (`ID_ESTILISTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_SERVICIO` int(11) NOT NULL,
  `ID_SUCURSAL` int(11) NOT NULL,
  `ID_OFERTA` int(11) DEFAULT NULL,
  `NOMBRE` text COLLATE utf8_spanish_ci NOT NULL,
  `DIRECCION` text COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `CIUDAD` text COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_DE_NACIMIENTO` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_CLIENTE`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SUCURSAL` (`ID_SUCURSAL`),
  KEY `ID_SERVICIO` (`ID_SERVICIO`),
  KEY `ID_OFERTA` (`ID_OFERTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilista`
--

DROP TABLE IF EXISTS `estilista`;
CREATE TABLE IF NOT EXISTS `estilista` (
  `ID_ESTILISTA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_SUCURSAL` int(11) NOT NULL,
  `NOMBRE` text COLLATE utf8_spanish_ci NOT NULL,
  `TURNO` text COLLATE utf8_spanish_ci NOT NULL,
  `CARGO` text COLLATE utf8_spanish_ci NOT NULL,
  `SUELDO` text COLLATE utf8_spanish_ci NOT NULL,
  `E-MAIL` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `TELEFONO-2` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ESTILISTA`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SUCURSAL` (`ID_SUCURSAL`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estilista`
--

INSERT INTO `estilista` (`ID_ESTILISTA`, `ID_USUARIO`, `ID_SUCURSAL`, `NOMBRE`, `TURNO`, `CARGO`, `SUELDO`, `E-MAIL`, `TELEFONO`, `TELEFONO-2`) VALUES
(6, 1, 1, '2', '3', '2', '3', '2@3', 1, 1),
(7, 1, 1, '2', '3', '2', '3', '2@3', 1, 1),
(8, 1, 1, 'guapo greg', 'los angeles', 'tommy', 'las reglas de la clase son simples', 'trabajen@duro', 6, 6),
(9, 1, 1, 'llegen a tiempo', 'traten de no dormirse', 'tommy', 'alguna pregunta', 'antes@deiniciar', 6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

DROP TABLE IF EXISTS `ofertas`;
CREATE TABLE IF NOT EXISTS `ofertas` (
  `ID_OFERTA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_SERVICIO` int(11) NOT NULL,
  `OFERTA` text COLLATE utf8_spanish_ci NOT NULL,
  `PRECIO_OFERTA` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_OFERTA`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SERVICIO` (`ID_SERVICIO`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`ID_OFERTA`, `ID_USUARIO`, `ID_SERVICIO`, `OFERTA`, `PRECIO_OFERTA`) VALUES
(9, 1, 1, 'oferta de fin de ano corte de cabello unisex', '55BOB'),
(10, 1, 1, 'oferta de fin de ano corte de cabello unisex', '55BOB'),
(11, 1, 1, 'las reglas de la clase son simples', 'trabajen duro'),
(12, 1, 1, 'haria lo que fuera por mi chica', 'trabajen duro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
--

DROP TABLE IF EXISTS `precio`;
CREATE TABLE IF NOT EXISTS `precio` (
  `ID_PRECIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_SERVICIO` int(11) NOT NULL,
  `PRECIO` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_PRECIO`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_SERVICIO` (`ID_SERVICIO`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `precio`
--

INSERT INTO `precio` (`ID_PRECIO`, `ID_USUARIO`, `ID_SERVICIO`, `PRECIO`) VALUES
(1, 2, 2, '40BOB'),
(2, 2, 2, '100BOB'),
(3, 2, 2, '50BOB'),
(4, 2, 2, '30BOB'),
(5, 2, 2, '20BOB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE IF NOT EXISTS `servicio` (
  `ID_SERVICIO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `ID_PRECIO` int(11) NOT NULL,
  `SERVICIO` text COLLATE utf8_spanish_ci NOT NULL,
  `ESPECIFICO` text COLLATE utf8_spanish_ci,
  `NOTA` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`ID_SERVICIO`),
  KEY `ID_USUARIO` (`ID_USUARIO`),
  KEY `ID_PRECIO` (`ID_PRECIO`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`ID_SERVICIO`, `ID_USUARIO`, `ID_PRECIO`, `SERVICIO`, `ESPECIFICO`, `NOTA`) VALUES
(1, 2, 1, 'Corte de cabello Unisex', 'dura una hora', 'si el corte dura mas tiempo se debe cobrar mas '),
(2, 2, 2, 'Tintes', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(3, 2, 3, 'Mechas', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(4, 2, 4, 'Manicure', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(5, 2, 4, 'Pedicure', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(6, 2, 5, 'Alicer con Keratina', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(7, 2, 2, 'Botox', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(8, 2, 2, 'Limpieza Facial', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(9, 2, 2, 'Masajes de Relajacion', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(10, 2, 2, 'Masajes Antiestres', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(11, 2, 2, 'Masajes Reductores', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo'),
(12, 2, 5, 'Extension de PestaÃ±as', 'dura una hora', 'el servicio seria mas alto el precio si se pasa el tiempo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE IF NOT EXISTS `sucursal` (
  `ID_SUCURSAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` int(11) NOT NULL,
  `SUCURSAL` text COLLATE utf8_spanish_ci NOT NULL,
  `DIRECCION` text COLLATE utf8_spanish_ci NOT NULL,
  `E-MAIL` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `HORARIO` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`ID_SUCURSAL`),
  KEY `ID_USUARIO` (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`ID_SUCURSAL`, `ID_USUARIO`, `SUCURSAL`, `DIRECCION`, `E-MAIL`, `TELEFONO`, `HORARIO`) VALUES
(10, 2, '2', 'tomy', 'greg@tomy', 1, 'guapo'),
(11, 2, '2', 'tomy', 'greg@tomy', 1, 'guapo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_USUARIO` int(55) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `CONTRASENA` text COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `NOMBRES` text COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` text COLLATE utf8_spanish_ci NOT NULL,
  `EDAD` int(55) NOT NULL,
  `TELEFONO` int(55) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `USUARIO`, `CONTRASENA`, `EMAIL`, `NOMBRES`, `APELLIDOS`, `EDAD`, `TELEFONO`) VALUES
(3, 'usuario de el ayudante-2', '123', 'ayudante2@gmail.com', 'talento', '123456', 10000, 1000000),
(9, 'salon EA6519541656', '123', 'salon@EA', 'Ayudante', 'EA', 1, 123456),
(11, 'salon', '123', 'salon@salon', 'salon', 'salon', 123, 123),
(14, 'ayudante', '1234', 'ayudante@genio', 'Ayudante', 'ayudante', 1234, 1234),
(15, 'yudante', '1234', 'ayudante@genio', 'Ayudante', 'ayudante', 1234, 1234),
(16, '2', '123', 'amo@genio', 'Ayudante', 'talento', 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`ID_SUCURSAL`) REFERENCES `sucursal` (`ID_SUCURSAL`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`ID_SUCURSAL`) REFERENCES `sucursal` (`ID_SUCURSAL`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicio` (`ID_SERVICIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_4` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `cliente` (`ID_CLIENTE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_5` FOREIGN KEY (`ID_ESTILISTA`) REFERENCES `estilista` (`ID_ESTILISTA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`ID_SUCURSAL`) REFERENCES `sucursal` (`ID_SUCURSAL`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ibfk_3` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicio` (`ID_SERVICIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ibfk_4` FOREIGN KEY (`ID_OFERTA`) REFERENCES `ofertas` (`ID_OFERTA`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

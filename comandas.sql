-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-08-2017 a las 13:04:01
-- Versión del servidor: 5.5.57-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `comandas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comanda`
--

CREATE TABLE IF NOT EXISTS `comanda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `camarero_id` int(11) NOT NULL,
  `mesa_id` int(11) NOT NULL,
  `observaciones` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pagado` tinyint(1) DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_45C50E547760FF7E` (`camarero_id`),
  KEY `IDX_45C50E548BDC7AE9` (`mesa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comanda_plato`
--

CREATE TABLE IF NOT EXISTS `comanda_plato` (
  `comanda_id` int(11) NOT NULL,
  `plato_id` int(11) NOT NULL,
  PRIMARY KEY (`comanda_id`,`plato_id`),
  KEY `IDX_49E7746787958A8` (`comanda_id`),
  KEY `IDX_49E7746B0DB09EF` (`plato_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE IF NOT EXISTS `mesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `comensales` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE IF NOT EXISTS `plato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_914B3E455E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `role`) VALUES
(1, 'administrador', 'ROLE_SUPER_ADMIN'),
(2, 'cocinero', 'ROLE_COCINERO'),
(3, 'camarero', 'ROLE_CAMARERO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `salt` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `surname`, `dni`, `phone`, `email`, `address`, `password`, `is_active`, `salt`, `discr`) VALUES
(1, 'admin', 'admin', '44444444X', 666666666, 'admin@admin.es', 'c/ Admin', '$2y$12$25adada5009f7a34e1cf8OzD0gmGBW5uHN5AfHB3MqVUMAqdurroy', 1, '25adada5009f7a34e1cf8a4977ea874d', 'administrador'),
(2, 'cocinero', 'cocinero', '44444444X', 666666666, 'cocinero@gmail.com', 'c/ cocinero', '$2y$12$8025fae98a95642607834ujdZIaQ9E.HndA0qDagGtn.xNwCVLWdW', 1, '8025fae98a9564260783487142cd90c5', 'cocinero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`roles_id`),
  KEY `IDX_54FCD59FA76ED395` (`user_id`),
  KEY `IDX_54FCD59F38C751C4` (`roles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `roles_id`) VALUES
(1, 1),
(2, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comanda`
--
ALTER TABLE `comanda`
  ADD CONSTRAINT `FK_45C50E548BDC7AE9` FOREIGN KEY (`mesa_id`) REFERENCES `mesa` (`id`),
  ADD CONSTRAINT `FK_45C50E547760FF7E` FOREIGN KEY (`camarero_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `comanda_plato`
--
ALTER TABLE `comanda_plato`
  ADD CONSTRAINT `FK_49E7746B0DB09EF` FOREIGN KEY (`plato_id`) REFERENCES `plato` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_49E7746787958A8` FOREIGN KEY (`comanda_id`) REFERENCES `comanda` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `FK_54FCD59F38C751C4` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_54FCD59FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

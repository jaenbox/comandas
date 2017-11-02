-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2017 at 12:06 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comandas`
--

-- --------------------------------------------------------

--
-- Table structure for table `comanda`
--

CREATE TABLE IF NOT EXISTS `comanda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_plato` int(11) DEFAULT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `observaciones` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_45C50E547FCE7F75` (`id_plato`),
  KEY `IDX_45C50E54E2DBA323` (`id_pedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `comanda`
--

INSERT INTO `comanda` (`id`, `id_plato`, `id_pedido`, `cantidad`, `observaciones`) VALUES
(23, 2, 9, 1, 'jsjssjjd'),
(24, 4, 9, 1, 'jsjssjjd'),
(25, 2, 10, 1, 'jshshs'),
(26, 4, 10, 1, 'jshshs'),
(27, 5, 10, 1, 'jshshs'),
(28, 3, 11, 1, ''),
(29, 4, 11, 1, ''),
(30, 2, 12, 1, 'djdjdj'),
(31, 3, 12, 1, 'djdjdj'),
(32, 4, 12, 1, 'djdjdj'),
(33, 4, 12, 1, 'djdjdj'),
(34, 4, 12, 1, 'djdjdj'),
(35, 3, 12, 1, 'djdjdj'),
(36, 3, 12, 1, 'djdjdj'),
(37, 2, 13, 1, 'hshs'),
(38, 3, 14, 1, ''),
(39, 3, 14, 1, ''),
(40, 4, 14, 1, ''),
(41, 1, 15, 1, 'hsh'),
(42, 3, 16, 1, 'gs'),
(43, 2, 16, 1, 'gs'),
(44, 2, 18, 1, 'hdhdjd'),
(45, 3, 18, 1, 'hdhdjd'),
(46, 2, 19, 1, 'aa'),
(47, 3, 19, 1, 'aa'),
(48, 2, 20, 1, 'hsh'),
(49, 4, 20, 1, 'hsh');

-- --------------------------------------------------------

--
-- Table structure for table `mesa`
--

CREATE TABLE IF NOT EXISTS `mesa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `comensales` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mesa`
--

INSERT INTO `mesa` (`id`, `num`, `comensales`) VALUES
(1, 1, 8),
(2, 2, 4),
(3, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mesa` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `pagado` tinyint(1) DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C4EC16CE13939EF0` (`id_mesa`),
  KEY `IDX_C4EC16CE6B3CA4B` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id`, `id_mesa`, `fecha`, `pagado`, `estado`, `id_user`) VALUES
(9, 2, '2017-09-12', 0, 'cocina', 2),
(10, 1, '2017-09-12', 0, 'cocina', 2),
(11, 1, '2017-09-12', 0, 'servido', 2),
(12, 1, '2017-09-12', 0, 'cocina', 2),
(13, 1, '2017-09-12', 0, 'cocina', 2),
(14, 1, '2017-09-12', 0, 'cocina', 2),
(15, 1, '2017-09-12', 0, 'cocina', 2),
(16, 1, '2017-09-12', 0, 'cocina', 2),
(17, 2, '2017-09-12', 1, 'servido', 2),
(18, 1, '2017-11-02', 0, 'cocina', 1),
(19, 3, '2017-11-02', 0, 'cocina', 3),
(20, 1, '2017-11-02', 0, 'cocina', 3);

-- --------------------------------------------------------

--
-- Table structure for table `plato`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `plato`
--

INSERT INTO `plato` (`id`, `name`, `price`, `path`, `description`, `category`) VALUES
(1, 'Fruta', 1.00, 'jpeg', 'Fruta de temporada', 'al'),
(2, 'Hamburguesa', 4.00, 'jpeg', 'Hamburguesa de la casa. Carne de vacuno, tomate, cebolla, pepinillo y nuestra salsa de la casa', 'co'),
(3, 'Tallarines', 5.00, 'jpeg', 'Tallarines con verduras', 'ce'),
(4, 'Melon/Jamon', 4.00, 'jpeg', 'Melón con Jamón', 'co'),
(5, 'Pollo', 5.00, 'jpeg', 'Muslos de pollo con salsa de la casa', 'ce'),
(6, 'Huevos', 2.00, 'jpeg', 'Huevos fritos sobre tostadas de pan.', 'al'),
(7, 'Salmon', 3.00, 'jpeg', 'Montaditos de salmón con queso a las finas hierbas', 'ce'),
(8, 'Spaghetti', 4.00, 'jpeg', 'Spaghetti con salsa carbonara', 'co'),
(9, 'Cordero', 5.00, 'jpeg', 'Plato combinado de cordero al horno acompañado de verduras de temporada', 'ce');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `role`) VALUES
(1, 'administrador', 'ROLE_SUPER_ADMIN'),
(2, 'cocinero', 'ROLE_COCINERO'),
(3, 'camarero', 'ROLE_CAMARERO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `surname`, `dni`, `phone`, `email`, `address`, `password`, `is_active`, `salt`, `discr`) VALUES
(1, 'admin', 'admin', 'admin', 666666666, 'admin@gmail.com', 'c/ Admin', '$2y$12$9620236c907e1670d71a2u4OzqhzSHj1znVdLGWpg3OWUoQbuD7vi', 1, '9620236c907e1670d71a23c12da288e8', 'administrador'),
(2, 'cocinero', 'cocinero', '44444444X', 666666666, 'cocinero@gmail.com', 'c/ Cocinero', '$2y$12$88d0e9b1bfed4ef41f90duI/f1Q3QuEPlp9WOMQP63pmeRPYn8jv2', 1, '88d0e9b1bfed4ef41f90d46f935990dc', 'cocinero'),
(3, 'camarero', 'camarero', '44444444X', 666666666, 'camarero@gmail.com', 'c/ camarero', '$2y$12$822252ad666b78b510046uVVwQzHMoz/Y5j1KHhoBp.p49bQlyjiK', 1, '822252ad666b78b51004631760351c32', 'camarero'),
(4, 'camarero2', 'camarero', '46875559x', 66666666, 'camarero2@gmail.com', 'c/ camarero', '$2y$12$4e5006eb6feaf338c6103OYz4XPHnRXzALmCqgHZQevX0ZwjyEES.', 1, '4e5006eb6feaf338c6103a4aab6f8f4d', 'camarero');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`roles_id`),
  KEY `IDX_54FCD59FA76ED395` (`user_id`),
  KEY `IDX_54FCD59F38C751C4` (`roles_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `roles_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comanda`
--
ALTER TABLE `comanda`
  ADD CONSTRAINT `FK_45C50E547FCE7F75` FOREIGN KEY (`id_plato`) REFERENCES `plato` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_45C50E54E2DBA323` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `FK_C4EC16CE13939EF0` FOREIGN KEY (`id_mesa`) REFERENCES `mesa` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_C4EC16CE6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `FK_54FCD59F38C751C4` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_54FCD59FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

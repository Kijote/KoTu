-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-07-2014 a las 13:04:00
-- Versión del servidor: 5.5.37
-- Versión de PHP: 5.3.10-1ubuntu3.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kotu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Inicio de sesión, obtenido después de confirmación de cuenta.'),
(2, 'admin', 'Usuario de Administración, tiene acceso a todo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(5, 1),
(19, 1),
(20, 1),
(21, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` char(64) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `borndate` date NOT NULL,
  `document` int(10) unsigned NOT NULL,
  `member_id` int(10) unsigned NOT NULL,
  `dependence_id` int(10) unsigned DEFAULT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `reset_token` char(64) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT '',
  `last_failed_login` datetime NOT NULL,
  `failed_login_count` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `name`, `surname`, `sex`, `borndate`, `document`, `member_id`, `dependence_id`, `logins`, `last_login`, `reset_token`, `status`, `last_failed_login`, `failed_login_count`, `created`, `modified`, `disabled`) VALUES
(1, 'amorales@ciudaddemendoza.gov.ar', 'amorales', '980ff15f272bfa097a2ae0942c17fc988bcd5941c1125f496fc7374bfc1d5586', '', '', 0, '0000-00-00', 0, 0, NULL, 31, 1404835264, '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '2011-04-12 11:19:30', 0),
(5, 'andresfernandomorales@gmail.com', 'prueba', '980ff15f272bfa097a2ae0942c17fc988bcd5941c1125f496fc7374bfc1d5586', '', '', 0, '0000-00-00', 0, 0, NULL, 5, 1302619339, '', '', '2011-04-12 05:56:42', 0, '2011-04-08 07:44:35', '2011-04-12 09:42:19', 0),
(19, 'eyanez@ciudaddemendoza.gov.ar', 'emilio', '4635588c064a21d83b6cb5633aa8b84e5ad80184a0f12945bc8015777c404886', 'Emilio', 'Yañez', 1, '0000-00-00', 23840594, 2, NULL, 0, NULL, '', '', '0000-00-00 00:00:00', 0, '2011-04-08 11:19:28', '2011-04-08 11:19:28', 0),
(20, 'kijotero@yahoo.com.ar', 'pepehongo', '980ff15f272bfa097a2ae0942c17fc988bcd5941c1125f496fc7374bfc1d5586', 'Pepe', 'Hongo', 1, '0000-00-00', 29309132, 5, NULL, 1, 1302281743, '', '', '0000-00-00 00:00:00', 0, '2011-04-08 11:54:29', '2011-04-08 11:55:43', 0),
(21, 'yo+juan@kijote.com.ar', 'juanperez', '980ff15f272bfa097a2ae0942c17fc988bcd5941c1125f496fc7374bfc1d5586', '', '', 0, '0000-00-00', 0, 0, NULL, 1, 1404835289, '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_identity`
--

CREATE TABLE IF NOT EXISTS `user_identity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(32) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

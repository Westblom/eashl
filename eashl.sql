-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Skapad: 03 jun 2014 kl 18:49
-- Serverversion: 5.6.14
-- PHP-version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `eashl`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `new` int(11) NOT NULL DEFAULT '0',
  `player_id` int(11) NOT NULL,
  `C` int(11) NOT NULL,
  `L` int(11) NOT NULL,
  `R` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `G` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumpning av Data i tabell `cards`
--

INSERT INTO `cards` (`id`, `user_id`, `new`, `player_id`, `C`, `L`, `R`, `D`, `G`, `created_at`, `updated_at`) VALUES
(1, 3, 0, 15, 70, 69, 65, 50, 17, '2014-06-03 16:11:58', '2014-06-03 16:11:58'),
(2, 3, 0, 17, 28, 28, 24, 17, 20, '2014-06-03 16:26:13', '2014-06-03 16:26:13'),
(3, 3, 0, 18, 89, 83, 84, 27, 37, '2014-06-03 16:27:34', '2014-06-03 16:27:34'),
(4, 3, 0, 20, 68, 81, 85, 39, 25, '2014-06-03 16:27:56', '2014-06-03 16:27:56'),
(5, 3, 0, 7, 87, 83, 82, 28, 26, '2014-06-03 16:28:26', '2014-06-03 16:28:26'),
(6, 3, 0, 2, 33, 20, 32, 68, 94, '2014-06-03 16:28:59', '2014-06-03 16:28:59'),
(7, 3, 0, 8, 44, 39, 38, 87, 27, '2014-06-03 16:29:13', '2014-06-03 16:29:13');

-- --------------------------------------------------------

--
-- Tabellstruktur `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_06_03_032612_create_users_table', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `packs`
--

CREATE TABLE IF NOT EXISTS `packs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cards` int(11) NOT NULL,
  `rares` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `packs`
--

INSERT INTO `packs` (`id`, `name`, `cards`, `rares`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Testpack', 1, 0, 10, '2014-06-03 00:00:00', '2014-06-03 00:00:00');

-- --------------------------------------------------------

--
-- Tabellstruktur `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `C` int(11) NOT NULL,
  `L` int(11) NOT NULL,
  `R` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `G` int(11) NOT NULL,
  `cardtype_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumpning av Data i tabell `players`
--

INSERT INTO `players` (`id`, `alias`, `C`, `L`, `R`, `D`, `G`, `cardtype_id`, `created_at`, `updated_at`) VALUES
(1, 'esskay', 75, 75, 75, 75, 75, 1, '2014-06-03 15:31:26', '2014-06-03 15:31:26'),
(2, 'weztblom', 30, 20, 25, 65, 87, 1, '2014-06-03 15:31:26', '2014-06-03 15:31:26'),
(3, 'AshtonArmy', 19, 16, 17, 20, 43, 1, '2014-06-03 16:00:02', '2014-06-03 16:00:02'),
(4, 'Fillson', 68, 62, 58, 75, 25, 1, '2014-06-03 16:00:02', '2014-06-03 16:00:02'),
(5, 'Foppatofflan', 70, 78, 90, 54, 20, 1, '2014-06-03 17:43:26', '2014-06-03 17:43:26'),
(6, 'CrAigChriZt', 85, 90, 70, 15, 15, 1, '2014-06-03 17:43:26', '2014-06-03 17:43:26'),
(7, 'Unknown 0170', 86, 79, 80, 22, 20, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(8, 'iSvamp', 43, 35, 35, 86, 25, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(9, 'Terasniska', 45, 33, 34, 90, 8, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(10, 'Pulverapa', 73, 30, 27, 70, 9, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(11, 'Rymaan', 62, 40, 64, 55, 42, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(12, 'Mattias0805', 59, 50, 72, 16, 11, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(13, 'DineLiten', 56, 69, 62, 59, 23, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(14, 'Minestor', 12, 14, 13, 65, 12, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(15, 'Maukkaaaaa', 69, 64, 63, 47, 15, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(16, 'GBGglenn', 14, 16, 14, 55, 13, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(17, 'GoldenGoose25', 21, 22, 21, 15, 12, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(18, 'tbnantti', 87, 77, 77, 18, 34, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(19, 'Maick82', 68, 80, 80, 22, 12, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(20, 'jnmxxx', 67, 76, 77, 33, 23, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(21, 'BiiAiiDii', 77, 77, 77, 34, 23, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(22, 'eyebiz', 23, 24, 22, 61, 12, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(23, 'Slaivone', 23, 23, 23, 64, 23, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(24, 'sumppi90', 23, 24, 24, 60, 23, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(25, 'OVeiKKoO', 21, 22, 21, 23, 84, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55'),
(26, 'stormspeed', 33, 32, 32, 32, 79, 1, '2014-06-03 18:05:55', '2014-06-03 18:05:55');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coins` bigint(20) DEFAULT '20',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activated` int(11) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `email`, `coins`, `password`, `remember_token`, `activated`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'admin@sklaravel.com', 100, '$2y$10$VKf6QLoSWqhzgC9n5SYCze1sd8C9H/umV3vFQEP.qdz96bY43cdGi', 'XWbAC0sUOsh9osAhvjUQ8SMniR3LQaenh3kuOH8alnVCLlJMTFS8rDC2FaJv', 0, '0000-00-00 00:00:00', '', '', '2014-06-03 11:16:33', '2014-06-03 12:06:02'),
(2, 'user@sklaravel.com', 100, '$2y$10$0y1hF/mE.nJHB.9vfaizSOVaNNG.crcYSlkcq1SrzkvYX7EM4zlsO', '', 0, '0000-00-00 00:00:00', '', '', '2014-06-03 11:16:33', '2014-06-03 11:16:33'),
(3, 'simonkristiansson91@gmail.com', 1000, '$2y$10$gWC1zB4j3aq7AGzeRy2eqOOJux8kkbd/q8Cs7gucEBjPmp3UYxtJ.', '', 0, '0000-00-00 00:00:00', 'simon', 'kristiansson', '2014-06-03 12:06:45', '2014-06-03 12:06:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 20 feb 2023 om 20:08
-- Serverversie: 8.0.27
-- PHP-versie: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nailstudio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afspraak`
--

DROP TABLE IF EXISTS `afspraak`;
CREATE TABLE IF NOT EXISTS `afspraak` (
  `Id` smallint NOT NULL AUTO_INCREMENT,
  `First_color` varchar(10) NOT NULL,
  `Second_color` varchar(10) NOT NULL,
  `Third_color` varchar(10) NOT NULL,
  `Fourth_color` varchar(10) NOT NULL,
  `Phonenumber` varchar(17) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` datetime(6) NOT NULL,
  `Choice` varchar(60) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `afspraak`
--

INSERT INTO `afspraak` (`Id`, `First_color`, `Second_color`, `Third_color`, `Fourth_color`, `Phonenumber`, `email`, `date`, `Choice`) VALUES
(3, '#00ffee', '#c5205a', '#653885', '#e100ff', '+31 6 6644 88 99', 'Rudolph@outlook.com', '2023-02-28 21:06:00.000000', 'Nagelreparatie per nagel (in eerste week gratis) €5.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

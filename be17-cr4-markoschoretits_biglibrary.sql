-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Nov 2022 um 10:13
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be17-cr4-markoschoretits_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `title` varchar(64) DEFAULT NULL,
  `isbn` char(13) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `item_type` enum('BOOK','CD','DVD') DEFAULT NULL,
  `picture` varchar(64) DEFAULT NULL,
  `author_first_name` varchar(32) DEFAULT NULL,
  `author_last_name` varchar(64) DEFAULT NULL,
  `publisher_name` varchar(32) DEFAULT NULL,
  `publisher_address` varchar(64) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `available` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `item`
--

INSERT INTO `item` (`item_id`, `title`, `isbn`, `short_description`, `item_type`, `picture`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `available`) VALUES
(1, 'Rocky 1', '3140004200001', 'Balboa fights for the 1st time', 'BOOK', 'RB01.jpg', 'Adrian', 'Pennino', 'BALBOA INC', 'Philadelphia', '1981-01-01', '1'),
(2, 'Rocky 2', '3140004200002', 'Balboa fights for the 2nd time', 'BOOK', 'RB02.jpg', 'Adrian', 'Pennino', 'BALBOA INC', 'Philadelphia', '1982-02-02', '1'),
(3, 'Rocky 3', '3140004200003', 'Balboa fights for the 3rd time', 'BOOK', 'RB03.jpg', 'Adrian', 'Pennino', 'BALBOA INC', 'Philadelphia', '1983-03-03', '1'),
(4, 'Rocky 4', '3140004200004', 'Balboa fights for the 4th time', 'BOOK', 'RB04.jpg', 'Adrian', 'Pennino', 'BALBOA INC', 'Philadelphia', '1984-04-04', '1'),
(5, 'Rocky 5', '3140004200005', 'Balboa fights for the 5th time', 'BOOK', 'RB05.jpg', 'Adrian', 'Pennino', 'BALBOA INC', 'Philadelphia', '1985-05-05', '1'),
(6, 'Rocky Encyclopedia 1', '3140004203001', 'How Rocky fights', 'CD', 'RBE01.jpg', 'Apollo', 'Creed', 'CREED INC', 'Baltimore', '1991-01-01', '1'),
(7, 'Rocky Encyclopedia 2', '3140004203002', 'Why Rocky fights', 'CD', 'RBE02.jpg', 'Apollo', 'Creed', 'CREED INC', 'Baltimore', '1992-02-02', '1'),
(8, 'Rocky The Film 1', '3140004207001', 'Balboa fights in 3D', 'DVD', 'RB3D.jpg', 'Ivan', 'Drago', 'DRAGO INC', 'Siberia', '2001-01-01', '1'),
(9, 'Rocky The Film 2', '3140004207002', 'Balboa fights in 4D', 'DVD', 'RB4D.jpg', 'Ivan', 'Drago', 'DRAGO INC', 'Siberia', '2002-02-02', '1'),
(10, 'Rocky The Film 3', '3140004207003', 'Balboa fights in 5D', 'DVD', 'RB5D.jpg', 'Ivan', 'Drago', 'DRAGO INC', 'Siberia', '2003-03-03', '1');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

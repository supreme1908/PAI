-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 15, 2026 at 09:40 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gry_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gry`
--

CREATE TABLE `gry` (
  `id` int(11) NOT NULL,
  `tytul` varchar(100) DEFAULT NULL,
  `gatunek` varchar(50) DEFAULT NULL,
  `platforma` varchar(50) DEFAULT NULL,
  `rok_wydania` year(4) DEFAULT NULL,
  `ocena` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gry`
--

INSERT INTO `gry` (`id`, `tytul`, `gatunek`, `platforma`, `rok_wydania`, `ocena`) VALUES
(1, 'Wiedźmin 3', 'RPG', 'PC', '2015', 9.0),
(2, 'Grand Theft Auto 6', 'RPG', 'PlayStation 5', '2026', 10.0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gry`
--
ALTER TABLE `gry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gry`
--
ALTER TABLE `gry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 08. maj 2020 ob 13.43
-- Različica strežnika: 10.1.36-MariaDB
-- Različica PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `turnatest`
--

-- --------------------------------------------------------

--
-- Struktura tabele `delavci`
--

CREATE TABLE `delavci` (
  `id` int(11) NOT NULL,
  `ime` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `priimek` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_slovenian_ci;

--
-- Odloži podatke za tabelo `delavci`
--

INSERT INTO `delavci` (`id`, `ime`, `priimek`) VALUES
(14, 'Timen', 'SmajiloviÄ'),
(15, 'Tom', 'Cruise'),
(17, 'Mitja', 'Stramec'),
(19, 'Marko', 'OljaÄa'),
(20, 'Lenart', 'Golob'),
(21, 'Bill', 'Gates'),
(22, 'Miran', 'Zevnik'),
(43, 'Enis', 'BeÄ‡areviÄ‡'),
(44, 'John', 'Doe');

-- --------------------------------------------------------

--
-- Struktura tabele `statusi`
--

CREATE TABLE `statusi` (
  `id` int(11) NOT NULL,
  `ime` varchar(200) COLLATE utf16_slovenian_ci NOT NULL,
  `datum_z` date DEFAULT NULL,
  `datum_k` date DEFAULT '0000-00-00',
  `delavec_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_slovenian_ci;

--
-- Odloži podatke za tabelo `statusi`
--

INSERT INTO `statusi` (`id`, `ime`, `datum_z`, `datum_k`, `delavec_id`) VALUES
(12, 'PorodniÅ¡ka', '2020-04-29', '2020-05-06', 14),
(13, 'Dopust', '2019-06-13', '2019-06-20', 14),
(14, 'BolniÅ¡ka', '2019-06-11', '2019-07-13', 14),
(16, 'Drugo', '2019-06-15', '2019-06-18', 43),
(17, 'Dopust', '2020-05-11', '2020-05-23', 44);

-- --------------------------------------------------------

--
-- Struktura tabele `uporabniki`
--

CREATE TABLE `uporabniki` (
  `id` int(11) NOT NULL,
  `uid` varchar(30) COLLATE utf16_slovenian_ci NOT NULL,
  `pass` varchar(40) COLLATE utf16_slovenian_ci NOT NULL,
  `dostop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_slovenian_ci;

--
-- Odloži podatke za tabelo `uporabniki`
--

INSERT INTO `uporabniki` (`id`, `uid`, `pass`, `dostop`) VALUES
(7, 'timen', '87fe61c5356d5c33896cac74f3d821315b469321', 3),
(10, 'nizek', '1cf7482e79dfed8569c5025eb38d4eef8beb0000', 1),
(11, 'srednji', '7954303202164bccb23706b9c97199003ff029e9', 2),
(23, 'visok', '82a12e4f6f1322ea40d627700130cef964cc1920', 3),
(24, 'admin', '79ed44cd6cb9069e32156d5bc06b22dfb72109dc', 3);

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `delavci`
--
ALTER TABLE `delavci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `statusi`
--
ALTER TABLE `statusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IX_Relationship1` (`delavec_id`);

--
-- Indeksi tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `delavci`
--
ALTER TABLE `delavci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT tabele `statusi`
--
ALTER TABLE `statusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT tabele `uporabniki`
--
ALTER TABLE `uporabniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `statusi`
--
ALTER TABLE `statusi`
  ADD CONSTRAINT `Relationship1` FOREIGN KEY (`delavec_id`) REFERENCES `delavci` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

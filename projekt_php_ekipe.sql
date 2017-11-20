-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 20. nov 2017 ob 09.19
-- Različica strežnika: 10.1.21-MariaDB
-- Različica PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `projekt_php_ekipe`
--

-- --------------------------------------------------------

--
-- Struktura tabele `dela`
--

CREATE TABLE `dela` (
  `id` int(11) NOT NULL,
  `ime` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `podjetje_id` int(11) NOT NULL,
  `podrocje_id` int(11) NOT NULL,
  `lokacija` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `dodano` date NOT NULL,
  `spol` varchar(20) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `dela`
--

INSERT INTO `dela` (`id`, `ime`, `podjetje_id`, `podrocje_id`, `lokacija`, `dodano`, `spol`) VALUES
(2, 'mojster', 1, 3, 'pr men', '2017-11-20', 'zenski'),
(3, '123', 1, 1, '12312', '2017-11-20', 'zenski'),
(5, 'qwewq', 1, 1, 'qwewqe', '2017-11-20', 'zenski'),
(9, '1231', 1, 20, '1313123', '2017-11-20', 'zenski');

-- --------------------------------------------------------

--
-- Struktura tabele `podjetja`
--

CREATE TABLE `podjetja` (
  `id` int(11) NOT NULL,
  `ime` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `naslov` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `tel_st` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `davcna` int(30) NOT NULL,
  `maticna` int(30) NOT NULL,
  `uporabnisko_ime` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `geslo` varchar(250) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `podjetja`
--

INSERT INTO `podjetja` (`id`, `ime`, `naslov`, `email`, `tel_st`, `davcna`, `maticna`, `uporabnisko_ime`, `geslo`) VALUES
(1, 'Sava Turizem d.d.', 'lublana', 'sava@gmail.com', '04 2066021', 53667409, 530197100, 'sava', 'sava'),
(2, 'MIMOVRSTE d.o.o.', 'rovte', 'mimovrste@gmail.com', '123 312 312', 81241038, 1589121000, 'mimovrste', 'mimovrste');

-- --------------------------------------------------------

--
-- Struktura tabele `podrocja`
--

CREATE TABLE `podrocja` (
  `id` int(11) NOT NULL,
  `ime` varchar(200) COLLATE utf8_slovenian_ci NOT NULL,
  `opis` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `podrocja`
--

INSERT INTO `podrocja` (`id`, `ime`, `opis`) VALUES
(1, 'Administracija', ''),
(2, 'Elektrotehnika, elektronika, telekomunikacije', ''),
(3, 'Gradbeništvo, arhitektura, geodezija', ''),
(4, 'Javni sektor, nevladne organizacije', ''),
(5, 'Komerciala, prodaja', ''),
(6, 'Lesarstvo', ''),
(7, 'Matematika, fizika in naravoslovje', ''),
(8, 'Osebne storitve in varovanje', ''),
(9, 'Prehrambena industrija, živilstvo, veterina ', ''),
(10, 'Računovodstvo, revizija', ''),
(11, 'Strojništvo, metalurgija, rudarstvo', ''),
(12, 'Trgovina', ''),
(13, 'Zavarovalništvo', ''),
(14, 'Znanost, tehnologija', ''),
(15, 'Bančništvo, finance', ''),
(16, 'Farmacija, kemija', ''),
(17, 'Gostinstvo, turizem, potovanje', ''),
(18, 'Izobraževanje, prevajanje, kultura, šport', ''),
(19, 'Kadrovanje, HR', ''),
(20, 'Kmetijstvo, ribištvo, gozdarstvo', ''),
(21, 'Kreativa, design', ''),
(22, 'Marketing, PR', ''),
(23, 'Mediji', ''),
(24, 'Nepremičnine', ''),
(25, 'Pravo in družboslovje', ''),
(26, 'Proizvodnja', ''),
(27, 'Računalništvo, programiranje', ''),
(28, 'Socialne storitve', ''),
(29, 'Tehnične storitve', ''),
(30, 'Transport, nabava in logistika', ''),
(31, 'Upravljanje, svetovanje, vodenje', ''),
(32, 'Upravljanje, svetovanje, vodenje', ''),
(33, 'Zdravstvo, nega', '');

-- --------------------------------------------------------

--
-- Struktura tabele `prijave`
--

CREATE TABLE `prijave` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `prijave`
--

INSERT INTO `prijave` (`id`, `user_id`, `delo_id`) VALUES
(1, 5, 2);

-- --------------------------------------------------------

--
-- Struktura tabele `spretnosti`
--

CREATE TABLE `spretnosti` (
  `id` int(11) NOT NULL,
  `ime` varchar(250) COLLATE utf8_slovenian_ci NOT NULL,
  `poznavanje` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `spretnosti`
--

INSERT INTO `spretnosti` (`id`, `ime`, `poznavanje`, `user_id`) VALUES
(3, 'CSS', 3, 5),
(4, 'CSS', 3, 5),
(5, 'HTML', 1, 5);

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_slovenian_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_slovenian_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `zivljenjepis` text COLLATE utf8_slovenian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Odloži podatke za tabelo `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`, `zivljenjepis`) VALUES
(5, 'facebook', '697683587101421', 'Gal', 'Glogovsek', 'glogovsekgal@gmail.com', 'male', 'en_US', '', '', '2017-11-19 18:13:18', '2017-11-20 04:34:30', '32132313');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `dela`
--
ALTER TABLE `dela`
  ADD PRIMARY KEY (`id`),
  ADD KEY `podjetje_id` (`podjetje_id`);

--
-- Indeksi tabele `podjetja`
--
ALTER TABLE `podjetja`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `podrocja`
--
ALTER TABLE `podrocja`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `prijave`
--
ALTER TABLE `prijave`
  ADD PRIMARY KEY (`id`);

--
-- Indeksi tabele `spretnosti`
--
ALTER TABLE `spretnosti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `user_id_3` (`user_id`);

--
-- Indeksi tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `dela`
--
ALTER TABLE `dela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT tabele `podjetja`
--
ALTER TABLE `podjetja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT tabele `podrocja`
--
ALTER TABLE `podrocja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT tabele `prijave`
--
ALTER TABLE `prijave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT tabele `spretnosti`
--
ALTER TABLE `spretnosti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `dela`
--
ALTER TABLE `dela`
  ADD CONSTRAINT `dela_ibfk_1` FOREIGN KEY (`podjetje_id`) REFERENCES `podjetja` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 01:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proje`
--

-- --------------------------------------------------------

--
-- Table structure for table `haber`
--

CREATE TABLE `haber` (
  `id` int(11) NOT NULL,
  `baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `metin` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `haber`
--



-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `ad`, `email`, `konu`, `mesaj`, `tarih`, `kullanici_id`) VALUES
(1, 'umut', 'a@a.com', 'Merhaba', 'Selam', '21 April 2017', 0),
(2, 'umut', 'qa@a.com', 'asd', 'asd', '21 April 2017', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `haber_id` int(11) NOT NULL,
  `foto` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `ikinci` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `detay` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `haber_id`, `foto`, `baslik`, `ikinci`, `detay`) VALUES
(1, 3, 'slider/sehir.jpg', 'HABER54', 'Come feed the rain', '\'cause I\'m thirsty for your love dancing underneath the skies of lust'),
(2, 1, 'slider/bunka.jpg', 'HABER54', 'Yeah feed the rain', '\'cause without your love my life ain\'t nothing but this carnival of rust'),
(3, 1, 'slider/teog.jpg', 'HABER54', ' Don\'t walk away, don\'t walk away', 'oh, when the world is burning'),
(4, 1, 'slider/sspor.jpg', 'HABER54', 'Don\'t walk away, don\'t walk away', 'oh, when the heart is yearning');

-- --------------------------------------------------------

--
-- Table structure for table `uye`
--

CREATE TABLE `uye` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `parola` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'img/uye/default.jpg',
  `yetki` tinyint(1) NOT NULL DEFAULT '0',
  `session` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `uye`
--

INSERT INTO `uye` (`id`, `ad`, `email`, `parola`, `foto`, `yetki`, `session`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'images/uye/default.jpg', 1, '121232f297a57a5a743894a0e4a801fc3'),
(4, 'Erbil Nas', 'erbil@nas.com', '41019519cedcf2571a65b2dca6f7ccbd', 'images/uye/default.jpg', 0, '241019519cedcf2571a65b2dca6f7ccbd'),
(5, 'Umut Tosun', 'umut@tosun.com', 'cbe2d8ba9c25fa42b65d9d133e8c4c32', 'images/uye/default.jpg', 0, '3cbe2d8ba9c25fa42b65d9d133e8c4c32');

-- --------------------------------------------------------

--
-- Table structure for table `yorum`
--

CREATE TABLE `yorum` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
  `onay` tinyint(1) NOT NULL DEFAULT '0',
  `haber_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `yorum`
--

INSERT INTO `yorum` (`id`, `ad`, `email`, `kullanici_id`, `yorum`, `tarih`, `onay`, `haber_id`) VALUES
(3, 'umut', 'sadd@as.com', 4, 'yorum', '12/12/12', 1, 35);

--
-- Indexes for dumped tables
--

--
--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `uye`
--
ALTER TABLE `uye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `yorum`
--
ALTER TABLE `yorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

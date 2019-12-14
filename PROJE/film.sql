-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 05 Ara 2018, 17:47:08
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `film`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

DROP TABLE IF EXISTS `filmler`;
CREATE TABLE IF NOT EXISTS `filmler` (
  `film_id` int(11) NOT NULL,
  `film_ad` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_fiyat` int(11) NOT NULL,
  `film_kategori` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_resim` varchar(255) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`film_id`, `film_ad`, `film_fiyat`, `film_kategori`, `film_resim`) VALUES
(1, 'VENOM', 35, 'Komedi', 'asa.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `film_saat`
--

DROP TABLE IF EXISTS `film_saat`;
CREATE TABLE IF NOT EXISTS `film_saat` (
  `film_saat_id` int(11) NOT NULL,
  `film_saat` varchar(255) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `film_saat`
--

INSERT INTO `film_saat` (`film_saat_id`, `film_saat`) VALUES
(1, '10:00-12:00'),
(2, '12:00-14:00'),
(3, '14:00-16:00'),
(4, '16:00-18:00'),
(5, '18:00-20:00'),
(6, '20:00-22:00'),
(7, '22:00-24:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE IF NOT EXISTS `musteriler` (
  `film_resim` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_ad` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_musteriAd` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_koltuk` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_tarih` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_tahmin` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_satis` varchar(255) COLLATE utf32_turkish_ci NOT NULL,
  `film_fiyat` varchar(255) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`film_resim`, `film_ad`, `film_musteriAd`, `film_koltuk`, `film_tarih`, `film_tahmin`, `film_satis`, `film_fiyat`) VALUES
('asa.jpg', 'VENOM', 'Serkan', '30', '2018-12-22', '%15', '2018-12-05 16:44:13', '32'),
('indir.jpg', 'YOL ARKADAÅžIM 2', 'veysel', '5', '2018-12-22 16:00-18:00', '%0', '2018-12-05 17:45:03', '30'),
('asa.jpg', 'VENOM', 'Ã¼lviye', '5', '2018-12-19 16:00-18:00', '%0', '2018-12-05 17:42:25', '35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

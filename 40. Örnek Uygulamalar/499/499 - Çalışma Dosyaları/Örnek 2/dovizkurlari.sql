-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Ara 2018, 16:10:40
-- Sunucu sürümü: 10.1.30-MariaDB
-- PHP Sürümü: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `extraegitim`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dovizkurlari`
--

CREATE TABLE `dovizkurlari` (
  `id` int(10) UNSIGNED NOT NULL,
  `adi` varchar(100) NOT NULL,
  `kodu` char(3) NOT NULL,
  `birim` int(10) UNSIGNED NOT NULL,
  `alis` double NOT NULL,
  `satis` double NOT NULL,
  `efektifalis` double NOT NULL,
  `efektifsatis` double NOT NULL,
  `guncellenmezamani` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dovizkurlari`
--

INSERT INTO `dovizkurlari` (`id`, `adi`, `kodu`, `birim`, `alis`, `satis`, `efektifalis`, `efektifsatis`, `guncellenmezamani`) VALUES
(1, 'ABD DOLARI', 'USD', 1, 5.3034, 5.313, 5.2997, 5.3209, '1545743405'),
(2, 'AVUSTRALYA DOLARI', 'AUD', 1, 3.7294, 3.7537, 3.7122, 3.7762, '1545743405'),
(3, 'DANİMARKA KRONU', 'DKK', 1, 0.80872, 0.81269, 0.80815, 0.81456, '1545743405'),
(4, 'EURO', 'EUR', 1, 6.0419, 6.0527, 6.0376, 6.0618, '1545743405'),
(5, 'İNGİLİZ STERLİNİ', 'GBP', 1, 6.7245, 6.7595, 6.7198, 6.7697, '1545743405'),
(6, 'İNGİLİZ STERLİNİ', 'GBP', 1, 6.7245, 6.7595, 6.7198, 6.7697, '1545743405'),
(7, 'İSVİÇRE FRANGI', 'CHF', 1, 5.3634, 5.3978, 5.3553, 5.4059, '1545743405'),
(8, 'İSVEÇ KRONU', 'SEK', 1, 0.58341, 0.58945, 0.583, 0.5908, '1545743405'),
(9, 'KANADA DOLARI', 'CAD', 1, 3.8914, 3.909, 3.8771, 3.9239, '1545743405'),
(10, 'KANADA DOLARI', 'CAD', 1, 3.8914, 3.909, 3.8771, 3.9239, '1545743405'),
(11, 'KUVEYT DİNARI', 'KWD', 1, 17.3681, 17.5953, 17.1076, 17.8593, '1545743405'),
(12, 'NORVEÇ KRONU', 'NOK', 1, 0.6039, 0.60796, 0.60348, 0.60936, '1545743405'),
(13, 'SUUDİ ARABİSTAN RİYALİ', 'SAR', 1, 1.4135, 1.416, 1.4029, 1.4267, '1545743405'),
(14, 'JAPON YENİ', 'JPY', 100, 4.7973, 4.829, 4.7795, 4.8474, '1545743405'),
(15, 'BULGAR LEVASI', 'BGN', 1, 3.0718, 3.112, 0, 0, '1545743405'),
(16, 'RUMEN LEYİ', 'RON', 1, 1.2952, 1.3122, 0, 0, '1545743405'),
(17, 'RUS RUBLESİ', 'RUB', 1, 0.07672, 0.07772, 0, 0, '1545743405'),
(18, 'İRAN RİYALİ', 'IRR', 100, 0.01256, 0.01272, 0, 0, '1545743405'),
(19, 'ÇİN YUANI', 'CNY', 1, 0.76608, 0.77611, 0, 0, '1545743405'),
(20, 'PAKİSTAN RUPİSİ', 'PKR', 1, 0.0377, 0.0382, 0, 0, '1545743405'),
(21, 'KATAR RİYALİ', 'QAR', 1, 1.4482, 1.4672, 0, 0, '1545743405');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dovizkurlari`
--
ALTER TABLE `dovizkurlari`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dovizkurlari`
--
ALTER TABLE `dovizkurlari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

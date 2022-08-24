-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 22 Haz 2018, 05:27:22
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
-- Veritabanı: `davetiye_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbldurum`
--

DROP TABLE IF EXISTS `tbldurum`;
CREATE TABLE IF NOT EXISTS `tbldurum` (
  `durum_Id` int(11) NOT NULL AUTO_INCREMENT,
  `durum_Ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`durum_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tbldurum`
--

INSERT INTO `tbldurum` (`durum_Id`, `durum_Ad`) VALUES
(1, 'Ödeme Bekleniyor'),
(2, 'Ödeme Yapıldı'),
(3, 'Siparişiniz Hazırlanıyor'),
(4, 'Siparişiniz Tamamlandı'),
(5, 'Siparişiniz Kargoda'),
(6, 'Teslim Edildi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblfirma`
--

DROP TABLE IF EXISTS `tblfirma`;
CREATE TABLE IF NOT EXISTS `tblfirma` (
  `firma_Id` int(11) NOT NULL AUTO_INCREMENT,
  `firma_Ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_Resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`firma_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblfirma`
--

INSERT INTO `tblfirma` (`firma_Id`, `firma_Ad`, `firma_Resim`) VALUES
(1, 'Aras Kargo', '../images/firma1.jpg'),
(2, 'Yurtiçi Kargo', '../images/firma2.png'),
(3, 'MNG Kargo', '../images/firma3.png'),
(4, 'Sürat Kargo', '../images/firma4.jpg'),
(5, 'TNT Kargo', '../images/firma5.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblicerik`
--

DROP TABLE IF EXISTS `tblicerik`;
CREATE TABLE IF NOT EXISTS `tblicerik` (
  `icerik_Id` int(11) NOT NULL AUTO_INCREMENT,
  `icerik_Siparis` int(11) NOT NULL,
  `Gelin_Ad_Soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Gelin_Anne_Baba` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Damat_Ad_Soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Damat_Anne_Baba` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Dugun_Tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Dugun_Baslangic_Saat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Dugun_Bitis_Saat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Dugun_Yer` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Dugun_Adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Kina_Tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Kina_Baslangic_Saat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Kina_Bitis_Saat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Kina_Yeri` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Kina_Adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Dugun_Davetiye_Sozu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Gelin_Ad_Soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Gelin_Anne_Baba` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Damat_Ad_Soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Damat_Anne_Baba` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Baslangic_Saat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Bitis_Saat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Yeri` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Nisan_Davetiye_Sozu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sunnet_Cocuk_Ad_Soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sunnet_Cocuk_Anne_Baba` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sunnet_Tarih` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sunnet_Baslangic_Saat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sunnet_Bitis_Saati` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sunnet_Yer` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sunnet_Adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Sunnet_Davetiye_Sozu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`icerik_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblicerik`
--

INSERT INTO `tblicerik` (`icerik_Id`, `icerik_Siparis`, `Gelin_Ad_Soyad`, `Gelin_Anne_Baba`, `Damat_Ad_Soyad`, `Damat_Anne_Baba`, `Dugun_Tarih`, `Dugun_Baslangic_Saat`, `Dugun_Bitis_Saat`, `Dugun_Yer`, `Dugun_Adres`, `Kina_Tarih`, `Kina_Baslangic_Saat`, `Kina_Bitis_Saat`, `Kina_Yeri`, `Kina_Adres`, `Dugun_Davetiye_Sozu`, `Nisan_Gelin_Ad_Soyad`, `Nisan_Gelin_Anne_Baba`, `Nisan_Damat_Ad_Soyad`, `Nisan_Damat_Anne_Baba`, `Nisan_Tarih`, `Nisan_Baslangic_Saat`, `Nisan_Bitis_Saat`, `Nisan_Yeri`, `Nisan_Adres`, `Nisan_Davetiye_Sozu`, `Sunnet_Cocuk_Ad_Soyad`, `Sunnet_Cocuk_Anne_Baba`, `Sunnet_Tarih`, `Sunnet_Baslangic_Saat`, `Sunnet_Bitis_Saati`, `Sunnet_Yer`, `Sunnet_Adres`, `Sunnet_Davetiye_Sozu`) VALUES
(1, 1004, 'Düğün Gelin Ad', 'Düğün Gelin Anne Baba', 'Güncelleme Düğün Damat Ad', 'Düğün Damat Anne Baba', 'Düğün Tarih', 'Düğün Başlangıç Saati', 'Düğün Bitiş Saat', 'Düğün Yer', 'Düğün Adresi', 'Kina Tarih', 'Kina Başlangıç Saati', 'Kina Bitiş Saati', 'Kina Yeri', 'Kina Adres', 'Dugun Davetiye Sözü', 'nişan gelin ad soyad', 'nişan gelin anne baba', 'nişan damat ad soyad', 'nişan damat anne baba', 'nişan tarih', ' nişan baslangıc saati', 'nisan bitis saati', 'nisan yeri', 'nisan adresi', 'nisan davetiye sozu', 'sunnet ad soyad', 'sunnet cocuk anne baba', 'sunnet tarih', 'sunnet baslangic saati', 'sunnet bitis saati', 'sunnet yeri', 'sunnet adresi', 'sunnet davetiye sozu'),
(2, 1004, '$dugungelinad', '$dugungelinannebaba', '$dugundamatad', '$dugundamatannebaba', '$duguntarih', '$dugunbaslangic', '$dugunbitis', '$dugunyer', '$dugunadres', '$kinatarih', '$kinabaslangic', '$kinabitis', '$kinayer', '$kinaadres', '$dugunsoz', '$nisangelinad', '$nisangelinannebaba', '$nisandamatad', '$nisandamatannebaba', '$nisantarih', '$nisanbaslangic', '$nisanbitis', '$nisanyer', '$nisanadres', '$nisansoz', '$sunnetad', '$sunnetannebaba', '$sunnettarih', '$sunnetbaslangic', '$sunnetbitis', '$sunnetyer', '$sunnetadres', '$sunnetsoz'),
(4, 10007, '$dgad', '$dgab', '$ddad', '$ddab', '$dtarih', '$dbaslangic', '$dbitis', '$dyer', '$dadres', '$ktarih', '$kbaslangic', '$kbitis', '$kyer', '$kadres', '$dsoz', '$ngad', '$ngab', '$ndad', '$ndab', '$ntarih', '$nbaslangic', '$nbitis', '$nyer', '$nadres', '$nsoz', '$cad', '$cab', '$starih', '$sbaslangic', '$sbitis', '$syer', '$sadres', '$ssoz'),
(5, 10008, 'aaaaaaaaa', 'aaaaaaaaaa', 'DENEME', 'aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaa', 'a', 'a', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, 10009, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(7, 10009, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'nişan gelin', 'nişan kaygana', 'nişandamat', 'nişan kayınvalide', 'nişan tarih', 'nişan baslan', '', 'nisan yeri', 'nisan adres', 'nisansoz', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, 10010, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'nişan gelin', 'nişan kaygana', 'nişandamat', 'nişan kayınvalide', 'nişan tarih', 'nişan baslan', 'nisanbitis', 'nisan yeri', 'nisan adres', 'nisansoz', '0', '0', '0', '0', '0', '0', '0', '0'),
(9, 10010, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'nişan gelin', 'nişan kaygana', 'nişandamat', 'nişan kayınvalide', 'nişan tarih', 'nişan baslan', 'nisanbitis', 'nisan yeri', 'nisan adres', 'nisansoz', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, 10011, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'cocuk ad soyad', 'cocuk ana baba', 'cocuk tarih', 'cocuk basln', 'cocuk bitis', '', 'cocuk adres', 'sunnetsoz'),
(11, 10013, '11', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'cocuk ad soyad', 'cocuk ana baba', 'cocuk tarih', 'cocuk basln', 'cocuk bitis', 'sad', 'cocuk adres', 'sunnetsoz'),
(12, 10014, 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(13, 10015, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'ataberk', 'nisansoz', '0', '0', '0', '0', '0', '0', '0', '0'),
(14, 10015, 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, 10015, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'nişan', 'nişan', 'nişan', 'nişan', 'nişan', 'nişan', 'nişan', 'nişan', 'nişan', 'nisansoz', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, 10016, 'dugun', 'dugundugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(17, 10017, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'nisan', 'nisan', 'nisan', 'nisan', 'nisan', 'nisan', 'nisan', 'nisan', 'nisan', 'nisansoz', '0', '0', '0', '0', '0', '0', '0', '0'),
(18, 10018, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'sünnet', 'sünnet', 'sünnet', 'sünnet', 'sünnet', 'sünnet', 'sünnet', 'sunnetsoz'),
(19, 10019, 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(20, 10020, 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', 'dugun', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(21, 10021, 'safdfsa', 'sadfsa', 'asdfsaf', 'asdf', 'asdfsa', 'asdf', 'asdf', 'asdf', 'sadf', 'asdfsa', 'safd', 'asdf', 'asdf', 'asdf', 'asdf', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(22, 10022, 'asfd', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(23, 10022, 'asdf', 'asdf', 'asd', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(24, 10023, 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme', 'guncelleme'),
(25, 10024, 'sadf', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(26, 10024, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '11', '111', '111', '11', '111', '', '11', 'sunnetsoz'),
(27, 10024, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'sunnetsoz'),
(28, 10025, 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(29, 10026, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'koray', 'nisansoz', '0', '0', '0', '0', '0', '0', '0', '0'),
(30, 10027, 'Düğün Gelin Adı', 'Düğün Gelin Anne baba', 'asdf', 'asdf', 'sadf', 'asdf', 'asdf', 'asdf', 'asfd', 'asdf', 'asdf', 'asdf', 'asdf', 'asfd', 'asdfsaf', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(31, 10027, 'Düğün Gelin Adı', 'Düğün Gelin Anne baba', 'asdf', 'asdf', 'sadf', 'asdf', 'asdf', 'asdf', 'asfd', 'asdf', 'asdf', 'asdf', 'asdf', 'asfd', 'asdfsaf', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(32, 10028, 'Düğün Gelin Adı', 'Düğün Gelin Anne baba', 'asdf', 'asdf', 'sadf', 'asdf', 'asdf', 'asdf', 'asfd', 'asdf', 'asdf', 'asdf', 'asdf', 'asfd', 'asdfsaf', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(33, 10029, 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(34, 10029, 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(35, 10029, 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', 'fff', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(36, 10030, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'sdaf', 'asfd', 'asdf', 'asdf', 'asdf', 'asdfasf', 'asdf', 'asdf', 'asdfasf', 'asdffasdf', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(37, 10031, 'asdf', 'asdf', 'asdf', 'asdf', 'sadfsa', 'sadfsa', 'afssfda', 'fsadfsafsaf', 'safsafd', 'safsafas', 'fdsafasf', 'asfsf', 'asdfasf', 'asdfasf', 'asdfsaf', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbliletisim`
--

DROP TABLE IF EXISTS `tbliletisim`;
CREATE TABLE IF NOT EXISTS `tbliletisim` (
  `iletisim_Id` int(11) NOT NULL AUTO_INCREMENT,
  `iletisim_Email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_Konu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_İleti` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`iletisim_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tbliletisim`
--

INSERT INTO `tbliletisim` (`iletisim_Id`, `iletisim_Email`, `iletisim_Konu`, `iletisim_İleti`) VALUES
(1, 'safdsfda', 'asdffsda', 'asdffsad'),
(2, 'safdsfda', 'asdffsda', 'asdffsad'),
(3, 'asdfsafas@sadfsa.com', 'asdfsdfa', 'asdasfd'),
(4, 'fas@sfd.com', 'asfdsaf', 'asdfasdfdafsafsadfsda'),
(5, 'fas@sfd.com', 'asfdsafsdfsafsdfsafdssfa', 'asdfasdfdafsafsadfsda'),
(6, 'fas@sfd.com', 'asfdsaf', 'asdfasdfdafsafsadfsda'),
(7, 'fas@sfd.com', 'asfdsaf', 'asdfasdfdafsafsadfsdasdfsdfsfadsfsdfsdafsadfsdfsfsdfsadfsdafsdfsdfsdfsdfsadfsadfsadfsdfafsadfsafdsfasdfsdfsfsfssfsdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblkategori`
--

DROP TABLE IF EXISTS `tblkategori`;
CREATE TABLE IF NOT EXISTS `tblkategori` (
  `kategori_Id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_Ust_Id` int(11) NOT NULL,
  PRIMARY KEY (`kategori_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblkategori`
--

INSERT INTO `tblkategori` (`kategori_Id`, `kategori_Ad`, `kategori_Ust_Id`) VALUES
(1, 'Kavanozlu', 0),
(2, 'Çiçekli', 1),
(3, 'Arabalı', 1),
(4, 'Zarflı', 0),
(5, 'Beyaz', 4),
(8, 'Renkli', 2),
(10, 'Mor Pembe', 2),
(11, 'deneme', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblodeme`
--

DROP TABLE IF EXISTS `tblodeme`;
CREATE TABLE IF NOT EXISTS `tblodeme` (
  `odeme_Id` int(11) NOT NULL AUTO_INCREMENT,
  `odeme_Ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`odeme_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblodeme`
--

INSERT INTO `tblodeme` (`odeme_Id`, `odeme_Ad`) VALUES
(1, 'Havale/EFT'),
(2, 'Kredi Kartı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblrol`
--

DROP TABLE IF EXISTS `tblrol`;
CREATE TABLE IF NOT EXISTS `tblrol` (
  `rol_Id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`rol_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblrol`
--

INSERT INTO `tblrol` (`rol_Id`, `rol_Ad`) VALUES
(1, 'Admin'),
(2, 'Kullanıcı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblsiparis`
--

DROP TABLE IF EXISTS `tblsiparis`;
CREATE TABLE IF NOT EXISTS `tblsiparis` (
  `siparis_No` int(11) NOT NULL AUTO_INCREMENT,
  `siparis_Id` int(11) NOT NULL,
  `siparis_Tarih` date DEFAULT NULL,
  `uye_Email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_Id` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `siparis_Adet` int(255) DEFAULT NULL,
  `siparis_Fiyat` float DEFAULT NULL,
  `icerik_Id` int(11) DEFAULT NULL,
  `odeme_Id` int(11) DEFAULT NULL,
  `firma_Id` int(11) DEFAULT NULL,
  `durum_Id` int(11) DEFAULT NULL,
  `siparis_AdSoyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `siparis_Telefon` int(11) DEFAULT NULL,
  `siparis_Adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`siparis_No`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblsiparis`
--

INSERT INTO `tblsiparis` (`siparis_No`, `siparis_Id`, `siparis_Tarih`, `uye_Email`, `urun_Id`, `siparis_Adet`, `siparis_Fiyat`, `icerik_Id`, `odeme_Id`, `firma_Id`, `durum_Id`, `siparis_AdSoyad`, `siparis_Telefon`, `siparis_Adres`) VALUES
(16, 10003, '2018-05-09', 'ahmet@fb.com', 'Deneme', 50, 58, 1, 1, 3, 2, 'denem', 123141, 'asdfafsd'),
(17, 10004, '2018-05-30', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 216, 1, 1, 1, 1, 'asdfdfs', 12312, 'sdafdsaf'),
(20, 10007, '2018-05-30', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 216, 1, 1, 1, 1, 'asdfa', 11221, 'asdfdsfa'),
(21, 10008, '2018-05-30', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 388.8, 1, 1, 1, 3, 'a', 121212, 'aaaaa'),
(22, 10008, '2018-05-30', 'frkn.snl@hotmail.com', 'Arabalı', 160, 388.8, 1, 1, 1, 3, 'a', 121212, 'aaaaa'),
(23, 10009, '2018-05-31', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 388.8, 1, 3, 1, 1, 'nisan adı', 123456, 'nişan adere'),
(24, 10009, '2018-05-31', 'frkn.snl@hotmail.com', 'Arabalı', 160, 388.8, 1, 3, 1, 1, 'nisan adı', 123456, 'nişan adere'),
(25, 10010, '2018-05-31', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 388.8, 1, 3, 1, 1, 'nisan adı', 123456, 'nişan adere'),
(26, 10010, '2018-05-31', 'frkn.snl@hotmail.com', 'Arabalı', 160, 388.8, 1, 3, 1, 1, 'nisan adı', 123456, 'nişan adere'),
(27, 10010, '2018-05-31', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 388.8, 1, 3, 1, 1, 'nisan adı', 123456, 'nişan adere'),
(28, 10010, '2018-05-31', 'frkn.snl@hotmail.com', 'Arabalı', 160, 388.8, 1, 3, 1, 1, 'nisan adı', 123456, 'nişan adere'),
(29, 10011, '2018-05-31', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 388.8, 1, 5, 1, 1, 'cocuk siparis ad soyad', 987654, 'cocuk teslimat'),
(30, 10011, '2018-05-31', 'frkn.snl@hotmail.com', 'Arabalı', 160, 388.8, 1, 5, 1, 1, 'cocuk siparis ad soyad', 987654, 'cocuk teslimat'),
(31, 10012, '2018-05-31', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 388.8, 1, 5, 1, 1, 'cocuk siparis ad soyad', 987654, 'cocuk teslimat'),
(32, 10012, '2018-05-31', 'frkn.snl@hotmail.com', 'Arabalı', 160, 388.8, 1, 5, 1, 1, 'cocuk siparis ad soyad', 987654, 'cocuk teslimat'),
(33, 10013, '2018-05-31', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 388.8, 1, 5, 1, 1, 'cocuk siparis ad soyad', 987654, 'cocuk teslimat'),
(34, 10013, '2018-05-31', 'frkn.snl@hotmail.com', 'Arabalı', 160, 388.8, 1, 5, 1, 1, 'cocuk siparis ad soyad', 987654, 'cocuk teslimat'),
(35, 10014, '2018-05-31', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 442.8, 1, 3, 1, 1, 'ataberk', 12312, 'ataberk'),
(36, 10014, '2018-05-31', 'frkn.snl@hotmail.com', 'Arabalı', 160, 442.8, 1, 3, 1, 1, 'ataberk', 12312, 'ataberk'),
(37, 10014, '2018-05-31', 'frkn.snl@hotmail.com', ' Kumaş Kapaklı Kavanoz', 50, 442.8, 1, 3, 1, 1, 'ataberk', 12312, 'ataberk'),
(38, 10015, '2018-05-31', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 442.8, 1, 1, 1, 1, 'nişan', 12313, 'nişan'),
(39, 10015, '2018-05-31', 'frkn.snl@hotmail.com', 'Arabalı', 160, 442.8, 1, 1, 1, 1, 'nişan', 12313, 'nişan'),
(40, 10015, '2018-05-31', 'frkn.snl@hotmail.com', ' Kumaş Kapaklı Kavanoz', 50, 442.8, 1, 1, 1, 1, 'nişan', 12313, 'nişan'),
(41, 10016, '2018-05-31', 'ahmet@fb.com', ' Kavanoz Nikah Şekeri ', 100, 432, 1, 1, 1, 1, 'dugun', 12321, 'dugun'),
(42, 10016, '2018-05-31', 'ahmet@fb.com', 'Çuval Kapaklı Kavanoz ', 100, 432, 1, 1, 1, 1, 'dugun', 12321, 'dugun'),
(43, 10017, '2018-05-31', 'ahmet@fb.com', ' Kavanoz Nikah Şekeri ', 100, 432, 1, 1, 1, 1, 'nisan', 123213, 'nisan'),
(44, 10017, '2018-05-31', 'ahmet@fb.com', 'Çuval Kapaklı Kavanoz ', 100, 432, 1, 1, 1, 1, 'nisan', 123213, 'nisan'),
(45, 10018, '2018-05-31', 'ahmet@fb.com', ' Kavanoz Nikah Şekeri ', 100, 432, 1, 1, 1, 1, 'sünnet', 123132, 'sünnet'),
(46, 10018, '2018-05-31', 'ahmet@fb.com', 'Çuval Kapaklı Kavanoz ', 100, 432, 1, 1, 1, 1, 'sünnet', 123132, 'sünnet'),
(47, 10019, '2018-05-31', 'ahmet@fb.com', ' Kavanoz Nikah Şekeri ', 100, 432, 1, 3, 1, 1, 'dugun', 21313, 'dugun'),
(48, 10019, '2018-05-31', 'ahmet@fb.com', 'Çuval Kapaklı Kavanoz ', 100, 432, 1, 3, 1, 1, 'dugun', 21313, 'dugun'),
(49, 10020, '2018-05-31', 'ahmet@fb.com', ' Kavanoz Nikah Şekeri ', 100, 432, 1, 4, 1, 1, 'deneme', 1231312312, 'sadfsadff'),
(50, 10020, '2018-05-31', 'ahmet@fb.com', 'Çuval Kapaklı Kavanoz ', 100, 432, 1, 4, 1, 1, 'deneme', 1231312312, 'sadfsadff'),
(51, 10021, '2018-05-31', 'ahmet@fb.com', ' Kavanoz Nikah Şekeri ', 100, 432, 1, 1, 1, 1, 'asffsad', 1231312, 'sadfsaf'),
(52, 10021, '2018-05-31', 'ahmet@fb.com', 'Çuval Kapaklı Kavanoz ', 100, 432, 1, 1, 1, 1, 'asffsad', 1231312, 'sadfsaf'),
(53, 10022, '2018-05-31', 'ahmet@fb.com', ' Kavanoz Nikah Şekeri ', 100, 432, 1, 1, 1, 1, 'a', 1231, 'a'),
(54, 10022, '2018-05-31', 'ahmet@fb.com', 'Çuval Kapaklı Kavanoz ', 100, 432, 1, 1, 1, 1, 'a', 1231, 'a'),
(55, 10023, '2018-05-31', 'ahmet@fb.com', ' Kavanoz Nikah Şekeri ', 100, 432, 1, 1, 1, 1, 'aafsda', 13131, 'aa'),
(56, 10023, '2018-05-31', 'ahmet@fb.com', 'Çuval Kapaklı Kavanoz ', 100, 432, 1, 1, 1, 1, 'aafsda', 13131, 'aa'),
(57, 10024, '2018-05-31', 'frkn.snl@hotmail.com', 'Update1', 100, 108, 1, 1, 3, 1, 'koray', 123132, 'koray'),
(58, 10025, '2018-05-31', 'frkn.snl@hotmail.com', 'Update1', 100, 108, 1, 1, 1, 1, 'koray', 1231, 'koray'),
(59, 10026, '2018-05-31', 'frkn.snl@hotmail.com', 'Update1', 100, 108, 1, 1, 1, 2, 'koray', 12312, 'koray'),
(60, 10027, '2018-05-31', 'frkn.snl@hotmail.com', 'wadf', 100, 324, 1, 1, 2, 1, 'Furkan Şenol', 21242, 'beylikdüzü'),
(61, 10027, '2018-05-31', 'frkn.snl@hotmail.com', 'Çuval Kapaklı Kavanoz ', 100, 324, 1, 1, 2, 1, 'Furkan Şenol', 21242, 'beylikdüzü'),
(62, 10028, '2018-05-31', 'frkn.snl@hotmail.com', 'wadf', 100, 324, 1, 1, 3, 1, 'Furkan Şenol', 21242, 'beylikdüzü'),
(63, 10028, '2018-05-31', 'frkn.snl@hotmail.com', 'Çuval Kapaklı Kavanoz ', 100, 324, 1, 1, 3, 1, 'Furkan Şenol', 21242, 'beylikdüzü'),
(64, 10029, '2018-06-01', 'frkn.snl@hotmail.com', 'Çuval Kapaklı Kavanoz ', 100, 216, 1, 1, 4, 1, 'fff', 12, 'fff'),
(65, 10030, '2018-06-01', 'frkn.snl@hotmail.com', ' Kavanoz Nikah Şekeri ', 100, 216, 1, 1, 4, 1, 'safdsafsfsaf', 12313, 'sfsaf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tblurun`
--

DROP TABLE IF EXISTS `tblurun`;
CREATE TABLE IF NOT EXISTS `tblurun` (
  `urun_Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_Resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_Kod` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urun_Ozellik` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_Eski_Fiyat` float NOT NULL,
  `urun_Yeni_Fiyat` float NOT NULL,
  `urun_Kategori` int(11) NOT NULL,
  PRIMARY KEY (`urun_Id`),
  UNIQUE KEY `urun_Kod` (`urun_Kod`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tblurun`
--

INSERT INTO `tblurun` (`urun_Id`, `urun_Ad`, `urun_Resim`, `urun_Kod`, `urun_Ozellik`, `urun_Eski_Fiyat`, `urun_Yeni_Fiyat`, `urun_Kategori`) VALUES
(1, 'Deneme', '../images/urun1.jpg', 'BS1256W', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. ', 500, 100, 1),
(13, ' Kumaş Kapaklı Kavanoz', '../images/urun7.png', 'MA-1014', 'Falan Filan işte', 2, 1, 2),
(3, 'Çocuk', '../images/urun2.jpg', 'QWE1', 'Oyle Boyle', 600, 500, 2),
(4, 'Arabalı', '../images/urun3.jpg', 'WE564QW', 'Çok güzel', 2, 1, 5),
(5, 'Deneme4', '../images/urun4.jpg', 'ASF21W', 'falan filan inter milan', 200, 100, 5),
(6, 'Arabalı2', '../images/urun5.jpg', '1235i1', 'çok güzel olması', 500, 400, 2),
(9, 'Update1', '../images/urun2.jpg', 'Update1', 'Update2', 3, 1, 1),
(14, 'Çuval Kapaklı Kavanoz ', '../images/urun8.png', 'MA1008', 'AAAAAAA', 3, 2, 1),
(15, ' Kavanoz Nikah Şekeri ', '../images/urun9.png', 'MA1010', 'sfasdasfsfsaf', 2.5, 2, 2),
(17, 'wadf', '../images/urun8.png', 'asdf', 'asdf', 2, 1, 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbluye`
--

DROP TABLE IF EXISTS `tbluye`;
CREATE TABLE IF NOT EXISTS `tbluye` (
  `uyeId` int(11) NOT NULL AUTO_INCREMENT,
  `uyeRol_Id` int(11) NOT NULL,
  `uyeAd` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uyeSoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uyeUlke` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uyeSehir` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uyeIlce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uyeTel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uyeEmail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uyeSifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`uyeId`),
  UNIQUE KEY `uyeEmail` (`uyeEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tbluye`
--

INSERT INTO `tbluye` (`uyeId`, `uyeRol_Id`, `uyeAd`, `uyeSoyad`, `uyeUlke`, `uyeSehir`, `uyeIlce`, `uyeTel`, `uyeEmail`, `uyeSifre`) VALUES
(1, 1, 'Fatih', 'Arslan', 'Türkiye', 'İstanbul', 'Beylikdüzü', '131232131231', 'fatiharslnn@hotmail.com', 'hecker3455'),
(2, 1, 'asdf', 'asdf', 'Türkiye', 'sdfs', 'asdfasd', '134123', 'sadf@asfd.com', '7815696ecbf1c96e6894b779456d330e'),
(3, 2, 'dsfads', 'sdffs', 'Türkiye', 'adsff', 'sdf', '123435', 'naber@sadf.com', 'aaa'),
(4, 1, 'Ahmet', 'Aktürk', 'Türkiye', 'Erzincan', 'Merkez1', '053461545', 'ahmet@fb.com', 'hecker_3455'),
(6, 2, 'asdf', 'asfd', 'Türkiye', 'sadf', 'asdf', '123', 'asd@asd.com', '7815696ecbf1c96e6894b779456d330e'),
(8, 1, 'Furkan', 'Şenol', 'Türkiye', 'İstanbul', 'Beylikdüzü1', '05352041506', 'frkn.snl@hotmail.com', 'hecker3455'),
(9, 2, 'GuncelAd', 'GuncelSoyad', 'Türkiye', 'GuncelSehir', 'Guncelİlçe', '123', 'ahmet@guncel.com', '202cb962ac59075b964b07152d234b70'),
(10, 2, 'sdfa', 'dsaf', 'Türkiye', 'sadf', 'asfd', '3421431', 'deneme@deneme.com', '90dc2ae793cd03255bdb28fad4061f71'),
(11, 2, 'sdfa', 'asdf', 'Türkiye', 'SDF', 'ADSF', '231423', 'afd@aa.com', 'asd'),
(13, 2, 'furkan', 'senol', 'Türkiye', 'istsanbul', 'sefakoy', '055225', 'sad@fsdf.com', 'asd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 Nis 2020, 12:07:08
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(255) NOT NULL,
  `admin_sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'admin', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `site_id` int(11) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `site_desc` varchar(255) NOT NULL,
  `site_keyw` varchar(255) NOT NULL,
  `site_footer` varchar(255) NOT NULL,
  `site_admin` varchar(255) NOT NULL,
  `site_admin_url` varchar(255) NOT NULL,
  `site_muzik` varchar(500) NOT NULL,
  `site_renk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_id`, `site_title`, `site_url`, `site_desc`, `site_keyw`, `site_footer`, `site_admin`, `site_admin_url`, `site_muzik`, `site_renk`) VALUES
(1, '      TurKLoJeN Online       ', '      http://localhost/cvscript/                               ', '      Oğuzhan Sarıoğlugil Online CV Bilgilerim                               ', '      oğuzhan,sarıoğlugil,cv,onlinecv,turklojen                               ', '      Tüm Hakları Saklıdır                               ', '      Online CV                   ', '      http://localhost/cvscript/admin/                    ', '  wr-buV4tYOA  ', 'black');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `becerilerim`
--

CREATE TABLE `becerilerim` (
  `beceri_id` int(11) NOT NULL,
  `beceri_adi` varchar(255) NOT NULL,
  `beceri_yuzde` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `becerilerim`
--

INSERT INTO `becerilerim` (`beceri_id`, `beceri_adi`, `beceri_yuzde`) VALUES
(1, 'Siber Güvenlik', '100'),
(2, 'Web Programlama', '75'),
(3, 'Grafik Tasarım', '50'),
(4, 'Oyun Programlama', '60'),
(5, 'Mobil Programlama', '65'),
(6, 'Linux', '100'),
(7, 'Masaüstü Uygulama Geliştirme', '80'),
(10, 'Python', '63');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgilerim`
--

CREATE TABLE `bilgilerim` (
  `bilgi_id` int(11) NOT NULL,
  `bilgi_fotograf` varchar(500) NOT NULL,
  `bilgi_isim` varchar(255) NOT NULL,
  `bilgi_meslek` varchar(255) NOT NULL,
  `bilgi_ikamet` varchar(255) NOT NULL,
  `bilgi_mail` varchar(255) NOT NULL,
  `bilgi_telefon` varchar(255) NOT NULL,
  `bilgi_skype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bilgilerim`
--

INSERT INTO `bilgilerim` (`bilgi_id`, `bilgi_fotograf`, `bilgi_isim`, `bilgi_meslek`, `bilgi_ikamet`, `bilgi_mail`, `bilgi_telefon`, `bilgi_skype`) VALUES
(1, '  https://avatars3.githubusercontent.com/u/32311900?s=400&v=4  ', '                   Oğuzhan Sarıoğlugil   ', '                   Siber Güvenlik Uzmanı                   ', '                   Türkiye Samsun                   ', '                   admin@turklojen.com                   ', '                   +90 534 447 5450                   ', '                   turklojen                   ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dillerim`
--

CREATE TABLE `dillerim` (
  `dil_id` int(11) NOT NULL,
  `dil_adi` varchar(255) NOT NULL,
  `dil_yuzde` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dillerim`
--

INSERT INTO `dillerim` (`dil_id`, `dil_adi`, `dil_yuzde`) VALUES
(1, 'İngilizce', '70'),
(2, 'Rusça', '60'),
(3, 'Almanca', '50'),
(4, 'Fransızca', '80'),
(5, 'ÖzTürkçe', '44');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isler`
--

CREATE TABLE `isler` (
  `is_id` int(11) NOT NULL,
  `is_adi` varchar(255) NOT NULL,
  `is_link` varchar(255) NOT NULL,
  `is_aciklama` text NOT NULL,
  `is_tarih` varchar(255) NOT NULL,
  `is_devam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `isler`
--

INSERT INTO `isler` (`is_id`, `is_adi`, `is_link`, `is_aciklama`, `is_tarih`, `is_devam`) VALUES
(1, 'Ondokuz Mayıs Üniversitesi Uzem Stajyer', 'https://uzem.omu.edu.tr/', 'Ondokuz Mayıs Üniversitesine Bağlı Olan UZEM biriminde okul dönemi için zorunlu olan stajımı gerçekleştirmiştim stajım süresince üniversitenin yazılım anlamında projelerine yardım ettim', '2019-2020', '0'),
(2, 'Ondokuz Mayıs Üniversitesi Rektörlük Web Birimi', 'http://www.omu.edu.tr/tr/haberduyuruetkinlik/rektorluk', 'Ondokuz Mayıs Üniversitesinde ki Rektörlük Binasında Bulunan Bilgi İşlem Katındaki Web Biriminde Lise Stajımı Yaptım Stajım Boyunca Projelere Yardım Ettim', '2014-2015', '0'),
(3, 'BuggersWeb Yönetim ', 'http://buggersweb.com/', 'BuggersWeb isimli kurmuş olduğum bir ekip ile Türk ve Yabancı Olmak üzere şirket ve sitelere Güvenlik Hizmeti Sunuyorum', '2019 - ', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `okullar`
--

CREATE TABLE `okullar` (
  `okul_id` int(11) NOT NULL,
  `okul_adi` varchar(255) NOT NULL,
  `okul_aciklama` text NOT NULL,
  `okul_tarih` varchar(255) NOT NULL,
  `okul_devam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `okullar`
--

INSERT INTO `okullar` (`okul_id`, `okul_adi`, `okul_aciklama`, `okul_tarih`, `okul_devam`) VALUES
(1, 'Ondokuz Mayıs Üniversitesi Bafra MYO', 'Bafra Meslek Yüksekokulu Ondokuz Mayıs Üniversitesi Bilgisayar Programcılığı', '2018 - 2020', '1'),
(2, 'Atakum Mesleki ve Teknik Anadolu Lisesi', 'T.C. MİLLÎ EĞİTİM BAKANLIĞI SAMSUN / ATAKUM / Atakum Mesleki ve Teknik Anadolu Lisesi.', '2012 - 2016 ', '0'),
(3, 'Denizevleri Ortaokulu', 'Samsun Denizevleri Ortaokulu ', '2008 - 2012', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projeler`
--

CREATE TABLE `projeler` (
  `proje_id` int(11) NOT NULL,
  `proje_adi` varchar(255) NOT NULL,
  `proje_link` varchar(255) NOT NULL,
  `proje_aciklama` text NOT NULL,
  `proje_tarih` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `projeler`
--

INSERT INTO `projeler` (`proje_id`, `proje_adi`, `proje_link`, `proje_aciklama`, `proje_tarih`) VALUES
(1, 'Spammer Bot', 'https://github.com/TurKLoJeN/Spammer-Bot', 'Programın amacı yazdığınız metinleri belirlediğiniz yere siz durdurana kadar yazar bunu Whatsapp Discord Facebook konuşma alanlarında sürekli mesaj atıp arkadaşlarınızı gıcık edebilirsiniz', '30 Kasım 2019'),
(2, 'Wallpaper-Manager', 'https://github.com/TurKLoJeN/Wallpaper-Manager-', 'Telefonlarınız İçin Yüksek Kalitede ATATÜRK Resimlerine Hızlıca Ulaşıp Duvar Kağıdı Yapabileceğiniz Uygulamam Ayrıca İlk Android Projem', '20 Aralık 2019'),
(3, 'CyberCore', 'https://github.com/TurKLoJeN/CyberCore', 'Pentest işlemlerinde kullanılan araçları otomatikleştirilmiş halidir program sayesinde sitelere pentesting işlemleri yapabilirsiniz', '06 Ağustos 2019'),
(4, 'Toplantı Takip Programı', 'https://github.com/TurKLoJeN/toplanti-takip-programi', 'C# ile geliştirdiğim basit bir kayıt takip uygulamasıdır.\r\nVisual Studio 2019 ile geliştirildi diğer Visual Studio sürümlerinde hata verebilir.', '12 Temmuz 2019'),
(5, 'Admin-Panel-Finder', 'https://github.com/TurKLoJeN/Admin-Panel-Finder', 'Hedef Olarak Belirtilmiş Sitenin Yönetim / Admin Panelini Bulmaya Yarayan Basit Python Uygulaması', '06 Ağustos 2019'),
(6, 'Wordlist Generator', 'https://github.com/TurKLoJeN/WordlistGenerator', 'Hedef kişi hakkında verilen bilgilere uyumlu şekilde şifre üreten bir araçtır\r\n\r\nBilmediğiniz alanı boş bırakınız yada tahmini değerler giriniz.\r\n\r\nNe kadar çok bilgi girerseniz doğru şifreleri üretme olanığımız artar', '06 Ağustos 2019');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyalmedya`
--

CREATE TABLE `sosyalmedya` (
  `sm_id` int(11) NOT NULL,
  `sm_facebook` varchar(255) NOT NULL,
  `sm_twitter` varchar(255) NOT NULL,
  `sm_instagram` varchar(255) NOT NULL,
  `sm_youtube` varchar(255) NOT NULL,
  `sm_google` varchar(255) NOT NULL,
  `sm_pinterest` varchar(255) NOT NULL,
  `sm_linkedin` varchar(255) NOT NULL,
  `sm_snapchat` varchar(255) NOT NULL,
  `sm_github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sosyalmedya`
--

INSERT INTO `sosyalmedya` (`sm_id`, `sm_facebook`, `sm_twitter`, `sm_instagram`, `sm_youtube`, `sm_google`, `sm_pinterest`, `sm_linkedin`, `sm_snapchat`, `sm_github`) VALUES
(1, '  https://www.facebook.com/themightyturk ', '  https://twitter.com/turklojen  ', '  https://instagram.com/turklojenofficial  ', '  https://youtube.com/c/TurKLoJeN  ', '  https://www.google.com/search?q=turklojen  ', '  https://tr.pinterest.com/turklojen/  ', '  https://www.linkedin.com/in/oguzhan-sarioglugil/  ', '  https://www.snapchat.com/add/turklojen  ', '  https://github.com/TurKLoJeN  ');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `becerilerim`
--
ALTER TABLE `becerilerim`
  ADD PRIMARY KEY (`beceri_id`);

--
-- Tablo için indeksler `bilgilerim`
--
ALTER TABLE `bilgilerim`
  ADD PRIMARY KEY (`bilgi_id`);

--
-- Tablo için indeksler `dillerim`
--
ALTER TABLE `dillerim`
  ADD PRIMARY KEY (`dil_id`);

--
-- Tablo için indeksler `isler`
--
ALTER TABLE `isler`
  ADD PRIMARY KEY (`is_id`);

--
-- Tablo için indeksler `okullar`
--
ALTER TABLE `okullar`
  ADD PRIMARY KEY (`okul_id`);

--
-- Tablo için indeksler `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`proje_id`);

--
-- Tablo için indeksler `sosyalmedya`
--
ALTER TABLE `sosyalmedya`
  ADD PRIMARY KEY (`sm_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `becerilerim`
--
ALTER TABLE `becerilerim`
  MODIFY `beceri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `bilgilerim`
--
ALTER TABLE `bilgilerim`
  MODIFY `bilgi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `dillerim`
--
ALTER TABLE `dillerim`
  MODIFY `dil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `isler`
--
ALTER TABLE `isler`
  MODIFY `is_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `okullar`
--
ALTER TABLE `okullar`
  MODIFY `okul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `projeler`
--
ALTER TABLE `projeler`
  MODIFY `proje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `sosyalmedya`
--
ALTER TABLE `sosyalmedya`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

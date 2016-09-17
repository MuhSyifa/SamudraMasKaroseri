-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Feb 2015 pada 07.13
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `samudra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carapesan`
--

CREATE TABLE IF NOT EXISTS `carapesan` (
  `id_carapesan` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_carapesan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `carapesan`
--

INSERT INTO `carapesan` (`id_carapesan`, `isi`, `image`) VALUES
(1, '<p>Cara Pesan</p>', 'promo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `phone`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(3, 'SATU', '213432513535', 'TIGA', 'DUA', 'DSAFDSFGASG sdasdasf dasf dasfdsf sdfsdgafg dsfgdfsg dfsgsdf gfdsgsd fgsdfg dfsg ', '2014-09-10'),
(4, 'TIGA', 'SADA', 'SATU', 'DUA', 'DASGW WQR ', '2014-09-25'),
(5, 'test', '4324', 'admin@admin.com', 'sada', 'qa', '2014-10-15'),
(6, 'ayi', '082323442626, 087835', 'dexayu@gmail.com', 'tanya diskon', 'testes', '2014-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `followus`
--

CREATE TABLE IF NOT EXISTS `followus` (
  `id_followus` int(2) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `follow` varchar(50) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_followus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `followus`
--

INSERT INTO `followus` (`id_followus`, `image`, `link`, `follow`, `aktif`) VALUES
(1, '458831facebook_icon.png', 'https://www.facebook.com', 'Facebook', 'Y'),
(2, '656585twitter_icon.png', 'https://twitter.com/', 'Twitter', 'Y'),
(3, '615234linkedin_icon.png', 'https://www.linkedin.com/', 'Linkedin', 'Y'),
(4, '991821email_icon.png', 'https://mail.google.com', 'Email', 'N'),
(5, '172760tumblr_icon.png', 'https://www.tumblr.com', 'Tumblr', 'N'),
(6, '649841skype_icon.png', 'http://www.skype.com', 'Skype', 'N'),
(7, '240234youtube_icon.png', 'http://www.youtube.com', 'Youtube', 'N'),
(8, '564392google+_icon.png', 'www.plus.google.com', 'Googleplus', 'N'),
(9, '929595behance_icon.png', 'https://www.behance.net', 'Behance', 'N'),
(10, '798706vimeo_icon.png', 'https://vimeo.com', 'Vimeo', 'N'),
(11, '676727forrst_icon.png', 'https://forrst.com', 'Forrst', 'N'),
(12, '874572flickr_icon.png', 'https://www.flickr.com', 'Flickr', 'N'),
(13, '562286pinterest_icon.png', 'https://www.pinterest.com', 'Pinterest', 'N'),
(14, '400329dribbble-icon.png', 'https://dribbble.com', 'Dribbble', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `judul`, `image`, `deskripsi`) VALUES
(4, 'Dumb Truck', '53530823162Dump Truck Kuning.jpg', '<p>empat</p>'),
(5, 'Lima', '7722773855380_img01923-20121118-2015.jpg', '<p>lima</p>'),
(6, 'Box Alumunium', '398773box alumunium.jpg', '<p>enam</p>'),
(7, 'Box vertical', '112579box vertical.jpg', ''),
(8, 'Tronton', '935852cropped-header-karoseri-me-3.jpg', ''),
(9, 'Box kayu', '417358index.jpg', ''),
(10, 'Losbak', '454742losbak.jpg', ''),
(11, 'Tengki', '240539truck tangkai.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `dealer` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `flexi` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bbm` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `dealer`, `alamat`, `nama`, `phone`, `flexi`, `email`, `bbm`, `image`) VALUES
(1, 'PT. SAMUDRA MAS (karoseri dan variasi bak truck)', 'Jln. Pleret KM 2 Kranginan, Banguntapan, Bantul, Jogjakarta', 'Rohman', '082225714777', '0274-4544662', 'samudramas1@yahoo.com', '', '632263administrator-icon.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `image` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `deskripsi_awal` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `seo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`, `image`, `aktif`, `deskripsi_awal`, `deskripsi`, `seo`) VALUES
(1, 'Bak Truck Type Tronton', '26947cropped-karoseri_tronton_wing_box_2.jpg', 'Y', 'Ukuran bag. dalam box : 700 cm x 240 cm x 210 cm', '<p>Ukuran bag. dalam box : 700 cm x 240 cm x 210 cm</p>\r\n<p>Volume : 34 kubik</p>\r\n<p>Berat Maksimal Muat : 12.000 kg - 12 Ton</p>', 'bak-truck-type-tronton'),
(2, 'Bak Truck Tengki', '392089truck tangkai.jpg', 'Y', 'Karoseri truk tangki CPO 8 KL di kombinasikan dengan dan untuk light truck (truk ringan) 6 ban kelas 125 PS - 130 PS', '<p>Karoseri truk tangki CPO 8 KL di kombinasikan dengan dan untuk light truck (truk ringan) 6 ban kelas 125 PS - 130 PS. Model karoseri tangki terbesar di kelas light truck, di atas volume ini maka chassis yang anda gunakan harus upgrade ke medium truk kelas 190 - 235 PS 6 ban. Selain terlalu berat untuk ukuran light truck kapasitas karoseri tangki &gt; 8.000 liter juga tidak sesuai dengan regulasi Dinas Perhubungan.</p>', 'bak-truck-tengki'),
(3, 'Bak Truck Losbak', '94909losbak.jpg', 'Y', 'Karoseri bak besi flat bed panjang 3.15 meter yang di kombinasikan dengan chassis light truck 4 ban', '<div style="-webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: white; color: #020202; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><span style="color: #000000;"><span style="background-color: white; display: inline ! important; float: none; font-family: Arial,Helvetica,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;">Karoseri bak besi flat bed panjang 3.15 meter yang di kombinasikan dengan chassis light truck 4 ban, dengan kapasitas tonase 3 - 6 ton, desain dan model bodi karoseri yang praktis dan simple mudah dalam pengoperasian. </span><span style="background-color: white; display: inline ! important; float: none; font-family: Arial,Helvetica,sans-serif; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;">100% bahan baku baru bukan plat banci, bukan plat bekas, juga bukan plat rekondisi.<span class="Apple-converted-space">&nbsp; </span></span></span><span style="-webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px; background-color: white; color: #003300; display: inline !important; float: none; font-family: Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18px; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px;"><span style="color: #000000;">pastikan anda mendapatkan spesifikasi karoseri yang akan anda beli dengan jelas dan rinci, baik itu ukuran plat, dimensi karoseri (panjang, lebar, tinggi).</span> </span></div>', 'bak-truck-losbak'),
(4, 'Bak Truck Box Alumunium', '401947box alumunium.jpg', 'Y', 'karoseri box alumunium kargo, truk 4 ban, 110 PS, 5.2 ton, panjang box: 3.15 m, lebar box: 1.85 m, tinggi box: 1.75 m', '<p>karoseri box alumunium kargo, truk 4 ban, 110 PS, 5.2 ton, panjang box: 3.15 m, lebar box: 1.85 m, tinggi box: 1.75 m. Moda transportasi dalam kota, mudah bermanuver dalam jalanan sempit dan padat lalu lintas, irit bahan bakar, truk ringan yang panjang umurnya ngga rusak-rusak. Banyak di pakai sebagai truk courier cargo, UKM, atau distribusi jasa dan produk, distributor consumer goods dan sebagainya.</p>', 'bak-truck-box-alumunium'),
(5, 'Bak Truck Box Vertical', '37658box vertical.jpg', 'Y', 'Daftar harga dan spesifikasi Karoseri Box Besi Vertical sebagai berikut :', '<p style="text-align: justify;">Daftar harga dan spesifikasi Karoseri&nbsp;Box Besi Vertical sebagai berikut :</p>\r\n<ul style="text-align: justify;">\r\n<li>&nbsp;Jenis Kendaraan&nbsp;Karoseri&nbsp;Box Besi Vertical Dobel 6 Roda</li>\r\n</ul>\r\n<blockquote><ol>\r\n<li>Dimensi {P x L x T} (4.5 x 2.0 x2.1) M. Spesifikasi Plat Dinding : 1.8 mm, Plat Lantai : 2.8 mm, Pilar : 2.8 mm dengan Harga Rp. 27.000.000,-</li>\r\n<li>Dimensi {P x L x T}&nbsp;(6.0 x 2.0 x 2.4) M. Spesifikasi Plat Dinding : 1.8 mm, Plat Lantai : 2.8 mm, Pilar : 2.8 mm dengan Harga Rp. 34.000.000,-</li>\r\n</ol></blockquote>\r\n<ul style="text-align: justify;">\r\n<li>&nbsp;Jenis Kendaraan&nbsp;Karoseri&nbsp;Box Besi Vertical Engkel 4 Roda</li>\r\n</ul>\r\n<blockquote><ol>\r\n<li>Dimensi {P x L x T} (3.3 x 1.8 x 1.8) M. Spesifikasi Plat Dinding : 1.8 mm, Plat Lantai : 2.8 mm, Pilar : 2.8 mm dengan Harga Rp. 22.000.000,-</li>\r\n<li>Dimensi {P x L x T} (4.0 x 2.0 x 2.1) M. Spesifikasi Plat Dinding : 1.8 mm, Plat Lantai : 2.8 mm, Pilar : 2.8 mm dengan Harga Rp. 26.000.000,-</li>\r\n</ol></blockquote>\r\n<ul style="text-align: justify;">\r\n<li>&nbsp;Jenis Kendaraan&nbsp;Karoseri&nbsp;Box Besi Vertical Pick UP</li>\r\n</ul>\r\n<blockquote><ol>\r\n<li>Dimensi {P x L x T} (2.6 x 1.7 x 1.5) M. Spesifikasi Plat Dinding : 1.8 mm, Plat Lantai : 2.5 mm, Pilar : 2.8 mm dengan Harga Rp. 17.500.00,-</li>\r\n</ol></blockquote>\r\n<ul style="text-align: justify;">\r\n<li>&nbsp;Jenis Kendaraan&nbsp;Karoseri&nbsp;Box Besi Vertical Truk Tronton</li>\r\n</ul>\r\n<ol>\r\n<li>Dimensi {P x L x T} (9.5 x 2.5 x 2.5) M. Spesifikasi Plat Dinding : 2.5 mm, Plat Lantai : 3.2 mm, Pilar : 3 mm dengan Harga Rp. 71.000.000,-</li>\r\n</ol>', 'bak-truck-box-vertical'),
(6, 'Box  DumbTruck', '26708923162Dump Truck Kuning.jpg', 'Y', 'Model : Dump Truk Standar  Ukuran : panjang 360 cm, tinggi 70 cm, lebar 185 cm', '<p style="text-align: center;"><strong>Model : Dump Truk Standar</strong></p>\r\n<p style="text-align: center;">Ukuran : panjang 360 cm, tinggi 70 cm, lebar 185 cm</p>\r\n<p style="text-align: center;">Cross member UNP 1oo</p>\r\n<p style="text-align: center;">Long member UNP 120</p>\r\n<p style="text-align: center;">Side member UNP 100</p>\r\n<p style="text-align: center;">Bemper depan UNP 120 dan Bemper belakang UNP&nbsp; 150</p>\r\n<p style="text-align: center;">Dump Hoist KL146, gear pump KP55, dinding samping 3mm, Lantai 3,2 mm</p>\r\n<p style="text-align: center;">&nbsp;</p>', 'box--dumbtruck'),
(7, 'Bak Truck Kayu', '887542index.jpg', 'Y', 'Model : Truck Kayu  Model Standar kayu merbau 2,2 cm', '<p style="text-align: center;"><strong>Model : Truck Kayu</strong></p>\r\n<p style="text-align: center;">Model Standar<br /> kayu merbau 2,2 cm<br /> Variasi full tambahan bordes aluminium 2 lembar<br /> Cat semprot duco atau sintesis</p>\r\n<p style="text-align: center;">&nbsp;</p>', 'bak-truck-kayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id_modul` int(11) NOT NULL AUTO_INCREMENT,
  `nama_modul` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `publish` enum('Y','N') NOT NULL,
  `status` enum('admin','user') NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `urutan` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `content`, `publish`, `status`, `aktif`, `urutan`, `image`) VALUES
(1, 'Kontak', '<p><strong>Samudra Mas (Karoseri Dan Variasi Bak Truk)<br /></strong></p>\r\n<p>kantor Kami Samudra mas di</p>\r\n<p>Jln. Pleret KM 2 Kranginan, Banguntapan, Bantul, Jogjakarta</p>\r\n<p>Telp: (0274) 4544662</p>\r\n<p>Hp: 082225714777</p>\r\n<p>Website:</p>\r\n<p>&nbsp;</p>', 'Y', 'admin', 'Y', 0, ''),
(2, 'Selamat Datang di Samudra Mas', '<p><span style="color: #000000; font-family: arial,helvetica,sans-serif;"><span style="font-size: 12pt;">Salam Sahabat, </span></span></p>\r\n<p>&nbsp;</p>\r\n<p><span style="color: #000000; font-family: arial,helvetica,sans-serif;"><span style="font-size: 12pt;">Selamat datang di website kami . Samudra Mas (Karoseri dan Variasi bak Truck) adalah Perusahaan yang bergerak di bidang produksi Bak Truck Kayu, Dum Truck, Box Vertikal, Box Alumunium, Losback, Savefloder, Truck Tangkai, Truck Tipe Tronton.</span></span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Y', 'admin', 'Y', 1, ''),
(3, 'Price List', '<p>Samudra Mas (Karoseri dan Variasi bak Truck) adalah Perusahaan yang bergerak di bidang produksi Bak Truck Kayu, Dum Truck, Box Vertikal, Box Alumunium, Losback, Savefloder, Truck Tangkai, Truck Tipe Tronton.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Jln. Pleret KM 2 Kranginan, Banguntapan, Bantul, Jogjakarta</p>\r\n<p>Telp: (0274) 4544662</p>\r\n<p>Hp: 082225714777</p>\r\n<p>Website:</p>\r\n<p>&nbsp;</p>', 'Y', 'admin', 'Y', 2, 'kredit-mobil.jpg'),
(4, 'Simulasi Kredit', '<h4>&nbsp;</h4>\r\n<table style="height: 215px;" width="773">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<h4 style="text-align: left;"><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Persyaratan Kredit Perorangan :</span></h4>\r\n<ul style="text-align: left;">\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto Copy KTP ( Suami + Istri )</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto Copy Kartu Keluarga</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto Copy Tabungan / Rekening Koran 3 Bulan Terakhir</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto Copy PBB/ Akta Jual Beli Rumah</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto Copy SIUP &amp; NPWP (Wiraswasta) atau Slip Gaji</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Surat Keterangan Kerja ( Karyawan )</span></li>\r\n</ul>\r\n<p style="text-align: left;"><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">&nbsp;</span></p>\r\n</td>\r\n<td>\r\n<h4 style="text-align: left;"><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Persyaratan Kredit Perusahaan :</span></h4>\r\n<ul style="text-align: left;">\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto copy NPWP</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto copy SIUP &amp; TDP</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto copy Domisili perusahaan</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto copy Akte Perusahaan</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto copy KTP direksi</span></li>\r\n<li><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Foto copy rekening koran</span></li>\r\n</ul>\r\n<p style="text-align: left;"><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">&nbsp;</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h4>&nbsp;</h4>\r\n<p><span style="font-size: 10pt; font-family: comic sans ms,sans-serif;">Sebelum Bapak/Ibu mulai mengisi Form Simulasi kredit mobil Daihatsu diatas, silahkan lihat juga daftar harga atau price list <strong>Daihatsu Solo Mobil</strong><span style="color: #ff0000;"> <a href="/pricelist-daihatsu-solo-mobil" target="_blank"><span style="color: #ff0000;">di sini</span></a> </span>terlebih dahulu.</span></p>', 'Y', 'admin', 'Y', 3, 'kredit-mobil2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id_partner` int(5) NOT NULL AUTO_INCREMENT,
  `leasing` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id_partner`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `partner`
--

INSERT INTO `partner` (`id_partner`, `leasing`, `image`, `link`) VALUES
(1, 'Fuso', '682067Mitsubishi_Fuso_logo.png', 'http://www.fuso.com.au/'),
(2, 'Isuzu', '244110isuzu-logo-png.png', 'http://www.isuzu.com/index.jsp'),
(3, 'Hino', '375366Hino-logo.png', 'http://www.hino.co.id/'),
(4, 'Toyota', '604156toylogo.png', 'http://www.toyota.astra.co.id/'),
(5, 'Daihatsu', '26672daihatsu.png', 'http://www.daihatsu.co.id'),
(6, 'Nissan diesel', '338592nissandieselud.png', 'http://www.udtrucks.com/'),
(9, 'Suzuki', '298950suzuki-logo_1.jpg', 'dfds');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(100) NOT NULL,
  `Keterangan` text NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `Judul`, `Keterangan`) VALUES
(1, 'Tentang Kami', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem.</p>\r\n<br>\r\n<p>In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy. Fusce aliquet pede non pede. Suspendisse dapibus lorem pellentesque magna. Integer nulla. Donec blandit feugiat ligula. Donec hendrerit, felis et imperdiet euismod, purus ipsum pretium metus, in lacinia nulla nisl eget sapien.</p>\r\n<br>\r\n<p>Donec ut est in lectus consequat consequat. Etiam eget dui. Aliquam erat volutpat. Sed at lorem in nunc porta tristique. Proin nec augue. Quisque aliquam tempor magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc ac magna. Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis. Pellentesque cursus sagittis felis.</p>\r\n<br>\r\n<p>Pellentesque porttitor, velit lacinia egestas auctor, diam eros tempus arcu, nec vulputate augue magna vel risus. Cras non magna vel ante adipiscing rhoncus. Vivamus a mi. Morbi neque. Aliquam erat volutpat. Integer ultrices lobortis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin semper, ante vitae sollicitudin posuere, metus quam iaculis nibh, vitae scelerisque nunc massa eget pede. Sed velit urna, interdum vel, ultricies vel, faucibus at, quam. Donec elit est, consectetuer eget, consequat quis, tempus quis, wisi.</p>\r\n<br>\r\n<p>In in nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Donec ullamcorper fringilla eros. Fusce in sapien eu purus dapibus commodo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras faucibus condimentum odio. Sed ac ligula. Aliquam at eros. Etiam at ligula et tellus ullamcorper ultrices. In fermentum, lorem non cursus porttitor, diam urna accumsan lacus, sed interdum wisi nibh nec nisl.</p>\r\n<br>\r\n<p>Ut tincidunt volutpat urna. Mauris eleifend nulla eget mauris. Sed cursus quam id felis. Curabitur posuere quam vel nibh. Cras dapibus dapibus nisl. Vestibulum quis dolor a felis congue vehicula. Maecenas pede purus, tristique ac, tempus eget, egestas quis, mauris. Curabitur non eros. Nullam hendrerit bibendum justo. Fusce iaculis, est quis lacinia pretium, pede metus molestie lacus, at gravida wisi ante at libero.</p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id_slider`, `images`, `keterangan`) VALUES
(1, '866546slide2.jpg', 'slide 1'),
(2, '34002667071591359.jpeg', 'slide 2'),
(4, '97290882080600-dump-truck02.jpg', 'slide 4'),
(5, '24871954650dump-fuso-used-truck.jpg', 'slide 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2014-06-13', 349, '1402652225'),
('::1', '2014-06-12', 1, '1402565745'),
('::1', '2014-06-14', 508, '1402738130'),
('::1', '2014-06-17', 147, '1402997483'),
('::1', '2014-06-18', 51, '1403068069'),
('::1', '2014-06-19', 36, '1403160663'),
('::1', '2014-06-25', 2, '1403664999'),
('::1', '2014-07-01', 3, '1404188508'),
('::1', '2014-07-19', 13, '1405758546'),
('::1', '2014-07-22', 183, '1406041373'),
('::1', '2014-07-23', 52, '1406120577'),
('::1', '2014-07-24', 185, '1406194002'),
('::1', '2014-07-25', 110, '1406278884'),
('::1', '2014-08-04', 57, '1407145194'),
('::1', '2014-08-05', 175, '1407231615'),
('192.168.1.19', '2014-08-05', 8, '1407230027'),
('::1', '2014-08-06', 172, '1407317073'),
('::1', '2014-08-07', 272, '1407404090'),
('192.168.1.19', '2014-08-07', 44, '1407403824'),
('::1', '2014-08-08', 114, '1407491028'),
('192.168.1.19', '2014-08-08', 7, '1407469804'),
('::1', '2014-08-09', 102, '1407573853'),
('::1', '2014-08-11', 84, '1407749794'),
('192.168.1.19', '2014-08-11', 1, '1407741574'),
('::1', '2014-08-12', 30, '1407830487'),
('::1', '2014-08-13', 3, '1407895402'),
('::1', '2014-08-14', 1, '1408006042'),
('192.168.1.11', '2014-08-14', 1, '1408008785'),
('192.168.1.11', '2014-09-01', 13, '1409536383'),
('::1', '2014-10-07', 102, '1412666971'),
('36.81.77.158', '2014-10-07', 29, '1412672711'),
('100.43.81.141', '2014-10-07', 5, '1412685517'),
('100.43.81.141', '2014-10-08', 1, '1412721085'),
('66.249.69.252', '2014-10-08', 1, '1412734713'),
('36.73.72.69', '2014-10-08', 5, '1412739797'),
('5.9.247.23', '2014-10-08', 1, '1412744041'),
('112.215.66.78', '2014-10-08', 1, '1412757337'),
('112.215.66.68', '2014-10-08', 1, '1412759634'),
('112.215.66.74', '2014-10-08', 1, '1412760123'),
('112.215.66.69', '2014-10-08', 1, '1412760132'),
('112.215.66.71', '2014-10-08', 1, '1412763217'),
('112.215.66.75', '2014-10-08', 1, '1412772199'),
('107.170.175.241', '2014-10-08', 1, '1412778900'),
('100.43.81.141', '2014-10-09', 7, '1412806425'),
('207.46.13.45', '2014-10-09', 1, '1412803064'),
('5.45.254.226', '2014-10-09', 1, '1412823813'),
('66.249.69.13', '2014-10-09', 1, '1412829907'),
('192.99.107.10', '2014-10-09', 1, '1412846827'),
('66.249.69.205', '2014-10-09', 6, '1412861537'),
('66.249.69.221', '2014-10-09', 8, '1412861550'),
('66.249.69.237', '2014-10-09', 1, '1412861035'),
('66.249.67.85', '2014-10-09', 1, '1412862212'),
('66.249.67.119', '2014-10-09', 3, '1412869509'),
('66.249.67.127', '2014-10-09', 5, '1412869701'),
('66.249.67.135', '2014-10-09', 2, '1412868986'),
('192.99.40.137', '2014-10-09', 2, '1412871118'),
('100.43.81.141', '2014-10-10', 7, '1412945721'),
('66.249.67.127', '2014-10-10', 1, '1412894973'),
('66.249.67.135', '2014-10-10', 4, '1412918206'),
('192.99.107.208', '2014-10-10', 1, '1412918882'),
('162.244.33.8', '2014-10-10', 1, '1412924165'),
('36.73.60.51', '2014-10-10', 14, '1412927346'),
('66.249.69.237', '2014-10-10', 1, '1412943292'),
('192.99.107.46', '2014-10-10', 1, '1412950451'),
('66.249.69.205', '2014-10-10', 1, '1412952660'),
('66.249.69.13', '2014-10-10', 1, '1412959366'),
('180.254.90.83', '2014-10-11', 19, '1413012839'),
('192.99.107.82', '2014-10-11', 1, '1413000894'),
('192.99.107.46', '2014-10-11', 1, '1413013251'),
('100.43.81.141', '2014-10-11', 4, '1413042697'),
('66.249.69.237', '2014-10-11', 1, '1413041892'),
('100.43.90.12', '2014-10-12', 1, '1413078635'),
('66.249.69.237', '2014-10-12', 1, '1413117937'),
('100.43.81.141', '2014-10-12', 2, '1413129490'),
('109.169.29.30', '2014-10-12', 3, '1413123472'),
('100.43.81.141', '2014-10-13', 3, '1413214025'),
('37.59.40.230', '2014-10-13', 1, '1413148627'),
('36.81.37.201', '2014-10-13', 55, '1413186393'),
('112.215.66.70', '2014-10-13', 1, '1413184654'),
('112.215.66.78', '2014-10-13', 1, '1413184863'),
('112.215.66.74', '2014-10-13', 2, '1413185160'),
('36.73.102.153', '2014-10-13', 3, '1413194147'),
('192.99.107.118', '2014-10-14', 1, '1413220847'),
('100.43.81.141', '2014-10-14', 2, '1413237754'),
('89.178.89.75', '2014-10-14', 1, '1413233339'),
('66.249.69.237', '2014-10-14', 1, '1413235142'),
('54.81.213.193', '2014-10-14', 1, '1413241468'),
('36.81.77.65', '2014-10-14', 22, '1413270691'),
('112.215.66.70', '2014-10-14', 1, '1413267353'),
('112.215.66.73', '2014-10-14', 1, '1413267536'),
('112.215.66.71', '2014-10-14', 1, '1413267551'),
('100.43.90.12', '2014-10-15', 1, '1413313212'),
('100.43.81.141', '2014-10-15', 5, '1413378189'),
('176.8.89.211', '2014-10-15', 1, '1413355446'),
('36.81.70.63', '2014-10-15', 1, '1413365296'),
('66.249.69.13', '2014-10-16', 1, '1413397099'),
('36.81.70.63', '2014-10-16', 1, '1413397437'),
('100.43.81.141', '2014-10-16', 2, '1413478658'),
('36.81.65.178', '2014-10-16', 9, '1413453766'),
('64.246.161.30', '2014-10-16', 1, '1413471053'),
('141.0.8.156', '2014-10-16', 4, '1413478598'),
('114.121.134.107', '2014-10-17', 5, '1413479230'),
('100.43.81.141', '2014-10-17', 5, '1413505724'),
('54.187.125.183', '2014-10-17', 1, '1413485031'),
('2.94.229.172', '2014-10-17', 1, '1413507128'),
('36.73.93.26', '2014-10-17', 46, '1413536261'),
('93.190.138.37', '2014-10-18', 1, '1413566089'),
('100.43.81.141', '2014-10-18', 2, '1413648704'),
('112.215.66.79', '2014-10-18', 1, '1413645970'),
('192.99.40.137', '2014-10-18', 2, '1413649159'),
('100.43.81.141', '2014-10-19', 1, '1413665389'),
('38.100.21.62', '2014-10-19', 7, '1413671654'),
('100.43.81.141', '2014-10-20', 1, '1413781864'),
('198.101.238.203', '2014-10-20', 1, '1413787173'),
('66.249.69.221', '2014-10-20', 1, '1413788393'),
('66.249.69.205', '2014-10-20', 1, '1413822563'),
('66.249.69.13', '2014-10-20', 1, '1413822658'),
('65.181.124.121', '2014-10-21', 1, '1413829078'),
('198.101.238.203', '2014-10-21', 1, '1413829770'),
('192.237.216.89', '2014-10-21', 1, '1413830839'),
('66.249.69.205', '2014-10-21', 2, '1413891479'),
('66.249.69.231', '2014-10-21', 2, '1413871458'),
('66.249.69.237', '2014-10-21', 2, '1413880714'),
('112.215.66.71', '2014-10-21', 3, '1413877102'),
('112.215.66.77', '2014-10-21', 3, '1413877324'),
('112.215.66.78', '2014-10-21', 4, '1413882740'),
('112.215.66.72', '2014-10-21', 1, '1413873421'),
('112.215.66.68', '2014-10-21', 2, '1413877466'),
('112.215.66.73', '2014-10-21', 2, '1413877475'),
('112.215.66.70', '2014-10-21', 3, '1413883991'),
('112.215.66.74', '2014-10-21', 3, '1413877490'),
('112.215.66.79', '2014-10-21', 1, '1413881019'),
('69.58.178.57', '2014-10-21', 11, '1413881681'),
('66.249.69.13', '2014-10-21', 1, '1413891433'),
('66.249.69.231', '2014-10-22', 1, '1413952653'),
('36.73.114.59', '2014-10-23', 9, '1414003813'),
('178.62.247.171', '2014-10-23', 1, '1414029199'),
('66.249.69.252', '2014-10-23', 1, '1414068277'),
('207.46.13.141', '2014-10-24', 1, '1414098882'),
('157.55.39.24', '2014-10-24', 2, '1414098886'),
('207.46.13.116', '2014-10-24', 4, '1414098897'),
('157.55.39.77', '2014-10-24', 3, '1414099688'),
('66.249.69.231', '2014-10-24', 1, '1414116171'),
('157.55.39.24', '2014-10-25', 1, '1414253837'),
('66.249.69.237', '2014-10-25', 1, '1414255439'),
('207.46.13.116', '2014-10-26', 4, '1414274342'),
('207.46.13.141', '2014-10-26', 1, '1414274346'),
('157.55.39.23', '2014-10-26', 3, '1414274508'),
('157.55.39.77', '2014-10-26', 3, '1414275467'),
('178.62.247.171', '2014-10-26', 1, '1414331455'),
('66.249.69.205', '2014-10-27', 5, '1414406625'),
('66.249.69.237', '2014-10-27', 5, '1414390027'),
('66.249.69.221', '2014-10-27', 3, '1414400254'),
('180.254.111.143', '2014-10-27', 1, '1414377820'),
('192.99.107.190', '2014-10-27', 1, '1414380583'),
('178.62.247.171', '2014-10-27', 1, '1414392563'),
('38.99.82.191', '2014-10-27', 13, '1414416057'),
('38.99.82.208', '2014-10-27', 1, '1414406280'),
('38.99.82.232', '2014-10-27', 8, '1414429039'),
('38.99.82.253', '2014-10-27', 11, '1414428796'),
('38.99.82.253', '2014-10-28', 2, '1414443833'),
('38.99.82.232', '2014-10-28', 1, '1414429771'),
('38.99.82.208', '2014-10-28', 1, '1414435403'),
('38.99.82.191', '2014-10-28', 3, '1414436300'),
('192.99.107.10', '2014-10-28', 1, '1414467266'),
('66.249.69.252', '2014-10-28', 1, '1414467923'),
('157.55.39.24', '2014-10-29', 1, '1414528241'),
('72.46.152.69', '2014-10-29', 2, '1414538859'),
('66.249.69.221', '2014-10-29', 1, '1414557049'),
('66.249.69.252', '2014-10-29', 1, '1414565887'),
('64.246.165.170', '2014-10-29', 1, '1414601286'),
('66.249.69.221', '2014-10-30', 1, '1414615350'),
('66.249.69.13', '2014-10-30', 1, '1414620000'),
('66.249.69.252', '2014-10-30', 1, '1414631076'),
('66.249.69.205', '2014-10-30', 2, '1414643771'),
('207.46.13.137', '2014-10-30', 5, '1414653008'),
('192.99.107.82', '2014-10-30', 1, '1414640054'),
('141.0.10.216', '2014-10-30', 2, '1414642199'),
('66.249.64.159', '2014-10-30', 1, '1414652220'),
('157.55.39.23', '2014-10-30', 3, '1414652998'),
('157.55.39.49', '2014-10-30', 1, '1414653003'),
('157.55.39.77', '2014-10-30', 3, '1414653015'),
('173.252.100.119', '2014-10-30', 1, '1414653150'),
('8.37.225.252', '2014-10-30', 1, '1414653150'),
('180.254.82.218', '2014-10-30', 2, '1414657404'),
('173.252.74.118', '2014-10-30', 1, '1414658003'),
('36.73.70.31', '2014-10-30', 3, '1414661295'),
('36.73.94.221', '2014-10-30', 1, '1414658797'),
('103.31.234.144', '2014-10-30', 1, '1414658847'),
('36.81.57.187', '2014-10-30', 1, '1414658868'),
('125.163.232.198', '2014-10-30', 1, '1414661326'),
('36.81.24.99', '2014-10-31', 3, '1414692998'),
('66.249.69.221', '2014-10-31', 1, '1414716193'),
('192.99.107.82', '2014-10-31', 1, '1414729784'),
('82.145.217.166', '2014-10-31', 1, '1414759726'),
('100.43.81.141', '2014-11-01', 4, '1414855134'),
('192.99.107.226', '2014-11-01', 1, '1414835255'),
('66.249.69.221', '2014-11-02', 1, '1414864287'),
('125.165.90.35', '2014-11-02', 1, '1414903053'),
('188.226.232.205', '2014-11-02', 1, '1414937506'),
('66.249.69.13', '2014-11-02', 1, '1414946477'),
('66.249.69.237', '2014-11-03', 1, '1414974603'),
('100.43.81.141', '2014-11-03', 2, '1415019020'),
('157.55.39.121', '2014-11-03', 1, '1415002839'),
('66.249.69.205', '2014-11-03', 1, '1415010690'),
('5.45.77.35', '2014-11-03', 1, '1415021712'),
('207.46.13.106', '2014-11-03', 1, '1415032250'),
('100.43.81.141', '2014-11-04', 1, '1415060211'),
('36.73.103.227', '2014-11-04', 2, '1415082298'),
('103.31.234.144', '2014-11-04', 7, '1415082640'),
('36.73.110.157', '2014-11-04', 4, '1415078306'),
('36.73.109.69', '2014-11-04', 1, '1415077449'),
('36.73.111.77', '2014-11-04', 3, '1415078572'),
('180.254.94.15', '2014-11-04', 2, '1415078559'),
('157.55.39.86', '2014-11-05', 1, '1415134761'),
('100.43.81.141', '2014-11-05', 3, '1415162491'),
('157.55.39.25', '2014-11-05', 1, '1415182024'),
('82.145.216.64', '2014-11-05', 1, '1415200077'),
('36.73.65.228', '2014-11-05', 11, '1415200607'),
('66.249.69.13', '2014-11-06', 2, '1415249982'),
('100.43.81.141', '2014-11-06', 2, '1415235567'),
('66.249.69.252', '2014-11-06', 1, '1415238762'),
('207.46.13.110', '2014-11-06', 1, '1415267948'),
('112.215.66.69', '2014-11-06', 1, '1415269463'),
('68.171.236.239', '2014-11-06', 1, '1415275638'),
('112.215.36.145', '2014-11-06', 1, '1415275819'),
('103.246.200.50', '2014-11-06', 1, '1415275830'),
('114.121.159.8', '2014-11-06', 2, '1415276034'),
('68.171.236.27', '2014-11-06', 1, '1415276306'),
('103.246.201.59', '2014-11-06', 1, '1415278365'),
('207.46.13.134', '2014-11-07', 1, '1415295302'),
('157.55.39.113', '2014-11-07', 5, '1415317384'),
('207.46.13.130', '2014-11-07', 3, '1415301123'),
('103.246.200.17', '2014-11-07', 1, '1415325114'),
('202.67.41.51', '2014-11-07', 1, '1415325642'),
('66.249.69.252', '2014-11-07', 1, '1415328084'),
('103.246.200.16', '2014-11-07', 1, '1415336690'),
('100.43.90.9', '2014-11-07', 1, '1415352632'),
('100.43.81.141', '2014-11-08', 3, '1415393211'),
('66.249.69.237', '2014-11-08', 1, '1415409013'),
('36.78.128.54', '2014-11-08', 3, '1415427740'),
('114.79.29.57', '2014-11-08', 1, '1415449917'),
('68.171.236.17', '2014-11-08', 1, '1415459311'),
('103.246.200.48', '2014-11-08', 1, '1415464579'),
('103.246.201.27', '2014-11-08', 1, '1415465934'),
('66.249.69.231', '2014-11-09', 1, '1415476000'),
('100.43.81.141', '2014-11-09', 2, '1415508287'),
('100.43.90.9', '2014-11-09', 1, '1415529500'),
('173.252.74.114', '2014-11-09', 1, '1415530771'),
('180.254.104.145', '2014-11-09', 2, '1415530853'),
('68.171.236.56', '2014-11-09', 1, '1415531532'),
('68.171.236.127', '2014-11-09', 1, '1415531673'),
('68.171.236.191', '2014-11-09', 1, '1415532864'),
('66.249.69.237', '2014-11-10', 1, '1415575249'),
('100.43.81.141', '2014-11-10', 3, '1415637407'),
('100.43.90.9', '2014-11-10', 1, '1415594144'),
('66.249.69.221', '2014-11-10', 2, '1415617392'),
('192.99.107.136', '2014-11-10', 1, '1415600062'),
('92.63.88.42', '2014-11-10', 1, '1415610417'),
('64.233.173.200', '2014-11-10', 1, '1415626650'),
('66.249.69.205', '2014-11-10', 1, '1415630534'),
('66.249.69.221', '2014-11-11', 1, '1415645579'),
('66.249.69.13', '2014-11-11', 1, '1415661406'),
('66.249.69.231', '2014-11-11', 1, '1415682494'),
('100.43.90.9', '2014-11-11', 2, '1415709777'),
('54.87.182.251', '2014-11-11', 1, '1415684903'),
('157.55.39.23', '2014-11-11', 1, '1415689465'),
('157.55.39.113', '2014-11-11', 10, '1415689766'),
('157.55.39.248', '2014-11-11', 10, '1415689767'),
('207.46.13.110', '2014-11-11', 8, '1415689796'),
('157.55.39.22', '2014-11-11', 1, '1415689739'),
('36.81.76.135', '2014-11-11', 4, '1415694570'),
('100.43.81.141', '2014-11-11', 1, '1415708090'),
('66.249.69.231', '2014-11-12', 2, '1415778092'),
('216.145.14.142', '2014-11-12', 1, '1415729628'),
('66.249.69.252', '2014-11-12', 1, '1415739495'),
('66.249.69.205', '2014-11-12', 1, '1415747615'),
('66.249.69.13', '2014-11-12', 2, '1415766577'),
('100.43.81.141', '2014-11-12', 1, '1415755119'),
('157.55.39.248', '2014-11-12', 1, '1415757704'),
('100.43.90.9', '2014-11-12', 1, '1415759990'),
('23.22.146.210', '2014-11-12', 1, '1415770763'),
('157.55.39.249', '2014-11-13', 5, '1415832966'),
('157.55.39.113', '2014-11-13', 5, '1415833199'),
('157.55.39.23', '2014-11-13', 1, '1415834747'),
('157.55.39.39', '2014-11-13', 1, '1415853176'),
('192.99.107.10', '2014-11-13', 1, '1415877683'),
('66.249.69.13', '2014-11-14', 1, '1415903958'),
('157.55.39.22', '2014-11-14', 1, '1415912395'),
('100.43.81.141', '2014-11-14', 3, '1415947158'),
('103.31.234.144', '2014-11-14', 3, '1415954468'),
('125.163.226.90', '2014-11-14', 1, '1415949148'),
('199.59.148.209', '2014-11-14', 1, '1415951578'),
('180.245.131.253', '2014-11-14', 1, '1415952244'),
('157.55.39.248', '2014-11-14', 1, '1415971232'),
('66.249.69.237', '2014-11-15', 1, '1416011389'),
('157.55.39.248', '2014-11-15', 1, '1416021632'),
('91.121.100.66', '2014-11-15', 1, '1416055359'),
('100.43.81.141', '2014-11-16', 2, '1416079912'),
('66.249.69.221', '2014-11-16', 2, '1416153949'),
('157.55.39.113', '2014-11-16', 1, '1416127892'),
('157.55.39.248', '2014-11-17', 5, '1416170332'),
('157.55.39.113', '2014-11-17', 3, '1416170336'),
('100.43.81.141', '2014-11-17', 2, '1416188486'),
('192.99.107.190', '2014-11-17', 1, '1416187318'),
('66.249.69.252', '2014-11-17', 1, '1416213955'),
('66.249.69.237', '2014-11-18', 1, '1416272881'),
('100.43.81.141', '2014-11-18', 3, '1416304427'),
('157.55.39.38', '2014-11-18', 2, '1416292811'),
('192.99.107.136', '2014-11-18', 1, '1416293749'),
('157.55.39.248', '2014-11-18', 5, '1416294960'),
('66.249.69.205', '2014-11-19', 1, '1416346257'),
('100.43.81.141', '2014-11-19', 1, '1416350008'),
('38.100.21.68', '2014-11-19', 9, '1416350496'),
('180.253.133.171', '2014-11-19', 8, '1416367683'),
('66.249.69.237', '2014-11-20', 1, '1416420991'),
('100.43.81.141', '2014-11-20', 1, '1416447935'),
('66.249.69.231', '2014-11-20', 1, '1416475922'),
('157.55.39.38', '2014-11-20', 1, '1416490879'),
('157.55.39.248', '2014-11-21', 1, '1416506914'),
('191.237.170.68', '2014-11-21', 1, '1416515569'),
('157.55.39.38', '2014-11-21', 1, '1416522944'),
('69.58.178.56', '2014-11-21', 11, '1416534697'),
('157.55.39.113', '2014-11-21', 2, '1416573311'),
('66.249.69.252', '2014-11-21', 1, '1416549172'),
('89.145.95.2', '2014-11-21', 1, '1416570665'),
('157.55.39.113', '2014-11-22', 1, '1416632651'),
('91.121.100.66', '2014-11-22', 1, '1416658556'),
('202.67.41.51', '2014-11-23', 4, '1416698918'),
('207.46.13.134', '2014-11-23', 1, '1416711498'),
('157.55.39.113', '2014-11-23', 4, '1416711508'),
('157.55.39.12', '2014-11-23', 5, '1416711880'),
('157.55.39.38', '2014-11-23', 1, '1416723722'),
('66.249.69.221', '2014-11-23', 1, '1416724488'),
('5.9.11.122', '2014-11-23', 1, '1416744939'),
('180.254.98.248', '2014-11-24', 1, '1416765832'),
('66.249.69.221', '2014-11-24', 1, '1416769233'),
('112.215.66.76', '2014-11-24', 1, '1416815290'),
('157.55.39.113', '2014-11-24', 1, '1416830321'),
('192.99.107.118', '2014-11-24', 1, '1416835644'),
('64.246.165.210', '2014-11-25', 1, '1416850219'),
('66.249.69.13', '2014-11-25', 1, '1416874068'),
('180.243.121.247', '2014-11-25', 1, '1416923110'),
('192.99.107.136', '2014-11-25', 1, '1416928470'),
('66.249.69.252', '2014-11-26', 1, '1416997419'),
('36.81.67.115', '2014-11-26', 1, '1417009175'),
('207.172.209.16', '2014-11-27', 4, '1417096773'),
('66.249.69.221', '2014-11-27', 3, '1417102922'),
('191.239.36.169', '2014-11-27', 1, '1417070470'),
('157.55.39.210', '2014-11-27', 5, '1417100657'),
('157.55.39.113', '2014-11-27', 5, '1417100709'),
('207.46.13.134', '2014-11-27', 1, '1417100947'),
('66.249.69.237', '2014-11-28', 2, '1417121120'),
('207.172.209.16', '2014-11-28', 4, '1417184576'),
('66.249.69.205', '2014-11-28', 1, '1417132990'),
('36.80.229.117', '2014-11-28', 4, '1417147234'),
('157.55.39.210', '2014-11-29', 1, '1417228986'),
('208.110.85.242', '2014-11-29', 1, '1417236872'),
('120.168.0.125', '2014-11-29', 7, '1417242945'),
('100.43.81.141', '2014-11-29', 2, '1417250642'),
('54.172.85.178', '2014-11-29', 1, '1417257893'),
('66.249.75.167', '2014-11-29', 1, '1417259392'),
('100.43.81.141', '2014-11-30', 1, '1417282643'),
('69.30.241.10', '2014-11-30', 4, '1417366151'),
('157.55.39.210', '2014-11-30', 1, '1417286757'),
('54.172.85.178', '2014-11-30', 1, '1417315788'),
('66.249.75.167', '2014-11-30', 1, '1417319956'),
('173.252.120.112', '2014-11-30', 1, '1417354195'),
('103.246.200.27', '2014-11-30', 1, '1417354197'),
('103.246.200.60', '2014-11-30', 1, '1417354300'),
('103.246.201.40', '2014-11-30', 1, '1417354301'),
('69.30.241.10', '2014-12-01', 1, '1417371677'),
('94.23.172.110', '2014-12-01', 1, '1417378546'),
('157.55.39.1', '2014-12-01', 1, '1417384232'),
('66.249.75.61', '2014-12-01', 1, '1417401185'),
('100.43.81.141', '2014-12-01', 1, '1417425530'),
('157.55.39.166', '2014-12-01', 1, '1417433973'),
('157.55.39.172', '2014-12-01', 11, '1417447665'),
('192.99.107.154', '2014-12-01', 1, '1417437201'),
('157.55.39.167', '2014-12-01', 1, '1417440176'),
('157.55.39.38', '2014-12-01', 4, '1417448145'),
('212.129.39.183', '2014-12-02', 14, '1417453651'),
('202.67.40.50', '2014-12-02', 3, '1417454283'),
('202.67.41.51', '2014-12-02', 7, '1417454387'),
('100.43.81.141', '2014-12-02', 4, '1417513805'),
('194.153.113.7', '2014-12-02', 1, '1417477535'),
('66.249.75.167', '2014-12-02', 1, '1417477741'),
('36.72.229.246', '2014-12-02', 1, '1417484459'),
('141.0.9.208', '2014-12-02', 3, '1417484734'),
('157.55.39.171', '2014-12-02', 1, '1417485980'),
('192.99.9.164', '2014-12-02', 1, '1417530472'),
('71.189.164.218', '2014-12-03', 1, '1417543657'),
('66.249.75.77', '2014-12-03', 1, '1417552963'),
('66.249.75.183', '2014-12-03', 1, '1417557093'),
('180.76.6.44', '2014-12-03', 1, '1417579428'),
('157.55.39.248', '2014-12-03', 1, '1417596705'),
('103.249.205.74', '2014-12-05', 1, '1417720340'),
('128.214.224.188', '2014-12-05', 2, '1417723471'),
('100.43.81.141', '2014-12-05', 5, '1417736665'),
('91.200.12.28', '2014-12-05', 1, '1417761286'),
('157.55.39.253', '2014-12-06', 4, '1417803881'),
('207.46.13.38', '2014-12-06', 3, '1417803885'),
('157.55.39.248', '2014-12-06', 5, '1417803891'),
('157.55.39.7', '2014-12-06', 1, '1417803895'),
('100.43.81.141', '2014-12-06', 5, '1417836732'),
('79.111.47.177', '2014-12-06', 1, '1417824083'),
('128.214.224.188', '2014-12-06', 2, '1417861037'),
('176.123.20.5', '2014-12-06', 15, '1417877037'),
('171.101.151.126', '2014-12-06', 13, '1417883792'),
('95.49.43.132', '2014-12-07', 1, '1417885493'),
('96.227.124.37', '2014-12-07', 1, '1417893955'),
('37.187.159.47', '2014-12-07', 1, '1417900705'),
('100.43.81.141', '2014-12-07', 3, '1417925789'),
('171.101.151.126', '2014-12-07', 52, '1417924285'),
('180.76.6.147', '2014-12-07', 1, '1417929058'),
('202.67.41.51', '2014-12-07', 4, '1417933082'),
('202.67.40.50', '2014-12-07', 2, '1417933092'),
('207.46.13.38', '2014-12-07', 1, '1417950354'),
('195.154.169.97', '2014-12-07', 7, '1417965731'),
('216.145.17.190', '2014-12-08', 1, '1417976704'),
('157.55.39.254', '2014-12-08', 1, '1417976704'),
('100.43.81.141', '2014-12-08', 3, '1418016090'),
('66.249.75.61', '2014-12-08', 1, '1418010053'),
('192.99.107.46', '2014-12-08', 1, '1418034300'),
('171.101.151.126', '2014-12-09', 26, '1418066392'),
('66.249.75.77', '2014-12-09', 1, '1418075142'),
('180.76.6.144', '2014-12-09', 1, '1418084615'),
('180.76.5.150', '2014-12-09', 1, '1418085515'),
('100.43.81.141', '2014-12-09', 2, '1418118441'),
('157.55.39.248', '2014-12-09', 2, '1418122635'),
('112.215.66.73', '2014-12-09', 2, '1418090863'),
('112.215.66.75', '2014-12-09', 2, '1418090842'),
('112.215.66.68', '2014-12-09', 1, '1418090796'),
('112.215.66.69', '2014-12-09', 1, '1418090802'),
('112.215.66.74', '2014-12-09', 1, '1418090885'),
('112.215.66.82', '2014-12-09', 1, '1418090926'),
('112.215.66.70', '2014-12-09', 1, '1418090940'),
('180.76.6.57', '2014-12-09', 1, '1418122269'),
('207.172.209.16', '2014-12-09', 1, '1418141902'),
('100.43.81.141', '2014-12-10', 6, '1418229701'),
('54.145.205.26', '2014-12-10', 1, '1418145176'),
('157.55.39.9', '2014-12-10', 1, '1418145252'),
('207.46.13.90', '2014-12-10', 5, '1418221245'),
('157.55.39.248', '2014-12-10', 5, '1418145262'),
('180.76.6.146', '2014-12-10', 1, '1418165646'),
('180.76.6.153', '2014-12-10', 1, '1418171763'),
('171.101.151.126', '2014-12-10', 26, '1418193402'),
('112.215.66.74', '2014-12-10', 2, '1418190453'),
('112.215.66.71', '2014-12-10', 1, '1418190051'),
('112.215.66.78', '2014-12-10', 2, '1418190343'),
('112.215.66.75', '2014-12-10', 1, '1418190278'),
('112.215.66.73', '2014-12-10', 1, '1418190352'),
('112.215.66.77', '2014-12-10', 1, '1418190361'),
('112.215.66.68', '2014-12-10', 1, '1418190431'),
('112.215.66.76', '2014-12-10', 1, '1418190513'),
('180.76.5.64', '2014-12-10', 1, '1418191716'),
('180.76.5.172', '2014-12-10', 1, '1418201533'),
('125.163.228.189', '2014-12-10', 1, '1418209205'),
('180.76.5.150', '2014-12-10', 1, '1418220756'),
('180.76.5.147', '2014-12-10', 1, '1418224734'),
('128.214.224.188', '2014-12-10', 1, '1418228837'),
('162.243.251.204', '2014-12-10', 1, '1418229348'),
('180.76.5.191', '2014-12-11', 1, '1418242966'),
('100.43.81.141', '2014-12-11', 3, '1418257681'),
('5.9.11.122', '2014-12-11', 1, '1418246715'),
('180.76.5.189', '2014-12-11', 1, '1418252330'),
('180.76.5.169', '2014-12-11', 1, '1418261149'),
('66.249.75.61', '2014-12-11', 1, '1418266208'),
('180.76.5.155', '2014-12-11', 1, '1418270426'),
('180.76.5.76', '2014-12-11', 1, '1418283742'),
('157.55.39.50', '2014-12-11', 1, '1418288155'),
('5.45.254.226', '2014-12-12', 1, '1418319035'),
('171.101.151.126', '2014-12-12', 26, '1418325308'),
('202.46.54.120', '2014-12-12', 1, '1418330925'),
('119.63.193.196', '2014-12-12', 1, '1418330934'),
('157.55.39.50', '2014-12-12', 1, '1418331390'),
('100.43.81.141', '2014-12-12', 7, '1418367393'),
('5.196.152.26', '2014-12-12', 1, '1418347147'),
('111.68.26.117', '2014-12-12', 1, '1418357900'),
('66.249.75.183', '2014-12-12', 1, '1418361343'),
('103.246.200.14', '2014-12-12', 1, '1418392338'),
('103.246.200.15', '2014-12-12', 1, '1418392401'),
('103.246.200.52', '2014-12-12', 2, '1418392504'),
('103.246.201.30', '2014-12-12', 1, '1418392922'),
('103.246.201.60', '2014-12-12', 1, '1418392962'),
('130.185.139.213', '2014-12-12', 1, '1418394926'),
('103.246.201.3', '2014-12-12', 1, '1418403117'),
('103.246.200.43', '2014-12-13', 1, '1418403686'),
('103.246.201.60', '2014-12-13', 1, '1418404859'),
('103.246.201.25', '2014-12-13', 1, '1418406303'),
('103.246.200.1', '2014-12-13', 1, '1418406611'),
('128.214.224.188', '2014-12-13', 6, '1418417997'),
('180.76.5.59', '2014-12-13', 1, '1418434709'),
('180.76.6.44', '2014-12-13', 1, '1418437691'),
('100.43.81.141', '2014-12-13', 3, '1418449144'),
('180.76.6.142', '2014-12-13', 1, '1418446529'),
('208.115.111.68', '2014-12-13', 1, '1418460524'),
('180.76.6.36', '2014-12-13', 1, '1418466063'),
('54.154.71.76', '2014-12-13', 1, '1418481350'),
('66.249.75.93', '2014-12-13', 1, '1418486843'),
('100.43.81.141', '2014-12-14', 4, '1418574537'),
('72.233.72.155', '2014-12-14', 1, '1418542551'),
('93.92.217.228', '2014-12-15', 1, '1418579005'),
('208.115.113.84', '2014-12-15', 2, '1418641288'),
('100.43.81.141', '2014-12-15', 3, '1418615109'),
('103.246.200.47', '2014-12-15', 1, '1418616160'),
('66.249.75.61', '2014-12-15', 1, '1418625360'),
('103.246.200.4', '2014-12-15', 1, '1418637174'),
('192.99.107.100', '2014-12-15', 1, '1418638483'),
('180.76.6.133', '2014-12-15', 1, '1418648969'),
('66.249.75.77', '2014-12-15', 1, '1418656212'),
('171.101.151.126', '2014-12-16', 13, '1418664000'),
('180.76.6.36', '2014-12-16', 1, '1418676671'),
('192.99.107.190', '2014-12-16', 1, '1418682512'),
('100.43.81.141', '2014-12-16', 2, '1418706233'),
('180.76.6.28', '2014-12-16', 1, '1418688874'),
('54.172.85.178', '2014-12-16', 2, '1418728943'),
('180.76.6.14', '2014-12-16', 1, '1418701170'),
('176.195.93.82', '2014-12-16', 1, '1418706496'),
('37.57.231.125', '2014-12-16', 1, '1418709076'),
('83.143.141.111', '2014-12-16', 1, '1418717953'),
('180.76.5.189', '2014-12-16', 1, '1418720013'),
('180.76.6.145', '2014-12-16', 1, '1418738760'),
('180.76.6.225', '2014-12-16', 1, '1418746384'),
('157.55.39.50', '2014-12-17', 5, '1418755097'),
('207.46.13.90', '2014-12-17', 4, '1418755205'),
('157.55.39.9', '2014-12-17', 1, '1418755264'),
('207.46.13.47', '2014-12-17', 4, '1418768442'),
('180.76.5.27', '2014-12-17', 1, '1418773849'),
('180.76.5.75', '2014-12-17', 1, '1418785090'),
('180.76.5.58', '2014-12-17', 1, '1418817847'),
('180.76.6.232', '2014-12-17', 1, '1418821479'),
('180.76.6.233', '2014-12-17', 1, '1418822378'),
('130.211.85.67', '2014-12-18', 1, '1418851208'),
('100.43.81.141', '2014-12-18', 3, '1418865444'),
('66.249.65.132', '2014-12-18', 1, '1418869453'),
('207.46.13.90', '2014-12-18', 1, '1418888049'),
('112.215.66.76', '2014-12-18', 1, '1418902069'),
('49.65.175.35', '2014-12-18', 1, '1418908103'),
('157.55.39.9', '2014-12-18', 1, '1418908736'),
('180.76.6.133', '2014-12-18', 1, '1418909676'),
('207.46.13.47', '2014-12-19', 5, '1418996849'),
('49.65.175.35', '2014-12-19', 3, '1418939624'),
('171.101.151.126', '2014-12-19', 13, '1418943289'),
('180.76.5.69', '2014-12-19', 1, '1418957817'),
('100.43.81.141', '2014-12-19', 3, '1418965523'),
('176.102.38.151', '2014-12-19', 1, '1418960158'),
('180.76.6.14', '2014-12-19', 1, '1418961192'),
('180.76.5.154', '2014-12-19', 1, '1418964651'),
('207.46.13.90', '2014-12-19', 4, '1418973555'),
('157.55.39.50', '2014-12-19', 5, '1418973559'),
('157.55.39.9', '2014-12-19', 2, '1418975574'),
('66.220.156.116', '2014-12-19', 1, '1419003664'),
('120.168.0.99', '2014-12-19', 1, '1419003666'),
('38.100.21.61', '2014-12-20', 10, '1419009946'),
('66.249.75.77', '2014-12-20', 1, '1419010881'),
('130.185.139.213', '2014-12-20', 1, '1419012504'),
('5.56.63.54', '2014-12-20', 1, '1419014949'),
('180.76.5.27', '2014-12-20', 1, '1419026772'),
('66.249.75.93', '2014-12-20', 1, '1419031733'),
('66.249.75.61', '2014-12-20', 1, '1419050143'),
('100.43.81.141', '2014-12-20', 2, '1419080550'),
('64.246.165.10', '2014-12-21', 1, '1419104855'),
('157.55.39.50', '2014-12-21', 1, '1419117216'),
('66.249.75.167', '2014-12-21', 3, '1419180717'),
('66.249.75.183', '2014-12-21', 1, '1419136882'),
('180.76.5.18', '2014-12-21', 1, '1419142331'),
('89.66.66.178', '2014-12-21', 1, '1419145365'),
('180.178.62.74', '2014-12-21', 7, '1419145528'),
('69.58.178.57', '2014-12-21', 11, '1419160268'),
('157.55.39.11', '2014-12-21', 5, '1419167356'),
('157.55.39.36', '2014-12-21', 3, '1419167360'),
('207.46.13.90', '2014-12-21', 4, '1419167430'),
('157.55.39.7', '2014-12-21', 1, '1419167505'),
('100.43.81.141', '2014-12-21', 1, '1419168468'),
('208.115.113.84', '2014-12-21', 1, '1419174160'),
('66.249.75.61', '2014-12-22', 1, '1419195294'),
('100.43.81.141', '2014-12-22', 2, '1419242191'),
('162.243.64.73', '2014-12-22', 4, '1419239049'),
('89.145.95.2', '2014-12-22', 1, '1419241003'),
('66.249.75.183', '2014-12-22', 1, '1419243793'),
('207.46.13.30', '2014-12-22', 1, '1419263291'),
('157.55.39.11', '2014-12-22', 5, '1419263296'),
('157.55.39.36', '2014-12-22', 3, '1419263313'),
('66.249.75.151', '2014-12-22', 1, '1419264201'),
('66.249.75.151', '2014-12-23', 1, '1419279273'),
('192.99.9.164', '2014-12-23', 1, '1419290174'),
('180.76.6.145', '2014-12-23', 1, '1419294186'),
('69.171.227.112', '2014-12-23', 1, '1419302520'),
('66.249.75.183', '2014-12-23', 1, '1419303810'),
('5.228.19.171', '2014-12-23', 1, '1419306439'),
('128.214.224.188', '2014-12-23', 4, '1419307952'),
('100.43.81.141', '2014-12-23', 1, '1419333762'),
('184.171.250.170', '2014-12-23', 7, '1419339844'),
('180.76.5.170', '2014-12-23', 1, '1419344864'),
('46.229.167.149', '2014-12-24', 2, '1419355884'),
('69.171.227.113', '2014-12-24', 1, '1419374146'),
('66.249.75.183', '2014-12-24', 1, '1419376457'),
('69.171.227.115', '2014-12-24', 1, '1419380380'),
('100.43.81.141', '2014-12-24', 1, '1419397040'),
('157.55.39.36', '2014-12-24', 1, '1419405690'),
('5.9.53.251', '2014-12-24', 1, '1419416588'),
('180.76.6.37', '2014-12-25', 1, '1419475506'),
('83.28.209.254', '2014-12-25', 1, '1419484437'),
('157.55.39.99', '2014-12-25', 1, '1419497465'),
('66.249.75.93', '2014-12-25', 1, '1419514614'),
('46.173.36.160', '2014-12-26', 7, '1419536417'),
('94.107.194.97', '2014-12-26', 13, '1419540824'),
('100.43.81.141', '2014-12-26', 2, '1419546400'),
('157.55.39.12', '2014-12-26', 2, '1419609386'),
('157.55.39.36', '2014-12-27', 2, '1419627443'),
('157.55.39.12', '2014-12-27', 1, '1419627448'),
('157.55.39.99', '2014-12-27', 2, '1419627457'),
('96.44.163.122', '2014-12-27', 7, '1419630231'),
('180.76.6.132', '2014-12-27', 1, '1419642540'),
('100.43.81.141', '2014-12-28', 2, '1419781496'),
('157.55.39.99', '2014-12-28', 1, '1419725078'),
('66.249.75.167', '2014-12-28', 1, '1419751457'),
('157.55.39.12', '2014-12-28', 1, '1419768654'),
('180.76.6.63', '2014-12-28', 1, '1419778164'),
('100.43.81.141', '2014-12-29', 1, '1419787023'),
('66.249.75.61', '2014-12-29', 1, '1419806274'),
('199.30.16.190', '2014-12-29', 1, '1419806616'),
('184.171.250.170', '2014-12-29', 7, '1419808215'),
('37.204.153.110', '2014-12-29', 1, '1419809477'),
('124.40.252.170', '2014-12-29', 11, '1419827607'),
('46.161.41.31', '2014-12-29', 1, '1419829104'),
('157.55.39.205', '2014-12-29', 1, '1419858385'),
('37.187.159.47', '2014-12-30', 1, '1419881858'),
('66.249.75.93', '2014-12-30', 1, '1419884934'),
('100.43.81.141', '2014-12-30', 2, '1419942713'),
('49.80.218.60', '2014-12-30', 16, '1419921459'),
('96.227.124.38', '2014-12-31', 1, '1419962482'),
('207.46.13.81', '2014-12-31', 1, '1420000693'),
('114.121.162.27', '2014-12-31', 1, '1420005292'),
('100.43.81.141', '2014-12-31', 1, '1420013206'),
('216.107.155.114', '2014-12-31', 4, '1420028976'),
('162.210.196.97', '2014-12-31', 1, '1420029087'),
('180.76.5.66', '2014-12-31', 1, '1420035334'),
('180.76.5.172', '2015-01-01', 1, '1420048146'),
('37.140.192.175', '2015-01-01', 7, '1420052729'),
('180.76.6.232', '2015-01-01', 1, '1420053646'),
('100.43.81.141', '2015-01-01', 1, '1420058832'),
('180.76.5.150', '2015-01-01', 1, '1420061040'),
('180.76.6.44', '2015-01-01', 1, '1420070838'),
('202.137.17.147', '2015-01-01', 2, '1420092714'),
('180.76.5.62', '2015-01-01', 1, '1420093016'),
('180.76.6.139', '2015-01-01', 1, '1420099909'),
('173.199.124.98', '2015-01-01', 1, '1420121834'),
('180.76.6.159', '2015-01-02', 1, '1420134584'),
('100.43.81.141', '2015-01-02', 1, '1420135166'),
('180.76.6.151', '2015-01-02', 1, '1420137710'),
('37.231.146.94', '2015-01-02', 1, '1420143983'),
('84.109.64.47', '2015-01-02', 1, '1420144045'),
('180.76.6.231', '2015-01-02', 1, '1420144495'),
('180.76.6.52', '2015-01-02', 1, '1420159819'),
('66.249.75.93', '2015-01-02', 1, '1420179046'),
('110.136.161.134', '2015-01-02', 1, '1420184834'),
('157.55.39.36', '2015-01-02', 2, '1420214468'),
('157.55.39.140', '2015-01-02', 1, '1420214327'),
('180.76.5.188', '2015-01-03', 1, '1420224611'),
('198.57.210.25', '2015-01-03', 7, '1420230900'),
('100.43.81.141', '2015-01-03', 1, '1420236696'),
('64.246.165.170', '2015-01-03', 1, '1420239471'),
('180.76.5.167', '2015-01-03', 1, '1420247165'),
('114.121.129.49', '2015-01-03', 7, '1420304076'),
('114.121.161.233', '2015-01-04', 1, '1420328978'),
('208.115.113.84', '2015-01-04', 1, '1420340371'),
('66.249.75.77', '2015-01-04', 1, '1420344613'),
('112.215.66.71', '2015-01-04', 1, '1420350543'),
('100.43.81.141', '2015-01-04', 2, '1420390231'),
('173.199.124.98', '2015-01-04', 1, '1420369996'),
('180.76.5.168', '2015-01-04', 1, '1420370366'),
('180.76.5.80', '2015-01-04', 1, '1420371270'),
('180.76.5.20', '2015-01-04', 1, '1420379093'),
('157.55.39.36', '2015-01-04', 1, '1420385680'),
('120.164.40.117', '2015-01-05', 3, '1420394114'),
('100.43.81.141', '2015-01-05', 1, '1420394504'),
('66.249.75.93', '2015-01-05', 1, '1420408917'),
('145.129.29.171', '2015-01-05', 13, '1420409310'),
('112.215.66.72', '2015-01-05', 1, '1420411110'),
('198.204.224.194', '2015-01-05', 7, '1420416566'),
('180.76.6.158', '2015-01-05', 1, '1420426080'),
('36.78.222.232', '2015-01-05', 3, '1420430102'),
('180.76.5.59', '2015-01-05', 1, '1420436750'),
('5.61.39.15', '2015-01-05', 1, '1420437546'),
('36.73.119.90', '2015-01-05', 1, '1420442564'),
('101.255.72.252', '2015-01-05', 4, '1420448854'),
('142.4.218.201', '2015-01-05', 1, '1420448792'),
('180.76.6.53', '2015-01-05', 1, '1420463444'),
('208.115.113.84', '2015-01-05', 1, '1420470481'),
('157.55.39.36', '2015-01-05', 1, '1420475395'),
('100.43.81.141', '2015-01-06', 3, '1420555603'),
('180.76.5.147', '2015-01-06', 1, '1420510233'),
('125.163.235.177', '2015-01-06', 10, '1420513742'),
('112.215.66.77', '2015-01-06', 1, '1420514497'),
('36.81.1.136', '2015-01-06', 3, '1420526852'),
('66.249.75.167', '2015-01-06', 1, '1420519264'),
('180.76.6.143', '2015-01-06', 1, '1420523504'),
('54.172.85.178', '2015-01-06', 1, '1420542214'),
('114.121.128.165', '2015-01-06', 4, '1420549907'),
('66.249.75.183', '2015-01-07', 2, '1420601293'),
('100.43.81.141', '2015-01-07', 5, '1420646408'),
('207.46.13.125', '2015-01-07', 1, '1420594477'),
('180.76.6.41', '2015-01-07', 1, '1420595660'),
('198.204.253.99', '2015-01-07', 1, '1420600178'),
('180.76.6.21', '2015-01-07', 1, '1420608291'),
('66.249.75.167', '2015-01-07', 1, '1420615319'),
('114.225.154.10', '2015-01-07', 1, '1420616148'),
('180.76.6.132', '2015-01-07', 1, '1420624587'),
('93.55.40.216', '2015-01-07', 13, '1420626362'),
('220.181.132.219', '2015-01-07', 1, '1420629159'),
('220.181.132.198', '2015-01-07', 1, '1420629554'),
('176.223.199.2', '2015-01-07', 7, '1420647888'),
('180.76.6.40', '2015-01-08', 1, '1420658983'),
('180.76.5.155', '2015-01-08', 1, '1420660690'),
('180.76.5.78', '2015-01-08', 1, '1420663717'),
('36.81.71.60', '2015-01-08', 12, '1420686741'),
('100.43.81.141', '2015-01-08', 1, '1420682340'),
('180.76.6.144', '2015-01-08', 1, '1420683016'),
('180.76.5.146', '2015-01-08', 1, '1420684816'),
('66.249.84.225', '2015-01-08', 1, '1420685844'),
('66.249.82.210', '2015-01-08', 1, '1420685845'),
('::1', '2015-01-08', 88, '1420711791'),
('::1', '2015-01-09', 295, '1420818843'),
('::1', '2015-01-10', 37, '1420872004'),
('::1', '2015-01-12', 219, '1421074673'),
('::1', '2015-01-13', 131, '1421142889'),
('::1', '2015-01-14', 217, '1421230569'),
('::1', '2015-01-15', 19, '1421309365'),
('::1', '2015-01-16', 1, '1421373095'),
('::1', '2015-01-19', 3, '1421678222'),
('::1', '2015-01-20', 19, '1421735141'),
('::1', '2015-01-21', 2, '1421808722'),
('::1', '2015-01-29', 1, '1422514173'),
('::1', '2015-02-03', 3, '1422981858'),
('::1', '2015-02-04', 3, '1423030642');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `id_session` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`, `blokir`, `id_session`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '', '', '', 'admin', 'N', 'itpc24kboku6kaa8o7dclq3sr3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ym`
--

CREATE TABLE IF NOT EXISTS `ym` (
  `id_ym` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id_ym`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `ym`
--

INSERT INTO `ym` (`id_ym`, `username`, `nama`) VALUES
(1, 'samudramas1', 'admin 1'),
(2, 'admin2', 'admin2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

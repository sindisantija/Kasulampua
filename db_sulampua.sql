-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 01:43 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sulampua`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_categories`
--

CREATE TABLE `table_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_categories`
--

INSERT INTO `table_categories` (`id`, `name`) VALUES
(59, 'Sosial Dan Kesehatan'),
(60, 'Ekonomi Dan Perbankan'),
(61, 'Pertanian Dan Industri'),
(63, 'Perencanaan'),
(64, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `table_file`
--

CREATE TABLE `table_file` (
  `id` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `tahun_2014` float NOT NULL,
  `tahun_2015` float NOT NULL,
  `tahun_2016` float NOT NULL,
  `tahun_2017` float NOT NULL,
  `tahun_2018` float NOT NULL,
  `tahun_2019` float NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_file`
--

INSERT INTO `table_file` (`id`, `province`, `tahun_2014`, `tahun_2015`, `tahun_2016`, `tahun_2017`, `tahun_2018`, `tahun_2019`, `post_id`) VALUES
(81, 'Sulawesi Utara', 0.44, 0.3, 0, 0.39, 0.39, 0.39, 0),
(82, 'Sulawesi Tengah', 0.35, 0.37, 0.35, 0.35, 0.35, 0.35, 0),
(83, 'Sulawesi Selatan', 0.45, 0.4, 0.4, 0.43, 0.43, 0.43, 0),
(84, 'Sulawesi Tenggara', 0.4, 0.38, 0.39, 0.4, 0.4, 0.4, 0),
(85, 'Gorontalo', 0.45, 0.4, 0.41, 0.41, 0.41, 0.41, 0),
(86, 'Sulawesi Barat', 0, 0.36, 0.37, 0.34, 0.34, 0.34, 0),
(87, 'Maluku', 0.33, 0.34, 0.34, 0.32, 0.32, 0.32, 0),
(88, 'Maluku Utara', 0.32, 0.29, 0.31, 0.33, 0.33, 0.33, 0),
(89, 'Papua Barat', 0.32, 0.29, 0.31, 0.33, 0.33, 0.33, 0),
(90, 'Papua', 0.46, 0.39, 0.4, 0.4, 0.4, 0.4, 0),
(151, 'Sulawesi Utara', 0.44, 0.3, 0, 0.39, 0.39, 0.39, 15),
(152, 'Sulawesi Tengah', 0.35, 0.37, 0.35, 0.35, 0.35, 0.35, 15),
(153, 'Sulawesi Selatan', 0.45, 0.4, 0.4, 0.43, 0.43, 0.43, 15),
(154, 'Sulawesi Tenggara', 0.4, 0.38, 0.39, 0.4, 0.4, 0.4, 15),
(155, 'Gorontalo', 0.45, 0.4, 0.41, 0.41, 0.41, 0.41, 15),
(156, 'Sulawesi Barat', 0, 0.36, 0.37, 0.34, 0.34, 0.34, 15),
(157, 'Maluku', 0.33, 0.34, 0.34, 0.32, 0.32, 0.32, 15),
(158, 'Maluku Utara', 0.32, 0.29, 0.31, 0.33, 0.33, 0.33, 15),
(159, 'Papua Barat', 0.32, 0.29, 0.31, 0.33, 0.33, 0.33, 15),
(160, 'Papua', 0.46, 0.39, 0.4, 0.4, 0.4, 0.4, 15),
(161, 'Sulawesi Utara', 0.44, 0.3, 0, 0.39, 0.39, 0.39, 16),
(162, 'Sulawesi Tengah', 0.35, 0.37, 0.35, 0.35, 0.35, 0.35, 16),
(163, 'Sulawesi Selatan', 0.45, 0.4, 0.4, 0.43, 0.43, 0.43, 16),
(164, 'Sulawesi Tenggara', 0.4, 0.38, 0.39, 0.4, 0.4, 0.4, 16),
(165, 'Gorontalo', 0.45, 0.4, 0.41, 0.41, 0.41, 0.41, 16),
(166, 'Sulawesi Barat', 0, 0.36, 0.37, 0.34, 0.34, 0.34, 16),
(167, 'Maluku', 0.33, 0.34, 0.34, 0.32, 0.32, 0.32, 16),
(168, 'Maluku Utara', 0.32, 0.29, 0.31, 0.33, 0.33, 0.33, 16),
(169, 'Papua Barat', 0.32, 0.29, 0.31, 0.33, 0.33, 0.33, 16),
(170, 'Papua', 0.46, 0.39, 0.4, 0.4, 0.4, 0.4, 16),
(171, 'Sulawesi Utara', 0.44, 0.3, 0, 0.39, 0.39, 0.39, 17),
(172, 'Sulawesi Tengah', 0.35, 0.37, 0.35, 0.35, 0.35, 0.35, 17),
(173, 'Sulawesi Selatan', 0.45, 0.4, 0.4, 0.43, 0.43, 0.43, 17),
(174, 'Sulawesi Tenggara', 0.4, 0.38, 0.39, 0.4, 0.4, 0.4, 17),
(175, 'Gorontalo', 0.45, 0.4, 0.41, 0.41, 0.41, 0.41, 17),
(176, 'Sulawesi Barat', 0, 0.36, 0.37, 0.34, 0.34, 0.34, 17),
(177, 'Maluku', 0.33, 0.34, 0.34, 0.32, 0.32, 0.32, 17),
(178, 'Maluku Utara', 0.32, 0.29, 0.31, 0.33, 0.33, 0.33, 17),
(179, 'Papua Barat', 0.32, 0.29, 0.31, 0.33, 0.33, 0.33, 17),
(180, 'Papua', 0.46, 0.39, 0.4, 0.4, 0.4, 0.4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `table_indikator`
--

CREATE TABLE `table_indikator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_indikator`
--

INSERT INTO `table_indikator` (`id`, `name`, `description`, `cat_id`) VALUES
(26, 'IPM', 'Indeks Pembangunan Manusia (IPM) adalah ukuran ringkas rata-rata capaian/ keberhasilan dimensi utama pembangunan manusia, yaitu: umur panjang dan hidup sehat, mempunyai pengetahuan, dan memiliki standar hidup yang layak.', 59),
(27, 'Rasio Gini', 'Merupakan suatu ukuran kemerataan yang dihitung dengan membandingkan luas antara diagonal dan kurva lorenz (daerah A) dibagi dengan luas segitiga di bawah diagonal. Kegunaan: Untuk mengukur derajat ketidakmerataan distribusi penduduk. Keterangan : Rasio Gini bernilai antara 0 dan 1. Nilai 1 menunjukkan complete inequality atau perfectly inequal, di mana seluruh penduduk menempati satu lokasi di suatu negara dan tidak ada penduduk di lokasi lainnya. Nilai 0 menunjukkan perfectly equal, yaitu penduduk terdistribusikan sempurna di seluruh wilayah suatu negara. Jadi, semakin besar nilai rasio konsentrasi Gini, semakin besar ketidakmerataan antara distribusi penduduk dan jumlah lokasi.', 59),
(28, 'Penduduk Miskin', 'Penduduk miskin adalah penduduk yang memiliki rata-rata pengeluaran per kapita per bulan di bawah Garis Kemiskinan.', 59),
(29, 'Inflasi', 'Inflasi merupakan kenaikan harga sejumlah barang dan jasa yang secara umum dikonsumsi rumah tangga . Ada barang yang harganya naik dan ada yang tetap. Namun, tidak jarang ada barang/jasa yang harganya justru turun. Hitungan perubahan harga tersebut tercakup dalam suatu indeks harga yang dikenal dengan Indeks Harga Konsumen (IHK) atau Consumer Price Index (CPI). Persentase kenaikan IHK dikenal dengan inflasi, sedangkan penurunannya disebut deflasi.', 60),
(30, 'Data Statistik Perbankan', 'Data statistik perbankan bersumber dari Bank Indonesia dan Otoritas Jasa Keuangan.', 60),
(31, 'PDRB', 'Produk Domestik Bruto pada tingkat nasional serta Produk Domestik Regional Bruto (PDRB) pada tingkat regional (provinsi) menggambarkan kemampuan suatu wilayah untuk menciptakan nilai tambah pada suatu waktu tertentu. Untuk menyusun PDB maupun PDRB digunakan 2 pendekatan, yaitu lapangan usaha dan pengeluaran. Keduanya menyajikan komposisi data nilai tambah dirinci menurut sumber kegiatan ekonomi (lapangan usaha) dan menurut komponen penggunaannya. PDB maupun PDRB dari sisi lapangan usaha merupakan penjumlahan seluruh komponen nilai tambah bruto yang mampu diciptakan oleh sektor-sektor ekonomi atas berbagai aktivitas produksinya. sedangkan dari sisi pengeluaran menjelaskan tentang penggunaan dari nilai tambah tersebut.', 60),
(32, 'Produk Nasional Bruto', 'Produk Nasional Bruto (PNB) adalah produk Domestik Bruto ditambah dengan pendapatan faktor neto dari luar negeri. Pendapatan faktor neto merupakan pendapatan faktor produksi yang diterima dikurangi dengan pendapatan yang dibayarkan dari/ke luar negeri oleh resoden dengan nonresiden. Pendapatan faktor produksi meliputi upah dan gaji, deviden, bunga modal, royalti, maupun pendapatan atas faktor kepemilikan lainnya.', 60),
(33, 'Produk Nasional Neto', 'Produk Nasional Neto adalah Produk Nasional Bruto dikurangi dengan penyusutan atas ausnya nilai barang modal tetap yang digunakan dalam proses produksi selama satu tahun. Disebut juga sebagai Produk Nasional Neto atas dasar harga pasar.', 60),
(34, 'Industri Manufaktur', 'Industri manufaktur adalah suatu kegiatan ekonomi yang melakukan kegiatan mengubah suatu barang dasar secara mekanis, kimia, atau dengan tangan sehingga menjadi barang jadi/setengah jadi, dan atau barang yang kurang nilainya menjadi barang yang lebih tinggi nilainya, dan sifatnya lebih dekat kepada pemakai akhir. Termasuk dalam kegiatan ini adalah jasa industri dan pekerja perakitan.', 61),
(35, 'Jasa Industri', 'Jasa industri adalah kegiatan industri yang melayani keperluan pihak lain. Pada kegiatan ini bahan baku disediakan oleh pihak lain sedangkan pihak pengolah hanya melakukan pengolahannya dengan mendapat imbalan sebagai balas jasaa (upah maklon).', 61),
(39, 'Indeks Demokrasi Indonesia (IDI)', 'Indeks Demokrasi Indonesia (IDI) adalah angka-angka yang menunjukkan tingkat perkembangan demokrasi di seluruh provinsi di Indonesia berdasarkan beberapa aspek tertentu dari demokrasi. Aspek yang diukur dalam IDI ini adalah Kebebasan Sipil, Hak-Hak Politik, dan Lembaga-Lembaga Demokrasi. Ketiga aspek demokrasi ini kemudian dijabarkan menjadi 11 variabel dan 28 indikator.', 63),
(40, 'Indeks Pembangunan Manusia (IPM)', 'Indeks Pembangunan Manusia (IPM) adalah ukuran ringkas rata-rata capaian/keberhasilan dimensi utama pembangunan manusia, yaitu: umur panjang dan hidup sehat, mempunyai pengetahuan, dan memiliki standar hidup yang layak.\r\n', 63),
(41, '', '', 64);

-- --------------------------------------------------------

--
-- Table structure for table `table_post`
--

CREATE TABLE `table_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_img` varchar(255) NOT NULL DEFAULT 'notfound.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 1),
(10, 'Biskuit_Kelapa', 'e46aec2d0d8c8d888cceaed3a924abcc', 2),
(13, 'ILoveAimer', '2853e7974c4c19e4b7675ccf9fa2744a', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_categories`
--
ALTER TABLE `table_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_file`
--
ALTER TABLE `table_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_indikator`
--
ALTER TABLE `table_indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_post`
--
ALTER TABLE `table_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_categories`
--
ALTER TABLE `table_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `table_file`
--
ALTER TABLE `table_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `table_indikator`
--
ALTER TABLE `table_indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `table_post`
--
ALTER TABLE `table_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_post`
--
ALTER TABLE `table_post`
  ADD CONSTRAINT `table_post_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `table_categories` (`id`),
  ADD CONSTRAINT `table_post_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `table_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

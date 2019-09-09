-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 08:54 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kesehatan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`, `status`) VALUES
(1, 'admin', 'admin123', 'angga', 0),
(2, 'dokter', 'dokter', 'dr. Angga Saputra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(1, 'Melahirkan Itu Sakit, Benar. Tapi Jangan Khawatir, 5 Cara Ini Bisa Bikin Nyerinya Nggak Muncar-munca', 'Cara mengurangi rasa sakit saat melahirkan\r\nMenanti kelahiran buah hati bagi ibu pasti rasanya campur aduk antara bahagia dan juga takut. Ada lo ibu yang jadi khawatir melahirkan ketika mendengar cerita rasa sakitnya dari ibu lain yang sudah pernah melahirkan. Padahal sebenarnya, rasa nyeri persalinan itu pasti dialami semua ibu. Tapi toleransi tiap orang terhadap rasa sakit kan berbeda-beda. Jadi ada ibu yang sangat kesakitan dan ada juga yang masih bisa menahan nyerinya.\r\n\r\nUntuk mengurangi rasa sakit saat persalinan ternyata ada triknya. Dan hal ini bisa dipelajari oleh ibu hamil sejak awal kehamilan. Berguna banget lo buat ibu hamil yang nggak tahan sama rasa sakit. Yuk baca bersama bagaimana caranya.\r\n\r\n1. Saat menjelang persalinan, pasti ibu jadi panik karena kesakitan. Padahal ibu harus bisa mengontrol emosi untuk tenang sehingga rasa sakitnya berkurang\r\nTenang adalah kunci utama biar rasa sakit persalinan bisa berkurang. Sulit sih, apalagi ketika rasa sakit menyerang begitu dahsyat pasti ibu langsung panik. Pada saat seperti itu, ibu harus menenangkan pikiran dan fokus buat bernafas yang benar. Makanya olahraga yoga atau senam selama kehamilan itu dianjurkan.\r\n\r\n2. Teknik pernafasan pun penting untuk mengurangi nyeri. Bernafas yang benar juga bisa bermanfaat untuk menghemat energi agar ibu kuat bersalin\r\nBernafas dengan teknik yang benar bisa mengalihkan rasa sakit yang amat sangat lo. Menarik nafas dan menghembuskan dengan pola teratur biasanya diajarkan saat senam hamil. Selain itu, kalau oksigen pada tubuh ibu pasokannya cukup, energi ibu akan tetap ada sampai saatnya bayi dilahirkan.\r\n\r\n3. Ibu pun harus nyaman agar rasa sakit berkurang. Salah satu caranya adalah dengan mengusap badan dengan air hangat. Minta bantuan orang terdekat ya\r\nAgar rasa sakit tidak makin menjadi-jadi, ibu hamil harus dalam kondisi nyaman. Misalnya nih dengan cara mengusap badan ibu dengan air hangat. Air hangat bisa diusap ke daerah pundak, tangan, kaki, dan sebagainya oleh pendamping. Ibu rasanya jadi seperti di spa!\r\n\r\n4. Pijatan-pijatan dari pasangan atau pendamping persalinan merangsang hormon endorfin. Hormon ini menimbulkan rasa senang dan juga nyaman\r\nCoba deh minta pendamping atau pasangan buat memijat ibu saat kesakitan. Biasanya yang dipijat adalah bagian bahu, punggung, kaki, dan tangan. Dikutip dari Hai Bunda, pijatan bisa merangsang hormon endorfin yang bikin ibu jadi lebih nyaman. Selain itu pijatan kan menambah kedekatan fisik serta membuat ibu merasa aman.\r\n\r\n5. Mengubah posisi ketika rasa nyeri datang katanya sih bisa mengurangi sakitnya. Misalnya dari duduk, coba berjalan-jalan, atau gunakan birthing ball juga bisa\r\nRasa sakit dan nyeri menjelang persalinan juga bisa dikurangi dengan cara mengubah posisi tubuh. Coba deh jongkok, berdiri, duduk, dan berjalan-jalan. Kalau punya birthing ball, duduk di atasnya juga bisa meredakan rasa sakit serta membantu bayi menemukan jalan lahirnya dengan lebih cepat.\r\n\r\nMemang buat mengurangi rasa sakit selama melahirkan perlu persiapan sejak lama. Tuh jangan bolos ikut senam hamil dan dipelajari baik-baik ya~', '1564862164.jpg', '2019-08-03 19:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `id_diagnosa` int(5) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`id_diagnosa`, `penyakit`, `gejala`) VALUES
(1, 'anemia', 'kulit, bibir dan wajah terlihat pucat'),
(2, 'anemia', 'mudah lelah dan lesu'),
(3, 'anemia', 'sesak nafas'),
(4, 'anemia', 'sakit kepala'),
(5, 'anemia', 'detak jantung tidak teratur'),
(6, 'anemia', 'rambut rontok'),
(7, 'Hiperemesis Gravidarum', 'mual dan muntah terus menerus'),
(8, 'Hiperemesis Gravidarum', 'nyeri perut bagian atas'),
(9, 'Hiperemesis Gravidarum', 'berat badan turun'),
(10, 'Hiperemesis Gravidarum', 'lidah mengering dan kotor'),
(11, 'Hiperemesis Gravidarum', 'kenaikan suhu badan'),
(12, 'Hiperemesis Gravidarum', 'pendarahan tanpa nyeri'),
(13, 'Hiperemesis Gravidarum', 'dehidrasi'),
(14, 'Hiperemesis Gravidarum', 'kesadaran menurun'),
(15, 'Preeklampsia', 'tekanan darah lebih dari 140/90 atau lebih'),
(16, 'Preeklampsia', 'sesak nafas'),
(17, 'Preeklampsia', 'nyeri perut bagian atas'),
(18, 'Preeklampsia', 'gangguan penglihatan'),
(19, 'Preeklampsia', 'Oedema pada jari, tangan dan mata'),
(20, 'Preeklampsia', 'mual dan muntah'),
(21, 'Preeklampsia', 'nyeri ulu hati'),
(22, 'Preeklampsia', 'sakit kepala'),
(23, 'Solusio Plasenta', 'pendarahan yang disertai nyeri'),
(24, 'Solusio Plasenta', 'kontraksi berlangung cepat'),
(25, 'Solusio Plasenta', 'darah berwarna merah kehitaman'),
(26, 'Solusio Plasenta', 'kurang bergeraknya bayi dalam kandungan'),
(27, 'Solusio Plasenta', 'rahim terasa sakit'),
(29, 'Solusio Plasenta', 'nyeri punggung'),
(30, 'Kehamilan Ektopik', 'nyeri perut'),
(31, 'Kehamilan Ektopik', 'gangguan penglihatan'),
(32, 'Kehamilan Ektopik', 'pendarahan ringan'),
(33, 'Kehamilan Ektopik', 'nyeri pada tulang panggul'),
(34, 'Kehamilan Ektopik', 'nyeri pada bahu dan leher'),
(35, 'Kehamilan Ektopik', 'syok'),
(36, 'Kehamilan Ektopik', 'gangguan kencing'),
(37, 'Plasenta Previa', 'pendarahan tanpa nyeri'),
(38, 'Plasenta Previa', 'pendarahan berulang-ulang'),
(39, 'Plasenta Previa', 'pendarahan keluar banyak'),
(40, 'Plasenta Previa', 'pendarahan di trimester akhir'),
(41, 'Molahidatidosa (Hamil Anggur)', 'flek atau pendarahan berwarna coklat dan bergelemb'),
(42, 'Molahidatidosa (Hamil Anggur)', 'nyeri perut bagian atas'),
(43, 'Molahidatidosa (Hamil Anggur)', 'nyeri pada tulang panggul'),
(44, 'Molahidatidosa (Hamil Anggur)', 'keluar cairan berbentuk gelembung mirip buah anggu'),
(45, 'Molahidatidosa (Hamil Anggur)', 'tidak ada tanda-tanda adanya janin'),
(46, 'Molahidatidosa (Hamil Anggur)', 'gelisah'),
(47, 'Molahidatidosa (Hamil Anggur)', 'rahim yang tampak lebih besar dari usia kandungan'),
(48, 'Infeksi Saluran Kemih', 'sakit dan rasa terbakar saat berkemih'),
(49, 'Infeksi Saluran Kemih', 'sering berkemih, tapi air seni yang keluar sedikit'),
(50, 'Infeksi Saluran Kemih', 'cairan urine keruh'),
(51, 'Infeksi Saluran Kemih', 'sakit perut bagian bawah'),
(52, 'Infeksi Saluran Kemih', 'demam'),
(53, 'Infeksi Saluran Kemih', 'nyeri pada bagian kandung kemih');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(7) NOT NULL,
  `gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `gejala`) VALUES
(51, 'berat badan turun'),
(46, 'cairan urine keruh'),
(40, 'darah berwarna merah kehitaman '),
(25, 'dehidrasi'),
(12, 'demam'),
(52, 'detak jantung tidak teratur'),
(20, 'flek atau pendarahan berwarna coklat dan bergelemb'),
(28, 'gangguan kencing'),
(34, 'gangguan penglihatan'),
(32, 'gelisah'),
(30, 'keluar cairan berbentuk gelembung mirip buah anggu'),
(23, 'kenaikan suhu badan'),
(16, 'kesadaran menurun'),
(49, 'kontraksi berlangung cepat'),
(50, 'kulit, bibir dan wajah  terlihat pucat'),
(41, 'kurang bergeraknya bayi dalam kandungan'),
(48, 'lidah mengering dan kotor'),
(10, 'mual dan muntah'),
(22, 'mual dan muntah terus menerus'),
(11, 'mudah lelah dan lesu'),
(39, 'nyeri pada bagian kandung kemih '),
(36, 'nyeri pada bahu dan leher'),
(15, 'nyeri pada tulang panggul'),
(13, 'nyeri perut'),
(29, 'nyeri perut bagian atas'),
(53, 'nyeri punggung'),
(21, 'nyeri ulu hati'),
(19, 'Oedema pada jari, tangan dan mata'),
(35, 'pendarahan berulang-ulang'),
(37, 'pendarahan di trimester akhir'),
(26, 'pendarahan keluar banyak'),
(24, 'pendarahan ringan'),
(14, 'pendarahan tanpa nyeri'),
(38, 'pendarahan yang disertai nyeri'),
(42, 'rahim terasa sakit'),
(33, 'rahim yang tampak lebih besar dari usia kandungan'),
(43, 'rambut rontok'),
(44, 'sakit dan rasa terbakar saat berkemih'),
(1, 'sakit kepala'),
(47, 'sakit perut bagian bawah'),
(45, 'sering berkemih, tapi air seni yang keluar sedikit'),
(18, 'sesak nafas'),
(27, 'syok'),
(17, 'tekanan darah lebih dari 140/90 atau lebih '),
(31, 'tidak ada tanda-tanda adanya janin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id_penyakit` int(5) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `level_penyakit` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`, `ket`, `level_penyakit`) VALUES
(5, 'anemia', '', 1),
(6, 'Hiperemesis Gravidarum', '', 1),
(7, 'Preeklampsia', '', 1),
(8, 'Solusio Plasenta', '', 1),
(9, 'Kehamilan Ektopik', '', 1),
(10, 'Plasenta Previa', '', 1),
(11, 'Molahidatidosa (Hamil Anggur)', '', 1),
(12, 'Infeksi Saluran Kemih', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_riwayat_penyakit`
--

CREATE TABLE `tb_riwayat_penyakit` (
  `id_riwayat` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_riwayat_penyakit`
--

INSERT INTO `tb_riwayat_penyakit` (`id_riwayat`, `username`, `penyakit`, `tgl`) VALUES
(5, 'delfita', 'Anemia', '2019-03-03'),
(6, 'delfita', 'Darah Rendah', '2019-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sensor`
--

CREATE TABLE `tb_sensor` (
  `id` int(7) NOT NULL,
  `suhu` varchar(20) NOT NULL,
  `detakjantung` varchar(50) NOT NULL,
  `sistolik` varchar(20) NOT NULL,
  `diastolik` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sensor`
--

INSERT INTO `tb_sensor` (`id`, `suhu`, `detakjantung`, `sistolik`, `diastolik`, `username`, `tanggal`) VALUES
(1, '12', '44', '110', '80', 'delfita', '2019-08-26'),
(2, '30', '96', '120', '85', 'angga', '2019-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id_solusi` int(5) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `solusi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`id_solusi`, `nama_penyakit`, `solusi`) VALUES
(1, 'Anemia', 'Mengkonsumsi Bayam'),
(2, 'Anemia', 'Rajin Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `kehamilanke` varchar(3) NOT NULL,
  `beratbadan` varchar(3) NOT NULL,
  `golongandarah` varchar(1) NOT NULL,
  `riwayatpenyakit` text NOT NULL,
  `hpht` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama_lengkap`, `umur`, `kehamilanke`, `beratbadan`, `golongandarah`, `riwayatpenyakit`, `hpht`) VALUES
('angga', 'angga123', 'angga saputra', '25', '3', '55', 'A', '', '2019-02-01'),
('delfita', '123', 'delfita sari', '55', '2', '60', 'B', 'darah tinggi', '2019-03-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `penyakit` (`penyakit`),
  ADD KEY `gejala` (`gejala`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`),
  ADD KEY `gejala` (`gejala`),
  ADD KEY `gejala_2` (`gejala`),
  ADD KEY `gejala_3` (`gejala`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id_penyakit`),
  ADD KEY `nama_penyakit` (`nama_penyakit`),
  ADD KEY `nama_penyakit_2` (`nama_penyakit`),
  ADD KEY `nama_penyakit_3` (`nama_penyakit`);

--
-- Indexes for table `tb_riwayat_penyakit`
--
ALTER TABLE `tb_riwayat_penyakit`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id_solusi`),
  ADD KEY `nama_penyakit` (`nama_penyakit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  MODIFY `id_diagnosa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id_penyakit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_riwayat_penyakit`
--
ALTER TABLE `tb_riwayat_penyakit`
  MODIFY `id_riwayat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_sensor`
--
ALTER TABLE `tb_sensor`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `id_solusi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD CONSTRAINT `tb_diagnosa_ibfk_1` FOREIGN KEY (`penyakit`) REFERENCES `tb_penyakit` (`nama_penyakit`);

--
-- Constraints for table `tb_riwayat_penyakit`
--
ALTER TABLE `tb_riwayat_penyakit`
  ADD CONSTRAINT `tb_riwayat_penyakit_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

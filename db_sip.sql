-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 12:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berkas`
--

CREATE TABLE `tbl_berkas` (
  `id_berkas` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `foto` text NOT NULL,
  `ijazah` text NOT NULL,
  `ktp` text NOT NULL,
  `str_legalisir` text NOT NULL,
  `s_pernyataan` text NOT NULL,
  `s_persetujuan` text NOT NULL,
  `bpjs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id_berkas`, `id_user`, `foto`, `ijazah`, `ktp`, `str_legalisir`, `s_pernyataan`, `s_persetujuan`, `bpjs`) VALUES
(1, 4, '462ac243eaab9d8e9fc9061884942c7f.jpeg', 'b0dc3fe78e77220ea8006288fd506651.jpeg', '147b21890c6e722b87ce89e68ec7b96c.jpg', '60f5a021cc00c44a16c86d1c95034eed.jpg', 'c0a5fcba161c193f9af429270f974b3c.jpg', '3a19e1613a3b6eca5d00ff18816bd0dc.png', '0532fa5ed48ac977538cd4939d138321.png'),
(2, 5, '7f005fb207e3744bbb2c13833f80e069.jpg', '49b50677ce81eeb386db6842fd68e7af.jpg', 'bc24d077997982016a91f2d43a68bedb.jpg', '65fc5ee9763c59d00edb1afe45197bd1.jpg', '6e8cc54d64a1a2203adedc90bd267a6e.jpg', '5416f6c90f5cff3b85ab7d7f654abc65.jpg', 'adb54a24c9496831f2cd15291423e5d0.jpg'),
(3, 8, '27ccc394611f06a5ce7cab062190221c.jpg', '47d26515dcd74b5a0b767d818073e4ce.jpg', 'f11d9f02720cb5802aaaba8bfd6324be.jpg', 'bc1f42120b8730f68c96da44af671ad7.jpg', 'b58bc54d919742d43237cb38520da67e.jpg', '9cd5e3e96973d9735a76d75fe3553e53.jpg', '3398881c4c58a662ffb7e2f41bb3d64c.jpg'),
(4, 9, '3b9d74f336c87ce4e141a5ddabc86c3e.jpg', '9f5cc296f0d6eb6bda5eea3d56ee60cf.png', '46d8db759e66f28597cd6925f1fbe434.jpg', '9e785fec7c897e19d46f95d480850799.jpg', 'be9551be99f77c2ba85a7ee492741e3a.png', 'd97937ced9170ecdc97fffb3fb2b0d7b.jpg', 'bfce44548bff101c0bbd402708450eb6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id_history` int(9) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_rekomendasi` int(5) NOT NULL,
  `tgl_validasi` date NOT NULL,
  `status_pengajuan` enum('TERIMA','TOLAK') NOT NULL,
  `ket_lain` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`id_history`, `id_user`, `id_rekomendasi`, `tgl_validasi`, `status_pengajuan`, `ket_lain`) VALUES
(1, 5, 2, '2020-12-08', 'TERIMA', 'Berkas Diterima'),
(2, 5, 2, '2020-12-08', 'TOLAK', 'Apa saja'),
(3, 5, 2, '2020-12-08', 'TERIMA', 'Berkas Diterima'),
(4, 8, 3, '2020-12-13', 'TOLAK', 'SPT kurang Lengkap, SIlahkan Dilengkapi'),
(5, 8, 3, '2020-12-13', 'TERIMA', 'Berkas Diterima'),
(6, 9, 4, '2020-12-14', 'TOLAK', 'Tanggal Lahir tidak Sesuai'),
(7, 9, 4, '2020-12-14', 'TERIMA', 'Berkas Diterima'),
(8, 9, 4, '2020-12-14', 'TOLAK', 'STR Errors');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `id_user` int(5) NOT NULL,
  `nm_lengkap` text NOT NULL,
  `jekel` enum('L','P') NOT NULL,
  `tmp_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` text NOT NULL,
  `pendidikan_terakhir` enum('S1','S2','S3') NOT NULL,
  `universitas` text NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_identitas`
--

INSERT INTO `tbl_identitas` (`id_user`, `nm_lengkap`, `jekel`, `tmp_lahir`, `tgl_lahir`, `agama`, `alamat`, `no_hp`, `pendidikan_terakhir`, `universitas`, `tahun`) VALUES
(4, 'dr. MUHAMMAD YUSUF AJI WIJAYA, S.Kom,. MM,. M.Sg', 'L', 'Kudus', '1997-02-23', 'L', 'Jl. Sumber Bulusan, RT. 05/ RW. 05, Ds. hadipolo, Kec. jekulo, Kab. Kudus - Jawa Tengah', '0895411547434', 'S3', 'UNIVERSITAS OHAYO JAPAN', 2020),
(5, 'Aji Wijaya', 'L', 'Kudus', '2020-12-08', 'L', 'Kudus', '08112904711', 'S3', 'Universitas Diponegoro', 2020),
(8, 'Aji Wijaya', 'L', 'Kudus', '1997-02-23', 'Katholik', 'Jl. Sumber Bulusan, RT. 05/ RW. 09', '089283782783', 'S3', 'Universitas Diponegoro', 2020),
(9, 'Tsamarah Muthia RInggahadini', 'P', 'Kudus', '1997-04-23', 'P', 'Kudus', '089231827387', 'S3', 'UNIVERSITAS MURIA KUDUS', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kantor`
--

CREATE TABLE `tbl_kantor` (
  `id_user` int(5) NOT NULL,
  `nm_kantor` text NOT NULL,
  `alamat_praktik` text NOT NULL,
  `no_kantor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kantor`
--

INSERT INTO `tbl_kantor` (`id_user`, `nm_kantor`, `alamat_praktik`, `no_kantor`) VALUES
(4, 'PERMATA HUSADA FARMA', 'Jl. Kudus - Pati KM. 3, Ds. Dersalam, Kec. Bae, Kab. Kudus - Jawa Tengah', '08112904711'),
(5, 'CV. Aburizal Sehat', 'AAAAAAAAAAAAAAAAAAA', '08112904711'),
(8, 'CV. Aburizal Sehat', 'Jl. Sumber Bulusan, RT. 05/ RW. 05', '0291471127'),
(9, 'Farmasi Husada', 'Kudus', '0898838387387');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nm_kategori` text NOT NULL,
  `singkatan` varchar(5) NOT NULL,
  `status_kategori` enum('ADA','HAPUS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`, `singkatan`, `status_kategori`) VALUES
(1, 'Dokter Gigi', 'DG', 'ADA'),
(2, 'Dokter Spesialis Anak', 'DSA', 'ADA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasi`
--

CREATE TABLE `tbl_rekomendasi` (
  `id_rekomendasi` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `no_str` text NOT NULL,
  `tgl_berakhir_str` date NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_berakhir` date DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `status_rekomendasi` enum('KONFIRMASI','T_KONFIRMASI','KASI','AKTIF') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekomendasi`
--

INSERT INTO `tbl_rekomendasi` (`id_rekomendasi`, `id_user`, `id_kategori`, `no_str`, `tgl_berakhir_str`, `tgl_mulai`, `tgl_berakhir`, `tgl_daftar`, `status_rekomendasi`) VALUES
(1, 4, 1, '12092300298982', '2025-11-27', '2020-11-28', '2025-11-28', '2020-11-27', ''),
(2, 5, 1, '121222', '2020-12-09', '2020-12-08', '2025-12-09', '2020-12-08', ''),
(3, 8, 1, '2302970029838', '2024-01-13', NULL, NULL, '2020-12-12', 'KASI'),
(4, 9, 2, '120920937', '2025-12-14', NULL, NULL, '2020-12-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sip`
--

CREATE TABLE `tbl_sip` (
  `id_sip` int(5) NOT NULL,
  `id_rekomendasi` int(5) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `status_sip` enum('PROSES','KASI','KABID','AKTIF','BLOKIR','P_PROSES','P_KASI','P_KABID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sip`
--

INSERT INTO `tbl_sip` (`id_sip`, `id_rekomendasi`, `tgl_mulai`, `tgl_akhir`, `status_sip`) VALUES
(1, 1, '2020-11-28', '2025-11-28', 'AKTIF'),
(2, 2, '2020-11-28', '2025-11-28', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` text NOT NULL,
  `level` enum('PEMOHON','KASI','KABID','KEPALA','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'kepala', NULL, '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KEPALA'),
(2, 'kabid', NULL, '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KABID'),
(3, 'kasi', NULL, '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KASI'),
(4, 'zimmerskynerz', 'ajiw100@gmail.com', '$2y$10$ggVPkjf5MTISHN.mEPaqE.oZgTRQjn11SVGY4/BVnT4y0Dp3fzi/u', 'PEMOHON'),
(5, 'lucky', 'lucky@gmail.com', '$2y$10$z7H6yuGSEZExEIgCG/CVoOkLydHfaZhmQ4dpeVy.MqteoG5h8HDoO', 'PEMOHON'),
(6, 'admin', 'admin@gmail.com', '$2y$10$z7H6yuGSEZExEIgCG/CVoOkLydHfaZhmQ4dpeVy.MqteoG5h8HDoO', 'ADMIN'),
(7, 'ima', 'ima@gmail.com', '$2y$10$VEd2kqQ1rdXFBXvILX.2t.Z6YksuWuJkgQMSMw27X1gCeIKEAHGLC', 'PEMOHON'),
(8, 'lucky02', 'pemilik@pemilik.com', '$2y$10$bpBJHT5M36nsEaaTZHC7OOnTc2FJOHZxHDtnEQcpDbshPrTZUm1bG', 'PEMOHON'),
(9, 'sasa', 'sasa@gmail.com', '$2y$10$CxfKhblRitQV8q3MfV9Eb.eK2.T672N6K2ZoMjFdr7I021rvwkeDi', 'PEMOHON');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `use_id_user02` (`id_user`);

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `use_id_user4` (`id_user`),
  ADD KEY `use_id_rekomendasi` (`id_rekomendasi`);

--
-- Indexes for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD KEY `use_id_user01` (`id_user`);

--
-- Indexes for table `tbl_kantor`
--
ALTER TABLE `tbl_kantor`
  ADD KEY `use_id_user04` (`id_user`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`),
  ADD KEY `use_id_user03` (`id_user`),
  ADD KEY `use_id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_sip`
--
ALTER TABLE `tbl_sip`
  ADD PRIMARY KEY (`id_sip`),
  ADD KEY `id_rekomendasi` (`id_rekomendasi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id_history` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  MODIFY `id_rekomendasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sip`
--
ALTER TABLE `tbl_sip`
  MODIFY `id_sip` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD CONSTRAINT `use_id_user02` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD CONSTRAINT `use_id_rekomendasi` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tbl_rekomendasi` (`id_rekomendasi`),
  ADD CONSTRAINT `use_id_user4` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD CONSTRAINT `use_id_user01` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_kantor`
--
ALTER TABLE `tbl_kantor`
  ADD CONSTRAINT `use_id_user04` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD CONSTRAINT `use_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`),
  ADD CONSTRAINT `use_id_user03` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Constraints for table `tbl_sip`
--
ALTER TABLE `tbl_sip`
  ADD CONSTRAINT `id_rekomendasi` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tbl_rekomendasi` (`id_rekomendasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

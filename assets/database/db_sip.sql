-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2020 pada 04.50
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

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
-- Struktur dari tabel `tbl_berkas`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id_history` int(9) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_rekomendasi` int(5) NOT NULL,
  `tgl_validasi` date NOT NULL,
  `status_pengajuan` enum('TERIMA','TOLAK') NOT NULL,
  `ket_lain` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_identitas`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kantor`
--

CREATE TABLE `tbl_kantor` (
  `id_user` int(5) NOT NULL,
  `nm_kantor` text NOT NULL,
  `alamat_praktik` text NOT NULL,
  `no_kantor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nm_kategori` text NOT NULL,
  `singkatan` varchar(5) NOT NULL,
  `status_kategori` enum('ADA','HAPUS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`, `singkatan`, `status_kategori`) VALUES
(1, 'Dokter Gigi', 'DG', 'ADA'),
(2, 'Dokter Spesialis Anak', 'DSA', 'ADA'),
(3, 'Ahli Malaria Dengung', 'AMD', 'HAPUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekomendasi`
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
  `status_rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sip`
--

CREATE TABLE `tbl_sip` (
  `id_sip` int(5) NOT NULL,
  `id_rekomendasi` int(5) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `status_sip` enum('PROSES','KASI','KABID','AKTIF','BLOKIR','P_PROSES','P_KASI','P_KABID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` text NOT NULL,
  `level` enum('PEMOHON','KASI','KABID','KEPALA','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'kepala', 'kepala@gmail.com', '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KEPALA'),
(2, 'kabid', 'kabid@gmail.com', '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KABID'),
(3, 'kasi', 'kasi@gmail.com', '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KASI'),
(4, 'admin', 'admin@gmail.com', '$2y$10$z7H6yuGSEZExEIgCG/CVoOkLydHfaZhmQ4dpeVy.MqteoG5h8HDoO', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `use_id_user02` (`id_user`);

--
-- Indeks untuk tabel `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `use_id_user4` (`id_user`),
  ADD KEY `use_id_rekomendasi` (`id_rekomendasi`);

--
-- Indeks untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD KEY `use_id_user01` (`id_user`);

--
-- Indeks untuk tabel `tbl_kantor`
--
ALTER TABLE `tbl_kantor`
  ADD KEY `use_id_user04` (`id_user`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`),
  ADD KEY `use_id_user03` (`id_user`),
  ADD KEY `use_id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_sip`
--
ALTER TABLE `tbl_sip`
  ADD PRIMARY KEY (`id_sip`),
  ADD KEY `id_rekomendasi` (`id_rekomendasi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id_history` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  MODIFY `id_rekomendasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_sip`
--
ALTER TABLE `tbl_sip`
  MODIFY `id_sip` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD CONSTRAINT `use_id_user02` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD CONSTRAINT `use_id_rekomendasi` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tbl_rekomendasi` (`id_rekomendasi`),
  ADD CONSTRAINT `use_id_user4` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD CONSTRAINT `use_id_user01` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_kantor`
--
ALTER TABLE `tbl_kantor`
  ADD CONSTRAINT `use_id_user04` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD CONSTRAINT `use_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`),
  ADD CONSTRAINT `use_id_user03` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_sip`
--
ALTER TABLE `tbl_sip`
  ADD CONSTRAINT `id_rekomendasi` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tbl_rekomendasi` (`id_rekomendasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2020 pada 04.50
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

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
-- Struktur dari tabel `tbl_berkas`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id_history` int(9) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_rekomendasi` int(5) NOT NULL,
  `tgl_validasi` date NOT NULL,
  `status_pengajuan` enum('TERIMA','TOLAK') NOT NULL,
  `ket_lain` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_identitas`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kantor`
--

CREATE TABLE `tbl_kantor` (
  `id_user` int(5) NOT NULL,
  `nm_kantor` text NOT NULL,
  `alamat_praktik` text NOT NULL,
  `no_kantor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nm_kategori` text NOT NULL,
  `singkatan` varchar(5) NOT NULL,
  `status_kategori` enum('ADA','HAPUS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nm_kategori`, `singkatan`, `status_kategori`) VALUES
(1, 'Dokter Gigi', 'DG', 'ADA'),
(2, 'Dokter Spesialis Anak', 'DSA', 'ADA'),
(3, 'Ahli Malaria Dengung', 'AMD', 'HAPUS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekomendasi`
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
  `status_rekomendasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sip`
--

CREATE TABLE `tbl_sip` (
  `id_sip` int(5) NOT NULL,
  `id_rekomendasi` int(5) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `status_sip` enum('PROSES','KASI','KABID','AKTIF','BLOKIR','P_PROSES','P_KASI','P_KABID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` text NOT NULL,
  `level` enum('PEMOHON','KASI','KABID','KEPALA','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'kepala', 'kepala@gmail.com', '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KEPALA'),
(2, 'kabid', 'kabid@gmail.com', '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KABID'),
(3, 'kasi', 'kasi@gmail.com', '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KASI'),
(4, 'admin', 'admin@gmail.com', '$2y$10$z7H6yuGSEZExEIgCG/CVoOkLydHfaZhmQ4dpeVy.MqteoG5h8HDoO', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `use_id_user02` (`id_user`);

--
-- Indeks untuk tabel `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `use_id_user4` (`id_user`),
  ADD KEY `use_id_rekomendasi` (`id_rekomendasi`);

--
-- Indeks untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD KEY `use_id_user01` (`id_user`);

--
-- Indeks untuk tabel `tbl_kantor`
--
ALTER TABLE `tbl_kantor`
  ADD KEY `use_id_user04` (`id_user`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`),
  ADD KEY `use_id_user03` (`id_user`),
  ADD KEY `use_id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tbl_sip`
--
ALTER TABLE `tbl_sip`
  ADD PRIMARY KEY (`id_sip`),
  ADD KEY `id_rekomendasi` (`id_rekomendasi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id_history` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  MODIFY `id_rekomendasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_sip`
--
ALTER TABLE `tbl_sip`
  MODIFY `id_sip` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_berkas`
--
ALTER TABLE `tbl_berkas`
  ADD CONSTRAINT `use_id_user02` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD CONSTRAINT `use_id_rekomendasi` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tbl_rekomendasi` (`id_rekomendasi`),
  ADD CONSTRAINT `use_id_user4` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD CONSTRAINT `use_id_user01` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_kantor`
--
ALTER TABLE `tbl_kantor`
  ADD CONSTRAINT `use_id_user04` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  ADD CONSTRAINT `use_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`),
  ADD CONSTRAINT `use_id_user03` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_sip`
--
ALTER TABLE `tbl_sip`
  ADD CONSTRAINT `id_rekomendasi` FOREIGN KEY (`id_rekomendasi`) REFERENCES `tbl_rekomendasi` (`id_rekomendasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2021 pada 08.33
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_sip`
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

--
-- Dumping data untuk tabel `tbl_berkas`
--

INSERT INTO `tbl_berkas` (`id_berkas`, `id_user`, `foto`, `ijazah`, `ktp`, `str_legalisir`, `s_pernyataan`, `s_persetujuan`, `bpjs`) VALUES
(14, 19, 'dce17eaaac09c5666e2fb8e482d1e42e.png', '16d0a840a4ef63b38040a193e56e56a4.png', 'e59d83bd86becf61c752bec782f6dea4.png', 'd25ddc246be68cca175924eb86d86169.png', 'db19c33d16d216576a56506e79d082f8.png', '5fb4ae02f9a6df3eaca7e1ccadfb6c66.png', '525238f02baf7be4223e3f5f155fb399.png'),
(15, 20, '400f8928b3ecd769f6065d707f8cc878.png', 'c62f912488c2ef55a20ebf2921705c4b.png', 'c16aef05c2e2f7dd04a31e77c464769b.png', 'e0a9a6404c91975277ffa1c45dfa865e.png', 'fb62f9a126cb55e1c75bd175c4991768.png', '5d9ed7a1e32779a4234a71f2c190842f.png', 'ed54253af868a310ef9bd00816cdfc43.png'),
(16, 21, '276bf88e9c6442e47173126121570839.jpg', '35d50e6695344678e7c2fc5e1cdd9a0b.jpg', '090cf735ffb200bef40d13f4ac00e194.jpg', '90562412c21fd9038298b16d8e25cada.jpg', '017dccdf1c15a8fe5fce0111e8c605fa.jpg', 'a7d57451f5fdefbb2cc07c4fdde39280.jpg', '44b6a5f35501a288c7737c5c8db1ef7c.jpg'),
(17, 22, 'c2d3f0c51dff692c1cf10d85a9e99ce5.jpg', '129392decb1bd85b09c57d19bb4670ea.jpg', '4c2b7b351133329641fe4ba2e069fdee.jpg', 'c7fc229659e223370ef761917819223c.jpg', 'f08159dfcc398a8b9c38a134d5ccee26.jpg', '2abdf84f99fe7839cec7db7ef2ae8608.jpg', '09ac140f71533088f878a8af497092b9.jpg'),
(18, 22, 'dddd02135c57b79f8d687a3fd3f1185d.jpg', '8134e73e5cbe2cab99822c7bb7cc48d3.jpg', 'ad55839b7fd15bfae0a7fa7630a3abcf.jpg', 'bdce5624886ae68c3f2caf96c56ea62e.jpg', '07c2cedb4e0792a2163d5b43171ac37e.jpg', '423834b8142b04be251e22c54477abc3.jpg', '1ec005c90f4feaa7336edf2ff6b4c868.jpg'),
(19, 23, '4f44b65756452d263a1cbbaa06e6ba4e.jpg', '8077475ccd15edc259fa6a16507997bb.jpg', '03615ca846506e02a330212f582add7f.jpg', '1cc66729a15df396a57e95b0362022b3.jpg', '3525947eca84d772b66fc2244e496d26.jpg', '95c0ba675cd3f652a3a215d259b28d6f.jpg', '783fc554cf2ab4c2192d717740e86d2f.jpg'),
(20, 24, 'b48387c8a5442d629844c4aa3e6d8024.jpg', '81d79188e962b49ae74ddcb781c9fba0.jpg', 'f1ac0e6077c18f5d15c569c538b01fb0.jpg', 'acead3c25b7f57e310eb6ead985acb3b.jpg', '4e5f996ca8ebd20a5319b5d91e462eb3.jpg', '06c90f89323e13c475dc8515600acaad.jpg', 'ee48d0f1dec6ca0a400e2cc0764f5c01.jpg'),
(21, 25, 'e496af88eb782e9b31375d12bed7ec2a.jpg', '6482c38b97a281925d4ae20df5e76f51.jpg', '65b36db521113d01d2bcf8406263645c.jpg', '72ef899136d240d39d3bc64037de5277.jpg', 'f2ffc3c4d91c9a1debbdb14243986b01.jpg', '6902064936108be3b511a505217dbf42.jpg', '34a4d9eabdf5dac7d7f68645d81ae76a.jpg'),
(22, 27, '38f87f650a2f1b6148f2e3bf7bafd05a.jpg', 'c81b3f451c031cf3c4e82415156a6beb.jpg', '6176985fc8337bb73305d795b8e7e4de.jpg', 'b1f883d49ac9205159c7d9b30e178de6.jpg', '8ab137777961636b940acff9b660941d.jpg', '56f8cd7cb1e584e8d10ec4855120dad3.jpg', '24dc181b8d48369a0955df8d406ac61d.jpg'),
(23, 28, 'b0cd0dd0f33beff1f230cf4d8f5dfb49.jpg', '150b113f2358d074b12a8bc78120e456.jpg', '80686c315f4d731460637234958d0a79.jpg', '0996240551d4bd1b89e578249b06b8bf.jpg', '3948b092810cad584156fad97065e773.jpg', 'b1b722cd5544b510580a425e7cbf13f0.jpg', '5c53f8c9053fa35ac5ffff2d037ddae6.jpg'),
(24, 29, 'cffbc0c9bcb415d47f41c9bf41868b8a.jpg', 'b77be054e2b7e12bfe89b86381424916.jpg', 'be744f652852c6f31083df7d45677e42.jpg', 'c042ce718e15448eb5df1656158a9a0c.jpg', 'ba136a7ff4293995f699e83e75e29b8a.jpg', '3c97f53b64241fd2a69209484350b724.jpg', 'd59fbee55e6da0a898085b4b14f554f8.jpg'),
(25, 30, 'fd2d50c5110f498afeae9e12311a03c5.jpg', '64f55c23934a56b938ae0772ca4cfa5e.jpg', '7612fa263e5aa51bec4e3ed94e92ad10.jpg', '2b055f3106e68647c2f2962ac47bbafc.jpg', '374f9b67fed7ec42f79f669f4a3e45c4.jpg', '16a1a9e3b2d021353807ab85a909b194.jpg', '7d7b49740c5d68eef505f628a28d7059.jpg'),
(26, 31, 'c088ca99bd59f16b22cc5ab5b9b5db18.jpg', '673d0352affaa9a743094fbcf4fdb25d.jpg', '7170b363826811d71f74ce8bdb911a69.jpg', 'adee6b51d6486e7ea45f84b6a47147fd.jpg', 'a9483f4a8e006c97df2bf780f3141589.jpg', '6cd51b9a1a27dcacd3702e57b2e719fa.jpg', '9968bef5d9b3e50d3ad8e0b39ba41d71.jpg'),
(27, 33, '81068ad69a5e635ac50932c0c5baa574.jpg', '4b2deea7fecba6732b5777e39afc03e6.jpg', 'bb8153d02a2318e0c41a92131b1bf059.jpg', 'c80fd3d54d2c2e5d6f36e27819c5a054.jpg', '0de2d5be6f3f82be1cd23a524e0224af.jpg', 'd659d60000b2792192c4b8f6a1d33787.jpg', '8c27c62debdd60d3dd9db3fac18fb9c0.jpg');

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

--
-- Dumping data untuk tabel `tbl_history`
--

INSERT INTO `tbl_history` (`id_history`, `id_user`, `id_rekomendasi`, `tgl_validasi`, `status_pengajuan`, `ket_lain`) VALUES
(49, 19, 14, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(50, 20, 15, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(51, 19, 14, '2021-01-04', '', 'Berkas Diterima Kasi'),
(52, 20, 15, '2021-01-04', '', 'Berkas Diterima Kasi'),
(53, 19, 14, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(54, 20, 15, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(55, 19, 14, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(56, 20, 15, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(57, 19, 14, '2021-01-04', 'TERIMA', 'Berkas Diterima'),
(58, 19, 14, '2021-01-04', 'TOLAK', 'tdk lengkap'),
(59, 19, 14, '2021-01-04', '', 'Berkas Diterima Kasi'),
(60, 19, 14, '2021-01-04', '', 'Berkas Diterima Kasi'),
(61, 19, 14, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(62, 21, 16, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(63, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(64, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(65, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(66, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(67, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(68, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(69, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(70, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(71, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(72, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(73, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(74, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(75, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(76, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(77, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(78, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(79, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(80, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(81, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(82, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(83, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(84, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(85, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(86, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(87, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(88, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(89, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(90, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(91, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(92, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(93, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(94, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(95, 28, 23, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(96, 31, 26, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(97, 23, 19, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(98, 24, 20, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(99, 25, 21, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(100, 27, 22, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(101, 29, 24, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(102, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(103, 30, 25, '2021-01-04', 'TERIMA', 'Berkas Diterima Admin'),
(104, 22, 17, '2021-01-04', '', 'Berkas Diterima Kasi'),
(105, 28, 23, '2021-01-04', '', 'Berkas Diterima Kasi'),
(106, 21, 16, '2021-01-04', '', 'Berkas Diterima Kasi'),
(107, 23, 19, '2021-01-04', '', 'Berkas Diterima Kasi'),
(108, 25, 21, '2021-01-04', '', 'Berkas Diterima Kasi'),
(109, 27, 22, '2021-01-04', '', 'Berkas Diterima Kasi'),
(110, 31, 26, '2021-01-04', '', 'Berkas Diterima Kasi'),
(111, 24, 20, '2021-01-04', '', 'Berkas Diterima Kasi'),
(112, 29, 24, '2021-01-04', '', 'Berkas Diterima Kasi'),
(113, 30, 25, '2021-01-04', '', 'Berkas Diterima Kasi'),
(114, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(115, 28, 23, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(116, 21, 16, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(117, 23, 19, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(118, 25, 21, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(119, 27, 22, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(120, 31, 26, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(121, 24, 20, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(122, 29, 24, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(123, 30, 25, '2021-01-04', 'TERIMA', 'Berkas Diterima KABID'),
(124, 22, 17, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(125, 28, 23, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(126, 21, 16, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(127, 23, 19, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(128, 25, 21, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(129, 27, 22, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(130, 31, 26, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(131, 24, 20, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(132, 30, 25, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(133, 29, 24, '2021-01-04', 'TERIMA', 'Berkas Diterima Kepala'),
(134, 22, 17, '2021-01-05', 'TOLAK', 'alamat'),
(135, 22, 17, '2021-01-05', 'TERIMA', 'Berkas Diterima Admin'),
(136, 33, 27, '2021-01-05', 'TOLAK', 'ktp kurang jelas'),
(137, 33, 27, '2021-01-05', 'TERIMA', 'Berkas Diterima Admin'),
(138, 33, 27, '2021-01-05', 'TOLAK', 'salah'),
(139, 33, 27, '2021-01-05', '', 'Berkas Diterima Kasi'),
(140, 33, 27, '2021-01-05', 'TERIMA', 'Berkas Diterima KABID'),
(141, 33, 27, '2021-01-05', 'TERIMA', 'Berkas Diterima Kepala');

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

--
-- Dumping data untuk tabel `tbl_identitas`
--

INSERT INTO `tbl_identitas` (`id_user`, `nm_lengkap`, `jekel`, `tmp_lahir`, `tgl_lahir`, `agama`, `alamat`, `no_hp`, `pendidikan_terakhir`, `universitas`, `tahun`) VALUES
(19, 'Dr. YOSEPHINE IKA ADIKAWATI', 'P', 'DEMAK', '1995-02-09', 'P', 'KEDONDONG 005/001', '082345678678', 'S1', 'univesitas diponegoro', 2020),
(20, 'Dr. BOBY HADI', 'L', 'DEMAK ', '1995-02-09', 'Katholik', 'JEPANG PAKIS', '08552735722', 'S1', 'univesitas indonesia', 2018),
(21, 'dr .Rizky Imannur Rohman', 'L', 'madiun', '1994-10-01', 'Islam', 'peganjaran rt 7 rw 3 bae kudus', '083635476238', 'S1', 'univesitas diponegoro', 2018),
(22, 'DR. MUHAMMAD ANGGA KURNIAWAN', '', 'JEPARA ', '1995-06-03', 'Islam', 'RENGGING 05/01 JEPARA', '084225356467', 'S1', 'UNIVERSITAS SULTAN AGUNG', 2019),
(22, 'DR. MUHAMMAD ANGGA KURNIAWAN', '', 'JEPARA ', '1995-06-03', 'Islam', 'RENGGING 05/01 JEPARA', '084225356467', 'S1', 'UNIVERSITAS SULTAN AGUNG', 2019),
(23, 'DR. MUHAMMAD ANGGA KURNIAWAN', 'L', 'SURAKARTA', '1995-02-05', 'Islam', 'MEJOBO KUDUS', '08908209223', 'S1', 'univesitas diponegoro', 2019),
(24, 'DR FAHRUL RIZA AHMAD', 'P', 'KUDUS', '1996-04-09', 'Islam', 'MEJOBO KUDUS', '0867637344', 'S1', 'UNIVERSITAS SULTAN AGUNG', 2019),
(25, 'DR EKO JATMIKANTO STRIO', 'L', 'SEMARANG', '1993-12-03', 'Islam', 'JL SRIWIJAYA', '0830990234234', 'S1', 'univesitas diponegoro', 2018),
(27, 'DR .SONI ADI WIJAYA', 'L', 'KUDUS', '1996-03-08', 'Katholik', 'GONDANGMANIS', '087367173', 'S1', 'univesitas indonesia', 2019),
(28, 'DR INDAH ROSIANA', 'P', 'KUDUS', '1990-04-12', 'Islam', 'JL R KUSUMADYA NO 30 KUDUS', '086565434657', 'S1', 'UNIVERSITAS SULTAN AGUNG', 2015),
(29, 'DR DEVI AYU KURNIATI', 'P', 'JEPARA', '1977-02-22', 'Islam', 'GONDANGMANIS', '0867654674', 'S1', 'univesitas diponegoro', 2006),
(30, 'DR MARIA YESIKA NATALIA', 'P', 'SEMARANG', '1990-09-09', 'Protestan', 'TANAH MAS SEMARANG', '083972847382', 'S2', 'univesitas diponegoro', 2010),
(31, 'STEFANI PRAMUDITA JAYA', 'P', 'SEMARANG', '1993-09-16', 'Katholik', 'KUDUS', '018912097120', 'S1', 'UNIVERSITAS GAJAH MADA', 2015),
(33, 'DR. THIMY PUTRI HARIYANI', 'P', 'SEMARANG', '1997-05-27', 'P', 'HONGGOSOCO', '082276435788', 'S1', 'UNIVERSITAS SULTAN AGUNG', 2016);

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

--
-- Dumping data untuk tabel `tbl_kantor`
--

INSERT INTO `tbl_kantor` (`id_user`, `nm_kantor`, `alamat_praktik`, `no_kantor`) VALUES
(19, 'KLINIK PRANATA  CAHAYA HUSADA', 'GETAS PEJATEN RT 01/ RW 03 JATI KUDUS', '08876787'),
(20, 'KLINIK PRANATA CAHAYA HUSADA', 'GETAS PEJATEN', '0827637333'),
(21, 'RSI SUNAN KUDUS', 'JL KUDIS PERMAI NO 1 KUDUS', '210435'),
(22, 'RSU KUMALA SIWI MIJEN KUDUS', 'JL JEPARA KM 6', '0217635272'),
(22, 'RSU KUMALA SIWI MIJEN KUDUS', 'JL JEPARA KM 6', '0217635272'),
(23, 'RSI SUNAN KUDUS', 'JL KUDUS PERMAI NO 1', '0218739'),
(24, 'RSU NURUSYIFA ', 'JL KUDUS PATI KM .10 JEKULO KUDUS', '0217839364'),
(25, 'RSU NURUSYIFA ', 'JL KUDUS -PATI', '02143566'),
(27, 'RS MARDIRAHAYU', 'JL KUDUS', '02145564677'),
(28, 'RS AISYAH KUDUS', 'JL HOS COKROAMINOTO NO 248 KUDUS', '09234567'),
(29, 'PRAKTIK MANDIRI', 'DS HONGGOSOCO', '08278637581'),
(30, 'RS MARDI RAHAYU', 'JL R AGIL KUSUSMO', '083535772232'),
(31, 'RS MARDI RAHAYU', 'KUDUS', '078629772'),
(33, 'RS AISYAH KUDUS', 'JL HOSCOKROAMINOTO NO 48 KUDUS', '02145678');

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
(3, 'Dokter Umum', 'DU', 'ADA'),
(4, 'Doker Sepesialis Saraf', 'DSS', 'ADA');

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

--
-- Dumping data untuk tabel `tbl_rekomendasi`
--

INSERT INTO `tbl_rekomendasi` (`id_rekomendasi`, `id_user`, `id_kategori`, `no_str`, `tgl_berakhir_str`, `tgl_mulai`, `tgl_berakhir`, `tgl_daftar`, `status_rekomendasi`) VALUES
(14, 19, 3, '31211001202185044', '2021-10-01', '2021-01-04', '2026-01-04', '2021-01-04', 'AKTIF'),
(15, 20, 3, '3121100120218507', '2021-10-01', '2021-01-04', '2026-01-04', '2021-01-04', 'AKTIF'),
(16, 21, 2, '3411100120205968', '2020-10-01', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(17, 22, 1, '331110012021', '2021-10-01', '2021-01-04', '2026-01-05', '2021-01-04', 'KASI'),
(18, 22, 1, '331110012021', '2021-10-01', NULL, NULL, '2021-01-04', 'KONFIRMASI'),
(19, 23, 2, '3339028902332', '2022-02-07', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(20, 24, 3, '33091902923', '2022-02-04', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(21, 25, 2, '33816289122', '2022-03-09', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(22, 27, 2, '33122345679887', '2021-06-07', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(23, 28, 1, '313345476687', '2021-03-31', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(24, 29, 3, '33290190213', '2022-03-21', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(25, 30, 3, '331287283123', '2020-03-06', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(26, 31, 2, '3458492302', '2025-03-04', '2021-01-04', '2026-01-05', '2021-01-04', 'AKTIF'),
(27, 33, 3, '3321101181797966', '2023-05-27', '2021-01-05', '2026-01-05', '2021-01-05', 'AKTIF');

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

--
-- Dumping data untuk tabel `tbl_sip`
--

INSERT INTO `tbl_sip` (`id_sip`, `id_rekomendasi`, `tgl_mulai`, `tgl_akhir`, `status_sip`) VALUES
(9, 14, '2021-01-04', '2021-01-03', 'AKTIF'),
(10, 15, '2021-01-04', '2026-01-04', 'AKTIF'),
(11, 14, '2021-01-04', '2026-01-04', 'AKTIF'),
(12, 17, '2021-01-04', '2026-01-05', 'AKTIF'),
(13, 23, '2021-01-04', '2026-01-05', 'AKTIF'),
(14, 16, '2021-01-04', '2026-01-05', 'AKTIF'),
(15, 19, '2021-01-04', '2026-01-05', 'AKTIF'),
(16, 21, '2021-01-04', '2026-01-05', 'AKTIF'),
(17, 22, '2021-01-04', '2026-01-05', 'AKTIF'),
(18, 26, '2021-01-04', '2026-01-05', 'AKTIF'),
(19, 20, '2021-01-04', '2026-01-05', 'AKTIF'),
(20, 25, '2021-01-04', '2026-01-05', 'AKTIF'),
(21, 24, '2021-01-04', '2026-01-05', 'AKTIF'),
(22, 27, '2021-01-05', '2026-01-05', 'AKTIF');

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
(1, 'kepala', NULL, '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KEPALA'),
(2, 'kabid', NULL, '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KABID'),
(3, 'kasi', NULL, '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'KASI'),
(6, 'admin', 'admin@gmail.com', '$2y$10$z7H6yuGSEZExEIgCG/CVoOkLydHfaZhmQ4dpeVy.MqteoG5h8HDoO', 'ADMIN'),
(19, 'Dr. YOSEPHINE IKA ADIKAWATI', 'YOSEPHINE@GMAIL.COM', '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'PEMOHON'),
(20, 'Dr. BOBY HADI', 'BOBY@GMAIL.COM', '$2y$10$0uTZE59Qf5mzlxzIPzEvh.I9z5EDVOQENats0yEYxlSgAE3E9F1Rm', 'PEMOHON'),
(21, 'dr. rizky imannur rohman', 'rizky@gmail.com', '$2y$10$F9gVRvSM.nTIz9zB00XlR.pwY12nhZ/G.tKuAMVG4MAeOxL2p1z4u', 'PEMOHON'),
(22, 'MUHAMMAD ANGGA KURNIAWAN', 'MUHAMMAD@GMAIL.COM', '$2y$10$PpCKICxkan9okYhv/XrFpeEvimh8FULq/ytwD4QV9/luVmCc2jMgq', 'PEMOHON'),
(23, 'MUHAMMAD TAUFIQ REZA', 'TAUFIQ@GMAIL.COM', '$2y$10$XPFypEEMAIgv5Jw7wXDKb.q8fr49Ey3LsiM6R8p0Qzp9v5qcj4zwe', 'PEMOHON'),
(24, 'DR FAHRUL RIZA AHMAD', 'FAHRULREJA@GMAIL.COM', '$2y$10$k0Rch8X0rIzihlL0GnYdWOW5Vn2HfNc21KBKPnG6TAnPEXWA6v8lm', 'PEMOHON'),
(25, 'DR EKO JATMIKANTO STRIO', 'EKOJATMIKANTO@GMAIL.COM', '$2y$10$UbfWncH2lnr2/4A.rBMLTegcoMitTkOIDiWage0M/suJ/TNQOHJvG', 'PEMOHON'),
(26, 'DR SONI ADI WIJAYA', 'ADIWIJAYA@GMAIL.COM', '$2y$10$xmHhMZ7V/.pc6RW7lhhAJ.SjBJx9ufgCXw0v5wlVqlKKcgEKO2F6W', 'PEMOHON'),
(27, 'SONI ADI WIJAYA', 'SONI@GMAIL.COM', '$2y$10$HhKXwtDuy.nLHjhJhWh1EevM25KGrJSLqWJT3n8qsNxOblK/2z.aC', 'PEMOHON'),
(28, 'DR INDAH ROSIANA', 'INDAH@GMAIL.COM', '$2y$10$dQ/lNw57iGfn1m7hs1NeruUgBQ0E/YKoUevzsgKAokR3GBi1/XbGC', 'PEMOHON'),
(29, 'DEVI AYU KURNIATI', 'DEVI@GMAIL.COM', '$2y$10$JIvD3DcTOYO4X6NiePWO9.wDsfDPeHz1y1lE7F.ZX7A6Gm9oi9MKq', 'PEMOHON'),
(30, 'DR MARIA YESIKA NATALIA', 'NATALIA@GMAIL.COM', '$2y$10$joWADuiKw9UP8JROAudEh.hmJU60v0LMnj1nPySz2/ODaIKlJ2HL.', 'PEMOHON'),
(31, 'STEFANI PRAMUDITA JAYA', 'STEFANI@GMAIL.COM', '$2y$10$tozCEhF8SU44dY7vcd25X.ikDU02.kQQ76C8q.w8jjcuf/ug1elIi', 'PEMOHON'),
(32, 'ifa', 'ifaseptiana@gmail.com', '$2y$10$0Lu/A5ll3VhzwHX1oeePWurU2AvThCBqQThWFnRsqg.us8xv2qiLO', 'PEMOHON'),
(33, 'dr THIMY PUTRI HARIYANI', 'THIMY@GMAIL.COM', '$2y$10$0o9aAhGwsXa35Re65tXpUe/v/iHP80l.Tr/DwdGp/1CAfl52RYgUy', 'PEMOHON');

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
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id_history` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekomendasi`
--
ALTER TABLE `tbl_rekomendasi`
  MODIFY `id_rekomendasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_sip`
--
ALTER TABLE `tbl_sip`
  MODIFY `id_sip` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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

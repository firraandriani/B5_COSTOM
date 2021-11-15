-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2021 pada 07.20
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampung_coklat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(60) COLLATE utf8_bin NOT NULL,
  `grup` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `grup`) VALUES
(1, 'Sewa', 'status_lahan'),
(2, 'Milik Pribadi', 'status_lahan'),
(3, 'Bakung', 'kecamatan'),
(4, 'Binangun', 'kecamatan'),
(5, 'Doko', 'kecamatan'),
(6, 'Gandusari', 'kecamatan'),
(7, 'Garum', 'kecamatan'),
(8, 'Kademangan', 'kecamatan'),
(9, 'Kanigoro', 'kecamatan'),
(10, 'Kesamben', 'kecamatan'),
(11, 'Nglegok', 'kecamatan'),
(12, 'Panggungrejo', 'kecamatan'),
(13, 'Ponggok', 'kecamatan'),
(14, 'Sanankulon', 'kecamatan'),
(15, 'Selorejo', 'kecamatan'),
(16, 'Selopuro', 'kecamatan'),
(17, 'Srengat', 'kecamatan'),
(18, 'Sutojayan', 'kecamatan'),
(19, 'Talun', 'kecamatan'),
(20, 'Udanawu', 'kecamatan'),
(21, 'Wates', 'kecamatan'),
(22, 'Wlingi', 'kecamatan'),
(23, 'Wonodadi', 'kecamatan'),
(24, 'Wonotirto', 'kecamatan'),
(25, 'Aktif', 'status_anggota'),
(26, 'Tidak Aktif', 'status_anggota'),
(27, 'Kering', 'status_kakao'),
(28, 'Basah', 'status_kakao');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petani`
--

CREATE TABLE `petani` (
  `id_petani` int(11) NOT NULL,
  `nama_petani` varchar(60) COLLATE utf8_bin NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_kec` int(11) NOT NULL,
  `status_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `petani`
--

INSERT INTO `petani` (`id_petani`, `nama_petani`, `tanggal_lahir`, `alamat_kec`, `status_anggota`) VALUES
(2, 'Suwarno', '1972-01-06', 8, 25),
(3, 'Eko', '1973-10-12', 8, 25),
(4, 'Noto', '1968-10-13', 8, 25),
(8, 'Karyono', '1953-09-27', 24, 25),
(9, 'Handoko', '1965-05-06', 8, 25),
(10, 'Edi', '1985-06-01', 3, 25),
(11, 'Sukarli', '1966-07-06', 24, 25),
(12, 'Mustaji', '1948-03-26', 9, 25),
(13, 'Basori', '1958-12-01', 11, 25),
(14, 'Harsono', '1960-04-13', 8, 25),
(15, 'Samsul', '1953-08-02', 5, 25),
(16, 'Topik', '1968-07-02', 13, 25),
(17, 'Ridwan', '1975-05-02', 3, 25),
(18, 'Amin', '1973-03-05', 20, 25),
(19, 'Sindu', '1968-05-19', 20, 25),
(20, 'Didik', '1976-06-21', 10, 25),
(21, 'Agus', '1963-11-06', 20, 25),
(22, 'Dayat', '1972-05-22', 6, 25),
(25, 'Subandi', '1975-07-11', 6, 25),
(26, 'Hari Setiawan', '1984-02-24', 18, 26),
(27, 'Supryono', '1982-01-03', 7, 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(30) COLLATE utf8_bin NOT NULL,
  `berat_bersih` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `produksi_kakao_kering` int(11) NOT NULL,
  `produksi_kakao_basah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `berat_bersih`, `harga`, `produksi_kakao_kering`, `produksi_kakao_basah`) VALUES
(1, 'Bar Crispy', 45, 12100, 16, 13),
(2, 'Bar Dark 100%', 55, 19950, 12, 9),
(3, 'Bar Dark 90%', 55, 17850, 13, 10),
(4, 'Bar Dark 80%', 55, 15750, 14, 11),
(5, 'Bar Dark 67%', 45, 12100, 16, 13),
(7, 'Bar Love Milk ', 60, 12600, 8, 5),
(8, 'Bar Love Original', 80, 12600, 10, 7),
(9, 'Bar Milk', 45, 12100, 16, 13),
(10, 'Bar Original', 45, 12100, 18, 15),
(11, 'Bubuk Murni', 100, 13650, 9, 6),
(12, 'Bubuk Original', 100, 13650, 8, 5),
(13, 'Carang Mas Coklat', 450, 33000, 18, 15),
(14, 'Kripik Pisang', 100, 30000, 30, 27),
(15, 'Kripik Ubi Coklat', 450, 30000, 18, 15),
(16, 'Permen Tape Coklat', 250, 18000, 20, 17),
(17, 'Bubuk Strawberry ', 100, 13650, 7, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_kakao`
--

CREATE TABLE `stok_kakao` (
  `id_stok` int(11) NOT NULL,
  `tanggal_setor` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nama_petani` int(11) NOT NULL,
  `stok_masuk` int(11) NOT NULL,
  `status_kakao` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `stok_kakao`
--

INSERT INTO `stok_kakao` (`id_stok`, `tanggal_setor`, `nama_petani`, `stok_masuk`, `status_kakao`, `harga`) VALUES
(1, '2019-01-04 06:19:16', 2, 476, 28, 15000),
(2, '2019-01-05 06:19:25', 3, 501, 27, 25000),
(3, '2019-01-07 06:19:30', 4, 382, 28, 15000),
(6, '2019-01-09 06:19:36', 8, 654, 27, 25000),
(7, '2019-01-10 04:23:52', 11, 416, 27, 25000),
(8, '2019-01-11 04:24:07', 13, 576, 28, 15000),
(9, '2019-01-12 04:24:21', 15, 511, 28, 15000),
(12, '2019-01-14 04:25:33', 17, 589, 27, 25000),
(13, '2019-01-17 04:25:48', 10, 571, 28, 15000),
(14, '2019-01-18 04:26:01', 12, 364, 27, 25000),
(15, '2019-01-19 04:26:13', 14, 562, 28, 15000),
(16, '2019-01-19 04:26:28', 9, 531, 28, 15000),
(17, '2019-01-20 04:27:18', 20, 231, 27, 25000),
(19, '2019-01-21 04:29:11', 18, 654, 28, 15000),
(27, '2019-02-02 06:05:38', 25, 416, 28, 15000),
(28, '2019-03-23 06:06:12', 27, 576, 27, 15000),
(29, '2019-04-03 06:30:07', 21, 576, 27, 25000),
(30, '2019-05-05 06:30:26', 18, 416, 27, 25000),
(31, '2019-05-07 06:30:26', 13, 287, 28, 15000),
(32, '2019-05-08 06:30:26', 22, 654, 28, 15000),
(33, '2019-05-08 06:30:26', 20, 488, 27, 25000),
(34, '2019-05-08 06:30:26', 10, 576, 28, 15000),
(35, '2019-05-10 06:30:26', 3, 531, 27, 25000),
(37, '2019-05-11 06:30:26', 14, 364, 28, 15000),
(38, '2019-05-11 06:30:26', 8, 571, 27, 25000),
(39, '2019-05-13 06:30:26', 12, 582, 28, 15000),
(41, '2019-05-14 06:30:26', 17, 498, 27, 25000),
(42, '2019-05-16 06:30:26', 15, 543, 28, 15000),
(44, '2019-06-20 06:30:26', 25, 363, 28, 15000),
(45, '2019-06-21 06:30:26', 11, 387, 27, 25000),
(46, '2019-07-26 06:30:26', 27, 571, 27, 25000),
(47, '2019-08-02 06:30:26', 16, 476, 27, 25000),
(48, '2019-08-02 06:30:26', 2, 454, 28, 15000),
(50, '2019-09-02 06:30:26', 11, 542, 28, 15000),
(51, '2019-09-04 07:07:37', 25, 341, 28, 15000),
(52, '2019-09-05 06:30:26', 19, 512, 28, 15000),
(53, '2019-09-06 06:30:26', 15, 321, 27, 25000),
(54, '2019-09-07 07:07:27', 17, 512, 28, 15000),
(55, '2019-09-07 06:30:26', 4, 231, 27, 25000),
(56, '2019-09-07 06:30:26', 12, 545, 28, 15000),
(57, '2019-09-08 06:30:26', 8, 562, 28, 15000),
(58, '2019-09-08 06:52:16', 14, 456, 28, 15000),
(59, '2019-09-08 06:52:16', 9, 523, 28, 15000),
(60, '2019-09-10 06:52:16', 3, 323, 27, 25000),
(61, '2019-09-11 06:52:16', 10, 361, 27, 25000),
(62, '2019-09-13 06:52:16', 20, 567, 28, 15000),
(65, '2019-09-17 07:07:10', 21, 398, 27, 25000),
(66, '2019-10-29 06:52:16', 17, 226, 27, 25000),
(67, '2019-11-30 06:52:16', 18, 531, 28, 25000),
(68, '2019-12-02 07:17:40', 27, 476, 28, 15000),
(70, '2020-01-04 07:17:40', 22, 498, 27, 25000),
(71, '2020-01-05 07:17:40', 21, 231, 27, 25000),
(73, '2020-01-08 07:17:40', 19, 562, 28, 15000),
(74, '2020-01-09 07:17:40', 18, 387, 28, 25000),
(75, '2020-01-09 07:17:40', 17, 521, 27, 25000),
(76, '2020-01-11 07:17:40', 16, 592, 28, 15000),
(79, '2020-01-14 07:17:40', 13, 231, 27, 25000),
(80, '2020-01-15 07:17:40', 12, 123, 27, 25000),
(81, '2020-01-16 07:17:40', 11, 452, 27, 25000),
(82, '2020-02-21 07:17:40', 10, 333, 28, 15000),
(83, '2020-03-23 07:17:40', 20, 521, 28, 15000),
(84, '2020-03-25 07:17:40', 4, 234, 27, 25000),
(86, '2020-04-30 07:17:40', 2, 520, 28, 15000),
(87, '2020-04-01 07:17:40', 19, 476, 27, 25000),
(88, '2020-05-03 07:25:34', 20, 429, 28, 15000),
(89, '2020-05-04 07:25:34', 21, 428, 27, 25000),
(90, '2020-05-05 07:25:34', 25, 543, 27, 25000),
(93, '2020-05-06 07:25:34', 4, 364, 28, 15000),
(94, '2020-05-08 07:25:34', 8, 511, 28, 15000),
(95, '2020-05-09 07:25:34', 12, 412, 27, 25000),
(97, '2020-06-14 07:25:34', 11, 125, 27, 25000),
(98, '2020-06-16 07:25:34', 15, 433, 27, 25000),
(99, '2020-06-17 07:25:34', 9, 123, 27, 25000),
(100, '2020-07-27 07:25:34', 15, 422, 28, 15000),
(101, '2020-08-31 07:25:34', 17, 597, 28, 15000),
(102, '2020-08-01 07:25:34', 14, 501, 28, 15000),
(103, '2020-09-01 07:25:34', 9, 429, 28, 15000),
(104, '2020-09-02 07:34:53', 3, 428, 28, 15000),
(105, '2020-09-04 07:34:53', 10, 543, 28, 15000),
(106, '2020-09-05 07:25:34', 20, 346, 28, 15000),
(107, '2020-09-06 07:34:53', 22, 363, 28, 15000),
(108, '2020-09-08 07:34:53', 13, 364, 27, 25000),
(109, '2020-09-08 07:34:53', 21, 312, 27, 25000),
(110, '2020-09-10 07:34:53', 18, 422, 27, 25000),
(111, '2020-09-12 07:34:53', 8, 345, 28, 15000),
(114, '2020-09-15 07:34:53', 17, 223, 28, 25000),
(116, '2020-09-17 07:34:53', 19, 517, 28, 15000),
(117, '2020-09-18 07:34:53', 25, 121, 27, 25000),
(118, '2020-10-21 07:34:53', 11, 532, 28, 15000),
(119, '2020-11-24 07:34:53', 27, 331, 27, 25000),
(120, '2020-11-26 07:34:53', 2, 287, 27, 25000),
(121, '2020-12-28 07:34:53', 16, 522, 28, 15000),
(122, '2021-11-08 09:08:59', 2, 10, 28, 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_keluar_kakao`
--

CREATE TABLE `stok_keluar_kakao` (
  `id_keluar_kakao` int(11) NOT NULL,
  `tanggal_keluar` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_produk` int(11) NOT NULL,
  `stok_keluar` int(11) NOT NULL,
  `status_kakao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `stok_keluar_kakao`
--

INSERT INTO `stok_keluar_kakao` (`id_keluar_kakao`, `tanggal_keluar`, `nama_produk`, `stok_keluar`, `status_kakao`) VALUES
(1, '2020-10-22 14:50:00', 2, 2002, 27),
(2, '2021-10-22 14:51:37', 3, 200, 28),
(3, '2021-10-22 14:54:16', 3, 2002, 28),
(6, '2021-10-22 15:00:01', 3, 200, 28),
(7, '2021-10-23 01:14:58', 1, 12, 27),
(8, '2021-10-23 01:15:11', 1, 11, 27),
(10, '2021-10-30 04:09:01', 4, 12, 27),
(11, '2021-11-01 08:10:48', 8, 11, 27),
(12, '2021-11-08 07:55:00', 1, 199, 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_keluar_produk`
--

CREATE TABLE `stok_keluar_produk` (
  `id_keluar_produk` int(11) NOT NULL,
  `tanggal_keluar` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_produk` int(11) NOT NULL,
  `stok_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `stok_keluar_produk`
--

INSERT INTO `stok_keluar_produk` (`id_keluar_produk`, `tanggal_keluar`, `nama_produk`, `stok_keluar`) VALUES
(1, '2021-10-22 16:55:51', 2, 11),
(2, '2021-10-22 16:55:51', 3, 122),
(3, '2021-10-29 08:33:08', 2, 11),
(4, '2021-10-29 14:25:04', 1, 11),
(5, '2021-10-30 04:11:34', 3, 12),
(6, '2021-11-01 08:12:09', 2, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_masuk_produk`
--

CREATE TABLE `stok_masuk_produk` (
  `id_masuk_produk` int(11) NOT NULL,
  `tanggal_masuk` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_produk` int(11) NOT NULL,
  `stok_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `stok_masuk_produk`
--

INSERT INTO `stok_masuk_produk` (`id_masuk_produk`, `tanggal_masuk`, `nama_produk`, `stok_masuk`) VALUES
(1, '2021-10-22 16:56:09', 2, 11),
(2, '2021-10-22 16:56:09', 3, 12),
(3, '2021-11-23 07:25:14', 2, 15),
(5, '2021-11-01 08:11:53', 4, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(10) COLLATE utf8_bin NOT NULL,
  `nama` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`) VALUES
(1, 'kholidmustofa@gmaill.com', '1234', 'H. Kholid Mustofa'),
(2, 'lilik@gmail.com', '1234', 'Lilik Fitriani'),
(3, 'muhammadAladin@gmail.com', '1234', 'Muhammad Aladin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id_petani`),
  ADD KEY `alamat_kec` (`alamat_kec`),
  ADD KEY `status_anggota` (`status_anggota`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `stok_kakao`
--
ALTER TABLE `stok_kakao`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `nama_petani` (`nama_petani`);

--
-- Indeks untuk tabel `stok_keluar_kakao`
--
ALTER TABLE `stok_keluar_kakao`
  ADD PRIMARY KEY (`id_keluar_kakao`),
  ADD KEY `nama_produk` (`nama_produk`);

--
-- Indeks untuk tabel `stok_keluar_produk`
--
ALTER TABLE `stok_keluar_produk`
  ADD PRIMARY KEY (`id_keluar_produk`),
  ADD KEY `nama_produk` (`nama_produk`);

--
-- Indeks untuk tabel `stok_masuk_produk`
--
ALTER TABLE `stok_masuk_produk`
  ADD PRIMARY KEY (`id_masuk_produk`),
  ADD KEY `nama_produk` (`nama_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `petani`
--
ALTER TABLE `petani`
  MODIFY `id_petani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `stok_kakao`
--
ALTER TABLE `stok_kakao`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `stok_keluar_kakao`
--
ALTER TABLE `stok_keluar_kakao`
  MODIFY `id_keluar_kakao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `stok_keluar_produk`
--
ALTER TABLE `stok_keluar_produk`
  MODIFY `id_keluar_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `stok_masuk_produk`
--
ALTER TABLE `stok_masuk_produk`
  MODIFY `id_masuk_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `petani`
--
ALTER TABLE `petani`
  ADD CONSTRAINT `petani_ibfk_1` FOREIGN KEY (`alamat_kec`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `petani_ibfk_2` FOREIGN KEY (`status_anggota`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `stok_kakao`
--
ALTER TABLE `stok_kakao`
  ADD CONSTRAINT `stok_kakao_ibfk_1` FOREIGN KEY (`nama_petani`) REFERENCES `petani` (`id_petani`);

--
-- Ketidakleluasaan untuk tabel `stok_keluar_kakao`
--
ALTER TABLE `stok_keluar_kakao`
  ADD CONSTRAINT `stok_keluar_kakao_ibfk_1` FOREIGN KEY (`nama_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `stok_keluar_produk`
--
ALTER TABLE `stok_keluar_produk`
  ADD CONSTRAINT `stok_keluar_produk_ibfk_1` FOREIGN KEY (`nama_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `stok_masuk_produk`
--
ALTER TABLE `stok_masuk_produk`
  ADD CONSTRAINT `stok_masuk_produk_ibfk_1` FOREIGN KEY (`nama_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

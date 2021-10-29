-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2021 pada 02.11
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
(1, 'Coklat Putih', 200, 10000, 12, 18),
(2, 'Coklat', 122, 10000, 11, 111),
(3, 'Coklatd', 200, 15000, 400, 23),
(4, 'Coklat Stroberi', 200, 15000, 400, 23),
(5, 'Coklat1', 200, 15000, 400, 23),
(6, 'Coklat Strobe1ri', 200, 15000, 400, 23),
(7, 'Coklatd12', 200, 15000, 400, 12),
(8, 'Coklat 11', 200, 15000, 400, 23),
(9, 'Coklat dww', 200, 122, 400, 23),
(10, 'Coklat Vanila44', 2001, 15000, 400, 12),
(11, 'Coklat sqq', 200, 25000, 400, 23),
(12, 'Coklat Stroberih', 200, 15000, 400, 23);

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
(1, '2021-10-14 04:21:30', 2, 476, 28, 15000),
(2, '2021-10-14 04:21:47', 3, 501, 27, 25000),
(3, '2021-10-14 04:22:34', 4, 382, 28, 15000),
(6, '2021-10-14 04:22:48', 8, 654, 27, 25000),
(7, '2021-10-14 04:23:52', 11, 416, 27, 25000),
(8, '2021-10-14 04:24:07', 13, 576, 28, 15000),
(9, '2021-10-14 04:24:21', 15, 511, 28, 15000),
(10, '2021-10-14 04:24:43', 19, 443, 27, 25000),
(11, '2021-10-14 04:25:16', 22, 483, 28, 15000),
(12, '2021-10-14 04:25:33', 17, 589, 27, 25000),
(13, '2021-10-14 04:25:48', 10, 571, 28, 15000),
(14, '2021-10-14 04:26:01', 12, 364, 27, 25000),
(15, '2021-10-14 04:26:13', 14, 562, 28, 15000),
(16, '2021-10-14 04:26:28', 9, 531, 28, 15000),
(17, '2021-10-14 04:27:18', 20, 231, 27, 25000),
(18, '2021-10-14 04:28:31', 16, 488, 28, 15000),
(19, '2021-10-14 04:29:11', 18, 654, 28, 15000),
(20, '2021-10-14 04:29:45', 21, 287, 27, 25000),
(21, '2021-10-14 04:30:03', 20, 574, 28, 25000),
(22, '2021-10-14 04:30:47', 27, 482, 28, 15000);

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
(1, '2021-10-22 14:50:00', 2, 2002, 27),
(2, '2021-10-22 14:51:37', 3, 200, 28),
(3, '2021-10-22 14:54:16', 3, 2002, 28),
(6, '2021-10-22 15:00:01', 3, 200, 28),
(7, '2021-10-23 01:14:58', 1, 12, 27),
(8, '2021-10-23 01:15:11', 1, 11, 27);

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
(1, '2021-10-22 16:55:51', 2, 200),
(2, '2021-10-22 16:55:51', 3, 122);

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
(1, '2021-10-22 16:56:09', 2, 200),
(2, '2021-10-22 16:56:09', 3, 12),
(3, '2021-10-23 07:25:14', 2, 15),
(4, '2021-10-23 07:27:04', 4, 11);

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
  ADD PRIMARY KEY (`id_petani`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `stok_kakao`
--
ALTER TABLE `stok_kakao`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indeks untuk tabel `stok_keluar_kakao`
--
ALTER TABLE `stok_keluar_kakao`
  ADD PRIMARY KEY (`id_keluar_kakao`);

--
-- Indeks untuk tabel `stok_keluar_produk`
--
ALTER TABLE `stok_keluar_produk`
  ADD PRIMARY KEY (`id_keluar_produk`);

--
-- Indeks untuk tabel `stok_masuk_produk`
--
ALTER TABLE `stok_masuk_produk`
  ADD PRIMARY KEY (`id_masuk_produk`);

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
  MODIFY `id_petani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `stok_kakao`
--
ALTER TABLE `stok_kakao`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `stok_keluar_kakao`
--
ALTER TABLE `stok_keluar_kakao`
  MODIFY `id_keluar_kakao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `stok_keluar_produk`
--
ALTER TABLE `stok_keluar_produk`
  MODIFY `id_keluar_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `stok_masuk_produk`
--
ALTER TABLE `stok_masuk_produk`
  MODIFY `id_masuk_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `petani_ibfk_1` FOREIGN KEY (`id_petani`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `stok_kakao`
--
ALTER TABLE `stok_kakao`
  ADD CONSTRAINT `stok_kakao_ibfk_1` FOREIGN KEY (`id_stok`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

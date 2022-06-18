-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2022 pada 02.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konseling`
--

CREATE TABLE `konseling` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `paket` varchar(64) NOT NULL,
  `harga` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konseling`
--

INSERT INTO `konseling` (`id`, `admin`, `paket`, `harga`, `poster`) VALUES
(25, 1, 'a', 2, '1655470126.png'),
(31, 1, 'konseling5', 12, '1655483636.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `transfer` varchar(32) NOT NULL,
  `tujuan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `transfer`, `tujuan`) VALUES
(1, 'BCA', '126085203003894'),
(2, 'Mandiri', '896085203003894'),
(3, 'DANA', '085203003894'),
(4, 'OVO', '085203003894'),
(5, 'GoPay', '085203003894');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_konseling`
--

CREATE TABLE `pesan_konseling` (
  `id` int(11) NOT NULL,
  `konseling` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `noWa` decimal(13,0) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan_konseling`
--

INSERT INTO `pesan_konseling` (`id`, `konseling`, `user`, `nama`, `email`, `noWa`, `gender`, `tgl_lahir`, `pembayaran`, `bukti`) VALUES
(9, 13, 5, 'Tsaqib Abyan', 'albayaaan.z@gmail.com', '1', 'laki-laki', '2022-06-23', 1, '1655482110.png'),
(10, 13, 5, 'Tsaqib Abyan', 'albayaaan.z@gmail.com', '1', 'laki-laki', '2022-07-01', 1, '1655482330.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_webinar`
--

CREATE TABLE `pesan_webinar` (
  `id` int(11) NOT NULL,
  `webinar` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `noWa` decimal(13,0) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan_webinar`
--

INSERT INTO `pesan_webinar` (`id`, `webinar`, `user`, `nama`, `email`, `noWa`, `gender`, `tgl_lahir`, `pembayaran`, `bukti`) VALUES
(9, 25, 5, 'Tsaqib Abyan', 'albayaaan.z@gmail.com', '2', 'laki-laki', '2022-06-09', 1, '1655482679.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'abyan', 'abyan@gmail.com', 'abyan000'),
(5, 'Abyan', 'albayaaan.z@gmail.com', 'abyan000'),
(7, 'rojiki', 'rojiki@oke', 'rojiki00'),
(8, 'joko', 'jok@gmail.com', 'joko0000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `webinar`
--

CREATE TABLE `webinar` (
  `id` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `topik` varchar(128) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `webinar`
--

INSERT INTO `webinar` (`id`, `admin`, `topik`, `jam`, `tanggal`, `harga`, `poster`) VALUES
(27, 1, 'webinar3', '19:53:00', '2022-06-29', 12, '1655470444.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `konseling`
--
ALTER TABLE `konseling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_konseling`
--
ALTER TABLE `pesan_konseling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `konseling` (`konseling`),
  ADD KEY `pembayaran` (`pembayaran`),
  ADD KEY `user` (`user`);

--
-- Indeks untuk tabel `pesan_webinar`
--
ALTER TABLE `pesan_webinar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webinar` (`webinar`),
  ADD KEY `pembayaran` (`pembayaran`),
  ADD KEY `user` (`user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `webinar`
--
ALTER TABLE `webinar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konseling`
--
ALTER TABLE `konseling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesan_konseling`
--
ALTER TABLE `pesan_konseling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pesan_webinar`
--
ALTER TABLE `pesan_webinar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `webinar`
--
ALTER TABLE `webinar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konseling`
--
ALTER TABLE `konseling`
  ADD CONSTRAINT `konseling_ibfk_1` FOREIGN KEY (`admin`) REFERENCES `admin` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesan_konseling`
--
ALTER TABLE `pesan_konseling`
  ADD CONSTRAINT `pesan_konseling_ibfk_1` FOREIGN KEY (`pembayaran`) REFERENCES `pembayaran` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_konseling_ibfk_2` FOREIGN KEY (`konseling`) REFERENCES `konseling` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_konseling_ibfk_3` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan_webinar`
--
ALTER TABLE `pesan_webinar`
  ADD CONSTRAINT `pesan_webinar_ibfk_1` FOREIGN KEY (`pembayaran`) REFERENCES `pembayaran` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_webinar_ibfk_2` FOREIGN KEY (`webinar`) REFERENCES `webinar` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_webinar_ibfk_3` FOREIGN KEY (`user`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `webinar`
--
ALTER TABLE `webinar`
  ADD CONSTRAINT `webinar_ibfk_1` FOREIGN KEY (`admin`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

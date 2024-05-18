-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2024 pada 06.45
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nomor`, `email`, `jurusan`, `gambar`) VALUES
(2, 'jamaro', '0812345678', 'jamaro@gmail.com', 'sija', 'jamaro.jpeg  '),
(3, 'radit', '081346261', 'radit@gmail.com', 'sija', 'radit.jpeg '),
(4, 'hanif', '0875474543', 'hanif@gmail.com', 'sija', 'hanif.jpeg'),
(5, 'syamsul', '089869765', 'syamsul@gmail.com', 'sija', 'syamsul.jpeg'),
(6, 'amri', '0756779869', 'amri@gmail.com', 'sija', 'amri.jpeg'),
(7, 'reynaldi', '086786795', 'reynaldi@gmail.com', 'sija', 'reynaldi.jpeg'),
(8, 'raya', '0877547663', 'raya@gmail.com', 'sija', 'raya.jpeg'),
(37, 'reyval', '0818657432', 'reyvala@gmail.com', 'sija', 'reyval.jpeg'),
(38, 'abiyu', '087547453', 'abiyu@gmail.com', 'sija', 'abiyu.jpeg'),
(61, 'fariz', '098869543', 'fariz@gmail.com', 'sija', '65f291f11fa45.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'jamarosaragih', '$2y$10$CusDCcGsZJ2YIi1F4.GJ1uhAsrpzpgvLevz/8NdZMXU.1ciCZk0S.'),
(2, 'admin', '$2y$10$XnXx8cyNlLP26Fgd1g9sPemPs6bKpNktvq4xbSZfyAHyggPxbzAia'),
(4, 'angga', '$2y$10$.YOyLXs8fSC9jSrLU652jeExTj3iZsHinaLwnzel/DWVgXSJMq4Eq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

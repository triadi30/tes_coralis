-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Jun 2021 pada 12.11
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemlogin2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `is_active`, `date_created`) VALUES
(13, 'Triadi Kurniawan', 'triadikurniawan56000@gmail.com', '3x4-edit1.jpg', '$2y$10$ELTXjOhhMhJSSOtQW0rbg.xMHI7Vfcev1ElA4GvZ3ogYFTSoCpkFW', 0, 1622761663),
(14, 'Triadi Kurniawan', 'triadikurniawan560ss@gmail.com', '3x4-edit2.jpg', '$2y$10$a0IadEEPtQbb5A65AkOXY.oeJ4VIeSCIDwNKJUpiWL4HlDotQ.8L2', 1, 1622761771),
(15, 'Triadi Kurniawan', 'triadikurniawan5610@gmail.com', '473KTP4.jpg', '$2y$10$R1jWgswp5Io/9EbU1pp9DeP/plHZqCEVjPfT1u6Lq67TvYoqkwqYq', 1, 1622807329),
(16, 'Sarini', 'mufarakah2s@gmail.com', '4356admin1.jpg', '$2y$10$fXuRkFepl7masgZefFvGj.Z0jCfBD9AhXofsqGnW.F8u.L.bcOH.y', 0, 1622807493);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(3, 'triadikurniawan56000@gmail.com', '3rqnZmB/elpVq5TtbKeKudCAhkAcjWQZTQKIjPkE05Q=', '1622761663'),
(5, 'mufarakah2s@gmail.com', 'zrtg/izTdXufR/qWtwh9eslw2575V319Oyn+BT5n3+I=', '1622807493');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2023 pada 15.18
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautyandthebeast`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_karakter`
--

CREATE TABLE `deskripsi_karakter` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `karakter` varchar(250) NOT NULL,
  `quotes` text NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `deskripsi_karakter`
--

INSERT INTO `deskripsi_karakter` (`id`, `deskripsi`, `karakter`, `quotes`, `foto`) VALUES
(30, 'Lumière, the charismatic candelabra under the Enchantress\'s spell, adds warmth and humor to the enchanted castle. His rebellious spirit and kindness play a crucial role in the story\'s magical unfolding.', 'Lumiere', '\"In the enchanted castle, kindness is the key that breaks the curse.\"', 'img/lumiere.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(16, 'operator', '$2y$10$u7sEwi46KP1qjGNQYj9./eh9GWKuPuaxYRVPzMsVwPk0ZJs3ytTZC', 'admin'),
(26, '1', '$2y$10$Mt.uCOF47pN8zp5o6HA/NeDr.GB2jl4oOhD8YNswMtXwi.6fBoBGy', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `deskripsi_karakter`
--
ALTER TABLE `deskripsi_karakter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `deskripsi_karakter`
--
ALTER TABLE `deskripsi_karakter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

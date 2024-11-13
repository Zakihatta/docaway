-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2023 pada 14.36
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdocaway`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `iddokter` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomorhp` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_app` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isiberita` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `beranda`
--

INSERT INTO `beranda` (`id`, `judul`, `tanggal`, `isiberita`) VALUES
(1, 'Bringing World-Class Healthcare to Your Doorstep', '2023-06-01', 'Selamat datang di halaman beranda Admin DocAway! \n\nMelalui halaman beranda Admin ini, Anda dapat melakukan berbagai tugas penting. Anda dapat menambahkan dokter baru ke dalam sistem kami, mengelola data rumah sakit, serta melihat dan memperbarui informasi yang ada. Kami memastikan bahwa setiap langkah yang Anda ambil di halaman ini memberikan kemudahan dan keamanan dalam pengelolaan data kesehatan.\n\nSelain itu, kami menyediakan menu jelajah yang memungkinkan Anda dengan mudah mengakses berbagai fitur penting. Anda dapat dengan cepat mencari dan menampilkan data, mengubah data yang ada, dan juga memperoleh petunjuk dalam menggunakan platform kami.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `iddokter` int(11) NOT NULL,
  `namadokter` varchar(100) NOT NULL,
  `spesialisasi` varchar(50) NOT NULL,
  `kualifikasi` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `jadwalkonsultasi` varchar(255) NOT NULL,
  `rumahsakit` enum('Cengild Medical Centre','AlTY orthopedic hospital','Sunway Medical Centre') NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`iddokter`, `namadokter`, `spesialisasi`, `kualifikasi`, `foto`, `jadwalkonsultasi`, `rumahsakit`, `createdat`) VALUES
(6, 'Rahardian', 'Bedah Saraf', 'Harvard', 'download (1).jpeg', 'Rabu', 'AlTY orthopedic hospital', '2023-06-01 06:55:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `NIM` int(50) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `footer`
--

INSERT INTO `footer` (`id`, `NIM`, `namalengkap`, `prodi`) VALUES
(1, 22343083, 'Zaki Hatta', 'Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petunjuk`
--

CREATE TABLE `petunjuk` (
  `idpetunjuk` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `keterangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`iduser`, `namalengkap`, `username`, `password`, `createdat`) VALUES
(1, 'Zaki Hatta', 'admin', '918dba1e5b053c3ae4aef690a7aa8585', '2023-05-31 12:45:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`iddokter`);

--
-- Indeks untuk tabel `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petunjuk`
--
ALTER TABLE `petunjuk`
  ADD PRIMARY KEY (`idpetunjuk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `iddokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petunjuk`
--
ALTER TABLE `petunjuk`
  MODIFY `idpetunjuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

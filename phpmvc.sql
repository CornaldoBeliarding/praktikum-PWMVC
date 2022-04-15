-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2022 pada 17.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `kode_mk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `kode_mk`) VALUES
(8, 'Cornaldo Beliarding Sucahyo', '190535646027', 'cornaldobeliarding@gmail.com', 'Teknik Informatika', 'NINF0034'),
(9, 'Andreas Ineasta', '190592301827', 'andreas@gmail.com', 'Sistem Informasi', 'NINF0034'),
(10, 'Rodrigoex Santoni', '1792638819281', 'rodrigoex@gmail.com', 'Manajemen Informatika', 'NICF0134'),
(11, 'Leonel Messi', '186392736820', 'leonel@gmail.com', 'Teknik Informatika', 'NINF0111'),
(12, 'Neymar Da Silva', '273027391638', 'neymar@gmail.com', 'Teknik Informatika', 'NINF0603'),
(13, 'Gerrad Pique', '175639206735', 'gerrad@gmail.com', 'Sistem Informasi', 'NINF1821'),
(14, 'Ajjen Robben', '167839263827', 'ajjen@gmail.com', 'Manajemen Informasi', 'NINF0201'),
(16, 'francesco', '190535647028', 'frenchlime2@lbzannualj.com', 'Manajemen Informasi', 'NINF0603');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(225) NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `sks` varchar(255) NOT NULL,
  `dosen_mk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kode_mk`, `nama_mk`, `sks`, `dosen_mk`) VALUES
(1, 'NINF0034', 'Pemrograman Web', '3', 'Achmad Hamdan'),
(2, 'NICF0134', 'Pemrograman Berorientasi Object', '3', 'Azhar Samaradhigta'),
(3, 'NINF0111', 'Pemrograman Deklaratif', '3', 'Agusta Rahmat Taufani'),
(4, 'NINF0603', 'Pemrograman Dasar', '3', 'Utomo Pujianto'),
(5, 'NINF1821', 'Struktur Data', '3', 'Yuni Rahmawati'),
(6, 'NINF0201', 'Pemrograman Mobile', '3', 'M. Ashar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2024 pada 12.34
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_nilai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` int(11) NOT NULL,
  `nama_mhs` varchar(200) NOT NULL,
  `nim` varchar(200) NOT NULL,
  `nilai_UAS` int(11) NOT NULL,
  `nilai_UTS` int(11) NOT NULL,
  `nilai_TUGAS` int(11) NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `hasil_nilai_akhir` double NOT NULL,
  `grade` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `nama_mhs`, `nim`, `nilai_UAS`, `nilai_UTS`, `nilai_TUGAS`, `pertemuan`, `hasil_nilai_akhir`, `grade`, `keterangan`) VALUES
(4, 'albertuss', '0904215615', 90, 100, 80, 13, 74.6, 'B\r\n    ', 'LULUS'),
(5, 'Kylian Mbapee', '12345678', 70, 90, 100, 14, 71.3, 'B\r\n    ', 'LULUS'),
(6, 'Kylian Mbapee ronaldo', '1234567892', 100, 100, 100, 13, 82.6, 'A\r\n    ', 'LULUS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

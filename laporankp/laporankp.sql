-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2020 pada 12.50
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporankp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugaskp`
--

CREATE TABLE `tugaskp` (
  `no` int(10) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` varchar(200) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tugaskp`
--

INSERT INTO `tugaskp` (`no`, `kode_barang`, `nama_barang`, `jumlah_barang`, `tgl_masuk`) VALUES
(1, 'AB01', 'Mouse', '50', '2019-12-22'),
(5, 'AB04', 'Pulpen', '150', '2019-12-22'),
(11, 'AB09', 'Printer', '10', '2019-12-23'),
(12, 'AB-02', 'Galon', '20', '2020-08-08'),
(14, 'AB06', 'Laptop', '20', '2020-08-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  `password2` int(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `password2`, `email`) VALUES
(1, '', 0, 0, ''),
(2, '', 0, 0, ''),
(3, '', 0, 0, ''),
(4, '', 0, 0, ''),
(5, '', 0, 0, ''),
(6, '', 0, 0, ''),
(7, '', 0, 0, ''),
(8, '', 0, 0, ''),
(9, '', 0, 0, ''),
(10, '', 0, 0, ''),
(11, '', 0, 0, ''),
(12, '', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tugaskp`
--
ALTER TABLE `tugaskp`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tugaskp`
--
ALTER TABLE `tugaskp`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2020 pada 17.06
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `receptionist`
--

CREATE TABLE `receptionist` (
  `id_recept` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kode_recept` varchar(10) NOT NULL COMMENT 'Kode Resepsionis',
  `nama_recept` varchar(255) NOT NULL COMMENT 'Nama Resepsionis',
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `receptionist`
--

INSERT INTO `receptionist` (`id_recept`, `username`, `password`, `kode_recept`, `nama_recept`, `tmp_lahir`, `tgl_lahir`, `alamat`, `no_telp`) VALUES
(1, 'ardhito_p', '81dc9bdb52d04dc20036dbd8313ed055', 'L001', 'Ardhito Pranoto', 'Surabaya', '1996-03-26', 'Jl. Watu Kodok No.05 ', '081234567890'),
(2, 'anjas_', '81dc9bdb52d04dc20036dbd8313ed055', 'L002', 'Anjasmarah', 'Semarang', '1997-05-15', 'Jl. Bola Basket No. 35 ', '089876543210'),
(3, 'anangbir', '81dc9bdb52d04dc20036dbd8313ed055', 'L003', 'Anang Biru', 'Bandung', '1996-05-07', 'Jl. Niagara No. 25', '085234567890'),
(4, 'budimif', '81dc9bdb52d04dc20036dbd8313ed055', 'L004', 'Budi Mifasola', 'Medan', '1997-05-29', 'Jl. Sumatera No.25', '087789012345'),
(5, 'cokicoki', '81dc9bdb52d04dc20036dbd8313ed055', 'L005', 'Coki Sihotang', 'Tangerang', '1995-07-21', 'Jl. Mobil Balap', '083210987654');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id_recept`),
  ADD UNIQUE KEY `kode_recept` (`kode_recept`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id_recept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

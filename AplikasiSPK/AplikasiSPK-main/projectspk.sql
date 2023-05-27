-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Agu 2018 pada 12.26
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectspk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `id_bobotkriteria` int(3) NOT NULL,
  `id_alternatif` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`id_bobotkriteria`, `id_alternatif`, `id_kriteria`, `bobot`) VALUES
(7, 1, 1, 0.5),
(8, 1, 2, 1),
(9, 1, 3, 0.75),
(10, 1, 4, 1),
(11, 1, 5, 1),
(12, 1, 6, 0.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(3) NOT NULL,
  `id_alternatif` int(3) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_alternatif`, `hasil`) VALUES
(1, 1, 3.8335),
(2, 1, 4),
(3, 1, 3.75025);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_alternatif`
--

CREATE TABLE `nama_alternatif` (
  `id_alternatif` int(3) NOT NULL,
  `namaBarang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nama_alternatif`
--

INSERT INTO `nama_alternatif` (`id_alternatif`, `namaBarang`) VALUES
(1, 'Pompa j');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(3) NOT NULL,
  `namaKriteria` varchar(30) NOT NULL,
  `sifat` enum('Benefit','Cost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `namaKriteria`, `sifat`) VALUES
(1, 'Processor', 'Benefit'),
(2, 'RAM', 'Benefit'),
(3, 'Harddisk', 'Benefit'),
(4, 'VGA', 'Benefit'),
(5, 'Harga', 'Cost');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_kriteria`
--

CREATE TABLE `nilai_kriteria` (
  `id_nilaikriteria` int(3) NOT NULL,
  `id_kriteria` int(3) NOT NULL,
  `nilai` float NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id_nilaikriteria`, `id_kriteria`, `nilai`, `keterangan`) VALUES
(5, 2, 0.25, '0 % (Tidak ada)'),
(6, 2, 0.5, '1% - 10%'),
(7, 2, 0.75, '11% - 20%'),
(8, 2, 1, '20 % lebih'),
(10, 3, 0, 'sangat buruk'),
(11, 3, 0.25, 'buruk'),
(12, 3, 0.5, 'cukup'),
(13, 3, 0.75, 'puas'),
(14, 4, 0.25, 'tidak ada'),
(15, 4, 0.5, 'kurang dari 1 tahun'),
(16, 4, 0.75, '1 tahun - 2 tahun'),
(17, 5, 0.5, 'KW'),
(18, 5, 1, 'Original / Asli'),
(19, 6, 0.25, 'Kurang dari 1 Minggu'),
(20, 6, 0.5, '1 minggu s/d 2 minggu'),
(21, 6, 0.75, '3 minggu s/d 4 minggu'),
(22, 1, 0.25, '1 Hari'),
(23, 1, 0.5, '2 hari â€“ 7 hari'),
(24, 1, 0.75, '7 hari â€“ 1 bulan'),
(25, 1, 1, '1 bulan lebih'),
(26, 3, 1, 'sangat memuaskan'),
(27, 4, 1, '2 tahun lebih'),
(28, 6, 1, '1 bulan lebih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode`
--

CREATE TABLE 'metode' {
  'metode' varchar(50) NOT NULL,
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  
 INSERT INTO 'metode' ('metode') VALUES
 (Weighted Product),
 (Simple Additive Weighting),
 (Profile Matching);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--p

CREATE TABLE `user` (
  `Id_admin` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$M80eHFnCpX6RzDiN7LfRNeNMmUZM51y4gT9NqnerVnud9onIWBvyq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD PRIMARY KEY (`id_bobotkriteria`),
  ADD KEY `id_jenisbarang` (`id_jenisbarang`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_jenisbarang` (`id_jenisbarang`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `nama_alternatif`
--
ALTER TABLE `nama_alternatif`
  ADD PRIMARY KEY (`id_jenisbarang`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD PRIMARY KEY (`id_nilaikriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `nilai_supplier`
--
ALTER TABLE `nilai_supplier`
  ADD PRIMARY KEY (`id_nilaisupplier`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_jenisbarang` (`id_jenisbarang`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_nilaikriteria` (`id_nilaikriteria`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  MODIFY `id_bobotkriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nama_alternatif`
--
ALTER TABLE `nama_alternatif`
  MODIFY `id_jenisbarang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  MODIFY `id_nilaikriteria` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `nilai_supplier`
--
ALTER TABLE `nilai_supplier`
  MODIFY `id_nilaisupplier` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD CONSTRAINT `bobot_kriteria_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `nama_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bobot_kriteria_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `nama_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD CONSTRAINT `nilai_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_supplier`
--
ALTER TABLE `nilai_supplier`
  ADD CONSTRAINT `nilai_supplier_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `nama_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_supplier_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_supplier_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_supplier_ibfk_4` FOREIGN KEY (`id_nilaikriteria`) REFERENCES `nilai_kriteria` (`id_nilaikriteria`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

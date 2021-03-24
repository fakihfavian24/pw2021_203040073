-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 18.20
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040073`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laptop`
--

INSERT INTO `laptop` (`id`, `picture`, `name`, `description`, `price`, `category`) VALUES
(1, '1.jpg', 'Lenovo IdeaPad C340-8JID / 8WID', 'Prosesor Core i3 8145U , Penyimpanan 512 GB SSD, RAM 8 GB, Ukuran Layar 14 inch', 'Rp 8.590.000', 'Laptop'),
(2, '2.jpg', 'ASUS E410MA-BV001T / BV002T / BV003T', 'Prosesor Celeron, Penyimpanan 512 GB SSD, RAM 4 GB, Ukuran Layar 14 inch', 'Rp 3.745.000', 'Laptop'),
(3, '3.jpg', 'ASUS X441BA-GA901T / GA902T / GA903T', 'Prosesor A-Series A9-9420, Penyimpanan 1 TB HDD, RAM 4 GB, Ukuran Layar 14 inch', 'Rp 3.515.000', 'Laptop'),
(4, '4.jpg', 'Lenovo ThinkPad X220 | Core i5-2430M', 'Prosesor Core i5 2430M, Penyimpanan , RAM 4 GB, Ukuran Layar 15.6 inch', 'Rp 2.090.000', 'Laptop'),
(5, '5.jpg', 'ASUS X441MA-GA011T / GA012T / GA013T / GA014T', 'Prosesor N4000, Penyimpanan 1 TB HDD SSD, RAM 4 GB, Ukuran Layar 14 inch', 'Rp 4.230.000', 'Laptop'),
(6, '6.jpg', 'Lenovo IdeaPad S340-14API-CTID', 'Prosesor Ryzen 3, Penyimpanan 512 GB SSD, RAM 8 GB, Ukuran Layar 14 inch', 'Rp 6.327.000', 'Laptop'),
(7, '7.jpg', 'Acer Aspire ES1-432-C8ZP', 'Prosesor ntel® Celeron® dual-core processor N3350, Penyimpanan 500 GB HDD, RAM 2 TB, Ukuran Layar 14', 'Rp 3.459.000', 'Laptop'),
(8, '8.jpg', 'HP OMEN 15-dc1111tx', 'Prosesor Core i7 Core i7-9750 H, Penyimpanan 1 TB 256 GB, RAM 8 GB, Ukuran Layar 15.6 inch', 'Rp 16.860.000', 'Laptop'),
(9, '9.jpg', 'Acer Swift 3 SF314-57-57S9', 'Prosesor , Penyimpanan 512 GB HDD, RAM 8 GB, Ukuran Layar 14 inch', 'Rp 8.589.000', 'Laptop'),
(10, '10.jpg', 'ASUS ROG GX531GX', 'Prosesor Core i7 8750HK, Penyimpanan 1 TB SSD, RAM 24 GB, Ukuran Layar 15.6 inch', 'Rp 47.499.000', 'Laptop');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

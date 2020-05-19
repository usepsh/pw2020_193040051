-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 01:54 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040051`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `RAM` varchar(10) NOT NULL,
  `memory_internal` varchar(10) NOT NULL,
  `kamera_belakang` varchar(50) NOT NULL,
  `kamera_depan` varchar(10) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `gambar`, `nama_barang`, `RAM`, `memory_internal`, `kamera_belakang`, `kamera_depan`, `harga`) VALUES
(1, 'S20ultra.jpeg', 'Samsung Galaxy S20 Ultra', '12GB', '128GB', 'Quad 108MP + 48MP + 12MP + 0.3MP', '40MP', 'Rp. 18.500.000'),
(2, 'S20+.jpeg', 'Samsung Galaxy S20+', '8GB', '128GB', 'Quad 12MP + 64MP + 12MP + 0.3MP', '10MP', 'Rp. 14.500.000'),
(3, 'S20.jpeg', 'Samsung Galaxy S20', '8GB', '128GB', 'Quad 12MP + 64MP + 12MP', '10MP', 'Rp. 12.900.000'),
(4, 'Zflip.jpeg', 'Samsung Galaxy Z Flip', '8GB', '256GB', 'Dual 12MP + 12MP', '10MP', 'Rp. 22.500.000'),
(5, 'Note10lite.jpeg', 'Samsung Galaxy  Note 10 Lite', '8GB', '128GB', 'Triple 12MP + 12MP + 12MP', '32MP', 'Rp. 8.200.000'),
(6, 'S10lite.jpeg', 'Samsung Galaxy S10 Lite', '8GB', '128GB', 'Triple 48MP + 12MP + 5MP', '32MP', 'Rp. 8.500.000'),
(7, 'A71.jpeg', 'Samsung Galaxy A71', '6GB, 8GB', '128GB', 'Quad 64MP + 12MP + 5MP + 5MP', '32MP', 'Rp. 7.800.000'),
(8, 'M30s.jpeg', 'Samsung Galaxy M30s', '4GB, 6GB', '64GB, 128G', 'Triple 48MP + 8MP + 5MP', '16MP', 'Rp. 2.900.000'),
(9, 'A30s.jpeg', 'Samsung Galaxy A30s', '4GB, 6GB', '64GB, 128G', 'Triple 25MP + 8MP + 5MP', '16MP', 'Rp. 2.800.000'),
(10, 'Young2.jpeg', 'Samsung Galaxy Young 2', '512MB', '4GB', '3.15MP', '-', 'rp. 700.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

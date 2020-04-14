-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 08:37 AM
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
-- Database: `pw_193040051`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Usep Syaiful Hidayat', '193040051', 'useposd95@gmail.com', 'Teknik Informatika', 'usep.jpeg'),
(2, 'Jeon Jungkook', '193040052', 'jk@gmail.com', 'Seni Musik', 'jk.jpeg'),
(3, 'Kim Jennie', '193040053', 'jennie@gmail.com', 'Seni Tari', 'jennie.jpeg'),
(4, 'Cristiano Ronaldo', '193040054', 'cr7@gmail.com', 'Pendidikan Olahraga', 'cr.jpeg'),
(5, 'Roseanne Park', '193040055', 'rose@gmail.com', 'Seni Musik', 'rose.jpeg'),
(6, 'Chou Tzuyu', '193040056', 'tzuyu@gmail.com', 'Seni Tari', 'tzuyu.jpeg'),
(7, 'Lalalisa', '193040057', 'lisa@gmail.com', 'Seni Tari', 'lisa.jpeg'),
(8, 'Luthfi Khairul Jamal', '193040058', 'luthfi@gmail.com', 'Teknik Informatika', 'luthfi.jpeg'),
(9, 'Rayhan Abduhuda', '193040059', 'rayhan@gmail.com', 'Teknik Informatika', 'rayhan.jpeg'),
(10, 'Dani Pedrosa', '193040060', 'pedrosa@gmail.com', 'Teknik Mesin', 'pedrosa.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

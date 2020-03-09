-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 05:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `poi_resto`
--

CREATE TABLE `poi_resto` (
  `id_poi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poi_resto`
--

INSERT INTO `poi_resto` (`id_poi`, `nama`, `jenis`, `alamat`, `waktu`) VALUES
(4, 'Sukahati Cafe', 'Cafe', 'Jl. Raya Sukahati No.41, Sukahati, Cibinong, Bogor, Jawa Barat 16913', '09:00:00'),
(5, 'Bebek Goreng H. Slamet Cab. Cibinong', 'Restoran', 'Jl. Raya Sukahati No.45, Sukahati, Cibinong, Bogor, Jawa Barat 16913', '10:00:00'),
(6, 'Warunk Upnormal Cibinong', 'Cafe', 'Jl. Raya Sukahati No.8-9, RT.01/RW.06, Sukahati, Cibinong, Bogor, Jawa Barat 16913', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poi_resto`
--
ALTER TABLE `poi_resto`
  ADD PRIMARY KEY (`id_poi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poi_resto`
--
ALTER TABLE `poi_resto`
  MODIFY `id_poi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 06:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simonpera`
--

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tglpesan` date DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tglpesan` date DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prewedding`
--

CREATE TABLE `prewedding` (
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tglpesan` date DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rapat`
--

CREATE TABLE `rapat` (
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tglpesan` date DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket_masuk`
--

CREATE TABLE `tiket_masuk` (
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tglpesan` date NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket_masuk`
--

INSERT INTO `tiket_masuk` (`nama`, `alamat`, `nohp`, `email`, `tglpesan`, `jenis`) VALUES
('I Wayan Ananda Widyatmika', 'Jl. Raya Puputan No.142, Panjer, Denpasar Selatan, Kota Denpasar, Bali', '0832134124234', 'saya@gmail.com', '2023-11-10', 'Mancanegara'),
('I Wayan Ananda Widyatmika', 'Jl. Raya Puputan No.142, Panjer, Denpasar Selatan, Kota Denpasar, Bali', '0832134124234', 'saya@gmail.com', '2023-11-10', 'Mancanegara'),
('Budiman Arta', 'Jl. Raya Puputan No.142, Panjer, Denpasar Selatan, Kota Denpasar, Bali', '9686806908', 'uaudhaw@gmail.com', '2024-01-17', 'Mancanegara');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

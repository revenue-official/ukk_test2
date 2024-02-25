-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2024 at 12:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` int(11) NOT NULL,
  `nm_golongan` varchar(255) DEFAULT NULL,
  `gaji` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_gol`, `nm_golongan`, `gaji`) VALUES
(1, 'RPL', 1),
(2, 'TKJ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jab` int(11) NOT NULL,
  `nm_jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `nm_jabatan`) VALUES
(1, 'Guru'),
(2, 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_peg` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `golongan` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_peg`, `nip`, `nama_pegawai`, `tgl_lahir`, `golongan`, `jabatan`, `jenis_kelamin`) VALUES
(9, 3212, 'reved', '2024-02-27', 1, 1, 'Laki-laki'),
(11, 3242, 'wfwef', '2024-02-12', 2, 1, 'Laki-laki'),
(12, 12344, 'defery', '2024-02-26', 2, 1, 'Perempuan');

--
-- Triggers `pegawai`
--
DELIMITER $$
CREATE TRIGGER `add_golongan` AFTER INSERT ON `pegawai` FOR EACH ROW BEGIN
    UPDATE golongan
    SET gaji = gaji + 1
    WHERE id_gol = NEW.golongan;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `remove_golongan` AFTER DELETE ON `pegawai` FOR EACH ROW BEGIN
UPDATE golongan
SET gaji = gaji - 1
WHERE id_gol = OLD.golongan;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_golongan` AFTER UPDATE ON `pegawai` FOR EACH ROW BEGIN
    UPDATE golongan
    SET gaji = gaji - 1
    WHERE id_gol = OLD.golongan;
    
    UPDATE golongan
    SET gaji = gaji + 1
    WHERE id_gol = NEW.golongan;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_peg`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `golongan` (`golongan`),
  ADD KEY `jabatan` (`jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_gol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_peg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`golongan`) REFERENCES `golongan` (`id_gol`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`jabatan`) REFERENCES `jabatan` (`id_jab`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

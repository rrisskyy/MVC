-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 02:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `blackbulls`
--

CREATE TABLE `blackbulls` (
  `Rank` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Power` int(11) DEFAULT NULL,
  `Magic` varchar(50) DEFAULT NULL,
  `Grimoire` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blackbulls`
--

INSERT INTO `blackbulls` (`Rank`, `Name`, `Power`, `Magic`, `Grimoire`, `Position`) VALUES
(1, 'Yami Sukehiro', 21000, 'Dark Magic', '3 Leaf', 'Captain'),
(2, 'Nacht', 17500, 'Devil Magic', '5 Leaf', 'Vice Captain'),
(3, 'Asta', 14500, 'Anti Magic', '5 Leaf', 'Member'),
(4, 'Charmy Papiston', 12500, 'Cotton and Dwarf Magic', '3 Leaf', 'Member'),
(5, 'Noelle Silva', 12000, 'Water Magic', '3 Leaf', 'Member'),
(6, 'Luck Voltia', 11000, 'Thunder Magic', '3 Leaf', 'Member'),
(7, 'Vannesa Enoteca', 10000, 'Red Thread of Fate Magic', '3 Leaf', 'Member'),
(8, 'Gauche Adlai', 9000, 'Mirror Magic', '3 Leaf', 'Member'),
(9, 'Zora Ideale', 7500, 'Trap Magic', '3 Leaf', 'Member'),
(10, 'Henry Legolant', 8900, 'Black Bulls Magic', '3 Leaf', 'Member'),
(11, 'Magna Swing', 7400, 'Fire Magic', '3 Leaf', 'Member'),
(12, 'Finral Roulacase', 8000, 'Teleportation Magic', '3 Leaf', 'Member'),
(13, 'Secre Swallowtail', 8500, 'Forbidden Magic', '3 Leaf', 'Member'),
(14, 'Gordon Agrippa', 5000, 'Poison Magic', '3 Leaf', 'member'),
(15, 'Grey', 7000, 'Transformation Magic', '3 Leaf', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blackbulls`
--
ALTER TABLE `blackbulls`
  ADD PRIMARY KEY (`Rank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blackbulls`
--
ALTER TABLE `blackbulls`
  MODIFY `Rank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

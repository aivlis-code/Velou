-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2023 at 08:13 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_velou`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `Bike_ID` int(11) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Prix` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`Bike_ID`, `Model`, `Nom`, `Description`, `Image`, `Prix`) VALUES
(1, 'Route 2023', 'Vélo de route', 'Vélo de route rapide et léger', 'https://my-velo.fr/30671-big_default_2x/velo-de-ville-boulevard-28-6-vit-dame-vert-2021.jpg', '20.00'),
(2, 'Montagne 2023', 'Vélo de montagne', 'Vélo de montagne robuste', 'https://media.alltricks.com/medium/2225845623d9f16d6ec47.43177111', '25.00'),
(3, 'Hybride 2023', 'Vélo hybride', 'Vélo hybride confortable', 'https://img.redbull.com/images/q_auto,f_auto/redbullcom/2020/5/12/chminpupppvolrrv5m50/velo-hybride-fairfax-1-marin ', '28.00'),
(4, 'Electrique 2023', 'Vélo électrique', 'Vélo électrique puissant', 'https://cdn.shopify.com/s/files/1/0279/1381/4091/products/MicrosoftTeams-image_174.jpg?v=1634050040', '32.00');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID_location` int(11) NOT NULL,
  `ID_user` int(11) DEFAULT NULL,
  `Bike_ID` int(11) DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`ID_location`, `ID_user`, `Bike_ID`, `date_debut`, `date_fin`) VALUES
(1, 3, 1, '2020-01-20 00:00:00', '2020-01-21 00:00:00'),
(2, 3, 1, '2020-01-20 00:00:00', '2020-01-21 00:00:00'),
(5, 1, 1, '2023-06-01 00:00:00', '2023-06-03 00:00:00'),
(6, 1, 1, '2023-06-01 00:00:00', '2023-06-03 00:00:00'),
(7, 1, 1, '2023-06-01 00:00:00', '2023-06-02 00:00:00'),
(8, 1, 1, '2023-06-01 00:00:00', '2023-06-02 00:00:00'),
(9, 1, 1, '2023-06-01 00:00:00', '2023-06-02 00:00:00'),
(10, 1, 1, '2023-06-01 00:00:00', '2023-06-02 00:00:00'),
(11, 1, 1, '2023-06-01 00:00:00', '2023-06-02 00:00:00'),
(12, 1, 1, '2023-06-01 00:00:00', '2023-06-02 00:00:00'),
(13, 3, 1, '2023-06-02 00:00:00', '2023-06-03 00:00:00'),
(14, 3, 1, '2023-06-02 00:00:00', '2023-06-03 00:00:00'),
(15, 3, 1, '2023-06-02 00:00:00', '2023-06-03 00:00:00'),
(16, 3, 2, '2023-06-02 00:00:00', '2023-06-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `MdP` varchar(100) NOT NULL,
  `is_Admin` tinyint(1) NOT NULL DEFAULT '0',
  `ID_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Nom`, `Prenom`, `Mail`, `MdP`, `is_Admin`, `ID_user`) VALUES
('Targa', 'Silvia', 'silvia@gmail.com', 'Silvia', 0, 1),
('Admin', 'Admin', 'admin@admin.com', 'Admin', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`Bike_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID_location`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `Bike_ID` (`Bike_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `Mail` (`Mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `Bike_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `ID_location` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID_user`),
  ADD CONSTRAINT `location_ibfk_2` FOREIGN KEY (`Bike_ID`) REFERENCES `bikes` (`Bike_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

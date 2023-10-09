-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 05:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `resum`
--

CREATE TABLE `resum` (
  `username` varchar(400) NOT NULL,
  `id` int(11) NOT NULL,
  `fn` varchar(100) NOT NULL,
  `mn` varchar(100) NOT NULL,
  `ln` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uimage` varchar(400) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `summary` varchar(400) NOT NULL,
  `atitle` varchar(100) NOT NULL,
  `ades` varchar(100) NOT NULL,
  `etitle` varchar(100) NOT NULL,
  `eorg` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `elocation` varchar(400) NOT NULL,
  `esdate` varchar(400) NOT NULL,
  `eedate` varchar(400) NOT NULL,
  `edes` varchar(400) NOT NULL,
  `school` varchar(400) NOT NULL,
  `degree` varchar(400) NOT NULL,
  `cgpa` varchar(400) NOT NULL,
  `pname` varchar(400) NOT NULL,
  `plink` varchar(400) NOT NULL,
  `pdes` varchar(400) NOT NULL,
  `crr_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resum`
--

INSERT INTO `resum` (`username`, `id`, `fn`, `mn`, `ln`, `email`, `uimage`, `ad`, `phone`, `summary`, `atitle`, `ades`, `etitle`, `eorg`, `skill`, `elocation`, `esdate`, `eedate`, `edes`, `school`, `degree`, `cgpa`, `pname`, `plink`, `pdes`, `crr_date`) VALUES
('praveen8954', 92, 'praveen', '', 'sangroula', 'praveensangroula1234@gmail.com', '', 'House no.6 bacchi vihar', '+918954375278', '', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', 'a:1:{i:0;s:0:\"\";}', '2023-07-06 18:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'praveen8954', 'praveensangroula1234@gmail.com', '76d80224611fc919a5d54f0ff9fba446');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resum`
--
ALTER TABLE `resum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resum`
--
ALTER TABLE `resum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

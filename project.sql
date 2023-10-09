-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 11:06 AM
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
  `id` int(11) NOT NULL,
  `fn` varchar(100) NOT NULL,
  `mn` varchar(100) NOT NULL,
  `ln` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
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
  `pdes` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resum`
--

INSERT INTO `resum` (`id`, `fn`, `mn`, `ln`, `email`, `ad`, `phone`, `atitle`, `ades`, `etitle`, `eorg`, `skill`, `elocation`, `esdate`, `eedate`, `edes`, `school`, `degree`, `cgpa`, `pname`, `plink`, `pdes`) VALUES
(75, 'praveen', '', 'sangroula', 'praveensangroula1234@gmail.com', 'House no.6 bacchi vihar', '+918954375278', 'a:2:{i:0;s:7:\"cricket\";i:1;s:4:\"bgmi\";}', 'a:2:{i:0;s:8:\"i won it\";i:1;s:6:\"qwerty\";}', 'a:2:{i:0;s:4:\"head\";i:1;s:6:\"worker\";}', 'a:2:{i:0;s:7:\"college\";i:1;s:5:\"ghr m\";}', 'a:3:{i:0;s:14:\"java developer\";i:1;s:24:\"full stack web developer\";i:2;s:6:\"trader\";}', 'a:2:{i:0;s:8:\"haldwani\";i:1;s:3:\"ghr\";}', 'a:2:{i:0;s:10:\"2023-07-08\";i:1;s:10:\"2002-07-16\";}', 'a:2:{i:0;s:10:\"2023-07-09\";i:1;s:10:\"2023-07-30\";}', 'a:2:{i:0;s:10:\"it was fun\";i:1;s:15:\"kaam wala ladka\";}', 'a:3:{i:0;s:3:\"dav\";i:1;s:2:\"kv\";i:2;s:3:\"agi\";}', 'a:3:{i:0;s:2:\"12\";i:1;s:2:\"10\";i:2;s:3:\"bca\";}', 'a:3:{i:0;s:2:\"85\";i:1;s:2:\"75\";i:2;s:2:\"75\";}', 'a:2:{i:0;s:7:\"buyezee\";i:1;s:15:\"fitness website\";}', 'a:2:{i:0;s:14:\"www.google.com\";i:1;s:17:\"www.fitness.world\";}', 'a:2:{i:0;s:15:\"grocery website\";i:1;s:22:\"na dare daily gym kare\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resum`
--
ALTER TABLE `resum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resum`
--
ALTER TABLE `resum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

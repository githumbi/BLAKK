-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2018 at 03:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blakk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pwd`) VALUES
(1, 'joe', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `country` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` int(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `work` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `profile` varchar(128) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `approve` varchar(128) NOT NULL DEFAULT 'no',
  `amount` varchar(1280) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `country`, `email`, `phone`, `gender`, `work`, `address`, `city`, `profile`, `message`, `approve`, `amount`) VALUES
(2, 'joseph githumb', 'south Africa', 'gathumbi74@gmail.com', 712039804, 'male', 'web developer', '', '', 'profile/0862f8a737.png', 'good', 'wwrer', ''),
(3, 'Doreen Muthoni', 'kenya', 'doreen@gmail.com', 712039804, 'female', 'bussiness', '', '', 'profile/33ca3e20d6.png', '', 'yes', '1234'),
(5, 'Ndegwa Njoroge', 'chad', 'sample@gmail.com', 712039804, 'male', 'Android Developer', '125247', 'Nairobi', 'profile/963720111b.jpg', '', 'yes', ''),
(11, 'ndegwa', 'malawi', 'sample@gmail.com', 712039804, 'male', 'web dev', '1427', 'nairibi', '', '', 'yes', ''),
(12, 'paul njoroge', 'ivory-coast', 'sample@gmail.com', 2147483647, 'male', 'fashion designer', '12487', 'cairo', '', '', 'yes', ''),
(13, 'Ann Chadi', 'eritrea', 'ann@gmail.com', 7124579, 'female', 'hair dresser', '48494', 'francisco', '', '', 'yes', ''),
(14, 'joseph githumbi Kaguri', 'kenya', 'githumbi74@gmail.com', 712039804, 'male', 'web dev', '1237', 'nairobi', '', '', 'yes', ''),
(15, '', '', '', 0, '', '', '', '', '', '', 'yes', ''),
(16, '', '', '', 0, '', '', '', '', '', '', 'yes', ''),
(17, '', '', '', 0, '', '', '', '', '', '', 'yes', ''),
(18, 'fgbser', 'kenya', 'githumbi74@gmail.com', 76868686, 'male', 'dfbhdebhde', '7865786', 'nai', '', '', 'yes', ''),
(19, '', '', '', 0, '', '', '', '', '', '', 'yes', ''),
(20, '', '', '', 0, '', '', '', '', '', '', 'yes', ''),
(21, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(22, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(23, '', 'Choose', 'gathumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(24, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(25, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(26, '', 'Choose', '', 0, '', '', '', '', '', '', 'yes', ''),
(27, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(28, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(29, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(30, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(31, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(32, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(33, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(34, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(35, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(36, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(37, '', 'Choose', 'gathumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(38, '', 'Choose', 'gathumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(39, '', 'Choose', 'gathumbi74@gmail.com', 0, '', '', '', '', '', '', 'no', ''),
(40, 'daaan', 'congo-kinshasa', 'sample@gmail.com', 765486, 'male', 'dverv', '57689', 'gdferf', '', '', 'no', ''),
(41, 'fgrgr', 'ivory-coast', 'githumbi74@gmail.com', 386896, 'male', 'hthrt', '8639/869', '2896/89', '', '', 'yes', ''),
(42, 'Japheth Mwangi', 'kenya', 'githumbi74@gmail.com', 712039804, 'male', 'lab tech', '1234', 'nairobi', '', '', 'yes', '15478'),
(43, '', 'Choose', 'githumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', ''),
(44, '', 'Choose', 'gathumbi74@gmail.com', 0, '', '', '', '', '', '', 'yes', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

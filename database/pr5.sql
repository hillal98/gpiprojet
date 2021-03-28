-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 10:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pr5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `type`) VALUES
(1, 'admin', 'a1802ef26586544fee9a024a23fc4a32', 'admin@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `name`, `price`, `descr`, `quantity`) VALUES
(1, 'Une trousse perceuse / tournevis.', '20', 'Description', 5),
(2, 'Des ciseaux.', '10', 'Des ciseaux.\r\n', 10),
(3, 'Une rÃ¨gle.', '5', 'Une rÃ¨gle.\r\n', 24),
(4, 'Des grattoirs et spatules.', '30', 'Des grattoirs et spatules.\r\n', 15),
(5, 'Un petit ensemble de peinture.', '50', 'Un petit ensemble de peinture.\r\n', 30),
(7, 'Une ponceuse + du papier de verre.	', '10', 'Une ponceuse + du papier de verre.	', 55);

-- --------------------------------------------------------

--
-- Table structure for table `pub`
--

CREATE TABLE `pub` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `descr` text NOT NULL,
  `type` text NOT NULL,
  `articles` text NOT NULL,
  `state` text NOT NULL,
  `date` date NOT NULL,
  `client` text NOT NULL,
  `category` text NOT NULL,
  `cataloge` text NOT NULL,
  `age1` int(11) NOT NULL,
  `age2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pub`
--

INSERT INTO `pub` (`id`, `name`, `descr`, `type`, `articles`, `state`, `date`, `client`, `category`, `cataloge`, `age1`, `age2`) VALUES
(17, 'pub1', 'Description', 'no', '1,2,3,4,5,', 'caire', '2021-03-23', 'non', '4', 'uploads/1516868021-CAHIER-DES-CHARGES-PROJET-FENOUIL-2020-2021.docx', 18, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `birthday` date NOT NULL,
  `category` text NOT NULL,
  `address` text NOT NULL,
  `zip` text NOT NULL,
  `city` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `commercial` text NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `birthday`, `category`, `address`, `zip`, `city`, `phone`, `email`, `commercial`, `username`, `password`) VALUES
(5, 'usertests', '2021-03-05', '4', 'sss', '29000', 'caire', '02121221213', 'usertest@hotmail.fr', '', 'usertest', '806b2af4633e64af88d33fbe4165a06a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pub`
--
ALTER TABLE `pub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pub`
--
ALTER TABLE `pub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

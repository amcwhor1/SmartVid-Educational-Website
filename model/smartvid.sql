-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 11:48 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `id`, `firstName`, `lastName`) VALUES
('shansalia', 'shansalia@ggc.edu', 'ae05e75aab6cbd526188b3d57057cb81', 1, '', ''),
('cgordon', 'cgordon@ggc.edu', '72a43073acea8d0dcb0302d56c207d18', 2, '', ''),
('amcwhorter', 'amcwhor1@ggc.edu', 'ad2e7f7468d9b25309d551d93cac9fa5', 3, '', ''),
('sbiedenbach', 'sbiedenbach@ggc.edu', '8db41af26bb3221c0bb5782175070289', 4, '', ''),
('srichards', 'srichards@fthis.com', 'e7f4f8bd246c235418280d1f124e14f0', 11, 'Swinging', 'Richards'),
('testname', 'testname@hellatesting.com', 'b04083e53e242626595e2b8ea327e525', 12, 'test', 'testlast'),
('fName', 'fName@fName.com', '2b4c43e3b1102b2e8492eebd97c06c58', 13, 'firstName', 'firstName');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

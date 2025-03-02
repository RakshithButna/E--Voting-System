-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 08:45 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `anumber` bigint(12) NOT NULL,
  `voterid` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `cpwd` varchar(100) NOT NULL,
  `pnumber` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `uname`, `anumber`, `voterid`, `email`, `dob`, `pwd`, `cpwd`, `pnumber`) VALUES
('Suhaas', 'Gunda', '18MIS0020', 123456789012, 'qw123er4', 'suhaas@gmail.com', '2001-02-21', '9f1be654f5607c8e7850b0742ac6ab22', '9f1be654f5607c8e7850b0742ac6ab22', 1234567890),
('Raghu', 'Papisetty', 'admin', 121212121212, 'qwerty123', 'raghu2bittu@gmail.com', '2001-07-01', 'b0fc9475e1a176051dcd4e181adeceb4', 'b0fc9475e1a176051dcd4e181adeceb4', 9494572405),
('hemanth', 'sai', 'hemanth23', 141414141414, 'qwerty456', 'hemanth@gmail.com', '2001-09-23', '8d24d3536fd8d44de12740694e39b6b1', '8d24d3536fd8d44de12740694e39b6b1', 1234567890),
('papisetty', 'ugandhar', 'ugandhar1964', 123456788765, 'kkt2345', 'ugandhar1964@gmail.com', '1964-08-27', '1b0d622af0713faa42b0b9ca19507111', '1b0d622af0713faa42b0b9ca19507111', 9059782784),
('Varun', 'Surisetty', 'varun2560', 131313131313, 'kky1345', 'varun@gmail.com', '2000-12-01', '4b9aa13b1f74613666f91b50e0f50a6e', '4b9aa13b1f74613666f91b50e0f50a6e', 9059061440);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `uname` varchar(20) NOT NULL,
  `vote` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`uname`, `vote`, `status`) VALUES
('18MIS0020', '53be561254', 'VOTED'),
('admin', 'a22e77bf1c', 'VOTED'),
('hemanth23', '2ceaf7d1bc', 'VOTED'),
('ugandhar1964', '2ceaf7d1bc', 'VOTED'),
('varun2560', 'c9228e19ff', 'VOTED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `anumber` (`anumber`,`voterid`,`pnumber`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

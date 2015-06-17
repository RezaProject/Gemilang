-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2015 at 04:29 
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gemilang`
--

-- --------------------------------------------------------

--
-- Table structure for table `rzn_artikel`
--

CREATE TABLE IF NOT EXISTS `rzn_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `uri` longtext NOT NULL,
  `category` varchar(225) NOT NULL,
  `isi` longtext NOT NULL,
  `author` varchar(225) NOT NULL,
  `author_uri` longtext NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rzn_artikel`
--

INSERT INTO `rzn_artikel` (`id_artikel`, `judul`, `uri`, `category`, `isi`, `author`, `author_uri`, `date`) VALUES
(21, 'Lorem Ipsum', 'lorem-ipsum', 'lorem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Reza Juliandri', 'ppabcd', '3-06-2014');

-- --------------------------------------------------------

--
-- Table structure for table `rzn_hit`
--

CREATE TABLE IF NOT EXISTS `rzn_hit` (
  `id` int(11) NOT NULL,
  `jumlah` longtext NOT NULL,
  `date` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rzn_home`
--

CREATE TABLE IF NOT EXISTS `rzn_home` (
  `judul` varchar(225) NOT NULL,
  `isi` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rzn_home`
--

INSERT INTO `rzn_home` (`judul`, `isi`, `author`, `date`) VALUES
('Home', 'Selamat datang di website resmi gemilang selasta', 'Reza Juliandri', '03-Juni-2015');

-- --------------------------------------------------------

--
-- Table structure for table `rzn_page`
--

CREATE TABLE IF NOT EXISTS `rzn_page` (
  `id_page` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `uri` longtext NOT NULL,
  `isi` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `author_uri` longtext NOT NULL,
  `date` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rzn_users`
--

CREATE TABLE IF NOT EXISTS `rzn_users` (
  `id_users` int(11) NOT NULL,
  `fullname` longtext NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL,
  `date` longtext NOT NULL,
  `code` longtext NOT NULL,
  `permission` varchar(225) NOT NULL,
  `uri` longtext NOT NULL,
  `email` longtext NOT NULL,
  `desc` longtext NOT NULL,
  `referer` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rzn_users`
--

INSERT INTO `rzn_users` (`id_users`, `fullname`, `username`, `password`, `date`, `code`, `permission`, `uri`, `email`, `desc`, `referer`) VALUES
(1, 'Reza Juliandri', 'ppabcd', '42d8aa7cde9c78c4757862d84620c335', '21-07-2001', 'aSWdasWsa', '10', 'ppabcd', 'rezajuliandri20@gmail.com', 'test', 'gemilang'),
(2, 'Demo', 'Demo', 'f0258b6685684c113bad94d91b8fa02a', '21-92-2122', 'auohe21o9jednq82oehjd9q2dh', '1', 'demo', 'email@mail.com', 'desc', 'ppabcd'),
(3, 'Demo2', 'Demo1', '42d8aa7cde9c78c4757862d84620c335', '2901301', 'aksdha8whdkaw8db', '7', 'demo2', 'demo@mail.com', 'bla-nladwad', 'ppabcd');

-- --------------------------------------------------------

--
-- Table structure for table `rzn_user_reg`
--

CREATE TABLE IF NOT EXISTS `rzn_user_reg` (
  `id` int(11) NOT NULL,
  `pangkalan` longtext NOT NULL,
  `regu` longtext NOT NULL,
  `peserta` longtext NOT NULL,
  `date` longtext NOT NULL,
  `bindamping` longtext NOT NULL,
  `telp` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rzn_user_reg`
--

INSERT INTO `rzn_user_reg` (`id`, `pangkalan`, `regu`, `peserta`, `date`, `bindamping`, `telp`) VALUES
(1, 'SMPN 19 Tangerang', 'Binturong, Oleander', 'Reza juliandri', '21-07-2001', 'Untung Hunaini, Fitri Puspita', '081317806732');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rzn_artikel`
--
ALTER TABLE `rzn_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `rzn_hit`
--
ALTER TABLE `rzn_hit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rzn_page`
--
ALTER TABLE `rzn_page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `rzn_users`
--
ALTER TABLE `rzn_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `rzn_user_reg`
--
ALTER TABLE `rzn_user_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rzn_artikel`
--
ALTER TABLE `rzn_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `rzn_hit`
--
ALTER TABLE `rzn_hit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rzn_page`
--
ALTER TABLE `rzn_page`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rzn_users`
--
ALTER TABLE `rzn_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rzn_user_reg`
--
ALTER TABLE `rzn_user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

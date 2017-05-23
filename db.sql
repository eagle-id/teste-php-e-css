-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 04:20 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1-log
-- PHP Version: 5.6.30-10+deb.sury.org~xenial+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `zip_code`, `city`, `state`, `phone`) VALUES
(2, 'Breno dos Santos', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 1234568, 'Canoas', 'RS', 5555555),
(3, 'Leonardo Souza', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 1234568, 'Porto Alegre', 'RS', 5555555),
(4, 'Mariane Carvalho', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 1234568, 'Gravataí', 'RS', 5555555),
(5, 'Yasmin Costa', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 1234568, 'Esteio', 'RS', 5555555),
(6, 'Laura Mendes', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 1234568, 'Canoas', 'RS', 5555555),
(8, 'Guilherme Fernandes', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 1234568, 'Porto Alegre', 'RS', 5555555),
(9, 'Kaique Castro', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 1234568, 'Canoas', 'RS', 5555555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

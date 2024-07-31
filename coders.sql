-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 04:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coders`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_section`
--

CREATE TABLE `book_section` (
  `image` longblob NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prize` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_section`
--

INSERT INTO `book_section` (`image`, `category`, `name`, `prize`) VALUES
(0x626f6f6b312e6a7067, 'Book', 'Tom Hanks', 599),
(0x626f6f6b322e6a7067, 'Book', 'Kunex', 399),
(0x626f6f6b332e6a7067, 'Book', 'Emily Henry', 459),
(0x626f6f6b342e6a7067, 'Book', 'Rebacca', 399),
(0x626f6f6b352e6a7067, 'Book', 'Holly Jackson', 699);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `image` longblob NOT NULL,
  `name` varchar(100) NOT NULL,
  `prize` int(100) NOT NULL,
  `quantity` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kid_section`
--

CREATE TABLE `kid_section` (
  `image` longblob NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prize` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kid_section`
--

INSERT INTO `kid_section` (`image`, `category`, `name`, `prize`) VALUES
(0x6b69642d7368697274312e6a7067, 'Kids Shirt', 'Max', 299),
(0x6b69642d7368697274322e6a7067, 'Kids Shirt', 'Icable', 259),
(0x6b69642d736b697274312e6a7067, 'Kids Skirt', 'Pw platypus', 199),
(0x6b69642d747368697274312e6a7067, 'Kids T-shirt', 'Max', 159),
(0x6b69642d636f6d626f312e6a7067, 'Kids Combo', 'Real basics', 499),
(0x6b69642d636f6d626f322e6a7067, 'Kids Combo', 'Ariel', 399);

-- --------------------------------------------------------

--
-- Table structure for table `men_section`
--

CREATE TABLE `men_section` (
  `image` longblob NOT NULL,
  `category` varchar(100) NOT NULL,
  `cloth-name` varchar(100) NOT NULL,
  `prize` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `men_section`
--

INSERT INTO `men_section` (`image`, `category`, `cloth-name`, `prize`) VALUES
(0x6d656e2d7368697274312e6a7067, 'Mens Shirt', 'Dennis Lingo', 499),
(0x6d656e2d7368697274322e6a7067, 'Mens Shirt', 'Denim Co', 399),
(0x6d656e2d7368697274332e6a7067, 'Mens Shirt', 'Denim Co', 499),
(0x6d656e2d747261636b312e6a7067, 'Mens Track', 'Puma', 599),
(0x6d656e2d747261636b322e6a7067, 'Mens Track', 'Alan Jones', 599),
(0x6d656e2d747261636b332e6a7067, 'Mens Track', 'Allen Solly', 799),
(0x6d656e2d747368697274312e6a7067, 'Mens T-shirt', 'Lyriq', 299),
(0x6d656e2d747368697274322e6a7067, 'Mens T-shirt', 'Lymio', 399),
(0x6d656e2d747368697274332e6a7067, 'Mens T-shirt', 'Lymio', 199),
(0x6d656e2d6a65616e73312e6a7067, 'Mens Jeans', 'Peter England', 599),
(0x6d656e2d6a65616e73322e6a7067, 'Mens Jeans', 'Pepe Jeans', 699),
(0x6d656e2d6a65616e73332e6a7067, 'Mens Jeans', 'Levis', 599),
(0x6d656e2d7368697274332e6a7067, 'Mens Shirt', 'Sample shirt', 899);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `image` longblob NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prize` int(100) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`image`, `category`, `name`, `prize`, `keywords`) VALUES
(0x6d656e2d7368697274312e6a7067, 'Mens Shirt', 'Dennis Lingo', 499, 'shirt men clothes dennis lingo'),
(0x6d656e2d7368697274322e6a7067, 'Mens Shirt', 'Denim Co', 399, 'shirt men clothes denim co'),
(0x6d656e2d7368697274332e6a7067, 'Mens Shirt', 'Denim Co', 499, 'men clothes shirt denim co'),
(0x6d656e2d747261636b312e6a7067, 'Mens Track', 'Puma', 599, 'track men clothes puma'),
(0x6d656e2d747261636b322e6a7067, 'Mens Track', 'Alan Jones', 599, 'men clothes track alan jones'),
(0x6d656e2d747261636b332e6a7067, 'Mens Track', 'Allen Solly', 799, 'men clothes track allen solly'),
(0x6d656e2d747368697274312e6a7067, 'Mens T-shirt', 'Lyriq', 299, 'men clothes tshirt lyriq'),
(0x6d656e2d747368697274322e6a7067, 'Mens T-shirt', 'Lymio', 399, 'men clothes tshirt lymio'),
(0x6d656e2d747368697274332e6a7067, 'Mens T-shirt', 'Lymio', 199, 'men clothes tshirt lymio'),
(0x6d656e2d6a65616e73312e6a7067, 'Mens Jeans', 'Peter England', 599, 'men clothes jeans peter england'),
(0x6d656e2d6a65616e73322e6a7067, 'Mens Jeans', 'Pepe Jeans', 699, 'men clothes jeans pepe'),
(0x6d656e2d6a65616e73332e6a7067, 'Mens Jeans', 'Levis', 599, 'men clothes levis jeans'),
(0x776f6d656e2d7361726565312e6a7067, 'Womens Saree', 'Gosriki', 299, 'women clothes saree gosriki'),
(0x776f6d656e2d7361726565322e6a7067, 'Womens Saree', 'Srill', 399, 'women clothes saree srill'),
(0x776f6d656e2d7361726565332e6a7067, 'Womens Saree', 'SGF11', 299, 'women clothes saree sgf11'),
(0x776f6d656e2d6b7572746861312e6a7067, 'Womens Kurtha', 'Gosriki', 199, 'women clothes gosriki kurtha'),
(0x776f6d656e2d6b7572746861322e6a7067, 'Womens Kurtha', 'Gosriki', 199, 'women clothes kurtha gosriki'),
(0x776f6d656e2d6b7572746861332e6a7067, 'Womens Kurtha', 'Gosriki', 299, 'women clothes kurtha gosriki'),
(0x776f6d656e2d6a65616e73312e6a7067, 'Womens Jeans', 'Aka chic', 499, 'women clothes jeans aka chic'),
(0x776f6d656e2d6a65616e73322e6a7067, 'Womens Jeans', 'Aka chic', 399, 'women jeans aka chic clothes'),
(0x776f6d656e2d6a65616e73332e6a7067, 'Womens Jeans', 'Miss Chase', 599, 'women clothes jeans miss chase'),
(0x6b69642d7368697274312e6a7067, 'Kids Shirt', 'Max', 299, 'kid clothes shirt max'),
(0x6b69642d7368697274322e6a7067, 'Kids Shirt', 'Icable', 259, 'kid clothes shirt icable'),
(0x6b69642d736b697274312e6a7067, 'Kids Skirt', 'Pw platypus', 199, 'kid clothes pw platypus skirt'),
(0x6b69642d747368697274312e6a7067, 'Kids T-shirt', 'Max', 159, 'kid clothes tshirt max'),
(0x6b69642d636f6d626f312e6a7067, 'Kids Combo', 'Real basics', 499, 'kid clothes combo real basics'),
(0x6b69642d636f6d626f322e6a7067, 'Kids Combo', 'Ariel', 399, 'kid clothes combo ariel'),
(0x626f6f6b312e6a7067, 'Book', 'Tom Hanks', 599, 'books tom hanks'),
(0x626f6f6b322e6a7067, 'Book', 'Kunex', 399, 'books kunex'),
(0x626f6f6b332e6a7067, 'Book', 'Emily Henry', 459, 'books emily henry'),
(0x626f6f6b342e6a7067, 'Book', 'Rebacca', 399, 'rebacca books'),
(0x626f6f6b352e6a7067, 'Book', 'Holly Jackson', 699, 'holly jackson books');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `name` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`name`, `mobile`, `email`, `password`) VALUES
('JEYABALAN P', 916380905681, 'jeyaalan764@gmail.com', '12345678'),
('JEYABALAN P', 916380905581, 'jeyabalan764@gmail.com', '12345678'),
('JEYABALAN P', 916380905581, 'jeyabaan764@gmail.com', '21474836'),
('JEYABALAN P', 916380905581, 'lan764@gmail.com', '12345678'),
('1234567890-=', 9868585434, 'jeylan764@gmail.com', '12345678'),
('1234567890', 8453902887, 'jeyn764@gmail.com', '12345678'),
('JEYABALAN P', 916380999581, 'jeyab4@gmail.com', '12345678'),
('JEYABALAN P', 916387905581, 'eyabalan764@gmail.com', '12345678'),
('JEYABALAN P', 916380905584, 'jean764@gmail.com', '12345678'),
('JEYABALAN P', 916380581906, 'n764@gmail.com', '12345'),
('JEYABALAN P', 916830905581, 'jeyabala764@gmail.com', '12345678'),
('JEYABALAN P', 916380805581, 'jeabalan764@gmail.com', '12345678'),
('jeyabalan', 6380977581, 'n74@gmail.com', '12345678'),
('jeyabalan', 6380557581, '4@gmail.com', '12345678'),
('jeyabalan', 6380885581, '68@gmail.com', '7777890'),
('abhinav', 7708008485, 'abhi@gmail.in', '0'),
('abhinav1818', 9874125630, '18abhinavMS@gmail.com', '0'),
('abhi', 9871234560, '18abhiavMS@gmail.com', '0'),
('mind', 7845432219, '18bhargavims@gmail.com', 'Abhinav2'),
('abhina', 7845432215, 'abhinavms@gmail.com', 'abhinav2503@'),
('abi', 9112896123, '18bhgavims@gmail.com', 'abhinav25@'),
('abhinav789', 9945961230, 'a123i@gmail.in', 'qwerty123@');

-- --------------------------------------------------------

--
-- Table structure for table `women_section`
--

CREATE TABLE `women_section` (
  `image` longblob NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prize` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `women_section`
--

INSERT INTO `women_section` (`image`, `category`, `name`, `prize`) VALUES
(0x776f6d656e2d7361726565312e6a7067, 'Womens Saree', 'Gosriki', 299),
(0x776f6d656e2d7361726565322e6a7067, 'Womens Saree', 'Srill', 399),
(0x776f6d656e2d7361726565332e6a7067, 'Womens Saree', 'SGF11', 299),
(0x776f6d656e2d6b7572746861312e6a7067, 'Womens Kurtha', 'Gosriki', 199),
(0x776f6d656e2d6b7572746861322e6a7067, 'Womens Kurtha', 'Gosriki', 199),
(0x776f6d656e2d6b7572746861332e6a7067, 'Womens Kurtha', 'Gosriki', 299),
(0x776f6d656e2d6a65616e73312e6a7067, 'Womens Jeans', 'Aka chic', 499),
(0x776f6d656e2d6a65616e73322e6a7067, 'Womens Jeans', 'Aka chic', 399),
(0x776f6d656e2d6a65616e73332e6a7067, 'Womens Jeans', 'Miss Chase', 599);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `image` (`image`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

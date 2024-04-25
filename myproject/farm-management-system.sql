-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 06:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `agronomist`
--

CREATE TABLE `agronomist` (
  `agronomist_id` int(50) NOT NULL,
  `agronomist_names` varchar(100) NOT NULL,
  `agronomist_tel` int(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `degree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agronomist`
--

INSERT INTO `agronomist` (`agronomist_id`, `agronomist_names`, `agronomist_tel`, `location`, `degree`) VALUES
(1, 'maurine', 12345, 'muhanga', 'PHD'),
(2, 'Muhire Aime', 2147483647, 'kigali', 'A1');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `BuyerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`BuyerID`, `FirstName`, `LastName`, `Email`, `Phone`, `Address`) VALUES
(1, 'Momo', 'Juwayote', 'yote@gmail.com\r\n', '0788889078', 'KK 250 pbox'),
(5, 'Umutesi', '', 'aline@gmail.com', '9875433456', 'Kigali-Rwanda'),
(6, 'Kalisa', 'Camille', 'camille@gmail.com', '98976789', 'Masaka-Kigali');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `FarmerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`FarmerID`, `FirstName`, `LastName`, `Email`, `Phone`, `Address`) VALUES
(1, 'Kiki', 'Mulisa', 'mulisa@gmail.com', '079977678890', 'kigali Rwanda'),
(2, 'Kiki', 'Mulisa', 'mulisa@gmail.com', '07988856790', 'Kigali Rwanda');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email_adress` varchar(40) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `first_name`, `last_name`, `email_adress`, `telephone`) VALUES
(1, 'Irakoze', 'Claire', 'irakozemorren\"gmail.com', '087654321'),
(2, 'IRAKOZE', 'Chance', 'chance@example.com', '123-456-78'),
(1, 'Umulisa', 'Diane', 'umulisa@gmail.com', '797800657'),
(1, 'Umulisa', 'Diane', 'umulisa@gmail.com', '797800657'),
(1, 'Umulisa', 'Diane', 'umulisa@gmail.com', '797800657');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `production_id` int(46) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unit_price` int(250) NOT NULL,
  `total_price` int(50) NOT NULL,
  `production_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`production_id`, `product_name`, `quantity`, `unit_price`, `total_price`, `production_date`) VALUES
(1, 'Beans', 30, 550, 16500, '2023-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `UploadDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `Price`, `Quantity`, `UploadDate`) VALUES
(1, 'Kalisa', 6000.00, 5, '0000-00-00'),
(2, 'Kalisa', 6000.00, 5, '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `unit_price` double NOT NULL,
  `total_price` double NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `product_name`, `quantity`, `unit_price`, `total_price`, `purchase_date`) VALUES
(1, 'Beans', 30, 300, 9000, '2002-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(10) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `unit_price` int(250) NOT NULL,
  `total_price` int(100) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `product_name`, `quantity`, `unit_price`, `total_price`, `sales_date`) VALUES
(1, 'Beans', 28, 700, 19600, '2021-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `names` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `names`, `username`, `password`) VALUES
(1, 'IRAKOZE', 'IRA', '1234'),
(2, 'HAKIZA Emmy', 'Emmy123', 'password123'),
(3, 'IRAKOZE', 'IRA', '1234'),
(4, 'ryctgvujh', 'fyycfgvujhbk', 'ctuvyjhbkj'),
(5, 'vkbj,n', 'objln', 'op;nkm,'),
(6, 'yifvjhkbm', 'ilnk', '[j\'oml'),
(7, 'yifvjhkbm', 'ilnk', '[j\'oml'),
(8, 'yifvjhkbm', 'ilnk', '[j\'oml'),
(9, 'vyihk', 'uoubj', 'in'),
(10, 'gukj', ';nl', 'cfhg'),
(100, 'oliv', 'olv', '1234567890'),
(123, 'hfhfhf', 'fgjgjhg', '1234567890'),
(100000, 'oliv', 'olv', '1234567890'),
(1000000, 'oliv', 'olv', '1234567890'),
(222009003, 'Irakoze Maurine', 'Mauri', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agronomist`
--
ALTER TABLE `agronomist`
  ADD PRIMARY KEY (`agronomist_id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`BuyerID`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`FarmerID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `BuyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `FarmerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

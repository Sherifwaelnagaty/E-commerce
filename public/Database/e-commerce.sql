-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 01:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `userID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `Situation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(14) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_price` int(255) UNSIGNED NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `product_name`, `product_type`, `product_price`, `product_image`) VALUES
(1, 'BH&S \r\n', 'blouse', 650, 'images/whiteblouse.jpg'),
(2, 'Zara Jaket(India) \r\n', 'jacket', 750, 'images/zarajacket.jpg'),
(3, 'Zara Midi Dress  (India) \r\n', 'dress', 700, 'images/zaramididress.jpg'),
(4, 'Zara Long Dress  (India) \r\n', 'dress', 850, 'images/zaralongdress.jpg'),
(5, 'Zara Midi Dress  (India) \r\n', 'dress', 750, 'images/zaramididress2.png'),
(6, 'Turkey Midi Dress  \r\n', 'dress', 850, 'images/turkymididress.jpg'),
(7, 'Turkey Top  \r\n', 'top', 550, 'images/turkeytop.jpg'),
(8, 'Turkey Blouse  \r\n', 'blouse', 650, 'images/turkeyblouse.jpg'),
(9, 'Zara Cardigan  (India) \r\n', 'cardigan', 650, 'images/zaracardigan.jpg'),
(10, 'Zara Blouse (India) \r\n', 'blouse', 600, 'images/zarablouse.jpg'),
(11, 'Turkey Cardigan', 'cardigan', 750, 'images/turkeycardigan.jpg'),
(12, 'Turkey Blouse  \r\n', 'blouse', 650, 'images/turkeyblouse2.jpg'),
(13, 'Zara Blouse (India) \r\n', 'blouse', 600, 'images/zarablouse2.jpg'),
(14, 'Zara Jumpsuit (India) \r\n', 'jumpsuit', 750, 'images/zarajumpsuit.png'),
(15, 'Lebanon Long Dress \r\n', 'dress', 950, 'images/LebanonLongDress1.jpg'),
(16, 'Turkey Midi Dress \r\n', 'dress', 850, 'images/turkeymididress.jpg'),
(17, 'Zara Midi Dress', 'dress', 750, 'images/zaramididress2.jpg'),
(18, 'Zara Suit (India)\r\n', 'jumpsuit', 850, 'images/zarajumpsuit2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `Size` varchar(10) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`Size`, `Quantity`, `SizeID`, `productID`) VALUES
('L', 1, 1, 2),
('M', 1, 2, 2),
('L', 1, 3, 3),
('XL', 1, 4, 2),
('M', 1, 5, 4),
('L', 1, 6, 4),
('XL', 1, 7, 4),
('M', 1, 8, 5),
('L', 1, 9, 5),
('XL', 1, 10, 5),
('M', 1, 11, 6),
('L', 1, 12, 6),
('XL', 1, 13, 6),
('S', 1, 14, 7),
('M', 1, 15, 7),
('L', 1, 16, 7),
('M', 1, 17, 8),
('L', 1, 18, 8),
('M', 1, 19, 9),
('L', 1, 20, 9),
('L', 1, 21, 10),
('M', 1, 22, 11),
('L', 1, 23, 11),
('M', 1, 24, 12),
('L', 1, 25, 12),
('M', 1, 26, 13),
('L', 1, 27, 13),
('XL', 1, 28, 13),
('M', 1, 29, 14),
('L', 1, 30, 14),
('XL', 1, 31, 14),
('M', 1, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Address` text NOT NULL,
  `Email` text NOT NULL,
  `MobileNumber` int(11) NOT NULL,
  `Password` text NOT NULL,
  `Birthdate` date NOT NULL,
  `Type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `FirstName`, `LastName`, `Address`, `Email`, `MobileNumber`, `Password`, `Birthdate`, `Type`) VALUES
(2, 'Sherif', 'Nagaty', 'ELRehab', 'Sherifwael@gmail.com', 1112275122, '$2y$10$RPXUKAIDldrlH04v/2fIeuZtZJPKqWbW2kBpxDbMJsX7/v7EAHCoG', '2001-07-08', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`productID`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`SizeID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12343;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

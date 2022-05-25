-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 08:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
  `userID` int(255) NOT NULL,
  `productID` int(255) NOT NULL,
  `productQuantity` int(255) NOT NULL
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
  `produuct_size` varchar(11) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `product_name`, `product_type`, `product_price`, `produuct_size`, `product_image`) VALUES
(1, 'BH&S \r\n', 'White Blouse', 650, '0,1,3', 'images/whiteblouse.jpg'),
(2, 'Zara Jaket(India) \r\n', 'jacket', 750, 'M,L,XL', 'images/zarajacket.jpg'),
(3, 'Zara Midi Dress  (India) \r\n', 'dress', 700, 'L', 'images/zaramididress.jpg'),
(4, 'Zara Long Dress  (India) \r\n', 'dress', 850, 'M,L,XL', 'images/zaralongdress.jpg'),
(5, 'Zara Midi Dress  (India) \r\n', 'dress', 750, 'M,L,XL', 'images/zaramididress2.png'),
(6, 'Turkey Midi Dress  \r\n', 'dress', 850, 'one size', 'images/turkymididress.jpg'),
(7, 'Turkey Top  \r\n', 'top', 550, 'S,M,L', 'images/turkeytop.jpg'),
(8, 'Turkey Blouse  \r\n', 'blouse', 650, 'M,L', 'images/turkeyblouse.jpg'),
(9, 'Zara Cardigan  (India) \r\n', 'cardigan', 650, 'M,L', 'images/zaracardigan.jpg'),
(10, 'Zara Blouse (India) \r\n', 'blouse', 600, 'L', 'images/zarablouse.jpg'),
(11, 'Turkey Cardigan', 'cardigan', 750, 'M,L', 'images/turkeycardigan.jpg'),
(12, 'Turkey Blouse  \r\n', 'blouse', 650, 'M,L', 'images/turkeyblouse2.jpg'),
(13, 'Zara Blouse (India) \r\n', 'blouse', 600, 'M,L,XL', 'images/zarablouse2.jpg'),
(14, 'Zara Jumpsuit (India) \r\n', 'jumpsuit', 750, 'M,L,XL', 'images/zarajumpsuit.png'),
(15, 'Lebanon Long Dress \r\n', 'dress', 950, 'S,M,L,XL', 'images/LebanonLongDress1.jpg\r\nimages/LebanonLongDress2.jpg\r\nimages/LebanonLongDress3.jpg\r\nimages/LebanonLongDress4.jpg'),
(16, 'Turkey Midi Dress \r\n', 'dress', 850, 'M,L', 'images/turkeymididress.jpg'),
(17, 'Zara Midi Dress', 'dress', 750, 'M,L,XL', 'images/zaramididress2.jpg'),
(18, 'Zara Suit (India)\r\n', 'jumpsuit', 850, 'M,L,XL', 'images/zarajumpsuit2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `Size` varchar(10) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `SizeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'Sherif', 'Nagaty', 'EL Rehab 2,Cairo,Egypt', 'Sherifwael@gmail.com', 1112275122, '$2y$10$RPXUKAIDldrlH04v/2fIeuZtZJPKqWbW2kBpxDbMJsX7/v7EAHCoG', '2001-07-08', 'Admin'),
(3, 'borkena', 'faso', 'hofuof', 'habebaelkassas@gmail.com', 2147483647, '$2y$10$FHww/Iw2zokN.5z/cQaJGe9h/y1xUmRxCW91ZAnaN76a.P7WFePpG', '1999-04-05', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD UNIQUE KEY `userID` (`userID`),
  ADD UNIQUE KEY `productID` (`productID`);

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
  ADD PRIMARY KEY (`SizeID`),
  ADD UNIQUE KEY `productID` (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `size`
--
ALTER TABLE `size`
  ADD CONSTRAINT `size_ibfk_1` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

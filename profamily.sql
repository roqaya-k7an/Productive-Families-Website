-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 09:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profamily`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adno` int(11) NOT NULL,
  `adname` varchar(100) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adno`, `adname`, `phoneno`, `username`, `password`) VALUES
(1, 'maha', '0546782882', 'admin', '123456'),
(2, 'admin2', '', 'admin2', '123'),
(3, 'nawal', '0567883838', 'nawal@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `agentcar`
--

CREATE TABLE `agentcar` (
  `carid` int(11) NOT NULL,
  `kind` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `model` varchar(200) NOT NULL,
  `carimage` varchar(200) NOT NULL,
  `carnumber` varchar(50) NOT NULL,
  `agentno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agentcar`
--

INSERT INTO `agentcar` (`carid`, `kind`, `color`, `model`, `carimage`, `carnumber`, `agentno`) VALUES
(1, 'honda', 'white', 'Acord', 'img/6677.jpg', '123abc', 2),
(2, 'Toyota', 'grey', 'yaris', 'img/grey-hyundai-i30.jpg', '567fgh', 2),
(3, 'Hundai', 'black', 'Azera', 'img/33.jpg', '678bnm', 1),
(4, 'Hundai', 'black', 'Acord', 'img/456.jpg', '890nmb', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartno` int(11) NOT NULL,
  `productno` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `unitno` int(11) DEFAULT 1,
  `total` int(11) DEFAULT NULL,
  `clientid` int(11) NOT NULL,
  `proid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartno`, `productno`, `productname`, `price`, `image`, `unitno`, `total`, `clientid`, `proid`) VALUES
(12, 17, 'Salad', 40, 'img/07.jpg', 3, 120, 1, 1),
(14, 17, 'Salad', 40, 'img/07.jpg', 1, 40, 3, 1),
(15, 16, 'Eswara', 20, 'img/acss.jpg', 3, 60, 3, 1),
(17, 14, 'bag', 60, 'img/bagsmain.jpg', 2, 120, 4, 1),
(18, 16, 'Eswara', 20, 'img/acss.jpg', 2, 40, 4, 1),
(20, 17, 'Salad', 40, 'img/07.jpg', 3, 120, 3, 1),
(23, 23, 'ring', 20, 'img/777.jpg', 1, 20, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `cname`, `phoneno`, `address`, `username`, `password`) VALUES
(1, 'Khaled', '0564321456', 'Arar', 'khaled', '123456'),
(3, 'asma', '0567890321', 'city arar 12', 'asma', '1234567890'),
(4, 'reem', '0564383389', 'Arar', 'reem', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `clientaddress`
--

CREATE TABLE `clientaddress` (
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `addressno` int(11) NOT NULL,
  `clientid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientaddress`
--

INSERT INTO `clientaddress` (`city`, `street`, `location`, `addressno`, `clientid`) VALUES
('Arar', 'Fade king street ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.9516143174747!2d41.077116714496164!3d30.91597658157363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x156c11cace438435%3A0x6b51726bafb051b8!2sNorthern%20Border%20University!5e0!3m2!1sen!2ssa!4v1616672119808!5m2!1sen!2ssa', 0, 4),
('Arar', 'fade king', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.9516143174747!2d41.077116714496164!3d30.91597658157363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x156c11cace438435%3A0x6b51726bafb051b8!2sNorthern%20Border%20University!5e0!3m2!1sen!2ssa!4v1616907449816!5m2!1sen!2ssa', 1, 1),
('Arar', 'Fade king street ', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d855.7238975677404!2d41.07824826705121!3d30.917542454304336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x156c11cb21d67ddf%3A0x137e6add4f7b56e9!2z2YPZhNmK2Kkg2KfZhNmF2KzYqtmF2Lkg2LnYsdi52LE!5e0!3m2!1sen!2ssa!4v1616674594611!5m2!1sen!2ssa', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryagent`
--

CREATE TABLE `deliveryagent` (
  `agentid` int(11) NOT NULL,
  `agentname` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `kind` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deliveryagent`
--

INSERT INTO `deliveryagent` (`agentid`, `agentname`, `city`, `kind`, `nationality`, `username`, `password`, `phoneno`) VALUES
(1, 'Khaled', 'Arar', 'Male', 'Saudi', 'khaled', '123456', '0536788299'),
(2, 'Mohamed', '1', 'Male', 'Resident', 'mohamed', '123456', '0536788299');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydemand`
--

CREATE TABLE `deliverydemand` (
  `deno` int(11) NOT NULL,
  `demandno` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `accept` varchar(50) NOT NULL DEFAULT 'Waiting for shipping',
  `agentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deliverydemand`
--

INSERT INTO `deliverydemand` (`deno`, `demandno`, `clientid`, `proid`, `address`, `total`, `accept`, `agentid`) VALUES
(1, 9, 3, 1, 'city arar 12', 30, 'Delivered', 2),
(8, 12, 3, 1, 'city arar 12', 80, 'Delivered', 2),
(13, 9, 3, 1, 'city arar 12', 30, 'Delivered', 2),
(14, 15, 3, 1, 'city arar 12', 90, 'Waiting for shipping', 2),
(15, 18, 1, 1, 'Arar', 40, 'Delivered', 1),
(16, 24, 4, 2, 'Arar', 120, 'Delivered', 1),
(17, 25, 4, 2, 'Arar', 40, 'Waiting for shipping', 1);

-- --------------------------------------------------------

--
-- Table structure for table `demand`
--

CREATE TABLE `demand` (
  `demandno` int(11) NOT NULL,
  `productno` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `unitsno` int(11) NOT NULL DEFAULT 1,
  `total` int(11) NOT NULL,
  `accept` varchar(100) NOT NULL DEFAULT 'Waiting for reply',
  `clientid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `clientname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Not Ready',
  `ddate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demand`
--

INSERT INTO `demand` (`demandno`, `productno`, `productname`, `price`, `unitsno`, `total`, `accept`, `clientid`, `proid`, `clientname`, `status`, `ddate`) VALUES
(9, 7, 'Pasta', 30, 1, 30, 'accept', 3, 1, 'asma', 'Delivered', '2021-03-25'),
(10, 11, 'Pizza', 30, 3, 90, 'refuse', 3, 1, 'asma', 'Not Ready', '2021-03-25'),
(11, 14, 'bag', 60, 2, 120, 'refuse', 3, 1, 'asma', 'Not Ready', '2021-03-25'),
(12, 17, 'Salad', 40, 2, 80, 'accept', 3, 1, 'asma', 'Delivered', '2021-03-25'),
(13, 16, 'Eswara', 20, 5, 100, 'Waiting for reply', 3, 1, 'asma', 'Not Ready', '2021-03-25'),
(15, 11, 'Pizza', 30, 3, 90, 'accept', 3, 1, 'asma', 'Send to shipping', '2021-03-26'),
(16, 13, ' Hand cream', 50, 1, 50, 'refuse', 1, 1, 'Khaled', 'Not Ready', '2021-03-28'),
(18, 17, 'Salad', 40, 1, 40, 'accept', 1, 1, 'Khaled', 'Delivered', '2021-03-28'),
(19, 7, 'Pasta', 30, 3, 90, 'accept', 1, 1, 'Khaled', 'Not Ready', '2021-03-28'),
(20, 11, 'Pizza', 30, 2, 60, 'Waiting for reply', 1, 1, 'Khaled', 'Not Ready', '2021-03-28'),
(21, 14, 'bag', 60, 2, 120, 'Waiting for reply', 3, 1, 'asma', 'Not Ready', '2021-03-30'),
(22, 17, 'Salad', 40, 2, 80, 'Waiting for reply', 3, 1, 'asma', 'Not Ready', '2021-03-30'),
(23, 16, 'Eswara', 20, 3, 60, 'refuse', 3, 1, 'asma', 'Not Ready', '2021-03-30'),
(24, 19, 'face cream', 60, 2, 120, 'accept', 4, 2, 'reem', 'Delivered', '2021-04-02'),
(25, 18, 'Pasta with red sous', 40, 1, 40, 'accept', 4, 2, 'reem', 'Send to shipping', '2021-04-02'),
(26, 24, 'Evening Dress', 300, 2, 600, 'Waiting for reply', 4, 2, 'reem', 'Not Ready', '2021-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productno` int(11) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `discribe` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `properties` text NOT NULL,
  `preset` varchar(50) NOT NULL,
  `proid` int(11) NOT NULL,
  `catname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productno`, `productname`, `price`, `discribe`, `image`, `properties`, `preset`, `proid`, `catname`) VALUES
(7, 'Pasta', '30', 'Italian dish', 'img/03.jpg', 'full creamy', 'yes', 1, 'Food'),
(11, 'Pizza', '30', 'Meat Pizza with hot sauce', 'img/02.jpg', 'Soo Good', 'yes', 1, 'Food'),
(13, ' Hand cream', '50', 'Home Made Natural Ingredients\r\n', 'img/hand.jpg', 'Increases skin radiance', 'yes', 1, 'Health and Beauty'),
(14, 'bag', '60', 'hand made', 'img/bagsmain.jpg', 'Soo Good', 'yes', 1, 'Handicrafts'),
(15, 'Baby dress', '50', 'Cotton baby dress suitable for summer\r\n', 'img/dress.jpg', 'new style', 'yes', 1, 'Clothes'),
(16, 'Eswara', '20', 'bbbbbbb bbbb', 'img/acss.jpg', 'new style', 'no', 1, 'Accessories'),
(17, 'Salad', '40', 'french salad', 'img/01.jpg', 'Soo Good', 'no', 1, 'Food'),
(18, 'Pasta with red sous', '40', 'Pasta ,tomato , oil , meat and onion', 'img/4.png', 'Soo Good', 'yes', 2, 'Food'),
(19, 'face cream', '60', 'national component', 'img/hand.jpg', 'Increases skin radiance', 'no', 2, 'Health and Beauty'),
(20, 'Pasta', '50', 'test test test test', 'img/3.jpg', 'Soo Good', 'yes', 1, 'Food'),
(21, 'Cream ', '60', 'We can use it in the face and body ', 'img/890.jpg', 'full creamy', 'yes', 2, 'Health and Beauty'),
(22, 'body cream', '100', 'test test test test', 'img/446.jpg', 'Soo Good', 'yes', 2, 'Health and Beauty'),
(23, 'ring', '20', 'new style for girls', 'img/777.jpg', 'Soo Good', 'no', 2, 'Accessories'),
(24, 'Evening Dress', '300', 'nnn nnn nn nn n  n  n    mmmmmm', 'img/765.jpg', 'Soo Good', 'no', 2, 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `profamily`
--

CREATE TABLE `profamily` (
  `proid` int(11) NOT NULL,
  `proname` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `kind` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profamily`
--

INSERT INTO `profamily` (`proid`, `proname`, `city`, `kind`, `phoneno`, `summary`, `username`, `password`) VALUES
(1, 'Manal Sweets', 'Arar', 'Female', '0505050505', 'We prepare all kinds of sweets and pastries. ', 'manal', '12345678'),
(2, 'Maha El Enazi', 'Arar', 'Female', '056432', 'We make all kind of food for  wedding party ', 'maha', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `refuse`
--

CREATE TABLE `refuse` (
  `demandno` int(11) NOT NULL,
  `clientid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refuse`
--

INSERT INTO `refuse` (`demandno`, `clientid`, `proid`, `reason`) VALUES
(11, 3, 1, 'I am busy with another request'),
(16, 1, 1, 'Sorry I am busy'),
(23, 3, 1, 'test test test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adno`);

--
-- Indexes for table `agentcar`
--
ALTER TABLE `agentcar`
  ADD PRIMARY KEY (`carid`),
  ADD KEY `agentno` (`agentno`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartno`),
  ADD KEY `productno` (`productno`),
  ADD KEY `clientid` (`clientid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `clientaddress`
--
ALTER TABLE `clientaddress`
  ADD PRIMARY KEY (`addressno`),
  ADD KEY `addressno` (`addressno`);

--
-- Indexes for table `deliveryagent`
--
ALTER TABLE `deliveryagent`
  ADD PRIMARY KEY (`agentid`);

--
-- Indexes for table `deliverydemand`
--
ALTER TABLE `deliverydemand`
  ADD PRIMARY KEY (`deno`),
  ADD KEY `demandno` (`demandno`),
  ADD KEY `clientid` (`clientid`),
  ADD KEY `proid` (`proid`),
  ADD KEY `agentid` (`agentid`);

--
-- Indexes for table `demand`
--
ALTER TABLE `demand`
  ADD PRIMARY KEY (`demandno`),
  ADD KEY `productno` (`productno`),
  ADD KEY `clientid` (`clientid`),
  ADD KEY `proid` (`proid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productno`),
  ADD KEY `proid` (`proid`);

--
-- Indexes for table `profamily`
--
ALTER TABLE `profamily`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `refuse`
--
ALTER TABLE `refuse`
  ADD PRIMARY KEY (`demandno`),
  ADD KEY `clientid` (`clientid`),
  ADD KEY `proid` (`proid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agentcar`
--
ALTER TABLE `agentcar`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deliveryagent`
--
ALTER TABLE `deliveryagent`
  MODIFY `agentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deliverydemand`
--
ALTER TABLE `deliverydemand`
  MODIFY `deno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `demand`
--
ALTER TABLE `demand`
  MODIFY `demandno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `profamily`
--
ALTER TABLE `profamily`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agentcar`
--
ALTER TABLE `agentcar`
  ADD CONSTRAINT `agentcar_ibfk_1` FOREIGN KEY (`agentno`) REFERENCES `deliveryagent` (`agentid`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`productno`) REFERENCES `product` (`productno`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`);

--
-- Constraints for table `demand`
--
ALTER TABLE `demand`
  ADD CONSTRAINT `demand_ibfk_1` FOREIGN KEY (`clientid`) REFERENCES `client` (`clientid`),
  ADD CONSTRAINT `demand_ibfk_2` FOREIGN KEY (`proid`) REFERENCES `profamily` (`proid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`proid`) REFERENCES `profamily` (`proid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

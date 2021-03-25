-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2019 at 12:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` text NOT NULL,
  `about_desc` text NOT NULL,
  `about_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_desc`, `about_image`) VALUES
(1, 'ABOUT OUR ESHOP', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor..\r\n\r\nConsectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.', 'ab_pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_username` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'kafi', 'admin', 'admin'),
(2, 'kafi', 'kafeel', '0');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` text NOT NULL,
  `banner_name` text NOT NULL,
  `banner_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_name`, `banner_image`) VALUES
(1, 'Fall Ahead', 'Summer Arrivals', 'banner3.jpg'),
(2, 'Fall Ahead	', 'New Arrivals', 'banner5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `bill_name` text NOT NULL,
  `bill_email` text NOT NULL,
  `bill_mobile` varchar(255) NOT NULL,
  `bill_address` text NOT NULL,
  `bill_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `bill_name`, `bill_email`, `bill_mobile`, `bill_address`, `bill_status`) VALUES
(79, 'Women1', 'robert@yahoo.com1', '10313-9142', 'Gulbahr no 1 ', 1),
(80, 'Women2 ', 'robert@yahoo.com2', '0313-91422', 'Gulbahr no 2', 1),
(81, 'kafeel bhatti khan', 'kafeelbhatti014@yahoo.comkhan', '0313-9142226khan', 'Gulbahr no 1 Peshawar citykhan', 1),
(82, 'kafeel bhatti ', 'kafeelbhatti014@yahoo.com', '0313-9142226', 'Gulbahr no 1 Peshawar city111', 0),
(83, 'kafeel bhatti ', 'kafeelbhatti014@yahoo.com', '0313-9142226', 'Gulbahr no 1 Peshawar cityahmad', 1),
(84, 'kafeel bhatti ', 'kafeelbhatti014@yahoo.com', '0313-9142226m', 'Gulbahr no 1 Peshawar city', 1),
(85, 'kafeel bhatti ', 'kafeelbhatti014@yahoo.com', '0313-9142226mm', 'Gulbahr no 1 Peshawar city', 1),
(86, 'kh', 'khkafeelbhatti014@yahoo.com', 'kh0313-9142226', 'khGulbahr no 1 Peshawar city', 1),
(87, 'kafi', 'kafikafeelbhatti014@yahoo.com', 'kafi0313-9142226', 'kafiGulbahr no 1 Peshawar city', 1),
(88, 'kafeel bhatticheck ', 'kafeelbhatti014@yahoo.com', '0313-9142226', 'Gulbahr no 1 Peshawar city', 1),
(89, 'kafeel bhatti ssss', 'kafeelbhatti014@yahoo.com', '0313-9142226', 'Gulbahr no 1 Peshawar city', 0),
(90, 'sk', 'kafeelbhatti014@yahoo.com', '0313-9142226', 'Gulbahr no 1 Peshawar city', 0),
(91, 'taeba ', 'tebi@yahoo.com', '0313-9142', 'kpk', 1),
(92, 'taeba ', 'tebi@yahoo.com', '0313-9142', 'kpk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cart_quantity` varchar(50) DEFAULT NULL,
  `cart_size` varchar(50) NOT NULL,
  `cart_status` int(11) NOT NULL DEFAULT '0',
  `delivery_address` text NOT NULL,
  `bill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `customer_id`, `cart_quantity`, `cart_size`, `cart_status`, `delivery_address`, `bill_id`) VALUES
(175, 26, 56, '5 Qty', 'X-Small', 1, 'Gulbahr no 1 ', 79),
(176, 25, 56, '5 Qty', 'X-Small', 2, 'Gulbahr no 2', 80),
(177, 20, 55, '5 Qty', 'X-Small', 2, 'Gulbahr no 1 Peshawar citykhan', 81),
(178, 24, 55, '5 Qty', 'X-Small', 2, 'Gulbahr no 1 Peshawar cityahmad', 83),
(179, 19, 55, '5 Qty', 'X-Small', 2, 'Gulbahr no 1 Peshawar city', 84),
(180, 26, 55, '5 Qty', 'X-Small', 2, 'Gulbahr no 1 Peshawar city', 85),
(181, 25, 55, '5 Qty', 'X-Small', 2, 'khGulbahr no 1 Peshawar city', 86),
(182, 23, 55, '5 Qty', 'X-Small', 2, 'kafiGulbahr no 1 Peshawar city', 87),
(183, 21, 55, '5 Qty', 'X-Small', 2, 'Gulbahr no 1 Peshawar city', 88),
(184, 26, 55, '5 Qty', 'X-Small', 1, 'Gulbahr no 1 Peshawar city', 89),
(185, 20, 55, '5 Qty', 'X-Small', 1, 'Gulbahr no 1 Peshawar city', 90),
(186, 19, 57, '5 Qty', 'X-Small', 2, 'kpk', 91),
(187, 31, 57, '5 Qty', 'X-Small', 2, 'kpk', 92);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `image`) VALUES
(9, 'Men', '20190314061954bb2.jpg'),
(10, 'Women', '20190314062003bb1.jpg'),
(12, 'taeba', '20190405060319bb1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `addres` text NOT NULL,
  `email` text NOT NULL,
  `cell_num` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `addres`, `email`, `cell_num`, `map`) VALUES
(1, '12K Street, 45 Building Road California, USA.', 'kafeelbhatti01@yahooc.om', '0313-9851222', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d848309.5765284383!2d71.73621124932279!3d33.84560716350302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d34.009088!2d71.5907072!4m5!1s0x38df95ff048795b1%3A0x99a5ebb9aaa5b66c!2seshop!3m2!1d33.6685326!2d72.996769!5e0!3m2!1sen!2s!4v1552838099289\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_password` text NOT NULL,
  `customer_address` text NOT NULL,
  `customer_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_phone`) VALUES
(55, 'kafeel bhatti', 'kafeelbhatti014@yahoo.com', '1', 'Gulbahr no 1 Peshawar city', '0313-9142226'),
(56, 'Women', 'robert@yahoo.com', '1', 'Gulbahr no 1 ', '0313-9142'),
(57, 'taeba', 'tebi@yahoo.com', '1', 'kpk', '0313-9142');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_information`
--

CREATE TABLE `delivery_information` (
  `delivery_id` int(11) NOT NULL,
  `delivery_name` text NOT NULL,
  `delivery_email` text NOT NULL,
  `delivery_password` text NOT NULL,
  `delivery_title` text NOT NULL,
  `delivery_desc` text NOT NULL,
  `delivery_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_information`
--

INSERT INTO `delivery_information` (`delivery_id`, `delivery_name`, `delivery_email`, `delivery_password`, `delivery_title`, `delivery_desc`, `delivery_image`) VALUES
(1, 'ali', 'ali@yahoo.com', '9090', 'hey', 'hello sir here', 'KN4A7218 (2).jpg'),
(2, 'k', 'KAFEEL@YAHOO.COM', 'k', 'k', 'k', 'ab_pic.jpg'),
(3, 'tcs1', 'info@tcs1', '1', 'hello1', 'hi1\r\n\r\n												', 'Screen Shot 2019-03-29 at 11.25.42 AM.png');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `sales` text NOT NULL,
  `percent` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `offer_image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `sales`, `percent`, `status`, `offer_image`, `cat_id`, `sub_id`, `product_id`) VALUES
(30, 'sale', 'sale', 1, '1.png', 0, 0, 0),
(36, 'sale', 'sale', 0, '1.png', 0, 0, 0),
(37, '50% Sale', 'Upto 10%', 1, 'bb2.jpg', 9, 0, 0),
(38, '80% Sale', 'Upto 10%', 1, 'bottom2.jpg', 0, 18, 0),
(39, 'Sale 40%', 'Upto 5%', 1, 'bottom3.jpg', 0, 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `product_id` int(11) NOT NULL,
  `product_title` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_name` text NOT NULL,
  `product_price` text NOT NULL,
  `product_quality` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `sub_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`product_id`, `product_title`, `product_desc`, `product_name`, `product_price`, `product_quality`, `image`, `sub_id`) VALUES
(19, 'Eshop in National Landing', 'The community has some of the best transit access in the country with three metro stations, commuter rail access, and Reagan National Airport within walking distance. It has a variety of hotels, restaurants, high-rise apartment buildings, retail and commercial offices												\r\n												', 'Men Kurta New Design', '$1', '2', 'm2.jpg', 17),
(20, 'kk', 'q', 'short kurta', '$1', '2', 'm4.jpg', 17),
(21, 'p', 's', 'pent', '$100', '1', 'm8.jpg', 17),
(22, 'w', 'wwrrr', 'mix bags', '$19', '4', 'b6.jpg', 17),
(23, 'rw', 'ee', 'shoping bags', '$12', '3', 'b7.jpg', 17),
(24, 'rqqa', 'a', 'Women shirt', '$222', '2', 'w2.jpg', 17),
(25, 'ww', 'eer', 'Sandal Female', '$99', '3', 's4.jpg', 17),
(26, 'er', 'yy', 'Shoes mix', '$777', '1', 'w7.jpg', 17),
(27, 'wwi', 'owoow', 'Shorts', '$12', '2', 'w3.jpg', 18),
(28, 'pl', 'j', 'men jacket', '$177', '3', 'm8.jpg', 19),
(29, 'k', 'aqqq', 'pent', '$1', '2', 'b8.jpg', 26),
(30, 'k', 'q', 'mix bags', '$1', '3', 'b6.jpg', 24),
(31, 'kj', 'j', 'tebi pagal', '$1000000', '3', 'b7.jpg', 27);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `images_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`images_id`, `images`, `product_id`) VALUES
(4, 'b6.jpg', 19),
(5, 'b8.jpg', 20),
(6, 'd3.jpg', 21),
(7, 'm6.jpg', 23),
(8, 's8.jpg', 26);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` text NOT NULL,
  `slider_title` text NOT NULL,
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_title`, `slider_image`) VALUES
(2, 'The Biggest 2', 'Car Services', 'banner5.jpg'),
(3, 'The Biggest', 'Car Services', 'banner4.jpg'),
(4, 'kafeel', 'k', 'banner1.jpg'),
(5, 'The Biggest 2', 'ahmad', 'banner2.jpg'),
(6, 'kafeel', 'Car Services', 'banner3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_id` int(11) NOT NULL,
  `sub_title` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_id`, `sub_title`, `cat_id`) VALUES
(17, 'Kurta', 9),
(18, 'shalwar kameez', 9),
(19, 'Jacket', 9),
(20, 'Shorts', 9),
(21, 'T-Shirts', 9),
(22, 'Boots', 9),
(23, 'Sandals', 9),
(24, 'Backpacks & Bags', 9),
(25, 'Casual', 9),
(26, 'kurta', 10),
(27, 'ek pagal taeba :-p ', 12);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` text NOT NULL,
  `team_title` text NOT NULL,
  `team_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_title`, `team_image`) VALUES
(1, 'Rimsha Manzoor', 'Web Developer', 't2.jpg'),
(2, 'kafeel bhatti', 'Web Developer', 't1.jpg'),
(3, 'Abduallah', 'Web Developer', 't4.jpg'),
(4, 'amna', 'Web Developer', 't3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_information`
--
ALTER TABLE `delivery_information`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`images_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `delivery_information`
--
ALTER TABLE `delivery_information`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

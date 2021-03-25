-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 04:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'About GandalMaar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor..\r\n\r\nConsectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.\r\n\r\n												\r\n\r\n												\r\n\r\n												\r\n\r\n												', 'k4.jpg');

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
(2, 'kafi', 'kafeel', '0'),
(3, 'Mian Aizaz', 'admin', '12345');

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
  `bill_cnic` int(50) NOT NULL,
  `bill_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `bill_name`, `bill_email`, `bill_mobile`, `bill_address`, `bill_cnic`, `bill_status`) VALUES
(1, 'AIZAZ ', 'aizazalishah31@gmail.com', '3464346', 'sfklsjdkf', 2147483647, 1),
(2, 'dotcom ', 'miandawood31@gmail.com', '09543453', 'sfklsjdkf', 0, 1),
(3, 'AIZAZ ', 'aizazalishah31@gmail.com', '0', 'peshawar', 0, 1),
(4, 'AIZAZ ', 'mian2k18aizaz@gmail.com', '17101', 'peshawar', 2147483647, 1),
(5, 'jawad ', 'jawad123@gmail.com', '2147483647', 'peshawar', 0, 1),
(6, 'AIZAZ ', 'aizazalishah31@gmail.com', '17101', 'peshawar', 2147483647, 0),
(10, 'AIZAZ ', 'aizazalishah31@gmail.com', '17101', 'peshawar', 2147483647, 0),
(11, 'AIZAZ ', 'aizazalishah31@gmail.com', '17101', 'peshawar', 2147483647, 0),
(12, 'AIZAZ ', 'aizazalishah31@gmail.com', '17101', 'peshawar', 2147483647, 1),
(13, 'jhon ', 'jhonyjhon64@gmaill.com', '2147483647', 'peshawar', 2147483647, 0),
(14, 'Amir ', 'amir2dk@gmail.com', '2147483647', 'peshawar', 17101, 0),
(15, 'Amir ', 'amir2dk@gmail.com', '2147483647', 'peshawar', 2147483647, 0),
(16, 'anas ', 'anas32@gmail.com', '2147483647', 'peshawar', 0, 0),
(17, 'AIZAZ ', 'aizazalishah31@gmail.com', '17101', 'peshawar', 2147483647, 0),
(18, 'jhon ', 'jhony123@gmail.com', '2147483647', 'swat', 2147483647, 0),
(19, 'jhon ', 'jhony123@gmail.com', '2147483647', 'swat', 2147483647, 0),
(20, 'jhon ', 'jhony123@gmail.com', '2147483647', 'swat', 0, 0),
(21, 'AIZAZ ', 'mian2k18aizaz@gmail.com', '17101', 'peshawar', 0, 0),
(22, 'jhon ', 'jhony123@gmail.com', '2147483647', 'swat', 4534535, 0),
(23, 'jhon ', 'jhony123@gmail.com', '2147483647', 'swat', 2147483647, 0),
(24, 'jhon ', 'jhony123@gmail.com', '2147483647', 'swat', 4534535, 0),
(25, 'jhon ', 'jhonyjhon64@gmaill.com', '2147483647', 'peshawar', 232132141, 0),
(26, 'Amir ', 'amir2dk@gmail.com', '2147483647', 'peshawar', 0, 0),
(27, 'Amir ', 'amir2dk@gmail.com', '2147483647', 'peshawar', 0, 0),
(28, 'Amir ', 'amir2dk@gmail.com', '2147483647', 'peshawar', 0, 0),
(29, 'sheraz ', 'sheraz123@gmail.com', '1044903594', 'swat', 0, 0),
(30, 'sheraz ', 'sheraz123@gmail.com', '1044903594', 'swat', 0, 0),
(31, 'sheraz ', 'sheraz123@gmail.com', '1044903594', 'swat', 2147483647, 0),
(37, 'dawood ', 'miandawood31@gmail.com', '0', 'peshawar', 0, 0),
(38, 'dawood ', 'miandawood31@gmail.com', '0', 'peshawar', 0, 0),
(39, 'dawood ', 'miandawood31@gmail.com', '0', 'peshawar', 345234231, 0),
(40, 'anas ', 'anas32@gmail.com', '2147483647', 'peshawar', 0, 0),
(41, 'ali ', 'alli123@gmail.com', '2147483647', 'peshawar', 0, 0),
(42, 'ali ', 'alli123@gmail.com', '2147483647', 'peshawar', 0, 0),
(43, 'ali ', 'alli123@gmail.com', '2147483647', 'peshawar', 543543, 0),
(44, 'ali ', 'alli123@gmail.com', '2147483647', 'peshawar', 898787, 0),
(45, 'ali ', 'alli123@gmail.com', '2147483647', 'peshawar', 0, 0),
(46, 'jhon ', 'jhony123@gmail.com', '2147483647', 'swat', 0, 0);

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
(3, 15, 15, '1 Qty', 'Medium', 0, '', 0),
(4, 14, 15, '1 Qty', 'Small', 0, '', 0),
(7, 13, 17, '1 Qty', 'Small', 2, 'swat', 22),
(47, 13, 4, '6 Qty', 'medium', 0, '', 0),
(49, 19, 4, '1 Qty', 'Medium', 0, '', 0),
(50, 19, 4, '1 Qty', '', 0, '', 0),
(51, 19, 4, '1 Qty', '', 0, '', 0),
(52, 19, 4, '1 Qty', '', 0, '', 0),
(53, 13, 4, '1 Qty', '', 0, '', 0),
(54, 13, 4, '1 Qty', '', 0, '', 0),
(55, 19, 4, '1 Qty', '', 0, '', 0),
(56, 19, 4, '1 Qty', '', 0, '', 0),
(57, 19, 4, '1 Qty', 'Small', 0, '', 0),
(58, 18, 2, '1 Qty', 'Small', 0, '', 0),
(59, 18, 2, '1 Qty', 'Small', 0, '', 0),
(60, 18, 2, '1 Qty', 'Small', 0, '', 0),
(61, 13, 2, '1 Qty', 'Small', 0, '', 0),
(62, 14, 2, '1 Qty', 'Small', 1, 'peshawar', 39),
(95, 19, 17, '1 Qty', 'Small', 0, '', 0),
(96, 19, 17, '1 Qty', 'Small', 0, '', 0),
(97, 19, 17, '1 Qty', 'Small', 0, '', 0),
(98, 18, 17, '1 Qty', 'Small', 0, '', 0),
(99, 13, 17, '1 Qty', 'Small', 0, '', 0),
(100, 13, 17, '1 Qty', 'Small', 0, '', 0),
(101, 19, 15, '1 Qty', 'Small', 0, '', 0),
(102, 19, 15, '1 Qty', 'Small', 0, '', 0),
(103, 14, 16, '1 Qty', 'Small', 0, '', 0),
(104, 14, 16, '1 Qty', 'Small', 0, '', 0),
(111, 19, 12, '1 Qty', 'Small', 1, 'peshawar', 25),
(114, 25, 12, '1 Qty', 'Small', 0, '', 0),
(115, 19, 12, '1 Qty', 'Small', 0, '', 0),
(116, 13, 12, '1 Qty', 'Small', 0, '', 0),
(117, 13, 12, '1 Qty', 'Small', 0, '', 0),
(118, 19, 12, '1 Qty', 'Small', 0, '', 0),
(122, 12, 13, '1 Qty', 'Small', 1, 'peshawar', 26),
(123, 14, 14, '1 Qty', 'Small', 2, 'swat', 30),
(124, 19, 2, '1 Qty', 'Small', 2, 'peshawar', 35),
(125, 14, 2, '1 Qty', 'Small', 0, '', 0),
(126, 14, 2, '2 Qty', 'Large', 0, '', 0),
(127, 14, 4, '1 Qty', 'Small', 0, '', 0),
(128, 19, 15, '1 Qty', 'Small', 0, '', 0),
(129, 19, 15, '1 Qty', 'Small', 0, '', 0),
(130, 14, 15, '1 Qty', 'Small', 0, '', 0),
(131, 19, 15, '1 Qty', 'Small', 0, '', 0),
(132, 19, 15, '1 Qty', 'Small', 0, '', 0),
(133, 13, 16, '1 Qty', 'Small', 0, '', 0),
(134, 13, 16, '1 Qty', 'Small', 0, '', 0),
(135, 13, 16, '1 Qty', 'Small', 0, '', 0),
(136, 13, 16, '1 Qty', 'Small', 0, '', 0),
(137, 14, 16, '1 Qty', 'Small', 0, '', 0),
(138, 14, 16, '1 Qty', 'Small', 0, '', 0),
(139, 14, 16, '1 Qty', 'Small', 0, '', 0),
(140, 14, 16, '1 Qty', 'Small', 1, 'peshawar', 42),
(141, 14, 16, '1 Qty', 'Small', 1, 'peshawar', 43),
(142, 14, 16, '1 Qty', 'Small', 1, 'peshawar', 44),
(143, 13, 11, '1 Qty', 'Small', 0, '', 0),
(144, 13, 11, '1 Qty', 'Small', 0, '', 0),
(145, 14, 11, '1 Qty', 'Small', 0, '', 0),
(146, 13, 11, '1 Qty', 'Small', 0, '', 0),
(147, 13, 11, '1 Qty', 'Small', 0, '', 0),
(148, 13, 11, '1 Qty', 'Small', 0, '', 0),
(149, 13, 11, '1 Qty', 'Small', 0, '', 0),
(150, 13, 11, '1 Qty', 'Small', 0, '', 0),
(151, 13, 11, '1 Qty', 'Small', 0, '', 0),
(152, 13, 16, '1 Qty', 'Small', 0, '', 0),
(153, 13, 16, '1 Qty', 'Small', 0, '', 0),
(154, 13, 16, '1 Qty', 'Small', 1, 'peshawar', 45),
(155, 13, 10, '1 Qty', 'Small', 0, '', 0),
(156, 13, 10, '1 Qty', 'Small', 0, '', 0),
(157, 19, 17, '1 Qty', 'Small', 1, 'swat', 46);

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
(3, 'AIZAZ', '20191016024210560.jpg');

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
(2, 'UET Peshawar ', 'aizazalishah31@gmail.com', '03349047721', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_password` text NOT NULL,
  `customer_address` text NOT NULL,
  `customer_phone` text NOT NULL,
  `customer_cnic` int(40) NOT NULL,
  `m_status` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_address`, `customer_phone`, `customer_cnic`, `m_status`) VALUES
(2, 'dawood', 'miandawood31@gmail.com', '12345', 'peshawar', '12345', 0, 1),
(3, 'Abbas', 'abbasali31@gmail.com', '12345221', 'peshawar', '12345221', 0, 0),
(4, 'AIZAZ', 'mian2k18aizaz@gmail.com', '12345678', 'peshawar', '12345678', 17101, 1),
(6, 'dell', 'dell@gmail.com', '12345678', 'peshawar', '12345678', 2147483647, 1),
(8, 'aptech media', 'dell@gmail.com', '12345678', '9jkjh', '12345678', 2147483647, 0),
(9, 'aptech media', 'abbasali31@gmail.com', '12345221', '9jkjh', '12345221', 2147483647, 0),
(10, 'jawad', 'jawad123@gmail.com', '12312`42', 'peshawar', '12312`42', 2147483647, 1),
(11, 'AIZAZ', 'aizazalishah31@gmail.com', 'aizazali', 'peshawar', 'aizazali', 17101, 0),
(12, 'jhon', 'jhonyjhon64@gmaill.com', 'aizazzali1', 'peshawar', 'aizazzali1', 2147483647, 1),
(13, 'Amir', 'amir2dk@gmail.com', '1234abcd', 'peshawar', '1234abcd', 2147483647, 1),
(14, 'sheraz', 'sheraz123@gmail.com', 'sheraz', 'swat', 'sheraz', 1044903594, 0),
(15, 'anas', 'anas32@gmail.com', 'anas123', 'peshawar', 'anas123', 2147483647, 1),
(16, 'ali', 'alli123@gmail.com', '1234567', 'peshawar', '1234567', 2147483647, 0),
(17, 'jhon', 'jhony123@gmail.com', '123456789', 'swat', '123456789', 2147483647, 1);

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
(2, 'k', 'KAFEEL@YAHOO.COM', 'k', 'k', 'k', 'ab_pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `measurement`
--

CREATE TABLE `measurement` (
  `m_id` int(20) NOT NULL,
  `m_neck` varchar(50) NOT NULL,
  `m_shoulder` varchar(50) NOT NULL,
  `m_chest` varchar(50) NOT NULL,
  `m_waist` varchar(50) NOT NULL,
  `m_hips` varchar(60) NOT NULL,
  `m_arm` varchar(50) NOT NULL,
  `m_bisep` varchar(50) NOT NULL,
  `m_armpit` varchar(50) NOT NULL,
  `m_wrist` varchar(50) NOT NULL,
  `m_elbow` varchar(50) NOT NULL,
  `m_shoulder_knee` varchar(50) NOT NULL,
  `m_waist_ankle` varchar(50) NOT NULL,
  `m_chest_pocket` varchar(50) NOT NULL,
  `m_side_pocket` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurement`
--

INSERT INTO `measurement` (`m_id`, `m_neck`, `m_shoulder`, `m_chest`, `m_waist`, `m_hips`, `m_arm`, `m_bisep`, `m_armpit`, `m_wrist`, `m_elbow`, `m_shoulder_knee`, `m_waist_ankle`, `m_chest_pocket`, `m_side_pocket`, `customer_id`) VALUES
(17, 'hdsfhf', 'hh', 'lkhlh', 'lkhl', 'khlk', 'hlkh', 'lkkh', 'lkkhlk', 'hlk', 'hlk', 'hlk', 'hllkh', 'Left', 'Left', 3),
(19, 'nkld', 'lkjk', 'k', 'jkjj', 'jb', 'lkj', 'lkj', 'jkllkj', 'klj', 'kljklj', 'lkk', 'lk', 'Right', 'Left', 8),
(21, 'dshfh', 'llk', 'klj', 'ljlk', 'jl', 'kj', 'lkj', 'kljlk', 'jk', 'ljk', 'lj', 'klj', 'Left', 'Left', 2),
(22, 'kljkj`lkj', 'iilkh', 'klh', 'klh', 'lkhlkh', 'lkk', 'h', 'lh', 'lk', 'lkk', 'lkk', 'lkkh', 'Left', 'Left', 2),
(23, '2987', '6', '7', '9', '9', '9', '96', '7', '7', '7', '7', '7', 'Left', 'Left', 4),
(24, '28', '88', '6', '7', '6', '8', '8', '69', '3', '5', '5', '75', 'Both', 'Left', 6),
(25, 'jggjdhjk', 'gjgkjgk', 'wethk', 'hkh', 'kh', 'khk', 'hk', 'hkhk', 'hk', 'khk', 'kh', 'kh', 'Left', 'Both', 10),
(26, '477', '56', '65', '5', '44', '35', '55', '44', '33', '66', '44', '3', 'Left', 'Left', 11),
(27, 'hh', 'hkhl', 'llkh', 'lkh', 'lkh', 'lhk', 'lhk', 'lkkh', 'lhk', 'lh', 'lkkhh', 'lh', 'Left', 'Left', 4),
(28, '28', 'dfjd', 'kljk', 'lkkj', 'jlk', 'jlk', 'jlkj', 'lj', 'lkj', 'lkj', 'lkj', 'lkj', 'Left', 'Left', 4),
(29, '1', '7', '8', '8', '87', '87', '8787', '87', '8', '87', '87', '87', 'Left', 'Left', 12),
(30, '28', 'hh', 'lkhlh', 'lkh', 'lhlk', 'hl', 'hlk', 'hl', 'hlk', 'hlk', 'h', 'hlhk', 'Left', 'Left', 13),
(31, '786', '8', '877', '87', '7', '7', '7', '7', '7', '7', '6', '6', 'Left', 'Left', 15),
(32, '15656', 'Y8', '56', '56', '77', '8', '8', '8', '865', '7', '7', '7', 'Left', 'Right', 17),
(33, '44', '4', '4', '44', '4', '4', '4', '4', '4', '4', '4', '5', 'Right', 'Left', 17);

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
(1, 'Gull Ahmad Cotton', '20', 0, 'un9.jpg', 0, 0, 54),
(2, 'Gull Ahmad Cotton', '20', 0, 'un3.jpg', 1, 0, 0),
(4, 'Gull Ahmad Cotton', '20', 0, 'cartpng.png', 0, 0, 2),
(5, 'Gull Ahmad Cotton', '20', 0, 'bot_1.jpg', 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_name` text NOT NULL,
  `product_price` text NOT NULL,
  `product_quality` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `cloth_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_desc`, `product_name`, `product_price`, `product_quality`, `image`, `sub_id`, `cloth_status`) VALUES
(12, 'Cotton', '', 'Grace', '2000', '2', 'k6.jpg', 2, 1),
(13, 'Cotton', 'good', 'Grace', '2000', '2', 'k7.jpg', 2, 1),
(14, 'Cotton', '', 'Grace', '2500', '1', 'k4.jpg', 2, 1),
(15, 'Cotton', '', 'gul ahmad', '4500', '2', 'k2.jpg', 2, 1),
(17, 'Cotton', '										   \r\n												\r\n																						   \r\n												\r\n												', 'Cotton', '2000', '1', 'un3.jpg', 1, 0),
(18, 'Cotton', '										   \r\n												\r\n												', 'Cotton', '2000', '1', 'un6.jpg', 1, 0),
(19, 'Cotton', '										   \r\n												\r\n												', 'Cotton', '2500', '1', 'un9.jpg', 1, 0),
(20, 'Cotton', '', 'Kurta', '2500', '1', 'bb1.jpg', 4, 0),
(22, 'Cotton', '', 'Kurta', '4500', '2', 'banner4.jpg', 2, 0),
(23, 'grace', '', 'sdfsd', '575', '1', '', NULL, 0),
(25, 'Cotton', '', 'Grace', '2000', '1', 'bb2.jpg', 3, 0),
(26, 'jeens', '', 'gul ahmad', '2000', '2', 'k3.jpg', 2, 1);

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
(1, 'banner1.jpg', 0),
(2, 'cartpng.png', 3),
(3, 'un8.jpg', 8),
(4, 'k6.jpg', 12),
(5, 'k5.jpg', 13),
(6, 'k4.jpg', 13),
(7, 'k2.jpg', 14),
(8, 'b8.jpg', 13);

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
(8, 'New arraivals', 'Summer Collection', '2.jpg');

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
(1, 'UnStitched', 1),
(2, 'ReadyMade', 1),
(3, 'UnStitched', 2),
(4, 'ReadyMade', 2),
(5, 'ASHDJDH', 3);

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
(5, 'Mian Jawad Ahmad', 'Founder And CEO', 't1.jpg'),
(6, 'Mian Aizaz', 'Co-Founder And Web Developer', 't4.jpg'),
(7, 'Muhammad Aamir', 'Co-Founder and Graphic Designer', 't2.jpg');

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_information`
--
ALTER TABLE `delivery_information`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `measurement`
--
ALTER TABLE `measurement`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `FK_measurement_1` (`customer_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `delivery_information`
--
ALTER TABLE `delivery_information`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `measurement`
--
ALTER TABLE `measurement`
  MODIFY `m_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `measurement`
--
ALTER TABLE `measurement`
  ADD CONSTRAINT `FK_measurement_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

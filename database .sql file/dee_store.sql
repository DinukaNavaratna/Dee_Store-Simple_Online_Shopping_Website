-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2021 at 11:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dee_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `psw` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `psw`) VALUES
(1, 'Neetu Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'himaka perera', 'him', '123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Women'),
(2, 'Men'),
(3, 'Children'),
(4, 'Bags & Purses'),
(5, 'Footwear'),
(6, 'Accessories'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(100) NOT NULL,
  `cont_email` varchar(100) NOT NULL,
  `cont_sub` varchar(200) NOT NULL,
  `cont_msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_name`, `cont_email`, `cont_sub`, `cont_msg`) VALUES
(1, 'himaka perera', 'himaka@gmail.com', 'Asking new product', 'I want to hear about the new product'),
(2, 'thavi silva ', 'thavi@gmail.com', 'asking about product exchange', 'i want to change the product color that I ordered'),
(3, 'dilmi anjala', 'dilmianjala@gmail.com', 'asking about the price range', 'I want to hear some reasonable price range from your store');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_fname` varchar(50) NOT NULL,
  `emp_lname` varchar(50) NOT NULL,
  `emp_bday` date NOT NULL,
  `emp_gender` varchar(20) NOT NULL,
  `emp_address` varchar(200) NOT NULL,
  `emp_phone` int(10) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_fname`, `emp_lname`, `emp_bday`, `emp_gender`, `emp_address`, `emp_phone`, `emp_email`, `emp_type`) VALUES
(1, 'thavi', 'amnda', '2021-08-30', 'option2', 'colombo sri lanka', 773456677, 'thavi@gmail.com', 'sales Workers'),
(2, 'Dilmi', 'Anjala', '2021-01-11', 'on', 'gampaha ,sri lanka', 763452332, 'dilmi123@gmail.com', 'Stylist'),
(3, 'himaka', 'perera', '2021-08-29', 'Male', '1/21,flwr avenue,galle', 761234545, 'himaka@gmail.com', 'Fashion Designerr'),
(4, 'thavi', 'amnda', '2021-08-30', 'Female', 'colombo sri lanka', 2147483647, 'thavi@gmail.com', 'Merchandiser');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `order_id` varchar(5) DEFAULT NULL,
  `user_email` varchar(150) NOT NULL,
  `feed_msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `user_name`, `order_id`, `user_email`, `feed_msg`) VALUES
(1, 'Dilmi', 'Anjal', 'dilmi123@gmail.com', 'You have the most beautiful collection and I really love your watch collection and the jewelry collection love this. '),
(2, 'Dinuka N', '26', 'dinuka@g.com', 'chatbot feedback working...'),
(3, '', '19', 'zdkj@svjkd.xcv', 'chatbot feedback from non registered user...'),
(4, 'Dinuka N', '26', 'dinuka@g.com', 'i love ur prducts');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `prod_id`, `path`) VALUES
(20, 27, 'img13.jpeg'),
(21, 27, 'img13.jpeg'),
(22, 27, 'img13.jpeg'),
(23, 27, 'img13.jpeg'),
(24, 27, 'img13.jpeg'),
(25, 28, 'img14.jpeg'),
(26, 28, 'img14.jpeg'),
(27, 28, 'img14.jpeg'),
(28, 28, 'img14.jpeg'),
(29, 29, 'img15.jpeg'),
(30, 29, 'img15.jpeg'),
(31, 29, 'img15.jpeg'),
(32, 29, 'img15.jpeg'),
(33, 30, 'pic16.jpeg'),
(34, 30, 'pic16.jpeg'),
(35, 30, 'pic16.jpeg'),
(36, 31, 'img17.jpg'),
(37, 31, 'img17.jpg'),
(38, 31, 'img17.jpg'),
(39, 32, 'img18.jpg'),
(40, 32, 'img18.jpg'),
(41, 32, 'img18.jpg'),
(42, 33, 'img19.jpg'),
(43, 33, 'img19.jpg'),
(44, 33, 'img19.jpg'),
(45, 34, 'img20.jpg'),
(46, 34, 'img20.jpg'),
(47, 34, 'img20.jpg'),
(48, 35, 'img21.jpg'),
(49, 35, 'img21.jpg'),
(50, 35, 'img21.jpg'),
(51, 36, 'img25.jpg'),
(52, 36, 'img25.jpg'),
(53, 36, 'img25.jpg'),
(54, 37, 'img26.jpg'),
(55, 37, 'img26.jpg'),
(56, 38, 'img27.jpg'),
(57, 38, 'img27.jpg'),
(58, 39, 'img28.jpg'),
(59, 39, 'img28.jpg'),
(60, 39, 'img28.jpg'),
(61, 40, 'img32.jpg'),
(62, 40, 'img32.jpg'),
(63, 41, 'img29.jpg'),
(64, 41, 'img29.jpg'),
(65, 42, 'img33.jpg'),
(66, 42, 'img33.jpg'),
(67, 43, 'img82.jpg'),
(68, 43, 'img82.jpg'),
(69, 43, 'img82.jpg'),
(70, 43, 'img82.jpg'),
(71, 44, 'img84.jpg'),
(72, 44, 'img84.jpg'),
(73, 45, 'img83.jpg'),
(74, 45, 'img83.jpg'),
(75, 46, 'img85.jpg'),
(76, 46, 'img85.jpg'),
(77, 47, 'img86.jpg'),
(78, 47, 'img86.jpg'),
(79, 48, 'img89.jpg'),
(80, 48, 'img89.jpg'),
(81, 49, 'img36.jpg'),
(82, 49, 'img36.jpg'),
(83, 50, 'img37.jpg'),
(84, 50, 'img37.jpg'),
(85, 51, 'img38.jpg'),
(86, 51, 'img38.jpg'),
(87, 52, 'img45.jpg'),
(88, 52, 'img45.jpg'),
(89, 53, 'img46.jpg'),
(90, 53, 'img46.jpg'),
(91, 54, 'img48.jpg'),
(92, 54, 'img48.jpg'),
(93, 55, 'img60.jpg'),
(94, 55, 'img60.jpg'),
(95, 55, 'img60.jpg'),
(96, 56, 'img62.jpg'),
(97, 56, 'img62.jpg'),
(98, 57, 'img65.jpg'),
(99, 57, 'img65.jpg'),
(100, 58, 'img55.jpg'),
(101, 58, 'img55.jpg'),
(102, 59, 'img54.jpg'),
(103, 59, 'img54.jpg'),
(104, 60, 'img56.jpg'),
(105, 60, 'img56.jpg'),
(106, 61, 'img74.jpg'),
(107, 61, 'img74.jpg'),
(108, 62, 'img76.jpg'),
(109, 62, 'img76.jpg'),
(110, 63, 'img75.jpg'),
(111, 63, 'img75.jpg'),
(112, 64, 'img70.jpg'),
(113, 64, 'img70.jpg'),
(114, 65, 'img67.jpg'),
(115, 66, 'img71.jpg'),
(116, 66, 'img71.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(25) NOT NULL DEFAULT 'Not Paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `country`, `address`, `postcode`, `city`, `province`, `phone`, `email`, `total`, `timestamp`, `status`) VALUES
(19, 'Dinu n', 'Sri Lanka', '123, 456', '789', 'sdc', 'zxc', '1234568789', 'zdkj@svjkd.xcv', 3750, '2021-08-30 09:54:53', 'Completed'),
(20, 'Ddd jhb', 'Sri Lanka', 'bjh', '564', 'jhb', 'hj', '546', 'jvb', 500, '2021-08-30 10:14:48', 'Completed'),
(21, 'ddd bjh', 'Sri Lanka', 'bjh', '546', 'gvn', 'hkb', '64564', 'din', 1500, '2021-08-30 10:16:04', 'Completed'),
(22, 'ddd hbkj', 'Sri Lanka', 'bkjh', '465', 'bjh', 'hkb', '463', 'aaa', 750, '2021-08-30 10:18:25', 'Completed'),
(23, 'jghj kbj', 'Sri Lanka', 'hbkj', 'vhj', '415', '6jvh', '643', 'vjhdkc', 1250, '2021-08-30 10:22:08', 'Completed'),
(24, 'jkb kb', 'Sri Lanka', 'kb ', 'kjb', 'kb', 'bk', '64153', 'hkjbj', 600, '2021-08-30 10:22:48', 'Completed'),
(25, 'Dinuka nas', 'Sri Lanka', 'bjikd, ibn', 'ibn', 'bjink', 'bink', '46664', 'd@d.com', 500, '2021-08-30 13:11:54', 'Completed'),
(26, 'Dinuka N', 'Sri Lanka', 'asd, qwe', '45678', 'Col', 'Wes', '123456789', 'dinuka@g.com', 1000, '2021-08-30 14:06:35', 'Completed'),
(27, 'Thavi Amanda', 'Sri Lanka', 'No:1/21,Flower road,Galle', '11780', 'Koggala', 'southern province', '0764569008', 'thavi@gmail.com', 5000, '2021-09-10 19:12:36', 'Completed'),
(28, 'Keshi  Anjala', 'Sri Lanka', '1/21,flower Avenue,colombo', '11690', 'malabe', 'western province', '0764584567', 'keshi@gmail.com', 9000, '2021-09-14 07:24:48', 'Pending'),
(29, 'Priya Feranado', 'Sri Lanka', 'No:3/65,School lane,halpita,maharagam., sri lanka', '12567', 'Maharagama', 'western province', '0764568909', 'priya@gmail.com', 2400, '2021-09-17 12:55:51', 'Pending'),
(30, 'keshi anjala', 'Sri Lanka', 'gampaha ,sri lanka', '450', 'ganemulla', 'western province', '0786756775', 'keshi@gmail.com', 6700, '2021-09-18 14:21:24', 'Pending'),
(31, 'joey tribbiani', 'Sri Lanka', 'flower avenue,malabe, sri lanaka', '12560', 'malabe', 'western province', '0763456789', 'joey@gmail.com', 10500, '2021-09-18 14:24:04', 'Pending'),
(32, 'Dinuka Navaratna', 'Sri Lanka', '229/1A Makuluduwa Road, Bokundara', '10300', 'Piliyandala', 'Sri Lanka', '234234234', 'Dinuka.Navaratna@Gmail.com', 2200, '2021-09-20 09:24:43', 'Pending'),
(33, 'Dinuka Navaratna', 'Sri Lanka', '229/1A Makuluduwa Road, Bokundara', '10300', 'Piliyandala', 'Sri Lanka', '2', 'Dinuka.Navaratna@Gmail.com', 2200, '2021-09-20 09:26:06', 'Not Paid'),
(34, 'Dinuka Navaratna', 'Sri Lanka', '229/1A Makuluduwa Road, Bokundara', '10300', 'Piliyandala', 'Sri Lanka', '456', 'Dinuka.Navaratna@Gmail.com', 2500, '2021-09-20 09:28:03', 'Not Paid'),
(35, 'Dinuka Navaratna', 'Sri Lanka', '229/1A Makuluduwa Road, Bokundara', '10300', 'Piliyandala', 'Sri Lanka', '13', 'Dinuka.Navaratna@Gmail.com', 2700, '2021-09-20 09:32:01', 'Not Paid'),
(36, 'Dinuka Navaratna', 'Sri Lanka', '229/1A Makuluduwa Road, Bokundara', '10300', 'Piliyandala', 'Sri Lanka', '234', 'Dinuka.Navaratna@Gmail.com', 3200, '2021-09-20 09:33:22', 'Not Paid'),
(37, 'Dinuka Navaratna', 'Sri Lanka', '229/1A Makuluduwa Road, Bokundara', '10300', 'Piliyandala', 'Sri Lanka', '34', 'Dinuka.Navaratna@Gmail.com', 2700, '2021-09-20 09:34:15', 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `o_id`, `p_id`, `qty`, `total`) VALUES
(9, 19, 1, 2, 1000),
(10, 19, 2, 1, 1500),
(11, 19, 3, 1, 1250),
(12, 20, 1, 1, 500),
(13, 21, 2, 1, 1500),
(14, 22, 4, 1, 750),
(15, 23, 3, 1, 1250),
(16, 24, 5, 1, 600),
(17, 25, 1, 1, 500),
(18, 26, 1, 1, 500),
(19, 26, 1, 1, 500),
(20, 27, 28, 2, 5000),
(21, 28, 30, 3, 9000),
(22, 29, 52, 2, 2400),
(23, 30, 57, 1, 6700),
(24, 31, 43, 1, 10500),
(25, 32, 27, 1, 2200),
(26, 33, 27, 1, 2200),
(27, 34, 28, 1, 2500),
(28, 35, 29, 1, 2700),
(29, 36, 31, 1, 3200),
(30, 37, 29, 1, 2700);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `rank` int(11) NOT NULL DEFAULT 5,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `price`, `qty`, `rank`, `img`, `description`, `shipping`) VALUES
(27, 1, 'prod-01', 2200, 25, 5, 'img13.jpg', 'Dee Design - Women white cotton dress', 'island wide delivery'),
(28, 1, 'prod-02', 2500, 30, 5, 'img14.jpg', 'Dee Design - satin  halter maxi dress red', 'island wide delivery'),
(29, 1, 'prod-03', 2700, 40, 5, 'img15.jpg', 'Dee Design - blouson off shoulder puff sleeve maxi dress', 'island wide delivery'),
(30, 1, 'prod-04', 3000, 20, 5, 'pic16.jpg', 'Dee Design - satin  halter maxi dress light pink(limited edition)', 'island wide delivery'),
(31, 1, 'prod-05', 3200, 50, 5, 'img17.jpg', 'Dee Design - Women red neck tie part dress', 'island wide delivery'),
(32, 1, 'prod-06', 3500, 50, 4, 'img18.jpg', 'Dee Design - light green open shoulder maxi dress', 'island wide delivery'),
(33, 1, 'prod-07', 3700, 50, 5, 'img19.jpg', 'Dee Design - Women white cotton dress', 'island wide delivery with card payment (No cash on Delivery)'),
(34, 1, 'prod-08', 4500, 100, 5, 'img20.jpg', 'Dee Design - Women bridesmaid navy blue dress', 'island wide delivery with card payment (No cash on Delivery)'),
(35, 1, 'prod-09', 5000, 150, 5, 'img21.jpg', 'Dee Design - Women green leaf maxi dress', 'island wide delivery'),
(36, 2, 'prod-10', 8700, 30, 5, 'img25.jpg', 'Dee Design - Men pink blazer limited edition', 'island wide delivery'),
(37, 2, 'prod-11', 10500, 50, 5, 'img26.jpg', 'Dee Design - Men creamy brown full suit', 'island wide delivery with card payment (No cash on Delivery)'),
(38, 2, 'prod-12', 12000, 58, 5, 'img27.jpg', 'Dee Design  -Men dark blue full suit', 'island wide delivery with card payment (No cash on Delivery)'),
(39, 2, 'prod-13', 14500, 40, 5, 'img28.jpg', 'Dee Design - Men ash check limited edition full suit', 'island wide delivery'),
(40, 2, 'prod-14', 11500, 50, 5, 'img32.jpg', 'Dee Design -Men black forest full suit', 'island wide delivery'),
(41, 2, 'prod-15', 10700, 60, 5, 'img29.jpg', 'Dee Design  - Men white outfit casual wear', 'island wide delivery'),
(42, 2, 'prod-16', 4500, 60, 5, 'img33.jpg', 'Dee Design - Men light cream sweater/jacket', 'island wide delivery'),
(43, 3, 'prod-17', 10500, 50, 5, 'img82.jpg', 'Dee Design - Men Watch Armani  exchange stainless steel watch', 'island wide delivery with card payment (No cash on Delivery)'),
(44, 3, 'prod-18', 12700, 40, 5, 'img84.jpg', 'Dee Design - classic Men watch with round dial', 'island wide delivery with card payment (No cash on Delivery)'),
(45, 3, 'prod-19', 13900, 70, 5, 'img83.jpg', 'Dee Design - Tommy Hilfiger Men watch Limited Edition', 'island wide delivery'),
(46, 3, 'prod-20', 4500, 100, 5, 'img85.jpg', 'Dee Design - Men stainless watch with blue face', 'island wide delivery'),
(47, 3, 'prod-21', 15700, 45, 5, 'img86.jpg', 'Dee Design - Men Emporia Armani leather watch', 'island wide delivery with card payment (No cash on Delivery)'),
(48, 3, 'prod-22', 4300, 150, 5, 'img89.jpg', 'Dee Design - Women silver stainless watch', 'island wide delivery'),
(49, 4, 'prod-23', 3200, 100, 5, 'img36.jpg', 'Dee Design - Women tommy Hilfiger bag', 'island wide delivery'),
(50, 4, 'prod-24', 4800, 120, 5, 'img37.jpg', 'Dee Design - Women valentine Gucci bag', 'island wide delivery'),
(51, 4, 'prod-25', 5100, 80, 5, 'img38.jpg', 'Dee Design - Women rose gold chain louis Vuitton clutch bag ', 'island wide delivery with card payment (No cash on Delivery)'),
(52, 4, 'prod-26', 1200, 200, 5, 'img45.jpg', 'Dee Design - Women light pink clutch purse', 'island wide delivery'),
(53, 4, 'prod-27', 2000, 150, 5, 'img46.jpg', 'Dee Design  - Women GUCCI black clutch purse', 'island wide delivery'),
(54, 4, 'prod-28', 1800, 50, 5, 'img48.jpg', 'Dee Design - Women white clutch purse', 'island wide delivery'),
(55, 5, 'prod-29', 3500, 100, 5, 'img60.jpg', 'Dee Design - Women espadrilles sandal', 'island wide delivery'),
(56, 5, 'prod-30', 5400, 50, 5, 'img62.jpg', 'Dee Design -Women pink strape espedrills sandle', 'island wide delivery'),
(57, 5, 'prod-31', 6700, 100, 5, 'img65.jpg', 'Dee Design  - women wedge esperdrills heel', 'island wide delivery with card payment (No cash on Delivery)'),
(58, 5, 'prod-32', 5800, 100, 5, 'img55.jpg', 'Dee Design  -Women Charles Keith pink heel', 'island wide delivery with card payment (No cash on Delivery)'),
(59, 5, 'prod-33', 6800, 200, 5, 'img54.jpg', 'Dee Design - Women High Heels ALDO ', 'island wide delivery'),
(60, 5, 'prod-34', 10500, 30, 5, 'img56.jpg', 'Dee Design -Women limited edition ALDO High heels', 'island wide delivery with card payment (No cash on Delivery)'),
(61, 6, 'prod-35', 500, 200, 5, 'img74.jpg', 'Dee Design -Women earing set gold', 'island wide delivery'),
(62, 6, 'prod-36', 600, 200, 5, 'img76.jpg', 'Dee Design  - Women gold necklace butterfly pendant', 'island wide delivery'),
(63, 6, 'prod-37', 1000, 100, 5, 'img75.jpg', 'Dee Design - Women Earrings set silver', 'island wide delivery'),
(64, 7, 'prod-38', 1000, 100, 4, 'img70.jpg', 'Dee Design  -Women summer hat', 'island wide delivery'),
(65, 7, 'prod-39', 1500, 300, 5, 'img67.jpg', 'Dee Design -Women sporty hat pink', 'island wide delivery'),
(66, 7, 'prod-40', 2000, 150, 5, 'img71.jpg', 'Dee Design - Women summer hat with black tie', 'island wide delivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `psw`, `name`, `country`, `address`, `postcode`, `city`, `province`, `phone`) VALUES
(2, 'vjhdkc', '6048eae18204197897abb2177e6cda80', 'jghj kbj', 'Sri Lanka', 'hbkj', 'vhj', '415', '6jvh', '643'),
(3, 'hkjbj', '289b493e37f138db551ff62156baffa4', 'jkb kb', 'Sri Lanka', 'kb ', 'kjb', 'kb', 'bk', '64153'),
(4, 'd@d.com', '53973b28603ce84c4fa5543ca8511d72', 'Dinuka nas', 'Sri Lanka', 'bjikd, ibn', 'ibn', 'bjink', 'bink', '46664'),
(5, 'dinuka@g.com', '53973b28603ce84c4fa5543ca8511d72', 'Dinuka N', 'Sri Lanka', 'asd, qwe', '45678', 'Col', 'Wes', '123456789'),
(6, 'thavi@gmail.com', '65c8477703e2a79662eb42c3ffe5fea1', 'Thavi Amanda', 'Sri Lanka', 'No:1/21,Flower road,Galle', '11780', 'Koggala', 'southern province', '0764569008'),
(7, 'keshi@gmail.com', 'e953241d6aad377643fc670938d11cf6', 'Keshi  Anjala', 'Sri Lanka', '1/21,flower Avenue,colombo', '11690', 'malabe', 'western province', '0764584567'),
(8, 'priya@gmail.com', '0b1c8bc395a9588a79cd3c191c22a6b4', 'Priya Feranado', 'Sri Lanka', 'No:3/65,School lane,halpita,maharagam., sri lanka', '12567', 'Maharagama', 'western province', '0764568909'),
(10, 'tutu@gmail.com', 'ef983f21f6889b7a6914bda3ce00cf38', 'neetu', 'sri lanka', '1/21,school road,dehiwala,sri lanka', '11690', 'nugegoda', 'wetern province', '077567890456'),
(12, 'joey@gmail.com', 'd6ba0682d75eb986237fb6b594f8a31f', 'joey tribbiani', 'Sri Lanka', 'flower avenue,malabe, sri lanaka', '12560', 'malabe', 'western province', '0763456789'),
(13, 'Dinuka.Navaratna@Gmail.com', '53973b28603ce84c4fa5543ca8511d72', 'Dinuka Navaratna', 'Sri Lanka', '229/1A Makuluduwa Road, Bokundara', '10300', 'Piliyandala', 'Sri Lanka', '234234234');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `ven_id` int(11) NOT NULL,
  `ven_fname` varchar(50) NOT NULL,
  `ven_lname` varchar(50) NOT NULL,
  `ven_email` varchar(150) NOT NULL,
  `ven_phone` int(10) NOT NULL,
  `ven_type` varchar(200) NOT NULL,
  `item_details` varchar(500) NOT NULL,
  `item_color` varchar(100) NOT NULL,
  `item_size` varchar(50) NOT NULL,
  `item_qty` int(20) NOT NULL,
  `item_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`ven_id`, `ven_fname`, `ven_lname`, `ven_email`, `ven_phone`, `ven_type`, `item_details`, `item_color`, `item_size`, `item_qty`, `item_price`) VALUES
(1, 'gihan', 'ranaweera', 'gihan@gmail.com', 785674545, 'Men shirts', '', '', '', 0, 0),
(2, 'disney', 'perera', 'disney@gmail.com', 764568909, 'Shoes', 'Leather shoes collection', 'brown', 'L', 10, 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `img` (`img`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`ven_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

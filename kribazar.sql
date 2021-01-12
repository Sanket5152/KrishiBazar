-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2017 at 07:03 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kribazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `apmc_details`
--

CREATE TABLE IF NOT EXISTS `apmc_details` (
  `ap_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ap_place` varchar(30) NOT NULL,
  `ap_dist` varchar(30) NOT NULL,
  `ap_add` varchar(300) NOT NULL,
  `ap_estayear` int(4) NOT NULL,
  `ap_regu` varchar(30) NOT NULL,
  `ap_markname` varchar(100) NOT NULL,
  `ap_election` varchar(100) NOT NULL,
  `ap_chairname` varchar(200) NOT NULL,
  `ap_secname` varchar(200) NOT NULL,
  `ap_comm` varchar(100) NOT NULL,
  `ap_fee` varchar(100) NOT NULL,
  `ap_ai` varchar(100) NOT NULL,
  `ap_ex` varchar(100) NOT NULL,
  `ap_sur` varchar(100) NOT NULL,
  `ap_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `apmc_details`
--

INSERT INTO `apmc_details` (`ap_id`, `ap_place`, `ap_dist`, `ap_add`, `ap_estayear`, `ap_regu`, `ap_markname`, `ap_election`, `ap_chairname`, `ap_secname`, `ap_comm`, `ap_fee`, `ap_ai`, `ap_ex`, `ap_sur`, `ap_pass`) VALUES
(1, 'Anand', 'Anand', 'SARDAGUNJ ATPOST-ANAND', 1948, 'Regulated', 'Anand APMC', 'Elected', 'Rajitbhai k patel', 'Darshkumar B Patel', '1', '2', '24801291', '10341074', '14460217', 'abcd'),
(2, 'Khambhat', 'Anand', 'Pass raod,Near Swaminarayan vadi,Lal darvajaroad ', 2016, 'Regulated', 'Cotton Market Yard', 'Elected', 'Maheshkumar K Raval', 'Sanjaysinh J Rahol', '20', '0.50', '17022334', '13200733', '200', 'abcd'),
(3, 'dd', 'Anand', 'd', 0, 'Regulated', 'd', 'Elected', 'd', 'd', '', 'f;j;f;', 'jjfk;jf;q', ';f;l;fkl', '', 'abcd'),
(4, 'Ahemdabad', 'Ahemdabad', 'Sardar Patel Market O/s.Jamalpur Gate, Jamalpur, Ahmedabad.', 1948, 'Regulated', 'GUJARAT AGRICULTURAL PRODUCE MARKETS ', 'Nominated', 'Ketankumar Dineshbhai Patel', ' Dipak M  Patel', '1', '1', '204058554', '140526319', '06203010', 'abcd'),
(5, 'Bavla', 'Ahemdabad', 'Agricultural Produce Market Committee Bavla, STATION ROAD, AT&TA:BAVLA, Distt. Ahmedabad.(GUJARAT)', 1943, 'Regulated', 'Bavala APMC', 'Elected', 'KANBHA FULABHAI GOHEL', 'JITENDRASINH UDAYSINH GOHIL', '', '1', '200000', '132060', '', 'abcd'),
(6, 'Dhandhuka', 'Ahemdabad', 'Agricultural Produce Market Committee Dhandhuka AWADA CHOWK Dhandhuka', 1957, 'Regulated', 'Dhandhuka', 'Elected', 'S B Gohil', 'D A Chavada', '1', '1', '8705474', '13997704', '5292230', 'abcd'),
(7, 'Nadiad', 'Kheda', 'OUT SIDE SALOON DARWAJA JIRU VALIYARI MARKET NADIAD', 1948, 'Regulated', 'Nadiad APMC Market', 'Elected', 'Vipulbhai K Patel', 'Arvindbhai Patel', '5', '0.80', '25719000', '19690000', '6029000', 'abcd'),
(8, 'Halol', 'Panchmahal', 'Agricultural Produce Market Committee,Near Varia Colony Halol Dist. Panchmahals', 1958, 'Regulated', 'Gujarat Agricultural Produce Markets ', 'Elected', 'Shree Arvindbhai Somabhai patel', 'Shree Amitbhai A Patel', '1', '0.80', '3109199', '2535968', '573231', 'abcd'),
(9, 'Godhara', 'Panchmahal', 'Opp. New Bus stand Near Rana Society Godhra :- 389001 Panchmahal. Vist us: www.apmcgodhra.org', 1949, 'Regulated', 'Gujrat agriculture produce market act ', 'Elected', 'Shri Rajendrasinh Chauhan', 'Prakshchandra A Patel', '1', '1', '28044658', '21941177', '6103481', 'abcd'),
(10, 'Tarapur', 'Anand', 'A.P.M.C. KHAMBHAT-TARAPUR ROAD TARAPUR.388180 TA.TARAPUR. DIST-ANAND', 1999, 'Regulated', 'SOJITRA', 'Elected', 'KHENGARBHAI J  GOHEL', 'VIKRAMBHAI B  RABARI', '0.35', '0.50', '10055827', '7286952', '2768875', 'abcd'),
(11, 'Abadasa', 'Kutch', 'Agricultural Produce Market Committee, Abadasa, ', 2001, 'Regulated', 'APMC', 'Elected', 'Rambhai Patel', 'Satishbhai Patel', '1', '0.5', '1228589', '256315', '875632', 'abcd'),
(12, 'Junagadh', 'Junagadh', 'Dolatpara Junagadh', 1991, 'Regulated', 'APMC Juanagdh', 'Elected', 'Bhikhabhai Patel', 'Haribhai Patel', '0.5', '1', '1228589', '24456', '1204133', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `ap_price`
--

CREATE TABLE IF NOT EXISTS `ap_price` (
  `recid` bigint(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(11) NOT NULL,
  `ap_id` int(11) NOT NULL,
  `ap_name` varchar(40) NOT NULL,
  `cmd_name` varchar(40) NOT NULL,
  `Max_Price` decimal(11,2) NOT NULL,
  `Min_Price` decimal(11,2) NOT NULL,
  PRIMARY KEY (`recid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

--
-- Dumping data for table `ap_price`
--

INSERT INTO `ap_price` (`recid`, `date`, `ap_id`, `ap_name`, `cmd_name`, `Max_Price`, `Min_Price`) VALUES
(1, '2017-04-19', 4, 'Ahemdabad', 'Banana - Green', 1800.00, 1000.00),
(2, '2017-04-19', 4, 'Ahemdabad', 'Beetroot', 1200.00, 500.00),
(3, '2017-04-19', 4, 'Ahemdabad', 'Bhindi(Ladies Finger)', 3000.00, 1500.00),
(4, '2017-04-19', 4, 'Ahemdabad', 'Bitter gourd', 6000.00, 2500.00),
(5, '2017-04-19', 4, 'Ahemdabad', 'Bottle gourd', 1400.00, 700.00),
(6, '2017-04-19', 4, 'Ahemdabad', 'Brinjal', 1500.00, 500.00),
(7, '2017-04-19', 4, 'Ahemdabad', 'Cabbage', 1200.00, 600.00),
(8, '2017-04-19', 4, 'Ahemdabad', 'Carrot', 1300.00, 600.00),
(9, '2017-04-19', 4, 'Ahemdabad', 'Cauliflower', 1500.00, 800.00),
(10, '2017-04-19', 4, 'Ahemdabad', 'Colacasia', 3000.00, 2500.00),
(11, '2017-04-19', 4, 'Ahemdabad', 'Cucumbar(Kheera)', 4000.00, 3000.00),
(12, '2017-04-19', 4, 'Ahemdabad', 'Drumstick', 1000.00, 500.00),
(13, '2017-04-19', 4, 'Ahemdabad', 'Elephant Yam (Suran)', 4500.00, 4000.00),
(14, '2017-04-19', 4, 'Ahemdabad', 'French Beans (Frasbean)', 3500.00, 2000.00),
(15, '2017-04-19', 4, 'Ahemdabad', 'Ginger(Green)', 2600.00, 1500.00),
(16, '2017-04-19', 4, 'Ahemdabad', 'Green Chilli', 2300.00, 1000.00),
(17, '2017-04-19', 4, 'Ahemdabad', 'Guar', 4500.00, 2000.00),
(18, '2017-04-19', 4, 'Ahemdabad', 'Lemon', 4500.00, 2000.00),
(19, '2017-04-19', 4, 'Ahemdabad', 'Mango (Raw-Ripe)', 2300.00, 800.00),
(20, '2017-04-19', 4, 'Ahemdabad', 'Onion Green', 700.00, 300.00),
(21, '2017-04-19', 4, 'Ahemdabad', 'Papaya (Raw)', 600.00, 400.00),
(22, '2017-04-19', 4, 'Ahemdabad', 'Peas Wet', 5500.00, 4000.00),
(23, '2017-04-19', 4, 'Ahemdabad', 'Pointed gourd (Parval)', 4500.00, 2500.00),
(24, '2017-04-19', 4, 'Ahemdabad', 'Pumpkin', 800.00, 500.00),
(25, '2017-04-19', 4, 'Ahemdabad', 'Tomato', 2000.00, 600.00),
(26, '2017-04-19', 4, 'Ahemdabad', 'Yam (Ratalu)', 2200.00, 2000.00),
(27, '2017-04-19', 4, 'Ahemdabad', 'Yam (Ratalu)', 2200.00, 2000.00),
(28, '2017-04-19', 2, 'Khambhat', 'Banana - Green', 1800.00, 1000.00),
(29, '2017-04-19', 2, 'Khambhat', 'Beetroot', 1200.00, 500.00),
(30, '2017-04-19', 2, 'Khambhat', 'Bhindi(Ladies Finger)', 3000.00, 1500.00),
(31, '2017-04-19', 2, 'Khambhat', 'Bitter gourd', 6000.00, 2500.00),
(32, '2017-04-19', 2, 'Khambhat', 'Bottle gourd', 1400.00, 700.00),
(33, '2017-04-20', 2, 'Khambhat', 'Banana - Green', 1800.00, 1000.00),
(34, '2017-04-20', 2, 'Khambhat', 'Beetroot', 1200.00, 500.00),
(35, '2017-04-20', 2, 'Khambhat', 'Bhindi(Ladies Finger)', 3000.00, 1500.00),
(36, '2017-04-20', 2, 'Khambhat', 'Bitter gourd', 6000.00, 2500.00),
(37, '2017-04-20', 2, 'Khambhat', 'Bottle gourd', 1400.00, 700.00),
(38, '2017-04-20', 2, 'Khambhat', 'Brinjal', 1500.00, 500.00),
(39, '2017-04-20', 2, 'Khambhat', 'Cabbage', 1200.00, 600.00),
(40, '2017-04-20', 2, 'Khambhat', 'Carrot', 1300.00, 600.00),
(41, '2017-04-20', 2, 'Khambhat', 'Cauliflower', 1500.00, 800.00),
(42, '2017-04-20', 2, 'Khambhat', 'Colacasia', 3000.00, 2500.00),
(43, '2017-04-20', 2, 'Khambhat', 'Cucumbar(Kheera)', 4000.00, 3000.00),
(44, '2017-04-20', 2, 'Khambhat', 'Drumstick', 1000.00, 500.00),
(45, '2017-04-20', 2, 'Khambhat', 'Elephant Yam (Suran)', 4500.00, 4000.00),
(46, '2017-04-20', 2, 'Khambhat', 'French Beans (Frasbean)', 3500.00, 2000.00),
(47, '2017-04-20', 2, 'Khambhat', 'Ginger(Green)', 2600.00, 1500.00),
(48, '2017-04-20', 2, 'Khambhat', 'Green Chilli', 2300.00, 1000.00),
(49, '2017-04-20', 2, 'Khambhat', 'Guar', 4500.00, 2000.00),
(50, '2017-04-20', 2, 'Khambhat', 'Lemon', 4500.00, 2000.00),
(51, '2017-04-20', 2, 'Khambhat', 'Mango (Raw-Ripe)', 2300.00, 800.00),
(52, '2017-04-20', 2, 'Khambhat', 'Onion Green', 700.00, 300.00),
(53, '2017-04-20', 2, 'Khambhat', 'Papaya (Raw)', 600.00, 400.00),
(54, '2017-04-20', 2, 'Khambhat', 'Peas Wet', 5500.00, 4000.00),
(55, '2017-04-20', 2, 'Khambhat', 'Pointed gourd (Parval)', 4500.00, 2500.00),
(56, '2017-04-20', 2, 'Khambhat', 'Pumpkin', 800.00, 500.00),
(57, '2017-04-20', 2, 'Khambhat', 'Tomato', 2000.00, 600.00),
(58, '2017-04-20', 2, 'Khambhat', 'Yam (Ratalu)', 2200.00, 2000.00),
(59, '2017-04-20', 2, 'Khambhat', 'Yam (Ratalu)', 2200.00, 2000.00),
(60, '2017-04-20', 1, 'Anand', 'Bhindi(Ladies Finger)', 3000.00, 2500.00),
(61, '2017-04-20', 1, 'Anand', 'Bitter gourd', 3500.00, 3000.00),
(62, '2017-04-20', 1, 'Anand', 'Bottle gourd', 750.00, 500.00),
(63, '2017-04-20', 1, 'Anand', 'Brinjal', 750.00, 500.00),
(64, '2017-04-20', 1, 'Anand', 'Cabbage', 1000.00, 800.00),
(65, '2017-04-24', 1, 'Anand', 'Bhindi(Ladies Finger)', 3000.00, 2500.00),
(66, '2017-04-24', 1, 'Anand', 'Bitter gourd', 3500.00, 3000.00),
(67, '2017-04-24', 1, 'Anand', 'Bottle gourd', 750.00, 500.00),
(68, '2017-04-24', 1, 'Anand', 'Brinjal', 750.00, 500.00),
(69, '2017-04-24', 1, 'Anand', 'Cabbage', 1000.00, 800.00),
(70, '2017-11-12', 1, 'Anand', 'Banana - Green', 1800.00, 1200.00),
(71, '2017-11-12', 1, 'Anand', 'Beetroot', 1000.00, 500.00),
(72, '2017-11-12', 1, 'Anand', 'Bhindi(Ladies Finger)', 3500.00, 2000.00),
(73, '2017-11-12', 1, 'Anand', 'Bitter gourd', 5000.00, 2500.00),
(74, '2017-11-12', 1, 'Anand', 'Bottle gourd', 1300.00, 600.00),
(75, '2017-11-12', 1, 'Anand', 'Brinjal', 1200.00, 800.00),
(76, '2017-11-12', 1, 'Anand', 'Cabbage', 1200.00, 700.00),
(77, '2017-11-12', 1, 'Anand', 'Carrot', 1500.00, 800.00),
(78, '2017-11-12', 1, 'Anand', 'Cauliflower', 1600.00, 1000.00),
(79, '2017-11-12', 1, 'Anand', 'Colacasia', 3000.00, 2500.00),
(80, '2017-11-12', 1, 'Anand', 'Cucumbar(Kheera)', 4000.00, 2500.00),
(81, '2017-11-12', 1, 'Anand', 'Drumstick', 1000.00, 500.00),
(82, '2017-11-12', 1, 'Anand', 'Elephant Yam (Suran)', 4500.00, 3600.00),
(83, '2017-11-12', 1, 'Anand', 'French Beans (Frasbean)', 3500.00, 2500.00),
(84, '2017-11-12', 1, 'Anand', 'Ginger(Green)', 2700.00, 1300.00),
(85, '2017-11-12', 1, 'Anand', 'Green Chilli', 2500.00, 1500.00),
(86, '2017-11-12', 1, 'Anand', 'Guar', 5000.00, 2000.00),
(87, '2017-11-12', 1, 'Anand', 'Lemon', 5000.00, 3000.00),
(88, '2017-11-12', 1, 'Anand', 'Mango (Raw-Ripe)', 2400.00, 1000.00),
(89, '2017-11-12', 1, 'Anand', 'Onion Green', 1000.00, 600.00),
(90, '2017-11-12', 1, 'Anand', 'Papaya (Raw)', 600.00, 500.00),
(91, '2017-11-12', 1, 'Anand', 'Peas Wet', 5500.00, 4500.00),
(92, '2017-11-12', 1, 'Anand', 'Pointed gourd (Parval)', 5000.00, 3500.00),
(93, '2017-11-12', 1, 'Anand', 'Pumpkin', 800.00, 500.00),
(94, '2017-11-12', 1, 'Anand', 'Sweet Potato', 1500.00, 1400.00),
(95, '2017-11-12', 1, 'Anand', 'Tomato', 1600.00, 1000.00),
(96, '2017-11-12', 1, 'Anand', 'Yam (Ratalu)', 2200.00, 2000.00),
(97, '2017-11-12', 1, 'Anand', 'Tomato', 1600.00, 1000.00),
(98, '2017-11-12', 1, 'Anand', 'Yam (Ratalu)', 2200.00, 2000.00),
(99, '2017-11-12', 1, 'Anand', 'Banana - Green', 1800.00, 1200.00),
(100, '2017-11-12', 1, 'Anand', 'Beetroot', 1000.00, 500.00),
(101, '2017-11-12', 1, 'Anand', 'Bhindi(Ladies Finger)', 3500.00, 2000.00),
(102, '2017-11-12', 1, 'Anand', 'Bitter gourd', 5000.00, 2500.00),
(103, '2017-11-12', 1, 'Anand', 'Bottle gourd', 1300.00, 600.00),
(104, '2017-11-12', 1, 'Anand', 'Brinjal', 1200.00, 800.00),
(105, '2017-11-12', 1, 'Anand', 'Cabbage', 1200.00, 700.00),
(106, '2017-11-12', 1, 'Anand', 'Carrot', 1500.00, 800.00),
(107, '2017-11-12', 1, 'Anand', 'Cauliflower', 1600.00, 1000.00),
(108, '2017-11-12', 1, 'Anand', 'Colacasia', 3000.00, 2500.00),
(109, '2017-11-12', 1, 'Anand', 'Cucumbar(Kheera)', 4000.00, 2500.00),
(110, '2017-11-12', 1, 'Anand', 'Drumstick', 1000.00, 500.00),
(111, '2017-11-12', 1, 'Anand', 'Elephant Yam (Suran)', 4500.00, 3600.00),
(112, '2017-11-12', 1, 'Anand', 'French Beans (Frasbean)', 3500.00, 2500.00),
(113, '2017-11-12', 1, 'Anand', 'Ginger(Green)', 2700.00, 1300.00),
(114, '2017-11-12', 1, 'Anand', 'Green Chilli', 2500.00, 1500.00),
(115, '2017-11-12', 1, 'Anand', 'Guar', 5000.00, 2000.00),
(116, '2017-11-12', 1, 'Anand', 'Lemon', 5000.00, 3000.00),
(117, '2017-11-12', 1, 'Anand', 'Mango (Raw-Ripe)', 2400.00, 1000.00),
(118, '2017-11-12', 1, 'Anand', 'Onion Green', 1000.00, 600.00),
(119, '2017-11-12', 1, 'Anand', 'Papaya (Raw)', 600.00, 500.00),
(120, '2017-11-12', 1, 'Anand', 'Peas Wet', 5500.00, 4500.00),
(121, '2017-11-12', 1, 'Anand', 'Pointed gourd (Parval)', 5000.00, 3500.00),
(122, '2017-11-12', 1, 'Anand', 'Pumpkin', 800.00, 500.00),
(123, '2017-11-12', 1, 'Anand', 'Sweet Potato', 1500.00, 1400.00),
(124, '2017-11-12', 1, 'Anand', 'Tomato', 1600.00, 1000.00),
(125, '2017-11-12', 1, 'Anand', 'Yam (Ratalu)', 2200.00, 2000.00),
(126, '2017-11-12', 1, 'Anand', 'Tomato', 1600.00, 1000.00),
(127, '2017-11-12', 1, 'Anand', 'Yam (Ratalu)', 2200.00, 2000.00),
(128, '2017-11-12', 1, 'Anand', 'Bhindi(Ladies Finger)', 3000.00, 2500.00),
(129, '2017-11-12', 1, 'Anand', 'Bitter gourd', 3500.00, 3000.00),
(130, '2017-11-12', 1, 'Anand', 'Bottle gourd', 750.00, 500.00),
(131, '2017-11-12', 1, 'Anand', 'Brinjal', 750.00, 500.00),
(132, '2017-11-12', 1, 'Anand', 'Cabbage', 1000.00, 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `b_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `pid` bigint(20) NOT NULL,
  `f_id` bigint(20) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `t_id` bigint(50) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `ap_id` bigint(20) NOT NULL,
  `price` decimal(11,3) NOT NULL,
  `add_p_status` tinyint(1) NOT NULL DEFAULT '0',
  `app_f_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`b_id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bids`
--


-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE IF NOT EXISTS `crop` (
  `crop_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `crop_name` varchar(30) NOT NULL,
  `type_id` varchar(20) NOT NULL,
  PRIMARY KEY (`crop_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`crop_id`, `crop_name`, `type_id`) VALUES
(1, 'Wheat', '1'),
(2, 'Maize', '1'),
(3, 'barley', '1'),
(4, 'Mango', '5'),
(5, 'Chickpea', '2'),
(6, 'Greengram', '2'),
(7, 'Brinjal', '6'),
(8, 'Tobacco', '8'),
(9, 'Paddy', '1'),
(10, 'Par millets', '1'),
(11, 'Groundnut', '3'),
(12, 'sunhemp', '7'),
(13, 'Banana', '5'),
(14, 'Pegion Pea', '2'),
(15, 'Kidney Bean', '2');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `Did` bigint(10) NOT NULL AUTO_INCREMENT,
  `Dname` varchar(20) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`Did`, `Dname`) VALUES
(1, 'Anand'),
(2, 'Ahemdabad'),
(3, 'Kheda'),
(4, 'Panchmahal'),
(5, 'Rajkot'),
(6, 'Kutch'),
(7, 'Bhavnagar'),
(8, 'Amreli'),
(9, 'Narmada'),
(10, 'Dang'),
(11, 'Junagadh'),
(12, 'Jamnagar'),
(13, 'Mehsana'),
(14, 'Gir Somnath');

-- --------------------------------------------------------

--
-- Table structure for table `f_details`
--

CREATE TABLE IF NOT EXISTS `f_details` (
  `Recid` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Village` varchar(30) NOT NULL,
  `Taluka` varchar(30) NOT NULL,
  `District` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`Phone`),
  UNIQUE KEY `a` (`Recid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `f_details`
--

INSERT INTO `f_details` (`Recid`, `Name`, `Address`, `Village`, `Taluka`, `District`, `State`, `Pincode`, `Phone`, `Email`, `Password`, `image`) VALUES
(1, 'Rameshbhai', 'matva road near fateganj ', 'borasali', 'borsali', '3', 'Gujarat', 362001, '9426547502', 'sanketundhad@gmail.com', 'abcd', ''),
(2, 'Manubhai', 'ode road street no 5', 'ode', 'anand', '1', 'Gujarat', 388001, '9429243240', 'sanketundhad@gmail.com', 'abcd', ''),
(3, 'mitul', 'kalupur main road', 'ahemdabad', 'ahemdabad', '2', 'Gujarat', 380001, '9429243241', 'mitulmohapatra@gmail.com', 'abcd', '');

-- --------------------------------------------------------

--
-- Table structure for table `f_product`
--

CREATE TABLE IF NOT EXISTS `f_product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `f_id` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `type_id` int(11) NOT NULL,
  `crop_id` int(11) NOT NULL,
  `Var_id` int(11) NOT NULL,
  `type_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `crop_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `var_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `ap_name` varchar(30) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `f_product`
--

INSERT INTO `f_product` (`p_id`, `image`, `f_id`, `date`, `type_id`, `crop_id`, `Var_id`, `type_name`, `crop_name`, `var_name`, `ap_name`, `Status`) VALUES
(1, 'product/admlogin.png', 1, '23/04/2017', 8, 8, 12, 'Drug and Addiction', 'Tobacco', 'GC-1', '4', 1),
(4, 'product/img14.jpg', 1, '12/11/2017', 1, 1, 1, 'Cereals', 'Wheat', 'GW-496', '1', 1),
(5, 'product/img14.jpg', 1, '12/11/2017', 1, 1, 1, 'Cereals', 'Wheat', 'GW-496', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `pid` bigint(35) NOT NULL AUTO_INCREMENT,
  `Did` bigint(35) NOT NULL,
  `pname` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`pid`, `Did`, `pname`) VALUES
(1, 1, 'Anand'),
(2, 1, 'Anklav'),
(3, 1, 'Borsad'),
(4, 1, 'Khambhat');

-- --------------------------------------------------------

--
-- Table structure for table `sell_approve`
--

CREATE TABLE IF NOT EXISTS `sell_approve` (
  `app_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pid` varchar(10) NOT NULL,
  `date` varchar(11) NOT NULL,
  `fid` bigint(20) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `tid` bigint(20) NOT NULL,
  `tname` varchar(40) NOT NULL,
  `t_add` varchar(50) NOT NULL,
  `ap_id` bigint(20) NOT NULL,
  `type_name` varchar(40) NOT NULL,
  `crop_name` varchar(40) NOT NULL,
  `var_name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `qty` decimal(11,2) DEFAULT NULL,
  `Total` decimal(11,2) DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sell_approve`
--

INSERT INTO `sell_approve` (`app_id`, `pid`, `date`, `fid`, `fname`, `tid`, `tname`, `t_add`, `ap_id`, `type_name`, `crop_name`, `var_name`, `price`, `qty`, `Total`, `Status`) VALUES
(8, '4', '12/11/2017', 1, 'Rameshbhai', 2, 'Sanket Trading ', 'shop No 5 Near Gate no 2', 1, 'Cereals', 'Wheat', 'GW-496', '1650.000', 20.00, 33000.00, 1),
(9, '5', '12/11/2017', 1, 'Rameshbhai', 1, 'Kalpvan  Trading', 'shop No 107, Anklav market', 1, 'Cereals', 'Wheat', 'GW-496', '1000.000', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `type_Id` int(15) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(20) NOT NULL,
  PRIMARY KEY (`type_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_Id`, `type_name`) VALUES
(1, 'Cereals'),
(2, 'Pulses'),
(3, 'Oil Seed'),
(4, 'Spices'),
(5, 'Fruits'),
(6, 'Vegetables'),
(7, 'Fiber Crops'),
(8, 'Drug and Addiction');

-- --------------------------------------------------------

--
-- Table structure for table `t_details`
--

CREATE TABLE IF NOT EXISTS `t_details` (
  `recid` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `recid` (`recid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `t_details`
--

INSERT INTO `t_details` (`recid`, `Name`, `Address`, `District`, `Place`, `State`, `Pincode`, `Phone`, `Email`, `Username`, `Password`, `Status`) VALUES
(9, 'Jalaram Trading', 'shop no 34 near gate 1', 'Kheda', '7', 'Gujarat', 387411, '9409410811', 'jalaram@gmail.com', 'jalaramtra', 'abcd', 'NotApproved'),
(1, 'Kalpvan  Trading', 'shop No 107, Anklav market', '1', '1', '''1', 380011, '9426547502', 'kalpvan@gmail.com', 'kalptra', 'abcd', 'Approved'),
(10, 'kishan trading', 'shop no 23  main road ', 'Panchmahal', '9', 'Gujarat', 388666, '9409410812', 'kishan@gmail.com', 'kishantra', 'abcd', 'NotApproved'),
(8, 'maruti trading', 'shop no 64 near main gate', 'Ahemdabad', '5', 'Gujarat', 388001, '9925964580', 'marutitrading@gmail.com', 'marutitra', 'abcd', 'NotApproved'),
(3, 'Ramkrishna Trading', 'Shop No 29,  Near Gate No 2 ', '1', '2', 'Gujarat', 396544, '9426547502', 'ramkrishna@gmail.com', 'ramkri', 'abcd', 'Approved'),
(2, 'Sanket Trading ', 'shop No 5 Near Gate no 2', '1', '1', 'Gujarat', 388001, '9429243240', 'sankettrading5@gmail.com', 'sankettra', 'abcd', 'Approved'),
(6, 'santkrupa Trading', 'shop no 28   main road', 'Ahemdabad', '4', 'Gujarat', 380001, '9426547502', 'santkrupa@gmail.com', 'santkrupatra', 'san@1234', 'Approved'),
(11, 'Shiv Trading co', 'Shop No 25', 'Anand', '1', 'Gujarat', 388001, '9426547502', 'Shiv123@gmail.com', 'ShivTra', 'san@1234', 'NotApproved'),
(7, 'Shreeji trading', 'shop no 32  gate no 2', 'Ahemdabad', '4', 'Gujarat', 388001, '9429243240', 'sanketundhad@student.aau.in', 'shreejitra', 'abcd', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `variety`
--

CREATE TABLE IF NOT EXISTS `variety` (
  `crop_id` int(11) NOT NULL,
  `var_id` int(11) NOT NULL AUTO_INCREMENT,
  `var_name` varchar(20) NOT NULL,
  PRIMARY KEY (`var_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `variety`
--

INSERT INTO `variety` (`crop_id`, `var_id`, `var_name`) VALUES
(1, 1, 'GW-496'),
(1, 2, 'Lokwan'),
(4, 3, 'Totapuri'),
(4, 4, 'Kesar'),
(4, 5, 'Langdo'),
(4, 6, 'Rajapuri'),
(6, 7, 'GM-2'),
(6, 8, 'GM-5'),
(8, 9, 'GCH-7'),
(8, 10, 'GCT-2'),
(8, 11, 'GCT-3'),
(8, 12, 'GC-1'),
(9, 13, 'Gurjari'),
(9, 14, 'jaya'),
(9, 15, 'JR-104'),
(9, 16, 'JR-3'),
(9, 17, 'JR-4'),
(10, 18, 'GHB-222'),
(11, 19, 'GG-20'),
(11, 20, 'G-2'),
(12, 21, 'GRC-321'),
(13, 22, 'Basari'),
(13, 23, 'G-9');

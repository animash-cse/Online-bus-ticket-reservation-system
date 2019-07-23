-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 06:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_ticket_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `logo`) VALUES
(1, 'OBRS', 'info@gmail.com', '293316c307992a6df7e3d2e080a2ed22', '');

-- --------------------------------------------------------

--
-- Table structure for table `bus_booking`
--

CREATE TABLE `bus_booking` (
  `booking_id` int(55) NOT NULL,
  `form_place` int(11) NOT NULL,
  `to_place` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `buy_type` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `busy_setnumber` varchar(500) NOT NULL,
  `booking_date` varchar(50) NOT NULL,
  `verify_code` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `payment` varchar(120) NOT NULL,
  `status` int(11) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_booking`
--

INSERT INTO `bus_booking` (`booking_id`, `form_place`, `to_place`, `name`, `mobile`, `email`, `password`, `buy_type`, `company_name`, `busy_setnumber`, `booking_date`, `verify_code`, `price`, `payment`, `status`, `time`) VALUES
(1, 1, 2, 'OLiullah', '01729892000', 'moliullah51@yahoo.com', '123', 'Normal', '3', ' A1,A2,', '2018-06-28', '1530179771', 0, '', 0, '7 PM'),
(2, 1, 2, 'Atiqullah', '01726815520', 'moliullah510@yahoo.com', '', 'Normal', '3', ' A3,A4,', '2018-06-28', '1530179877', 0, '', 0, ''),
(3, 1, 2, 'OLiullah', '01729900631', 'moliullah51@yahoo.com', '1234', 'Normal', '3', ' A1,', '2018-07-01', '1530423212', 200, 'Bkash', 0, '8 PM'),
(4, 1, 2, 'Noman', '01729906311', 'noman@gmail.com', '123', 'Normal', '3', ' A2,A3,A4,B1,', '2018-07-01', '1530423261', 400, 'Bkash', 1, '9 PM'),
(5, 1, 2, 'Atiqullah', '01729900631', 'oliullah@doofazit.com', '123', 'Normal', '3', ' A1,A2,A3,', '2018-07-31', '1533058924', 2100, 'Roket', 0, ''),
(6, 1, 2, 'OLiullah', '01729900631', 'oliullah@doofazit.com', '123', 'Normal', '3', ' A1,A2,', '2018-07-31', '1533062941', 1400, 'Roket', 1, '11 PM'),
(7, 1, 2, 'Animash', '01763235521', 'animash@gmail.com', 'Animash', 'AC', '3', ' D3,', '2019-02-03', '1548942023', 700, 'Bkash', 0, ''),
(11, 1, 2, 'Animash', '6567576', 'Animash@gmail.com', 'Animash', 'AC', '2', ' A3,A4,', '2019-03-19', '1553016205', 1000, 'Bkash', 0, ''),
(14, 1, 2, 'Ismail', '097565', 'is51@yahoo.com', '1234', 'Normal', '2', ' A3,A4,', '2019-03-20', '1553081661', 1000, 'Roket', 1, '05:35:05pm'),
(15, 1, 2, 'hg', '01744325635', 'hg@yahoo.com', '123456', 'AC', '3', ' A3,A4,', '2019-03-20', '1553081753', 1400, 'Roket', 1, '05:37:05pm'),
(16, 1, 2, 'hg', '01744325635', 'hg@yahoo.com', '123456', 'Normal', '2', ' B4,B3,', '2019-03-20', '1553081902', 1000, 'Roket', 1, '05:39:19pm'),
(17, 1, 2, 'moliullah', '098867575', 'moliullah51@yahoo.com', '123', 'Normal', '3', ' B4,B3,', '2019-03-20', '1553082088', 1400, 'Roket', 1, '05:42:12pm'),
(19, 8, 4, 'Animash', 'hkhkh', 'animash34@gmail.com', 'Animash', 'Normal', '6', ' B3,', '2019-03-21', '1553096288', 450, 'Bkash', 0, '07:47:41pm'),
(21, 1, 2, 'Opu', '4545325', 'opu@gmail.com', 'Animash', 'Normal', '2', ' E4,E3,F4,F3,', '2019-03-21', '1553098542', 2000, 'Roket', 1, '04:11:24pm'),
(22, 0, 0, 'Sadequl', '347892347', 'dddd@gmail.com', 'hjdgaskjdh', '', '', '', '', '1553098742', 0, '', 0, ''),
(23, 1, 2, 'Ismail', '77777777', 'animash35@gmail.com', 'Animash', 'AC', '3', ' E4,E3,', '2019-03-20', '1553098409', 1400, 'Bkash', 1, '11:35:44pm'),
(24, 1, 2, 'Opu Roy', '89723489347', 'opu1@gmail.com', 'Animash', 'Normal', '2', ' D4,D3,', '2019-03-21', '1553165743', 1000, 'Bkash', 0, '08:22:51pm'),
(25, 0, 0, 'Chandan', '656576', 'chad@gmail.com', 'Animash', '', '', '', '', '1553178218', 0, '', 0, ''),
(26, 0, 0, 'hhhh', '43267862', 'hhh@gmail.com', '86d8911b9b2190b03561463b0b48ca1a', '', '', '', '', '1553179673', 0, '', 0, ''),
(27, 0, 0, 'jhsdjhsd', '2378128973', 'dhshdg@gmail.com', '293316c307992a6df7e3d2e080a2ed22', '', '', '', '', '1553179864', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `bus_location`
--

CREATE TABLE `bus_location` (
  `bus_location_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_location`
--

INSERT INTO `bus_location` (`bus_location_id`, `from_id`, `to_id`, `company_id`, `price`, `time`) VALUES
(4, 1, 2, 3, 700, '8 PM'),
(5, 2, 6, 4, 500, '7 PM'),
(6, 1, 7, 2, 500, '9 PM'),
(7, 1, 2, 2, 700, '11 PM'),
(8, 8, 5, 5, 200, '7 PM'),
(9, 2, 8, 5, 400, '10 PM'),
(10, 2, 7, 2, 777, '10 PM'),
(11, 8, 4, 6, 450, '09:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `bus_set` varchar(10) NOT NULL,
  `price` double NOT NULL,
  `serial_id` varchar(100) NOT NULL,
  `date` varchar(40) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`card_id`, `company_id`, `bus_set`, `price`, `serial_id`, `date`, `status`) VALUES
(1, 3, 'A1', 0, '1530179771', '2018-06-28', 1),
(2, 3, 'A2', 0, '1530179771', '2018-06-28', 1),
(3, 3, 'A3', 0, '1530179877', '2018-06-28', 1),
(4, 3, 'A4', 0, '1530179877', '2018-06-28', 1),
(5, 3, 'B1', 0, '1530179928', '2018-06-28', 0),
(8, 3, 'B3', 0, '1530180060', '2018-06-28', 0),
(9, 3, 'B4', 0, '1530180060', '2018-06-28', 0),
(10, 3, 'B2', 0, '1530180342', '2018-06-28', 0),
(11, 3, 'A1', 0, '1530423212', '2018-07-01', 0),
(12, 3, 'A2', 0, '1530423261', '2018-07-01', 0),
(13, 3, 'A3', 0, '1530423261', '2018-07-01', 0),
(14, 3, 'A4', 0, '1530423261', '2018-07-01', 0),
(15, 3, 'B1', 0, '1530423261', '2018-07-01', 0),
(16, 3, 'A1', 0, '1533058924', '2018-07-31', 0),
(17, 3, 'A2', 0, '1533058924', '2018-07-31', 0),
(18, 3, 'A3', 0, '1533058924', '2018-07-31', 0),
(19, 3, 'A1', 0, '1533062941', '2018-08-01', 0),
(20, 3, 'A2', 0, '1533062941', '2018-08-01', 0),
(21, 3, 'D3', 0, '1548942023', '2019-02-03', 0),
(22, 5, 'D3', 0, '1548942697', '2019-01-31', 0),
(25, 2, 'A3', 0, '1553016205', '2019-03-19', 0),
(26, 2, 'A4', 0, '1553016205', '2019-03-19', 0),
(27, 3, 'D4', 0, '1553016497', '2019-03-19', 0),
(28, 3, 'D3', 0, '1553016497', '2019-03-19', 0),
(29, 2, 'D4', 0, '1553016579', '2019-03-19', 0),
(30, 2, 'C4', 0, '1553016579', '2019-03-19', 0),
(31, 2, 'A3', 0, '1553081661', '2019-03-20', 0),
(32, 2, 'A4', 0, '1553081661', '2019-03-20', 0),
(33, 3, 'A3', 0, '1553081753', '2019-03-20', 0),
(34, 3, 'A4', 0, '1553081753', '2019-03-20', 0),
(35, 2, 'B4', 0, '1553081902', '2019-03-20', 0),
(36, 2, 'B3', 0, '1553081902', '2019-03-20', 0),
(37, 3, 'B4', 0, '1553082088', '2019-03-20', 0),
(38, 3, 'B3', 0, '1553082088', '2019-03-20', 0),
(39, 3, 'D4', 0, '1553082521', '2019-03-20', 0),
(40, 3, 'D3', 0, '1553082521', '2019-03-20', 0),
(52, 3, 'E3', 0, '1553098409', '2019-03-20', 0),
(53, 2, 'C4', 0, '1553098409', '2019-03-21', 0),
(54, 2, 'C3', 0, '1553098409', '2019-03-21', 0),
(63, 2, 'A4', 0, '1553096288', '2019-03-21', 0),
(70, 3, 'C4', 0, '1553096288', '2019-03-21', 0),
(72, 2, 'E4', 0, '1553098542', '2019-03-21', 0),
(73, 2, 'E3', 0, '1553098542', '2019-03-21', 0),
(74, 2, 'F4', 0, '1553098542', '2019-03-21', 0),
(75, 2, 'F3', 0, '1553098542', '2019-03-21', 0),
(76, 6, 'B4', 0, '1553165743', '2019-03-21', 0),
(77, 6, 'C4', 0, '1553165743', '2019-03-21', 0),
(78, 6, 'B3', 0, '1553096288', '2019-03-21', 0),
(86, 6, 'C3', 0, '1553096288', '2019-03-21', 0),
(94, 2, 'D4', 0, '1553165743', '2019-03-21', 0),
(95, 2, 'D3', 0, '1553165743', '2019-03-21', 0),
(96, 6, 'D4', 0, '1553178218', '2019-03-21', 0),
(107, 6, 'C2', 0, '1553178218', '2019-03-21', 0),
(108, 6, 'C1', 0, '1553178218', '2019-03-21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_name`
--

CREATE TABLE `company_name` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_name`
--

INSERT INTO `company_name` (`company_id`, `company_name`) VALUES
(1, 'Ena Bus'),
(2, 'BRTC'),
(3, 'Shurobi '),
(4, 'Shakura'),
(5, 'Shemoly'),
(6, 'Sastc');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(4, 'Sadequl', 'animashroyappu@gmail.com', '01763235521', 'dfhj kjasdfh sak kajsdhasj kj sdfjsah'),
(5, 'Animash', 'Jtmbm1994@gmail.com', '01763235521', 'shgdahsd jkasdghasd jkasdhg a'),
(6, 'Dip', 'dip@gmail.com', '92849328417', 'vfdxzhfv jsdfhsjdfh ksjdfhkjshd'),
(8, 'Ismail', 'is@gamil.com', '92849328417', 'fdjhfadf kjhdf sakf kjsadfh '),
(9, 'Ismail', 'is@gamil.com', '92849328417', 'fdjhfadf kjhdf sakf kjsadfh '),
(10, 'Chandan', 'chandan@gmail.com', '3432894389', 'This application uses client');

-- --------------------------------------------------------

--
-- Table structure for table `district_location`
--

CREATE TABLE `district_location` (
  `dis_id` int(11) NOT NULL,
  `dis_name` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district_location`
--

INSERT INTO `district_location` (`dis_id`, `dis_name`) VALUES
(1, 'Dhaka'),
(2, 'Barisal'),
(3, 'Comilla'),
(4, 'Feni'),
(5, 'Bogura'),
(6, 'Barguna'),
(7, 'Potuya khali'),
(8, 'Thakurgaon'),
(11, 'Dinajpur bus stop'),
(12, 'Thakurgaon poli');

-- --------------------------------------------------------

--
-- Table structure for table `sub_district`
--

CREATE TABLE `sub_district` (
  `sub_strict_id` int(11) NOT NULL,
  `dis_id` int(11) NOT NULL,
  `sub_district_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bus_booking`
--
ALTER TABLE `bus_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bus_location`
--
ALTER TABLE `bus_location`
  ADD PRIMARY KEY (`bus_location_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `company_name`
--
ALTER TABLE `company_name`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_location`
--
ALTER TABLE `district_location`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `sub_district`
--
ALTER TABLE `sub_district`
  ADD PRIMARY KEY (`sub_strict_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus_booking`
--
ALTER TABLE `bus_booking`
  MODIFY `booking_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `bus_location`
--
ALTER TABLE `bus_location`
  MODIFY `bus_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `company_name`
--
ALTER TABLE `company_name`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `district_location`
--
ALTER TABLE `district_location`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub_district`
--
ALTER TABLE `sub_district`
  MODIFY `sub_strict_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

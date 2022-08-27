-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 03:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(232) NOT NULL,
  `mobile` varchar(232) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`, `email`, `mobile`) VALUES
(1, 'Admin', 'admin', 'c93ccd78b2076528346216b3b2f701e6', 'admin@gmail.com', '06203456745'),
(16, 'kisadmin', 'kisadmin', '6b3620fc96e733c4b20c7a03eb8a6dd7', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guestid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL,
  `email` varchar(232) NOT NULL,
  `mobile` varchar(232) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guestid`, `firstname`, `middlename`, `lastname`, `address`, `contactno`, `email`, `mobile`) VALUES
(1, 'dsaads', 'adasd', 'Anyad', '12345\r\nanyad\r\nMilano', '06302345678', '', ''),
(2, 'asa', 'asdadsaasd', 'adasd', 'Rakoczi utca 85\r\nbudapest\r\nhungary', '2331123123', '', ''),
(3, 'Jake', 'PAul', 'Smith', '213312\r\nLong Island\r\nNY\r\nUSA', '06204568937', '', ''),
(4, 'John', 'Smith', 'Curry', '1234\r\nXzyert street 23\r\nSzarajevo\r\nEuropean Union\r', '74589632', '', ''),
(5, 'Thomas', 'Andrew', 'Snodgrasss', '1234\r\nUnited States\r\nVisa street 86\r\n', '12343456788', '', ''),
(6, 'dsaads', 'adasd', 'Anyad', 'Rakoczi utca 85', '364578965', '', ''),
(7, 'andrew', 'joseph', 'rajesh', 'Islamadab\r\nPakistan', '789654123', '', ''),
(8, 'Ajaw0', 'J', 'Kumar', 'Delhi\r\nIndia', '2132312412245', '', ''),
(9, 'Scottie', 'M', 'Pippen', 'Chicago USA', '1233456712', '', ''),
(10, 'dsaads', 'asdadsaasd', 'xyz', 'Rakoczi utca 85', '1231231', '', ''),
(11, 'dsaads', 'asdadsaasd', 'Anyad', 'Rakoczi utca 85', '122312412', '', ''),
(12, 'dsaads', 'adasd', 'Joradan', '213123\r\nasddfasda\r\n2313231', '231312312', '', ''),
(13, 'dsaads', 'adasd', 'Anyad', 'Rakoczi utca 85', '2131234123', '', ''),
(14, 'dsaads', 'adasd', 'mekkabi', 'Rakoczi utca 85', '2131234123', '', ''),
(15, 'Ádám', 'Tamas', 'Jhonas', 'Rakoczi utca 85', '213123123112', '', ''),
(16, 'dsaads', 'adasd', 'anyad', 'Rakoczi utca 85', '1221321312', '', ''),
(17, 'THomas', 'Thomas', 'Clinton', 'Rakoczi utca 85', '12345142', '', ''),
(18, 'Ádám', 'Insta', 'Joseph', 'Rakoczi utca 85', '12312312341', '', ''),
(19, 'Tamas', 'Pista ', 'Joska', 'Rakoczi utca 85\r\n1083 Budapest', '06203456789', '', ''),
(20, 'x', 'y', 'z', 'Rakoczi utca 85', '123456789', '', ''),
(21, 'Kiss', 'Ramona', 'Virag', 'Rakoczi utca 85', '012345678', '', ''),
(22, 'asda', 'asdasdas', 'asdasdas', 'Rakoczi utca 85', '0120123012012', '', ''),
(23, 'Joszka', '', 'Pista', 'Rakoczi utca 85\r\nBudapest', '06203456745', '', ''),
(24, 'Yaseer', '', 'Shaw', 'miami florida', '3123141234122', '', ''),
(25, 'Yaseer', '', 'Shaw', 'miami florida', '3123141234122', '', ''),
(26, 'john', '', 'anthony', 'havana cuba', '12312312', '', ''),
(27, 'hvana', '', 'marquez', 'delhi india', '211234124123', '', ''),
(28, 'thomas', '', 'jackson', 'Rakoczi utca 85', '2312312312', '', ''),
(29, 'cuba', '', 'libre', 'higway street 1\r\nusa miami', '06304532134', '', ''),
(30, 'Vicky', '', 'Cristina', 'barcelona spain\r\nCalle 68', '123456782', '', ''),
(31, 'Vicky', '', 'Sylvia', 'barcelona spain\r\nCalle 68', '123456782', '', ''),
(32, 'Antonia', '', 'Antonia', 'Calle 56\r\nMadrid, Spain', '345642342', '', ''),
(33, 'Antonia', '', 'Mami', 'Trafalgar square. London UK', '123145545', '', ''),
(34, 'Antonia', '', 'Antonia4', 'Rakoczi utca 85', '36203456789', '', ''),
(35, 'Andrea', '', 'Dinatale', 'Roma, Italy\r\nViaggio 876', '3456879998987', '', ''),
(36, 'Andrea', '', 'Dinatale', 'Roma, Italy\r\nViaggio 876', '3456879998987', '', ''),
(37, 'Antonia', '', 'Dinatale', 'jékdasa\r\nasdaq', '14654644565', '', ''),
(38, 'Antonia', '', 'Dinatale', 'jékdasa\r\nasdaq', '14654644565', '', ''),
(39, 'Antonia', '', 'Dinatale', 'jékdasa\r\nasdaq', '14654644565', '', ''),
(40, 'Andrea', '', 'Julia', 'ajsbdkasda\r\nfadasdsa\r\n1231232', '13123124124', '', ''),
(41, 'yasir', '', 'taaaa', 'MOHALAL KHADER KHEL KULACHI TEHSIL, DISTRICT D.I.K', '03438554131', '', ''),
(42, 'yasir', '', 'taaaa', 'MOHALAL KHADER KHEL KULACHI TEHSIL, DISTRICT D.I.K', '03438554131', '', ''),
(43, 'yasir', '', 'asasasasas', 'Plot 18, 1st Floor Paradise Plaza, Sector E-11/2\r\n', '343242423', '', ''),
(44, 'yasir', '', 'asasasasas', 'Plot 18, 1st Floor Paradise Plaza, Sector E-11/2\r\n', '343242423', '', ''),
(45, 'yasir', '', 'khayyam', 'MOHALAL KHADER KHEL KULACHI TEHSIL, DISTRICT D.I.K', '03438554131', '', ''),
(46, 'zebi', '', 'zebi', 'kamra', '34343434', '', ''),
(47, 'jhon', '', 'doe', 'Austral USD', '03438554131', '', ''),
(48, 'newman', '', 'adim', 'US PAK tower', '3434343433', '', ''),
(49, 'zebi', '', 'suzi', 'kuachi', '34343434', '', ''),
(50, 'nomdi', '', 'gami', 'Plot 18, 1st Floor Paradise Plaza, Sector E-11/2\r\n', '343242423', '', ''),
(51, 'thmoes', '', 'jan', 'test any thing', '2323232323', '', ''),
(52, 'toni', '', 'breva', 'asasasasas', '232323', '', ''),
(53, 'yasir', '', 'khayyam', 'MOHALAL KHADER KHEL KULACHI TEHSIL, DISTRICT D.I.K', '03438554131', '', ''),
(54, 'yasir', '', 'khayyam', 'MOHALAL KHADER KHEL KULACHI TEHSIL, DISTRICT D.I.K', '03438554131', '', ''),
(55, 'jemes', '', 'deotest', 'testdeo', '454545343434', '', ''),
(56, 'dsaads', '', 'Anyad', 'Rakoczi utca 85', '36204568945', '', ''),
(57, 'Jones', '', 'Banks', 'Miami\r\n56 Street Sunshine', '46554664', '', ''),
(58, 'asdasd', '', 'qweqwe', 'Rakoczi utca 85', '21321312', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `room_type`, `price`, `photo`) VALUES
(1, 'Superior', '40000', 'room-5.jpg'),
(3, 'Super Deluxe', '68000', 'room-6.jpg'),
(4, 'Standard', '26000', 'room-6.jpg'),
(9, 'Jr. Suite', '35000', 'room-4.jpg'),
(12, 'Executive Suite', '80000', 'room-5.jpg'),
(13, 'Luxury', '75000', 'room-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `status1` varchar(232) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL,
  `guest_no` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `extra_bed`, `status`, `status1`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`, `guest_no`) VALUES
(1, 1, 1, 2, 0, 'Check Out', '', 3, '2021-12-30', '19:26:37', '2022-01-02', '20:52:07', '6000', 2),
(3, 3, 1, 1, 0, 'Check Out', '', 3, '2021-12-30', '19:49:58', '2022-01-02', '20:52:15', '6000', 2),
(4, 4, 9, 10, 0, 'Check Out', '', 2, '2021-12-30', '19:51:49', '2021-12-01', '19:53:19', '4000', 20),
(5, 5, 9, 10, 0, 'Check Out', '', 2, '2021-12-30', '20:04:08', '2022-01-01', '20:11:13', '40000', 20),
(6, 6, 1, 2, 0, 'Check Out', '', 10, '2021-12-30', '20:08:05', '2022-01-09', '20:52:10', '40000', 2),
(7, 7, 1, 2, 0, 'Check Out', '', 4, '2021-12-31', '20:11:01', '2022-01-03', '20:52:04', '320000', 4),
(8, 8, 9, 2, 0, 'Check Out', '', 10, '2021-12-30', '20:12:43', '2022-01-09', '20:51:58', '800000', 4),
(9, 9, 4, 4, 0, 'Check Out', '', 10, '2021-12-31', '20:27:59', '2021-12-01', '20:52:18', '1600000', 8),
(10, 10, 4, 10, 0, 'Check In', '', 2, '2021-12-30', '12:51:18', '2022-01-01', '20:52:13', '800000', 20),
(11, 11, 4, 2, 0, 'Check In', '', 2, '2021-12-31', '13:02:45', '2022-01-01', '00:00:00', '104000', 4),
(12, 12, 4, 2, 0, 'Check In', '', 6, '2021-12-31', '12:53:59', '2022-01-05', '00:00:00', '480000', 4),
(13, 13, 4, 4, 0, 'Check In', '', 2, '2021-12-31', '13:04:35', '2022-01-01', '00:00:00', '208000', 2),
(14, 14, 9, 2, 0, 'Check In', '', 2, '2021-12-31', '13:04:06', '2022-01-01', '00:00:00', '140000', 3),
(15, 15, 4, 4, 0, 'Check In', '', 10, '2021-12-30', '14:02:04', '2022-01-09', '00:00:00', '1040000', 8),
(16, 16, 1, 2, 0, 'Check In', '', 10, '2021-12-31', '14:03:20', '2022-01-09', '00:00:00', '800000', 4),
(17, 17, 9, 2, 0, 'Check In', '', 10, '2021-12-30', '14:05:56', '2022-01-09', '00:00:00', '700000', 4),
(18, 18, 12, 2, 0, 'Check In', '', 10, '2021-12-30', '14:07:19', '2022-01-09', '00:00:00', '2000', 4),
(19, 19, 4, 1, 0, 'Check In', '', 5, '2022-01-08', '09:34:44', '2022-01-13', '00:00:00', '130000', 2),
(20, 20, 3, 1, 0, 'Check In', '', 2, '2022-01-08', '10:00:49', '2022-01-10', '00:00:00', '5600', 2),
(21, 21, 13, 2, 0, 'Check In', '', 7, '2022-01-09', '10:03:23', '2022-01-15', '00:00:00', '1050000', 2),
(22, 23, 9, 1, 0, 'Check In', '', 10, '2022-01-08', '12:50:58', '2022-01-18', '00:00:00', '350000', 2),
(23, 26, 4, 1, 0, 'Check In', '', 2, '2022-01-08', '12:53:47', '2022-01-10', '00:00:00', '52000', 2),
(24, 27, 9, 1, 0, 'Check In', '', 10, '2022-01-08', '12:55:17', '2022-01-18', '00:00:00', '350000', 2),
(25, 28, 9, 1, 0, 'Check In', '', 1, '2022-01-08', '13:13:40', '2022-01-09', '00:00:00', '35000', 1),
(26, 29, 13, 2, 0, 'Check In', '', 2, '2022-01-29', '13:39:10', '2022-01-10', '00:00:00', '300000', 2),
(27, 30, 12, 1, 0, 'Check In', '', 2, '2022-01-08', '13:39:23', '2022-01-10', '00:00:00', '160000', 2),
(28, 31, 12, 1, 0, 'Check In', '', 5, '2022-01-08', '13:40:12', '2022-01-13', '00:00:00', '400000', 2),
(29, 32, 9, 2, 0, 'Check In', '', 7, '2022-01-15', '13:41:47', '2022-01-15', '00:00:00', '490000', 4),
(30, 33, 3, 3, 0, 'Check In', '', 6, '2022-01-12', '13:44:22', '2022-01-14', '00:00:00', '1224000', 6),
(31, 34, 4, 2, 0, 'Check In', '', 14, '2022-01-15', '14:31:08', '2022-01-22', '00:00:00', '728000', 2),
(32, 37, 4, 2, 0, 'Check In', '', 8, '2022-01-07', '16:05:34', '2022-01-16', '00:00:00', '416000', 5),
(33, 37, 4, 2, 0, 'Pending', '', 15, '2022-01-14', '00:00:00', '2022-01-29', '00:00:00', '', 5),
(34, 37, 4, 2, 0, 'Pending', '', 34, '2022-01-14', '00:00:00', '2022-02-17', '00:00:00', '', 5),
(35, 40, 3, 3, 0, 'Check In', '', 12, '2022-01-15', '16:27:33', '2022-01-20', '00:00:00', '2448000', 6),
(36, 41, 4, 1, 0, 'Pending', '', 1, '2022-01-22', '00:00:00', '2022-01-23', '00:00:00', '', 2),
(37, 41, 4, 1, 0, 'Pending', '', 1, '2022-01-22', '00:00:00', '2022-01-23', '00:00:00', '', 2),
(38, 45, 4, 1, 0, 'Pending', '', 9, '2022-01-22', '00:00:00', '2022-01-31', '00:00:00', '', 3),
(39, 46, 4, 1, 2, 'Check In', '', 2, '2022-01-22', '07:17:07', '2022-01-25', '00:00:00', '52000', 1),
(40, 47, 4, 1, 2, 'Check Out', '', 8, '2022-01-23', '19:14:51', '2022-01-31', '03:34:29', '208000', 4),
(41, 48, 4, 1, 0, 'Pending', '', 8, '2022-01-23', '00:00:00', '2022-01-31', '00:00:00', '', 1),
(42, 49, 4, 1, 2, 'Check Out', '', 7, '2022-01-23', '20:01:22', '2022-01-30', '04:03:35', '182000', 4),
(43, 50, 4, 1, 4, 'Check Out', '', 7, '2022-01-23', '20:04:50', '2022-01-30', '04:07:02', '182000', 4),
(44, 51, 4, 1, 3, 'Check Out', '', 6, '2022-01-25', '00:38:39', '2022-01-30', '08:48:19', '156000', 4),
(45, 52, 4, 1, 3, 'Check Out', '', 3, '2022-01-28', '00:50:07', '2022-01-27', '08:52:07', '78000', 3),
(46, 45, 4, 1, 0, 'Pending', '', 6, '2022-01-24', '00:00:00', '2022-01-30', '00:00:00', '', 5),
(47, 45, 4, 1, 0, 'Pending', '', 6, '2022-01-24', '00:00:00', '2022-01-30', '00:00:00', '', 5),
(48, 55, 9, 1, 0, 'Check Out', '', 7, '2022-01-23', '01:03:36', '2022-01-30', '09:19:06', '245000', 4),
(49, 56, 4, 1, 0, 'Check In', 'booked', 15, '2022-01-14', '15:11:32', '2022-01-29', '00:00:00', '390000', 2),
(50, 57, 12, 1, 0, 'Check In', 'booked', 4, '2022-02-18', '15:15:19', '2022-02-22', '00:00:00', '320000', 2),
(51, 58, 13, 1, 0, 'Pending', '', 3, '2022-02-18', '00:00:00', '2022-02-21', '00:00:00', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guestid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `guest_id` (`guest_id`),
  ADD KEY `room_id` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`roomid`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`guestid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

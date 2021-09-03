-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 12:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `booking_id` int(11) NOT NULL,
  `movie_id` varchar(255) NOT NULL,
  `theater_id` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `dates` date NOT NULL,
  `timee` time NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`booking_id`, `movie_id`, `theater_id`, `user`, `contact_no`, `dates`, `timee`, `seat_no`, `price`) VALUES
(4, '1', '1', 'Dipali', '9876543210', '2021-08-24', '20:10:00', '1', '120'),
(6, '123', '9', 'Salman', '1478936251', '2021-08-25', '21:25:00', '55', '190');

-- --------------------------------------------------------

--
-- Table structure for table `city_list`
--

CREATE TABLE `city_list` (
  `id` int(11) NOT NULL,
  `cityname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_list`
--

INSERT INTO `city_list` (`id`, `cityname`) VALUES
(1, 'Bhavnagar'),
(2, 'Ahemdabad'),
(3, 'vadodara'),
(4, 'ambaji');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(25) NOT NULL,
  `discription` text NOT NULL,
  `language` varchar(15) NOT NULL,
  `launch_date` date NOT NULL,
  `timess` time NOT NULL,
  `theatre_name` varchar(30) NOT NULL,
  `screen_no` int(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`id`, `movie_name`, `discription`, `language`, `launch_date`, `timess`, `theatre_name`, `screen_no`, `image`, `price`, `status`) VALUES
(10, 'bhavani', 'good movie !', 'hindi', '2021-08-03', '16:31:00', 'EP Cinema', 18, 'ambaji.jpg', 110, 0),
(32, 'bhooj', 'indian movie.', 'hindi', '2021-08-18', '12:12:00', 'PVR', 5, 'Ganesha.jpg', 110, 1);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `id` int(11) NOT NULL,
  `theatre_name` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `time` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`id`, `theatre_name`, `city`, `status`, `time`) VALUES
(1, 'PVR', 'Ahamdabad', 1, 2147483647),
(14, 'Mexush', 'Bhavnagar', 1, 2147483647),
(15, 'EP Cinema  ', 'ambaji', 1, 2147483647),
(16, 'Ambar', 'vadodara', 1, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_list`
--
ALTER TABLE `booking_list`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `city_list`
--
ALTER TABLE `city_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_list`
--
ALTER TABLE `booking_list`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `city_list`
--
ALTER TABLE `city_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

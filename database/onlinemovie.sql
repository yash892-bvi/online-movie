-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2021 at 03:34 PM
-- Server version: 8.0.26
-- PHP Version: 7.4.22

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking_list`
--

CREATE TABLE `booking_list` (
  `booking_id` int NOT NULL,
  `movie_id` varchar(255) NOT NULL,
  `theater_id` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `dates` date NOT NULL,
  `timee` time NOT NULL,
  `seat_no` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking_list`
--

INSERT INTO `booking_list` (`booking_id`, `movie_id`, `theater_id`, `user`, `contact_no`, `dates`, `timee`, `seat_no`, `price`) VALUES
(1, '123', '14', 'sefali', '3625143625', '2021-08-19', '21:51:00', '15', '890'),
(2, '123', '14', 'sefali', '3625143625', '2021-08-19', '21:51:00', '15', '890'),
(3, '123', '14', 'Dipali', '3625143625', '2021-09-01', '22:11:00', '15', '890'),
(5, '2', '2', 'Meet', '1478523690', '2021-09-01', '21:13:00', '15', '150'),
(6, '123', '9', 'Salman', '1478936251', '2021-08-25', '21:25:00', '55', '190');

-- --------------------------------------------------------

--
-- Table structure for table `city_list`
--

CREATE TABLE `city_list` (
  `city_id` int NOT NULL,
  `cityname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `city_list`
--

INSERT INTO `city_list` (`city_id`, `cityname`) VALUES
(5, 'Ambaji'),
(6, 'Ahmadabad'),
(7, 'Bhavnagar'),
(8, 'Valsad'),
(9, 'gandhinagar'),
(10, 'mauva ');

-- --------------------------------------------------------

--
-- Table structure for table `movie_list`
--

CREATE TABLE `movie_list` (
  `id` int NOT NULL,
  `movie_name` varchar(25) NOT NULL,
  `discription` text NOT NULL,
  `language` varchar(15) NOT NULL,
  `launch_date` date NOT NULL,
  `timess` time NOT NULL,
  `screen_no` int NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` int NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `theatre_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movie_list`
--

INSERT INTO `movie_list` (`id`, `movie_name`, `discription`, `language`, `launch_date`, `timess`, `screen_no`, `image`, `price`, `status`, `theatre_id`) VALUES
(25, 'The Invisible Man', 'Cecilia\'s abusive ex-boyfriend fakes his death and becomes invisible to stalk and torment her. She begins experiencing strange events and decides to hunt down the truth on her own.', 'Hindi', '2020-03-04', '00:00:02', 2, 'tim.jpg', 150, 'active', 10),
(26, 'Cherry', 'Cherry (Tom Holland) drifts from college dropout to army medic in Iraq-anchored only by his one true love, Emily (Ciara Bravo). But after returning from the war with PTSD, his life spirals into drugs.', 'Hindi', '2021-03-01', '00:00:02', 1, 'cherry.jpg', 150, 'active', 10),
(27, 'Laabam', 'A farmer hell bent on a revolution locks horns with a powerful and greedy industrialist, who is responsible for the plight of farmers. Will he be able to grant his people the life they deserve?', 'Hindi', '2021-03-31', '00:00:02', 1, 'laabam.jpg', 150, 'inactive', 10),
(28, 'Outside the Wire', 'In the near future, a drone pilot sent into a war zone finds himself paired up with a top-secret android officer on a mission to stop a nuclear attack.', 'Hindi', '2021-01-28', '00:00:02', 1, 'otw.jpg', 150, 'active', 10),
(29, 'The Suicide Squad', 'Amanda Waller dispatch the Task Force X members to the Corto Maltese island to destroy Jotunheim, a Nazi-era prison and laboratory.', 'Hindi', '2021-03-22', '00:00:02', 1, 'cprvbppgyz-portrait.jpg', 150, 'active', 10),
(30, 'Fast and Furious 9', 'Dom`s peaceful life with his wife Letty and son Brian is shattered when Dom`s past catches up to him. The gang is up against the most skilled assassin and high-performance driver - his little brother Jakob.', 'Hindi', '2021-09-03', '00:00:02', 1, 'nafhctfyrg-portrait.jpg', 150, 'inactive', 10),
(31, 'Godzilla vs. Kong', 'The initial confrontation between the two titans -- instigated by unseen forces -- is only the beginning of the mystery that lies deep within the core of the planet.', 'Hindi', '2021-03-31', '00:00:02', 1, 'gvkpster.jpg', 150, 'active', 10),
(32, 'Bell Bottom', 'Amongst multiple heinous airplane hijacks, India was made to face another such challenge in 1984. BellBottom, a RAW agent played by Akshay Kumar sees through the plan and thus, begins India`s first covert operation.\r\n<br>\r\nA story inspired on true events, led by BellBottom, that went on to create one of the most defining moments of the country.', 'Hindi', '2021-01-28', '00:00:02', 1, 'bell-bottom.jpg', 150, 'active', 10),
(33, 'Chehre', 'An 80-year-old criminal lawyer along with his friends has a penchant for real-life games. They conduct a mock trial and decide if justice has been served, if not they make sure justice has been served.', 'Hindi', '2021-03-22', '00:00:02', 1, 'hpurtaycja-portrait.jpg', 150, 'active', 10),
(34, 'Salute', 'Salute is a Malayalam movie starring Diana Penty, Dulquer Salmaan and Manoj K. Jayan in prominent roles. It is an action drama directed by Roshan Andrews with Santhosh Narayanan as a musician, forming part of the crew.', 'Hindi', '2021-09-09', '00:00:02', 2, 'salute.jpg', 200, 'inactive', 10),
(35, 'The Forever Purge', 'The Forever Purge is the fifth installment of the film series where it continues to explore a dystopian America that has implemented a yearly 12-hour period of anarchy where all crime, including murder, is legal.', 'Hindi', '2021-08-17', '00:00:02', 2, 'the-forever-purge.jpg', 200, 'active', 10),
(36, 'The Invisible Man', 'Cecilia\'s abusive ex-boyfriend fakes his death and becomes invisible to stalk and torment her. She begins experiencing strange events and decides to hunt down the truth on her own.', 'Hindi', '2020-03-04', '00:00:02', 2, 'tim.jpg', 150, 'active', 11),
(37, 'Cherry', 'Cherry (Tom Holland) drifts from college dropout to army medic in Iraq-anchored only by his one true love, Emily (Ciara Bravo). But after returning from the war with PTSD, his life spirals into drugs.', 'Hindi', '2021-03-01', '00:00:02', 1, 'cherry.jpg', 150, 'active', 11),
(38, 'Laabam', 'A farmer hell bent on a revolution locks horns with a powerful and greedy industrialist, who is responsible for the plight of farmers. Will he be able to grant his people the life they deserve?', 'Hindi', '2021-03-31', '00:00:02', 1, 'laabam.jpg', 150, 'inactive', 11),
(39, 'Outside the Wire', 'In the near future, a drone pilot sent into a war zone finds himself paired up with a top-secret android officer on a mission to stop a nuclear attack.', 'Hindi', '2021-01-28', '00:00:02', 1, 'otw.jpg', 150, 'active', 11),
(40, 'The Suicide Squad', 'Amanda Waller dispatch the Task Force X members to the Corto Maltese island to destroy Jotunheim, a Nazi-era prison and laboratory.', 'Hindi', '2021-03-22', '00:00:02', 1, 'cprvbppgyz-portrait.jpg', 150, 'active', 11),
(41, 'Fast and Furious 9', 'Dom`s peaceful life with his wife Letty and son Brian is shattered when Dom`s past catches up to him. The gang is up against the most skilled assassin and high-performance driver - his little brother Jakob.', 'Hindi', '2021-09-03', '00:00:02', 1, 'nafhctfyrg-portrait.jpg', 150, 'inactive', 11),
(42, 'Godzilla vs. Kong', 'The initial confrontation between the two titans -- instigated by unseen forces -- is only the beginning of the mystery that lies deep within the core of the planet.', 'Hindi', '2021-03-31', '00:00:02', 1, 'gvkpster.jpg', 150, 'active', 11),
(43, 'Bell Bottom', 'Amongst multiple heinous airplane hijacks, India was made to face another such challenge in 1984. BellBottom, a RAW agent played by Akshay Kumar sees through the plan and thus, begins India`s first covert operation.\r\n<br>\r\nA story inspired on true events, led by BellBottom, that went on to create one of the most defining moments of the country.', 'Hindi', '2021-01-28', '00:00:02', 1, 'bell-bottom.jpg', 150, 'active', 11),
(44, 'Chehre', 'An 80-year-old criminal lawyer along with his friends has a penchant for real-life games. They conduct a mock trial and decide if justice has been served, if not they make sure justice has been served.', 'Hindi', '2021-03-22', '00:00:02', 1, 'hpurtaycja-portrait.jpg', 150, 'active', 11),
(45, 'Salute', 'Salute is a Malayalam movie starring Diana Penty, Dulquer Salmaan and Manoj K. Jayan in prominent roles. It is an action drama directed by Roshan Andrews with Santhosh Narayanan as a musician, forming part of the crew.', 'Hindi', '2021-09-09', '00:00:02', 2, 'salute.jpg', 200, 'inactive', 11),
(46, 'The Forever Purge', 'The Forever Purge is the fifth installment of the film series where it continues to explore a dystopian America that has implemented a yearly 12-hour period of anarchy where all crime, including murder, is legal.', 'Hindi', '2021-08-17', '00:00:02', 2, 'the-forever-purge.jpg', 200, 'active', 11),
(51, 'BHUJ', 'During the 1971 Indo-Pak war, the IAF airstrip at Bhuj was destroyed in combat. Subsequently, 300 local women led by IAF squadron leader Vijay Karnik heroically toiled day in and day out to reconstruct the airbase. This act of resilience was a pivotal moment which not only boosted the morale of the country, but also helped us win the war', 'HINDI', '2011-10-20', '12:12:00', 1, 'bhuj.jpg', 200, 'active', 10),
(52, 'BHUJ', 'During the 1971 Indo-Pak war, the IAF airstrip at Bhuj was destroyed in combat. Subsequently, 300 local women led by IAF squadron leader Vijay Karnik heroically toiled day in and day out to reconstruct the airbase. This act of resilience was a pivotal moment which not only boosted the morale of the country, but also helped us win the war', 'HINDI', '2011-10-20', '12:12:00', 1, 'bhuj.jpg', 200, 'active', 11),
(53, 'BHUJ', 'During the 1971 Indo-Pak war, the IAF airstrip at Bhuj was destroyed in combat. Subsequently, 300 local women led by IAF squadron leader Vijay Karnik heroically toiled day in and day out to reconstruct the airbase. This act of resilience was a pivotal moment which not only boosted the morale of the country, but also helped us win the war', 'HINDI', '2011-10-20', '12:12:00', 1, 'bhuj.jpg', 200, 'active', 12),
(54, 'BHUJ', 'During the 1971 Indo-Pak war, the IAF airstrip at Bhuj was destroyed in combat. Subsequently, 300 local women led by IAF squadron leader Vijay Karnik heroically toiled day in and day out to reconstruct the airbase. This act of resilience was a pivotal moment which not only boosted the morale of the country, but also helped us win the war', 'HINDI', '2011-10-20', '12:12:00', 1, 'bhuj.jpg', 200, 'active', 13);

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `Id` int NOT NULL,
  `Numseats` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`Id`, `Numseats`) VALUES
(1, '20'),
(2, '$seat_no'),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, '2'),
(8, '2'),
(9, '2'),
(10, '$Numseats'),
(11, '2'),
(12, '2'),
(13, '2'),
(16, '2'),
(17, '3'),
(18, '3'),
(19, '2'),
(20, '');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `sid` int NOT NULL,
  `seat_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`sid`, `seat_no`, `status`) VALUES
(1, 'A1', 0),
(2, 'A2', 0),
(3, 'A3', 0),
(4, 'A4', 0),
(5, 'A5', 0),
(6, 'A6', 0),
(7, 'A7', 0),
(8, 'A8', 0),
(9, 'B1', 0),
(10, 'B2', 0),
(11, 'B3', 0),
(12, 'B4', 0),
(13, 'B5', 0),
(14, 'B6', 0),
(15, 'B7', 0),
(16, 'B8', 0),
(17, 'C1', 0),
(18, 'C2', 0),
(19, 'C3', 0),
(20, 'C4', 0),
(21, 'C5', 0),
(22, 'C6', 0),
(23, 'C7', 0),
(24, 'C8', 0),
(25, 'D1', 0),
(26, 'D2', 0),
(27, 'D3', 0),
(28, 'D4', 0),
(29, 'D5', 0),
(30, 'D6', 0),
(31, 'D7', 0),
(32, 'D8', 0),
(33, 'E1', 0),
(34, 'E2', 0),
(35, 'E3', 0),
(36, 'E4', 0),
(37, 'E5', 0),
(38, 'E6', 0),
(39, 'E7', 0),
(40, 'E8', 0),
(41, 'F1', 0),
(42, 'F2', 0),
(43, 'F3', 0),
(44, 'F4', 0),
(45, 'F5', 0),
(46, 'F6', 0),
(47, 'F7', 0),
(48, 'F8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movie`
--

CREATE TABLE `tbl_movie` (
  `movie_id` int NOT NULL,
  `t_id` int NOT NULL COMMENT 'theatre id',
  `movie_name` varchar(255) NOT NULL,
  `cast` varchar(500) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `release_date` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_url` varchar(200) NOT NULL,
  `status` int NOT NULL COMMENT '0 means active '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movie`
--

INSERT INTO `tbl_movie` (`movie_id`, `t_id`, `movie_name`, `cast`, `desc`, `release_date`, `image`, `video_url`, `status`) VALUES
(1, 3, 'The Invisible Man', 'Elisabeth Moss, Oliver Jackson-Cohen, Aldis Hodge, Storm Reid', 'Cecilia\'s abusive ex-boyfriend fakes his death and becomes invisible to stalk and torment her. She begins experiencing strange events and decides to hunt down the truth on her own.', '2020-03-04', 'images/tim.jpg', 'https://www.youtube.com/watch?v=WO_FJdiY9dA', 0),
(11, 6, 'Cherry', 'Tom Holland, Ciara Bravo, Harry Holland, Kelli Berglund', 'Cherry (Tom Holland) drifts from college dropout to army medic in Iraq-anchored only by his one true love, Emily (Ciara Bravo). But after returning from the war with PTSD, his life spirals into drugs.', '2021-03-01', 'images/cherry.jpg', 'https://www.youtube.com/watch?v=H5bH6O0bErk', 0),
(12, 6, 'Godzilla vs. Kong', 'Millie Bobby Brown, Alexander Skarsgard, Rebecca Hall', 'The initial confrontation between the two titans -- instigated by unseen forces -- is only the beginning of the mystery that lies deep within the core of the planet.', '2021-03-31', 'images/gvkpster.jpg', 'https://www.youtube.com/watch?v=odM92ap8_c0', 0),
(13, 6, 'Outside the Wire', 'Anthony Mackie, Damson Idris, Emily Beecham', 'In the near future, a drone pilot sent into a war zone finds himself paired up with a top-secret android officer on a mission to stop a nuclear attack.', '2021-01-28', 'images/otw.jpg', 'https://www.youtube.com/watch?v=u8ZsUivELbs', 0),
(17, 6, 'Justice League', 'Ben Affleck, Henry Cavil, Ezra Miller', 'This is a demo description for the movie ZSJL.', '2021-03-22', 'images/zsjl.jpg', 'https://www.youtube.com/watch?v=vM-Bja2Gy04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatre_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `city_id` int NOT NULL,
  `theatre_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theatre_id`, `status`, `time`, `city_id`, `theatre_name`) VALUES
(10, 1, '2021-08-31 08:09:58', 5, 'PVR-AMBAJI'),
(11, 1, '2021-08-31 08:10:13', 6, 'PVR-HIGH COURT'),
(12, 1, '2021-08-31 08:10:24', 7, 'PVR-VADAJ'),
(13, 1, '2021-08-31 08:10:33', 8, 'PVR-HIGH COURT');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact` bigint NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `username`, `email`, `password`, `contact`, `time`) VALUES
(7, 'nipul', 'nipul@gmail.com', '202cb962ac59075b964b07152d234b70', 9427556368, '2021-08-25 05:38:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_list`
--
ALTER TABLE `city_list`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theatre_id` (`theatre_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theatre_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_list`
--
ALTER TABLE `city_list`
  MODIFY `city_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movie_list`
--
ALTER TABLE `movie_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `screen`
--
ALTER TABLE `screen`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `sid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_movie`
--
ALTER TABLE `tbl_movie`
  MODIFY `movie_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theatre_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_list`
--
ALTER TABLE `movie_list`
  ADD CONSTRAINT `movie_list_ibfk_1` FOREIGN KEY (`theatre_id`) REFERENCES `theatre` (`theatre_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `theatre`
--
ALTER TABLE `theatre`
  ADD CONSTRAINT `theatre_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city_list` (`city_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

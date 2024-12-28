-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2024 at 06:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(68, 1290058785, 360792038, 'kamu lucu deh'),
(69, 360792038, 1290058785, 'maksudnya?'),
(70, 1290058785, 360792038, 'engga jadi hehe'),
(71, 360792038, 1290058785, 'yaudah'),
(72, 360792038, 1290058785, 'bye'),
(73, 360792038, 1290058785, 'aku mau bobo'),
(74, 1290058785, 360792038, 'y'),
(75, 676628315, 1290058785, 'bang brando'),
(76, 676628315, 1290058785, 'tadi aku habis berantem sama majikan aku'),
(77, 1290058785, 676628315, 'kamu kenapa akmal?'),
(78, 840778463, 1296955151, 'hello'),
(79, 840778463, 1296955151, 'i love u'),
(80, 1296955151, 840778463, 'i love u too');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(11, 776468573, 'Himura', 'Kenshin', 'kenshin@gmail.com', 'kenshin', '1735091388kenshin.png', 'Offline'),
(14, 360792038, 'Wu', 'Duoyun', 'wuduoyun@gmail.com', 'wuduoyun', '1735178611braces.jpg', 'Offline'),
(15, 1296955151, 'Mal', 'Sook', 'malsook@gmail.com', 'malsook', '1735196500malsook.jpg', 'Offline'),
(16, 35254829, 'Kim Jiwon', '(김지원)', 'kimjiwon@gmail.com', 'kimjiwon', '1735207033korean.jpg', 'Offline'),
(17, 907176039, 'Muhammad', 'Ibnu', 'muhammadibnu@gmail.com', 'ibnu', '1735207745mikewazowski.jpg', 'Offline'),
(18, 1536843893, 'Mas', 'Rusdi', 'rusdi@gmail.com', 'rusdi', '1735207826rusdi.jpg', 'Offline'),
(19, 676628315, 'Windah', 'Batubara', 'windah@gmail.com', 'windah', '1735207868windah.jpg', 'Offline'),
(20, 1290058785, 'Kucing', 'Akmal', 'kucingakmal@gmail.com', 'kucingakmal', '1735208086akmal.jpg', 'Offline'),
(21, 840778463, 'Rifky', 'Bagus', 'rifky@gmail.com', 'rifky', '1735214918braces3.jpg', 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

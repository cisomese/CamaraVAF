-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 11:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volunteer_app_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `subCity` varchar(20) NOT NULL,
  `woreda` varchar(30) DEFAULT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `educationalInstitution` varchar(40) NOT NULL,
  `department` varchar(20) NOT NULL,
  `level_year` varchar(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `emer-Fname` varchar(50) NOT NULL,
  `r_ship` varchar(20) NOT NULL,
  `emer-City` varchar(20) NOT NULL,
  `emer-Subcity` varchar(20) NOT NULL,
  `emer-Woreda` varchar(30) NOT NULL,
  `emerPhone` bigint(11) NOT NULL,
  `emer-Email` varchar(20) NOT NULL,
  `ref-FName` varchar(20) NOT NULL,
  `ref-R_ship` varchar(10) NOT NULL,
  `ref-phone` bigint(11) NOT NULL,
  `Hardware-maintenance` varchar(10) NOT NULL,
  `ubuntu-OS` varchar(10) NOT NULL,
  `Networking` varchar(10) NOT NULL,
  `lab-set` varchar(10) NOT NULL,
  `Database` varchar(10) NOT NULL,
  `reasons-for volunteering` varchar(30) NOT NULL,
  `another reasons` varchar(80) DEFAULT NULL,
  `physical-lim` varchar(10) DEFAULT NULL,
  `physical-lim explanation` varchar(80) DEFAULT NULL,
  `any-other-org` varchar(10) DEFAULT NULL,
  `spec-org` varchar(80) DEFAULT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fullName`, `city`, `subCity`, `woreda`, `phone`, `email`, `educationalInstitution`, `department`, `level_year`, `gender`, `age`, `emer-Fname`, `r_ship`, `emer-City`, `emer-Subcity`, `emer-Woreda`, `emerPhone`, `emer-Email`, `ref-FName`, `ref-R_ship`, `ref-phone`, `Hardware-maintenance`, `ubuntu-OS`, `Networking`, `lab-set`, `Database`, `reasons-for volunteering`, `another reasons`, `physical-lim`, `physical-lim explanation`, `any-other-org`, `spec-org`, `img_url`) VALUES
(1, 'Francesco Mesele Anjulo ', 'soddo ', 'wolayta', 'soddo ', 912233445, 'tesfu@gmail.com', 'Arbaminch university', 'software', 'forth', 'Male', '17-20', 'Mesele Anjulo', 'Father ', 'soddo ', 'wolayta', '07', 987654321, 'mese@gmail.com', 'natinael tefera', 'teacher', 987654321, 'Good', 'Good', 'Good', 'Good', 'Very Good', 'For academic credit', 'some thing i woulld like to tell', 'no', 'no i have not physical limitation', 'on', 'no i have no other organ', 'j11.PNG'),
(2, 'Tesfahun Megeze Fola ', 'soddo ', 'wolayta', 'soddo ', 967987654, 'tesfahunmegeze@gmail', 'Arbaminch university', 'software', 'forth', 'Male', '17-20', 'Megeze Fola', 'Father ', 'soddo ', 'wolayta', '07', 945673212, 'megeze@gmail.com', 'natinael tefera', 'teacher', 987654321, 'Excellent', 'Excellent', 'Good', 'Good', 'Very Good', 'To learn new skills', 'some thing i woulld like to tell', 'no', '', 'on', '', 'WIN_20220124_12_29_34_Pro.jpg'),
(3, 'Thomas eshetu  ', 'wollo ', 'dessie', '43 ', 923456789, 'tom@gmail.com', 'Arbaminch university', 'software', 'forth', 'Male', '17-20', 'Eshetu', 'Father ', 'wollo ', 'dessie', '07', 964765476, 'ehse@gmail.com', 'natinael tefera', 'teacher', 987654321, 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'Excellent', 'To say active', '', 'no', '', 'on', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'francesco', 'enatiye', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

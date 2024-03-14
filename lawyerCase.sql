-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layercase`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `layer_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `layer_id` int(11) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `idintity` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL DEFAULT 'lawyer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `userName`, `lastName`, `email`, `phoneNumber`, `idintity`, `password`, `type`, `Role`) VALUES
(8, 'programmer', 'Alsaghir', 'moahmed@yahoo.com', '01099475854', '2423535135135', '$2y$10$8GOERIq9opdFI5OowKAGi.8PtWt4ncl6/fKwO1xjZs7c.Er8DSxuW', 'محامى مجلس الدولة', 'محامى'),
(9, 'programmer', 'Alsaghir', 'AhmedSayed@gmail.com', '01099475854', '0109947585458', 'ae835a7002a88ae37cfc9887e0b2173b', 'محامى عمال', 'محامى'),
(10, 'ziad', 'ziadMohamed', 'ziad222@gmail.com', '512521331212', '0303202303203', 'ae835a7002a88ae37cfc9887e0b2173b', 'محامى مجلس الدولة', 'محامى'),
(11, 'programmer', 'Alsaghir', 'ziadm57@yahoo.com', '01099475854', '3423442352452', '3c2e98e6f6b242d0c59ec85ffabe0359', 'محامى مجلس الدولة', 'محامى');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `typeCase` enum('جنائى','مدنى','مجلس الدولة','عمال','اسرة','تجاري و شركات','                          جرائم ألكترونية','قضاء عسكري') NOT NULL,
  `description` longtext NOT NULL,
  `Date` date DEFAULT NULL,
  `nameCase` varchar(255) NOT NULL,
  `numberCase` varchar(255) NOT NULL,
  `fileCase` varchar(255) NOT NULL,
  `ImageCase` varchar(255) NOT NULL,
  `location` enum('الاسكندرية','القاهرة') NOT NULL,
  `houerCase` time NOT NULL,
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='this table for users can be upload posts cause lawyer choose';

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `typeCase`, `description`, `Date`, `nameCase`, `numberCase`, `fileCase`, `ImageCase`, `location`, `houerCase`, `status`) VALUES
(2, 44, '', '', NULL, '', '', '', '', '', '00:00:00', '0'),
(3, 44, '', '', '0000-00-00', '', '', '65f0eed92bb096.04229573.pdf', '65f0eed92b83a5.43435694.jpeg', '', '00:00:00', '0'),
(4, 44, '', '', '0000-00-00', '', '', '65f0ef0174d4f6.45787533.pdf', '65f0ef01749762.62179140.jpeg', '', '00:00:00', '0'),
(5, 44, '', '', '0000-00-00', '', '', '65f0ef1e7b3e14.25435124.pdf', '65f0ef1e7b0210.23810800.jpeg', '', '00:00:00', '0'),
(6, 44, '', '', '0000-00-00', '', '', '65f0ef2b4bd972.38615688.pdf', '65f0ef2b4b9d80.08871696.jpeg', '', '00:00:00', '0'),
(7, 44, '', '', '0000-00-00', '', '', '65f0ef4fe70ca0.01813386.pdf', '65f0ef4fe6dae1.14316610.jpeg', '', '00:00:00', '0'),
(8, 44, '', '', '0000-00-00', '', '', '65f22c645518f5.97128554.pdf', '65f22c6454d2e9.61465733.jpg', '', '00:00:00', '0'),
(9, 44, '', '', '0000-00-00', '', '', '65f22c6b373d40.31524812.pdf', '65f22c6b371657.14499271.jpg', '', '00:00:00', '0'),
(10, 44, '', '', '0000-00-00', '', '', '65f22c79502142.71323761.pdf', '65f22c794fd4c3.91502950.jpg', '', '00:00:00', '0'),
(11, 44, '', '', '0000-00-00', '', '', '65f22c8fa3eff8.44992040.pdf', '65f22c8fa3ad42.90910778.jpg', '', '00:00:00', '0'),
(12, 44, '', '', '0000-00-00', '', '', '65f22c99edde46.40054217.pdf', '65f22c99ed8aa6.21511883.jpg', '', '00:00:00', '0'),
(13, 44, '', '', '0000-00-00', '', '', '65f22c9f716a44.20173001.pdf', '65f22c9f711028.73255043.jpg', '', '00:00:00', '0'),
(14, 44, 'مجلس الدولة', 'dadfsdfsdfsdf', '0000-00-00', '', '24234234', '65f23729b81533.87196391.pdf', '24234234', 'الاسكندرية', '00:00:00', '0'),
(15, 44, 'مجلس الدولة', 'dadfsdfsdfsdf', '0000-00-00', '', '24234234', '65f23764290716.16575057.pdf', '24234234', 'الاسكندرية', '00:00:00', '1'),
(16, 44, 'مجلس الدولة', 'dadfsdfsdfsdf', '0000-00-00', '', '24234234', '65f237ae29e745.69718513.pdf', '24234234', 'الاسكندرية', '00:00:00', '0'),
(17, 44, 'جنائى', 'fsdsfsdfsdf', '2024-12-31', '', '242342', '65f2399ed68966.65250555.pdf', '242342', 'الاسكندرية', '12:59:00', '0'),
(18, 44, 'جنائى', 'fsdsfsdfsdf', '2024-12-31', '', '242342', '65f23b5d6607b3.88277246.pdf', '242342', 'الاسكندرية', '12:59:00', '0'),
(19, 45, 'مجلس الدولة', 'svsvsfvsfvsfv', '2024-03-27', '', '3323', '65f2ec2ae82223.93126769.pdf', '3323', 'الاسكندرية', '16:16:00', '0'),
(20, 45, 'مجلس الدولة', 'svsvsfvsfvsfv', '2024-03-27', '', '3323', '65f2ed0b9d4336.31438640.pdf', '3323', 'الاسكندرية', '16:16:00', '0'),
(21, 45, 'مجلس الدولة', 'svsvsfvsfvsfv', '2024-03-27', '', '3323', '65f2ed19503bd2.75802281.pdf', '3323', 'الاسكندرية', '16:16:00', '0'),
(22, 45, 'مجلس الدولة', 'svsvsfvsfvsfv', '2024-03-27', '', '3323', '65f2ed1c552413.43479320.pdf', '3323', 'الاسكندرية', '16:16:00', '0'),
(23, 45, 'مجلس الدولة', 'svsvsfvsfvsfv', '2024-03-27', '', '3323', '65f2ee72c5fbe0.61092173.pdf', '3323', 'الاسكندرية', '16:16:00', '0'),
(24, 45, 'مدنى', 'lawyer', '2024-03-12', '', '3323', '65f2eec0800a96.50096029.pdf', '3323', 'الاسكندرية', '16:34:00', '0'),
(25, 45, 'مدنى', 'fsdvsvsv', '2024-03-04', '', '3323', '65f2ef09eba082.52998796.pdf', '3323', 'الاسكندرية', '17:38:00', '0'),
(26, 45, 'مجلس الدولة', 'f mfmfkfkfmf kfffkfk fkfkfm', '0000-00-00', '', '5254698', '65f2f2f98281e5.86331308.pdf', '5254698', 'الاسكندرية', '00:00:00', '0'),
(27, 45, 'مجلس الدولة', 'ffsfdsdfsdfsdf', '2024-03-09', '', '526589', '65f2f4b2349363.05139123.pdf', '526589', 'الاسكندرية', '04:00:00', '0'),
(28, 45, 'مدنى', 'RWERWEF', '2024-03-04', '', '423624624254', '65f2f57206b042.85867158.pdf', '423624624254', 'القاهرة', '18:05:00', '0'),
(29, 45, 'جنائى', 'قضية في غاية الأهمية', '2024-03-14', '', '32323', '65f2f67508a631.28030863.pdf', '32323', 'القاهرة', '18:09:00', '0'),
(30, 45, 'قضاء عسكري', 'بشيريسرسيرسيرسير', '2024-03-06', '', '2030034234234', '65f2f6d5169f93.34442031.pdf', '2030034234234', 'القاهرة', '17:10:00', '0'),
(31, 44, 'جنائى', 'case About ahmed', '2024-03-05', '', '343434234', '65f315be42ac94.38428091.pdf', '343434234', 'القاهرة', '21:23:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `idintity` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Role` enum('user','lawyer') DEFAULT NULL,
  `type` enum('محامى مدنى','محامى أسرة','محامى مجلس الدولة','محامى عمال','محامى جنائى','محامى قضاء عسكرى','محامى جرائم الكترونية') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `lastName`, `email`, `phoneNumber`, `idintity`, `password`, `Role`, `type`) VALUES
(42, 'programmer', 'Alsaghir', 'ziadm57@yahoo.com', '01099475854', '1241421341351', '4bed7711536eeb3a14dfc93fdf031ea8', 'user', 'محامى مدنى'),
(43, 'lawyer', 'cases', 'lawyer@case.org', '01099475854', '3423423423423', 'ae835a7002a88ae37cfc9887e0b2173b', 'lawyer', 'محامى قضاء عسكرى'),
(44, 'user', 'Client', 'userClient@yahoo.com', '01099475854', '3234234234234', 'ae835a7002a88ae37cfc9887e0b2173b', 'user', 'محامى مدنى'),
(45, 'programmer', 'Alsaghir', 'testData@yahoo.com', '01099475854', '3423525245245', 'ae835a7002a88ae37cfc9887e0b2173b', 'user', 'محامى مدنى'),
(46, 'programmer', 'lawyer', 'lawyerTest@yahoo.com', '01099475854', '3234234234234', 'ae835a7002a88ae37cfc9887e0b2173b', 'lawyer', 'محامى مدنى'),
(47, 'programmer', 'Alsaghir', 'zdasdasdiadm57@yahoo.com', '01099475854', '01099475854', 'ae835a7002a88ae37cfc9887e0b2173b', 'lawyer', 'محامى مدنى'),
(48, 'programmer', 'dasdasdasfaaa', 'asdasdaddvsfvsziadm57@yahoo.com', '01099475854', '3423423524524', 'c7697a9763233c85480be32ec63c713e', 'lawyer', ''),
(49, 'programmer', 'Alsaghir', 'asdasdafavcvfsrgziadm57@yahoo.com', '01099475854', '3423423423423', 'ae835a7002a88ae37cfc9887e0b2173b', 'lawyer', 'محامى مدنى'),
(50, 'programmer', 'dfadfadf', 'asdasfadfadfadfziadm57@yahoo.com', '01099475854', '3423423524524', 'ae835a7002a88ae37cfc9887e0b2173b', 'lawyer', 'محامى جنائى'),
(51, 'Ahmed', 'Ahmed', 'ahmed1@gmail.com', '011213232323', '0132131212123', '5985508fb3d471b73e0b6b5acc54d0e1', 'lawyer', ''),
(52, 'Ahmed', 'AHmed2', 'ahmed2@gmail.com', '013651561632', '351323153125', '5985508fb3d471b73e0b6b5acc54d0e1', 'user', 'محامى مدنى'),
(53, 'ziad', 'ziad', 'zm33@yahoo.com', '323423425524', '3423524524525', 'ae835a7002a88ae37cfc9887e0b2173b', 'user', 'محامى مدنى');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `FK_Layer_Case` (`layer_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Layer_Comment` (`layer_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_posts` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `FK_Layer_Case` FOREIGN KEY (`layer_id`) REFERENCES `lawyer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Users_Cases` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_Layer_Comment` FOREIGN KEY (`layer_id`) REFERENCES `lawyer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `user_posts` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

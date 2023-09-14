-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 12:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ID` int(11) NOT NULL,
  `form` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `s_id` int(10) NOT NULL,
  `is_student` int(11) NOT NULL DEFAULT 0,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `a5` int(11) NOT NULL,
  `a6` int(11) NOT NULL,
  `a7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ID`, `form`, `f_name`, `s_id`, `is_student`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`) VALUES
(1, 1, 'vdfs', 0, 0, 3, 4, 5, 4, 3, 2, 1),
(2, 1, 'مجهول', 0, 0, 3, 4, 5, 4, 3, 2, 1),
(3, 1, 'مجهول', 0, 0, 3, 4, 5, 4, 3, 2, 1),
(4, 1, 'مجهول', 0, 0, 5, 4, 3, 2, 1, 1, 2),
(5, 1, 'مجهول', 0, 0, 5, 4, 3, 2, 1, 1, 2),
(6, 1, 'edawd', 0, 0, 5, 4, 3, 2, 1, 1, 2),
(7, 1, 'edawd', 0, 0, 5, 4, 3, 2, 1, 1, 2),
(8, 1, 'fede', 0, 0, 5, 1, 5, 1, 5, 1, 5),
(9, 1, 'بيشي', 0, 0, 1, 2, 1, 2, 1, 2, 1),
(10, 1, 'ابو فهد', 0, 0, 5, 4, 3, 4, 5, 5, 5),
(11, 1, 'fe', 112238, 1, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `q1` varchar(255) DEFAULT NULL,
  `q2` varchar(255) DEFAULT NULL,
  `q3` varchar(255) DEFAULT NULL,
  `q4` varchar(255) DEFAULT NULL,
  `q5` varchar(255) DEFAULT NULL,
  `q6` varchar(255) DEFAULT NULL,
  `q7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`ID`, `title`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`) VALUES
(1, 'الاضراب الاخلاقي', 'هل تعاني من اضطراب حاد؟', 'هل تحب العسل؟', 'هل لديك اكثر من 5 هواتف قديمة؟', 'هل تفضل اللون الأسود في السيارت؟', 'هل تحب الذهاب الى الأسواق مع الأهل؟', 'تحب هواتف من شركة ابل, هل هذا صحيح؟', 'هل تعاني من قلة النوم؟'),
(2, 'العلم الحديث', 'هل تعاني من اضطراب حاد؟', 'هل تحب العسل؟', 'هل لديك اكثر من 5 هواتف قديمة؟', 'هل تفضل اللون الأسود في السيارت؟', 'هل تحب الذهاب الى الأسواق مع الأهل؟', 'تحب هواتف من شركة ابل, هل هذا صحيح؟', 'هل تعاني من قلة النوم؟');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 05:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyshack1`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `c_id` int(11) NOT NULL,
  `c_desc` varchar(200) NOT NULL,
  `c_cordinator` varchar(30) NOT NULL,
  `c_duration` varchar(30) NOT NULL,
  `c_fee` double NOT NULL,
  `c_category` varchar(18) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_scr` varchar(50) NOT NULL,
  `grade` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`c_id`, `c_desc`, `c_cordinator`, `c_duration`, `c_fee`, `c_category`, `c_name`, `c_scr`, `grade`) VALUES
(1, 'this is a course that contained simple course works that by gradually increase the knowlege juniors', 'Shanthi Tharanga', '1year', 500, 'non-academic', 'Python Zero To mastery', 'img/programs/prog1.jpg', '12'),
(2, 'This includes the Arduino projects that develop segment by segments our juniors knowlege.', 'Sandun B Ganegoda', '6 months', 5000, 'non-academic', 'Arduino for Juniors', 'img/programs/prog2.jpg', '11'),
(3, 'This includes simple machine learning algorithms such that pandas', 'Shanthi Tharanga', '1year', 4000, 'non-academic', 'Machine Learning Course for A/', 'img/programs/prog3.jpg', 'After A/L'),
(4, 'This covers the Sylabus that allocated for Grade 6 students', 'Sandun B Ganegoda', '1 year', 1000, 'academic', 'Grade-6 ICT', 'img/programs/prog4.jpg', '6');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `p_fee` varchar(10) NOT NULL,
  `p_date` date NOT NULL,
  `class_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `whatsapp` varchar(12) NOT NULL,
  `tele` varchar(12) NOT NULL,
  `prof_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`u_id`, `uname`, `email`, `password`, `address`, `whatsapp`, `tele`, `prof_pic`) VALUES
(1, 'somasiri chandrapala', 'somasiri@gmail.com', '7442', 'weragampita,matara', '0713531809', '0412235151', 'teacher.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `u_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `tele` varchar(12) NOT NULL,
  `whatsapp` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `grade` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `reg_date` varchar(12) NOT NULL,
  `prof_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`u_id`, `email`, `uname`, `tele`, `whatsapp`, `address`, `gender`, `grade`, `password`, `reg_date`, `prof_pic`) VALUES
(1, 'mirosh@gmail.com', 'mirosh kavinda', '0712121211', '0712121211', 'fdf214eifjdsaf , dsjflkjdsa;lf, sadfljdsa', 'male', 'Grade 1', '1234', '2023-03-07', 'img_1_1665164011655.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_sub`
--

CREATE TABLE `student_sub` (
  `l_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `umarks` varchar(12) NOT NULL,
  `c_name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_sub`
--

INSERT INTO `student_sub` (`l_id`, `uname`, `umarks`, `c_name`) VALUES
(1, 'mirosh kavinda ', '50', 'Arduino for '),
(3, 'mirosh@gmail.com', '', 'arduino for');

-- --------------------------------------------------------

--
-- Table structure for table `study_material`
--

CREATE TABLE `study_material` (
  `m_id` int(11) NOT NULL,
  `m_grade` varchar(50) NOT NULL,
  `m_topic` varchar(50) NOT NULL,
  `m_link` varchar(100) NOT NULL,
  `m_category` varchar(12) NOT NULL,
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `study_material`
--

INSERT INTO `study_material` (`m_id`, `m_grade`, `m_topic`, `m_link`, `m_category`, `filename`) VALUES
(8, 'Grade 1', 'Level1', '../uploads/', 'Science', 'Thiwanka J.A.K.H_(Tutorial 4).pdf'),
(9, 'Grade 1', 'Level 2', '../uploads/', 'science', 'Tutorial 3.pdf'),
(10, 'Grade 1', 'Level1', '../uploads/', 'Maths', 'Tutorial 5 (Thiwanka J.A.K.H).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `u_id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tele` varchar(12) NOT NULL,
  `whatsapp` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `reg_date` varchar(20) NOT NULL,
  `prof_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`u_id`, `uname`, `email`, `tele`, `whatsapp`, `address`, `gender`, `password`, `reg_date`, `prof_pic`) VALUES
(1, 'Sadun B Ganegoda', 'sadun@gmail.com', '0645614664', '0713565656', 'no : 12/22 , police mawatha, kurunegala', 'male', '1234', '15/03/2023', ''),
(2, 'Shanthi Tharangaaa', 'shanthi@gmail.com', '0718932356', '0718932356', 'No : 81l/5 cross road weragampita matara.', 'female', '1234', '2023/03/07', 'teacher.jpg'),
(4, 'sachini vindya gunasekara', 'sachini@gmail.com', '0716265466', '071665666', 'no 4 #jgjlksadjklfjas;flkjdsad', 'female', '1234', '2023/03/15', '');

-- --------------------------------------------------------

--
-- Table structure for table `teach_sub`
--

CREATE TABLE `teach_sub` (
  `t_id` int(11) NOT NULL,
  `t_grade` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teach_sub`
--

INSERT INTO `teach_sub` (`t_id`, `t_grade`) VALUES
(0, '1'),
(0, '5'),
(0, '6'),
(1, '1'),
(1, '5'),
(1, '6'),
(1, '11'),
(1, '1'),
(1, '6'),
(1, '7'),
(1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `student_sub`
--
ALTER TABLE `student_sub`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `study_material`
--
ALTER TABLE `study_material`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_sub`
--
ALTER TABLE `student_sub`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `study_material`
--
ALTER TABLE `study_material`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

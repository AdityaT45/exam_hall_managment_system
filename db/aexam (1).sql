-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 08:35 PM
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
-- Database: `aexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotments`
--

CREATE TABLE `allotments` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allotments`
--

INSERT INTO `allotments` (`id`, `class_id`, `subject_id`, `exam_id`, `room_id`, `student_id`) VALUES
(208, 10, 13, 14, 13, 1),
(209, 10, 13, 14, 13, 2),
(210, 10, 13, 14, 13, 3),
(211, 10, 13, 14, 13, 5),
(212, 10, 13, 14, 13, 6),
(213, 10, 13, 14, 13, 7),
(214, 10, 13, 14, 13, 8),
(215, 10, 13, 14, 13, 9),
(216, 10, 13, 14, 13, 10),
(217, 10, 13, 14, 13, 11),
(218, 10, 13, 14, 13, 12),
(219, 10, 13, 14, 13, 13),
(220, 10, 13, 14, 13, 14),
(221, 10, 13, 14, 13, 15),
(222, 10, 13, 14, 13, 17);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `name`) VALUES
(4, 'MCA 1 SEM 1'),
(5, 'MCA 1 SEM 2'),
(6, 'MCA 2 SEM 1'),
(7, 'MCA 2 SEM 2'),
(8, 'mba'),
(9, 'MCS FY'),
(10, 'mba 1');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `exam_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `class_id`, `subject_id`, `exam_name`, `exam_date`, `start_time`, `end_time`) VALUES
(5, 4, 6, 'END TERM EXAM NOV-2023', '2024-04-16', '01:00:00', '03:00:00'),
(6, 5, 7, 'END TERM EXAM Apr-2024', '2024-04-17', '10:00:00', '12:30:00'),
(7, 6, 10, 'END TERM EXAM Apr-2024', '2024-04-19', '14:21:00', '15:21:00'),
(8, 8, 11, 'END TERM EXAM NOV-2023', '2024-04-16', '14:39:00', '15:40:00'),
(9, 8, 11, 'END TERM EXAM NOV-2023', '2024-04-16', '16:56:00', '17:57:00'),
(10, 4, 10, 'END TERM EXAM NOV-2023', '2024-05-16', '10:00:00', '12:30:00'),
(11, 4, 7, 'END TERM EXAM NOV-2023', '2024-04-18', '11:40:00', '12:40:00'),
(12, 6, 6, 'END TERM EXAM july-2023', '2024-04-24', '15:33:00', '16:33:00'),
(13, 9, 12, 'END TERM EXAM july-2023', '2024-04-27', '02:04:00', '05:04:00'),
(14, 10, 13, 'END TERM EXAM april-2023', '2024-05-28', '13:00:00', '02:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `strength` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `name`, `strength`) VALUES
(6, '101', 8),
(7, '102', 7),
(8, '103', 12),
(9, 'room-104', 30),
(10, 'room-105', 10),
(11, '110', 7),
(12, 'Mcs', 10),
(13, '300', 15);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `email`, `phone`, `role_number`) VALUES
(1, 'Aditya Nitin Todmal', 'adi@gmail.com', '7654321', 23101),
(2, 'shubham Dattratray Lonare', 'shubhamlonare@gmail.com', '543225465', 23102),
(3, 'Krushna Zarekar', '@gmail.com', '7654321', 23102),
(5, 'Shreyash Gopale', 'sg1@gmail.com', '675432', 23102),
(6, 'Ritesh thete', 'rt1@gmail.com', '34876547', 23102),
(7, 'Darshan Babhulke', 'db23@gmail.com', '7654321', 23102),
(8, 'Ashutosh Bhosale', 'ab34@gmail.com', '576235466', 23102),
(9, 'Kunal Yadav', 'yk236@gmail.com', '34876547', 23102),
(10, 'Shresh Pawar', 'sp2321@gmail.com', '9876543', 23102),
(11, 'rushi suryvanshi', 'rs56543w@gmail.com', '876543', 23102),
(12, 'aditya Hange', 'ah@gmail.com', '7654321', 23102),
(13, 'Saurabh Pawar', 'Sp232@gmail.com', '34876547', 23102),
(14, 'BANKAR SANKET SANJAY', 'sb@gmail.com', '3456576543', 23102),
(15, 'BARDE SHARVARI VIVEKRAO', 'sb@gmail.com', '765432', 23102),
(17, 'BHOGAONKAR SAKSHI  SANTOSH', 'sb7654@gmail.com', '98765432', 23102),
(18, ' BHUSARE AKANKSHA  VINAYAK', 'vb54@gmail.com', '876543', 23102),
(19, 'bHUTE DIVYANSH', 'db@gmail.com', '7654321', 23102),
(20, 'CHATTAR AKSHAY  SAHEBRAO', 'ac@gmail.com', '34876547', 23102),
(165, 'Shubh Lonare', 'shubhlonare45@gmail.com', '345665', 23223),
(166, 'kun yadav', 'kun@gmail.com', '987567', 23222),
(167, 'aditya toodmal', 'ad@gmail.com', '765432', 23154),
(169, 'prasad', 'prasad@gmail.com', '567876567', 23226),
(170, 'asdfg', 'shubhamlonare79@gmail.com', '08767062627', 1011),
(171, 'Shubham Loanre', 'shubhma@gmail.com', '78675434', 23227),
(172, 'shailesh', 'shubhamlonare79@gmail.com', '765432', 105),
(173, 'addi todmal', 'adityatodmal47@gmail.com', '3456789', 11916);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `name`, `class_id`) VALUES
(6, 'JAVA PROGRAMMING ', 4),
(7, 'DATA STRUCTURE AND ALGORITHMS', 4),
(8, 'OBJECT ORIENTED SOFTWARE ENGINEERING', 4),
(9, 'OPERATING SYSTEM CONCEPTS', 4),
(10, 'NETWORK TECHNOLOGIES', 4),
(11, 'finance', 8),
(12, 'Data mining', 9),
(13, 'finance', 10);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `name`, `email`, `phone`, `class`) VALUES
(5, 'Prof.Yogesh Sharma', 'ys@gmail.com', '8765432', 'vc'),
(6, 'Prof.Sarjerao Ghatge', 'sj@gmail.com', '9876544234', ''),
(7, 'Prof.Poonam Sawant', 'sp@gmail.com', '9876544234', ''),
(8, 'Prof.Navnath Chaudhari', 'nc@gmail.com', '9876544234', ''),
(9, 'Prof.Rajesh Gavali', 'rj87@gmail.com', '876543', 'sy'),
(11, 'aditya', 'aditl47@gmail.com', '08767062627', '23rt'),
(12, 'aditya nitin todmal', 'adityatodmal47@gmail.com', '08767062627', 'fy');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_allotment`
--

CREATE TABLE `teacher_allotment` (
  `teacher_allot_id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allotments`
--
ALTER TABLE `allotments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_allotment`
--
ALTER TABLE `teacher_allotment`
  ADD PRIMARY KEY (`teacher_allot_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allotments`
--
ALTER TABLE `allotments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `teacher_allotment`
--
ALTER TABLE `teacher_allotment`
  MODIFY `teacher_allot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allotments`
--
ALTER TABLE `allotments`
  ADD CONSTRAINT `allotments_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `allotments_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`),
  ADD CONSTRAINT `allotments_ibfk_3` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `allotments_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`),
  ADD CONSTRAINT `allotments_ibfk_5` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `exams_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

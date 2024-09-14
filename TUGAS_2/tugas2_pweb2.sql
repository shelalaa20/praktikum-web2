-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 04:07 AM
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
-- Database: `tugas2_pweb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `signature` varchar(45) NOT NULL,
  `number_phone` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_class_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nim`, `name`, `address`, `signature`, `number_phone`, `user_id`, `student_class_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 230302044, 'Shela Jaya Andini', 'Cilacap', 'signature0', '089535979661', 4, 8, NULL, '2024-09-13 10:44:45', '2024-09-13 10:44:45'),
(10, 230902033, 'Rina Nana', 'Cilacap', 'signature1', '089756741236', 10, 9, NULL, '2024-09-13 12:20:57', '2024-09-13 12:20:57'),
(11, 230123123, 'Wiliam James Moriarty', 'Banyumas', 'signature2', '089535979555', 3, 9, NULL, '2024-09-13 12:22:56', '2024-09-13 12:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `student_classes`
--

CREATE TABLE `student_classes` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `academic_year` varchar(45) NOT NULL,
  `study_program_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_classes`
--

INSERT INTO `student_classes` (`id`, `name`, `academic_year`, `study_program_id`, `deleted_at`, `updated_at`, `created_at`) VALUES
(8, '2B', '2023/2024', 1, NULL, '2024-09-13 05:07:33', '2024-09-13 05:07:33'),
(9, '1B', '2024/2025', 2, NULL, '2024-09-13 05:08:09', '2024-09-13 05:08:09'),
(10, '1B', '2024/2025', 3, NULL, '2024-09-13 12:26:43', '2024-09-13 12:26:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_class_id` (`student_class_id`);

--
-- Indexes for table `student_classes`
--
ALTER TABLE `student_classes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_classes`
--
ALTER TABLE `student_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`student_class_id`) REFERENCES `student_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

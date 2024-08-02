-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 05:21 PM
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
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'Ayeshma Amarasinghe ', 'ayeshi09amarasinghe@gmail.com', '0757201531', 'No.32/4, Diyagama, Kiriwaththuduwa', 'Australia ', 2, '2024-03-17', '2024-03-05'),
(2, 'Ayeshma Amarasinghe', 'ayeshi09amarasinghe@gmail.com', '0757201531', 'No.32/4, Diyagama, Kiriwaththuduwa', 'Australia ', 2, '2024-03-31', '2024-03-17'),
(3, 'Thmasha', 'wickramasekara817@gmail.com', '5465461322', 'No.32/4, Diyagama, Kiriwaththuduwa', 'Australia ', 2, '2024-03-12', '2024-03-25'),
(4, 'aye', 'g@gmail.com', '56465654', 'No.32/4, Diyagama, Kiriwaththuduwa', 'Australia ', 2, '2024-03-21', '2024-04-04'),
(5, 'ayeshma', 'g@gmail.com', '72635275', 'No.32/4, Diyagama, Kiriwaththuduwa', 'Australia ', 2, '2024-04-04', '2024-03-21'),
(6, 'ayeshma', 'g@gmail.com', '5672876543', 'No.32/4, Diyagama, Kiriwaththuduwa', 'Australia ', 2, '2024-04-02', '2024-03-14'),
(7, 'Gunarathna', 'g@gmail.com', '34567', 'No.32/4, Diyagama, Kiriwaththuduwa', 'Australia ', 2, '2024-03-30', '2024-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`) VALUES
(1, 'dfdfwe', 'c@gmail.com', 34, 'dfrf'),
(2, 'ayeshma', 'aye@gmail.com', 23, 'frhbfihe'),
(3, 'aye', 't@gmail.com', 12, '1230'),
(4, 'samasa', 'alien@gmail.com', 28, '123456'),
(5, 'aaaa', 'abg@gmail.com', 2, '789'),
(6, 'obs', 'r@gmail.com', 85, 'fjrngijr'),
(7, 'ooo', 'o@gmail.com', 55, '78963'),
(8, 'kjsbd', 'l@gmail.com', 6, '784512'),
(9, 'jnkfhbkv', 'fdjfhb@gmail.com', 12, 'hfhde'),
(10, 'amare', 'ama@gmail.com', 23, '123456'),
(11, 'ayeeee', 'ay@gmail.com', 23, '1212'),
(12, 'Ayeshaaaaaaaama ', 'q@gmail.com ', 22, '09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

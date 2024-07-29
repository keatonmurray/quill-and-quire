-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2024 at 02:37 PM
-- Server version: 8.0.37-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quill_and_quire`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_price` decimal(10,2) NOT NULL,
  `book_description` text,
  `book_genre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_title`, `book_author`, `book_price`, `book_description`, `book_genre`) VALUES
(1, 'To Kill a Mockingbird', 'Harper Lee', 10.99, 'A novel about the serious issues of rape and racial inequality.', 'Fiction'),
(2, '1984', 'George Orwell', 8.99, 'A dystopian social science fiction novel and cautionary tale about the dangers of totalitarianism.', 'Science Fiction'),
(3, 'Moby-Dick', 'Herman Melville', 12.50, 'A narrative of the voyages of the whaling ship Pequod and its quest to capture the elusive Moby Dick.', 'Adventure'),
(4, 'The Great Gatsby', 'F. Scott Fitzgerald', 11.99, 'A story of the mysteriously wealthy Jay Gatsby and his love for the beautiful Daisy Buchanan.', 'Classic'),
(5, 'Pride and Prejudice', 'Jane Austen', 9.49, 'A romantic novel that charts the emotional development of the protagonist, Elizabeth Bennet.', 'Romance'),
(6, 'The Catcher', 'J.D. Salinger', 10.50, 'A novel about the experiences of a disaffected teenager named Holden Caulfield.', 'Fiction'),
(7, 'The Hobbit', 'J.R.R. Tolkien', 14.99, 'A fantasy novel that follows the adventures of Bilbo Baggins, a hobbit who embarks on a quest to win a share of the treasure guarded by the dragon Smaug.', 'Fantasy'),
(8, 'The Da Vinci Code', 'Dan Brown', 13.75, 'A thriller that explores the controversial theory that Mary Magdalene was married to Jesus Christ and that their descendants live today.', 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `author_email_address` varchar(100) NOT NULL,
  `author_phone_number` varchar(20) DEFAULT NULL,
  `author_message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

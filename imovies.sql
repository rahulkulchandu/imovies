-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 01:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imovies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(20) NOT NULL,
  `movie_name` varchar(500) NOT NULL,
  `movie_story` varchar(2000) NOT NULL,
  `thumbnail_link` varchar(1000) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_story`, `thumbnail_link`, `datetime`) VALUES
(1, 'Singham (2019) Punjabi Full Movie Watch 720p Quality Full Movie Online Down.mp4', 'helo best movie', 'https://images.news18.com/ibnlive/uploads/2021/10/shiddat-poster-16330602513x2.jpg?impolicy=website&width=510&height=356', '2021-10-05 15:06:21'),
(2, 'Shiddat (2021) Full Movie Download In Dual Audio 720p.mkv', 'best movie', 'https://www.pagalworld.pw/GpE34Kg9Gq/113573/146067-shiddat-reprise-mp3-song-300.jpg', '2021-10-05 15:38:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);
ALTER TABLE `movies` ADD FULLTEXT KEY `movie_name` (`movie_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

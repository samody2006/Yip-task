-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 04:07 PM
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
-- Database: `yiponline`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'samody2006', 'samody2006@yahoo.com', '$2y$10$VlRWKQyRVDA01/VXIPYiyunl2bVG.6n3DjTF8jpBK5JI8BKOagmxm', '2024-08-27 15:19:02', '2024-08-27 15:19:02'),
(2, 'log123', 'login@gmail.com', '$2y$10$AXd0HDal9CIA65snEmrmMuCwBAfdF58bKg.TUmJXBPbfcvUwLZD..', '2024-08-28 08:03:33', '2024-08-28 08:03:33'),
(3, 'log1234', 'login1@gmail.com', '$2y$10$wLyD/EN/9dDPt8SXhohTu.8xqwmYkKdxasP6sUCOg.NNGkb5GPMMK', '2024-08-28 08:09:45', '2024-08-28 08:09:45'),
(4, 'san54', 'samody20063@gmail.com', '$2y$10$a5nxUb56pFadxiiD6JN4jOkQgfCtGEyfvOjC/VLhG3Q6Zk7Jgg9dq', '2024-08-28 08:12:17', '2024-08-28 08:12:17'),
(5, 'sam', 'samody20060@gmail.com', '$2y$10$8b9uQl/veQ/kRGEPJ4i/QeTDt8jAWAVsvHo0tcdF3sSZoihrPKyoS', '2024-08-28 08:59:42', '2024-08-28 12:57:19'),
(6, 'sam3', 'samody200996@gmail.com', '$2y$10$S9gY8RLhviuI6.fVcpuc.urmxvxK0DG2Zj044r1G..gbXnFPXfgkq', '2024-08-28 09:11:48', '2024-08-28 09:11:48'),
(7, 'sam259', 'samody200654@gmail.com', '$2y$10$U/Cg/K049.fjK9C7jvQXYODZsg8hAECk0CaBwCy7ANAfZpUVTiOa2', '2024-08-28 12:49:41', '2024-08-28 12:49:41'),
(8, 'sam2599', 'samody2006954@gmail.com', '$2y$10$iNazmYLVyUIgPJ6jJG1blu0TcJOIpVkO.2CbHzidZweJk0nw3T9VW', '2024-08-28 12:53:31', '2024-08-28 12:53:31'),
(9, 'sam007', 'samody2006@gmail.com', '$2y$10$TBGJjQnhgqtyHYzJb0ECleQ876AkKn2YoEwCJ/b6tZcLrOHmFjgWu', '2024-08-28 12:57:51', '2024-08-28 12:57:51'),
(10, 'sam007122', 'samody2006234@gmail.com', '$2y$10$8l/MZarAFgb4JgWq2vCiE.OBmdVgPrKuuzAxJ2sgTvHBdThfwIuf2', '2024-08-28 16:04:22', '2024-08-28 16:04:22'),
(11, 'sam006', 'Sam006@yahoo.com', '$2y$10$jtICxHFhoEpLl1i6v.s7U.aCbthit5i8.KEgKoDxjm3JOLAVE4zmW', '2024-08-28 16:08:39', '2024-08-28 16:08:39'),
(12, 'samm006', 'samm006@yah.com', '$2y$10$lCdaXq0JLYRT/OlM8K6na.ss4AG65SIIp4akDz6KwfYaAfK2u8wI.', '2024-08-28 16:12:48', '2024-08-28 16:12:48'),
(13, 'sam0034', 'samody2236@gmail.com', '$2y$10$XkEtenNxpe0zmuN7GdT4..EsmET8D9E40fL8HpiNAoiMXbGmnDdSS', '2024-08-28 16:23:48', '2024-08-28 16:23:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

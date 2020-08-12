-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-08-12 09:35:19
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db03`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) UNSIGNED NOT NULL,
  `length` int(5) UNSIGNED NOT NULL,
  `ondate` date NOT NULL,
  `publish` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(10) UNSIGNED NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES
(2, '電影6', 1, 111, '2020-08-12', '泰山製片大廠', '泰山山', '03B06v.mp4', '03B06.png', '劇情簡介    劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介    ', 6, 1),
(3, '電影5', 2, 112, '2020-08-12', '泰山製片大廠', '泰山1', '03B05v.mp4', '03B05.png', '劇情簡介    劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介    ', 5, 1),
(4, '電影4', 3, 100, '2020-08-12', '泰山製片大廠', '泰山1', '03B04v.mp4', '03B04.png', '劇情簡介    劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介    ', 4, 1),
(5, '電影3', 4, 90, '2020-08-12', '泰山製片大廠', '泰山山', '03B03v.mp4', '03B03.png', '劇情簡介    劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介    ', 3, 1),
(6, '電影2', 3, 99, '2020-08-12', '泰山製片大廠', '泰山1', '03B02v.mp4', '03B02.png', '劇情簡介    劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介    ', 2, 1),
(7, '電影1', 4, 88, '2020-08-12', '泰山製片大廠', '泰山1', '03B01v.mp4', '03B01.png', '劇情簡介    劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介   劇情簡介    ', 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `poster`
--

CREATE TABLE `poster` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(10) UNSIGNED NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `poster`
--

INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`) VALUES
(1, '電影9', '03A09.jpg', 1, 1),
(2, '電影8', '03A08.jpg', 2, 1),
(3, '電影7', '03A07.jpg', 3, 1),
(4, '電影6', '03A06.jpg', 4, 1),
(5, '電影5', '03A05.jpg', 5, 1),
(6, '電影4', '03A04.jpg', 6, 1),
(7, '電影3', '03A03.jpg', 7, 1),
(8, '電影2', '03A02.jpg', 9, 1),
(9, '電影1', '03A01.jpg', 10, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-25 14:28:00
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `shopping_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `order_table`
--

CREATE TABLE `order_table` (
  `id` int(12) NOT NULL,
  `itemid` int(12) NOT NULL,
  `itemname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `itemcost` int(128) NOT NULL,
  `quantity` int(12) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `order_table`
--

INSERT INTO `order_table` (`id`, `itemid`, `itemname`, `itemcost`, `quantity`, `indate`) VALUES
(19, 1004, 'わお！でた！！', 20000, 0, '2021-03-25 08:20:27'),
(20, 1004, 'わお！でた！！', 20000, 0, '2021-03-25 08:21:44'),
(21, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:24:29'),
(22, 1002, '結果発表～～～～', 1000000000, 1, '2021-03-25 08:25:57'),
(23, 1003, 'でさぁね～～～～～', 50000, 1, '2021-03-25 08:26:13'),
(24, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:38:12'),
(25, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:39:20'),
(26, 1001, 'ゲッツ', 100000, 2, '2021-03-25 08:40:25'),
(27, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:43:19'),
(28, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:45:53'),
(29, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:50:02'),
(30, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:50:24'),
(31, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:51:29'),
(32, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:52:26'),
(33, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:53:06'),
(34, 1002, '結果発表～～～～', 1000000000, 1, '2021-03-25 08:54:14'),
(35, 1001, 'ゲッツ', 100000, 1, '2021-03-25 08:59:04'),
(36, 1001, 'ゲッツ', 100000, 0, '2021-03-25 17:44:32'),
(37, 1001, 'ゲッツ', 100000, 0, '2021-03-25 17:45:22'),
(38, 1002, '結果発表～～～～', 1000000000, 0, '2021-03-25 17:47:27'),
(39, 1001, 'ゲッツ', 100000, 1, '2021-03-25 21:53:11'),
(40, 1001, 'ゲッツ', 100000, 1, '2021-03-25 21:54:20'),
(41, 1002, '結果発表～～～～', 1000000000, 1, '2021-03-25 22:10:56'),
(42, 1001, 'ゲッツ', 100000, 1, '2021-03-25 22:14:53'),
(43, 1003, 'でさぁね～～～～～', 50000, 1, '2021-03-25 22:16:47'),
(44, 1003, 'でさぁね～～～～～', 50000, 1, '2021-03-25 22:17:04'),
(45, 1001, 'ゲッツ', 100000, 1, '2021-03-25 22:17:11');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

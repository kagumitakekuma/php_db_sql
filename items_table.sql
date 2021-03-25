-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-25 14:18:46
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
-- テーブルの構造 `items_table`
--

CREATE TABLE `items_table` (
  `id` int(12) NOT NULL,
  `itemid` int(12) NOT NULL,
  `itemname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `itemcost` int(12) NOT NULL,
  `itemimage` int(128) NOT NULL,
  `explanation` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `items_table`
--

INSERT INTO `items_table` (`id`, `itemid`, `itemname`, `itemcost`, `itemimage`, `explanation`) VALUES
(1, 1001, 'ゲッツ', 100000, 0, '〇ンディ坂野になれます。'),
(2, 1002, '結果発表～～～～', 1000000000, 0, '神の領域、〇ウンタウン浜田の踏襲。'),
(3, 1003, 'でさぁね～～～～～', 50000, 0, 'もはや一発ギャグなのか？ハリウッドザ〇シショウ。'),
(4, 1004, 'わお！でた！！', 20000, 0, '誰も欲しくないかも。。。。');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `items_table`
--
ALTER TABLE `items_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `items_table`
--
ALTER TABLE `items_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

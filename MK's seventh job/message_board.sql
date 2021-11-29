-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-11-29 10:45:14
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `homework`
--

-- --------------------------------------------------------

--
-- 表的结构 `message_board`
--

CREATE TABLE `message_board` (
  `Number` int(11) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `message_board`
--

INSERT INTO `message_board` (`Number`, `ID`, `Comment`) VALUES
(1, '2', '3'),
(2, '4', '5'),
(3, '88', '99'),
(4, '88', '99'),
(5, '0', '0'),
(6, '后i哦', '等哈就');

--
-- 转储表的索引
--

--
-- 表的索引 `message_board`
--
ALTER TABLE `message_board`
  ADD PRIMARY KEY (`Number`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `message_board`
--
ALTER TABLE `message_board`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

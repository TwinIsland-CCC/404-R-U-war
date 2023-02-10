-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-02-10 15:33:41
-- 服务器版本： 8.0.12
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
-- 数据库： `phpmyadmin`
--

-- --------------------------------------------------------

--
-- 表的结构 `team_members`
--

CREATE TABLE `team_members` (
  `m_name` varchar(10) NOT NULL,
  `Student_id` int(10) NOT NULL,
  `Login` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass_word` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `team_members`
--

INSERT INTO `team_members` (`m_name`, `Student_id`, `Login`, `pass_word`) VALUES
('罗昕珂', 2013622, 'admin2', '12345678');

--
-- 转储表的索引
--

--
-- 表的索引 `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`Student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

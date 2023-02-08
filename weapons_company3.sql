-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-02-08 18:05:39
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
-- 表的结构 `weapons_company3`
--

CREATE TABLE `weapons_company3` (
  `E_name` varchar(100) NOT NULL,
  `url` varchar(60) NOT NULL,
  `C_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `weapons_company3`
--

INSERT INTO `weapons_company3` (`E_name`, `url`, `C_name`) VALUES
('AR-15/M16专辑', 'usa/m16/inde.htm', '英国精密国际（Accuracy International）\r\n			有限公司'),
('A.I.', 'britain/ai/ai.htm', '英国精密国际（Accuracy International）\r\n			有限公司'),
('ArmaLite', 'usa/armalite/armalite.htm', '美国阿玛莱特公司'),
('B&T', 'swiz/bt/bt.htm', '瑞士B&T公司'),
('Barret', 'usa/barrett/barrett.htm', '美国巴雷特火器制造有限公司，专门生产大口径狙击步枪'),
('Benelli', 'italy/benelli/benelli.htm', '意大利伯奈利公司生产的战术霰弹枪'),
('Beretta', 'italy/beretta/beretta.htm', '意大利伯莱塔公司'),
('Bushmaster', 'usa/bushmaster/bushmaster.htm', '美国大毒蛇公司'),
('Calico', 'usa/calico/calico.htm', '美国卡利科公司，专造螺旋弹筒自动武器'),
('CheyTac', 'usa/cheytac/cheytac.htm', '卖.408起家的小公司'),
('Colt', 'usa/colt/colt.htm', '美国柯尔特公司'),
('CZ-UB', 'czech/czub.htm', '轻武器生产商，著名产品CZ75系列'),
('Desert Tech', 'usa/r/dta/dta.htm', '美国沙漠科技公司'),
('EDM Arms', 'usa/edmarms/edmarms.htm', '造WindRunner的小公司'),
('F.N.H.', 'fn/fn.htm', '比利时国营赫斯塔尔公司'),
('Franchi', 'italy/franchi/franchi.htm', '意大利路易吉·弗兰齐公司'),
('GLOCK', 'austria/glock/glock.htm', '奥地利格洛克有限公司'),
('H&K', 'german/hk/HK.html', '德国黑克勒和科赫责任有限公司'),
('I.W.I.(I.M.I.)', 'isreal/imi/imi.htm', '以色列军事工业公司轻武器分部'),
('KA', 'usa/kackmc/kac.htm', '美国奈特军械公司'),
('KRISS', 'usa/kriss/kriss_s5.htm', '美国KRISS公司'),
('Kel-Tec', 'usa/keltec/keltec.htm', '美国'),
('MagPul', 'usa/magpul/magpul.htm', 'MagPul'),
('Mauser', 'german/mauser/mauser.htm', '德国毛瑟公司'),
('MCBROS', 'usa/mcmillan/mcbros.htm', '美国麦克米兰'),
('Mossberg', 'usa/mossberg/mossberg.htm', '美国莫斯伯格父子公司'),
('Remington', 'usa/remington/rem.htm', '美国雷明顿公司'),
('Ruger', 'usa/ruger/ruger.htm', '美国'),
('SAKO-Valmet', 'finland/sakovalmet.htm', '芬兰萨科'),
('S&W', 'usa/sw/sw.htm', '美国史密斯-韦森公司'),
('SIG Arms', 'sigsauer/SIG.htm', '前S'),
('S', 'austria/steyr/steyr.htm', '奥地利斯太尔-曼利彻尔公司'),
('STK', 'singapore/stk.htm', '新加坡的STK公司，以前的CIS'),
('', 'usa/tac-ops/main.htm', '美国战术任务公司的产品介绍'),
('Taurus', 'brazil/taurus/taurus.htm', '巴西陶鲁斯公司'),
('Walther', 'german/walther/walther.htm', '德国卡尔·瓦尔特公司'),
('Winchester', 'usa/win/winchester.htm', '美国温彻斯特公司');

--
-- 转储表的索引
--

--
-- 表的索引 `weapons_company3`
--
ALTER TABLE `weapons_company3`
  ADD PRIMARY KEY (`E_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

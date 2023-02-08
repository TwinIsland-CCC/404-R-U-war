-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2023-02-09 01:22:28
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
-- 表的结构 `weapons`
--

CREATE TABLE `weapons` (
  `name` varchar(60) NOT NULL,
  `country` int(11) NOT NULL,
  `content` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kind` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `weapons`
--

INSERT INTO `weapons` (`name`, `country`, `content`, `kind`) VALUES
(' MP-448 Skyph', 2, 'The MP-448 Skyph is the latest improvement of the Makarov pistol, developed by the Izhevsk Mechanical Plant (IzhMech, or Baikal) in the late 1990s. The gun has an engineered plastic base and a cast steel firing mechanism with an improved and more reliable safety mechanism. The use of engineering plastics makes the Skyph a lighter pistol than the Maglov, and its shape is more ergonomic. This model is primarily intended for export and is available in two calibres.', 5),
('AK-47 / AKS-47', 2, 'The AK-47 has mechanical sights with night vision sights. The column collimator and the U-notch illuminated door of the table ruler have reversible attachments and are fitted with fluorescent material radium 221. the table ruler is divided into 100 to 800m, one division is 100m and the combat table ruler is fitted with 300m. but when aiming with the sight, the collimator can only be twisted up and down for height correction, no wind deflection correction is possible.', 1),
('DShK/DShKM large calibre machine gun', 2, 'The DShK gradually replaced many 7.62mm Maxim heavy machine guns during the war and performed well in the war. The armour-piercing rounds fired from the DShK could penetrate 15mm thick steel plates at a range of 500m, making it an excellent weapon for supporting infantry in ground combat as it was effective not only against low-flying enemy aircraft but also against lightly armoured targets or infantry bunkers.', 2),
('Elf-2 submachine gun', 1, 'The Elf-2 submachine gun is similar in design to the Uzi or Steyr MPi-69, including a magazine inserted into the grip and an enveloping mechanism that opens for firing. The mechanism, however, consists of two articulated parts that have the effect of delaying recoil to reduce the rate of fire, maintaining a theoretical rate of fire of approximately 450 rounds per minute, and the system also claims to have the benefit of reduced recoil and shooting vibration.', 4),
('Evgeniy Fedorovich Dragunov Sniper Rifles', 2, 'The first prototype of the Dragunov sniper rifle (for convenience, the SVD-1958) differed from the model later finalised in 1963 in both the stock and the wood guard. The SVD-1958 also has a sight door positioned above the rear of the receiver, a sight design taken directly from the AK-47, and no flameproofing at the muzzle. The gun is very accurate, but not reliable, and needs a lot of improvement.', 3),
('Goblin folding submachine gun', 1, 'The Goblin submachine gun is a Ukrainian copy of the former Soviet PP-90 folding submachine gun since the collapse of the Soviet Union. Like the PP-90, the Goblin submachine gun has a folding mechanical sight, making it easier to aim than the American Ares FMG. In addition, unlike the PP-90, the Goblin submachine gun has an additional short foregrip to make gripping it easier. There were also two calibres, the 9 x 18mm Makarov and the 9 x 19mm Parabellum.', 4),
('GP-30 Gun Mounted Grenade Launcher', 2, 'The GP-30 is an improvement on the GP-25, with a slight weight reduction and some shortening of the overall length, but the barrel length remains unchanged and the tactical performance is identical. The existing GP-25 is still in use by the Russian Army, so the manufacturer is mainly targeting foreign trade. The GP-30 is also fitted with the VOG-25 series of anti-personnel grenades.', 7),
('GSh-18', 2, 'The GSh-18 (Russian ГШ-18) pistol was developed by the Russian KBP (Instrument Design Bureau, КБП). The main designers were Gryazev (Грязева Василия Петровича, Latinized Gryazev Vasily Petrovich) and Shipunova (Шипунова Аркадия Георгиевича, Latinized Shipunova Arcadia Georgievicha), who collaborated on the development of the aerial gun GSh-23 and GSh-301, among others. The \"23\" in GSh-23 indicates the calibre, while the \"18\" in GSh-18 indicates the magazine capacity.', 5),
('KEDR/KLIN', 2, 'As the 9 x 18mm PM pistol cartridge was not powerful enough, it did not take long to develop a new 9 x 18mm PMM pistol cartridge (see the Makarov pistol article for details). In 1994, the Izhevsk Arsenal enhanced the KEDR to fire a high-capacity cartridge and named it the PP-9 KLIN (KLIN in Russian), which was produced between 1996 and 2002 and equipped in small numbers by some Russian police and security forces. A shorter full-length KLIN-2 version was later said to be in development.', 4),
('Kord-5.45', 2, 'The Kord-5.45 (КОРД-5.45) light machine gun is a 5.45mm calibre dual mode light machine gun similar to the FN Minimi, which was originally developed from a requirement for a \"5.45mm assault machine gun\" issued by the Russian Ministry of the Interior (MVD) in 2011 to provide counter-terrorism The aim was to provide special police units with a light machine gun that would have a longer-lasting firepower than the current 5.45mm squad light machine gun, known as the RPK74 series. The development project is codenamed \"Tokar\" (pronounced \"Tokar\"), which is Cyrillic for \"Токарь\", meaning \"lathe worker \". The initial requirements included a chain fed cartridge, two rates of fire (600RPM and 900RPM were explicitly requested) and a quick barrel change, while the maximum empty weight could not exceed 6.5kg, although a dual feed mode was not yet required.', 2),
('Mosin-Nagant', 2, 'The M1891 cartridge was a 210-grain, copper-nickel armored, lead-core, blunt round-tipped cartridge. Copper-nickel alloy is armoured, lead core of the blunt round head-shaped cartridge, in Germany adopted the tip of the bullet, Russia also began to develop the tip of the bullet.', 1),
('MSMC', 0, 'The MSMC submachine gun fires the 5.56×30mm cartridge, which has better penetration than the 9×19mm. The calibre is said to be made from a shortened case of 5.56×45 NATO ammunition, which is 42mm long, weighs 6g overall, has a 17mm long bullet with a 2.6 gram tip, and has a muzzle velocity of 650m/s fired from a 300mm barrel. It uses the guided automatic principle, with the ability to select semi-automatic or fully automatic firing modes, a large grip guard (the early prototypes had a small traditional trigger guard), a pull handle and safety/quick release handle that can be operated with either the right or left hand, a telescopic stock to reduce the overall size of the gun, a Picatinny rail on top of the receiver for mounting accessories, and the published prototype fitted with the ITL fitted to the Israeli TAR-21. MARS laser pointer/red dot sight fitted to the Israeli TAR-21. A muzzle flamer is fitted and a silencer can be added, as well as a bayonet.', 4),
('PP-19 Bizon', 2, 'The BIZON-2 has a Kalasnikov rear sight with a sliding scale and a notched sight gate set at 50, 100 and 150 metres respectively; the BIZON-3 has a rotating flip-up sight gate with height and windage adjustment; both rear sights have lug guards; the BIZON-2 has an AKS-74 stock that folds to the left, while the BIZON-3 has an upward-folding stock that is secured to the top of the receiver by a spring-loaded catch. Both the BIZON-2 and BIZON-3 have several different muzzle devices.', 4),
('RMB-93', 2, 'The gun operates on both sides. The trigger travel is long and stiff, severely compromising accuracy. The combat version of the RMB-93 has a polymer forend and pistol-shaped grip, and a steel stock that folds forward over the top of the cartridge. The civilian/hunting version of the RMO-93 can be fitted with a similar top-folding metal or wooden stock and semi-pistol grip. The combat version is chambered in 76mm and has a barrel length of 528mm.', 6),
('RPG-27 disposable rocket launcher', 2, 'The RPG-27 Tavolga is an expanded version of the RPG-26, which was developed at the same time and is a sister to the RPG-27, which fires 105mm rockets. The construction principle is essentially the same, except for the size difference, the RPG-27 has a 105mm tandem armour-breaking combat section, which breaks armour to a depth of 750mm and can be used against heavily armoured vehicles or those fitted with reactive armour. ', 7),
('RPK-74 / RPKS-74', 2, 'The RPK-74 has a long 45-round magazine, but this is fully compatible with the original 30-round magazine, so the RPK-74 can also be used with the rifle\'s 30-round magazine, and the head of the terrorist group al-Qaeda, Bin Laden, is often seen in public photographs and video footage with an AKS-74U fitted with a 45-round magazine. Kalashnikov also designed a 75-round drum, but no RPK-74s have been seen with this type of drum.', 2),
('SAIGA-410', 2, 'The Saiga-410 is available in hunting versions with long barrels and fixed stocks (wood or polymer) with semi-pistol shaped grips, and in defensive/tactical versions with AK-74M style grips and side folding polymer stocks and long barrels in the Saiga-410S. There are also models with short barrels and folding stocks such as the Saiga-410K and various other models with short barrels such as the Saiga-410K-01, K-02 and so on.', 6),
('TASCO 7ET3 Anti-Material Rifle', 1, 'The 7ET3 anti-material rifle was developed by the Ukrainian state company TASCO (Таско) and is a design reference to the Russian OSV-96, but does not appear to have a folding function.', 1),
('TASCO 7ET9 / 7ET10 submachine gun', 1, 'The 7ET9 is a simpler design, removing all those articulated receiver systems, air-cooled systems, and adopting a traditional design that includes a simple free recoil receiver, and an open chamber ready to fire. The receiver is made of stamped steel and the pull handle, similar to that of the Polish PM98, is a slide located on either side of the receiver. The stock folds over the receiver and the foregrip folds back. It can also be replaced with an integral tactical light or laser pointer. ', 4),
('V-94/OSV-96', 2, 'The V-94 appears to be very slender, with a rectangular double-chambered muzzle device with sound dampening, flame suppression and retardation, and a guided-air automatic principle, but the operation of the locking mechanism is not known, but it is estimated that it would be of the rotary type with a rate of fire of about 15-20 rounds per minute. The buttstock base plate is cushioned to mitigate the effects of recoil on the shooter when firing. ', 3),
('Vepr assault rifle', 1, 'The Vepr (\"wild boar\" in Ukrainian) is a new design of assault rifle announced by Ukraine in 2003. Since the collapse of the Soviet Union, Ukraine has been independent, but its armed forces still use Soviet-era light weapons, including the AKM and AK-74 assault rifles. According to Ukrainian propaganda, the Wild Boar assault rifle is a significant improvement on the AK-74, with much improved combat performance, but in fact it is simply a stockless version of the AK-74. ', 1);

-- --------------------------------------------------------

--
-- 表的结构 `weapons_company3`
--

CREATE TABLE `weapons_company3` (
  `E_name` varchar(100) NOT NULL,
  `url` varchar(60) NOT NULL,
  `C_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `weapons_company3`
--

INSERT INTO `weapons_company3` (`E_name`, `url`, `C_name`) VALUES
('', 'usa/tac-ops/main.htm', '美国战术任务公司的产品介绍'),
('A.I.', 'britain/ai/ai.htm', '英国精密国际（Accuracy International）\r\n			有限公司'),
('AR-15/M16专辑', 'usa/m16/inde.htm', '英国精密国际（Accuracy International）\r\n			有限公司'),
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
('Kel-Tec', 'usa/keltec/keltec.htm', '美国'),
('KRISS', 'usa/kriss/kriss_s5.htm', '美国KRISS公司'),
('MagPul', 'usa/magpul/magpul.htm', 'MagPul'),
('Mauser', 'german/mauser/mauser.htm', '德国毛瑟公司'),
('MCBROS', 'usa/mcmillan/mcbros.htm', '美国麦克米兰'),
('Mossberg', 'usa/mossberg/mossberg.htm', '美国莫斯伯格父子公司'),
('Remington', 'usa/remington/rem.htm', '美国雷明顿公司'),
('Ruger', 'usa/ruger/ruger.htm', '美国'),
('S', 'austria/steyr/steyr.htm', '奥地利斯太尔-曼利彻尔公司'),
('S&W', 'usa/sw/sw.htm', '美国史密斯-韦森公司'),
('SAKO-Valmet', 'finland/sakovalmet.htm', '芬兰萨科'),
('SIG Arms', 'sigsauer/SIG.htm', '前S'),
('STK', 'singapore/stk.htm', '新加坡的STK公司，以前的CIS'),
('Taurus', 'brazil/taurus/taurus.htm', '巴西陶鲁斯公司'),
('Walther', 'german/walther/walther.htm', '德国卡尔·瓦尔特公司'),
('Winchester', 'usa/win/winchester.htm', '美国温彻斯特公司');

-- --------------------------------------------------------

--
-- 表的结构 `weapon_country`
--

CREATE TABLE `weapon_country` (
  `countryid` int(11) NOT NULL,
  `countryname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `weapon_country`
--

INSERT INTO `weapon_country` (`countryid`, `countryname`) VALUES
(0, 'others'),
(1, 'UKRAINE'),
(2, 'RUSSIA / USSR');

-- --------------------------------------------------------

--
-- 表的结构 `weapon_kind`
--

CREATE TABLE `weapon_kind` (
  `kind_id` int(11) NOT NULL,
  `kindname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `E_kindname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `weapon_kind`
--

INSERT INTO `weapon_kind` (`kind_id`, `kindname`, `E_kindname`) VALUES
(1, '步枪', 'Rifles'),
(2, '机枪', 'Machine guns'),
(3, '狙击步枪', 'Sniper Rifles'),
(4, '冲锋枪/短突击步枪', 'Submachine guns/short assault rifles'),
(5, '手枪', 'Pistols'),
(6, '霰弹枪', 'Shotguns'),
(7, '其他支援武器', 'Other support weapons');

--
-- 转储表的索引
--

--
-- 表的索引 `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`name`),
  ADD KEY `countrykey` (`country`),
  ADD KEY `kindkey` (`kind`);

--
-- 表的索引 `weapons_company3`
--
ALTER TABLE `weapons_company3`
  ADD PRIMARY KEY (`E_name`);

--
-- 表的索引 `weapon_country`
--
ALTER TABLE `weapon_country`
  ADD PRIMARY KEY (`countryid`);

--
-- 表的索引 `weapon_kind`
--
ALTER TABLE `weapon_kind`
  ADD PRIMARY KEY (`kind_id`);

--
-- 限制导出的表
--

--
-- 限制表 `weapons`
--
ALTER TABLE `weapons`
  ADD CONSTRAINT `countrykey` FOREIGN KEY (`country`) REFERENCES `weapon_country` (`countryid`),
  ADD CONSTRAINT `kindkey` FOREIGN KEY (`kind`) REFERENCES `weapon_kind` (`kind_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-04 16:55:32
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalphp`
--

-- --------------------------------------------------------

--
-- 表的结构 `fp_km`
--

CREATE TABLE `fp_km` (
  `km_id` int(11) NOT NULL COMMENT '科目编号',
  `km_name` varchar(50) DEFAULT NULL COMMENT '科目名称'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fp_km`
--

INSERT INTO `fp_km` (`km_id`, `km_name`) VALUES
(17, 'web'),
(2, 'PHP'),
(3, 'javascript'),
(6, 'PS'),
(12, 'ThinkPHP'),
(16, 'ios');

-- --------------------------------------------------------

--
-- 表的结构 `fp_score`
--

CREATE TABLE `fp_score` (
  `s_id` int(11) NOT NULL COMMENT '成绩主键',
  `s_stuId` varchar(50) NOT NULL COMMENT '学号',
  `s_kmname` varchar(50) NOT NULL COMMENT '科目名称',
  `s_cj` float NOT NULL COMMENT '成绩'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fp_score`
--

INSERT INTO `fp_score` (`s_id`, `s_stuId`, `s_kmname`, `s_cj`) VALUES
(37, '4', 'ios', 86),
(36, '4', 'ThinkPHP', 95),
(35, '12', 'PHP', 96),
(34, '12', 'javascript', 96),
(33, '4', 'PS', 89),
(32, '4', 'PHP', 45),
(31, '4', 'javascript', 45),
(38, '4', 'web', 96);

-- --------------------------------------------------------

--
-- 表的结构 `fp_student`
--

CREATE TABLE `fp_student` (
  `id` int(11) NOT NULL,
  `studentId` varchar(10) NOT NULL COMMENT '学号',
  `name` varchar(20) NOT NULL COMMENT '姓名',
  `gender` enum('男','女','保密') NOT NULL COMMENT '性别',
  `class` varchar(10) NOT NULL COMMENT '班级'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fp_student`
--

INSERT INTO `fp_student` (`id`, `studentId`, `name`, `gender`, `class`) VALUES
(42, '4', '4', '男', '5'),
(2, '09202201', '张娜拉', '女', '软件2022'),
(3, '09202202', '吴浩', '男', '软件2022'),
(4, '09202203', '刘星', '男', '软件2022'),
(5, '09202204', '袁浩', '男', '软件2022'),
(6, '09202205', '宋柯', '男', '软件2022'),
(7, '09202206', '张国华', '男', '软件2022'),
(8, '09202207', '李连涛', '男', '软件2022'),
(9, '09202208', '刘青', '女', '软件2022'),
(10, '09202209', '张斌', '男', '软件2022'),
(11, '09202210', '王楠', '女', '软件2022'),
(12, '09202301', '刘涛', '女', '软件2023'),
(13, '09202302', '宋彬', '男', '软件2023'),
(14, '09202303', '吴洁兵', '男', '软件2023'),
(15, '09202304', '吴丽清', '女', '软件2023'),
(16, '09202305', '何洁丽', '女', '软件2023'),
(17, '09202306', '张明媚', '女', '软件2023'),
(18, '09202307', '孙明伟', '男', '软件2023'),
(19, '09202308', '孙晴晴', '女', '软件2023'),
(20, '09202309', '李志伟', '男', '软件2024'),
(21, '09202310', '张坤文', '男', '软件2024'),
(22, '09202401', '李浩', '男', '软件2024'),
(23, '09202402', '宋婷', '女', '软件2024'),
(24, '09202403', '孙静', '女', '软件2024'),
(25, '09202404', '吴思思', '女', '软件2024'),
(26, '09202405', '张婷婷', '女', '软件2024'),
(27, '09202406', '宋梅', '女', '软件2024'),
(28, '09202407', '吴洁静', '女', '软件2024'),
(29, '09202408', '宋仑', '男', '软件2024'),
(30, '09202409', '李香兰', '女', '软件2024'),
(31, '09202410', '黄冰冰', '女', '软件2024'),
(40, '2', '2', '男', '2'),
(43, '12', 'll', '男', '1622');

-- --------------------------------------------------------

--
-- 表的结构 `fp_user`
--

CREATE TABLE `fp_user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL COMMENT '用户名',
  `pass` varchar(20) NOT NULL COMMENT '密码',
  `pwd_question` varchar(50) NOT NULL COMMENT '密保'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fp_user`
--

INSERT INTO `fp_user` (`id`, `name`, `pass`, `pwd_question`) VALUES
(1, 'admin', '123', '123456'),
(2, 'admin1', '123', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fp_km`
--
ALTER TABLE `fp_km`
  ADD PRIMARY KEY (`km_id`),
  ADD UNIQUE KEY `km_name` (`km_name`);

--
-- Indexes for table `fp_score`
--
ALTER TABLE `fp_score`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `uc_kmStudnt` (`s_stuId`,`s_kmname`);

--
-- Indexes for table `fp_student`
--
ALTER TABLE `fp_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studentId` (`studentId`);

--
-- Indexes for table `fp_user`
--
ALTER TABLE `fp_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `fp_km`
--
ALTER TABLE `fp_km`
  MODIFY `km_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '科目编号', AUTO_INCREMENT=18;
--
-- 使用表AUTO_INCREMENT `fp_score`
--
ALTER TABLE `fp_score`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '成绩主键', AUTO_INCREMENT=39;
--
-- 使用表AUTO_INCREMENT `fp_student`
--
ALTER TABLE `fp_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- 使用表AUTO_INCREMENT `fp_user`
--
ALTER TABLE `fp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

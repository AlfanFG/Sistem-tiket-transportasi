-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 06:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandara`
--

CREATE TABLE `bandara` (
  `bandaraid` varchar(10) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `abbr` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bandara`
--

INSERT INTO `bandara` (`bandaraid`, `name`, `city`, `abbr`) VALUES
('BUBDO003', 'Huein Sast', 'Bandung', 'BDO'),
('BUSKH001', 'Soekarno H', 'Jakarta', 'SKH'),
('BUSUB002', 'Juanda', 'Surabaya', 'SUB');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `name`, `address`, `phone`, `gender`) VALUES
('CUS0001', 'Diki', 'Jangari', 2147483647, 'L'),
('CUS0002', 'waef', 'waef', 3242343, 'L'),
('CUS0003', 'waef', 'waef', 3242343, 'L'),
('CUS0004', 'awef', 'wef', 2342342, 'L'),
('CUS0005', 'awef', 'wef', 2342342, 'L'),
('CUS0006', 'Alfan Faturahman', 'Cilaku', 81324354, 'L'),
('CUS0007', 'Chalida', 'Cibeber', 81623543, 'L'),
('CUS0008', 'udin', 'cipaku', 234567, 'L'),
('CUS0009', 'Alfan', '', 2147483647, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationid` varchar(20) NOT NULL,
  `reservation_at` varchar(50) DEFAULT NULL,
  `reservation_code` varchar(30) NOT NULL,
  `reservation_date` date DEFAULT NULL,
  `customerid` varchar(20) DEFAULT NULL,
  `seat_code` varchar(20) DEFAULT NULL,
  `ruteid` varchar(20) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `userid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationid`, `reservation_at`, `reservation_code`, `reservation_date`, `customerid`, `seat_code`, `ruteid`, `price`, `userid`) VALUES
('20180214001', 'Neon', 'ji0S7Jma6e', '2018-02-14', 'CUS0001', '28', 'RT0004', 50000, 'Alfan'),
('20180214002', 'Neon', 'q9gjRNhnYj', '2018-02-14', 'CUS0002', '38', 'RT0004', 50000, 'Alfan'),
('20180214003', 'Neon', 'q9gjRNhnYj', '2018-02-14', 'CUS0003', '38', 'RT0004', 50000, 'Alfan'),
('20180214004', 'Neon', 'kbyP7mGSKr', '2018-02-14', 'CUS0004', '48', 'RT0006', 10922, 'Alfan'),
('20180214005', 'Neon', 'kbyP7mGSKr', '2018-02-14', 'CUS0005', '48', 'RT0006', 10922, 'Alfan'),
('20180215001', 'Neon', 'xpjXQ8sjda', '2018-02-15', 'CUS0006', '44', 'RT0004', 50000, 'Alfan'),
('20180215002', 'Neon', 'xpjXQ8sjda', '2018-02-15', 'CUS0007', '44', 'RT0004', 50000, 'Alfan'),
('20180215003', 'Neon', 'xpjXQ8sjda', '2018-02-15', 'CUS0008', '44', 'RT0004', 50000, 'Alfan'),
('20180215004', 'Neon', 'xpjXQ8sjda', '2018-02-15', 'CUS0009', '44', 'RT0004', 50000, 'Alfan'),
('20180215005', 'Neon', 'j3NEKjpSDT', '2018-02-15', 'CUS0010', '43', 'RT0004', 50000, 'Alfan'),
('20180215006', 'Neon', 'u1f6mH5lTo', '2018-02-15', 'CUS0006', '28', 'RT0004', 50000, 'Alfan'),
('20180215007', 'Neon', 'ustH6r82Uv', '2018-02-15', 'CUS0007', '34', 'RT0004', 50000, 'Alfan'),
('20180215008', 'Neon', 'z1cgYT2MKI', '2018-02-15', 'CUS0007', '33', 'RT0001', 20784, 'Alfan'),
('20180215009', 'Neon', 'z1cgYT2MKI', '2018-02-15', 'CUS0008', '38', 'RT0001', 20784, 'Alfan'),
('20180215010', 'Neon', '4y00hP6aHI', '2018-02-15', 'CUS0009', '29', 'RT0002', 20000, 'Alfan'),
('20180215011', 'Neon', '4y00hP6aHI', '2018-02-15', 'CUS0010', '29', 'RT0002', 20000, 'Alfan'),
('20180215012', 'Neon', 'e6YBB46Z69', '2018-02-15', 'CUS0008', '49', 'RT0004', 50000, 'Alfan'),
('20180215013', 'Neon', 'e6YBB46Z69', '2018-02-15', 'CUS0009', '49', 'RT0004', 50000, 'Alfan'),
('20180215014', 'Neon', 'e6YBB46Z69', '2018-02-15', 'CUS0010', '49', 'RT0004', 50000, 'Alfan'),
('20180215015', 'Neon', 'L5A1hOTzfI', '2018-02-15', 'CUS0006', '47', 'RT0005', 100000, NULL),
('20180215016', 'Neon', 'L5A1hOTzfI', '2018-02-15', 'CUS0007', '52', 'RT0005', 100000, NULL),
('20180903001', 'Neon', '3JCYDOW54X', '2018-09-03', 'CUS0008', '58', 'RT0006', 10922, 'Alfan'),
('20210316001', 'Neon', 'OvUI08Ez4k', '2021-03-16', 'CUS0009', '43', 'RT0006', 10922, 'Alfan');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `ruteid` varchar(15) NOT NULL,
  `depart_at` time DEFAULT NULL,
  `rute_from` varchar(20) DEFAULT NULL,
  `rute_to` varchar(20) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `transportationid` varchar(20) DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`ruteid`, `depart_at`, `rute_from`, `rute_to`, `price`, `transportationid`, `time`) VALUES
('RT0001', '01:00:00', 'STCZR0001', 'STBDG0002', 10392323, 'TR0002', '02:30:00'),
('RT0002', '11:00:00', 'STBDG0002', 'STCZR0001', 200000, 'TR0001', '02:00:00'),
('RT0003', '09:00:00', 'STRBO0003', 'STCZR0001', 3000000, 'TR0002', '11:00:00'),
('RT0004', '01:00:00', 'BUSUB002', 'BUSKH001', 500000, 'TR0003', '02:00:00'),
('RT0005', '03:00:00', 'BUSKH001', 'BUSUB002', 500000, 'TR0003', '04:00:00'),
('RT0006', '08:00:00', 'BUSKH001', 'BUBDO003', 10922343, 'TR0003', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE `stasiun` (
  `stasiunid` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `abbr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`stasiunid`, `name`, `city`, `abbr`) VALUES
('STBDG0002', 'Bandung', 'Bandung', 'BDG'),
('STCZR0001', 'Cianjur', 'Cianjur', 'CZR'),
('STRBO0003', 'Rebo', 'Sukabumi', 'RBO');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `transportationid` varchar(20) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `seat_qty` varchar(20) DEFAULT NULL,
  `transportation_typeid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`transportationid`, `code`, `description`, `seat_qty`, `transportation_typeid`) VALUES
('TR0001', 'KA-21', 'KAI ', '50', 'T0001'),
('TR0002', 'KAI-1N4', 'KAI', '100', 'T0001'),
('TR0003', 'GI-012', 'Garuda Indonesia', '100', 'T0002'),
('TR0004', 'KA-2112', 'Pesawat', '50', 'T0002');

-- --------------------------------------------------------

--
-- Table structure for table `transportation_type`
--

CREATE TABLE `transportation_type` (
  `transportation_typeid` varchar(20) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation_type`
--

INSERT INTO `transportation_type` (`transportation_typeid`, `description`) VALUES
('T0001', 'Kereta Api'),
('T0002', 'Pesawat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fullname` varchar(20) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `fullname`, `level`) VALUES
('US0001', 'Alfan', '123456', 'Alfan Faturahman', 'admin'),
('US0002', 'Asep', 'operator', 'Asep Jaenudin', 'operator'),
('US0003', 'Aditya', 'user123', 'Aditya Wardhana', 'operator'),
('US0004', 'BOY', 'awfe22', 'BoyWilliam', 'admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_getkereta`
-- (See below for the actual view)
--
CREATE TABLE `v_getkereta` (
`ruteid` varchar(15)
,`depart_at` time
,`rute_from` varchar(20)
,`rute_to` varchar(20)
,`price` int(20)
,`description` varchar(20)
,`transportationid` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_getpesawat`
-- (See below for the actual view)
--
CREATE TABLE `v_getpesawat` (
`ruteid` varchar(15)
,`depart_at` time
,`rute_from` varchar(20)
,`rute_to` varchar(20)
,`price` int(20)
,`description` varchar(20)
,`transportationid` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pendapatan`
-- (See below for the actual view)
--
CREATE TABLE `v_pendapatan` (
`reservation_date` date
,`jumlah_transaksi` bigint(21)
,`price` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rutepesawat`
-- (See below for the actual view)
--
CREATE TABLE `v_rutepesawat` (
`ruteid` varchar(15)
,`depart_at` time
,`rute_from` varchar(20)
,`rute_to` varchar(20)
,`price` int(20)
,`transportationid` varchar(20)
,`time` time
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rutestasiun`
-- (See below for the actual view)
--
CREATE TABLE `v_rutestasiun` (
`ruteid` varchar(15)
,`depart_at` time
,`rute_from` varchar(20)
,`rute_to` varchar(20)
,`price` int(20)
,`transportationid` varchar(20)
,`time` time
);

-- --------------------------------------------------------

--
-- Structure for view `v_getkereta`
--
DROP TABLE IF EXISTS `v_getkereta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_getkereta`  AS  select `r`.`ruteid` AS `ruteid`,`r`.`depart_at` AS `depart_at`,`r`.`rute_from` AS `rute_from`,`r`.`rute_to` AS `rute_to`,`r`.`price` AS `price`,`t`.`description` AS `description`,`t`.`transportationid` AS `transportationid` from (`rute` `r` join `transportation` `t` on(`r`.`transportationid` = `t`.`transportationid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_getpesawat`
--
DROP TABLE IF EXISTS `v_getpesawat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_getpesawat`  AS  select `r`.`ruteid` AS `ruteid`,`r`.`depart_at` AS `depart_at`,`r`.`rute_from` AS `rute_from`,`r`.`rute_to` AS `rute_to`,`r`.`price` AS `price`,`t`.`description` AS `description`,`t`.`transportationid` AS `transportationid` from (`rute` `r` join `transportation` `t` on(`r`.`transportationid` = `t`.`transportationid`)) where `t`.`transportation_typeid` = 'T0002' ;

-- --------------------------------------------------------

--
-- Structure for view `v_pendapatan`
--
DROP TABLE IF EXISTS `v_pendapatan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pendapatan`  AS  select `r`.`reservation_date` AS `reservation_date`,count(`r`.`reservationid`) AS `jumlah_transaksi`,sum(`r`.`price`) AS `price` from `reservation` `r` group by `r`.`reservation_date` ;

-- --------------------------------------------------------

--
-- Structure for view `v_rutepesawat`
--
DROP TABLE IF EXISTS `v_rutepesawat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rutepesawat`  AS  select `r`.`ruteid` AS `ruteid`,`r`.`depart_at` AS `depart_at`,`r`.`rute_from` AS `rute_from`,`r`.`rute_to` AS `rute_to`,`r`.`price` AS `price`,`r`.`transportationid` AS `transportationid`,`r`.`time` AS `time` from (`rute` `r` join `bandara` `b` on(`r`.`rute_from` = `b`.`bandaraid`)) where `r`.`rute_from` = `b`.`bandaraid` ;

-- --------------------------------------------------------

--
-- Structure for view `v_rutestasiun`
--
DROP TABLE IF EXISTS `v_rutestasiun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rutestasiun`  AS  select `r`.`ruteid` AS `ruteid`,`r`.`depart_at` AS `depart_at`,`r`.`rute_from` AS `rute_from`,`r`.`rute_to` AS `rute_to`,`r`.`price` AS `price`,`r`.`transportationid` AS `transportationid`,`r`.`time` AS `time` from ((`rute` `r` join `stasiun` `s` on(`r`.`rute_from` = `s`.`stasiunid`)) join `transportation` `t` on(`r`.`transportationid` = `t`.`transportationid`)) where `t`.`transportation_typeid` = 'T0001' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandara`
--
ALTER TABLE `bandara`
  ADD PRIMARY KEY (`bandaraid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationid`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`ruteid`);

--
-- Indexes for table `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`stasiunid`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`transportationid`);

--
-- Indexes for table `transportation_type`
--
ALTER TABLE `transportation_type`
  ADD PRIMARY KEY (`transportation_typeid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

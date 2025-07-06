-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 01:25 PM
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
-- Database: `catullusshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `bnum` varchar(50) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `created_at` datetime NULL DEFAULT CURRENT_TIMESTAMP, -- แก้ไขตรงนี้: เพิ่ม NULL
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `fname`, `lname`, `bnum`, `tname`, `created_at`, `updated_at`) VALUES
(1, 'ทนงศักดิ์', 'แซ่เติน', '111-1-31808-1', 'ธนาคารกสิกร', '2023-02-11 07:48:46', '2024-02-11 16:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `boxlog`
--

CREATE TABLE `boxlog` (
  `id` int(11) NOT NULL,
  `date` datetime(2) NOT NULL,
  `username` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `prize_name` varchar(255) NOT NULL,
  `uid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `box_product`
--

CREATE TABLE `box_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `percent` int(3) NOT NULL DEFAULT 100,
  `salt_prize` varchar(255) NOT NULL DEFAULT 'ไม่ได้รับรางวัล',
  `c_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `box_product`
--

INSERT INTO `box_product` (`id`, `name`, `price`, `des`, `img`, `type`, `percent`, `salt_prize`, `c_type`) VALUES
(2, 'เทส', 0, 'เทส', 'https://cdn.discordapp.com/attachments/1178032838189260901/1178227379093651466/83_20231126135426.png?ex=657560c1&is=6562ebc1&hm=ddeadee70b33168d4371dc9af50278f8b0c61f37eefc01fbcc45f1c0dbd55119&', 1, 100, 'ไม่ได้รับรางวัล', '0'),
(3, 'เทส1', 0, 'เทส1', 'https://cdn.discordapp.com/attachments/1178032838189260901/1178227379093651466/83_20231126135426.png?ex=657560c1&is=6562ebc1&hm=ddeadee70b33168d4371dc9af50278f8b0c61f37eefc01fbcc45f1c0dbd55119&', 1, 100, 'ไม่ได้รับรางวัล', 'เทส2'),
(4, 'เทส2', 0, 'เทส2', 'https://cdn.discordapp.com/attachments/1178032838189260901/1178227379093651466/83_20231126135426.png?ex=657560c1&is=6562ebc1&hm=ddeadee70b33168d4371dc9af50278f8b0c61f37eefc01fbcc45f1c0dbd55119&', 1, 100, 'ไม่ได้รับรางวัล', 'เทส1'),
(5, 'เทส3', 0, 'เทส3', 'https://cdn.discordapp.com/attachments/1178032838189260901/1178227379093651466/83_20231126135426.png?ex=657560c1&is=6562ebc1&hm=ddeadee70b33168d4371dc9af50278f8b0c61f37eefc01fbcc45f1c0dbd55119&', 1, 100, 'ไม่ได้รับรางวัล', 'เทส2');

-- --------------------------------------------------------

--
-- Table structure for table `box_stock`
--

CREATE TABLE `box_stock` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(3) NOT NULL,
  `p_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `byshop`
--

CREATE TABLE `byshop` (
  `status` varchar(255) NOT NULL,
  `apikey` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `byshop`
--

INSERT INTO `byshop` (`status`, `apikey`, `cost`) VALUES
('on', '#', '10');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `link`) VALUES
(2, '"https://i.ibb.co/5YQCW25/New-Project-12.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `des`, `img`) VALUES
(1, 'เทส1', 'เทส1', 'https://cdn.discordapp.com/attachments/1178032838189260901/1178225138370625637/82_20231126134526.png?ex=65755eab&is=6562e9ab&hm=78b6da730beba327f9b41b9ed51c4c0470b7dae78b05d04ffce8caed09475e39&'),
(2, 'เทส2', 'เทส2', 'https://cdn.discordapp.com/attachments/1178032838189260901/1178225138370625637/82_20231126134526.png?ex=65755eab&is=6562e9ab&hm=78b6da730beba327f9b41b9ed51c4c0470b7dae78b05d04ffce8caed09475e39&');

-- --------------------------------------------------------

--
-- Table structure for table `crecom`
--

CREATE TABLE `crecom` (
  `recom_1` int(11) NOT NULL DEFAULT 0,
  `recom_2` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crecom`
--

INSERT INTO `crecom` (`recom_1`, `recom_2`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kbank_trans`
--

CREATE TABLE `kbank_trans` (
  `id` int(11) NOT NULL,
  `qr` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `sender` varchar(100) DEFAULT NULL,
  `created_at` datetime NULL DEFAULT CURRENT_TIMESTAMP, -- แก้ไขตรงนี้: เพิ่ม NULL
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kbank_trans`
--

INSERT INTO `kbank_trans` (`id`, `qr`, `ref`, `sender`, `created_at`, `updated_at`) VALUES
(7, '004100060000010103004022001405190636BTF060015102TH9104DD4A', '01402590636BTF06001', NULL, '2024-01-25 19:09:39', '2024-01-25 12:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `recom`
--

CREATE TABLE `recom` (
  `recom_1` int(11) NOT NULL DEFAULT 0,
  `recom_2` int(11) NOT NULL DEFAULT 0,
  `recom_3` int(11) NOT NULL DEFAULT 0,
  `recom_4` int(11) NOT NULL DEFAULT 0,
  `recom_5` int(11) NOT NULL DEFAULT 0,
  `recom_6` int(11) NOT NULL DEFAULT 0,
  `recom_7` int(11) NOT NULL DEFAULT 0,
  `recom_8` int(11) NOT NULL DEFAULT 0,
  `recom_9` int(11) NOT NULL DEFAULT 0,
  `recom_10` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recom`
--

INSERT INTO `recom` (`recom_1`, `recom_2`, `recom_3`, `recom_4`, `recom_5`, `recom_6`, `recom_7`, `recom_8`, `recom_9`, `recom_10`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `redeem`
--

CREATE TABLE `redeem` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `max_count` int(11) NOT NULL,
  `prize` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `redeem_his`
--

CREATE TABLE `redeem_his` (
  `id` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date` datetime(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `wallet` varchar(255) NOT NULL,
  `fee` enum('on','off') NOT NULL DEFAULT 'off',
  `bg` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ann` varchar(255) NOT NULL,
  `main_color` varchar(255) NOT NULL,
  `sec_color` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `date` datetime(2) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `webhook_dc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`wallet`, `fee`, `bg`, `name`, `ann`, `main_color`, `sec_color`, `contact`, `des`, `date`, `ip`, `logo`, `webhook_dc`) VALUES
('0954417885', 'off', 'ไม่สามารถเปลี่ยนได้', 'Catullus Shop', 'บริการขายแอพพรีเมี่ยมราคาถูกเริ่มต้น 10 บาท', '#4dd2fe', '#4dd2fe', '#', 'บริการขายแอพพรีเมี่ยมราคาถูกเริ่มต้น 10 บาท', '2022-12-25 12:30:39.00', '::1', 'https://img2.pic.in.th/pic/Logo-6.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `s_count` int(11) NOT NULL DEFAULT 2575,
  `b_count` int(11) NOT NULL DEFAULT 3525,
  `m_count` int(11) NOT NULL DEFAULT 5468,
  `last_change` datetime(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`s_count`, `b_count`, `m_count`, `last_change`) VALUES
(0, 0, 0, '2023-01-04 19:06:16.00');

-- --------------------------------------------------------

--
-- Table structure for table `topup_his`
--

CREATE TABLE `topup_his` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` datetime NOT NULL,
  `uid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `point` float NOT NULL,
  `total` float NOT NULL,
  `rank` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `date`, `point`, `total`, `rank`) VALUES
(1, 'leocatullus', '6939753e9d733d983d9ed1ac6a2b73c6', '2024-05-02', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boxlog`
--
ALTER TABLE `boxlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box_product`
--
ALTER TABLE `box_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box_stock`
--
ALTER TABLE `box_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `redeem`
--
ALTER TABLE `redeem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redeem_his`
--
ALTER TABLE `redeem_his`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topup_his`
--
ALTER TABLE `topup_his`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boxlog`
--
ALTER TABLE `boxlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `box_product`
--
ALTER TABLE `box_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `box_stock`
--
ALTER TABLE `box_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `redeem`
--
ALTER TABLE `redeem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redeem_his`
--
ALTER TABLE `redeem_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topup_his`
--
ALTER TABLE `topup_his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2023 at 04:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectp4`
--

-- --------------------------------------------------------

--
-- Table structure for table `meaning`
--

CREATE TABLE `meaning` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `word_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `meaning` longtext NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meaning`
--

INSERT INTO `meaning` (`id`, `word_id`, `user_id`, `meaning`, `timestamp`) VALUES
(129, 149, 6, 'ปัญญาประดิษฐ์ หรือ เอไอ เป็นคำที่มีความหมายหลากหลายขึ้นอยู่กับบริบทของการใช้งาน \'เอสเอเอส\' บริษัทผู้วิเคราะห์เศรษฐกิจ กล่าวว่า \"เอไอทำให้เครื่องจักรสามารถเรียนรู้จากประสบการณ์ ปรับตัวรับข้อมูลใหม่และทำงานต่างๆอย่างมนุษย์ได้\"', '2023-10-15 14:48:43'),
(130, 150, 6, 'ยานพาหนะในที่นี้เป็นได้ทั้งรถยนต์ส่วนบุคคลหรือรถบรรทุกที่ใช้เทคโนโลยีและระบบเซนเซอร์ในการขับเคลื่อนโดยปราศจากการช่วยเหลือจากมนุษย์ บริษัทอย่างอูเบอร์ เทสลา และฮุนได เป็นตัวอย่างบริษัทยักษ์ใหญ่ที่กำลังพัฒนาระบบรถยนต์ไร้คนขับอยู่', '2023-10-15 14:48:52'),
(131, 151, 6, 'กระทรวงความมั่นคงแห่งมาตุภูมิของสหรัฐฯ อธิบายไบโอเทริกซ์ว่าคือ \'ข้อมูลชีวภาพ\' หรือ \"ลักษณะทางกายภาพที่มีความเฉพาะตัว\" ที่สามารถนำมาใช้กับ \"ระบบตรวจสอบสิทธิหรือแสดงตนอัตโนมัติ\" อาทิลายนิ้วมือ เสียง ม่านตา เรตินา ใบหน้า และดีเอ็นเอ ', '2023-10-15 14:49:02'),
(133, 153, 6, 'บล็อกเชนเป็นบัญชีแยกประเภทที่ใช้บันทึกธุรกรรมทางการเงิน แทนที่แต่ละฝ่ายจะต้องบันทึกธุรกรรมทางการเงินกันเอง โดยอาจจะมาซึ่งความสับสน บล็อกเชนจะสร้างระบบบันทึก \"มาสเตอร์\" ที่ไม่สามารถเปลี่ยนแปลงได้เมื่อมีธุรกรรมเกิดขึ้น   ไอบีเอ็ม ผู้ผลิตคอมพิวเตอร์และให้บริการด้านคอมพิวเตอร์และสารสนเทศ รายใหญ่ของโลก กล่าวว่า \"ทุกฝ่ายต้องลงฉันทามติก่อนที่จะมีการบันทึกธุรกรรมใหม่ลงในระบบ\"', '2023-10-15 14:50:17'),
(134, 154, 6, '\"คลาวด์คอมพิวติ้ง\" เป็นคำที่ถูกหยิบขึ้นมาพูดบอยครั้งในช่วงสองถึงสามปีที่ผ่านมา โดย CS Loxinfo ให้คำนิยามว่าเป็น \"ระบบคอมพิวเตอร์ที่พร้อมรองรับการทำงานของผู้ใช้งานในทุกด้าน\" ทั้งในแง่ของระบบเครือข่าย การจัดเก็บข้อมูล การทดสอบระบบหรือติดตั้งฐานข้อมูล หรือการใช้งานซอฟต์เฉพาะด้าน โดยที่ผู้ใช้งานไม่ต้องติดตั้งระบบทั้งฮาร์ดแวร์และซอฟต์แวร์ไว้ที่สำนักงาน แต่สามารถใช้งานในสิ่งที่ต้องการได้ด้วยการเชื่อมต่อกับระบบ Cloud Computing ผ่านอินเทอร์เน็ต', '2023-10-15 14:50:49'),
(135, 155, 6, 'หมายถึงคอมพิวเตอร์ตั้งแต่หรืออีกความหมายหนึ่งคือ พื้นหลังของจอคอมพิวเตอร์', '2023-10-15 14:51:45'),
(136, 156, 6, 'คือเอกสารซึ่งความหมายในทางเทคโนโลยีสารสนเทศคือเอกสารที่จัดเก็บคอมพิวเตอร์', '2023-10-15 14:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `reaction`
--

CREATE TABLE `reaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `meaning_id` bigint(20) UNSIGNED NOT NULL,
  `like` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meaning_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `admin`, `pic`) VALUES
(6, 'ITS021รุ่งโรจน์', 'หอวัฒนกุลไกร', '165424221021-st@rmutsb.ac.th', 0, 'https://lh3.googleusercontent.com/a/ACg8ocI5O9qv46UlcmcXq8fVCKEs8K8Tp4WYP8ARNQR8kVQzCA=s96-c'),
(7, 'รุ่งโรจน์', 'พีท', 'fedfe.14416@gmail.com', 1, 'https://lh3.googleusercontent.com/a/ACg8ocLf6sqNqF2UQehf67zHcGe9DWHsiAetMudd-XQEH67u5BA=s96-c'),
(8, 'รุ่งโรจน์', '', 'godpeet.14416@gmail.com', 0, 'https://lh3.googleusercontent.com/a/ACg8ocL1avtKg_RU-KmxewoyK2j1LZuPE19f9ms2blxqsLiDtUw=s96-c'),
(9, 'ITS023วราเมธ', 'ฉัตรชัยยัญ', '165424221023-st@rmutsb.ac.th', 0, 'https://lh3.googleusercontent.com/a/ACg8ocJpIhbr7myOy07l9JGtL-L-xalZ_HYEMSNs_5gJ6rFw=s96-c'),
(10, 'ITS029 อัศวิน', 'อินนอก', '165424221029-st@rmutsb.ac.th', 0, 'https://lh3.googleusercontent.com/a/ACg8ocLhSw3ZdQbbpoZAJvpBb46OlrjWp3T3yvYdC8PVSs_Y=s96-c');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `word` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`id`, `word`) VALUES
(149, 'ปัญญาประดิษฐ์ (Artificial Intelligence)'),
(150, 'ยานพาหนะไร้คนขับ (Autonomous vehicle)'),
(151, 'ไบโอเมทริกซ์ (biometrics)'),
(153, 'บล็อกเชน (Blockchain)'),
(154, 'คลาวด์คอมพิวติ้ง (Cloud Computing)'),
(155, 'Desktop เดสก์ท็อป '),
(156, 'File ไฟล์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meaning`
--
ALTER TABLE `meaning`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `post_id` (`word_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reaction`
--
ALTER TABLE `reaction`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meaning_id` (`meaning_id`),
  ADD KEY `meaning_id_2` (`meaning_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`meaning_id`) USING BTREE,
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meaning`
--
ALTER TABLE `meaning`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `reaction`
--
ALTER TABLE `reaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `meaning`
--
ALTER TABLE `meaning`
  ADD CONSTRAINT `meaning_ibfk_1` FOREIGN KEY (`word_id`) REFERENCES `word` (`id`),
  ADD CONSTRAINT `meaning_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `reaction`
--
ALTER TABLE `reaction`
  ADD CONSTRAINT `reaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reaction_ibfk_2` FOREIGN KEY (`meaning_id`) REFERENCES `meaning` (`id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`meaning_id`) REFERENCES `meaning` (`id`),
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 09:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mentors_without_borders`
--
CREATE DATABASE IF NOT EXISTS `db_mentors_without_borders` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_mentors_without_borders`;

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `fk_mentorship_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession_description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentorship_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`id`, `fk_user_id`, `profession`, `profession_description`, `education`, `skills`, `goal`, `contact`, `picture`, `username`, `mentorship_id`) VALUES
(4, 12, 'Social Media Manager', 'Managing social media accounts for different companies.', 'Master Degree Media Management', 'Photoshop, Illustrattor, Indesign', 'Gain web-development to change positon.', '+ 43 669 123123', 'https://cdn4.iconfinder.com/data/icons/business-conceptual-part1-1/513/business-woman-512.png', 'Sunny34', NULL),
(5, 13, 'Administrative specialist', 'Administrative specialists must take on various roles within an organization to help ensure effective day-to-day operations. This role may require, but is not limited to, performing general clerical tasks, communicating with and greeting clients, responding to phone calls and emails, handling payroll and personnel issues, and managing office equipment and supplies.', 'Degree in finance', 'Organization, finance', 'My goal is to take advantage of my college degree in my career.', '+49 30 513848797', NULL, 'Nicc', NULL),
(6, 17, '', '', '', '', '', '', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preofession_description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentors_descripton` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languageone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languagetwo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languagethree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `capacity`, `country`, `skills`, `preofession_description`, `contact`, `mentors_descripton`, `fk_user_id`, `profession`, `picture`, `username`, `languageone`, `languagetwo`, `languagethree`) VALUES
(23, 1, 'Austria', 'HTML, CSS, JavaScript, MySQL, PHP.', 'Web developers build, maintain and design websites. They are typically responsible for the appearance, of the site and technical aspects, such as site speed and how much traffic the site can handle.-skills: project managing, team managing, recruiting', '+43 660 123 456 7', 'I am a freelance web developer with 5 year experience with both private and corporate projects.', 7, 'Web developer', 'https://www.shareicon.net/data/512x512/2016/09/15/829452_user_512x512.png', 'jules77', 'English', 'Japanese', 'German'),
(24, 3, 'United Kingdom', 'payroll, accounting, payroll methods, labor regulations and law', ' A Payroll Technician performs a range of complex duties to ensure the accuracy of payroll calculations, processes the semi-monthly payroll, and maintains and provides detailed information to employees for specific payroll functions', '+44 1632 960835', 'My 10 year experience in payroll and accounting has been appreciated by many big name brands, as I turn this number’s game intro science by mixing in modern technology.', 2, 'Payroll technician', 'https://cdn0.iconfinder.com/data/icons/social-media-network-4/48/male_avatar-512.png', 'Fly', 'English', ' French', ' '),
(25, 2, 'Mexico', 'Business administrator', 'I am responsible for overseeing the day-to-day operations of a business. My duties include hiring staff members, leading department meetings and communicating with upper-management to implement new policies and procedures among daily operations.\n', '+52 888 049 7730', 'I have been working in business administrating ever since I started my own business in college. We distribute car parts and have a very large portfolio of clients and suppliers.  ', 9, 'Business administrator', 'https://e7.pngegg.com/pngimages/122/453/png-clipart-computer-icons-user-profile-avatar-female-profile-heroes-head.png', 'm_rami', 'English', 'Spanish', 'French');

-- --------------------------------------------------------

--
-- Table structure for table `mentorship`
--

CREATE TABLE `mentorship` (
  `id` int(11) NOT NULL,
  `goal` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_user_id` int(11) DEFAULT NULL,
  `achievements` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fk_mentee_id` int(11) DEFAULT NULL,
  `steps` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentorship`
--

INSERT INTO `mentorship` (`id`, `goal`, `fk_user_id`, `achievements`, `fk_mentee_id`, `steps`) VALUES
(15, '-Gain Web-dev skills\r\n- Change position or job', 7, '- Front-end course completed\r\n- First job-application', 4, '-Look for online course\r\n-Buy new Workstation\r\n-If necessary look for new job'),
(31, '-Get back in touch with the market\r\n-Get a job in finance', 2, '-First Interview\r\n-Got the job', 5, '-Research the market, Identify the role you would like to have -\r\n-Polish up your skills, Update your CV-\r\n-Apply for jobs, Go to interviews');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentor_mantee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `approved` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `first_name`, `last_name`, `mentor_mantee`, `birthday`, `approved`) VALUES
(1, 'admin@mail.com', '[\"ROLE_ADMIN\"]', '$2y$13$n6O2IdADaj31IF/S4Fc0V.VJsbb/jTdPE2zzLwGnCjyVIPJ1phhi2', '', '', '', '0000-00-00', 'Approved'),
(2, 'flynn@mail.com', '[]', '$2y$13$/z3ao/UJi9JlkedaelY5subU8K0SebumNyfgmejcTV/NDLT7j504.', 'Rafael', 'Perry', 'Mentor', '1990-01-01', 'Approved'),
(7, 'jul@mail.com', '[]', '$2y$13$fcA8IGosti0XG7BlyLeeXe.wMZqnLrcT8YaHCs.b/y70vbsxFARmu', 'Juli', 'Lissa', 'Mentor', '2003-12-08', 'Approved'),
(9, 'maria@mail.com', '[]', '$2y$13$2TC0q55w0QoVskX0FHT49.56N8IQxHQivj8e9fQIEPm2agW.vmF36', 'Maria', 'Ramirez', 'Mentor', '2000-12-09', 'Approved'),
(12, 'tracy@mail.com', '[]', '$2y$13$kC7Slw/0rXNhFkRiYmCf6eFayJDsWQoc/pUFdSFwz8OdsmdWaxgNS', 'Tracy', 'Harding', 'Mentee', '1992-12-10', 'Approved'),
(13, 'nicole@mail.com', '[]', '$2y$13$poZAnP3AbItS/sxgm.DZrOmXHo2qpWdpS2M6e6j8W4N.hT5Pi/Tha', 'Nicole', 'Altert', 'Mentee', '2003-12-10', 'Approved'),
(17, 'iza@mail.com', '[]', '$2y$13$1KMYJUxqUvS3H98CJcxykeUiEAk/CxP8qeCeu8hvYz9vmykjjyBP.', 'Izabella', 'Patel', 'Mentee', '1986-12-14', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D1227EFE5D853C3F` (`fk_mentorship_id`);

--
-- Indexes for table `mentee`
--
ALTER TABLE `mentee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F9290F935741EEB9` (`fk_user_id`),
  ADD KEY `IDX_F9290F9339CF49FD` (`mentorship_id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_801562DE5741EEB9` (`fk_user_id`);

--
-- Indexes for table `mentorship`
--
ALTER TABLE `mentorship`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_ADE55FF43D679053` (`fk_mentee_id`),
  ADD KEY `IDX_ADE55FF45741EEB9` (`fk_user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mentorship`
--
ALTER TABLE `mentorship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mentee`
--
ALTER TABLE `mentee`
  ADD CONSTRAINT `FK_F9290F9339CF49FD` FOREIGN KEY (`mentorship_id`) REFERENCES `mentorship` (`id`),
  ADD CONSTRAINT `FK_F9290F935741EEB9` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `mentor`
--
ALTER TABLE `mentor`
  ADD CONSTRAINT `FK_801562DE5741EEB9` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `mentorship`
--
ALTER TABLE `mentorship`
  ADD CONSTRAINT `FK_ADE55FF43D679053` FOREIGN KEY (`fk_mentee_id`) REFERENCES `mentee` (`id`),
  ADD CONSTRAINT `FK_ADE55FF45741EEB9` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

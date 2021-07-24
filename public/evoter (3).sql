-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 03:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoter`
--

-- --------------------------------------------------------

--
-- Table structure for table `election_dashboards`
--

CREATE TABLE `election_dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `party_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obtain_votes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `party_symbol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `election_dashboards`
--

INSERT INTO `election_dashboards` (`id`, `candidate_name`, `party_name`, `obtain_votes`, `party_symbol`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Irshad Abbasi', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(2, 'Israr Ahmed Awan', 'Independent Candidate', '10', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(3, 'Azhar Javed', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(4, 'Syed Iftikhar Gillani ', 'Pakistan Muslim League (N) AJK', '20', 'PML(N)-AJK', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(5, 'Basit Ahmed Qureshi', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(6, 'Syed Basit Ali ', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(7, 'Muhammad Tasleem ', 'Jammu Kashmir Peoples Party', '50', 'JKPP', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(8, 'Raja Jamal Abdul Nasir ', 'PPP (Shaheed Bhutto) AJ&K', '0', 'PPPSB-AJK', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(9, 'Junaid Ahmed Mir', 'Muttahida Qaumi Movement Pakistan AJK', '0', 'MQMP-AJK', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(10, 'Mir Hassan Haidr', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(11, 'Zeeshan Ahmed ', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(12, 'M. Rafique Khan ', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(13, 'Sajjad Abbasi', 'All Jammu and Kashmir Muslim Conference', '0', 'AJK MC', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(14, 'Ali Tanveer', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(15, 'Imran Khursheed Awan', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(16, 'Syed Ghufran Ali Kazmi', 'Majlis Wahdat-e-Muslimeen AJK', '0', 'MWM', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(17, 'Kh. Farooq Ahmed', 'Pakistan Tehreek-e-Insaf AJK', '200', 'PTI-AJK', '2024-07-14 07:00:00', '2021-07-24 13:05:40'),
(18, 'Malik Fiaz ', 'Tehreek-e-Labbaik Pakistan AJK', '0', 'TLP-AJK', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(19, 'Syed Gulzar Hussain Kazmi', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(20, 'Sardar Mubarak Haider', 'Pakistan Peoples Party AJK', '200', 'PPP-AJK', '2024-07-14 07:00:00', '2021-07-24 13:02:30'),
(21, 'Mehboob Khan', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(22, 'Sardar Mukhtar Khan', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(23, 'Kh. Manzoor Qadir', 'Jammu Kashmir Liberation League AJK', '0', 'JKLL-AJK', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(24, 'M. Nazeer Awan', 'Independent Candidate', '0', 'IND', '2024-07-14 07:00:00', '2024-07-14 07:00:00'),
(25, 'Syed Nazeer Hussain Shah', 'Jamaat-e-Islami AJK', '0', 'JI-AJK', '2024-07-14 07:00:00', '2024-07-14 07:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `election_dashboards`
--
ALTER TABLE `election_dashboards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `election_dashboards`
--
ALTER TABLE `election_dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

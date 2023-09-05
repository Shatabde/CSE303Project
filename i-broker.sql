-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 01:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-broker`
--

-- --------------------------------------------------------

--
-- Table structure for table `authoised_person_t`
--

CREATE TABLE `authoised_person_t` (
  `ap_nid` int(20) NOT NULL,
  `ap_name` varchar(30) DEFAULT NULL,
  `ap_father_name` varchar(30) DEFAULT NULL,
  `ap_spouse_name` varchar(30) DEFAULT NULL,
  `ap_dob` datetime DEFAULT NULL,
  `ap_nationality` varchar(20) DEFAULT NULL,
  `ap_present_address` varchar(50) DEFAULT NULL,
  `ap_permanent_address` varchar(50) DEFAULT NULL,
  `ap_occupation` varchar(15) DEFAULT NULL,
  `ap_mobile` varchar(15) DEFAULT NULL,
  `ap_tel` varchar(10) DEFAULT NULL,
  `ap_email` varchar(40) DEFAULT NULL,
  `ap_etin` varchar(12) DEFAULT NULL,
  `ap_ppno` varchar(10) DEFAULT NULL,
  `ap_type` varchar(20) DEFAULT NULL,
  `ap_photo` varchar(100) DEFAULT NULL,
  `ap_sig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_t`
--

CREATE TABLE `bank_t` (
  `bank_code` int(10) NOT NULL,
  `branch_code` int(10) DEFAULT NULL,
  `route_no` int(10) DEFAULT NULL,
  `bank_account_no` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_t`
--

INSERT INTO `bank_t` (`bank_code`, `branch_code`, `route_no`, `bank_account_no`) VALUES
(1234, 6809, 8520, 96321478),
(7890, 6809, 456789, 55669988),
(42369852, 6809, 336699, 55882244);

-- --------------------------------------------------------

--
-- Table structure for table `bo_account_t`
--

CREATE TABLE `bo_account_t` (
  `bo_id` int(10) NOT NULL,
  `acoount_type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card_t`
--

CREATE TABLE `card_t` (
  `bo_id` int(10) NOT NULL,
  `product_type` varchar(15) DEFAULT NULL,
  `ac_no` int(10) DEFAULT NULL,
  `c_nid` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_t`
--

CREATE TABLE `client_t` (
  `c_nid` int(20) NOT NULL,
  `c_title` varchar(10) DEFAULT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `c_father_name` varchar(30) DEFAULT NULL,
  `c_spouse_name` varchar(30) DEFAULT NULL,
  `c_mother_name` varchar(30) DEFAULT NULL,
  `c_dob` datetime DEFAULT NULL,
  `c_gender` varchar(14) DEFAULT NULL,
  `c_nationality` varchar(20) DEFAULT NULL,
  `c_present_address` varchar(50) DEFAULT NULL,
  `c_present_city` varchar(20) DEFAULT NULL,
  `c_present_post` varchar(10) DEFAULT NULL,
  `c_present_thana` varchar(15) DEFAULT NULL,
  `c_present_division` varchar(20) DEFAULT NULL,
  `c_present_country` varchar(20) DEFAULT NULL,
  `c_permanent_address` varchar(50) DEFAULT NULL,
  `c_permanent_city` varchar(20) DEFAULT NULL,
  `c_permanent_post` varchar(10) DEFAULT NULL,
  `c_permanent_thana` varchar(15) DEFAULT NULL,
  `c_permanent_division` varchar(20) DEFAULT NULL,
  `c_permanent_country` varchar(20) DEFAULT NULL,
  `c_mobile` varchar(15) DEFAULT NULL,
  `c_tel` varchar(10) DEFAULT NULL,
  `c_occupation` varchar(15) DEFAULT NULL,
  `c_email` varchar(40) DEFAULT NULL,
  `c_etin` varchar(12) DEFAULT NULL,
  `c_ppno` varchar(10) DEFAULT NULL,
  `c_account_type` varchar(10) DEFAULT NULL,
  `c_photo` varchar(200) NOT NULL,
  `c_sig` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_t`
--

INSERT INTO `client_t` (`c_nid`, `c_title`, `c_name`, `c_father_name`, `c_spouse_name`, `c_mother_name`, `c_dob`, `c_gender`, `c_nationality`, `c_present_address`, `c_present_city`, `c_present_post`, `c_present_thana`, `c_present_division`, `c_present_country`, `c_permanent_address`, `c_permanent_city`, `c_permanent_post`, `c_permanent_thana`, `c_permanent_division`, `c_permanent_country`, `c_mobile`, `c_tel`, `c_occupation`, `c_email`, `c_etin`, `c_ppno`, `c_account_type`, `c_photo`, `c_sig`) VALUES
(1931291, 'Mr.', 'Habibullah Sirat', 'Shohidul Islam', 'N/A', 'Sabina Islam', '1999-11-07 00:00:00', 'Male', 'Bangladeshi', 'Bashundhara R/A', 'Dhaka', '1213', 'Vatara', 'Dhaka', 'Bangladesh', 'Pabna Sadar', 'Pabna', '6600', 'Pabna Sadar', 'Rajshahi', 'Bangladesh', '1234567890', '12345678', 'Student', 'habibullahsirat@email.com', 'ET123', 'HS1234567', 'Individual', 'uploads/', 'uploads/'),
(2320608, 'Ms', 'Nahian Noureen', 'Shahadat Hossain', 'N/A', 'Layla Hossain', '1999-04-28 00:00:00', 'Female', 'Bangladeshi', 'Bashundhara R/A', 'Dhaka', '1213', 'Vatara', 'Dhaka', 'Bangladesh', 'Natore Sadar', 'Natore', '5500', 'Natore Sadar', 'Rajshahi', 'Bangladesh', '1234567890', '12345678', 'Student', 'nahiannoureen@email.com', 'NN123', 'NN1234567', 'Individual', 'uploads/', 'uploads/'),
(2320609, 'Ms', 'Nahian Nishat', 'Sha Alom Hossain', 'N/A', 'Runa Layla', '1999-04-28 00:00:00', 'Female', 'Bangladeshi', 'Halishohor', 'Chittagong', '1213', 'Chitagong Sadar', 'Chittagong', 'Bangladesh', 'Halishohor', 'Chittagong', '7700', 'Halishohor', 'Chittagong', 'Bangladesh', '1234567890', '12345678', 'Student', 'nahiannishat@email.com', 'NN123', 'NN1234567', 'Individual', 'uploads/', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_account_holder_t`
--

CREATE TABLE `corporate_account_holder_t` (
  `c_nid` int(20) NOT NULL,
  `ap_nid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_relationship_manager_t`
--

CREATE TABLE `customer_relationship_manager_t` (
  `c_r_m_id` int(10) NOT NULL,
  `c_r_m_name` varchar(30) DEFAULT NULL,
  `c_r_m_sig` varchar(100) DEFAULT NULL,
  `h_s_id` int(10) DEFAULT NULL,
  `bank_code` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `first_accont_holder_t`
--

CREATE TABLE `first_accont_holder_t` (
  `c_nid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `head_of_settlement_t`
--

CREATE TABLE `head_of_settlement_t` (
  `h_s_id` int(10) NOT NULL,
  `h_s_name` varchar(30) DEFAULT NULL,
  `h_s_sig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intoducer_t`
--

CREATE TABLE `intoducer_t` (
  `i_nid` int(20) NOT NULL,
  `i_name` varchar(30) DEFAULT NULL,
  `i_contact` varchar(15) DEFAULT NULL,
  `i_email` varchar(50) DEFAULT NULL,
  `i_occupation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intoducer_t`
--

INSERT INTO `intoducer_t` (`i_nid`, `i_name`, `i_contact`, `i_email`, `i_occupation`) VALUES
(1531176, 'Nahian Noureen', '2233445566', 'nahiannoureen@email.com', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `joint_account_t`
--

CREATE TABLE `joint_account_t` (
  `j_nid` int(20) NOT NULL,
  `j_name` varchar(30) DEFAULT NULL,
  `j_title` varchar(10) DEFAULT NULL,
  `j_father_name` varchar(30) DEFAULT NULL,
  `j_mother_name` varchar(30) DEFAULT NULL,
  `j_spouse_name` varchar(30) DEFAULT NULL,
  `j_dob` datetime DEFAULT NULL,
  `j_gender` varchar(14) DEFAULT NULL,
  `j_nationality` varchar(20) DEFAULT NULL,
  `j_address` varchar(50) DEFAULT NULL,
  `j_city` varchar(20) DEFAULT NULL,
  `j_post` varchar(10) DEFAULT NULL,
  `j_thana` varchar(15) DEFAULT NULL,
  `j_division` varchar(20) DEFAULT NULL,
  `j_country` varchar(20) DEFAULT NULL,
  `j_mobile` varchar(15) DEFAULT NULL,
  `j_occupation` varchar(15) DEFAULT NULL,
  `j_email` varchar(40) DEFAULT NULL,
  `j_etin` varchar(12) DEFAULT NULL,
  `j_ppno` varchar(10) DEFAULT NULL,
  `j_photo` varchar(100) DEFAULT NULL,
  `j_sig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyc_profile_t`
--

CREATE TABLE `kyc_profile_t` (
  `bo_id` int(10) NOT NULL,
  `c_nid` int(20) NOT NULL,
  `ac_name` varchar(15) DEFAULT NULL,
  `ac_type` varchar(15) DEFAULT NULL,
  `c_r_m_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nominee_adult_t`
--

CREATE TABLE `nominee_adult_t` (
  `n_nid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nominee_minor_t`
--

CREATE TABLE `nominee_minor_t` (
  `n_nid` int(20) NOT NULL,
  `n_g_name` varchar(30) DEFAULT NULL,
  `n_g_dob` datetime DEFAULT NULL,
  `n_g_mobile` varchar(15) DEFAULT NULL,
  `n_g_address` varchar(50) DEFAULT NULL,
  `n_g_nid` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nominee_t`
--

CREATE TABLE `nominee_t` (
  `n_nid` int(20) NOT NULL,
  `n_name` varchar(30) DEFAULT NULL,
  `n_dob` datetime DEFAULT NULL,
  `n_gender` varchar(14) DEFAULT NULL,
  `n_nationality` varchar(20) DEFAULT NULL,
  `n_address` varchar(50) DEFAULT NULL,
  `n_city` varchar(20) DEFAULT NULL,
  `n_post` varchar(10) DEFAULT NULL,
  `n_thana` varchar(15) DEFAULT NULL,
  `n_division` varchar(20) DEFAULT NULL,
  `n_mobile` varchar(15) DEFAULT NULL,
  `n_relation` varchar(20) DEFAULT NULL,
  `n_percentage` decimal(5,0) DEFAULT NULL,
  `n_ppno` varchar(10) DEFAULT NULL,
  `n_photo` varchar(100) DEFAULT NULL,
  `n_sig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nominee_t`
--

INSERT INTO `nominee_t` (`n_nid`, `n_name`, `n_dob`, `n_gender`, `n_nationality`, `n_address`, `n_city`, `n_post`, `n_thana`, `n_division`, `n_mobile`, `n_relation`, `n_percentage`, `n_ppno`, `n_photo`, `n_sig`) VALUES
(2320608, 'Nahian Noureen', '2000-04-28 00:00:00', 'Female', 'Bangladeshi', 'Bashundhara R/A', 'Dhaka', '1213', 'Vatara', 'Dhaka', '12345678901', 'Cousin', '50', 'NN1234567', 'uploads/', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `power_of_atorny_t`
--

CREATE TABLE `power_of_atorny_t` (
  `p_nid` int(20) NOT NULL,
  `p_title` varchar(10) DEFAULT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `p_dob` datetime DEFAULT NULL,
  `p_nationality` varchar(20) DEFAULT NULL,
  `p_address` varchar(50) DEFAULT NULL,
  `p_city` varchar(20) DEFAULT NULL,
  `p_post` varchar(10) DEFAULT NULL,
  `p_thana` varchar(15) DEFAULT NULL,
  `p_division` varchar(20) DEFAULT NULL,
  `p_country` varchar(20) DEFAULT NULL,
  `p_mobile` varchar(15) DEFAULT NULL,
  `p_tel` varchar(10) DEFAULT NULL,
  `p_email` varchar(40) DEFAULT NULL,
  `p_fax` varchar(12) DEFAULT NULL,
  `p_ppno` varchar(10) DEFAULT NULL,
  `p_photo` varchar(100) DEFAULT NULL,
  `p_sig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `power_of_atorny_t`
--

INSERT INTO `power_of_atorny_t` (`p_nid`, `p_title`, `p_name`, `p_dob`, `p_nationality`, `p_address`, `p_city`, `p_post`, `p_thana`, `p_division`, `p_country`, `p_mobile`, `p_tel`, `p_email`, `p_fax`, `p_ppno`, `p_photo`, `p_sig`) VALUES
(1456987, 'Ms', 'Nahian Noureen', '2000-04-28 00:00:00', 'Bangladeshi', 'Bashundhara R/A', 'Dhaka', '1213', 'Vatara', 'Dhaka', 'Bangladesh', '12345678901', '12345678', 'nahiannoureen@email.com', '223344', 'HS1234567', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `value_added_service_t`
--

CREATE TABLE `value_added_service_t` (
  `investor_id` int(20) NOT NULL,
  `investor_name` varchar(30) DEFAULT NULL,
  `investor_mobile` varchar(15) DEFAULT NULL,
  `investor_email` varchar(40) DEFAULT NULL,
  `internet_trading` varchar(50) DEFAULT NULL,
  `bo_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authoised_person_t`
--
ALTER TABLE `authoised_person_t`
  ADD PRIMARY KEY (`ap_nid`);

--
-- Indexes for table `bank_t`
--
ALTER TABLE `bank_t`
  ADD PRIMARY KEY (`bank_code`);

--
-- Indexes for table `bo_account_t`
--
ALTER TABLE `bo_account_t`
  ADD PRIMARY KEY (`bo_id`);

--
-- Indexes for table `card_t`
--
ALTER TABLE `card_t`
  ADD PRIMARY KEY (`bo_id`);

--
-- Indexes for table `client_t`
--
ALTER TABLE `client_t`
  ADD PRIMARY KEY (`c_nid`);

--
-- Indexes for table `corporate_account_holder_t`
--
ALTER TABLE `corporate_account_holder_t`
  ADD PRIMARY KEY (`c_nid`,`ap_nid`);

--
-- Indexes for table `customer_relationship_manager_t`
--
ALTER TABLE `customer_relationship_manager_t`
  ADD PRIMARY KEY (`c_r_m_id`);

--
-- Indexes for table `first_accont_holder_t`
--
ALTER TABLE `first_accont_holder_t`
  ADD PRIMARY KEY (`c_nid`);

--
-- Indexes for table `head_of_settlement_t`
--
ALTER TABLE `head_of_settlement_t`
  ADD PRIMARY KEY (`h_s_id`);

--
-- Indexes for table `intoducer_t`
--
ALTER TABLE `intoducer_t`
  ADD PRIMARY KEY (`i_nid`);

--
-- Indexes for table `joint_account_t`
--
ALTER TABLE `joint_account_t`
  ADD PRIMARY KEY (`j_nid`);

--
-- Indexes for table `kyc_profile_t`
--
ALTER TABLE `kyc_profile_t`
  ADD PRIMARY KEY (`bo_id`,`c_nid`);

--
-- Indexes for table `nominee_adult_t`
--
ALTER TABLE `nominee_adult_t`
  ADD PRIMARY KEY (`n_nid`);

--
-- Indexes for table `nominee_minor_t`
--
ALTER TABLE `nominee_minor_t`
  ADD PRIMARY KEY (`n_nid`);

--
-- Indexes for table `nominee_t`
--
ALTER TABLE `nominee_t`
  ADD PRIMARY KEY (`n_nid`);

--
-- Indexes for table `power_of_atorny_t`
--
ALTER TABLE `power_of_atorny_t`
  ADD PRIMARY KEY (`p_nid`);

--
-- Indexes for table `value_added_service_t`
--
ALTER TABLE `value_added_service_t`
  ADD PRIMARY KEY (`investor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

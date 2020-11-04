-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 11:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litrasof_acpn`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `tdate` date NOT NULL,
  `pharmacy_name` varchar(50) NOT NULL,
  `depositor_name` varchar(50) NOT NULL,
  `depositor_position` varchar(50) NOT NULL,
  `supretendent_pharmacist` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `payment_ref` varchar(50) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `payment_evidence` varchar(100) NOT NULL,
  `pcn_payment` varchar(100) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `receipt_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `tdate`, `pharmacy_name`, `depositor_name`, `depositor_position`, `supretendent_pharmacist`, `bank`, `payment_ref`, `amount_paid`, `payment_evidence`, `pcn_payment`, `payment_status`, `receipt_number`) VALUES
(5, '2020-09-03', 'onostar pharm', 'nikori samson', 'Pharmacist', 'Paul Ikpefua', 'Access bank', 'RF3344', 20000, '20200929_093223.jpg', '20200929_093223.jpg', 1, 'ACPN/EDO/2020/09/29/104015/25'),
(6, '2020-09-10', 'Safari Pharmacies and stores', 'loveth', 'Other', 'Andrew Anowe', 'GT Bank', '12edd', 20000, '20200929_093223.jpg', '20200929_093223.jpg', 1, 'ACPN/EDO/2020/09/29/112141/703');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `pharmacist` varchar(50) NOT NULL,
  `pharmacist_passport` varchar(200) NOT NULL,
  `pharmacist_email` varchar(50) NOT NULL,
  `pharmacist_address` varchar(100) NOT NULL,
  `pharmacy_name` varchar(50) NOT NULL,
  `pharmacy_address` varchar(100) NOT NULL,
  `contact_gender` varchar(50) NOT NULL,
  `contact_pcn_reg` varchar(50) NOT NULL,
  `contact_birth_date` date NOT NULL,
  `contact_next_of_kin` varchar(50) NOT NULL,
  `contact_next_of_kin_phone` int(15) NOT NULL,
  `contact_next_of_kin_address` varchar(100) NOT NULL,
  `pharmacy_exist` varchar(50) NOT NULL,
  `pharmacy_location` varchar(50) NOT NULL,
  `practice_type` varchar(50) NOT NULL,
  `pharmacy_director` varchar(50) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `user_password`, `pharmacist`, `pharmacist_passport`, `pharmacist_email`, `pharmacist_address`, `pharmacy_name`, `pharmacy_address`, `contact_gender`, `contact_pcn_reg`, `contact_birth_date`, `contact_next_of_kin`, `contact_next_of_kin_phone`, `contact_next_of_kin_address`, `pharmacy_exist`, `pharmacy_location`, `practice_type`, `pharmacy_director`, `registration_number`, `registration_date`) VALUES
(1, 'admin', '12345', '', '', '', '', '', '', '', '', '0000-00-00', '', 0, '', '', '', '', '', '', '0000-00-00'),
(7, '07057456881', '12345', 'Paul Ikpefua', '49704096_1419962664801365_3941184586356097024_n.jpg', 'onostarkels@gmail.com', '27 fatherhealey street', 'onostar pharm', '27 father healing street off ometan road', 'Male', 'lakd87', '2020-12-31', 'jacob john', 902356677, '7 Osaigbovo street', 'Existing pharmacy', 'Sapele road', 'Wholesale', 'Jaxson', '12345', '2020-09-24'),
(9, '07068897068', '4257', 'ikpefua kelly', 'kelly.jpg', 'onostarkels@gmail.com', '27 father healing street off ometan road', 'Onostar Pharmacies and store', '27 father healing street off ometan road', 'Male', 'RC23466', '2020-12-31', 'Paul ikpefua', 902356677, '27 fatherhealey street', 'New pharmacy', 'Aduwawa', 'Wholesale', 'Jaxson', 'saf322w', '2020-09-24'),
(17, '07033348221', '12345', 'Andrew Anowe', 'IMG_20190910_162549.jpg', 'moses@merb.com', 'Bendel estate, off airport road', 'Safari Pharmacies and stores', 'Cedar House, Airport road, Warri', 'Male', 'RC23466', '2020-09-04', 'Oghenekewe london', 9099, '7 Osaigbovo street', 'Existing pharmacy', 'Country home', 'Wholesale', 'Johnny Amadasun', 'rc87888', '2020-09-27'),
(18, '111', '12345', 'Dennis Alao', '20191005_112046.jpg', 'dennis@gmail.com', '12 goodwill street, off ekenwa road', 'Alao Pharmacy and stores', '12 goodwill street, off ekenwa road', 'Male', 'RC23466', '2020-10-16', 'Chinedu Oska', 2147483647, '7 Osaigbovo street', 'New pharmacy', 'Ekenwa', 'Retail', 'Dennis Alao', 'saf322w', '2020-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
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
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

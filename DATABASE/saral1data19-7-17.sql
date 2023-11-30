-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2017 at 07:32 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saral1`
--

-- --------------------------------------------------------

--
-- Table structure for table `consignee`
--

CREATE TABLE IF NOT EXISTS `consignee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(11) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `sid` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `pin_code` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg` date NOT NULL,
  `gstin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `consignee`
--

INSERT INTO `consignee` (`id`, `cust_id`, `custname`, `cno`, `country`, `sid`, `city`, `addr`, `pin_code`, `email`, `reg`, `gstin`) VALUES
(5, 'suk-001', 'SUKHARAM ELECTRIC ENTERPRISE', '0', 'India', 1, 'SURAT', ' B/1-2 Saifa Complex Opp- BRC Ground , Udhana Main Road', 0, '0', '0000-00-00', '24ABQFS0348N1Z0'),
(4, 'MB-01', 'M B AUTOMATION', '0', 'India', 2, 'Dadra', ' Dadra', 396230, '0', '0000-00-00', '26AAMHS4089R2ZZ'),
(2, 'CO-101', 'IDEAL TECHNOLOGIES', '9510018979', 'India', 1, 'Vapi', 'Damanganga Industrial Park, Gate No 2 Survey No 397/1/P1, Plot No 29, Dungra, Vapi, Dist. Valsad', 396195, 'shajimon@idealtechnologies.co.in', '0000-00-00', '2411FF18576A1ZG'),
(3, 'CO-102', 'SUPER ELECTRICALS', '9825869951', 'INDIA', 1, 'Kadodara,', ' C/1, Gopal Krishna Complex, Opp. Garden Vareli Mills, Dist-Surat', 394327, 'superele1022@yahoo.co.in', '0000-00-00', '24AEMPB3576L1ZA'),
(6, 'Prg-001', 'PRAGNESH ELECTROLINKS', '0', 'India', 1, 'vapi', '  5307/4, 4th Phase, Near GEB sub station GIDC VAPI', 396195, '0', '0000-00-00', '24AJEPP2898Q1ZC'),
(7, 'sam-001', 'SAMIRIKA POWER CONTROL', '0', 'India', 1, 'VAPI', ' Plot No. 303/5B, 2nd Phase G.I.D.C ', 396195, '0', '0000-00-00', '24AYFPP1376D1ZL'),
(8, 'JAT-001', 'JATSON POWER PVT. LTD', '0', 'India', 1, 'VAPI', ' Plot no. A-1/5406,Opp, 66kv GETCO substation, 4th Phase, GIDC Vapi', 396195, '0', '0000-00-00', '24AABCJ4989P1ZT'),
(9, 'MAH-001', 'MAHESHWARI TRADING COMPANY', '0', 'India', 1, 'VAPI', ' opp. VIA G.I.D.C VAPI', 396195, '0', '0000-00-00', '24AAHFM9435A1ZI'),
(10, 'MIC-001', 'MICRO POWER', '8155982980', 'India', 1, 'VAPI', ' Plot No. J-758/2, Part II, 40 Shed Area GIDC Vapi, Dist Valsad', 396195, '0', '0000-00-00', '24AAUFM9317Q1ZB'),
(11, 'wel-001', 'WELPOWER', '0', 'India', 2, 'Silvassa', '  Prince complex, Amli, Silvassa', 396230, '0', '0000-00-00', '26ABKPL3470A1ZY');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(11) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `sid` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `pin_code` int(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg` date NOT NULL,
  `gstin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `custname`, `cno`, `country`, `sid`, `city`, `addr`, `pin_code`, `email`, `reg`, `gstin`) VALUES
(6, 'suk-001', 'SUKHARAM ELECTRIC ENTERPRISE', '0', 'India', 1, 'SURAT', ' B/1-2 Saifa Complex Opp- BRC Ground , Udhana Main Road', 0, '0', '0000-00-00', '24ABQFS0348N1Z0'),
(5, 'MB-01', 'M B AUTOMATION', '0', 'India', 2, 'Dadra', 'Dadra', 396230, '0', '0000-00-00', '26AAMHS4089R2ZZ'),
(3, 'SU-101', 'SUPER ELECTRICALS', '9825869951', 'INDIA', 1, 'Kadodara,', ' C/1,Gopal krishna Complex, Opp. Garden Vareli Mills,Kaodara, Dist,-Surat', 394327, 'superele1022@yahoo.co.in', '0000-00-00', '24AEMPB3576L1ZA'),
(4, 'SA-102', 'IDEAL TECHNOLOGIES', '9510018979', 'India', 1, 'Vapi', ' Damanganga Industrial Park, Gate NO 2 Survey No 397/1/P1, Plot No 29 Dungra Dist. Valsad', 396195, 'shajimon@idealtechnologies.co.in', '0000-00-00', '2411FF18576A1ZG'),
(10, 'JAT-001', 'JATSON POWER PVT. LTD', '0', 'India', 1, 'VAPI', ' Plot no. A-1/5406,Opp, 66kv GETCO substation, 4th Phase, GIDC Vapi', 396195, '0', '0000-00-00', '24AABCJ4989P1ZT'),
(8, 'Prg-001', 'PRAGNESH ELECTROLINKS', '0', 'India', 1, 'VAPI', ' 5307/4, 4th Phase, Near GEB sub station GIDC VAPI', 396195, '0', '0000-00-00', '24AJEPP2898Q1ZC'),
(9, 'sam-001', 'SAMIRIKA POWER CONTROL', '0', 'India', 1, 'VAPI', ' Plot No. 303/5B, 2nd Phase G.I.D.C ', 396195, '0', '0000-00-00', '24AYFPP1376D1ZL'),
(11, 'MAH-001', 'MAHESHWARI TRADING COMPANY', '0', 'India', 1, 'VAPI', ' Opp. VIA G.I.D.C VAPI', 396195, '0', '0000-00-00', '24AAHFM9435A1ZI'),
(12, 'MIC-001', 'MICRO POWER', '8155982980', 'India', 1, 'VAPI', ' Plot No. J-758/2, Part II, 40 Shed Area GIDC Vapi, Dist Valsad', 396195, '0', '0000-00-00', '24AAUFM9317Q1ZB'),
(13, 'wel-001', 'WELPOWER', '0', 'India', 2, 'Silvassa', ' Prince complex, Amli, Silvassa', 396230, '0', '0000-00-00', '26ABKPL3470A1ZY');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `quot_id` int(11) NOT NULL AUTO_INCREMENT,
  `quot_no` varchar(100) NOT NULL,
  `q_n` int(255) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `quot_cust` varchar(500) NOT NULL,
  `state` varchar(255) NOT NULL,
  `stateCode` varchar(255) NOT NULL,
  `transmode` varchar(15) NOT NULL,
  `supplydate` varchar(100) NOT NULL,
  `conname` varchar(255) NOT NULL,
  `lrno` varchar(255) NOT NULL,
  `vehicleno` varchar(255) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `packing` varchar(100) NOT NULL,
  `transpotation` varchar(255) NOT NULL,
  `grandtotal` varchar(100) NOT NULL,
  `cgst` varchar(255) NOT NULL,
  `igst` varchar(255) NOT NULL,
  `sgst` varchar(255) NOT NULL,
  `cgst_amt` varchar(255) NOT NULL,
  `igst_amt` varchar(255) NOT NULL,
  `sgst_amt` varchar(255) NOT NULL,
  `inv_date` date NOT NULL,
  `order_date` date NOT NULL,
  `rvalue` varchar(255) NOT NULL,
  PRIMARY KEY (`quot_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`quot_id`, `quot_no`, `q_n`, `order_no`, `quot_cust`, `state`, `stateCode`, `transmode`, `supplydate`, `conname`, `lrno`, `vehicleno`, `subtotal`, `packing`, `transpotation`, `grandtotal`, `cgst`, `igst`, `sgst`, `cgst_amt`, `igst_amt`, `sgst_amt`, `inv_date`, `order_date`, `rvalue`) VALUES
(23, '1', 1, '-', '5', '', '', '', '', '4', '', '', '2016.00', '', '', '2379.00', '9', '0', '9', '181.44', '0.00', '181.44', '2017-07-07', '2017-07-07', '0.12'),
(24, '2', 2, '-', '6', '', '', '', '', '5', '', '', '1470.00', '', '60.00', '1805.00', '0', '18', '0', '0.00', '275.40', '0.00', '2017-07-07', '2017-07-07', '-0.40'),
(25, '3', 3, '0175', '4', '', '', '', '', '2', '', '', '1800.00', '', '', '2124.00', '0', '18', '0', '0.00', '324.00', '0.00', '2017-07-10', '2017-07-10', '0.00'),
(26, '4', 4, '-', '8', '', '', '', '', '6', '', '', '8070.00', '0.00', '0.00', '9523.00', '0', '18', '0', '0.00', '1452.60', '0.00', '2017-07-11', '2017-07-11', '0.40'),
(27, '5', 5, '-', '9', '', '', '', '', '7', '', '', '4950.00', '0.00', '0.00', '5841.00', '0', '18', '0', '0.00', '891.00', '0.00', '2017-07-12', '2017-07-12', '0.00'),
(28, '6', 6, '-', '10', '', '', '', '', '8', '', '', '4242.00', '0.00', '0.00', '5006.00', '0', '18', '0', '0.00', '763.56', '0.00', '2017-07-17', '2017-07-17', '0.44'),
(29, '7', 7, '-', '11', '', '', '', '', '9', '', '', '4356.00', '0.00', '0.00', '5140.00', '0', '18', '0', '0.00', '784.08', '0.00', '2017-07-17', '2017-07-17', '-0.08'),
(30, '8', 8, '100', '12', '', '', '', '2017-07-18', '10', '', '', '9450.00', '0.00', '0.00', '11151.00', '0', '18', '0', '0.00', '1701.00', '0.00', '2017-07-18', '2017-07-17', '0.00'),
(31, '9', 9, '-', '11', '', '', '', '2017-07-18', '9', '', '', '468.00', '0.00', '0.00', '552.00', '0', '18', '0', '0.00', '84.24', '0.00', '2017-07-18', '2017-07-18', '-0.24'),
(32, '10', 10, '-', '13', '', '', '', '2017-07-18', '11', '', '', '6510.00', '0.00', '0.00', '7682.00', '9', '0', '9', '585.90', '0.00', '585.90', '2017-07-18', '2017-07-18', '0.20'),
(33, '11', 11, '-', '8', '', '', '', '2017-07-19', '6', '', '', '12690.00', '0.00', '0.00', '14974.00', '0', '18', '0', '0.00', '2284.20', '0.00', '2017-07-19', '2017-07-19', '-0.20'),
(34, '12', 12, '-', '5', '', '', '', '2017-07-19', '4', '', '', '1950.00', '', '', '2301.00', '9', '0', '9', '175.50', '0.00', '175.50', '2017-07-19', '2017-07-19', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_desc`
--

CREATE TABLE IF NOT EXISTS `invoice_desc` (
  `quotdesc_id` int(11) NOT NULL AUTO_INCREMENT,
  `quot_id` varchar(100) NOT NULL,
  `item_desc` varchar(500) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `tax_val` varchar(255) NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`quotdesc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `invoice_desc`
--

INSERT INTO `invoice_desc` (`quotdesc_id`, `quot_id`, `item_desc`, `quantity`, `unit`, `rate`, `total`, `dis`, `tax_val`, `updated_date`) VALUES
(45, '23', 'Nylone Caising 250/5, 5 VA Cl. 1.0 Model (SA3010)', '9', 'pcs', '224.00', '2016.00', '', '2016.00', '2017-07-17 14:23:19'),
(46, '24', 'Tape wound C.T 600/5 ,5VACl.0.5(ID-80mm)', '3', 'pcs', '245.00', '735.00', '', '735.00', '2017-07-17 14:41:00'),
(47, '24', 'Tape wound C.T 300/5,5VACl.0.5(ID-55 mm)', '3', 'pcs', '245.00', '735.00', '', '735.00', '2017-07-17 14:41:00'),
(48, '25', 'Tape wound C.T 800/5,5VACl.1.0(ID-80mm)', '3', 'pcs', '210.00', '630.00', '', '630.00', '2017-07-17 14:47:57'),
(49, '25', 'Tape wound C.T 400/5,5VACl.1.0(ID-60mm)', '6', 'pcs', '195.00', '1170.00', '', '1170.00', '2017-07-17 14:47:57'),
(50, '26', 'Nylone Caising 100/5,2.5VACl.1.0Model (SA3010)', '15', 'pcs', '200.00', '3000.00', '0', '3000.00', '2017-07-17 15:05:58'),
(51, '26', 'Nylone Caising 150/5,2.5VACl.1.0Model (SA3010)', '9', 'pcs', '200.00', '1800.00', '0', '1800.00', '2017-07-17 15:05:58'),
(52, '26', 'Nylone Caising 250/5,5VACl.1.0Model (SA3010)', '9', 'pcs', '210.00', '1890.00', '0', '1890.00', '2017-07-17 15:05:58'),
(53, '26', 'Nylone Caising 800/5,5VACl.1.0Model (SA8015)', '3', 'pcs', '260.00', '780.00', '0', '780.00', '2017-07-17 15:05:58'),
(54, '26', 'Tape wound C.T 400/5,5VACl.1.0(ID-60mm) with connector', '3', 'pcs', '200.00', '600.00', '0', '600.00', '2017-07-17 15:05:58'),
(55, '27', 'Tape wound C.T 5000/5,15VACl.0.5(ID-270mm)', '3', 'pcs', '1650.00', '4950.00', '0', '4950.00', '2017-07-17 15:16:56'),
(56, '28', 'Tape wound C.T 250/5, 5VA Cl.1.0 (ID-35mm) with connector', '9', 'pcs', '202.00', '1818.00', '0', '1818.00', '2017-07-17 15:44:54'),
(57, '28', 'Tape wound C.T 400/5,5VA Cl.1.0 (ID-60mm) with connector', '9', 'pcs', '202.00', '1818.00', '0', '1818.00', '2017-07-17 15:44:54'),
(58, '28', 'Tape wound C.T 600/5,5VA Cl.1.0 (ID-60mm) with connector', '3', 'pcs', '202.00', '606.00', '0', '606.00', '2017-07-17 15:44:54'),
(59, '29', 'Tape wound C.T 3000/5,15VA Cl.1.0,Rect.(150 x75)', '3', 'pcs', '840.00', '2520.00', '0', '2520.00', '2017-07-17 16:37:54'),
(60, '29', 'Tape wound C.T 1250/5,15VA,Cl.1.0, Rect.(60 x 40)', '3', 'pcs', '300.00', '900.00', '0', '900.00', '2017-07-17 16:37:54'),
(61, '29', 'Tape wound C.T 250/5,15VA, Cl.1.0, (ID-45mm)', '3', 'pcs', '312.00', '936.00', '0', '936.00', '2017-07-17 16:37:54'),
(62, '30', 'Tape wound C.T 60/5,2.5VA ,Cl.3.0 (ID-30mm)', '12', 'pcs', '172.50', '2070.00', '0', '2070.00', '2017-07-18 14:05:34'),
(63, '30', 'Tape wound C.T 100/5,2.5VA ,Cl.1.0 (ID-30mm)', '6', 'pcs', '165.00', '990.00', '0', '990.00', '2017-07-18 14:05:34'),
(64, '30', 'Tape wound C.T 200/5,5VA ,Cl.1.0 (ID-35mm)', '12', 'pcs', '165.00', '1980.00', '0', '1980.00', '2017-07-18 14:05:34'),
(65, '30', 'Tape wound C.T 400/5,5VACl.1.0(ID-60mm)', '18', 'pcs', '180.00', '3240.00', '0', '3240.00', '2017-07-18 14:05:34'),
(66, '30', 'Tape wound C.T 600/5,5VA ,Cl.1.0 (ID-65 mm)', '6', 'pcs', '195.00', '1170.00', '0', '1170.00', '2017-07-18 14:05:34'),
(67, '31', 'Tape wound C.T 250/5,5VA ,Cl.1.0 (ID-50mm)', '3', 'pcs', '156.00', '468.00', '0', '468.00', '2017-07-18 14:23:12'),
(68, '32', 'Tape wound C.T 600/5,5VA ,Cl.1.0 (ID-60mm)', '9', 'pcs', '180.00', '1620.00', '0', '1620.00', '2017-07-18 14:39:38'),
(69, '32', 'Tape wound C.T 1000/5,7.5VA ,Cl.1.0 (ID-80mm)', '9', 'pcs', '210.00', '1890.00', '0', '1890.00', '2017-07-18 14:39:38'),
(70, '32', 'Tape wound C.T 2000/5,15VA ,Cl.1.0 (ID-115mm)', '6', 'pcs', '500.00', '3000.00', '0', '3000.00', '2017-07-18 14:39:38'),
(71, '33', '1000/5,10VA ,Cl.1.0 Model (SA8015) Nylone Caising ', '9', 'pcs', '315.00', '2835.00', '0', '2835.00', '2017-07-19 15:04:55'),
(72, '33', '600/5,5VA, Cl.1.0 Model (SA8015) Nylone Caising ', '12', 'pcs', '260.00', '3120.00', '0', '3120.00', '2017-07-19 15:04:55'),
(73, '33', '400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector', '24', 'pcs', '200.00', '4800.00', '0', '4800.00', '2017-07-19 15:04:55'),
(74, '33', '800/5,10VA ,Cl.1.0 (ID-60mm) Tape wound C.T  with connector', '9', 'pcs', '215.00', '1935.00', '0', '1935.00', '2017-07-19 15:04:55'),
(75, '34', '2500/5,15VA ,Cl.1.0 Rect.(130 x60) Tape wound C.T ', '3', 'pcs', '650.00', '1950.00', '0', '1950.00', '2017-07-19 15:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `item_detail`
--

CREATE TABLE IF NOT EXISTS `item_detail` (
  `p_sno` int(9) NOT NULL AUTO_INCREMENT,
  `p_code` varchar(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_hsn` varchar(40) NOT NULL,
  `p_taxrate` int(5) NOT NULL,
  PRIMARY KEY (`p_sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `item_detail`
--

INSERT INTO `item_detail` (`p_sno`, `p_code`, `p_name`, `p_hsn`, `p_taxrate`) VALUES
(9, 'P-4', '250/5, 5 VA Cl. 1.0 Model (SA3010) Nylone Caising  ', '8504', 18),
(6, 'SA-01', '1000/5, 5VA, CL. 1.0 (Id-30mm) Tape Wound C.T ', '8504', 18),
(7, 'SA-12', '2000/5,5VA1.0 (30mm) Tape Wound C.T ', '8504', 18),
(8, '222', '600/5,5VA, Cl.1.0 Model (SA8015) Nylone Caising ', '8504', 18),
(10, 'SA-600', '600/5 ,5VACl.0.5(ID-80mm) Tape wound C.T ', '8504', 18),
(11, 'SA-300', '300/5,5VACl.0.5(ID-55 mm) Tape wound C.T ', '8504', 18),
(12, 'SA-800', '800/5,5VA, Cl.1.0, (ID-80mm) Tape wound C.T ', '8504', 18),
(13, 'SA-400', '400/5,5VACl.1.0(ID-60mm) Tape wound C.T ', '8504', 18),
(14, 'pl-100', '100/5,2.5VACl.1.0Model (SA3010) Nylone Caising ', '8504', 18),
(15, 'pl-150', '150/5,2.5VACl.1.0Model (SA3010) Nylone Caising ', '8504', 18),
(16, 'PL-250', '250/5,5VACl.1.0Model (SA3010) Nylone Caising  ', '8504', 18),
(17, 'pl-800', '800/5,5VACl.1.0Model (SA8015) Nylone Caising ', '8504', 18),
(18, 'SA-400', '400/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector', '8504', 18),
(19, 'SA-5000', '5000/5,15VACl.0.5(ID-270mm) Tape wound C.T ', '8504', 18),
(20, 'SA-250', '250/5, 5VA Cl.1.0 (ID-35mm) Tape wound C.T with connector', '8504', 18),
(21, 'SA-600', '600/5,5VA Cl.1.0 (ID-60mm) Tape wound C.T with connector', '8504', 18),
(22, 'Rec-3000', '3000/5,15VA Cl.1.0,Rect.(150 x75) Tape wound C.T ', '8504', 18),
(23, 'Rec-1250', '1250/5,15VA,Cl.1.0, Rect.(60 x 40) Tape wound C.T ', '8504', 18),
(24, 'Rou-250', '250/5,15VA, Cl.1.0, (ID-45mm) Tape wound C.T  ', '8504', 18),
(25, 'Rou-600', '600/5,5VA ,Cl.1.0 (ID-65 mm) Tape wound C.T ', '8504', 18),
(26, 'Rou-100', '100/5,2.5VA ,Cl.1.0 (ID-30mm) Tape wound C.T ', '8504', 18),
(27, 'Rou-200', '200/5,5VA ,Cl.1.0 (ID-35mm) Tape wound C.T ', '8504', 18),
(28, 'Rou-60', '60/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T ', '8504', 18),
(29, 'Rou-250', '250/5,5VA ,Cl.1.0 (ID-50mm) Tape wound C.T  ', '8504', 18),
(30, 'Rou-600', '600/5,5VA ,Cl.1.0 (ID-60mm) Tape wound C.T ', '8504', 18),
(31, 'Rou-1000', '1000/5,7.5VA ,Cl.1.0 (ID-80mm) Tape wound C.T ', '8504', 18),
(32, 'Rou-2000', '2000/5,15VA ,Cl.1.0 (ID-115mm) Tape wound C.T ', '8504', 18),
(33, 'Pl-1000', '1000/5,10VA ,Cl.1.0 Model (SA8015) Nylone Caising ', '8504', 18),
(34, 'Rou-800', '800/5,10VA ,Cl.1.0 (ID-60mm) Tape wound C.T  with connector', '8504', 18),
(35, 'Rec-2500', '2500/5,15VA ,Cl.1.0 Rect.(130 x60) Tape wound C.T ', '8504', 18),
(36, 'Rou-50', '50/5,2.5VA ,Cl.3.0 (ID-30mm) Tape wound C.T ', '8504', 18),
(37, 'Rou-100/5', '100/5,5VA ,Cl.1.0 (ID-30mm) Tape wound C.T ', '8504', 18),
(38, 'Rou-125', '125/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T', '8504', 18),
(39, 'Rou-150', '150/5,2.5VA, Cl.1.0, (ID-30mm), Tape wound C.T', '8504', 18);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `state_code` int(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `state_code`, `state`) VALUES
(1, 24, 'GUJARAT'),
(2, 26, 'DADRA & NAGAR HAVELI'),
(3, 25, 'DAMAN & DIU'),
(4, 27, 'MAHARASHTRA');

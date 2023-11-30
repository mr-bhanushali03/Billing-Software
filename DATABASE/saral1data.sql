-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2017 at 04:45 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
(9, 'MAH-001', 'MAHESHWARI TRADING COMPANY', '0', 'India', 1, 'VAPI', ' opp. VIA G.I.D.C VAPI', 396195, '0', '0000-00-00', '24AAHFM9435A1ZI');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `custname`, `cno`, `country`, `sid`, `city`, `addr`, `pin_code`, `email`, `reg`, `gstin`) VALUES
(6, 'suk-001', 'SUKHARAM ELECTRIC ENTERPRISE', '0', 'India', 1, 'SURAT', ' B/1-2 Saifa Complex Opp- BRC Ground , Udhana Main Road', 0, '0', '0000-00-00', '24ABQFS0348N1Z0'),
(5, 'MB-01', 'M B AUTOMATION', '0', 'India', 1, 'Pardi', ' Dadra', 396230, '0', '0000-00-00', '26AAMHS4089R2ZZ'),
(3, 'SU-101', 'SUPER ELECTRICALS', '9825869951', 'INDIA', 1, 'Kadodara,', ' C/1,Gopal krishna Complex, Opp. Garden Vareli Mills,Kaodara, Dist,-Surat', 394327, 'superele1022@yahoo.co.in', '0000-00-00', '24AEMPB3576L1ZA'),
(4, 'SA-102', 'IDEAL TECHNOLOGIES', '9510018979', 'India', 1, 'Vapi', ' Damanganga Industrial Park, Gate NO 2 Survey No 397/1/P1, Plot No 29 Dungra Dist. Valsad', 396195, 'shajimon@idealtechnologies.co.in', '0000-00-00', '2411FF18576A1ZG'),
(10, 'JAT-001', 'JATSON POWER PVT. LTD', '0', 'India', 1, 'VAPI', ' Plot no. A-1/5406,Opp, 66kv GETCO substation, 4th Phase, GIDC Vapi', 396195, '0', '0000-00-00', '24AABCJ4989P1ZT'),
(8, 'Prg-001', 'PRAGNESH ELECTROLINKS', '0', 'India', 1, 'VAPI', ' 5307/4, 4th Phase, Near GEB sub station GIDC VAPI', 396195, '0', '0000-00-00', '24AJEPP2898Q1ZC'),
(9, 'sam-001', 'SAMIRIKA POWER CONTROL', '0', 'India', 1, 'VAPI', ' Plot No. 303/5B, 2nd Phase G.I.D.C ', 396195, '0', '0000-00-00', '24AYFPP1376D1ZL'),
(11, 'MAH-001', 'MAHESHWARI TRADING COMPANY', '0', 'India', 1, 'VAPI', ' Opp. VIA G.I.D.C VAPI', 396195, '0', '0000-00-00', '24AAHFM9435A1ZI');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`quot_id`, `quot_no`, `q_n`, `order_no`, `quot_cust`, `state`, `stateCode`, `transmode`, `supplydate`, `conname`, `lrno`, `vehicleno`, `subtotal`, `packing`, `transpotation`, `grandtotal`, `cgst`, `igst`, `sgst`, `cgst_amt`, `igst_amt`, `sgst_amt`, `inv_date`, `order_date`, `rvalue`) VALUES
(23, '001', 1, '-', '5', '', '', '', '', '4', '', '', '2016.00', '', '', '2379.00', '9', '0', '9', '181.44', '0.00', '181.44', '2017-07-17', '2017-07-07', '0.12'),
(24, '2', 2, '-', '6', '', '', '', '', '5', '', '', '1470.00', '', '60.00', '1805.00', '0', '18', '0', '0.00', '275.40', '0.00', '2017-07-17', '2017-07-07', '-0.40'),
(25, '3', 3, '0175', '4', '', '', '', '', '2', '', '', '1800.00', '', '', '2124.00', '0', '18', '0', '0.00', '324.00', '0.00', '2017-07-17', '2017-07-10', '0.00'),
(26, '4', 4, '-', '8', '', '', '', '', '6', '', '', '8070.00', '0.00', '0.00', '9523.00', '0', '18', '0', '0.00', '1452.60', '0.00', '2017-07-17', '2017-07-11', '0.40'),
(27, '5', 5, '-', '9', '', '', '', '', '7', '', '', '4950.00', '0.00', '0.00', '5841.00', '0', '18', '0', '0.00', '891.00', '0.00', '2017-07-17', '2017-07-12', '0.00'),
(28, '6', 6, '-', '10', '', '', '', '', '8', '', '', '4242.00', '0.00', '0.00', '5006.00', '0', '18', '0', '0.00', '763.56', '0.00', '2017-07-17', '2017-07-17', '0.44'),
(29, '7', 7, '-', '11', '', '', '', '', '9', '', '', '4356.00', '0.00', '0.00', '5140.00', '0', '18', '0', '0.00', '784.08', '0.00', '2017-07-17', '2017-07-17', '-0.08');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

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
(61, '29', 'Tape wound C.T 250/5,15VA, Cl.1.0, (ID-45mm)', '3', 'pcs', '312.00', '936.00', '0', '936.00', '2017-07-17 16:37:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `p_sno` int(9) NOT NULL AUTO_INCREMENT,
  `p_code` varchar(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_hsn` varchar(40) NOT NULL,
  `p_taxrate` int(5) NOT NULL,
  PRIMARY KEY (`p_sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`p_sno`, `p_code`, `p_name`, `p_hsn`, `p_taxrate`) VALUES
(9, 'P-4', 'Nylone Caising  250/5, 5 VA Cl. 1.0 Model (SA3010)', '8504', 18),
(6, 'SA-01', 'Tape Wound C.T 1000/5, 5VA, CL. 1.0 (Id-30mm)', '8504', 18),
(7, 'SA-12', 'Tape wound 2000/5,5VA1.0 (30mm)', '8504', 18),
(8, '222', 'Nylone Caising 600/5,5VACl.1.08015', '8504', 18),
(10, 'SA-600', 'Tape wound C.T 600/5 ,5VACl.0.5(ID-80mm)', '8504', 18),
(11, 'SA-300', 'Tape wound C.T 300/5,5VACl.0.5(ID-55 mm)', '8504', 18),
(12, 'SA-800', 'Tape wound C.T 800/5,5VACl.1.0(ID-80mm)', '8504', 18),
(13, 'SA-400', 'Tape wound C.T 400/5,5VACl.1.0(ID-60mm)', '8504', 18),
(14, 'pl-100', 'Nylone Caising 100/5,2.5VACl.1.0Model (SA3010)', '8504', 18),
(15, 'pl-150', 'Nylone Caising 150/5,2.5VACl.1.0Model (SA3010)', '8504', 18),
(16, 'PL-250', 'Nylone Caising  250/5,5VACl.1.0Model (SA3010)', '8504', 18),
(17, 'pl-800', 'Nylone Caising 800/5,5VACl.1.0Model (SA8015)', '8504', 18),
(18, 'SA-400', 'Tape wound C.T 400/5,5VA Cl.1.0 (ID-60mm) with connector', '8504', 18),
(19, 'SA-5000', 'Tape wound C.T 5000/5,15VACl.0.5(ID-270mm)', '8504', 18),
(20, 'SA-250', 'Tape wound C.T 250/5, 5VA Cl.1.0 (ID-35mm) with connector', '8504', 18),
(21, 'SA-600', 'Tape wound C.T 600/5,5VA Cl.1.0 (ID-60mm) with connector', '8504', 18),
(22, 'Rec-3000', 'Tape wound C.T 3000/5,15VA Cl.1.0,Rect.(150 x75)', '8504', 18),
(23, 'Rec-1250', 'Tape wound C.T 1250/5,15VA,Cl.1.0, Rect.(60 x 40)', '8504', 18),
(24, 'Rou-250', 'Tape wound C.T  250/5,15VA, Cl.1.0, (ID-45mm)', '8504', 18);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `state_code` int(10) NOT NULL,
  `state` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `state_code`, `state`) VALUES
(1, 24, 'GUJARAT'),
(2, 26, 'SILVASSA'),
(3, 25, 'DAMAN & DIU'),
(4, 27, 'MAHARASHTRA');

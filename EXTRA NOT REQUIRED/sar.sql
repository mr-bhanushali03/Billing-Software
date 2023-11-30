-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 04:24 PM
-- Server version: 5.1.32
-- PHP Version: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sar`
--

-- --------------------------------------------------------

--
-- Table structure for table `consignee`
--

CREATE TABLE IF NOT EXISTS `consignee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(11) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `cno` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg` date NOT NULL,
  `gstin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `consignee`
--

INSERT INTO `consignee` (`id`, `cust_id`, `custname`, `gender`, `dob`, `cno`, `country`, `city`, `addr`, `email`, `reg`, `gstin`) VALUES
(1, 'C-1', 'sagar', 'male', '2017-06-14', '9876543210', 'india', 'vapi', 'Gala No. 16, Gr. Floor,Tirupati Industrial Estate,Sr No. 113/2/1 sagar', 'ketan@gmail.com', '2017-06-30', 'SFGDH123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(11) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `cno` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg` date NOT NULL,
  `gstin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `custname`, `gender`, `dob`, `cno`, `country`, `city`, `addr`, `email`, `reg`, `gstin`) VALUES
(1, 'C-1', 'ketan', 'male', '2017-06-14', '7779008086', 'india', 'silvassa', 'amli', 'mavketan81@gmail.com', '2017-06-30', '1234567890');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`quot_id`, `quot_no`, `q_n`, `order_no`, `quot_cust`, `state`, `stateCode`, `transmode`, `supplydate`, `conname`, `lrno`, `vehicleno`, `subtotal`, `packing`, `transpotation`, `grandtotal`, `cgst`, `igst`, `sgst`, `cgst_amt`, `igst_amt`, `sgst_amt`, `inv_date`, `order_date`, `rvalue`) VALUES
(3, 'INV101', 100, '789', '1', 'DNH', '1008', 'road', '2017-11-30', '1', '890678', 'gj', '4802.94', '120', '', '7089.03', '18', '12', '14', '886.13', '590.75', '689.21', '2017-07-11', '2016-12-30', ''),
(4, 'INV101', 101, '123', '1', 'D & NH', '001', 'road', '2017-12-30', '1', '12', 'fk-u-by', '9.27', '50', '', '70', '18', 'IGST', '0', '10.67', '0.00', '0.00', '2017-07-12', '2017-07-11', '0.06'),
(5, 'INV101', 102, '123', '1', 'D & NH', '001', 'road', '2017-12-30', '1', '12', 'fk-u-by', '9.27', '50', '', '70', '18', 'IGST', '0', '10.67', '0.00', '0.00', '2017-07-12', '2017-07-11', '0.06');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `invoice_desc`
--

INSERT INTO `invoice_desc` (`quotdesc_id`, `quot_id`, `item_desc`, `quantity`, `unit`, `rate`, `total`, `dis`, `tax_val`, `updated_date`) VALUES
(18, '3', '100/5', '14', 'pcs', '190', '2660.00', '8.9', '2423.26', '2017-07-11 16:24:20'),
(19, '3', 'da', '89', 'pcs', '29', '2581.00', '7.8', '2379.68', '2017-07-11 16:24:20'),
(20, '4', '100/5', '4', 'pcs', '2.4', '9.60', '3.4', '9.27', '2017-07-12 16:19:26'),
(21, '5', '100/5', '4', 'pcs', '2.4', '9.60', '3.4', '9.27', '2017-07-12 16:20:11');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`p_sno`, `p_code`, `p_name`, `p_hsn`, `p_taxrate`) VALUES
(2, '001', '100/5', '10001', 18),
(3, '002', 'C.T 200/5', '100026', 28),
(4, '003', 'C.T 300/5', '20993', 5),
(5, 'ds', 'da', 'dsf', 33);

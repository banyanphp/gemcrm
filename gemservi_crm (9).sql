-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 01, 2017 at 08:49 AM
-- Server version: 5.6.33-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gemservi_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(255) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL,
  `admin_user_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_last_login_on` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Admin table' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_user_name`, `admin_password`, `admin_last_login_on`, `status`) VALUES
(1, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2017-03-13 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE IF NOT EXISTS `tbl_appointment` (
  `appointment_id` int(255) NOT NULL AUTO_INCREMENT,
  `appointment_date` varchar(255) NOT NULL,
  `appointment_time` varchar(11) NOT NULL,
  `appointment_user_code` varchar(255) NOT NULL,
  `appointment_with` varchar(255) NOT NULL,
  `appointment_through` varchar(255) NOT NULL,
  `appointment_company_name` varchar(255) NOT NULL,
  `appointment_location` varchar(255) NOT NULL,
  `appointment_description` varchar(255) NOT NULL,
  `appointment_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `appointment_status` varchar(255) NOT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `appointment_date`, `appointment_time`, `appointment_user_code`, `appointment_with`, `appointment_through`, `appointment_company_name`, `appointment_location`, `appointment_description`, `appointment_created_on`, `appointment_status`) VALUES
(3, '2017-03-23', '16:15', '1001', 'person', 'direct', '', 'place', 'desc', '2017-03-23 23:15:44', '1'),
(4, '2012-10-03', '11:10PM', '1003', 'hari', 'call', 'test', 'fd', 'cxcvcx', '2017-03-26 19:02:17', '1'),
(5, '2012-10-03', '11:10PM', '1003', 'hari', 'call', 'test', 'fd', 'cxcvcx', '2017-03-26 23:49:41', '1'),
(6, '2017-03-27', '5:30', '1001', 'test2with', 'test2appthrough', 'test2companyname', 'test2applocation', 'test2appnote', '2017-03-27 18:22:53', '1'),
(8, '2017-12-10', '10:30 pm', '1001', 'test', 'phone', '111', 'tesr', 'tgf', '2017-03-27 19:02:34', '1'),
(9, '2017-12-12', '12:30 pm', '1001', 'manager', 'phone', 'infosys', 'chennaii', 'personal reason', '2017-03-27 19:05:55', '1'),
(11, '2017-03-28', '12:15', '1001', 'TEST.appwith', 'phone', 'TEST.comname', 'TEST.apploc', 'TEST.appnote', '2017-03-27 21:12:19', '1'),
(12, '2017-03-27', '5:25', '1001', 'Chandru', 'gigiguvvg', 'bububhuv', 'punch', 'the best regards Michael', '2017-03-27 12:59:39', '1'),
(13, '29/03/2017', '5:44', '1001', 'Mr x', 'direct meet', 'Gem', 'arasur', 'just for app demo', '2017-03-28 18:15:04', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campaign`
--

CREATE TABLE IF NOT EXISTS `tbl_campaign` (
  `campaign_id` int(255) NOT NULL AUTO_INCREMENT,
  `campaign_year_id` varchar(255) NOT NULL,
  `campaign_month_id` int(11) NOT NULL,
  `campaign_team_id` varchar(255) NOT NULL,
  `campaign_title` varchar(255) NOT NULL,
  `campaign_start_date` varchar(255) NOT NULL,
  `campaign_end_date` varchar(255) NOT NULL,
  `campaign_description` text NOT NULL,
  `campaign_place` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `campaign_created_on` datetime NOT NULL,
  `campaign_status` int(11) NOT NULL,
  PRIMARY KEY (`campaign_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='campaign_table' AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_campaign`
--

INSERT INTO `tbl_campaign` (`campaign_id`, `campaign_year_id`, `campaign_month_id`, `campaign_team_id`, `campaign_title`, `campaign_start_date`, `campaign_end_date`, `campaign_description`, `campaign_place`, `created_by`, `campaign_created_on`, `campaign_status`) VALUES
(2, '1', 3, '', 'chennai', '22-03-2017', '28-03-2017', 'sfsdfsdfsdf', 'chennai', 'admin', '2017-03-16 20:04:22', 1),
(3, '1', 3, '', '1000', '03/17/2017 ', ' 04/20/2017', 'sdg', 'dgsdfzf', 'admin', '2017-03-16 20:07:24', 1),
(4, '1', 3, '', 'chennaiiiii', '22-03-2017', '28-03-2017', 'sfsdfsdfsdf', 'chennai', '1001', '2017-03-16 22:26:47', 1),
(5, '1', 3, '', 'test campaign', '2017-03-17', '2017-03-22', 'the resume attached ', 'Bangalore', '1001', '2017-03-17 18:59:52', 1),
(6, '1', 3, '', 'Australia', '2017-03-21', '2017-03-5', 'fsdafsf ', 'Melbourne', '1001', '2017-03-17 19:14:43', 1),
(7, '1', 3, '', 'Dryer conference', '2017-03-17', '2017-03-17', 'new product development and description', 'the', '1001', '2017-03-17 19:19:22', 1),
(8, '1', 3, '', 'zkidkd', '2017-03-20', '2017-03-30', 'sjsjsjejje', 'ssjsjsidu', '1001', '2017-03-18 15:41:51', 1),
(9, '', 0, '', 'test001', '2017-03-20', '2017-03-21', 'campdescription', 'location eg', '1001', '2017-03-20 11:42:55', 1),
(10, '', 0, '', 'nameee', '2017-03-01', '2017-03-03', 'Descriptionnnn', 'locationnn', '1001', '2017-03-21 11:24:47', 1),
(11, '', 0, '', 'sha', '2017-03-10', '2017-03-20', 'web', 'erode', '1001', '2017-03-22 11:59:48', 1),
(12, '', 0, '', 'wipro', '2017-04-07', '2017-04-14', 'it', 'chennai', '1001', '2017-03-26 12:33:20', 1),
(13, '', 0, '', 'wipro', '2017-04-07', '2017-04-14', 'it', 'chennai', '1001', '2017-03-26 12:33:20', 1),
(14, '', 0, '', 'wipro', '2017-04-07', '2017-04-14', 'it', 'chennai', '1001', '2017-03-26 12:33:52', 1),
(15, '', 0, '', 'wipro', '2017-04-07', '2017-04-14', 'it', 'chennai', '1001', '2017-03-26 12:33:52', 1),
(16, '', 0, '', 'test1name', '2017-03-27', '2017-03-28', 'test1desc', 'test1location', '1001', '2017-03-27 10:51:50', 1),
(17, '', 0, '', 'technosoft', '2017-03-22', '2017-04-01', 'oracle', 'chennai', '1001', '2017-03-27 11:34:11', 1),
(18, '', 0, '', 'softsolutions', '2017-03-17', '2017-03-24', 'php', 'bangalore', '1001', '2017-03-27 12:35:35', 1),
(19, '', 0, '', 'softsolutions', '2017-03-17', '2017-03-24', 'php', 'bangalore', '1001', '2017-03-27 12:35:35', 1),
(20, '', 0, '', 'softsolutions', '2017-03-17', '2017-03-24', 'php', 'bangalore', '1001', '2017-03-27 12:35:46', 1),
(21, '', 0, '', 'softsolutions', '2017-03-17', '2017-03-24', 'php', 'bangalore', '1001', '2017-03-27 12:35:47', 1),
(22, '', 0, '', 'camp-success', '2017-03-28', '2017-03-29', 'cbn-desc', 'coimbatore', '1001', '2017-03-28 11:11:52', 1),
(23, '', 0, '', 'edit', '2017-03-29', '2017-03-30', 'edit', 'edit', '1001', '2017-03-28 11:48:20', 1),
(24, '', 0, '', 'softtech', '2017-03-15', '2017-03-22', 'softskills', 'delhi', '1001', '2017-03-28 11:56:30', 1),
(25, '', 0, '', 'dddgg', '2017-03-29', '2017-03-29', 'sfg', 'rtg', '1001', '2017-03-29 11:26:10', 1),
(26, '', 0, '', 'jfjrjrjdjx47744', '2017-03-31', '2017-03-31', 'ncnf577', 'bxjfj', '1001', '2017-03-31 11:32:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campaign_participants`
--

CREATE TABLE IF NOT EXISTS `tbl_campaign_participants` (
  `campaign_participants_id` int(255) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(255) NOT NULL,
  `campaign_participants_code` varchar(255) NOT NULL,
  `campaign_participants_created_on` varchar(255) NOT NULL,
  `campaign_participants_status` varchar(255) NOT NULL,
  PRIMARY KEY (`campaign_participants_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='partcipants in campaign' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_campaign_participants`
--

INSERT INTO `tbl_campaign_participants` (`campaign_participants_id`, `campaign_id`, `campaign_participants_code`, `campaign_participants_created_on`, `campaign_participants_status`) VALUES
(3, 2, '1001', '2017-03-16 20:04:22', '1'),
(4, 3, '1001', '2017-03-16 20:07:24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalogue`
--

CREATE TABLE IF NOT EXISTS `tbl_catalogue` (
  `catlogue_id` int(255) NOT NULL AUTO_INCREMENT,
  `catlogue_name` varchar(255) NOT NULL,
  `catlogue_path` varchar(255) NOT NULL,
  `catlogue_staus` varchar(255) NOT NULL,
  PRIMARY KEY (`catlogue_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_catalogue`
--

INSERT INTO `tbl_catalogue` (`catlogue_id`, `catlogue_name`, `catlogue_path`, `catlogue_staus`) VALUES
(1, '2KD+', 'http://gemservice.in/crm/catalogue/2KD+.pdf', '1'),
(2, '2KW', 'http://gemservice.in/crm/catalogue/2KW.pdf', '1'),
(3, 'ADV', 'http://gemservice.in/crm/catalogue/ADV.pdf', '1'),
(4, 'Aftercoolers', 'http://gemservice.in/crm/catalogue/Aftercoolers.pdf', '1'),
(5, 'Air_Receiver', 'http://gemservice.in/crm/catalogue/Air_Receiver.pdf', '1'),
(6, 'All_Products', 'http://gemservice.in/crm/catalogue/All_Products.pdf', '1'),
(7, 'CHT', 'http://gemservice.in/crm/catalogue/CHT.pdf', '1'),
(8, 'GAS', 'http://gemservice.in/crm/catalogue/GAS.pdf', '1'),
(9, 'GCT+', 'http://gemservice.in/crm/catalogue/GCT+.pdf', '1'),
(10, 'GEM_Airreceiver', 'http://gemservice.in/crm/catalogue/GEM_Airreceiver.pdf', '1'),
(11, 'GZF', 'http://gemservice.in/crm/catalogue/GZF.pdf', '1'),
(12, 'hld', 'http://gemservice.in/crm/catalogue/hld.pdf', '1'),
(13, 'HLN', 'http://gemservice.in/crm/catalogue/HLN.pdf', '1'),
(14, 'HLN_HLD', 'http://gemservice.in/crm/catalogue/HLN_HLD.pdf', '1'),
(15, 'DCT', 'http://gemservice.in/crm/catalogue/DCT.pdf', '1'),
(16, 'ECO', 'http://gemservice.in/crm/catalogue/ECO.pdf', '1'),
(17, 'ECT_FRP', 'http://gemservice.in/crm/catalogue/ECT_FRP.pdf', '1'),
(18, 'Vortex_Separator', 'http://gemservice.in/crm/catalogue/Vortex_Separator.pdf', '1'),
(19, 'NexGen_Dryer', 'http://gemservice.in/crm/catalogue/NexGen_Dryer.pdf', '1'),
(20, 'PET_Series', 'http://gemservice.in/crm/catalogue/PET_Series.pdf', '1'),
(21, 'Super_Pack_SPD', 'http://gemservice.in/crm/catalogue/Super_Pack_SPD.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `enq_id` int(11) NOT NULL AUTO_INCREMENT,
  `enq_created_by` varchar(255) NOT NULL,
  `enq_created_team` varchar(255) NOT NULL,
  `enq_no` varchar(255) NOT NULL,
  `enq_year_id` int(11) NOT NULL,
  `enq_month_id` int(11) NOT NULL,
  `enq_company_name` varchar(255) NOT NULL,
  `enq_company_email` varchar(255) NOT NULL,
  `enq_addon_email1` varchar(255) NOT NULL,
  `enq_addon_email2` varchar(255) NOT NULL,
  `enq_addon_email3` varchar(255) NOT NULL,
  `enq_company_phn_no` varchar(255) NOT NULL,
  `enq_company_address` text NOT NULL,
  `enq_company_pincode` varchar(255) NOT NULL,
  `enq_contact_person_name` varchar(255) NOT NULL,
  `enq_contact_person_phone_no` varchar(255) NOT NULL,
  `enq_product_series` varchar(255) NOT NULL,
  `enq_product_model` varchar(255) NOT NULL,
  `enq_product_model_no` varchar(255) NOT NULL,
  `enq_product_type` varchar(255) NOT NULL,
  `enq_product_qty` varchar(255) NOT NULL,
  `enq_product_price` varchar(255) NOT NULL,
  `enq_alloted_to` varchar(255) NOT NULL,
  `enq_team_id` varchar(255) NOT NULL,
  `enq_discount` varchar(255) NOT NULL,
  `enq_description` varchar(255) NOT NULL,
  `enquiry_through` varchar(255) NOT NULL,
  `enquiry_through_description` varchar(255) NOT NULL,
  `enq_quotation` varchar(255) NOT NULL,
  `enq_status` varchar(255) NOT NULL,
  `enq_remarks` varchar(255) NOT NULL,
  `enq_created_on` datetime NOT NULL,
  `enq_completed_on` datetime NOT NULL,
  PRIMARY KEY (`enq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='enquiry or leads table' AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`enq_id`, `enq_created_by`, `enq_created_team`, `enq_no`, `enq_year_id`, `enq_month_id`, `enq_company_name`, `enq_company_email`, `enq_addon_email1`, `enq_addon_email2`, `enq_addon_email3`, `enq_company_phn_no`, `enq_company_address`, `enq_company_pincode`, `enq_contact_person_name`, `enq_contact_person_phone_no`, `enq_product_series`, `enq_product_model`, `enq_product_model_no`, `enq_product_type`, `enq_product_qty`, `enq_product_price`, `enq_alloted_to`, `enq_team_id`, `enq_discount`, `enq_description`, `enquiry_through`, `enquiry_through_description`, `enq_quotation`, `enq_status`, `enq_remarks`, `enq_created_on`, `enq_completed_on`) VALUES
(1, '', '', '', 1, 3, 'jpiopoi', 'bytest@gmail.com', '', '', '', '9487914513', 'test', '638503', '', '9487914513', '', '', '', '', '2', '100000', '1001', '16', '', 'enq_desc', '', '', '', 'Pending', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '1001', '1', 'enq no', 1, 3, 'test', 'test@gmail.com', '', '', '', '9944934568', 'test address', '641010', 'testperson', '8888888888', '1', '', '', '', '2', '100000', '1001', '1', '', 'enq_desc', '', '', '', 'Dropped', 'enq_desc', '2017-03-18 16:20:26', '2017-03-29 12:03:10'),
(3, '1001', '1', 'enq no', 1, 3, 'sadasd', 'test@gmail.com', '', '', '', '9944934568', 'test address', '641010', 'czxasd', '8888888888', '2', '', '', '', '2', '100000', '1001', '1', '', 'enq_desc', 'asuidabs', 'asdasdadasd', '', 'Dropped', 'enq_desc', '2017-03-18 23:43:45', '2017-03-29 12:03:10'),
(4, '1001', '1', 'enq no', 1, 3, 'test from Australia', 'test@gmail.com', '', '', '', '9944934568', 'test address', '641010', 'jo', '8888888888', '3', '', '', '', '2', '100000', '1001', '1', '', 'enq_desc', '1', '3', '', 'Dropped', 'enq_desc', '2017-03-19 01:36:51', '2017-03-29 12:03:10'),
(5, '1001', '1', 'enq no', 1, 3, 'super Mari', 'test@gmail.com', '', '', '', '9944934568', 'test address', '641010', 'dbjdjdididjd', '8888888888', '5', '', '', '', '2', '100000', '1001', '1', '', 'enq_desc', '1', '2', '', 'Dropped', 'enq_desc', '2017-03-19 14:43:32', '2017-03-29 12:03:10'),
(6, '1001', '1', 'enq no', 1, 3, 'false true true', 'test@gmail.com', '', '', '', '9944934568', 'test address', '641010', 'sjjsjsisid', '8888888888', '2', '', '', '', '2', '100000', '1001', '1', '', 'enq_desc', '4', '', '', 'Dropped', 'enq_desc', '2017-03-19 14:45:47', '2017-03-29 12:03:10'),
(7, '1001', '1', '1000', 1, 3, 'zjjzzjjxjjx', 'hajajhshshhs', '', '', '', 'ffhgssss', 'the@hxhdhdh.com', 'jsjsisjdjdjdhd', 'dddff', 'sdd', '3', '', '', '', '2', '100000', '', '1', '', '', '1', '2', '10002', 'Completed', 'assjsjsje', '2017-03-19 15:58:36', '0000-00-00 00:00:00'),
(8, '1001', '1', '1001', 1, 3, 'zjjzzjjxjjx', '', '', '', '', '', '', '', 'dddff', '', '4', '', '', '', '2', '100000', '1001', '1', '', '', '1', '', '10005', 'Dropped', 'sdfsdh', '2017-03-19 15:59:19', '2017-03-29 11:22:43'),
(9, '1001', '1', '1002', 1, 3, 'twsf', 'test@gmail.com', '', '', '', '9487914513', 'test', '638503', 'crdds', '9487914513', '1', '', '', '', '2', '100000', '', '1', '', 'enq_desc', '1', '2', '', 'Process', '', '2017-03-19 16:04:22', '0000-00-00 00:00:00'),
(10, '', '', '1003', 1, 3, 'Banyan Infotech', 'hari@banyaninfotech.com', '', '', '', '9487914513', 'dff', '', 'u', '9487914513', '2', '', '', '', '2', '100000', '', '1', '', 'fd', '3', '', '10004', 'Completed', '', '2017-03-19 18:10:46', '0000-00-00 00:00:00'),
(11, 'admin', 'admin', '1004', 1, 3, 'Banyan Infotech', 'hari@banyaninfotech.com', '', '', '', '', 'zdf', '', 'fgfd', '9487914513', '3', '', '', '', '2', '100000', '1001', '1', '', 'df', '1', '2', '10005', 'Completed', '', '2017-03-19 18:15:46', '0000-00-00 00:00:00'),
(12, 'admin', 'admin', '1002', 1, 3, 'Banyan Infotech', 'test@gmail.com', '', '', '', '9487914513', 'test', '638503', 'htt', '9487914513', '4', '', '', '', '2', '100000', '1001', '1', '', 'enq_desc', '3', '', '10006', 'Process', '', '2017-03-19 18:18:03', '0000-00-00 00:00:00'),
(13, '1001', '16', '1006', 1, 3, 'test', 'hari@banyaninfotech.com', '', '', '', '', 'dfd', '', 'test', '9876543210', '2', '', '', '', '', '', '1001', '1', '', 'enq_desc', '1', '10', '', 'Process', '', '2017-03-23 16:27:12', '0000-00-00 00:00:00'),
(14, '1001', '16', '1007', 1, 3, 'test', 'hari@banyaninfotech.com', '', '', '', '', 'dfd', '', 'test', '9876543210', '2', '', '', '', '', '', '', '1', '', 'enq_desc', '1', '10', '', 'Dropped', 'enq_desc', '2017-03-23 16:27:12', '2017-03-29 12:03:53'),
(15, '1001', '', '1008', 1, 3, 'jo testing', 'jo@gmail.com', '', '', '', '9944934568', 'Coimbatore', '641010', 'josiva', '9944934568', '3', '', '', '', '', '', '', '1', '', '', '1', '2', '10035', 'completed', '0', '2017-03-28 11:57:55', '0000-00-00 00:00:00'),
(16, '1001', '', '1008', 1, 3, 'jo testing', 'jo@gmail.com', '', '', '', '9944934568', 'Coimbatore', '641010', 'josiva', '9944934568', '3', '', '', '', '', '', '', '1', '', '', '1', '2', '10035', 'completed', '0', '2017-03-28 11:57:53', '0000-00-00 00:00:00'),
(17, '1001', '', '1008', 1, 3, 'jo testing', 'jo@gmail.com', '', '', '', '9944934568', 'Coimbatore', '641010', 'josiva', '9944934568', '3', '', '', '', '', '', '', '1', '', '', '1', '2', '10035', 'completed', '0', '2017-03-28 11:57:52', '0000-00-00 00:00:00'),
(18, '1001', '', '1009', 1, 3, 'test bank', 'xjjddj@jgfkfk.com', '', '', '', '3637383883', 'hsusususiwuee', '2727276', 'hskswkw', 'shhsue', '4', '', '', '', '', '', '', '', '', 'enq_desc', '1', '2', '', 'Process', 'zbbzhshd', '2017-03-29 14:42:51', '0000-00-00 00:00:00'),
(19, '1001', '16', '1010', 1, 3, 'ashok process', '', '', '', '', '1234567213243348834', 'kuppanayakenpatti.', '', 'abc', '1234567890123456789', '1', '', '', '', '', '', '1001', '16', '', 'required for 10hp compressor.', '5', '', '', 'Pending', '', '2017-03-29 15:17:31', '0000-00-00 00:00:00'),
(20, '1001', '', '1011', 1, 3, 'sarathi and ', 'jajaj@hueje.com', '', '', '', '267929292', 'rs puram Coimbatore', '641659', '007007007', '5566887', '1', '', '', '', '', '', '', '', '', 'enq_desc', '1', '', '', 'Process', '25cm pressure 10 bar ', '2017-03-29 16:11:52', '0000-00-00 00:00:00'),
(21, '1001', '', '1012', 1, 3, 'gem ', 'zjsjsjs@sjdjd.com', '', '', '', '9944934568', 'zzjkksks', '641010', 'jo', 'udtu', '1', '', '', '', '', '', '1001', '16', '', 'dagg', '5', '', '', 'Process', 'shsksslsksksj', '2017-03-30 14:12:04', '0000-00-00 00:00:00'),
(22, '1001', '', '1013', 1, 3, 'jo inc corporate', 'jo@gmail.com', 'jo@gmail.com', 'jo@gmail.vom', 'hk', '6288382522828', 'California', '52828288', 'giguuu', '533833883338', '1', '', '', '', '', '', '1001', '1', '', 'enq_desc', '1', '2', '', 'Process', 'vuvuguvyvyuybyvyf', '2017-03-30 16:41:48', '0000-00-00 00:00:00'),
(23, '1001', '', '1014', 1, 3, '26262', 'wydgdh', '', '', '', '8965423789655', '26363', '764666666', 'dyuvffd567', '8845533877269387', '2', '', '', '', '', '', '', '1', '', '', '1', '', '', 'New', 'ft udyog IDB big show', '2017-03-31 11:01:42', '0000-00-00 00:00:00'),
(24, '1001', '', '1015', 1, 3, 'jp', 'hoho@ogog.com', 'jo@gmail.com', 'jo@gmail', 'jp@mail.com', '55686886', 'hfufuf', '586565', 'gzgddjfo', '546586', '1', '', '', '', '', '', '1001', '1', '', '', '4', '', '10043', 'completed', '0', '2017-03-31 17:55:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry_through`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry_through` (
  `enquiry_through_id` int(11) NOT NULL AUTO_INCREMENT,
  `enquiry_through_name` varchar(255) NOT NULL,
  `enquiry_through_status` int(1) NOT NULL,
  PRIMARY KEY (`enquiry_through_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Enquiry through' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_enquiry_through`
--

INSERT INTO `tbl_enquiry_through` (`enquiry_through_id`, `enquiry_through_name`, `enquiry_through_status`) VALUES
(1, 'CAMPAIGN', 1),
(2, 'REFERENCE', 1),
(3, 'WEBSITE', 1),
(4, 'ADVERTISEMENT', 1),
(5, 'OTHERS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enq_process`
--

CREATE TABLE IF NOT EXISTS `tbl_enq_process` (
  `enq_process_id` int(255) NOT NULL AUTO_INCREMENT,
  `enq_no` varchar(255) NOT NULL,
  `enq_process_status` varchar(255) NOT NULL,
  `enq_process_description` text NOT NULL,
  `enq_task_id` varchar(255) NOT NULL,
  `enq_process_quotation_no` varchar(255) NOT NULL,
  `enq_process_appointment_id` varchar(255) NOT NULL,
  `enq_process_update_on` datetime NOT NULL,
  PRIMARY KEY (`enq_process_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='leads processing table' AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tbl_enq_process`
--

INSERT INTO `tbl_enq_process` (`enq_process_id`, `enq_no`, `enq_process_status`, `enq_process_description`, `enq_task_id`, `enq_process_quotation_no`, `enq_process_appointment_id`, `enq_process_update_on`) VALUES
(1, '1002', 'New Quotation', 'CFDVSD', '', '10001', '', '2017-03-26 11:50:52'),
(2, '1002', 'New Quotation', 'CFDVSD', '', '10002', '', '2017-03-26 11:51:33'),
(3, '1002', 'New Quotation', 'CFDVSD', '', '10001', '', '2017-03-26 11:52:37'),
(4, '1002', 'New Quotation', 'CFDVSD', '', '10002', '', '2017-03-26 11:59:48'),
(5, '1002', 'New Quotation', 'CFDVSD', '', '10003', '', '2017-03-26 12:00:28'),
(6, '1002', 'New Quotation', 'CFDVSD', '', '10004', '', '2017-03-26 13:43:17'),
(7, '1002', 'New Quotation', 'CFDVSD', '', '10005', '', '2017-03-26 15:11:11'),
(8, '1002', 'New Quotation', 'CFDVSD', '', '10006', '', '2017-03-26 15:58:32'),
(9, '123', 'New Quotation', '123', '', '10007', '', '2017-03-26 16:00:09'),
(10, 'enq no', 'New Quotation', '', '', '10008', '', '2017-03-26 16:02:44'),
(11, 'enq no', 'New Quotation', '', '', '10009', '', '2017-03-26 16:05:49'),
(12, 'enq no', 'New Quotation', '', '', '10010', '', '2017-03-26 16:22:58'),
(13, 'enq no', 'New Quotation', '', '', '10010', '', '2017-03-26 16:23:41'),
(14, '123', 'New Quotation', '123', '', '10011', '', '2017-03-26 17:23:06'),
(15, 'enq no', 'New Quotation', 'asdasdadasd', '', '10012', '', '2017-03-26 17:50:19'),
(16, '', 'Call With TL', 'CFDVSD', '0', '', '', '2017-03-27 11:52:23'),
(17, '', 'Call With TL', 'CFDVSD', '0', '', '', '2017-03-27 11:52:50'),
(18, '', 'Call With TL', 'CFDVSD', '0', '', '', '2017-03-27 11:52:59'),
(19, '1002', 'Call With TL', 'CFDVSD', '0', '', '', '2017-03-27 11:54:00'),
(20, '1002', 'Call With TL', 'CFDVSD', '0', '', '', '2017-03-27 11:55:55'),
(21, '1007', 'New Quotation', '10', '', '10013', '', '2017-03-27 13:44:47'),
(22, '1006', 'New Quotation', '10', '', '10014', '', '2017-03-27 13:51:11'),
(23, '1001', 'New Quotation', '', '', '1001', '', '2017-03-27 14:03:05'),
(24, '1001', 'New Quotation', '', '', '', '1', '2017-03-27 14:03:05'),
(25, '1001', 'New Quotation', '', '1', '', '', '2017-03-27 14:03:05'),
(26, '1001', 'New Quotation', '', '', '1001-1', '', '2017-03-27 14:03:05'),
(27, '1001', 'New Quotation', '', '', '10018', '', '2017-03-27 14:05:55'),
(34, '1006', 'New Quotation', '10', '', '10025', '', '2017-03-27 14:29:42'),
(35, '1006', 'New Quotation', '10', '', '10026', '', '2017-03-27 14:29:42'),
(38, 'enq no', 'New Quotation', '', '', '10029', '', '2017-03-27 16:10:25'),
(41, '', 'New Quotation', '', '', '10032', '', '2017-03-28 13:10:25'),
(42, '', 'New Quotation', '', '', '10032', '', '2017-03-28 13:10:25'),
(43, '1007', 'New Quotation', '10', '', '10033', '', '2017-03-28 23:41:47'),
(44, '', 'New Quotation', '', '', '10034', '', '2017-03-29 10:56:42'),
(45, '', 'New Quotation', '', '', '10034', '', '2017-03-29 11:13:55'),
(46, '1008', 'New Quotation', '2', '', '10035', '', '2017-03-29 11:50:22'),
(47, '', 'New Quotation', '', '', '10036', '', '2017-03-29 15:29:20'),
(48, '1009', 'New Quotation', '2', '', '10037', '', '2017-03-29 15:31:40'),
(49, '1006', 'New Quotation', '10', '', '10038', '', '2017-03-29 15:55:53'),
(50, '1011', 'New Quotation', '', '', '10039', '', '2017-03-29 16:13:16'),
(51, '1012', 'New Quotation', 'dagg', '', '10040', '', '2017-03-30 17:11:17'),
(52, '1002', 'New Quotation', 'enq_desc', '', '10041', '', '2017-03-31 09:15:14'),
(53, '1013', 'New Quotation', '2', '', '10042', '', '2017-03-31 11:20:05'),
(54, '1015', 'New Quotation', '', '', '10042', '', '2017-03-31 20:10:30'),
(55, '1015', 'New Quotation', '', '', '10043', '', '2017-03-31 20:10:36'),
(56, '1015', 'New Quotation', '', '', '10044', '', '2017-03-31 20:10:51'),
(57, '1013', 'New Quotation', '2', '', '10045', '', '2017-03-31 20:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_2kd`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_2kd` (
  `2kd_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `2kd_ac_r134a` varchar(255) NOT NULL,
  `2kd_ac_r404a` varchar(255) NOT NULL,
  `2kd_ac_r407c` varchar(255) NOT NULL,
  `2kd_capty_cfm` varchar(255) NOT NULL,
  `2kd_wrk_pressure` varchar(255) NOT NULL,
  `2kd_ac_in_out` varchar(255) NOT NULL,
  `2kd_rat_pwr` varchar(255) NOT NULL,
  `2kd_delvry_term` varchar(255) NOT NULL,
  `2kd_ec_220v` varchar(255) NOT NULL,
  `2kd_ec_415v` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `2kd_wrnt_doc` varchar(255) NOT NULL,
  `2kd_wrnt_doi` varchar(255) NOT NULL,
  `2kd_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `2kd_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `2kd_status` varchar(255) NOT NULL,
  PRIMARY KEY (`2kd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_oem_product_2kd`
--

INSERT INTO `tbl_oem_product_2kd` (`2kd_id`, `product_model`, `sap_code`, `description`, `2kd_ac_r134a`, `2kd_ac_r404a`, `2kd_ac_r407c`, `2kd_capty_cfm`, `2kd_wrk_pressure`, `2kd_ac_in_out`, `2kd_rat_pwr`, `2kd_delvry_term`, `2kd_ec_220v`, `2kd_ec_415v`, `weight`, `discount`, `2kd_wrnt_doc`, `2kd_wrnt_doi`, `2kd_created_on`, `2kd_updated_on`, `2kd_status`) VALUES
(1, '2KD002B', '', '', '30155	', '0', '0	', '20	', '7 - 16	', '1/2 BSP(F)	', '0.15	', 'Exstock	', 'yse', 'no', '0', '', '24', '30', '2017-03-29 06:41:12', '0000-00-00 00:00:00', ''),
(2, '2KD004B		', '', '', '37080	', '0', '0', '40	', '7 - 16	', '1/2  BSP(F)	', '0.20	', 'Exstock	', 'yes', 'no', '0', '', '24', '30', '2017-03-22 13:05:36', '0000-00-00 00:00:00', ''),
(3, '2KD006B			', '', '', '49400	', '0	', '0	', '60	', '7 - 16	', '1 BSP(F)	', '0.40	', 'Exstock	', 'yes', 'no', '0', '', '24', '30', '2017-03-22 13:07:28', '0000-00-00 00:00:00', ''),
(4, '2KD008B   ', '', '', '59565	', '0	', '0	', '80	', '7 - 16	', '1 BSP(F)	', '0.50	', 'Exstock', 'yes', 'no', '0', '', '24', '30', '2017-03-29 06:41:22', '0000-00-00 00:00:00', ''),
(5, '2KD010B           ', '', '', '71820', '0', '0', '100	', '7 - 16	', '1 BSP(F)	', '0.60	', 'Exstock 	', 'yes', 'no', '0', '', '24', '30', '2017-03-29 06:41:27', '0000-00-00 00:00:00', ''),
(6, '2KD015B', '', '', '95157	', '0		', '0	', '150	', '7 - 16	', '1 1/2 BSP(F)	', '0.90', 'Exstock 		', 'no', 'yes', '0', '', '24', '30', '2017-03-22 13:14:11', '0000-00-00 00:00:00', ''),
(7, '2KD020B', '', '', '98100		', '0	', '0', '200	', '7 - 16	', '1 1/2 BSP(F)	', '1.20	', 'Exstock	', 'no', 'yes', '0', '', '24', '30', '2017-03-29 06:41:37', '0000-00-00 00:00:00', ''),
(8, '2KD025B', '', '', '135000	', '0	', '0	', '250	', '7 - 16	', '2 BSP(F)	', '1.40	', 'Exstock 		', 'no', 'yes', '0', '', '24', '30', '2017-03-22 13:28:41', '0000-00-00 00:00:00', ''),
(11, '2KD030B', '', '', '145,300', '0', '0', '300', '7-16', ' 2 BSP(F)', '1.60', 'Exstock ', '0', 'yes', '0', '', '24', '30', '2017-03-22 13:32:17', '0000-00-00 00:00:00', ''),
(12, '2KD030B	', '', '', '145300	', '0		', '0', '300', '7 - 16	', '2 BSP(F)	', '1.60			', 'Exstock ', 'no', 'yes', '0', '', '24', '30', '2017-03-22 13:23:44', '0000-00-00 00:00:00', ''),
(13, '2KD+250E/F ', '', '', 'no', '750000 ', '750000 ', '2500 ', '7-12.5', '6â€ NB ASME  Flg ', ' 11.00(E)/9.60(F)', '4-6 Weeks', '0', 'yes', '0', '', '24', '30', '2017-03-22 13:24:35', '0000-00-00 00:00:00', ''),
(14, '2KD+125E/F ', '', '', 'no', '410000 ', '410000 ', '1250 ', '7-16 ', '4â€NB ASME Flg ', '5.70(E)/4.80(F)  ', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-03-22 13:26:24', '0000-00-00 00:00:00', ''),
(15, '2KD+040B	', '', '', '200200	', '0	', '0	', '400	', '7 - 16	', '2 BSP(F)', '1.90	', 'Exstock /  1 week		', 'no', 'yes', '0', '', '24', '30', '2017-03-22 13:26:27', '0000-00-00 00:00:00', ''),
(16, '2KD+100E/F ', '', '', 'no', '400000 ', '400000 ', '1000  ', '7-16 ', '3â€ NB ASME Flg ', '5.00(E) / 4.10(F)', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-03-22 13:27:34', '0000-00-00 00:00:00', ''),
(17, '2KD+075E/F ', '', '', 'no', '300000 ', '300000 ', '750  ', '7-16 ', '3â€ NB ASME Flg ', '3.80(E) / 3.00(F)', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-03-22 13:30:08', '0000-00-00 00:00:00', ''),
(18, '2KD+060B ', '', '', '246900', 'no', 'no', ' 600 ', '7-16 ', '2 BSP(F) ', '2.80 ', 'Exstock /  1 week', '0', 'yes', '0', '', '24', '30', '2017-03-22 13:33:04', '0000-00-00 00:00:00', ''),
(19, '2KD030B	', '', '', '145300	', '0', '0		', '300', '7 - 16	', '2 BSP(F)	', '1.60	', 'Exstock 		', 'no', 'yes', '0', '', '24', '30', '2017-03-22 13:35:59', '0000-00-00 00:00:00', ''),
(20, '2KD+040B		', '', '', '200200	', '-', '-	', '400', '7 - 16	', '2 BSP(F)', '1.90	', 'Exstock /  1 week		', 'no', 'yes', '0', '', '24', '30', '2017-03-22 13:37:30', '0000-00-00 00:00:00', ''),
(21, '2KD+050B	', '', '', '240300', '0	', '0	', '500	', '7 - 16	', '2 BSP(F)	', '2.30	', 'Exstock /  1 week		', 'no', 'yes', '0', '', '24', '30', '2017-03-22 13:38:55', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_2kd7`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_2kd7` (
  `kd7_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `kd7_acr134a` varchar(255) NOT NULL,
  `kd7_capcty` varchar(255) NOT NULL,
  `kd7_wrkpressur` varchar(255) NOT NULL,
  `kd7_ac_inout` varchar(255) NOT NULL,
  `kd7_rate_pwr` varchar(255) NOT NULL,
  `kd7_delvr` varchar(255) NOT NULL,
  `kd7_elec_230v` varchar(255) NOT NULL,
  `kd7_elec_415v` varchar(255) NOT NULL,
  `kd7_warenty_doc` varchar(255) NOT NULL,
  `kd7_warenty_doi` varchar(255) NOT NULL,
  `kd7_weigt` varchar(255) NOT NULL,
  `kd7_air_inlet` varchar(255) NOT NULL,
  `kd7_dew_pt` varchar(255) NOT NULL,
  `kd7_ambinet` varchar(255) NOT NULL,
  `kd7_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kd7_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kad7_status` varchar(255) NOT NULL,
  PRIMARY KEY (`kd7_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_oem_product_2kd7`
--

INSERT INTO `tbl_oem_product_2kd7` (`kd7_id`, `product_model`, `sap_code`, `description`, `kd7_acr134a`, `kd7_capcty`, `kd7_wrkpressur`, `kd7_ac_inout`, `kd7_rate_pwr`, `kd7_delvr`, `kd7_elec_230v`, `kd7_elec_415v`, `kd7_warenty_doc`, `kd7_warenty_doi`, `kd7_weigt`, `kd7_air_inlet`, `kd7_dew_pt`, `kd7_ambinet`, `kd7_created_on`, `kd7_updated_on`, `kad7_status`) VALUES
(4, '2KD7004B ', '', '', '51400 ', '40 ', '40 â€“ 42 ', 'Â½ BSP', ' 0.36', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 12:58:37', '0000-00-00 00:00:00', ''),
(5, '2KD7006B ', '', '', '69000 ', '60', '40 â€“ 42 ', 'Â½ BSP', ' 0.36', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 12:59:41', '0000-00-00 00:00:00', ''),
(6, '2KD7008B ', '', '', '90200 ', '80 ', '40 â€“ 42', ' 1 BSP ', '0.48', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:00:42', '0000-00-00 00:00:00', ''),
(7, '2KD7010B ', '', '', '102100 ', '100 ', '40 â€“ 42 ', ' 1 BSP ', '0.60', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:02:04', '0000-00-00 00:00:00', ''),
(8, '2KD7015B ', '', '', '108700 ', '150 ', '40 â€“ 42 ', ' 1 BSP ', ' 0.68', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:02:53', '0000-00-00 00:00:00', ''),
(9, '2KD7020B ', '', '', '135900 ', '200 ', '40 â€“ 42 ', ' 1 Â½ BSP ', '1.00', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:04:03', '0000-00-00 00:00:00', ''),
(10, '2KD7025B ', '', '', '163300 ', '250  ', '40 â€“ 42 ', ' 1 Â½ BSP ', '1.40', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:04:55', '0000-00-00 00:00:00', ''),
(11, '2KD7030B ', '', '', '170000 ', '300 ', '40 â€“ 42 ', ' 1 Â½ BSP ', '1.40', '  20 days', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:06:05', '0000-00-00 00:00:00', ''),
(12, '2KD7040B ', '', '', '264200 ', '400 ', '40 â€“ 42 ', ' 2 BSP ', '1.80', '  20 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:07:25', '0000-00-00 00:00:00', ''),
(13, '2KD7050B ', '', '', '301600 ', '500 ', '40 â€“ 42 ', ' 2 NB flg ', '2.20 ', ' 25 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:08:37', '0000-00-00 00:00:00', ''),
(14, '2KD7060B ', '', '', '342000 ', '600 ', '40 â€“ 42 ', ' 2 NB flg ', '2.60 ', ' 25 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:09:52', '0000-00-00 00:00:00', ''),
(15, '2KD7075B ', '', '', '390000 ', '750', '40 â€“ 42 ', ' 2 NB flg ', '3.30 ', '30 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:11:04', '0000-00-00 00:00:00', ''),
(16, '2KD7100B ', '', '', '470000 ', '1000', '40 â€“ 42 ', ' 2 NB flg ', ' 4.20', '30 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-22 13:11:55', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_2kw`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_2kw` (
  `2kw_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `2kw_air_cooled_r134` varchar(255) NOT NULL,
  `2kw_capacity` varchar(255) NOT NULL,
  `2kw_working_pressure` varchar(255) NOT NULL,
  `2kw_air_connection_in_out` varchar(255) NOT NULL,
  `2kw_power_consumption` varchar(255) NOT NULL,
  `2kw_delivery_terms` varchar(255) NOT NULL,
  `2kw_electric_230v` varchar(255) NOT NULL,
  `2kw_electric_415v` varchar(255) NOT NULL,
  `2kw_warrenet_doc` varchar(255) NOT NULL,
  `2kw_warrenty_doi` varchar(255) NOT NULL,
  `2kw_weight` varchar(255) NOT NULL,
  `2kw_packing_cost` varchar(255) NOT NULL,
  `2kw_discount` varchar(255) NOT NULL,
  `2kw_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `2kw_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `2kw_status` varchar(255) NOT NULL,
  PRIMARY KEY (`2kw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_oem_product_2kw`
--

INSERT INTO `tbl_oem_product_2kw` (`2kw_id`, `product_model`, `sap_code`, `description`, `2kw_air_cooled_r134`, `2kw_capacity`, `2kw_working_pressure`, `2kw_air_connection_in_out`, `2kw_power_consumption`, `2kw_delivery_terms`, `2kw_electric_230v`, `2kw_electric_415v`, `2kw_warrenet_doc`, `2kw_warrenty_doi`, `2kw_weight`, `2kw_packing_cost`, `2kw_discount`, `2kw_created_on`, `2kw_updated_on`, `2kw_status`) VALUES
(1, '2KW020B', '', '', '37500    ', '20', '16', '	Â½ BSP			', '0.21', '   Exstock', 'yes', 'no', '24', '30', '0', '', '', '2017-03-21 15:13:50', '0000-00-00 00:00:00', ''),
(2, '2KW040B', '', '', '48800', '40', ' 16', 'Â½ BSP			', '0.375', 'Exstock', 'yes', 'no', '24', '30', '0', '', '', '2017-03-21 15:13:55', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_acc`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_acc` (
  `acc_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `acc_wthout_vertax` varchar(255) NOT NULL,
  `acc_capacity` varchar(255) NOT NULL,
  `acc_wrk_pressure` varchar(255) NOT NULL,
  `acc_ac_bsp` varchar(255) NOT NULL,
  `acc_rate_power` varchar(255) NOT NULL,
  `acc_ec_220v` varchar(255) NOT NULL,
  `acc_ec_415v` varchar(255) NOT NULL,
  `acc_warenty_doc` varchar(255) NOT NULL,
  `acc_warenty_doi` varchar(255) NOT NULL,
  `acc_delivery` varchar(255) NOT NULL,
  `acc_weight` varchar(255) NOT NULL,
  `acc_product_cost` varchar(255) NOT NULL,
  `acc_discount` varchar(255) NOT NULL,
  `acc_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `acc_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_oem_product_acc`
--

INSERT INTO `tbl_oem_product_acc` (`acc_id`, `product_model`, `sap_code`, `description`, `acc_wthout_vertax`, `acc_capacity`, `acc_wrk_pressure`, `acc_ac_bsp`, `acc_rate_power`, `acc_ec_220v`, `acc_ec_415v`, `acc_warenty_doc`, `acc_warenty_doi`, `acc_delivery`, `acc_weight`, `acc_product_cost`, `acc_discount`, `acc_changed_on`, `acc_updated_on`, `status`) VALUES
(1, 'ACC003A         ', '', '', '8700	', '35	', '16	', '1/2', '0.036', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-03-31 05:38:04', '0000-00-00 00:00:00', ''),
(2, 'ACC005A         ', '', '', '14100	', '50	', '16	', '3/4	', '0.11	', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-03-31 05:38:26', '0000-00-00 00:00:00', ''),
(3, 'ACC010A   ', '', '', '18200	', '100	', '16	 ', '1 1/2	', '0.24			', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-03-31 05:38:54', '0000-00-00 00:00:00', ''),
(4, 'ACC015A', '', '', '20000			 	', '150	', '16	', ' 1 1/2	', '0.24			', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-03-22 11:04:16', '0000-00-00 00:00:00', ''),
(5, 'ACC020A     ', '', '', '25800				 	', '200	', '16	', '2 NB Flg	', '0.24			', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-03-31 05:39:25', '0000-00-00 00:00:00', ''),
(6, 'ACC025A            ', '', '', '28600				 	', '250	', '16	', '2  NB Flg	', '0.24			', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-03-31 05:39:45', '0000-00-00 00:00:00', ''),
(7, 'ACC030A                ', '', '', '34400		 	', '300		', '16', '2  NB Flg	', '0.24			', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-03-31 05:40:03', '0000-00-00 00:00:00', ''),
(8, 'ACC040A                ', '', '', '37300			 	', '400	', '16	', '2  NB Flg	', '0.55	 		', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-03-31 05:40:24', '0000-00-00 00:00:00', ''),
(9, 'ACC060A        ', '', '', '49400				 	', '600		', '16	', '3 NB Flg	', '0.75	 ', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-03-31 05:40:53', '0000-00-00 00:00:00', ''),
(10, 'ACC075A    ', '', '', '65900	', '750	 	', '16			', '3 NB Flg	', '1.5', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-03-31 05:41:10', '0000-00-00 00:00:00', ''),
(11, 'ACC100A   ', '', '', '85800	', '1000		', '16			', '4 NB Flg	', '1.5', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-03-31 05:41:28', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_at`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_at` (
  `at_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `at_capacity` varchar(255) NOT NULL,
  `at_mv_bar` varchar(255) NOT NULL,
  `at_mv_accessories` varchar(255) NOT NULL,
  `at_shell_thick` varchar(255) NOT NULL,
  `at_in_out_connection` varchar(255) NOT NULL,
  `at_delevery_trm` varchar(255) NOT NULL,
  `at_hand_hole` varchar(255) NOT NULL,
  `at_warenty_doc` varchar(255) NOT NULL,
  `at_warenty_doi` varchar(255) NOT NULL,
  `at_moc` varchar(255) NOT NULL,
  `at_weight` varchar(255) NOT NULL,
  `at_product_cost` varchar(255) NOT NULL,
  `at_discount` varchar(255) NOT NULL,
  `at_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `at_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_oem_product_at`
--

INSERT INTO `tbl_oem_product_at` (`at_id`, `product_model`, `sap_code`, `description`, `at_capacity`, `at_mv_bar`, `at_mv_accessories`, `at_shell_thick`, `at_in_out_connection`, `at_delevery_trm`, `at_hand_hole`, `at_warenty_doc`, `at_warenty_doi`, `at_moc`, `at_weight`, `at_product_cost`, `at_discount`, `at_changed_on`, `at_updated_on`, `status`) VALUES
(1, 'AT050', '', '', '500 ltrs	', '16200', '3000    ', '5/6	', '1 BSP', 'Ex stock	', 'Hand Hole', '12', '18', 'IS 2062 / IS 2825', '0', '', '', '2017-03-22 11:44:14', '0000-00-00 00:00:00', ''),
(2, 'AT100', '', '', '1000 ltrs', '28980', '3000	', '6/6', '1 1/2 BSP', 'Ex stock	', 'Hand Hole', '12', '18', 'IS 2062 / IS 2825', '0', '', '', '2017-03-22 11:43:16', '0000-00-00 00:00:00', ''),
(3, 'AT100', '', '', '2000 ltrs', '55800', '3000	', '8/8', '2 BSP', 'Ex stock	', 'Man hole  475x425mm', '12', '18', 'IS 2062 / IS 2825', '0', '', '', '2017-03-22 11:44:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_cht_nexgen_hh`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_cht_nexgen_hh` (
  `cht_hh_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cht_hh_high_temp_air_cooled_a` varchar(255) NOT NULL,
  `cht_hh_high_temp_water_cooled_b` varchar(255) NOT NULL,
  `cht_hh_capacity` varchar(255) NOT NULL,
  `cht_hh_heat_load_kcal_h` varchar(255) NOT NULL,
  `cht_hh_heat_load_kw` varchar(255) NOT NULL,
  `cht_hh_water_pump_flow_rate_lpm` varchar(255) NOT NULL,
  `cht_hh_water_pump_absorbed_pw_kw` varchar(255) NOT NULL,
  `cht_hh_cooling_fan` varchar(255) NOT NULL,
  `cht_hh_input_output_water` varchar(255) NOT NULL,
  `cht_hh_delivery_terms` varchar(255) NOT NULL,
  `cht_hh_warranty_doc` varchar(255) NOT NULL,
  `cht_hh_warranty_doi` varchar(255) NOT NULL,
  `cht_hh_weight` varchar(255) NOT NULL,
  `cht_hh_packing_cost` varchar(255) NOT NULL,
  `cht_hh_discount` varchar(255) NOT NULL,
  `cht_hh_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cht_hh_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cht_hh_status` varchar(255) NOT NULL,
  PRIMARY KEY (`cht_hh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_oem_product_cht_nexgen_hh`
--

INSERT INTO `tbl_oem_product_cht_nexgen_hh` (`cht_hh_id`, `product_model`, `sap_code`, `description`, `cht_hh_high_temp_air_cooled_a`, `cht_hh_high_temp_water_cooled_b`, `cht_hh_capacity`, `cht_hh_heat_load_kcal_h`, `cht_hh_heat_load_kw`, `cht_hh_water_pump_flow_rate_lpm`, `cht_hh_water_pump_absorbed_pw_kw`, `cht_hh_cooling_fan`, `cht_hh_input_output_water`, `cht_hh_delivery_terms`, `cht_hh_warranty_doc`, `cht_hh_warranty_doi`, `cht_hh_weight`, `cht_hh_packing_cost`, `cht_hh_discount`, `cht_hh_created_on`, `cht_hh_updated_on`, `cht_hh_status`) VALUES
(1, 'CHT100HH', '', '', '450000', '450000', '10', '30000', '35', '250', '3.7', '450 X 4', '2', 'Exstock', '24', '30', '0', '', '', '2017-03-22 11:11:31', '0000-00-00 00:00:00', ''),
(2, 'CHT150HH', '', '', '570000', '570000', '15', '45000', '52.3', '250', '3.7', '450 X 6', '2', 'Exstock', '24', '30', '0', '', '', '2017-03-22 11:13:28', '0000-00-00 00:00:00', ''),
(3, 'CHT200HH', '', '', '740000', '740000', '20', '60000', '70', '450', '5.5', '450 X 8', '2', 'Exstock', '24', '30', '0', '', '', '2017-03-22 11:14:59', '0000-00-00 00:00:00', ''),
(4, 'CHT300HH', '', '', '1100000', '1100000', '30', '90000', '104.6', '450', '5.5', '1000 X 2', '2', 'Exstock', '24', '30', '0', '', '', '2017-03-22 11:16:56', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_cht_nexgen_lh`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_cht_nexgen_lh` (
  `cht_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cht_low_temp_air_cooled_a` varchar(255) NOT NULL,
  `cht_low_temp_water_cooled_b` varchar(255) NOT NULL,
  `cht_capacity` varchar(255) NOT NULL,
  `cht_heat_load_kcal_h` varchar(255) NOT NULL,
  `cht_heat_load_kw` varchar(255) NOT NULL,
  `cht_water_pump_flow_rate_lpm` varchar(255) NOT NULL,
  `cht_water_pump_absobed_pow_kw` varchar(255) NOT NULL,
  `cht_cooling_fan` varchar(255) NOT NULL,
  `cht_input_output_water` varchar(255) NOT NULL,
  `cht_delivery_terms` varchar(255) NOT NULL,
  `cht_warranty_doc` varchar(255) NOT NULL,
  `cht_warranty_doi` varchar(255) NOT NULL,
  `cht_weight` varchar(255) NOT NULL,
  `cht_packing_cost` varchar(255) NOT NULL,
  `cht_discount` varchar(255) NOT NULL,
  `cht_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cht_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cht_status` varchar(255) NOT NULL,
  PRIMARY KEY (`cht_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_oem_product_cht_nexgen_lh`
--

INSERT INTO `tbl_oem_product_cht_nexgen_lh` (`cht_id`, `product_model`, `sap_code`, `description`, `cht_low_temp_air_cooled_a`, `cht_low_temp_water_cooled_b`, `cht_capacity`, `cht_heat_load_kcal_h`, `cht_heat_load_kw`, `cht_water_pump_flow_rate_lpm`, `cht_water_pump_absobed_pow_kw`, `cht_cooling_fan`, `cht_input_output_water`, `cht_delivery_terms`, `cht_warranty_doc`, `cht_warranty_doi`, `cht_weight`, `cht_packing_cost`, `cht_discount`, `cht_created_on`, `cht_updated_on`, `cht_status`) VALUES
(6, 'CHT050LH', '', '', '240000', '240000', '5', '15000', '17.5', '100', '1.5', '450 X 2', '1 1/2 ,1 1/4', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:46:06', '0000-00-00 00:00:00', ''),
(7, 'CHT075LH', '', '', '345000', '345000', '7.5', '22500', '19.5', '200', '2.2', '450 X 3', '1 1/2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:49:07', '0000-00-00 00:00:00', ''),
(8, 'CHT100LH', '', '', '480000', '480000', '10', '30000', '35', '250', '3.7', '450 X 4', '2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:52:47', '0000-00-00 00:00:00', ''),
(9, 'CHT150LH', '', '', '600000', '600000', '15', '45000', '52.3', '250', '3.7', '450 X 6', '2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:54:11', '0000-00-00 00:00:00', ''),
(10, 'CHT200LH', '', '', '775000', '775000', '20', '60000', '70', '450', '5.5', '450 X 8', '2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:56:58', '0000-00-00 00:00:00', ''),
(11, 'CHT300LH', '', '', '1150000', '1150000', '30	', '90000', '104.6', '450', '5.5', '1000 X 2', '2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:58:56', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_dct`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_dct` (
  `dct_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dct_price` varchar(255) NOT NULL,
  `dct_motor_power` varchar(255) NOT NULL,
  `dct_fan_qty` varchar(255) NOT NULL,
  `dct_header_pipe` varchar(255) NOT NULL,
  `dct_fan_dia` varchar(255) NOT NULL,
  `dct_delivery_trm` varchar(255) NOT NULL,
  `dct_warenty_doc` varchar(255) NOT NULL,
  `dct_warenty_doi` varchar(255) NOT NULL,
  `dct_weight` varchar(255) NOT NULL,
  `dct_packing_cost` varchar(255) NOT NULL,
  `dct_discount` varchar(255) NOT NULL,
  `dct_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dct_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`dct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_oem_product_dct`
--

INSERT INTO `tbl_oem_product_dct` (`dct_id`, `product_model`, `sap_code`, `description`, `dct_price`, `dct_motor_power`, `dct_fan_qty`, `dct_header_pipe`, `dct_fan_dia`, `dct_delivery_trm`, `dct_warenty_doc`, `dct_warenty_doi`, `dct_weight`, `dct_packing_cost`, `dct_discount`, `dct_changed_on`, `dct_update_on`, `status`) VALUES
(1, 'DCT040    ', '', '', '360500	', '3	', '2	', '3/3 NB	', '1060', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:54:14', '0000-00-00 00:00:00', ''),
(2, 'DCT050    ', '', '', '449100	', '5', '2   ', '3/3  NB	', '1060', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:51:40', '0000-00-00 00:00:00', ''),
(3, 'DCT060    ', '', '', '474900', '5	', '2	', '3/3  NB	', '1060', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:52:00', '0000-00-00 00:00:00', ''),
(4, 'DCT080    ', '', '', '633500	', '5', '2	', '3/3  NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:45:12', '0000-00-00 00:00:00', ''),
(8, 'DCT100	', '', '', '792100	', '7.5	', '2	', '3/3  NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-22 11:50:50', '0000-00-00 00:00:00', ''),
(9, 'DCT120', '', '', '906400', '7.5	', '2	', '3/3 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-22 11:52:18', '0000-00-00 00:00:00', ''),
(10, 'DCT140    ', '', '', '918800	', '7.5	', '2	', '3/3 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:45:36', '0000-00-00 00:00:00', ''),
(11, 'DCT160', '', '', '1049600	', '7.5	', '3	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-22 11:55:28', '0000-00-00 00:00:00', ''),
(12, 'DCT180    ', '', '', '1181500', '7.5', '3	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:47:43', '0000-00-00 00:00:00', ''),
(13, 'DCT200    ', '', '', '1277600	', '7.5	', '3	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:48:05', '0000-00-00 00:00:00', ''),
(15, 'DCT220    ', '', '', '1444100', '7.5	', '4	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:48:21', '0000-00-00 00:00:00', ''),
(16, 'DCT240    ', '', '', '1573900', '7.5	', '4	', '4/4 NB', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:48:46', '0000-00-00 00:00:00', ''),
(17, 'DCT280    ', '', '', '1836500	', '10	', '4	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:53:32', '0000-00-00 00:00:00', ''),
(18, 'DCT320', '', '', '2098200', '10	', '5	', '4/4NB', '1200', '4 weeks', '12', '18', '0', '', '', '2017-03-31 05:52:59', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_ect`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_ect` (
  `ect_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ect_coil_2_rows` varchar(255) NOT NULL,
  `ect_motor_hp` varchar(255) NOT NULL,
  `ect_in_out_bsp` varchar(255) NOT NULL,
  `ect_delivery_terms` varchar(255) NOT NULL,
  `ect_warnty_doc` varchar(255) NOT NULL,
  `ect_warnty_doi` varchar(255) NOT NULL,
  `ect_outlet_temp` varchar(255) NOT NULL,
  `ect_weight` varchar(255) NOT NULL,
  `ect_packing_cost` varchar(255) NOT NULL,
  `ect_discount` varchar(255) NOT NULL,
  `ect_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ect_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`ect_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_oem_product_ect`
--

INSERT INTO `tbl_oem_product_ect` (`ect_id`, `product_model`, `sap_code`, `description`, `ect_coil_2_rows`, `ect_motor_hp`, `ect_in_out_bsp`, `ect_delivery_terms`, `ect_warnty_doc`, `ect_warnty_doi`, `ect_outlet_temp`, `ect_weight`, `ect_packing_cost`, `ect_discount`, `ect_created_on`, `ect_updated_on`, `status`) VALUES
(2, 'ECT010B', '', '', '115000', '0.5/1440	', '2', '30 Days', '12', '18', '', '0', '', '', '2017-03-21 14:54:31', '0000-00-00 00:00:00', ''),
(3, 'ECT020B	', '', '', '210300', '0.5/1440', '21/2', '30 Days', '12', '18', '', '0', '', '', '2017-03-21 14:57:33', '0000-00-00 00:00:00', ''),
(4, 'ECT040B', '', '', '356000', '2/950', '3', '30 Days', '12', '18', '', '0', '', '', '2017-03-21 14:57:40', '0000-00-00 00:00:00', ''),
(5, 'ECT060B', '', '', '380300', '3/950', '3', '30 Days', '12', '18', '', '0', '', '', '2017-03-21 14:57:46', '0000-00-00 00:00:00', ''),
(6, 'ECT100B', '', '', '555600', '5/950', '5', '45 Days', '12', '18', '', '0', '', '', '2017-03-21 14:57:51', '0000-00-00 00:00:00', ''),
(7, 'ECT200B', '', '', '811300', '10/950', '8', '45 Days', '12', '18', '', '0', '', '', '2017-03-21 14:57:55', '0000-00-00 00:00:00', ''),
(8, 'ECT300B', '', '', '1225500    ', '0', '0', '45 Days', '12', '18', '', '0', '', '', '2017-03-21 14:58:02', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_gas`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_gas` (
  `gas_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gas_model_variance` varchar(255) NOT NULL,
  `gas_price` varchar(255) NOT NULL,
  `gas_total_connect_powr` varchar(255) NOT NULL,
  `gas_water_in_out` varchar(255) NOT NULL,
  `gas_fan_dia` varchar(255) NOT NULL,
  `gas_motor_qty` varchar(255) NOT NULL,
  `gas_header_pip_flg` varchar(255) NOT NULL,
  `gas_delivery_trm` varchar(255) NOT NULL,
  `gas_config` varchar(255) NOT NULL,
  `gas_warenty_doc` varchar(255) NOT NULL,
  `gas_warenty_doi` varchar(255) NOT NULL,
  `gas_outlet_temp` varchar(255) NOT NULL,
  `gas_weight` varchar(255) NOT NULL,
  `gas_product_cost` varchar(255) NOT NULL,
  `gas_discount` varchar(255) NOT NULL,
  `gas_changed_on` varchar(255) NOT NULL,
  `gas_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`gas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_oem_product_gas`
--

INSERT INTO `tbl_oem_product_gas` (`gas_id`, `product_model`, `sap_code`, `description`, `gas_model_variance`, `gas_price`, `gas_total_connect_powr`, `gas_water_in_out`, `gas_fan_dia`, `gas_motor_qty`, `gas_header_pip_flg`, `gas_delivery_trm`, `gas_config`, `gas_warenty_doc`, `gas_warenty_doi`, `gas_outlet_temp`, `gas_weight`, `gas_product_cost`, `gas_discount`, `gas_changed_on`, `gas_updated_on`, `status`) VALUES
(1, 'GAS0451', '', '', '1 hp motor', '115400', '1', '3/3', '1060', '1', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:01:24', ''),
(2, 'GAS0452', '', '', '2 hp motor', '123700', '2', '3/3', '1060', '1', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:23:56', ''),
(3, 'GAS0581', '', '', '1 hp motor', '166900', '2', '3/3', '750', '2', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:25:30', ''),
(4, 'GAS0582', '', '', '2 hp motor', '182400', '4', '3/3', '750', '2', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:26:29', ''),
(5, 'GAS0901', '', '', '1 hp motor', '221500', '2', '3/3', '1060', '2', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:29:38', ''),
(6, 'GAS0902', '', '', '2 hp motor', '236900', '4', '3/3', '1060', '2', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:29:48', ''),
(7, 'GAS1451', '', '', '1 hp motor', '340000', '3', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:28:55', ''),
(8, 'GAS1452', '', '', '2 hp motor', '370800', '6', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:30:51', ''),
(9, 'GAS1601', '', '', '1 hp motor', '406900', '3', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:31:40', ''),
(10, 'GAS1602', '', '', '2 hp motor', '417200', '6', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:32:16', ''),
(11, 'GAS1751', '', '', '1 hp motor', '448100', '4', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:32:56', ''),
(12, 'GAS1752', '', '', '2 hp motor', '506800', '8', '3/3', '1060', '4', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:33:39', ''),
(13, 'GAS2252', '', '', '2 hp motor', '460500', '8', '3/3', '1060', '4', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:34:10', ''),
(14, 'GAS2253', '', '', '3 hp motor', '489300', '12', '3/3', '1060', '4', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:34:48', ''),
(15, 'GAS2752', '', '', '2 hp motor', '602600', '10', '3/3', '1060', '5', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:35:39', ''),
(16, 'GAS2753', '', '', '3 hp motor', '613900', '15', '3/3', '1060', '5', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:36:10', ''),
(17, 'GAS3005', '', '', '5 hp motor', '762200', '15', '3/3', '1400', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:36:49', ''),
(18, 'GAS3505', '', '', '5 hp motor', '1004300', '0', '3/3', '1400', '4', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-22 12:37:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_gct_eco`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_gct_eco` (
  `gct_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gct_low_price` varchar(255) NOT NULL,
  `gct_high_price` varchar(255) NOT NULL,
  `gct_recommended_erection_charges` varchar(255) NOT NULL,
  `gct_capacity` varchar(255) NOT NULL,
  `gct_motor` varchar(255) NOT NULL,
  `gct_power_consumed` varchar(255) NOT NULL,
  `gct_water_flow_rate` varchar(255) NOT NULL,
  `gct_in_out_size` varchar(255) NOT NULL,
  `gct_basin_holding_capacity` varchar(255) NOT NULL,
  `gct_delivery_terms` varchar(255) NOT NULL,
  `gct_wrnty_doc` varchar(255) NOT NULL,
  `gct_wrnty_doi` varchar(255) NOT NULL,
  `gct_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gct_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gct_weight` varchar(255) NOT NULL,
  `gct_packing_cost` varchar(255) NOT NULL,
  `gct_discount` varchar(255) NOT NULL,
  `gct_status` varchar(255) NOT NULL,
  PRIMARY KEY (`gct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_oem_product_gct_eco`
--

INSERT INTO `tbl_oem_product_gct_eco` (`gct_id`, `product_model`, `sap_code`, `description`, `gct_low_price`, `gct_high_price`, `gct_recommended_erection_charges`, `gct_capacity`, `gct_motor`, `gct_power_consumed`, `gct_water_flow_rate`, `gct_in_out_size`, `gct_basin_holding_capacity`, `gct_delivery_terms`, `gct_wrnty_doc`, `gct_wrnty_doi`, `gct_created_on`, `gct_updated_on`, `gct_weight`, `gct_packing_cost`, `gct_discount`, `gct_status`) VALUES
(1, 'GCT+010	', '', '', '16600        ', 'nil', '1500    ', '10	', '0.18/1000	', '0.17', '7.80	', '1 Â½ /1 Â½	', '150', 'Exstock', '12', 'nil', '2017-03-22 13:54:00', '0000-00-00 00:00:00', 'nil', '', '', ''),
(2, 'GCT+015', '', '', '20200	', '0', '1500	', '15	', '0.37/910	', '0.34	', '11.70	', '2 /2	', '200', 'Exstock', '12', '0', '2017-03-22 12:18:57', '0000-00-00 00:00:00', '0', '', '', ''),
(3, 'GCT+020', '', '', '22000		', '0', '1500	', '20	', '0.37/910	', '0.34', '15.60', '2/2	', '200', 'Exstock', '12', '0', '2017-03-22 12:42:15', '0000-00-00 00:00:00', '0', '', '', ''),
(4, 'GCT+030	', '', '', '32000		', '0', '1500	', '30	', '0.75/910	', '0.67', '23.40', '2 1/2 /3', '400', 'Exstock', '12', '0', '2017-03-22 12:43:48', '0000-00-00 00:00:00', '0', '', '', ''),
(5, 'GCT+040	', '', '', '35000		', '0', '2000	', '40	', '0.75/910	', '0.67	', '31.20	', '3/3	', '400', 'Exstock', '12', '0', '2017-03-22 12:44:54', '0000-00-00 00:00:00', '0', '', '', ''),
(6, 'GCT+050	', '', '', '48000		', '0', '2000	', '50	', '0.75/910	', '0.67		', '39.00', '3 /3	', '850', 'Exstock', '12', '0', '2017-03-22 12:53:49', '0000-00-00 00:00:00', '0', '', '', ''),
(7, 'GCT+060', '', '', '52000		', '0', '2000	', '60', '1.1/920	', '1.01	', '46.80	', '3 /3	', '850', 'Exstock', '12', '0', '2017-03-22 12:55:01', '0000-00-00 00:00:00', '0', '', '', ''),
(8, 'GCT+080	', '', '', '65000		', '0', '3000	', '80	', '1.5/925	', '1.34	', '62.40	', '4/4	', '1100', 'Exstock', '12', '0', '2017-03-22 12:55:59', '0000-00-00 00:00:00', '0', '', '', ''),
(9, 'GCT100L/H	', '', '', '90510	', '109620		', '0', '100	', '3.7/960	    ', ' 3.36', '78.00', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-03-22 12:59:15', '0000-00-00 00:00:00', '0', '', '', ''),
(10, 'GCT125L/H	', '', '', '99,010	', '118,120		', '0', '125', '3.7/960	', '3.36	', '97.50	', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-03-22 13:00:31', '0000-00-00 00:00:00', '0', '', '', ''),
(11, 'GCT150L/H	', '', '', '103860', '122970		', '0', '150	', '3.7/960	', '3.36	', '117.00	', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-03-22 13:01:55', '0000-00-00 00:00:00', '0', '', '', ''),
(12, 'GCT200L/H   ', '', '', '151450', '175330        ', '0', '200   ', '5.5/710   ', '5.04', '156.00', '6/6', '1550', 'Exstock/1week', '12', '0', '2017-03-22 13:04:30', '0000-00-00 00:00:00', '0', '', '', ''),
(13, 'GCT250L/H	', '', '', '159180	', '183070		', '0', '250	', '7.5/710', '6.71	', '195.00	', '6/6	', '3200', 'Exstock/1week', '12', '0', '2017-03-22 13:05:34', '0000-00-00 00:00:00', '0', '', '', ''),
(14, 'GCT300L/H', '', '', '236790	', '279790		', '0', '300	', '9.3/570	', '8.39	', '234.00', '8 /8	', '3200', 'Exstock/1week', '12', '0', '2017-03-22 13:06:47', '0000-00-00 00:00:00', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_gzf`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_gzf` (
  `gzf_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gzf_grade` varchar(255) NOT NULL,
  `gzf_price` varchar(255) NOT NULL,
  `gzf_practical_removal` varchar(255) NOT NULL,
  `gzf_oil_removal` varchar(255) NOT NULL,
  `gzf_max_operating` varchar(255) NOT NULL,
  `gzf_effeciency` varchar(255) NOT NULL,
  `gzf_capacity` varchar(255) NOT NULL,
  `gzf_air_connection` varchar(255) NOT NULL,
  `gzf_delivery_trm` varchar(255) NOT NULL,
  `gzf_warenty_doc` varchar(255) NOT NULL,
  `gzf_warenty_doi` varchar(255) NOT NULL,
  `gzf_weight` varchar(255) NOT NULL,
  `gzf_product_cost` varchar(255) NOT NULL,
  `gzf_discount` varchar(255) NOT NULL,
  `gzf_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gzf_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`gzf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tbl_oem_product_gzf`
--

INSERT INTO `tbl_oem_product_gzf` (`gzf_id`, `product_model`, `sap_code`, `description`, `gzf_grade`, `gzf_price`, `gzf_practical_removal`, `gzf_oil_removal`, `gzf_max_operating`, `gzf_effeciency`, `gzf_capacity`, `gzf_air_connection`, `gzf_delivery_trm`, `gzf_warenty_doc`, `gzf_warenty_doi`, `gzf_weight`, `gzf_product_cost`, `gzf_discount`, `gzf_created_on`, `gzf_updated_on`, `status`) VALUES
(1, 'GZF005GP', '300288', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 35 CFM, 16 BAR G', 'General purpose filter (GP)', '5200', '3 micron', '0', '16 bar g', '0', '35', '3/8', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:09:02', '0000-00-00 00:00:00', ''),
(2, 'GZF005ZP', '300288', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 35 CFM, 16 BAR G', 'Micro oil removing filter (ZP)', '5500	', '0.1 micron', '0.1mg/m3	', '16 bar g	', '99%', '35', '3/8', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:33:20', '0000-00-00 00:00:00', ''),
(3, 'GZF005ZO', '300289', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)	', '5600	', '0.01 Micron	', '0.01mg/m3	', '16 bar g	', '99.99%	', '35', '3/8', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:41:58', '0000-00-00 00:00:00', ''),
(4, 'GZF005ZC', '300290', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', 'Activated carbon filter (ZC)	', '6000	', '0.01 micron	', '0.005mg/m3	', '16 bar g', '99.999%		', '35', '3/8', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:42:48', '0000-00-00 00:00:00', ''),
(5, 'GZF007GP', '300291', 'AIR FILTER, 0.005 MG/M³, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 35 CFM, 16 BAR G', 'General purpose filter (GP)	', '5,700	', '3 micron	 	', '0', '16 bar g 	 	', '0', '50', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:43:55', '0000-00-00 00:00:00', ''),
(6, 'GZF007ZP', '300292', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 50 CFM, 16 BAR G', 'Micro oil removing filter (ZP)', '5900	', '0.1 micron', '0.1mg/m3	', '16 bar g 	', '99%	', '50', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:44:30', '0000-00-00 00:00:00', ''),
(7, 'GZF007ZO', '300294', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)	', '6000	', '0.01 Micron', '0.01mg/m3	', '16 bar g 	', '99.99%', '50', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:51:51', '0000-00-00 00:00:00', ''),
(8, 'GZF007ZC', '300295', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 50 CFM, 16 BAR G', 'Activated carbon filter (ZC)', '6,400	', '0.01 micron	', '0.005mg/m3		', '16 bar g 	', '99.999%		', '50', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:52:06', '0000-00-00 00:00:00', ''),
(10, 'GZF010GP', '300296', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 75 CFM, 16 BAR G', 'General purpose filter (GP)	', '6500	', '03 micron	 	', '0	', '16 bar g 	', '0	', '75', '3/4', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:54:54', '0000-00-00 00:00:00', ''),
(11, 'GZF010ZP', '300297', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 75 CFM, 16 BAR G', 'Micro oil removing filter (ZP)	', '6800	', '0.1 micron	', '0.1mg/m3	', '16 bar g 	', '99%', '75', '3/4', 'Exstock', '0', '0', '0', '', '', '2017-04-01 04:59:21', '0000-00-00 00:00:00', ''),
(12, 'GZF010ZO', '300298', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 75 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)	', '6900	', '0.01 Micron	', '0.01mg/m3', '16 bar g 	', '99.99%	', '75', '3/4', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:00:26', '0000-00-00 00:00:00', ''),
(14, 'GZF010ZC', '300299', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 75 CFM, 16 BAR G', 'Activated carbon filter (ZC)	', '7500		', '0.01 Micron	', '0.005mg/m3	', '16 bar g 	', '99.999%', '75', '3/4', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:01:34', '0000-00-00 00:00:00', ''),
(15, 'GZF018GP', '300300', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 125 CFM, 16 BAR G', 'General purpose filter (GP)	', '8100	', '3 micron	 	', '0', '16 bar g 	', '0', '125', '1', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:02:40', '0000-00-00 00:00:00', ''),
(16, 'GZF018ZP', '300301', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 125 CFM, 16 BAR G', 'Micro oil removing filter (ZP)	', '8800	', '0.1 micron	', '0.1mg/m3	', '16 bar g 	', '99%', '125', '1', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:04:19', '0000-00-00 00:00:00', ''),
(17, 'GZF018ZO', '300302', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 125 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)	', '8900	', '0.01 Micron	', '0.01mg/m3	', '16 bar g 	', '99.99%', '125', '1', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:14:50', '0000-00-00 00:00:00', ''),
(18, 'GZF018ZC', '300303', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 125 CFM, 16 BAR G', 'Activated carbon filter (ZC)	', '9100	', '0.01 micron	', '0.005mg/m3	', '16 bar g 	', '99.999%', '125', '1', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:15:54', '0000-00-00 00:00:00', ''),
(19, 'GZF030GP', '300304', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 200 CFM, 16 BAR G', 'General purpose filter (GP)	', '16400', '3 micron	 	', '0	', '16 bar g 	', '0', '200', '1', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:16:46', '0000-00-00 00:00:00', ''),
(20, 'GZF030ZP', '300305', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 200 CFM, 16 BAR G', 'Micro oil removing filter (ZP)', '17200	', '0.1 micron	', '0.1mg/m3	', '16 bar g 	', '99%', '200', '1', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:17:30', '0000-00-00 00:00:00', ''),
(21, 'GZF030ZO', '300306', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 200 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)	', '17300	', '0.01 Micron	', '0.01mg/m3	', '16 bar g 	', '99.99%	', '200', '1', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:18:30', '0000-00-00 00:00:00', ''),
(22, 'GZF030ZC', '300307', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 200 CFM, 16 BAR G', 'Activated carbon filter (ZC)	', '17,700	', '0.01 micron	', '0.005mg/m3		', '16 bar g 	', '99.999%', '200', '1', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:19:12', '0000-00-00 00:00:00', ''),
(23, 'GZF047GP', '300308', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 310 CFM, 16 BAR G', 'General purpose filter (GP)	', '18700	', '3 micron	 	', '0	', '16 bar g 	', '0', '310', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:20:26', '0000-00-00 00:00:00', ''),
(24, 'GZF047ZP', '300309', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 310 CFM, 16 BAR G', 'Micro oil removing filter (ZP)	', '19400	', '0.1 micron		', '00.1mg/m3', '16 bar g 	', '99%', '310', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:21:20', '0000-00-00 00:00:00', ''),
(25, 'GZF047ZO', '300310', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 310 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)	', '19,500', '0.01 Micron	', '0.01mg/m3	', '16 bar g 	', '99.99%', '310', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:22:10', '0000-00-00 00:00:00', ''),
(26, 'GZF047ZC', '300311', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 310 CFM, 16 BAR G', 'Activated carbon filter (ZC)	', '19800	', '0.01 micron', '0.005mg/m3', '16 bar g 	', '99.999%', '310', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:23:12', '0000-00-00 00:00:00', ''),
(27, 'GZF070GP', '300312', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 450 CFM, 16 BAR G', 'General purpose filter (GP)	', '22700	', '3 micron	 	', '0', '16 bar g 	', '0', '450', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:24:55', '0000-00-00 00:00:00', ''),
(28, 'GZF070ZP', '300313', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 450 CFM, 16 BAR G', 'Micro oil removing filter (ZP)	', '23400	', '0.1 micron	', '0.1mg/m3	', '16 bar g 	', '99%	', '450', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:25:44', '0000-00-00 00:00:00', ''),
(29, 'GZF070ZO', '300314', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 450 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)	', '23500	', '0.01 Micron	', '0.01mg/m3	', '16 bar g 	', '99.99%	', '450', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:26:32', '0000-00-00 00:00:00', ''),
(30, 'GZF070ZC', '300315', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 450 CFM, 16 BAR G', 'Activated carbon filter (ZC)	', '23900	', '0.01 micron	', '0.005mg/m3		', '16 bar g 	', '99.999%', '450', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:27:18', '0000-00-00 00:00:00', ''),
(31, 'GZF094GP', '300316', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 600 CFM, 16 BAR G', 'General purpose filter (GP)	', '34600	', '3 micron	 	', '0	', '16 bar g 	', '0', '600', '2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:28:10', '0000-00-00 00:00:00', ''),
(32, 'GZF094ZP', '300317', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 600 CFM, 16 BAR G', 'Micro oil removing filter (ZP)	', '35400	', '0.1 micron	', '0.1mg/m3	', '16 bar g', '99%', '600', '2', 'Exstock', '0', '0', '0', '', '', '2017-04-01 05:29:00', '0000-00-00 00:00:00', ''),
(33, 'GZF094', '300318', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 600 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)	', '35500	', '0.01 Micron', '0.01mg/m3	', '16 bar g	', '99.99%', '600', '2', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:29:49', '0000-00-00 00:00:00', ''),
(34, 'GZF094', '300319', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 600 CFM, 16 BAR G', 'Activated carbon filter (ZC)	', '35800	', '0.01 micron	', '0.005mg/m3	', '16 bar g	', '99.999%', '600', '2', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:30:41', '0000-00-00 00:00:00', ''),
(35, 'GZF150', '300320', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 900 CFM, 16 BAR G', 'General purpose filter (GP)', '41100', '3 micron', '0', '16 bar g', '0', '900', '2', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:34:06', '0000-00-00 00:00:00', ''),
(36, 'GZF150', '300321', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 900 CFM, 16 BAR G', 'Micro oil removing filter (ZP)', '43900', '0.1 micron', '0.1mg/m3', '16 bar g', '99%', '900', '2', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:34:23', '0000-00-00 00:00:00', ''),
(37, 'GZF150', '300322', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 900 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)', '44700', '0.01 Micron', '0.01mg/m3', '16 bar g', '99.99%', '900', '2', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:35:39', '0000-00-00 00:00:00', ''),
(38, 'GZF150', '300323', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 900 CFM, 16 BAR G', 'Activated carbon filter (ZC)', '45400', '0.01 micron', '0.005mg/m3', '16 bar g', '99.999%', '900', '2', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:36:37', '0000-00-00 00:00:00', ''),
(39, 'GZF175GP', '300324', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 1200 CFM, 16 BAR G', 'General purpose filter (GP)', '60100', '3 micron', '0', '16 bar g', '0', '1200', '3', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:39:58', '0000-00-00 00:00:00', ''),
(40, 'GZF175ZP', '300325', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 1200 CFM, 16 BAR G', 'Micro oil removing filter (ZP)', '63000', '0.1 micron', '0.1mg/m3', '16 bar g', '99%', '1200', '3', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:45:33', '0000-00-00 00:00:00', ''),
(41, 'GZF175ZO', '300326', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 1200 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)', '63700', '0.01 Micron', '0.01mg/m3', '16 bar g', '99.99%', '1200', '3', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:46:13', '0000-00-00 00:00:00', ''),
(42, 'GZF175ZC', '300327', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 1200 CFM, 16 BAR G', 'Activated carbon filter (ZC)', '64400', '0.01 micron', '0.005mg/m3', '16 bar g', '99.999%', '1200', '3', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:47:10', '0000-00-00 00:00:00', ''),
(43, 'GZF240GP', '300328', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 1700 CFM, 16 BAR G', 'General purpose filter (GP)', '90200	', '3 micron', '0', '16 bar g', '0', '1700', '3', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:48:10', '0000-00-00 00:00:00', ''),
(44, 'GZF240ZP', '300329', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 1700 CFM, 16 BAR G', 'Micro oil removing filter (ZP)', '93000	', '0.1 micron', '0.1mg/m3', '16 bar g', '99%', '1700', '3', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:51:21', '0000-00-00 00:00:00', ''),
(45, 'GZF240ZO', '300330', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 1700 CFM, 16 BAR G', 'Sub micro oil removing filter (ZO)', '93000	', '0.01 Micron', '0.01mg/m3', '16 bar g', '99.99%', '1700', '3', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:51:30', '0000-00-00 00:00:00', ''),
(46, 'GZF240ZC', '300331', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 1700 CFM, 16 BAR G', 'Activated carbon filter (ZC)', '94400', '0.01 micron', '0.005mg/m3', '16 bar g', '99.999%', '1700', '3', '2/4weeks', '0', '0', '0', '', '', '2017-04-01 05:51:39', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_gzf_cartridges`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_gzf_cartridges` (
  `gzf_cartridges_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gzf_cartridges_mv_gpe` varchar(255) NOT NULL,
  `gzf_cartridges_mv_zpe` varchar(255) NOT NULL,
  `gzf_cartridges_mv_zoe` varchar(255) NOT NULL,
  `gzf_cartridges_mv_zce` varchar(255) NOT NULL,
  `gzf_cartridges_capacity` varchar(255) NOT NULL,
  `gzf_cartridges_delivery_trm` varchar(255) NOT NULL,
  `gzf_cartridges_warenty_doc` varchar(255) NOT NULL,
  `gzf_cartridges_warenty_doi` varchar(255) NOT NULL,
  `gzf_cartridges_weight` varchar(255) NOT NULL,
  `gzf_cartridges_product_cost` varchar(255) NOT NULL,
  `gzf_cartridges_discount` varchar(255) NOT NULL,
  `gzf_cartridges_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gzf_cartridges_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`gzf_cartridges_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_oem_product_gzf_cartridges`
--

INSERT INTO `tbl_oem_product_gzf_cartridges` (`gzf_cartridges_id`, `product_model`, `sap_code`, `description`, `gzf_cartridges_mv_gpe`, `gzf_cartridges_mv_zpe`, `gzf_cartridges_mv_zoe`, `gzf_cartridges_mv_zce`, `gzf_cartridges_capacity`, `gzf_cartridges_delivery_trm`, `gzf_cartridges_warenty_doc`, `gzf_cartridges_warenty_doi`, `gzf_cartridges_weight`, `gzf_cartridges_product_cost`, `gzf_cartridges_discount`, `gzf_cartridges_changed_on`, `gzf_cartridges_updated_on`, `status`) VALUES
(1, 'GZF005', '', '', '3000', '3950', '4100', '4200', '35', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:28:15', '0000-00-00 00:00:00', ''),
(2, 'GZF007', '', '', '3400', '4200', '4500', '4700', '50', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:56:10', '0000-00-00 00:00:00', ''),
(3, 'GZF010', '', '', '4500', '4900', '5500', '5900', '75', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:33:56', '0000-00-00 00:00:00', ''),
(4, 'GZF018', '', '', '5200', '6000', '6300', '6800', '125', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:36:35', '0000-00-00 00:00:00', ''),
(5, 'GZF030', '', '', '10600', '10900', '11100', '11400', '200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:40:20', '0000-00-00 00:00:00', ''),
(6, 'GZF047', '', '', '12300', '13200', '13500', '13800', '310', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:46:04', '0000-00-00 00:00:00', ''),
(7, 'GZF070', '', '', '14100', '14100', '14800', '15100', '450', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:49:25', '0000-00-00 00:00:00', ''),
(8, 'GZF094', '', '', '21600', '22100', '22400', '22600', '600', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:52:33', '0000-00-00 00:00:00', ''),
(9, 'GZF150', '', '', '28600', '29300	', '29700', '30200', '900', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 11:57:21', '0000-00-00 00:00:00', ''),
(10, 'GZF175', '', '', '42100		', '44000', '44700', '45000', '1200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 12:00:13', '0000-00-00 00:00:00', ''),
(11, 'GZF240', '', '', '67600			', '70000', '70400', '70900', '1700', 'Exstock Delivery', '12', '18', '0', '', '', '2017-03-22 12:03:24', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_gz_gfv`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_gz_gfv` (
  `gz_gfv_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gz_gfv_price` varchar(255) NOT NULL,
  `gz_gfv_valve_opn_intervel` varchar(255) NOT NULL,
  `gz_gfv_valve_dischrg` varchar(255) NOT NULL,
  `gz_gfv_pwr_consum` varchar(255) NOT NULL,
  `gz_gfv_max_opt_temp` varchar(255) NOT NULL,
  `gz_gfv_max_opt_presure` varchar(255) NOT NULL,
  `gz_gfv_io_ports` varchar(255) NOT NULL,
  `gz_gfv_warenty_doc` varchar(255) NOT NULL,
  `gz_gfv_warenty_doi` varchar(255) NOT NULL,
  `gz_gfv_deliver_trm` varchar(255) NOT NULL,
  `gz_gfv_weight` varchar(255) NOT NULL,
  `gz_gfv_product_cost` varchar(255) NOT NULL,
  `gz_gfv_discount` varchar(255) NOT NULL,
  `gz_gfv_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gz_gfv_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`gz_gfv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_oem_product_gz_gfv`
--

INSERT INTO `tbl_oem_product_gz_gfv` (`gz_gfv_id`, `product_model`, `sap_code`, `description`, `gz_gfv_price`, `gz_gfv_valve_opn_intervel`, `gz_gfv_valve_dischrg`, `gz_gfv_pwr_consum`, `gz_gfv_max_opt_temp`, `gz_gfv_max_opt_presure`, `gz_gfv_io_ports`, `gz_gfv_warenty_doc`, `gz_gfv_warenty_doi`, `gz_gfv_deliver_trm`, `gz_gfv_weight`, `gz_gfv_product_cost`, `gz_gfv_discount`, `gz_gfv_changed_on`, `gz_gfv_updated_on`, `status`) VALUES
(1, 'GZ LD', '', '', '2100', '0.5-35min (adjustable)', '0.5 to 20 sec (adjustable)	', '10', '90deg c	', '16 bar (g)	 ', '1/2 BSP', '12', '0', 'Exstock', '0', '', '', '2017-03-22 11:32:01', '0000-00-00 00:00:00', ''),
(2, 'GZ HD', '', '', '2300', '0.5-35min (adjustable)', '0.5 to 20 sec (adjustable)	', '10', '90deg c	', '16 bar (g)	 ', '1/2  BSP', '12', '0', 'Exstock', '0', '', '', '2017-03-22 11:32:53', '0000-00-00 00:00:00', ''),
(3, 'GFV', '', '', '3500', '0', '0', '0', '90deg c	', '20 bar (g)', '1/2  BSP', '12', '0', 'Exstock', '0', '', '', '2017-03-22 11:33:35', '0000-00-00 00:00:00', ''),
(4, 'GZ LD 7', '', '', '4700', '0.5-35min (adjustable)', '0.5 to 20 sec (adjustable)', '0', '0', '30 bar (g)', '1/2  BSP', '12', '0', 'Exstock', '0', '', '', '2017-03-22 11:34:19', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_hld`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_hld` (
  `hld_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hld_daa_is2825cc` varchar(255) NOT NULL,
  `hld_daa_asme_cc` varchar(255) NOT NULL,
  `hld_dms_is2825_cc` varchar(255) NOT NULL,
  `hld_dms_asme_cc` varchar(255) NOT NULL,
  `hld_air_flow_cfm` varchar(255) NOT NULL,
  `hld_inlet_outlet_flg` varchar(255) NOT NULL,
  `hld_desiccant_qty` varchar(255) NOT NULL,
  `hld_warnty_doc` varchar(255) NOT NULL,
  `hld_warenty_doi` varchar(255) NOT NULL,
  `hld_wrk_pressure` varchar(255) NOT NULL,
  `hld_delivery_trm` varchar(255) NOT NULL,
  `hld_weight` varchar(255) NOT NULL,
  `hld_packing_cost` varchar(255) NOT NULL,
  `hld_discount` varchar(255) NOT NULL,
  `hld_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hld_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_oem_product_hld`
--

INSERT INTO `tbl_oem_product_hld` (`hld_id`, `product_model`, `sap_code`, `description`, `hld_daa_is2825cc`, `hld_daa_asme_cc`, `hld_dms_is2825_cc`, `hld_dms_asme_cc`, `hld_air_flow_cfm`, `hld_inlet_outlet_flg`, `hld_desiccant_qty`, `hld_warnty_doc`, `hld_warenty_doi`, `hld_wrk_pressure`, `hld_delivery_trm`, `hld_weight`, `hld_packing_cost`, `hld_discount`, `hld_created_on`, `hld_updated_on`, `status`) VALUES
(1, 'HLD030A/B/C/D	', '', '', '182200	', '256200	', '236400	', '308100	', '300	', '2 NB	', '110', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 06:48:03', '0000-00-00 00:00:00', ''),
(2, 'HLD040A/B/C/D	', '', '', '220000	', '285800	', '264000	', '342900	', '400', '3 NB	', '140', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 06:52:01', '0000-00-00 00:00:00', ''),
(3, 'HLD050A/B/C/D	', '', '', '264000	', '343000	', '317000	', '412000	', '500', '3 NB	', '180', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 06:53:59', '0000-00-00 00:00:00', ''),
(4, 'HLD060A/B/C/D	', '', '', '330000	', '428600	', '396400	', '514400', '600', '3 NB	', '215', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 07:11:57', '0000-00-00 00:00:00', ''),
(5, 'HLD075A/B/C/D	', '', '', '386000	', '500300', '461400	', '600100	', '750', '4 NB	', '260', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 07:17:08', '0000-00-00 00:00:00', ''),
(6, 'HLD100A/B/C/D	', '', '', '471800	', '631100	', '566300	', '736700	', '1000	', '4 NB	', '360', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 07:19:40', '0000-00-00 00:00:00', ''),
(7, 'HLD125A/B/C/D	', '', '', '543000	', '704000	', '649400	', '845800	', '1250	', '5NB	', '450', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 07:22:10', '0000-00-00 00:00:00', ''),
(8, 'HLD150A/B/C/D	', '', '', '608400	', '786000	', '726300	', '944500	', '1500	', '5 NB	', '520', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 07:23:53', '0000-00-00 00:00:00', ''),
(9, 'HLD200A/B/C/D	', '', '', '705500	', '919600	', '848400	', '1106100', '2000	', '6 NB	', '720', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-03-23 07:26:05', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_hln`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_hln` (
  `hln_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hln_daa_is2825_price` varchar(255) NOT NULL,
  `hln_dms_is2825_price` varchar(255) NOT NULL,
  `hln_airflow_cfm` varchar(255) NOT NULL,
  `hln_in_out_flg` varchar(255) NOT NULL,
  `hln_dessiccant_qty` varchar(255) NOT NULL,
  `hln_delivery_trm` varchar(255) NOT NULL,
  `hln_wrnty_doc` varchar(255) NOT NULL,
  `hln_wrnty_doi` varchar(255) NOT NULL,
  `hln_wrk_pressure` varchar(255) NOT NULL,
  `hn_inlet_temp` varchar(255) NOT NULL,
  `hn_admos_dew_pt` varchar(255) NOT NULL,
  `hln_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hln_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hln_weight` varchar(255) NOT NULL,
  `hln_packing_cost` varchar(255) NOT NULL,
  `hln_discount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hln_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_oem_product_hln`
--

INSERT INTO `tbl_oem_product_hln` (`hln_id`, `product_model`, `sap_code`, `description`, `hln_daa_is2825_price`, `hln_dms_is2825_price`, `hln_airflow_cfm`, `hln_in_out_flg`, `hln_dessiccant_qty`, `hln_delivery_trm`, `hln_wrnty_doc`, `hln_wrnty_doi`, `hln_wrk_pressure`, `hn_inlet_temp`, `hn_admos_dew_pt`, `hln_created_on`, `hln_update_on`, `hln_weight`, `hln_packing_cost`, `hln_discount`, `status`) VALUES
(1, 'HLN002A/C', '', '', '43900', '53600', '20', '½ BSP', '20', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:08:26', '0000-00-00 00:00:00', '0', '', '', ''),
(2, 'HLN003A/C', '', '', '46300', '56000', '35', '½ BSP', '35', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:08:30', '0000-00-00 00:00:00', '0', '', '', ''),
(3, 'HLN006A/C', '', '', '63300', '75500', '60', '¾ BSP', '60', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:08:34', '0000-00-00 00:00:00', '0', '', '', ''),
(4, 'HLN007A/C', '', '', '70600', '83900', '75	', '¾ BSP', '75', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:08:38', '0000-00-00 00:00:00', '0', '', '', ''),
(5, 'HLN010A/C', '', '', '81500', '97250', '100	', '1 BSP', '100', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:06:14', '0000-00-00 00:00:00', '0', '', '', ''),
(6, 'HLN012A/C', '', '', '108300', '130100', '125	', '1½ FLG  ', '125', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:09:06', '0000-00-00 00:00:00', '0', '', '', ''),
(7, 'HLN015A/C', '', '', '115600    ', '137500', '150	', '1½ FLG    ', '150', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:12:02', '0000-00-00 00:00:00', '0', '', '', ''),
(8, 'HLN017A/C', '', '', '120500', '144800', '175', '1 ½ FLG', '170', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:11:36', '0000-00-00 00:00:00', '0', '', '', ''),
(9, 'HLN020A/C	', '', '', '127700	', '156900	', '200	', '1 ½ FLG    ', '200', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:11:41', '0000-00-00 00:00:00', '0', '', '', ''),
(10, 'HLN025A/C', '', '', '139900', '167800    ', '250', '2 FLG', '250', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-03-21 14:11:53', '0000-00-00 00:00:00', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_hp_filter`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_hp_filter` (
  `hp_filter_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hp_filter_gp` varchar(255) NOT NULL,
  `hp_filter_zp` varchar(255) NOT NULL,
  `hp_filter_zo` varchar(255) NOT NULL,
  `hp_filter_zc` varchar(255) NOT NULL,
  `hp_filter_delivery_trm` varchar(255) NOT NULL,
  `hp_filter_warenty_doc` varchar(255) NOT NULL,
  `hp_filter_warenty_doi` varchar(255) NOT NULL,
  `hp_filter__wrk_pressure` varchar(255) NOT NULL,
  `hp_filter_weight` varchar(255) NOT NULL,
  `hp_filter_packging_cost` varchar(255) NOT NULL,
  `hp_filter_discount` varchar(255) NOT NULL,
  `hp_filter_changed_on` datetime NOT NULL,
  `hp_filter_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hp_filter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_oem_product_hp_filter`
--

INSERT INTO `tbl_oem_product_hp_filter` (`hp_filter_id`, `product_model`, `sap_code`, `description`, `hp_filter_gp`, `hp_filter_zp`, `hp_filter_zo`, `hp_filter_zc`, `hp_filter_delivery_trm`, `hp_filter_warenty_doc`, `hp_filter_warenty_doi`, `hp_filter__wrk_pressure`, `hp_filter_weight`, `hp_filter_packging_cost`, `hp_filter_discount`, `hp_filter_changed_on`, `hp_filter_updated_on`, `status`) VALUES
(1, 'A005 7', '', '', '7800', '8500', '8500', '8500', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-22 11:21:41', ''),
(2, 'B010 7 ', '', '', '14100 ', '15100 ', '15100 ', '15100', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-22 11:23:19', ''),
(3, 'B020 7 ', '', '', '21900 ', '23400 ', '23400', '23400 ', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-22 11:24:25', ''),
(4, 'B030 7', '', '', ' 26000 ', '27600 ', '27400 ', '27600', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-22 11:25:15', ''),
(5, 'B050 7 ', '', '', '34900 ', '37500 ', '37500 ', '37500', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-22 11:26:19', ''),
(6, 'B075 7 ', '', '', '49,900', '53100 ', ' 53100 ', '53100', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-22 11:27:08', ''),
(7, 'B100 7 ', '', '', '62400', ' 65600 ', '65600 ', '65600', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-22 11:28:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_hp_filter_element`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_hp_filter_element` (
  `hp_filter_ele_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hp_filter_ele_gpe` varchar(255) NOT NULL,
  `hp_filter_ele_zpe` varchar(255) NOT NULL,
  `hp_filter_ele_zoe` varchar(255) NOT NULL,
  `hp_filter_ele_zce` varchar(255) NOT NULL,
  `hp_filter_ele_delivery_trm` varchar(255) NOT NULL,
  `hp_filter_ele_warenty_doc` varchar(255) NOT NULL,
  `hp_filter_ele_warenty_doi` varchar(255) NOT NULL,
  `hp_filter_ele_wrk_presure` varchar(255) NOT NULL,
  `hp_filter_ele_weight` varchar(255) NOT NULL,
  `hp_filter_ele_product_cost` varchar(255) NOT NULL,
  `hp_filter_ele_discount` varchar(255) NOT NULL,
  `hp_filter_ele_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hp_filter_ele_update-on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hp_filter_ele_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_oem_product_hp_filter_element`
--

INSERT INTO `tbl_oem_product_hp_filter_element` (`hp_filter_ele_id`, `product_model`, `sap_code`, `description`, `hp_filter_ele_gpe`, `hp_filter_ele_zpe`, `hp_filter_ele_zoe`, `hp_filter_ele_zce`, `hp_filter_ele_delivery_trm`, `hp_filter_ele_warenty_doc`, `hp_filter_ele_warenty_doi`, `hp_filter_ele_wrk_presure`, `hp_filter_ele_weight`, `hp_filter_ele_product_cost`, `hp_filter_ele_discount`, `hp_filter_ele_changed_on`, `hp_filter_ele_update-on`, `status`) VALUES
(1, '005 7	', '', '', '3400	', '4200	', '4500	', '4700', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:29:56', '0000-00-00 00:00:00', ''),
(2, '010 7	', '', '', '5200	', '6000	', '6300	', '6800', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:30:38', '0000-00-00 00:00:00', ''),
(3, '020 7	', '', '', '10600	', '11000	', '11100		', '11400', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:31:15', '0000-00-00 00:00:00', ''),
(4, '030 7	', '', '', '12300	', '13200	', '13500	', '13800	', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:31:55', '0000-00-00 00:00:00', ''),
(5, '050 7	', '', '', '14100	', '14500	', '14800	', '15100', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:32:29', '0000-00-00 00:00:00', ''),
(6, '075 7	', '', '', '21600	', '22100	', '22400	', '22600', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:33:11', '0000-00-00 00:00:00', ''),
(7, '100 7	', '', '', '28600	', '29300	', '29700	', '30200', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:33:40', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_mst`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_mst` (
  `mst_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mst_mv_baffle` varchar(255) NOT NULL,
  `mst_demister` varchar(255) NOT NULL,
  `mst_delivery_trm` varchar(255) NOT NULL,
  `mst_warenty_doc` varchar(255) NOT NULL,
  `mst_warenty_doi` varchar(255) NOT NULL,
  `mst_wrk_presure` varchar(255) NOT NULL,
  `mst_weight` varchar(255) NOT NULL,
  `mst_product_cost` varchar(255) NOT NULL,
  `mst_discount` varchar(255) NOT NULL,
  `mst_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mst_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`mst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_oem_product_mst`
--

INSERT INTO `tbl_oem_product_mst` (`mst_id`, `product_model`, `sap_code`, `description`, `mst_mv_baffle`, `mst_demister`, `mst_delivery_trm`, `mst_warenty_doc`, `mst_warenty_doi`, `mst_wrk_presure`, `mst_weight`, `mst_product_cost`, `mst_discount`, `mst_changed_on`, `mst_updated_on`, `status`) VALUES
(1, 'MST 002', '', '', '3600', '4600', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:32:22', '0000-00-00 00:00:00', ''),
(2, 'MST 003', '', '', '3600', '4600', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:33:21', '0000-00-00 00:00:00', ''),
(3, 'MST 005', '', '', '5600', '7700', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:33:48', '0000-00-00 00:00:00', ''),
(4, 'MST 007', '', '', '5600', '7700', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:33:59', '0000-00-00 00:00:00', ''),
(5, 'MST 010', '', '', '5600', '7700', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:34:27', '0000-00-00 00:00:00', ''),
(6, 'MST 015', '', '', '7200', '9200', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:34:51', '0000-00-00 00:00:00', ''),
(7, 'MST 020', '', '', '7200', '9200', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:35:04', '0000-00-00 00:00:00', ''),
(8, 'MST 025', '', '', '8700', '13300', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:35:20', '0000-00-00 00:00:00', ''),
(9, 'MST 030', '', '', '8700', '13300', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:35:37', '0000-00-00 00:00:00', ''),
(10, 'MST 050', '', '', '16400', '21400', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:35:50', '0000-00-00 00:00:00', ''),
(11, 'MST 075', '', '', '17400', '24500', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:36:09', '0000-00-00 00:00:00', ''),
(12, 'MST 100', '', '', '22400', '33600', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:36:30', '0000-00-00 00:00:00', ''),
(13, 'MST 150', '', '', '29500', '42800', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:36:51', '0000-00-00 00:00:00', ''),
(14, 'MST 200', '', '', '34600', '51000', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-21 14:37:07', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_nxg_nex_gen`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_nxg_nex_gen` (
  `nxg_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `nxg_air_cooled_r134a` varchar(255) NOT NULL,
  `nxg_air_cooled_r404a` varchar(255) NOT NULL,
  `nxg_air_cooled_r407c` varchar(255) NOT NULL,
  `nxg_capacity_cfm` varchar(255) NOT NULL,
  `nxg_working_pressure` varchar(255) NOT NULL,
  `nxg_air_connection_in_out` varchar(255) NOT NULL,
  `nxg_rate_power_kw` varchar(255) NOT NULL,
  `nxg_delivery_terms` varchar(255) NOT NULL,
  `nxg_electrical_connection_220v` varchar(255) NOT NULL,
  `nxg_electrical_connection_415v` varchar(255) NOT NULL,
  `nxg_warrenty_doc` varchar(255) NOT NULL,
  `nxg_warrenty_doi` varchar(255) NOT NULL,
  `nxg_weight` varchar(255) NOT NULL,
  `nxg_packing_cost` varchar(255) NOT NULL,
  `nxg_discount` varchar(255) NOT NULL,
  `nxg_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nxg_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nxg_status` varchar(255) NOT NULL,
  PRIMARY KEY (`nxg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_oem_product_nxg_nex_gen`
--

INSERT INTO `tbl_oem_product_nxg_nex_gen` (`nxg_id`, `product_model`, `sap_code`, `description`, `nxg_air_cooled_r134a`, `nxg_air_cooled_r404a`, `nxg_air_cooled_r407c`, `nxg_capacity_cfm`, `nxg_working_pressure`, `nxg_air_connection_in_out`, `nxg_rate_power_kw`, `nxg_delivery_terms`, `nxg_electrical_connection_220v`, `nxg_electrical_connection_415v`, `nxg_warrenty_doc`, `nxg_warrenty_doi`, `nxg_weight`, `nxg_packing_cost`, `nxg_discount`, `nxg_created_on`, `nxg_updated_on`, `nxg_status`) VALUES
(1, 'NXG010', '', '', '87600', '0', '0', '100', '16', '1  BSP(F)', '0.6', 'Exstock', 'yes', '0', '24', '30', '0', '', '', '2017-03-21 12:19:12', '0000-00-00 00:00:00', ''),
(2, 'NXG015', '', '', '111100', '0', '0', '150', '16', '1 1/2 BSP(F)', '0.9', 'Exstock', '0', 'yes', '24', '30', '0', '', '', '2017-03-21 12:25:30', '0000-00-00 00:00:00', ''),
(3, 'NXG020', '', '', '116200', '0', '0', '200', '16', '1 1/2 BSP(F)', '1.2', 'Exstock', '0', 'yes', '24', '30', '0', '', '', '2017-03-21 12:28:08', '0000-00-00 00:00:00', ''),
(4, 'NXG025', '', '', '0', '150000', '0', '250', '16', '2 BSP(F)', '1.38', '2-3 days', 'no', 'yes', '24', '30', '0', '', '', '2017-03-21 12:56:53', '0000-00-00 00:00:00', ''),
(5, 'NXG030', '', '', '0', '155000', '0', '300', '16', '2 1/2 BSP(F)', '1.38', '2-3 days', 'no', 'yes', '24', '30', '0', '', '', '2017-03-21 12:57:55', '0000-00-00 00:00:00', ''),
(6, 'NXG040', '', '', '0', '197750', '0', '300', '16', '2 1/2 BSP(F)', '2.32', '2-3 days', 'no', 'yes', '24', '30', '0', '', '', '2017-03-21 12:58:28', '0000-00-00 00:00:00', ''),
(7, 'NXG050', '', '', '0', '235750', '0', '500', '16', '2 1/2 BSP(F)', '2.6', '2-3 days', 'no', 'yes', '24', '30', '0', '', '', '2017-03-21 12:59:00', '0000-00-00 00:00:00', ''),
(8, 'NXG060', '', '', '0', '240000', '0', '600', '16', '2 1/2 BSP(F)', '2.6', '3 to 4weeks', 'no', 'yes', '24', '30', '0', '', '', '2017-03-21 12:59:51', '0000-00-00 00:00:00', ''),
(9, 'NXG075', '', '', '0', '0', '265000', '750', '16', '3 BSP(F)', '4.12', '3 to 4weeks', 'no', 'yes', '24', '30', '0', '', '', '2017-03-21 13:01:00', '0000-00-00 00:00:00', ''),
(10, 'NXG100', '', '', '0', '0', '340000', '1000', '16', '3 BSP(F)', '5.6', '3 to 4weeks', 'no', 'yes', '24', '30', '0', '', '', '2017-03-21 13:02:00', '0000-00-00 00:00:00', ''),
(11, 'NXG125', '', '', '0', '0', '37000', '1250', '16', '3 BSP(F)', '5.7', '3 to 4weeks', 'no', 'yes', '24', '30', '0', '', '', '2017-03-21 13:02:53', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_rad`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_rad` (
  `rad_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rad_mv_water_cooled_ref_r407c` varchar(255) NOT NULL,
  `rad_mv_capacity` varchar(255) NOT NULL,
  `rad_mv_in_out` varchar(255) NOT NULL,
  `rad_mv_rate_pow_ele_conn_415_3a` varchar(255) NOT NULL,
  `rad_delivery_terms` varchar(255) NOT NULL,
  `rad_wrk_pressur` varchar(255) NOT NULL,
  `rad_warrenty_doc` varchar(255) NOT NULL,
  `rad_warrenty_doi` varchar(255) NOT NULL,
  `rad_weight` varchar(255) NOT NULL,
  `rad_packing_cost` varchar(255) NOT NULL,
  `rad_discount` varchar(255) NOT NULL,
  `rad_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rad_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rad_status` varchar(255) NOT NULL,
  PRIMARY KEY (`rad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_oem_product_rad`
--

INSERT INTO `tbl_oem_product_rad` (`rad_id`, `product_model`, `sap_code`, `description`, `rad_mv_water_cooled_ref_r407c`, `rad_mv_capacity`, `rad_mv_in_out`, `rad_mv_rate_pow_ele_conn_415_3a`, `rad_delivery_terms`, `rad_wrk_pressur`, `rad_warrenty_doc`, `rad_warrenty_doi`, `rad_weight`, `rad_packing_cost`, `rad_discount`, `rad_created_on`, `rad_updated_on`, `rad_status`) VALUES
(1, 'RAD300F', '', '', '1400000', '3000', '8', '14', '60 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-21 13:44:47', '0000-00-00 00:00:00', ''),
(2, 'RAD400F', '', '', '1850000', '4000', '8', '17', '60 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-21 13:44:50', '0000-00-00 00:00:00', ''),
(3, 'RAD500F', '', '', '2000000', '5000 ', '10', '21', ' 60 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-21 13:44:42', '0000-00-00 00:00:00', ''),
(4, 'RAD600F', '', '', '2700000', '6000 ', '10', '22', '60 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-21 13:44:37', '0000-00-00 00:00:00', ''),
(5, 'RAD800F', '', '', '3000000', '8000', '12', '32', '90 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-21 13:43:40', '0000-00-00 00:00:00', ''),
(6, 'RAD1000F', '', '', '3200000', '10000', '16', '42', '90 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-21 13:44:22', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_scb`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_scb` (
  `scb_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `scb_low_temp` varchar(255) NOT NULL,
  `scb_high_temp` varchar(255) NOT NULL,
  `scb_motor` varchar(255) NOT NULL,
  `scb_in_out_size` varchar(255) NOT NULL,
  `scb_water_flow` varchar(255) NOT NULL,
  `scb_delivery_trm` varchar(255) NOT NULL,
  `scb_outlet_temp` varchar(255) NOT NULL,
  `scb_warenty_doc` varchar(255) NOT NULL,
  `scb_warenty_doi` varchar(255) NOT NULL,
  `scb_weight` varchar(255) NOT NULL,
  `scb_product_cost` varchar(255) NOT NULL,
  `scb_discount` varchar(255) NOT NULL,
  `scb_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `scb_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`scb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_oem_product_scb`
--

INSERT INTO `tbl_oem_product_scb` (`scb_id`, `product_model`, `sap_code`, `description`, `scb_low_temp`, `scb_high_temp`, `scb_motor`, `scb_in_out_size`, `scb_water_flow`, `scb_delivery_trm`, `scb_outlet_temp`, `scb_warenty_doc`, `scb_warenty_doi`, `scb_weight`, `scb_product_cost`, `scb_discount`, `scb_created_on`, `scb_updated_on`, `status`) VALUES
(1, 'SCB100L/H', '', '', '105130', '120150	', ' 5	', '5 / 5	', '7.80', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-21 14:18:17', '0000-00-00 00:00:00', ''),
(2, 'SCB150L/H', '', '', '123590', '139970', ' 5	', '6 / 6	', '11.70', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-21 14:21:03', '0000-00-00 00:00:00', ''),
(3, 'SCB200L/H', '', '', '159760', '183650', '7.5', '8 / 8	', '15.60', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-21 14:19:53', '0000-00-00 00:00:00', ''),
(4, 'SCB250L/H', '', '', '190730', '192520', ' 10', '8 / 8', '23.40', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:36:20', '0000-00-00 00:00:00', ''),
(5, 'SCB300L/H', '', '', '234450', '274490', '12.5', '8 / 8', '31.20', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-21 14:22:08', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_sct`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_sct` (
  `sct_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `sct_low_temp_price` varchar(255) NOT NULL,
  `sct_high_temp_price` varchar(255) NOT NULL,
  `sct_in_out_size` varchar(255) NOT NULL,
  `sct_water_rate` varchar(255) NOT NULL,
  `sct_motor` varchar(255) NOT NULL,
  `sct_delvery_trm` varchar(255) NOT NULL,
  `sct_outlet_temp` varchar(255) NOT NULL,
  `sct_warenty_doc` varchar(255) NOT NULL,
  `sct_warenty_doi` varchar(255) NOT NULL,
  `sct_weight` varchar(255) NOT NULL,
  `sct_product_cost` varchar(255) NOT NULL,
  `sct_discount` varchar(255) NOT NULL,
  `sct_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sct_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`sct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_oem_product_sct`
--

INSERT INTO `tbl_oem_product_sct` (`sct_id`, `product_model`, `sap_code`, `description`, `sct_low_temp_price`, `sct_high_temp_price`, `sct_in_out_size`, `sct_water_rate`, `sct_motor`, `sct_delvery_trm`, `sct_outlet_temp`, `sct_warenty_doc`, `sct_warenty_doi`, `sct_weight`, `sct_product_cost`, `sct_discount`, `sct_created_on`, `sct_updated_on`, `status`) VALUES
(2, 'SCT100L/H', '', '', '89950', '104960', '5/5', '7.80	', '5	', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-03-22 09:58:39', '0000-00-00 00:00:00', ''),
(3, 'SCT150L/H', '', '', '102650', '119030', '6/6', '11.70', '5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-03-22 09:58:45', '0000-00-00 00:00:00', ''),
(4, 'SCT200L/H', '', '', '138830', '162720', '8/8', '15.60', '7.5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-03-22 09:58:49', '0000-00-00 00:00:00', ''),
(5, 'SCT250L/H', '', '', '159080', '183070', '8/8', '23.40', '10', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-03-22 09:58:53', '0000-00-00 00:00:00', ''),
(6, 'SCT300L/H', '', '', '195080', '235120', '8/8', '31.20', '12.5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-03-22 09:58:57', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_spd`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_spd` (
  `spd_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `spd_moleculer_sieve_pric` varchar(255) NOT NULL,
  `spd_air_flow` varchar(255) NOT NULL,
  `spd_inlet_outlet` varchar(255) NOT NULL,
  `spd_delivery_trm` varchar(255) NOT NULL,
  `spd_warnty_doc` varchar(255) NOT NULL,
  `spd_warnty_doi` varchar(255) NOT NULL,
  `spd_inlet_temp` varchar(255) NOT NULL,
  `spd_atmospheric_dew_pt` varchar(255) NOT NULL,
  `spd_access` varchar(255) NOT NULL,
  `spd_wrk_pressure` varchar(255) NOT NULL,
  `spd_weight` varchar(255) NOT NULL,
  `spd_product_cost` varchar(255) NOT NULL,
  `spd_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `spd_updateed_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`spd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_oem_product_spd`
--

INSERT INTO `tbl_oem_product_spd` (`spd_id`, `product_model`, `sap_code`, `description`, `spd_moleculer_sieve_pric`, `spd_air_flow`, `spd_inlet_outlet`, `spd_delivery_trm`, `spd_warnty_doc`, `spd_warnty_doi`, `spd_inlet_temp`, `spd_atmospheric_dew_pt`, `spd_access`, `spd_wrk_pressure`, `spd_weight`, `spd_product_cost`, `spd_created_on`, `spd_updateed_on`, `status`) VALUES
(1, 'SPD010', '', '', '24200', '10', 'G 3/8', 'Exstock', '24', '30', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 11:39:00', '0000-00-00 00:00:00', ''),
(2, 'SPD015', '', '', '26000', '15', 'G 3/4', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 11:47:04', '0000-00-00 00:00:00', ''),
(3, 'SPD025', '', '', '48700', '25', 'G 3/4', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 12:35:51', '0000-00-00 00:00:00', ''),
(6, 'SPD040', '', '', '52,600', '40', 'G 3/4', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 12:50:23', '0000-00-00 00:00:00', ''),
(7, 'SPD060', '', '', '65000', '60', 'G 3/4', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 12:53:49', '0000-00-00 00:00:00', ''),
(8, 'SPD100', '', '', '75000', '95', 'G1', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 12:54:47', '0000-00-00 00:00:00', ''),
(9, 'SPD150', '', '', '163800', '150', 'G 1 Â½', '  1/2 weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 12:56:04', '0000-00-00 00:00:00', ''),
(10, 'SPD250', '', '', '2,16,500', '250', 'G 1 Â½', '  1/2 weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 12:56:54', '0000-00-00 00:00:00', ''),
(11, 'SPD350', '', '', '271500', '350', 'G 1 Â½', '  1/2 weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 12:57:46', '0000-00-00 00:00:00', ''),
(12, 'SPD500', '', '', '324100', '500', 'G 2', '2/3weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 12:58:52', '0000-00-00 00:00:00', ''),
(13, 'SPD700', '', '', '378000', '700', 'G 2', '2/3weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 13:00:05', '0000-00-00 00:00:00', ''),
(14, 'SPD900', '', '', '435300', '900', 'G 2 Â½', '2/3weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-03-21 13:01:20', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_var`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_var` (
  `var_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `var_ar_model_var` varchar(255) NOT NULL,
  `var_ar_wrk_pressure` varchar(255) NOT NULL,
  `var_ar_price` varchar(255) NOT NULL,
  `var_ar_capacity` varchar(255) NOT NULL,
  `var_ar_shell_thick` varchar(255) NOT NULL,
  `var_ar_in_out` varchar(255) NOT NULL,
  `var_ar_hand` varchar(255) NOT NULL,
  `var_ar_delivery_trm` varchar(255) NOT NULL,
  `var_warenty_doc` varchar(255) NOT NULL,
  `var_warenty_doi` varchar(255) NOT NULL,
  `var_moc` varchar(255) NOT NULL,
  `var_weight` varchar(255) NOT NULL,
  `var_product_cost` varchar(255) NOT NULL,
  `var_discount` varchar(255) NOT NULL,
  `var_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `var_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`var_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_oem_product_var`
--

INSERT INTO `tbl_oem_product_var` (`var_id`, `product_model`, `sap_code`, `description`, `var_ar_model_var`, `var_ar_wrk_pressure`, `var_ar_price`, `var_ar_capacity`, `var_ar_shell_thick`, `var_ar_in_out`, `var_ar_hand`, `var_ar_delivery_trm`, `var_warenty_doc`, `var_warenty_doi`, `var_moc`, `var_weight`, `var_product_cost`, `var_discount`, `var_changed_on`, `var_updated_on`, `status`) VALUES
(1, 'VAR0252', '', '', '0', '7 bar', '21900', '250', '4/5', '3/4 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 12:58:52', '0000-00-00 00:00:00', ''),
(2, 'VAR0253', '', '', '0', '10.5 bar', '22900', '250', '5/5', '3/4 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:00:32', '0000-00-00 00:00:00', ''),
(3, 'VAR0254', '', '', '0', '12.5 bar', '24000', '250', '5/6', '3/4 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:01:26', '0000-00-00 00:00:00', ''),
(4, 'VAR0502', '', '', '0', '7 bar', '32200', '500', '5/5', '1 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:02:33', '0000-00-00 00:00:00', ''),
(5, 'VAR0503', '', '', '0', '10.5 bar', '37200', '500', '5/6', '1 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:03:14', '0000-00-00 00:00:00', ''),
(6, 'VAR0504', '', '', '0', '12.5 bar', '41200', '500', '6/8', '1 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:03:55', '0000-00-00 00:00:00', ''),
(7, 'VAR0752', '', '', '0', '7 bar', '33900', '750', '5/6', '1 1/2 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:05:02', '0000-00-00 00:00:00', ''),
(8, 'VAR0753', '', '', '0', '10.5 bar', '38600', '750', '6/6', '1 1/2 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:05:55', '0000-00-00 00:00:00', ''),
(9, 'VAR0754', '', '', '0', '12.5 bar', '44400', '750', '8/8', '1 1/2 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:06:25', '0000-00-00 00:00:00', ''),
(10, 'VAR1502', '', '', '0', '7 bar', '77900', '1500', '5/6', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:10:24', '0000-00-00 00:00:00', ''),
(11, 'VAR1503', '', '', '0', '10.5 bar', '93600', '1500', '8/8', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:08:30', '0000-00-00 00:00:00', ''),
(12, 'VAR1504', '', '', '0', '12.5 bar', '112200', '1500', '10/10', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:09:49', '0000-00-00 00:00:00', ''),
(13, 'VAR2002', '', '', '0', '7 bar', '89000', '2000', '5/6', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:12:06', '0000-00-00 00:00:00', ''),
(14, 'VAR2003', '', '', '0', '10.5 bar', '106500', '2000', '8/8', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:12:53', '0000-00-00 00:00:00', ''),
(15, 'VAR2004', '', '', '0', '12.5 bar', '128000', '2000', '10/10', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:13:20', '0000-00-00 00:00:00', ''),
(16, 'VAR3002', '', '', '0', '7 bar', '125700', '3000', '5/6', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:15:00', '0000-00-00 00:00:00', ''),
(17, 'VAR3003', '', '', '0', '10.5 bar', '155000', '3000', '8/8', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:15:49', '0000-00-00 00:00:00', ''),
(18, 'VAR3004', '', '', '0', '12.5 bar', '185400', '3000', '10/10', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:16:25', '0000-00-00 00:00:00', ''),
(19, 'VAR4002', '', '', '0', '7 bar', '170900', '4000', '8/8', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:17:33', '0000-00-00 00:00:00', ''),
(20, 'VAR4003', '', '', '0', '10.5 bar', '207700', '4000', '10/10', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:00:28', '0000-00-00 00:00:00', ''),
(21, 'VAR4004', '', '', '0', '12.5 bar', '255600', '4000', '12/12', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:19:20', '0000-00-00 00:00:00', ''),
(22, 'VAR5002', '', '', '0', '7 bar', '188800', '5000', '8/8', '4 NB Flg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 13:22:00', '0000-00-00 00:00:00', ''),
(23, 'VAR5003', '', '', '0', '10.5 bar', '235900', '5000', '10/10', '4 NB Flg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:00:04', '0000-00-00 00:00:00', ''),
(24, 'VAR5004', '', '', '0', '12.5 bar', '264800', '5000', '12/12', '4 NB Flg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:02:00', '0000-00-00 00:00:00', ''),
(25, 'VAR6002', '', '', '0', '7 bar', '239900', '6000', '8/8', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:03:20', '0000-00-00 00:00:00', ''),
(26, 'VAR6003', '', '', '0', '10.5 bar', '289700', '6000', '10/10', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:03:56', '0000-00-00 00:00:00', ''),
(27, 'VAR6004', '', '', '0', '12.5 bar', '344400', '6000', '12/12', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:04:24', '0000-00-00 00:00:00', ''),
(28, 'VAR7502', '', '', '0', '7 bar', '308200', '7500', '8/10', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:05:18', '0000-00-00 00:00:00', ''),
(29, 'VAR7503', '', '', '0', '10.5 bar', '377500', '7500', '12/12', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:05:53', '0000-00-00 00:00:00', ''),
(30, 'VAR7504', '', '', '0', '12.5 bar', '447500', '7500', '12/14', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:06:23', '0000-00-00 00:00:00', ''),
(31, 'VAR10002', '', '', '0', '7 bar', '448800', '10000', '8/10', '8 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:08:57', '0000-00-00 00:00:00', ''),
(32, 'VAR10003', '', '', '0', '10.5 bar', '449000', '10000', '10/12', '8 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:08:54', '0000-00-00 00:00:00', ''),
(33, 'VAR10004', '', '', '0', '12.5 bar', '578500', '10000', '12/14', '8 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-21 14:08:17', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_vxs`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_vxs` (
  `vxs_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `vxs_vartex_separator` varchar(255) NOT NULL,
  `vxs_pipe_size` varchar(255) NOT NULL,
  `vxs_line_weight` varchar(255) NOT NULL,
  `vxs_capacity` varchar(255) NOT NULL,
  `vxs_in_out` varchar(255) NOT NULL,
  `vxs_delivery_trm` varchar(255) NOT NULL,
  `vxs_warenty_doc` varchar(255) NOT NULL,
  `vxs_warenty_doi` varchar(255) NOT NULL,
  `vxs_wrk_presure` varchar(255) NOT NULL,
  `vxs_weight` varchar(255) NOT NULL,
  `vxs_product_cost` varchar(255) NOT NULL,
  `vxs_discount` varchar(255) NOT NULL,
  `vxs_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vxs_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`vxs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_oem_product_vxs`
--

INSERT INTO `tbl_oem_product_vxs` (`vxs_id`, `product_model`, `sap_code`, `description`, `vxs_vartex_separator`, `vxs_pipe_size`, `vxs_line_weight`, `vxs_capacity`, `vxs_in_out`, `vxs_delivery_trm`, `vxs_warenty_doc`, `vxs_warenty_doi`, `vxs_wrk_presure`, `vxs_weight`, `vxs_product_cost`, `vxs_discount`, `vxs_changed_on`, `vxs_updated_on`, `status`) VALUES
(1, 'VXS 010	', '', '', '4600	', 'G 1/4 ', '1.75	', '100	', '1/2', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-22 11:39:13', '0000-00-00 00:00:00', ''),
(4, 'VXS 012', '', '', '4600	', 'G 3/4	', '1.75', '125	', ' 1/2', 'Exstock', '12', '18', ' 7 to 12.5 bar g', '0', '', '', '2017-03-22 11:28:57', '0000-00-00 00:00:00', ''),
(5, 'VXS 015	', '', '', '5200	', 'G 1', '1.75	', '150	', '3/4', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-22 11:30:31', '0000-00-00 00:00:00', ''),
(6, 'VXS 025	', '', '', '7200    ', 'G 1 1/2	', '4.5	', '350	 ', '1', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-22 11:34:00', '0000-00-00 00:00:00', ''),
(7, 'VXS 040	', '', '', '15300', 'G 2', '7.5	', '600	', ' 2', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-22 11:38:02', '0000-00-00 00:00:00', ''),
(8, 'VXS 090	', '', '', '19400	', 'G 2 1/2', '9.5	', '1000	', ' 2 1/2', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-03-22 11:37:33', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_oem_product_wah`
--

CREATE TABLE IF NOT EXISTS `tbl_oem_product_wah` (
  `wah_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `wah_with_moisture` varchar(255) NOT NULL,
  `wah_capacity` varchar(255) NOT NULL,
  `wah_ac_bsp` varchar(255) NOT NULL,
  `wah_cooling_water` varchar(255) NOT NULL,
  `wah_water_flow_lpm` varchar(255) NOT NULL,
  `wah_shelldia` varchar(255) NOT NULL,
  `wah_delivery_trm` varchar(255) NOT NULL,
  `wah_warenty_doc` varchar(255) NOT NULL,
  `wah_warenty_doi` varchar(255) NOT NULL,
  `wah_wrk_pressure` varchar(255) NOT NULL,
  `wah_weight` varchar(255) NOT NULL,
  `wah_product_cost` varchar(255) NOT NULL,
  `wah_discount` varchar(255) NOT NULL,
  `wah_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `wah_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`wah_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_oem_product_wah`
--

INSERT INTO `tbl_oem_product_wah` (`wah_id`, `product_model`, `sap_code`, `description`, `wah_with_moisture`, `wah_capacity`, `wah_ac_bsp`, `wah_cooling_water`, `wah_water_flow_lpm`, `wah_shelldia`, `wah_delivery_trm`, `wah_warenty_doc`, `wah_warenty_doi`, `wah_wrk_pressure`, `wah_weight`, `wah_product_cost`, `wah_discount`, `wah_changed_on`, `wah_updated_on`, `status`) VALUES
(1, 'WAH005B	', '', '', '11500	', '50	', '2 NB Flg	', '1/2 BSP	', '8	', '2 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:19:33', '0000-00-00 00:00:00', ''),
(2, 'WAH010B	', '', '', '17000	', '100	', '2 NB Flg	', '1/2 BSP	', '15	', '2 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:20:56', '0000-00-00 00:00:00', ''),
(3, 'WAH015B	', '', '', '19800	', '150	', '3 NB Flg	', '3/4 BSP	', '22	', '3 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:22:06', '0000-00-00 00:00:00', ''),
(4, 'WAH020B	', '', '', '22500	', '200	', '3 NB Flg	', '3/4 BSP	', '30	', '3 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:23:35', '0000-00-00 00:00:00', ''),
(5, 'WAH025B	', '', '', '23300	', '250', '3 NB Flg	', '3/4 BSP	', '38	', '3 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:24:21', '0000-00-00 00:00:00', ''),
(6, 'WAH030B	', '', '', '27500	', '300', '3 NB Flg	', '3/4 BSP	', '45	', '3 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:27:33', '0000-00-00 00:00:00', ''),
(7, 'WAH040B	', '', '', '32300	', '400	', '4 NB Flg	', '1 BSP	', '60	', '4 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:28:52', '0000-00-00 00:00:00', ''),
(8, 'WAH050B	', '', '', '39300	', '500', '4 NB Flg	', '1 BSP	', '75', '4 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:30:37', '0000-00-00 00:00:00', ''),
(9, 'WAH075B	', '', '', '49500	', '750	', '6 NB Flg	', '1 1/2 BSP	', '115', '6NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:34:00', '0000-00-00 00:00:00', ''),
(10, 'WAH100B	', '', '', '63200	', '1000', '6 NB Flg	', '1 1/2 BSP	', '160', '6NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:34:40', '0000-00-00 00:00:00', ''),
(11, 'WAH125B	', '', '', '79800	', '1250', '6 NB Flg	', '1 1/2 BSP	', '200', '6NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:35:14', '0000-00-00 00:00:00', ''),
(12, 'WAH150B	', '', '', '126300	', '1500	', '8 NB Flg	', '2 BSP	', '240', '8 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-22 11:36:42', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ofm`
--

CREATE TABLE IF NOT EXISTS `tbl_ofm` (
  `ofm_id` int(255) NOT NULL AUTO_INCREMENT,
  `ofm_enqiry_number` varchar(255) NOT NULL,
  `ofm_price_master` varchar(255) NOT NULL,
  `ofm_oem_price` varchar(255) NOT NULL,
  `ofm_quot_ref` varchar(255) NOT NULL,
  `ofm_quot_date` varchar(255) NOT NULL,
  `ofm_po_ref` varchar(255) NOT NULL,
  `ofm_po_date` varchar(255) NOT NULL,
  `ofm_from` varchar(255) NOT NULL,
  `ofm_sap_code` varchar(255) NOT NULL,
  `ofm_to` varchar(255) NOT NULL,
  `ofm_cus_name` varchar(255) NOT NULL,
  `ofm_cus_addr1` varchar(255) NOT NULL,
  `ofm_cus_addr2` varchar(255) NOT NULL,
  `ofm_cus_city` varchar(255) NOT NULL,
  `ofm_cus_state` varchar(255) NOT NULL,
  `ofm_cus_pin_code` varchar(255) NOT NULL,
  `ofm_cus_tin` varchar(255) NOT NULL,
  `ofm_cus_cst` varchar(255) NOT NULL,
  `ofm_cus_ecc` varchar(255) NOT NULL,
  `ofm_cus_pan_no` varchar(255) NOT NULL,
  `ofm_cus_name_cp` varchar(255) NOT NULL,
  `ofm_cus_cont_no` varchar(255) NOT NULL,
  `ofm_cus_email` varchar(255) NOT NULL,
  `ofm_bill_addr1` varchar(255) NOT NULL,
  `ofm_bill_addr2` varchar(255) NOT NULL,
  `ofm_bill_city` varchar(255) NOT NULL,
  `ofm_bill_state` varchar(255) NOT NULL,
  `ofm_bill_pin_code` varchar(255) NOT NULL,
  `ofm_bill_tin` varchar(255) NOT NULL,
  `ofm_bill_cst` varchar(255) NOT NULL,
  `ofm_bill_ecc` varchar(255) NOT NULL,
  `ofm_bill_pan_no` varchar(255) NOT NULL,
  `ofm_bill_name_cp` varchar(255) NOT NULL,
  `ofm_bill_cont_no` varchar(255) NOT NULL,
  `ofm_bill_email` varchar(255) NOT NULL,
  `ofm_ship_addr1` varchar(255) NOT NULL,
  `ofm_ship_addr2` varchar(255) NOT NULL,
  `ofm_ship_city` varchar(255) NOT NULL,
  `ofm_ship_state` varchar(255) NOT NULL,
  `ofm_ship_pin_code` varchar(255) NOT NULL,
  `ofm_ship_tin` varchar(255) NOT NULL,
  `ofm_ship_cst` varchar(255) NOT NULL,
  `ofm_ship_ecc` varchar(255) NOT NULL,
  `ofm_ship_pan_no` varchar(255) NOT NULL,
  `ofm_ship_name_cp` varchar(255) NOT NULL,
  `ofm_ship_cont_no` varchar(255) NOT NULL,
  `ofm_ship_email` varchar(255) NOT NULL,
  `ofm_pro_model` varchar(255) NOT NULL,
  `ofm_pro_sap_code` varchar(255) NOT NULL,
  `ofm_pro_descrip` varchar(255) NOT NULL,
  `ofm_pro_qty` varchar(255) NOT NULL,
  `ofm_pro_list_price` varchar(255) NOT NULL,
  `ofm_pro_discount` varchar(255) NOT NULL,
  `ofm_pro_act_price` varchar(255) NOT NULL,
  `ofm_pro_req_date` varchar(255) NOT NULL,
  `ofm_note` varchar(255) NOT NULL,
  `ofm_note_total` varchar(255) NOT NULL,
  `ofm_note_pf` varchar(255) NOT NULL,
  `ofm_note_b_e_d` varchar(255) NOT NULL,
  `ofm_note_vat_cst` varchar(255) NOT NULL,
  `ofm_note_freight_amt` varchar(255) NOT NULL,
  `ofm_note_insurance` varchar(255) NOT NULL,
  `ofm_note_gra_tot` varchar(255) NOT NULL,
  `ofm_form_app` varchar(255) NOT NULL,
  `ofm_insuranc` varchar(255) NOT NULL,
  `ofm_frei_terms` varchar(255) NOT NULL,
  `ofm_pay_terms` varchar(255) NOT NULL,
  `ofm_others` varchar(255) NOT NULL,
  `ofm_pbg_abg` varchar(255) NOT NULL,
  `ofm_inspect` varchar(255) NOT NULL,
  `ofm_ld_clause` varchar(255) NOT NULL,
  `ofm_app_des` varchar(255) NOT NULL,
  `ofm_permit` varchar(255) NOT NULL,
  `ofm_commis_to` varchar(255) NOT NULL,
  `ofm_commis` varchar(255) NOT NULL,
  `ofm_logis_pref` varchar(255) NOT NULL,
  `ofm_des_name_cp` varchar(255) NOT NULL,
  `ofm_des_cont_no` varchar(255) NOT NULL,
  `ofm_des_addr1` varchar(255) NOT NULL,
  `ofm_des_addr2` varchar(255) NOT NULL,
  `ofm_des_city` varchar(255) NOT NULL,
  `ofm_des_saate` varchar(255) NOT NULL,
  `ofm_des_pin_code` varchar(255) NOT NULL,
  `ofm_comiss_inst` varchar(255) NOT NULL,
  `ofm_spec_inst` varchar(255) NOT NULL,
  `ofm_prepared` varchar(255) NOT NULL,
  `ofm_checked` varchar(255) NOT NULL,
  `ofm_approved` varchar(255) NOT NULL,
  `ofm_createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ofm_updatedat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ofm_checkedbycreator` varchar(255) NOT NULL,
  `ofm_checkedby_update` varchar(255) NOT NULL,
  `ofm_approvedat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`ofm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_ofm`
--

INSERT INTO `tbl_ofm` (`ofm_id`, `ofm_enqiry_number`, `ofm_price_master`, `ofm_oem_price`, `ofm_quot_ref`, `ofm_quot_date`, `ofm_po_ref`, `ofm_po_date`, `ofm_from`, `ofm_sap_code`, `ofm_to`, `ofm_cus_name`, `ofm_cus_addr1`, `ofm_cus_addr2`, `ofm_cus_city`, `ofm_cus_state`, `ofm_cus_pin_code`, `ofm_cus_tin`, `ofm_cus_cst`, `ofm_cus_ecc`, `ofm_cus_pan_no`, `ofm_cus_name_cp`, `ofm_cus_cont_no`, `ofm_cus_email`, `ofm_bill_addr1`, `ofm_bill_addr2`, `ofm_bill_city`, `ofm_bill_state`, `ofm_bill_pin_code`, `ofm_bill_tin`, `ofm_bill_cst`, `ofm_bill_ecc`, `ofm_bill_pan_no`, `ofm_bill_name_cp`, `ofm_bill_cont_no`, `ofm_bill_email`, `ofm_ship_addr1`, `ofm_ship_addr2`, `ofm_ship_city`, `ofm_ship_state`, `ofm_ship_pin_code`, `ofm_ship_tin`, `ofm_ship_cst`, `ofm_ship_ecc`, `ofm_ship_pan_no`, `ofm_ship_name_cp`, `ofm_ship_cont_no`, `ofm_ship_email`, `ofm_pro_model`, `ofm_pro_sap_code`, `ofm_pro_descrip`, `ofm_pro_qty`, `ofm_pro_list_price`, `ofm_pro_discount`, `ofm_pro_act_price`, `ofm_pro_req_date`, `ofm_note`, `ofm_note_total`, `ofm_note_pf`, `ofm_note_b_e_d`, `ofm_note_vat_cst`, `ofm_note_freight_amt`, `ofm_note_insurance`, `ofm_note_gra_tot`, `ofm_form_app`, `ofm_insuranc`, `ofm_frei_terms`, `ofm_pay_terms`, `ofm_others`, `ofm_pbg_abg`, `ofm_inspect`, `ofm_ld_clause`, `ofm_app_des`, `ofm_permit`, `ofm_commis_to`, `ofm_commis`, `ofm_logis_pref`, `ofm_des_name_cp`, `ofm_des_cont_no`, `ofm_des_addr1`, `ofm_des_addr2`, `ofm_des_city`, `ofm_des_saate`, `ofm_des_pin_code`, `ofm_comiss_inst`, `ofm_spec_inst`, `ofm_prepared`, `ofm_checked`, `ofm_approved`, `ofm_createdat`, `ofm_updatedat`, `ofm_checkedbycreator`, `ofm_checkedby_update`, `ofm_approvedat`, `status`) VALUES
(1, '1001', 'huu', 'ygyu', 'hgbuj', 'hb', 'hbbj', 'hvbhj', 'bjh', 'hvj', 'hbjb', 'hbhj', 'jhj', 'lklm', 'knml', 'knl', 'nk', 'jnkj', 'kjnk', 'bjk', 'jbhk', 'jnbk', 'mnkkml', 'bkjnkj', 'jknknk', 'knjkn', 'vgv', 'bjbh', 'gvvh', 'hjbkn', 'jhbmkbh', 'jkn', 'kjnbj', 'nbjmj', 'bhhjbh', 'hvyhf', 'gvyhvg', 'gvyv', 'gvyghvg', 'cgf', 'jkhn', 'jhbm', 'gvh', 'klm', 'kmolm', 'hbuj', 'lkm', 'lojmkhbu', 'bjnjk', 'hbjb', 'hbjjnk', 'jbjkhb', 'gvcghcvg', 'vghvgy', 'gv', 'ygfvyh', 'gvyv', 'gvhv', 'gvygv', 'yggvgh', 'gvyhg', 'v', 'gvh', 'gv', 'uh', 'iu', 'hgh', 'hbj', 'hbjhb', 'hbjbjh', 'hbjhb', 'jbuhbhj', 'hbjhb', 'hbjhb', 'hbjh', 'biujoiu', 'oijkoi', 'hjiuhiuu', 'hijhi', 'uhiuhui', 'hi', 'hhihij', 'tfryf', 'tfytf', 'fgytff', 'fcgfc', 'cg', 'cfg', 'trdft', '2017-03-25 12:10:13', '0000-00-00 00:00:00', 'yfgu', 'drt', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participants`
--

CREATE TABLE IF NOT EXISTS `tbl_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_participants`
--

INSERT INTO `tbl_participants` (`id`, `name`, `mail`, `phone_no`, `status`) VALUES
(1, 'hari', 'hp.hari423@gmail.com', '9487914513', 1),
(5, 'HariPrasath', 'hari@banyaninfotech.com', '9487914513', 1),
(6, 'HariPrasath', 'hari@banyaninfotech.com', '9487914513', 1),
(7, 'naveen', 'project@gemindia.com', '7358037380', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_2kd`
--

CREATE TABLE IF NOT EXISTS `tbl_product_2kd` (
  `2kd_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `2kd_ac_r134a` varchar(255) NOT NULL,
  `2kd_ac_r404a` varchar(255) NOT NULL,
  `2kd_ac_r407c` varchar(255) NOT NULL,
  `2kd_capty_cfm` varchar(255) NOT NULL,
  `2kd_wrk_pressure` varchar(255) NOT NULL,
  `2kd_ac_in_out` varchar(255) NOT NULL,
  `2kd_rat_pwr` varchar(255) NOT NULL,
  `2kd_delvry_term` varchar(255) NOT NULL,
  `2kd_ec_220v` varchar(255) NOT NULL,
  `2kd_ec_415v` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `2kd_wrnt_doc` varchar(255) NOT NULL,
  `2kd_wrnt_doi` varchar(255) NOT NULL,
  `2kd_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `2kd_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `2kd_status` varchar(255) NOT NULL,
  PRIMARY KEY (`2kd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_product_2kd`
--

INSERT INTO `tbl_product_2kd` (`2kd_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `2kd_ac_r134a`, `2kd_ac_r404a`, `2kd_ac_r407c`, `2kd_capty_cfm`, `2kd_wrk_pressure`, `2kd_ac_in_out`, `2kd_rat_pwr`, `2kd_delvry_term`, `2kd_ec_220v`, `2kd_ec_415v`, `weight`, `discount`, `2kd_wrnt_doc`, `2kd_wrnt_doi`, `2kd_created_on`, `2kd_updated_on`, `2kd_status`) VALUES
(1, '2KD002B', '300045', 'COMPRESSED AIRDRYER, 20 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '2KD002B.pdf', '30155', '0', '0	', '20	', '7 - 16	', '1/2 BSP(F)	', '0.15	', 'Exstock	', 'yse', 'no', '0', '', '24', '30', '2017-04-01 10:17:17', '0000-00-00 00:00:00', ''),
(2, '2KD004B', '300047', 'COMPRESSED AIRDRYER, 40 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '2KD004B.pdf', '37080	', '0', '0', '40	', '7 - 16	', '1/2  BSP(F)	', '0.20	', 'Exstock	', 'yes', 'no', '0', '', '24', '30', '2017-04-01 10:16:51', '0000-00-00 00:00:00', ''),
(3, '2KD006B', '300048', 'COMPRESSED AIRDRYER, 60 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '2KD006B.pdf', '49400	', '0	', '0	', '60	', '7 - 16	', '1 BSP(F)	', '0.40	', 'Exstock	', 'yes', 'no', '0', '', '24', '30', '2017-04-01 10:16:36', '0000-00-00 00:00:00', ''),
(4, '2KD008B', '300049', 'COMPRESSED AIRDRYER, 60 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '2KD008B.pdf', '59565	', '0	', '0	', '80	', '7 - 16	', '1 BSP(F)	', '0.50	', 'Exstock', 'yes', 'no', '0', '', '24', '30', '2017-04-01 10:16:21', '0000-00-00 00:00:00', ''),
(5, '2KD010B', '300050', 'COMPRESSED AIRDRYER, 100 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '2KD010B.pdf', '71820', '0', '0', '100	', '7 - 16	', '1 BSP(F)	', '0.60	', 'Exstock 	', 'yes', 'no', '0', '', '24', '30', '2017-04-01 10:16:06', '0000-00-00 00:00:00', ''),
(6, '2KD015B', '300051', 'COMPRESSED AIRDRYER, 150 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '2KD015B.pdf', '95157', '0		', '0	', '150	', '7 - 16	', '1 1/2 BSP(F)	', '0.90', 'Exstock 		', 'no', 'yes', '0', '', '24', '30', '2017-04-01 10:15:52', '0000-00-00 00:00:00', ''),
(7, '2KD020B', '300052', 'COMPRESSED AIRDRYER, 150 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '', '98100		', '0	', '0', '200	', '7 - 16	', '1 1/2 BSP(F)	', '1.20	', 'Exstock	', 'no', 'yes', '0', '', '24', '30', '2017-04-01 10:12:57', '0000-00-00 00:00:00', ''),
(8, '2KD025B', '300053', 'COMPRESSED AIRDRYER, 250 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '2KD025B.pdf', '135000	', '0	', '0	', '250	', '7 - 16	', '2 BSP(F)	', '1.40	', 'Exstock 		', 'no', 'yes', '0', '', '24', '30', '2017-04-01 10:15:35', '0000-00-00 00:00:00', ''),
(11, '2KD030B', '300054', 'COMPRESSED AIRDRYER, 300 CFM, 7 TO 16 BAR G, AIR COOLED, R134A\n', '\n2KD030B.pdf', '145300', '0', '0', '300', '7-16', ' 2 BSP(F)', '1.60', 'Exstock ', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:15:16', '0000-00-00 00:00:00', ''),
(13, '2KD 250F ', '300069', 'COMPRESSED AIR DRYER TO HANDLE 2500CFM;AT WORKING PRESSURE 8KG/CM2;WATER COOLED WITH R407C\n', '2KD+250F.pdf', '0', '750000 ', '750000 ', '2500 ', '7-12.5', '6â€ NB ASME  Flg ', ' 11.00(E)/9.60(F)', '4-6 Weeks', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:27:43', '0000-00-00 00:00:00', ''),
(14, '2KD 125F ', '300066', 'COMPRESSED AIR DRYER CAPACITY 1250CFM/ R407C/IS2825', '2KD+125F.pdf', '0', '410000 ', '0', '1250 ', '7-16 ', '4â€NB ASME Flg ', '5.70(E)/4.80(F)  ', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:27:22', '0000-00-00 00:00:00', ''),
(15, '2KD 040B', '300055', 'COMPRESSED AIRDRYER, 400 CFM, 7 TO 16 BAR G, AIR COOLED, R134A\n', '2KD040B.pdf', '200200	', '0	', '0	', '400	', '7 - 16	', '2 BSP(F)', '1.90	', 'Exstock /  1 week		', 'no', 'yes', '0', '', '24', '30', '2017-04-01 12:08:41', '0000-00-00 00:00:00', ''),
(16, '2KD 100F ', '300065', 'COMPRESSED AIR DRYER 1000CFM /WATER COOLED / R407/7BAR PRESSURE\n', '2KD+100F.pdf', '0', '400000 ', '400000 ', '1000  ', '7-16 ', '3â€ NB ASME Flg ', '5.00(E) / 4.10(F)', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:26:39', '0000-00-00 00:00:00', ''),
(17, '2KD 075F ', '300064', 'COMPRESSED AIR DRYER 1250CFM,R407C,WATER COOLED\n', '2KD+075F.pdf', '0', '300000 ', '300000 ', '750  ', '7-16 ', '3â€ NB ASME Flg ', '3.80(E) / 3.00(F)', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:26:21', '0000-00-00 00:00:00', ''),
(18, '2KD 060B ', '300057', 'COMPRESSED AIRDRYER, 600 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '2KD060B.pdf', '246900', '0', '0', ' 600 ', '7-16 ', '2 BSP(F) ', '2.80 ', 'Exstock /  1 week', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:00:27', '0000-00-00 00:00:00', ''),
(21, '2KD 050B', '300056', 'COMPRESSED AIRDRYER, 500 CFM, 7 TO 16 BAR G, AIR COOLED, R134A\n', '2KD050B.pdf', '240300', '0	', '0	', '500	', '7 - 16	', '2 BSP(F)	', '2.30	', 'Exstock /  1 week		', 'no', 'yes', '0', '', '24', '30', '2017-04-01 12:09:05', '0000-00-00 00:00:00', ''),
(22, '2KD 250E ', '300063', 'COMPRESSED AIR DRYER CAPACITY 2500CFM/ R407C/IS2825\n', '2KD+250E.pdf', '0', '750000 ', '0', '2500 ', '7-12.5', '6â€ NB ASME  Flg ', ' 11.00(E)/9.60(F)', '4-6 Weeks', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:25:41', '0000-00-00 00:00:00', ''),
(23, '2KD 125E', '300060', 'COMPRESSED AIR DRYER CAPACITY 1250CFM/ R407C/IS2825\n', '2KD+125E.pdf', '0', '410000 ', '0', '1250 ', '7-16 ', '4â€NB ASME Flg ', '5.70(E)/4.80(F)  ', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:25:24', '0000-00-00 00:00:00', ''),
(24, '2KD 100E', '300059', '2KD+100E, COMPRESSED AIR DRYER,GAS R407C,WR.PRE-7-16KG/CM^2\n', '2KD+100E.pdf', '0', '400000 ', '400000 ', '1000  ', '7-16 ', '3â€ NB ASME Flg ', '5.00(E) / 4.10(F)', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:24:55', '0000-00-00 00:00:00', ''),
(25, '2KD 075E', '300058', 'COMPRESSED AIRDRYER OF CAPACITY 750CFM/ R407C/IS2825\n', '2KD+075E.pdf', '0', '300000 ', '300000 ', '750  ', '7-16 ', '3â€ NB ASME Flg ', '3.80(E) / 3.00(F)', '2Weeks/ 3Weeks', '0', 'yes', '0', '', '24', '30', '2017-04-01 10:24:29', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_2kd7`
--

CREATE TABLE IF NOT EXISTS `tbl_product_2kd7` (
  `kd7_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `kd7_acr134a` varchar(255) NOT NULL,
  `kd7_capcty` varchar(255) NOT NULL,
  `kd7_wrkpressur` varchar(255) NOT NULL,
  `kd7_ac_inout` varchar(255) NOT NULL,
  `kd7_rate_pwr` varchar(255) NOT NULL,
  `kd7_delvr` varchar(255) NOT NULL,
  `kd7_elec_230v` varchar(255) NOT NULL,
  `kd7_elec_415v` varchar(255) NOT NULL,
  `kd7_warenty_doc` varchar(255) NOT NULL,
  `kd7_warenty_doi` varchar(255) NOT NULL,
  `kd7_weigt` varchar(255) NOT NULL,
  `kd7_air_inlet` varchar(255) NOT NULL,
  `kd7_dew_pt` varchar(255) NOT NULL,
  `kd7_ambinet` varchar(255) NOT NULL,
  `kd7_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kd7_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kad7_status` varchar(255) NOT NULL,
  PRIMARY KEY (`kd7_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_product_2kd7`
--

INSERT INTO `tbl_product_2kd7` (`kd7_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `kd7_acr134a`, `kd7_capcty`, `kd7_wrkpressur`, `kd7_ac_inout`, `kd7_rate_pwr`, `kd7_delvr`, `kd7_elec_230v`, `kd7_elec_415v`, `kd7_warenty_doc`, `kd7_warenty_doi`, `kd7_weigt`, `kd7_air_inlet`, `kd7_dew_pt`, `kd7_ambinet`, `kd7_created_on`, `kd7_updated_on`, `kad7_status`) VALUES
(4, '2KD7004B', '300071', 'COMPRESSED AIR DRYER, 40 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7004B.pdf', '51400 ', '40 ', '40 â€“ 42 ', 'Â½ BSP', ' 0.36', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:44:29', '0000-00-00 00:00:00', ''),
(5, '2KD7006B', '300072', 'COMPRESSED AIR DRYER, 60 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7006B.pdf', '69000 ', '60', '40 â€“ 42 ', 'Â½ BSP', ' 0.36', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:45:48', '0000-00-00 00:00:00', ''),
(6, '2KD7008B', '300073', 'COMPRESSED AIR DRYER, 80 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7008B.pdf', '90200 ', '80 ', '40 â€“ 42', ' 1 BSP ', '0.48', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:46:11', '0000-00-00 00:00:00', ''),
(7, '2KD7010B', '300074', 'COMPRESSED AIRDRYER, 100 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '', '102100 ', '100 ', '40 â€“ 42 ', ' 1 BSP ', '0.60', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-31 08:43:45', '0000-00-00 00:00:00', ''),
(8, '2KD7015B', '300075', 'COMPRESSED AIR DRYER, 150 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7015B.pdf', '108700 ', '150 ', '40 â€“ 42 ', ' 1 BSP ', ' 0.68', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:46:34', '0000-00-00 00:00:00', ''),
(9, '2KD7020B', '300076', 'COMPRESSED AIR DRYER, 200 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '', '135900 ', '200 ', '40 â€“ 42 ', ' 1 Â½ BSP ', '1.00', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-31 08:46:30', '0000-00-00 00:00:00', ''),
(10, '2KD7025B', '300077', 'COMPRESSED AIR DRYER, 250 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7025B.pdf', '163300 ', '250  ', '40 â€“ 42 ', ' 1 Â½ BSP ', '1.40', '  Exstock/1 week', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:47:04', '0000-00-00 00:00:00', ''),
(11, '2KD7030B', '300078', 'COMPRESSED AIR DRYER, 300 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7030B.pdf', '170000 ', '300 ', '40 â€“ 42 ', ' 1 Â½ BSP ', '1.40', '  20 days', 'yes', '0', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:47:20', '0000-00-00 00:00:00', ''),
(12, '2KD7040B', '300079', 'COMPRESSED AIR DRYER, 400 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '', '264200 ', '400 ', '40 â€“ 42 ', ' 2 BSP ', '1.80', '  20 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-03-31 08:53:30', '0000-00-00 00:00:00', ''),
(13, '2KD7050B', '300080', 'COMPRESSED AIR DRYER, 500 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7050B.pdf', '301600 ', '500 ', '40 â€“ 42 ', ' 2 NB flg ', '2.20 ', ' 25 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:47:35', '0000-00-00 00:00:00', ''),
(14, '2KD7060B', '300081', 'COMPRESSED AIR DRYER, 600 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7060B.pdf', '342000 ', '600 ', '40 â€“ 42 ', ' 2 NB flg ', '2.60 ', ' 25 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:47:51', '0000-00-00 00:00:00', ''),
(15, '2KD7075B', '300082', 'COMPRESSED AIR DRYER, 750 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7075B.pdf', '390000 ', '750', '40 â€“ 42 ', ' 2 NB flg ', '3.30 ', '30 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:48:11', '0000-00-00 00:00:00', ''),
(16, '2KD7100B', '300083', 'COMPRESSED AIR DRYER, 1000 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '2KD7100B.pdf', '470000 ', '1000', '40 â€“ 42 ', ' 2 NB flg ', ' 4.20', '30 days', '0', 'yes', '24', '30', '0', '45 C', '+3 PDP', '35 C', '2017-04-01 11:48:22', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_2kw`
--

CREATE TABLE IF NOT EXISTS `tbl_product_2kw` (
  `2kw_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `2kw_air_cooled_r134` varchar(255) NOT NULL,
  `2kw_capacity` varchar(255) NOT NULL,
  `2kw_working_pressure` varchar(255) NOT NULL,
  `2kw_air_connection_in_out` varchar(255) NOT NULL,
  `2kw_power_consumption` varchar(255) NOT NULL,
  `2kw_delivery_terms` varchar(255) NOT NULL,
  `2kw_electric_230v` varchar(255) NOT NULL,
  `2kw_electric_415v` varchar(255) NOT NULL,
  `2kw_warrenet_doc` varchar(255) NOT NULL,
  `2kw_warrenty_doi` varchar(255) NOT NULL,
  `2kw_weight` varchar(255) NOT NULL,
  `2kw_packing_cost` varchar(255) NOT NULL,
  `2kw_discount` varchar(255) NOT NULL,
  `2kw_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `2kw_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `2kw_status` varchar(255) NOT NULL,
  PRIMARY KEY (`2kw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_product_2kw`
--

INSERT INTO `tbl_product_2kw` (`2kw_id`, `product_model`, `sap_code`, `description`, `2kw_air_cooled_r134`, `2kw_capacity`, `2kw_working_pressure`, `2kw_air_connection_in_out`, `2kw_power_consumption`, `2kw_delivery_terms`, `2kw_electric_230v`, `2kw_electric_415v`, `2kw_warrenet_doc`, `2kw_warrenty_doi`, `2kw_weight`, `2kw_packing_cost`, `2kw_discount`, `2kw_created_on`, `2kw_updated_on`, `2kw_status`) VALUES
(1, '2KW020B', '300085', 'COMPRESSED AIR DRYER, WALLMOUNTED, 20 CFM, 7 TO 16 BAR G, AIR COOLED, R134A ', '37500', '20', '16', '1/2 BSP	', '0.21', ' Exstock', 'yes', 'no', 'fhfgh', '30', '0', '', '', '2017-04-01 07:35:28', '0000-00-00 00:00:00', ''),
(2, '2KW040B', '300086', 'COMPRESSED AIR DRYER, WALLMOUNTED, 40 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '48800', '40', ' 16', 'Â½ BSP			', '0.375', 'Exstock', 'yes', 'no', '24', '30', '0', '', '', '2017-03-30 14:27:06', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_acc`
--

CREATE TABLE IF NOT EXISTS `tbl_product_acc` (
  `acc_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `acc_wthout_vertax` varchar(255) NOT NULL,
  `acc_capacity` varchar(255) NOT NULL,
  `acc_wrk_pressure` varchar(255) NOT NULL,
  `acc_ac_bsp` varchar(255) NOT NULL,
  `acc_rate_power` varchar(255) NOT NULL,
  `acc_ec_220v` varchar(255) NOT NULL,
  `acc_ec_415v` varchar(255) NOT NULL,
  `acc_warenty_doc` varchar(255) NOT NULL,
  `acc_warenty_doi` varchar(255) NOT NULL,
  `acc_delivery` varchar(255) NOT NULL,
  `acc_weight` varchar(255) NOT NULL,
  `acc_product_cost` varchar(255) NOT NULL,
  `acc_discount` varchar(255) NOT NULL,
  `acc_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `acc_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_product_acc`
--

INSERT INTO `tbl_product_acc` (`acc_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `acc_wthout_vertax`, `acc_capacity`, `acc_wrk_pressure`, `acc_ac_bsp`, `acc_rate_power`, `acc_ec_220v`, `acc_ec_415v`, `acc_warenty_doc`, `acc_warenty_doi`, `acc_delivery`, `acc_weight`, `acc_product_cost`, `acc_discount`, `acc_changed_on`, `acc_updated_on`, `status`) VALUES
(1, 'ACC003A', '300424', 'AIR COOLER, AIR COOLED, 35 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC003.pdf', '8700	', '35	', '16	', '1/2', '0.036', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-04-01 10:38:36', '0000-00-00 00:00:00', ''),
(2, 'ACC005A    ', '300425', 'AIR COOLER, AIR COOLED, 50 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC005.pdf', '14100	', '50	', '16	', '3/4	', '0.11	', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-04-01 10:38:48', '0000-00-00 00:00:00', ''),
(3, 'ACC010A', '300426', 'AIR COOLER, AIR COOLED, 100 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC010.pdf', '18200	', '100	', '16	 ', '1 1/2	', '0.24			', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-04-01 10:39:00', '0000-00-00 00:00:00', ''),
(4, 'ACC015A', '300427', 'AIR COOLER, AIR COOLED, 150 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '', '20000			 	', '150	', '16	', ' 1 1/2	', '0.24			', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-04-01 08:28:17', '0000-00-00 00:00:00', ''),
(5, 'ACC020A', '300428', 'AIR COOLER, AIR COOLED, 200 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC020.pdf', '25800				 	', '200	', '16	', '2 NB Flg	', '0.24			', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-04-01 10:39:22', '0000-00-00 00:00:00', ''),
(6, 'ACC025A', '300429', 'AIR COOLER, AIR COOLED, 250 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '', '28600				 	', '250	', '16	', '2  NB Flg	', '0.24			', 'yes', 'no', '12', '18', '7days', '0', '', '', '2017-04-01 08:33:08', '0000-00-00 00:00:00', ''),
(7, 'ACC030A          ', '300430', 'AIR COOLER, AIR COOLED, 300 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC 030.pdf', '34400		 	', '300		', '16', '2  NB Flg	', '0.24			', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-04-01 10:39:46', '0000-00-00 00:00:00', ''),
(8, 'ACC040A     ', '300431', 'AIR COOLER, AIR COOLED, 400 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC 040.pdf', '37300			 	', '400	', '16	', '2  NB Flg	', '0.55	 		', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-04-01 10:40:00', '0000-00-00 00:00:00', ''),
(9, 'ACC060A', '300432', 'AIR COOLER, AIR COOLED, 600 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC 060.pdf', '49400				 	', '600		', '16	', '3 NB Flg	', '0.75	 ', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-04-01 10:40:15', '0000-00-00 00:00:00', ''),
(10, 'ACC075A', '300433', 'AIR COOLER, AIR COOLED, 750 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC 075.pdf', '65900	', '750	 	', '16			', '3 NB Flg	', '1.5', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-04-01 10:40:26', '0000-00-00 00:00:00', ''),
(11, 'ACC100A  ', '300434', 'AIR COOLER, AIR COOLED, 1000 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', 'ACC 100.pdf', '85800	', '1000		', '16			', '4 NB Flg	', '1.5', 'no', 'yes', '12', '18', '7days', '0', '', '', '2017-04-01 10:40:40', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_at`
--

CREATE TABLE IF NOT EXISTS `tbl_product_at` (
  `at_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `at_capacity` varchar(255) NOT NULL,
  `at_mv_bar` varchar(255) NOT NULL,
  `at_mv_accessories` varchar(255) NOT NULL,
  `at_shell_thick` varchar(255) NOT NULL,
  `at_in_out_connection` varchar(255) NOT NULL,
  `at_delevery_trm` varchar(255) NOT NULL,
  `at_hand_hole` varchar(255) NOT NULL,
  `at_warenty_doc` varchar(255) NOT NULL,
  `at_warenty_doi` varchar(255) NOT NULL,
  `at_moc` varchar(255) NOT NULL,
  `at_weight` varchar(255) NOT NULL,
  `at_product_cost` varchar(255) NOT NULL,
  `at_discount` varchar(255) NOT NULL,
  `at_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `at_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_product_at`
--

INSERT INTO `tbl_product_at` (`at_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `at_capacity`, `at_mv_bar`, `at_mv_accessories`, `at_shell_thick`, `at_in_out_connection`, `at_delevery_trm`, `at_hand_hole`, `at_warenty_doc`, `at_warenty_doi`, `at_moc`, `at_weight`, `at_product_cost`, `at_discount`, `at_changed_on`, `at_updated_on`, `status`) VALUES
(1, 'AT050', '300444', 'AIR TANK TO HANDLE 500 LTRS AT 10.5KG/SQ.CM WORKING PRESSURE', 'AT0503.pdf', '500 ltrs	', '16200', '3000    ', '5/6	', '1 BSP', 'Ex stock	', 'Hand Hole', '12', '18', 'IS 2062 / IS 2825', '0', '', '', '2017-04-01 10:45:39', '0000-00-00 00:00:00', ''),
(2, 'AT100', '300445', 'AIR TANK TO HANDLE 500 LTRS AT 10.5KG/SQ.CM WORKING PRESSURE', 'AT1003.pdf', '1000 ltrs', '28980', '3000	', '6/6', '1 1/2 BSP', 'Ex stock	', 'Hand Hole', '12', '18', 'IS 2062 / IS 2825', '0', '', '', '2017-04-01 10:45:51', '0000-00-00 00:00:00', ''),
(3, 'AT200', '300446', 'AIR TANK TO HANDLE 2000 LTRS AT 10.5KG/SQ.CM WORKING PRESSURE', 'AT2003.pdf', '2000 ltrs', '55800', '3000	', '8/8', '2 BSP', 'Ex stock	', 'Man hole  475x425mm', '12', '18', 'IS 2062 / IS 2825', '0', '', '', '2017-04-01 10:46:05', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE IF NOT EXISTS `tbl_product_category` (
  `product_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_category_name` varchar(255) NOT NULL,
  `product_tbl_name` varchar(255) NOT NULL,
  `product_category_created _on` datetime NOT NULL,
  `product_status` int(1) NOT NULL,
  PRIMARY KEY (`product_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Product Groups table' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`product_category_id`, `product_category_name`, `product_tbl_name`, `product_category_created _on`, `product_status`) VALUES
(1, 'dryer', 'Dryer', '2017-03-13 00:00:00', 1),
(2, 'chiller', 'Chiller', '2017-03-13 00:00:00', 1),
(3, 'cooler', 'Cooler', '2017-03-13 00:00:00', 1),
(4, 'var', 'Var', '2017-03-13 00:00:00', 1),
(5, 'small_products', 'Small Products', '2017-03-13 00:00:00', 1),
(6, 'enquiry', 'Enquiry', '2017-03-13 00:00:00', 1),
(7, 'campaign', 'Campaign', '2017-03-13 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cht_mini`
--

CREATE TABLE IF NOT EXISTS `tbl_product_cht_mini` (
  `cht_mini_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cht_mini_bar_ac_r22` varchar(255) NOT NULL,
  `cht_mini_bar_ac_r22_phe` varchar(255) NOT NULL,
  `cht_mini_capacity` varchar(255) NOT NULL,
  `cht_mini_heatload_kw` varchar(255) NOT NULL,
  `cht_mini_heatload_kcal` varchar(255) NOT NULL,
  `cht_mini_waterpump_absorbed` varchar(255) NOT NULL,
  `cht_mini_waterpump_flow` varchar(255) NOT NULL,
  `cht_mini_cooling_fan` varchar(255) NOT NULL,
  `cht_mini_in_out_water` varchar(255) NOT NULL,
  `cht_mini_delivery` varchar(255) NOT NULL,
  `cht_mini_warenty_doc` varchar(255) NOT NULL,
  `cht_mini_warenty_doi` varchar(255) NOT NULL,
  `cht_mini_weight` varchar(255) NOT NULL,
  `cht_mini_product_cost` varchar(255) NOT NULL,
  `cht_mini_discount` varchar(255) NOT NULL,
  `cht_mini_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cht_mini_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`cht_mini_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_product_cht_mini`
--

INSERT INTO `tbl_product_cht_mini` (`cht_mini_id`, `product_model`, `sap_code`, `description`, `cht_mini_bar_ac_r22`, `cht_mini_bar_ac_r22_phe`, `cht_mini_capacity`, `cht_mini_heatload_kw`, `cht_mini_heatload_kcal`, `cht_mini_waterpump_absorbed`, `cht_mini_waterpump_flow`, `cht_mini_cooling_fan`, `cht_mini_in_out_water`, `cht_mini_delivery`, `cht_mini_warenty_doc`, `cht_mini_warenty_doi`, `cht_mini_weight`, `cht_mini_product_cost`, `cht_mini_discount`, `cht_mini_changed_on`, `cht_mini_updated_on`, `status`) VALUES
(2, 'CHT0101/p', '300103', 'CHILLER, MINI, INDUSTRIAL, 1 TR, AIR COOLED, 1 TO 3 BAR G', '89000	', '95000	', '1	', '3.7	', '3230	', '0.375	', '11	', '230/50/1', '3/4', 'Exstock', '24', '30', '0', '', '', '2017-03-31 11:41:42', '0000-00-00 00:00:00', ''),
(3, 'CHT0201/p', '300104', 'CHILLER, MINI, INDUSTRIAL, 2 TR, AIR COOLED, 1 TO 3 BAR G', '1,20,000	', '1,25,500	', '2	', '7.3	', '6,300	', '0.525	', '21	', '230/50/1', '1', 'Exstock', '24', '30', '0', '', '', '2017-03-31 11:42:24', '0000-00-00 00:00:00', ''),
(4, 'CHT0301/P', '300105', 'CHILLER, MINI, INDUSTRIAL, 3 TR, AIR COOLED, 1 TO 3 BAR G', '140000	', '150000	', '3	', '10.3	', '8850	', '0.65	', '30	', '415/50/3', '1', 'Exstock', '24', '30', '0', '', '', '2017-03-31 11:43:04', '0000-00-00 00:00:00', ''),
(6, 'CHT0501/P', '300106', 'CHILLER, MINI, INDUSTRIAL, 5 TR, AIR COOLED, 1 TO 3 BAR G', '2,20,000	', '2,25,500	', '5	', '17.5	', '15,120	', '1.1	', '50	', '415/50/3	', '1 1/2', 'Exstock', '24', '30', '0', '', '', '2017-03-31 11:44:05', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cht_nexgen_hh`
--

CREATE TABLE IF NOT EXISTS `tbl_product_cht_nexgen_hh` (
  `cht_hh_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cht_hh_high_temp_air_cooled_a` varchar(255) NOT NULL,
  `cht_hh_high_temp_water_cooled_b` varchar(255) NOT NULL,
  `cht_hh_capacity` varchar(255) NOT NULL,
  `cht_hh_heat_load_kcal_h` varchar(255) NOT NULL,
  `cht_hh_heat_load_kw` varchar(255) NOT NULL,
  `cht_hh_water_pump_flow_rate_lpm` varchar(255) NOT NULL,
  `cht_hh_water_pump_absorbed_pw_kw` varchar(255) NOT NULL,
  `cht_hh_cooling_fan` varchar(255) NOT NULL,
  `cht_hh_input_output_water` varchar(255) NOT NULL,
  `cht_hh_delivery_terms` varchar(255) NOT NULL,
  `cht_hh_warranty_doc` varchar(255) NOT NULL,
  `cht_hh_warranty_doi` varchar(255) NOT NULL,
  `cht_hh_weight` varchar(255) NOT NULL,
  `cht_hh_packing_cost` varchar(255) NOT NULL,
  `cht_hh_discount` varchar(255) NOT NULL,
  `cht_hh_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cht_hh_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cht_hh_status` varchar(255) NOT NULL,
  PRIMARY KEY (`cht_hh_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_product_cht_nexgen_hh`
--

INSERT INTO `tbl_product_cht_nexgen_hh` (`cht_hh_id`, `product_model`, `sap_code`, `description`, `cht_hh_high_temp_air_cooled_a`, `cht_hh_high_temp_water_cooled_b`, `cht_hh_capacity`, `cht_hh_heat_load_kcal_h`, `cht_hh_heat_load_kw`, `cht_hh_water_pump_flow_rate_lpm`, `cht_hh_water_pump_absorbed_pw_kw`, `cht_hh_cooling_fan`, `cht_hh_input_output_water`, `cht_hh_delivery_terms`, `cht_hh_warranty_doc`, `cht_hh_warranty_doi`, `cht_hh_weight`, `cht_hh_packing_cost`, `cht_hh_discount`, `cht_hh_created_on`, `cht_hh_updated_on`, `cht_hh_status`) VALUES
(1, 'CHT100HH', '300076', 'COMPRESSED AIR DRYER, 200 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '450000', '450000', '10', '30000', '35', '250', '3.7', '450 X 4', '2', 'Exstock', '24', '30', '0', '', '', '2017-03-31 08:47:23', '0000-00-00 00:00:00', ''),
(2, 'CHT150HH', '300078', 'COMPRESSED AIR DRYER, 300 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '570000', '570000', '15', '45000', '52.3', '250', '3.7', '450 X 6', '2', 'Exstock', '24', '30', '0', '', '', '2017-03-31 08:51:28', '0000-00-00 00:00:00', ''),
(3, 'CHT200HH', '', '', '740000', '740000', '20', '60000', '70', '450', '5.5', '450 X 8', '2', 'Exstock', '24', '30', '0', '', '', '2017-03-22 11:14:59', '0000-00-00 00:00:00', ''),
(4, 'CHT300HH', '', '', '1100000', '1100000', '30', '90000', '104.6', '450', '5.5', '1000 X 2', '2', 'Exstock', '24', '30', '0', '', '', '2017-03-22 11:16:56', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_cht_nexgen_lh`
--

CREATE TABLE IF NOT EXISTS `tbl_product_cht_nexgen_lh` (
  `cht_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cht_low_temp_air_cooled_a` varchar(255) NOT NULL,
  `cht_low_temp_water_cooled_b` varchar(255) NOT NULL,
  `cht_capacity` varchar(255) NOT NULL,
  `cht_heat_load_kcal_h` varchar(255) NOT NULL,
  `cht_heat_load_kw` varchar(255) NOT NULL,
  `cht_water_pump_flow_rate_lpm` varchar(255) NOT NULL,
  `cht_water_pump_absobed_pow_kw` varchar(255) NOT NULL,
  `cht_cooling_fan` varchar(255) NOT NULL,
  `cht_input_output_water` varchar(255) NOT NULL,
  `cht_delivery_terms` varchar(255) NOT NULL,
  `cht_warranty_doc` varchar(255) NOT NULL,
  `cht_warranty_doi` varchar(255) NOT NULL,
  `cht_weight` varchar(255) NOT NULL,
  `cht_packing_cost` varchar(255) NOT NULL,
  `cht_discount` varchar(255) NOT NULL,
  `cht_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cht_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cht_status` varchar(255) NOT NULL,
  PRIMARY KEY (`cht_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_product_cht_nexgen_lh`
--

INSERT INTO `tbl_product_cht_nexgen_lh` (`cht_id`, `product_model`, `sap_code`, `description`, `cht_low_temp_air_cooled_a`, `cht_low_temp_water_cooled_b`, `cht_capacity`, `cht_heat_load_kcal_h`, `cht_heat_load_kw`, `cht_water_pump_flow_rate_lpm`, `cht_water_pump_absobed_pow_kw`, `cht_cooling_fan`, `cht_input_output_water`, `cht_delivery_terms`, `cht_warranty_doc`, `cht_warranty_doi`, `cht_weight`, `cht_packing_cost`, `cht_discount`, `cht_created_on`, `cht_updated_on`, `cht_status`) VALUES
(6, 'CHT050LH', '', '', '240000', '240000', '5', '15000', '17.5', '100', '1.5', '450 X 2', '1 1/2 ,1 1/4', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:46:06', '0000-00-00 00:00:00', ''),
(7, 'CHT075LH', '', '', '345000', '345000', '7.5', '22500', '19.5', '200', '2.2', '450 X 3', '1 1/2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:49:07', '0000-00-00 00:00:00', ''),
(8, 'CHT100LH', '', '', '480000', '480000', '10', '30000', '35', '250', '3.7', '450 X 4', '2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:52:47', '0000-00-00 00:00:00', ''),
(9, 'CHT150LH', '', '', '600000', '600000', '15', '45000', '52.3', '250', '3.7', '450 X 6', '2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:54:11', '0000-00-00 00:00:00', ''),
(10, 'CHT200LH', '', '', '775000', '775000', '20', '60000', '70', '450', '5.5', '450 X 8', '2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:56:58', '0000-00-00 00:00:00', ''),
(11, 'CHT300LH', '', '', '1150000', '1150000', '30	', '90000', '104.6', '450', '5.5', '1000 X 2', '2', '1/2weeks', '24', '30', '0', '', '', '2017-03-21 12:58:56', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_dct`
--

CREATE TABLE IF NOT EXISTS `tbl_product_dct` (
  `dct_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `dct_price` varchar(255) NOT NULL,
  `dct_motor_power` varchar(255) NOT NULL,
  `dct_fan_qty` varchar(255) NOT NULL,
  `dct_header_pipe` varchar(255) NOT NULL,
  `dct_fan_dia` varchar(255) NOT NULL,
  `dct_delivery_trm` varchar(255) NOT NULL,
  `dct_warenty_doc` varchar(255) NOT NULL,
  `dct_warenty_doi` varchar(255) NOT NULL,
  `dct_weight` varchar(255) NOT NULL,
  `dct_packing_cost` varchar(255) NOT NULL,
  `dct_discount` varchar(255) NOT NULL,
  `dct_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dct_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`dct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_product_dct`
--

INSERT INTO `tbl_product_dct` (`dct_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `dct_price`, `dct_motor_power`, `dct_fan_qty`, `dct_header_pipe`, `dct_fan_dia`, `dct_delivery_trm`, `dct_warenty_doc`, `dct_warenty_doi`, `dct_weight`, `dct_packing_cost`, `dct_discount`, `dct_changed_on`, `dct_update_on`, `status`) VALUES
(1, 'DCT040', '300204', 'COOLING TOWER, DRY', '', '360500	', '3	', '2	', '3/3 NB	', '1060', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:06:08', '0000-00-00 00:00:00', ''),
(2, 'DCT050', '300205', 'COOLING TOWER, DRY', '', '449100	', '5', '2ï¿½ï¿½ï¿½', '3/3  NB	', '1060', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:27:33', '0000-00-00 00:00:00', ''),
(3, 'DCT060	', '300206', 'COOLING TOWER, DRY', '', '474900', '5	', '2	', '3/3  NB	', '1060', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:07:14', '0000-00-00 00:00:00', ''),
(4, 'DCT080	', '300207', 'COOLING TOWER, DRY', '', '633500	', '5', '2	', '3/3  NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:07:48', '0000-00-00 00:00:00', ''),
(8, 'DCT100	', '300208', 'COOLING TOWER, DRY', '', '792100	', '7.5	', '2	', '3/3  NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:08:10', '0000-00-00 00:00:00', ''),
(9, 'DCT120', '300209', 'COOLING TOWER, DRY', '', '906400', '7.5	', '2	', '3/3 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:08:35', '0000-00-00 00:00:00', ''),
(10, 'DCT140	', '300210', 'COOLING TOWER, DRY', '', '918800	', '7.5	', '2	', '3/3 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:08:56', '0000-00-00 00:00:00', ''),
(11, 'DCT160', '300211', 'COOLING TOWER, DRY', '', '1049600	', '7.5	', '3	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:09:18', '0000-00-00 00:00:00', ''),
(12, 'DCT180	', '300212', 'COOLING TOWER, DRY', '', '1181500', '7.5', '3	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:09:43', '0000-00-00 00:00:00', ''),
(13, 'DCT200	', '300213', 'COOLING TOWER, DRY', '', '1277600	', '7.5	', '3	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:10:09', '0000-00-00 00:00:00', ''),
(15, 'DCT220	', '300214', 'COOLING TOWER, DRY', '', '1444100', '7.5	', '4	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:10:33', '0000-00-00 00:00:00', ''),
(16, 'DCT240	', '300215', 'COOLING TOWER, DRY', '', '1573900', '7.5	', '4	', '4/4 NB', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:10:57', '0000-00-00 00:00:00', ''),
(17, 'DCT280	', '300216', 'COOLING TOWER, DRY', '', '1836500	', '10	', '4	', '4/4 NB	', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:11:20', '0000-00-00 00:00:00', ''),
(18, 'DCT320	', '300217', 'COOLING TOWER, DRY', '', '2098200', '10	', '5	', '4/4NB', '1200', '4 weeks', '12', '18', '0', '', '', '2017-04-01 07:11:45', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_ect`
--

CREATE TABLE IF NOT EXISTS `tbl_product_ect` (
  `ect_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `ect_coil_2_rows` varchar(255) NOT NULL,
  `ect_motor_hp` varchar(255) NOT NULL,
  `ect_in_out_bsp` varchar(255) NOT NULL,
  `ect_delivery_terms` varchar(255) NOT NULL,
  `ect_warnty_doc` varchar(255) NOT NULL,
  `ect_warnty_doi` varchar(255) NOT NULL,
  `ect_outlet_temp` varchar(255) NOT NULL,
  `ect_weight` varchar(255) NOT NULL,
  `ect_packing_cost` varchar(255) NOT NULL,
  `ect_discount` varchar(255) NOT NULL,
  `ect_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ect_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`ect_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_product_ect`
--

INSERT INTO `tbl_product_ect` (`ect_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `ect_coil_2_rows`, `ect_motor_hp`, `ect_in_out_bsp`, `ect_delivery_terms`, `ect_warnty_doc`, `ect_warnty_doi`, `ect_outlet_temp`, `ect_weight`, `ect_packing_cost`, `ect_discount`, `ect_created_on`, `ect_updated_on`, `status`) VALUES
(2, 'ECT010B', '300159', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 10 TR, COIL 2, 8 ROWS', '', '115000', '0.5/1440	', '2', '30 Days', '12', '18', '', '0', '', '', '2017-04-01 04:15:41', '0000-00-00 00:00:00', ''),
(3, 'ECT020B', '300160', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 20 TR, COIL 2, 8 ROWS', '', '210300', '0.5/1440', '21/2', '30 Days', '12', '18', '', '0', '', '', '2017-04-01 06:07:52', '0000-00-00 00:00:00', ''),
(4, 'ECT040B', '300161', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 40 TR, COIL 2, 8 ROWS', '', '356000', '2/950', '3', '30 Days', '12', '18', '', '0', '', '', '2017-04-01 04:16:38', '0000-00-00 00:00:00', ''),
(5, 'ECT060B', '300162', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 60 TR, COIL 2, 8 ROWS', '', '380300', '3/950', '3', '30 Days', '12', '18', '', '0', '', '', '2017-04-01 04:17:06', '0000-00-00 00:00:00', ''),
(6, 'ECT100B', '300163', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 100 TR, COIL 2, 8 ROWS', '', '555600', '5/950', '5', '45 Days', '12', '18', '', '0', '', '', '2017-04-01 04:17:33', '0000-00-00 00:00:00', ''),
(7, 'ECT200B', '300164', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 200 TR, COIL 2, 8 ROWS', '', '811300', '10/950', '8', '45 Days', '12', '18', '', '0', '', '', '2017-04-01 04:18:01', '0000-00-00 00:00:00', ''),
(8, 'ECT300B', '300165', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 300 TR, COIL 2, 8 ROWS', '', '1225500    ', '0', '0', '45 Days', '12', '18', '', '0', '', '', '2017-04-01 04:18:29', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_gas`
--

CREATE TABLE IF NOT EXISTS `tbl_product_gas` (
  `gas_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `gas_model_variance` varchar(255) NOT NULL,
  `gas_price` varchar(255) NOT NULL,
  `gas_total_connect_powr` varchar(255) NOT NULL,
  `gas_water_in_out` varchar(255) NOT NULL,
  `gas_fan_dia` varchar(255) NOT NULL,
  `gas_motor_qty` varchar(255) NOT NULL,
  `gas_header_pip_flg` varchar(255) NOT NULL,
  `gas_delivery_trm` varchar(255) NOT NULL,
  `gas_config` varchar(255) NOT NULL,
  `gas_warenty_doc` varchar(255) NOT NULL,
  `gas_warenty_doi` varchar(255) NOT NULL,
  `gas_outlet_temp` varchar(255) NOT NULL,
  `gas_weight` varchar(255) NOT NULL,
  `gas_product_cost` varchar(255) NOT NULL,
  `gas_discount` varchar(255) NOT NULL,
  `gas_changed_on` varchar(255) NOT NULL,
  `gas_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`gas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_product_gas`
--

INSERT INTO `tbl_product_gas` (`gas_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `gas_model_variance`, `gas_price`, `gas_total_connect_powr`, `gas_water_in_out`, `gas_fan_dia`, `gas_motor_qty`, `gas_header_pip_flg`, `gas_delivery_trm`, `gas_config`, `gas_warenty_doc`, `gas_warenty_doi`, `gas_outlet_temp`, `gas_weight`, `gas_product_cost`, `gas_discount`, `gas_changed_on`, `gas_updated_on`, `status`) VALUES
(1, 'GAS0451', '300218', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '', '1 hp motor', '115400', '1', '3/3', '1060', '1', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 10:33:12', ''),
(2, 'GAS0452', '300219', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '', '2 hp motor', '123700', '2', '3/3', '1060', '1', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 10:35:02', ''),
(3, 'GAS0581', '300220', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '', '1 hp motor', '166900', '2', '3/3', '750', '2', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 10:45:01', ''),
(4, 'GAS0582', '300221', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '', '2 hp motor', '182400', '4', '3/3', '750', '2', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 10:47:13', ''),
(5, 'GAS0901', '300222', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '', '1 hp motor', '221500', '2', '3/3', '1060', '2', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 10:51:54', ''),
(6, 'GAS0902', '300223', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '', '2 hp motor', '236900', '4', '3/3', '1060', '2', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 10:56:10', ''),
(7, 'GAS1451', '300224', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '', '1 hp motor', '340000', '3', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:02:28', ''),
(8, 'GAS1452', '300225', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '', '2 hp motor', '370800', '6', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:03:40', ''),
(9, 'GAS1601', '300226', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '', '1 hp motor', '406900', '3', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:04:52', ''),
(10, 'GAS1602', '300227', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '', '2 hp motor', '417200', '6', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:06:03', ''),
(11, 'GAS1751', '300229', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '', '1 hp motor', '448100', '4', '3/3', '1060', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:08:17', ''),
(12, 'GAS1752', '300230', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '', '2 hp motor', '506800', '8', '3/3', '1060', '4', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:09:35', ''),
(13, 'GAS2252', '300231', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '', '2 hp motor', '460500', '8', '3/3', '1060', '4', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:10:52', ''),
(14, 'GAS2253', '300232', 'COOLING TOWER, DRY, AQUA SAVER, 3 HP MOTOR', '', '3 hp motor', '489300', '12', '3/3', '1060', '4', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:11:55', ''),
(15, 'GAS2752', '300233', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '', '2 hp motor', '602600', '10', '3/3', '1060', '5', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:12:58', ''),
(16, 'GAS2753', '300234', 'COOLING TOWER, DRY, AQUA SAVER, 3 HP MOTOR', '', '3 hp motor', '613900', '15', '3/3', '1060', '5', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:14:00', ''),
(17, 'GAS3005', '300235', 'GEM QAUASAVER 300 WITH 5 HP MOTOR', '', '5 hp motor', '762200', '15', '3/3', '1400', '3', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:14:58', ''),
(18, 'GAS3505', '300236', 'GAS AQUA SAVER WITH 5 HP MOTOR', '', '5 hp motor', '1004300', '0', '3/3', '1400', '4', '3/3', '4 weeks', 'Coil-1(4 rows), Circuit-1, Type-Horizontal', '12', '18', 'Ambient+5 deg c', '0', '', '', '', '2017-03-31 11:16:20', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_gct_eco`
--

CREATE TABLE IF NOT EXISTS `tbl_product_gct_eco` (
  `gct_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `gct_low_price` varchar(255) NOT NULL,
  `gct_high_price` varchar(255) NOT NULL,
  `gct_recommended_erection_charges` varchar(255) NOT NULL,
  `gct_capacity` varchar(255) NOT NULL,
  `gct_motor` varchar(255) NOT NULL,
  `gct_power_consumed` varchar(255) NOT NULL,
  `gct_water_flow_rate` varchar(255) NOT NULL,
  `gct_in_out_size` varchar(255) NOT NULL,
  `gct_basin_holding_capacity` varchar(255) NOT NULL,
  `gct_delivery_terms` varchar(255) NOT NULL,
  `gct_wrnty_doc` varchar(255) NOT NULL,
  `gct_wrnty_doi` varchar(255) NOT NULL,
  `gct_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gct_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gct_weight` varchar(255) NOT NULL,
  `gct_packing_cost` varchar(255) NOT NULL,
  `gct_discount` varchar(255) NOT NULL,
  `gct_status` varchar(255) NOT NULL,
  PRIMARY KEY (`gct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_product_gct_eco`
--

INSERT INTO `tbl_product_gct_eco` (`gct_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `gct_low_price`, `gct_high_price`, `gct_recommended_erection_charges`, `gct_capacity`, `gct_motor`, `gct_power_consumed`, `gct_water_flow_rate`, `gct_in_out_size`, `gct_basin_holding_capacity`, `gct_delivery_terms`, `gct_wrnty_doc`, `gct_wrnty_doi`, `gct_created_on`, `gct_updated_on`, `gct_weight`, `gct_packing_cost`, `gct_discount`, `gct_status`) VALUES
(1, 'GCT 010', '300118', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 15 TR.(DISMANTLE)', 'GCT+010.pad', '16600 ', 'nil', '1500 ï¿½ï¿½ï¿½', '10	', '0.18/1000	', '0.17', '7.80	', '1 Â½ /1 Â½	', '150', 'Exstock', '12', 'nil', '2017-04-01 10:41:04', '0000-00-00 00:00:00', 'nil', '', '', ''),
(2, 'GCT 015', '300119', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 15 TR.(DISMANTLE)', 'GCT+015.pdf', '20200	', '0', '1500	', '15	', '0.37/910	', '0.34	', '11.70	', '2 /2	', '200', 'Exstock', '12', '0', '2017-04-01 10:41:32', '0000-00-00 00:00:00', '0', '', '', ''),
(3, 'GCT 020', '300120', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 20TR.(DISMANTLE)', 'GCT+020.pdf', '22000		', '0', '1500	', '20	', '0.37/910	', '0.34', '15.60', '2/2	', '200', 'Exstock', '12', '0', '2017-04-01 10:41:45', '0000-00-00 00:00:00', '0', '', '', ''),
(4, 'GCT 030', '300121', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 30 TR.(DISMANTLE)', 'GCT+030.pdf', '32000		', '0', '1500	', '30	', '0.75/910	', '0.67', '23.40', '2 1/2 /3', '400', 'Exstock', '12', '0', '2017-04-01 10:42:01', '0000-00-00 00:00:00', '0', '', '', ''),
(5, 'GCT 040', '300122', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 40 TR.(DISMANTLE)', 'GCT+040.pdf', '35000		', '0', '2000	', '40	', '0.75/910	', '0.67	', '31.20	', '3/3	', '400', 'Exstock', '12', '0', '2017-04-01 10:42:13', '0000-00-00 00:00:00', '0', '', '', ''),
(6, 'GCT 050', '300123', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 50 TR.(DISMANTLE)', 'GCT+050.pdf', '48000		', '0', '2000	', '50	', '0.75/910	', '0.67		', '39.00', '3 /3	', '850', 'Exstock', '12', '0', '2017-04-01 10:42:27', '0000-00-00 00:00:00', '0', '', '', ''),
(7, 'GCT 060', '300124', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 60 TR.(DISMANTLE)', 'GCT+060.pdf', '52000		', '0', '2000	', '60', '1.1/920	', '1.01	', '46.80	', '3 /3	', '850', 'Exstock', '12', '0', '2017-04-01 10:42:39', '0000-00-00 00:00:00', '0', '', '', ''),
(8, 'GCT 080', '300125', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 80 TR.(DISMANTLE)', 'GCT+080.pdf', '65000		', '0', '3000	', '80	', '1.5/925	', '1.34	', '62.40	', '4/4	', '1100', 'Exstock', '12', '0', '2017-04-01 10:42:50', '0000-00-00 00:00:00', '0', '', '', ''),
(9, 'GCT100L', '300126/300127', 'COOLING TOWER, EVAPORATIVE, ROUND, 100 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', 'GCT100L.pdf', '90510', '        ', '0', '100	', '3.7/960	    ', ' 3.36', '78.00', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-04-01 10:43:02', '0000-00-00 00:00:00', '0', '', '', ''),
(10, 'GCT125L', '300128', 'COOLING TOWER, EVAPORATIVE, ROUND, 125 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', 'GCT125L.pdf', '99010    ', '', '0', '125', '3.7/960	', '3.36	', '97.50	', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-04-01 10:43:11', '0000-00-00 00:00:00', '0', '', '', ''),
(11, 'GCT150L', '300130', 'COOLING TOWER, EVAPORATIVE, ROUND, 150 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', 'GCT150L.pdf', '103860', '', '0', '150	', '3.7/960	', '3.36	', '117.00	', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-04-01 10:43:18', '0000-00-00 00:00:00', '0', '', '', ''),
(12, 'GCT200L', '300132', 'COOLING TOWER, EVAPORATIVE, ROUND, 150 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', 'GCT200L.pdf', '151450', '       ', '0', '200   ', '5.5/710   ', '5.04', '156.00', '6/6', '1550', 'Exstock/1week', '12', '0', '2017-04-01 10:43:24', '0000-00-00 00:00:00', '0', '', '', ''),
(13, 'GCT250L', '300134', 'COOLING TOWER, EVAPORATIVE, ROUND, 250 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', 'GCT250L.pdf', '159180	', '', '0', '250	', '7.5/710', '6.71	', '195.00	', '6/6	', '3200', 'Exstock/1week', '12', '0', '2017-04-01 10:43:35', '0000-00-00 00:00:00', '0', '', '', ''),
(14, 'GCT300L', '300137', 'COOLING TOWER, EVAPORATIVE, ROUND, 300 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', 'GCT300L.pdf', '236790	', '', '0', '300	', '9.3/570	', '8.39	', '234.00', '8 /8	', '3200', 'Exstock/1week', '12', '0', '2017-04-01 10:43:41', '0000-00-00 00:00:00', '0', '', '', ''),
(15, 'GCT100H', '300126/300127', 'COOLING TOWER, EVAPORATIVE, ROUND, 100 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', 'GCT100H.pdf', '', '109620		', '0', '100	', '3.7/960	    ', ' 3.36', '78.00', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-04-01 10:43:50', '0000-00-00 00:00:00', '0', '', '', ''),
(16, 'GCT125H    ', '300129', 'COOLING TOWER, EVAPORATIVE, ROUND, 125 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', 'GCT125H.pdf', '', '118120		', '0', '125', '3.7/960	', '3.36	', '97.50	', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-04-01 10:44:01', '0000-00-00 00:00:00', '0', '', '', ''),
(17, 'GCT150H    ', '300131', 'COOLING TOWER, EVAPORATIVE, ROUND, 150 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', 'GCT150H.pdf', '', '122970		', '0', '150	', '3.7/960	', '3.36	', '117.00	', '5/5	', '925', 'Exstock/1week', '12', '0', '2017-04-01 10:44:13', '0000-00-00 00:00:00', '0', '', '', ''),
(18, 'GCT200H', '300133', 'COOLING TOWER, EVAPORATIVE, ROUND, 200 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', 'GCT200H.pdf', '', '175330        ', '0', '200   ', '5.5/710   ', '5.04', '156.00', '6/6', '1550', 'Exstock/1week', '12', '0', '2017-04-01 10:44:23', '0000-00-00 00:00:00', '0', '', '', ''),
(19, 'GCT250H    ', '300135', 'COOLING TOWER, EVAPORATIVE, ROUND, 250 TR, HIGH TEMP FILLS, UP TO 85 DEG C INLET WATER TEMP', 'GCT250H.pdf', '	', '183070		', '0', '250	', '7.5/710', '6.71	', '195.00	', '6/6	', '3200', 'Exstock/1week', '12', '0', '2017-04-01 10:44:33', '0000-00-00 00:00:00', '0', '', '', ''),
(20, 'GCT300H', '300138', 'COOLING TOWER, EVAPORATIVE, ROUND, 300 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', 'GCT300H.pdf', '', '279790		', '0', '300	', '9.3/570	', '8.39	', '234.00', '8 /8	', '3200', 'Exstock/1week', '12', '0', '2017-04-01 10:44:41', '0000-00-00 00:00:00', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_group`
--

CREATE TABLE IF NOT EXISTS `tbl_product_group` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_group_name` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_product_group`
--

INSERT INTO `tbl_product_group` (`product_id`, `product_group_name`, `created_on`, `status`) VALUES
(1, 'DRYER', '2017-03-13 11:36:05', '1'),
(2, 'CHILLER', '2017-03-13 11:36:05', '1'),
(3, 'COOLING TOWER', '2017-03-30 10:25:59', '1'),
(4, 'VAR PRODUCTS', '2017-03-13 11:36:41', '1'),
(5, 'SMALL PRODUCTS', '2017-03-13 11:37:07', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_gzf`
--

CREATE TABLE IF NOT EXISTS `tbl_product_gzf` (
  `gzf_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `gzf_grade` varchar(255) NOT NULL,
  `gzf_price` varchar(255) NOT NULL,
  `gzf_practical_removal` varchar(255) NOT NULL,
  `gzf_oil_removal` varchar(255) NOT NULL,
  `gzf_max_operating` varchar(255) NOT NULL,
  `gzf_effeciency` varchar(255) NOT NULL,
  `gzf_capacity` varchar(255) NOT NULL,
  `gzf_air_connection` varchar(255) NOT NULL,
  `gzf_delivery_trm` varchar(255) NOT NULL,
  `gzf_warenty_doc` varchar(255) NOT NULL,
  `gzf_warenty_doi` varchar(255) NOT NULL,
  `gzf_weight` varchar(255) NOT NULL,
  `gzf_product_cost` varchar(255) NOT NULL,
  `gzf_discount` varchar(255) NOT NULL,
  `gzf_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gzf_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`gzf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tbl_product_gzf`
--

INSERT INTO `tbl_product_gzf` (`gzf_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `gzf_grade`, `gzf_price`, `gzf_practical_removal`, `gzf_oil_removal`, `gzf_max_operating`, `gzf_effeciency`, `gzf_capacity`, `gzf_air_connection`, `gzf_delivery_trm`, `gzf_warenty_doc`, `gzf_warenty_doi`, `gzf_weight`, `gzf_product_cost`, `gzf_discount`, `gzf_created_on`, `gzf_updated_on`, `status`) VALUES
(1, 'GZF005GP', '300288', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 35 CFM, 16 BAR G', '', 'General purpose filter (GP)', '5200', '3 micron', '0', '16 bar g', '0', '35', '3/8', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:41:02', '0000-00-00 00:00:00', ''),
(2, 'GZF005ZP', '300289', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', '', 'Micro oil removing filter (ZP)', '5500	', '0.1 micron', '0.1mg/m3	', '16 bar g	', '99%', '35', '3/8', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:44:37', '0000-00-00 00:00:00', ''),
(3, 'GZF005ZO', '300290', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', '', 'Sub micro oil removing filter (ZO)	', '5600	', '0.01 Micron	', '0.01mg/m3	', '16 bar g	', '99.99%	', '35', '3/8', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:46:50', '0000-00-00 00:00:00', ''),
(4, 'GZF005ZC', '300291', 'AIR FILTER, 0.005 MG/M³, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 35 CFM, 16 BAR G', '', 'Activated carbon filter (ZC)	', '6000	', '0.01 micron	', '0.005mg/m3	', '16 bar g', '99.999%		', '35', '3/8', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:48:14', '0000-00-00 00:00:00', ''),
(5, 'GZF007GP', '300292', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 50 CFM, 16 BAR G', '', 'General purpose filter (GP)	', '5,700	', '3 micron	 	', '0', '16 bar g 	 	', '0', '50', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:52:58', '0000-00-00 00:00:00', ''),
(6, 'GZF007ZP', '300293', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', '', 'Micro oil removing filter (ZP)', '5900	', '0.1 micron', '0.1mg/m3	', '16 bar g 	', '99%	', '50', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:54:30', '0000-00-00 00:00:00', ''),
(7, 'GZF007ZO', '300294', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', '', 'Sub micro oil removing filter (ZO)	', '6000	', '0.01 Micron', '0.01mg/m3	', '16 bar g 	', '99.99%', '50', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:56:55', '0000-00-00 00:00:00', ''),
(8, 'GZF007ZC', '', '', '', 'Activated carbon filter (ZC)', '6,400	', '0.01 micron	', '0.005mg/m3		', '16 bar g 	', '99.999%		', '50', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:50:40', '0000-00-00 00:00:00', ''),
(10, 'GZF010GP', '', '', '', 'General purpose filter (GP)	', '6500	', '03 micron	 	', '0	', '16 bar g 	', '0	', '75', '3/4', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:50:57', '0000-00-00 00:00:00', ''),
(11, 'GZF010ZP', '', '', '', 'Micro oil removing filter (ZP)	', '6800	', '0.1 micron	', '0.1mg/m3	', '16 bar g 	', '99%', '75', '3/4', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:51:04', '0000-00-00 00:00:00', ''),
(12, 'GZF010ZO', '', '', '', 'Sub micro oil removing filter (ZO)	', '6900	', '0.01 Micron	', '0.01mg/m3', '16 bar g 	', '99.99%	', '75', '3/4', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:51:17', '0000-00-00 00:00:00', ''),
(14, 'GZF010ZC', '', '', '', 'Activated carbon filter (ZC)	', '7500		', '0.01 Micron	', '0.005mg/m3	', '16 bar g 	', '99.999%', '75', '3/4', 'Exstock', '0', '0', '0', '', '', '2017-03-31 13:51:22', '0000-00-00 00:00:00', ''),
(15, 'GZF018', '', '', '', 'General purpose filter (GP)	', '8100	', '3 micron	 	', '0', '16 bar g 	', '0', '125', '1', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:29:34', '0000-00-00 00:00:00', ''),
(16, 'GZF018', '', '', '', 'Micro oil removing filter (ZP)	', '8800	', '0.1 micron	', '0.1mg/m3	', '16 bar g 	', '99%', '125', '1', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:30:12', '0000-00-00 00:00:00', ''),
(17, 'GZF018', '', '', '', 'Sub micro oil removing filter (ZO)	', '8900	', '0.01 Micron	', '0.01mg/m3	', '16 bar g 	', '99.99%', '125', '1', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:30:54', '0000-00-00 00:00:00', ''),
(18, 'GZF018', '', '', '', 'Activated carbon filter (ZC)	', '9100	', '0.01 micron	', '0.005mg/m3	', '16 bar g 	', '99.999%', '125', '1', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:31:27', '0000-00-00 00:00:00', ''),
(19, 'GZF030', '', '', '', 'General purpose filter (GP)	', '16400', '3 micron	 	', '0	', '16 bar g 	', '0', '200', '1', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:32:12', '0000-00-00 00:00:00', ''),
(20, 'GZF030', '', '', '', 'Micro oil removing filter (ZP)', '17200	', '0.1 micron	', '0.1mg/m3	', '16 bar g 	', '99%', '200', '1', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:32:48', '0000-00-00 00:00:00', ''),
(21, 'GZF030', '', '', '', 'Sub micro oil removing filter (ZO)	', '17300	', '0.01 Micron	', '0.01mg/m3	', '16 bar g 	', '99.99%	', '200', '1', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:33:42', '0000-00-00 00:00:00', ''),
(22, 'GZF030', '', '', '', 'Activated carbon filter (ZC)	', '17,700	', '0.01 micron	', '0.005mg/m3		', '16 bar g 	', '99.999%', '200', '1', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:34:15', '0000-00-00 00:00:00', ''),
(23, 'GZF047', '', '', '', 'General purpose filter (GP)	', '18700	', '3 micron	 	', '0	', '16 bar g 	', '0', '310', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:35:14', '0000-00-00 00:00:00', ''),
(24, 'GZF047', '', '', '', 'Micro oil removing filter (ZP)	', '19400	', '0.1 micron		', '00.1mg/m3', '16 bar g 	', '99%', '310', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:35:56', '0000-00-00 00:00:00', ''),
(25, 'GZF047', '', '', '', 'Sub micro oil removing filter (ZO)	', '19,500', '0.01 Micron	', '0.01mg/m3	', '16 bar g 	', '99.99%', '310', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:37:04', '0000-00-00 00:00:00', ''),
(26, 'GZF047', '', '', '', 'Activated carbon filter (ZC)	', '19800	', '0.01 micron', '0.005mg/m3', '16 bar g 	', '99.999%', '310', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:37:47', '0000-00-00 00:00:00', ''),
(27, 'GZF070', '', '', '', 'General purpose filter (GP)	', '22700	', '3 micron	 	', '0', '16 bar g 	', '0', '450', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:39:25', '0000-00-00 00:00:00', ''),
(28, 'GZF070', '', '', '', 'Micro oil removing filter (ZP)	', '23400	', '0.1 micron	', '0.1mg/m3	', '16 bar g 	', '99%	', '450', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:39:57', '0000-00-00 00:00:00', ''),
(29, 'GZF070', '', '', '', 'Sub micro oil removing filter (ZO)	', '23500	', '0.01 Micron	', '0.01mg/m3	', '16 bar g 	', '99.99%	', '450', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:40:32', '0000-00-00 00:00:00', ''),
(30, 'GZF070', '', '', '', 'Activated carbon filter (ZC)	', '23900	', '0.01 micron	', '0.005mg/m3		', '16 bar g 	', '99.999%', '450', '1/2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:41:15', '0000-00-00 00:00:00', ''),
(31, 'GZF094', '', '', '', 'General purpose filter (GP)	', '34600	', '3 micron	 	', '0	', '16 bar g 	', '0', '600', '2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:42:48', '0000-00-00 00:00:00', ''),
(32, 'GZF094', '', '', '', 'Micro oil removing filter (ZP)	', '35400	', '0.1 micron	', '0.1mg/m3	', '16 bar g', '99%', '600', '2', 'Exstock', '0', '0', '0', '', '', '2017-03-22 13:43:46', '0000-00-00 00:00:00', ''),
(33, 'GZF094', '', '', '', 'Sub micro oil removing filter (ZO)	', '35500	', '0.01 Micron', '0.01mg/m3	', '16 bar g	', '99.99%', '600', '2', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 13:45:45', '0000-00-00 00:00:00', ''),
(34, 'GZF094', '', '', '', 'Activated carbon filter (ZC)	', '35800	', '0.01 micron	', '0.005mg/m3	', '16 bar g	', '99.999%', '600', '2', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 13:45:48', '0000-00-00 00:00:00', ''),
(35, 'GZF150', '', '', '', 'General purpose filter (GP)', '41100', '3 micron', '0', '16 bar g', '0', '900', '2', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 13:59:36', '0000-00-00 00:00:00', ''),
(36, 'GZF150', '', '', '', 'Micro oil removing filter (ZP)', '43900', '0.1 micron', '0.1mg/m3', '16 bar g', '99%', '900', '2', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:03:09', '0000-00-00 00:00:00', ''),
(37, 'GZF150', '', '', '', 'Sub micro oil removing filter (ZO)', '44700', '0.01 Micron', '0.01mg/m3', '16 bar g', '99.99%', '900', '2', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:03:24', '0000-00-00 00:00:00', ''),
(38, 'GZF150', '', '', '', 'Activated carbon filter (ZC)', '45400', '0.01 micron', '0.005mg/m3', '16 bar g', '99.999%', '900', '2', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:04:14', '0000-00-00 00:00:00', ''),
(39, 'GZF175', '', '', '', 'General purpose filter (GP)', '60100', '3 micron', '0', '16 bar g', '0', '1200', '3', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:05:13', '0000-00-00 00:00:00', ''),
(40, 'GZF175', '', '', '', 'Micro oil removing filter (ZP)', '63000', '0.1 micron', '0.1mg/m3', '16 bar g', '99%', '1200', '3', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:05:52', '0000-00-00 00:00:00', ''),
(41, 'GZF175', '', '', '', 'Sub micro oil removing filter (ZO)', '63700', '0.01 Micron', '0.01mg/m3', '16 bar g', '99.99%', '1200', '3', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:06:33', '0000-00-00 00:00:00', ''),
(42, 'GZF175', '', '', '', 'Activated carbon filter (ZC)', '64400', '0.01 micron', '0.005mg/m3', '16 bar g', '99.999%', '1200', '3', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:07:14', '0000-00-00 00:00:00', ''),
(43, 'GZF240', '', '', '', 'General purpose filter (GP)', '90200	', '3 micron', '0', '16 bar g', '0', '1700', '3', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:08:22', '0000-00-00 00:00:00', ''),
(44, 'GZF240', '', '', '', 'Micro oil removing filter (ZP)', '93000	', '0.1 micron', '0.1mg/m3', '16 bar g', '99%', '1700', '3', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:09:06', '0000-00-00 00:00:00', ''),
(45, 'GZF240', '', '', '', 'Sub micro oil removing filter (ZO)', '93000	', '0.01 Micron', '0.01mg/m3', '16 bar g', '99.99%', '1700', '3', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:09:54', '0000-00-00 00:00:00', ''),
(46, 'GZF240', '', '', '', 'Activated carbon filter (ZC)', '94400', '0.01 micron', '0.005mg/m3', '16 bar g', '99.999%', '1700', '3', '2/4weeks', '0', '0', '0', '', '', '2017-03-22 14:11:08', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_gzf_cartridges`
--

CREATE TABLE IF NOT EXISTS `tbl_product_gzf_cartridges` (
  `gzf_cartridges_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `gzf_cartridges_mv_gpe` varchar(255) NOT NULL,
  `gzf_cartridges_mv_zpe` varchar(255) NOT NULL,
  `gzf_cartridges_mv_zoe` varchar(255) NOT NULL,
  `gzf_cartridges_mv_zce` varchar(255) NOT NULL,
  `gzf_cartridges_capacity` varchar(255) NOT NULL,
  `gzf_cartridges_delivery_trm` varchar(255) NOT NULL,
  `gzf_cartridges_warenty_doc` varchar(255) NOT NULL,
  `gzf_cartridges_warenty_doi` varchar(255) NOT NULL,
  `gzf_cartridges_weight` varchar(255) NOT NULL,
  `gzf_cartridges_product_cost` varchar(255) NOT NULL,
  `gzf_cartridges_discount` varchar(255) NOT NULL,
  `gzf_cartridges_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gzf_cartridges_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`gzf_cartridges_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `tbl_product_gzf_cartridges`
--

INSERT INTO `tbl_product_gzf_cartridges` (`gzf_cartridges_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `gzf_cartridges_mv_gpe`, `gzf_cartridges_mv_zpe`, `gzf_cartridges_mv_zoe`, `gzf_cartridges_mv_zce`, `gzf_cartridges_capacity`, `gzf_cartridges_delivery_trm`, `gzf_cartridges_warenty_doc`, `gzf_cartridges_warenty_doi`, `gzf_cartridges_weight`, `gzf_cartridges_product_cost`, `gzf_cartridges_discount`, `gzf_cartridges_changed_on`, `gzf_cartridges_updated_on`, `status`) VALUES
(12, 'GZF005ZPE', '300333', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '3950', '', '', '35', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(13, 'GZF007ZPE', '300337', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '4200', '', '', '50', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(14, 'GZF010ZPE', '300341', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 75 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '4900', '', '', '75', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(15, 'GZF018ZPE', '300345', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 125 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '6000', '', '', '125', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(16, 'GZF030ZPE', '300349', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 200 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '10900', '', '', '200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(17, 'GZF047ZPE', '300353', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 310 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '13200', '', '', '310', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(18, 'GZF070ZPE', '300357', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 450 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '14100', '', '', '450', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(19, 'GZF094ZPE', '300361', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 600 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '22100', '', '', '600', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(20, 'GZF150ZPE', '300365', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 900 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '29300	', '', '', '900', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(21, 'GZF175ZPE', '300369', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 1200 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '44000', '', '', '1200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(22, 'GZF240ZPE', '300373', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 1700 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '		', '70000', '', '', '1700', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(23, 'GZF005GPE', '300332', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 35 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '3000', '', '', '', '35', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(24, 'GZF007GPE', '300336', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 50 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '3400', '', '', '', '50', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(25, 'GZF010GPE', '300340', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 75 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '4500', '', '', '', '75', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(26, 'GZF018GPE', '300344', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 125 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '5200', '', '', '', '125', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(27, 'GZF030GPE', '300348', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 200 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '10600', '', '', '', '200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(28, 'GZF047GPE', '300352', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 310 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '12300', '', '', '', '310', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(29, 'GZF070GPE', '300356', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 450 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '14100', '', '', '', '450', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(30, 'GZF094GPE', '300360', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 600 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '21600', '', '', '', '600', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(31, 'GZF150GPE', '300364', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 900 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '28600', '', '', '', '900', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(32, 'GZF175GPE', '300368', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 1200CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '42100		', '', '', '', '1200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(33, 'GZF240GPE', '300372', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 1700 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '67600			', '', '', '', '1700', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(34, 'GZF005ZOE', '300334', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '4100', '', '35', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(35, 'GZF007ZOE', '300338', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '4500', '', '50', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(36, 'GZF010ZOE', '300342', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 75 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '5500', '', '75', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(37, 'GZF018ZOE', '300346', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 125 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '6300', '', '125', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(38, 'GZF030ZOE', '300350', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 200 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '11100', '', '200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(39, 'GZF047ZOE', '300354', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 310 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '13500', '', '310', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(40, 'GZF070ZOE', '300358', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 450 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '14800', '', '450', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(41, 'GZF094ZOE', '300362', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 600 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '22400', '', '600', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(42, 'GZF150ZOE', '300366', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 900 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '29700', '', '900', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(43, 'GZF175ZOE', '300370', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 1200 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '44700', '', '1200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(44, 'GZF240ZOE', '300374', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 1700 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '		', '', '70400', '', '1700', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(45, 'GZF005ZCE', '300335', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 35 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '4200', '35', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(46, 'GZF007ZCE', '300339', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 50 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '4700', '50', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(47, 'GZF010ZCE', '300343', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 75 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '5900', '75', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(48, 'GZF018ZCE', '300347', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 125 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '6800', '125', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(49, 'GZF030ZCE', '300351', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 200 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '11400', '200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(50, 'GZF047ZCE', '300355', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 310 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '13800', '310', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(51, 'GZF070ZCE', '300359', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 450 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '15100', '450', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(52, 'GZF094ZCE', '300363', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 600 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '22600', '600', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(53, 'GZF150ZCE', '300367', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 900 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '30200', '900', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(54, 'GZF175ZCE', '300371', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 1200 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '', '', '', '45000', '1200', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', ''),
(55, 'GZF240ZCE', '300375', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 1700 CFM, 16 BAR G', 'GZFCATRIDGES.pdf', '		', '', '', '70900', '1700', 'Exstock Delivery', '12', '18', '0', '', '', '2017-04-01 11:51:21', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_gz_gfv`
--

CREATE TABLE IF NOT EXISTS `tbl_product_gz_gfv` (
  `gz_gfv_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `gz_gfv_price` varchar(255) NOT NULL,
  `gz_gfv_valve_opn_intervel` varchar(255) NOT NULL,
  `gz_gfv_valve_dischrg` varchar(255) NOT NULL,
  `gz_gfv_pwr_consum` varchar(255) NOT NULL,
  `gz_gfv_max_opt_temp` varchar(255) NOT NULL,
  `gz_gfv_max_opt_presure` varchar(255) NOT NULL,
  `gz_gfv_io_ports` varchar(255) NOT NULL,
  `gz_gfv_warenty_doc` varchar(255) NOT NULL,
  `gz_gfv_warenty_doi` varchar(255) NOT NULL,
  `gz_gfv_deliver_trm` varchar(255) NOT NULL,
  `gz_gfv_weight` varchar(255) NOT NULL,
  `gz_gfv_product_cost` varchar(255) NOT NULL,
  `gz_gfv_discount` varchar(255) NOT NULL,
  `gz_gfv_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gz_gfv_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`gz_gfv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_product_gz_gfv`
--

INSERT INTO `tbl_product_gz_gfv` (`gz_gfv_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `gz_gfv_price`, `gz_gfv_valve_opn_intervel`, `gz_gfv_valve_dischrg`, `gz_gfv_pwr_consum`, `gz_gfv_max_opt_temp`, `gz_gfv_max_opt_presure`, `gz_gfv_io_ports`, `gz_gfv_warenty_doc`, `gz_gfv_warenty_doi`, `gz_gfv_deliver_trm`, `gz_gfv_weight`, `gz_gfv_product_cost`, `gz_gfv_discount`, `gz_gfv_changed_on`, `gz_gfv_updated_on`, `status`) VALUES
(1, 'GZLD', '300415', 'AUTO DRAIN VALVE, UNIVERSAL ELECTRONIC TIMER OPERATED, LOW DISCHARGE, UPTO 16 BAR G', 'GZ LD.pdf', '2100', '0.5-35min (adjustable)', '0.5 to 20 sec (adjustable)	', '10', '90deg c	', '16 bar (g)	 ', '1/2 BSP', '12', '0', 'Exstock', '0', '', '', '2017-04-01 10:49:43', '0000-00-00 00:00:00', ''),
(2, 'GZHD', '300414', 'AUTO DRAIN VALVE, UNIVERSAL ELECTRONIC TIMER OPERATED, HIGH DISCHARGE, UPTO 16 BAR G', ' GZ HD.pdf', '2300', '0.5-35min (adjustable)', '0.5 to 20 sec (adjustable)	', '10', '90deg c	', '16 bar (g)	 ', '1/2  BSP', '12', '0', 'Exstock', '0', '', '', '2017-04-01 10:49:58', '0000-00-00 00:00:00', ''),
(3, 'GFV', '300417', 'AUTO DRAIN VALVE, ZERO AIR LOSS, FLOAT TYPE, MANUAL DISCHARGE, UPTO 20 BAR G', 'GFV.pdf', '3500', '0', '0', '0', '90deg c	', '20 bar (g)', '1/2  BSP', '12', '0', 'Exstock', '0', '', '', '2017-04-01 10:48:50', '0000-00-00 00:00:00', ''),
(4, 'GZLD7', '300416', 'GZ SERIES LOW DISCHARGE AUTO DRAIN VALVE FOR HIGH PRESSURE (42 BAR)APPLICATION; SUPPLY VOLTAGE:220V,1PH,50HZ', '', '4700', '0.5-35min (adjustable)', '0.5 to 20 sec (adjustable)', '0', '0', '30 bar (g)', '1/2  BSP', '12', '0', 'Exstock', '0', '', '', '2017-04-01 08:13:28', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_hld`
--

CREATE TABLE IF NOT EXISTS `tbl_product_hld` (
  `hld_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `hld_daa_is2825cc` varchar(255) NOT NULL,
  `hld_daa_asme_cc` varchar(255) NOT NULL,
  `hld_dms_is2825_cc` varchar(255) NOT NULL,
  `hld_dms_asme_cc` varchar(255) NOT NULL,
  `hld_air_flow_cfm` varchar(255) NOT NULL,
  `hld_inlet_outlet_flg` varchar(255) NOT NULL,
  `hld_desiccant_qty` varchar(255) NOT NULL,
  `hld_warnty_doc` varchar(255) NOT NULL,
  `hld_warenty_doi` varchar(255) NOT NULL,
  `hld_wrk_pressure` varchar(255) NOT NULL,
  `hld_delivery_trm` varchar(255) NOT NULL,
  `hld_weight` varchar(255) NOT NULL,
  `hld_packing_cost` varchar(255) NOT NULL,
  `hld_discount` varchar(255) NOT NULL,
  `hld_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hld_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hld_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_product_hld`
--

INSERT INTO `tbl_product_hld` (`hld_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `hld_daa_is2825cc`, `hld_daa_asme_cc`, `hld_dms_is2825_cc`, `hld_dms_asme_cc`, `hld_air_flow_cfm`, `hld_inlet_outlet_flg`, `hld_desiccant_qty`, `hld_warnty_doc`, `hld_warenty_doi`, `hld_wrk_pressure`, `hld_delivery_trm`, `hld_weight`, `hld_packing_cost`, `hld_discount`, `hld_created_on`, `hld_updated_on`, `status`) VALUES
(1, 'HLD030A', '300186', 'AIR DRYER, DESICCANT, HEATLESS, 300 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD030A.pdf', '182200	', '256200	', '236400	', '308100	', '300	', '2 NB	', '110', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:53:36', '0000-00-00 00:00:00', ''),
(2, 'HLD040A', '300188', 'AIR DRYER, DESICCANT, HEATLESS, 400 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD040A.pdf', '220000	', '285800	', '264000	', '342900	', '400', '3 NB	', '140', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:53:45', '0000-00-00 00:00:00', ''),
(3, 'HLD050A', '300190', 'AIR DRYER, DESICCANT, HEATLESS, 500 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD050A.pdf', '264000	', '343000	', '317000	', '412000	', '500', '3 NB	', '180', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:53:56', '0000-00-00 00:00:00', ''),
(4, 'HLD060A', '300192', 'AIR DRYER, DESICCANT, HEATLESS, 600 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD060A.pdf', '330000	', '428600	', '396400	', '514400', '600', '3 NB	', '215', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:54:04', '0000-00-00 00:00:00', ''),
(5, 'HLD075A', '300194', 'AIR DRYER, DESICCANT, HEATLESS, 750 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD075A.pdf', '386000	', '500300', '461400	', '600100	', '750', '4 NB	', '260', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:54:11', '0000-00-00 00:00:00', ''),
(6, 'HLD100A', '300196', 'AIR DRYER, DESICCANT, HEATLESS, 1000 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD100A.pdf', '471800	', '631100	', '566300	', '736700	', '1000	', '4 NB	', '360', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:54:20', '0000-00-00 00:00:00', ''),
(7, 'HLD125A', '300198', 'AIR DRYER, DESICCANT, HEATLESS, 1250 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD125A.pdf', '543000	', '704000	', '649400	', '845800	', '1250	', '5NB	', '450', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:54:29', '0000-00-00 00:00:00', ''),
(8, 'HLD150A', '300200', 'AIR DRYER, DESICCANT, HEATLESS, 1500 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD150A.pdf', '608400	', '786000	', '726300	', '944500	', '1500	', '5 NB	', '520', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:54:38', '0000-00-00 00:00:00', ''),
(9, 'HLD200A', '300202', 'AIR DRYER, DESICCANT, HEATLESS, 2000 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLD200A.pdf', '705500	', '919600	', '848400	', '1106100', '2000	', '6 NB	', '720', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 10:57:14', '0000-00-00 00:00:00', ''),
(10, 'HLD030C', '300187', 'AIR DRYER, DESICCANT, HEATLESS, 300 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '182200	', '256200	', '236400	', '308100	', '300	', '2 NB	', '110', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:50:33', '0000-00-00 00:00:00', ''),
(11, 'HLD030B', '', '', '', '182200	', '256200	', '236400	', '308100	', '300	', '2 NB	', '110', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:33:45', '0000-00-00 00:00:00', ''),
(12, 'HLD030D', '', '', '', '182200	', '256200	', '236400	', '308100	', '300	', '2 NB	', '110', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:33:40', '0000-00-00 00:00:00', ''),
(13, 'HLD040C', '300189', 'AIR DRYER, DESICCANT, HEATLESS, 400 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '220000	', '285800	', '264000	', '342900	', '400', '3 NB	', '140', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:51:00', '0000-00-00 00:00:00', ''),
(14, 'HLD040B', '', '', '', '220000	', '285800	', '264000	', '342900	', '400', '3 NB	', '140', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:34:04', '0000-00-00 00:00:00', ''),
(15, 'HLD040D', '', '', '', '220000	', '285800	', '264000	', '342900	', '400', '3 NB	', '140', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:34:04', '0000-00-00 00:00:00', ''),
(16, 'HLD050C', '300191', 'AIR DRYER, DESICCANT, HEATLESS, 500 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '264000	', '343000	', '317000	', '412000	', '500', '3 NB	', '180', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:51:32', '0000-00-00 00:00:00', ''),
(17, 'HLD050B', '', '', '', '264000	', '343000	', '317000	', '412000	', '500', '3 NB	', '180', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:35:29', '0000-00-00 00:00:00', ''),
(18, 'HLD050D', '', '', '', '264000	', '343000	', '317000	', '412000	', '500', '3 NB	', '180', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:35:29', '0000-00-00 00:00:00', ''),
(19, 'HLD060C', '300193', 'AIR DRYER, DESICCANT, HEATLESS, 600 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '330000	', '428600	', '396400	', '514400', '600', '3 NB	', '215', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:52:12', '0000-00-00 00:00:00', ''),
(20, 'HLD060B', '', '', '', '330000	', '428600	', '396400	', '514400', '600', '3 NB	', '215', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:36:37', '0000-00-00 00:00:00', ''),
(21, 'HLD060D', '', '', '', '330000	', '428600	', '396400	', '514400', '600', '3 NB	', '215', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:36:37', '0000-00-00 00:00:00', ''),
(22, 'HLD075C', '300195', 'AIR DRYER, DESICCANT, HEATLESS, 750 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '386000	', '500300', '461400	', '600100	', '750', '4 NB	', '260', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:52:40', '0000-00-00 00:00:00', ''),
(23, 'HLD075B', '', '', '', '386000	', '500300', '461400	', '600100	', '750', '4 NB	', '260', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:38:04', '0000-00-00 00:00:00', ''),
(24, 'HLD075D', '', '', '', '386000	', '500300', '461400	', '600100	', '750', '4 NB	', '260', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:38:04', '0000-00-00 00:00:00', ''),
(25, 'HLD100C', '300197', 'AIR DRYER, DESICCANT, HEATLESS, 1000 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '471800	', '631100	', '566300	', '736700	', '1000	', '4 NB	', '360', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:53:07', '0000-00-00 00:00:00', ''),
(26, 'HLD100B', '', '', '', '471800	', '631100	', '566300	', '736700	', '1000	', '4 NB	', '360', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:40:03', '0000-00-00 00:00:00', ''),
(27, 'HLD100D', '', '', '', '471800	', '631100	', '566300	', '736700	', '1000	', '4 NB	', '360', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:40:03', '0000-00-00 00:00:00', ''),
(28, 'HLD125C', '300199', 'AIR DRYER, DESICCANT, HEATLESS, 1250 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '543000	', '704000	', '649400	', '845800	', '1250	', '5NB	', '450', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:53:33', '0000-00-00 00:00:00', ''),
(29, 'HLD125B', '', '', '', '543000	', '704000	', '649400	', '845800	', '1250	', '5NB	', '450', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:41:11', '0000-00-00 00:00:00', ''),
(30, 'HLD125D', '', '', '', '543000	', '704000	', '649400	', '845800	', '1250	', '5NB	', '450', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:41:11', '0000-00-00 00:00:00', ''),
(31, 'HLD150C', '300201', 'AIR DRYER, DESICCANT, HEATLESS, 1500 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '608400	', '786000	', '726300	', '944500	', '1500	', '5 NB	', '520', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:54:09', '0000-00-00 00:00:00', ''),
(32, 'HLD150B', '', '', '', '608400	', '786000	', '726300	', '944500	', '1500	', '5 NB	', '520', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:44:13', '0000-00-00 00:00:00', ''),
(33, 'HLD150D', '', '', '', '608400	', '786000	', '726300	', '944500	', '1500	', '5 NB	', '520', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:44:13', '0000-00-00 00:00:00', ''),
(34, 'HLD200C', '300203', 'AIR DRYER, DESICCANT, HEATLESS, 2000 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '', '705500	', '919600	', '848400	', '1106100', '2000	', '6 NB	', '720', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:54:39', '0000-00-00 00:00:00', ''),
(35, 'HLD200B', '', '', '', '705500	', '919600	', '848400	', '1106100', '2000	', '6 NB	', '720', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:44:45', '0000-00-00 00:00:00', ''),
(36, 'HLD200D', '', '', '', '705500	', '919600	', '848400	', '1106100', '2000	', '6 NB	', '720', '30 Days ', '7 to 12.5 bar g', '12', '18', '0', '', '', '2017-04-01 05:44:45', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_hln`
--

CREATE TABLE IF NOT EXISTS `tbl_product_hln` (
  `hln_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `hln_daa_is2825_price` varchar(255) NOT NULL,
  `hln_dms_is2825_price` varchar(255) NOT NULL,
  `hln_airflow_cfm` varchar(255) NOT NULL,
  `hln_in_out_flg` varchar(255) NOT NULL,
  `hln_dessiccant_qty` varchar(255) NOT NULL,
  `hln_delivery_trm` varchar(255) NOT NULL,
  `hln_wrnty_doc` varchar(255) NOT NULL,
  `hln_wrnty_doi` varchar(255) NOT NULL,
  `hln_wrk_pressure` varchar(255) NOT NULL,
  `hn_inlet_temp` varchar(255) NOT NULL,
  `hn_admos_dew_pt` varchar(255) NOT NULL,
  `hln_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hln_update_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hln_weight` varchar(255) NOT NULL,
  `hln_packing_cost` varchar(255) NOT NULL,
  `hln_discount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hln_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_product_hln`
--

INSERT INTO `tbl_product_hln` (`hln_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `hln_daa_is2825_price`, `hln_dms_is2825_price`, `hln_airflow_cfm`, `hln_in_out_flg`, `hln_dessiccant_qty`, `hln_delivery_trm`, `hln_wrnty_doc`, `hln_wrnty_doi`, `hln_wrk_pressure`, `hn_inlet_temp`, `hn_admos_dew_pt`, `hln_created_on`, `hln_update_on`, `hln_weight`, `hln_packing_cost`, `hln_discount`, `status`) VALUES
(1, 'HLN002A', '300166', 'AIR DRYER, DESICCANT, HEATLESS, 20 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 002 A.pdf', '43900', '53600', '20', 'ï¿½ BSP', '20', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:49:33', '0000-00-00 00:00:00', '0', '', '', ''),
(2, 'HLN003A', '300168', 'AIR DRYER, DESICCANT, HEATLESS, 35 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 003 A.pdf', '46300', '56000', '35', 'ï¿½ BSP', '35', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:49:48', '0000-00-00 00:00:00', '0', '', '', ''),
(3, 'HLN006A', '300170', 'AIR DRYER, DESICCANT, HEATLESS, 60 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 006 A.pdf', '63300', '75500', '60', 'ï¿½ BSP', '60', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:50:00', '0000-00-00 00:00:00', '0', '', '', ''),
(4, 'HLN007A', '300172', 'AIR DRYER, DESICCANT, HEATLESS, 75 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 007 A.pdf', '70600', '83900', '75	', 'ï¿½ BSP', '75', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:50:27', '0000-00-00 00:00:00', '0', '', '', ''),
(5, 'HLN010A', '300174', 'AIR DRYER, DESICCANT, HEATLESS, 100 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 010 A.pdf', '81500', '97250', '100	', '1 BSP', '100', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:50:38', '0000-00-00 00:00:00', '0', '', '', ''),
(6, 'HLN012A', '300176', 'AIR DRYER, DESICCANT, HEATLESS, 120 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 012 A.pdf', '108300', '130100', '125	', '1ï¿½ FLG ï¿½', '125', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:50:56', '0000-00-00 00:00:00', '0', '', '', ''),
(7, 'HLN015A', '300178', 'AIR DRYER, DESICCANT, HEATLESS, 150 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 015 A.pdf', '115600 ', '137500', '150	', '1ï¿½ FLG ï¿½ï¿½ï¿½', '150', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:51:08', '0000-00-00 00:00:00', '0', '', '', ''),
(8, 'HLN017A', '300180', 'AIR DRYER, DESICCANT, HEATLESS, 170 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 017 A.pdf', '120500', '144800', '175', '1 ï¿½ FLG', '170', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:51:27', '0000-00-00 00:00:00', '0', '', '', ''),
(9, 'HLN020A ', '300182', 'AIR DRYER, DESICCANT, HEATLESS, 200 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 020 A.pdf', '127700	', '156900	', '200	', '1 ½ FLG    ', '200', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:51:44', '0000-00-00 00:00:00', '0', '', '', ''),
(10, 'HLN025A', '300184', 'AIR DRYER, DESICCANT, HEATLESS, 250 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', 'HLN 025 A.pdf', '139900', '167800    ', '250', '2 FLG', '250', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 10:51:57', '0000-00-00 00:00:00', '0', '', '', ''),
(12, 'HLN002C', '300167', 'AIR DRYER, DESICCANT, HEATLESS, 20 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 002 C.pdf', '43900', '53600', '20', 'ï¿½ BSP', '20', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:33:37', '0000-00-00 00:00:00', '0', '', '', ''),
(13, 'HLN003C', '300169', 'AIR DRYER, DESICCANT, HEATLESS, 35 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 003 C.pdf', '46300', '56000', '35', 'ï¿½ BSP', '35', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:33:50', '0000-00-00 00:00:00', '0', '', '', ''),
(14, 'HLN006C', '300171', 'AIR DRYER, DESICCANT, HEATLESS, 60 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 006 C.pdf', '63300', '75500', '60', 'ï¿½ BSP', '60', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:34:02', '0000-00-00 00:00:00', '0', '', '', ''),
(15, 'HLN007C', '300173', 'AIR DRYER, DESICCANT, HEATLESS, 75 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 007 C.pdf', '70600', '83900', '75	', 'ï¿½ BSP', '75', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:34:14', '0000-00-00 00:00:00', '0', '', '', ''),
(16, 'HLN010C', '300175', 'AIR DRYER, DESICCANT, HEATLESS, 100 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 010 C.pdf', '81500', '97250', '100	', '1 BSP', '100', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:33:13', '0000-00-00 00:00:00', '0', '', '', ''),
(17, 'HLN012C', '300177', 'AIR DRYER, DESICCANT, HEATLESS, 120 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 012 C.pdf', '108300', '130100', '125	', '1ï¿½ FLG ï¿½', '125', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:34:44', '0000-00-00 00:00:00', '0', '', '', ''),
(18, 'HLN015C', '300179', 'AIR DRYER, DESICCANT, HEATLESS, 150 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 015 C.pdf', '115600', '137500', '150	', '1ï¿½ FLG ï¿½ï¿½ï¿½', '150', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:34:56', '0000-00-00 00:00:00', '0', '', '', ''),
(19, 'HLN017C', '300181', 'AIR DRYER, DESICCANT, HEATLESS, 170 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 017 C.pdf', '120500', '144800', '175', '1 ï¿½ FLG', '170', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:35:09', '0000-00-00 00:00:00', '0', '', '', ''),
(20, 'HLN020C', '300183', 'AIR DRYER, DESICCANT, HEATLESS, 200 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 020 C.pdf', '127700	', '156900	', '200	', '1 ï¿½ FLG ï¿½ï¿½ï¿½', '200', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:35:21', '0000-00-00 00:00:00', '0', '', '', ''),
(21, 'HLN025C', '300185', 'AIR DRYER, DESICCANT, HEATLESS, 250 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', 'HLN 025 C.pdf', '139900', '167800', '250', '2 FLG', '250', '3 weeks', '12', '18', '7 to 12.5 bar', '42C', '-40C, -60C', '2017-04-01 11:35:33', '0000-00-00 00:00:00', '0', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_hp_filter`
--

CREATE TABLE IF NOT EXISTS `tbl_product_hp_filter` (
  `hp_filter_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `hp_filter_gp` varchar(255) NOT NULL,
  `hp_filter_zp` varchar(255) NOT NULL,
  `hp_filter_zo` varchar(255) NOT NULL,
  `hp_filter_zc` varchar(255) NOT NULL,
  `hp_filter_delivery_trm` varchar(255) NOT NULL,
  `hp_filter_warenty_doc` varchar(255) NOT NULL,
  `hp_filter_warenty_doi` varchar(255) NOT NULL,
  `hp_filter__wrk_pressure` varchar(255) NOT NULL,
  `hp_filter_weight` varchar(255) NOT NULL,
  `hp_filter_packging_cost` varchar(255) NOT NULL,
  `hp_filter_discount` varchar(255) NOT NULL,
  `hp_filter_changed_on` datetime NOT NULL,
  `hp_filter_updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hp_filter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_product_hp_filter`
--

INSERT INTO `tbl_product_hp_filter` (`hp_filter_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `hp_filter_gp`, `hp_filter_zp`, `hp_filter_zo`, `hp_filter_zc`, `hp_filter_delivery_trm`, `hp_filter_warenty_doc`, `hp_filter_warenty_doi`, `hp_filter__wrk_pressure`, `hp_filter_weight`, `hp_filter_packging_cost`, `hp_filter_discount`, `hp_filter_changed_on`, `hp_filter_updated_on`, `status`) VALUES
(8, 'GPA0057', '', '', 'GPA0057.pdf', '7800', '', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:00:11', ''),
(9, 'GPB0107', '', '', 'GPB0107.pdf', '14100 ', '', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:00:35', ''),
(10, 'GPB0207', '', '', 'GPB0207.pdf', '21900 ', '', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:00:51', ''),
(11, 'GPB0307', '', '', 'GPB0307.pdf', ' 26000 ', '', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:01:03', ''),
(12, 'GPB0507', '', '', 'GPB0507.pdf', '34900 ', '', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:01:15', ''),
(13, 'GPB0757', '', '', '', '49900', ' ', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-27 12:10:07', ''),
(14, 'GPB1007', '', '', '', '62400', '', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-27 12:10:07', ''),
(15, 'ZPA0057', '', '', 'ZPA0057.pdf', '', '8500', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:05:26', ''),
(16, 'ZPB0107', '', '', 'ZPB0107.pdf', '', '15100 ', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:05:45', ''),
(17, 'ZPB0207', '', '', 'ZPB0207.pdf', '', '23400 ', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:06:00', ''),
(18, 'ZPB0307', '', '', 'ZPB0307.pdf', '', '27600 ', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:06:26', ''),
(19, 'ZPB0507', '', '', 'ZPB0507.pdf', '', '37500 ', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:06:40', ''),
(20, 'ZPB0757', '', '', '', '', '53100 ', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:34:38', ''),
(21, 'ZPB1007', '', '', '', '', ' 65600 ', '', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:34:41', ''),
(22, 'ZOA0057', '', '', 'ZOA0057.pdf', '', '', '8500', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:07:58', ''),
(23, 'ZOB0107', '', '', 'ZOB0107.pdf', '', '', '15100 ', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:08:17', ''),
(24, 'ZOB0207', '', '', 'ZOB0207.pdf', ' ', '', '23400', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:08:30', ''),
(25, 'ZOB0307', '', '', 'ZOB0307.pdf', '', '', '27400 ', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:08:41', ''),
(26, 'ZOB0507', '', '', 'ZOB0507.pdf', '', '', '37500 ', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:08:52', ''),
(27, 'ZOB0757', '', '', '', '', '', ' 53100 ', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:35:21', ''),
(28, 'ZOB1007', '', '', '', '', '', '65600 ', '', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:35:24', ''),
(29, 'ZCA0057', '', '', 'ZCA0057.pdf', '', '', '', '8500', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:09:36', ''),
(30, 'ZCB0107', '', '', 'ZCB0107.pdf', '', '', '', '15100', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-04-01 11:10:00', ''),
(31, 'ZCB0207', '', '', '', '', '', '', '23400 ', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:36:58', ''),
(32, 'ZCB0307', '', '', '', ' ', '', '', '27600', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:36:58', ''),
(33, 'ZCB0507', '', '', '', '', '', ' ', '37500', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:36:58', ''),
(34, 'ZCB0757', '', '', '', '', '', '', '53100', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:36:58', ''),
(35, 'ZCB1007', '', '', '', '', '', '', '65600', '10', '12', '18', ' 40 to 42 bar g', '0', '', '', '0000-00-00 00:00:00', '2017-03-31 07:36:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_hp_filter_element`
--

CREATE TABLE IF NOT EXISTS `tbl_product_hp_filter_element` (
  `hp_filter_ele_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `hp_filter_ele_gpe` varchar(255) NOT NULL,
  `hp_filter_ele_zpe` varchar(255) NOT NULL,
  `hp_filter_ele_zoe` varchar(255) NOT NULL,
  `hp_filter_ele_zce` varchar(255) NOT NULL,
  `hp_filter_ele_delivery_trm` varchar(255) NOT NULL,
  `hp_filter_ele_warenty_doc` varchar(255) NOT NULL,
  `hp_filter_ele_warenty_doi` varchar(255) NOT NULL,
  `hp_filter_ele_wrk_presure` varchar(255) NOT NULL,
  `hp_filter_ele_weight` varchar(255) NOT NULL,
  `hp_filter_ele_product_cost` varchar(255) NOT NULL,
  `hp_filter_ele_discount` varchar(255) NOT NULL,
  `hp_filter_ele_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hp_filter_ele_update-on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`hp_filter_ele_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_product_hp_filter_element`
--

INSERT INTO `tbl_product_hp_filter_element` (`hp_filter_ele_id`, `product_model`, `sap_code`, `description`, `hp_filter_ele_gpe`, `hp_filter_ele_zpe`, `hp_filter_ele_zoe`, `hp_filter_ele_zce`, `hp_filter_ele_delivery_trm`, `hp_filter_ele_warenty_doc`, `hp_filter_ele_warenty_doi`, `hp_filter_ele_wrk_presure`, `hp_filter_ele_weight`, `hp_filter_ele_product_cost`, `hp_filter_ele_discount`, `hp_filter_ele_changed_on`, `hp_filter_ele_update-on`, `status`) VALUES
(1, 'GPE005 7	', '', '', '3400	', '', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-04-01 07:15:42', '0000-00-00 00:00:00', ''),
(2, 'GPE010 7	', '', '', '5200	', '', '	', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-04-01 07:15:42', '0000-00-00 00:00:00', ''),
(3, 'GPE020 7	', '', '', '10600	', '	', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-04-01 07:15:42', '0000-00-00 00:00:00', ''),
(4, 'GPE030 7	', '', '', '12300	', '	', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-04-01 07:15:42', '0000-00-00 00:00:00', ''),
(5, 'GPE050 7	', '', '', '14100	', '', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-04-01 07:15:42', '0000-00-00 00:00:00', ''),
(6, 'GPE075 7	', '', '', '21600	', '', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-04-01 07:15:42', '0000-00-00 00:00:00', ''),
(7, 'GPE100 7	', '', '', '28600	', '', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-04-01 07:15:42', '0000-00-00 00:00:00', ''),
(8, 'ZPE005 7	', '', '', '', '4200	', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:29:56', '0000-00-00 00:00:00', ''),
(9, 'ZPE010 7	', '', '', '', '6000	', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:30:38', '0000-00-00 00:00:00', ''),
(10, 'ZPE020 7	', '', '', '', '11000	', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:31:15', '0000-00-00 00:00:00', ''),
(11, 'ZPE030 7	', '', '', '', '13200', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:31:55', '0000-00-00 00:00:00', ''),
(12, 'ZPE050 7	', '', '', '', '14500	', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:32:29', '0000-00-00 00:00:00', ''),
(13, 'ZPE075 7	', '', '', '', '22100	', '	', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:33:11', '0000-00-00 00:00:00', ''),
(14, 'ZPE100 7	', '', '', '', '29300	', '', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:33:40', '0000-00-00 00:00:00', ''),
(15, 'ZOE005 7	', '', '', '', '', '4500	', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:29:56', '0000-00-00 00:00:00', ''),
(16, 'ZOE010 7	', '', '', '', '', '6300	', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:30:38', '0000-00-00 00:00:00', ''),
(17, 'ZOE020 7	', '', '', '', '	', '11100		', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:31:15', '0000-00-00 00:00:00', ''),
(18, 'ZOE030 7	', '', '', '', '', '13500	', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:31:55', '0000-00-00 00:00:00', ''),
(19, 'ZOE050 7	', '', '', '', '', '14800	', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:32:29', '0000-00-00 00:00:00', ''),
(20, 'ZOE075 7	', '', '', '', '', '22400	', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:33:11', '0000-00-00 00:00:00', ''),
(21, 'ZOE100 7	', '', '', '', '', '29700	', '', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:33:40', '0000-00-00 00:00:00', ''),
(22, 'ZCE005 7	', '', '', '', '', '	', '4700', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:29:56', '0000-00-00 00:00:00', ''),
(23, 'ZCE010 7	', '', '', '	', '	', '', '6800', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:30:38', '0000-00-00 00:00:00', ''),
(24, 'ZCE020 7	', '', '', '', '', '	', '11400', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:31:15', '0000-00-00 00:00:00', ''),
(25, 'ZCE030 7	', '', '', '', '', '', '13800	', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:31:55', '0000-00-00 00:00:00', ''),
(26, 'ZCE050 7	', '', '', '	', '', '', '15100', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:32:29', '0000-00-00 00:00:00', ''),
(27, 'ZCE075 7	', '', '', '', '', '', '22600', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:33:11', '0000-00-00 00:00:00', ''),
(28, 'ZCE100 7	', '', '', '', '', '	', '30200', '7 Days', '12', '18', '40 to 42 bar', '0', '', '', '2017-03-22 12:33:40', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_mst`
--

CREATE TABLE IF NOT EXISTS `tbl_product_mst` (
  `mst_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `mst_mv_baffle` varchar(255) NOT NULL,
  `mst_demister` varchar(255) NOT NULL,
  `mst_delivery_trm` varchar(255) NOT NULL,
  `mst_warenty_doc` varchar(255) NOT NULL,
  `mst_warenty_doi` varchar(255) NOT NULL,
  `mst_wrk_presure` varchar(255) NOT NULL,
  `mst_weight` varchar(255) NOT NULL,
  `mst_product_cost` varchar(255) NOT NULL,
  `mst_discount` varchar(255) NOT NULL,
  `mst_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mst_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`mst_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_product_mst`
--

INSERT INTO `tbl_product_mst` (`mst_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `mst_mv_baffle`, `mst_demister`, `mst_delivery_trm`, `mst_warenty_doc`, `mst_warenty_doi`, `mst_wrk_presure`, `mst_weight`, `mst_product_cost`, `mst_discount`, `mst_changed_on`, `mst_updated_on`, `status`) VALUES
(1, 'MST002', '456789798', 'hfjhjgjhjtytr', 'mst.pdf', '3600', '4600', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:12:22', '0000-00-00 00:00:00', ''),
(2, 'MST003', '', '', 'mst.pdf', '3600', '4600', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:12:28', '0000-00-00 00:00:00', ''),
(3, 'MST005', '', '', 'mst.pdf', '5600', '7700', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:12:31', '0000-00-00 00:00:00', ''),
(4, 'MST007', '', '', 'mst.pdf', '5600', '7700', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:12:40', '0000-00-00 00:00:00', ''),
(5, 'MST010', '', '', 'mst.pdf', '5600', '7700', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:12:48', '0000-00-00 00:00:00', ''),
(6, 'MST015', '', '', 'mst.pdf', '7200', '9200', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:12:52', '0000-00-00 00:00:00', ''),
(7, 'MST020', '', '', 'mst.pdf', '7200', '9200', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:12:56', '0000-00-00 00:00:00', ''),
(8, 'MST025', '', '', 'mst.pdf', '8700', '13300', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:13:01', '0000-00-00 00:00:00', ''),
(9, 'MST030', '', '', 'mst.pdf', '8700', '13300', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:13:05', '0000-00-00 00:00:00', ''),
(10, 'MST050', '', '', 'mst.pdf', '16400', '21400', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:13:08', '0000-00-00 00:00:00', ''),
(11, 'MST075', '', '', 'mst.pdf', '17400', '24500', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:13:13', '0000-00-00 00:00:00', ''),
(12, 'MST100', '', '', 'mst.pdf', '22400', '33600', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:13:18', '0000-00-00 00:00:00', ''),
(13, 'MST150', '', '', 'mst.pdf', '29500', '42800', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:13:22', '0000-00-00 00:00:00', ''),
(14, 'MST200', '', '', 'mst.pdf', '34600', '51000', '7 days', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 10:13:25', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_nxg_nex_gen`
--

CREATE TABLE IF NOT EXISTS `tbl_product_nxg_nex_gen` (
  `nxg_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `nxg_air_cooled_r134a` varchar(255) NOT NULL,
  `nxg_air_cooled_r404a` varchar(255) NOT NULL,
  `nxg_air_cooled_r407c` varchar(255) NOT NULL,
  `nxg_capacity_cfm` varchar(255) NOT NULL,
  `nxg_working_pressure` varchar(255) NOT NULL,
  `nxg_air_connection_in_out` varchar(255) NOT NULL,
  `nxg_rate_power_kw` varchar(255) NOT NULL,
  `nxg_delivery_terms` varchar(255) NOT NULL,
  `nxg_electrical_connection_220v` varchar(255) NOT NULL,
  `nxg_electrical_connection_415v` varchar(255) NOT NULL,
  `nxg_warrenty_doc` varchar(255) NOT NULL,
  `nxg_warrenty_doi` varchar(255) NOT NULL,
  `nxg_weight` varchar(255) NOT NULL,
  `nxg_packing_cost` varchar(255) NOT NULL,
  `nxg_discount` varchar(255) NOT NULL,
  `nxg_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nxg_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nxg_status` varchar(255) NOT NULL,
  PRIMARY KEY (`nxg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_product_nxg_nex_gen`
--

INSERT INTO `tbl_product_nxg_nex_gen` (`nxg_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `nxg_air_cooled_r134a`, `nxg_air_cooled_r404a`, `nxg_air_cooled_r407c`, `nxg_capacity_cfm`, `nxg_working_pressure`, `nxg_air_connection_in_out`, `nxg_rate_power_kw`, `nxg_delivery_terms`, `nxg_electrical_connection_220v`, `nxg_electrical_connection_415v`, `nxg_warrenty_doc`, `nxg_warrenty_doi`, `nxg_weight`, `nxg_packing_cost`, `nxg_discount`, `nxg_created_on`, `nxg_updated_on`, `nxg_status`) VALUES
(1, 'NXG010', '300087', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 100CFM AT 7-16BAR GAS, R134A, AIR COOLED', 'NXG010.pdf', '87600', '0', '0', '100', '16', '1  BSP(F)', '0.6', 'Exstock', 'yes', '0', '24', '30', '0', '', '', '2017-04-01 11:19:22', '0000-00-00 00:00:00', ''),
(2, 'NXG015', '300088', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 150CFM AT 7-16BAR GAS, R134A, AIR COOLED', 'NXG015.pdf', '111100', '0', '0', '150', '16', '1 1/2 BSP(F)', '0.9', 'Exstock', '0', 'yes', '24', '30', '0', '', '', '2017-04-01 11:19:34', '0000-00-00 00:00:00', ''),
(3, 'NXG020', '300089', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 200CFM AT 7-16BAR GAS, R134A, AIR COOLED', 'NXG020.pdf', '116200', '0', '0', '200', '16', '1 1/2 BSP(F)', '1.2', 'Exstock', '0', 'yes', '24', '30', '0', '', '', '2017-04-01 11:19:49', '0000-00-00 00:00:00', ''),
(4, 'NXG025', '', '', 'NXG025.pdf', '0', '150000', '0', '250', '16', '2 BSP(F)', '1.38', '2-3 days', 'no', 'yes', '24', '30', '0', '', '', '2017-04-01 11:20:46', '0000-00-00 00:00:00', ''),
(5, 'NXG030', '300090', 'NEXT GENERATION REFRIGERATION AIR DRYER, 300 CFM, 16 KG/CM2', 'NXG030.pdf', '0', '155000', '0', '300', '16', '2 1/2 BSP(F)', '1.38', '2-3 days', 'no', 'yes', '24', '30', '0', '', '', '2017-04-01 11:20:59', '0000-00-00 00:00:00', ''),
(6, 'NXG040', '300091', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 400CFM AT 7-16BAR GAS, R404A, AIR COOLED', 'NXG040.pdf', '0', '197750', '0', '300', '16', '2 1/2 BSP(F)', '2.32', '2-3 days', 'no', 'yes', '24', '30', '0', '', '', '2017-04-01 11:21:09', '0000-00-00 00:00:00', ''),
(7, 'NXG050', '300092', 'NEXT GENERATION REFRIGERATION AIR DRYER, 500 CFM, 16 KG/CM2', 'NXG050.pdf', '0', '235750', '0', '500', '16', '2 1/2 BSP(F)', '2.6', '2-3 days', 'no', 'yes', '24', '30', '0', '', '', '2017-04-01 11:21:33', '0000-00-00 00:00:00', ''),
(8, 'NXG060', '300093', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE600CFM AT 7-16BAR GAS, R404A, AIR COOLED', 'NXG060.pdf', '0', '240000', '0', '600', '16', '2 1/2 BSP(F)', '2.6', '3 to 4weeks', 'no', 'yes', '24', '30', '0', '', '', '2017-04-01 11:21:43', '0000-00-00 00:00:00', ''),
(9, 'NXG075', '300094', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE750CFM AT 7-16BAR GAS, R407C, AIR COOLED', 'NXG075.pdf', '0', '0', '265000', '750', '16', '3 BSP(F)', '4.12', '3 to 4weeks', 'no', 'yes', '24', '30', '0', '', '', '2017-04-01 11:22:02', '0000-00-00 00:00:00', ''),
(10, 'NXG100', '300095', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE1000CFM AT 7-16BAR GAS, R407C, AIR COOLED', 'NXG100.pdf', '0', '0', '340000', '1000', '16', '3 BSP(F)', '5.6', '3 to 4weeks', 'no', 'yes', '24', '30', '0', '', '', '2017-04-01 11:22:14', '0000-00-00 00:00:00', ''),
(11, 'NXG125', '300096', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE1250CFM AT 7-16BAR GAS, R407C, AIR COOLED', 'NXG125.pdf', '0', '0', '37000', '1250', '16', '3 BSP(F)', '5.7', '3 to 4weeks', 'no', 'yes', '24', '30', '0', '', '', '2017-04-01 11:22:32', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_rad`
--

CREATE TABLE IF NOT EXISTS `tbl_product_rad` (
  `rad_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `rad_mv_water_cooled_ref_r407c` varchar(255) NOT NULL,
  `rad_mv_capacity` varchar(255) NOT NULL,
  `rad_mv_in_out` varchar(255) NOT NULL,
  `rad_mv_rate_pow_ele_conn_415_3a` varchar(255) NOT NULL,
  `rad_delivery_terms` varchar(255) NOT NULL,
  `rad_wrk_pressur` varchar(255) NOT NULL,
  `rad_warrenty_doc` varchar(255) NOT NULL,
  `rad_warrenty_doi` varchar(255) NOT NULL,
  `rad_weight` varchar(255) NOT NULL,
  `rad_packing_cost` varchar(255) NOT NULL,
  `rad_discount` varchar(255) NOT NULL,
  `rad_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rad_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rad_status` varchar(255) NOT NULL,
  PRIMARY KEY (`rad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_product_rad`
--

INSERT INTO `tbl_product_rad` (`rad_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `rad_mv_water_cooled_ref_r407c`, `rad_mv_capacity`, `rad_mv_in_out`, `rad_mv_rate_pow_ele_conn_415_3a`, `rad_delivery_terms`, `rad_wrk_pressur`, `rad_warrenty_doc`, `rad_warrenty_doi`, `rad_weight`, `rad_packing_cost`, `rad_discount`, `rad_created_on`, `rad_updated_on`, `rad_status`) VALUES
(1, 'RAD300F', '300097', 'COMPRESSED AIRDRYER 1000CFM/WATERCOOLED/407C/PRESSUR 7BAR', '', '1400000', '3000', '8', '14', '60 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-31 11:24:42', '0000-00-00 00:00:00', ''),
(2, 'RAD400F', '300098', 'COMPRESSED AIR DRYER 4000 CFM WITH WATER COOLED; R407 C ;  WORKING PRESSURE 7-12.5KG/CM.', '', '1850000', '4000', '8', '17', '60 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-31 11:25:26', '0000-00-00 00:00:00', ''),
(3, 'RAD500F', '300099', 'COMPRESSED AIR DRYER 5000 CFM WITH WATER COOLED; R407 C;  WORKING PRESSURE 8KG/CM.', '', '2000000', '5000 ', '10', '21', ' 60 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-31 11:26:20', '0000-00-00 00:00:00', ''),
(4, 'RAD600F', '300100', 'COMPRESSED AIR DRYER, 5500 CFM, 12 KG/CM2 PRESSURE, WATER COOLED, R407 C', '', '2700000', '6000 ', '10', '22', '60 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-31 11:27:22', '0000-00-00 00:00:00', ''),
(5, 'RAD800F', '300101', 'COMPRESSED AIR DRYER, 8000 CFM, 12.5 KG/CM2 PRESSURE, WATER COOLED, R407 C', '', '3000000', '8000', '12', '32', '90 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-31 11:28:13', '0000-00-00 00:00:00', ''),
(6, 'RAD1000F', '300102', 'COMPRESSED AIR DRYER, 10000 CFM, 12.5 KG/CM2 PRESSURE, WATER COOLED, R407 C', '', '3200000', '10000', '16', '42', '90 days', '7 to 12.5 bar ', '12', '18', '0', '', '', '2017-03-31 11:28:52', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_scb`
--

CREATE TABLE IF NOT EXISTS `tbl_product_scb` (
  `scb_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `scb_low_temp` varchar(255) NOT NULL,
  `scb_high_temp` varchar(255) NOT NULL,
  `scb_motor` varchar(255) NOT NULL,
  `scb_in_out_size` varchar(255) NOT NULL,
  `scb_water_flow` varchar(255) NOT NULL,
  `scb_delivery_trm` varchar(255) NOT NULL,
  `scb_outlet_temp` varchar(255) NOT NULL,
  `scb_warenty_doc` varchar(255) NOT NULL,
  `scb_warenty_doi` varchar(255) NOT NULL,
  `scb_weight` varchar(255) NOT NULL,
  `scb_product_cost` varchar(255) NOT NULL,
  `scb_discount` varchar(255) NOT NULL,
  `scb_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `scb_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`scb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_product_scb`
--

INSERT INTO `tbl_product_scb` (`scb_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `scb_low_temp`, `scb_high_temp`, `scb_motor`, `scb_in_out_size`, `scb_water_flow`, `scb_delivery_trm`, `scb_outlet_temp`, `scb_warenty_doc`, `scb_warenty_doi`, `scb_weight`, `scb_product_cost`, `scb_discount`, `scb_created_on`, `scb_updated_on`, `status`) VALUES
(1, 'SCB100L', '300139', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 100 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '', '105130', 'ï¿½', ' 5	', '5 / 5	', '7.80', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:30:52', '0000-00-00 00:00:00', ''),
(2, 'SCB150L', '300141', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 150 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '', '123590', '120150', ' 5	', '6 / 6	', '11.70', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:33:47', '0000-00-00 00:00:00', ''),
(3, 'SCB200L', '300143', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 200TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '', '159760', '183650', '7.5', '8 / 8	', '15.60', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:34:42', '0000-00-00 00:00:00', ''),
(4, 'SCB250L', '300145', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 250 TR, LOW TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '', '190730', '192520', ' 10', '8 / 8', '23.40', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:35:49', '0000-00-00 00:00:00', ''),
(5, 'SCB300L', '300147', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 300 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '', '234450', '274490', '12.5', '8 / 8', '31.20', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:36:46', '0000-00-00 00:00:00', ''),
(6, 'SCB100H', '300140', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 100 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '', '105130', '120150	', ' 5	', '5 / 5	', '7.80', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:38:31', '0000-00-00 00:00:00', ''),
(7, 'SCB150H', '300142', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 150 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '', '123590', '139970', ' 5	', '6 / 6	', '11.70', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:39:43', '0000-00-00 00:00:00', ''),
(8, 'SCB200H', '300144', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 200 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '', '159760', '183650', '7.5', '8 / 8	', '15.60', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:40:52', '0000-00-00 00:00:00', ''),
(9, 'SCB250H', '300146', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 250 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '', '190730', '192520 ï¿½ï¿½ï¿½', ' 10', '8 / 8', '23.40', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:41:43', '0000-00-00 00:00:00', ''),
(10, 'SCB300H', '300148', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 300 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '', '234450', '274490', '12.5', '8 / 8', '31.20', 'Exstock/1week', 'wet Bulb+4 deg c', '12 ', '12 ', '0', '', '', '2017-03-31 13:42:33', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_sct`
--

CREATE TABLE IF NOT EXISTS `tbl_product_sct` (
  `sct_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `sct_low_temp_price` varchar(255) NOT NULL,
  `sct_high_temp_price` varchar(255) NOT NULL,
  `sct_in_out_size` varchar(255) NOT NULL,
  `sct_water_rate` varchar(255) NOT NULL,
  `sct_motor` varchar(255) NOT NULL,
  `sct_delvery_trm` varchar(255) NOT NULL,
  `sct_outlet_temp` varchar(255) NOT NULL,
  `sct_warenty_doc` varchar(255) NOT NULL,
  `sct_warenty_doi` varchar(255) NOT NULL,
  `sct_weight` varchar(255) NOT NULL,
  `sct_product_cost` varchar(255) NOT NULL,
  `sct_discount` varchar(255) NOT NULL,
  `sct_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sct_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`sct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_product_sct`
--

INSERT INTO `tbl_product_sct` (`sct_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `sct_low_temp_price`, `sct_high_temp_price`, `sct_in_out_size`, `sct_water_rate`, `sct_motor`, `sct_delvery_trm`, `sct_outlet_temp`, `sct_warenty_doc`, `sct_warenty_doi`, `sct_weight`, `sct_product_cost`, `sct_discount`, `sct_created_on`, `sct_updated_on`, `status`) VALUES
(2, 'SCT100L', '300149', 'COOLING TOWER, EVAPORATIVE, SQUARE, 100 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '\nSCT 100L.pdf', '89950', '104960', '5/5', '7.80	', '5	', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:21:36', '0000-00-00 00:00:00', ''),
(3, 'SCT150L', '300151', 'COOLING TOWER, EVAPORATIVE, SQUARE, 150 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', 'SCT 150L.pdf', '102650', '', '6/6', '11.70', '5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:17:00', '0000-00-00 00:00:00', ''),
(4, 'SCT200L', '300153', 'COOLING TOWER, EVAPORATIVE, SQUARE, 200 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', 'SCT 200L.pdf', '138830', '', '8/8', '15.60', '7.5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:18:04', '0000-00-00 00:00:00', ''),
(5, 'SCT250L', '300155', 'COOLING TOWER, EVAPORATIVE, SQUARE, 250 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', 'SCT 250L.pdf', '159080', '', '8/8', '23.40', '10', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:21:49', '0000-00-00 00:00:00', ''),
(6, 'SCT300L', '300157', 'COOLING TOWER, EVAPORATIVE, SQUARE, 300 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', 'SCT 300L.pdf', '195080', '', '8/8', '31.20', '12.5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:22:00', '0000-00-00 00:00:00', ''),
(7, 'SCT100H', '300150', 'COOLING TOWER, EVAPORATIVE, SQUARE, 100 TR, HIGH TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', 'SCT 100H.pdf', '', '104960', '5/5', '7.80	', '5	', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:22:17', '0000-00-00 00:00:00', ''),
(8, 'SCT150H', '300152', 'COOLING TOWER, EVAPORATIVE, SQUARE, 150 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', 'SCT 150H.pdf', '', '119030', '6/6', '11.70', '5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:22:25', '0000-00-00 00:00:00', ''),
(9, 'SCT200H', '300154', 'COOLING TOWER, EVAPORATIVE, SQUARE, 200 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', 'SCT 200H.pdf', '', '162720', '8/8', '15.60', '7.5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:22:35', '0000-00-00 00:00:00', ''),
(10, 'SCT250H', '300156', 'COOLING TOWER, EVAPORATIVE, SQUARE, 250 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', 'SCT 250H.pdf', '', '183070', '8/8', '23.40', '10', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:22:44', '0000-00-00 00:00:00', ''),
(11, 'SCT300H', '300158', 'COOLING TOWER, EVAPORATIVE, SQUARE, 300 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', 'SCT 300H.pdf', '', '235120', '8/8', '31.20', '12.5', 'Exstock/1week', ' wet Bulb+4 deg c', '12', '18', '0', '', '', '2017-04-01 10:22:52', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_spd`
--

CREATE TABLE IF NOT EXISTS `tbl_product_spd` (
  `spd_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `spd_moleculer_sieve_pric` varchar(255) NOT NULL,
  `spd_air_flow` varchar(255) NOT NULL,
  `spd_inlet_outlet` varchar(255) NOT NULL,
  `spd_delivery_trm` varchar(255) NOT NULL,
  `spd_warnty_doc` varchar(255) NOT NULL,
  `spd_warnty_doi` varchar(255) NOT NULL,
  `spd_inlet_temp` varchar(255) NOT NULL,
  `spd_atmospheric_dew_pt` varchar(255) NOT NULL,
  `spd_access` varchar(255) NOT NULL,
  `spd_wrk_pressure` varchar(255) NOT NULL,
  `spd_weight` varchar(255) NOT NULL,
  `spd_product_cost` varchar(255) NOT NULL,
  `spd_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `spd_updateed_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`spd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_product_spd`
--

INSERT INTO `tbl_product_spd` (`spd_id`, `product_model`, `sap_code`, `description`, `ga_diagram`, `spd_moleculer_sieve_pric`, `spd_air_flow`, `spd_inlet_outlet`, `spd_delivery_trm`, `spd_warnty_doc`, `spd_warnty_doi`, `spd_inlet_temp`, `spd_atmospheric_dew_pt`, `spd_access`, `spd_wrk_pressure`, `spd_weight`, `spd_product_cost`, `spd_created_on`, `spd_updateed_on`, `status`) VALUES
(1, 'SPD010', '', '', 'SPD010.pdf', '24200', '10', 'G 3/8', 'Exstock', '24', '30', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:38:36', '0000-00-00 00:00:00', ''),
(2, 'SPD015', '', '', 'SPD015.pdf', '26000', '15', 'G 3/4', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:38:45', '0000-00-00 00:00:00', ''),
(3, 'SPD025', '', '', 'SPD025.pdf', '48700', '25', 'G 3/4', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:38:51', '0000-00-00 00:00:00', ''),
(6, 'SPD040', '', '', 'SPD040.pdf', '52,600', '40', 'G 3/4', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:39:00', '0000-00-00 00:00:00', ''),
(7, 'SPD060', '', '', 'SPD060.pdf', '65000', '60', 'G 3/4', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:39:09', '0000-00-00 00:00:00', ''),
(8, 'SPD100', '', '', 'SPD100.pdf', '75000', '95', 'G1', 'Exstock', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:39:21', '0000-00-00 00:00:00', ''),
(9, 'SPD150', '', '', 'SPD150.pdf', '163800', '150', 'G 1 Â½', '  1/2 weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:39:28', '0000-00-00 00:00:00', ''),
(10, 'SPD250', '', '', 'SPD250.pdf', '2,16,500', '250', 'G 1 Â½', '  1/2 weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:39:35', '0000-00-00 00:00:00', ''),
(11, 'SPD350', '', '', 'SPD350.pdf', '271500', '350', 'G 1 Â½', '  1/2 weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:39:43', '0000-00-00 00:00:00', ''),
(12, 'SPD500', '', '', 'SPD500.pdf', '324100', '500', 'G 2', '2/3weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:39:51', '0000-00-00 00:00:00', ''),
(13, 'SPD700', '', '', 'SPD700.pdf', '378000', '700', 'G 2', '2/3weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:40:00', '0000-00-00 00:00:00', ''),
(14, 'SPD900', '', '', 'SPD900.pdf', '435300', '900', 'G 2 Â½', '2/3weeks', '24', '36', '40C', '40C', 'Prefilter  Oil removing filter & After filter(included)', '7 to 12.5 bar g', '0', '', '2017-04-01 10:40:31', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_tables`
--

CREATE TABLE IF NOT EXISTS `tbl_product_tables` (
  `product_grouplist_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_group_id` int(255) NOT NULL,
  `product_series_tbl_name` varchar(255) NOT NULL,
  `product_series_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`product_grouplist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `tbl_product_tables`
--

INSERT INTO `tbl_product_tables` (`product_grouplist_id`, `product_group_id`, `product_series_tbl_name`, `product_series_name`, `status`) VALUES
(1, 1, 'tbl_product_hln', 'HLN', '1'),
(2, 1, 'tbl_product_hld', 'HLD', '1'),
(3, 1, 'tbl_product_spd', 'SPD', '1'),
(4, 3, 'tbl_product_sct', 'SCT', '1'),
(5, 3, 'tbl_product_scb', 'SCB', '1'),
(6, 3, 'tbl_product_ect', 'ECT', '1'),
(7, 3, 'tbl_product_gas', 'GAS', '1'),
(9, 3, 'tbl_product_dct', 'DCT', '1'),
(10, 2, 'tbl_product_cht_mini', 'CHT MINI', '1'),
(11, 5, 'tbl_product_gzf', 'GZF', '1'),
(12, 5, 'tbl_product_gzf_cartridges', 'GZF CATRIDGES', '1'),
(13, 5, 'tbl_product_hp_filter', 'HP FILTER', '1'),
(14, 1, 'tbl_product_2kd', '2KD', '1'),
(15, 3, 'tbl_product_gct_eco', 'GCT+ ECO', '1'),
(16, 1, 'tbl_product_nxg_nex_gen', 'NXG', '1'),
(17, 1, 'tbl_product_2kw', '2KW', '1'),
(18, 1, 'tbl_product_rad', 'RAD', '1'),
(19, 2, 'tbl_product_cht_nex_genlh', 'CHT NEXTGEN LH', '1'),
(20, 2, 'tbl_product_cht_nexgen_hh', 'CHT NEXTGEN HH', '1'),
(21, 4, 'tbl_product_var', 'VAR', '1'),
(22, 5, 'tbl_product_hp_filter_element', 'HP FILTER ELEMENT', '1'),
(23, 5, 'tbl_product_acc', 'ACC', '1'),
(24, 5, 'tbl_product_wah', 'WAH', '1'),
(25, 5, 'tbl_product_gz_gfv', 'GZ', '1'),
(26, 5, 'tbl_product_gz_gfv', 'GFV', '1'),
(27, 4, 'tbl_product_vxs', 'VXS', '1'),
(28, 5, 'tbl_product_mst', 'MST', '1'),
(29, 5, 'tbl_product_at', 'AT', '1'),
(30, 1, 'tbl_product_2kd7', '2KD7', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_var`
--

CREATE TABLE IF NOT EXISTS `tbl_product_var` (
  `var_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `var_ar_model_var` varchar(255) NOT NULL,
  `var_ar_wrk_pressure` varchar(255) NOT NULL,
  `var_ar_price` varchar(255) NOT NULL,
  `var_ar_capacity` varchar(255) NOT NULL,
  `var_ar_shell_thick` varchar(255) NOT NULL,
  `var_ar_in_out` varchar(255) NOT NULL,
  `var_ar_hand` varchar(255) NOT NULL,
  `var_ar_delivery_trm` varchar(255) NOT NULL,
  `var_warenty_doc` varchar(255) NOT NULL,
  `var_warenty_doi` varchar(255) NOT NULL,
  `var_moc` varchar(255) NOT NULL,
  `var_weight` varchar(255) NOT NULL,
  `var_product_cost` varchar(255) NOT NULL,
  `var_discount` varchar(255) NOT NULL,
  `var_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `var_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`var_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_product_var`
--

INSERT INTO `tbl_product_var` (`var_id`, `product_model`, `sap_code`, `description`, `var_ar_model_var`, `var_ar_wrk_pressure`, `var_ar_price`, `var_ar_capacity`, `var_ar_shell_thick`, `var_ar_in_out`, `var_ar_hand`, `var_ar_delivery_trm`, `var_warenty_doc`, `var_warenty_doi`, `var_moc`, `var_weight`, `var_product_cost`, `var_discount`, `var_changed_on`, `var_updated_on`, `status`) VALUES
(1, 'VAR0252', '300240', 'AIR RECEIVER, VERTICAL, 250 LITERS, 7.5 BAR G MAX, IS2002 MOC, IS2825 COC', '0', '7 bar', '21900', '250', '4/5', '3/4 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:25:42', '0000-00-00 00:00:00', ''),
(2, 'VAR0253', '300253', 'AIR RECEIVER, VERTICAL, 1500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '22900', '250', '5/5', '3/4 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:42:43', '0000-00-00 00:00:00', ''),
(3, 'VAR0254', '300254', 'AIR RECEIVER, VERTICAL, 1500 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '24000', '250', '5/6', '3/4 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:44:01', '0000-00-00 00:00:00', ''),
(4, 'VAR0502', '300243', 'AIR RECEIVER, VERTICAL, 500 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '32200', '500', '5/5', '1 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:29:47', '0000-00-00 00:00:00', ''),
(5, 'VAR0503', '300244', 'AIR RECEIVER, VERTICAL,500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062MOC,IS2825COC', '0', '10.5 bar', '37200', '500', '5/6', '1 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:30:58', '0000-00-00 00:00:00', ''),
(6, 'VAR0504', '300245', 'AIR RECEIVER, VERTICAL, 500 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '41200', '500', '6/8', '1 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:32:06', '0000-00-00 00:00:00', ''),
(7, 'VAR0752', '300246', 'AIR RECEIVER, VERTICAL, 750 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '33900', '750', '5/6', '1 1/2 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:33:14', '0000-00-00 00:00:00', ''),
(8, 'VAR0753', '300247', 'AIR RECEIVER, VERTICAL,500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062MOC,IS2825COC', '0', '10.5 bar', '38600', '750', '6/6', '1 1/2 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:34:26', '0000-00-00 00:00:00', ''),
(9, 'VAR0754', '300248', 'AIR RECEIVER, VERTICAL, 750 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '44400', '750', '8/8', '1 1/2 BSP', 'Hand Hole', '7 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:35:38', '0000-00-00 00:00:00', ''),
(10, 'VAR1502', '300252', 'AIR RECEIVER, VERTICAL, 1500 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '77900', '1500', '5/6', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:38:40', '0000-00-00 00:00:00', ''),
(11, 'VAR1503', '300253', 'AIR RECEIVER, VERTICAL, 1500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '93600', '1500', '8/8', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:42:59', '0000-00-00 00:00:00', ''),
(12, 'VAR1504', '300254', 'AIR RECEIVER, VERTICAL, 1500 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '112200', '1500', '10/10', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:44:52', '0000-00-00 00:00:00', ''),
(13, 'VAR2002', '300255', 'AIR RECEIVER, VERTICAL, 2000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '89000', '2000', '5/6', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:52:00', '0000-00-00 00:00:00', ''),
(14, 'VAR2003', '300256', 'AIR RECEIVER, VERTICAL, 2000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '106500', '2000', '8/8', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:55:40', '0000-00-00 00:00:00', ''),
(15, 'VAR2004', '300257', 'AIR RECEIVER, VERTICAL, 2000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '128000', '2000', '10/10', '2 BSP', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:56:38', '0000-00-00 00:00:00', ''),
(16, 'VAR3002', '300258', 'AIR RECEIVER, VERTICAL, 3000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '125700', '3000', '5/6', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:57:44', '0000-00-00 00:00:00', ''),
(17, 'VAR3003', '300259', 'AIR RECEIVER, VERTICAL, 3000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '155000', '3000', '8/8', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 11:59:19', '0000-00-00 00:00:00', ''),
(18, 'VAR3004', '300260', 'AIR RECEIVER, VERTICAL, 3000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '185400', '3000', '10/10', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:00:44', '0000-00-00 00:00:00', ''),
(19, 'VAR4002', '300261', 'AIR RECEIVER, VERTICAL, 4000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '170900', '4000', '8/8', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:01:52', '0000-00-00 00:00:00', ''),
(20, 'VAR4003', '300262', 'AIR RECEIVER, VERTICAL, 4000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '207700', '4000', '10/10', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:03:00', '0000-00-00 00:00:00', ''),
(21, 'VAR4004', '300263', 'AIR RECEIVER, VERTICAL, 4000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '255600', '4000', '12/12', '4 NB Flg', 'Man hole 475x425mm', ' 15 DAYS', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:04:35', '0000-00-00 00:00:00', ''),
(22, 'VAR5002', '300264', 'AIR RECEIVER, VERTICAL, 5000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '188800', '5000', '8/8', '4 NB Flg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:05:39', '0000-00-00 00:00:00', ''),
(23, 'VAR5003', '300265', 'AIR RECEIVER, VERTICAL, 5000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '235900', '5000', '10/10', '4 NB Flg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:07:16', '0000-00-00 00:00:00', ''),
(24, 'VAR5004', '300266', 'AIR RECEIVER, VERTICAL, 5000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '264800', '5000', '12/12', '4 NB Flg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:09:20', '0000-00-00 00:00:00', ''),
(25, 'VAR6002', '300267', 'AIR RECEIVER, VERTICAL, 6000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '239900', '6000', '8/8', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:10:21', '0000-00-00 00:00:00', ''),
(26, 'VAR6003', '300268', 'AIR RECEIVER, VERTICAL, 6000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '289700', '6000', '10/10', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:11:26', '0000-00-00 00:00:00', ''),
(27, 'VAR6004', '300269', 'AIR RECEIVER, VERTICAL, 6000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '344400', '6000', '12/12', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:12:45', '0000-00-00 00:00:00', ''),
(28, 'VAR7502', '300270', 'AIR RECEIVER, VERTICAL, 7500 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '308200', '7500', '8/10', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:13:32', '0000-00-00 00:00:00', ''),
(29, 'VAR7503', '300271', 'AIR RECEIVER, VERTICAL, 7500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '377500', '7500', '12/12', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:16:09', '0000-00-00 00:00:00', ''),
(30, 'VAR7504', '300272', 'AIR RECEIVER, VERTICAL, 7500 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '447500', '7500', '12/14', '6 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:17:45', '0000-00-00 00:00:00', ''),
(31, 'VAR10002', '300273', 'AIR RECEIVER, VERTICAL, 10000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '7 bar', '448800', '10000', '8/10', '8 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:44:00', '0000-00-00 00:00:00', ''),
(32, 'VAR10003', '300274', 'AIR RECEIVER, VERTICAL, 10000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '10.5 bar', '449000', '10000', '10/12', '8 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:46:01', '0000-00-00 00:00:00', ''),
(33, 'VAR10004', '300275', 'AIR RECEIVER, VERTICAL, 10000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '0', '12.5 bar', '578500', '10000', '12/14', '8 NBFlg', 'Man hole 475x425mm', '21 days', '12', '18', 'IS 2062/2825', '0', '', '', '2017-03-31 12:47:06', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_vxs`
--

CREATE TABLE IF NOT EXISTS `tbl_product_vxs` (
  `vxs_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `vxs_vartex_separator` varchar(255) NOT NULL,
  `vxs_pipe_size` varchar(255) NOT NULL,
  `vxs_line_weight` varchar(255) NOT NULL,
  `vxs_capacity` varchar(255) NOT NULL,
  `vxs_in_out` varchar(255) NOT NULL,
  `vxs_delivery_trm` varchar(255) NOT NULL,
  `vxs_warenty_doc` varchar(255) NOT NULL,
  `vxs_warenty_doi` varchar(255) NOT NULL,
  `vxs_wrk_presure` varchar(255) NOT NULL,
  `vxs_weight` varchar(255) NOT NULL,
  `vxs_product_cost` varchar(255) NOT NULL,
  `vxs_discount` varchar(255) NOT NULL,
  `vxs_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vxs_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`vxs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_product_vxs`
--

INSERT INTO `tbl_product_vxs` (`vxs_id`, `product_model`, `sap_code`, `description`, `vxs_vartex_separator`, `vxs_pipe_size`, `vxs_line_weight`, `vxs_capacity`, `vxs_in_out`, `vxs_delivery_trm`, `vxs_warenty_doc`, `vxs_warenty_doi`, `vxs_wrk_presure`, `vxs_weight`, `vxs_product_cost`, `vxs_discount`, `vxs_changed_on`, `vxs_updated_on`, `status`) VALUES
(1, 'VXS010', '300418', 'MOISTURE SEPARATOR, VORTEX, 90 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '4600	', 'G 1/4ï¿½', '1.75	', '100	', '1/2', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 08:20:08', '0000-00-00 00:00:00', ''),
(4, 'VXS012', '300419', 'MOISTURE SEPARATOR, VORTEX, 125 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '4600	', 'G 3/4	', '1.75', '125	', ' 1/2', 'Exstock', '12', '18', ' 7 to 12.5 bar g', '0', '', '', '2017-04-01 08:20:45', '0000-00-00 00:00:00', ''),
(5, 'VXS015', '300420', 'MOISTURE SEPARATOR, VORTEX, 200 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '5200	', 'G 1', '1.75	', '150	', '3/4', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 08:21:31', '0000-00-00 00:00:00', ''),
(6, 'VXS025', '300421', 'MOISTURE SEPARATOR, VORTEX, 350 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '7200    ', 'G 1 1/2	', '4.5	', '350	 ', '1', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 08:22:19', '0000-00-00 00:00:00', ''),
(7, 'VXS040', '300422', 'MOISTURE SEPARATOR, VORTEX, 600 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '15300', 'G 2', '7.5	', '600	', ' 2', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 08:23:22', '0000-00-00 00:00:00', ''),
(8, 'VXS090', '300423', 'MOISTURE SEPARATOR, VORTEX, 1000 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '19400	', 'G 2 1/2', '9.5	', '1000	', ' 2 1/2', 'Exstock', '12', '18', '7 to 12.5 bar g', '0', '', '', '2017-04-01 08:23:55', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_wah`
--

CREATE TABLE IF NOT EXISTS `tbl_product_wah` (
  `wah_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_model` varchar(255) NOT NULL,
  `sap_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `wah_with_moisture` varchar(255) NOT NULL,
  `wah_capacity` varchar(255) NOT NULL,
  `wah_ac_bsp` varchar(255) NOT NULL,
  `wah_cooling_water` varchar(255) NOT NULL,
  `wah_water_flow_lpm` varchar(255) NOT NULL,
  `wah_shelldia` varchar(255) NOT NULL,
  `wah_delivery_trm` varchar(255) NOT NULL,
  `wah_warenty_doc` varchar(255) NOT NULL,
  `wah_warenty_doi` varchar(255) NOT NULL,
  `wah_wrk_pressure` varchar(255) NOT NULL,
  `wah_weight` varchar(255) NOT NULL,
  `wah_product_cost` varchar(255) NOT NULL,
  `wah_discount` varchar(255) NOT NULL,
  `wah_changed_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `wah_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`wah_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_product_wah`
--

INSERT INTO `tbl_product_wah` (`wah_id`, `product_model`, `sap_code`, `description`, `wah_with_moisture`, `wah_capacity`, `wah_ac_bsp`, `wah_cooling_water`, `wah_water_flow_lpm`, `wah_shelldia`, `wah_delivery_trm`, `wah_warenty_doc`, `wah_warenty_doi`, `wah_wrk_pressure`, `wah_weight`, `wah_product_cost`, `wah_discount`, `wah_changed_on`, `wah_updated_on`, `status`) VALUES
(1, 'WAH005B', '300276', 'AIR COOLED, WATER COOLED, HORIZONTAL, 50 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '11500	', '50	', '2 NB Flg	', '1/2 BSP	', '8	', '2 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 12:51:25', '0000-00-00 00:00:00', ''),
(2, 'WAH010B', '300277', 'AIR COOLED, WATER COOLED, HORIZONTAL, 100 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '17000	', '100	', '2 NB Flg	', '1/2 BSP	', '15	', '2 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 12:52:43', '0000-00-00 00:00:00', ''),
(3, 'WAH015B', '300278', 'AIR COOLED, WATER COOLED, HORIZONTAL, 150 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '19800	', '150	', '3 NB Flg	', '3/4 BSP	', '22	', '3 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 12:54:53', '0000-00-00 00:00:00', ''),
(4, 'WAH020B', '300279', 'AIR COOLED, WATER COOLED, HORIZONTAL, 200 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '22500	', '200	', '3 NB Flg	', '3/4 BSP	', '30	', '3 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 12:55:52', '0000-00-00 00:00:00', ''),
(5, 'WAH025B', '300280', 'AIR COOLED, WATER COOLED, HORIZONTAL, 250 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '23300	', '250', '3 NB Flg	', '3/4 BSP	', '38	', '3 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 12:57:14', '0000-00-00 00:00:00', ''),
(6, 'WAH030B', '300281', 'AIR COOLED, WATER COOLED, HORIZONTAL, 300 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '27500	', '300', '3 NB Flg	', '3/4 BSP	', '45	', '3 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 12:59:00', '0000-00-00 00:00:00', ''),
(7, 'WAH040B', '300282', 'AIR COOLED, WATER COOLED, HORIZONTAL, 400 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '32300	', '400	', '4 NB Flg	', '1 BSP	', '60	', '4 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 13:00:21', '0000-00-00 00:00:00', ''),
(8, 'WAH050B', '300283', 'AIR COOLED, WATER COOLED, HORIZONTAL, 500 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '39300	', '500', '4 NB Flg	', '1 BSP	', '75', '4 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 13:02:47', '0000-00-00 00:00:00', ''),
(9, 'WAH075B', '300284', 'AIR COOLED, WATER COOLED, HORIZONTAL, 750 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '49500	', '750	', '6 NB Flg	', '1 1/2 BSP	', '115', '6NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 13:03:59', '0000-00-00 00:00:00', ''),
(10, 'WAH100B', '300285', 'AIR COOLED, WATER COOLED, HORIZONTAL, 1000 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '63200	', '1000', '6 NB Flg	', '1 1/2 BSP	', '160', '6NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 13:05:11', '0000-00-00 00:00:00', ''),
(11, 'WAH125B', '300286', 'AIR COOLED, WATER COOLED, HORIZONTAL, 1250 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '79800	', '1250', '6 NB Flg	', '1 1/2 BSP	', '200', '6NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 13:24:32', '0000-00-00 00:00:00', ''),
(12, 'WAH150B', '300287', '', '126300	', '1500	', '8 NB Flg	', '2 BSP	', '240', '8 NB', '2/4weeks', '12', '18', '7 to 12.5 bar ', '0', '', '', '2017-03-31 13:25:47', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation`
--

CREATE TABLE IF NOT EXISTS `tbl_quotation` (
  `quotation_id` int(255) NOT NULL AUTO_INCREMENT,
  `quotation_no` varchar(255) NOT NULL,
  `enq_no` varchar(255) NOT NULL,
  `enq_product_group` varchar(255) NOT NULL,
  `enq_product_model` varchar(255) NOT NULL,
  `enq_product_model_no` varchar(255) NOT NULL,
  `enq_product_model_type` varchar(255) NOT NULL,
  `enq_product_qty` varchar(255) NOT NULL,
  `enq_product_price` varchar(255) NOT NULL,
  `enq_product_discount` varchar(255) NOT NULL,
  `quotation_created_on` varchar(255) NOT NULL,
  `quotation_status` varchar(255) NOT NULL,
  PRIMARY KEY (`quotation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `tbl_quotation`
--

INSERT INTO `tbl_quotation` (`quotation_id`, `quotation_no`, `enq_no`, `enq_product_group`, `enq_product_model`, `enq_product_model_no`, `enq_product_model_type`, `enq_product_qty`, `enq_product_price`, `enq_product_discount`, `quotation_created_on`, `quotation_status`) VALUES
(1, '10000', '1005', '1', '', '', '', '2', '10', '10', '', '1'),
(2, '10000', '1005', '1', '', '', '', '2', '10', '10', '', '1'),
(62, '10002', '1002', '1', '2kd', '2kd002b', 'airc', '2', '2000000', '', '', '1'),
(63, '10005', '1002', '2', '2kd', '2kd002b', 'airc', '2', '2000000', '', '', '1'),
(64, '10004', '1002', '2', '2kd', '2kd002b', 'airc', '2', '2000000', '12', '', '1'),
(65, '10006', '1002', '1', '2kd', '2kd002b', 'airc', '2', '2000000', '', '', '1'),
(66, '10006', '1002', '1', '2kd', '2kd002b', 'airc', '2', '2000000', '', '', '1'),
(67, '10006', '1002', '2', '2kd', '2kd002b', 'airc', '2', '2000000', '', '', '1'),
(68, '10006', '1002', '4', '2kd', '2kd002b', 'airc', '2', '20000000', '', '', '1'),
(69, '10006', '1002', '3', '2kd', '2kd002b', 'airc', '2', '20000000', '', '', '1'),
(70, '10007', '123', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155000', '12', '', '1'),
(71, '10008', 'enq no', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155000', '12', '', '1'),
(72, '10009', 'enq no', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155000', '12', '', '1'),
(73, '10010', 'enq no', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '4', '120620', '12', '2017-03-26 11:36:29', '1'),
(74, '10011', '123', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(75, '10012', '1001', '1', 'CHT MINI', 'CHT 0101/P', ' 1 to 3 Bar Air cooled R22', '1', '89000', '12', '', '1'),
(76, '10012', '1001', '1', '2KW', '2KW020B', 'Air Cooled  R134 (B)\r\n', '1', '37500', '', '', '1'),
(77, '10013', '1007', '1', 'CHT MINI', 'CHT 0101/P', ' 1 to 3 Bar Air cooled R22', '1', '89000', '12', '', '1'),
(78, '10013', '1007', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(79, '10014', '1006', '1', 'CHT MINI', 'CHT 0101/P', ' 1 to 3 Bar Air cooled R22', '1', '89000', '12', '', '1'),
(80, '10014', '1006', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(81, '10014', '1006', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '', '', '1'),
(82, '10015', '1001', '1', 'VAR', 'VAR0252', '7bar', '2', '43800', '12', '', '1'),
(83, '10016', '1001', '1', 'VAR', 'VAR0252', '7bar', '2', '43800', '12', '', '1'),
(84, '10017', '1001', '1', 'VAR', 'VAR0252', '7bar', '2', '43800', '12', '', '1'),
(85, '10017', '1001', '1', 'VAR', 'VAR0252', '7bar', '2', '43800', '12', '', '1'),
(86, '10018', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(87, '10018', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(88, '10019', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(89, '10019', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(90, '10020', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(91, '10020', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(92, '10021', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(93, '10021', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '2', '60310', '', '', '1'),
(94, '10022', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(95, '10022', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(96, '10023', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(97, '10023', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(98, '10024', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(99, '10024', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(100, '10025', '1006', '1', 'CHT MINI', 'CHT 0101/P', ' 1 to 3 Bar Air cooled R22', '2', '178000', '12', '', '1'),
(101, '10025', '1006', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(102, '10026', '1006', '1', 'CHT MINI', 'CHT 0101/P', ' 1 to 3 Bar Air cooled R22', '2', '178000', '12', '', '1'),
(103, '10026', '1006', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(104, '10027', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(105, '10027', '1001', '1', '2KD7', '2KD002B', 'Air Cooled R134a Price', '2', '60310', '', '', '1'),
(106, '10028', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(107, '10028', '1001', '1', '2KD7', '2KD002B', 'Air Cooled R134a Price', '2', '60310', '', '', '1'),
(108, '10029', 'enq no', '1', 'CHT MINI', 'CHT 0101/P', ' 1 to 3 Bar Air cooled R22', '1', '89000', '12', '', '1'),
(109, '10029', 'enq no', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(110, '10030', '1001', '1', 'VAR', 'VAR0252', '7bar', '1', '21900', '12', '', '1'),
(111, '10030', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(112, '10031', '1001', '1', 'VAR', 'VAR0252', '7bar', '2', '43800', '12', '', '1'),
(113, '10031', '1001', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '', '', '1'),
(114, '10031', '1001', '1', 'AT', 'AT050', 'Model Variance Accessories', '1', '3000', '', '', '1'),
(115, '10032', '', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(116, '10032', '', '1', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(117, '10032', '', '1', 'CHT MINI', 'CHT 0101/P', ' 1 to 3 Bar Air cooled R22', '1', '89000', '', '', '1'),
(118, '10032', '', '1', 'CHT MINI', 'CHT 0101/P', ' 1 to 3 Bar Air cooled R22', '1', '89000', '', '', '1'),
(119, '10033', '1007', '', '2KD', '2KD002B', 'Air Cooled R134a Price', '2', '60310', '12', '', '1'),
(120, '10033', '1007', '4', 'VAR', 'VAR0252', '7bar', '1', '21900', '', '', '1'),
(121, '10034', '', '', '2KD', '2KD002B', 'Air Cooled R134a Price', '0', '4000', '12', '', '1'),
(122, '10035', '1008', 'COOLER', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(123, '10035', '1008', '3', 'ACC', 'ACC003A', 'Without Vortex Separator Price', '1', '8700', '', '', '1'),
(124, '10036', '', 'null', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(125, '10037', '1009', 'VAR PRODUCTS', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(126, '10038', '1006', 'CHILLER', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(127, '10038', '1006', '3', 'DCT', 'DCT040', 'Model variance ', '2', '721000', '', '', '1'),
(128, '10039', '1011', 'DRYER', '2KD', '2KD004B', 'Air Cooled R134a Price', '1', '30155', '15', '', '1'),
(129, '10040', '1012', '1', 'SPD', 'SPD040', 'Model Variance Molecular Sieve (65 deg c)  Price with filter', '1', '52600', '', '2017-03-30 17:11:17', '1'),
(130, '10041', '1002', '1', 'HLD', 'HLD030A/B/C/D', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A)', '1', '182200', '', '2017-03-31 09:15:14', '1'),
(131, '10042', '1015', 'DRYER', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(132, '10043', '1015', 'DRYER', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(133, '10044', '1015', 'DRYER', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1'),
(134, '10045', '1013', 'DRYER', '2KD', '2KD002B', 'Air Cooled R134a Price', '1', '30155', '12', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_target`
--

CREATE TABLE IF NOT EXISTS `tbl_target` (
  `target_id` int(255) NOT NULL AUTO_INCREMENT,
  `target_year` varchar(255) NOT NULL,
  `target_amount` varchar(255) NOT NULL,
  `target_dryer` varchar(255) NOT NULL,
  `target_chiller` varchar(255) NOT NULL,
  `target_cooler` varchar(255) NOT NULL,
  `target_var` varchar(255) NOT NULL,
  `target_small_products` varchar(255) NOT NULL,
  `target_enquiry` varchar(255) NOT NULL,
  `target_campaign` varchar(255) NOT NULL,
  `target_created_on` varchar(255) NOT NULL,
  `target_status` int(1) NOT NULL,
  PRIMARY KEY (`target_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='target for the year' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_target`
--

INSERT INTO `tbl_target` (`target_id`, `target_year`, `target_amount`, `target_dryer`, `target_chiller`, `target_cooler`, `target_var`, `target_small_products`, `target_enquiry`, `target_campaign`, `target_created_on`, `target_status`) VALUES
(1, '2017-03-01 to 2018-02-28', '1000000000', '1000', '1000', '1000', '1000', '1000', '5000', '100', '2017-03-12 22:11:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_target_month`
--

CREATE TABLE IF NOT EXISTS `tbl_target_month` (
  `target_month_id` int(255) NOT NULL AUTO_INCREMENT,
  `target_year_id` varchar(255) NOT NULL COMMENT 'tbl_target id',
  `target_month` varchar(255) NOT NULL,
  `target_month_amount` varchar(255) NOT NULL,
  `target_month_dryer` varchar(255) NOT NULL,
  `target_month_chiller` varchar(255) NOT NULL,
  `target_month_cooler` varchar(255) NOT NULL,
  `target_month_var` varchar(255) NOT NULL,
  `target_month_small_products` varchar(255) NOT NULL,
  `target_month_enquiry` varchar(255) NOT NULL,
  `target_month_campaign` varchar(255) NOT NULL,
  `target_month_created_on` varchar(255) NOT NULL,
  `target_month_status` varchar(255) NOT NULL,
  PRIMARY KEY (`target_month_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='target for the month' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_target_team`
--

CREATE TABLE IF NOT EXISTS `tbl_target_team` (
  `team_target_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(255) NOT NULL,
  `year_id` varchar(255) NOT NULL,
  `month_id` varchar(255) NOT NULL,
  `team_amount` varchar(255) NOT NULL,
  `team_dryer` varchar(255) NOT NULL,
  `team_chiller` varchar(255) NOT NULL,
  `team_cooler` varchar(255) NOT NULL,
  `team_var` varchar(255) NOT NULL,
  `team_small_products` varchar(255) NOT NULL,
  `team_enquiry` varchar(255) NOT NULL,
  `team_campaign` varchar(255) NOT NULL,
  `team_target_created_on` varchar(255) NOT NULL,
  `team_target_status` int(1) NOT NULL,
  PRIMARY KEY (`team_target_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='team target for the month' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_target_team`
--

INSERT INTO `tbl_target_team` (`team_target_id`, `team_id`, `year_id`, `month_id`, `team_amount`, `team_dryer`, `team_chiller`, `team_cooler`, `team_var`, `team_small_products`, `team_enquiry`, `team_campaign`, `team_target_created_on`, `team_target_status`) VALUES
(1, '1', '1', '4', '100000000', '100', '100', '100', '100', '100', '100', '2', '2017-03-12 23:19:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE IF NOT EXISTS `tbl_task` (
  `task_id` int(255) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) NOT NULL,
  `task_assigned_by` varchar(255) NOT NULL,
  `task_assigned_to` varchar(255) NOT NULL,
  `task_about` text NOT NULL,
  `task_report_description` text NOT NULL,
  `task_created_on` datetime NOT NULL,
  `task_closed_on` datetime NOT NULL,
  `task_status` int(1) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='task table' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`task_id`, `task_name`, `task_assigned_by`, `task_assigned_to`, `task_about`, `task_report_description`, `task_created_on`, `task_closed_on`, `task_status`) VALUES
(1, 'test', 'admin', '1001', 'test', 'gdfhcsb', '2017-03-14 02:00:06', '0000-00-00 00:00:00', 1),
(2, 'Enquiry No', '', '1001', 'enquiry', 'soooperrr', '2017-03-27 11:52:23', '0000-00-00 00:00:00', 1),
(3, 'Enquiry No', '', '1001', 'enquiry', 'CFDVSD', '2017-03-27 11:52:50', '0000-00-00 00:00:00', 1),
(4, 'Enquiry No', '', '1002', 'enquiry', 'CFDVSD', '2017-03-27 11:52:59', '0000-00-00 00:00:00', 1),
(5, 'Enquiry No1002', '', '1001', 'enquiry', '2345', '2017-03-27 11:54:00', '0000-00-00 00:00:00', 1),
(6, 'Enquiry No1002', '1001', '1002', 'enquiry', 'CFDVSD', '2017-03-27 11:55:55', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE IF NOT EXISTS `tbl_team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) NOT NULL,
  `team_head_user_code` varchar(255) NOT NULL,
  `team_password` varchar(255) NOT NULL,
  `team_discount` varchar(255) NOT NULL,
  `team_created_on` datetime NOT NULL,
  `team_last_login_on` datetime NOT NULL,
  `team_status` int(255) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='team table' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`team_id`, `team_name`, `team_head_user_code`, `team_password`, `team_discount`, `team_created_on`, `team_last_login_on`, `team_status`) VALUES
(1, 'south', '1001', 'e10adc3949ba59abbe56e057f20f883e', '20%', '2017-03-14 08:00:00', '2017-03-02 10:20:13', 1),
(2, 'North', '1002', '123456', '10', '2017-03-30 00:00:00', '2017-03-30 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_members`
--

CREATE TABLE IF NOT EXISTS `tbl_team_members` (
  `team_members_id` int(255) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(255) NOT NULL,
  `members_code` varchar(255) NOT NULL,
  `team_members_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `team_members_status` int(1) NOT NULL,
  PRIMARY KEY (`team_members_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Team member table' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_team_members`
--

INSERT INTO `tbl_team_members` (`team_members_id`, `team_id`, `members_code`, `team_members_created_on`, `team_members_status`) VALUES
(3, '11', '638503', '2017-03-16 07:12:37', 1),
(4, '12', '638503', '2017-03-16 07:13:37', 1),
(5, '1', '638503', '2017-03-30 11:47:02', 1),
(6, '1', '638503', '2017-03-30 11:46:58', 1),
(7, '1', '1001', '2017-03-30 11:46:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_price`
--

CREATE TABLE IF NOT EXISTS `tbl_type_price` (
  `type_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_price_model` varchar(255) NOT NULL,
  `type_price_model_no` varchar(255) NOT NULL,
  `ga_diagram` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sapcode` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`type_price_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=432 ;

--
-- Dumping data for table `tbl_type_price`
--

INSERT INTO `tbl_type_price` (`type_price_id`, `type_price_model`, `type_price_model_no`, `ga_diagram`, `type`, `price`, `sapcode`, `description`, `status`) VALUES
(2, '2KD', '2KD002B', '2KD002B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '30155,0,0', '300045', 'COMPRESSED AIRDRYER, 20 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(3, '2KD', '2KD004B', '2KD004B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '37080,0,0', '300047', 'COMPRESSED AIRDRYER, 40 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(4, '2KD', '2KD006B', '2KD006B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '49400,0,0', '300048', 'COMPRESSED AIRDRYER, 60 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(5, '2KD', '2KD008B', '2KD008B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '59565,0,0', '300049', 'COMPRESSED AIRDRYER, 60 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(6, '2KD', '2KD010B', '2KD010B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '71820,0,0', '300050', 'COMPRESSED AIRDRYER, 100 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(7, '2KD', '2KD015B', '2KD015B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '95157,0,0', '300051', 'COMPRESSED AIRDRYER, 150 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(8, '2KD', '2KD020B', '', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '98100,0,0', '300052', 'COMPRESSED AIRDRYER, 150 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(9, '2KD', '2KD025B', '2KD025B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '135000,0,0', '300053', 'COMPRESSED AIRDRYER, 250 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(10, '2KD', '2KD030B', '2KD030B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '145300,0,0', '300054', 'COMPRESSED AIRDRYER, 300 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(11, '2KD', '2KD+040B', '2KD040B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '200200,0,0', '300055', 'COMPRESSED AIRDRYER, 400 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(12, '2KD', '2KD+050B', '2KD050B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '240300,0,0', '300056', 'COMPRESSED AIRDRYER, 500 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(13, '2KD', '2KD+060B', '2KD060B.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '246900,0,0', '300057', 'COMPRESSED AIRDRYER, 600 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(14, '2KD', '2KD+075F', '2KD+075F.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,0,300000', '300064', 'COMPRESSED AIR DRYER 750CFM/WATER COOLED/ R407C/7BAR PRESSURE', '1'),
(15, '2KD', '2KD+100F', '2KD+100F.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,0,400000', '300065', 'COMPRESSED AIR DRYER 1000CFM /WATER COOLED / R407/7BAR PRESSURE', '1'),
(16, '2KD', '2KD+125F', '2KD+125F.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,0,410000', '300066', 'COMPRESSED AIR DRYER 1250CFM,R407C,WATER COOLED', '1'),
(17, '2KD', '2KD+150F', '2KD+150F.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,0,560000', '300067', 'COMPRESSED AIR DRYER 1000CFM /WATER COOLED / R407/7BAR PRESSURE', '1'),
(18, '2KD', '2KD+200F', '2KD+200F.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,0,693000', '300068', 'COMPRESSED AIR DRYER 2000CFM/WATERCOOLED/ R407C/7BAR PRESSURE', '1'),
(19, '2KD', '2KD+250F', '2KD+250F.pdf', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,0,750000', '300069', 'COMPRESSED AIR DRYER TO HANDLE 2500CFM;AT WORKING PRESSURE 8KG/CM2;WATER COOLED WITH R407C', '1'),
(20, 'VAR', 'VAR0252', '', '7bar', '21900', '300240', 'AIR RECEIVER, VERTICAL, 250 LITERS, 7.5 BAR G MAX, IS2002 MOC, IS2825 COC', '1'),
(21, 'CHT NEXTGEN LH', 'CHT050LH', '', 'low temperature water tempe design-10c Air coolded Price,low temperature,water tempe design-10c Water coolded Price ', '24000,24000', '', '', '1'),
(22, 'HLN', 'HLN002A', 'HLN 002 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '43900', '300166', 'AIR DRYER, DESICCANT, HEATLESS, 20 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(23, 'VAR', 'VAR0253', '', '10.5 bar', '22900', '300241', 'AIR RECEIVER, VERTICAL, 250 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(24, 'VAR', 'VAR0254', '', '12.5 bar', '24000', '300242', 'AIR RECEIVER, VERTICAL, 250 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(25, 'VAR', 'VAR0502', '', '7 bar', '32500', '300243', 'AIR RECEIVER, VERTICAL, 500 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(26, 'VAR', 'VAR0503', '', '10.5 bar', '37400', '300244', 'AIR RECEIVER, VERTICAL,500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062MOC,IS2825COC', '1'),
(27, 'VAR', 'VAR0504', '', '12.5 bar', '41200', '300245', 'AIR RECEIVER, VERTICAL, 500 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(28, 'VAR', 'VAR0752', '', '7 bar', '33900', '300246', 'AIR RECEIVER, VERTICAL, 750 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(29, 'VAR', 'VAR0753', '', '10.5 bar', '38600', '300247', 'AIR RECEIVER, VERTICAL,500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062MOC,IS2825COC', '1'),
(30, 'SPD', 'SPD010', 'SPD010.pdf', 'Model Variance Molecular Sieve (65 deg c) Price with filter', '24200', '', '', '1'),
(31, 'VAR', 'VAR0754', '', '12.5 bar', '44400', '300248', 'AIR RECEIVER, VERTICAL, 750 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(32, 'VAR', 'VAR1002', '', '7 bar', '51500', '300249', 'AIR RECEIVER, VERTICAL, 1000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(33, 'VAR', 'VAR1003', '', '10.5 bar', '61900', '300250', 'AIR RECEIVER, VERTICAL, 1000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(34, 'VAR', 'VAR1004', '', '12.5 bar', '75700', '300251', 'AIR RECEIVER, VERTICAL, 1000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(35, 'SPD', 'SPD015', 'SPD015.pdf', 'Model Variance Molecular Sieve', '26000', '', '', '1'),
(36, 'VAR', 'VAR1502', '', '7 bar', '77900', '300252', 'AIR RECEIVER, VERTICAL, 1500 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(37, 'VAR', 'VAR1503', '', '10.5 bar', '93600', '300253', 'AIR RECEIVER, VERTICAL, 1500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(38, 'VAR', 'VAR1504', '', '12.5 bar', '112200', '300254', 'AIR RECEIVER, VERTICAL, 1500 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(39, 'VAR', 'VAR2002', '', '7 bar', '89000', '300255', 'AIR RECEIVER, VERTICAL, 2000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(40, 'CHT NEXTGEN LH', 'CHT075LH', '', 'Low Temperature Water temp design 10c (LH)Air Cooled(A) Low Temperature\r\nWater temp design 10c (LH) Water Cooled(B)\r\n\r\n', '345000', '', '', '1'),
(41, 'VAR', 'VAR2003', '', '10.5 bar', '106500', '300256', 'AIR RECEIVER, VERTICAL, 2000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(42, 'VAR', 'VAR2004', '', '12.5 bar', '128000', '300257', 'AIR RECEIVER, VERTICAL, 2000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(43, 'VAR', 'VAR3002', '', '7 bar', '125700', '300258', 'AIR RECEIVER, VERTICAL, 3000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(44, 'CHT NEXTGEN LH', 'CHT100LH', '', 'Low Temperature\r\nWater temp design 10c (LH)\r\nAir Cooled(A) Low Temperature\r\nWater temp design 10c \r\n(LH) Water Cooled(B)\r\n', '480000,480000', '', '', '1'),
(45, 'VAR', 'VAR3003', '', '10.5 bar', '155000', '300259', 'AIR RECEIVER, VERTICAL, 3000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(46, 'NXG', 'NXG010', 'NXG010.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '87600,0,0', '300087', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 100CFM AT 7-16BAR GAS, R134A, AIR COOLED', '1'),
(47, 'NXG', 'NXG015', 'NXG015.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '111100,0,0', '300088', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 150CFM AT 7-16BAR GAS, R134A, AIR COOLED', '1'),
(48, 'VAR', 'VAR3004', '', '12.5 bar', '185400', '300260', 'AIR RECEIVER, VERTICAL, 3000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(49, 'VAR', 'VAR4002', '', '7 bar', '170900', '300261', 'AIR RECEIVER, VERTICAL, 4000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(50, 'CHT NEXTGEN LH', 'CHT150LH', '', 'Low Temperature\r\nWater temp design 10c (LH)\r\nAir Cooled(A), \r\nLow Temperature\r\nWater temp design 10c (LH) Water Cooled(B)', '600000,600000', '', '', '1'),
(51, 'VAR', 'VAR4003', '', '10.5 bar', '207700', '300262', 'AIR RECEIVER, VERTICAL, 4000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(52, 'VAR', 'VAR4004', '', '12.5 bar', '255600', '300263', 'AIR RECEIVER, VERTICAL, 4000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(53, 'VAR', 'VAR5002', '', '7 bar', '188800', '300264', 'AIR RECEIVER, VERTICAL, 5000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(54, 'VAR', 'VAR5003', '', '10.5 bar', '235900', '300265', 'AIR RECEIVER, VERTICAL, 5000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(55, 'VAR', 'VAR5004', '', '12.5 bar', '264800', '300266', 'AIR RECEIVER, VERTICAL, 5000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(56, 'VAR', 'VAR6002', '', '7 bar', '239900', '300267', 'AIR RECEIVER, VERTICAL, 6000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(57, 'CHT NEXTGEN LH', 'CHT200LH', '', 'Low Temperature\r\nWater temp design 10c (LH)\r\nAir Cooled(A) ,Low Temperature\r\nWater temp design 10c (LH) Water Cooled(B)', '775000,775000', '', '', '1'),
(58, 'VAR', 'VAR6003', '', '10.5 bar', '289700', '300268', 'AIR RECEIVER, VERTICAL, 6000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(59, 'VAR', 'VAR6004', '', '12.5 bar', '344400', '300269', 'AIR RECEIVER, VERTICAL, 6000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(60, 'VAR', 'VAR7502', '', '7 bar', '308200', '300270', 'AIR RECEIVER, VERTICAL, 7500 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(61, 'VAR', 'VAR7503', '', '10.5 bar', '377500', '300271', 'AIR RECEIVER, VERTICAL, 7500 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(62, 'VAR', 'VAR7504', '', '12.5 bar', '447500', '300272', 'AIR RECEIVER, VERTICAL, 7500 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(63, 'VAR', 'VAR10002', '', '7 bar', '448800', '300273', 'AIR RECEIVER, VERTICAL, 10000 LITERS, 7 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(64, 'NXG', 'NXG020', 'NXG020.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '116200,0,0', '300089', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 200CFM AT 7-16BAR GAS, R134A, AIR COOLED', '1'),
(65, 'NXG', 'NXG015', 'NXG015.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '0,150000,0', '300088', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 150CFM AT 7-16BAR GAS, R134A, AIR COOLED', '1'),
(66, 'CHT NEXTGEN LH', 'CHT300LH', '', 'Low Temperature\r\nWater temp design 10c (LH)\r\nAir Cooled(A) ,Low Temperature\r\nWater temp design 10c (LH) Water Cooled(B)', '1150000,1150000', '', '', '1'),
(67, 'VAR', 'VAR10003', '', '10.5 bar', '490000', '300274', 'AIR RECEIVER, VERTICAL, 10000 LITERS, 7.5 TO 10.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(68, 'VAR', 'VAR10004', '', '12.5 bar', '578500', '300275', 'AIR RECEIVER, VERTICAL, 10000 LITERS, 11 TO 12.5 BAR G MAX, IS2062 MOC, IS2825 COC', '1'),
(69, 'NXG', 'NXG030', 'NXG030.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '0,155000,0', '300090', 'NEXT GENERATION REFRIGERATION AIR DRYER, 300 CFM, 16 KG/CM2', '1'),
(70, 'NXG', 'NXG040', 'NXG040.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '0,197750,0', '300091', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE 400CFM AT 7-16BAR GAS, R404A, AIR COOLED', '1'),
(72, 'SPD', 'SPD025', 'SPD025.pdf', 'Model Variance Molecular Sieve (65 deg c)  Price with filter', '48700', '', '', '1'),
(73, 'SPD', 'SPD040', 'SPD040.pdf', 'Model Variance Molecular Sieve (65 deg c)  Price with filter', '52600', '', '', '1'),
(74, 'NXG', 'NXG050', 'NXG050.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '0,235750,0', '300092', 'NEXT GENERATION REFRIGERATION AIR DRYER, 500 CFM, 16 KG/CM2', '1'),
(75, 'NXG', 'NXG060', 'NXG060.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '0,240000,0', '300093', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE600CFM AT 7-16BAR GAS, R404A, AIR COOLED', '1'),
(76, 'NXG', 'NXG075', 'NXG075.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '0,0,265000', '300094', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE750CFM AT 7-16BAR GAS, R407C, AIR COOLED', '1'),
(77, 'NXG', 'NXG100', 'NXG100.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '0,0,340000', '300095', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE1000CFM AT 7-16BAR GAS, R407C, AIR COOLED', '1'),
(78, 'SPD', 'SPD060', 'SPD060.pdf', ' Model Variance Molecular Sieve (65 deg c)  Price with filter', '65000', '', '', '1'),
(79, 'SPD', 'SPD100', 'SPD100.pdf', ' Model Variance Molecular Sieve (65 deg c)  Price with filter', '75000', '', '', '1'),
(80, 'NXG', 'NXG125', 'NXG125.pdf', 'Air Cooled R134a,Air Cooled R404a,Air Cooled R407c', '0,0,37000', '300096', 'NEXTGEN COMPRESSED AIR DRYER TO HANDLE1250CFM AT 7-16BAR GAS, R407C, AIR COOLED', '1'),
(81, 'SPD', 'SPD150', 'SPD150.pdf', ' Model Variance Molecular Sieve (65 deg c)  Price with filter', '163800', '', '', '1'),
(82, 'SPD', 'SPD250', 'SPD250.pdf', ' Model Variance Molecular Sieve (65 deg c)  Price with filter', '216500', '', '', '1'),
(83, 'CHT NEXTGEN HH', 'CHT100HH', '', 'High Temperature\nWater Tempe design 15c (HH) Air Cooled(A),\nHigh Temperature\nWater Tempe design 15c (HH) Water Cooled(B)', '450000,450000', '', '', '1'),
(84, 'SPD', 'SPD350', 'SPD350.pdf', ' Model Variance Molecular Sieve (65 deg c)  Price with filter', '271500', '', '', '1'),
(85, 'SPD', 'SPD500', 'SPD500.pdf', ' Model Variance Molecular Sieve (65 deg c)  Price with filter', '324100', '', '', '1'),
(86, 'GCT+ ECO', 'GCT+010', 'GCT+010.pdf', 'Low Temperature', '16600', '300118', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 10 TR.(DISMANTLE)', '1'),
(87, 'GCT+ ECO', 'GCT+015', 'GCT+015.pdf', 'Low Temperature', '20200', '300119', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 15 TR.(DISMANTLE)', '1'),
(88, 'SPD', 'SPD700', 'SPD700.pdf', ' Model Variance Molecular Sieve (65 deg c)  Price with filter', '378000', '', '', '1'),
(89, 'SPD', 'SPD900', 'SPD900.pdf', ' Model Variance Molecular Sieve (65 deg c)  Price with filter', '435300', '', '', '1'),
(92, 'GCT+ ECO', 'GCT+020', 'GCT+020.pdf', 'Low Temperature', '22000', '300120', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 20TR.(DISMANTLE)', '1'),
(93, 'GCT+ ECO', 'GCT+030', 'GCT+030.pdf', 'Low Temperature', '32000', '300121', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 30 TR.(DISMANTLE)', '1'),
(94, 'GAS', 'GAS0451', '', '1 hp motor', '115400', '300218', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '1'),
(95, 'GAS', 'GAS0452', '', '2 hp motor', '123700', '300219', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '1'),
(96, 'CHT NEXTGEN HH', 'CHT100HH', '', 'High Temperature\nWater Tempe design 15c (HH) Air Cooled(A),\nHigh Temperature\nWater Tempe design 15c (HH) Water Cooled(B)', '450000,450000', '', '', '1'),
(97, 'GAS', 'GAS0581', '', '1 hp motor', '166900', '300220', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '1'),
(98, 'GAS', 'GAS0582', '', '2 hp motor', '182400', '300221', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '1'),
(99, 'GCT+ ECO', 'GCT+040', 'GCT+040.pdf', 'Low Temperature', '35000', '300122', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 40 TR.(DISMANTLE)', '1'),
(100, 'GCT+ ECO', 'GCT+050', 'GCT+050.pdf', 'Low Temperature', '48000', '300123', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 50 TR.(DISMANTLE)', '1'),
(101, 'GCT+ ECO', 'GCT+060', 'GCT+060.pdf', 'Low Temperature', '52000', '300124', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 60 TR.(DISMANTLE)', '1'),
(102, 'GCT+ ECO', 'GCT+080', 'GCT+080.pdf', 'Low Temperature', '65000', '300125', 'ENERGY EFFICIENT EVAPORATIVE COOLING TOWER, CAPACITY- 80 TR.(DISMANTLE)', '1'),
(103, 'GAS', 'GAS0901', '', '1 hp motor', '221500', '300222', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '1'),
(104, 'GAS', 'GAS0902', '', '2 hp motor', '236900', '300223', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '1'),
(105, 'GCT+ ECO', 'GCT100H', 'GCT100H.pdf', 'High Temperature', '109620', '', '', '1'),
(106, 'GAS', 'GAS1451', '', '1 hp motor', '340000', '300224', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '1'),
(107, 'GAS', 'GAS1452', '', '2 hp motor', '370800', '300225', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '1'),
(108, 'GCT+ ECO', 'GCT125H', 'GCT125H.pdf', 'High Temperature', '99010', '300129', 'COOLING TOWER, EVAPORATIVE, ROUND, 125 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', '1'),
(109, 'CHT NEXTGEN HH', 'CHT150HH', '', 'High Temperature,\r\nWater Tempe design 15c (HH) Air Cooled(A),\r\nHigh Temperature,\r\nWater Tempe design 15c (HH) ,Water Cooled(B)\r\n', '570000,570000', '', '', '1'),
(110, 'CHT NEXTGEN HH', 'CHT200HH', '', 'High Temperature,\r\nWater Tempe design 15c (HH) Air Cooled(A),\r\nHigh Temperature,\r\nWater Tempe design 15c (HH) ,Water Cooled(B)\r\n', '740000,740000', '', '', '1'),
(111, 'GAS1601', 'GAS1601', '', '1 hp motor', '406900', '300226', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '1'),
(112, 'GAS1602', 'GAS1602', '', '2 hp motor', '417200', '300227', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '1'),
(113, 'GAS', 'GAS1751', '', '1 hp motor', '448100', '300229', 'COOLING TOWER, DRY, AQUA SAVER, 1 HP MOTOR', '1'),
(114, 'GAS', 'GAS1752', '', '2 hp motor', '506800', '300230', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '1'),
(115, 'GCT+ ECO', 'GCT150H', 'GCT150H.pdf', 'High Temperature', '103860', '300129', 'COOLING TOWER, EVAPORATIVE, ROUND, 125 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', '1'),
(116, 'GCT+ ECO', 'GCT200H', 'GCT200H.pdf', 'High Temperature', '151450', '300133', 'COOLING TOWER, EVAPORATIVE, ROUND, 200 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', '1'),
(117, 'GCT+ ECO', 'GCT250H', 'GCT250H.pdf', 'High Temperature', '183070', '300135', 'COOLING TOWER, EVAPORATIVE, ROUND, 250 TR, HIGH TEMP FILLS, UP TO 85 DEG C INLET WATER TEMP', '1'),
(118, 'GCT+ ECO', 'GCT300H', 'GCT300H.pdf', 'High Temperature', '279790', '300138', 'COOLING TOWER, EVAPORATIVE, ROUND, 300 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', '1'),
(119, 'GAS', 'GAS2252', '', '2 hp motor', '460500', '300231', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '1'),
(120, 'GAS', 'GAS2253', '', '3 hp motor', '460500', '300232', 'COOLING TOWER, DRY, AQUA SAVER, 3 HP MOTOR', '1'),
(123, 'GAS', 'GAS2752', '', '2 hp motor', '602600', '300233', 'COOLING TOWER, DRY, AQUA SAVER, 2 HP MOTOR', '1'),
(124, 'GAS', 'GAS2753', '', '3 hp motor', '613900', '300234', 'COOLING TOWER, DRY, AQUA SAVER, 3 HP MOTOR', '1'),
(125, 'GAS', 'GAS3005', '', '5 hp motor', '762200', '300235', 'GEM QAUASAVER 300 WITH 5 HP MOTOR', '1'),
(126, 'GAS', 'GAS3505', '', '5 hp motor', '1004300', '300236', 'GAS AQUA SAVER WITH 5 HP MOTOR', '1'),
(127, 'CHT NEXTGEN HH', 'CHT300HH', '', 'High Temperature,\r\nWater Tempe design 15c (HH)\r\nAir Cooled(A) ,High Temperature,\r\nWater Tempe design 15c (HH) Water Cooled(B)', '1100000,1100000', '', '', '1'),
(128, 'RAD', 'RAD300F', '', 'Water cooled Refrigerant R407c', '1400000', '300097', 'COMPRESSED AIRDRYER 1000CFM/WATERCOOLED/407C/PRESSUR 7BAR', '1'),
(129, 'RAD', 'RAD400F', '', 'Water cooled Refrigerant R407c', '1850000', '300098', 'COMPRESSED AIR DRYER 4000 CFM WITH WATER COOLED; R407 C ;  WORKING PRESSURE 7-12.5KG/CM.', '1'),
(130, 'GAS', 'GAS1601', '', '1 hp motor', '406900', '', '', '1'),
(131, 'GAS', 'GAS1602', '', '2 hp motor', '417200', '', '', '1'),
(132, 'RAD', 'RAD500F', '', 'Water cooled Refrigerant R407c', '2000000', '300099', 'COMPRESSED AIR DRYER 5000 CFM WITH WATER COOLED; R407 C;  WORKING PRESSURE 8KG/CM.', '1'),
(133, 'RAD', 'RAD600F', '', 'Water cooled Refrigerant R407c', '2700000', '300100', 'COMPRESSED AIR DRYER, 5500 CFM, 12 KG/CM2 PRESSURE, WATER COOLED, R407 C', '1'),
(134, 'RAD', 'RAD800F', '', 'Water cooled Refrigerant R407c', '3000000', '300101', 'COMPRESSED AIR DRYER, 8000 CFM, 12.5 KG/CM2 PRESSURE, WATER COOLED, R407 C', '1'),
(135, 'RAD', 'RAD1000F', '', 'Water cooled Refrigerant R407c', '3200000', '300102', 'COMPRESSED AIR DRYER, 10000 CFM, 12.5 KG/CM2 PRESSURE, WATER COOLED, R407 C', '1'),
(136, 'HLN', 'HLN002C', 'HLN 002 C.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(C)', '53600', '300167', 'AIR DRYER, DESICCANT, HEATLESS, 20 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(137, 'HLN', 'HLN003A', 'HLN 003 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '46300', '300168', 'AIR DRYER, DESICCANT, HEATLESS, 35 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(138, 'GZ', 'GZ LD', 'GZ LD.pdf', 'Model Variance', '2100', '300415', 'AUTO DRAIN VALVE, UNIVERSAL ELECTRONIC TIMER OPERATED, LOW DISCHARGE, UPTO 16 BAR G', '1'),
(139, 'GZ', 'GZ HD', 'GZ HD.pdf', 'Model Variance', '2300', '300414', 'AUTO DRAIN VALVE, UNIVERSAL ELECTRONIC TIMER OPERATED, HIGH DISCHARGE, UPTO 16 BAR G', '1'),
(140, 'HLN', 'HLN006A', 'HLN 006 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '63300', '300170', 'AIR DRYER, DESICCANT, HEATLESS, 60 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(141, 'HLN', 'HLN007A', 'HLN 007 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '70600', '300172', 'AIR DRYER, DESICCANT, HEATLESS, 75 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(143, 'GZ', 'GFV', 'GFV.pdf', 'Model Variance', '3500', '300417', 'AUTO DRAIN VALVE, ZERO AIR LOSS, FLOAT TYPE, MANUAL DISCHARGE, UPTO 20 BAR G', '1'),
(144, 'GZ', 'GZ LD 7', '', 'Model Variance', '4700', '300416', 'GZ SERIES LOW DISCHARGE AUTO DRAIN VALVE FOR HIGH PRESSURE (42 BAR)APPLICATION; SUPPLY VOLTAGE:220V,1PH,50HZ', '1'),
(145, 'HLN', 'HLN010A', 'HLN 010 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '81500', '300174', 'AIR DRYER, DESICCANT, HEATLESS, 100 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(146, 'HLN', 'HLN012A', 'HLN 012 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '108300', '300176', 'AIR DRYER, DESICCANT, HEATLESS, 120 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(147, 'GFV', 'GZ LD', '', 'Model Variance', '2100', '', '', '1'),
(148, 'GFV', 'GZ HD', '', 'Model Variance', '2300', '', '', '1'),
(149, 'GFV', 'GFV', '', 'Model Variance', '3500', '', '', '1'),
(150, 'GFV', 'GZ LD 7', '', 'Model Variance', '4700', '', '', '1'),
(151, 'HLN', 'HLN015A', 'HLN 015 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '115600', '300178', 'AIR DRYER, DESICCANT, HEATLESS, 150 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(152, 'HLN', 'HLN017A', 'HLN 017 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '120500', '300180', 'AIR DRYER, DESICCANT, HEATLESS, 170 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(153, 'HLN', 'HLN020A', 'HLN 020 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)Construction(C)', '127700', '300182', 'AIR DRYER, DESICCANT, HEATLESS, 200 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(154, 'HLN', 'HLN025A', 'HLN 025 A.pdf', 'Desiccant Activated Alumina(50c)IS 2825 code Construction(A)', '139900', '300184', 'AIR DRYER, DESICCANT, HEATLESS, 250 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(155, 'MST', 'MST 002', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '3600,4600', '', '', '1'),
(156, 'MST', 'MST 003', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '3600,4600', '', '', '1'),
(157, 'MST', 'MST 005', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '5600,7700', '', '', '1'),
(158, 'MST', 'MST 007', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '5600,7700', '', '', '1'),
(159, 'MST', 'MST 010', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '5600,7700', '', '', '1'),
(160, 'MST', 'MST 015', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '7200,9200', '', '', '1'),
(161, 'MST', 'MST 020', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '7200,9200', '', '', '1'),
(162, 'MST', 'MST 025', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '8700,13300', '', '', '1'),
(163, 'MST', 'MST 030', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '8700,13300', '', '', '1'),
(164, 'MST', 'MST 050', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '16400,21400', '', '', '1'),
(165, 'SCB', 'SCB100H', '', 'High Temperature', '120150', '300140', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 100 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(167, 'MST', 'MST 075', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '17400,24500', '', '', '1'),
(168, 'MST', 'MST 100', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '22400,33600', '', '', '1'),
(169, 'MST', 'MST 150', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '29500,42800', '', '', '1'),
(170, 'MST', 'MST 200', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '34600,51000', '', '', '1'),
(171, 'SCB', 'SCB200H', '', 'High Temperature', '183650', '300144', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 200 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(172, 'SCB', 'SCB250H', '', 'High Temperature', '192520', '300146', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 250 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(173, 'SCB', 'SCB300H', '', 'High Temperature', '274490', '300148', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 300 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(175, 'MST', 'MST 007', 'mst.pdf', 'Model Variance Baffle type,Model Variance Demister Type', '5600,7700', '', '', '1'),
(176, 'SCT', 'SCT100H', '\nSCT 100H.pdf', 'High Temperature', '104960', '300150', 'COOLING TOWER, EVAPORATIVE, SQUARE, 100 TR, HIGH TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(177, 'SCT', 'SCT150H', 'SCT 150H.pdf', 'High Temperature', '119030', '300152', 'COOLING TOWER, EVAPORATIVE, SQUARE, 150 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(178, 'SCT', 'SCT200H', 'SCT 200H.pdf', 'High Temperature', '162720', '300154', 'COOLING TOWER, EVAPORATIVE, SQUARE, 200 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(179, 'SCT', 'SCT250H', 'SCT 250H.pdf', 'High Temperature', '183070', '300156', 'COOLING TOWER, EVAPORATIVE, SQUARE, 250 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(180, 'SCT', 'SCT300H', 'SCT 300H.pdf', 'High Temperature', '235120', '300158', 'COOLING TOWER, EVAPORATIVE, SQUARE, 300 TR, HIGH TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(181, 'DCT', 'DCT040', '', 'Model variance ', '360500', '300204', 'COOLING TOWER, DRY', '1'),
(182, 'DCT', 'DCT050', '', 'Model variance', '449100', '300205', 'COOLING TOWER, DRY', '1'),
(183, 'DCT', 'DCT060', '', 'Model variance ', '474900', '300206', 'COOLING TOWER, DRY', '1'),
(184, 'DCT', 'DCT080', '', 'Model variance ', '633500', '300207', 'COOLING TOWER, DRY', '1'),
(185, 'DCT', 'DCT100', '', 'Model variance', '792100', '300208', 'COOLING TOWER, DRY', '1'),
(186, 'DCT', 'DCT120', '', 'Model variance', '906400', '300209', 'COOLING TOWER, DRY', '1'),
(187, 'DCT', 'DCT140', '', 'Model variance ', '918800', '300210', 'COOLING TOWER, DRY', '1'),
(188, 'DCT', 'DCT160', '', 'Model variance ', '1049600', '300211', 'COOLING TOWER, DRY', '1'),
(189, 'DCT', 'DCT180', '', 'Model variance', '1181500', '300212', 'COOLING TOWER, DRY', '1'),
(190, 'DCT', 'DCT200', '', 'Model variance', '1277600', '300213', 'COOLING TOWER, DRY', '1'),
(191, 'DCT', 'DCT220', '', 'Model variance', '1444100', '300214', 'COOLING TOWER, DRY', '1'),
(192, 'DCT', 'DCT240', '', 'Model variance', '1573900', '300215', 'COOLING TOWER, DRY', '1'),
(193, 'DCT', 'DCT280', '', 'Model variance ', '1836500', '300216', 'COOLING TOWER, DRY', '1'),
(194, 'DCT', 'DCT320', '', 'Model variance ', '2098200', '300217', 'COOLING TOWER, DRY', '1'),
(195, 'ECT', 'ECT010B', '', 'Coil 2-8 Rows', '115000', '300159', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 10 TR, COIL 2, 8 ROWS', '1'),
(196, 'ECT', 'ECT020B', '', 'Coil 2-8 Rows', '210300', '300160', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 20 TR, COIL 2, 8 ROWS', '1'),
(197, 'ECT', 'ECT040B', '', 'Coil 2-8 Rows', '356000', '300161', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 40 TR, COIL 2, 8 ROWS', '1'),
(198, 'ECT', 'ECT060B', '', 'Coil 2-8 Rows', '380300', '300162', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 60 TR, COIL 2, 8 ROWS', '1'),
(199, 'ECT', 'ECT100B', '', 'Coil 2-8 Rows', '555600', '300163', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 100 TR, COIL 2, 8 ROWS', '1'),
(200, 'ECT', 'ECT200B', '', 'Coil 2-8 Rows', '811300', '300164', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 200 TR, COIL 2, 8 ROWS', '1'),
(201, 'ECT', 'ECT300B', '', 'Coil 2-8 Rows', '1225500', '300165', 'COOLING TOWER, EVAPORATIVE, COIL TYPE, 300 TR, COIL 2, 8 ROWS', '1'),
(202, '2KW', '2KW020B', '', 'Air Cooled  R134 (B)\r\n', '37500', '300085', 'COMPRESSED AIR DRYER, WALLMOUNTED, 20 CFM, 7 TO 16 BAR G, AIR COOLED, R134A ', '1'),
(203, '2KW', '2KW040B', '', 'Air Cooled  R134 (B)\r\n', '48800', '300086', 'COMPRESSED AIR DRYER, WALLMOUNTED, 40 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(204, 'CHT MINI', 'CHT 0101/P', '', ' 1 to 3 Bar Air cooled R22,1 to 3 Bar air cooled R22/PHE', '89000,95000', '300103', 'CHILLER, MINI, INDUSTRIAL, 1 TR, AIR COOLED, 1 TO 3 BAR G', '1'),
(205, 'CHT MINI', 'CHT 0201/P', '', ' 1 to 3 Bar Air cooled R22,1 to 3 Bar air cooled R22/PHE', '120000,125500', '300104', 'CHILLER, MINI, INDUSTRIAL, 2 TR, AIR COOLED, 1 TO 3 BAR G', '1'),
(206, 'CHT MINI', 'CHT 0301/P', '', ' 1 to 3 Bar Air cooled R22,1 to 3 Bar air cooled R22/PHE', '140000,150000', '300105', 'CHILLER, MINI, INDUSTRIAL, 3 TR, AIR COOLED, 1 TO 3 BAR G', '1'),
(207, 'CHT MINI', 'CHT 0501/P', '', ' 1 to 3 Bar Air cooled R22,1 to 3 Bar air cooled R22/PHE', '220000,225500', '300106', 'CHILLER, MINI, INDUSTRIAL, 5 TR, AIR COOLED, 1 TO 3 BAR G', '1'),
(208, 'CHT MINI', 'CHT 0751/P', '', '1 to 3 Bar Air cooled R22,1 to 3 Bar air cooled R22/PHE', '320000,398000', '300107', 'CHILLER, MINI, INDUSTRIAL, 7.5 TR, AIR COOLED, 1 TO 3 BAR G', '1'),
(209, 'WAH', 'WAH005B', '', 'With Moisture Separator', '11500', '300276', 'AIR COOLED, WATER COOLED, HORIZONTAL, 50 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(210, 'WAH', 'WAH010B', '', 'With Moisture Separator', '17000', '300277', 'AIR COOLED, WATER COOLED, HORIZONTAL, 100 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(211, 'WAH', 'WAH015B', '', 'With Moisture Separator', '19800\r\n\r\n', '300278', 'AIR COOLED, WATER COOLED, HORIZONTAL, 150 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(212, 'WAH', 'WAH020B', '', 'With Moisture Separator', '22500', '300279', 'AIR COOLED, WATER COOLED, HORIZONTAL, 200 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(213, 'WAH', 'WAH025B\n', '', 'With Moisture Separator', '23300', '300280', 'AIR COOLED, WATER COOLED, HORIZONTAL, 250 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(214, 'WAH', 'WAH030B', '', 'With Moisture Separator', '27500', '300281', 'AIR COOLED, WATER COOLED, HORIZONTAL, 300 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(215, 'WAH', 'WAH040B', '', 'With Moisture Separator', '32300', '300282', 'AIR COOLED, WATER COOLED, HORIZONTAL, 400 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(216, 'WAH', 'WAH050B', '', 'With Moisture Separator', '39300', '300283', 'AIR COOLED, WATER COOLED, HORIZONTAL, 500 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(217, 'WAH', 'WAH075B', '', 'With Moisture Separator', '49500', '300284', 'AIR COOLED, WATER COOLED, HORIZONTAL, 750 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(218, 'WAH', 'WAH100B', '', 'With Moisture Separator', '63200', '300285', 'AIR COOLED, WATER COOLED, HORIZONTAL, 1000 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(219, 'WAH', 'WAH125B', '', 'With Moisture Separator', '79800', '300286', 'AIR COOLED, WATER COOLED, HORIZONTAL, 1250 CFM, 7 TO 12.5 BAR G, WITH MOISTURE SEPARATOR', '1'),
(220, 'WAH', 'WAH150B', '', 'With Moisture Separator', '126300', '300287', '', '1'),
(221, 'HP Filter ', 'GPA005 7', '', 'General purpose filters (GP)', '7800', '', '', '1'),
(222, 'HP Filter ', 'GPB010 7', '', 'General purpose filters (GP)', '14100', '', '', '1'),
(223, 'VXS', 'VXS 010', '', 'Vartex separator Auto Drain Value', '4600', '300418', 'MOISTURE SEPARATOR, VORTEX, 90 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '1'),
(224, 'VXS', 'VXS 012', '', 'Vartex separator Auto Drain Value', '4600', '300419', 'MOISTURE SEPARATOR, VORTEX, 125 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '1'),
(225, 'HP Filter ', 'GPB020 7', '', 'General purpose filters (GP)', '21900', '', '', '1'),
(226, 'HP Filter ', 'GPB030 7', '', 'General purpose filters (GP)', '26000', '', '', '1'),
(227, 'HP Filter ', 'GPB050 7', '', 'General purpose filters (GP)', '34900', '', '', '1'),
(228, 'HP Filter ', 'GPB075 7', '', 'General purpose filters (GP)', '49900', '', '', '1'),
(229, 'HP Filter ', 'GPB100 7', '', 'General purpose filters (GP)', '62400', '', '', '1'),
(230, 'vxs', 'VXS 015', '', 'Vartex separator Auto Drain Value', '5200', '300420', 'MOISTURE SEPARATOR, VORTEX, 200 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '1'),
(231, 'vxs', 'VXS 025', '', 'Vartex separator Auto Drain Value', '7200', '300421', 'MOISTURE SEPARATOR, VORTEX, 350 CFM, 7 TO 12.5 BAR G WITH AUTO DRAIN VALVE', '1'),
(232, 'ACC', 'ACC003A', 'ACC003.pdf', 'Without Vortex Separator Price', '8700', '300424', 'AIR COOLER, AIR COOLED, 35 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(233, 'ACC', 'ACC005A', 'ACC005.pdf', 'Without Vortex Separator Price', '14100', '300425', 'AIR COOLER, AIR COOLED, 50 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(234, 'ACC', 'ACC010A', 'ACC010.pdf', 'Without Vortex Separator Price', '18200', '300426', 'AIR COOLER, AIR COOLED, 100 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(235, 'ACC', 'ACC015A', '', 'Without Vortex Separator Price', '20000', '300427', 'AIR COOLER, AIR COOLED, 150 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(236, 'ACC', 'ACC020A', 'ACC020.pdf', 'Without Vortex Separator Price', '20800', '300428', 'AIR COOLER, AIR COOLED, 200 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(237, 'GZF CATRIDGES', 'GZF005ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '4200', '300335', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 35 CFM, 16 BAR G', '1'),
(238, 'ACC', 'ACC025A', '', 'Without Vortex Separator Price', '28600', '300429', 'AIR COOLER, AIR COOLED, 250 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(239, 'ACC', 'ACC030A', 'ACC 030.pdf', 'Without Vortex Separator Price', '34400', '300430', 'AIR COOLER, AIR COOLED, 300 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(240, 'ACC', 'ACC040A', 'ACC 040.pdf', 'Without Vortex Separator Price', '37300', '300431', 'AIR COOLER, AIR COOLED, 400 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(241, 'ACC', 'ACC060A', 'ACC 060.pdf', 'Without Vortex Separator Price', '49400', '300432', 'AIR COOLER, AIR COOLED, 600 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(242, 'ACC', 'ACC075A', 'ACC 075.pdf', 'Without Vortex Separator Price', '65900', '300433', 'AIR COOLER, AIR COOLED, 750 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(243, 'ACC', 'ACC100A', 'ACC 100.pdf', 'Without Vortex Separator Price', '85800', '300434', 'AIR COOLER, AIR COOLED, 1000 CFM, 7 TO 12.5 BAR G, WITHOUT VORTEX SEPARATOR', '1'),
(244, 'GZF CATRIDGES', 'GZF007ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '4700', '300339', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 50 CFM, 16 BAR G', '1'),
(245, 'GZF CATRIDGES', 'GZF010ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)\n\n', '5900', '300343', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 75 CFM, 16 BAR G', '1'),
(246, '2KD7', '2KD7004B', '2KD7004B.pdf', 'Air Cooled  R134a (B)', '51400', '300071', 'COMPRESSED AIR DRYER, 40 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(247, '2KD7', '2KD7006B', '2KD7006B.pdf', 'Air Cooled  R134a (B)', '69000', '300072', 'COMPRESSED AIR DRYER, 60 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(248, '2KD7', '2KD7008B', '2KD7008B.pdf', 'Air Cooled  R134a (B)', '90200', '300073', 'COMPRESSED AIR DRYER, 80 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(249, '2KD7', '2KD7010B', '', 'Air Cooled  R134a (B)', '102100', '300074', 'COMPRESSED AIRDRYER, 100 CFM, 7 TO 16 BAR G, AIR COOLED, R134A', '1'),
(250, 'GZF CATRIDGES', 'GZF018ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '6800', '300347', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 125 CFM, 16 BAR G', '1'),
(251, '2KD7', '2KD7015B', '2KD7015B.pdf', 'Air Cooled  R134a (B)', '108700', '300075', 'COMPRESSED AIR DRYER, 150 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(252, '2KD7', '2KD7020B', '', 'Air Cooled  R134a (B)', '135900', '300076', 'COMPRESSED AIR DRYER, 200 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(253, '2KD7', '2KD7025B', '2KD7025B.pdf', 'Air Cooled  R134a (B)', '163300', '300077', 'COMPRESSED AIR DRYER, 250 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(254, '2KD7', '2KD7030B', '2KD7030B.pdf', 'Air Cooled  R134a (B)', '170000', '300078', 'COMPRESSED AIR DRYER, 300 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(255, 'GZF CATRIDGES', 'GZF030ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '11400', '300351', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 200 CFM, 16 BAR G', '1'),
(256, '2KD7\r\n', '2KD7040B', '', 'Air Cooled  R134a (B)', '264200', '300079', 'COMPRESSED AIR DRYER, 400 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(257, '2KD7\r\n', '2KD7050B\r\n', '2KD7050B.pdf', 'Air Cooled  R134a (B)', '301600', '300080', 'COMPRESSED AIR DRYER, 500 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(258, '2KD7', '2KD7060B', '2KD7060B.pdf', 'Air Cooled  R134a (B)', '342000', '300081', 'COMPRESSED AIR DRYER, 600 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(259, '2KD7', '2KD7075B', '2KD7075B.pdf', 'Air Cooled  R134a (B)', '390000', '300082', 'COMPRESSED AIR DRYER, 750 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(260, '2KD7', '2KD7100B', '2KD7100B.pdf', 'Air Cooled  R134a (B)', '470000', '300083', 'COMPRESSED AIR DRYER, 1000 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(261, 'GZF CATRIDGES', 'GZF047ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '13800', '300355', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 310 CFM, 16 BAR G', '1'),
(262, 'GZF CATRIDGES', 'GZF070ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '15100', '300359', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 450 CFM, 16 BAR G', '1'),
(263, 'GZF CATRIDGES', 'GZF094ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '22600', '300363', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 600 CFM, 16 BAR G', '1'),
(264, 'HP FILTER ELEMENT', '005 7	', '', 'General purpose filter elements (GPE),Micro oil removing filter elements (ZPE),Sub Micro oil removing filter elements (ZOE),Activated carbon filter elements (ZCE)', '3400,4200,4500,4700', '', '', '1'),
(265, 'HP FILTER ELEMENT', '010 7	', '', 'General purpose filter elements (GPE),Micro oil removing filter elements (ZPE),Sub Micro oil removing filter elements (ZOE),Activated carbon filter elements (ZCE)', '5200,6000,6300,6800', '', '', '1'),
(266, 'AT', 'AT050', 'AT0503.pdf', 'Model Variance 7.5 -10.5 bar,Model Variance Accessories', '16200,3000', '300444', 'AIR TANK TO HANDLE 500 LTRS AT 10.5KG/SQ.CM WORKING PRESSURE', '1'),
(267, 'AT', 'AT100', 'AT1003.pdf', 'Model Variance 7.5 -10.5 bar,Model Variance Accessories', '28980,3000', '300445', 'AIR TANK TO HANDLE 500 LTRS AT 10.5KG/SQ.CM WORKING PRESSURE', '1'),
(268, 'AT', 'AT200', 'AT2003.pdf', 'Model Variance 7.5 -10.5 bar,Model Variance Accessories', '55800,3000', '300446', 'AIR TANK TO HANDLE 2000 LTRS AT 10.5KG/SQ.CM WORKING PRESSURE', '1'),
(269, 'GZF CATRIDGES', 'GZF150ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '30200', '300367', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 900 CFM, 16 BAR G', '1'),
(270, '2KD7', '2KD7040B', '', 'Air Cooled  R134a (B)', '264200', '300079', 'COMPRESSED AIR DRYER, 400 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(271, '2KD7', '2KD7050B', '', 'Air Cooled  R134a (B)', '301600', '300080', 'COMPRESSED AIR DRYER, 500 CFM, 40 TO 42 BAR G, AIR COOLED, R134A', '1'),
(272, 'HP FILTER ELEMENT\r\n', '020 7	', '', 'General purpose filter elements (GPE),Micro oil removing filter elements (ZPE),Sub Micro oil removing filter elements (ZOE),Activated carbon filter elements (ZCE)\r\n', '10600,11000,11100,11400', '', '', '1'),
(273, 'HP FILTER ELEMENT\r\n', '030 7	', '', 'General purpose filter elements (GPE),Micro oil removing filter elements (ZPE),Sub Micro oil removing filter elements (ZOE),Activated carbon filter elements (ZCE)\r\n', '12300,13200,13500,13800', '', '', '1'),
(274, 'HP FILTER ELEMENT\r\n', '050 7	', '', 'General purpose filter elements (GPE),Micro oil removing filter elements (ZPE),Sub Micro oil removing filter elements (ZOE),Activated carbon filter elements (ZCE)\r\n', '14100,14500,14800,15100', '', '', '1'),
(275, 'HP FILTER ELEMENT\r\n', '075 7	', '', 'General purpose filter elements (GPE),Micro oil removing filter elements (ZPE),Sub Micro oil removing filter elements (ZOE),Activated carbon filter elements (ZCE)\r\n', '21600,22100,22400,22600', '', '', '1'),
(276, 'GZF CATRIDGES', 'GZF175ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '45000	', '300371', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 1200 CFM, 16 BAR G', '1'),
(277, 'HP FILTER ELEMENT\r\n', '100 7	', '', 'General purpose filter elements (GPE),Micro oil removing filter elements (ZPE),Sub Micro oil removing filter elements (ZOE),Activated carbon filter elements (ZCE)', '28600,29300,29700,30200', '', '', '1'),
(278, 'GZF CATRIDGES', 'GZF240ZCE', 'GZFCATRIDGES.pdf', 'Model Variance Activated Carbon filter Cartridge (ZCE)', '70900', '300375', 'ELEMENT AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 1700 CFM, 16 BAR G', '1'),
(283, 'HLD', 'HLD030A', 'HLD030A.pdf', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '182200,256200,236400,308100', '300186', 'AIR DRYER, DESICCANT, HEATLESS, 300 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(284, 'HLD', 'HLD040A', 'HLD040A.pdf', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '220000,285800,264000,342900', '300188', 'AIR DRYER, DESICCANT, HEATLESS, 400 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(285, 'HLD', 'HLD050A', 'HLD050A.pdf', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '264000,343000,317000,412000', '300190', 'AIR DRYER, DESICCANT, HEATLESS, 500 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(286, 'HLD', 'HLD060A', 'HLD060A.pdf', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '330000,428600,396400,514400', '300192', 'AIR DRYER, DESICCANT, HEATLESS, 600 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(287, 'HLD', 'HLD075A', 'HLD075A', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '386000,500300,461400,600100', '300194', 'AIR DRYER, DESICCANT, HEATLESS, 750 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(288, 'HLD', 'HLD100A', 'HLD100A.pdf', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '471800,631100,566300,736700', '300196', 'AIR DRYER, DESICCANT, HEATLESS, 1000 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(289, 'HLD', 'HLD125A', 'HLD125A.pdf', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '543000,704000,649400,845800', '300198', 'AIR DRYER, DESICCANT, HEATLESS, 1250 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(290, 'HLD', 'HLD150A', 'HLD150A.pdf', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '608400,786000,726300,944500', '300200', 'AIR DRYER, DESICCANT, HEATLESS, 1500 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(291, 'HLD', 'HLD200A', 'HLD200A.pdf', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '705500,919600,848400,1106100', '300202', 'AIR DRYER, DESICCANT, HEATLESS, 2000 CFM, 7 TO 12.5 BAR G, ACTIVATED ALUMINA, IS 2825', '1'),
(292, 'GZF', 'GZF005GP', '', 'General purpose filter', '5200', '300288', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 35 CFM, 16 BAR G', '1'),
(293, 'GZF', 'GZF005ZP', '', 'Micro oil removing filter', '5500', '300289', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', '1'),
(294, 'GZF', 'GZF005ZO', '', 'Sub micro oil removing filter', '5600', '300295', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', '1'),
(295, 'GZF', 'GZF005ZC', '', 'Activated carbon filter', '6000', '300291', 'AIR FILTER, 0.005 MG/M³, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 35 CFM, 16 BAR G', '1'),
(296, 'GZF', 'GZF007GP', '', 'General purpose filter', '5700', '300292', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 50 CFM, 16 BAR G', '1'),
(297, 'GZF', 'GZF007ZP', '', 'Micro oil removing filter (ZP)', '5900', '300293', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', '1'),
(298, 'GZF', 'GZF007ZO', '', 'Sub micro oil removing filter', '6000', '300294', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', '1'),
(299, 'GZF', 'GZF007ZC', '', 'Activated carbon filter', '6400', '300295', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 50 CFM, 16 BAR G', '1'),
(300, 'GZF', 'GZF010GP', '', 'General purpose filter', '6500', '300296', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 75 CFM, 16 BAR G', '1'),
(301, 'GZF', 'GZF010ZP', '', 'Micro oil removing filter', '6800', '300297', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 75 CFM, 16 BAR G', '1'),
(302, 'GZF', 'GZF010ZO', '', 'Sub micro oil removing filter', '6900', '300298', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 75 CFM, 16 BAR G', '1'),
(303, 'GZF', 'GZF010ZC', '', 'Activated carbon filter', '7500', '300299', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 75 CFM, 16 BAR G', '1'),
(304, 'GZF', 'GZF018GP', '', 'General purpose filter', '8100', '300300', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 125 CFM, 16 BAR G', '1'),
(305, 'GZF', 'GZF018ZP', '', 'Micro oil removing filter', '8800', '300301', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 125 CFM, 16 BAR G', '1'),
(306, 'GZF', 'GZF018ZO', '', 'Sub micro oil removing filter', '8900', '300302', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 125 CFM, 16 BAR G', '1'),
(307, 'GZF', 'GZF018ZC', '', 'Activated carbon filter (ZC)', '9100', '300303', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 125 CFM, 16 BAR G', '1'),
(308, 'GZF', 'GZF030GP', '', 'General purpose filter', '16400', '300304', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 200 CFM, 16 BAR G', '1'),
(309, 'GZF', 'GZF030ZP', '', 'Micro oil removing filter', '17200', '300305', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 200 CFM, 16 BAR G', '1'),
(310, 'GZF', 'GZF030ZO', '', 'Sub micro oil removing filter', '17300', '300306', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 200 CFM, 16 BAR G', '1'),
(311, 'GZF', 'GZF030ZC\r\n', '', 'Activated carbon filter', '17700', '300307', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 200 CFM, 16 BAR G', '1'),
(312, 'GZF', 'GZF047GP', '', 'General purpose filter', '18700', '300308', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 310 CFM, 16 BAR G', '1'),
(313, 'GZF', 'GZF047ZP', '', 'Micro oil removing filter', '19400', '300309', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 310 CFM, 16 BAR G', '1');
INSERT INTO `tbl_type_price` (`type_price_id`, `type_price_model`, `type_price_model_no`, `ga_diagram`, `type`, `price`, `sapcode`, `description`, `status`) VALUES
(314, 'GZF', 'GZF047ZO', '', 'Sub micro oil removing filter', '19500', '300310', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 310 CFM, 16 BAR G', '1'),
(315, 'GZF', 'GZF047ZC', '', 'Activated carbon filter', '19800', '300311', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 310 CFM, 16 BAR G', '1'),
(316, 'GZF', 'GZF070GP', '', 'General purpose filter', '22700', '300312', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 450 CFM, 16 BAR G', '1'),
(317, 'GZF', 'GZF070ZP', '', 'Micro oil removing filter', '23400', '300313', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 450 CFM, 16 BAR G', '1'),
(318, 'GZF', 'GZF070ZO', '', 'Sub micro oil removing filter', '23500', '300314', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 450 CFM, 16 BAR G', '1'),
(319, 'GZF', 'GZF070ZC', '', 'Activated carbon filter', '23900', '300315', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 450 CFM, 16 BAR G', '1'),
(320, 'GZF', 'GZF094GP', '', 'General purpose filter', '34600', '300316', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 600 CFM, 16 BAR G', '1'),
(321, 'GZF', 'GZF094ZP', '', 'Micro oil removing filter', '35400', '300317', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 600 CFM, 16 BAR G', '1'),
(322, 'GZF', 'GZF094ZO', '', 'Sub micro oil removing filter', '35500', '300318', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 600 CFM, 16 BAR G', '1'),
(323, 'GZF', 'GZF094ZC', '', 'Activated carbon filter', '35800', '300319', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 600 CFM, 16 BAR G', '1'),
(324, 'GZF', 'GZF150GP', '', 'General purpose filter', '41100', '300320', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 900 CFM, 16 BAR G', '1'),
(325, 'GZF', 'GZF150ZP', '', 'Micro oil removing filter', '43900', '300321', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 900 CFM, 16 BAR G', '1'),
(326, 'GZF', 'GZF150ZO', '', 'Sub micro oil removing filter', '44700', '300322', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 900 CFM, 16 BAR G', '1'),
(327, 'GZF', 'GZF150ZC', '', 'Activated carbon filter', '45400', '300323', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 900 CFM, 16 BAR G', '1'),
(328, 'GZF', 'GZF240GP', '', 'General purpose filter', '90200', '300328', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 1700 CFM, 16 BAR G', '1'),
(329, 'GZF', 'GZF240ZP', '', 'Micro oil removing filter', '93000', '300329', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 1700 CFM, 16 BAR G', '1'),
(330, 'GZF', 'GZF240ZO', '', 'Sub micro oil removing filteR', '93600', '300330', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 1700 CFM, 16 BAR G', '1'),
(331, 'GZF', 'GZF240ZC', '', 'Activated carbon filter', '94400', '300331', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 1700 CFM, 16 BAR G', '1'),
(332, 'GZF', 'GZF175GP', '', 'General purpose filter', '60100', '300324', 'AIR FILTER, 3 MICRON, POLY PROPYLENE, 1200 CFM, 16 BAR G', '1'),
(333, 'GZF', 'GZF175ZP', '', 'Micro oil removing filter', '63000', '300325', 'AIR FILTER, 0.1 MICRON, BORO SILICATE, 1200 CFM, 16 BAR G', '1'),
(334, 'GZF', 'GZF175ZO', '', 'Sub micro oil removing filter', '63700', '300326', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 1200 CFM, 16 BAR G', '1'),
(335, 'GZF', 'GZF175ZC', '', 'Activated carbon filter', '64400', '300327', 'AIR FILTER, 0.005 MG/M^3, BORO SILICATE WITH IMPREGNATED ACTIVATED CARBON, 1200 CFM, 16 BAR G', '1'),
(336, '2KD', '2KD+075E', '', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,300000,0', '300058', 'COMPRESSED AIRDRYER OF CAPACITY 750CFM/ R407C/IS2825', '1'),
(337, '2KD', '2KD+100E', '', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,400000,0', '300059', '2KD+100E, COMPRESSED AIR DRYER,GAS R407C,WR.PRE-7-16KG/CM^2', '1'),
(338, '2KD', '2KD+125E', '', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,410000,0', '300060', 'COMPRESSED AIR DRYER CAPACITY 1250CFM/ R407C/IS2825', '1'),
(339, '2KD', '2KD+150E', '', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,560000,0', '300061', 'COMPRESSED AIR DRYER, 1500 CFM, 7 TO 12.5 BAR G, AIR COOLED, R407C', '1'),
(340, '2KD', '2KD+200E', '', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,693000,0', '300062', 'COMPRESSED AIR DRYER TO HANDLE 2000CFM @ 7 KG/CM2 WORKING PRESSURE, AIR COOLED, R407C', '1'),
(341, '2KD', '2KD+250E', '', 'Air Cooled R134a Price,Air Cooled R404c Price,Water Cooled R407c Price', '0,750000,0', '300063', 'COMPRESSED AIR DRYER CAPACITY 2500CFM/ R407C/IS2825', '1'),
(342, 'HLN', 'HLN003C', 'HLN 003 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '0,56000', '300169', 'AIR DRYER, DESICCANT, HEATLESS, 35 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(343, 'HLN', 'HLN006C', 'HLN 006 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '75500', '300171', 'AIR DRYER, DESICCANT, HEATLESS, 60 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(344, 'HLN', 'HLN007C', 'HLN 007 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '83900', '300173', 'AIR DRYER, DESICCANT, HEATLESS, 75 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(345, 'HLN', 'HLN010C', 'HLN 010 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '97250', '300175', 'AIR DRYER, DESICCANT, HEATLESS, 100 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(346, 'HLN', 'HLN012C', 'HLN 012 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '130100', '300177', 'AIR DRYER, DESICCANT, HEATLESS, 120 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(347, 'HLN', 'HLN015C', 'HLN 015 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '137500', '300179', 'AIR DRYER, DESICCANT, HEATLESS, 150 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(348, 'HLN', 'HLN017C', 'HLN 017 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '144800', '300181', 'AIR DRYER, DESICCANT, HEATLESS, 170 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(349, 'HLN', 'HLN020C', 'HLN 020 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '156900', '300183', 'AIR DRYER, DESICCANT, HEATLESS, 200 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(350, 'HLN', 'HLN025C', 'HLN 025 C.pdf', 'Desiccant Activated Alumina(65c)IS 2825 code Construction(C)', '167800', '300185', 'AIR DRYER, DESICCANT, HEATLESS, 250 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(351, 'SCT', 'SCT100L', 'SCT 100L.pdf', 'Low temperature', '89950', '300149', 'COOLING TOWER, EVAPORATIVE, SQUARE, 100 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(352, 'SCT', 'SCT150L', 'SCT 150L.pdf', 'Low temperaturE', '102650', '300151', 'COOLING TOWER, EVAPORATIVE, SQUARE, 150 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(353, 'SCT', 'SCT200L', 'SCT 200L.pdf', 'Low temperature', '138830', '300153', 'COOLING TOWER, EVAPORATIVE, SQUARE, 200 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(354, 'SCT', 'SCT250L', 'SCT 250L.pdf', 'Low temperature', '159080', '300155', 'COOLING TOWER, EVAPORATIVE, SQUARE, 250 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(355, 'SCT', 'SCT300L', 'SCT 300L.pdf', 'Low temperature', '195080', '300157', 'COOLING TOWER, EVAPORATIVE, SQUARE, 300 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(356, 'GCT+ ECO', 'GCT100L', '', 'Low Temperature', '90510', '300126', 'COOLING TOWER, EVAPORATIVE, ROUND, 100 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', '1'),
(357, 'GCT+ ECO', 'GCT125L', '', 'Low Temperature', '99010', '300128', 'COOLING TOWER, EVAPORATIVE, ROUND, 125 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', '1'),
(358, 'GCT+ ECO', 'GCT150L', '', 'Low Temperature', '103860', '300130', 'COOLING TOWER, EVAPORATIVE, ROUND, 150 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', '1'),
(359, 'GCT+ ECO', 'GCT200L', '', 'Low Temperature', '151450', '300132', 'COOLING TOWER, EVAPORATIVE, ROUND, 150 TR, HIGH TEMP FILLS, 51 TO 90 DEG C INLET WATER TEMP', '1'),
(360, 'GCT+ ECO', 'GCT250L', '', 'Low Temperature', '159180', '300134', 'COOLING TOWER, EVAPORATIVE, ROUND, 250 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', '1'),
(361, 'GCT+ ECO', 'GCT300L', '', 'Low Temperature', '236790', '300137', 'COOLING TOWER, EVAPORATIVE, ROUND, 300 TR, LOW TEMP FILLS, UP TO 50 DEG C INLET WATER TEMP', '1'),
(362, 'SCB', 'SCB100L', '', 'Low temperature', '105130', '300139', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 100 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(364, 'SCB', 'SCB200L', '', 'Low temperature', '159760', '300143', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 200TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(365, 'SCB', 'SCB250L', '', 'Low temperature', '190730', '300145', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 250 TR, LOW TEMP FILLS, 50 TO 60 DEG C INLET WATER TEMP', '1'),
(366, 'SCB', 'SCB300L', '', 'Low temperature', '234450', '300147', 'COOLING TOWER, EVAPORATIVE, SQUARE, WITH BASIN, 300 TR, LOW TEMP FILLS, UPTO 50 DEG C INLET WATER TEMP', '1'),
(367, 'GZF CATRIDGES', 'GZF005GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '3000', '300332', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 35 CFM, 16 BAR G', '1'),
(368, 'GZF CATRIDGES', 'GZF007GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '3400', '300336', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 50 CFM, 16 BAR G', '1'),
(369, 'GZF CATRIDGES', 'GZF010GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '4500', '300340', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 75 CFM, 16 BAR G', '1'),
(370, 'GZF CATRIDGES', 'GZF018GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '5200', '300344', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 125 CFM, 16 BAR G', '1'),
(371, 'GZF CATRIDGES', 'GZF030GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '10600', '300348', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 200 CFM, 16 BAR G', '1'),
(372, 'GZF CATRIDGES', 'GZF047GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '12300', '300352', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 310 CFM, 16 BAR G', '1'),
(373, 'GZF CATRIDGES', 'GZF070GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '14100', '300356', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 450 CFM, 16 BAR G', '1'),
(374, 'GZF CATRIDGES', 'GZF094GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '21600', '300360', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 600 CFM, 16 BAR G', '1'),
(375, 'GZF CATRIDGES', 'GZF150GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '28600', '300364', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 900 CFM, 16 BAR G', '1'),
(376, 'GZF CATRIDGES', 'GZF175GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '42100', '300368', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 1200CFM, 16 BAR G', '1'),
(377, 'GZF CATRIDGES', 'GZF240GPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '67600', '300372', 'ELEMENT AIR FILTER, 3 MICRON, POLY PROPYLENE, 1700 CFM, 16 BAR G', '1'),
(378, 'GZF CATRIDGES', 'GZF005ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '3950', '300333', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', '1'),
(379, 'GZF CATRIDGES', 'GZF007ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '4200', '300337', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', '1'),
(380, 'GZF CATRIDGES', 'GZF010ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge\r\n', '4900', '300341', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 75 CFM, 16 BAR G', '1'),
(381, 'GZF CATRIDGES', 'GZF018ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '6000', '300345', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 125 CFM, 16 BAR G', '1'),
(382, 'GZF CATRIDGES', 'GZF030ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '10900', '300349', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 200 CFM, 16 BAR G', '1'),
(383, 'GZF CATRIDGES', 'GZF047ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '13200', '300353', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 310 CFM, 16 BAR G', '1'),
(384, 'GZF CATRIDGES', 'GZF070ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '14500', '300357', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 450 CFM, 16 BAR G', '1'),
(385, 'GZF CATRIDGES', 'GZF094ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '22100', '300361', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 600 CFM, 16 BAR G', '1'),
(386, 'GZF CATRIDGES', 'GZF150ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '28600,29300,29700,30200', '300365', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 900 CFM, 16 BAR G', '1'),
(387, 'GZF CATRIDGES', 'GZF175ZPE', 'GZFCATRIDGES.pdf', 'Model Variance General Purpose Filter Cartridge (GPE)', '44000', '300369', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 1200 CFM, 16 BAR G', '1'),
(388, 'GZF CATRIDGES', 'GZF240ZPE', 'GZFCATRIDGES.pdf', 'Model Variance Micro oil Removing filter Cartridge (ZPE)', '70000', '300373', 'ELEMENT AIR FILTER, 0.1 MICRON, BORO SILICATE, 1700 CFM, 16 BAR G', '1'),
(389, 'GZF CATRIDGES', 'GZF005ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '4100', '300334', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 35 CFM, 16 BAR G', '1'),
(390, 'GZF CATRIDGES', 'GZF007ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '4500', '300338', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 50 CFM, 16 BAR G', '1'),
(391, 'GZF CATRIDGES', 'GZF010ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE),\r\n', '5500', '300342', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 75 CFM, 16 BAR G', '1'),
(392, 'GZF CATRIDGES', 'GZF018ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '6300', '300346', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 125 CFM, 16 BAR G', '1'),
(393, 'GZF CATRIDGES', 'GZF030ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '11100', '300350', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 200 CFM, 16 BAR G', '1'),
(394, 'GZF CATRIDGES', 'GZF047ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '13500', '300354', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 310 CFM, 16 BAR G', '1'),
(395, 'GZF CATRIDGES', 'GZF070ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '14800', '300358', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 450 CFM, 16 BAR G', '1'),
(396, 'GZF CATRIDGES', 'GZF094ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '22400', '300362', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 600 CFM, 16 BAR G', '1'),
(397, 'GZF CATRIDGES', 'GZF150ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '29700', '300366', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 900 CFM, 16 BAR G', '1'),
(398, 'GZF CATRIDGES', 'GZF175ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '44700', '300370', 'AIR FILTER, 0.01 MICRON, BORO SILICATE, 1200 CFM, 16 BAR G', '1'),
(399, 'GZF CATRIDGES', 'GZF240ZOE', 'GZFCATRIDGES.pdf', 'Model Variance Sub Micro oil removing filter Cartridge (ZOE)', '70400', '300374', 'ELEMENT AIR FILTER, 0.01 MICRON, BORO SILICATE, 1700 CFM, 16 BAR G', '1'),
(401, 'HP Filter ', 'ZPA005 7', 'ZPA0057.pdf', 'Micro oil removing filters (ZP)', '8500', '', '', '1'),
(402, 'HP Filter ', 'ZPB010 7', 'ZPB0107.pdf', 'Micro oil removing filters (ZP)', '15100', '', '', '1'),
(403, 'HP Filter ', 'ZPB020 7', 'ZPB0207.pdf', 'Micro oil removing filters (ZP)', '23400', '', '', '1'),
(404, 'HP Filter ', 'ZPB030 7', 'ZPB0307.pdf', 'Micro oil removing filters (ZP)', '27600', '', '', '1'),
(405, 'HP Filter ', 'ZPB050 7', 'ZPB0507.pdf', 'Micro oil removing filters (ZP)', '37500', '', '', '1'),
(406, 'HP Filter ', 'ZPB075 7', '', 'Micro oil removing filters (ZP)', '53100', '', '', '1'),
(407, 'HP Filter ', 'ZPB100 7', '', 'Micro oil removing filters (ZP)', '65600', '', '', '1'),
(408, 'HP Filter ', 'ZOA005 7', 'ZOA0057.pdf', 'Sub Micro oil removing filters (ZO)', '8500', '', '', '1'),
(409, 'HP Filter ', 'ZOB010 7', 'ZOB0107.pdf', 'Sub Micro oil removing filters (ZO)', '15100', '', '', '1'),
(410, 'HP Filter ', 'ZOB020 7', 'ZOB0207.pdf', 'Sub Micro oil removing filters (ZO)', '23400', '', '', '1'),
(411, 'HP Filter ', 'ZOB030 7', 'ZOB0307.pdf', 'Sub Micro oil removing filters (ZO)', '27400', '', '', '1'),
(412, 'HP Filter ', 'ZOB050 7', 'ZOB0507.pdf', 'Sub Micro oil removing filters (ZO)', '37500', '', '', '1'),
(413, 'HP Filter ', 'ZOB075 7', '', 'General purpose filters (GP),Micro oil removing filters (ZP),Sub Micro oil removing filters (ZO),Activated carbon filters (ZC)', '53100', '', '', '1'),
(414, 'HP Filter ', 'ZOB100 7', '', 'Sub Micro oil removing filters (ZO)', '65600', '', '', '1'),
(415, 'HP Filter ', 'ZCA005 7', '', 'Activated carbon filters (ZC)', '8500', '', '', '1'),
(416, 'HP Filter ', 'GPB010 7', 'GPB0107.pdf', 'Activated carbon filters (ZC)', '15100', '', '', '1'),
(417, 'HP Filter ', 'GPB020 7', 'GPB0207.pdf', 'Activated carbon filters (ZC)', '23400', '', '', '1'),
(418, 'HP Filter ', 'GPB030 7', 'GPB0307.pdf', 'Activated carbon filters (ZC)', '27600', '', '', '1'),
(419, 'HP Filter ', 'GPB050 7', 'GPB0507.pdf', 'Activated carbon filters (ZC)', '37500', '', '', '1'),
(420, 'HP Filter ', 'GPB075 7', '', 'Activated carbon filters (ZC)', '53100', '', '', '1'),
(421, 'HP Filter ', 'GPB100 7', '', 'Activated carbon filters (ZC)', '65600', '', '', '1'),
(423, 'HLD', 'HLD040C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '220000,285800,264000,342900', '300189', 'AIR DRYER, DESICCANT, HEATLESS, 400 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(424, 'HLD', 'HLD050C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '264000,343000,317000,412000', '300191', 'AIR DRYER, DESICCANT, HEATLESS, 500 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(425, 'HLD', 'HLD060C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '330000,428600,396400,514400', '300193', 'AIR DRYER, DESICCANT, HEATLESS, 600 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(426, 'HLD', 'HLD075C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '386000,500300,461400,600100', '300195', 'AIR DRYER, DESICCANT, HEATLESS, 750 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(427, 'HLD', 'HLD100C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '471800,631100,566300,736700', '300197', 'AIR DRYER, DESICCANT, HEATLESS, 1000 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(428, 'HLD', 'HLD125C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '543000,704000,649400,845800', '300199', 'AIR DRYER, DESICCANT, HEATLESS, 1250 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(429, 'HLD', 'HLD150C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '608400,786000,726300,944500', '300201', 'AIR DRYER, DESICCANT, HEATLESS, 1500 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(430, 'HLD', 'HLD200C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '705500,919600,848400,1106100', '300203', 'AIR DRYER, DESICCANT, HEATLESS, 2000 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1'),
(431, 'HLD', 'HLD030C', '', 'Desiccant-Activated Alumina(50 deg c) IS 2825  code of Construction(A), Desiccant-Activated Alumina(50 deg c) ASME sec VIII 1 code of construction(B),\r\n Desiccant Molecular Sieve IS 2825  code of Construction(C), Desiccant Molecular Sieve ASME sec VIII 1 ', '182200,256200,236400,308100', '300187', 'AIR DRYER, DESICCANT, HEATLESS, 300 CFM, 7 TO 12.5 BAR G, MOLECULAR SIEVE, IS 2825', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_code` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_phone_no` varchar(255) NOT NULL,
  `user_address` text NOT NULL,
  `user_pincode` varchar(255) NOT NULL,
  `user_region` varchar(255) NOT NULL,
  `user_speciality` varchar(255) NOT NULL,
  `user_discount` varchar(255) NOT NULL,
  `user_grade` varchar(20) NOT NULL,
  `	user_permsission_sales` varchar(255) NOT NULL,
  `user_permsission_alotment` varchar(255) NOT NULL,
  `user_permsission_self_allotment` varchar(255) NOT NULL,
  `user_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_last_login_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_gcm_id` varchar(255) NOT NULL,
  `user_status` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='user_table' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_code`, `user_name`, `user_gender`, `user_email`, `user_password`, `user_phone_no`, `user_address`, `user_pincode`, `user_region`, `user_speciality`, `user_discount`, `user_grade`, `	user_permsission_sales`, `user_permsission_alotment`, `user_permsission_self_allotment`, `user_created_on`, `user_last_login_on`, `user_gcm_id`, `user_status`) VALUES
(2, '1001', 'tesr', 'Male', '123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9487914513', 'VSV', '5678900', '', 'test', '12', 'senior', '', '', 'yes', '2017-04-01 14:33:03', '2017-04-02 03:03:03', '', 1),
(3, '1002', 'tesr111', 'Male', '1231@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9487914513', 'VSV', '5678900', '', 'test', '12', 'senior', '', '', 'no', '2017-03-28 06:45:52', '2017-03-16 22:40:27', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_target_for_the_month`
--

CREATE TABLE IF NOT EXISTS `tbl_user_target_for_the_month` (
  `user_target_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_targer_year_id` int(255) NOT NULL,
  `user_target_month_id` int(255) NOT NULL,
  `user_target_team_id` int(255) NOT NULL,
  `user_target_user_code` varchar(255) NOT NULL,
  `user_target_amount` varchar(255) NOT NULL,
  `user_target_dryer` varchar(255) NOT NULL,
  `user_target_chiller` varchar(255) NOT NULL,
  `user_target_cooler` varchar(255) NOT NULL,
  `user_target_var` varchar(255) NOT NULL,
  `user_target_small_products` varchar(255) NOT NULL,
  `user_target_enquiry` varchar(255) NOT NULL,
  `user_target_campaign` varchar(255) NOT NULL,
  `user_target_created_on` varchar(255) NOT NULL,
  `user_target_status` int(1) NOT NULL,
  PRIMARY KEY (`user_target_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='target for the month' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user_target_for_the_month`
--

INSERT INTO `tbl_user_target_for_the_month` (`user_target_id`, `user_targer_year_id`, `user_target_month_id`, `user_target_team_id`, `user_target_user_code`, `user_target_amount`, `user_target_dryer`, `user_target_chiller`, `user_target_cooler`, `user_target_var`, `user_target_small_products`, `user_target_enquiry`, `user_target_campaign`, `user_target_created_on`, `user_target_status`) VALUES
(2, 1, 4, 1, '1001', '10000', '1', '1', '1', '1', '1', '300', '1', '2017-03-18 22:57:40', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

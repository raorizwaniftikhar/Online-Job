-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2010 at 07:36 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL auto_increment,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `address`, `mobile`, `phone`, `password`) VALUES
(1, 'wasim', 'Arshad', 'admin', 'Vehari', '0346-7837220', '0673345251', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(10) NOT NULL auto_increment,
  `c_name` varchar(50) NOT NULL,
  `mail_id` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `fax_no` varchar(20) NOT NULL,
  `web_link` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` char(20) NOT NULL,
  `country` char(20) NOT NULL,
  `postal_code` int(15) NOT NULL,
  `industry` varchar(20) NOT NULL,
  `contact_pname` varchar(20) NOT NULL,
  `designation1` varchar(20) NOT NULL,
  `mobile1` int(15) NOT NULL,
  `phone1` int(15) NOT NULL,
  `mail_id1` varchar(30) NOT NULL,
  `alternate_contactp` varchar(20) NOT NULL,
  `designation2` varchar(20) NOT NULL,
  `mobile2` int(15) NOT NULL,
  `phone2` int(15) NOT NULL,
  `mail_id2` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `c_name`, `mail_id`, `phone`, `mobile`, `fax_no`, `web_link`, `address`, `city`, `country`, `postal_code`, `industry`, `contact_pname`, `designation1`, `mobile1`, `phone1`, `mail_id1`, `alternate_contactp`, `designation2`, `mobile2`, `phone2`, `mail_id2`, `password`) VALUES
(4, 'descon ', 'wasim_bzu@yahoo.com', '06733121', '03467837220', '123154564', 'wwwdesconnet', 'gulburk lahore', 'lahore', 'Afghanistan', 6000, 'agriculture', 'wasim', 'project manger', 2147483647, 6754564, 'wasi@gmail.com', 'haroon', 'regional officer', 305123123, 2147483647, 'haroon@yahoo.com', 'employer'),
(5, 'sims', 'sims@yahoo.com', '2311321', '03331213213', '253454', 'simscom', 'landhi karachi', 'karachi', 'Afghanistan', 1321231, 'information technalo', 'imran', 'manger', 2147483647, 214564654, 'imran@yahoo.com', 'usman', 'senier clerck', 2147483647, 30003213, 'usman@yahoo.com', 'sims'),
(6, 'netsol technalogy', 'netsol@hotmil.com', '212312', '03331213213', '165454', 'netsol.com', 'gulburk lahore', 'lahore', 'Afghanistan', 11231231, 'information technalo', 'waqas', 'it manger', 2147483647, 300025123, 'waqas@yahoo.com', 'Waqar', 'manger', 2147483647, 33343545, 'waqar@yahoo.com', 'netsol'),
(7, 'awais it center', 'awais@yahoo.com', '1231231', '03007731712', '02315341', 'www.it.com', 'burewala vehari', 'Vehari', 'Pakistan', 6000, 'Information Technalo', 'awais', 'it manger', 2147483647, 21231, 'awasi@yahoo.com', 'HAROON', 'manger', 11254564, 31213, 'haroon@yahoo.com', 'awais'),
(8, 'SS  mills pvt Ltd', 'wasim.bzu@gmail.com', '0673315421', '03467837220', '125435752', 'www.sssm.com', 'khanewal', 'vehari', 'Pakistan', 61100, 'accounting', 'imran', 'gm', 2147483647, 673312546, 'im_bzu@yahoo.com', 'wawsi', 'pro', 34512678, 2147483647, 'awas@yahooo.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `institute` varchar(50) NOT NULL,
  `degree_name` varchar(30) NOT NULL,
  `completion year` year(4) NOT NULL,
  `total_marks` varchar(4) NOT NULL,
  `obtain_marks` varchar(4) NOT NULL,
  `nic_no` varchar(30) NOT NULL,
  PRIMARY KEY  (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`institute`, `degree_name`, `completion year`, `total_marks`, `obtain_marks`, `nic_no`) VALUES
('model hs vehari', 'matric', 2008, '800', '600', '032121231'),
('punjab lahore', 'bcs', 2009, '1500', '1133', '12345'),
('punjab universty', 'mba', 2000, '2400', '1800', '1235688'),
('govt model hs vehari', 'matric', 2009, '1050', '758', '366031211'),
('BZU Multan', 'MCS', 2009, '2400', '1700', '366032794661'),
('gc lahore', 'bscs', 1999, '2000', '1550', '4444');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `institute` varchar(30) NOT NULL,
  `post` varchar(20) NOT NULL,
  `salary` int(10) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `reson_flj` varchar(500) NOT NULL,
  `nic_no` varchar(20) NOT NULL,
  PRIMARY KEY  (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`institute`, `post`, `salary`, `starting_date`, `ending_date`, `reson_flj`, `nic_no`) VALUES
('FFC Multan', 'computer operator', 12000, '2008-02-02', '2009-06-09', 'not special', '032121231'),
('telenor', 'cmptr operator', 12000, '2005-12-22', '2009-12-12', 'kuch khas nahi thi', '12345'),
('soft inn', 'programmer', 3000, '2001-12-25', '2004-11-11', 'not special', '1235688'),
('descon', 'febricator', 15000, '2005-12-22', '2006-06-05', 'not any reason', '366031211'),
('GC vehari', 'it manger', 15000, '2009-10-01', '2009-12-12', 'for better career', '366032794661'),
('descone', 'security incharge', 25000, '2000-02-06', '2000-00-22', 'not specail', '4444');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(10) NOT NULL auto_increment,
  `jobtitle` varchar(20) NOT NULL,
  `posted_date` date NOT NULL,
  `last_date` date NOT NULL,
  `skill` varchar(20) NOT NULL,
  `experience` int(4) NOT NULL,
  `education` varchar(15) NOT NULL,
  `post` varchar(20) NOT NULL,
  `salary_range` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `e_status` varchar(2) NOT NULL,
  `prefred_gender` char(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  PRIMARY KEY  (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `jobtitle`, `posted_date`, `last_date`, `skill`, `experience`, `education`, `post`, `salary_range`, `status`, `e_status`, `prefred_gender`, `company_id`) VALUES
(21, 'network administ', '2009-10-22', '2009-12-22', 'java', 5, 'mcs', 'network admini', '30000', 'Permanent', '8 ', 'male', 4),
(22, 'php developer', '2009-10-22', '2010-01-01', 'php', 2, 'mcs', 'php developer', '20000', 'Permanent', '8 ', 'mal', 4),
(23, 'oracle developer', '2010-01-12', '2010-02-12', 'java', 2, 'mcs', 'oracle developer', '30000', 'Permanent', '8 ', 'mal', 4),
(24, 'network administrato', '2008-11-25', '2009-01-05', 'networking', 2, 'mcs', 'network administrato', '25000', 'Permanent', '12', 'male', 5),
(25, 'DB manger', '2009-10-22', '2009-12-22', 'DBMS', 5, 'mcs', 'DB manger', '20000', 'Contract', '10', 'male', 5),
(26, 'C master', '2009-08-06', '2009-09-01', 'C', 2, 'mcs', 'C master', '22000', 'Contract', '8 ', 'male', 5),
(27, 'seo tools', '2009-05-09', '2009-06-22', 'seo master', 2, 'mcs', 'seo master', '15000', 'Not Required', '12', 'male', 6),
(28, 'asp.net', '2008-11-25', '2009-12-22', 'asp', 1, 'mcs', 'asp net master', '', 'Permanent', '', 'mal', 6),
(29, 'php. developer', '2008-11-25', '2009-09-01', 'php', 2, 'mcs', 'php# master', '20000', 'Not Required', '8 ', 'mal', 6),
(30, 'accountant', '2010-02-06', '2010-03-11', 'financial account', 5, 'Mcom', 'account officer', '2000', 'Contract', '12', 'male', 4),
(31, 'computer teacher', '2010-01-12', '2010-03-11', 'computer science', 5, 'Mcs', 'it teadher', '15000', 'Contract', '10', 'male', 4);

-- --------------------------------------------------------

--
-- Table structure for table `posted_job`
--

CREATE TABLE `posted_job` (
  `job_id` int(10) NOT NULL,
  `jobtitle` varchar(20) NOT NULL,
  `posted-date` date NOT NULL,
  `last_date` date NOT NULL,
  `skill` varchar(20) NOT NULL,
  `experience` int(10) NOT NULL,
  `education` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `salary_range` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `e_status` varchar(20) NOT NULL,
  `prefred_gender` varchar(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY  (`job_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posted_job`
--

INSERT INTO `posted_job` (`job_id`, `jobtitle`, `posted-date`, `last_date`, `skill`, `experience`, `education`, `post`, `salary_range`, `status`, `e_status`, `prefred_gender`, `company_id`, `description`) VALUES
(26, 'C master', '2009-08-06', '2009-09-01', 'C', 2, 'mcs', 'C master', '22000', 'Contract', '8 ', 'male', 5, 'only experienced persons can aplly'),
(25, 'DB manger', '2009-10-22', '2009-12-22', 'DBMS', 5, 'mcs', 'DB manger', '20000', 'Contract', '10', 'male', 5, 'only experienced persons can aplly'),
(24, 'network administrato', '2008-11-25', '2009-01-05', 'networking', 2, 'mcs', 'network administrato', '25000', 'Permanent', '12', 'male', 5, 'only experienced persons can aplly'),
(23, 'oracle developer', '2010-01-12', '2010-02-12', 'java', 2, 'mcs', 'oracle developer', '30000', 'Permanent', '8 ', 'mal', 4, 'only experienced persons can aplly'),
(22, 'php developer', '2009-10-22', '2010-01-01', 'php', 2, 'mcs', 'php developer', '20000', 'Permanent', '8 ', 'mal', 4, 'only experienced persons can aplly'),
(21, 'network administ', '2009-10-22', '2009-12-22', 'java', 5, 'mcs', 'network admini', '30000', 'Permanent', '8 ', 'male', 4, 'Only experienced persons can apply and it can be in multiple cities'),
(27, 'seo tools', '2009-05-09', '2009-06-22', 'seo master', 2, 'mcs', 'seo master', '15000', 'Not Required', '12', 'male', 6, 'only experienced persons can aplly'),
(28, 'asp net', '2008-11-25', '2009-12-22', 'asp', 1, 'mcs', 'asp net master', '25100', 'Permanent', '8 ', 'mal', 6, 'only experienced persons can aplly'),
(29, 'php. developer', '2008-11-25', '2009-09-01', 'php', 2, 'mcs', 'php# master', '20000', 'Not Required', '8 ', 'mal', 6, 'only experienced persons can apply'),
(30, 'project manger', '2009-10-10', '2009-12-12', 'mangement', 5, 'MBA', 'project manger', '20000', 'Contract', '10', 'male', 7, 'experince must');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_cvs`
--

CREATE TABLE `uploaded_cvs` (
  `nic_no` varchar(10) NOT NULL,
  `cv_subject` varchar(20) NOT NULL,
  `cv` varchar(500) NOT NULL,
  PRIMARY KEY  (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploaded_cvs`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nic_no` varchar(20) NOT NULL,
  `domain_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `mail_id` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `phone` int(18) NOT NULL,
  `mobile` int(18) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  PRIMARY KEY  (`nic_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nic_no`, `domain_name`, `password`, `f_name`, `l_name`, `mail_id`, `dob`, `gender`, `marital_status`, `religion`, `phone`, `mobile`, `address`, `city`, `country`, `nationality`) VALUES
('032121231', 'awais@yahoo.com', 'awais', 'Awais', 'Ali', 'awais@yahoo.com', '1996-11-25', 'Male', 'single', 'Islam', 2147483647, 321321, 'burewala vehari', 'Vehari', 'Pakistan', 'Pakistan'),
('12345', 'waqas@yahoo.com', 'waqas', 'waqas', 'Ali', 'waqas@yahoo.com', '1995-08-26', 'Male', 'single', 'Islam', 67334562, 2147483647, 'tehsil burewala dist vehari', 'vehari', 'Afghanistan', 'Pakistan'),
('1235688', 'ali@yahoo.com', 'ali', 'ali', 'khan', 'ali@yahoo.com', '2003-12-25', 'Male', 'married', 'islam', 5464, 4564564, 'model town lahore', 'lahore', 'Pakistan', 'U.S.A'),
('366031211', 'amjad@yahoo.com', 'amjad', 'amjad', 'Hussain', 'amjad@hotmail.com', '1990-10-28', 'Male', 'single', 'Islam', 67334567, 2147483647, 'tehsil mailsi distt. vehari', 'kabul', 'Afghanistan', 'Pakistan'),
('366032794661', 'wasim_bzu@yahoo.com', 'career', 'Wasim', 'Arshad', 'wasim_bzu@yahoo.com', '1986-11-22', 'Male', 'single', 'Islam', 2147483647, 2147483647, 'district vehari', 'Vehari', 'Pakistan', 'Pakistan'),
('4444', 'akashali@yahoo.com', 'akash', 'akash', 'ali', 'akash@yahoo.com', '0000-00-00', 'Male', 'single', 'islam', 444444444, 44444444, 'gulburg lahore', 'lahore', 'Pakistan', 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `u_applied_job`
--

CREATE TABLE `u_applied_job` (
  `nic` varchar(20) NOT NULL,
  `job_id` varchar(20) NOT NULL,
  KEY `nic` (`nic`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_applied_job`
--

INSERT INTO `u_applied_job` (`nic`, `job_id`) VALUES
('366032794661', '26'),
('366032794661', '25'),
('366032794661', '24'),
('366032794661', '23'),
('366032794661', '22'),
('366032794661', '21'),
('366032794661', '27'),
('366032794661', '28'),
('366032794661', '29'),
('12345', '26'),
('12345', '25'),
('12345', '24'),
('12345', '21'),
('12345', '28'),
('12345', '29'),
('12345', '23'),
('366031211', '26'),
('366031211', '25'),
('366031211', '23'),
('366031211', '21'),
('366031211', '27'),
('366031211', '29'),
('366031211', '22'),
('032121231', '23'),
('032121231', '29'),
('032121231', '22'),
('1235688', '24'),
('1235688', '27'),
('1235688', '29'),
('1235688', '30'),
('4444', '29'),
('4444', '23'),
('4444', '27'),
('4444', '30'),
('4444', '26'),
('4444', '21');

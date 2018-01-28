-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 03, 2017 at 06:40 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `orms`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `administrator`
-- 

CREATE TABLE `administrator` (
  `Full_Name` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Contact` int(18) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  
  PRIMARY KEY  (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `administrator`
-- 

INSERT INTO `administrator` (`Full_Name`, `Address`, `Contact`, `Email`, `User_type`, `user_name`, `password`) VALUES 
('Super Admin', 'kampala', 755218343, 'admin@orms.ug', 'Admin', 'super admin', '12345'),
('Nakafeero Jane', 'kyengera', 754632274, 'nakafeerojane@gmail.com', 'administrator', 'jane', '12345');

-- --------------------------------------------------------

-- 
-- Table structure for table `bursar`
-- 

CREATE TABLE `bursar` (
  `Full_Name` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Contact` int(18) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY  (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `bursar`
-- 

INSERT INTO `bursar` (`Full_Name`, `Address`, `Contact`, `Email`, `User_type`, `user_name`, `password`) VALUES 
('Mawanda Erick', 'Namagooma', 784323289, 'mawandaerick@gmail.com', 'Bursar', 'mawanda', '12345');

-- --------------------------------------------------------

-- 
-- Table structure for table `fees`
-- 

CREATE TABLE `fees` (
  `txn_id` varchar(20) NOT NULL,
  `pID` varchar(20) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `bal` varchar(20) NOT NULL,
  `term` varchar(25) NOT NULL,
  PRIMARY KEY  (`txn_id`),
  KEY `pID` (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `fees`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `grading`
-- 

CREATE TABLE `grading` (
  `id` int(12) NOT NULL auto_increment,
  `grade` varchar(25) NOT NULL,
  `total` varchar(5) NOT NULL,
  `class` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `grading`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `parent`
-- 

CREATE TABLE `parent` (
  `Full_Name` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Contact` int(18) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY  (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `parent`
-- 

INSERT INTO `parent` (`Full_Name`, `Address`, `Contact`, `Email`, `User_type`, `user_name`, `password`) VALUES 
('Nalubega Resty', 'kyengera', 2147483647, 'nalubegaresty@gmail.com', 'parent', 'nalubega', '12345');


-- --------------------------------------------------------

-- 
-- Table structure for table `student`
-- 

CREATE TABLE `student` (
  `sID` varchar(10) NOT NULL,
  `sName` varchar(25) NOT NULL,
  `class` varchar(5) NOT NULL,
  `status` varchar(9) NOT NULL,
  `parent` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(8) NOT NULL,
  PRIMARY KEY  (`sID`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `student`
-- 

INSERT INTO `student` (`sID`, `sName`, `class`,`status`, `parent`, `age`, `gender`) VALUES 
('ST1013', 'Kawooya Frank', 'S.1', 'boarding', 'nalubega', 13, 'MALE');

-- --------------------------------------------------------

-- 
-- Table structure for table `results`
-- 

CREATE TABLE `results` (
  `rID` int(10) NOT NULL auto_increment,
  `sID` varchar(10) NOT NULL,
  `sCode` varchar(10) NOT NULL,
  `assess_type` varchar(25) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `term` varchar(25) NOT NULL,
  `remarks` varchar(10) NOT NULL,
  `class` varchar(10) NOT NULL,
  PRIMARY KEY  (`rID`),
  KEY `sID` (`sID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=388 ;

-- 
-- Dumping data for table `results`
-- 

INSERT INTO `results` (`rID`, `sID`, `sCode`, `assess_type`, `marks`, `term`, `remarks`, `class`) VALUES 

(1, 'ST1013', 'ENG', 'E.O.T', '69', 'TERM III/2020', 'GOOD WORK', 'S.1');
-- --------------------------------------------------------

-- 
-- Table structure for table `subject`
-- 

CREATE TABLE `subject` (
  `id` int(5) NOT NULL auto_increment,
  `sCode` varchar(15) NOT NULL,
  `sName` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `sCode` (`sCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `subject`
-- 

INSERT INTO `subject` (`id`, `sCode`, `sName`) VALUES 
(1, 'ENG', 'ENGLISH'),
(2, 'MATH', 'MATHEMATICS'),
(3, 'PHY', 'PHYSICS'),
(4, 'BIO', 'BIOLOGY'),
(5, 'CHEM', 'CHEMISTRY'),
(6, 'CRE', 'CHRISTIAN RELIGIOUS EDUCATION'),
(7, 'LUG', 'LUGANDA'),
(8, 'KIS', 'KISWALI'),
(9, 'FRE', 'FRENCH'),
(10, 'ACC', 'ACCOUNTS'),
(11, 'COM', 'COMMERCE'),
(12, 'ART', 'ART');

-- --------------------------------------------------------

-- 
-- Table structure for table `teacher`
-- 

CREATE TABLE `teacher` (
  `Full_Name` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Contact` int(18) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY  (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `teacher`
-- 

INSERT INTO `teacher` (`Full_Name`, `Address`, `Contact`, `Email`, `User_type`, `user_name`, `password`) VALUES 
('JANE NAMALA', 'KATWE', 78564343, 'ASAD@GMAIL.COM', 'Teacher', 'JANE', '1234');


-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `Full_Name` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Contact` int(18) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY  (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` (`Full_Name`, `Address`, `Contact`, `Email`, `User_type`, `user_name`, `password`) VALUES 
('Super Admin', 'kampala', 755218343, 'admin@orms.ug', 'Administrator', 'super admin', '12345');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `fees`
-- 
ALTER TABLE `fees`
  ADD CONSTRAINT `fees_ibfk_1` FOREIGN KEY (`pID`) REFERENCES `student` (`sID`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `student`
-- 
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `parent` (`user_name`);

-- 
-- Constraints for table `results`
-- 
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `student` (`sID`) ON DELETE CASCADE ON UPDATE CASCADE;

-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2021 at 10:47 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `mca_dept`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `course` varchar(15) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `enrollno` varchar(10) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `admno` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `aadhar` varchar(14) NOT NULL,
  `address` varchar(150) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `examform` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `course`, `sem`, `enrollno`, `rollno`, `admno`, `name`, `fname`, `dob`, `gender`, `email`, `mobile`, `cat`, `aadhar`, `address`, `password`, `photo`, `examform`, `date`) VALUES
(2, 'MCA', 'Semester 4', 'NN-00517', '18663', 'ADM1083000', 'PAWANESH VISHWAKARMA', 'SURESH PRASAD', '1999-06-08', 'Male', 'pk75.info@gmail.com', '9839505787', 'OBC', '487604611547', 'Naka Faizabad', 'Pawanesh99@', 'upload/BHUPIC.jpg', '', '2021-07-05');

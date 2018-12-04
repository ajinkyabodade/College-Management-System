-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2016 at 12:32 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegemanagement`
--
CREATE DATABASE IF NOT EXISTS `collegemanagement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `collegemanagement`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `year` varchar(20) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `attend` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `branch`, `year`, `subject`, `date`, `rollno`, `attend`) VALUES
(440, 'Civil Engineering', 'Second Year', 'ED', '1997-11-19', '1', 'p'),
(441, 'Civil Engineering', 'Second Year', 'ED', '1997-11-19', '1', 'p'),
(442, 'Civil Engineering', 'Second Year', 'ED', '1997-11-19', '1', 'p'),
(443, 'Civil Engineering', 'Second Year', 'ED', '1997-11-19', '4', 'p'),
(444, 'Civil Engineering', 'Second Year', 'ED', '1997-11-19', '5', 'p'),
(445, 'Civil Engineering', 'Second Year', 'ED', '1997-11-19', '6', 'p'),
(446, 'Civil Engineering', 'Second Year', 'ED', '1997-11-19', '7', 'p'),
(447, 'Civil Engineering', 'Second Year', 'ED', '1997-11-19', '8', 'p'),
(448, 'Computer Science', 'First Year', 'PM', '8798-12-04', '1', 'p'),
(449, 'Computer Science', 'First Year', 'PM', '8798-12-04', '2', 'p'),
(450, 'Computer Science', 'First Year', 'PM', '8798-12-04', '5', 'p'),
(451, 'Computer Science', 'First Year', 'PM', '8798-12-04', '50', 'p'),
(452, 'Computer Science', 'First Year', 'PM', '8798-12-04', '1', 'p'),
(453, 'Computer Science', 'First Year', 'PM', '8798-12-04', '2', 'p'),
(454, 'Computer Science', 'First Year', 'PM', '8798-12-04', '5', 'p'),
(455, 'Computer Science', 'First Year', 'PM', '8798-12-04', '50', 'p'),
(456, 'Computer Science', 'First Year', 'ED', '1997-11-19', '1', 'p'),
(457, 'Computer Science', 'First Year', 'ED', '1997-11-19', '2', 'p'),
(458, 'Computer Science', 'First Year', 'ED', '1997-11-19', '3', 'p'),
(459, 'Computer Science', 'First Year', 'ED', '1997-11-19', '4', 'p'),
(460, 'Computer Science', 'First Year', 'ED', '1997-11-19', '5', 'p'),
(461, 'Computer Science', 'First Year', 'ED', '1997-11-19', '6', 'p'),
(462, 'Computer Science', 'First Year', 'ED', '1997-11-19', '7', 'p'),
(463, 'Computer Science', 'First Year', 'ED', '1997-11-19', '8', 'p'),
(464, 'Computer Science', 'First Year', 'ED', '1997-11-19', '9', 'p'),
(465, 'Computer Science', 'First Year', 'ED', '1997-11-19', '10', 'p'),
(466, 'Computer Science', 'First Year', 'ED', '1997-11-19', '11', 'p'),
(467, 'Computer Science', 'First Year', 'ED', '1997-11-19', '12', 'p'),
(468, 'Computer Science', 'First Year', 'ED', '1997-11-19', '13', 'p'),
(469, 'Computer Science', 'First Year', 'ED', '1997-11-19', '14', 'p'),
(470, 'Computer Science', 'First Year', 'ED', '1997-11-19', '15', 'p'),
(471, 'Computer Science', 'First Year', 'ED', '1997-11-19', '1', 'p'),
(472, 'Computer Science', 'First Year', 'ED', '1997-11-19', '2', 'p'),
(473, 'Computer Science', 'First Year', 'ED', '1997-11-19', '3', 'p'),
(474, 'Computer Science', 'First Year', 'ED', '1997-11-19', '4', 'p'),
(475, 'Computer Science', 'First Year', 'ED', '1997-11-19', '5', 'p'),
(476, 'Computer Science', 'First Year', 'ED', '1997-11-19', '6', 'p'),
(477, 'Computer Science', 'First Year', 'ED', '1997-11-19', '7', 'p'),
(478, 'Computer Science', 'First Year', 'ED', '1997-11-19', '8', 'p'),
(479, 'Computer Science', 'First Year', 'ED', '1997-11-19', '9', 'p'),
(480, 'Computer Science', 'First Year', 'ED', '1997-11-19', '10', 'p'),
(481, 'Computer Science', 'First Year', 'ED', '1997-11-19', '11', 'p'),
(482, 'Computer Science', 'First Year', 'ED', '1997-11-19', '12', 'p'),
(483, 'Computer Science', 'First Year', 'ED', '1997-11-19', '13', 'p'),
(484, 'Computer Science', 'First Year', 'ED', '1997-11-19', '14', 'p'),
(485, 'Computer Science', 'First Year', 'ED', '1997-11-19', '15', 'p'),
(486, 'Computer Science', 'First Year', '516', '1919-12-19', '1', 'p'),
(487, 'Computer Science', 'First Year', '516', '1919-12-19', '2', 'p'),
(488, 'Computer Science', 'First Year', '516', '1919-12-19', '3', 'p'),
(489, 'Computer Science', 'First Year', '516', '1919-12-19', '4', 'p'),
(490, 'Computer Science', 'First Year', '516', '1919-12-19', '5', 'p'),
(491, 'Computer Science', 'First Year', '516', '1919-12-19', '6', 'p'),
(492, 'Computer Science', 'First Year', '516', '1919-12-19', '7', 'p'),
(493, 'Computer Science', 'First Year', '516', '1919-12-19', '8', 'p'),
(494, 'Computer Science', 'First Year', 'ED', '1919-11-09', '1', 'p'),
(495, 'Computer Science', 'First Year', 'ED', '1919-11-09', '4', 'p'),
(496, 'Computer Science', 'First Year', 'ED', '1919-11-09', '8', 'p'),
(497, 'Computer Science', 'First Year', 'ED', '1919-11-09', '12', 'p'),
(498, 'Computer Science', 'First Year', 'ED', '1919-11-09', '14', 'p'),
(499, 'Computer Science', 'First Year', 'ED', '1919-11-09', '18', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `teachern` varchar(30) NOT NULL,
  `sub` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `q1` varchar(30) NOT NULL,
  `q2` varchar(30) NOT NULL,
  `q3` varchar(30) NOT NULL,
  `q4` varchar(30) NOT NULL,
  `q5` varchar(30) NOT NULL,
  `q6` varchar(30) NOT NULL,
  `q7` varchar(30) NOT NULL,
  `q8` varchar(30) NOT NULL,
  `q9` varchar(30) NOT NULL,
  `q10` varchar(30) NOT NULL,
  `q11` varchar(30) NOT NULL,
  `q12` varchar(30) NOT NULL,
  `q13` varchar(30) NOT NULL,
  `q14` varchar(30) NOT NULL,
  `q15` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `branch`, `year`, `teachern`, `sub`, `date`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`) VALUES
(1, 'Computer Science', 'Second Year', 'AOB', 'DS', '', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never'),
(2, 'Computer Science', 'Second Year', 'AOB', 'DS', '', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never'),
(3, 'Computer Science', 'First Year', 'AOB', 'DS', '', 'Always', 'Rarely', 'Always', 'Never', 'Sometime', 'Never', 'Rarely', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never'),
(4, 'Computer Science', 'First Year', 'AOB', 'DS', '1211-12-12', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never'),
(5, 'Computer Science', 'First Year', 'AOB', 'm3', '91919-12-09', 'Rarely', 'Rarely', 'Sometime', 'Rarely', 'Sometime', 'Rarely', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never', 'Never');

-- --------------------------------------------------------

--
-- Table structure for table `flogin`
--

CREATE TABLE `flogin` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flogin`
--

INSERT INTO `flogin` (`id`, `userid`, `password`) VALUES
(2, 'plitstaff', 'staff@plit');

-- --------------------------------------------------------

--
-- Table structure for table `newsandevents`
--

CREATE TABLE `newsandevents` (
  `id` int(11) NOT NULL,
  `ns` varchar(1000) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsandevents`
--

INSERT INTO `newsandevents` (`id`, `ns`, `date`) VALUES
(1, 'Pankaja Laddhad Institute Of Technology And Management Studies ....... News And Events Goes Here.....', ''),
(2, 'Ajinkya Pandurang Bodade', '1997-11-19'),
(3, 'Ajinkya Pandurang Bodade', '1997-11-19'),
(4, 'Ajinkya', '1997-11-19'),
(5, 'asdasd', '46546-06-05'),
(6, 'asdasd', '46546-06-05'),
(7, 'AJikjayskalbsbdlas', '100016-01-01'),
(8, 'AJikjayskalbsbdlas', '100016-01-01'),
(9, 'zsf', '0055-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE `plogin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`id`, `username`, `password`) VALUES
(1, 'principal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `emailid` varchar(80) NOT NULL,
  `linkinid` varchar(50) NOT NULL,
  `studentid` varchar(30) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `branch`, `year`, `emailid`, `linkinid`, `studentid`, `rollno`, `dob`, `address`, `mobno`, `username`, `password`) VALUES
(2, 'Ajinkya Pandurang Bodade', 'Computer Science', 'Second Year', 'bodadeajinkya@gmail.com', 'ajinkyabodade.3', 'PBE1564687', '01', '1997-11-19', 'Shri Nagar', '9527491071', 'ajinkyabo', '123'),
(3, 'Ajinkya Pandurang Bodade', 'Computer Science', 'Second Year', 'bodadeajinkya@gmail.com', 'ajinkyabodade.3', 'PBE1564687', '01', '1997-11-19', 'Shri Nagar', '9422881102', 'ajinkyabo', '123');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(11) NOT NULL,
  `rs` varchar(1000) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id`, `rs`, `date`) VALUES
(1, 'optical mouse scroll wheel optical sensor comfort griip sleek design', '0000-00-00'),
(2, 'asfasfasas a a f as a af afffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tgform`
--

CREATE TABLE `tgform` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `name` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `linkid` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `add0` varchar(60) NOT NULL,
  `mobs` varchar(12) NOT NULL,
  `mobf` varchar(12) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `padd` varchar(60) NOT NULL,
  `year1` varchar(10) NOT NULL,
  `per1` varchar(10) NOT NULL,
  `spass1` varchar(50) NOT NULL,
  `year2` varchar(10) NOT NULL,
  `per2` varchar(10) NOT NULL,
  `spass2` varchar(60) NOT NULL,
  `year3` varchar(10) NOT NULL,
  `per3` varchar(10) NOT NULL,
  `spass3` varchar(60) NOT NULL,
  `year4` varchar(10) NOT NULL,
  `per4` varchar(10) NOT NULL,
  `spass4` varchar(60) NOT NULL,
  `year5` varchar(10) NOT NULL,
  `per5` varchar(10) NOT NULL,
  `spass5` varchar(60) NOT NULL,
  `year6` varchar(10) NOT NULL,
  `per6` varchar(10) NOT NULL,
  `spass6` varchar(60) NOT NULL,
  `year7` varchar(10) NOT NULL,
  `per7` varchar(10) NOT NULL,
  `spass7` varchar(60) NOT NULL,
  `year8` varchar(10) NOT NULL,
  `per8` varchar(10) NOT NULL,
  `spass8` varchar(60) NOT NULL,
  `year9` varchar(10) NOT NULL,
  `per9` varchar(10) NOT NULL,
  `spass9` varchar(50) NOT NULL,
  `year10` varchar(10) NOT NULL,
  `per10` varchar(10) NOT NULL,
  `spass10` varchar(50) NOT NULL,
  `year11` varchar(10) NOT NULL,
  `per11` varchar(10) NOT NULL,
  `spass11` varchar(50) NOT NULL,
  `fedu` varchar(20) NOT NULL,
  `focc` varchar(20) NOT NULL,
  `medu` varchar(20) NOT NULL,
  `mocc` varchar(20) NOT NULL,
  `inc` varchar(20) NOT NULL,
  `fpro` varchar(20) NOT NULL,
  `yer12` varchar(10) NOT NULL,
  `roll1` varchar(10) NOT NULL,
  `tgn` varchar(30) NOT NULL,
  `yer13` varchar(10) NOT NULL,
  `roll2` varchar(10) NOT NULL,
  `tgn1` varchar(30) NOT NULL,
  `yer14` varchar(10) NOT NULL,
  `roll3` varchar(10) NOT NULL,
  `tgn2` varchar(30) NOT NULL,
  `yer15` varchar(10) NOT NULL,
  `roll4` varchar(10) NOT NULL,
  `tgn3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tgform`
--

INSERT INTO `tgform` (`id`, `image`, `name`, `branch`, `year`, `emailid`, `linkid`, `dob`, `add0`, `mobs`, `mobf`, `pname`, `padd`, `year1`, `per1`, `spass1`, `year2`, `per2`, `spass2`, `year3`, `per3`, `spass3`, `year4`, `per4`, `spass4`, `year5`, `per5`, `spass5`, `year6`, `per6`, `spass6`, `year7`, `per7`, `spass7`, `year8`, `per8`, `spass8`, `year9`, `per9`, `spass9`, `year10`, `per10`, `spass10`, `year11`, `per11`, `spass11`, `fedu`, `focc`, `medu`, `mocc`, `inc`, `fpro`, `yer12`, `roll1`, `tgn`, `yer13`, `roll2`, `tgn1`, `yer14`, `roll3`, `tgn2`, `yer15`, `roll4`, `tgn3`) VALUES
(1, '', 'Ajinkya', 'Computer Science    ', 'First Year', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'gg', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'gg', 'gg', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', '', 'g', 'g', 'g', 'g', 'g', 'g', ' < 1 Lakh', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g'),
(2, '', 'e', 'Electrical Engineeri', 'First Year', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', ' < 1 Lakh', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(3, '', 'Ajinkya', 'Computer Science ', 'First Year', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'gg', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'gg', 'gg', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', '', 'g', 'g', 'g', 'g', 'g', 'g', ' < 1 Lakh', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g', 'g'),
(4, '', 'Ajinkya Bodade', 'q ', '4', '4', '4', '4', '4', '4', '4', '4', '44', '4', '4', '44', '4', '4', '4', '44', '4', '4', '44', '4', '4', '4', '44', '4', '4', '44', '4', '4', '4', '4', '44', '4', '4', '4', '4', '4', '4', '44', '4', '4', '4', '44', '4', '4', '4', 'q', '4', '44', '4', '4', '4', '4', '44', '4', '4', '4', '44', '4', '4', '4'),
(5, '', 'jj', 'Computer Science', 'First Year', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'jj', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', ' < 1 Lakh', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j', 'j'),
(6, '', 'aAaAa', 'Computer Science', 'First Year', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', ' < 1 Lakh', 'a', 'a', 'a', 'a', 'aaaaaa', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `unittest`
--

CREATE TABLE `unittest` (
  `id` int(11) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `utno` varchar(10) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `sub1` varchar(40) NOT NULL,
  `sub1o` varchar(40) NOT NULL,
  `sub2` varchar(40) NOT NULL,
  `sub2o` varchar(40) NOT NULL,
  `sub3` varchar(40) NOT NULL,
  `sub3o` varchar(40) NOT NULL,
  `sub4` varchar(40) NOT NULL,
  `sub4o` varchar(40) NOT NULL,
  `sub5` varchar(40) NOT NULL,
  `sub5o` varchar(40) NOT NULL,
  `sub6` varchar(40) NOT NULL,
  `sub6o` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unittest`
--

INSERT INTO `unittest` (`id`, `branch`, `sem`, `utno`, `rollno`, `sub1`, `sub1o`, `sub2`, `sub2o`, `sub3`, `sub3o`, `sub4`, `sub4o`, `sub5`, `sub5o`, `sub6`, `sub6o`) VALUES
(64, 'Computer Science', 'First Semester', '1', '1', '1', '12', '12', '12', '12', '12', '12', '21', '21', '21', '21', '21'),
(65, 'Computer Science', 'First Semester', '1', '21', '21', '21', '21', '21', '21', '21', '2', '12', '12', '12', '12', '12'),
(66, 'Computer Science', 'First Semester', '1', '12', '12', '12', '12', '12', '1', '21', '21', '21', '2', '12', '12', '12'),
(67, 'Computer Science', 'First Semester', '1', '12', '12', '12', '12', '1', '21', '21', '21', '21', '2', '12', '12', '1'),
(68, 'Computer Science', 'First Semester', '1', '21', '21', '2', '1', '211', '21', '21', '21', '21', '21', '2', '121', '21'),
(69, 'Computer Science', 'First Semester', '2', '1', '', '654', '65', '465', '465', '46', '54', '654', '65', '465', '45', '45'),
(70, 'Computer Science', 'First Semester', '2', '4', '54', '5', '45', '45', '4', '5', '45', '45', '4', '54', '5', '4'),
(71, 'Computer Science', 'First Semester', '2', '1', '', '654', '65', '465', '465', '46', '54', '654', '65', '465', '45', '45'),
(72, 'Computer Science', 'First Semester', '2', '4', '54', '5', '45', '45', '4', '5', '45', '45', '4', '54', '5', '4'),
(73, 'Computer Science', 'First Semester', '1', '1', '', '64', '6', '46', '46', '4', '64', '6', '4', '64', '6', '4'),
(74, 'Computer Science', 'First Semester', '1', '64', '6', '46', '4', '6', '46', '4', '64', '6', '46', '46', '4', '64'),
(75, 'Computer Science', 'First Semester', '1', '6', '46', '4', '64', '', '', '', '', '', '', '', '', ''),
(76, 'Computer Science', 'First Semester', '1', '1', '', '64', '6', '46', '46', '4', '64', '6', '4', '64', '6', '4'),
(77, 'Computer Science', 'First Semester', '1', '64', '6', '46', '4', '6', '46', '4', '64', '6', '46', '46', '4', '64'),
(78, 'Computer Science', 'First Semester', '1', '6', '46', '4', '64', '', '', '', '', '', '', '', '', ''),
(79, 'Computer Science', 'First Semester', '1', '1', '', '64', '6', '46', '46', '4', '64', '6', '4', '64', '6', '4'),
(80, 'Computer Science', 'First Semester', '1', '64', '6', '46', '4', '6', '46', '4', '64', '6', '46', '46', '4', '64'),
(81, 'Computer Science', 'First Semester', '1', '6', '46', '4', '64', '', '', '', '', '', '', '', '', ''),
(82, 'Computer Science', 'First Semester', '1', '1', '', '5', '56', '65', '65', '65', '65', '65', '656', '565', '65', '65'),
(83, 'Computer Science', 'First Semester', '1', '65', '65', '65', '65', '65', '66', '65', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flogin`
--
ALTER TABLE `flogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsandevents`
--
ALTER TABLE `newsandevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tgform`
--
ALTER TABLE `tgform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unittest`
--
ALTER TABLE `unittest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `flogin`
--
ALTER TABLE `flogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsandevents`
--
ALTER TABLE `newsandevents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `plogin`
--
ALTER TABLE `plogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tgform`
--
ALTER TABLE `tgform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `unittest`
--
ALTER TABLE `unittest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'collegemanagement', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["attendance","feedback","flogin","newsandevents","plogin","student","suggestion","tgform1","unittest"],"table_structure[]":["attendance","feedback","flogin","newsandevents","plogin","student","suggestion","tgform1","unittest"],"table_data[]":["attendance","feedback","flogin","newsandevents","plogin","student","suggestion","tgform1","unittest"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(2, 'root', 'database', 'college', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["attendance","feedback","flogin","newsandevents","plogin","student","suggestion","tgform1","unittest"],"table_structure[]":["attendance","feedback","flogin","newsandevents","plogin","student","suggestion","tgform1","unittest"],"table_data[]":["attendance","feedback","flogin","newsandevents","plogin","student","suggestion","tgform1","unittest"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(3, 'root', 'server', 'collegemanagement', '{"quick_or_custom":"quick","what":"sql","db_select[]":["collegemanagement","phpmyadmin","register","shoppingsite","test","treasurer"],"output_format":"sendit","filename_template":"@SERVER@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","yaml_structure_or_data":"data","":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_drop_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"collegemanagement","table":"flogin"},{"db":"collegemanagement","table":"student"},{"db":"collegemanagement","table":"plogin"},{"db":"collegemanagement","table":"tgform"},{"db":"collegemanagement","table":"feedback"},{"db":"collegemanagement","table":"newsandevents"},{"db":"collegemanagement","table":"tgform1"},{"db":"treasurer","table":"estimate_table"},{"db":"collegemanagement","table":"suggestion"},{"db":"collegemanagement","table":"attendance"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'collegemanagement', 'attendance', '[]', '2016-08-18 05:01:41'),
('root', 'collegemanagement', 'student', '{"sorted_col":"`student`.`password` ASC"}', '2016-09-09 08:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-08-14 15:09:26', '{"collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `register`
--
CREATE DATABASE IF NOT EXISTS `register` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `register`;

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `submittedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(4, 'ajinkya', 'bodadeajinkya@gmail.com', '123', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
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
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;--
-- Database: `shoppingsite`
--
CREATE DATABASE IF NOT EXISTS `shoppingsite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shoppingsite`;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `Name1` varchar(50) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pincode` int(50) NOT NULL,
  `MobileNo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `Name1`, `EmailId`, `Password`, `Address`, `City`, `Pincode`, `MobileNo`) VALUES
(1, 'Ajinkya', 'bodadeajinkya@gmail.com', '456', 'Shri Nagar', 'Buldana', 443001, 942288110),
(2, 'anand', 'bodade@gmail.com', '123', 'Shri Nagar', 'Buldana', 443009, 942),
(3, 'ankit', 'bodade@gmail.com', '123456', 'ram Nagar', 'Buldana', 443001, 5676),
(4, 'sachin', 'sachin@gmail.com', '45645', 'om Nagar', 'Buldana', 443001, 456785785),
(5, '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `EmailId`, `Password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `treasurer`
--
CREATE DATABASE IF NOT EXISTS `treasurer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `treasurer`;

-- --------------------------------------------------------

--
-- Table structure for table `estimate_table`
--

CREATE TABLE `estimate_table` (
  `id` int(11) NOT NULL,
  `event` varchar(50) NOT NULL,
  `allo_budget` int(50) NOT NULL,
  `use_amount` int(50) NOT NULL,
  `items` varchar(1000) NOT NULL,
  `overuse` int(50) NOT NULL,
  `finial_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estimate_table`
--
ALTER TABLE `estimate_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estimate_table`
--
ALTER TABLE `estimate_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

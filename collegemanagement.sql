-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 02:47 PM
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
(499, 'Computer Science', 'First Year', 'ED', '1919-11-09', '18', 'p'),
(500, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '1', 'p'),
(501, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '2', 'p'),
(502, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '3', 'p'),
(503, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '4', 'p'),
(504, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '5', 'p'),
(505, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '6', 'a'),
(506, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '7', 'a'),
(507, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '8', 'p'),
(508, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '9', 'p'),
(509, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '10', 'a'),
(510, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '11', 'p'),
(511, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '12', 'p'),
(512, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '13', 'p'),
(513, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '14', 'p'),
(514, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '15', 'a'),
(515, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '16', 'p'),
(516, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '17', 'a'),
(517, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '18', 'p'),
(518, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '19', 'p'),
(519, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '20', 'p'),
(520, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '21', 'p'),
(521, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '22', 'p'),
(522, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '23', 'p'),
(523, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '24', 'p'),
(524, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '25', 'p'),
(525, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '26', 'p'),
(526, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '27', 'p'),
(527, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '28', 'p'),
(528, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '29', 'p'),
(529, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '30', 'p'),
(530, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '31', 'p'),
(531, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '32', 'p'),
(532, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '33', 'p'),
(533, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '34', 'p'),
(534, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '35', 'p'),
(535, 'Computer Science', 'Second Year', 'pm', '2016-09-09', '36', 'p');

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
(1, 'All Student Are informed to refill their scholership forms', '09/09/2016'),
(10, 'All Student are informed that there will be holiday  on 09/09/2016 on occasion of gauri poojan', '09/09/2016'),
(11, 'news and events goes here..........', '2016-09-12');

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
(1, 'Sir we request you to avail the wifi facility in campus.', '2016-09-09'),
(2, 'sir we request you to reopen the college canteen ', '2016-09-09');

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
(7, '', 'Ajinkya Pandurang Bodade', 'Computer Science', 'First Year', 'bodadeajinkya@gmail.com', '', '11/19/1997', 'Ashtavinayak Nagar', '9146709417', '9422881102', 'Pandurang Ninaji Bodade', 'Ashtavinayak Nagar', '2013', '80', '', '2015', '70', '', '', '', '', '2016', '66', '', '2016', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Graduate', 'Govt. Servent Z.P Of', '12th ', 'Housewife', '> 2 Lakh', 'College Management', '2015', '46', 'A.G.Raje', '2016', '01', 'Priti Wadal', '', '', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=536;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `unittest`
--
ALTER TABLE `unittest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2021 at 01:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `ID` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`ID`, `username`, `password`, `contact`) VALUES
(1, 'shiva', 'shiva', 7840921025);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Code` int(10) NOT NULL,
  `Bookname` varchar(50) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Publication` varchar(50) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `copies` int(10) DEFAULT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Code`, `Bookname`, `Author`, `Publication`, `Category`, `copies`, `book`) VALUES
(10001, 'Effective Java', 'JoshuaBloch', 'PrenticeHall PTR', 'Computer', 8, 'java.jpeg'),
(10002, 'Origin Of Species', 'Charles Darwin', 'london', 'Science', 1, 'Origin_of_Species.jpg'),
(10004, 'Agri_eco', 's j ghule', ' v j publication', 'horticulture', 5, 'b2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Booksissued`
--

CREATE TABLE `Booksissued` (
  `PRN` int(10) NOT NULL,
  `Code` int(10) NOT NULL,
  `Issued Date` date NOT NULL,
  `Return Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Booksissued`
--

INSERT INTO `Booksissued` (`PRN`, `Code`, `Issued Date`, `Return Date`) VALUES
(1021901115, 10001, '2021-05-25', '2021-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `BooksManagement`
--

CREATE TABLE `BooksManagement` (
  `Code` int(10) NOT NULL,
  `B_id` int(10) NOT NULL,
  `Issuedate` date NOT NULL,
  `Returndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BooksManagement`
--

INSERT INTO `BooksManagement` (`Code`, `B_id`, `Issuedate`, `Returndate`) VALUES
(10001, 1021901115, '2021-05-25', '2021-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `PRN` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `numbooks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`PRN`, `username`, `password`, `numbooks`) VALUES
(1021901112, 'Akansha1212', 'AB123456', 0),
(1021901111, 'pankaj', 'pm1212', 0),
(1021901115, 'Aniket', 'AS1212', 1);

-- --------------------------------------------------------

--
-- Table structure for table `requestbook`
--

CREATE TABLE `requestbook` (
  `sid` int(10) NOT NULL,
  `bid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservebook`
--

CREATE TABLE `reservebook` (
  `s_id` int(10) NOT NULL,
  `b_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `PRN` int(10) NOT NULL,
  `Student Name` varchar(50) DEFAULT NULL,
  `Class` varchar(50) DEFAULT NULL,
  `Faculty` varchar(50) DEFAULT NULL,
  `contact` bigint(13) DEFAULT NULL,
  `Year_of_Admission` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`PRN`, `Student Name`, `Class`, `Faculty`, `contact`, `Year_of_Admission`) VALUES
(1021901111, 'Pankaj Musale', 'FyABM', 'Agriculture', 7894566123, 2021),
(1021901112, 'Akansha Bhosale', 'FyBSc ', 'Science', 9872536462, 2020),
(1021901113, 'Abhishek Patel', 'FyBCom', 'Commerce', 6525151252, 2020),
(1021901114, 'Suraj Mate', 'FyABM', 'Agriculture', 9628172263, 2021),
(1021901115, 'Aniket sonawane', 'FyBSc', 'Science', 2548939875, 2020),
(1021901116, 'Vaibhav Patil', 'First Year', 'Engineering', 8756942634, 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `Booksissued`
--
ALTER TABLE `Booksissued`
  ADD KEY `stud` (`PRN`),
  ADD KEY `book` (`Code`);

--
-- Indexes for table `BooksManagement`
--
ALTER TABLE `BooksManagement`
  ADD KEY `foreign key` (`Code`),
  ADD KEY `student` (`B_id`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD KEY `PRN` (`PRN`) USING BTREE;

--
-- Indexes for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD KEY `b` (`bid`),
  ADD KEY `s` (`sid`);

--
-- Indexes for table `reservebook`
--
ALTER TABLE `reservebook`
  ADD KEY `st` (`s_id`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`PRN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `PRN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1021901118;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Booksissued`
--
ALTER TABLE `Booksissued`
  ADD CONSTRAINT `book` FOREIGN KEY (`Code`) REFERENCES `book` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stud` FOREIGN KEY (`PRN`) REFERENCES `Student` (`PRN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `BooksManagement`
--
ALTER TABLE `BooksManagement`
  ADD CONSTRAINT `student` FOREIGN KEY (`B_id`) REFERENCES `Student` (`PRN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Login`
--
ALTER TABLE `Login`
  ADD CONSTRAINT `Login_ibfk_1` FOREIGN KEY (`PRN`) REFERENCES `Student` (`PRN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requestbook`
--
ALTER TABLE `requestbook`
  ADD CONSTRAINT `b` FOREIGN KEY (`bid`) REFERENCES `book` (`Code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `s` FOREIGN KEY (`sid`) REFERENCES `Student` (`PRN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservebook`
--
ALTER TABLE `reservebook`
  ADD CONSTRAINT `st` FOREIGN KEY (`s_id`) REFERENCES `Student` (`PRN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

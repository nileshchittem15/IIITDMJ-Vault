-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2014 at 08:58 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iiitdmjv`
--
CREATE DATABASE IF NOT EXISTS `iiitdmjv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `iiitdmjv`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `bal` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `password`, `bal`) VALUES
('ACAD', 'acad', 350),
('admin', 'admin', 0),
('BUS', 'bus', 0),
('HOSTEL', 'hostel', 800),
('lib', 'lib', 38),
('shirts', 'shirts', 2050),
('workshop', 'workshop', 3950);

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE IF NOT EXISTS `app` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rollno` int(7) NOT NULL,
  `fora` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(10) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `Hall` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rollno` (`rollno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`id`, `rollno`, `fora`, `reason`, `date`, `category`, `phone_no`, `room_no`, `Hall`) VALUES
(1, 2012001, 'LIbray Dues', 'Income ax', '2014-05-05', 'General', 2147483647, 'H-156', '4'),
(2, 2012001, 'uiusfh', 'jhbxfkb', '2014-05-05', 'sdgsdv', 96304562, 'sdgvsd', 'vsdv'),
(3, 2012035, 'Fee Structures', 'Income tax', '2014-05-05', 'OC', 2147483647, 'H-204', '4'),
(4, 2012001, 'fee structure', 'For loan', '2014-05-05', 'oc', 2147483647, 'd-225', '4'),
(5, 2012018, 'edfed', 'b', '2014-05-05', 'dw', 1111111111, 'wd', 'dwsd'),
(6, 2012005, 'Fee Structure', 'Income Tax', '2014-05-05', 'General', 2147483647, 'A-204', '4'),
(7, 2012005, 'fee structure', 'Loan', '2014-05-05', 'oc', 2147483647, 'h-203', '4');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `ROLLNO` int(11) NOT NULL,
  `MONTH` int(11) NOT NULL,
  `P_DAYS` int(11) NOT NULL,
  `A_DAYS` int(11) NOT NULL,
  `T_DAYS` int(11) NOT NULL,
  `DUE` int(11) NOT NULL,
  `PAID` varchar(4) NOT NULL DEFAULT 'NO',
  PRIMARY KEY (`ROLLNO`,`MONTH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ROLLNO`, `MONTH`, `P_DAYS`, `A_DAYS`, `T_DAYS`, `DUE`, `PAID`) VALUES
(2012001, 1, 30, 1, 31, 0, 'YES'),
(2012001, 3, 29, 2, 31, 0, 'YES'),
(2012001, 4, 25, 5, 30, 0, 'YES'),
(2012002, 1, 28, 3, 31, 75, 'NO'),
(2012002, 3, 28, 3, 31, 75, 'NO'),
(2012002, 4, 28, 2, 30, 50, 'NO'),
(2012003, 1, 30, 1, 31, 25, 'NO'),
(2012003, 3, 29, 2, 31, 50, 'NO'),
(2012003, 4, 25, 5, 30, 125, 'NO'),
(2012004, 1, 30, 1, 31, 25, 'NO'),
(2012004, 3, 30, 1, 31, 25, 'NO'),
(2012004, 4, 29, 1, 30, 25, 'NO'),
(2012005, 1, 30, 1, 31, 0, 'YES'),
(2012005, 4, 26, 4, 30, 0, 'YES'),
(2012006, 1, 28, 3, 31, 75, 'NO'),
(2012006, 3, 30, 1, 31, 25, 'NO'),
(2012006, 4, 28, 2, 30, 50, 'NO'),
(2012007, 1, 28, 3, 31, 75, 'NO'),
(2012007, 4, 24, 6, 30, 150, 'NO'),
(2012008, 1, 27, 4, 31, 100, 'NO'),
(2012008, 4, 26, 4, 30, 100, 'NO'),
(2012009, 1, 25, 6, 31, 150, 'NO'),
(2012009, 3, 30, 1, 31, 25, 'NO'),
(2012009, 4, 29, 1, 30, 25, 'NO'),
(2012010, 1, 28, 3, 31, 75, 'NO'),
(2012010, 3, 27, 4, 31, 100, 'NO'),
(2012010, 4, 26, 4, 30, 100, 'NO'),
(2012011, 1, 29, 2, 31, 50, 'NO'),
(2012011, 3, 29, 2, 31, 50, 'NO'),
(2012011, 4, 29, 1, 30, 25, 'NO'),
(2012012, 1, 28, 3, 31, 75, 'NO'),
(2012012, 3, 28, 3, 31, 75, 'NO'),
(2012013, 3, 27, 4, 31, 100, 'NO'),
(2012013, 4, 27, 3, 30, 75, 'NO'),
(2012014, 1, 30, 1, 31, 25, 'NO'),
(2012014, 3, 27, 4, 31, 100, 'NO'),
(2012014, 4, 26, 4, 30, 100, 'NO'),
(2012015, 3, 28, 3, 31, 75, 'NO'),
(2012015, 4, 27, 3, 30, 75, 'NO'),
(2012016, 1, 28, 3, 31, 75, 'NO'),
(2012016, 3, 27, 4, 31, 100, 'NO'),
(2012017, 1, 30, 1, 31, 25, 'NO'),
(2012017, 3, 28, 3, 31, 75, 'NO'),
(2012017, 4, 28, 2, 30, 50, 'NO'),
(2012018, 1, 30, 1, 31, 25, 'NO'),
(2012018, 4, 28, 2, 30, 50, 'NO'),
(2012019, 3, 30, 1, 31, 25, 'NO'),
(2012019, 4, 28, 2, 30, 50, 'NO'),
(2012020, 3, 28, 3, 31, 75, 'NO'),
(2012020, 4, 28, 2, 30, 50, 'NO'),
(2012021, 1, 28, 3, 31, 75, 'NO'),
(2012021, 3, 28, 3, 31, 75, 'NO'),
(2012022, 1, 30, 1, 31, 25, 'NO'),
(2012022, 3, 29, 2, 31, 50, 'NO'),
(2012022, 4, 27, 3, 30, 75, 'NO'),
(2012023, 1, 30, 1, 31, 25, 'NO'),
(2012023, 3, 29, 2, 31, 50, 'NO'),
(2012023, 4, 27, 3, 30, 75, 'NO'),
(2012024, 3, 30, 1, 31, 25, 'NO'),
(2012024, 4, 24, 6, 30, 150, 'NO'),
(2012025, 1, 28, 3, 31, 75, 'NO'),
(2012025, 3, 28, 3, 31, 75, 'NO'),
(2012025, 4, 28, 2, 30, 50, 'NO'),
(2012026, 1, 30, 1, 31, 25, 'NO'),
(2012026, 3, 30, 1, 31, 25, 'NO'),
(2012027, 1, 26, 5, 31, 125, 'NO'),
(2012028, 1, 29, 2, 31, 50, 'NO'),
(2012028, 4, 29, 1, 30, 25, 'NO'),
(2012029, 1, 30, 1, 31, 25, 'NO'),
(2012029, 3, 28, 3, 31, 75, 'NO'),
(2012029, 4, 26, 4, 30, 100, 'NO'),
(2012030, 1, 25, 6, 31, 150, 'NO'),
(2012030, 4, 26, 4, 30, 100, 'NO'),
(2012031, 1, 28, 3, 31, 75, 'NO'),
(2012031, 3, 27, 4, 31, 100, 'NO'),
(2012031, 4, 28, 2, 30, 50, 'NO'),
(2012032, 1, 30, 1, 31, 25, 'NO'),
(2012032, 4, 29, 1, 30, 25, 'NO'),
(2012033, 1, 28, 3, 31, 75, 'NO'),
(2012034, 1, 28, 3, 31, 75, 'NO'),
(2012034, 3, 30, 1, 31, 25, 'NO'),
(2012034, 4, 29, 1, 30, 25, 'NO'),
(2012035, 1, 29, 2, 31, 50, 'NO'),
(2012035, 3, 28, 3, 31, 75, 'NO'),
(2012035, 4, 28, 2, 30, 50, 'NO'),
(2012036, 1, 30, 1, 31, 25, 'NO'),
(2012036, 3, 27, 4, 31, 100, 'NO'),
(2012036, 4, 27, 3, 30, 75, 'NO'),
(2012037, 1, 30, 1, 31, 25, 'NO'),
(2012037, 3, 27, 4, 31, 100, 'NO'),
(2012037, 4, 27, 3, 30, 75, 'NO'),
(2012038, 1, 28, 3, 31, 75, 'NO'),
(2012038, 3, 25, 6, 31, 150, 'NO'),
(2012038, 4, 29, 1, 30, 25, 'NO'),
(2012039, 4, 29, 1, 30, 25, 'NO'),
(2012040, 1, 28, 3, 31, 75, 'NO'),
(2012040, 4, 29, 1, 30, 25, 'NO'),
(2012041, 1, 28, 3, 31, 75, 'NO'),
(2012041, 3, 29, 2, 31, 50, 'NO'),
(2012041, 4, 25, 5, 30, 125, 'NO'),
(2012042, 1, 30, 1, 31, 25, 'NO'),
(2012042, 3, 30, 1, 31, 25, 'NO'),
(2012042, 4, 24, 6, 30, 150, 'NO'),
(2012043, 3, 28, 3, 31, 75, 'NO'),
(2012043, 4, 23, 7, 30, 175, 'NO'),
(2012043, 5, 21, 10, 31, 250, 'NO'),
(2012044, 1, 28, 3, 31, 75, 'NO'),
(2012044, 3, 27, 4, 31, 100, 'NO'),
(2012044, 4, 24, 6, 30, 150, 'NO'),
(2012045, 1, 26, 5, 31, 125, 'NO'),
(2012045, 3, 30, 1, 31, 25, 'NO'),
(2012045, 4, 29, 1, 30, 25, 'NO'),
(2012046, 3, 29, 2, 31, 50, 'NO'),
(2012046, 4, 27, 3, 30, 75, 'NO'),
(2012047, 3, 25, 6, 31, 150, 'NO'),
(2012047, 4, 29, 1, 30, 25, 'NO'),
(2012048, 3, 27, 4, 31, 0, 'YES'),
(2012048, 4, 27, 3, 30, 0, 'YES'),
(2012049, 4, 27, 3, 30, 75, 'NO'),
(2012050, 4, 26, 4, 30, 0, 'YES');

--
-- Triggers `attendance`
--
DROP TRIGGER IF EXISTS `CALC_HDUES_UPDATE`;
DELIMITER //
CREATE TRIGGER `CALC_HDUES_UPDATE` AFTER UPDATE ON `attendance`
 FOR EACH ROW UPDATE HOSTELDUE 
SET H_DUE=H_DUE+NEW.DUE
WHERE ROLLNO=NEW.ROLLNO
//
DELIMITER ;
DROP TRIGGER IF EXISTS `CALC_HOSTEL_DUE`;
DELIMITER //
CREATE TRIGGER `CALC_HOSTEL_DUE` AFTER INSERT ON `attendance`
 FOR EACH ROW INSERT INTO HOSTELDUE
VALUES(NEW.ROLLNO,0,(NEW.A_DAYS*25))
ON DUPLICATE KEY
UPDATE H_DUE=H_DUE+(NEW.A_DAYS*25)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rollno` int(7) NOT NULL,
  `bid` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rollno` (`rollno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `rollno`, `bid`, `amount`, `date`) VALUES
(1, 2012010, 171111, 4, '2014-05-05'),
(2, 2012005, 178456, 1, '2014-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `book_due`
--

CREATE TABLE IF NOT EXISTS `book_due` (
  `rollno` int(7) NOT NULL,
  `due` int(10) NOT NULL,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_due`
--

INSERT INTO `book_due` (`rollno`, `due`) VALUES
(2012001, 21),
(2012002, 0),
(2012003, 0),
(2012004, 0),
(2012005, 57),
(2012006, 0),
(2012007, 0),
(2012008, 0),
(2012009, 0),
(2012010, 25),
(2012011, 0),
(2012012, 0),
(2012013, 0),
(2012014, 0),
(2012015, 63),
(2012016, 0),
(2012017, 0),
(2012018, 0),
(2012019, 0),
(2012020, 63),
(2012021, 0),
(2012022, 0),
(2012023, 0),
(2012024, 0),
(2012025, 13),
(2012026, 0),
(2012027, 0),
(2012028, 0),
(2012029, 0),
(2012030, 13),
(2012031, 0),
(2012032, 0),
(2012033, 0),
(2012034, 0),
(2012035, 6),
(2012036, 0),
(2012037, 0),
(2012038, 0),
(2012039, 0),
(2012040, 51),
(2012041, 0),
(2012042, 0),
(2012043, 0),
(2012044, 0),
(2012045, 0),
(2012046, 0),
(2012047, 0),
(2012048, 0),
(2012049, 0),
(2012050, 0);

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE IF NOT EXISTS `book_info` (
  `rollno` int(7) NOT NULL,
  `bid` int(6) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `issuedate` date NOT NULL,
  `duedate` date NOT NULL,
  `returndate` date DEFAULT NULL,
  `due` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rollno`,`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`rollno`, `bid`, `bname`, `issuedate`, `duedate`, `returndate`, `due`) VALUES
(2012001, 112115, 'A book on c', '2014-03-03', '2014-03-18', '2014-04-01', 14),
(2012001, 665522, 'Digital Design ', '2014-04-01', '2014-04-16', '2014-04-23', 7),
(2012005, 128489, 'swamy vivekanda life', '2014-04-10', '2014-04-23', NULL, 13),
(2012005, 145952, 'basics of electricla engineering', '2014-04-10', '2014-04-23', NULL, 13),
(2012005, 147852, 'Fundamentals of computing', '2014-04-14', '2014-04-30', NULL, 6),
(2012005, 147855, 'Fundamentals of computing', '2014-04-14', '2014-04-30', NULL, 6),
(2012005, 168444, 'elecrical design', '2014-04-14', '2014-04-30', NULL, 6),
(2012005, 175744, 'c language basics', '2014-04-10', '2014-04-23', NULL, 13),
(2012010, 122222, 'Fundamentals of computing', '2014-04-14', '2014-04-30', NULL, 6),
(2012010, 123458, 'c language basics', '2014-04-10', '2014-04-23', NULL, 13),
(2012010, 199945, 'elecrical design', '2014-04-14', '2014-04-30', NULL, 6),
(2012015, 122232, 'Fundamentals of computing', '2014-04-14', '2014-04-30', NULL, 6),
(2012015, 123498, 'c language basics', '2014-04-15', '2014-04-23', NULL, 13),
(2012015, 143343, 'basics of electricla engineering', '2014-04-15', '2014-04-23', NULL, 13),
(2012015, 144465, 'swamy vivekanda life', '2014-04-15', '2014-04-23', NULL, 13),
(2012015, 147852, 'Fundamentals of computing', '2014-04-14', '2014-04-30', NULL, 6),
(2012015, 171151, 'harrypotter all parts', '2014-04-14', '2014-04-30', NULL, 6),
(2012015, 199945, 'elecrical design', '2014-04-14', '2014-04-30', NULL, 6),
(2012020, 17852, 'Fundamentals of computing', '2014-04-14', '2014-04-30', NULL, 6),
(2012020, 127945, 'elecrical design', '2014-04-14', '2014-04-30', NULL, 6),
(2012020, 133343, 'basics of electricla engineering', '2014-04-20', '2014-04-23', NULL, 13),
(2012020, 163498, 'c language basics', '2014-04-20', '2014-04-23', NULL, 13),
(2012020, 164465, 'swamy vivekanda life', '2014-04-20', '2014-04-23', NULL, 13),
(2012020, 172232, 'Fundamentals of computing', '2014-04-14', '2014-04-30', NULL, 6),
(2012020, 191201, 'harrypotter all parts', '2014-04-14', '2014-04-30', NULL, 6),
(2012025, 14595, 'Fundamentals of computing', '2014-04-10', '2014-04-23', NULL, 13),
(2012030, 12857, 'Fundamentals of computing', '2014-04-10', '2014-04-23', NULL, 13),
(2012035, 16852, 'Fundamentals of computing', '2014-04-14', '2014-04-30', NULL, 6),
(2012040, 1757, 'Fundamentals of computing', '2014-04-10', '2014-04-23', NULL, 13),
(2012040, 124576, 'Swami Vivekananda ', '2014-03-05', '2014-03-20', '2014-05-01', 42);

--
-- Triggers `book_info`
--
DROP TRIGGER IF EXISTS `CALC_BOOK_DUE`;
DELIMITER //
CREATE TRIGGER `CALC_BOOK_DUE` AFTER UPDATE ON `book_info`
 FOR EACH ROW UPDATE BOOK_DUE
SET DUE=DUE+(NEW.DUE-OLD.DUE)
WHERE ROLLNO=NEW.ROLLNO AND OLD.DUE<>NEW.DUE
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `ROLLNO` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  PRIMARY KEY (`ROLLNO`,`DATE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`ROLLNO`, `DATE`, `TIME`) VALUES
(2012001, '2014-05-05', '02:30:00'),
(2012005, '2014-05-05', '03:40:00'),
(2012011, '2014-05-05', '05:15:00'),
(2012020, '2014-05-05', '06:30:00'),
(2012035, '2014-05-05', '03:40:00'),
(2012048, '2014-05-05', '02:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `ROLLNO` int(11) NOT NULL,
  `MONTH` int(11) NOT NULL,
  `AMOUNT` int(11) NOT NULL,
  `DATE` date NOT NULL,
  KEY `ROLLNO` (`ROLLNO`,`MONTH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`ROLLNO`, `MONTH`, `AMOUNT`, `DATE`) VALUES
(2012001, 1, 25, '2014-05-05'),
(2012001, 3, 50, '2014-05-05'),
(2012001, 4, 125, '2014-05-05'),
(2012048, 3, 100, '2014-05-05'),
(2012048, 4, 75, '2014-05-05'),
(2012050, 4, 100, '2014-05-05'),
(2012005, 1, 25, '2014-05-05'),
(2012005, 4, 100, '2014-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `hosteldue`
--

CREATE TABLE IF NOT EXISTS `hosteldue` (
  `ROLLNO` int(11) NOT NULL,
  `H_FINE` int(11) DEFAULT '0',
  `H_DUE` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ROLLNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosteldue`
--

INSERT INTO `hosteldue` (`ROLLNO`, `H_FINE`, `H_DUE`) VALUES
(2012001, 0, 0),
(2012002, 0, 200),
(2012003, 0, 200),
(2012004, 0, 75),
(2012005, 0, 0),
(2012006, 0, 150),
(2012007, 0, 225),
(2012008, 0, 200),
(2012009, 0, 200),
(2012010, 0, 275),
(2012011, 0, 125),
(2012012, 0, 150),
(2012013, 0, 175),
(2012014, 0, 225),
(2012015, 0, 150),
(2012016, 0, 175),
(2012017, 0, 150),
(2012018, 0, 75),
(2012019, 0, 75),
(2012020, 0, 125),
(2012021, 0, 150),
(2012022, 0, 150),
(2012023, 0, 150),
(2012024, 0, 175),
(2012025, 0, 200),
(2012026, 0, 50),
(2012027, 0, 125),
(2012028, 0, 75),
(2012029, 0, 200),
(2012030, 0, 250),
(2012031, 0, 225),
(2012032, 0, 50),
(2012033, 0, 75),
(2012034, 0, 125),
(2012035, 0, 175),
(2012036, 0, 200),
(2012037, 0, 200),
(2012038, 0, 250),
(2012039, 0, 25),
(2012040, 0, 100),
(2012041, 0, 250),
(2012042, 0, 200),
(2012043, 0, 500),
(2012044, 0, 325),
(2012045, 0, 175),
(2012046, 0, 125),
(2012047, 0, 175),
(2012048, 0, 0),
(2012049, 0, 75),
(2012050, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE IF NOT EXISTS `shirts` (
  `SHIRT_ID` varchar(20) NOT NULL,
  `LAST_DATE` date NOT NULL,
  `IMG_ID` varchar(16) NOT NULL,
  `AMOUNT` smallint(6) NOT NULL,
  PRIMARY KEY (`SHIRT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`SHIRT_ID`, `LAST_DATE`, `IMG_ID`, `AMOUNT`) VALUES
('Abhikalpan2014', '2014-06-15', 'a2014.jpg', 250),
('Tarang2013', '2014-05-15', 'tarang2014.jpg', 350);

-- --------------------------------------------------------

--
-- Table structure for table `shirts_booked`
--

CREATE TABLE IF NOT EXISTS `shirts_booked` (
  `SHIRT_ID` varchar(20) NOT NULL,
  `ROLLNO` int(7) NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`SHIRT_ID`,`ROLLNO`),
  KEY `ROLLNO` (`ROLLNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirts_booked`
--

INSERT INTO `shirts_booked` (`SHIRT_ID`, `ROLLNO`, `DATE`) VALUES
('Abhikalpan2014', 2012005, '2014-05-05'),
('Abhikalpan2014', 2012010, '2014-05-05'),
('Abhikalpan2014', 2012020, '2014-05-05'),
('Abhikalpan2014', 2012048, '2014-05-05'),
('Tarang2013', 2012001, '2014-05-05'),
('Tarang2013', 2012005, '2014-05-05'),
('Tarang2013', 2012035, '2014-05-05'),
('Tarang2013', 2012047, '2014-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `ROLLNO` int(7) NOT NULL DEFAULT '0',
  `NAME` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `BRANCH` varchar(10) NOT NULL,
  `PROGRAMME` varchar(5) NOT NULL DEFAULT 'BTECH',
  `YEAR` int(4) NOT NULL DEFAULT '2012',
  `BALANCE` float NOT NULL DEFAULT '1000',
  `PASSWORD` varchar(15) NOT NULL,
  `TRANS_PASSWORD` varchar(15) NOT NULL,
  `FATHER_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`ROLLNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ROLLNO`, `NAME`, `DOB`, `BRANCH`, `PROGRAMME`, `YEAR`, `BALANCE`, `PASSWORD`, `TRANS_PASSWORD`, `FATHER_NAME`) VALUES
(2012001, 'Aaditya Sujeria', '1994-02-11', 'CSE', 'BTECH', 2012, 4169, '2012001', '2012001', ' Aaditya rao'),
(2012002, 'Aaquib Jawed ', '1993-08-21', 'ECE', 'BTECH', 2012, 5000, '2012002', '2012002', ' Aaquib raj'),
(2012003, 'Aashish Kumar Patwari', '1993-05-07', 'ME', 'BTECH', 2012, 5000, '2012003', '2012003', 'rajesh patwari'),
(2012004, 'Aayush Upadhayay ', '1993-08-14', 'ECE', 'BTECH', 2012, 5000, '2012004', '2012004', ' Aayush kumar'),
(2012005, 'Abbadasari Prateesh', '1993-08-15', 'ECE', 'BTECH', 2012, 4814, '2012005', '2012005', ' Abbadasari rajesh'),
(2012006, 'Abhijeet Dubey ', '1994-09-11', 'CSE', 'BTECH', 2012, 4028, '2012006', '2012006', ' Abhijeet varma'),
(2012007, 'Abhinav Kumar', '1994-08-14', 'CSE', 'BTECH', 2012, 5000, '2012007', '2012007', ' Abhinav goud'),
(2012008, 'Abhinav Shekhar Vashistha ', '1993-01-14', 'ME', 'BTECH', 2012, 5000, '2012008', '2012008', 'Abhinav singh'),
(2012009, 'Abhishek Ranjan', '1993-03-11', 'CSE', 'BTECH', 2012, 5000, '2012009', '2012009', 'Abhishek varma'),
(2012010, 'Abhishek Shrivastava', '1994-01-13', 'CSE', 'BTECH', 2012, 4213, '2012010', '2012010', 'rajesh Shrivastava'),
(2012011, 'Abhishek Singh ', '1994-12-15', 'ECE', 'BTECH', 2012, 4990, '2012011', '2012011', 'Arjith Singh '),
(2012012, 'Abhishek Upadhyay', '1994-05-21', 'ME', 'BTECH', 2012, 5000, '2012012', '2012012', 'Arun Upadhyay'),
(2012013, 'Aditi Goyal', '1994-03-31', 'CSE', 'BTECH', 2012, 5000, '2012013', '2012013', ' Arnav Goyal'),
(2012014, 'Aditya Raj', '1993-04-14', 'CSE', 'BTECH', 2012, 5000, '2012014', '2012014', ' Arjun  Raj'),
(2012015, 'Akash Aggarwal', '1993-02-25', 'ME', 'BTECH', 2012, 5000, '2012015', '2012015', ' Abishek Aggarwal'),
(2012016, 'Akash Manu', '1994-04-16', 'CSE', 'BTECH', 2012, 5000, '2012016', '2012016', 'sai  Manu'),
(2012017, 'Akhilesh Chaudhary', '2014-07-26', 'ME', 'BTECH', 2012, 5000, '2012017', '2012017', 'vikranth Chaudhary'),
(2012018, 'Alok Sahoo', '2014-01-30', 'ME', 'BTECH', 2012, 4943, '2012018', '2012018', ' yaswanth  Sahoo'),
(2012019, 'Aman Khare', '1993-05-20', 'ECE', 'BTECH', 2012, 5000, '2012019', '2012019', 'rahul Khare'),
(2012020, 'Amit Giri ', '1994-06-04', 'CSE', 'BTECH', 2012, 4740, '2012020', '2012020', 'karan Giri '),
(2012021, 'Amit Gupta', '1993-04-06', 'ME', 'BTECH', 2012, 5000, '2012021', '2012021', 'shivam Gupta'),
(2012022, 'Amit Kumar Behera ', '1993-10-02', 'ECE', 'BTECH', 2012, 5000, '2012022', '2012022', 'Amit Kumar tanwar '),
(2012023, 'Amit Kumar ', '1994-08-15', 'ME', 'BTECH', 2012, 5000, '2012023', '2012023', 'tarun Kumar '),
(2012024, 'Amrit Kumar Ojha', '1993-07-30', 'ECE', 'BTECH', 2012, 5000, '2012024', '2012024', 'yeshwanth  Ojha'),
(2012025, 'Animesh Gautam', '1992-04-14', 'CSE', 'BTECH', 2012, 5000, '2012025', '2012025', 'Sriram Gautam'),
(2012026, 'Anish Agrawal ', '1994-02-09', 'CSE', 'BTECH', 2012, 5000, '2012026', '2012026', 'nagendra  Agrawal '),
(2012027, 'Ankit Kumar Meena', '2014-01-28', 'ECE', 'BTECH', 2012, 5000, '2012027', '2012027', 'siddarth  Kumar Meena'),
(2012028, 'Ankit Kumar Sahu', '1994-05-28', 'CSE', 'BTECH', 2012, 5000, '2012028', '2012028', 'karan sahu'),
(2012029, 'Ankit Kumar ', '1993-03-01', 'ME', 'BTECH', 2012, 5000, '2012029', '2012029', 'kiran Kumar '),
(2012030, 'Ankit Mittal', '1994-02-17', 'CSE', 'BTECH', 2012, 5000, '2012030', '2012030', 'latif Mittal'),
(2012031, 'Ankit Pathal', '0199-03-31', 'ME', 'BTECH', 2012, 5000, '2012031', '2012031', 'qureshi Pathal'),
(2012032, 'Ankush Meena', '1994-02-04', 'ME', 'BTECH', 2012, 5000, '2012032', '2012032', 'Arun  Meena'),
(2012033, 'Anmol Kumar ', '1994-05-29', 'CSE', 'BTECH', 2012, 5000, '2012033', '2012033', 'faraj Kumar '),
(2012034, 'Anshul Rathore', '1993-11-18', 'ECE', 'BTECH', 2012, 5000, '2012034', '2012034', 'jatin Rathore'),
(2012035, 'oblesh kumar', '1994-05-07', 'ECE', 'BTECH', 2012, 3590, '2012035', '2012035', ' Anshul kumar'),
(2012036, 'gautam kumar', '1993-05-20', 'CSE', 'BTECH', 2012, 5000, '2012036', '2012036', 'ishanth kumar'),
(2012037, 'Anurag Prakash', '1993-02-02', 'CSE', 'BTECH', 2012, 5000, '2012037', '2012037', 'ravi Prakash'),
(2012038, 'Anurag Sinha', '1994-05-20', 'ME', 'BTECH', 2012, 5000, '2012038', '2012038', 'kiran Sinha'),
(2012039, 'Apoorv Kumar Agarwal ', '1993-01-28', 'ME', 'BTECH', 2012, 5000, '2012039', '2012039', 'Arnav Kumar Agarwal '),
(2012040, 'Apoorva Gupta ', '1993-10-24', 'CSE', 'BTECH', 2012, 5000, '2012040', '2012040', 'Asish Gupta '),
(2012041, 'Apoorve Jain ', '1993-01-18', 'ECE', 'BTECH', 2012, 5000, '2012041', '2012041', 'shivaraju Jain '),
(2012042, 'Arpit Gupta', '1993-07-11', 'CSE', 'BTECH', 2012, 5000, '2012042', '2012042', 'harshith Gupta'),
(2012043, 'Arpit Gupta ', '1994-05-20', 'ME', 'BTECH', 2012, 4710, '2012043', '2012043', 'dheraj Gupta '),
(2012044, 'Arun Kumar Goyal', '1994-10-17', 'ME', 'BTECH', 2012, 5000, '2012044', '2012044', 'himanshu  Kumar Goyal'),
(2012045, 'Arun Kumar Singh', '1994-12-24', 'ME', 'BTECH', 2012, 5000, '2012045', '2012045', 'pavan Kumar Singh'),
(2012046, 'Arun Pratap Singh', '1993-03-09', 'ECE', 'BTECH', 2012, 5000, '2012046', '2012046', 'rudram Pratap Singh'),
(2012047, ' Arunima Singh', '1994-05-05', 'CSE', 'BTECH', 2012, 3700, '2012047', '2012047', 'ayush Singh'),
(2012048, ' Arushi Dev', '1993-05-14', 'ME', 'BTECH', 2012, 3615, '2012048', '2012048', 'rahul Dev'),
(2012049, 'srikanth singh', '1992-04-18', 'ECE', 'BTECH', 2012, 5000, '2012049', '2012049', 'prudhvi singh'),
(2012050, 'Ashutosh Ranjan Dwivedi', '1994-01-28', 'ECE', 'BTECH', 2012, 4900, '2012050', '2012050', 'Abishekh Ranjan Dwivedi');

--
-- Triggers `students`
--
DROP TRIGGER IF EXISTS `insert_bookdue`;
DELIMITER //
CREATE TRIGGER `insert_bookdue` AFTER INSERT ON `students`
 FOR EACH ROW INSERT INTO book_due  VALUES (new.ROLLNO,0)
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE IF NOT EXISTS `trans` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rollno` int(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `toa` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `amount` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rollno` (`rollno`),
  KEY `toa` (`toa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`id`, `rollno`, `name`, `toa`, `date`, `amount`) VALUES
(1, 2012001, 'App1 ', 'ACAD', '2014-05-05', 50),
(5, 2012001, 'App2 ', 'ACAD', '2014-05-05', 50),
(6, 2012001, 'Tarang2013', 'shirts', '2014-05-05', NULL),
(17, 2012047, 'Tarang2013', 'shirts', '2014-05-05', 350),
(19, 2012005, 'Android', 'workshop', '2014-05-05', 950),
(20, 2012005, 'Tarang2013', 'shirts', '2014-05-05', 350),
(24, 2012001, 'Hostel_dues', 'HOSTEL', '2014-05-05', 200),
(25, 2012001, 'Hostel_dues', 'HOSTEL', '2014-05-05', 200),
(26, 2012001, 'Hostel_dues', 'HOSTEL', '2014-05-05', 0),
(27, 2012001, 'lib_due', 'lib', '2014-05-05', 21),
(28, 2012001, 'Hostel_dues', 'HOSTEL', '2014-05-05', 0),
(29, 2012035, 'Tarang2013', 'shirts', '2014-05-05', 350),
(31, 2012035, 'leading edge theories and prac', 'workshop', '2014-05-05', 1000),
(33, 2012035, 'App ID No3<br> ', 'ACAD', '2014-05-05', 50),
(34, 2012043, 'lib_due', 'lib', '2014-05-05', NULL),
(35, 2012018, 'lib_due', 'lib', '2014-05-05', 7),
(36, 2012001, 'App ID No4<br> ', 'ACAD', '2014-05-05', 50),
(37, 2012018, 'App ID No5<br> ', 'ACAD', '2014-05-05', 50),
(38, 2012048, 'Android', 'workshop', '2014-05-05', 950),
(39, 2012048, 'Hostel_dues', 'HOSTEL', '2014-05-05', 175),
(40, 2012048, 'Hostel_dues', 'HOSTEL', '2014-05-05', 0),
(41, 2012048, 'Hostel_dues', 'HOSTEL', '2014-05-05', 0),
(42, 2012048, 'Hostel_dues', 'HOSTEL', '2014-05-05', 0),
(43, 2012048, 'Hostel_dues', 'HOSTEL', '2014-05-05', 0),
(44, 2012048, 'Abhikalpan2014', 'shirts', '2014-05-05', 250),
(46, 2012048, 'Hostel_dues', 'HOSTEL', '2014-05-05', 0),
(47, 2012050, 'Hostel_dues', 'HOSTEL', '2014-05-05', 100),
(48, 2012050, 'Hostel_dues', 'HOSTEL', '2014-05-05', 0),
(49, 2012005, 'App ID No6<br> ', 'ACAD', '2014-05-05', 50),
(50, 2012005, 'Cadence Workshop', 'workshop', '2014-05-05', 1500),
(52, 2012005, 'Abhikalpan2014', 'shirts', '2014-05-05', 250),
(53, 2012010, 'lib_due', 'lib', '2014-05-05', 11),
(54, 2012010, 'lib_due', 'lib', '2014-05-05', 11),
(55, 2012010, 'lib_due', 'lib', '2014-05-05', 11),
(56, 2012010, 'lib_due', 'lib', '2014-05-05', 4),
(57, 2012010, 'A workshop on MATLAB for Engin', 'workshop', '2014-05-05', 500),
(58, 2012010, 'Abhikalpan2014', 'shirts', '2014-05-05', 250),
(60, 2012005, 'Hostel_dues', 'HOSTEL', '2014-05-05', 125),
(63, 2012005, 'App ID No7<br> ', 'ACAD', '2014-05-05', 50),
(64, 2012005, 'lib_due', 'lib', '2014-05-05', 1),
(65, 2012020, 'Abhikalpan2014', 'shirts', '2014-05-05', 250);

--
-- Triggers `trans`
--
DROP TRIGGER IF EXISTS `update_Account`;
DELIMITER //
CREATE TRIGGER `update_Account` AFTER INSERT ON `trans`
 FOR EACH ROW update account set bal=bal+new.amount where name=new.toa
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE IF NOT EXISTS `workshops` (
  `W_ID` smallint(6) NOT NULL,
  `W_NAME` varchar(50) NOT NULL,
  `BEGIN_DATE` date NOT NULL,
  `LAST_DATE` date NOT NULL,
  `AMOUNT` smallint(6) NOT NULL,
  `DESCRIPTION` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`W_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`W_ID`, `W_NAME`, `BEGIN_DATE`, `LAST_DATE`, `AMOUNT`, `DESCRIPTION`) VALUES
(7, 'Cadence Workshop', '2014-03-01', '2014-06-01', 1500, 'workshop and hands-on-training on Cadence IC (CIC) design in collaboration with Cadence (India).'),
(70, 'leading edge theories and practices in design', '2014-05-01', '2014-06-01', 1000, ' To inculcate the culture of integrating design with production and       treating design process with a holistic approach and not in isolation.'),
(200, 'Android', '2014-05-14', '2014-05-09', 950, 'COme And Create Android Apps'),
(1100, 'A workshop on MATLAB for Engineering computations', '2014-03-01', '2014-06-10', 500, 'MATLAB is excellent tool for visualization and manipulation of engineering data as well as performing various engineering computations.'),
(1212, 'Photography Workshops', '2014-04-01', '2014-06-11', 1500, 'To enhance your photographic skills join with us.'),
(1598, 'Embedded systems', '2014-04-01', '2014-06-30', 1200, 'An embedded system is a computer system with a dedicated function within a larger mechanical or electrical system.');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_enrolled`
--

CREATE TABLE IF NOT EXISTS `workshop_enrolled` (
  `W_ID` smallint(6) NOT NULL,
  `ROLLNO` int(11) NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`W_ID`,`ROLLNO`),
  KEY `ROLLNO` (`ROLLNO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop_enrolled`
--

INSERT INTO `workshop_enrolled` (`W_ID`, `ROLLNO`, `DATE`) VALUES
(7, 2012005, '2014-05-05'),
(70, 2012035, '2014-05-05'),
(200, 2012005, '2014-05-05'),
(200, 2012006, '2014-05-05'),
(200, 2012047, '2014-05-05'),
(200, 2012048, '2014-05-05'),
(1100, 2012010, '2014-05-05');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `app`
--
ALTER TABLE `app`
  ADD CONSTRAINT `app_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `students` (`ROLLNO`) ON DELETE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`ROLLNO`) REFERENCES `students` (`ROLLNO`) ON DELETE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `students` (`ROLLNO`);

--
-- Constraints for table `book_due`
--
ALTER TABLE `book_due`
  ADD CONSTRAINT `book_due_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `students` (`ROLLNO`) ON DELETE CASCADE;

--
-- Constraints for table `book_info`
--
ALTER TABLE `book_info`
  ADD CONSTRAINT `book_info_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `students` (`ROLLNO`) ON DELETE CASCADE;

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`ROLLNO`) REFERENCES `students` (`ROLLNO`) ON DELETE CASCADE;

--
-- Constraints for table `hostel`
--
ALTER TABLE `hostel`
  ADD CONSTRAINT `hostel_ibfk_1` FOREIGN KEY (`ROLLNO`, `MONTH`) REFERENCES `attendance` (`ROLLNO`, `MONTH`);

--
-- Constraints for table `hosteldue`
--
ALTER TABLE `hosteldue`
  ADD CONSTRAINT `hosteldue_ibfk_1` FOREIGN KEY (`ROLLNO`) REFERENCES `students` (`ROLLNO`) ON DELETE CASCADE;

--
-- Constraints for table `shirts_booked`
--
ALTER TABLE `shirts_booked`
  ADD CONSTRAINT `shirts_booked_ibfk_1` FOREIGN KEY (`SHIRT_ID`) REFERENCES `shirts` (`SHIRT_ID`),
  ADD CONSTRAINT `shirts_booked_ibfk_2` FOREIGN KEY (`ROLLNO`) REFERENCES `students` (`ROLLNO`) ON DELETE CASCADE;

--
-- Constraints for table `trans`
--
ALTER TABLE `trans`
  ADD CONSTRAINT `trans_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `students` (`ROLLNO`),
  ADD CONSTRAINT `trans_ibfk_2` FOREIGN KEY (`toa`) REFERENCES `account` (`name`);

--
-- Constraints for table `workshop_enrolled`
--
ALTER TABLE `workshop_enrolled`
  ADD CONSTRAINT `workshop_enrolled_ibfk_1` FOREIGN KEY (`W_ID`) REFERENCES `workshops` (`W_ID`),
  ADD CONSTRAINT `workshop_enrolled_ibfk_2` FOREIGN KEY (`ROLLNO`) REFERENCES `students` (`ROLLNO`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

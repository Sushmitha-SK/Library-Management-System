-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 07:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(200) NOT NULL,
  `BookTitle` varchar(500) NOT NULL,
  `ISBNNo` int(200) NOT NULL,
  `Author` varchar(500) NOT NULL,
  `PID` int(200) NOT NULL,
  `Edition` varchar(500) NOT NULL,
  `Price` int(200) NOT NULL,
  `Category` varchar(500) NOT NULL,
  `BooksAvailable` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `BookTitle`, `ISBNNo`, `Author`, `PID`, `Edition`, `Price`, `Category`, `BooksAvailable`) VALUES
(1, 'Cracking Codes with Python: An Introduction to Building and Breaking Ciphers', 2147483647, 'AI Sweigart', 1, '3', 565, 'Programming', 20),
(2, 'Fundamentals of Database Systems', 2147483647, 'Shamkant B. Navathe', 2, '7', 580, 'Computer Science', 16),
(3, 'Cinderella', 2147483647, 'Jenny Giles', 3, '1', 250, 'Novel', 43),
(4, 'DBMS', 256942, 'Mcgraw-Hill', 1, '7', 540, 'Programming', 18),
(5, 'ABCDE', 12345, 'pqrst', 2, '10', 150, 'Novel', 46),
(6, 'Computer Networking A Top-Down Approach', 13285620, 'Jim Kurose', 3, '6', 950, 'Computer Science', 23),
(7, 'The Catcher in the Rye', 2147483647, 'J. D. Salinger', 5, '5', 429, 'Novel', 8),
(8, 'Nick', 2147483647, ' Michael Farris Smith', 5, '2', 1970, 'Novel', 11),
(10, 'Total Quality Management', 2147483647, 'Besterfield', 3, '5', 750, 'Computer Science', 8),
(11, 'A History of Ancient and Early Medieval India: From the Stone Age to the 12th Century (PB)', 2147483647, 'Singh Upinder', 3, '2', 560, 'History', 12),
(12, 'Computer Graphics', 21459642, 'Donald Hearn', 7, '2', 520, 'Computer Science', 25),
(13, 'Unix', 69575, 'rads', 7, '3', 500, 'Computer Science', 25);

-- --------------------------------------------------------

--
-- Table structure for table `issuebooks`
--

CREATE TABLE `issuebooks` (
  `IssueID` int(200) NOT NULL,
  `MemberID` int(200) NOT NULL,
  `BookID` int(200) NOT NULL,
  `BookTitle` varchar(500) NOT NULL,
  `IssueDate` date NOT NULL,
  `DueDate` date NOT NULL,
  `Period` int(200) NOT NULL,
  `Status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuebooks`
--

INSERT INTO `issuebooks` (`IssueID`, `MemberID`, `BookID`, `BookTitle`, `IssueDate`, `DueDate`, `Period`, `Status`) VALUES
(1, 11, 5, 'ABCDE', '2020-12-15', '2020-12-31', 15, 'Returned'),
(2, 1, 1, 'Cracking Codes with Python: An Introduction to Building and Breaking Ciphers', '2020-12-14', '2020-12-30', 15, 'Returned'),
(3, 11, 6, 'Computer Networking A Top-Down Approach', '2020-12-14', '2020-12-30', 15, 'Returned'),
(4, 1, 8, 'Nick', '2021-01-14', '2021-01-29', 15, 'Returned'),
(5, 19, 8, 'Nick', '2021-01-14', '2021-01-29', 15, 'Returned'),
(6, 2, 6, 'Computer Networking A Top-Down Approach', '2021-01-14', '2021-01-29', 15, 'Rejected'),
(7, 19, 6, 'Computer Networking A Top-Down Approach', '2021-01-14', '2021-01-29', 15, 'Returned'),
(8, 19, 7, 'The Catcher in the Rye', '2021-01-14', '2021-01-29', 15, 'Approved'),
(9, 1, 8, 'Nick', '2021-01-21', '2021-02-05', 15, 'Approved'),
(10, 11, 11, 'A History of Ancient and Early Medieval India: From the Stone Age to the 12th Century (PB)', '2021-01-24', '2021-02-08', 15, 'Approved'),
(11, 11, 4, 'DBMS', '2021-01-24', '2021-02-08', 15, 'Approved'),
(12, 11, 1, 'Cracking Codes with Python: An Introduction to Building and Breaking Ciphers', '2021-01-24', '2021-02-08', 15, 'Approved'),
(13, 11, 6, 'Computer Networking A Top-Down Approach', '2021-01-24', '2021-02-08', 15, 'Approved'),
(14, 11, 6, 'Computer Networking A Top-Down Approach', '2021-01-24', '2021-02-08', 15, 'Rejected'),
(15, 15, 11, 'A History of Ancient and Early Medieval India: From the Stone Age to the 12th Century (PB)', '2021-01-25', '2021-02-09', 15, 'Returned'),
(16, 15, 3, 'Cinderella', '2021-01-01', '2021-01-16', 15, 'Returned'),
(17, 2, 11, 'A History of Ancient and Early Medieval India: From the Stone Age to the 12th Century (PB)', '2021-01-01', '2021-01-16', 15, 'Approved'),
(18, 2, 4, 'DBMS', '2021-01-28', '2021-02-12', 15, 'Returned'),
(19, 2, 3, 'Cinderella', '2021-01-31', '2021-02-15', 15, 'Approved'),
(20, 2, 3, 'Cinderella', '2021-02-01', '2021-02-16', 15, 'Approved'),
(21, 2, 10, 'Total Quality Management', '2021-02-02', '2021-02-17', 15, 'Approved'),
(22, 1, 6, 'Computer Networking A Top-Down Approach', '2021-02-02', '2021-02-17', 15, 'Rejected'),
(23, 1, 4, 'DBMS', '2021-02-02', '2021-02-17', 15, 'Approved'),
(24, 1, 7, 'The Catcher in the Rye', '2021-02-02', '2021-02-17', 15, 'Returned'),
(25, 1, 3, 'Cinderella', '2021-02-02', '2021-02-17', 15, 'Approved'),
(26, 2, 8, 'Nick', '2021-02-02', '2021-02-17', 15, 'New'),
(27, 15, 10, 'Total Quality Management', '2021-02-02', '2021-02-17', 15, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `LibrarianID` int(200) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `EmailID` varchar(500) NOT NULL,
  `Phone` bigint(200) NOT NULL,
  `Username` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`LibrarianID`, `Name`, `EmailID`, `Phone`, `Username`, `Password`) VALUES
(1, 'Sushmitha S', 'sushmitasudupi@gmail.com', 9483320071, 'sushmitha', 'Sush@1234');

-- --------------------------------------------------------

--
-- Table structure for table `librarylogin`
--

CREATE TABLE `librarylogin` (
  `UserID` int(200) NOT NULL,
  `ID` int(200) NOT NULL,
  `Username` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL,
  `UserType` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarylogin`
--

INSERT INTO `librarylogin` (`UserID`, `ID`, `Username`, `Password`, `UserType`) VALUES
(1, 1, 'sushmitha', 'Sush@1234', 'Librarian'),
(2, 1, 'aishwarya', 'Aish@1234', 'Member'),
(3, 2, 'rakshit', 'Rakshit@1234', 'Member'),
(4, 3, 'prashanth', 'Prashanth@1234', 'Member'),
(5, 4, 'vivek', 'Vivek@1234', 'Member'),
(6, 6, 'prerana', 'Prerana@1234', 'Member'),
(7, 7, 'sankalp', 'Sankalp@1234', 'Member'),
(8, 8, 'ashritha', 'Ashritha@1234', 'Member'),
(9, 10, 'riyan', 'Riyan@1234', 'Member'),
(10, 11, 'shriya', 'Shriya@1234', 'Member'),
(11, 13, 'sankalp', 'Sankalp@1234', 'Member'),
(12, 14, 'sankalp', 'Sankalp@1234', 'Member'),
(13, 15, 'ganesh', 'Ganesh@1234', 'Member'),
(14, 16, 'pavan', 'Pavan@1234', 'Member'),
(15, 17, 'parikshith', 'Parikshith@1234', 'Member'),
(16, 18, 'suraksha', 'Suraksha@1234', 'Member'),
(17, 19, 'deepa', 'Deepa@1234', 'Member'),
(18, 20, 'priya', 'Priya@1234', 'Member'),
(19, 21, 'priyam', 'Priyam@1234', 'Member'),
(22, 22, 'mihika', 'Mihika@1234', 'Member'),
(23, 25, 'Harsha', 'Harsha@1234', 'Member'),
(24, 26, 'simran', 'Simran@1234', 'Member'),
(26, 27, 'ash', 'Ash@1234', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(200) NOT NULL,
  `Fullname` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `ContactNo` varchar(500) NOT NULL,
  `UserName` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `Fullname`, `Address`, `Email`, `ContactNo`, `UserName`, `Password`) VALUES
(1, 'Aishwarya S', 'House No 7-1, Uchilakere Road, III Cross, Uchila-574106', 'aishwaryasudupi9@gmail.com', '7676843949', 'aishwarya', 'Aish@1234'),
(2, 'Rakshit SS', 'House No 96, Sankalp Square, Contour Rd, Gokulam 3rd Stage, Gokulam, Mysuru, Karnataka 570002', 'rakshitss@gmail.com', '8796325455', 'rakshit', 'Rakshit@999'),
(3, 'Prashanth D', 'Prashanth D, House No 85, II Main, 3rd cross, Shankerpura-576112', 'prashanthd@gmail.com', '9485523369', 'prashanth', 'Prashanth@1234'),
(4, 'Vivek', 'Door No 85, AIR Colony, Near Neel City Resort, Munjka, Rajkot, Gujarat-360005', 'vivek@gmail.com', '9647852369', 'vivek', 'Vivek@1234'),
(5, 'Manish', 'Door No 2-45, 2nd Cross, JP Nagar, Bangalore-560078', 'manishp@gmail.com', '9483320075', 'manish', 'manish@1234'),
(6, 'Prerana M', 'Door No 89, GS Sadan, Brigade Road, Bangalore-560009', 'preranam@gmail.com', '7676843948', 'prerana', 'Prerana@1234'),
(7, 'Sankalp S', 'House No 9-6, Hosur Road, Bangalore-9', 'sankalps@gmail.com', '9647853699', 'sankalp', 'Sankalp@1234'),
(8, 'Ashritha', 'Ashritha, Kodavoor, Malpe-6', 'ashritha@gmail.com', '8796941258', 'ashritha', 'Ashritha@1234'),
(10, 'Riyan', 'House No 9-6, Kodankoor, Udupi-576103', 'ryan@gmail.com', '9987485556', 'riyan', 'Riyan@1234'),
(11, 'Shriya', 'House No 7-2,  Innaje, Kaup-9', 'shriya@gmail.com', '9648571236', 'shriya', 'Shriya@1234'),
(12, 'sahaj', 'udupi', 'sahaj@gmail.com', '8736954586', 'sahaj', 'Sahaj@1234'),
(13, 'Sankalp', 'House No 7-3, Sankalp Square, Mysore-6', 'sankalp@gmail.com', '8129948536', 'sankalp', 'Sankalp@1234'),
(14, 'Samyuktha', 'Samyuktha Square, Door No7-9, Mysore-6', 'samyuktha@gmail.com', '9847538699', 'sankalp', 'Sankalp@1234'),
(15, 'Ganesh K', 'Ganesh Kalkur, House No 8-6, Kunjibettu, Udupi-576102', 'ganeshk@gmail.com', '8796321478', 'ganesh', 'Ganesh@1234'),
(16, 'Pavan', 'Pavan D, House No 96,Dharwad-9', 'pavan@gmail.com', '9696485758', 'pavan', 'Pavan@1234'),
(17, 'Parikshith', 'GS Villa, II Cross, 6th Main, Devanahalli, Bangalore-560007', 'parikshith@gmail.com', '8126654582', 'parikshith', 'Parikshith@1234'),
(18, 'Suraksha', 'Door No 96, III Cross, 4th stage, BTM Layout, Bangalore-560009', 'suraksha@gmail.com', '8963254152', 'suraksha', 'Suraksha@1234'),
(19, 'Deepa K', 'House No 8-31, II Cross, 3rd main, Electronic City, Bangalore-560009', 'deepak@gmail.com', '8796325471', 'deepa', 'Deepa@1234'),
(20, 'Priya', 'RS Villa, First Floor, MG Road, Mangalore-574142', 'priya@gmail.com', '7584523698', 'priya', 'Priya@1234'),
(21, 'Priyam', 'House No 5-9, JK Building. III Floor, Kadri Road, Mangalore-574142', 'priyam@gmail.com', '8796314784', 'priyam', 'Priyam@1234'),
(24, 'Mihika', 'Door No 9-8, CPC layout, Gurgaon, Haryana-6 ', 'mihika@gmail.com', '7856232569', 'mihika', 'Mihika@1234'),
(25, 'Harsha', 'Bangalore', 'harsha@gmail.com', '9958741234', 'Harsha', 'Harsha@1234'),
(26, 'Simran', 'Zirkapur, Punjab', 'simran7@gmail.com', '9874563210', 'simran', 'Simran@1234'),
(28, 'Ash', 'udupi', 'ash@gmail.com', '75564568', 'ash', 'Ash@1234');

--
-- Triggers `member`
--
DELIMITER $$
CREATE TRIGGER `name_uppercase` BEFORE INSERT ON `member` FOR EACH ROW SET NEW.Fullname = CONCAT(UCASE(LEFT(NEW.Fullname, 1)), SUBSTRING(NEW.Fullname, 2))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `PID` int(200) NOT NULL,
  `PName` varchar(500) NOT NULL,
  `PAddress` varchar(500) NOT NULL,
  `PContactNo` varchar(500) NOT NULL,
  `PEmail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`PID`, `PName`, `PAddress`, `PContactNo`, `PEmail`) VALUES
(1, 'William Pollock', 'No Starch Press, Inc, 245 8th street. San Fransisco, CA-941035556', '89532452788', 'info@nostarch.com'),
(2, 'Dorling Kindersley (India) Pvt. Ltd', '15th floor, Tower-B, World Trade Tower, Plot No 1, Bloc-K, Sector-16, Noida 201301, Uttar Pradesh, India', '80252222252', 'companysecretary.india@pearson.com'),
(3, 'Pearson', 'University of Massachusetts, Amherst', '87953214562', 'contact@pearsonresearch.com'),
(5, 'Little, Brown and Company', '53 State St, Boston, MA 02109, United States', '1 617-227-0731', 'contact@littlebrown.com'),
(7, 'Hachette Livre', 'Chennai', '7569810244', 'hachette@gmail.com');

--
-- Triggers `publisher`
--
DELIMITER $$
CREATE TRIGGER `publishername_uppercase` BEFORE INSERT ON `publisher` FOR EACH ROW SET NEW.PName = CONCAT(UCASE(LEFT(NEW.PName, 1)), SUBSTRING(NEW.PName, 2))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `returnbooks`
--

CREATE TABLE `returnbooks` (
  `ReturnID` int(200) NOT NULL,
  `MemberID` int(200) NOT NULL,
  `IssueID` int(200) NOT NULL,
  `BookID` int(200) NOT NULL,
  `IssueDate` date NOT NULL,
  `DueDate` date NOT NULL,
  `ReturnDate` date NOT NULL,
  `Penalty` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnbooks`
--

INSERT INTO `returnbooks` (`ReturnID`, `MemberID`, `IssueID`, `BookID`, `IssueDate`, `DueDate`, `ReturnDate`, `Penalty`) VALUES
(1, 11, 1, 5, '2021-01-11', '2021-01-26', '2021-01-11', 0),
(2, 19, 7, 6, '2021-01-14', '2021-01-29', '2021-01-15', 0),
(3, 11, 1, 5, '2020-12-15', '2020-12-31', '2021-01-16', 80),
(4, 1, 2, 1, '2020-12-14', '2020-12-30', '2021-01-16', 85),
(5, 11, 3, 6, '2020-12-14', '2020-12-30', '2021-01-16', 85),
(6, 1, 4, 8, '2021-01-14', '2021-01-29', '2021-01-20', 0),
(7, 15, 16, 3, '2021-01-01', '2021-01-16', '2021-01-28', 0),
(8, 19, 5, 8, '2021-01-14', '2021-01-29', '2021-01-30', 5),
(9, 2, 18, 4, '2021-01-28', '2021-02-12', '2021-01-30', 0),
(10, 15, 15, 11, '2021-01-25', '2021-02-09', '2021-02-02', 0),
(11, 1, 24, 7, '2021-02-02', '2021-02-17', '2021-02-02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `issuebooks`
--
ALTER TABLE `issuebooks`
  ADD PRIMARY KEY (`IssueID`),
  ADD KEY `issuebooks` (`BookID`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`LibrarianID`);

--
-- Indexes for table `librarylogin`
--
ALTER TABLE `librarylogin`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `returnbooks`
--
ALTER TABLE `returnbooks`
  ADD PRIMARY KEY (`ReturnID`),
  ADD KEY `returnbook_fk` (`IssueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `issuebooks`
--
ALTER TABLE `issuebooks`
  MODIFY `IssueID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `LibrarianID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `librarylogin`
--
ALTER TABLE `librarylogin`
  MODIFY `UserID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `PID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `returnbooks`
--
ALTER TABLE `returnbooks`
  MODIFY `ReturnID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `publisher` (`PID`);

--
-- Constraints for table `returnbooks`
--
ALTER TABLE `returnbooks`
  ADD CONSTRAINT `returnbook_fk` FOREIGN KEY (`IssueID`) REFERENCES `issuebooks` (`IssueID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

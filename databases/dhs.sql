-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2021 at 10:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cid`, `pid`, `name`, `quantity`) VALUES
(7, 9, 5, 'sanitizer', 1),
(10, 1, 5, 'sanitizer', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact-form`
--

CREATE TABLE `contact-form` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact-form`
--

INSERT INTO `contact-form` (`fname`, `lname`, `location`, `subject`) VALUES
('rodney', 'amah', 'Berekuso', 'How quick does diabetes kill.'),
('Aneng', 'Amah', '', 'heyyyyy'),
('ngoh', 'amah', 'ashesi', 'how are you doing?');

-- --------------------------------------------------------

--
-- Table structure for table `Health_center`
--

CREATE TABLE `Health_center` (
  `patientID` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `center_name` varchar(40) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Health_center`
--

INSERT INTO `Health_center` (`patientID`, `center_id`, `center_name`, `contact`, `location`) VALUES
(3, 410, 'Giroud', '244666036', 'Achimota'),
(4, 411, 'Greenwood', '244666036', 'Accra'),
(5, 412, 'Mata', '244666036', 'East Legon'),
(6, 413, 'Siuuu', '244666036', 'Lapaz'),
(7, 414, 'Siuuu', '244556036', 'Achimota'),
(1, 488, 'Tabea', '244666036', 'Berekuso'),
(2, 489, 'Minou', '244666036', 'Dansoman');

-- --------------------------------------------------------

--
-- Table structure for table `health_personnel`
--

CREATE TABLE `health_personnel` (
  `healthpersonnelID` int(11) NOT NULL,
  `qualification` varchar(40) DEFAULT NULL,
  `no_of_Patients_assigned` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_personnel`
--

INSERT INTO `health_personnel` (`healthpersonnelID`, `qualification`, `no_of_Patients_assigned`) VALUES
(6, 'Nurse', 2),
(7, 'Doctor', 3);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `Diabetes_status` enum('Diabetic','Non-Diabetic') DEFAULT NULL,
  `HBP_status` enum('Hypertensive','non-Hypertensive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `Diabetes_status`, `HBP_status`) VALUES
(1, 'Diabetic', 'Hypertensive'),
(2, 'Diabetic', 'non-Hypertensive'),
(3, 'Non-Diabetic', 'non-Hypertensive'),
(4, 'Diabetic', 'Hypertensive'),
(5, 'Diabetic', 'Hypertensive');

-- --------------------------------------------------------

--
-- Table structure for table `patient_healthpersonnel`
--

CREATE TABLE `patient_healthpersonnel` (
  `patientID` int(11) NOT NULL,
  `healthpersonnelID` int(11) NOT NULL,
  `messageToHealthPersonnel` varchar(1000) DEFAULT NULL,
  `messageFromHealthPersonnel` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_healthpersonnel`
--

INSERT INTO `patient_healthpersonnel` (`patientID`, `healthpersonnelID`, `messageToHealthPersonnel`, `messageFromHealthPersonnel`) VALUES
(2, 6, 'Contrary to popular belief, Lorem Ipsum is not simply random text. \nIt has roots in a piece of classical Latin literature from 45 BC, \nmaking it over 2000 years old. Richard McClintock,', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has \nroots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,'),
(3, 6, 'Contrary to popular belief, Lorem Ipsum is not simply random text. \nIt has roots in a piece of classical Latin literature from 45 BC, \nmaking it over 2000 years old. Richard McClintock,', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has \nroots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,'),
(4, 7, 'Contrary to popular belief, Lorem Ipsum is not simply random text. \nIt has roots in a piece of classical Latin literature from 45 BC, \nmaking it over 2000 years old. Richard McClintock,', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has \nroots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,'),
(5, 7, 'Contrary to popular belief, Lorem Ipsum is not simply random text. \nIt has roots in a piece of classical Latin literature from 45 BC, \nmaking it over 2000 years old. Richard McClintock,', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has \nroots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'deleted', 'Love you too'),
(1, 6, 'Hello world', 'Love you too'),
(1, 6, 'Hello theree.', 'Love you too'),
(6, 6, 'hello woah', NULL),
(6, 6, 'Hello Bruce, am not feeling well today, my BP is up', NULL),
(6, 6, 'hello there', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patient_products`
--

CREATE TABLE `patient_products` (
  `patientID` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `dob` date NOT NULL,
  `location` varchar(60) DEFAULT NULL,
  `contact` int(20) DEFAULT NULL,
  `plan` varchar(40) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`person_id`, `fname`, `lname`, `username`, `dob`, `location`, `contact`, `plan`, `pass`) VALUES
(1, 'Ropa', 'Daniels', 'ropadaniels', '1990-01-30', 'Berekuso', 249984352, 'Basic Monthly', 'Ropadaniels123@'),
(2, 'Rodney', 'Adams', 'rodneyadams', '1960-07-01', 'East Legon', 242984332, 'Premium Monthly', 'Rodneyadams456#'),
(3, 'Samantha', 'Quaye', 'samanthaquaye', '1985-06-12', 'Dansoman', 209584352, 'Basic Yearly', 'Samanthaquaye789*'),
(4, 'Stephen', 'Opana', 'stephenopana', '1970-01-30', 'Devtraco', 249984332, 'Premium Monthly', 'Stephenopana987)'),
(5, 'Yoofi', 'Awuah', 'yoofiawuah', '1989-02-21', 'Amasaman', 249983272, 'Basic Monthly', 'Yoofiawuah892('),
(6, 'Bruce', 'Jacks', 'brucejacks', '1973-04-29', 'Dansoman', 249989332, '', 'Brucejacks676&'),
(7, 'Grace', 'Andrews', 'graceandrews', '1980-02-21', 'Amasaman', 240083272, '', 'Graceandrews324()'),
(8, 'Rodney', 'Amah', 'rodneyamah', '2021-11-05', 'Ashesi', 559791693, 'basic-monthly', 'Management2014#'),
(9, 'Stephen', 'Ofori', 'stephenofori7', '2021-11-03', 'Ashesi', 559791693, 'basic-monthly', 'rodney123'),
(10, 'Ropa', 'Sacirarwe', 'ropasacirarwe', '2021-11-29', 'Accra', 55978223, 'basic-yearly', 'Management2014'),
(11, 'Samantha', 'Mavunga', 'smavunga123', '2021-11-04', 'Accra', 59791693, 'premium-monthly', 'Management2014#');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `price`, `quantity`) VALUES
(1, 'Bpkit', '190', 2),
(2, 'TempGun', '90', 1),
(3, 'Needle', '200', 1),
(4, 'Nosemask', '40', 2),
(5, 'sanitizer', '120', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Health_center`
--
ALTER TABLE `Health_center`
  ADD PRIMARY KEY (`center_id`),
  ADD KEY `patientID` (`patientID`);

--
-- Indexes for table `health_personnel`
--
ALTER TABLE `health_personnel`
  ADD PRIMARY KEY (`healthpersonnelID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_healthpersonnel`
--
ALTER TABLE `patient_healthpersonnel`
  ADD KEY `patientID` (`patientID`),
  ADD KEY `healthpersonnelID` (`healthpersonnelID`);

--
-- Indexes for table `patient_products`
--
ALTER TABLE `patient_products`
  ADD KEY `patientID` (`patientID`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Health_center`
--
ALTER TABLE `Health_center`
  ADD CONSTRAINT `Health_center_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `person` (`person_id`) ON UPDATE CASCADE;

--
-- Constraints for table `health_personnel`
--
ALTER TABLE `health_personnel`
  ADD CONSTRAINT `health_personnel_ibfk_1` FOREIGN KEY (`healthpersonnelID`) REFERENCES `person` (`person_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `person` (`person_id`) ON UPDATE CASCADE;

--
-- Constraints for table `patient_healthpersonnel`
--
ALTER TABLE `patient_healthpersonnel`
  ADD CONSTRAINT `patient_healthpersonnel_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `person` (`person_id`),
  ADD CONSTRAINT `patient_healthpersonnel_ibfk_2` FOREIGN KEY (`healthpersonnelID`) REFERENCES `person` (`person_id`);

--
-- Constraints for table `patient_products`
--
ALTER TABLE `patient_products`
  ADD CONSTRAINT `patient_products_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `person` (`person_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `patient_products_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`item_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

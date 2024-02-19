-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 01, 2022 at 11:26 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursework_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getBirthday` ()  BEGIN
    	SELECT 
        	*
       	FROM employee 
        WHERE MONTH(dob) = MONTH(NOW());
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `department_number` int(30) NOT NULL,
  `department_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `empid` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  `managerid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`empid`, `date`, `managerid`) VALUES
('07-4517183', '2022-12-01 22:33:58', '49-2217652'),
('22-9529013', '2022-12-01 22:29:03', '68-4171892'),
('36-7073092', '2022-12-01 22:59:29', '49-2217652'),
('55-3623151', '2022-12-01 19:30:35', '22-3708071');

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `department_name` varchar(30) NOT NULL,
  `building_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaint_number` int(30) NOT NULL,
  `complaint_date` date NOT NULL,
  `passenger_complaint_name` varchar(30) NOT NULL,
  `reason` text NOT NULL,
  `Hr_member_assigned` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(30) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `postal_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_email`
--

CREATE TABLE `customer_email` (
  `customerid` int(30) NOT NULL,
  `emailid` int(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `empid` int(20) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `department_management`
--

CREATE TABLE `department_management` (
  `department_number` int(20) NOT NULL,
  `managing_empid` varchar(100) NOT NULL,
  `no_of_employees` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverid` varchar(20) NOT NULL,
  `empid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `driver_hours`
--

CREATE TABLE `driver_hours` (
  `driverid` int(20) NOT NULL,
  `hours_a_week` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `empid` varchar(100) NOT NULL,
  `efname` varchar(30) NOT NULL,
  `esname` varchar(30) NOT NULL,
  `erel` varchar(20) NOT NULL,
  `ephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`empid`, `efname`, `esname`, `erel`, `ephone`) VALUES
('09-4856118', 'Kira', 'Loter', 'Sister', '07275 260 538'),
('22-3708071', 'Jereme', 'Slayford', 'Girlfriend', '07721 065 357'),
('30-3058947', 'Paten', 'Velten', 'Husband', '07747 283 371'),
('40-5288701', 'Kipp', 'Lavens', 'Boyfriend', '07356 401 825'),
('41-3659799', 'Baird', 'Fingleton', 'Father', '07789 751 694'),
('49-2217652', 'Nessy', 'Panting', 'Civil Partner', '07326 502 172'),
('55-3623151', 'Marcie', 'Prattington', 'Mother', '07297 230 400'),
('59-8394706', 'Norrie', 'Agis', 'Husband', '07463 837 928'),
('67-7636850', 'Cody', 'Shelter', 'Boyfriend', '07296 394 678'),
('68-4171892', 'Patty', 'Horsbourgh', 'Husband', '07235 513 354'),
('75-6520267', 'Renee ', 'Rudy', 'Father', '07547 928 939'),
('80-6524018', 'Ellis', 'Mcdeed', 'Wife', '07141 393 691'),
('98-1678319', 'Pablo', 'Guiness', 'Father', '07007 182 872');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `nin` varchar(100) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `managerid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `fname`, `sname`, `address`, `dob`, `nin`, `salary`, `department`, `managerid`) VALUES
('30-3058947', 'Hettie', 'Broadbent', '72 Taylor Palace', '1985-05-15', 'an167975t', '74,439.57 ', 'Packager', '40-5288701'),
('55-3623151', 'Malissia', 'Osgardby', '29416 Grover Alley', '1989-12-26', 'it152291r', '17424.03', 'Driver', '40-5288701'),
('59-8394706', 'Scotty', 'Keson', '14 Kipling Point', '1977-03-28', 'gx924268x', '67,107.29 ', 'Packager', '40-5288701'),
('67-7636850', 'Falice', 'Plaide', '56 Dayton Plaza', '1966-10-01', 'vl606950t', '58,909.33 ', 'Driver', '41-3659799'),
('75-6520267', 'Truda', 'Edleston', '258 Greenwood Place', '1989-12-10', 'tf577069v', '70,283.88 ', 'Driver', '68-4171892'),
('80-6524018', 'Amber', 'Left', '72 Gwant Road', '1988-08-12', 'tn459758p', '47,033.97 ', 'Packager', '40-5288701'),
('98-1678319', 'Lamar', 'Chester', '2234 Heffernan Place', '1978-05-19', 'wh660279o', '97,090.47 ', 'Driver', '40-5288701');

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `on_employee_delete` BEFORE DELETE ON `employee` FOR EACH ROW BEGIN
    	INSERT INTO audit
    	SET empid = OLD.empid,
        	date = NOW(),
        	managerid = OLD.managerid;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerid` varchar(50) NOT NULL,
  `mfname` varchar(30) NOT NULL,
  `msname` varchar(30) NOT NULL,
  `maddress` varchar(100) NOT NULL,
  `mdob` varchar(50) NOT NULL,
  `mnin` varchar(75) NOT NULL,
  `msalary` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerid`, `mfname`, `msname`, `maddress`, `mdob`, `mnin`, `msalary`, `department`) VALUES
('09-4856118', 'Olivia', 'MacPhee', '09 Saint Paul Point', '1992/07/16', 'dj312271a', '85,391.76 ', 'Management'),
('22-3708071', 'Rab', 'Feast', '9503 Buell Drive', '1999/10/10', 'rb499211c', '30,397.56 ', 'Management'),
('40-5288701', 'Ame', 'Balser', '2282 Sutteridge Lane', '1970/06/27', 'dt545040m', '71,557.80 ', 'Management'),
('41-3659799', 'Ruperta', 'Stobie', '2 Barby Parkway', '1989/07/10', 'zt656754o', '38,548.00', 'Management'),
('49-2217652', 'Georgia', 'Dvoski', '25 Moulton Lane', '1997/08/28', 'ht175666x', '87,452.13 ', 'Management'),
('68-4171892', 'Yoshi', 'Peakman', '641 Warner Point', '1970/05/22', 'to907441w', '20,293.38 ', 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `operation_area`
--

CREATE TABLE `operation_area` (
  `vehicle_name` varchar(30) NOT NULL,
  `operation_location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `orderid` int(20) NOT NULL,
  `productid` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `product_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `customerid` int(20) NOT NULL,
  `orderid` int(20) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `product_name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(30) NOT NULL,
  `quantity_in_warehouse` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `vehicle_name` varchar(30) NOT NULL,
  `route_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `route_address`
--

CREATE TABLE `route_address` (
  `route_name` varchar(30) NOT NULL,
  `start_address` varchar(30) NOT NULL,
  `end_address` varchar(30) NOT NULL,
  `arrival_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stops`
--

CREATE TABLE `stops` (
  `route_name` varchar(30) NOT NULL,
  `stopid` int(10) NOT NULL,
  `stop_address` varchar(30) NOT NULL,
  `stop_arrival_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleid` int(20) NOT NULL,
  `vehicle_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouseid` int(20) NOT NULL,
  `department_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_info`
--

CREATE TABLE `warehouse_info` (
  `department_number` int(20) NOT NULL,
  `department_size` int(20) NOT NULL,
  `purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD KEY `department_name` (`department_name`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD KEY `department_name` (`department_name`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD KEY `department_name` (`department_name`),
  ADD KEY `department_number` (`department_number`);

--
-- Indexes for table `department_management`
--
ALTER TABLE `department_management`
  ADD KEY `dep_fk` (`department_number`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerid`);

--
-- Indexes for table `operation_area`
--
ALTER TABLE `operation_area`
  ADD KEY `vehicle_name` (`vehicle_name`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD KEY `product_name` (`product_name`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD KEY `product_name` (`product_name`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD KEY `route_name` (`route_name`);

--
-- Indexes for table `route_address`
--
ALTER TABLE `route_address`
  ADD KEY `route_name` (`route_name`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD KEY `vehicle_name` (`vehicle_name`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD KEY `department_number` (`department_number`);

--
-- Indexes for table `warehouse_info`
--
ALTER TABLE `warehouse_info`
  ADD KEY `department_number` (`department_number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `building`
--
ALTER TABLE `building`
  ADD CONSTRAINT `building_fk` FOREIGN KEY (`department_name`) REFERENCES `area` (`department_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department_management`
--
ALTER TABLE `department_management`
  ADD CONSTRAINT `dep_fk` FOREIGN KEY (`department_number`) REFERENCES `department` (`department_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operation_area`
--
ALTER TABLE `operation_area`
  ADD CONSTRAINT `vehicle_fk` FOREIGN KEY (`vehicle_name`) REFERENCES `vehicle` (`vehicle_name`);

--
-- Constraints for table `product_list`
--
ALTER TABLE `product_list`
  ADD CONSTRAINT `product_fk` FOREIGN KEY (`product_name`) REFERENCES `ordered_products` (`product_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `route_address`
--
ALTER TABLE `route_address`
  ADD CONSTRAINT `route_fk` FOREIGN KEY (`route_name`) REFERENCES `route` (`route_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warehouse_info`
--
ALTER TABLE `warehouse_info`
  ADD CONSTRAINT `warehouse_fk` FOREIGN KEY (`department_number`) REFERENCES `warehouse` (`department_number`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

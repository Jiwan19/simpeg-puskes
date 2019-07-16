-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 03:56 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-09-03 11:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `skep`
--

CREATE TABLE `skep` (
  `id_skep` int(11) NOT NULL,
  `no_skep` varchar(255) NOT NULL,
  `tgl_skep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skep`
--

INSERT INTO `skep` (`id_skep`, `no_skep`, `tgl_skep`) VALUES
(1, 'KEP-01/HC/2014', '2014-12-28'),
(2, 'KEP-02/HC/2014', '2014-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbijazah`
--

CREATE TABLE `tbijazah` (
  `id` int(11) NOT NULL,
  `namafile` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `image_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbijazah`
--

INSERT INTO `tbijazah` (`id`, `namafile`, `keterangan`, `image_location`) VALUES
(1, 'JIwan', 'Ijazah SD', '01.jpg'),
(2, 'Rizal', 'Ijazah SD', 'okra-red-burgundy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(5, 'armanbasir7@gmail.com', 13, '12/09/2018', '13/09/2018', 'Semoga Bisa Bekerja Sama Pak Ya', 1, '2018-09-04 19:02:37'),
(6, 'abi@gmail.com', 12, '06/10/2018', '15/01/2019', 'Pak semoga kerja sama kita berjalan dengan baik\r\n', 0, '2018-09-05 02:20:39'),
(7, 'abi@gmail.com', 16, '2018-09-06 09:00', '2018-09-13 10:30', 'Semoga masih Ready Pak Ya', 0, '2018-09-05 02:35:20'),
(8, 'dede@gmail.com', 12, '2018-09-05 22:25', '2018-09-09 22:25', 'Pak Kami mohon konfirmasinya', 1, '2018-09-05 14:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

CREATE TABLE `tblbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(58, 'Volvo', '2018-09-04 18:29:10', NULL),
(59, 'Volkwagen', '2018-09-04 18:29:21', NULL),
(60, 'Juan', '2019-06-26 08:51:46', NULL),
(62, 'Jono', '2019-06-30 16:02:32', NULL),
(63, 'jojo', '2019-06-30 16:07:19', NULL),
(64, 'Rizal', '2019-07-01 12:39:35', NULL),
(65, 'Handono', '2019-07-03 04:48:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusinfo`
--

CREATE TABLE `tblcontactusinfo` (
  `id` int(11) NOT NULL,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'Jl. Malino, Kel Malino, Kabupaten Gowa, Sulawesi Selatan, Indonesia 92145', 'armandelta7@gmail.com', '+62 81 5247 37292');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

CREATE TABLE `tblcontactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(3, 'Arman', 'armandelta7@gmail.com', '08152473729', 'Pak Bagaimana dengan yang kemarin saya bilang, kok Begitu ya', '2018-09-04 19:43:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '<i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>'),
(2, 'Privacy Policy', 'privacy', '<i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>'),
(3, 'About Us ', 'aboutus', '<i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>'),
(11, 'FAQs', 'faqs', '<i style=\"color: rgb(34, 34, 34); font-family: sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</i>');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscribers`
--

CREATE TABLE `tblsubscribers` (
  `id` int(11) NOT NULL,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(5, 'armandelta7@gmail.conm', '2018-09-04 19:45:32'),
(6, 'armandelta@gmail.com', '2018-09-05 14:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbltestimonial`
--

CREATE TABLE `tbltestimonial` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(3, 'armanbasir7@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2018-09-04 19:14:29', 1),
(4, 'abi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2018-09-04 19:19:22', 1),
(5, 'lawan@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2018-09-04 19:22:08', 1),
(6, 'alif@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. \r\n\r\n', '2018-09-04 19:23:49', 1),
(7, 'ardi@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '2018-09-04 19:26:44', 1),
(8, 'dede@gmail.com', 'Car Rental adalah website terbaik untuk melakukan pemasanan rentarl mobil dengan harga yang sangat terjangku.', '2018-09-05 14:31:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` varchar(25) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(6, 'Arman', 'armanbasir7@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '0815247372', '', 'Mamampang, garassi Tinggimocong, Gowa, Indonesia', 'Makassar', 'Malino', '2018-09-04 19:01:42', '2018-09-04 19:13:26'),
(7, 'Abi', 'abi@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '0817625676', '12/03/2007', 'Pettarani, Makassar, Kota Mkassar, Sulawesi Selatan', 'Makassar', 'Makassar', '2018-09-04 19:17:55', '2018-09-04 19:19:06'),
(8, 'Lawan', 'lawan@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '081245678', NULL, NULL, NULL, NULL, '2018-09-04 19:20:45', NULL),
(9, 'Alif', 'alif@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '0814527998', NULL, NULL, NULL, NULL, '2018-09-04 19:23:15', NULL),
(10, 'Nur Ardi', 'ardi@gmail.com', 'f69d037742b470f00879e81b7835a1a3', '0824578756', NULL, NULL, NULL, NULL, '2018-09-04 19:26:12', NULL),
(11, 'Dede', 'dede@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '081524737292', '1899-12-31 00:00', 'Makassar, Jalan Pettarani, Sulawesi-Selatan', 'Makassar', 'Makassar', '2018-09-05 14:26:21', '2018-09-05 14:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

CREATE TABLE `tblvehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `Vimage6` varchar(120) DEFAULT NULL,
  `Vimage7` varchar(120) DEFAULT NULL,
  `Vimage8` varchar(120) DEFAULT NULL,
  `Vimage9` varchar(120) DEFAULT NULL,
  `Vimage10` varchar(120) DEFAULT NULL,
  `Vimage11` varchar(120) DEFAULT NULL,
  `Vimage12` varchar(120) DEFAULT NULL,
  `Vimage13` varchar(120) DEFAULT NULL,
  `Vimage14` varchar(120) DEFAULT NULL,
  `Vimage15` varchar(120) DEFAULT NULL,
  `Vimage16` varchar(120) DEFAULT NULL,
  `Vimage17` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `Vimage6`, `Vimage7`, `Vimage8`, `Vimage9`, `Vimage10`, `Vimage11`, `Vimage12`, `Vimage13`, `Vimage14`, `Vimage15`, `Vimage16`, `Vimage17`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(17, '090', 60, NULL, NULL, NULL, NULL, NULL, '01.jpg', '4.jpg', '15220149_1313349965384197_5758187906564869230_n.jpg', '15672640_294331304301886_6748352576243898231_n.png', '22780154_1902298796461835_7652214456419765896_n.jpg', 'okra-red-burgundy.jpg', 'okra-hijau.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-26 08:53:45', '2019-06-30 16:29:05'),
(18, 'jojo', 11, 'ahay', 10000, 'Petrol', 2019, 0, '23167586_836519173193004_2683191107680294283_n.jpg', 'lolos5.png', 'WhatsApp Image 2017-05-21 at 18.37.35.jpeg', '24914752-Anyaman-bakul-2-Stock-Photo.jpg', 'virtual account.JPG', 'virtual account.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2019-06-28 21:06:04', NULL),
(19, 'juna', 11, 'a', 80808, 'Diesel', 2021, 0, '01.jpg', '4.jpg', '15220149_1313349965384197_5758187906564869230_n.jpg', '2.png', '15672640_294331304301886_6748352576243898231_n.png', '22780154_1902298796461835_7652214456419765896_n.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-28 21:18:02', NULL),
(20, 'juju', 12, 'ewe', 10000, 'Petrol', 2029, 0, '01.jpg', '1.JPG', '15672640_294331304301886_6748352576243898231_n.png', '01.PNG', '03.JPG', '20160812_185200.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-28 21:25:52', NULL),
(21, 'bizarre', 12, 'ahay', 80809, 'Diesel', 1997, 0, '01.jpg', '1.JPG', '2.png', '01.PNG', '2.JPG', '03.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-28 21:30:33', NULL),
(22, 'kok', 12, 'aww', 8080, 'Petrol', 2029, 0, '01.JPG', '03.JPG', '05.JPG', '02.JPG', '04.JPG', '06.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-28 21:34:47', NULL),
(23, '090', 62, NULL, NULL, NULL, NULL, NULL, NULL, '01.jpg', '01.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-30 16:53:41', '2019-07-01 12:45:05'),
(24, '11233', 59, NULL, NULL, NULL, NULL, NULL, '15220149_1313349965384197_5758187906564869230_n.jpg', '15220149_1313349965384197_5758187906564869230_n.jpg', '15220149_1313349965384197_5758187906564869230_n.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-30 16:54:54', NULL),
(25, '12345', 65, NULL, NULL, NULL, NULL, NULL, 'okra-hijau.jpg', 'okra-red-burgundy.jpg', 'okra-red-burgundy.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-03 04:49:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbpegawai`
--

CREATE TABLE `tbpegawai` (
  `id` int(20) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `statusperkawinan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `statuspegawai` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpegawai`
--

INSERT INTO `tbpegawai` (`id`, `nip`, `nama`, `jeniskelamin`, `jabatan`, `statusperkawinan`, `agama`, `tempatlahir`, `tanggallahir`, `statuspegawai`, `alamat`, `telepon`) VALUES
(2, '101', 'jiwan', 'laki - laki', 'staff', 'belum kawin', 'islam', 'jepara', '2019-07-03', 'kontrak', 'Mulyoharjo', '0822237868019'),
(3, '0100', 'Rizal', 'laki laki', 'staff', 'belum', 'islam', 'jepara', '2017-11-19', 'kontrak', 'Mulyoharjo', '082223786032'),
(5, '020', 'ayu ', 'Perempuan', 'staff', 'Belum Kawin', 'Islam', 'jepara', '2019-07-26', 'Kontrak', 'Kecapi', '082223786080'),
(6, '010', 'galeh', 'Laki-laki', 'staff', 'Kawin', 'Islam', 'Pengkol', '2019-07-12', 'Tetap', 'Kecapi', '082223786019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skep`
--
ALTER TABLE `skep`
  ADD PRIMARY KEY (`id_skep`);

--
-- Indexes for table `tbijazah`
--
ALTER TABLE `tbijazah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbrands`
--
ALTER TABLE `tblbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skep`
--
ALTER TABLE `skep`
  MODIFY `id_skep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbijazah`
--
ALTER TABLE `tbijazah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblbrands`
--
ALTER TABLE `tblbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tblcontactusinfo`
--
ALTER TABLE `tblcontactusinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontactusquery`
--
ALTER TABLE `tblcontactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblsubscribers`
--
ALTER TABLE `tblsubscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbltestimonial`
--
ALTER TABLE `tbltestimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblvehicles`
--
ALTER TABLE `tblvehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

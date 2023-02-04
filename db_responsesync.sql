-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: custsql-ipg82.eigbox.net
-- Generation Time: Apr 18, 2022 at 01:33 AM
-- Server version: 5.6.49-89.0-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_responsesync`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblincident`
--

CREATE TABLE `tblincident` (
  `incidentId` int(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `incidentType` varchar(255) NOT NULL,
  `additionalDetails` varchar(255) NOT NULL,
  `reportDnT` datetime(6) NOT NULL,
  `submittedAddress` varchar(255) NOT NULL,
  `respondDnT` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblincident`
--

INSERT INTO `tblincident` (`incidentId`, `userId`, `incidentType`, `additionalDetails`, `reportDnT`, `submittedAddress`, `respondDnT`) VALUES
(1, 0, '', '', '0000-00-00 00:00:00.000000', '', '0000-00-00 00:00:00.000000'),
(2, 2, 'Droughts Related Incident', 'asd', '2021-11-28 00:15:46.000000', 'Profile Address: 2322, Building 2, 23, Keme, Brangay, Taguig, 1024', '0000-00-00 00:00:00.000000'),
(3, 2, 'Droughts Related Incident', 'asd', '2021-11-28 00:16:02.000000', '14.5255468,121.0678959', '0000-00-00 00:00:00.000000'),
(4, 2, 'Droughts Related Incident', 'asd', '2021-11-28 00:16:05.000000', '', '0000-00-00 00:00:00.000000'),
(5, 2, 'Droughts Related Incident', 'asd', '2021-11-28 00:16:19.000000', '', '0000-00-00 00:00:00.000000'),
(6, 2, 'Droughts Related Incident', 'asd', '2021-11-28 00:16:57.000000', '', '0000-00-00 00:00:00.000000'),
(7, 2, 'Droughts Related Incident', 'te', '2021-11-28 00:17:38.000000', '', '0000-00-00 00:00:00.000000'),
(8, 2, 'Droughts Related Incident', 'h', '2021-11-28 00:33:57.000000', 'Profile Address: 2322, Building 2, 23, Keme, Brangay, Taguig, 1024', '0000-00-00 00:00:00.000000'),
(9, 2, 'Droughts Related Incident', 'h', '2021-11-28 00:34:09.000000', '14.5255468,121.0678959', '0000-00-00 00:00:00.000000'),
(10, 2, 'Droughts Related Incident', 'h', '2021-11-28 00:34:24.000000', 'Provided Address: a ,a ,a ,as ,a ,a ,a ,', '0000-00-00 00:00:00.000000'),
(11, 2, 'Droughts Related Incident', 'h', '2021-11-28 00:35:27.000000', 'Provided Address: a ,a ,a ,as ,a ,a ,a ,', '0000-00-00 00:00:00.000000'),
(12, 2, 'Droughts Related Incident', 'sdf', '2021-11-28 00:35:34.000000', '14.5255468,121.0678959', '0000-00-00 00:00:00.000000'),
(13, 2, 'Droughts Related Incident', 'sdf', '2021-11-28 00:35:57.000000', '14.5255468,121.0678959', '0000-00-00 00:00:00.000000'),
(14, 1, 'Fire Related Incident', 'asdasda', '2021-11-29 11:19:26.000000', 'Profile Address: address', '2021-11-29 11:22:04.000000'),
(15, 1, 'Fire Related Incident', 'TEST', '2021-11-28 13:50:53.000000', 'Profile Address: address', '2021-11-29 11:33:31.000000'),
(16, 1, 'Fire Related Incident', 'test', '2021-11-28 18:07:50.000000', '14.5255468,121.0678959', '2021-11-29 20:18:18.000000'),
(17, 1, 'Fire Related Incident', 'tesrt', '2021-11-28 18:12:50.000000', '14.5255468,121.0678959', '2021-12-02 22:56:22.000000'),
(18, 1, 'Fire Related Incident', 'asd', '2021-11-28 19:12:42.000000', '14.5255468,121.0678959', '2021-12-02 22:56:27.000000'),
(19, 2, 'Droughts Related Incident', 'Sample details', '2021-11-28 20:20:31.000000', '14.5275149,121.0613124', '0000-00-00 00:00:00.000000'),
(20, 2, 'Fire Related Incident', 'Fire Report ', '2021-11-28 20:30:25.000000', 'Provided Address: 1 ,2 ,3 ,Manila ,Manila ,Manila ,0000 ,', '2021-12-02 22:56:31.000000'),
(21, 1, 'Fire Related Incident', 'lm', '2021-11-29 12:10:35.000000', 'Profile Address: address', '2021-11-29 12:10:47.000000'),
(22, 47, 'Earthquake Related Incident', 'asd', '2021-11-29 14:30:48.000000', 'Profile Address: ', '0000-00-00 00:00:00.000000'),
(23, 47, 'Droughts Related Incident', 'a', '2021-11-29 14:40:44.000000', '14.5248459,121.0413051', '0000-00-00 00:00:00.000000'),
(24, 47, 'Droughts Related Incident', 'a', '2021-11-29 14:41:02.000000', 'Profile Address: ', '0000-00-00 00:00:00.000000'),
(25, 47, 'Droughts Related Incident', 'a', '2021-11-29 14:42:13.000000', '', '0000-00-00 00:00:00.000000'),
(26, 47, 'Droughts Related Incident', 'a', '2021-11-29 14:42:55.000000', 'Provided Address: a ,a ,a ,a ,a ,a ,a ,', '0000-00-00 00:00:00.000000'),
(27, 47, 'Droughts Related Incident', '12', '2021-11-29 14:44:09.000000', 'Profile Address: 12, 12, 12, 12, 12, 12, 12', '0000-00-00 00:00:00.000000'),
(28, 3, 'Thunder Storm and Lightning Related Incident', 'E', '2021-11-29 17:29:00.000000', 'Profile Address: 2322, Building 2, 23, Keme, Brangay, Taguig, 1024', '0000-00-00 00:00:00.000000'),
(29, 2, 'Fire Related Incident', 'test', '2021-11-29 20:13:37.000000', '14.5599,121.081', '2021-11-29 20:19:38.000000'),
(30, 1, 'Fire Related Incident', 'asd', '2021-11-29 20:32:16.000000', 'Profile Address: address', '2021-12-02 22:56:34.000000'),
(31, 1, 'Fire Related Incident', 'asd', '2021-12-03 11:31:27.000000', 'Profile Address: address', '2021-12-03 11:38:06.000000'),
(32, 1, 'Fire Related Incident', 'asd', '2021-12-03 11:31:34.000000', 'Profile Address: address', '2021-12-03 11:38:23.000000'),
(33, 1, 'Fire Related Incident', 'asd', '2021-12-03 11:31:38.000000', 'Profile Address: address', '2021-12-03 11:41:23.000000'),
(34, 1, 'Fire Related Incident', 'asd', '2021-12-03 11:31:42.000000', 'Profile Address: address', '0000-00-00 00:00:00.000000'),
(35, 2, 'Fire Related Incident', 'test', '2021-12-03 11:45:23.000000', ',', '0000-00-00 00:00:00.000000'),
(36, 2, 'Fire Related Incident', 'fff', '2021-12-03 11:46:29.000000', 'Profile Address: 2322, Building 2, 23, Keme, Brangay, Taguig, 1024', '0000-00-00 00:00:00.000000'),
(37, 2, 'Droughts Related Incident', 'ff', '2021-12-03 11:47:30.000000', ',', '0000-00-00 00:00:00.000000'),
(38, 2, 'Droughts Related Incident', 'yy', '2021-12-03 11:56:43.000000', ',', '0000-00-00 00:00:00.000000'),
(39, 2, 'Fire Related Incident', 'test', '2021-12-03 12:03:31.000000', '14.5260544,121.044992', '0000-00-00 00:00:00.000000'),
(40, 2, 'Fire Related Incident', 'fd', '2021-12-03 12:04:00.000000', '14.5260544,121.044992', '0000-00-00 00:00:00.000000'),
(41, 2, 'Droughts Related Incident', 'df', '2021-12-03 12:04:22.000000', 'Profile Address: 2322, Building 2, 23, Keme, Brangay, Taguig, 1024', '0000-00-00 00:00:00.000000'),
(42, 2, 'Droughts Related Incident', 'd', '2021-12-03 12:04:45.000000', 'Provided Address: d ,d ,d ,d ,d ,d ,d ,', '0000-00-00 00:00:00.000000'),
(43, 2, 'Droughts Related Incident', 'jj', '2021-12-03 12:05:55.000000', ',', '0000-00-00 00:00:00.000000'),
(44, 1, 'Fire Related Incident', 'a', '2021-12-03 12:05:57.000000', '14.524892,121.0412894', '0000-00-00 00:00:00.000000'),
(45, 2, 'Fire Related Incident', 'ygg', '2021-12-03 12:06:28.000000', ',', '0000-00-00 00:00:00.000000'),
(46, 1, 'Droughts Related Incident', '1', '2021-12-03 12:06:48.000000', 'Provided Address: 1 ,1 ,1 ,1 ,1 ,1 ,1 ,', '0000-00-00 00:00:00.000000'),
(47, 1, 'Droughts Related Incident', 'asd', '2021-12-03 12:07:08.000000', 'Profile Address: address', '0000-00-00 00:00:00.000000'),
(48, 1, 'Droughts Related Incident', 'asd', '2021-12-03 12:07:11.000000', 'Profile Address: address', '0000-00-00 00:00:00.000000'),
(49, 1, 'Fire Related Incident', '123', '2021-12-03 12:08:02.000000', 'Provided Address: 123 ,123 ,123 ,123 ,123 ,123 ,123 ,', '0000-00-00 00:00:00.000000'),
(50, 1, 'Fire Related Incident', '123', '2021-12-03 12:09:04.000000', 'Provided Address: 111111111111111111111 ,123 ,123 ,123 ,123 ,123 ,123 ,', '0000-00-00 00:00:00.000000'),
(51, 1, 'Fire Related Incident', '222', '2021-12-03 12:09:31.000000', 'Provided Address: 22222 ,22222 ,22 ,22 ,22 ,22 ,222 ,', '0000-00-00 00:00:00.000000'),
(52, 2, 'Vulcanic Eruption Related Incident', 'tvtvtvg', '2021-12-03 12:10:43.000000', ',', '0000-00-00 00:00:00.000000'),
(53, 2, 'Storm Surge Related Incident', 'hhybgv', '2021-12-03 12:12:15.000000', ',', '0000-00-00 00:00:00.000000'),
(54, 1, 'Fire Related Incident', '123', '2021-12-03 12:13:58.000000', 'Provided Address: 123 ,123 ,123 ,123 ,123 ,123 ,123 ,', '0000-00-00 00:00:00.000000'),
(55, 1, 'Fire Related Incident', '12', '2021-12-03 12:15:39.000000', 'Provided Address: 12 ,12 ,12 ,12 ,12 ,12 ,12 ,', '0000-00-00 00:00:00.000000'),
(56, 2, 'Landslide Related Incident', 'tvtvt', '2021-12-03 12:16:32.000000', ',', '0000-00-00 00:00:00.000000'),
(57, 1, 'Fire Related Incident', '123', '2021-12-03 12:17:08.000000', 'Profile Address: address', '0000-00-00 00:00:00.000000'),
(58, 1, 'Fire Related Incident', 'test1', '2021-12-03 12:18:07.000000', '14.524892,121.0412894', '0000-00-00 00:00:00.000000'),
(59, 2, 'Landslide Related Incident', 'ggg', '2021-12-03 12:32:15.000000', ',', '0000-00-00 00:00:00.000000'),
(60, 1, 'Fire Related Incident', 'asd', '2021-12-03 12:34:16.000000', 'Provided Address: asd ,asd ,asd ,asd ,asd ,asd ,asd ,', '0000-00-00 00:00:00.000000'),
(61, 1, 'Fire Related Incident', 'asd', '2021-12-03 12:34:42.000000', 'Profile Address: 23, Building 2, 23, Keme, Brangay, Taguig, 1024', '0000-00-00 00:00:00.000000'),
(62, 1, 'Fire Related Incident', 'asd', '2021-12-03 12:35:05.000000', '14.524892,121.0412894', '0000-00-00 00:00:00.000000'),
(63, 2, 'Droughts Related Incident', 'hshs', '2021-12-03 12:36:38.000000', ',', '0000-00-00 00:00:00.000000'),
(64, 2, 'Fire Related Incident', 'jsjshshsh', '2021-12-03 12:51:12.000000', ',', '0000-00-00 00:00:00.000000'),
(65, 2, 'Fire Related Incident', 'ushshs', '2021-12-03 12:52:00.000000', ',', '0000-00-00 00:00:00.000000'),
(66, 50, 'Droughts Related Incident', 'weqqw', '2021-12-03 14:44:10.000000', ',', '0000-00-00 00:00:00.000000'),
(67, 50, 'Droughts Related Incident', 'weqqw', '2021-12-03 14:45:12.000000', ',', '0000-00-00 00:00:00.000000'),
(68, 50, 'Fire Related Incident', 'weqqw', '2021-12-03 14:45:19.000000', ',', '0000-00-00 00:00:00.000000'),
(69, 51, 'Droughts Related Incident', 'may pumutok na wire ng kuryente', '2021-12-03 21:18:51.000000', ',', '0000-00-00 00:00:00.000000'),
(70, 1, 'Droughts Related Incident', 'asd', '2021-12-04 14:00:00.000000', 'Provided Address:  , , , ,asd ,asd ,asd ,', '0000-00-00 00:00:00.000000'),
(71, 1, 'Fire Related Incident', 'asd', '2021-12-04 14:00:16.000000', 'Provided Address:  , , , ,asd ,asd ,asd ,', '0000-00-00 00:00:00.000000'),
(72, 1, 'Fire Related Incident', '123', '2021-12-04 14:01:55.000000', 'Provided Address: 123 ,123 ,123 ,123 ,', '2021-12-04 14:06:16.000000'),
(73, 1, 'Droughts Related Incident', '11', '2021-12-04 14:06:35.000000', 'Provided Address: 11 ,11 ,11 ,11 ,', '0000-00-00 00:00:00.000000'),
(74, 1, 'Fire Related Incident', 'additional', '2021-12-04 14:06:57.000000', 'Provided Address: long address ,barangay ,city ,zip ,', '2022-01-13 09:35:47.000000'),
(75, 1, 'Fire Related Incident', 'using profile address', '2021-12-04 14:07:06.000000', 'Profile Address: 123, Brangay, Taguig, 1024', '2022-01-13 09:35:44.000000'),
(76, 50, 'Droughts Related Incident', '1234', '2021-12-04 18:27:18.000000', 'Profile Address: 305 Mendiola St., Alabang , Muntinlupa City, 1781', '0000-00-00 00:00:00.000000'),
(77, 50, 'Droughts Related Incident', '1234', '2021-12-04 18:27:37.000000', 'Profile Address: 305 Mendiola St., Alabang , Muntinlupa City, 1781', '0000-00-00 00:00:00.000000'),
(78, 54, 'Thunder Storm and Lightning Related Incident', 'Thunder struck near me', '2021-12-06 00:19:40.000000', 'Profile Address: 742 Benita St. Gagalangin Tondo , Barangay 185, ManILA, 1013', '0000-00-00 00:00:00.000000'),
(79, 84, 'Fire Related Incident', 'My neighborhood is on fire, and weÂ need more fire trucks.Â ', '2021-12-19 22:06:06.000000', 'Profile Address: 1003 Lacson Ave., Santa Cruz,, Bgry..350, Manila City, 1003', '2021-12-20 00:53:22.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userId` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `combiAddress` varchar(255) NOT NULL,
  `barangayDistrict` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `ZIPCode` varchar(255) NOT NULL,
  `imgDir` varchar(255) NOT NULL,
  `privileges` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userId`, `username`, `password`, `fullName`, `gender`, `birthday`, `age`, `email`, `phone`, `address`, `combiAddress`, `barangayDistrict`, `city`, `ZIPCode`, `imgDir`, `privileges`) VALUES
(1, 'admin', '161ebd7d45089b3446ee4e0d86dbcf92', 'Myke Ernan Trambulo', 'Male', '11/16/2021', '25', 'mykernanpt@gmail.com', '09123123123', '123, Brangay, Taguig, 1024', '123', 'Brangay', 'Taguig', '1024', '../images/profile/', 'Fire'),
(2, 'admin2', '161ebd7d45089b3446ee4e0d86dbcf92', 'Myke Ernan Trambulo', 'Male', '11/16/2021', '25', 'mykernanpt@gmail.com', '09123123123', '2322, Building 2, 23, Keme, Brangay, Taguig, 1024', 'Keme', 'Brangay', 'Taguig', '1024', '../images/profile/me.jpg', 'Typhoon'),
(3, 'superadmin', '161ebd7d45089b3446ee4e0d86dbcf92', 'Myke Ernan Trambulo', 'Male', '11/16/2021', '25', 'mykernanpt@gmail.com', '09123123123', '2322, Building 2, 23, Keme, Brangay, Taguig, 1024', 'Keme', 'Brangay', 'Taguig', '1024', '../images/profile/me.jpg', 'Response Sync'),
(4, 'test', 'test', '', '', '', '', '', '', '', '', '', '', '', '', 'None'),
(5, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(6, '12', 'c20ad4d76fe97759aa27a0c99bff6710', '12', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(7, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(8, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(9, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(10, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(11, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(12, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(13, 'test', 'c4ca4238a0b923820dcc509a6f75849b', '1', '', '', '', '', '', '', '', '', '', '', '', 'privileges'),
(14, 'test', 'c4ca4238a0b923820dcc509a6f75849b', '1', '', '', '', '', '', '', '', '', '', '', '', 'None'),
(15, 'test', 'c4ca4238a0b923820dcc509a6f75849b', '1', '', '', '', '', '', '', '', '', '', '', '', 'None'),
(16, '123123', '4297f44b13955235245b2497399d7a93', '123123', '', '', '', 'myke.trambulo@annexdigitalinc.com', '', '', '', '', '', '', '', 'None'),
(17, '123', '4297f44b13955235245b2497399d7a93', '123123', '', '', '', '111111@gmail', '', '', '', '', '', '', '', 'None'),
(18, 'asdasdasdasd', 'a8f5f167f44f4964e6c998dee827110c', '111111', '', '', '', '111111@gmail', '', '', '', '', '', '', '', 'None'),
(19, 'ewan', 'a8f5f167f44f4964e6c998dee827110c', 'asdasd', '', '', '', 'asdasd@dsad', '', '', '', '', '', '', '', 'None'),
(20, 'test123', '202cb962ac59075b964b07152d234b70', 'Gardo Dalisay', '', '', '', '111111@gmail', '', '', '', '', '', '', '', 'None'),
(21, 'ewan', '4297f44b13955235245b2497399d7a93', 'ewan', '', '', '', '456456@ds', '', '', '', '', '', '', '', 'None'),
(22, 'gfgfgfgf', '2f4cdd81258da5f104bb343ab9d13ef1', 'gfgf', '', '', '', 'asdasd@dsad', '', '', '', '', '', '', '', 'None'),
(23, 'gfgf', '4297f44b13955235245b2497399d7a93', '123123', '', '', '', '12@asd', '', '', '', '', '', '', '', 'None'),
(24, 'gfgf', '4297f44b13955235245b2497399d7a93', '123123', '', '', '', 'tete@s', '', '', '', '', '', '', '', 'None'),
(25, '12312312312312312312312312312', '4297f44b13955235245b2497399d7a93', 'gardo bersosa', '', '', '', 'uy@fd', '', '', '', '', '', '', '', 'None'),
(26, '12312312312312312312312312312', '4297f44b13955235245b2497399d7a93', '123123', '', '', '', 'asdasd@dsad', '', '', '', '', '', '', '', 'None'),
(27, '123321', '4297f44b13955235245b2497399d7a93', '123123', '', '', '', '456456@ds', '', '', '', '', '', '', '', 'None'),
(28, 'uuuu', '8de1ebe5220196d6acdb486f346fe162', 'u', '', '', '', 'tete@s', '', '', '', '', '', '', '', 'None'),
(29, 'uuuu', '8de1ebe5220196d6acdb486f346fe162', 'uuuu', '', '', '', 'uuuu@u', '', '', '', '', '', '', '', 'None'),
(30, 'tttt', '45fcaeafd8ebec14bece68f7f00ca154', 'tttt', '', '', '', 'tttt@d', '', '', '', '', '', '', '', 'None'),
(31, 'tttt', '45fcaeafd8ebec14bece68f7f00ca154', 'tttttttt', '', '', '', '12@asd', '', '', '', '', '', '', '', 'None'),
(32, 'tttt', '47eaaabbfd522e34c5c9f64983106dbe', 'tttttttt', '', '', '', 'tttttttt@g', '', '', '', '', '', '', '', 'None'),
(33, 'tttt', '45fcaeafd8ebec14bece68f7f00ca154', 'tttttttt', '', '', '', 'ttttttttasd@s', '', '', '', '', '', '', '', 'None'),
(34, 'tttt', '45fcaeafd8ebec14bece68f7f00ca154', 'tttttttt', '', '', '', 'ttttttttasd@s', '', '', '', '', '', '', '', 'None'),
(35, 'tttt', '45fcaeafd8ebec14bece68f7f00ca154', 'tttttttt', '', '', '', 'ttttttttasd@s', '', '', '', '', '', '', '', 'None'),
(36, 'tttt', '45fcaeafd8ebec14bece68f7f00ca154', 'tttttttt', '', '', '', 'ttttttttasd@s', '', '', '', '', '', '', '', 'None'),
(37, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '', '', '', '456456@ds', '', '', '', '', '', '', '', 'None'),
(38, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '', '', '', '456456@ds', '', '', '', '', '', '', '', 'None'),
(39, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '', '', '', '111111@gmail', '', '', '', '', '', '', '', 'None'),
(40, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '', '', '', '111111@gmail', '', '', '', '', '', '', '', 'None'),
(41, '111111', '96e79218965eb72c92a549dd5a330112', '111111', '', '', '', 'asdasd@dsad', '', '', '', '', '', '', '', 'None'),
(42, '1231231231231241241', '4297f44b13955235245b2497399d7a93', 'ses', '', '', '', '456456@ds', '', '', '', '', '', '', '', 'None'),
(43, '555555', '5b1b68a9abf4d2cd155c81a9225fd158', '555555', '', '', '', '555555@555555', '', '', '', '', '', '', '', 'None'),
(44, '555555', '5b1b68a9abf4d2cd155c81a9225fd158', '555555', '', '', '', '555555@555555', '', '', '', '', '', '', '', 'None'),
(45, '555555', '5b1b68a9abf4d2cd155c81a9225fd158', '555555', '', '', '', '555555@555555', '', '', '', '', '', '', '', 'None'),
(46, '555555555555', '5b1b68a9abf4d2cd155c81a9225fd158', '555555', '', '', '', '555555@555555', '', '', '', '', '', '', '', 'None'),
(47, '9999999', '202cb962ac59075b964b07152d234b70', 'Myke Ernan Trambulo', '--Please select Gender--', '11/29/2021', '12', '9999999@9999999', '12', '12, 12, 12, 12, 12, 12, 12', '12', '12', '12', '12', '', 'None'),
(48, 'sample', '4297f44b13955235245b2497399d7a93', 'Sample User', '', '', '', 'test@gmail.com', '', '', '', '', '', '', '', 'None'),
(49, 'test1123', 'bc41200b941374013737be5b4fe43640', 'test1123', '', '', '', '', '', '', '', '', '', '', '', 'None'),
(50, 'errol', '882361e2df598cc3cce9e22520a22384', 'Rommel Errol San Juan', 'Male', '03/14/1997', '24', 'errolsevilla@gmail.com', '639369994369', '305 Mendiola St., Alabang , Muntinlupa City, 1781', '305 Mendiola St.', 'Alabang ', 'Muntinlupa City', '1781', '', 'None'),
(51, 'roonnt', '5672de073423dd043bfc48f117b51824', 'Roniel Tapic', 'Male', '09/20/1997', '24', 'rnlchrst20@gmail.com', '2304230', '742 Benita St. Gagalangin Tondo , Barangay 185, Manila, 1013', '742 Benita St. Gagalangin Tondo ', 'Barangay 185', 'Manila', '1013', '../images/profile/jotaro.jpeg', 'None'),
(52, 'onniebahignit', '6a4567d283b83e06d7f9b93a984c2567', 'Onnie Tapic', 'Female', '12/24/1969', '52', 'evelyn_tapic@yahoo.com', '09493762931', '742 Benita St.Gagalangin Tondo Manila, 185 district II, Manila, 1013', '742 Benita St.Gagalangin Tondo Manila', '185 district II', 'Manila', '1013', '', 'None'),
(53, 'Apolonius', 'e10adc3949ba59abbe56e057f20f883e', 'Manolito Apolonio', '', '', '', 'manolitoapolonio1202@gmail.com', '', '', '', '', '', '', '', 'None'),
(54, 'onnie ', 'b2553ba0e33d8203503477b46a0029ff', 'Ronniedel A. Tapic', 'Male', '01/22/2011', '10', 'onnie22tapic@gmail.com', '', '742 Benita St. Gagalangin Tondo , Barangay 185, ManILA, 1013', '742 Benita St. Gagalangin Tondo ', 'Barangay 185', 'ManILA', '1013', '../images/profile/.jpeg', 'None'),
(55, 'Jmusni', '20ac1e813bafb7082de4b41e38d2046a', 'Jeremy Ivan Musni', '', '', '', 'musnijeremy24@gmail.com', '', '', '', '', '', '', '', 'None'),
(56, 'Daryl_lene1217', '2817dab3ed462cc98c0bc0c5883ab382', 'Jenalyn Joaquin Yabut ', '', '', '', 'joaquinjenalyn924@gmail.com', '', '', '', '', '', '', '', 'None'),
(57, 'dgmchem@yahoo.com', '5a64689fa5cdb82d6c56696acf2ba1c0', 'Dennis G. Mendoza', '', '', '', 'dgmchem@yahoo.com', '', '', '', '', '', '', '', 'None'),
(58, 'Wir empfehlen Ihnen Wem:responsesync.net https://audi.com', '67231cc6bd94c5767a10001ef793028e', 'Wir empfehlen Ihnen Wem:responsesync.net https://audi.com', '', '', '', 'everodo30@mail.ru', '', '', '', '', '', '', '', 'None'),
(59, 'JnLaliag', 'db7aa22a3eb4108dee4393b3c3d2bedc', 'Jojilou N. Laliag', '', '', '', 'alex08jilou@yahoo.com', '', '', '', '', '', '', '', 'None'),
(60, 'angie', 'f2010e3fb09906802b216754a373004c', 'Angelica Solver', '', '', '', 'angiesolver15@gmailcom', '', '', '', '', '', '', '', 'None'),
(61, 'aki', 'c8ec2d42530764b1212d8a1dc5264111', 'Jacqueline Macaraeg', '', '', '', 'itsjacquelinemacaraeg@gmail.com', '', '', '', '', '', '', '', 'None'),
(62, 'iciax', 'cd5722d6fbbc6870ac2e1a1fa9067e68', 'patricia guevarra', 'Female', '05/08/1997', '24', 'guevarra259@gmail.com', '09664196960', '29 lanzones st, quirino 2 a, quezon city, 1102', '29 lanzones st', 'quirino 2 a', 'quezon city', '1102', '', 'None'),
(63, 'micaaayyy', 'a121c9505e4f4c768bdc3869e3b2b3ef', 'Jullet Micaela Castro', '', '', '', 'micaaa.castro@yahoo.com', '', '', '', '', '', '', '', 'None'),
(64, 'Camsiiee', '5aa3078f769397ebc4e8037e49faf4d5', 'Camille Ann Caoile Cosme', '', '', '', 'camscosme02@gmail.com', '', '', '', '', '', '', '', 'None'),
(65, 'mrennier', '5071ee0d69b3ccfe0105bd8680defa5d', 'Rennier Quimbo', '', '', '', 'mrenquimbo@gmail.com', '', '', '', '', '', '', '', 'None'),
(66, 'markpineda', 'b5c0d6883d9d1ed6538b7db397567df7', 'mark pineda', '', '', '', 'markneilpineda@gmail.com', '', '', '', '', '', '', '', 'None'),
(67, 'neilbebeko', '27cdf75c37c88d6f4aa6a26b5fcfbe0e', 'mark', '', '', '', 'markbebeko@gmail.com', '', '', '', '', '', '', '', 'None'),
(68, 'bebekosineil00', '27cdf75c37c88d6f4aa6a26b5fcfbe0e', 'jerome pineda', '', '', '', 'markneil00@gmail.com', '', '', '', '', '', '', '', 'None'),
(69, 'jeromeneil', '27cdf75c37c88d6f4aa6a26b5fcfbe0e', 'jerome pineda', '', '', '', 'jeromeneilbebe@gmail.com', '', '', '', '', '', '', '', 'None'),
(70, 'joymanrique', '2eb4870cd398993293016078bfdea633', 'christine manrique', '', '', '', 'jhoymanrique123@gmail.com', '', '', '', '', '', '', '', 'None'),
(71, 'Mia', '1ed05c365e61646efa134af6f2e600d7', 'Miala Maria V. Cedo', '', '', '', 'mialacedo@gmail.com', '', '', '', '', '', '', '', 'None'),
(72, 'Diane Perez', '047a385362f5230fa428f58eded5a887', 'Diane Colleen M. Perez', '', '', '', 'diane.colleen.perez@gmail.com', '', '', '', '', '', '', '', 'None'),
(73, 'Charrisma', 'c9174d553406dac966b93ed3ea2020e4', 'Charrisma ortega', '', '', '', 'charrisacosta@yahoo.com', '', '', '', '', '', '', '', 'None'),
(74, 'Charrisma26', 'c9174d553406dac966b93ed3ea2020e4', 'Charrisma ortega', '', '', '', 'charrisacosta@yahoo.com', '', '', '', '', '', '', '', 'None'),
(75, 'chajustdummy', '487e8784c316955348f80753c610071b', 'Cha M.', '', '', '', 'chajustdummy@gmail.com', '', '', '', '', '', '', '', 'None'),
(76, 'Aaa', 'e10adc3949ba59abbe56e057f20f883e', 'Aaa', '', '', '', 'aaa@yahoo.com', '', '', '', '', '', '', '', 'None'),
(77, 'maye1021', 'dfbf94d668bc5dcf3ec9ee7d415c2dfe', 'Mariela', '', '', '', 'mariela.ricohermoso@gmail.com', '', '', '', '', '', '', '', 'None'),
(78, 'BTonette05', 'f1ba3f24211e56ed7353c178e194243e', 'Antoinette N. Bautista', '', '', '', 'btonette@gmail.com', '', '', '', '', '', '', '', 'None'),
(79, 'Eliziacalie08', '400af873c04f58d8442b459b665a461a', 'Elaine A. Olandez ', '', '', '', 'eliziacalie0508@gmail.com', '', '', '', '', '', '', '', 'None'),
(80, '@aaroncarl23', '498b8f9c32d5a76a02810571fb3469bd', 'Carl Magsayo', '', '', '', 'macmagsayo@tip.edu.ph', '', '', '', '', '', '', '', 'None'),
(81, 'abboaz', '56a5a294a9dfab23441be909f38c5c82', 'Angela Boaz O. Patron', '', '', '', 'mabpatron@tip.edu.ph', '', '', '', '', '', '', '', 'None'),
(82, 'Cassy', '2663d104b46183eed08600fcc8c5f258', 'Cassandra Gomez', '', '', '', 'cassandrasanjuangomez12@gmail.com', '', '', '', '', '', '', '', 'None'),
(83, 'Armin', '25d55ad283aa400af464c76d713c07ad', 'Armin', 'Male', '', '23', 'sabaslazaro1998@gmail.com', '09993041936', 'Purok 7, San Fabian, Echague, 3309', 'Purok 7', 'San Fabian', 'Echague', '3309', '', 'None'),
(84, 'ResponseSYNC', 'e10adc3949ba59abbe56e057f20f883e', 'Response Sync', 'Female', '06/01/2003', '18', 'responsesync@gmail.com', '09000000000', '1003 Lacson Ave., Santa Cruz,, Bgry..350, Manila City, 1003', '1003 Lacson Ave., Santa Cruz,', 'Bgry..350', 'Manila City', '1003', '', 'None'),
(85, 'Snwnn', 'c49701c19d7a268ca64da4708dc271b6', 'Errl', '', '', '', 'errolsevilla@ymail.com', '', '', '', '', '', '', '', 'None'),
(86, 'wqery', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Sunwan Sevila', '', '', '', 'mresanjuan@tip.edu.ph', '', '', '', '', '', '', '', 'None'),
(87, 'Esssantos', '84d961568a65073a3bcf0eb216b2a576', 'Ess S. Santos', '', '', '', 'esssantos777@gmail.com', '', '', '', '', '', '', '', 'None'),
(88, 'fireadmin', '161ebd7d45089b3446ee4e0d86dbcf92', 'Fire Admin', '', '', '', '', '', '', '', '', '', '', '', 'Fire');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblincident`
--
ALTER TABLE `tblincident`
  ADD PRIMARY KEY (`incidentId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblincident`
--
ALTER TABLE `tblincident`
  MODIFY `incidentId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2023 at 01:20 AM
-- Server version: 5.7.37-log
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eeal_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `Sales_List`
--

CREATE TABLE `Sales_List` (
  `id` int(11) NOT NULL,
  `Price` text CHARACTER SET utf8 NOT NULL,
  `Images_List` text NOT NULL,
  `Address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Size` text NOT NULL,
  `Number_Rooms` text NOT NULL,
  `Number_Kitchens` text NOT NULL,
  `Number_Bathrooms` text NOT NULL,
  `Number_Floors` text NOT NULL,
  `Display_Type` text CHARACTER SET utf8 NOT NULL,
  `Payment_Type` text CHARACTER SET utf8 NOT NULL,
  `User_Name` text NOT NULL,
  `User_Number` text NOT NULL,
  `Personal_id` text NOT NULL,
  `Status` text NOT NULL,
  `Data_Push` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Sales_List`
--

INSERT INTO `Sales_List` (`id`, `Price`, `Images_List`, `Address`, `Size`, `Number_Rooms`, `Number_Kitchens`, `Number_Bathrooms`, `Number_Floors`, `Display_Type`, `Payment_Type`, `User_Name`, `User_Number`, `Personal_id`, `Status`, `Data_Push`) VALUES
(93, '600,000', 'http://azozzalfiras.dev/api/Real_Estate/Uploads/f648963216adbab0e0945c9a4cde404c.jpeg http://azozzalfiras.dev/api/Real_Estate/Uploads/f01af50a2506ba314afc80fb6ebbd11b.jpeg', 'العراق', '500 متر', '5', '1', '3', '3', 'شقة', 'ايجار', 'عزوز الفراس', '9647719675127', 'http://azozzalfiras.dev/api/Real_Estate/Uploads/6eeb296fc0dbeb1b69a919a7b1781440.jpeg http://azozzalfiras.dev/api/Real_Estate/Uploads/617ce406657653e252c8920c4a04e1cb.jpeg', 'false', '2023/02/25'),
(94, '350', 'http://azozzalfiras.dev/api/Real_Estate/Uploads/e59bec554e5f98034a9b9f699ecffb37.octet-stream http://azozzalfiras.dev/api/Real_Estate/Uploads/7b13842586c4c197d432826180b68c8f.octet-stream', 'بغداد', '250', '2', '1', '1', '1', 'منزل', 'تأجير', 'سوزان الكرخي', '07722227582', 'http://azozzalfiras.dev/api/Real_Estate/Uploads/c7202281bb70ff731007a3a79d14704d.octet-stream http://azozzalfiras.dev/api/Real_Estate/Uploads/c890abe36321901c56ff2d04833d3a52.octet-stream', 'true', '2023/02/25'),
(95, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2023/02/25');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `User_Name` text CHARACTER SET utf8 NOT NULL,
  `User_Number` text NOT NULL,
  `User_Email` text NOT NULL,
  `Password` text NOT NULL,
  `Created_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `User_Name`, `User_Number`, `User_Email`, `Password`, `Created_at`) VALUES
(1, 'Azozz ALFiras', '9647719675127', '3zozzalfiras@gmail.com', '$2y$10$QyyKpJuih/WEYx9QReMre.36SrPbuKGryWZ8XW7LprnCThXXuABh.', '2023/2/5'),
(2, 'Azozz ALFiras', '9647746453128', 'azozzalfiras@gmail.com', '$2y$10$yy53y/ThjrPTrxR32pb2q.ocKxPTZigXqCJatWdQasc71cjGehAqS', '2023/02/05'),
(3, 'سوزان ', '07722227582', 'suzan.emad.99@gmail.com', '$2y$10$c3tWmFiJMPRxc.GCebdZtOMUQ9N.E5Dfxz8fQ2gOWk3rC0JrqJZ4W', '2023/02/07'),
(4, 'ةةةو', '949984', 'تبتنزب', '$2y$10$ZXBTRmJH78RhDXgJyHuO8ef55v5GSymqnBBw/3SmNP5QumZrRBSsG', '2023/02/07'),
(5, 'ةةوو', '8899', 'ةةووة', '$2y$10$jU4TG0JziWIAzsM5G64PEO3oQoBgjD/Squrry.8JttCrJdW4ObLmm', '2023/02/07'),
(6, 'بسمة', '07722227582', 'vxdhj@gmail.com', '$2y$10$vVuJ4CQTBa9.I9BWuQ/VVuOehDbatW0MOTKxLua7qWF3Is.4Ge0eq', '2023/02/07'),
(7, 'سوزان٢', '07722227582', 'suzan.emad.99 @gmail.com', '$2y$10$oNOladAPrlrRqciKMiPFEObvOc7AyHIOqd4Xh8ZPpCT/7RCTLBkES', '2023/02/07'),
(8, 'nffj', '665464', 'bdjdd', '$2y$10$8dsw7/J13Qv747fUBEwKv.s2iLNL4XP.H4pT63piayRMKncr9KHW2', '2023/02/07'),
(9, 'suz', '0048664358', 'bbshhajnbs@gmail.com', '$2y$10$biyveHftS7zGkKs8my.0PugZMBYoxoUrRjRKMEmpYLqZEQ1EvMm46', '2023/02/07'),
(10, 'suz', '077222287582', 'suzan.emad.999@gmail.com', '$2y$10$3VPOxsPvpEVy5RNHTOXgUuchD/aUcQVtw5wWeX5aMRyHWJixOs9KS', '2023/02/07'),
(11, 'fahal', '7738031331', 'hassan.alkubaisy@gmail.com', '$2y$10$.xWJ2RlmSw.86Qv7KGDzOOpp8DQWHn/IP4hbLXIcACqnFAOGpldyy', '2023/02/07'),
(12, 'سوزي', '077', 'suzy@gmail.com', '$2y$10$dxKhQ1ehHOTF5AQar/E7kuLGnHjORHgCZpzcJHrBAa45gCw8NT9a.', '2023/02/07'),
(13, 'سوزاااان', '852', 'اىىت', '$2y$10$AaVOvykSEEiWZJ7QdY9cLetrdQ.CMs1IGANNydRyK9r7P.b7KA012', '2023/02/07'),
(14, 'سوزانه', '888', 'فللتع', '$2y$10$SmSDOeAU5aT4tA1F8P5EOO/PGLE/GuufkNpmS8hTxzTr0TQawNHku', '2023/02/07'),
(15, 'suzana', '88', 'suz@gmail.com', '$2y$10$YFRFgPOQQPoYi7GNFCcLneF/tH.2zUjR7xmzTX9FIQ9YEdxRelGp.', '2023/02/08'),
(16, 'سوزان', '8', 'a@gmail.com', '$2y$10$Hd5LxF.IO.L51gdjp1PwCe21y8LAkAIcknCorxnS4xBn.umEO0gqO', '2023/02/08'),
(17, 'سوزي', '6', 's@gmail.com', '$2y$10$xYmtuFDUzoKLnyw8595OqOFGbclUcfotr/hIZEehfCgzyFjTtBcOK', '2023/02/08'),
(18, 'سوزان', '07722227582', 'su@gmail.com', '$2y$10$6zJD5Vy5r.Ydla9lWLk8tezcCDJTJu4wxqKmfN/P/bZilrxd9zv3.', '2023/02/09'),
(19, 'سوزان الكرخي', '07722227582', 'as@gmail.com', '$2y$10$jg/1yns3nwASAScxKJhHUelbgyWSolyHZJy2i73VI.4dNaeG6pK6O', '2023/02/18'),
(20, 'haa', '774366', 'hassan.alkubaiiisy@gmail.com', '$2y$10$vR3JukhTL.eueKilBxlT9O8XqBdtzJ37JpbCTKIAEYlzqx7sR9JLe', '2023/02/20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Sales_List`
--
ALTER TABLE `Sales_List`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Sales_List`
--
ALTER TABLE `Sales_List`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

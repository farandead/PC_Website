-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 11:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muzaffar_project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(20) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Faran', 'Zafar', 'farandeadz@gmail.com', 'Zafar@2020');

-- --------------------------------------------------------

--
-- Table structure for table `contact-requests`
--

CREATE TABLE `contact-requests` (
  `sno` int(10) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `desktops`
--

CREATE TABLE `desktops` (
  `sno` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `case_body` text NOT NULL,
  `cpu` text NOT NULL,
  `gpu` text NOT NULL,
  `cpu_cooling` text NOT NULL,
  `memory` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desktops`
--

INSERT INTO `desktops` (`sno`, `title`, `img`, `case_body`, `cpu`, `gpu`, `cpu_cooling`, `memory`, `price`) VALUES
(100001, 'INFINITY X119 4080 NEXT DAY PC SY1622', '<img src=\"img/desktops/product1.jpg\" alt=\"\">', 'Lian Li Lancool-215 ARGB Gaming Case - Black - (features x2 ARGB 200mm fans)', 'Intel® Core™ i9-11900KF - 8-Core 3.50GHz, 5.10GHz Turbo - 16MB Cache, Ultimate OC Compatible', 'MSI GeForce® RTX 4080 16GB - Ray Tracing Technology, DX12®, VR Ready, HDMI, DP - 4 MIN. Monitor Support (Single Card)', 'MSI MAG Coreliquid 240R V2 240mm RGB Liquid Cooler, Extreme OC Compatible', '16GB (2x8GB) DDR4/3200MHz Kingston Fury Beast Memory', '2166'),
(200001, 'ULTRA 45 BF GAMING PC SY1616', '<img src=\"img/desktops/product2.jpg\" alt=\"\">', 'CyberpowerPC Blaze Gaming Case - Black', 'AMD Ryzen 5 4500 - 6-Core 3.60GHz, 4.1GHz Turbo - 8MB L3 Cache Processor, Pro OC Compatible (No On-board Graphics)', 'AMD Ryzen Wraith CPU Cooler', 'AMD Ryzen Wraith CPU Cooler', '16GB (2x8GB) DDR4/3200MHz Kingston Fury Beast Memory', '708'),
(300001, 'ULTRA R79 4080 GAMING PC', '<img src=\"img/desktops/product3.webp\" alt=\"\">', 'CyberpowerPC Lancool PC-008 Gaming Case - Black', 'AMD Ryzen 9 7900X - 12-Core 4.70GHz, 5.60GHz Turbo - 64MB L3 Cache Processor, Pro OC Compatible w/ Radeon Graphics', 'MSI GeForce® RTX 4080 16GB - Ray Tracing Technology, DX12®, VR Ready, HDMI, DP - 4 MIN. Monitor Support (Single Card)', 'Cyberpower Masterliquid Lite 360 Liquid Cooling System w/ 360mm Radiator, Ultimate OC Compatible ', '16GB (2x8GB) DDR5/5200mhz Kingston Fury Beast RGB Memory', '2716'),
(400001, 'INFINITY 119BF GAMING PC SY1617', '<img src=\"img/desktops/product4.webp\" alt=\"\">', 'Lian Li Lancool-215 ARGB Gaming Case - Black - (features x2 ARGB 200mm fans)', 'Intel® Core™ i9-11900KF - 8-Core 3.50GHz, 5.10GHz Turbo - 16MB Cache, Ultimate OC Compatible', 'MSI GeForce® RTX 4080 16GB - Ray Tracing Technology, DX12®, VR Ready, HDMI, DP - 4 MIN. Monitor Support (Single Card)', 'Cyberpower Masterliquid Lite 360 Liquid Cooling System w/ 360mm Radiator, Ultimate OC Compatible ', '16GB (2x8GB) DDR5/5200mhz Kingston Fury Beast RGB Memory', '1249');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `sno` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `storage` text NOT NULL,
  `cpu` text NOT NULL,
  `gpu` text NOT NULL,
  `cpu_cooling` text NOT NULL,
  `memory` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`sno`, `title`, `img`, `storage`, `cpu`, `gpu`, `cpu_cooling`, `memory`, `price`) VALUES
(1, 'MSI RAIDER GE66 12UH-280UK GAMING LAPTOP', '<img src=\"img/laptops/product1.jpg\" alt=\"\">', '1TB NVMe PCIe Gen4x4 Solid State Drive', 'Intel® Core™ i7-12700H Processor', 'NVIDIA® GeForce RTX™ 3080 - 8GB GDDR6 - DirectX® 12.1', 'Two Turbo Fans with Thermal Conditioning', ' 32GB (2x16GB) DDR5/4800MHz', '1891'),
(2, 'MSI PRESTIGE 15 A12UC-034UK', '<img src=\"img/laptops/product2.jpg\" alt=\"\">', '512GB NVMe PCIe Gen4x4 Solid State Drive', 'Intel® Core™ i7-1280P Processor', 'NVIDIA® GeForce® RTX 3050 - 4GB GDDR6 - DirectX® 12.1', 'None', '8GB LPDDR4 Memory', '£833'),
(3, 'TURING V LITE I15 WINDOWS LAPTOP', '<img src=\"img/laptops/product3.jpg\" alt=\"\">', '500GB WD Blue SN570 M.2 NVMe PCIe SSD - 3500MB/s Read & 2300MB/s Write (Single Drive)', 'Intel® Core™ i3-1115G4 Processor', 'Integrated onboard graphics', 'None Selected', '8GB (1x8GB) DDR4/2666MHz Kingston Impact SODIMM Memory', '533'),
(4, 'ASUS TUF GAMING A15 FA507RR-HQ033X', '<img src=\"img/laptops/product4.jpg\" alt=\"\">', '1TB WD Blue SN570 M.2 NVMe PCIe SSD - 3500MB/s Read & 2300MB/s Write (Single Drive)', 'AMD Ryzen™ 7 6800H Processor - 8-Core/16-Thread, 20MB Cache, up to 4.7 GHz Max Boost', 'NVIDIA® GeForce RTX™ 3070 - 8GB GDDR6 - 1460MHz at 140W (1410MHz Boost Clock+50MHz OC, 115W+25W Dynamic Boost)', 'None Selected', '8GB (1x8GB) DDR4/2666MHz Kingston Impact SODIMM Memory', '999');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sno` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `email` text NOT NULL,
  `product_id` text NOT NULL,
  `date_palaced` date NOT NULL DEFAULT current_timestamp(),
  `delivery_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sno`, `firstname`, `email`, `product_id`, `date_palaced`, `delivery_address`) VALUES
(1, '0', '0', '1', '2022-11-27', 'IQ student Accommodation Flat 25 B4 7AG'),
(3, '0', '0', 'notFound', '2022-11-29', 'IQ Student Accommodation Flat 25 B4 7AG Birmingham West Midlands'),
(4, '0', '0', 'notFound', '2022-11-29', 'IQ Student Accommodation Flat 25 B4 7AG Birmingham West Midlands'),
(5, 'faran', '', 'notFound', '2022-11-29', ''),
(6, 'Faran Zafar', 'farandeadz@gmail.com', '2', '2022-11-29', 'IQ STUDENT ACCOMODATION'),
(7, 'Faran Zafar', 'farandeadz@gmail.com', '3', '2022-11-29', 'IQ STUDENT ACCOMODATION'),
(8, 'Faran Zafar', 'farandeadz@gmail.com', '300001', '2022-11-29', 'IQ STUDENT ACCOMODATION');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(20) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `firstname`, `lastname`, `email`, `password`, `address`) VALUES
(1, 'faran', 'zafar', 'farandeadz@gmail.com', 'Zafar@2020', 'IQ Student Accommodation Flat 25 B4 7AG Birmingham West Midlands'),
(2, 'moiz', 'chachu', 'momo@gmail.com', '1234567', 'IQ Student Accomodation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact-requests`
--
ALTER TABLE `contact-requests`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `desktops`
--
ALTER TABLE `desktops`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact-requests`
--
ALTER TABLE `contact-requests`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desktops`
--
ALTER TABLE `desktops`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400003;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

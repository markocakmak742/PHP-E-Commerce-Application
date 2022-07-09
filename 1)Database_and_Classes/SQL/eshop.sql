-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 01:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`) VALUES
(1, 'Jackets', 'jacke.png'),
(2, 'Shoes', 'shoes.png'),
(3, 'Bags', 'bags.png'),
(4, 'WomensCollection', 'wcollection.png'),
(5, 'MensPants', 'mpants.png'),
(6, 'Watches', 'watches.png'),
(7, 'Jewerly', 'jewerly.png');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `photo_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `product_id`, `photo_name`) VALUES
(1, 1, '1.jpg'),
(2, 1, '2.jpg'),
(3, 1, '3.jpg'),
(4, 2, '4.jpg'),
(5, 2, '5.jpg'),
(6, 2, '6.jpg'),
(7, 3, '7.jpg'),
(8, 3, '8.jpg'),
(9, 3, '9.jpg'),
(10, 4, '10.jpg'),
(11, 4, '11.jpg'),
(12, 4, '12.jpg'),
(13, 5, '13.jpg'),
(14, 5, '14.jpg'),
(15, 5, '15.jpg'),
(16, 6, '16.jpg'),
(17, 6, '17.jpg'),
(18, 6, '18.jpg'),
(19, 7, '19.jpg'),
(20, 7, '20.jpg'),
(21, 8, '21.jpg'),
(22, 8, '22.jpg'),
(23, 8, '23.jpg'),
(24, 9, '24.jpg'),
(25, 9, '25.jpg'),
(26, 9, '26.jpg'),
(27, 10, '27.jpg'),
(28, 10, '28.jpg'),
(29, 11, '29.jpg'),
(30, 11, '30.jpg'),
(31, 12, '31.jpg'),
(32, 12, '32.jpg'),
(33, 13, '33.jpg'),
(34, 13, '34.jpg'),
(35, 14, '35.jpg'),
(36, 14, '36.jpg'),
(37, 15, '37.jpg'),
(38, 15, '38.jpg'),
(39, 16, '39.jpg'),
(40, 16, '40.jpg'),
(41, 17, '41.jpg'),
(42, 17, '42.jpg'),
(43, 18, '43.jpg'),
(44, 18, '44.jpg'),
(45, 19, '45.jpg'),
(46, 19, '46.jpg'),
(47, 19, '47.jpg'),
(48, 20, '48.jpg'),
(49, 20, '49.jpg'),
(50, 20, '50.jpg'),
(51, 21, '51.jpg'),
(52, 21, '52.jpg'),
(53, 21, '53.jpg'),
(54, 22, '54.jpg'),
(55, 22, '55.jpg'),
(56, 22, '56.jpg'),
(57, 23, '57.jpg'),
(58, 23, '58.jpg'),
(59, 23, '59.jpg'),
(60, 24, '60.jpg'),
(61, 24, '61.jpg'),
(62, 24, '62.jpg'),
(63, 25, '63.jpg'),
(64, 25, '64.jpg'),
(65, 25, '65.jpg'),
(66, 26, '66.jpg'),
(67, 26, '67.jpg'),
(68, 26, '68.jpg'),
(69, 27, '69.jpg'),
(70, 27, '70.jpg'),
(71, 27, '71.jpg'),
(72, 28, '72.jpg'),
(73, 28, '73.jpg'),
(74, 29, '74.jpg'),
(75, 29, '75.jpg'),
(76, 30, '76.jpg'),
(77, 30, '77.jpg'),
(78, 31, '78.jpg'),
(79, 31, '79.jpg'),
(80, 32, '80.jpg'),
(81, 32, '81.jpg'),
(82, 33, '82.jpg'),
(83, 33, '83.jpg'),
(84, 34, '84.jpg'),
(85, 34, '85.jpg'),
(86, 35, '86.jpg'),
(87, 35, '87.jpg'),
(88, 36, '88.jpg'),
(89, 36, '89.jpg'),
(90, 46, '108.jpg'),
(91, 46, '109.jpg'),
(92, 47, '110.jpg'),
(93, 47, '111.jpg'),
(94, 48, '112.jpg'),
(95, 48, '113.jpg'),
(96, 49, '114.jpg'),
(97, 49, '115.jpg'),
(98, 50, '116.jpg'),
(99, 50, '117.jpg'),
(100, 51, '118.jpg'),
(101, 51, '119.jpg'),
(102, 52, '120.jpg'),
(103, 52, '121.jpg'),
(104, 53, '122.jpg'),
(105, 53, '123.jpg'),
(106, 54, '124.jpg'),
(107, 54, '125.jpg'),
(108, 55, '126.jpg'),
(109, 56, '127.jpg'),
(110, 57, '128.jpg'),
(111, 58, '129.jpg'),
(112, 59, '130.jpg'),
(113, 60, '131.jpg'),
(114, 61, '132.jpg'),
(115, 62, '133.jpg'),
(116, 63, '134.jpg'),
(117, 37, '90.jpg'),
(118, 37, '91.jpg'),
(119, 38, '92.jpg'),
(120, 38, '93.jpg'),
(121, 39, '94.jpg'),
(122, 39, '95.jpg'),
(123, 40, '96.jpg'),
(124, 40, '97.jpg'),
(125, 41, '98.jpg'),
(126, 41, '99.jpg'),
(127, 42, '100.jpg'),
(128, 42, '101.jpg'),
(129, 43, '102.jpg'),
(130, 43, '103.jpg'),
(131, 44, '104.jpg'),
(132, 44, '105.jpg'),
(133, 45, '106.jpg'),
(134, 45, '107.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `product_big_description` text COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `product_name`, `brand`, `product_price`, `product_short_description`, `product_big_description`, `thumbnail`) VALUES
(1, 1, 'Herren Lederjacke', 'Gipsy', '300', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. ', '', '1.jpg'),
(2, 1, 'Herren Jacke CADOC', 'BOSS ', '260', '', '', '2.jpg'),
(3, 1, 'Herren Lederjacke CUIR', 'The Kooples', '230', '', '', '3.jpg'),
(4, 1, 'Herren Steppjacke DAROLUS', 'BOSS ', '250', '', '', '4.jpg'),
(5, 1, 'Herren Daunenjacke', 'Amiri ', '160', '', '', '5.jpg'),
(6, 1, 'Herren Bomberjacke', 'Etro ', '140', '', '', '6.jpg'),
(7, 1, 'Legend Jacke GLAZER FIGHTER', 'PME ', '180', '', '', '7.jpg'),
(8, 1, 'Herren Daunenjacke SILVERE', 'Moncler ', '120', '', '', '8.jpg'),
(9, 1, 'Herren Jacke OPITO YOURSELF', 'Acne Studios ', '110', '', '', '9.jpg'),
(10, 2, 'Herren Businessschuhe', 'BOSS', '300', '', '', '10.jpg'),
(11, 2, 'Herren Derby Schuhe', 'BOSS', '280', '', '', '11.jpg'),
(12, 2, 'Herren Mokassins', 'BOSS', '210', '', '', '12.jpg'),
(13, 2, 'Herren Derby Schnuerschuhe', 'LLOYD ', '150', '', '', '13.jpg'),
(14, 2, ' Herren Stiefel 6 Premium-Boot', 'Timberland', '136', '', '', '14.jpg'),
(15, 2, 'Herren Stiefel TBL-ORIGINALS', 'Timberland ', '170', '', '', '15.jpg'),
(16, 2, 'Herren Chelsea Boots', 'Santoni ', '340', '', '', '16.jpg'),
(17, 2, 'Herren Stiefeletten', 'Tommy Hilfiger ', '120', '', '', '17.jpg'),
(18, 2, 'Herren Schnuerstiefel Harkland', 'UGG', '160', '', '', '18.jpg'),
(19, 3, 'Damen Umhaengetasche', 'Stella McCartney ', '800', '', '', '19.jpg'),
(20, 3, 'Damen Henkeltasche', 'Valentino Garavani ', '1600', '', '', '20.jpg'),
(21, 3, 'Damen Shopper TOTE-CARMELA', 'Lala Berlin ', '80', '', '', '21.jpg'),
(22, 3, 'Damen Handtasche', 'Longchamp ', '160', '', '', '22.jpg'),
(23, 3, 'Damen Umhaengetasche', 'Lauren Ralph Lauren', '280', '', '', '23.jpg'),
(24, 3, 'Damen Beuteltasche HOBO BAG M', 'Marc O`Polo ', '350', '', '', '24.jpg'),
(25, 3, 'Damen Henkeltasche', 'Valentino Garavani ', '2300', '', '', '25.jpg'),
(26, 3, 'Damen Umhaengetasche CATENA', 'TOD`S ', '1600', '', '', '26.jpg'),
(27, 3, 'Damen Beuteltasche ADDISON', 'BOSS ', '270', '', '', '27.jpg'),
(28, 4, 'Schouldered', '', '320', '', '', '28.jpg'),
(29, 4, 'Color Blocking', '', '280', '', '', '29.jpg'),
(30, 4, 'RIANI Outfit', '', '200', '', '', '30.jpg'),
(31, 4, 'Streetstyle', '', '220', '', '', '31.jpg'),
(32, 4, 'Tüll Trend', '', '380', '', '', '32.jpg'),
(33, 4, 'Farbdetails', '', '270', '', '', '33.jpg'),
(34, 4, 'Outdoor', '', '180', '', '', '34.jpg'),
(35, 4, 'Outfit Mode', '', '410', '', '', '35.jpg'),
(36, 4, 'Sunny UP', '', '180', '', '', '36.jpg'),
(37, 5, 'Herren Hose', 'CALVIN KLEIN', '70', '', '', '37.jpg'),
(38, 5, 'Herren Hose FEDERICO', 'GTA', '200', '', '', '38.jpg'),
(39, 5, 'Herren Wanderhose Mid Fjell', 'Hagloefs ', '130', '', '', '39.jpg'),
(40, 5, 'Herren Wanderhose Zip Off', 'Hagloefs ', '115', '', '', '40.jpg'),
(41, 5, 'Herren Joggerhose', 'Nemen ', '160', '', '', '41.jpg'),
(42, 5, 'Herren Hose lang-Pants-Hestad', 'Schoeffel', '119', '', '', '42.jpg'),
(43, 5, 'Herren Chinohose', 'Sease ', '112', '', '', '43.jpg'),
(44, 5, 'Herren Chinohose', 'Tommy Hilfiger ', '55', '', '', '44.jpg'),
(45, 5, 'Herren Hose Mens Skarvan', 'VAUDE', '149', '', '', '45.jpg'),
(46, 6, 'GPS Multifunktionsuhr', 'Garmin', '280', '', '', '46.jpg'),
(47, 6, 'Multisport GPS Smartwatch', 'Garmin', '440', '', '', '47.jpg'),
(48, 6, 'Smartwatch FENIX 7X SAPPHIRE', 'Garmin ', '349', '', '', '48.jpg'),
(49, 6, 'Smartwatch INSTINCT 2S', 'Garmin', '380', '', '', '49.jpg'),
(50, 6, 'Herren Sportuhr Vantage V2', 'Polar ', '320', '', '', '50.jpg'),
(51, 6, 'Fitnessuhr Ignite', 'Polar ', '330', '', '', '51.jpg'),
(52, 6, 'Multi Sportuhr VANTAGE-V2', 'Polar ', '300', '', '', '52.jpg'),
(53, 6, 'GPS Multifunktionsuhr Grit X', 'Polar ', '380', '', '', '53.jpg'),
(54, 6, 'Fitnessuhr Polar Ignite 2', 'Polar ', '210', '', '', '54.jpg'),
(55, 7, 'Damen Collier mit Diamanten', 'Diamond Group', '600', '', '', '55.jpg'),
(56, 7, 'Damen Diamantring', 'Diamond Group', '1200', '', '', '56.jpg'),
(57, 7, 'Damen Goldcreolen', 'Diamond Group', '590', '', '', '57.jpg'),
(58, 7, 'Damen Armband CHUNKY CHAIN S', 'KALAIKA', '180', '', '', '58.jpg'),
(59, 7, 'Damen Ohrringe mit Amethyst', 'Diamond Group', '1600', '', '', '59.jpg'),
(60, 7, 'Damen Goldcreolen', 'Diamond Group', '1199', '', '', '60.jpg'),
(61, 7, 'Damen Diamantcollier', 'Diamond Group', '999', '', '', '61.jpg'),
(62, 7, 'Damen Diamantohrstecker', 'Diamond Group', '1280', '', '', '62.jpg'),
(63, 7, 'Damen Diamantohrringe', 'Diamond Group', '1150', '', '', '63.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `user_id`, `quantity`, `total_price`, `created_at`) VALUES
(49, 55, 4, '2', '1200', '2022-06-26 23:37:05'),
(50, 52, 4, '1', '300', '2022-06-26 23:37:05'),
(51, 1, 4, '1', '300', '2022-07-09 09:48:09'),
(52, 1, 4, '1', '300', '2022-07-09 09:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`) VALUES
(4, 'mcakmak', 'markocakmak55@gmail.com', '202cb962ac59075b964b07152d234b70', 'Marko', 'Cakmak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

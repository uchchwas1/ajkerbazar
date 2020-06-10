-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 09:27 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(5) NOT NULL,
  `r_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `pro_pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `r_id`, `name`, `pass`, `email`, `contact`, `r_name`, `pro_pic`) VALUES
(1, 2, 'zim', 'zim123', 'zim@yahoo.com', '01763256435', 'Shwapno Express', 'client_image/398854de52274c0cf2ca1628ee1f2292IMG_20181109_194247_745.jpg'),
(5, 11, 'Jamil', 'jamil123', 'jamil@gmail.com', '01342367971', 'Agora', 'client_image/ed469f1f1c33f3eb2308c9413c3844c669438227_358553351723522_4383299624929067008_n.jpg'),
(6, 9, 'pran', 'pran', 'pran@yahoo.com', '01452978489', 'Paramount Super Shop', ''),
(7, 1, 'Shafayet', 'shafa', 'shafayet@gmail.com', '01452978489', 'Non Stop Mega Shop', ''),
(8, 8, 'zim1', 'zim1', 'jamil@gmail.com', '01452978489', 'Mehedi Mart', ''),
(9, 6, 'zim6', 'zim6', 'jamil@gmail.com', '01452978489', 'Priyo Shop', ''),
(10, 4, 'zim4', 'zim4', 'jamil@gmail.com', '01452978489', 'Genius Shopping Center', ''),
(11, 5, 'zim5', 'zim5', 'jamil@gmail.com', '01452978489', 'Bashundhara Super Shop', ''),
(12, 3, 'zim3', 'zim3', 'jamil@gmail.com', '01452978489', 'Tamanna Super Shop', ''),
(13, 21, 'zim21', 'zim21', 'zim@gmail.com', '01666222777', 'Alhaz Super Market', 'client_image/d50002c184038e07875609ee2ffe3f2ezim.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `r_id` int(11) DEFAULT NULL,
  `items` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `product_qty` varchar(5) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_catagory` varchar(50) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `r_id`, `items`, `price`, `product_qty`, `product_image`, `product_catagory`, `product_desc`, `code`) VALUES
(2, 2, 'Red Capsicum', 30, '20', 'product_image/95f81942d7633080320a763b5201699aCapsicum red.jpg', 'vegetables', 'fresh', 222),
(3, 2, 'Chicken', 220, '10', 'product_image/fe9e35a445776572ddc775b933654075raw-dressed-chicken-kosher-foods-chicken-meat-broiler-poultry-chicken-png-clip-art-thumbnail.png', 'meat-fish', 'Dressed', 2222),
(4, 2, 'Ispahani Mirzapur Tea Bag', 150, '20', 'product_image/6e4ae3083902a25effed9889168c1cc7chaldal_web_sticker-07_copy.jpg', 'fruits', 'new', 22222),
(21, 6, 'Tomato Kg ', 30, '100', 'product_image/14b0e911b407378774528bcb804650f3images.jfif', 'vegetables', 'fresh', 6),
(22, 6, 'China Carrot', 60, '20', 'product_image/7e9f0d3b3baf0265d54bd6f72ef9db81unnamed.jpg', 'fruits', 'fresh', 666),
(24, 8, 'Rin Washing Powder Power Bright 1kg', 120, '20', 'product_image/21923b83f063ac2aa0eea5dd6776170erin_bright_2.jpg', 'others', 'new', 88),
(25, 8, 'Strawberry Jelly - 500gm', 200, '10', 'product_image/b75191f1676c6de739adf96957d0ae41vegan-jelly-recipe-2.jpg', 'others', '', 888),
(26, 8, 'Nestle Koko Krunch Cereal - 330g', 250, '10', 'product_image/da39997b6f5aafa823fda1b07361b666Coco-Crunch-500gm-web-600x600.jpg', 'others', 'yummy', 8888),
(27, 9, 'Cucumber', 20, '100', 'product_image/c6f4b578a71096a5723715ad8cd12dbdCucumber_SupremoHybrid1-Burpee.jpg', 'fruits', 'fresh', 99),
(28, 9, 'Chilli Green', 20, '10', 'product_image/fb20dab4afa849ffbcbef4d57566f780green chili.jpg', 'vegetables', 'spicy', 999),
(29, 9, 'Diamond Aloo (Potato)', 20, '20', 'product_image/ae8ffd9e81be1f12144050c9c616a9d983-diamond-potato-3.jpg', 'vegetables', 'new', 9999),
(30, 9, 'Lal Shak', 15, '20', 'product_image/dc251c1b1767363ed649ca669f1cd28bRED-SPINACH-(à¦²à¦¾à¦²-à¦¶à¦¾à¦à¦•).png', 'vegetables', 'new', 99999),
(31, 2, 'lemon', 100, '0', 'product_image/9a0f5d90f35fe67c20e9a71e33bc32e91823787634_preview_Lamone.jpg', '0', '', 222222),
(33, 2, 'dragon fol', 100, '100', 'product_image/e9b1a62ab55b98f0d0b5650608d7d0e5dragon-fruit-500x539.jpg', 'fruits', 'imported', 0),
(34, 9, 'Ice-cream', 30, '20', 'product_image/a079a9213f99bd3fc3585a4343cc3234Ice cream 1.jfif', 'others', 'Very cold', 0),
(36, 11, 'Jamrul', 60, '100', 'product_image/ccf2c015e74b83d86537200a2ae975c1Jamrul.jpg', 'fruits', 'nice', 11),
(37, 11, 'Coconut ', 50, '20', 'product_image/62da64c2fe073c30a0a91d328a8eb82bfresh-green-coconut-diamond-316.jpg', 'fruits', 'fresh', 111),
(38, 11, 'Orange', 120, '150', 'product_image/521c2bfde2e7daeec00baf68f79d6ef1orange.jpg', 'fruits', 'juicy', 1111),
(39, 11, 'Guava', 40, '60', 'product_image/0d1a4180df961f0200257fd3c3436377igcxrqsxi.jpg', 'fruits', 'fresh', 11111),
(40, 11, 'Apple', 50, '100', 'product_image/46a8b2d3ce470b15684b142901b3586cpexels-photo-102104.jpeg', 'fruits', 'foreign', 111111),
(41, 11, 'koromca', 60, '100', 'product_image/f419701a54f3dbb7f8456ac473872ba4koromca.jpg', 'fruits', 'fresh', 1111111),
(42, 9, 'Indian Onion', 60, '100', 'product_image/f00b08b0458524807cee7ab04fabefb31578668031.jpg', 'vegetables', 'new', 0),
(43, 1, 'Miniket Rice', 50, '10', 'product_image/ef64ebef1cb85da09057e1a57ad4dd34minikit-rice-500x500.jpg', 'rice-oil', 'new', 0),
(44, 1, 'Chili', 20, '10', 'product_image/027e128e95dbd320c3f7903c09d9c9d7chili.jfif', 'vegetables', 'spicy', 0),
(45, 1, 'Capsicum Green', 50, '20', 'product_image/999cdfcb0f5f5319f916434577283490capsicum green.jpg', 'vegetables', 'fresh', 0),
(46, 1, 'Fulcopy', 50, '20', 'product_image/da8e2711e3b14508c5c4ab1a9fe2bc8cfulcopy.jpg', 'vegetables', 'fresh', 0),
(47, 1, 'Pumpkin', 50, '20', 'product_image/b59ab8ad5d380732e47b8c368e7c9b4akumra.jpg', 'vegetables', 'sweet', 0),
(48, 1, 'Potol', 20, '20', 'product_image/f0af5e6b4df10178cbe346b25b608c93potol.jpg', 'vegetables', 'fresh', 0),
(49, 8, 'Rupchanda OIL', 510, '50', 'product_image/ae86cbc4fdd3fcae09e3c74a7821f6e0rupchanda-soyabean-oil-5-ltr.jfif', 'rice-oil', '5 litre', 0),
(50, 8, 'Brinjal', 20, '20', 'product_image/0d0864d30a61c3a7c70b7cdafbf19be2brinjal.jpg', 'vegetables', 'fresh', 0),
(51, 8, 'Jali Kumra', 50, '20', 'product_image/e108713c8ad2f237da98a3c94985241ajali kumra.jpg', 'vegetables', 'fresh', 0),
(52, 6, 'Vatika Hair Oil', 200, '20', 'product_image/f3fe3cde69bd6e1204e22581697e9d33vatika.jpg', 'rice-oil', 'authentic', 0),
(53, 6, 'Yellow-Capsicum', 20, '20', 'product_image/e79884724f503a57c2d7bf0e4f433fa5Yellow-Capsicum.jpg', 'vegetables', 'fresh', 0),
(54, 6, 'Teer  Soyabean Oil', 510, '20', 'product_image/7876f624868a173c4702ac3829f5e5c1teer oil.jpg', 'rice-oil', 'authentic', 0),
(55, 6, 'Prawn', 400, '20', 'product_image/ec074c3c767fc12b862d7f3b0c2141a8Chingri.jpg', 'meat-fish', 'deshi', 0),
(56, 4, 'Amul Ice-cream', 30, '20', 'product_image/bec9c4fee01910ee1f4f1b102d741152Ice cream 2.png', 'others', 'Yummy', 0),
(57, 4, 'Vanila Cup Ice-cream', 30, '20', 'product_image/5cb26be835b4a1b7e001699ce15260beice cream.jfif', 'fruits', '', 0),
(58, 4, 'Vanila Ice-cream', 30, '20', 'product_image/2a323f5c175d602b3ddefd9d1bcd2f95Ice cream 3.png', 'others', 'yummy', 0),
(59, 4, 'Coca Cola', 100, '20', 'product_image/ae9921356da02df8892a7bad925b1127cock.jpg', 'others', 'very cold', 0),
(60, 4, 'Mountain-Dew', 30, '20', 'product_image/e19a6db192175af5bcd285462aefb26dmountain-dew.webp', 'others', 'very cold', 0),
(61, 4, '7up', 30, '20', 'product_image/ac79ecd4c6248fc87ba110b2876b55327up.jfif', 'others', 'very cold', 0),
(62, 5, 'Bashmoti Rice', 100, '20', 'product_image/47bcd6d4ee6c6363e58e352f16190092basmati-rice-1-kg.webp', 'rice-oil', 'fresh', 0),
(63, 5, 'Hilsha fish', 200, '20', 'product_image/271c7016fe4e176d3132c9e862bc71f9hilsa.jpg', 'meat-fish', 'fresh', 0),
(64, 5, 'Meat', 500, '10', 'product_image/245a79ad87de3995ab98cd159d2f2d90red Meat.jpg', 'meat-fish', 'fresh', 0),
(65, 5, 'Beef', 400, '20', 'product_image/33466a7ed7005fb482e4c68fd274c4bbbeaf-steaks.jpg', 'meat-fish', 'fresh', 0),
(66, 5, 'Teer Sugar', 30, '10', 'product_image/bd0f1fd00433db122988ed8303200012teer_sugar.jpg', 'others', 'new', 0),
(67, 5, 'Garlic', 100, '20', 'product_image/04965b8c47666beed94404adb341c301Garlic2.jpg', 'fruits', 'local', 0),
(68, 3, 'Chicken-Leg', 120, '100', 'product_image/84f17d91f25a43446d098f2f8c9009cbChicken-Leg.jpg', 'meat-fish', 'fresh', 0),
(69, 3, 'Goose', 200, '20', 'product_image/6e45d51e508f2612488ed8a4122d7edfraw-goose.jpg', 'meat-fish', 'fresh and deshi', 0),
(70, 3, 'Mixed Capsicum', 50, '60', 'product_image/8c6d13fa2194fccec9fbf57d1cead828capsicum mixed.jpg', 'vegetables', 'fresh', 0),
(71, 3, 'Span Olive Oil', 100, '20', 'product_image/fa18f09e958dfd48c4a1ac48eb73c8adspan olive hair oil.jpg', 'rice-oil', 'new', 0),
(72, 3, 'Red Chili', 20, '20', 'product_image/563bdc4509493df3706341fdc8a8f52dred chili.jpg', 'vegetables', 'Fresh', 0),
(73, 3, 'Puredistance M Master Perfume', 200, '10', 'product_image/2fc5211ccd83f1797a6f995060004295master-perfume.png', 'others', 'Cool and small for easy carrying ', 0),
(74, 2, 'canvus', 100, '10', 'product_image/177fdaad8dd547c92580630d40a02a84canvus.jpg', 'others', 'new', 0),
(75, 25, 'green Capcicum', 40, '5', 'product_image/999cdfcb0f5f5319f916434577283490capsicum green.jpg', 'vegetables', 'fresh', 0),
(76, 25, 'yellow capsicum', 40, '5', 'product_image/e79884724f503a57c2d7bf0e4f433fa5Yellow-Capsicum.jpg', 'vegetables', 'fresh', 0),
(77, 24, 'Koromcha', 45, '40', 'product_image/f419701a54f3dbb7f8456ac473872ba4koromca.jpg', 'fruits', 'fresh', 0),
(78, 24, 'Garlic', 160, '5', 'product_image/04965b8c47666beed94404adb341c301Garlic2.jpg', 'vegetables', 'deshi', 0),
(79, 23, 'Prawn', 450, '10', 'product_image/ec074c3c767fc12b862d7f3b0c2141a8Chingri.jpg', 'fish', '', 0),
(80, 23, 'Hilsha', 800, '5', 'product_image/271c7016fe4e176d3132c9e862bc71f9hilsa.jpg', 'fish', 'fresh', 0),
(81, 22, 'Ice-cream', 45, '5', 'product_image/a079a9213f99bd3fc3585a4343cc3234Ice cream 1.jfif', 'others', 'cool', 0),
(82, 21, '7up', 80, '4', 'product_image/f83a0dd401a9978b91f940743c6f75f07up.jfif', 'others', 'cool', 0),
(83, 21, 'Red meat', 550, '4', 'product_image/4e813f896f70a4442f900ab2449780d9red Meat.jpg', 'meat-fish', 'fresh', 0),
(84, 20, 'Lal Shak', 15, '5', 'product_image/dc251c1b1767363ed649ca669f1cd28bRED-SPINACH-(à¦²à¦¾à¦²-à¦¶à¦¾à¦à¦•).png', 'vegetables', 'fresh', 0),
(85, 20, 'Onion', 45, '5', 'product_image/f00b08b0458524807cee7ab04fabefb31578668031.jpg', 'vegetables', 'new', 0),
(86, 21, 'Dressed goose', 4, '550', 'product_image/008f2de236c2085779e6ec9ee675b6c9raw-goose.jpg', 'meat-fish', 'deshi', 0),
(87, 22, 'Perfume', 330, '4', 'product_image/4b6d0d84d8b6e4a65c17591c938f6cd5master-perfume.png', 'fruits', 'cool', 0),
(88, 22, 'Jira Rice', 55, '10', 'product_image/ea7fb710bf55141862b7ff7eadf0b2bbrice.jpg', 'rice-oil', 'fresh', 0),
(89, 23, 'Leg Piece Chicken', 220, '10', 'product_image/84f78fa07bd6af0a74dafed0b218f6f3Chicken-Leg.jpg', 'meat-fish', 'farm', 0),
(90, 20, 'Potato', 18, '10', 'product_image/b243ad11f5ad7eddf0b5fddbbe5a262683-diamond-potato-3.jpg', 'vegetables', 'new', 0),
(91, 25, 'red capsicum', 45, '4', 'product_image/1ed6270eb9ee4797644c419d281406c0Capsicum red.jpg', 'fruits', 'fresh', 0),
(92, 26, 'Donuts', 80, '10', 'product_image/dbc02541fd4c5d800b6d0517abc1fc1fDonuts.png', 'sweets', 'yammy', 0),
(93, 26, 'Mixed Sweets', 550, '45', 'product_image/154c842d9adee29cb8bdded7ee421f190002g8wz.jpeg', 'sweets', 'tasty', 0),
(94, 26, 'Vegan Jelly', 330, '10', 'product_image/d75fbdbfa9909eeaa8f0ef423f478c64vegan-jelly-recipe-2.jpg', 'sweets', 'Sweety', 0),
(95, 24, 'Biscuits', 80, '4', 'product_image/11cc00b4100e428577286f95c05044e4biscuits.jpg', 'sweets', 'crancy', 0),
(96, 27, 'Sondesh', 220, '10', 'product_image/86df909929b9a837a37ada76ac3596398-5.jpg', 'sweets', 'yammy', 0),
(97, 27, 'Laddu', 220, '45', 'product_image/4c0d4008bb0e95bb4c7b916ea5652130misti.jpg', 'sweets', 'sweets', 0),
(98, 27, 'Cocacola', 80, '45', 'product_image/6fd38b0b8b4d5b6e9707cc29404fcf6ccock.jpg', 'sweets', 'cool', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `O_id` int(11) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `r_id` int(11) NOT NULL,
  `item` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(500) CHARACTER SET latin1 NOT NULL,
  `resto` int(11) NOT NULL,
  `details` varchar(1000) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(200) DEFAULT NULL,
  `r_CategoryImage` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`r_id`, `r_name`, `r_CategoryImage`, `location`, `lat`, `lng`) VALUES
(1, 'Non Stop Mega Shop', '1.jpg', 'Basundhora', 23.813891, 90.423467),
(2, 'Shwapno Express', '2.jpg', '2 Banani Bridge, Dhaka 1212', 23.791441, 90.40997),
(3, 'Unimart', '3.jpg', 'Gulshan Centre Point, Dhaka 1212', 23.795931, 90.414934),
(4, 'Genius Shopping Center', '', 'Basundhora', 23.812171, 90.422345),
(5, 'Paramount Super Shop', '', 'Shop-1A031, 1st Floor, Gulshan DCC Corner, Jamuna Future Park, Bashundhara R/a, Dhaka 1229', 23.814047, 90.423417),
(6, 'Agora Gulshan', '', '37, RM Center, Plot-5, 101 Gulshan Ave, Dhaka 1212', 23.789861, 90.415988),
(8, 'Bashundhara Collection', '', 'Ka-54, 3 Bashundhara Rd, Dhaka 1229', 23.812207, 90.423111),
(9, 'Lavender Super Store', '', '41 DIT II Cir, Dhaka 1212, Gulshan', 23.795516, 90.413499),
(11, 'Shwapno - Green Road', '', '3A, H, R-4 Green Rd, Dhaka 1205', 23.742224, 90.383819),
(20, 'SHWAPNO EXPRESS Fani', '3.jpg', 'Feni Mizan Road', 23.013801, 91.39969),
(21, 'Alhaz Super Market', '', 'Grand Trank Rd, Feni', 23.01659, 91.392134),
(22, 'S K Super Shop', '', 'Grand Trank Rd, Feni', 23.01671, 91.391903),
(23, 'Jalalia Sweets Shop', '', 'Grand Trank Rd, Feni', 23.015356, 91.393191),
(24, 'Shuvo Variety Store', '', 'DB Rd, Kachari Bazar, Gaibandha', 25.3147526, 89.5423966),
(25, 'Orient kitchen', '', 'College Road, Polash Para, Gaibandha', 22.8087816, 89.24671909999999),
(26, 'Astha Sweets', '', 'Road 1/2, Polash Para, Gaibandha', 25.3247534, 89.5323975),
(27, 'Eat & Meet', '', 'Road 12/1, Hokers, Gaibandha', 25.3347544, 89.5223955);

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper_usr`
--

CREATE TABLE `shopkeeper_usr` (
  `Id` int(11) NOT NULL,
  `ShopName` varchar(200) NOT NULL,
  `History` varchar(20000) NOT NULL,
  `IncomingOrder` varchar(20000) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `r_id` int(11) NOT NULL,
  `order_details` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `contact`, `r_id`, `order_details`, `status`) VALUES
(22, 'jamil', 'jamil@gmail.com', '0e2cc23df7e37a854499f9d918b0219d', 'basundhara', '+01826210857', 11, '[{\"Shop_ID\":\"11\",\"item_name\":\"Jamrul\",\"item_price\":\"60\",\"item_quantity\":\"1\"}]', 'Shipped'),
(23, 'uchchwas', 'uchchwas@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'basundhara', '+01826210857', 11, '[{\"Shop_ID\":\"11\",\"item_name\":\"Coconut \",\"item_price\":\"50\",\"item_quantity\":\"1\"}]', 'Delivered'),
(24, 'pran', 'pran@gmail.com', 'eb7f6212f3c4c2b175e968080dd5eb17', 'gaibandha', '+01342444777', 2, '[{\"Shop_ID\":\"2\",\"item_name\":\"Red Capsicum\",\"item_price\":\"30\",\"item_quantity\":\"1\"}]', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`O_id`);

--
-- Indexes for table `orderinfo`
--
ALTER TABLE `orderinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `shopkeeper_usr`
--
ALTER TABLE `shopkeeper_usr`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `O_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderinfo`
--
ALTER TABLE `orderinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `shopkeeper_usr`
--
ALTER TABLE `shopkeeper_usr`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

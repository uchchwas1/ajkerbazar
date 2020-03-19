-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 09:21 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `r_id` int(11) DEFAULT NULL,
  `items` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`r_id`, `items`, `price`, `code`) VALUES
(2, 'vegetable chow mein', 70, 22),
(2, 'chicken chow mein', 120, 222),
(2, 'chinese chow mein', 220, 2222),
(2, 'indian chow mein', 150, 22222),
(3, 'Rainbow Sandwich', 150, 33),
(3, 'CHICKEN SANDWICH', 250, 333),
(3, 'Grilled Spinach And Corn Sandwich', 350, 3333),
(3, 'Greens,Eggs,Cheese Sandwich', 450, 33333),
(4, 'Piggy Pie Dessert', 200, 44),
(4, 'Fudge Ice-Cream Dessert', 200, 444),
(4, 'Fruity summer dessert', 100, 4444),
(4, 'Chocolate Trifle', 300, 44444),
(5, 'Roast Chicken', 120, 55),
(5, 'Garlic-Roasted Chicken Breasts', 220, 555),
(5, 'Frozen Chicken', 220, 5555),
(5, 'Chicken Tikka Masala', 200, 55555),
(5, 'Jhal Chicken Vuna', 100, 555555),
(5, 'beef kala vuna', 150, 5555555),
(5, 'Mutton curry', 150, 55555555),
(5, 'Tandoori Mutton', 200, 555555555),
(6, 'Shada Vat', 30, 6),
(6, 'vegetable rice', 60, 666),
(6, 'khichuri', 70, 6666),
(8, 'Fish curry', 120, 88),
(8, 'fish grill', 200, 888),
(8, 'spicy fish', 250, 8888),
(9, '7-Up', 20, 99),
(9, 'coca cola', 20, 999),
(9, 'Fanta', 20, 9999),
(9, 'water', 15, 99999);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(200) DEFAULT NULL,
  `r_CategoryImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`r_id`, `r_name`, `r_CategoryImage`) VALUES
(1, 'Burger', '1.jpg'),
(2, 'Chow mein', '2.jpg'),
(3, 'Sandwich', '3.jpg'),
(4, 'Dessert', ''),
(5, 'Meat', ''),
(6, 'Rice', ''),
(8, 'Fish', ''),
(9, 'Drinks', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `order_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `order_details`) VALUES
(1, 'uchchwas', 'uchchwas.das@northsouth.edu', '123', 'a:2:{i:0;s:57:\"item name => test item price=> 200 item quantity=> 1</br>\";i:1;s:56:\"item name => rice item price=> 20 item quantity=> 1</br>\";}'),
(2, 'tirtha', 'tirtha@gmail.com', '123', 'a:3:{i:0;s:56:\"item name => rice item price=> 20 item quantity=> 1</br>\";i:1;s:57:\"item name => test item price=> 200 item quantity=> 1</br>\";i:2;s:55:\"item name => dal item price=> 20 item quantity=> 1</br>\";}'),
(11, '1620016', 'tirtha1dasa@gmail.com', '123', ''),
(12, 'jafar', 'jafar@gmail.com', '123', 'hello'),
(13, 'helloworld', 'helloworld@gmail.com', '123', ''),
(14, 'test1', 'test1@yahoo.com', '123', ''),
(15, 'cicada3301', 'cicada3301@gmail.com', '123', ''),
(16, 'uc', 'uc@gmail.com', '123', ''),
(17, 'tesing', 'testing@gmail.com', '202cb962ac59075b964b07152d234b70', 'a:1:{i:0;s:58:\"item name => Pizza item price=> 550 item quantity=> 1</br>\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

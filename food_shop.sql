-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 06:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `purchase_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`purchase_id`, `item_name`, `cost`, `description`, `image_url`) VALUES
(0, 'Margherita Pizza', 100, 'tomato fillets, basil, olive oil', 'https://www.google.co.in/url?sa=i&source=images&cd=&ved=2ahUKEwj60Zeso-HhAhV46XMBHZoABCEQjRx6BAgBEAU&url=https%3A%2F%2Fwww.chicken.ca%2Frecipes%2Fgrilled-chicken-pizza-margherita&psig=AOvVaw3PSPp_UrUeGB1I8bfUQN_r&ust=1555939198272664\r\n'),
(1, 'California Dreams', 110, 'Black olives, Mushrooms, Pepper, Eggplant', 'https://www.google.co.in/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiqs_qxpOHhAhVa7HMBHZaED70QjRx6BAgBEAU&url=https%3A%2F%2Fwww.nytimes.com%2F2017%2F12%2F02%2Ftravel%2Fcalifornia-dreams-but-no-palm-trees-at-a-london-restaurant.html&psig=AOvVaw03UetY1hQvV5-i2hp3a6D-&ust=1555939474453993\r\n'),
(3, 'Cheezy Calzone', 200, 'special blend of hear ricotta, mozzarrela and parmesan', 'https://www.google.co.in/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwj6stzHpOHhAhVG63MBHTnNDx0QjRx6BAgBEAU&url=https%3A%2F%2Fwww.pillsbury.com%2Frecipes%2Ftwo-cheese-calzones%2Fe0e4c374-8abc-43f1-b031-083dad828afd&psig=AOvVaw0H4yyuVEEWjlVWwf4o4MuJ&ust=1555939516464053\r\n'),
(3, 'Lasagna', 150, 'Pazzta with mozarella and creamy bechamel', 'https://www.google.co.in/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiv8MWApeHhAhW38HMBHbc3AwkQjRx6BAgBEAU&url=https%3A%2F%2Fcooking.nytimes.com%2Frecipes%2F9530-lasagna&psig=AOvVaw1up0nWWe61FRNR-vusL611&ust=1555939610380004\r\n'),
(4, 'Carbonara pasta', 100, 'Spagheti with cheese, Bacon and Black papper', 'https://www.google.co.in/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiq-9qfpeHhAhWTguYKHS68A94QjRx6BAgBEAU&url=https%3A%2F%2Fcooking.nytimes.com%2Frecipes%2F12965-spaghetti-carbonara&psig=AOvVaw0dcyST_Z1SIploCy_0DO2w&ust=1555939703268113');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `full_name`, `email`) VALUES
(1, 'User1', 'Nikita Prakash Tare', 'nikitatare@gmail.com'),
(2, 'User2', 'Gargi Kadam', 'gargik@gmail.com'),
(3, 'User3', 'Vedant Tare', 'vedantt@gmail.com'),
(4, 'User4', 'xyz tare', 'xyz@gmail.com'),
(5, 'User5', 'abc kadam', 'abc@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

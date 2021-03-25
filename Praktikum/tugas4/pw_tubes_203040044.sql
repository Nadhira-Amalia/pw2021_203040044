-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 02:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040044`
--

-- --------------------------------------------------------

--
-- Table structure for table `bakery`
--

CREATE TABLE `bakery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `topping` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(30) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bakery`
--

INSERT INTO `bakery` (`id`, `name`, `product`, `topping`, `description`, `price`, `category`) VALUES
(1, 'Truffle Chocolate Cake', '1.png', 'Cheese, Strawberry Jam, Whipped Cream', 'This is a rich and moist chocolate cake.  This super smooth and rich chocolate cake is full of layers of chocolate ganache and soft, chocolate sponge.', 80000, 'Cake'),
(2, 'Oreo Cake', '2.png', 'Oreo Cookies, Cheese, Whipped Cream', 'Due to its smooth yet crunchy texture, this cake is a favourite among all age groups. Oreo cookies have already made their way into a lot of delicious desserts already, and this cake tastes even better due to the crumbled Oreo cookies that are incorporated into the cream filling.', 65000, 'Cake'),
(3, 'Red Velvet Cake', '3.png', 'Cheese, Whipped Cream', 'This popular cake keeps spreading in popularity. Its layers of soft sponge & cream are courteous. Classic red velvet cake inside cream cheese frosting covered with our homemade red velvet crumbs.', 85000, 'Cake'),
(4, 'Cheesecake', '4.png', 'Strawberry Jam, Chocolate', 'A sweet desert consisting of one or more layers. The main, and thickest, layer consists of a mixture of a soft, fresh cheese, eggs, and sugar. There is a bottom layer, it most often consists of a crust or base made from crushed cookies, graham crackers, pastry, or sponge cake, depending on what you order.', 30000, 'Cake'),
(5, 'Cupcake', '5.png', 'Whipped Cream, Meises', 'This popular cake keeps spreading in popularity. Its layers of soft sponge & cream are courteous. Classic red velvet cake inside cream cheese frosting covered with our homemade red velvet crumbs.', 15000, 'Cake'),
(6, 'Muffin', '6.png', 'Raisins, Chocochips', 'A small baked good made from butter. This Muffins are single-serving quick breads, which rise with the help of baking soda or baking powder and eggs instead of yeast. They tend to be sweet and somewhat moist, but heavier than a cake or cupcake. Muffins are baked in a pan with cup-sized indentations.', 20000, 'Pastry'),
(7, 'Croissant', '7.png', 'Strawberry Jam, Blueberry Jam, Chocolate', 'This Croissant is made from butter, flour, sugar, salt, yeast, and milk. Unlike most yeasted doughs that require warm liquid to activate the yeast, we use cold milk instead.', 18000, 'Pastry'),
(8, 'Sweet Bread', '8.png', 'Raisins, Sesame Seed, Nuts, Banana, Sugar', 'Our bread is made with milk, sugar, eggs, yeast, flour and sometimes lemon peel to produce a subtly sweet lightly textured loaf or rolls.', 25000, 'Bread'),
(9, 'Baguette', '9.png', 'Sesame Seed', 'Baguette is a long, thin loaf of French bread that is characterized by a crisp crust and chewy center.', 20000, 'Bread'),
(10, 'Cookies', '10.png', 'Raisins, Chocochips', 'Our cookie is a baked or cooked food that is typically small, flat and sweet. It may include other ingredients such as raisins, oats, chocolate chips, nuts, etc.', 5000, 'Cookies');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bakery`
--
ALTER TABLE `bakery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bakery`
--
ALTER TABLE `bakery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

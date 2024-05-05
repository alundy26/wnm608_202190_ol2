-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 04:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examplelundy`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Water Color ', 'watercolor@artscool.com', 5.99, 'Paint', '2024-04-21 04:02:01', '2024-04-21 04:02:01', 'Set of 36 Water Colors', 'water_color_thumb.jpg', 'watercolors1.jpg'),
(2, 'Stretched Canvas', 'canvas@artscool.com', 9.29, 'Tools', '2024-04-21 04:05:45', '2024-04-21 04:05:45', 'Traditional Back stapled Stretched Canvas ', 'canvas_thumb.jp', 'canvas_image.jpg'),
(3, 'Synthetic White Bristle Brush Canister', 'artscool.com/brushes', 126.00, 'Tools', '2024-04-21 04:07:58', '2024-04-21 04:07:58', 'Set of 60 classroom brushes', 'brushes_thumb.jpg', 'brushes_synthetic.jpg'),
(4, 'Kids Sketch Pad', 'https://artscool.com/kidssketchpad', 11.34, 'Drawing', '2024-04-21 04:09:11', '2024-04-21 04:09:11', '30 page sketch pad', 'sketch_thumb.jpg`', 'sketches.jpg'),
(5, 'Glue Sticks', 'https://artscool.com/glue', 24.99, 'Crafts', '2024-04-21 04:20:54', '2024-04-21 04:20:54', 'purple glue stick pack of 30', 'glue_thumb.jpg', 'gluesticks.jpg'),
(6, 'Blunt Tip Scissors', 'https://artscool.com/scissors', 39.29, 'Crafts', '2024-04-21 04:23:12', '2024-04-21 04:23:12', 'Pack of 24', 'scissors_thumb.jpg', 'scissors.jpg'),
(7, 'Tempera Paint Gallon - Set of 12 ', 'https://artscool.com/paint', 199.99, 'Paint', '2024-04-21 04:26:44', '2024-04-21 04:26:44', 'Pack of 12 - Red, Orange, Yellow, Green, Blue, Purple, Black, White, Brown, Pink, Teal, Light Green', 'gallons_paint_thumb.jpg', 'gallonpaint.jpg'),
(8, 'Painting Beads', 'https://artscool.com/beads', 19.99, 'Crafts', '2024-04-21 04:28:06', '2024-04-21 04:28:06', '1lb of Wooden Painting Beads', 'beads_thumb.jpg', 'beads_wooden.jpg'),
(9, 'Pipe Cleaners', 'https://artscool.com/pipecleaners', 12.99, 'Craft', '2024-04-21 04:33:52', '2024-04-21 04:33:52', 'Pack of 500', 'pipeclean_thumb.jpg', 'pipeclean_craft.jpg'),
(10, 'Pom Pom', 'https://artscool.com/pompoms', 27.99, 'Crafts', '2024-04-21 04:35:01', '2024-04-21 04:35:01', '1lb Value Pack', 'pom_thumb.jpg', 'pompom_pack.jpg'),
(11, 'Markers - Classroom Set', 'https://artscool.com/markers', 39.99, 'Drawing', '2024-04-21 04:44:47', '2024-04-21 04:44:47', 'Set of 256 ', 'marker_thumb.jpg', 'pack_markers.jpg'),
(12, 'Color Pencils', 'https://artscool.comm/colorpencils', 57.99, '', '2024-04-21 04:47:55', '2024-04-21 04:47:55', 'Set of 792 Pencils', 'color_pencil_thumb.jp', 'color_pencils.jph');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

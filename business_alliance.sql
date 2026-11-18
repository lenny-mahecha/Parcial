-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2026 at 10:00 PM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_alliance`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `imagen`) VALUES
(1, 'Office spaces', 'https://al-zawiyaksa.com/wp-content/uploads/2026/04/Z1111.jpg'),
(2, 'Warehouse spaces', 'https://images.adsttc.com/media/images/5012/9d59/28ba/0d67/1700/0945/slideshow/stringio.jpg?1361332347'),
(3, 'Land plots', 'img/land-plots.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `ciudad` varchar(60) NOT NULL,
  `area` int(11) NOT NULL,
  `precio` decimal(14,2) NOT NULL,
  `operacion` enum('Sale','Rent') NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `propiedades`
--

INSERT INTO `propiedades` (`id`, `titulo`, `ciudad`, `area`, `precio`, `operacion`, `imagen`, `categoria_id`) VALUES
(1, 'Corporate office, 12th floor', 'Bogotá', 320, 18500000.00, 'Rent', 'https://al-zawiyaksa.com/wp-content/uploads/2026/04/Z1111.jpg', 1),
(2, 'Office building on 100th Street', 'Bogotá', 2400, 9800000000.00, 'Sale', 'https://al-zawiyaksa.com/wp-content/uploads/2026/04/Z1111.jpg', 1),
(3, 'Logistics warehouse in Free Trade Zone', 'Bogotá', 1800, 42000000.00, 'Rent', 'https://images.adsttc.com/media/images/5012/9d59/28ba/0d67/1700/0945/slideshow/stringio.jpg?1361332347', 2),
(4, 'Distribution center', 'Medellín', 5200, 12500000000.00, 'Sale', 'https://images.adsttc.com/media/images/5012/9d59/28ba/0d67/1700/0945/slideshow/stringio.jpg?1361332347', 2),
(5, 'Industrial land plot in Funza', 'Funza', 10000, 6200000000.00, 'Sale', 'img/land-plots.jpg', 3),
(6, 'Land plot on main road', 'Cali', 4500, 3100000000.00, 'Sale', 'img/land-plots.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `empresa` varchar(80) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `creado_en` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `nombre`, `empresa`, `correo`, `telefono`, `categoria_id`, `mensaje`, `creado_en`) VALUES
(1, 'Carlos Rojas', 'Rojas Logistics', 'carlos@rojaslogistica.com', '3104567890', 2, 'We are looking for a 1,500 m² warehouse near 13th Street.', '2026-11-17 19:59:37'),
(2, 'María Gómez', 'Studio MG', 'maria@studiomg.co', '3209876543', 1, 'We need an office for 30 people in north Bogotá.', '2026-11-17 19:59:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indexes for table `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `propiedades_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

--
-- Constraints for table `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `solicitudes_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

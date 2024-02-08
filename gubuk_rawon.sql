-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 02:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gubuk_rawon`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(25) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `name`, `email`, `phoneNumber`, `address`) VALUES
(1, 'tamu', NULL, NULL, NULL),
(12, 'Project lain', 'john@example.com', '876541', 'Jdefefefefefefefvegrrtbrf'),
(13, 'Journal', 'john@example.com', '1234567', 'Adjeefjejejfjeg'),
(14, 'John Doe ', 'john@example.com', '08128654335', 'Jln radar auri'),
(15, 'Minecraft', 'john@example.com', '876541', 'Di Depok sebelah sana 30 KM yang deket samping'),
(17, 'Risqi Khasani', 'muhamadrisqi19@gmail.com', '081286541225', 'Di Depok sebelah sana 30 KM yang deket samping');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuID` int(11) NOT NULL,
  `menuName` varchar(100) DEFAULT NULL,
  `price` decimal(10,3) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `imageName` varchar(255) NOT NULL,
  `category` enum('makanan','paket','minuman','lain-lain') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuID`, `menuName`, `price`, `description`, `imageName`, `category`) VALUES
(1, 'Rawon Daging', '24.000', 'Sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek.', 'Rawon Daging.png', 'makanan'),
(2, 'Soto Daging', '24.000', 'Soto daging bening khas Jawa ini bumbunya sederhana dengan pelengkap seledri, bawang goreng dan daun bawang. Irisan daging dengan sedikit lapisan lemak yang gurih empuk cocok dinikmati hangat dengan nasi.', 'Soto Daging.png', 'makanan'),
(3, 'Tahu Campur ', '23.000', 'Tahu campur terdiri dari Lontong, selada air, tauge, daging, dan mie/bihun. Bahan tambahan yang membuat makanan ini lebih dahsyat berasal dari petis udang sebagai bumbunya dan gorengan yang terbuat dari singkong.', 'Tahu Campur.png', 'makanan'),
(4, 'Tahu Telor', '18.000', 'Tahu telur adalah hidangan yang terdiri dari tahu berbalut telur kocok yang digoreng dilengkapi dengan tauge lalu disiram bumbu kacang yang diberi petis.', 'Tahu Telor.png', 'makanan'),
(5, 'Ayam Goreng rempah', '17.000', 'Ayam yang digoreng dengan bumbu rempah serta disajikan dengan taburan bumbu rempah yang gurih beserta dengan lalapan.', 'Ayam Goreng rempah.png', 'makanan'),
(6, 'Rujak Cingur', '22.000', 'Rujak Cingur yaitu makanan yang berisi campuran dari Cingur sebagai bahan utamanya, lalu ditambah dengan irisan buah dan sayuran, tahu, tempe, lontong serta petis dan bumbu-bumbu lain, seperti bumbu kacang yang disajikan dengan cara diulek.', 'Rujak Cingur.png', 'makanan'),
(7, 'Ayam Goreng Rempah + Nasi', '22.000', 'Ayam goreng rempah yang disajikan dengan taburan bumbu rempah, laalapan, dan nasi.', 'Ayam Goreng Rempah Komplit1.jpeg', 'paket'),
(8, 'Ayam goreng Rempah Komplit', '25.000', 'Ayam goreng rempah yang disajikan dengan taburan bumbu rempah ditambah nasi, tahu tempe, dan lalapan.', 'Ayam Goreng Rempah Komplit.jpeg', 'paket'),
(9, 'Ayam Goreng Rempah Trancam', '27.000', 'Ayam goreng rempah yang disajikan dengan taburan bumbu rempah ditambah nasi, tahu tempe, dan sayur trancam.', 'Ayam goreng rempah nasi trancam (1).jpg', 'paket'),
(10, 'Paket Rawon + Nasi', '26.000', 'Sup daging berkuah hitam disajikan dengan nasi.', 'Paket Rawon + Nasi.jpg', 'paket'),
(11, 'Paket Rawon Komplit', '32.000', 'Sup daging berkuah hitam disajikan dengan nasi dan telor asin.', 'Paket komplit rawon tanpa nasi.jpg', 'paket'),
(12, 'Es Abang Branang ', '20.000', 'Minuman ice dengan air soda dan perasan lemon serta sirup spesial rasa pisang ambon.', 'es abang branang.jpeg', 'minuman'),
(13, 'Es Mentimun ', '17.000', 'Minuman ice dan serut mentimun dengan campuran jeruk nipis.', 'es mentimun.JPG', 'minuman'),
(14, 'Es Kloewoeng', '20.000', 'Ice dengan air soda dicampir dengan 2 sirup special dan perasan jeruk.', 'es kloewoeng.jpg', 'minuman'),
(15, 'Es Jeruk', '10.000', 'Minuman ice dengan perasan jeruk yang manis dan segar.', 'es jeruk.JPG', 'minuman'),
(16, 'Jus Mangga', '12.000', 'Jus buah mangga segar dan manis.', 'Jus Mangga.jpg', 'minuman'),
(17, 'Jus Alpukat', '12.000', 'Jus buah alpukat yang manis dan enak', 'Jus Alpukat.jpg', 'minuman'),
(18, 'Telor Asin', '6.500', 'Telor Asin pilihan dan enak', 'telor asin.jpeg', 'lain-lain'),
(19, 'Ote ote', '2.000', 'Bakwan sayur yang enak dan garing.', 'bakwan.jpeg', 'lain-lain'),
(20, 'Sate-satean', '2.000', 'Sate telor puyuh, ati, dan ampela dengan dibaluti bumbu semur yang enak.', 'Sate satean.jpeg', 'lain-lain'),
(21, 'Tahu Goreng', '2.000', 'Tahu yang digoreng garing dan renyah.', 'tempe dan tahu goreng.jpg', 'lain-lain'),
(22, 'Tempe Goreng', '2.000', 'Tempe yang digoreng garing dan renyah.', 'tempe dan tahu goreng.jpg', 'lain-lain'),
(23, 'Kerupuk Kaleng ', '2.000', 'Kerupuk kaleng yang renyah dan gurih.', 'Kerupuk kaleng.png', 'lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderDetailID` int(11) NOT NULL,
  `orderID` int(11) DEFAULT NULL,
  `menuID` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderDetailID`, `orderID`, `menuID`, `quantity`, `subtotal`) VALUES
(20, 9, 5, 1, '17.00'),
(21, 9, 4, 1, '18.00'),
(22, 10, 1, 1, '24.00'),
(23, 10, 2, 1, '24.00'),
(24, 12, 6, 1, '22.00'),
(25, 12, 5, 1, '17.00'),
(26, 13, 22, 1, '2.00'),
(28, 15, 6, 1, '22.00'),
(34, 18, 15, 1, '10.00'),
(35, 18, 18, 1, '6.50'),
(36, 19, 3, 1, '23.00'),
(37, 20, 4, 2, '36.00'),
(38, 20, 15, 2, '20.00'),
(39, 20, 19, 1, '2.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `orderDate` datetime DEFAULT current_timestamp(),
  `totalAmount` decimal(10,2) DEFAULT NULL,
  `status` enum('Pending','Proses','Selesai','Diantar','Cancelled') DEFAULT 'Pending',
  `paymentStatus` enum('Pending','Paid','Failed') DEFAULT 'Pending',
  `paymentMethod` enum('COD','Credit Card','Bank Transfer') DEFAULT 'COD',
  `orderType` enum('Online','Offline') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `orderDate`, `totalAmount`, `status`, `paymentStatus`, `paymentMethod`, `orderType`) VALUES
(9, 12, '2024-01-30 21:46:41', '35.00', 'Proses', 'Pending', 'COD', 'Online'),
(10, 13, '2024-01-31 07:13:53', '48.00', 'Proses', 'Pending', 'COD', 'Online'),
(12, 14, '2024-01-31 12:05:25', '39.00', 'Pending', 'Pending', 'COD', 'Online'),
(13, 15, '2024-02-01 09:12:28', '2.00', 'Pending', 'Pending', 'COD', 'Online'),
(15, 17, '2024-02-01 09:16:39', '22.00', 'Pending', 'Paid', 'COD', 'Online'),
(18, 1, '2024-02-08 16:18:14', '16.50', 'Pending', 'Pending', 'COD', NULL),
(19, 1, '2024-02-08 16:24:54', '23.00', 'Pending', 'Pending', 'COD', 'Offline'),
(20, 1, '2024-02-08 18:01:57', '58.00', 'Pending', 'Pending', 'COD', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '$2y$10$Zhm.AOpu3qWCaZP0H82X0eyX2xP53wwNYjSj/87FCHyUg2Zw1OfNm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderDetailID`),
  ADD KEY `orderdetail_ibfk_1` (`orderID`),
  ADD KEY `orderdetail_ibfk_2` (`menuID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `orders_ibfk_1` (`customerID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `fk_orderdetail_orders` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`menuID`) REFERENCES `menu` (`menuID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

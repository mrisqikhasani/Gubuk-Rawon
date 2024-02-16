-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2024 at 10:15 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21870825_gubuk_rawon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `customerID` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phoneNumber` varchar(13) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`customerID`, `name`, `email`, `phoneNumber`, `address`) VALUES
(1, 'tamu', NULL, NULL, NULL),
(2, 'Putri Cahya Maulina', 'putricahyamaulina@gmail.com', '08561163076', 'Jl. R. Sanim Villa Putra Mandiri 4 No. A8 Rt01/011, Kelurahan Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat'),
(3, 'abdul aziz s', 'aziizmuhamad1@gmail.com', '081290998011', 'villa putra mandiri no.04, Kelurahan Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat'),
(4, NULL, NULL, NULL, ', Kelurahan , Kecamatan , Kota , Jawa Barat'),
(5, 'Deny Ismiati', 'deniismiaty@gmail.com', '085776273769', 'Jl. R. Sanim, Perum Mulya Asri Blok D6, Kelurahan Tanah Baru, Kecamatan Beji, Kota Depok, Jawa Barat'),
(6, 'Ibu Sintya Aminah', 'shintyaamh@gmail.com', '085631163078', 'Jl. Anyelir Raya No.67 Rt03/10, Kelurahan Depok Jaya, Kecamatan Pancoran Mas, Kota Depok, Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `menuID` int(11) NOT NULL,
  `menuName` varchar(30) DEFAULT NULL,
  `price` decimal(10,3) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `imageName` varchar(50) NOT NULL,
  `category` enum('makanan','paket','minuman','lain-lain') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`menuID`, `menuName`, `price`, `description`, `imageName`, `category`) VALUES
(1, 'Rawon Daging', 24.000, 'Sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek.', 'Rawon Daging.png', 'makanan'),
(2, 'Soto Daging', 24.000, 'Soto daging bening khas Jawa ini bumbunya sederhana dengan pelengkap seledri, bawang goreng dan daun bawang. Irisan daging dengan sedikit lapisan lemak yang gurih empuk cocok dinikmati hangat dengan nasi.', 'Soto Daging.png', 'makanan'),
(3, 'Tahu Campur ', 23.000, 'Tahu campur terdiri dari Lontong, selada air, tauge, daging, dan mie/bihun. Bahan tambahan yang membuat makanan ini lebih dahsyat berasal dari petis udang sebagai bumbunya dan gorengan yang terbuat dari singkong.', 'Tahu Campur.png', 'makanan'),
(4, 'Tahu Telor', 18.000, 'Tahu telur adalah hidangan yang terdiri dari tahu berbalut telur kocok yang digoreng dilengkapi dengan tauge lalu disiram bumbu kacang yang diberi petis.', 'Tahu Telor.png', 'makanan'),
(5, 'Ayam Goreng rempah', 17.000, 'Ayam yang digoreng dengan bumbu rempah serta disajikan dengan taburan bumbu rempah yang gurih beserta dengan lalapan.', 'Ayam Goreng rempah.png', 'makanan'),
(6, 'Rujak Cingur', 22.000, 'Rujak Cingur yaitu makanan yang berisi campuran dari Cingur sebagai bahan utamanya, lalu ditambah dengan irisan buah dan sayuran, tahu, tempe, lontong serta petis dan bumbu-bumbu lain, seperti bumbu kacang yang disajikan dengan cara diulek.', 'Rujak Cingur.png', 'makanan'),
(7, 'Ayam Goreng Rempah + Nasi', 22.000, 'Ayam goreng rempah yang disajikan dengan taburan bumbu rempah, laalapan, dan nasi.', 'Ayam Goreng Rempah Komplit1.jpeg', 'paket'),
(8, 'Ayam goreng Rempah Komplit', 25.000, 'Ayam goreng rempah yang disajikan dengan taburan bumbu rempah ditambah nasi, tahu tempe, dan lalapan.', 'Ayam Goreng Rempah Komplit.jpeg', 'paket'),
(9, 'Ayam Goreng Rempah Trancam', 27.000, 'Ayam goreng rempah yang disajikan dengan taburan bumbu rempah ditambah nasi, tahu tempe, dan sayur trancam.', 'Ayam goreng rempah nasi trancam (1).jpg', 'paket'),
(10, 'Paket Rawon + Nasi', 26.000, 'Sup daging berkuah hitam disajikan dengan nasi.', 'Paket Rawon + Nasi.jpg', 'paket'),
(11, 'Paket Rawon Komplit', 32.000, 'Sup daging berkuah hitam disajikan dengan nasi dan telor asin.', 'Paket komplit rawon tanpa nasi.jpg', 'paket'),
(12, 'Es Abang Branang ', 20.000, 'Minuman ice dengan air soda dan perasan lemon serta sirup spesial rasa pisang ambon.', 'es abang branang.jpeg', 'minuman'),
(13, 'Es Mentimun ', 17.000, 'Minuman ice dan serut mentimun dengan campuran jeruk nipis.', 'es mentimun.JPG', 'minuman'),
(14, 'Es Kloewoeng', 20.000, 'Ice dengan air soda dicampir dengan 2 sirup special dan perasan jeruk.', 'es kloewoeng.jpg', 'minuman'),
(15, 'Es Jeruk', 10.000, 'Minuman ice dengan perasan jeruk yang manis dan segar.', 'es jeruk.JPG', 'minuman'),
(16, 'Jus Mangga', 12.000, 'Jus buah mangga segar dan manis.', 'Jus Mangga.jpg', 'minuman'),
(17, 'Jus Alpukat', 12.000, 'Jus buah alpukat yang manis dan enak', 'Jus Alpukat.jpg', 'minuman'),
(18, 'Telor Asin', 6.500, 'Telor Asin pilihan dan enak', 'telor asin.jpeg', 'lain-lain'),
(19, 'Ote ote', 2.000, 'Bakwan sayur yang enak dan garing.', 'bakwan.jpeg', 'lain-lain'),
(20, 'Sate-satean', 2.000, 'Sate telor puyuh, ati, dan ampela dengan dibaluti bumbu semur yang enak.', 'Sate satean.jpeg', 'lain-lain'),
(21, 'Tahu Goreng', 2.000, 'Tahu yang digoreng garing dan renyah.', 'tempe dan tahu goreng.jpg', 'lain-lain'),
(22, 'Tempe Goreng', 2.000, 'Tempe yang digoreng garing dan renyah.', 'tempe dan tahu goreng.jpg', 'lain-lain'),
(23, 'Kerupuk Kaleng ', 2.000, 'Kerupuk kaleng yang renyah dan gurih.', 'Kerupuk kaleng.png', 'lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetail`
--

CREATE TABLE `OrderDetail` (
  `orderDetailID` int(11) NOT NULL,
  `orderID` int(11) DEFAULT NULL,
  `menuID` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `OrderDetail`
--

INSERT INTO `OrderDetail` (`orderDetailID`, `orderID`, `menuID`, `quantity`, `subtotal`) VALUES
(1, 1, 1, 1, 24.00),
(2, 1, 8, 1, 25.00),
(3, 1, 13, 1, 17.00),
(4, 1, 18, 1, 6.50),
(5, 2, 1, 1, 24.00),
(6, 2, 2, 1, 24.00),
(7, 2, 5, 1, 17.00),
(8, 2, 13, 1, 17.00),
(9, 2, 14, 1, 20.00),
(10, 4, 7, 1, 22.00),
(11, 4, 3, 1, 23.00),
(12, 4, 4, 1, 18.00),
(13, 4, 13, 1, 17.00),
(14, 4, 15, 1, 10.00),
(15, 4, 23, 2, 4.00),
(16, 5, 11, 1, 32.00),
(17, 5, 6, 1, 22.00),
(18, 5, 13, 1, 17.00),
(19, 5, 15, 1, 10.00),
(20, 5, 22, 1, 2.00),
(21, 5, 19, 1, 2.00);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `orderDate` datetime DEFAULT current_timestamp(),
  `totalAmount` decimal(10,2) DEFAULT NULL,
  `status` enum('Pending','Proses','Selesai','Diantar','Cancelled') DEFAULT 'Pending',
  `paymentStatus` enum('Pending','Paid','Failed') DEFAULT 'Pending',
  `paymentMethod` enum('COD','Credit Card','Bank Transfer') DEFAULT 'COD',
  `orderType` enum('Online','Offline') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`orderID`, `customerID`, `orderDate`, `totalAmount`, `status`, `paymentStatus`, `paymentMethod`, `orderType`) VALUES
(1, 2, '2024-02-15 11:23:32', 72.50, 'Pending', 'Pending', 'Bank Transfer', 'Online'),
(2, 3, '2024-02-15 11:23:57', 102.00, 'Pending', 'Pending', 'Bank Transfer', 'Online'),
(3, 4, '2024-02-15 11:23:59', NULL, 'Pending', 'Pending', NULL, 'Online'),
(4, 5, '2024-02-15 11:28:07', 94.00, 'Pending', 'Pending', 'Bank Transfer', 'Online'),
(5, 6, '2024-02-16 00:48:17', 85.00, 'Pending', 'Pending', 'Bank Transfer', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '$2y$10$Zhm.AOpu3qWCaZP0H82X0eyX2xP53wwNYjSj/87FCHyUg2Zw1OfNm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`menuID`);

--
-- Indexes for table `OrderDetail`
--
ALTER TABLE `OrderDetail`
  ADD PRIMARY KEY (`orderDetailID`),
  ADD KEY `orderdetail_ibfk_1` (`orderID`),
  ADD KEY `orderdetail_ibfk_2` (`menuID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
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
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `OrderDetail`
--
ALTER TABLE `OrderDetail`
  MODIFY `orderDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OrderDetail`
--
ALTER TABLE `OrderDetail`
  ADD CONSTRAINT `OrderDetail_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `Orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `OrderDetail_ibfk_2` FOREIGN KEY (`menuID`) REFERENCES `Menu` (`menuID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderdetail_orders` FOREIGN KEY (`orderID`) REFERENCES `Orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `Orders_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `Customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

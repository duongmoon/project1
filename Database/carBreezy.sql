
CREATE DATABASE IF NOT EXISTS `carBreezy`;
USE `carBreezy`;


CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `contact` char(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `admin` (`adminid`, `username`, `contact`, `email`, `PASSWORD`) VALUES
	(1,'duong', '0916526901', 'duong.th.2055@aptechlearning.edu.vn', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(2,'thang', '0358045997', 'thang.nt.2054@aptechlearning.edu.vn', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(3,'toan', '0868226863', 'toan.lv.2058@aptechlearning.edu.vn', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(4,'hai', '0123456788', 'toan.lv.2058@aptechlearning.edu.vn', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
	(5,'trieu', '0123456787', 'toan.lv.2058@aptechlearning.edu.vn', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');



CREATE TABLE IF NOT EXISTS `customer` (
  `cusid` int(11) NOT NULL AUTO_INCREMENT,
  `cusname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact` char(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY (`cusid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;




CREATE TABLE IF NOT EXISTS `model` (
  `modelid` int(11) NOT NULL AUTO_INCREMENT,
  `modelname` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`modelid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

	
CREATE TABLE IF NOT EXISTS `car` (
  `carid` int(11) NOT NULL AUTO_INCREMENT,
  `model` int(11) NOT NULL,
  `carname` varchar(255) NOT NULL,
  `color` varchar(30) NOT NULL,
  `price` char(10) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `image` varchar(64) DEFAULT NULL,
  `size` varchar(255) NOT NULL,
  PRIMARY KEY (`carid`),
  KEY `model` (`model`),
  CONSTRAINT `Fk_model_ID` FOREIGN KEY (`model`) REFERENCES `model` (`modelid`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4;
ALTER TABLE customer ADD CONSTRAINT UN_customercontact UNIQUE (contact);
-- CREATE TABLE IF NOT EXISTS `cart` (
--   `id_cart` int(11) NOT NULL AUTO_INCREMENT,
--   --`code_cart` int(10) NOT NULL,
--   `cusid` int(11) NOT NULL,
--   `time_cart` datetime NOT NULL,
--   PRIMARY KEY (`id_cart`),
--   CONSTRAINT `Fk_cus_ID` FOREIGN KEY (`cusid`) REFERENCES `customer` (`cusid`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- CREATE TABLE IF NOT EXISTS `cart_details` (
--   `id_cart_details` int(11) NOT NULL AUTO_INCREMENT,
--   `id_cart` int(11) NOT NULL,
--   --`code_cart` int(10) NOT NULL,
--   `carid` int(11) NOT NULL,
--   `quantity` int(11) NOT NULL,
--   PRIMARY KEY (`id_cart_details`),
--   CONSTRAINT `Fk_cart_ID` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id_cart`),
--   CONSTRAINT `Fk_car_ID` FOREIGN KEY (`carid`) REFERENCES `car` (`carid`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;




INSERT INTO `customer` (`cusid`, `cusname`, `dob`, `gender`, `contact`, `email`, `address`,`PASSWORD`) VALUES
(1, 'hung', '1987-11-07', 'Nam', '0123456789', 'Hung@gmail.com', 'Hà Nội','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'tuan', '2006-08-05', 'Nam', '0384854886', 'tuanngo@gmail.com', 'Hồ Chí Minh','40bd001563085fc35165329ea1ff5c5ecbdbbeef');


-- INSERT INTO `cart` (`id_cart`, `cusid`, `time_cart`) VALUES
-- (1, 1, '2022-10-03 16:59:59'),
-- (2, 2, '2022-10-03 17:00:33'),
-- (3, 1, '2022-10-03 17:01:31');

INSERT INTO `model` (`modelid`, `modelname`, `image`, `description`) VALUES
	(1, 'Lamborghini', 'Lamborghinilogo.png', 'Lamborghini, is an Italian manufacturer of high-end super sports cars (supercars), with its headquarters and factory located in Sant'' Agata Bolognese, near Bologna, Italy. Currently Lamborghini is a subsidiary of the Audi AG company of the German automobile group Volkswagen. Lamborghini also competes with Ferrari and a host of other big names in the sports car industry. The company was founded in 1963 by Italian businessman Ferruccio Lamborghini, who used to own a very successful tractor company.'),
	(2, 'Honda', 'Hondalogo.png', 'Established in 1996, Honda Vietnam is a joint venture between Honda Motor Company (Japan), Asian Honda Motor Company (Thailand) and Vietnam Engine and Agricultural Machinery Corporation with 2 industries. Main products: motorcycles and cars. 25 years of presence in Vietnam, Honda Vietnam has constantly developed and become one of the leading companies in the field of motorcycle manufacturing and a prestigious automobile manufacturer in the Vietnamese market.'),
	(3, 'Toyota', 'Toyotalogo.png', 'As one of the first automobile joint ventures in Vietnam market, TMV always strives for sustainable development and together with Vietnam "Towards the future". TMV has been and will not stop providing high quality products and perfect after-sales service to bring the highest satisfaction to customers, as well as make a positive contribution to the development of the industry. automobile industry and Vietnam.'),
	(4, 'Mazda', 'Mazdalogo.png', 'MAZDA is one of the first Japanese automobile engine manufacturers established in 1920. With a history of nearly 100 years, Mazda is also one of the famous global automobile brands. MAZDA''s products are loved around the world for their durable quality, luxurious sporty design and sophisticated modern design, which is a reputable manufacturer in Vietnam market..'),
	(5, 'Lexus', 'Lexuslogo.png', 'Lexus is the luxury car segment of the Japanese automaker Toyota. After being introduced for the first time in the United States in 1989, Lexus quickly became one of the best-selling luxury car brands in the country, as of 2006, Lexus was present in 68 countries and regions. land in the world.'),
	(6, 'Kia', 'Kialogo.png', 'Kia Vietnam understands that more than finding and using the best services for your car, you need a reliable place, a friend who always shares all the interesting things about your Kia car and your life. live around. From regular inspection and maintenance to maintain optimal performance, to repair when the vehicle has any problems, or interior and exterior care services, equipping accessories to enhance the style of the vehicle. Exclusively for Kia owners, all are provided with a wide selection of service packages as well as a foundation of genuine spare parts, accessories, supplies, technicians and service consultants who are knowledgeable about the vehicle. Your best Kia car.'
	);

INSERT INTO `car` (`carid`, `model`, `carname`, `color`, `price`, `quantity`, `image`, `size`) VALUES
	(1, 1, 'Lamborghini Huracan-Blue', 'Blue', '7130000000', 20, 'Lamborghini-Huracan-Blue.png', '4.885m x 1.840m'),
	(2, 1, 'Lamborghini Huracan-Orange', 'Orange', '7130000000', 20, 'Lamborghini-Huracan-Orange.png', '4.885m x 1.840m'),
	(3, 1, 'Lamborghini Huracan-Red', 'Red', '7130000000', 20, 'Lamborghini-Huracan-Red.png', '4.885m x 1.840m'),
	(4, 1, 'Lamborghini Huracan-White', 'White', '7130000000', 20, 'Lamborghini-Huracan-White.png', '4.885m x 1.840m'),
	(5, 3, 'Toyota Camry 2.5Q', 'Black', '1370000000', 15, 'Toyota-Camry25q-Black.png', '4.885m x 1.840m'),
	(6, 3, 'Toyota Camry 2.0Q', 'Red', '1185000000', 15, 'Toyota-Camry20q-Red.png', '4.885m x 1.840m'),
	(7, 3, 'Toyota Camry 2.0Q', 'Pearl white', '1193000000', 15, 'Toyota-Camry20q-Pearlwhite.png', '4.885m x 1.840m'),
	(8, 3, 'Toyota Corolla Altis 1.8V', 'Grey', '765000000', 20, 'Toyota-CorollaAltis18V-Grey.png', '4.630m x 1.780m'),
	(9, 3, 'Toyota Corolla Altis 1.8HEV', 'Red 3R3', '860000000', 20, 'Toyota-CorollaAltis18HEV-Red.png', '4.630m x 1.780m'),
	(10, 3, 'Toyota Corolla Altis 1.8HEV', 'The silver 1D4', '860000000', 20, 'Toyota-CorollaAltis18HEV-Thesilver.png', '4.630m x 1.780m'),
	(11, 2, 'Honda City-Black', 'Black', '529000000', 6, 'Honda-City-Black.png', '4.885m x 1.840m'),
	(12, 2, 'Honda City-Blue', 'Blue', '529000000', 6, 'Honda-City-Blue.png', '4.885m x 1.840m'),
	(13, 2, 'Honda City-Red', 'Red', '529000000', 6, 'Honda-City-Red.png', '4.885m x 1.840m'),
	(14, 2, 'Honda City-Thesilver', 'The silver', '535000000', 6, 'Honda-City-Thesilver.png', '4.885m x 1.840m'),
	(15, 2, 'Honda City-Titan', 'Titan', '537000000', 6, 'Honda-City-Titan.png', '4.885m x 1.840m'),
	(16, 2, 'Honda City-White', 'White', '537000000', 6, 'Honda-City-White.png', '4.885m x 1.840m'),
	(17, 2, 'Honda Icvic-Black', 'Black', '730000000', 6, 'Honda-icvic-Black.png', '4.885m x 1.840m'),
	(18, 2, 'Honda Icvic-Blue', 'Blue', '730000000', 6, 'Honda-icvic-Blue.png', '4.885m x 1.840m'),
	(19, 2, 'Honda Icvic-Grey', 'Grey', '730000000', 6, 'Honda-icvic-Grey.png', '4.885m x 1.840m'),
	(20, 2, 'Honda Icvic-Red', 'Red', '730000000', 6, 'Honda-icvic-Red.png', '4.885m x 1.840m'),
	(21, 2, 'Honda Icvic-White', 'White', '730000000', 6, 'Honda-icvic-White.png', '4.885m x 1.840m'),
	(22, 5, 'Lexus IS500-Blue', 'Blue', '1380000000', 12, 'Lexus-IS500-Blue.jpg', '4.757m x 1.838m'),
	(23, 5, 'Lexus IS500-Carviar', 'Carviar', '1380000000', 11, 'Lexus-IS500-Carviar.jpg', '4.757m x 1.838m'),
	(24, 5, 'Lexus IS500-Gray', 'Gray', '1380000000', 15, 'Lexus-IS500-Gray.jpg', '4.757m x 1.838m'),
	(25, 5, 'Lexus IS500-Iridium', 'Iridium', '1380000000', 14, 'Lexus-IS500-Iridium.jpg', '4.757m x 1.838m'),
	(26, 5, 'Lexus IS500-Red', 'Red', '1380000000', 14, 'Lexus-IS500-Red.jpg', '4.757m x 1.838m'),
	(27, 5, 'Lexus IS500-Thesilver', 'The silver', '1380000000', 38, 'Lexus-IS500-Thesilver.jpg', '4.757m x 1.838m'),
	(28, 5, 'Lexus LsHybrid-Black', 'Black', '3380000000', 10, 'Lexus-LsHybrid-Black.jpg', '4.757m x 1.838m'),
	(29, 5, 'Lexus LsHybrid-Blue', 'Blue', '3380000000', 10, 'Lexus-LsHybrid-Blue.jpg', '4.757m x 1.838m'),
	(30, 5, 'Lexus LsHybrid-Iridium', 'Iridium', '3380000000', 10, 'Lexus-LsHybrid-Iridium.jpg', '4.757m x 1.838m'),
	(31, 5, 'Lexus LsHybrid-Red', 'Red', '3380000000', 10, 'Lexus-LsHybrid-Red.jpg', '4.757m x 1.838m'),
	(32, 5, 'Lexus LsHybrid-Thesilver', 'The silver', '3380000000', 10, 'Lexus-LsHybrid-Thesilver.jpg', '4.757m x 1.838m'),
	(33, 5, 'Lexus LsHybrid-White', 'White', '3380000000', 10, 'Lexus-LsHybrid-White.jpg', '4.757m x 1.838m'),
	(34, 6, 'Kia KIA3-Black', 'Black', '560000000', 13, 'Kia-KIA3-Black.png', '4.757m x 1.838m'),
	(35, 6, 'Kia KIA3-Blue', 'Blue', '560000000', 12, 'Kia-KIA3-Blue.png', '4.757m x 1.838m'),
	(36, 6, 'Kia KIA3-Grey', 'Grey', '560000000', 9, 'Kia-KIA3-Black.png', '4.757m x 1.838m'),
	(37, 6, 'Kia KIA3-Red', 'Red', '560000000', 9, 'Kia-KIA3-Red.png', '4.757m x 1.838m'),
	(38, 6, 'Kia KIA3-Thesilver', 'The silver', '560000000', 9, 'Kia-KIA3-Thesilver.png', '4.757m x 1.838m'),
	(39, 6, 'Kia KIA3-Titan', 'Titan', '560000000', 14, 'Kia-KIA3-Titan.png', '4.757m x 1.838m'),
	(40, 6, 'Kia KIA3-White', 'White', '560000000', 14, 'Kia-KIA3-White.png', '4.757m x 1.838m'),
	(41, 6, 'Kia Stinger-Black', 'Black', '1440000000', 7, 'Kia-Stinger-Black.png', '4.757m x 1.838m'),
	(42, 6, 'Kia Stinger-Blue', 'Blue', '1440000000', 7, 'Kia-Stinger-Blue.png', '4.757m x 1.838m'),
	(43, 6, 'Kia Stinger-Orange', 'Orange', '1440000000', 7, 'Kia-Stinger-Orange.png', '4.757m x 1.838m'),
	(44, 6, 'Kia Stinger-PantheraMetal', 'Panthera Metal', '1440000000', 7, 'Kia-Stinger-PantheraMetal.png', '4.757m x 1.838m'),
	(45, 6, 'Kia Stinger-Red', 'Red', '1440000000', 7, 'Kia-Stinger-Red.png', '4.757m x 1.838m'),
	(46, 6, 'Kia Stinger-Thesilver', 'The silver', '1440000000', 7, 'Kia-Stinger-Thesilver.png', '4.757m x 1.838m'),
	(47, 6, 'Kia Stinger-Violet', 'Violet', '1440000000', 7, 'Kia-Stinger-Violet.png', '4.757m x 1.838m'),
	(48, 6, 'Kia Stinger-White', 'White', '1440000000', 7, 'Kia-Stinger-White.png', '4.757m x 1.838m'),
	(49, 4, 'Mazda Mazda3-Black', 'Black', '699000000', 4, 'Mazda3-Black.jpg', '4.460m x 1.795m'),
	(50, 4, 'Mazda Mazda3-Blue', 'Blue', '699000000', 4, 'Mazda3-Blue.jpg', '4.460m x 1.795m'),
	(51, 4, 'Mazda Mazda3-Grey', 'Grey', '699000000', 4, 'Mazda3-Grey.jpg', '4.460m x 1.795m'),
	(52, 4, 'Mazda Mazda3-Red', 'Red', '699000000', 4, 'Mazda3-Red.jpg', '4.460m x 1.795m'),
	(53, 4, 'Mazda Mazda3Sport-Black', 'Black', '769000000', 4, 'Mazda3Sport-Black.jpg', '4.460m x 1.795m'),
	(54, 4, 'Mazda Mazda3Sport-Blue', 'Blue', '769000000', 4, 'Mazda3Sport-Blue.jpg', '4.460m x 1.795m'),
	(55, 4, 'Mazda Mazda3Sport-Grey', 'Grey', '769000000', 4, 'Mazda3Sport-Grey.jpg', '4.460m x 1.795m'),
	(56, 4, 'Mazda Mazda3Sport-Red', 'Red', '769000000', 4, 'Mazda3Sport-Red.jpg', '4.460m x 1.795m'),
	(57, 4, 'Mazda Mazda3Sport-White', 'White', '769000000', 4, 'Mazda3Sport-White.jpg', '4.460m x 1.795m'),
	(58, 4, 'Mazda Mazda3-White', 'Red', '699000000', 4, 'Mazda3-White.jpg', '4.460m x 1.795m'),
	(59, 5, 'Lexus Gx-Black', 'Black', '5740000000', 30, 'Lexus-Gx-Black.jpg', '4.880m x 1.885m'),
	(60, 5, 'Lexus Gx-Blue', 'Blue', '5740000000', 20, 'Lexus-Gx-Blue.jpg', '4.880m x 1.885m'),
	(61, 5, 'Lexus Gx-Carviar', 'Carviar', '5740000000', 23, 'Lexus-Gx-Carviar.jpg', '4.880m x 1.885m'),
	(62, 5, 'Lexus Gx-Gray', 'Gray', '5740000000', 10, 'Lexus-Gx-Gray.jpg', '4.880m x 1.885m'),
	(63, 5, 'Lexus Gx-Thesilver', 'Thesilver', '5740000000', 30, 'Lexus-Gx-Thesilver.jpg', '4.880m x 1.885m'),
	(64, 5, 'Lexus Gx-White', 'White', '5740000000', 38, 'Lexus-Gx-White.jpg', '4.880m x 1.885m'),
	(65, 2, 'Honda CR-V-white', 'white', '998000000', 18, 'Honda-CRV-White.png', '4.623m x 1.855m'),
	(66, 2, 'Honda CR-V-Black', 'Black', '998000000', 18, 'Honda-CRV-Black.png', '4.623m x 1.855m'),
	(67, 2, 'Honda CR-V-Titan', 'Titan', '998000000', 18, 'Honda-CRV-Titan.png', '4.623m x 1.855m'),
	(68, 2, 'Honda CR-V-red', 'Red', '998000000', 18, 'Honda-CRV-Red.png', '4.623m x 1.855m'),
	(69, 2, 'Honda CR-V-blue', 'Blue', '998000000', 18, 'Honda-CRV-Blue.png', '4.623m x 1.855m'),
	(70, 2, 'Honda HR-V-white', 'white', '826000000', 8, 'Honda-HRV-White.png', '4.623m x 1.855m'),
	(71, 2, 'Honda HR-V-Black', 'Black', '826000000', 8, 'Honda-HRV-Black.png', '4.623m x 1.855m'),
	(72, 2, 'Honda HRV-Grey', 'Grey', '826000000', 8, 'Honda-HRV-Grey.png', '4.623m x 1.855m'),
	(73, 2,  'Honda HR-V-red', 'Red', '826000000', 8, 'Honda-HRV-Red.png', '4.623m x 1.855m'),
	(74, 2, 'Honda HRV-The silver', 'The silver', '826000000', 18, 'Honda-HRV-Thesilver.png', '4.623m x 1.855m'),
	(75, 3, 'Toyota Corolla Cross 1.8G', 'Blue 8X2', '746000000', 10, 'Toyota-CorollaCross18G-Blue.png', '4.460m x 1.825m'),
	(76, 3, 'Toyota Corolla Cross 1.8G', 'Brown 4X7', '746000000', 10, 'Toyota-CorollaCross18G-Brown.png', '4.460m x 1.825m'),
	(77, 3, 'Toyota Corolla Cross 1.8HEV', 'Grey 1K3', '936000000', 10, 'Toyota-CorollaCross18HVE-Grey.png', '4.460m x 1.825m'),
	(78, 3,'Toyota Corolla Cross 1.8HEV', 'Pearl white 089', '944000000', 10, 'Toyota-CorollaCross18HVE-Pearlwhite.png', '4.460m x 1.825m'),
	(79, 3, 'Toyota Fortuner 2.4MT 4X2', 'Copper color 4V8', '1015000000', 12, 'Toyota-Fortuner24MT4X2-Coppercolor.png', '4.795m x 1.855m'),
	(80, 3, 'Toyota Fortuner 2.4MT 4X2', 'Black 4V8', '1015000000', 12, 'Toyota-Fortuner24MT4X2-Black.png', '4.795m x 1.855m'),
	(81, 3, 'Toyota Fortuner 2.8 Legender','Pearl white 1D6', '1459000000', 30, 'Toyota-Fortuner24MT4X2-Pearlwhite.png', '4.795m x 1.855m'),
	(82, 3, 'Toyota Fortuner 2.8 Legender','The silver 8D3', '1459000000', 30, 'Toyota-Fortuner24MT4X2-Thesilver.png', '4.795m x 1.855m'),
	(83, 3, 'Toyota Innova 2.0 Venturer', 'Red 333', '893000000', 15, 'ToyotaInnova20Venturer-red.png', '4.735m x 1.855m'),
	(84, 3, 'Toyota Innova 2.0G', 'white 2H5', '885000000', 10, 'ToyotaInnova20G-White.png', '4.735m x 1.855m'),
	(85, 6, 'Kia Sonet-Black', 'Black', '1260000000', 11, 'Kia-Sonet-Black.png', '4.757m x 1.838m'),
	(86, 6, 'Kia Sonet-Grey', 'Grey', '1260000000', 11, 'Kia-Sonet-Grey.png', '4.757m x 1.838m'),
	(87, 6, 'Kia Sonet-Orange', 'Orange', '1260000000', 11, 'Kia-Sonet-Orange.png', '4.757m x 1.838m'),
	(88, 6, 'Kia Sonet-White', 'White', '1260000000', 11, 'Kia-Sonet-White.png', '4.757m x 1.838m'),
	(89, 6, 'Kia Sorento-Black', 'Black', '1760000000', 7, 'Kia-Sorento-Black.png', '4.757m x 1.838m'),
	(90, 6, 'Kia Sorento-Blue', 'Blue', '1760000000', 7, 'Kia-Sorento-Blue.png', '4.757m x 1.838m'),
	(91, 6, 'Kia Sorento-Platinum', 'Platinum', '1760000000', 7, 'Kia-Sorento-Platinum.png', '4.757m x 1.838m'),
	(92, 6, 'Kia Sorento-Red', 'Red', '1760000000', 7, 'Kia-Sorento-Red.png', '4.757m x 1.838m'),
	(93, 6, 'Kia Sorento-SteelGray', 'Steel Gray', '1760000000', 7, 'Kia-Sorento-SteelGray.png', '4.757m x 1.838m'),
	(94, 6, 'Kia Sorento-White', 'White', '1760000000', 7, 'Kia-Sorento-White.png', '4.757m x 1.838m'),
	(95, 3, 'Toyota Hilux-The silver', 'The silver', '674000000', 4, 'Toyota-Hilux-Thesilver.png', '5.330m x 1.855m'),
	(96, 3, 'Toyota Hilux-Orange', 'Orange', '674000000', 4, 'Toyota-Hilux-Orange.png', '5.330m x 1.855m'),
	(97, 3, 'Toyota Hilux-Grey', 'Grey', '674000000', 4, 'Toyota-Hilux-Grey.png', '5.330m x 1.855m'),
	(98, 3, 'Toyota Hilux-Black', 'Black', '674000000', 4, 'Toyota-Hilux-Black.png', '5.330m x 1.855m'),
	(99, 4, 'Mazda BT-50-Blue', 'Blue', '674000000', 2, 'Mazda BT-50-Blue.png', '5.330m x 1.855m'),
	(100, 4, 'Mazda BT-50-Red', 'Red', '674000000', 2, 'Mazda BT-50-Red.png', '5.330m x 1.855m'),	
	(101, 3, 'Toyota Alphard luxury', 'Pearl white 070', '4291000000', 3, 'ToyotaAlphardluxury-Pearlwhite.png', '4.795m x 1.855m'),
	(102, 3, 'Toyota Alphard luxury', 'Black 202', '4280000000', 5, 'ToyotaAlphardluxury-Black.png', '4.795m x 1.855m');


-- INSERT INTO `cart_details` (`id_cart_details`, `id_cart`, `carid`, `quantity`) VALUES
-- (1, 1, 1, 3),
-- (2, 1, 22, 3),
-- (3, 3, 22, 1);
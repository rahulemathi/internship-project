-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 12:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `price` varchar(10) NOT NULL,
  `dprice` varchar(10) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `dprice`, `image`) VALUES
(1, 'AMD GPU 7900 XTX', 'AMD has just launched the first two new entries in its cutting-edge Radeon 7000 series of graphics cards, starting with the flagship $999 Radeon RX 7900 XTX. With this release, AMD is taking a notably different approach from how its main competitor, Nvidia, positioned its GeForce RTX 40-series cards launched in October 2022. Instead of shooting for the moon to release a GPU that vies for dominance as the single fastest card money can buy, AMD aims to win over gamers with a simply better value. Though the AMD Radeon RX 7900 XTX has its limitations, if you’ve been waiting for a powerful graphics card that can compete with the Nvidia GeForce RTX 4080 at a more attractive price, this is the card for you. And for that, we give the Radeon RX 7900 XTX our Editors  Choice award for high-end graphics cards.', '150000', '110000', '7900-xtx.jpg'),
(2, 'air cooler', 'Air cooler takes in fresh air from outside and cools it through wet absorbent pads. Air conditioners make use of a chemical coolant to lower the temperature in the room. Comfort. Not as quick and great as the air conditioner. They provide great comfort in terms of cooling the room really quickly.', '50000', '40000', 'ac.jpg'),
(3, 'Air Cooler Tower', 'Air coolers make use of a simple air moving system that pulls fresh air from the outside and drives it through the wet cooling pads. The evaporation of water in these cooling pads brings down the temperature of the air, which is then blown out by the fan.', '15000', '10000', 'air-cooler.jpg'),
(4, 'Air Pods', 'AirPods deliver an unparalleled wireless headphone experience, from magical setup to high-quality sound. Available with free engraving.AirPods deliver an unparalleled wireless headphone experience, from magical setup to high-quality sound. Available with free engraving.AirPods deliver an unparalleled wireless headphone experience, from magical setup to high-quality sound. Available with free engraving.AirPods deliver an unparalleled wireless headphone experience, from magical setup to high-quality sound. Available with free engraving.', '20000', '15000', 'airpods.jpg'),
(5, 'AMD Ryzen 5 5600G', 'The AMD Ryzen™ 5 5600G processor has 6 CPU cores, a base clock speed of 3.9Ghz & 7 GPU cores.In a word, YES! The AMD Ryzen 5 5600G is a very competitive gaming processor with a relatively affordable price tag. It is not quite at the level of the Ryzen 5 5600X when it comes to pure gaming performance, but it is definitely not far off.', '20000', '18000', 'AMD-Ryzen-5.jpg'),
(6, 'Fridge', 'A refrigerator, colloquially fridge, is a commercial and home appliance consisting of a thermally insulated compartment and a heat pump (mechanical, electronic or chemical) that transfers heat from its inside to its external environment so that its inside is cooled to a temperature below the room temperature.', '50000', '40000', 'fridge.jpg'),
(7, 'Headphones', 'Headphones are a pair of small loudspeaker drivers worn on or around the head over a user s ears. They are electroacoustic transducers, which convert an electrical signal to a corresponding sound.Headphones are a pair of small loudspeaker drivers worn on or around the head over a user s ears. They are electroacoustic transducers, which convert an electrical signal to a corresponding sound.', '3000', '2000', 'headphones.jpg'),
(8, 'Iphone X', 'The iPhone X was Apple s flagship 10th anniversary iPhone featuring a 5.8-inch OLED display, facial recognition and 3D camera functionality, a glass body, and an A11 Bionic processor. Launched November 3, 2017, discontinued with the launch of the iPhone XR, XS, and XS Max.', '60000', '50000', 'iphone.png'),
(9, 'Iphone 14', 'The iPhone 14 display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle. When measured as a standard rectangular shape, the screen is 15.40 centimetres (6.06 inches) diagonally (actual viewable area is less).The iPhone 14 display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle. When measured as a standard rectangular shape, the screen is 15.40 centimetres (6.06 inches) diagonally (actual viewable area is less).', '130000', '120000', 'iphone-14-pro.png'),
(10, 'jbl speaker', 'JBL manufactures a wide array of speakers, and most of their models are portable Bluetooth speakers designed to hold up when you use them on the go. With solid, sturdy builds and IP ratings for dust and water resistance, they re ideal for indoor and outdoor use.', '5000', '4500', 'jbl-speaker.jpg'),
(11, 'Neckband', 'Boult Audio FXCharge Wireless in Ear Bluetooth Neckband with ENC Mic, 32H Playtime, Type-C Fast Charging (5Mins=7.5Hrs Playtime), Dual Pairing, Made in India, Biggest 14.2mm Drivers Ear Phones (Green)', '1500', '1300', 'neckband.jpg'),
(12, 'Nvidia RTX 3060 TI', 'The GeForce RTX™ 3060 Ti and RTX 3060 let you take on the latest games using the power of Ampere—NVIDIA’s 2nd generation RTX architecture. Get incredible performance with enhanced Ray Tracing Cores and Tensor Cores, new streaming multiprocessors, and high-speed memory.The GeForce RTX™ 3060 Ti and RTX 3060 let you take on the latest games using the power of Ampere—NVIDIA’s 2nd generation RTX architecture. Get incredible performance with enhanced Ray Tracing Cores and Tensor Cores, new streaming multiprocessors, and high-speed memory.', '40000', '38000', 'nvidia-rtx.jpg'),
(13, 'Router', 'A router receives and sends data on computer networks. Routers are sometimes confused with network hubs, modems, or network switches. However, routers can combine the functions of these components, and connect with these devices, to improve Internet access or help create business networks.', '5000', '4000', 'router.png'),
(14, 'AMD Ryzen ', 'The Fastest Gaming Processors in the World.¹\r\nWhen your PC has the world’s most advanced desktop processor for gamers, you can focus on what really matters: being victorious on the digital battlefield. Whether you’re playing the latest titles or revisiting a classic, the AMD Ryzen™ 7000 Series processors are a gaming powerhouse with high-performance “Zen 4” cores. With up to 16 cores, 32 threads, boost clocks of up to 5.7GHz2 and up to 144MB of on-chip memory, AMD Ryzen 7000 Series processors deliver game changing performance. ', '30000', '28000', 'ryzen.jpg'),
(15, 'Smart Watch', 'Noise ColorFit Pro 3 Smartwatch comes up with a great resolution of 320 x 360 pixels and 255 ppi PPI whereas Amazfit Bip U Smartwatch comes up with a great resolution of 320 x 360 pixels and 194 ppi PPI. Check detailed comparison below to compare specification for both models.', '2000', '1800', 'smart-watch.png'),
(16, 'NVME M.2 1 TB', 'M.2, pronounced m dot two[1] and formerly known as the Next Generation Form Factor (NGFF), is a specification for internally mounted computer expansion cards and associated connectors. M.2 replaces the mSATA standard, which uses the PCI Express Mini Card physical card layout and connectors. Employing a more flexible physical specification, M.2 allows different module widths and lengths, which, paired with the availability of more advanced interfacing features, makes M.2 more suitable than mSATA in general for solid-state storage applications, particularly in smaller devices such as ultrabooks and tablets.[2][3][4]', '8000', '6000', 'ssd.jpg'),
(17, 'Surround Sound', 'Surround sound is a technique for enriching the fidelity and depth of sound reproduction by using multiple audio channels from speakers that surround the listener (surround channels). Its first application was in movie theaters. Prior to surround sound, theater sound systems commonly had three screen channels of sound that played from three loudspeakers (left, center, and right) located in front of the audience. Surround sound adds one or more channels from loudspeakers to the side or behind the listener that are able to create the sensation of sound coming from any horizontal direction (at ground level) around the listener.', '100000', '80000', 'surround-speaker.jpg'),
(18, 'Washing Machine', 'LG 7.5 kg Semi Automatic Top Load Washing Machine (P7530SGAZ) Price in India. LG 7.5 kg Semi Automatic Top Load Washing Machine (P7530SGAZ) price in India starts from ₹ 14,187. The lowest price of LG 7.5 kg Semi Automatic Top Load Washing Machine (P7530SGAZ) is ₹ 14,187 at Flipkart on 28th June 2023.', '30000', '28000', 'washing-machine.jpg'),
(19, 'Washing Machine', 'Fully Automatic Top Load Washing Machine (P7530SGAZ) Price in India. LG 7.5 kg Semi Automatic Top Load Washing Machine (P7530SGAZ) price in India  The lowest price of LG 7.5 kg Semi Automatic Top Load Washing Machine.', '24000', '23500', 'washing-machine-advance.jpg'),
(20, 'Ladies watch', 'Which colour of timepiece would look best on a woman? A watch with a stainless steel, silver, or white gold case will complement a woman with a cool skin tone. Women with fair skin should select a wristwatch with a gold or rose gold case.', '2000', '1900', 'watch.png');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

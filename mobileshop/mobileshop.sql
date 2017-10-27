-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2017 at 07:33 AM
-- Server version: 5.5.49-log
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobileshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `asus`
--

CREATE TABLE IF NOT EXISTS `asus` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asus`
--

INSERT INTO `asus` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Asus_Zenfone3', '$299', '"PictureMobileShop/Asus/Zenfone3.png"'),
(2, 'In Stock', 'Asus_Zenfone_Zoom', '$280', '"PictureMobileShop/Asus/Zoom.png"'),
(3, 'In Stock', 'Asus_3Max', '$215', '"PictureMobileShop/Asus/3Max.png"'),
(4, 'In Stock', 'Asus_Max', '$179', '"PictureMobileShop/Asus/Max.png"'),
(5, 'In Stock', 'Asus_Go_5.0', '$125', '"PictureMobileShop/Asus/Go_5.0.png"');

-- --------------------------------------------------------

--
-- Table structure for table `blackberry`
--

CREATE TABLE IF NOT EXISTS `blackberry` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blackberry`
--

INSERT INTO `blackberry` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'BlackBerry_Priv', '$450', '"PictureMobileShop/BlackBerry/Priv.png"'),
(2, 'In Stock', 'BlackBerry_passport', '$320', '"PictureMobileShop/BlackBerry/Passport.png"'),
(3, 'In Stock', 'BlackBerry_Passport_Silver', '$320', '"PictureMobileShop/BlackBerry/Passport_silver.png"'),
(4, 'In Stock', 'BlackBerry_Leap', '$230', '"PictureMobileShop/BlackBerry/Leap.png"');

-- --------------------------------------------------------

--
-- Table structure for table `bluetoothheadset`
--

CREATE TABLE IF NOT EXISTS `bluetoothheadset` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bluetoothheadset`
--

INSERT INTO `bluetoothheadset` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Samsung_EO_MG920', '$35', '"PictureMobileShop/BluetoothHeadset/ss_eo_mg920.png"'),
(2, 'In Stock', 'Jabra_BT2045', '$35', '"PictureMobileShop/BluetoothHeadset/jabra_bt2045.png"'),
(3, 'In Stock', 'Jabra_Stone_3', '$99', '"PictureMobileShop/BluetoothHeadset/jabra_stone3.png"'),
(4, 'Out of Stock', 'Jabra_Eclipse', '$110', '"PictureMobileShop/BluetoothHeadset/jabra_eclipse.png"'),
(5, 'In Stock', 'Jabra_Storm', '$99', '"PictureMobileShop/BluetoothHeadset/jabra_strom.png"'),
(6, 'In Stock', 'Jabra_Classic', '$45', '"PictureMobileShop/BluetoothHeadset/jabra_classic.png"'),
(7, 'In Stock', 'Samsung_Gear_iCoNx', '$219', '"PictureMobileShop/BluetoothHeadset/ss_gear_iconx.png"'),
(8, 'In Stock', 'Hoco_EPB02', '$16', '"PictureMobileShop/BluetoothHeadset/hoco_epb02.png"'),
(9, 'In Stock', 'Hoco_E1', '$12', '"PictureMobileShop/BluetoothHeadset/hoco_e1.png"'),
(10, 'In Stock', 'Remax_RB-T3', '$18', '"PictureMobileShop/BluetoothHeadset/remax_rb_t3.png"'),
(11, 'In Stock', 'Remax_RB-T7', '$13', '"PictureMobileShop/BluetoothHeadset/remax_rb_t7.png"'),
(12, 'Out of Stock', 'Remax-T9', '$13', '"PictureMobileShop/BluetoothHeadset/remax_t9.png"');

-- --------------------------------------------------------

--
-- Table structure for table `charger`
--

CREATE TABLE IF NOT EXISTS `charger` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charger`
--

INSERT INTO `charger` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Hoco_Adapter_UH120', '$3', '"PictureMobileShop/charger/hoco_adaptor_uh120.png"'),
(2, 'In Stock', 'Hoco_Car_Duble_Ported', '$5', '"PictureMobileShop/charger/hoco_duble_proted.png"'),
(3, 'In Stock', 'Remax_Car_RCC301', '$7', '"PictureMobileShop/charger/remax_car_rcc301.png"'),
(4, 'In Stock', 'Remax_Car_RCC304', '$7', '"PictureMobileShop/charger/remax_car_rcc304.png"'),
(5, 'Out of Stock', 'Remax_Car_RCC208', '$6', '"PictureMobileShop/charger/remax_car_rcc208.png"'),
(6, 'In Stock', 'RemaxRB_T11c', '$16', '"PictureMobileShop/charger/remax_rbt11c.png"'),
(7, 'In Stock', 'Remax_RT_DC02', '$7', '"PictureMobileShop/charger/remax_rt_dc02.png"'),
(8, 'In Stock', 'Remax_RT_DC01', '$8', '"PictureMobileShop/charger/remax_rt_dc01.png"');

-- --------------------------------------------------------

--
-- Table structure for table `htc`
--

CREATE TABLE IF NOT EXISTS `htc` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `htc`
--

INSERT INTO `htc` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'HTC_One_A9(32GB)', '$350', '"PictureMobileShop/HTC/One_A9.png"'),
(2, 'In Stock', 'HTC_One_X9', '$350', '"PictureMobileShop/HTC/One_X9.png"'),
(3, 'In Stock', 'HTC_Desire_530', '$150', '"PictureMobileShop/HTC/Desire_530.png"'),
(4, 'In Stock', 'HTC_Desire_10Pro', '$440', '"PictureMobileShop/HTC/Desire_10_pro.png"'),
(5, 'In Stock', 'HTC_Desire_10_Lifestyle', '$299', '"PictureMobileShop/HTC/Desire_10_lifestyle.png"'),
(6, 'Out of Stock', 'HTC_728', '$199', '"PictureMobileShop/HTC/Desire_728.png"'),
(7, 'In Stock', 'HTC_10', '$480', '"PictureMobileShop/HTC/10.png"'),
(8, 'In Stock', 'HTC_Desire_626', '$165', '"PictureMobileShop/HTC/Desire_626.png"'),
(9, 'Out of Stock', 'HTC_Desire_830', '$230', '"PictureMobileShop/HTC/Desire_830.png"'),
(10, 'In Stock', 'HTC_Desire_630', '$168', '"PictureMobileShop/HTC/Desire_630.png"');

-- --------------------------------------------------------

--
-- Table structure for table `huawei`
--

CREATE TABLE IF NOT EXISTS `huawei` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `huawei`
--

INSERT INTO `huawei` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Mediapad_T2_7.0_Pro', '$219', '"PictureMobileShop/Huawei/Mediapad_T2_7.0.png"'),
(2, 'In Stock', 'Mediapad_T1_7.0', '$99', '"PictureMobileShop/Huawei/Mediapad_T1_7.0.png"'),
(3, 'In Stock', 'Huawei_P9', '$469', '"PictureMobileShop/Huawei/p9.png"'),
(4, 'In Stock', 'Huawei_GR5(2017)', '$329', '"PictureMobileShop/Huawei/GR5_2017.png"'),
(5, 'In Stock', 'Huawei_GR5_Mini', '$185', '"PictureMobileShop/Huawei/GR5_mini.png"'),
(6, 'Out of Stock', 'Huawei_Y3II(4G)', '$89', '"PictureMobileShop/Huawei/Y3_II_4G.png"'),
(7, 'In Stock', 'Mediapad_M3', '$349', '"PictureMobileShop/Huawei/Mediapad_M3.png"'),
(8, 'In Stock', 'Huawei_GR5', '$269', '"PictureMobileShop/Huawei/GR5.png"'),
(9, 'In Stock', 'Huawei_Matea', 'Contact Us', '"PictureMobileShop/Huawei/Metea.png"'),
(10, 'Out of Stock', 'Huawei_P8', '$385', '"PictureMobileShop/Huawei/p8.png"'),
(11, 'In Stock', 'Mediapad_T1_8.0', '$157', '"PictureMobileShop/Huawei/Mediapad_T1-8.0.png"'),
(12, 'In Stock', 'Huawei_Honor_3C', '$130', '"PictureMobileShop/Huawei/Honor_3C.png"'),
(13, 'In Stock', 'Huawei_Y6II', '$149', '"PictureMobileShop/Huawei/Y6_II.png"'),
(14, 'In Stock', 'Huawei_C7_Plus', '$26s', '"PictureMobileShop/Huawei/C7_plus.png"'),
(15, 'In Stock', 'Huawei_Honor_6Plus', '$270', '"PictureMobileShop/Huawei/Honor6_plus.png"'),
(16, 'In Stock', 'Huawei_Y5II', '$155', '"PictureMobileShop/Huawei/Y5_II.png"');

-- --------------------------------------------------------

--
-- Table structure for table `iphone`
--

CREATE TABLE IF NOT EXISTS `iphone` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iphone`
--

INSERT INTO `iphone` (`ID`, `Stock`, `Picture`, `Name`, `Price`) VALUES
(1, 'In Stock', '"PictureMobileShop/iPhone/apple_iphone_7_plus.png"', 'Apple_iPhone7_Red_Plus', 'Contact Us'),
(2, 'In Stock', '"PictureMobileShop/iPhone/iphone7plus_red.png"', 'iPhone7_Red', 'Contact Us'),
(3, 'Out of Stock', '"PictureMobileShop/iphone/iphone_SE.png"', 'iPhone_SE', '$320'),
(4, 'In Stock', '"PictureMobileShop/iphone/iphone6s.png"', 'iPhone6s', '$440'),
(5, 'In Stock', '"PictureMobileShop/iPhone/iphone6_32GB.png"', 'iPhone6_322GB', 'Contact Us'),
(6, 'In Stock', '"PictureMobileShop/iPhone/iPhone6s_plus.png"', 'iPhone6s_Plus', '$500'),
(7, 'Out of Stock', '"PictureMobileShop/iPhone/iphone7.png"', 'iPhone7', 'Contact Us'),
(8, 'In Stock', '"PictureMobileShop/iPhone/iphone7plus.png"', 'iPhone7_Plus', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `lg`
--

CREATE TABLE IF NOT EXISTS `lg` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lg`
--

INSERT INTO `lg` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'LG_K10 ', '$249', '"PictureMobileShop/LG/K10.png"'),
(2, 'In Stock', 'LG_K8', '$189', '"PictureMobileShop/LG/K8.png"'),
(3, 'Out of Stock', 'LG_K10(3G)', 'Contact Us', '"PictureMobileShop/LG/K10_3G.png"'),
(4, 'In Stock', 'LG_K10(LTE)', 'Contact Us', '"PictureMobileShop/LG/K10_LTE.png"'),
(5, 'In Stock', 'LG_Stylus2', 'Contact Us', '"PictureMobileShop/LG/stylus2.png"'),
(6, 'In Stock', 'LG_Nexus5', '$249', '"PictureMobileShop/LG/Nexus5.png"'),
(7, 'In Stock', 'LG_F70', '$135', '"PictureMobileShop/LG/F7.png"'),
(8, 'In Stock', 'LG_Nexus4', '$180', '"PictureMobileShop/LG/Nexus4.png"'),
(9, 'In Stock', 'LG_Optimus_Gpro', '$260', '"PictureMobileShop/LG/Optimus_Gpro.png"'),
(10, 'Out of Stock', 'LG_G3', '$275', '"PictureMobileShop/LG/G3.png"'),
(11, 'In Stock', 'LG_G3_Stylus', '$240', '"PictureMobileShop/LG/G3_stylus.png"'),
(12, 'In Stock', 'LG_G5_SE', 'Contact Us', '"PictureMobileShop/LG/G5_SE.png"'),
(13, 'In Stock', 'LG_K7', '$135', '"PictureMobileShop/LG/K7.png"'),
(14, 'In Stock', 'LG_Magna', '$129', '"PictureMobileShop/LG/Magna.png"'),
(15, 'Out of Stock', 'LG_G2_Mini', '$190', '"PictureMobileShop/LG/G2_Mini.png"'),
(16, 'In Stock', 'LG_G4', '$455', '"PictureMobileShop/LG/G4.png"'),
(17, 'In Stock', 'LG_Leon', '$120', '"PictureMobileShop/LG/Leon.png"'),
(18, 'In Stock', 'LG_Bello', '$139', '"PictureMobileShop/LG/Bello.png"'),
(19, 'Out of Stock', 'LG_AKA', '$185', '"PictureMobileShop/LG/Aka.png"'),
(20, 'In Stock', 'LG_Optimus_Gpro_Lite', '$199', '"PictureMobileShop/LG/Optimus_G_Pro_lite.png"');

-- --------------------------------------------------------

--
-- Table structure for table `memorycard`
--

CREATE TABLE IF NOT EXISTS `memorycard` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memorycard`
--

INSERT INTO `memorycard` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Transecend_MicroSD', '$6', '"PictureMobileShop/memoryCard/transcend_microsd.png"'),
(2, 'In Stock', 'Samsung_MicroSDHC_128GB', '$58', '"PictureMobileShop/memoryCard/samsung_microsdhc.png"'),
(3, 'In Stock', 'Samsung_MicroSDHC_16GB', '$10', '"PictureMobileShop/memoryCard/samsung_microsdhc_16gb.png"'),
(4, 'In Stock', 'Samsung_MicroSDHC_32GB', '$17', '"PictureMobileShop/memoryCard/samsung_microsdhc_32gb.png"'),
(5, 'In Stock', 'Samsung_MicroSDHC_4GB', '$6', '"PictureMobileShop/memoryCard/samsung_microsdhc_4gb.png"'),
(6, 'In Stock', 'Toshiba_MicroSD_8GB', '$7', '"PictureMobileShop/memoryCard/toshiba_microsd_8gb.png"'),
(7, 'In Stock', 'Transcend_MicroSD_32GB', '$17', '"PictureMobileShop/memoryCard/transcend_microsd_32gb.png"'),
(8, 'In Stock', 'Transcend_MicroSD_8GB', '$8', '"PictureMobileShop/memoryCard/transcend_microsd_8gb.png"');

-- --------------------------------------------------------

--
-- Table structure for table `nokia`
--

CREATE TABLE IF NOT EXISTS `nokia` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nokia`
--

INSERT INTO `nokia` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Nokia_105', '$22', '"PictureMobileShop/Nokia/Nokia_105.png"'),
(2, 'In Stock', 'Nokia_130', '$29', '"PictureMobileShop/Nokia/Nokia130.png"'),
(3, 'In Stock', 'Nokia_222', '$39', '"PictureMobileShop/Nokia/Nokia222.png"'),
(4, 'In Stock', 'Nokia_215', '$35', '"PictureMobileShop/Nokia/Nokia215.png"'),
(5, 'In Stock', 'Nokia_230', '$55', '"PictureMobileShop/Nokia/Nokia230.png"'),
(6, 'In Stock', 'Nokia_108', '$31', '"PictureMobileShop/Nokia/Nokia108.png"');

-- --------------------------------------------------------

--
-- Table structure for table `oppo`
--

CREATE TABLE IF NOT EXISTS `oppo` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oppo`
--

INSERT INTO `oppo` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Oppo_A39', '$199', '"PictureMobileShop/Oppo/A39.png"'),
(2, 'In Stock', 'Oppo_A37', '$159', '"PictureMobileShop/Oppo/A37.png"'),
(3, 'In Stock', 'Oppo_F1_Plus', '$429', '"PictureMobileShop/Oppo/F1_plus.png"'),
(4, 'In Stock', 'Oppo_F1s', '$269', '"PictureMobileShop/Oppo/F1s.png"'),
(5, 'In Stock', 'Oppo_Mirror5', '$149', '"PictureMobileShop/Oppo/Mirror5.png"'),
(6, 'In Stock', 'Oppo_Neo7(4G)', '$129', '"PictureMobileShop/Oppo/Neo7_4G.png"'),
(7, 'In Stock', 'Oppo_R7s', '$329', '"PictureMobileShop/Oppo/R7s.png"');

-- --------------------------------------------------------

--
-- Table structure for table `phone_detail`
--

CREATE TABLE IF NOT EXISTS `phone_detail` (
  `ID` int(20) NOT NULL,
  `Picture` varchar(150) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Memory` varchar(50) NOT NULL,
  `Sim` varchar(50) NOT NULL,
  `Warranty` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Technology` varchar(50) NOT NULL,
  `3G_Bands` varchar(50) NOT NULL,
  `4G_Bands` varchar(50) NOT NULL,
  `Speed` varchar(50) NOT NULL,
  `GPRS` varchar(50) NOT NULL,
  `Announced` varchar(50) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Dimensions` varchar(100) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `OS` varchar(50) NOT NULL,
  `Chipset` varchar(50) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `GPU` varchar(50) NOT NULL,
  `Primary_camera` varchar(200) NOT NULL,
  `Features` varchar(200) NOT NULL,
  `Video` varchar(200) NOT NULL,
  `Secondary` varchar(200) NOT NULL,
  `Stand_by` varchar(50) NOT NULL,
  `Talk_time` varchar(50) NOT NULL,
  `Music_play` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_detail`
--

INSERT INTO `phone_detail` (`ID`, `Picture`, `Name`, `Price`, `Memory`, `Sim`, `Warranty`, `Color`, `Technology`, `3G_Bands`, `4G_Bands`, `Speed`, `GPRS`, `Announced`, `Status`, `Dimensions`, `Weight`, `OS`, `Chipset`, `CPU`, `GPU`, `Primary_camera`, `Features`, `Video`, `Secondary`, `Stand_by`, `Talk_time`, `Music_play`) VALUES
(1, '"PictureMobileShop/iPhone/apple_iphone_7_plus.png"', 'iPhone7 Red Plus', 'Contact Us', '32MB', 'Nano Sim', '1year', 'Red', 'GSM/HSPA/LTE', 'GSM850/900/1800/1900', 'LTE Bands(2100), 2(1900)', 'HSPA', 'YES', '2016, September', 'Coming soon. Exp. release 2016, September 16', '158.2 x 77.9 x 7.3 mm (6.23 x 3.07 x 0.29 in)', '188 g (6.63 oz)', 'iOS 10', 'Apple A10 Fusion', 'Quad-core', '(six-core graphics)', 'Dual 12 MP, (f/1.8, 28mm & f/2.8, 56mm), phase detection autofocus, 2x optical zoom, OIS, quad-LED (dual tone) flash', 'Geo-tagging, simultaneous 4K video and 8MP image recording, touch focus, face/smile detection, HDR (photo/panorama)', '2160p@30fps, 1080p@30/60/120fps, 720p@240fps', '7 MP, f/2.2, 1080p@30fps, 720p@240fps, face detection, HDR, panorama', 'Up to 384 h (3G)', 'Up to 21 h (3G)', ''),
(2, '	\r\n"PictureMobileShop/iPhone/iphone7plus_red.png"', 'iPhone7_Red', 'Contact Us', '32GB', '1', '1 year', 'Black', 'GSM / CDMA / HSPA / EVDO / LTE', 'HSDPA 850 / 900 / 1700(AWS) / 1900 / 2100 - A1660', 'LTE band 1(2100), 2(1900), 3(1800), 4(1700/2100)', 'HSPA 42.2/5.76 Mbps, LTE Cat9 450/50 Mbps', 'Yes', '2016, September', 'Coming soon. Exp. release 2016, September 16', '138.3 x 67.1 x 7.1 mm (5.44 x 2.64 x 0.28 in)', '138 g (4.87 oz)', 'iOS 10', 'Apple A10 Fusion', 'Quad-core', '(six-core graphics)', '12 MP, f/1.8, phase detection autofocus, OIS, quad-LED (dual tone) flash', 'Geo-tagging, simultaneous 4K video and 8MP image recording, touch focus, face/smile detection, HDR (photo/panorama)', '2160p@30fps, 1080p@30/60/120fps, 720p@240fps', '7 MP, f/2.2, 1080p@30fps, 720p@240fps, face detection, HDR, panorama', 'Non-removable Li-Ion battery', 'Up to 14 h (3G)', 'Up to 40 h');

-- --------------------------------------------------------

--
-- Table structure for table `powerbank`
--

CREATE TABLE IF NOT EXISTS `powerbank` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `powerbank`
--

INSERT INTO `powerbank` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Remax_2600mAh', '$5', '"PictureMobileShop/powerBank/remax_2600mah.png"'),
(2, 'In Stock', 'Romoss_Wireless_10000mAh', '$30', '"PictureMobileShop/powerBank/romoss_wireless_10000mah.png"'),
(3, 'In Stock', 'Romoss_Wireless_5000mAh', '$20', '"PictureMobileShop/powerBank/romoss_wireless_5000mah.png"'),
(4, 'In Stock', 'Romoss_LED_10400mAh', '$20', '"PictureMobileShop/powerBank/romoss_led_10400mah.png"'),
(5, 'In Stock', 'Romoss_LED_20000mAh', '$22', '"PictureMobileShop/powerBank/romoss_led_20000mah.png"'),
(6, 'In Stock', 'Romoss_Sense_1500mAh', '$20', '"PictureMobileShop/powerBank/romoss_sense_1500mah.png"'),
(7, 'In Stock', 'Romoss_Sense_10000mAh', '$18', '"PictureMobileShop/powerBank/romoss_sense_10000mah.png"'),
(8, 'In Stock', 'Romoss_Sense_X', '$22', '"PictureMobileShop/powerBank/romoss_sense_x.png"');

-- --------------------------------------------------------

--
-- Table structure for table `samsung`
--

CREATE TABLE IF NOT EXISTS `samsung` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `samsung`
--

INSERT INTO `samsung` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'SamSung_Galaxy_j7_Prime', '$275', '"PictureMobileShop/samsung/galaxy_J7.png"'),
(2, 'In Stock', 'Samsung_Galaxy_j5_prime', '$210', '"PictureMobileShop/samsung/galaxy-j5.png"'),
(3, 'In Stock', 'Samsung_Galaxy_j2_prime', '$135', '"PictureMobileShop/samsung/galaxy_j2_prime.png"'),
(4, 'In Stock', 'Samsung_Galaxy_j2', '$135', '"PictureMobileShop/samsung/galaxy_J2.png"'),
(5, 'In Stock', 'Samsung_Galaxy_A3(2017)', 'Contact Us', '"PictureMobileShop/samsung/Galaxy-A3-2017.png"'),
(6, 'In Stock', 'Samsung_Galaxy_A5(2017)', 'Contact Us', '"PictureMobileShop/samsung/Galaxy_A5_2017.png"'),
(7, 'In Stock', 'Samsung_Galaxy_A3(2017)', 'Contact Us', '"PictureMobileShop/samsung/Galaxy-A3-2017.png"'),
(8, 'In Stock', 'Samsung_Galaxy_A5(2017)', 'Contact Us', '"PictureMobileShop/samsung/Galaxy_A5_2017.png"'),
(9, 'In Stock', 'Samsung_Galaxy_A7(2017)', 'Contact Us', '"PictureMobileShop/samsung/galaxy_A7_2017.PNG"'),
(10, 'Out of Stock', 'Samsung Galaxy S7 Edge', 'Contact Us', '"PictureMobileShop/samsung/s7-edge.png"'),
(11, 'In Stock', 'Galaxy S8', 'Contact Us', '"PictureMobileShop/samsung/galaxy-s8.png"'),
(12, 'In Stock', 'Galaxy C9 pro', '$539', '"PictureMobileShop/samsung/galaxy-c9-pro.png"'),
(13, 'Out of Stock', 'Galaxy tab S2', 'Contact Us', '"PictureMobileShop/samsung/tab-s2.png"'),
(14, 'In Stock', 'Galaxy Tab A7.0', '$190', '"PictureMobileShop/samsung/tab_A7.png"'),
(15, 'Out of Stock', 'Galaxy TabA7(2016)', 'Contact Us', '"PictureMobileShop/samsung/tab_A7_2016.png"'),
(16, 'In Stock', 'Galaxy J5(2016)', '$215', '"PictureMobileShop/samsung/j5_2016.png"'),
(17, 'In Stock', 'Galaxy_A9_Pro', '$520', '"PictureMobileShop/samsung/A9_pro.png"'),
(18, 'In Stock', 'Galaxy_J7(2016)', '$265', '"PictureMobileShop/samsung/j7_2016.png"'),
(19, 'In Stock', 'Galaxy_S7', '$630', '"PictureMobileShop/samsung/s7.png"'),
(20, 'Out of Stock', 'Galaxy_J5(2016)', '$220', '"PictureMobileShop/samsung/j5_2016.png"'),
(21, 'Out of Stock', 'Galaxy_J1_Ace', '$115', '"PictureMobileShop/samsung/galaxy-j1-Ace.png"'),
(22, 'In Stock', 'Galaxy_J1(2016)', '$115', '"PictureMobileShop/samsung/Galaxy-j1.png"'),
(23, 'In Stock', 'Galaxy_Tab_A10.1', '$360', '"PictureMobileShop/samsung/tab_A10.png"');

-- --------------------------------------------------------

--
-- Table structure for table `sony`
--

CREATE TABLE IF NOT EXISTS `sony` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sony`
--

INSERT INTO `sony` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Sony_Xperia_XA', '$220', '"PictureMobileShop/sony/Xperia_XA.png"'),
(2, 'In Stock', 'Sony_Xperia_Z5', '$410', '"PictureMobileShop/sony/Xperia_Z5.png"'),
(3, 'In Stock', 'Xperia_Xa_Ultra', '$285', '"PictureMobileShop/sony/Xperia_XA_Ultra.png"'),
(4, 'In Stock', 'Sony_Xperia_T3', '$160', '"PictureMobileShop/sony/Xperia_T3.png"'),
(5, 'In Stock', 'Sony_Xperia_M5', '$290', '"PictureMobileShop/sony/Xperia_M5.png"'),
(6, 'In Stock', 'Sony_Xperia_C5_Ultra', '$290', '"PictureMobileShop/sony/Xperia_C5_Ultra.png"'),
(7, 'In Stock', 'Sony_Xperia_C4', '$180', '"PictureMobileShop/sony/Xperia_C4.png"'),
(8, 'Out of Stock', 'Sony_Xperia_M2', '$175', '"PictureMobileShop/sony/Xperia_M2.png"'),
(9, 'In Stock', 'Xperia_Z5_Premuim', '$530', '"PictureMobileShop/sony/Xperia_Z5_Premuim.png"'),
(10, 'In Stock', 'Sony_Xperia_E4', '$79', '"PictureMobileShop/sony/Xperia_E4.png"'),
(11, 'In Stock', 'Sony_Xperia_T2_Ultra', '$199', '"PictureMobileShop/sony/Xperia_T2_Ultra.png"'),
(12, 'In Stock', 'Sony_Xperia_E3', '$145', '"PictureMobileShop/sony/Xperia_E3.png"'),
(13, 'Out of Stock', 'Sony_Xperia_E', '$60', '"PictureMobileShop/sony/Xperia_E.png"'),
(14, 'In Stock', 'Sony_Xperia_C', '$210', '"PictureMobileShop/sony/Xperia_C.png"');

-- --------------------------------------------------------

--
-- Table structure for table `sugar`
--

CREATE TABLE IF NOT EXISTS `sugar` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Picture` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sugar`
--

INSERT INTO `sugar` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Sugar_F7_Mini', '$235', '"PictureMobileShop/sugar/F7_Mini.png"'),
(2, 'In Stock', 'Sugar_S(32GB)', 'Contact Us', '"PictureMobileShop/sugar/s_32GB.png"'),
(3, 'In Stock', 'Sugar_C6', '$159', '"PictureMobileShop/sugar/C6.png"'),
(4, 'In Stock', 'Sugar_Y7_Max', '$128', '"PictureMobileShop/sugar/Y7_Max.png"'),
(5, 'In Stock', 'Sugar_F7', '$229', '"PictureMobileShop/sugar/F7_Mini.png"'),
(6, 'In Stock', 'Sugar_C7', '$169', '"PictureMobileShop/sugar/C7.png"'),
(7, 'In Stock', 'Sugar_1', '$110', '"PictureMobileShop/sugar/1.png"'),
(8, 'In Stock', 'Sugar_S9', 'Contact Us', '"PictureMobileShop/sugar/S9.png"'),
(9, 'In Stock', 'Sugar_Macaron', '$139', '"PictureMobileShop/sugar/Macaron.png"');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Mao Chenda', 'mao.chenda60@gmail.com', '$2y$10$JAPvOezg45ubVLU9xc4qwOgHXKGn.MQkldYvboelz5OUxF/NZoxRa'),
(4, 'mao sreyda', 'mao.sreyda25@gmail.com', '$2y$10$B3oQvya/1TOXJYvRB7xMV.Sgcegs/cH4AjqhoxxDlNHv9AfiXgJcu'),
(5, 'peng sony', 'peng.sony@gmail.com', '$2y$10$B8aZTBy9BNeoNj/07CGUJe7BaYm2s9NlC3BrzKNGLDwVLH/U8.EDC'),
(6, 'da', 'mao.sreyda25@gmail.com', '$2y$10$vfB4xeBJ8MTyRJfhoV5FX.0cvaQQB1BUF8BjKbh1xXqbsAQi7psH2'),
(7, 'da', 'mao.sreyda25@gmail.com', '$2y$10$GwB98and6LdpwBJmI5TrQuKcX1vvTpxYYyCpZjK1ogkRSypeu111u'),
(8, 'chea panha', 'chea.panha@gmail.com', '$2y$10$5lUi0GbSZZHOUXaa7Cbr1OIKrr/7Fvo7lwVoHBeEYXLwELo.wRRnu'),
(9, 'maochenda', 'mao.chenda@gmail.com', '$2y$10$.pugwI9B5C/k/7oSHRsrKOn8zPBQ.fdbpYF0F5u4KtHBOKk6IcN7e'),
(10, 'chenda', 'chenda.mao@gmail.com', '$2y$10$.n.962z2QEtjYGGYVX7cLugacxB3v08iKaUj/dT8kCmjZkm0SIzkW');

-- --------------------------------------------------------

--
-- Table structure for table `usbcable`
--

CREATE TABLE IF NOT EXISTS `usbcable` (
  `ID` int(11) NOT NULL,
  `Stock` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Picture` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usbcable`
--

INSERT INTO `usbcable` (`ID`, `Stock`, `Name`, `Price`, `Picture`) VALUES
(1, 'In Stock', 'Hoco_TypeC_CPH18', '$7', '"PictureMobileShop/usbCable/hoco_typec_cph18.png"'),
(2, 'In Stock', 'Hoco_TypeC_A1428', '$4', '"PictureMobileShop/usbCable/hoco_typec_a1428.png"'),
(3, 'In Stock', 'Hoco_Magnetic_Lightning', '$9', '"PictureMobileShop/usbCable/hoco_magnetic_lightning.png"'),
(4, 'In Stock', 'Hoco_TypeC_Reader', '$8', '"PictureMobileShop/usbCable/hoco_typec_reader.png"'),
(5, 'Out of Stock', 'Remax_Micro_to_Lightning', '$3', '"PictureMobileShop/usbCable/remax_micro_to_lightning.png"'),
(6, 'In Stock', 'Remax_30_PinCable', '$4', '"PictureMobileShop/usbCable/remax_30_pin_cable.png"'),
(7, 'In Stock', 'Remax_Micro', '$4', '"PictureMobileShop/usbCable/remax_micro.png"'),
(8, 'In Stock', 'Remax_Lightning', '$4', '"PictureMobileShop/usbCable/remax_lightning.png"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asus`
--
ALTER TABLE `asus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blackberry`
--
ALTER TABLE `blackberry`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bluetoothheadset`
--
ALTER TABLE `bluetoothheadset`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `charger`
--
ALTER TABLE `charger`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `htc`
--
ALTER TABLE `htc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `huawei`
--
ALTER TABLE `huawei`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lg`
--
ALTER TABLE `lg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `memorycard`
--
ALTER TABLE `memorycard`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nokia`
--
ALTER TABLE `nokia`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `oppo`
--
ALTER TABLE `oppo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phone_detail`
--
ALTER TABLE `phone_detail`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `powerbank`
--
ALTER TABLE `powerbank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `samsung`
--
ALTER TABLE `samsung`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sony`
--
ALTER TABLE `sony`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sugar`
--
ALTER TABLE `sugar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `usbcable`
--
ALTER TABLE `usbcable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asus`
--
ALTER TABLE `asus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blackberry`
--
ALTER TABLE `blackberry`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bluetoothheadset`
--
ALTER TABLE `bluetoothheadset`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `charger`
--
ALTER TABLE `charger`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `htc`
--
ALTER TABLE `htc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `huawei`
--
ALTER TABLE `huawei`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `iphone`
--
ALTER TABLE `iphone`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lg`
--
ALTER TABLE `lg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `memorycard`
--
ALTER TABLE `memorycard`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nokia`
--
ALTER TABLE `nokia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `oppo`
--
ALTER TABLE `oppo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `phone_detail`
--
ALTER TABLE `phone_detail`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `powerbank`
--
ALTER TABLE `powerbank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `samsung`
--
ALTER TABLE `samsung`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `sony`
--
ALTER TABLE `sony`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sugar`
--
ALTER TABLE `sugar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usbcable`
--
ALTER TABLE `usbcable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

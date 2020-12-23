-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 23 Ara 2020, 15:08:58
-- Sunucu sürümü: 5.7.32-cll-lve
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bakkonli_garmarke_garmar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Gürkan', 'Süzen', 'gsuzen@gmail.com', '3004');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `name`, `thumb`) VALUES
(3, 'TEMEL GIDA', 'uploads/bake.jpg'),
(5, 'Ä°Ã‡ECEK', 'uploads/soft-drink.jpg'),
(6, 'ATIÅžTIRMALIK', 'uploads/chocolate-bar.jpg'),
(9, 'KAHVALTILIK', 'uploads/bread.jpg'),
(10, 'MEYVE & SEBZE', 'uploads/harvest.jpg'),
(12, 'EVDE KAL', 'uploads/face-mask.jpg'),
(13, 'KASAP', 'uploads/meat.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deneme`
--

CREATE TABLE `deneme` (
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `quant` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `total` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_description` text NOT NULL,
  `item_price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_code`, `item_description`, `item_price`) VALUES
(0, 'portakal', '11', 'mfmfmf', '2'),
(0, 'rrr', '34', 'rvtftgv', '3'),
(0, 'fefefe', '1', '2crrfr', '22'),
(0, 'ffrf', 'vrfv', 'efrfr', 'de');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pquantity` varchar(255) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `orderitems`
--

INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES
(1, 19, '5', 1, '16'),
(2, 19, '5', 2, '16'),
(3, 1, '2', 2, '20990'),
(4, 1, '1', 3, '20990'),
(5, 20, '10', 3, '99'),
(6, 18, '1', 4, '12890'),
(7, 21, '1', 4, '75'),
(8, 2, '1', 5, '7590'),
(9, 19, '10', 5, '16'),
(10, 1, '1', 6, '20990'),
(11, 18, '1', 6, '12890'),
(12, 1, '1', 7, '20990'),
(13, 2, '1', 7, '7590'),
(14, 2, '1', 8, '7590'),
(15, 22, '1', 8, '18,00â‚º'),
(16, 22, '1', 9, '18,00â‚º'),
(17, 1, '1', 10, '20990'),
(18, 21, '1', 10, '75'),
(19, 19, '1', 11, '16'),
(20, 21, '1', 11, '75'),
(21, 22, '1', 12, '18,00â‚º'),
(22, 19, '1', 12, '16'),
(23, 22, '1', 14, '18,00â‚º'),
(24, 23, '1', 14, '8,50'),
(25, 24, '1', 14, '4,90'),
(26, 22, '1', 15, '18,00'),
(27, 23, '1', 15, '8,50'),
(28, 24, '1', 15, '4,90'),
(29, 23, '1', 16, '8,50'),
(30, 22, '1', 16, '18,00'),
(31, 22, '1', 17, '18,00'),
(32, 23, '1', 17, '8,50'),
(33, 23, '1', 18, '8'),
(34, 23, '1', 19, '8'),
(35, 22, '1', 20, '18'),
(36, 23, '1', 20, '8'),
(37, 24, '1', 20, '4'),
(38, 23, '1', 21, '8.50'),
(39, 22, '1', 21, '18.00'),
(40, 24, '1', 21, '4.50'),
(41, 22, '1', 22, '18.00'),
(42, 23, '1', 22, '8.50'),
(43, 24, '1', 22, '4.50'),
(44, 29, '1', 23, '5.00'),
(45, 29, '1', 24, '5.00'),
(46, 28, '1', 24, '18,00'),
(47, 28, '1', 25, '18,00'),
(48, 28, '1', 26, '18,00'),
(49, 29, '1', 26, '5.00'),
(50, 29, '1', 28, '5.00'),
(51, 28, '1', 28, '18,00'),
(52, 29, '200', 29, '5.00'),
(53, 28, '1', 29, '18,00'),
(54, 30, '1', 30, '9.00'),
(55, 31, '1', 30, '1.25'),
(56, 28, '2', 30, '18,00'),
(57, 30, '3', 33, '9.00'),
(58, 29, '4', 33, '5.00'),
(59, 31, '1', 33, '1.25'),
(60, 28, '1', 34, '18,00'),
(61, 29, '2', 34, '5.00'),
(62, 30, '1', 34, '9.00'),
(63, 31, '1', 34, '1.25'),
(64, 30, '1', 35, '9.00'),
(65, 28, '3', 35, '18,00'),
(66, 29, '1', 36, '5.00'),
(67, 30, '1', 36, '9.00'),
(68, 28, '1', 36, '18.00'),
(69, 29, '1', 37, '5.00'),
(70, 31, '1', 37, '1.25'),
(71, 30, '4', 38, '9.00'),
(72, 31, '1', 38, '1.25'),
(73, 29, '1', 38, '5.00'),
(74, 34, '1', 38, '15.00'),
(75, 29, '1', 39, '5.00'),
(76, 31, '1', 39, '1.25'),
(77, 30, '1', 39, '9.00'),
(78, 28, '1', 39, '18.00'),
(79, 34, '1', 39, '15.00'),
(80, 35, '1', 39, '59,90'),
(81, 29, '1', 40, '5.00'),
(82, 30, '1', 40, '9.00'),
(83, 31, '1', 40, '1.25'),
(84, 34, '1', 40, '5.00'),
(85, 35, '1', 40, '59,90'),
(86, 28, '1', 42, '18.00'),
(87, 29, '1', 43, '5.00'),
(88, 34, '1', 44, '5.00'),
(89, 29, '1', 45, '5.00'),
(90, 28, '1', 46, '18.00'),
(91, 31, '1', 46, '1.25'),
(92, 30, '1', 46, '9.00'),
(93, 34, '1', 47, '5.00'),
(94, 28, '1', 47, '18.00'),
(95, 28, '1', 48, '18.00'),
(96, 29, '1', 48, '5.00'),
(97, 30, '1', 48, '9.00'),
(98, 31, '1', 48, '1.25'),
(99, 30, '1', 49, '9.00'),
(100, 31, '1', 49, '1.25'),
(101, 31, '1', 50, '1.25'),
(102, 34, '1', 50, '5.00'),
(103, 29, '1', 51, '5.00'),
(104, 28, '1', 52, '18.00'),
(105, 29, '1', 53, '5.00'),
(106, 30, '1', 54, '9.00'),
(107, 28, '1', 56, '18.00'),
(108, 28, '1', 57, '18.00'),
(109, 28, '1', 58, '18.00'),
(110, 30, '1', 58, '9.00'),
(111, 31, '1', 58, '1.25'),
(112, 28, '1', 59, '18.00'),
(113, 29, '1', 60, '5.00'),
(114, 34, '1', 61, '5.00'),
(115, 28, '1', 62, '18.00'),
(116, 40, '1', 63, '6.90'),
(117, 29, '1', 63, '5.00'),
(118, 29, '1', 64, '5.00'),
(119, 40, '1', 64, '6.90'),
(120, 28, '1', 65, '18.00'),
(121, 30, '1', 66, '9.00'),
(122, 40, '1', 67, '6.90'),
(123, 31, '1', 69, '1.25'),
(124, 29, '1', 70, '5.00'),
(125, 28, '1', 71, '18.00'),
(126, 34, '1', 72, '5.00'),
(127, 28, '1', 73, '18.00'),
(128, 29, '1', 74, '5.00'),
(129, 29, '1', 75, '5.00'),
(130, 34, '1', 75, '5.00'),
(131, 28, '1', 75, '18.00'),
(132, 28, '1', 76, '18.00'),
(133, 29, '1', 77, '5.00'),
(134, 28, '1', 78, '18.00'),
(135, 34, '1', 79, '5.00'),
(136, 28, '1', 81, '18.00'),
(137, 28, '1', 82, '18.00'),
(138, 29, '1', 82, '5.00'),
(139, 35, '1', 83, '59.90'),
(140, 29, '1', 83, '5.00'),
(141, 34, '1', 84, '5.00'),
(142, 30, '1', 84, '9.00'),
(143, 28, '1', 85, '18.00'),
(144, 29, '1', 86, '5.00'),
(145, 28, '1', 87, '18.00'),
(146, 34, '1', 88, '5.00'),
(147, 35, '4', 89, '59.90'),
(148, 35, '4', 90, '59.90'),
(149, 28, '1', 90, '18.00'),
(150, 35, '10', 91, '59.90'),
(151, 28, '1', 92, '18.00'),
(152, 30, '1', 93, '9.00'),
(153, 28, '1', 94, '18.00'),
(154, 28, '10', 95, '18.00'),
(155, 29, '1', 96, '5.00'),
(156, 28, '1', 97, '18.00'),
(157, 30, '1', 98, '9.00'),
(158, 29, '1', 99, '5.00'),
(159, 28, '1', 100, '18.00'),
(160, 29, '1', 101, '5.00'),
(161, 28, '1', 102, '18.00'),
(162, 29, '1', 102, '5.00'),
(163, 30, '1', 103, '9.00'),
(164, 34, '1', 103, '5.00'),
(165, 28, '1', 103, '18.00'),
(166, 29, '1', 103, '5.00'),
(167, 31, '1', 103, '1.25'),
(168, 29, '1', 104, '5.00'),
(169, 30, '1', 105, '9.00'),
(170, 38, '1', 105, '59.90'),
(171, 28, '1', 106, '18.00'),
(172, 40, '1', 106, '6.90'),
(173, 38, '1', 106, '59.90'),
(174, 34, '1', 106, '5.00'),
(175, 28, '1', 107, '18.00'),
(176, 31, '1', 107, '1.25'),
(177, 28, '1', 108, '18.00'),
(178, 30, '1', 108, '9.00'),
(179, 31, '1', 108, '1.25'),
(180, 30, '1', 109, '9.00'),
(181, 34, '1', 109, '5.00'),
(182, 29, '1', 109, '5.00'),
(183, 35, '1', 109, '59.90'),
(184, 31, '1', 109, '1.25'),
(185, 39, '1', 109, '19.90'),
(186, 29, '1', 110, '5.00'),
(187, 30, '1', 111, '9.00'),
(188, 29, '1', 112, '5.00'),
(189, 29, '1', 113, '5.00'),
(190, 28, '1', 114, '18.00'),
(191, 29, '1', 115, '5.00'),
(192, 29, '1', 116, '5.00'),
(193, 29, '1', 117, '5.00'),
(194, 29, '1', 118, '5.00'),
(195, 30, '1', 119, '9.00'),
(196, 28, '1', 120, '18.00'),
(197, 28, '1', 121, '18.00'),
(198, 30, '1', 122, '9.00'),
(199, 35, '1', 122, '59.90'),
(200, 38, '1', 122, '59.90'),
(201, 29, '1', 123, '5.00'),
(202, 28, '1', 124, '18.00'),
(203, 29, '1', 125, '5.00'),
(204, 31, '1', 126, '1.25'),
(205, 34, '1', 126, '5.00'),
(206, 30, '1', 127, '9.00'),
(207, 38, '1', 127, '59.90'),
(208, 29, '1', 128, '5.00'),
(209, 31, '1', 128, '1.25'),
(210, 30, '1', 129, '9.00'),
(211, 34, '1', 129, '5.00'),
(212, 39, '1', 130, '5.90'),
(213, 28, '1', 130, '18.00'),
(214, 29, '1', 130, '5.00'),
(215, 31, '2', 130, '1.25'),
(216, 39, '1', 131, '5.90'),
(217, 31, '2', 131, '1.25'),
(218, 39, '1', 132, '5.90'),
(219, 29, '1', 132, '5.00'),
(220, 41, '1', 133, '22.90'),
(221, 29, '1', 133, '5.00'),
(222, 30, '1', 134, '9.00'),
(223, 29, '1', 135, '5.00'),
(224, 30, '1', 136, '9.00'),
(225, 39, '1', 136, '5.90'),
(226, 29, '1', 136, '5.00'),
(227, 40, '1', 136, '6.90'),
(228, 41, '1', 136, '22.90'),
(229, 31, '1', 136, '1.25'),
(230, 35, '1', 136, '59.90'),
(231, 30, '1', 137, '9.00'),
(232, 34, '1', 137, '5.00'),
(233, 35, '1', 137, '59.90'),
(234, 28, '1', 137, '18.00'),
(235, 39, '1', 137, '5.90'),
(236, 30, '1', 138, '9.00'),
(237, 31, '1', 138, '1.25'),
(238, 28, '1', 139, '18.00'),
(239, 29, '1', 139, '5.00'),
(240, 30, '1', 139, '9.00'),
(241, 31, '1', 139, '1.25'),
(242, 41, '1', 139, '22.90'),
(243, 30, '1', 140, '9.00'),
(244, 41, '1', 140, '22.90'),
(245, 29, '1', 140, '5.00'),
(246, 40, '1', 140, '6.90'),
(247, 30, '1', 141, '9.00'),
(248, 31, '1', 141, '1.25'),
(249, 28, '1', 143, '18.00'),
(250, 29, '1', 144, '5.00'),
(251, 39, '1', 144, '5.90'),
(252, 31, '1', 145, '1.25'),
(253, 29, '1', 145, '5.00'),
(254, 30, '1', 145, '9.00'),
(255, 30, '1', 146, '9.00'),
(256, 31, '1', 146, '1.25'),
(257, 41, '1', 146, '22.90'),
(258, 29, '1', 147, '5.00'),
(259, 31, '1', 147, '1.25'),
(260, 30, '1', 147, '9.00'),
(261, 39, '1', 147, '5.90'),
(262, 29, '1', 148, '5.00'),
(263, 30, '1', 148, '9.00'),
(264, 28, '1', 148, '18.00'),
(265, 29, '1', 149, '5.00'),
(266, 39, '1', 149, '5.90'),
(267, 34, '1', 149, '5.00'),
(268, 30, '1', 149, '9.00'),
(269, 28, '1', 150, '18.00'),
(270, 29, '1', 150, '5.00'),
(271, 31, '2', 150, '1.25'),
(272, 34, '1', 151, '5.00'),
(273, 29, '3', 152, '5.00'),
(274, 30, '3', 152, '9.00'),
(275, 41, '2', 152, '22.90'),
(276, 41, '2', 155, '22.90'),
(277, 38, '2', 157, '59.90'),
(278, 29, '2', 158, '5.00'),
(279, 39, '1', 159, '5.90'),
(280, 38, '3', 159, '59.90'),
(281, 30, '3', 160, '9.00'),
(282, 28, '3', 161, '18.00'),
(283, 29, '1', 161, '5.00'),
(284, 39, '1', 161, '5.90'),
(285, 31, '5', 162, '1.25'),
(286, 31, '1', 163, '1.25'),
(287, 29, '1', 164, '5.00'),
(288, 39, '1', 164, '5.90'),
(289, 34, '1', 164, '5.00'),
(290, 28, '10', 165, '18.00'),
(291, 38, '5', 166, '59.90'),
(292, 35, '66', 167, '59.90'),
(293, 40, '2', 168, '6.90'),
(294, 29, '3', 168, '5.00'),
(295, 29, '2', 169, '5.00'),
(296, 28, '1', 169, '18.00'),
(297, 30, '1', 170, '9.00'),
(298, 29, '1', 171, '5.00'),
(299, 31, '3', 172, '1.50'),
(300, 29, '2', 172, '5.00'),
(301, 30, '3', 173, '9.00'),
(302, 38, '3', 173, '11.90'),
(303, 30, '3', 174, '9.00'),
(304, 28, '1', 174, '18.00'),
(305, 30, '1', 175, '9.00'),
(306, 31, '3', 175, '1.50'),
(307, 35, '2', 175, '59.90'),
(308, 30, '1', 176, '9.00'),
(309, 28, '1', 177, '18.00'),
(310, 30, '3', 177, '9.00'),
(311, 30, '1', 178, '9.00'),
(312, 31, '1', 178, '1.50'),
(313, 30, '3', 179, '9.00'),
(314, 35, '1', 179, '59.90'),
(315, 29, '1', 180, '5.00'),
(316, 39, '2', 180, '5.90'),
(317, 42, '3', 180, '1.50'),
(318, 28, '1', 180, '18.00'),
(319, 34, '3', 180, '5.00'),
(320, 35, '1', 180, '59.90'),
(321, 38, '3', 180, '11.90'),
(322, 29, '2', 181, '5.00'),
(323, 31, '2', 182, '1.50'),
(324, 28, '2', 182, '18.00'),
(325, 35, '2', 182, '59.90'),
(326, 29, '3', 183, '5.00'),
(327, 40, '3', 183, '6.90'),
(328, 52, '2', 184, '1.95'),
(329, 29, '1', 184, '4.45'),
(330, 62, '1', 184, '95.95'),
(331, 31, '1', 185, '1.50'),
(332, 38, '1', 185, '12.50'),
(333, 53, '2', 185, '1.95'),
(334, 35, '1', 185, '30.50'),
(335, 58, '1', 185, '45.90'),
(336, 63, '1', 185, '102.95'),
(337, 63, '1', 186, '102.95'),
(338, 53, '1', 186, '1.95'),
(339, 63, '1', 187, '102.95'),
(340, 58, '1', 187, '45.90'),
(341, 29, '2', 188, '4.45'),
(342, 66, '1', 188, '12.90'),
(343, 45, '2', 188, '6.75'),
(344, 35, '1', 189, '30.50'),
(345, 29, '1', 189, '4.45'),
(346, 58, '1', 189, '45.90'),
(347, 35, '3', 190, '30.50'),
(348, 42, '1', 190, '1.50'),
(349, 28, '2', 191, '8.90'),
(350, 30, '4', 191, '6.00'),
(351, 63, '2', 191, '52.00'),
(352, 29, '3', 192, '4.45'),
(353, 35, '2', 192, '30.50'),
(354, 63, '2', 193, '52.00'),
(355, 30, '1', 193, '6.00'),
(356, 29, '3', 194, '4.45'),
(357, 50, '2', 194, '5.50'),
(358, 44, '1', 194, '4.75'),
(359, 34, '1', 195, '2.95'),
(360, 47, '1', 195, '1.70'),
(361, 69, '1', 196, '53.90'),
(362, 38, '2', 196, '12.50'),
(363, 54, '1', 196, '3.20'),
(364, 40, '1', 196, '6.90'),
(365, 39, '2', 196, '4.75'),
(366, 31, '1', 196, '1.50'),
(367, 29, '1', 197, '4.45'),
(368, 30, '1', 197, '6.00'),
(369, 35, '2', 198, '30.50'),
(370, 63, '1', 199, '52.00'),
(371, 62, '1', 199, '48.00'),
(372, 35, '1', 200, '30.50'),
(373, 69, '1', 200, '53.90'),
(374, 38, '2', 201, '12.50'),
(375, 42, '2', 201, '1.50'),
(376, 30, '1', 201, '6.00'),
(377, 43, '2', 201, '4.75'),
(378, 45, '1', 201, '6.75'),
(379, 49, '1', 201, '10.00'),
(380, 28, '1', 202, '8.90'),
(381, 42, '2', 203, '1.50'),
(382, 58, '1', 203, '45.90'),
(383, 29, '1', 203, '4.45'),
(384, 28, '1', 204, '8.90'),
(385, 69, '1', 204, '53.90'),
(386, 28, '1', 205, '8.90'),
(387, 35, '1', 205, '30.50'),
(388, 62, '1', 206, '48.00'),
(389, 30, '3', 207, '6.00'),
(390, 28, '7', 207, '8.90'),
(391, 29, '2', 208, '4.45'),
(392, 43, '3', 208, '4.75'),
(393, 29, '1', 209, '4.45'),
(394, 30, '2', 210, '6.00'),
(395, 38, '3', 211, '12.50'),
(396, 28, '1', 211, '8.90'),
(397, 30, '1', 211, '6.00'),
(398, 34, '3', 211, '2.95'),
(399, 29, '1', 212, '4.45'),
(400, 39, '3', 213, '4.75'),
(401, 30, '1', 213, '6.00'),
(402, 40, '1', 214, '6.90'),
(403, 29, '1', 215, '4.45'),
(404, 38, '1', 215, '12.50'),
(405, 29, '3', 216, '4.45'),
(406, 38, '4', 216, '12.50'),
(407, 30, '1', 217, '6.00'),
(408, 62, '1', 217, '48.00'),
(409, 34, '1', 217, '2.95'),
(410, 29, '1', 218, '4.45'),
(411, 28, '1', 219, '8.90'),
(412, 30, '1', 220, '6.00'),
(413, 29, '3', 221, '4.45'),
(414, 30, '3', 222, '6.00'),
(415, 28, '1', 223, '8.90'),
(416, 29, '1', 224, '4.45'),
(417, 29, '1', 225, '4.45'),
(418, 29, '1', 226, '4.45'),
(419, 29, '1', 227, '4.45'),
(420, 30, '1', 228, '6.00'),
(421, 30, '1', 229, '6.00'),
(422, 38, '1', 230, '12.50'),
(423, 42, '1', 231, '1.50'),
(424, 53, '1', 232, '1.95'),
(425, 35, '1', 233, '30.50'),
(426, 59, '1', 234, '14.95'),
(427, 30, '1', 235, '6.00'),
(428, 30, '1', 236, '6.00'),
(429, 28, '1', 237, '8.90'),
(430, 30, '1', 238, '6.00'),
(431, 42, '1', 238, '1.50'),
(432, 58, '1', 238, '45.90'),
(433, 28, '1', 238, '8.90'),
(434, 30, '1', 239, '6.00'),
(435, 29, '1', 240, '4.45'),
(436, 30, '1', 241, '6.00'),
(437, 31, '1', 242, '1.50'),
(438, 62, '1', 242, '48.00'),
(439, 63, '1', 242, '52.00'),
(440, 63, '1', 243, '52.00'),
(441, 29, '1', 244, '4.45'),
(442, 29, '1', 245, '4.45'),
(443, 28, '1', 246, '8.90'),
(444, 31, '1', 247, '1.50'),
(445, 30, '1', 248, '6.00'),
(446, 30, '2', 249, '6.00'),
(447, 30, '1', 250, '6.00'),
(448, 34, '1', 251, '2.95'),
(449, 30, '1', 252, '6.00'),
(450, 28, '1', 253, '8.90'),
(451, 30, '1', 254, '6.00'),
(452, 35, '1', 255, '30.50'),
(453, 29, '1', 256, '4.45'),
(454, 38, '1', 257, '12.50'),
(455, 30, '1', 258, '6.00'),
(456, 29, '1', 259, '4.45'),
(457, 30, '1', 260, '6.00'),
(458, 30, '1', 261, '6.00'),
(459, 30, '1', 262, '6.00'),
(460, 30, '1', 263, '6.00'),
(461, 35, '1', 264, '30.50'),
(462, 30, '1', 264, '6.00'),
(463, 42, '1', 264, '1.50'),
(464, 62, '1', 264, '48.00'),
(465, 35, '1', 265, '30.50'),
(466, 29, '1', 266, '4.45'),
(467, 43, '1', 267, '4.75'),
(468, 29, '2', 268, '4.45'),
(469, 30, '1', 269, '6.00'),
(470, 28, '1', 270, '8.90'),
(471, 31, '1', 271, '1.50'),
(472, 29, '1', 272, '4.45'),
(473, 29, '1', 273, '4.45'),
(474, 30, '1', 274, '6.00'),
(475, 38, '5', 275, '12.50'),
(476, 58, '1', 276, '45.90'),
(477, 30, '1', 277, '6.00'),
(478, 35, '2', 277, '30.50'),
(479, 43, '1', 277, '4.75'),
(480, 40, '1', 277, '6.90'),
(481, 69, '1', 278, '53.90'),
(482, 29, '1', 279, '4.45'),
(483, 30, '1', 280, '6.00'),
(484, 30, '1', 281, '6.00'),
(485, 30, '5', 282, '6.00'),
(486, 38, '1', 283, '12.50'),
(487, 30, '1', 284, '6.00'),
(488, 29, '1', 285, '4.45'),
(489, 50, '1', 286, '5.50'),
(490, 68, '1', 287, '13.95'),
(491, 31, '1', 288, '1.50'),
(492, 30, '1', 289, '6.00'),
(493, 69, '1', 290, '53.90'),
(494, 29, '1', 291, '4.45'),
(495, 38, '1', 292, '12.50'),
(496, 66, '1', 293, '12.90'),
(497, 30, '1', 294, '6.00'),
(498, 49, '1', 295, '10.00'),
(499, 30, '1', 296, '6.00'),
(500, 64, '1', 297, '26.45'),
(501, 70, '1', 298, '32.35'),
(502, 63, '1', 299, '52.00'),
(503, 30, '1', 300, '6.00'),
(504, 28, '1', 301, '8.90'),
(505, 63, '1', 302, '52.00'),
(506, 30, '1', 303, '6.00'),
(507, 66, '1', 304, '12.90'),
(508, 70, '1', 304, '32.35'),
(509, 43, '2', 304, '4.75'),
(510, 35, '1', 305, '30.50'),
(511, 51, '3', 306, '5.25'),
(512, 35, '3', 306, '30.50'),
(513, 49, '1', 306, '10.00'),
(514, 69, '3', 306, '53.90');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `kargo` varchar(255) NOT NULL,
  `totalson` varchar(255) NOT NULL,
  `orderstatus` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `uid`, `totalprice`, `kargo`, `totalson`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(274, 8, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-15 12:52:23'),
(275, 8, '62.5', '0', '62.5', 'SipariÅŸ OluÅŸturuldu', 'Kredi KartÄ±', '2020-12-15 12:54:09'),
(276, 8, '45.9', '2.5', '48.4', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-15 18:01:33'),
(277, 8, '78.65', '0', '78.65', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-15 18:07:46'),
(278, 8, '53.9', '2.5', '56.4', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-15 19:43:35'),
(279, 8, '4.45', '2.5', '6.95', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-15 19:45:44'),
(280, 67, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-15 19:48:39'),
(281, 8, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-16 10:53:12'),
(282, 8, '30', '2.5', '32.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-16 17:12:44'),
(283, 8, '12.5', '2.5', '15', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 10:40:55'),
(284, 8, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 10:50:57'),
(285, 8, '4.45', '2.5', '6.95', 'SipariÅŸ OluÅŸturuldu', 'Kredi KartÄ±', '2020-12-17 10:55:37'),
(286, 8, '5.5', '2.5', '8', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 11:00:06'),
(287, 8, '13.95', '2.5', '16.45', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 11:04:00'),
(288, 66, '1.5', '2.5', '4', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 11:05:29'),
(289, 8, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 11:14:12'),
(290, 66, '53.9', '2.5', '56.4', 'SipariÅŸ OluÅŸturuldu', 'Kredi KartÄ±', '2020-12-17 11:33:36'),
(291, 66, '4.45', '2.5', '6.95', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 14:19:24'),
(292, 66, '12.5', '2.5', '15', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 14:45:59'),
(293, 66, '12.9', '2.5', '15.4', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 15:11:32'),
(294, 66, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'Kredi KartÄ±', '2020-12-17 15:13:17'),
(295, 66, '10', '2.5', '12.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 15:15:41'),
(296, 66, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'Kredi KartÄ±', '2020-12-17 15:16:52'),
(297, 66, '26.45', '2.5', '28.95', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 15:18:40'),
(298, 8, '32.35', '2.5', '34.85', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 15:22:24'),
(299, 66, '52', '2.5', '54.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 15:40:27'),
(300, 8, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 15:45:20'),
(301, 69, '8.9', '2.5', '11.4', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-17 16:02:01'),
(302, 8, '52', '2.5', '54.5', 'SipariÅŸ OluÅŸturuldu', 'Kredi KartÄ±', '2020-12-18 12:38:34'),
(303, 71, '6', '2.5', '8.5', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-18 19:43:34'),
(304, 71, '54.75', '2.5', '57.25', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-18 19:45:34'),
(305, 71, '30.5', '2.5', '33', 'HazÄ±rlanÄ±yor', 'KapÄ±da Nakit', '2020-12-19 11:01:34'),
(306, 71, '278.95', '0', '278.95', 'SipariÅŸ OluÅŸturuldu', 'KapÄ±da Nakit', '2020-12-23 00:18:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ordertracking`
--

CREATE TABLE `ordertracking` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ordertracking`
--

INSERT INTO `ordertracking` (`id`, `orderid`, `status`, `message`, `timestamp`) VALUES
(3, 3, 'Cancelled', ' I don&#39;t want this item now.', '2017-10-28 17:54:18'),
(5, 4, 'In Progress', ' Order is in Progress', '2017-10-30 13:31:08'),
(6, 5, 'In Progress', ' Order is in Progress', '2017-11-06 19:45:11'),
(7, 15, 'In Progress', ' ÃœrÃ¼nleriniz hazÄ±rlanÄ±yor', '2020-04-24 18:33:08'),
(8, 15, 'Delivered', ' ', '2020-04-24 18:38:13'),
(9, 19, 'In Progress', ' ', '2020-04-25 15:54:46'),
(10, 19, 'In Progress', ' ', '2020-04-25 15:54:56'),
(11, 23, 'In Progress', ' ', '2020-05-02 14:04:39'),
(12, 23, 'In Progress', ' ', '2020-05-02 14:04:50'),
(13, 23, '', ' dvfvdfv', '2020-05-02 14:07:39'),
(14, 22, 'Dispatched', ' fvdfv', '2020-05-02 14:07:50'),
(15, 23, 'Delivered', ' ', '2020-05-02 14:08:15'),
(16, 23, 'Teslim Edildi', ' ', '2020-05-02 14:12:21'),
(17, 22, 'Yolda', ' ', '2020-05-02 14:12:26'),
(18, 13, 'Cancelled', ' tgtgt', '2020-05-02 14:20:09'),
(19, 23, 'HazÄ±rlanÄ±yor', ' ', '2020-05-02 14:23:02'),
(20, 14, 'Cancelled', ' ', '2020-11-11 20:52:03'),
(21, 58, 'Cancelled', ' frfrf', '2020-11-18 17:09:11'),
(22, 132, 'Teslim Edildi', ' ', '2020-11-21 14:57:17'),
(23, 137, 'HazÄ±rlanÄ±yor', ' ', '2020-11-21 23:32:32'),
(24, 143, 'HazÄ±rlanÄ±yor', ' ', '2020-11-22 11:41:01'),
(25, 144, 'HazÄ±rlanÄ±yor', ' ', '2020-11-22 12:51:51'),
(26, 211, 'MÃ¼ÅŸteri iptal etti', ' ', '2020-12-12 14:58:42'),
(27, 211, '', ' ', '2020-12-13 12:25:27'),
(28, 211, 'Teslim Edildi', ' ', '2020-12-13 12:25:42'),
(29, 218, 'HazÄ±rlanÄ±yor', ' ', '2020-12-13 14:38:42'),
(30, 305, 'HazÄ±rlanÄ±yor', ' ', '2020-12-19 11:03:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `catid`, `price`, `thumb`, `description`) VALUES
(28, 'Muz Yerli Kg.', 10, '8.90', 'uploads/muz-ithal.jpg', ''),
(29, 'Coca-Cola 1,5 LT.', 5, '4.45', 'uploads/coca cola sÌ§ekersiz.jpg', ''),
(30, 'TÃ¼rk Kahvesi Orta KavrulmuÅŸ 100gr', 5, '6.00', 'uploads/kahve.jpeg', ''),
(31, 'Ekmek 150 gr', 3, '1.50', 'uploads/ekmek.jpg', ''),
(34, 'Abant DoÄŸal Kaynak Suyu 5 lt', 5, '2.95', 'uploads/abant-dogal-kaynak-suyu-5.jpg', ''),
(35, 'Olin AyÃ§iÃ§ek YaÄŸ 2 Lt', 3, '30.50', 'uploads/olin2lt.jpg', ''),
(38, 'Sinangil Un 2 Kg', 3, '12.50', 'uploads/sinangil un.jpg', ''),
(39, 'Doritos Taco MÄ±sÄ±r Cipsi  121 gr', 6, '4.75', 'uploads/doritos.jpg', ''),
(40, 'Ã–zkaynak Soda 6\'lÄ±', 5, '6.90', 'uploads/ozkaynak.jpg', ''),
(42, 'Ãœlker Ã‡ikolatalÄ± Gofret', 6, '1.50', 'uploads/cikolataligofret.jpg', ''),
(43, ' Lay\'s Klasik Patates Cipsi 107 gr', 6, '4.75', 'uploads/lays-klasik.jpg', ''),
(44, 'Ruffles Originals Patates Cipsi 107 gr', 6, '4.75', 'uploads/Ruffles.jpg', ''),
(45, 'Ãœlker Ã‡ikolata FÄ±stÄ±klÄ± Kare 70 gr', 6, '6.75', 'uploads/ulker-antep-fistikli-kare-70-gr-52ed59.jpg', ''),
(46, 'Ãœlker Bol SÃ¼tlÃ¼ Kare Ã‡ikolata 60 gr', 6, '4.25', 'uploads/UÌˆlker SuÌˆtluÌˆ CÌ§ikolata.jpg', ''),
(47, 'Dido SÃ¼tlÃ¼ Ã‡ikolatalÄ± Gofret 35 gr', 6, '1.70', 'uploads/ulker-dido-38-gr.jpg', ''),
(48, 'Eti Karam Gurme Bitter Gofret 50 gr', 6, '2.00', 'uploads/karam.jpg', ''),
(49, 'TadÄ±m AyÃ§ekirdek 180 gr', 6, '10.00', 'uploads/TadÄ±m CÌ§ekirdek.jpg', ''),
(50, 'Schweppes Mandalina AromalÄ± 1 lt', 5, '5.50', 'uploads/schweppes.jpg', ''),
(51, 'Fanta Portakal AromalÄ± Gazoz 1,5 L', 5, '5.25', 'uploads/fanta.jpg', ''),
(52, 'Patates Taze DÃ¶kme Kg', 10, '1.95', 'uploads/patates-taze-dokme-kg.jpg', ''),
(53, 'SoÄŸan Kuru DÃ¶kme Kg', 10, '1.95', 'uploads/sogan-kuru-dokme-kg.jpg', ''),
(54, 'Filiz Boncuk Makarna 500 gr', 3, '3.20', 'uploads/filiz boncuk.jpg', ''),
(55, 'Filiz Spagetti Ã‡ubuk Makarna 500 gr', 3, '3.20', 'uploads/filiz spaghetti.jpg', ''),
(56, 'Domates Kg', 10, '5.80', 'uploads/domates-kg.jpg', ''),
(57, 'Biber KÃ¶y UsulÃ¼ Kg', 10, '9.95', 'uploads/biber-koy-usulu-kg.jpg', ''),
(58, 'Evony 3 KatlÄ± Cerrahi Maske 50\'li', 12, '45.90', 'uploads/evony maske.jpg', ''),
(59, 'BoÄŸaziÃ§i Limon KolonyasÄ± Pet 200 Ml', 12, '14.95', 'uploads/bogazici kolonya.jpg', ''),
(60, 'Konix Alkol BazlÄ± El Cilt AntiseptiÄŸi 1 L', 12, '35.90', 'uploads/konix.jpg', ''),
(61, 'Dana KÄ±ymalÄ±k 500gr', 13, '20.00', 'uploads/kÄ±yma.jpg', ''),
(62, 'Dana Antrikot 500 gr', 13, '48.00', 'uploads/antirikot.jpg', ''),
(63, 'Kuzu Pirzola 500 gr', 13, '52.00', 'uploads/pirzola.jpg', ''),
(64, 'Banvit PiliÃ§ Bonfile Kg', 13, '26.45', 'uploads/banvit pilicÌ§ monfile.jpg', ''),
(65, 'Banvit PiliÃ§ Kanat Kg', 13, '32.75', 'uploads/pilicÌ§ Ä±zgara.jpg', ''),
(66, 'BeypiliÃ§ PoÅŸetli BÃ¼tÃ¼n PiliÃ§ Kg', 13, '12.90', 'uploads/buÌˆtuÌˆn pilicÌ§.jpg', ''),
(67, 'Marmarabirlik Kuru Sele Zeytin 800 gr', 9, '27.45', 'uploads/marmarabirlik sele.jpg', '351- 380 Ad/kg'),
(68, 'Marmarabirlik Extra Zeytin 500 gr', 9, '13.95', 'uploads/zeytin.jpg', ''),
(69, 'YardÄ±mcÄ± LÃ¼ks Klasik Ä°nek Peyniri Kg', 9, '53.90', 'uploads/inek peyniri.jpg', ''),
(70, 'Muratbey Taze KaÅŸar Peyniri 600 gr', 9, '32.35', 'uploads/muratbey-taze-kasar-peyniri-600-g-59c625.jpg', ''),
(71, 'PÄ±nar SÃ¼t 1 lt', 9, '5.95', 'uploads/pÄ±nar suÌˆt.jpg', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `review` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `reviews`
--

INSERT INTO `reviews` (`id`, `pid`, `uid`, `review`, `timestamp`) VALUES
(1, 1, 6, 'It&#39;s an awesome Product...', '2017-10-30 15:18:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `timestamp`) VALUES
(1, 'vivek@codingcyber.com', '26e0eca228b42a520565415246513c0d', '2017-10-27 12:05:10'),
(2, 'vivek1@codingcyber.com', '$2y$10$cMzHNUFGKma96MywHmVMbekuJZb1tSNLsevHzLnSRbcRicQVhEC6a', '2017-10-27 12:24:25'),
(6, 'vivek2@codingcyber.com', '$2y$10$apI7l.1wAS5pgbG4YfMrN.jNd5T3XmhecFuSV2M6UNdoUHImPXNxm', '2017-10-27 12:28:20'),
(7, 'derya@gmail.com', '$2y$10$LnKwBHk73TAB9M2dD1cKz.ytpVgURV/D3bLFVjkEsNL2mpdNLtZ5e', '2020-04-24 12:16:02'),
(8, 'ezgi@gmail.com', '$2y$10$0erjWlH1i0bu3QZ5dNWeCuuwH1BiLuyZRUkEm9LmUdG.Dph.nYrie', '2020-04-24 17:28:33'),
(9, 'defne@gmail.com', '$2y$10$Uw5RPO21gs9ZCijvElHOA.copm2xhPlYDFy9XPyZgu0q45K30F0kW', '2020-04-25 17:55:10'),
(10, '', '$2y$10$SQwefH.JVL2q61gwIlPND.wehpe6ORyzuygYhFljvknb6j8PhjPOe', '2020-04-25 19:26:11'),
(11, 'deneme@gmail.com', '$2y$10$iZ8Jlrg1wu6JU4V0QczYIerm0xKCn9QnQDToAMwvqUbRW60c7eQMq', '2020-11-09 21:33:45'),
(12, 'ali@gmail.com', '$2y$10$vLk6vOKi.g7qCTuGuc6n5ePGcSqY227vZV8erFsjq.R1psVEw/ely', '2020-11-14 20:47:43'),
(13, 'defne.suzen@stu.bahcesehir.k12.tr', '$2y$10$0yxsegKr3rAkQfGM4M0Ng..I5PhmhoyP4rV2FGhAmfbgzqlyxsxc2', '2020-11-17 12:20:55'),
(15, 'defnee@gmail.com', '$2y$10$TixKSFTAdM37uziH3.OmFOG.ktgSbKOWs4zKZZS.dhFD/vNyRGSgG', '2020-11-17 12:24:10'),
(16, 'a1@gmail.com', '$2y$10$/qQvC.7Ad4SWhub8pdrnXe.r4RkA1yTDNFhe9mp8VcQpwZ9popRtC', '2020-11-17 12:25:05'),
(18, 'aali@gmail.com', '$2y$10$Glaxf7n3fb2cbH7VJGA/iuKEyvaN9UGahkymfOQNi1Ca7lAnuyxJG', '2020-11-17 21:27:07'),
(19, 'er@gmail.com', '$2y$10$VonIoWnxzFJ6U.jOKvYXdenXAiGnk9nm4SIoUOXfaT18CvlJ5tpNC', '2020-11-17 21:27:36'),
(20, 'we@g.com', '$2y$10$k9.D2lARM/reCYcD3eZwEuu32OLcI.i.vZA5R6mJ4MFuU9JEaYJeq', '2020-11-17 21:31:06'),
(21, 'alit@gmail.com', '$2y$10$u.pE.s9ql3BBrxsA55w.oeIzAc36y5TwKhSQXGeUqC3ryb00jbDoK', '2020-11-17 21:38:32'),
(22, 'alir@gmail.com', '$2y$10$WM1rte9XwdnbhPWYb1Le9eR6vM4vs50mNcgMy6tYU55K23rH/CHFu', '2020-11-17 21:40:40'),
(23, 'alis@gmail.com', '$2y$10$OaKTwha0VDCKny1dYGAKMu2y488.WObhKCleojLJpOdou2dgWRM.S', '2020-11-17 21:40:54'),
(24, 'aliq@gmail.com', '$2y$10$YsNo2aR29trio8JHiQKU0eVRu1S7cobuc9UcseA1tIOWNpzyBjE/G', '2020-11-17 21:41:49'),
(25, 'okan@g.com', '$2y$10$J61BlTnWle4RDWjGb5la5.GsEnPgzTK.KLTuGRjXfASW1ftgTJbLu', '2020-11-17 23:04:17'),
(26, 'hatice@g.com', '$2y$10$sUT18LdfkmhGUytwp5xFF.TWmZnJq9AuaQxUzDRAZarDGKPowzHUu', '2020-11-18 08:56:33'),
(27, 'mehmet@gmail.com', '$2y$10$g/199OyWOe.FyRDmmrqrAuJvAfrMkKMmTJ4.d8Vkp1c1NlVyGVfgu', '2020-11-18 14:14:26'),
(28, 'ferhat@gmail.com', '$2y$10$/z0R3zbgZl4a./1h0Th5y.iIRd/TXx1PXQvzLmFNM.OJrzhtXzBm6', '2020-11-18 21:20:49'),
(29, 'ayse@gmail.com', '$2y$10$YHq/vnAX1Dvi0EclasmLTeCBqJULcZnpEX.Dl3WGBA1qkh/Fy.nXW', '2020-11-18 21:28:30'),
(30, 'hasan@gmail.com', '$2y$10$ubJCiinbydrQ1kqAZUgVk.xaaWwTznOMVgDanQObjkbn5ICU86y36', '2020-11-18 21:44:09'),
(31, 'ege@gmail.com', '$2y$10$elN6i6Bfs3CvTsbMHJgUmOvVafO04fYiPJAa3/jCth8DwJWdXcS1e', '2020-11-18 21:50:16'),
(32, 'hulya@gmail.com', '$2y$10$dT65r7nbAfIwXCsTR41wTuCmSH8c2ePGd1gJiYq9/NFtiqkOtnBWe', '2020-11-19 06:42:53'),
(34, 'deryaa@gmail.com', '$2y$10$AhYfw/YptiecDVZ/nAdbgOhODPlUIzOH6NxefCIkqSc6N/8ocu0ia', '2020-11-19 07:48:01'),
(35, 'cem@gmail.com', '$2y$10$ZdAr94nS65YteeyLwdoSxO.uNhKfkvHvE7BO/IRCO7R9tika7vpaK', '2020-11-19 09:16:22'),
(36, 'user@gmail.com', '$2y$10$YIX6as8OERCDfBs7pml/xOnxlnmRF6z/Jo7ZEcQzu4g0/65o2P3bu', '2020-11-19 13:13:35'),
(37, 'fat@gmail.com', '$2y$10$qXdXZHgUhAHJeSjfxwtb2OZ2VEa8YMNKBkL87crc1A9.7DVCK5xCm', '2020-11-19 18:56:36'),
(38, 'yu@gmail.com', '$2y$10$FEY707Fbc/uQnPqergzny.9025O77rQBRPf5rG2.mzRjuxqwunaAq', '2020-11-19 19:29:55'),
(39, 'uye@gmail.com', '$2y$10$5NOnbb7Fym2oIFPS9AQDg.rr377Qu6d4Vi2VaaOKhzs1z3ZA1Z0C2', '2020-11-19 20:45:15'),
(40, 'uye2@gmail.com', '$2y$10$8gERcClQFsFfsSRiTRaRnOHXl0IM0xBgfLx9mdkDiYcn1mtNdVHzy', '2020-11-19 20:51:30'),
(42, 'uye3@gmail.com', '$2y$10$8wxbDgIA9MMidU10UpvisOr6QKo1dU7sYNqCnvg6Fdy4bebd4ctUG', '2020-11-19 21:14:32'),
(43, 'uye4@gmail.com', '$2y$10$zo43BtBGLEU95jP76ygo5epvMpzJgdQKW5niBH57r7qfOomXRPW/K', '2020-11-19 21:25:46'),
(44, 'defne@outlook.com', '$2y$10$8CUyfnIKUBSYHa5xoQaup.Gwepogusdfok/V6KL4hSbkMQhCZ.S/m', '2020-11-22 10:48:04'),
(45, 'gurkans@migros.com.tr', '$2y$10$bqwrdcHFUXzctX89OPE6YO4f.xm8o5vvOfm6dvCWLKPadxCrtgBFW', '2020-11-22 21:26:24'),
(46, 'yoo@g.com', '$2y$10$emkkEgE0o3o0tjfkduR9Deuqe0.iDadcnSmE65hSHxoNDQDu1NN5.', '2020-12-01 22:46:46'),
(47, 'ere@gmail.com', '$2y$10$ANtShf0lOYV3GSoWClc3YeozrSUaQR/X6np.prml7.IMXALf75HfS', '2020-12-01 22:53:26'),
(48, 'ggg@gmail.com', '$2y$10$0T0HJ2AKhLUjg4dXbFtPM.vKEZV6M1lWaBlpfH8fmtucGgJb1OxQO', '2020-12-01 22:59:44'),
(49, 'cemil@gmail.com', '$2y$10$3zhPWFrgwvqYmZUZzHcbz.4/fE5C8YP2Xf3kRn6TbDtKG1gOUlIz6', '2020-12-01 23:43:54'),
(50, 'ttt@gm.com', '$2y$10$j8hozuH25NOc2E5csJV3ZeXJLp.oW3WgLdxjwhio/OAeU.ZysP8Ci', '2020-12-02 00:01:00'),
(51, 'meral@gmail.com', '$2y$10$P1o0ZcrVoYij8Oy3dlffBOGUPFIGzSAFl5/iTeU0E3EII9Eul4Amu', '2020-12-02 08:53:43'),
(52, 'olo@gmail.com', '$2y$10$ySfPShiki4.wSglWjBsJguclKsEu9FJnLAwaE6GfOY5PaXF.bZcVu', '2020-12-02 19:03:49'),
(53, 'hainz@g.com', '$2y$10$ywo4P8Px0N4pUSIvcdVa1efR0W/OntG89UzHXiwaw3gi4PUEYQiXy', '2020-12-04 00:09:16'),
(54, 'emre@gmail.com', '$2y$10$6u.qBt.tRqJs81jY5vHtE.QZgOTphmqoE.pB3Bx2/2Xs6jC/G0Qqu', '2020-12-04 12:52:54'),
(55, 'okul@gmail.com', '$2y$10$wKg0aBd8e9BGNdNsatcxF.aT1FGATQrYD7U5khLdlcZEzxndOKrf.', '2020-12-05 11:11:04'),
(56, 'sam@gmail.com', '$2y$10$BqUClwyiiZCO1XwY4R1LUuiRIBN17nvk0hL3OCn6B4LT/xpsBkFZS', '2020-12-10 11:54:52'),
(57, 'd8@gmail.com', '$2y$10$0bgIsxcYJZZ9uxB34EMnp.7bqYFe5/DEPKVFCfL55m0nOYy5dFFfy', '2020-12-12 13:27:27'),
(58, 'd9@gmail.com', '$2y$10$ufuwAFjCzYJWEy1QZZv3cuZ1gJmoMfUCFaqG8eozxQWWxdH.79M76', '2020-12-12 13:48:05'),
(59, 'gamzezobar@gmail.com', '$2y$10$M2Pnac1.jR2yuABNED4rxeAzy3HqoXlbClENlLBVjPsw2bSuwLuvO', '2020-12-12 21:12:54'),
(60, 'gurkans@migros.com', '$2y$10$ThvG6k8a07MiUw3kWtjvb.cdCWYEcblF6.kv3GeijjaBWdhuGcP.u', '2020-12-12 21:32:40'),
(61, 'f1@gmail.com', '$2y$10$n0nHFikW5GkiYjud1d0Ct.FhHGB9khgRInbUbRuajGXJbYP9xbpcC', '2020-12-13 02:10:54'),
(62, 'gsuzen@gmail.com', '$2y$10$xynEADnGpMqhq5CMvMek/OrDk7J4XBiV02xB.VfCUPbZB1VRhNFz2', '2020-12-13 14:37:28'),
(63, 'gsuzenn@gmail.com', '$2y$10$j3zBUMzL4m.SRj45FIehGuWdWE1/guESEyoE/u.Dc2h6tvESzmlr6', '2020-12-13 15:32:48'),
(64, 'deryaa2@gmail.com', '$2y$10$UGqOcXZO0l9SZLzJxcmBIOeyNuB9jQeBEoIzQf63EOmToStYFrPUu', '2020-12-13 15:53:27'),
(65, 'fatma@gmail.com', '$2y$10$7hfDXICZL/d4FM2IilT5F.KIno2vehg91dWzpgejOZDzlcUXOneny', '2020-12-13 15:57:38'),
(66, 'ayhan@outlook.com', '$2y$10$KP/JF2/uz1C5PNzYZIpAue4XCNXs5DJIHKyYp4FizhYqgLmaOvDJe', '2020-12-13 21:38:23'),
(67, 'fox@gmail.com', '$2y$10$5/g88smGXsv8Nk2qIhGkMO2BBBO/cRA/qeCJxN.X.pj8xWydz2dc2', '2020-12-15 19:47:58'),
(69, 'gsuzen@gmail.comm', '$2y$10$qYwPFGj0.RRL7loXGEaR..XCloD0Nu36ji9IhuVx35Vt2e6s6Xxky', '2020-12-17 16:01:44'),
(70, 'irem.onur82@gmail.com', '$2y$10$UsKaS3e5Ilnc6d7tMO/TteZBX9cvPJT5nB/7NaloIj4mxI6qVEiQ6', '2020-12-17 16:33:25'),
(71, 'fb@gmail.com', '$2y$10$y322c4K6SbxJBeZu5FCIyuhS0O2Q0T3M7a1k985Nevtkwz187VtJS', '2020-12-18 19:43:05'),
(72, 'ersinal07@hotmail.com', '$2y$10$oqmAFhwgBcZUlOf8Tkwawe5vCn138HgLCKzCneol7H/osspeFRGHq', '2020-12-18 22:40:27'),
(73, 'keremtugrul@hotmail.com', '$2y$10$QHnn4owlJ.2u5C39uyXXJeli7OezJseQ9Otdzp8zl0ZAUw/xE4NJi', '2020-12-19 21:11:24'),
(74, 'onurt2105@gmail.com', '$2y$10$RJDsvBGbNQ5ES/wUMIEtMe6snsm5vwCAZ7pAm/liAzXr6DOyS7gfu', '2020-12-20 20:09:03'),
(75, 'laktafagus@hotmail.com', '$2y$10$HnY7IUNeSp4rnHRckLqwzunATAwShPPj1xl41moZy992NWgwU5qPu', '2020-12-20 22:01:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `usersmeta`
--

CREATE TABLE `usersmeta` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `il` varchar(255) NOT NULL,
  `ilce` varchar(255) NOT NULL,
  `cadde` varchar(255) NOT NULL,
  `apartman` varchar(255) NOT NULL,
  `daire` varchar(255) NOT NULL,
  `kat` varchar(255) NOT NULL,
  `kat2` varchar(255) NOT NULL,
  `mahalle` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `usersmeta`
--

INSERT INTO `usersmeta` (`id`, `uid`, `firstname`, `lastname`, `il`, `ilce`, `cadde`, `apartman`, `daire`, `kat`, `kat2`, `mahalle`, `zip`, `mobile`) VALUES
(1, 2, 'Vivek', 'V', '', '', 'Coding Cyber', 'Hyd', 'Hyd', 'Hyderabad', '', 'Telangana', '500060', ''),
(2, 6, 'Vivek', 'Vengala', '', '', 'Coding Cyber', '#201', 'DSNR', 'Hyderabad', '', 'Telangana', '500060', '9876543211'),
(3, 7, 'Gurkan', 'Suzen', '', '', 'Migros', 'Edirne', 'Merkez', 'edirne', '', '2000', '22030', '05445767012'),
(4, 8, 'Ezgi', 'SÃ¼zen', 'Edirne', 'Merkez', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '2', '1', '', '1.Murat Mahallesi', '', '05343698147'),
(5, 9, 'Defne', 'Suzen', 'Edirne', 'Merkez', 'Migros', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '3', '1', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '22030', '05445767012'),
(6, 10, 'Gurkan', 'Suzen', '', '', '', 'Edirne', 'Merkez', '', '', '', '', '05445767012'),
(7, 11, '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 12, '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 24, 'Osman', 'SÃ¼zen', '', '', '', 'frr', 'frf', '', '', '', '', '5445554433'),
(10, 25, '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 27, 'Ayhan', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '05343698147'),
(12, 30, 'Hasan', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '05343698147'),
(13, 30, 'Hasan', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '05343698147'),
(14, 31, 'Osman', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '8', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '05343698147'),
(15, 32, '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 34, 'GÃ¼rkan', 'SÃ¼zen', 'Edirne', 'Merkez', 'Merkez', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '2', '2', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05343698147'),
(17, 35, '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 36, '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 28, '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 39, '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 40, 'Uye2', 'SÃ¼zen', '', '', 'Merkez', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '05343698147'),
(22, 42, 'GÃ¼rkan', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '05343698147'),
(23, 43, 'GÃ¼rkan', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '1', '7', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '05343698147'),
(24, 44, 'Defnem', 'SÃ¼zen', 'Edirne', 'Merkez', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '5445767011'),
(25, 45, 'GÃ¼rkan', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '5343698147'),
(26, 47, 'Sergen', 'Ere', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '5', '10', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '5445556677'),
(27, 48, 'GÃ¼rkan ', 'SÃ¼zen ', '', '', 'Merkez ', 'Ã–z ', '1', '7', '', 'AtatÃ¼rk ', '', '555666778'),
(28, 49, 'Cemil', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '1', '23', '', 'AtatÃ¼rk', '', '05343698147'),
(29, 50, 'Ali', 'SÃ¼zen', '', '', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'AtatÃ¼rk', '', '05343698147'),
(30, 51, 'Meral', 'SÃ¼zen', '', '', 'KemikÃ§iler', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '3', '8', '', 'ÅžÃ¼krÃ¼paÅŸa', '', '05343698147'),
(31, 52, 'Osman', 'Olo', '', '', 'Merkez', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '2', '1', '', 'LalapaÅŸa', '', '05343698147'),
(32, 53, 'GÃ¼rkan', 'SÃ¼zen', '', '', 'MERKEZ', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '4', '7', '', 'AtatÃ¼rk', '', '05343698147'),
(33, 54, 'Emre', 'SÃ¼zen', '', '', 'Merkez', 'Guc', '2', '1', '', 'LalapaÅŸa', '', '05343698147'),
(34, 55, 'Umut', 'Bak', '', '', 'Merkez', 'Ã–z', '5', '16', '', 'AtatÃ¼rk', '', '05343698147'),
(35, 56, 'Sam', 'SÃ¼zen', '', '', 'MERKEZ', 'Guc', '2', '1', '', 'LalapaÅŸa', '', '05343698147'),
(36, 57, 'Derya', 'SÃ¼zen', 'Edirne', 'Merkez', 'Merkez', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '2', '1', '', '1.Murat Mahallesi', '', '05343698147'),
(37, 58, 'GÃ¼rkan', 'SÃ¼zen', 'Edirne', 'Merkez', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', '1.Murat Mahallesi', '', '05343698147'),
(38, 59, 'Gamze ', 'BÃ¶rektar ', 'Edirne', 'Merkez', 'AbdiipekÃ§i cad. ', 'Ã‡elik Ä°nÅŸaat YaÅŸam evleri A Blok ', '16', '4', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05445852479'),
(39, 60, 'GÃ¼rkan', 'SÃ¼zen', 'Edirne', 'Merkez', 'Merkez', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '2', '1', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05343698147'),
(40, 61, 'GÃ¼rkan', 'SÃ¼zen', 'Edirne', 'Merkez', 'MERKEZ', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', '1.Murat Mahallesi', '', '05343698147'),
(41, 62, 'dd', 'dd', 'Edirne', 'Merkez', 'sdf', 'fdg', 'fgdf', 'dfg', '', '1.Murat Mahallesi', '', '6445'),
(42, 63, 'GÃ¼rkan', 'SÃ¼zen', 'Edirne', 'Merkez', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '2', '1', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05343698147'),
(43, 64, 'Derya', 'SÃ¼zen', 'Edirne', 'Merkez', 'Merkez', 'Guc', '2', '1', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05343698147'),
(44, 65, 'GÃ¼rkan', 'SÃ¼zen', 'Edirne', 'Merkez', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '5', '1', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05343698147'),
(45, 66, 'Ayhan', 'SÃ¼zen', 'Edirne', 'Merkez', 'MERKEZ', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05343698147'),
(46, 67, 'GÃ¼rkan', 'SÃ¼zen', 'Edirne', 'Merkez', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '23', '7', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05343698147'),
(47, 69, 'gfh', 'ghg', 'Edirne', 'Merkez', 'hgfh', 'gfhgfhg', 'fhgf', 'hfgh', '', '1.Murat Mahallesi', '', ''),
(48, 70, 'Ä°rem', 'Onur', 'Edirne', 'Merkez', 'Hoca Ahmet Yesevi caddesi', 'Akevler sitesi c blok', '9', '4', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05437170973'),
(49, 71, 'GÃ¼rkan', 'SÃ¼zen', 'Edirne', 'Merkez', 'Abdi Ä°pekÃ§i', 'Ã‡elik Ä°nÅŸaat YaÅŸam Evleri', '1', '1', '', '1.Murat Mahallesi', '', '05343698147'),
(50, 72, 'ERSÄ°N', 'AL', 'Edirne', 'Merkez', 'KARAALÄ° SOK.', 'AKASYA 3 APT.', '2', '1', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '5522402207'),
(51, 74, 'Onur', 'Tuna', 'Edirne', 'Merkez', '20013 sokak', 'Manzara 1 evleri', '20', '4', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05079296789'),
(52, 75, 'Ahmet ', 'DaÄŸhan ', 'Edirne', 'Merkez', 'Tevfik SÄ±rrÄ± GÃ¼r cad. ', 'Kula sitesi A blok ', 'Daire 7 ', '2', '', 'ÅžÃ¼krÃ¼paÅŸa Mahallesi', '', '05338108408');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `wishlist`
--

INSERT INTO `wishlist` (`id`, `pid`, `uid`, `timestamp`) VALUES
(1, 1, 6, '2017-10-30 16:36:45'),
(2, 2, 6, '2017-10-30 16:38:07'),
(3, 21, 6, '2017-11-06 19:42:35');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ordertracking`
--
ALTER TABLE `ordertracking`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Tablo için indeksler `usersmeta`
--
ALTER TABLE `usersmeta`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- Tablo için AUTO_INCREMENT değeri `ordertracking`
--
ALTER TABLE `ordertracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Tablo için AUTO_INCREMENT değeri `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Tablo için AUTO_INCREMENT değeri `usersmeta`
--
ALTER TABLE `usersmeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Tablo için AUTO_INCREMENT değeri `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

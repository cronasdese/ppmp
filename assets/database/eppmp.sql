-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 08:43 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eppmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `status`) VALUES
(1, 'Infrastructure', 1),
(2, 'Goods and Services', 1),
(3, 'Staff Development', 1),
(4, 'Consultancy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcategory_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategory_id` (`subcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=355 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `subcategory_id`, `description`, `unit`, `price`, `status`) VALUES
(1, 2, 'ACETATE', 'roll', '624.00', 1),
(2, 2, 'AIR FRESHENER, aerosol, 280ml/150g min', 'can', '81.64', 1),
(3, 2, 'ALCOHOL, ethyl, 68%-70%, scented, 500ml (-5ml)', 'bottle', '43.14', 1),
(4, 2, 'BATTERY, dry cell, AA, 2 pieces per blister pack', 'pack', '17.14', 1),
(5, 2, 'BATTERY, dry cell, AAA, 2 pieces per blister pack', 'pack', '15.03', 1),
(6, 2, 'BATTERY, dry cell, D, 2 pieces per blister pack', 'pack', '77.56', 1),
(7, 2, 'BINDING AND PUNCHING MACHINE', 'unit', '10398.96', 1),
(8, 2, 'BROOM, SOFT (TAMBO), weight: 200g min tiger grass ', 'piece', '104.00', 1),
(9, 2, 'BROOM, STICK (TINGTING)', 'piece', '23.92', 1),
(10, 2, 'CALCULATOR, COMPACT, electronic, 12 digits cap, 1 unit in individual box', 'unit', '142.36', 1),
(11, 2, 'CALCULATOR, SCIENTIFIC, 1 unit in individual box', 'unit', '328.64', 1),
(12, 2, 'CARBON FILM, A4 SIZE, 100 sheets per box', 'box', '223.60', 1),
(13, 2, 'CARBON FILM, PE, black, size 216mm x 330mm, 100 sheets per box', 'box', '202.80', 1),
(14, 2, 'CARTOLINA, ASSORTED COLORS, 20 pieces per pack', 'pack', '73.32', 1),
(15, 1, 'CHAIR, MONOBLOC, BEIGE, with backrest, w/o armrest', 'piece', '251.56', 1),
(16, 1, 'CHAIR, MONOBLOC, WHITE, with backrest, w/o armrest', 'piece', '251.56', 1),
(17, 2, 'CHALK, WHITE ENAMEL, 100 pieces per box', 'box', '25.86', 1),
(18, 2, 'CLEANER, TOILET BOWL AND URINAL, , 900ml-1,000ml cap', 'bottle', '41.60', 1),
(19, 2, 'CLEANSER, SCOURING POWDER, 350g min./can', 'can', '18.20', 1),
(20, 2, 'CLEARBOOK, A4 SIZE', 'piece', '37.44', 1),
(21, 5, 'CLEARBOOK, LEGAL', 'piece', '41.60', 1),
(22, 2, 'CLIP, BACKFOLD, 19MM, 12 pieces per box', 'box', '7.28', 1),
(23, 2, 'CLIP, BACKFOLD, 25MM, 12 pieces per box', 'box', '15.08', 1),
(24, 2, 'CLIP, BACKFOLD, 32MM, 12 pieces per box', 'box', '20.68', 1),
(25, 2, 'CLIP, BACKFOLD, 50MM, 12 pieces per box', 'box', '43.68', 1),
(26, 2, 'COMPACT FLUORESCENT LAMP, 18 WATTS, 1 piece in individual box', 'piece', '93.29', 1),
(27, 2, 'CONTINUOUS FORM, 1 PLY, 280 x 241mm , 2,000 sheets per box', 'box', '601.90', 1),
(28, 2, 'CONTINUOUS FORM, 1 PLY, 280MM X 378MM, 2,000 sheets per box', 'box', '950.30', 1),
(29, 2, 'CONTINUOUS FORM, 2 PLY, 280 x 241mm, 1,000 sets per box', 'box', '685.15', 1),
(30, 2, 'CONTINUOUS FORM, 2 PLY, 280MM X 378MM, 1,000 sets per box', 'box', '1220.96', 1),
(31, 2, 'CONTINUOUS FORM, 3 PLY, 280 x 241mm, 500 sets per box', 'box', '571.80', 1),
(32, 2, 'CONTINUOUS FORM, 3 PLY, 280MM X 378MM, 500 sets per box', 'box', '958.15', 1),
(33, 2, 'CORRECTION TAPE, 1 piece in individual plastic', 'piece', '41.08', 1),
(34, 2, 'CUTTER BLADE, 10 pieces per tube', 'tube', '9.19', 1),
(35, 2, 'CUTTER KNIFE', 'piece', '19.76', 1),
(36, 2, 'DATA FILE BOX, made of chipboard, with closed ends', 'piece', '69.73', 1),
(37, 2, 'DATA FOLDER, made of chipboard, taglia lock', 'piece', '68.64', 1),
(38, 2, 'DATING AND STAMPING MACHINE', 'piece', '478.38', 1),
(39, 2, 'DETERGENT POWDER, all purpose, 1kg per plastic pouch', 'pouch', '41.60', 1),
(40, 2, 'DIGITAL VOICE RECORDER, memory: 4GB (expandable), 1 unit in individual box', 'unit', '6229.60', 1),
(41, 2, 'DISINFECTANT, bleaching solution', 'container', '101.82', 1),
(42, 2, 'DISINFECTANT SPRAY, aerosol type, 400-550 grams', 'can', '119.60', 1),
(43, 2, 'DOCUMENT CAMERA', 'unit', '25168.00', 1),
(44, 2, 'DUST PAN, non-rigid plastic', 'piece', '27.96', 1),
(45, 2, 'DVD REWRITABLE', 'piece', '21.37', 1),
(46, 2, 'ELECTRIC FAN, INDUSTRIAL', 'unit', '1144.00', 1),
(47, 2, 'ELECTRIC FAN, ORBIT type, ceiling,  metal blade', 'unit', '1248.00', 1),
(48, 2, 'ELECTRIC FAN, STAND TYPE', 'unit', '1036.88', 1),
(49, 2, 'ELECTRIC FAN, WALL TYPE', 'unit', '789.36', 1),
(50, 2, 'ENVELOPE, DOCUMENTARY, for A4 size document, 500 pieces per box', 'box', '381.54', 1),
(51, 2, 'ENVELOPE, DOCUMENTARY, for legal size document, 500 pieces per box', 'box', '507.40', 1),
(52, 2, 'ENVELOPE, EXPANDING, KRAFTBOARD,for legal size doc, 100 pieces per box', 'box', '621.71', 1),
(53, 2, 'ENVELOPE, EXPANDING, PLASTIC', 'piece', '35.03', 1),
(54, 2, 'ENVELOPE, MAILING, 500 pieces per box', 'box', '134.04', 1),
(55, 2, 'ENVELOPE, MAILING, WITH WINDOW, 500 pieces per box', 'box', '171.48', 1),
(56, 2, 'ERASER, FELT, FOR BLACKBOARD OR WHITEBOARD', 'piece', '10.07', 1),
(57, 2, 'ERASER, PLASTIC OR RUBBER', 'piece', '2.16', 1),
(58, 2, 'EXTERNAL HARD DRIVE, 1TB, 2.5"HDD, USB 3.0, 1 unit in individual box', 'unit', '3092.96', 1),
(59, 2, 'FACSIMILE MACHINE', 'unit', '3502.72', 1),
(60, 2, 'FASTENER, METAL, 70mm between prongs, 50 sets per box', 'box', '57.09', 1),
(61, 2, 'FILE ORGANIZER, LEGAL', 'piece', '82.87', 1),
(62, 2, 'FILE TAB DIVIDER, A4,  5 colors per set', 'set', '12.48', 1),
(63, 2, 'FILE TAB DIVIDER, LEGAL,  5 colors per set', 'set', '16.64', 1),
(64, 2, 'FIRE EXTINGUISHER, DRY CHEMICAL', 'unit', '1144.00', 1),
(65, 2, 'FIRE EXTINGUISHER, PURE HCFC', 'unit', '3939.52', 1),
(66, 2, 'FLASH DRIVE, 16 GB capacity,1 piece in individual blister pack', 'piece', '210.08', 1),
(67, 2, 'FLOOR WAX, PASTE, RED', 'can', '202.80', 1),
(68, 2, 'FLUORESCENT LAMP, 28 WATTS', 'tube', '114.40', 1),
(69, 2, 'FLUORESCENT LAMP, 36 WATTS', 'tube', '36.30', 1),
(70, 2, 'FOLDER, FANCY, A4, 50 pieces per bundle', 'bundle', '234.00', 1),
(71, 2, 'FOLDER, FANCY, legal, 50 pieces per bundle', 'bundle', '291.20', 1),
(72, 2, 'FOLDER, L-TYPE, A4 SIZE, 50 pieces per pack', 'pack', '166.40', 1),
(73, 2, 'FOLDER, L-TYPE, LEGAL SIZE, 50 pieces per pack', 'pack', '182.00', 1),
(74, 2, 'FOLDER, PRESSBOARD, size: 240mm x 370mm (-5mm), 100 pieces per box', 'box', '935.98', 1),
(75, 2, 'FOLDER, TAGBOARD, for A4 size documents, 100 pieces per pack', 'pack', '259.36', 1),
(76, 2, 'FOLDER, TAGBOARD, for legal size documents ,100 pieces per pack', 'pack', '299.98', 1),
(77, 1, 'FURNITURE CLEANER, aerosol, 300ml min./can', 'can', '84.76', 1),
(78, 2, 'GLUE, all purpose, gross weight: 200 grams min', 'jars', '48.88', 1),
(79, 2, 'HANDBOOK ON RA9184', 'book', '28.90', 1),
(80, 2, 'INDEX TAB, 5 sets per box', 'box', '50.84', 1),
(81, 2, 'INSECTICIDE, aerosol type, net content: 600ml min ', 'can', '117.52', 1),
(82, 2, 'LOOSELEAF COVER, 50 sets per bundle', 'bundle', '539.76', 1),
(83, 2, 'MAGAZINE FILE BOX, LARGE', 'piece', '44.72', 1),
(84, 2, 'MARKER, FLUORESCENT, 3 colors per set', 'set', '35.55', 1),
(85, 2, 'MARKER, PERMANENT, bullet type, black', 'piece', '9.65', 1),
(86, 2, 'MARKER, PERMANENT, bullet type, blue', 'piece', '9.65', 1),
(87, 2, 'MARKER, PERMANENT, bullet type, red', 'piece', '9.65', 1),
(88, 2, 'MARKER, WHITEBOARD, black', 'piece', '11.80', 1),
(89, 2, 'MARKER, WHITEBOARD, blue', 'piece', '11.80', 1),
(90, 2, 'MARKER, WHITEBOARD, red', 'piece', '11.80', 1),
(91, 2, 'MONOBLOC, TABLE, BEIGE', 'unit', '1242.80', 1),
(92, 2, 'MONOBLOC, TABLE, WHITE', 'unit', '1232.40', 1),
(93, 2, 'MOPBUCKET', 'unit', '2254.72', 1),
(94, 2, 'MOPHANDLE', 'piece', '142.48', 1),
(95, 2, 'MOPHEAD, made of rayon, weight: 400 grams min', 'piece', '98.80', 1),
(96, 2, 'MOUSE, OPTICAL, USB CONNECTION TYPE, 1 unit in individual box', 'unit', '127.80', 1),
(97, 2, 'MULTIMEDIA PROJECTOR, 4000 min ANSI Lumens', 'unit', '28600.00', 1),
(98, 2, 'NOTEBOOK, STENOGRAPHER, spiral, 40 leaves', 'piece', '10.40', 1),
(99, 2, 'NOTEPAD, STICK-ON, 2X3, 100 sheets per pad', 'pad', '31.20', 1),
(100, 2, 'NOTEPAD, STICK-ON, 3X3, 100 sheets per pad', 'pad', '40.44', 1),
(101, 2, 'NOTEPAD, STICK-ON, 3X4, 100 sheets per pad', 'pad', '54.06', 1),
(102, 2, 'PAD PAPER, RULED', 'pad', '18.26', 1),
(103, 2, 'PAPER CLIP, 32MM, 100 pieces per box or 52 grams (min.) (net of box)', 'box', '6.76', 1),
(104, 2, 'PAPER CLIP, 48MM, 100 pieces per box or 120 grams (min.) (net of box)', 'box', '13.52', 1),
(105, 2, 'PAPER SHREDDER', 'unit', '5699.20', 1),
(106, 2, 'PAPER TRIMMER CUTTING MACHINE', 'unit', '7956.00', 1),
(107, 2, 'PAPER, MULTICOPY, 80gsm, size: 210mm x 297mm (A4)', 'ream', '105.35', 1),
(108, 2, 'PAPER, MULTICOPY, 80gsm, size: 216mm x 330mm (Legal)', 'ream', '132.02', 1),
(109, 2, 'PAPER, MULTI-PURPOSE, 70 gsm., size: 210mm x 297mm (A4)', 'ream', '91.94', 1),
(110, 2, 'PAPER, MULTI-PURPOSE, 70 gsm., size: 216mm x 330mm (Legal)', 'ream', '105.61', 1),
(111, 2, 'PAPER, PARCHMENT, 100 sheets per box', 'box', '86.84', 1),
(112, 2, 'PAPER, THERMAL, 216MM X 30M', 'roll', '27.82', 1),
(113, 2, 'PENCIL SHARPENER, 1 piece in individual plastic case', 'piece', '187.20', 1),
(114, 2, 'PENCIL, LEAD WITH ERASER, 12 dozens per box', 'box', '19.62', 1),
(115, 1, 'PHILIPPINE NATIONAL FLAG', 'piece', '278.72', 1),
(116, 2, 'PRINTER, IMPACT DOT MATRIX, 24 pins, 136 column', 'unit', '18417.17', 1),
(117, 2, 'PRINTER, IMPACT DOT MATRIX, 9 pins, 80 columns', 'unit', '5831.52', 1),
(118, 2, 'PRINTER, LASER, MONOCHROME', 'unit', '1653.60', 1),
(119, 2, 'PUNCHER, paper, heavy duty, with two hole guide, 1 piece in individual box', 'piece', '114.28', 1),
(120, 2, 'RAGS, ALL COTTON, 32 pieces per kilo per bundle', 'bundle', '45.76', 1),
(121, 2, 'RECORD BOOK, 300 PAGES, size: 214mm x 278mm min', 'book', '60.32', 1),
(122, 2, 'RECORD BOOK, 500 PAGES, size: 214mm x 278mm min', 'book', '86.85', 1),
(123, 2, 'RING BINDER, PLASTIC, 32MM, 10 pieces per bundle', 'bundle', '256.87', 1),
(124, 2, 'RUBBER BAND, 70mm min lay flat length (#18)', 'box', '105.85', 1),
(125, 2, 'RULER, PLASTIC, 450MM, 1 piece in individual plastic', 'piece', '13.88', 1),
(126, 2, 'SCISSORS, symmetrical, blade length: 65mm, 1 piece in individual plastic', 'pair', '15.53', 1),
(127, 2, 'SCOURING PAD, 5 pieces per pack', 'pack', '119.60', 1),
(128, 2, 'SIGN PEN, BLACK, liquid/gel ink, 0.5mm needle tip', 'piece', '44.01', 1),
(129, 2, 'SIGN PEN, BLUE, liquid/gel ink, 0.5mm needle tip', 'piece', '44.01', 1),
(130, 2, 'SIGN PEN, RED, liquid/gel ink, 0.5mm needle tip', 'piece', '44.01', 1),
(131, 2, 'STAMP PAD INK, purple or violet, 50ml (min.)', 'bottle', '24.63', 1),
(132, 2, 'STAMP PAD, FELT, bed dimension: 60mm x 100mm', 'piece', '27.66', 1),
(133, 2, 'STAPLE REMOVER, PLIER TYPE', 'piece', '17.68', 1),
(134, 2, 'STAPLE WIRE, HEAVY DUTY, 23/13', 'box', '30.42', 1),
(135, 2, 'STAPLE WIRE, STANDARD', 'box', '18.92', 1),
(136, 2, 'STAPLER, BINDER TYPE', 'unit', '1059.76', 1),
(137, 2, 'STAPLER, STANDARD TYPE, load cap: 200 staples min, 1 piece in individual box', 'piece', '92.23', 1),
(138, 2, 'TAPE DISPENSER, TABLE TOP', 'piece', '47.72', 1),
(139, 2, 'TAPE, ELECTRICAL', 'roll', '18.20', 1),
(140, 2, 'TAPE, MASKING, width: 24mm (?1mm)', 'roll', '55.12', 1),
(141, 2, 'TAPE, MASKING, width: 48mm (?1mm)', 'roll', '105.04', 1),
(142, 2, 'TAPE, PACKAGING, width: 48mm (?1mm)', 'roll', '33.28', 1),
(143, 2, 'TAPE, TRANSPARENT, width: 24mm (?1mm)', 'roll', '17.37', 1),
(144, 2, 'TAPE, TRANSPARENT, width: 48mm (?1mm)', 'roll', '33.28', 1),
(145, 2, 'TOILET TISSUE PAPER 2-plys sheets, 150 pulls, 12 rolls in a pack', 'pack', '75.57', 1),
(146, 2, 'TRASHBAG, plastic, gusseted type, transparent, 10 pcs per roll/pack', 'roll', '139.88', 1),
(147, 2, 'TWINE, PLASTIC', 'roll', '54.08', 1),
(148, 2, 'WASTEBASKET, NON RIGID PLASTIC', 'piece', '23.90', 1),
(149, 2, 'WRAPPING PAPER, 50 sheets per pack', 'pack', '124.78', 1),
(150, 2, 'INK CART, BROTHER LC39BK, Black              ', 'cart', '681.20', 1),
(151, 2, 'INK CART, BROTHER LC39C, Cyan                ', 'cart', '447.20', 1),
(152, 2, 'INK CART, BROTHER LC39M, Magenta        ', 'cart', '447.20', 1),
(153, 2, 'INK CART, BROTHER LC39Y, Yellow             ', 'cart', '447.20', 1),
(154, 2, 'INK CART, BROTHER LC67B, Black                ', 'cart', '910.00', 1),
(155, 2, 'INK CART, BROTHER LC67C, Cyan                ', 'cart', '546.00', 1),
(156, 2, 'INK CART, BROTHER LC67M, Magenta     ', 'cart', '546.00', 1),
(157, 2, 'INK CART, BROTHER LC67Y, Yellow            ', 'cart', '546.00', 1),
(158, 2, 'INK CART, BROTHER LC67HYBK, Black       ', 'cart', '1601.60', 1),
(159, 2, 'INK CART, BROTHER LC67HYC, Cyan           ', 'cart', '868.40', 1),
(160, 2, 'INK CART, BROTHER LC67HYM, Magenta', 'cart', '868.40', 1),
(161, 2, 'INK CART, BROTHER LC67HYY, Yellow        ', 'cart', '868.40', 1),
(162, 2, 'INK CART, CANON PG-810, Black              ', 'cart', '619.84', 1),
(163, 2, 'INK CART, CANON PG-740, Black            ', 'cart', '702.00', 1),
(164, 2, 'INK CART, CANON PGI-725, Black            ', 'cart', '491.92', 1),
(165, 2, 'INK CART, CANON CLI-726, Black              ', 'cart', '464.88', 1),
(166, 2, 'INK CART, CANON CL-811, Colored          ', 'cart', '819.52', 1),
(167, 2, 'INK CART, CANON CL-741, Colored', 'cart', '819.52', 1),
(168, 2, 'INK CART, CANON CLI-726, Cyan              ', 'cart', '535.60', 1),
(169, 2, 'INK CART, CANON CLI-726, Magenta        ', 'cart', '535.60', 1),
(170, 2, 'INK CART, CANON CLI-726, Yellow          ', 'cart', '535.60', 1),
(171, 2, 'INK CART, EPSON C13T038190 (T0 38), Black', 'cart', '491.92', 1),
(172, 2, 'INK CART, EPSON C13T039090 (T0 39), Colored', 'cart', '770.64', 1),
(173, 2, 'INK CART, EPSON C13T103190 (103), Black', 'cart', '866.32', 1),
(174, 2, 'INK CART, EPSON C13T103290 (103), Cyan', 'cart', '577.20', 1),
(175, 2, 'INK CART, EPSON C13T103390 (103), Magenta', 'cart', '577.20', 1),
(176, 2, 'INK CART, EPSON C13T103490 (103), Yellow', 'cart', '577.20', 1),
(177, 2, 'INK CART, EPSON C13T105190(73N)/(91N),Black', 'cart', '426.40', 1),
(178, 2, 'INK CART, EPSON C13T105290(73N)/(91N),Cyan', 'cart', '426.40', 1),
(179, 2, 'INK CART, EPSON C13T105390(73N)/(91N),Magenta', 'cart', '426.40', 1),
(180, 2, 'INK CART, EPSON C13T105490(73N)/(91N),Yellow', 'cart', '426.40', 1),
(181, 2, 'INK CART, EPSON C13T143190 (143), Black', 'cart', '587.60', 1),
(182, 2, 'INK CART, EPSON C13T143290 (143), Cyan', 'cart', '465.92', 1),
(183, 2, 'INK CART, EPSON C13T143390 (143), Magenta', 'cart', '465.92', 1),
(184, 2, 'INK CART, EPSON C13T143490 (143), Yellow', 'cart', '465.92', 1),
(185, 2, 'INK CART, EPSON C13T166190 (166XL), Black', 'cart', '176.80', 1),
(186, 2, 'INK CART, EPSON C13T166290 (166XL), Cyan', 'cart', '332.80', 1),
(187, 2, 'INK CART, EPSON C13T166390 (166XL), Magenta', 'cart', '332.80', 1),
(188, 2, 'INK CART, EPSON C13T166490 (166XL), Yellow', 'cart', '332.80', 1),
(189, 2, 'INK CART, EPSON C13T6664100 (T6641), Black', 'cart', '254.80', 1),
(190, 2, 'INK CART, EPSON C13T664200 (T6642), Cyan', 'cart', '254.80', 1),
(191, 2, 'INK CART, EPSON C13T664300 (T6643), Magenta', 'cart', '254.80', 1),
(192, 2, 'INK CART, EPSON C13T664400 (T6644), Yellow', 'cart', '254.80', 1),
(193, 2, 'INK CART, HP 51645A, (HP45), Black', 'cart', '1310.40', 1),
(194, 2, 'INK CART, HP C1823A, (HP23), Tri-color', 'cart', '1612.00', 1),
(195, 2, 'INK CART, HP C4836A, (HP11), Cyan', 'cart', '1535.04', 1),
(196, 2, 'INK CART, HP C4837A, (HP11), Magenta', 'cart', '1535.04', 1),
(197, 2, 'INK CART, HP C4838A, (HP11), Yellow', 'cart', '1535.04', 1),
(198, 2, 'INK CART, HP C4844A, (HP10), Black', 'cart', '1492.40', 1),
(199, 2, 'INK CART, HP C4906AA, (HP940XL), Black', 'cart', '1523.60', 1),
(200, 2, 'INK CART, HP C4907AA, (HP940XL), Cyan', 'cart', '1029.60', 1),
(201, 2, 'INK CART, HP C4908AA, (HP940XL), Magenta', 'cart', '1029.60', 1),
(202, 2, 'INK CART, HP C4909AA, (HP940XL), Yellow', 'cart', '1029.60', 1),
(203, 2, 'INK CART, HP C4936A, (HP18), Black', 'cart', '891.28', 1),
(204, 2, 'INK CART, HP C4937A, (HP18), Cyan', 'cart', '672.88', 1),
(205, 2, 'INK CART, HP C4938A, (HP18), Magenta', 'cart', '672.88', 1),
(206, 2, 'INK CART, HP C4939A, (HP18), Yellow', 'cart', '672.88', 1),
(207, 2, 'INK CART, HP C6578DA, (HP78), Tri-color', 'cart', '1513.20', 1),
(208, 2, 'INK CART, HP C6615DA, (HP15), Black', 'cart', '1237.60', 1),
(209, 2, 'INK CART, HP C6625AA, (HP17), Tri-color', 'cart', '1346.80', 1),
(210, 2, 'INK CART, HP C6656AA, (HP56), Black', 'cart', '921.44', 1),
(211, 2, 'INK CART, HP C6657AA, (HP57), Tri-color', 'cart', '1466.40', 1),
(212, 2, 'INK CART, HP C8727AA, (HP27), Black', 'cart', '800.80', 1),
(213, 2, 'INK CART, HP C8765WA, (HP94), Black', 'cart', '884.00', 1),
(214, 2, 'INK CART, HP C8766WA, (HP95), Tri-color', 'cart', '1103.44', 1),
(215, 2, 'INK CART, HP C8767WA, (HP96), Black', 'cart', '1357.20', 1),
(216, 2, 'INK CART, HP C9351AA, (HP21), Black', 'cart', '643.76', 1),
(217, 2, 'INK CART, HP C9352AA, (HP22), Tri-color', 'cart', '751.92', 1),
(218, 2, 'INK CART, HP C9361WA, (HP93), Tri-color', 'cart', '1346.80', 1),
(219, 2, 'INK CART, HP C9362WA, (HP92), Black', 'cart', '600.08', 1),
(220, 2, 'INK CART, HP C9363WA, (HP97), Tri-color', 'cart', '1490.32', 1),
(221, 2, 'INK CART, HP C9364WA, (HP98), Black', 'cart', '811.20', 1),
(222, 2, 'INK CART, HP CB314A, (HP900), Black', 'cart', '296.40', 1),
(223, 2, 'INK CART, HP CB315A, (HP900), Tri-color', 'cart', '360.88', 1),
(224, 2, 'INK CART, HP CB335WA, (HP74), Black', 'cart', '678.08', 1),
(225, 2, 'INK CART, HP CB336WA, (HP74XL), Black', 'cart', '1461.20', 1),
(226, 2, 'INK CART, HP CB337WA, (HP75), Tri-color', 'cart', '780.00', 1),
(227, 2, 'INK CART, HP CB338WA, (HP75XL), Tri-color', 'cart', '1544.40', 1),
(228, 2, 'INK CART, HP CC640WA, (HP60),  Black', 'cart', '634.40', 1),
(229, 2, 'INK CART, HP CC641WA, (HP60XL),  Black', 'cart', '1398.80', 1),
(230, 2, 'INK CART, HP CC643WA, (HP60), Tri-color', 'cart', '747.76', 1),
(231, 2, 'INK CART, HP CC644WA, (HP60XL), Tri-color', 'cart', '1627.60', 1),
(232, 2, 'INK CART, HP CC653AA, (HP901), Black', 'cart', '634.40', 1),
(233, 2, 'INK CART, HP CC656AA, (HP901), Tri-color', 'cart', '977.60', 1),
(234, 2, 'INK CART, HP CC660AA, (HP702), Black', 'cart', '1004.64', 1),
(235, 2, 'INK CART, HP CD887AA, (HP703), Black', 'cart', '346.32', 1),
(236, 2, 'INK CART, HP CD888AA, (HP703), Tri-color', 'cart', '346.32', 1),
(237, 2, 'INK CART, HP CD971AA, (HP 920), Black', 'cart', '792.48', 1),
(238, 2, 'INK CART, HP CD972AA, (HP 920XL), Cyan', 'cart', '608.40', 1),
(239, 2, 'INK CART, HP CD973AA, (HP 920XL), Magenta', 'cart', '608.40', 1),
(240, 2, 'INK CART, HP CD974AA, (HP 920XL), Yellow', 'cart', '608.40', 1),
(241, 2, 'INK CART, HP CD975AA, (HP 920XL), Black', 'cart', '1144.00', 1),
(242, 2, 'INK CART, HP CH561WA, (HP61), Black', 'cart', '608.40', 1),
(243, 2, 'INK CART, HP CH562WA, (HP61), Tricolor', 'cart', '752.96', 1),
(244, 2, 'INK CART, HP CN045AA, (HP950XL), Black', 'cart', '1542.32', 1),
(245, 2, 'INK CART, HP CN046AA, (HP951XL), Cyan', 'cart', '1144.00', 1),
(246, 2, 'INK CART, HP CN047AA, (HP951XL), Magenta', 'cart', '1144.00', 1),
(247, 2, 'INK CART, HP CN048AA, (HP951XL). Yellow', 'cart', '1144.00', 1),
(248, 2, 'INK CART, HP CN692AA, (HP704), Black', 'cart', '346.32', 1),
(249, 2, 'INK CART, HP CN693AA, (HP704), Tri-color', 'cart', '346.32', 1),
(250, 2, 'INK CART, HP CZ107AA, (HP678), Black', 'cart', '357.76', 1),
(251, 2, 'INK CART, HP CZ108AA, (HP678), Tricolor', 'cart', '360.88', 1),
(252, 2, 'INK CART, HP CZ121A (HP685A), Black', 'cart', '364.00', 1),
(253, 2, 'INK CART, HP CZ122A (HP685A), Cyan', 'cart', '239.20', 1),
(254, 2, 'INK CART, HP CZ123A (HP685A), Magenta', 'cart', '239.20', 1),
(255, 2, 'INK CART, HP CZ124A (HP685A), Yellow', 'cart', '239.20', 1),
(256, 2, 'INK CART, HP Q8893AA (C8728AA), (HP28), Colored', 'cart', '915.20', 1),
(257, 2, 'INK CART, LEXMARK 10NO217 (#17), Black', 'cart', '1003.60', 1),
(258, 2, 'INK CART, LEXMARK 10NO227 (#27), Colored', 'cart', '1196.00', 1),
(259, 2, 'TONER CART,  BROTHER TN-150BK, Black', 'cart', '3239.60', 1),
(260, 2, 'TONER CART,  BROTHER TN-150C, Cyan', 'cart', '3707.60', 1),
(261, 2, 'TONER CART,  BROTHER TN-150M, Magenta', 'cart', '3707.60', 1),
(262, 2, 'TONER CART,  BROTHER TN-150Y, Yellow', 'cart', '3707.60', 1),
(263, 2, 'TONER CART,  BROTHER TN-155BK, Black', 'cart', '4576.00', 1),
(264, 2, 'TONER CART,  BROTHER TN-2025, Black', 'cart', '2556.32', 1),
(265, 2, 'TONER CART,  BROTHER TN-2130, Black', 'cart', '1820.00', 1),
(266, 2, 'TONER CART,  BROTHER TN-2150, Black', 'cart', '2860.00', 1),
(267, 2, 'TONER CART,  BROTHER TN-3320, Black', 'cart', '3354.00', 1),
(268, 2, 'TONER CART,  BROTHER TN-3350, Black, for HL5450DN (CU Printer)', 'cart', '4971.20', 1),
(269, 2, 'TONER CART, HP C4092A, Black', 'cart', '2741.44', 1),
(270, 2, 'TONER CART, HP C4096A, Black', 'cart', '5352.88', 1),
(271, 2, 'TONER CART, HP C7115A, Black', 'cart', '2971.28', 1),
(272, 2, 'TONER CART, HP CB435A, Black', 'cart', '2719.60', 1),
(273, 2, 'TONER CART, HP CB436A, Black', 'cart', '3062.80', 1),
(274, 2, 'TONER CART, HP CB540A, Black', 'cart', '3266.64', 1),
(275, 2, 'TONER CART, HP CB541A, Cyan', 'cart', '2970.24', 1),
(276, 2, 'TONER CART, HP CB542A, Yellow', 'cart', '2970.24', 1),
(277, 2, 'TONER CART, HP CB543A, Magenta', 'cart', '2970.24', 1),
(278, 2, 'TONER CART, HP CC364A, Black', 'cart', '7321.60', 1),
(279, 2, 'TONER CART, HP CC530A, Black', 'cart', '5163.60', 1),
(280, 2, 'TONER CART, HP CC531A, Cyan', 'cart', '4843.28', 1),
(281, 2, 'TONER CART, HP CC532A, Yellow', 'cart', '4843.28', 1),
(282, 2, 'TONER CART, HP CC533A, Magenta', 'cart', '4843.28', 1),
(283, 2, 'TONER CART, HP CE250A, Black', 'cart', '5408.00', 1),
(284, 2, 'TONER CART, HP CE251A, Cyan', 'cart', '10551.84', 1),
(285, 2, 'TONER CART, HP CE252A, Yellow', 'cart', '10551.84', 1),
(286, 2, 'TONER CART, HP CE253A, Magenta', 'cart', '10551.84', 1),
(287, 2, 'TONER CART, HP CE255A, Black', 'cart', '6355.44', 1),
(288, 2, 'TONER CART, HP CE278A, Black ', 'cart', '3070.08', 1),
(289, 2, 'TONER CART, HP CE285A (HP85A), Black', 'cart', '2707.12', 1),
(290, 2, 'TONER CART, HP CE310A, Black', 'cart', '2317.12', 1),
(291, 2, 'TONER CART, HP CE311A, Cyan', 'cart', '2475.20', 1),
(292, 2, 'TONER CART, HP CE312A, Yellow', 'cart', '2475.20', 1),
(293, 2, 'TONER CART, HP CE313A, Magenta', 'cart', '2475.20', 1),
(294, 2, 'TONER CART, HP CE320A, Black', 'cart', '3057.60', 1),
(295, 2, 'TONER CART, HP CE321A, Cyan', 'cart', '2943.20', 1),
(296, 2, 'TONER CART, HP CE322A, Yellow', 'cart', '2943.20', 1),
(297, 2, 'TONER CART, HP CE323A, Magenta', 'cart', '2943.20', 1),
(298, 2, 'TONER CART, HP CE390A, Black', 'cart', '7280.00', 1),
(299, 2, 'TONER CART, HP CE400A, Black', 'cart', '6595.68', 1),
(300, 2, 'TONER CART, HP CE401A, Cyan', 'cart', '9655.36', 1),
(301, 2, 'TONER CART, HP CE402A, Yellow', 'cart', '9655.36', 1),
(302, 2, 'TONER CART, HP CE403A, Magenta', 'cart', '9655.36', 1),
(303, 2, 'TONER CART, HP CE410A, (HP305), Black', 'cart', '3640.00', 1),
(304, 2, 'TONER CART, HP CE411A, (HP305), Cyan', 'cart', '5392.40', 1),
(305, 2, 'TONER CART, HP CE412A, (HP305), Yellow', 'cart', '5392.40', 1),
(306, 2, 'TONER CART, HP CE413A, (HP305), Magenta', 'cart', '5392.40', 1),
(307, 2, 'TONER CART, HP CE505A, Black', 'cart', '3660.80', 1),
(308, 2, 'TONER CART, HP CE505X, Black, high cap', 'cart', '6721.52', 1),
(309, 2, 'TONER CART, HP Q1338A, Black', 'cart', '6676.80', 1),
(310, 2, 'TONER CART, HP Q2612A, Black', 'cart', '2971.28', 1),
(311, 2, 'TONER CART, HP Q2613A, Black', 'cart', '3328.00', 1),
(312, 2, 'TONER CART, HP Q5942A, Black', 'cart', '7280.00', 1),
(313, 2, 'TONER CART, HP Q5949A, Black', 'cart', '3530.80', 1),
(314, 2, 'TONER CART, HP Q5950A, Black', 'cart', '7644.00', 1),
(315, 2, 'TONER CART, HP Q5951A, Cyan', 'cart', '10845.12', 1),
(316, 2, 'TONER CART, HP Q5952A, Yellow', 'cart', '10845.12', 1),
(317, 2, 'TONER CART, HP Q5953A, Magenta', 'cart', '10845.12', 1),
(318, 2, 'TONER CART, HP Q6000A, Black', 'cart', '3317.60', 1),
(319, 2, 'TONER CART, HP Q6001A, Cyan', 'cart', '3614.00', 1),
(320, 2, 'TONER CART, HP Q6002A, Yellow', 'cart', '3614.00', 1),
(321, 2, 'TONER CART, HP Q6003A, Magenta', 'cart', '3614.00', 1),
(322, 2, 'TONER CART, HP Q6470A, Black', 'cart', '5526.56', 1),
(323, 2, 'TONER CART, HP Q6471A, Cyan', 'cart', '5495.36', 1),
(324, 2, 'TONER CART, HP Q6472A, Yellow', 'cart', '5844.80', 1),
(325, 2, 'TONER CART, HP Q6473A, Magenta', 'cart', '5844.80', 1),
(326, 2, 'TONER CART, HP Q6511A, Black', 'cart', '5892.64', 1),
(327, 2, 'TONER CART, HP Q7551A, Black', 'cart', '6162.00', 1),
(328, 2, 'TONER CART, HP Q7553A, Black', 'cart', '3763.76', 1),
(329, 2, 'TONER CART, LEXMARK 34217HR, Black', 'cart', '4712.24', 1),
(330, 2, 'TONER CART, LEXMARK E360H11P, Black', 'cart', '8874.32', 1),
(331, 2, 'TONER CART, LEXMARK T650A11P, Black', 'cart', '9630.40', 1),
(332, 2, 'TONER CART, SAMSUNG ML-2250D5, Black', 'cart', '4784.00', 1),
(333, 2, 'TONER CART, SAMSUNG ML-D2850B, Black', 'cart', '4836.00', 1),
(334, 2, 'TONER CART, SAMSUNG ML-D3050B, Black', 'cart', '6656.00', 1),
(335, 2, 'TONER CART, SAMSUNG MLT-D101S, Black', 'cart', '2600.00', 1),
(336, 2, 'TONER CART, SAMSUNG MLT-D103L, Black', 'cart', '2912.00', 1),
(337, 2, 'TONER CART, SAMSUNG MLT-D103S, Black', 'cart', '2912.00', 1),
(338, 2, 'TONER CART, SAMSUNG MLT-D104S, Black', 'cart', '2548.00', 1),
(339, 2, 'TONER CART, SAMSUNG MLT-D105L, Black', 'cart', '2860.00', 1),
(340, 2, 'TONER CART, SAMSUNG MLT-D108S, Black', 'cart', '2600.00', 1),
(341, 2, 'TONER CART, SAMSUNG MLT-D119S(ML-2010D3), Black', 'cart', '3120.00', 1),
(342, 2, 'TONER CART, SAMSUNG MLT-D203E, Black', 'cart', '7280.00', 1),
(343, 2, 'TONER CART, SAMSUNG MLT-D203L, Black', 'cart', '5512.00', 1),
(344, 2, 'TONER CART, SAMSUNG MLT-D203U, black', 'cart', '9464.00', 1),
(345, 2, 'TONER CART, SAMSUNG MLT-D205E, Black', 'cart', '8632.00', 1),
(346, 2, 'TONER CART, SAMSUNG MLT-D205L, Black', 'cart', '4784.00', 1),
(347, 2, 'TONER CART, SAMSUNG SCX-D6555A, Black', 'cart', '4212.00', 1),
(348, 2, 'TONER CART, FUJI XEROX CWAA0762, Black', 'cart', '5683.60', 1),
(349, 2, 'RIBBON CART, EPSON C13S015516 (#8750), Black, for LX-300', 'cart', '76.75', 1),
(350, 2, 'RIBBON CART, EPSON C13S015531 (S015086), Black', 'cart', '724.88', 1),
(351, 2, 'RIBBON CART, EPSON C13S015584 (S015327), Black', 'cart', '334.88', 1),
(352, 2, 'RIBBON CART, EPSON C13S015632, Black, for    LX-310', 'cart', '75.92', 1),
(353, 2, 'RIBBON CART, LEXMARK 3070169 (11A3550)', 'cart', '780.00', 1),
(354, 2, 'RIBBON CART., FUJITSU DL 3850', 'cart', '447.20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `office`, `status`) VALUES
(1, 'Office of the President', 1),
(2, 'Executive Secretary', 1),
(3, 'BAC - Bids and Awards Committee', 1),
(4, 'Building Administrator', 1),
(5, 'Board Secretary', 1),
(6, 'Internal Control', 1),
(7, 'Infrastructure', 1),
(8, 'Linkages and External Affairs', 1),
(9, 'Quality Assurance', 1),
(10, 'Printing and Publication', 1),
(11, 'Public Affairs', 1),
(12, 'Office of the Vice President for Academic Affairs', 1),
(13, 'Academic Programs', 1),
(14, 'Accreditation', 1),
(15, 'Admissions', 1),
(16, 'Campus Ministry', 1),
(17, 'Guidance', 1),
(18, 'Library', 1),
(19, 'Registrar', 1),
(20, 'Student Affairs', 1),
(21, 'Graduate Programs', 1),
(22, 'ETEEAP - Expanded Tertiary Education and Equivalency Program', 1),
(23, 'IRJP - Industrial Relations and Job Placement', 1),
(24, 'Office of the Vice President for Planning, Development and Information System', 1),
(25, 'Planning and Development', 1),
(26, 'UITC - University Information Technology Center', 1),
(27, 'UITC - Application Development / ERS', 1),
(28, 'UITC - Management Info System', 1),
(29, 'UITC - Web', 1),
(30, 'UITC - Telephone and Network', 1),
(31, 'IRTC - Office of the Director', 1),
(32, 'IRTC - Audio Visual', 1),
(33, 'IRTC - Civil', 1),
(34, 'IRTC - Computer', 1),
(35, 'IRTC - Electrical', 1),
(36, 'IRTC - Mechanical', 1),
(37, 'IRTC - Conference Hall', 1),
(38, 'CIE - Office of the Dean', 1),
(39, 'CIE - Student Teaching', 1),
(40, 'CIE - Technical Arts', 1),
(41, 'CIE - Home Economics', 1),
(42, 'CIE - Professional Industrial Education', 1),
(43, 'CLA - Office of the Dean', 1),
(44, 'CLA - English', 1),
(45, 'CLA - Filipino', 1),
(46, 'CLA - Social Science', 1),
(47, 'CLA - Physical Education', 1),
(48, 'COE - Office of the Dean', 1),
(49, 'COE - Civil', 1),
(50, 'COE - Electrical', 1),
(51, 'COE - Mechanical', 1),
(52, 'COS - Office of the Dean', 1),
(53, 'COS - Chemistry', 1),
(54, 'COS - Mathematics', 1),
(55, 'COS - Physics', 1),
(56, 'CAFA - Office of the Dean', 1),
(57, 'CAFA - Architecture', 1),
(58, 'CAFA - Fine Arts', 1),
(59, 'CAFA - Graphics', 1),
(60, 'CIT - Office of the Dean', 1),
(61, 'CIT - Basic Industrial Technology', 1),
(62, 'CIT - Civil Engineering Technology', 1),
(63, 'CIT - Electrical Engineering Technology', 1),
(64, 'CIT - Electronics Engineering Technology', 1),
(65, 'CIT - Food and Apparel Technology', 1),
(66, 'CIT - Graphic Arts and Printing Technology', 1),
(67, 'CIT - Mechanical Engineering Technology', 1),
(68, 'CIT - Power Plant Engineering Technology', 1),
(69, 'University Student Government', 1),
(70, 'Philippine Artisan', 1),
(71, 'Office of the Vice President for Research and Extension', 1),
(72, 'URDS - Research and Development', 1),
(73, 'UES - Extension Services', 1),
(74, 'ITSO - Innovation and Technology Support', 1),
(75, 'Office of the Vice President for Admin and Finance', 1),
(76, 'Clinic', 1),
(77, 'Human Resource', 1),
(78, 'Management', 1),
(79, 'Motorpool', 1),
(80, 'Procurement', 1),
(81, 'Records', 1),
(82, 'Resource Generation', 1),
(83, 'Security', 1),
(84, 'Security (Admin Lobby)', 1),
(85, 'Supply', 1),
(86, 'Accounting', 1),
(87, 'Budget', 1),
(88, 'Cashier', 1),
(89, 'Maintenance', 1),
(90, 'Guest House', 1),
(91, 'Hostel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_submitted` date NOT NULL,
  `approval_status` int(11) NOT NULL,
  `reason_for_rejection` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `approval_status` (`approval_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `user_id`, `title`, `date_submitted`, `approval_status`, `reason_for_rejection`) VALUES
(1, 86, 'Hello', '2016-03-09', 86, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE IF NOT EXISTS `project_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` int(11) DEFAULT NULL,
  `price` decimal(11,2) NOT NULL,
  `jan` int(11) NOT NULL,
  `feb` int(11) NOT NULL,
  `mar` int(11) NOT NULL,
  `apr` int(11) NOT NULL,
  `may` int(11) NOT NULL,
  `jun` int(11) NOT NULL,
  `jul` int(11) NOT NULL,
  `aug` int(11) NOT NULL,
  `sep` int(11) NOT NULL,
  `oct` int(11) NOT NULL,
  `nov` int(11) NOT NULL,
  `dec` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `project_id`, `category_id`, `description`, `quantity`, `unit`, `price`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
(1, 1, 2, 'BINDING AND PUNCHING MACHINE', 2, 0, '10398.96', 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category_id`, `subcategory`, `status`) VALUES
(1, 2, 'Equipment', 1),
(2, 2, 'Supplies and Materials', 1),
(3, 3, 'Stipend', 1),
(4, 3, 'Transportation', 1),
(5, 3, 'Food', 1),
(6, 3, 'Accomodation', 1),
(7, 3, 'Supplies and Materials', 1),
(8, 3, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reports_to` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `office_id`, `name`, `position`, `password`, `reports_to`, `status`) VALUES
(1, 1, 'Adora S. Pili', 'President', '12345', 0, 1),
(2, 2, 'Cira Felberbaum', 'Executive Secretary', '12345', 12, 1),
(3, 3, 'Janee Ricci', 'BAC - Chairman', '12345', 12, 1),
(4, 3, 'Jena Robey', 'BAC - Secretary', '12345', 3, 1),
(5, 4, 'Xenia Feller', 'Building Administrator - Chairman', '12345', 12, 1),
(6, 4, 'Krissy Dutton', 'Building Administrator - Secretary', '12345', 5, 1),
(7, 5, 'Lloyd Reinhard', 'Board Chairman', '12345', 12, 1),
(8, 5, 'Gigi Ingenito', 'Board Secretary', '12345', 7, 1),
(9, 6, 'Ginger Soriano', 'Internal Control - Chairman', '12345', 12, 1),
(10, 6, 'Marine Maxey', 'Internal Control - Secretary', '12345', 9, 1),
(11, 7, 'Marcelo Blust', 'Infrastructure - Chairman', '12345', 12, 1),
(12, 87, 'Shalon Challis', 'Budget Officer', '12345', 1, 1),
(13, 7, 'Sook Stough', 'Infrastructure - Secretary', '12345', 11, 1),
(14, 8, 'Melita Meza', 'Linkages and External Affairs - Chairman', '12345', 12, 1),
(15, 8, 'Maxine Kelton', 'Linkages and External Affairs - Secretary', '12345', 14, 1),
(16, 9, 'Ollie Harder', 'Quality Assurance - Chairman', '12345', 12, 1),
(17, 9, 'Vania Casella', 'Quality Assurance - Secretary', '12345', 16, 1),
(18, 10, 'Marie Walzer', 'Printing and Publication - Chairman', '12345', 12, 1),
(19, 10, 'Kendal Laurin', 'Printing and Publication - Secretary', '12345', 18, 1),
(20, 11, 'Darnell Maisonet', 'Public Affairs - Chairman', '12345', 12, 1),
(21, 11, 'Tobias Hamlet', 'Public Affairs - Secretary', '12345', 20, 1),
(22, 12, 'Forrest Corkery', 'VPAA', '12345', 12, 1),
(23, 12, 'Sumiko Raper', 'VPAA Secretary', '12345', 22, 1),
(24, 13, 'Ida Stennett', 'Academic Programs - Chairman', '12345', 22, 1),
(25, 13, 'Eulah Wu', 'Academic Programs - Secretary', '12345', 24, 1),
(26, 14, 'Sydney Noren', 'Accrediation - Head', '12345', 22, 1),
(27, 14, 'Jessenia Sitton', 'Accrediation - Secretary', '12345', 26, 1),
(28, 15, 'Cole Fanelli', 'Admissions - Head', '12345', 22, 1),
(29, 15, 'Yelena Mcgovern', 'Admissions - Secretary', '12345', 28, 1),
(30, 16, 'Madelene Cassel', 'Campus Ministry - Head', '12345', 22, 1),
(31, 16, 'Barbar Stillman', 'Campus Ministry - Secretary', '12345', 30, 1),
(32, 17, 'Sandee Healy', 'Guidance - Head', '12345', 22, 1),
(33, 17, 'Domitila Lambeth', 'Guidance - Secretary', '12345', 32, 1),
(34, 18, 'Jodi Bridger', 'Library Head', '12345', 22, 1),
(35, 18, 'Hoyt Tullier', 'Library Secretary', '12345', 34, 1),
(36, 19, 'Zaida Dekker', 'Registrar - Head', '12345', 22, 1),
(37, 19, 'Iesha Kneip', 'Registrar - Secretary', '12345', 36, 1),
(38, 20, 'Len Raby', 'Student Affairs - Head', '12345', 22, 1),
(39, 20, 'Sterling Dominique', 'Student Affairs - Secretatry', '12345', 38, 1),
(40, 21, 'Barbera Sobus', 'Graduate Programs - Head', '12345', 22, 1),
(41, 21, 'Fleta Rabago', 'Graduate Programs - Secretary', '12345', 40, 1),
(42, 22, 'Mark Parra', 'ETEEAP - Chairman', '12345', 22, 1),
(43, 22, 'Chanell Litwin', 'ETEEAP - Secretary', '12345', 42, 1),
(44, 23, 'Ozie Desper', 'IRJP Director', '12345', 22, 1),
(45, 23, 'Norah Pyles', 'IRJP Secretary', '12345', 44, 1),
(46, 24, 'Broderick Calvin', 'VPDD', '12345', 12, 1),
(47, 24, 'Cher Ashworth', 'VPDD Secretary', '12345', 46, 1),
(48, 25, 'Sharice Vickery', 'Planning and Development - Head', '12345', 46, 1),
(49, 25, 'Jinny Unger', 'Planning and Development - Secretary', '12345', 48, 1),
(50, 26, 'Georgann Capetillo', 'UITC - Chairman', '12345', 46, 1),
(51, 26, 'Katheleen Cotnoir', 'UITC - Secretary', '12345', 50, 1),
(52, 27, 'Shira Arndt', 'UITC - ERS Head', '12345', 50, 1),
(53, 28, 'Eleanor Lembke', 'UITC - MIS Head', '12345', 50, 1),
(54, 29, 'Robena Frankum', 'UITC - Web Head', '12345', 50, 1),
(55, 30, 'Era Southwell', 'UITC - Telephone and Network Head', '12345', 50, 1),
(56, 31, 'Charmaine Grable', 'IRTC Head', '12345', 22, 1),
(57, 31, 'Bell Burtner', 'IRTC Secretary', '12345', 56, 1),
(58, 32, 'Cassandra Riker', 'IRTC - Audio Visual Head', '12345', 56, 1),
(59, 33, 'Wallace Dorrell', 'IRTC - Civil Head', '12345', 56, 1),
(60, 34, 'Asuncion Luper', 'IRTC - Computer Head', '12345', 56, 1),
(61, 35, 'Claudine Bavaro', 'IRTC - Electrical Head', '12345', 56, 1),
(62, 36, 'Eugena Silsby', 'IRTC - Mechanical Head', '12345', 56, 1),
(63, 37, 'Cherish Tritt', 'IRTC - Conference Hall Head', '12345', 56, 1),
(64, 38, 'Neta Feist', 'CIE - Dean', '12345', 22, 1),
(65, 38, 'Linda Razo', 'CIE - Secretary', '12345', 64, 1),
(66, 39, 'Janeth Goetsch', 'CIE - Student Teaching Head', '12345', 64, 1),
(67, 40, 'Ashlyn Mcminn', 'CIE - Technical Arts Head', '12345', 64, 1),
(68, 41, 'Burma Rowell', 'CIE - Home Economics Head', '12345', 64, 1),
(69, 42, 'Clint Tracey', 'CIE - Professional IE Head', '12345', 64, 1),
(70, 43, 'Pok Jarret', 'CLA - Dean', '12345', 22, 1),
(71, 43, 'Ivonne Roberto', 'CLA - Secretary', '12345', 70, 1),
(72, 44, 'Agnus Osbourn', 'CLA - English Head', '', 70, 1),
(73, 45, 'Yun Bombard', 'CLA - Filipino Head', '12345', 70, 1),
(74, 46, 'Susana Haygood', 'CLA - Social Science Head', '12345', 70, 1),
(75, 47, 'Savannah Jenny', 'CLA - PE Head', '12345', 70, 1),
(76, 48, 'Tracie Sundstrom', 'COE - Dean', '12345', 22, 1),
(77, 48, 'Darcel Flick', 'COE - Secretary', '12345', 76, 1),
(78, 49, 'Dixie Phillip', 'COE - Civil Head', '12345', 76, 1),
(79, 50, 'Mirtha Setliff', 'COE - Electrical Head', '12345', 76, 1),
(80, 51, 'Aracely Nino', 'COE - Mechanical Head', '12345', 76, 1),
(81, 52, 'Donette Alls', 'COS - Dean', '12345', 22, 1),
(82, 52, 'Eldridge Brett', 'COS - Secretary', '12345', 81, 1),
(83, 53, 'Ronna Meaney', 'COS - Chemistry Head', '12345', 81, 1),
(84, 54, 'Hildegarde Leyden', 'COS - Math Head', '12345', 81, 1),
(85, 55, 'Shaunte Cork', 'COS - Physics Head', '12345', 81, 1),
(86, 56, 'Janice Stack', 'CAFA - Dean', '12345', 22, 1),
(87, 56, 'Simona Gilpatrick', 'CAFA - Secretary', '12345', 86, 1),
(88, 57, 'Reina Lahey', 'CAFA - Architecture Head', '12345', 86, 1),
(89, 58, 'Celine Surles', 'CAFA - Fine Arts Head', '12345', 86, 1),
(90, 59, 'Anneliese Woods', 'CAFA - Graphics Head', '12345', 86, 1),
(91, 60, 'Kenny Goodwin', 'CIT - Dean', '12345', 22, 1),
(92, 60, 'Melody Canter', 'CIT - Secretary', '12345', 91, 1),
(93, 61, 'Delsie Strum', 'CIT - BIT Head', '12345', 91, 1),
(94, 62, 'Deidre Fickes', 'CIT - CET Head', '12345', 91, 1),
(95, 63, 'Jenine Mallery', 'CIT - EET Head', '12345', 91, 1),
(96, 64, 'Hannah Carman', 'CIT - ECET Head', '12345', 91, 1),
(97, 65, 'Vida Bonin', 'CIT - FAT Head', '12345', 91, 1),
(98, 66, 'Alisa Sea', 'CIT - GAPT Head', '12345', 91, 1),
(99, 67, 'Shani Ebel', 'CIT - MET Head', '12345', 91, 1),
(100, 68, 'Mariano Talbot', 'CIT - PPET Head', '12345', 91, 1),
(101, 69, 'Carlita Eggleton', 'USG President', '12345', 22, 1),
(102, 70, 'Serina Huggett', 'Philippine Artisan EIC', '12345', 22, 1),
(103, 71, 'Helena Desmarais', 'VPRE', '12345', 12, 1),
(104, 71, 'Mirta Clayton', 'VPRE - Secretary', '12345', 103, 1),
(105, 72, 'Dorine Hamiton', 'URDS Head', '12345', 103, 1),
(106, 73, 'Irving Lemmond', 'UES Head', '12345', 103, 1),
(107, 74, 'Rose Dively', 'ITSO Head', '12345', 103, 1),
(108, 75, 'German Zavala', 'VPAF', '12345', 12, 1),
(109, 75, 'Farah Fewell', 'VPAF - Secretary', '12345', 108, 1),
(110, 76, 'Ellis Donelson', 'Clinic Head', '12345', 108, 1),
(111, 77, 'Dorinda Gariepy', 'Human Resource Head', '12345', 108, 1),
(112, 78, 'Amado Rudisill', 'Management Hea', '12345', 108, 1),
(113, 79, 'Ida Hankins', 'Motorpool Head', '12345', 108, 1),
(114, 80, 'Neville Ben', 'Procurement Head', '12345', 108, 1),
(115, 81, 'Mose Kubik', 'Records Head', '12345', 108, 1),
(116, 82, 'Oralee Cambra', 'Resource Generation Head', '12345', 108, 1),
(117, 83, 'Doreatha Beebe', 'Security Head', '12345', 108, 1),
(118, 84, 'Eli Wehling', 'Admin Security Head', '12345', 108, 1),
(119, 85, 'Rosalyn Turman', 'Supply Head', '12345', 108, 1),
(120, 86, 'Noreen Faucett', 'Accounting Head', '12345', 108, 1),
(121, 87, 'Sharell Smolen', 'Budget Head', '12345', 108, 1),
(122, 88, 'Adrien Yoder', 'Cashier Head', '12345', 108, 1),
(123, 89, 'Sharlene Leasure', 'Maintenance Head', '12345', 108, 1),
(124, 90, 'Marlo Pakele', 'Guest House Head', '12345', 108, 1),
(125, 91, 'Siu Gazda', 'Hostel Head', '12345', 108, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`approval_status`) REFERENCES `user` (`id`);

--
-- Constraints for table `project_details`
--
ALTER TABLE `project_details`
  ADD CONSTRAINT `project_details_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`),
  ADD CONSTRAINT `project_details_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

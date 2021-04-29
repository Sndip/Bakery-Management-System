-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 10:02 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `average`
--

CREATE TABLE `average` (
  `id` int(11) NOT NULL,
  `room` varchar(50) NOT NULL,
  `average` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `average`
--

INSERT INTO `average` (`id`, `room`, `average`) VALUES
(708, '16', '1'),
(709, '16', '2.5');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `bed_id` int(11) NOT NULL,
  `number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`bed_id`, `number`) VALUES
(2, 'Double'),
(4, 'Quad'),
(1, 'Single'),
(3, 'Triple');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Cake'),
(2, 'Ice Cream');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `card_type` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `security_code` varchar(100) NOT NULL,
  `salt` varchar(300) DEFAULT NULL,
  `expire_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `rank_id` int(11) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`rank_id`, `room_type`, `detail`) VALUES
(1, 'Single', 'Sed nec mi vitae enim rhoncus feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse commodo faucibus neque, varius accumsan ex. Curabitur pretium mi in tellus cursus dictum. Phasellus tristique erat sed tortor lacinia finibus. Praesent nec enim sed dui convallis convallis non eu justo. Curabitur eget libero ante. Ut ac eros nisl. Curabitur aliquet diam vitae laoreet tincidunt. '),
(2, 'Double', 'Sed viverra dapibus ex eget aliquet. Fusce ullamcorper gravida purus, euismod congue lorem auctor sed. Donec molestie erat eu ipsum placerat lobortis et quis nunc. Praesent vel nunc eu arcu suscipit euismod. Nulla mattis arcu in eros volutpat tincidunt. Nulla vulputate turpis eu lorem auctor, vel elementum tortor commodo. Morbi scelerisque dui quis mauris rutrum lobortis. Duis vel erat id nibh maximus posuere. '),
(3, 'Standard', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia, ante et molestie scelerisque, nibh justo pellentesque enim, ac venenatis mi orci malesuada arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed bibendum magna aliquet nisi iaculis semper. Donec aliquet, diam at pharetra interdum, ante tortor condimentum velit, at vehicula sapien nunc in nunc. Ut non dolor congue, tempus quam in, porta leo.'),
(4, 'Deulex', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lacinia, ante et molestie scelerisque, nibh justo pellentesque enim, ac venenatis mi orci malesuada arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed bibendum magna aliquet nisi iaculis semper. Donec aliquet, diam at pharetra interdum, ante tortor condimentum velit, at vehicula sapien nunc in nunc. Ut non dolor congue, tempus quam in, porta leo.');

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `id` int(11) NOT NULL,
  `average` varchar(100) NOT NULL,
  `room` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`id`, `average`, `room`) VALUES
(81, '2.75', '11'),
(82, '3', '13'),
(83, '2.75', '14'),
(84, '3.25', '15'),
(85, '2.5', '16');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `name`, `email`, `address`, `message`) VALUES
(5, 'Maria Atkinson', 'kjhsddkjfg@kjdhkj', ' Baltimore Ave, Hot Springs, USA', 'I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.'),
(6, 'Brad Pitt', 'gfghfd@fghgbj', ' Baltimore Ave, Hot Springs,USA', 'I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.'),
(7, 'Jessica Doe', 'cxgdf@fghghjhn', ' Baltimore Ave, Hot Springs, USA', 'I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with vapour around me.'),
(8, 'sdfgdf', 'asdf@sg', 'sdfg', 'sdfgdfgfffd'),
(9, 'fh', 'iugtjhg@gffvghn', 'vbnvmnb', 'zfchgf hjnvb'),
(10, 'dfgfh', 'ffdhfhjg@fvb', 'dfjhhgjk', 'sdgfdhgjmhmk'),
(11, 'fdhggfjg', 'trfuyt@fhggf', 'fghjmvn', 'fghvghnbjbn v'),
(12, 'hvbjgvhjmk', 'edgfvth@vbnv', 'cvbnvcbnvb', 'xcfbchbccbtfctgh'),
(13, 'jhgj', 'ffdgfh@hgj', 'fdghfhg', 'gfhjhkmjh,lkhj'),
(14, 'jhgkdj', 'ljdbh@jhbkj', 'jhgkhjgbgkh', 'jbckjdhvj'),
(15, 'hgrjgh', 'jtdj@UTED', 'dhj', 'DJSHFLDJKH'),
(16, 'ldkjfl', 'dkjshf@jsbv', 'jhgbkjh', 'hjgkjhbfjkhgb'),
(17, 'dhssgk', 'kjhgdf@dkg', 'kghdkjfh', 'hjgsdkjgf'),
(18, 'lfjdhlj', 'jkhgkhg@kjg', 'hgkhgk', 'urygoufegouerh'),
(19, 'hsdgfshj', 'dgjkdfg@hjgd', 'jhgkf', 'jhdgfkgjh'),
(20, 'dfdg', 'dfg@fgh', 'ghngjmngb', 'gnhgnhj'),
(21, 'dgfdhgf', 'gfhg@bv', 'nbvngfhjhh', 'fghfghhdf'),
(22, 'dfdgf', 'dfgf@fgh', 'dhfdghfghfd', 'gfhdfghthtdf'),
(23, 'fbhvn', 'gfhfg@bv', 'vcbvcn', 'xcvbvcnbbm'),
(24, 'fgfghfdhg', 'ghjh@fbh', 'nhgjm', 'gnghbjmhbm'),
(25, 'fhhgfhg', 'hgjhg@fbhvgn', 'bnbvjhnbm', 'fcnhbvmn,'),
(26, 'gfhgfj', 'fgjhfg@fghgfjh', 'hgjkhgkhkg', 'fghfgjhfgyjjhfj'),
(27, 'dgfdhgfjhg', 'ghjhgkghjgjkh@gfjh', 'gfhjghjk', 'fgjhfdgjhfgh'),
(28, 'fgjhhhhgjkh', 'hjkgjg@dgfdgh', 'hgjkghjk', 'xvdfhgfjhk'),
(29, 'dfgdgdujhgjhg', 'fghkjhgkhjhj@fdghf', 'ghjkghg', 'fdhfghgfjghjghfgjhfjfdd'),
(30, 'dghjhf', 'dfg@fdgsdf', 'hdfhdfhg', 'fdghdfwsddsrgh'),
(31, 'hfgjhgjhfg', 'fgjhfg@fhfgh', 'gfjhh', 'dfghfds sdfgs s ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `paswd` varchar(125) NOT NULL,
  `salt` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `paswd`, `salt`) VALUES
(1, 'sandip', 'f1256898ae2cb6470ad76b8d0cc3e26420b3a4bb', '5b2d3b3310783'),
(2, 'ask', 'b8da1053c495ffedf17f2bf095f450f9d762b99a', '5b32eab3de994'),
(3, 'sdf', '7a198952a751349811a9b823e1ccc1334235e052', '5b32fb4d8156e'),
(4, 'asd', '83d1491ef9a199669685a7a9e015939923b3e54a', '5b42e8229de6e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `prdct` varchar(100) DEFAULT NULL,
  `cat_name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `dbo` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `prdct`, `cat_name`, `price`, `dbo`, `address`, `phone_no`, `user`) VALUES
(2, 'asdas', 'Cake', '3455', '2018-08-25', 'dfgfdhg', '1213123', ''),
(3, 'asdas', 'Cake', '3455', '2018-08-14', 'fdsgdfgh', '12345345', 'sad'),
(4, 'asdas', 'Cake', '3455', '2018-08-14', 'dfgdgh', '235435', 'sad'),
(5, 'asdas', 'Cake', '3455', '2018-08-13', 'dfgfhgf', '214234', 'sad'),
(6, 'asdas', 'Cake', '3455', '2018-08-25', 'gdfghf', '345435', 'sad'),
(7, '234', 'Ice Cream', '', '2018-08-22', 'fdghfhf', '56546', 'and'),
(8, 'asdas', 'Cake', '3455', '2018-08-08', 'dfgfdhg', 'd234234', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `cat_name` varchar(100) DEFAULT NULL,
  `disc` text,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `picture`, `cat_name`, `disc`, `price`) VALUES
(1, 'asdas', 'food2.jpg', 'Cake', 'fdgfhdhgdfghfdg', '3455'),
(3, '234', 'food7.jpg', 'Ice Cream', 'dfgfjhgjmhghdffhd', ''),
(4, 'ertrgf', 'food.jpg', 'Ice Cream', 'ertrhfghe wregyf', '345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rate_id` int(11) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `room` int(11) NOT NULL,
  `average` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rate_id`, `rate`, `room`, `average`) VALUES
(1, '3.5', 13, '0'),
(2, '3.5', 13, '0'),
(3, '2.5', 13, '0'),
(4, '2', 13, '0'),
(5, '3.5', 13, '0'),
(6, '3', 13, '3'),
(7, '3', 11, ''),
(9, '2.5', 11, '3'),
(10, '2.5', 11, '2.75'),
(11, '2.5', 16, '1'),
(12, '3.5', 16, '2.5'),
(14, '2.5', 14, '3'),
(15, '3', 14, '2.75'),
(17, '4', 15, '2.5'),
(18, '3.5', 15, '3.25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `bed_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `price`, `type`, `picture`, `bed_no`) VALUES
(11, '243', 'Standard', 'g6.jpg', 'Double'),
(13, '345', 'Deulex', 'g2.jpg', 'Triple'),
(14, '678', 'Double', 'g6.jpg', 'Double'),
(15, '213', 'Single', 'g8.jpg', 'Double'),
(16, '243', 'Double', 'rooms_bg.jpg', 'Quad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_book`
--

CREATE TABLE `tbl_room_book` (
  `booking_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `meal` varchar(15) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `adult` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `airline` varchar(100) DEFAULT NULL,
  `flight_no` varchar(100) DEFAULT NULL,
  `airport_pickup` varchar(10) NOT NULL DEFAULT '0',
  `room_id` int(11) DEFAULT NULL,
  `arrival_time` varchar(12) NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_book`
--

INSERT INTO `tbl_room_book` (`booking_id`, `fname`, `lname`, `email`, `address`, `nationality`, `city`, `state`, `zipcode`, `meal`, `phone_no`, `check_in`, `check_out`, `adult`, `children`, `airline`, `flight_no`, `airport_pickup`, `room_id`, `arrival_time`, `status`) VALUES
(1, 'fhvdljkh', 'ljhgljkug', 'lhgkghj@jgkjh', 'kfgkjgkuh', 'kjgkyg', 'kjhgkuyg', 'kjhgkhguh', 'hgfhfk', 'breakfast', 'jkgkj', '2018-07-08 00:00:00', '2018-07-18 00:00:00', 1, 2, 'gugkj', 'uykguyk', 'y', 14, '0000-00-00 0', 1),
(3, 'dgfdhgf', 'ghjghjmh', 'dfgd@cvbgvhn', 'dfbgfgngh', 'fhgfvn', 'fgcxfbfd', 'fdhfgvn', '2432cxvcv', 'dinner', '12324', '2018-07-17 00:00:00', '2018-07-23 00:00:00', 3, 2, 'dfgfhd', 'dfgh343', 'yes', 13, '11 pm', 1),
(4, 'ggfghfg', 'fghfh', 'fdghd@fhgf', 'gfjhgj', 'ghjhgjhg', 'ghjghj', 'gfhgjhj', 'fgjh65', 'breakfast', 'fhjjhg', '2018-07-09 00:00:00', '2018-07-19 00:00:00', 3, 2, 'gfhjfjfgh', 'fghjgjh', 'yes', 11, 'ghjfhf', 1),
(6, 'sadsdfdg', 'fghgfhg', 'gfh@hfg', 'dgfdhg', 'gfhd', 'hgfnhfgj', 'nhgfjhfgh', '24325', 'breakfast', '2434', '2018-07-11 00:00:00', '2018-07-25 00:00:00', 2, 2, 'hjhgjghj', '123434', 'yes', 11, 'hjhjkghjg', 1),
(7, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '', '', 11, '', 1),
(8, 'fdrhgfg', 'gfjhk', 'tfhgf@gfhg', 'hgkjhl', 'jhklkj.j', 'hjklkj', 'jhklkjh', 'ghjklhj', 'breakfast', 'jhkjlkj', '2018-06-26 00:00:00', '2018-07-20 00:00:00', 2, 2, 'hjk;lkj', 'kl;jkl;', 'yes', 11, 'kjl;jk;jkl;', 1),
(9, 'dgvfdgbh', 'gfhnjgkj', 'fghfg@hfgjh', 'gvnbm,', 'hmbn,mnm', ',mnm,', 'hgmnjbjn,n', 'ghmnk,', 'dinner', 'fdhgjnhg', '2018-07-19 00:00:00', '2018-07-20 00:00:00', 1, 2, 'hgmhj,h', 'ghjmhj,jk', 'yes', 14, 'h,mn.nm.j', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(300) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `salt`, `phone_no`, `email`, `address`) VALUES
(1, 'vcxbvc', 'dfbcb', 'dsfg', 'dgdfhg', '1213213434324', 'xcvgxcvddfshg', 'dfsgfdgbvsdfv'),
(2, 'ghgfh', 'sad', '483250204ff6d3300cd3077d282479d5ffb8d272', '5b80f7cb57ba5', 'd234234', 'dsfgd@dfg', 'dfgfdhg'),
(3, 'rdgdf', 'and', '79127a17c36ea52179d9f8de8a2d16627b3a1c8d', '5b8117bddbec6', '123123', 'dgsdf@dfhgfh', 'dgfdgd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `average`
--
ALTER TABLE `average`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`bed_id`),
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rank_id`),
  ADD UNIQUE KEY `room_type` (`room_type`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `prdct` (`prdct`),
  ADD KEY `cat_name` (`cat_name`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cat_name` (`cat_name`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `room` (`room`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_id` (`room_id`),
  ADD KEY `type` (`type`),
  ADD KEY `bed_no` (`bed_no`);

--
-- Indexes for table `tbl_room_book`
--
ALTER TABLE `tbl_room_book`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `average`
--
ALTER TABLE `average`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=710;

--
-- AUTO_INCREMENT for table `bed`
--
ALTER TABLE `bed`
  MODIFY `bed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recommend`
--
ALTER TABLE `recommend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_room_book`
--
ALTER TABLE `tbl_room_book`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `tbl_room_book` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`prdct`) REFERENCES `tbl_product` (`name`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`cat_name`) REFERENCES `category` (`category_name`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`cat_name`) REFERENCES `category` (`category_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD CONSTRAINT `tbl_rating_ibfk_1` FOREIGN KEY (`room`) REFERENCES `tbl_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD CONSTRAINT `tbl_room_ibfk_1` FOREIGN KEY (`type`) REFERENCES `rank` (`room_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_room_ibfk_2` FOREIGN KEY (`bed_no`) REFERENCES `bed` (`number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_room_book`
--
ALTER TABLE `tbl_room_book`
  ADD CONSTRAINT `tbl_room_book_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `tbl_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

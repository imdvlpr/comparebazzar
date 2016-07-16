
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2016 at 04:48 AM
-- Server version: 10.0.22-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u790435296_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `user_num` varchar(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `city_id` varchar(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_img1` blob NOT NULL,
  `product_img2` blob NOT NULL,
  `product_img3` blob NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `product_keyword` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `user_name`, `city_name`, `user_num`, `cat_id`, `brand_id`, `city_id`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`, `status`) VALUES
(5, 'prashant', 'jabalpur', '2147483647', 2, 1, '1', 'micromax tablet', 0x626f6f6b6c65742d70333030202831292e6a7067, 0x626f6f6b6c65742d703330302e6a7067, 0x6d6963726f6d61782d3139303831322e6a7067, 6000, '<p>good codition</p>\r\n<p>slim tablet</p>', 'mobile,canvas,tablet', 'on'),
(4, 'prashant', 'jabalpur', '2147483647', 1, 1, '1', 'micromax unite 2', 0x6d6d782d756e697465322e6a7067, 0x6d6d782d613132302e6a7067, 0x6d6f62696c655f6c6f676f2e6a7067, 4000, '<p>very nice cell phone</p>\r\n<p>in such a good condition</p>', 'mobile,micromax,unite', 'on'),
(6, 'ramesh singh', 'jabalpur', '8989738466', 1, 1, '1', 'micromax  2690', 0x4d6963726f6d61782d556e6974652d332d513337322d53444c3631373535313437382d312d36646534372e6a7067, 0x4d6963726f6d61782d43616e7661732d4b6e696768742d41333530312e6a7067, 0x4d6963726f6d61782d43616e7661732d49492d413131302d322e6a70672e7061676573706565642e63652e54482d65633945726f302e6a7067, 5000, '<p>good camera</p>\r\n<p>5mp front</p>\r\n<p>touch</p>', 'mobile,canvas', 'on'),
(7, 'prashant', 'jabalpur', '9806441142', 3, 2, '1', 'camera sony', 0x43616e6f6e2d4469676974616c2d534c522d43616d6572612e6a7067, 0x32313030382d44534c522d43616d657261732e6a7067, 0x43616e6f6e2d4469676974616c2d534c522d43616d6572612e6a7067, 1000, '<p>26 mp camera</p>\r\n<p>location jabalpur</p>\r\n<p>in good condition</p>', 'camera,dslr', 'on'),
(8, 'ravi', 'jabalpur', '9806441142', 4, 2, '1', 'hp pavalion laptop i3 gen', 0x315f33375f3338342e6a7067, 0x6c6170746f702e6a7067, 0x315f33375f3338342e6a7067, 25000, '<p>4 gb ram</p>\r\n<p>2 gb hardisk</p>\r\n<p>hp laptop</p>', 'laptops', 'on'),
(9, 'pawan', 'jabalpur', '9806441142', 5, 2, '1', 'remote video game', 0x393031313334303638315f336532346234383166392e6a7067, 0x656e68616e6365642d31323334382d313432333235373931312d32352e6a7067, 0x393031313334303638315f336532346234383166392e6a7067, 1000, '<p>good conditin</p>\r\n<p>sony remototes</p>\r\n<p>1 yr old only</p>', 'remote , sony', 'on'),
(10, 'prshant', 'jabalpur', '9806441142', 6, 0, '1', 'maruti 800', 0x6d61727574692d616c746f2d3830302d6f6666696369616c2d7069632d736964652e6a7067, 0x313436333231323433395f6d61727574692d73757a756b692d616c746f2d3830302d666163656c6966742e6a7067, 0x4d61727574692d53757a756b692d416c746f2d3830302d323031322d506963747572652d333030783230302e6a7067, 90000, '<p>5 yr old car</p>\r\n<p>petrol engine</p>\r\n<p>good condition&nbsp;</p>\r\n<p>&nbsp;</p>', 'maruti', 'on'),
(11, 'pawan', 'jabalpur', '9806441142', 7, 0, 'state and city', 'passion pro bike', 0x6865726f2d70617373696f6e2d70726f2d6e65772d6d6f64656c2d706963732d736964652d616e676c652e6a7067, 0x323031352d4865726f2d50617373696f6e2d50726f2d666163656c6966742d726561722d717561727465722e6a7067, 0x6865726f2d70617373696f6e2d70726f2d6e65772d6d6f64656c2d706963732d736964652d616e676c652e6a7067, 3000, '<p>hero passion pro</p>\r\n<p>2 yr old</p>', 'bikes', 'on'),
(12, 'pawan', 'jabalpur', '9806441142', 8, 0, '1', 'bicycle', 0x38343966366538323439373936656166366234386339393736643937613339342e6a7067, 0x38343966366538323439373936656166366234386339393736643937613339342e6a7067, 0x38343966366538323439373936656166366234386339393736643937613339342e6a7067, 5000, '<p>new cycle</p>\r\n<p>with gears</p>\r\n<p>suspension also</p>', 'cycle, bicycle', 'on');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

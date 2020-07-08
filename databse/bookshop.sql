-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 08:06 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `book_id` int(11) NOT NULL,
  `m_id` int(11) DEFAULT NULL,
  `book_img` varchar(500) DEFAULT NULL,
  `book_title` varchar(100) DEFAULT NULL,
  `book_price` int(11) DEFAULT NULL,
  `book_authorname` varchar(100) DEFAULT NULL,
  `book_language` varchar(20) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `isbn_no` varchar(50) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `type` varchar(6) NOT NULL,
  `rent_price` int(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`book_id`, `m_id`, `book_img`, `book_title`, `book_price`, `book_authorname`, `book_language`, `category_id`, `isbn_no`, `qty`, `description`, `type`, `rent_price`, `status`) VALUES
(1, 2, 'images/01.jpg', 'One Indian Girl ', 200, 'Chetan Bhagat', 'English', 1, '139788129142146', 7, 'Hi, I\'m Radhika Mehta and I\'m getting married this week. I work at Goldman Sachs, an investment bank. Thank you for reading my story. However, let me warn you. You may not like me too much. One, I make a lot of money. Two, I have an opinion on everything. Three, I have had a boyfriend before. Okay, maybe two. Now if I were a guy, you\'d be cool with it.', 'Sell', 0, 'Active'),
(2, 2, 'images/02.jpg', 'The Kite Runner ', 300, 'Khaled Hosseini', 'English', 5, '139781408850251', 12, 'The Kite Runner is about the friendship between two young Afghani boys who eventually lose touch as a result of the war and the rising reign of the Taliban. The book gives a different view of Afghanistan and the emotions of the people during the time.Summary of the Book -The book is a story of two young Afghan boys, Amir and Hassan', 'Sell', 0, 'Active'),
(3, 4, 'images/03.jpg', 'The Old Man and the Sea', 341, 'Hemingway, Ernest', 'English', 7, '13:9780099908401', 28, 'The Old Man and the Sea', 'Sell', 0, 'Active'),
(5, 4, 'images/06.jpg', 'History Of Modern India', 230, 'BIPAN CHANDRA', 'Hindi', 4, '13:9788129142146', 6, 'History Of Modern India', 'Sell', 0, 'Active'),
(6, 6, 'images/07.jpg', 'Indian Polity 5th Edition ', 210, 'McGraw Hill Education', 'English', 3, '13:9789352603633', 5, 'McGraw Hill is proud to present the fifth edition of Indian Polity by M Laxmikanth. The book itself needs no introduction', 'Sell', 0, 'Active'),
(7, 6, 'images/08.jpg', 'General Knowledge 2018', 300, 'Manohar Pandey', 'Hindi', 3, '13:9789311122557', 13, 'â€¢	The candidates aspiring to appear for various competitive and recruitment examinations like SSC, Bank Clerk & PO, Railway Recruitment, etc. should have sound knowledge of varied sections covered under the subject of General Knowledge.', 'Sell', 0, 'Active'),
(8, 2, 'images/09.jpg', 'IAS Mains  Solved Papers ', 400, 'Siddharth Mittal', 'English', 1, '13:9789311127095', 19, 'â€¢	The revised edition of IAS Mains General Studies Chapterwise Solved Papers has been designed to help aspirants get an insight into the Civil Services (Mains) Examination. The book dwells at the overall structure of the Civil Services (Mains) Examination by providing detailed solutions of the last 20 yearsâ€™ General Studies Papers. Everything under the sun is General Studies and Arihant has developed this book to meet the demands of General Studies Paper.', 'Sell', 0, 'Active'),
(9, 2, 'images/10.jpg', 'Harry Potter ', 340, 'Rowling, J.K.', 'English', 7, '13 : 9781408855652', 13, 'In the book Harry Potter and the Philosopherâ€™s Stone, when the young orphaned protagonist, Harry Potter, turns 11, he finds that he is a wizard. He is admitted into the Hogwarts School of Witchcraft and Wizardry where he makes loyal friends and disliked enemies', 'Sell', 0, 'Active'),
(10, 2, 'images/12.jpg', 'Diary Of A Wimpy Kid ', 300, 'Jeff Kinney', 'English', 5, '13 : 9780141324920', 17, ' A Wimpy Kid: The Last Straw Book 3 was published originally in the year 2009.', 'Sell', 0, 'Active'),
(12, 1, 'images/rent/05.jpg', 'Rich Dad Poor Dad ', NULL, 'Robert T. Kiyosaki', 'English', 1, '13:098767', NULL, 'The Rich Donâ€™t Work for Money', 'Rent', 130, 'Active'),
(13, 1, 'images/rent/13.jpg', 'The Secret Hardcover', NULL, 'Rhonda Byrne', 'English', 1, '13:9781800123', NULL, 'Rhonda Byrne is a popular figure in the world of positive thinking.', 'Rent', 150, 'Active'),
(14, 1, 'images/rent/15.jpg', 'Think And Grow Rich', NULL, 'Napoleon Hill', 'English', 5, '13:8745423', NULL, 'Written during the great depression, Think and Grow Rich is founded on the authorâ€™s earlier self help book The Law of Success.', 'Rent', 200, 'Active'),
(15, 1, 'images/rent/16.jpg', 'Homecoming', NULL, 'John Bradshaw', 'English', 2, '13:98567343', NULL, 'John Bradshaw has been at the forefront of the self-help and recovery field for more than twenty years and is the New York Times bestselling author of books including Reclaiming Virtue and Bradshaw On: Homecoming.', 'Rent', 240, 'Active'),
(16, 1, 'images/rent/18.jpg', 'The Source of Yoga ', NULL, 'Sadhguru', 'Hindi', 5, '13:323432', NULL, 'Shiva does not spell religion. ', 'Rent', 300, 'Active'),
(18, 1, 'images/rent/20.jpg', 'Chanakya in Daily Life', NULL, 'Radhakrishnan Pillai', 'English', 5, '13:2323343', NULL, 'Life is unpredictable and full of challenges. One wrong step and everything can come crashing down.', 'Rent', 300, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE `cart_info` (
  `cart_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `m_id` int(11) DEFAULT NULL,
  `s_id` int(11) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Self help'),
(2, 'Action and Adventure'),
(3, 'GPSC'),
(4, 'History'),
(5, 'Diaries'),
(6, 'Biographies'),
(7, 'Drama'),
(8, 'UPSC');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `msg` varchar(10000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `email_id`, `msg`, `status`) VALUES
(6, 'Patel Keyur', 'pkeyur888@gmail.com', 'The Best Book Selling Plateform.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `member_info`
--

CREATE TABLE `member_info` (
  `m_id` int(11) NOT NULL,
  `m_email_id` varchar(20) NOT NULL,
  `m_fname` varchar(20) NOT NULL,
  `m_lname` varchar(20) NOT NULL,
  `mdob` date NOT NULL,
  `m_gender` varchar(6) NOT NULL,
  `m_address` varchar(50) NOT NULL,
  `m_city` varchar(20) NOT NULL,
  `m_pincode` int(6) NOT NULL,
  `m_contect_no` varchar(10) NOT NULL,
  `m_password` varchar(20) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `pan_no` varchar(20) DEFAULT NULL,
  `gst_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_info`
--

INSERT INTO `member_info` (`m_id`, `m_email_id`, `m_fname`, `m_lname`, `mdob`, `m_gender`, `m_address`, `m_city`, `m_pincode`, `m_contect_no`, `m_password`, `status`, `type`, `pan_no`, `gst_no`) VALUES
(1, 'pkeyur888@gmail.com', 'Keyur', 'Patel', '1998-05-28', 'm', 'AT-PO:Viravada,Himatnagar', 'Himatnagar', 383002, '9429972746', '123', 'Active', 0, NULL, NULL),
(2, 'seller', 'Anshu', 'Patel', '1994-12-03', 'm', '64,Setu Socity,Mahavirnagar,Himatnagar', 'Himatnagar', 383001, '0987654321', 'sell', 'Active', 1, '123asdcx', '123qwe'),
(3, 'palak@gmail.com', 'Patel', 'Palak', '1994-03-12', 'f', '45,Rajdarshan Socity,Gaytri Mandir Road,Himatnagar', 'Himatnagar', 383001, '1234444440', 'palak', 'Active', 1, '5678wert', '12345qwer'),
(4, 'ashu@gmail.com', 'Ashutosh', 'Patel', '1998-02-02', 'm', '23,Raj Basera, Sahkarijin,Himatnagar', 'Ahemedabad', 383001, '1230980981', 'ashu', 'Active', 1, 'wsx123', 'qaz123'),
(5, 'ankit@gmail.com', 'Ankit', 'Darji', '1998-02-14', 'm', '26,Ambika Socity,Patan', 'Patan', 384265, '3453453452', 'ankit', 'Active', 1, '123edc', 'edc123'),
(6, 'abhi@gmail.com', 'Abhishek', 'Bhut', '1998-09-09', 'm', '23,Matarvaniya, Junagadha', 'Junagadha', 123123, '1231231231', 'abhi', 'Active', 1, '167yuh', 'awd171'),
(7, 'mkspatel97@gmail.com', 'Meet', 'Patel', '1997-02-21', 'm', '23,ravi park,Patan', 'Patan', 123890, '0988900989', 'meet123', 'Active', 0, NULL, NULL),
(8, 'harshil@gmail.com', 'Harshil', 'Shah', '1997-04-30', 'm', '23,Gokulnagar,Kalol', 'Kalol', 345543, '1231231232', 'harshil', 'Active', 0, NULL, NULL),
(9, 'nikita@gmail.com', 'Nikita', 'Patel', '1998-12-12', 'f', '@3,mahavirnagar,himatnagar', 'Himatnagar', 383001, '1231231234', 'nikita', 'Active', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `book_id` varchar(30) NOT NULL,
  `s_id` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `billing_address` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `m_id`, `book_id`, `s_id`, `Name`, `billing_address`, `pincode`, `city`, `email_id`, `mobno`, `status`) VALUES
(9, 1, '2,6', '2,6', 'keyur', 'Himatnagar', 383001, 'Himatnagar', 'pkeyur888@gmail.com', '0987896789', 'Active'),
(10, 7, '10,3', '2,4', 'Meet', 'Patan', 383033, 'Patan', 'mkspatel97@gmail.com', '1234523456', 'Active'),
(11, 8, '6,8', '6,2', 'Harshil', 'kalol', 123456, 'Kalol', 'harshil@gmail.com', '1231231231', 'Deactive'),
(12, 8, '7', '6', 'Ankit', 'himatnagar', 123123, 'Himatnagar', 'ankit@gmail.com', '1231234', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `cart_info`
--
ALTER TABLE `cart_info`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `book_id` (`book_id`,`m_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `member_info`
--
ALTER TABLE `member_info`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_email_id` (`m_email_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `book_id` (`book_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `cart_info`
--
ALTER TABLE `cart_info`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member_info`
--
ALTER TABLE `member_info`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_info`
--
ALTER TABLE `book_info`
  ADD CONSTRAINT `book_info_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `book_info_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `member_info` (`m_id`);

--
-- Constraints for table `cart_info`
--
ALTER TABLE `cart_info`
  ADD CONSTRAINT `cart_info_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_info` (`book_id`),
  ADD CONSTRAINT `cart_info_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `member_info` (`m_id`);

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `member_info` (`m_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 01:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ourmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(2, 'ourmedia', 'ourmedia.in@gmail.com', 'pkharivenu@ourmedia');

-- --------------------------------------------------------

--
-- Table structure for table `ads_images`
--

CREATE TABLE IF NOT EXISTS `ads_images` (
`id` int(11) NOT NULL,
  `ads_id` int(11) NOT NULL,
  `merchants_id` int(11) NOT NULL,
  `news_center` varchar(100) DEFAULT NULL,
  `events_center` varchar(100) DEFAULT NULL,
  `startups_center` varchar(100) DEFAULT NULL,
  `news_sidebar` varchar(100) DEFAULT NULL,
  `events_sidebar` varchar(100) DEFAULT NULL,
  `startups_sidebar` varchar(100) DEFAULT NULL,
  `others_center` varchar(100) DEFAULT NULL,
  `others_sidebar` varchar(100) DEFAULT NULL,
  `userprofile_center` varchar(100) DEFAULT NULL,
  `userprofile_sidebar` varchar(100) DEFAULT NULL,
  `news_center_url` varchar(100) DEFAULT NULL,
  `events_center_url` varchar(100) DEFAULT NULL,
  `startups_center_url` varchar(100) DEFAULT NULL,
  `news_sidebar_url` varchar(100) DEFAULT NULL,
  `events_sidebar_url` varchar(100) DEFAULT NULL,
  `startups_sidebar_url` varchar(100) DEFAULT NULL,
  `others_center_url` varchar(100) DEFAULT NULL,
  `others_sidebar_url` varchar(100) DEFAULT NULL,
  `userprofile_center_url` varchar(100) DEFAULT NULL,
  `userprofile_sidebar_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applyads`
--

CREATE TABLE IF NOT EXISTS `applyads` (
`ads_id` int(11) NOT NULL,
  `ads_name` varchar(100) NOT NULL,
  `ads_email` varchar(100) NOT NULL,
  `ads_contact` varchar(100) NOT NULL,
  `ads_organisation` varchar(150) NOT NULL,
  `ads_msg` text NOT NULL,
  `ads_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applyads`
--

INSERT INTO `applyads` (`ads_id`, `ads_name`, `ads_email`, `ads_contact`, `ads_organisation`, `ads_msg`, `ads_date`) VALUES
(2, 'Rami Reddy', 'ramireddyseelam1@gmail.com', '9912377650', 'PreCouponz', 'Online Coupon market', '2017-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `comments_events`
--

CREATE TABLE IF NOT EXISTS `comments_events` (
`comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments_news`
--

CREATE TABLE IF NOT EXISTS `comments_news` (
`comment_id` int(11) NOT NULL,
  `post_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_news`
--

INSERT INTO `comments_news` (`comment_id`, `post_id`, `user_id`, `comment_text`) VALUES
(31, 27, 29, '<p>gud msg .....</p>\r\n'),
(32, 27, 27, '<p>tq</p>\r\n'),
(33, 56, 69, '<p>Mari antha pedda story ante viwers ki bore kodtady sry if i hurt</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(34, 51, 38, '<p>intresting one...</p>\r\n\r\n<p>waiting for second part...</p>\r\n'),
(35, 66, 32, '<p>lovely story waiting for part 2.....</p>\r\n'),
(36, 66, 22, '<p>thnq bro....It will be released soon</p>\r\n'),
(37, 74, 32, '<p>rtry</p>\r\n'),
(38, 73, 32, 'testing'),
(39, 71, 111, '<p>The language is very good. And the feel lied in it always.</p>\r\n'),
(40, 72, 111, '<p>Continued well. Keep going Ms.Sheethal Duvvalla</p>\r\n'),
(41, 76, 111, '<p>Wow! The surprised are pretty awesome and the suspense in the&nbsp;ending is freakingly tight.waiting eagerly for next&nbsp;part.</p>\r\n'),
(42, 72, 111, '<p>And&nbsp;the proposal&nbsp;was creative and the answer was&nbsp;damn tricky.</p>\r\n'),
(43, 71, 66, '<p>Thank you for the support.</p>\r\n'),
(44, 72, 66, '<p>Thank you for your compliments.</p>\r\n'),
(45, 76, 66, '<p>Thank you so much. Your compliments mean a lot. I will try to publish the 4th part as soon as possible... Stay tuned.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comments_startups`
--

CREATE TABLE IF NOT EXISTS `comments_startups` (
`comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments_startups`
--

INSERT INTO `comments_startups` (`comment_id`, `post_id`, `user_id`, `comment_text`) VALUES
(1, 1, 32, '<p>testing</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`cat_id` int(10) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`cat_id`, `cat_title`) VALUES
(1, 'College Events'),
(2, 'College Summits'),
(3, 'DJ Events/Nights'),
(4, 'Promotional events'),
(5, 'Fund raising events'),
(6, 'Other Events');

-- --------------------------------------------------------

--
-- Table structure for table `eventsposts`
--

CREATE TABLE IF NOT EXISTS `eventsposts` (
`post_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_keywords` varchar(1000) NOT NULL,
  `post_date` text NOT NULL,
  `post_organiser` varchar(50) NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_eventvenue` varchar(100) NOT NULL,
  `post_eventdate` varchar(50) NOT NULL,
  `post_eventtimings` varchar(50) NOT NULL,
  `post_eventprice` varchar(50) NOT NULL,
  `post_fburl` varchar(80) NOT NULL,
  `post_ogmail` varchar(50) NOT NULL,
  `post_ocontact` varchar(50) NOT NULL,
  `view` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventsposts`
--

INSERT INTO `eventsposts` (`post_id`, `user_id`, `category_id`, `post_title`, `post_keywords`, `post_date`, `post_organiser`, `post_image`, `post_content`, `post_eventvenue`, `post_eventdate`, `post_eventtimings`, `post_eventprice`, `post_fburl`, `post_ogmail`, `post_ocontact`, `view`) VALUES
(5, 58, 2, 'Telanganaesummit', 'Esummmit livewire', '04-04-17', 'Js groups', 'IMG-20170402-WA0028.jpg', '<p>TELANGANA E-SUMMIT &amp; LIVEWIRE 2K17,is one of the biggest event hosted at GURU NANAK INSTITUTIONS,to be held on 8th april 2017 from 9:00A.M, Powered by JAWAHAR SUKHRA GROUPS &amp; Co-powered by GURU NANAK INSTITUTIONS&nbsp;</p>\r\n\r\n<p>TELANGANA E-SUMMIT.<br />\r\n&nbsp; &nbsp; &nbsp;THE HIGHLIGHTED EVENTS OF E-SUMMIT ARE<br />\r\n1.STARTUP TALKS&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp;BY NABOMITA MAZUMDAR,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ANIL CHHIKARA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DHARMA CHANDRA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ANKIT TIBREWAL,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TANUSREE ISHAANI,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PAKHI DIXIT,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SAUMYA AGARWAL,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DR.PERNA TANEJA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;APJMJ SHEIK SALEEM,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RAJIV LULLA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RITUJA DIXIT,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; DEEPAK GOEL,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SHANKAR SRIVASTAVA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;DR.S.AMAR PRASAD REDDY,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;AYESHA and many other Dignitaries.<br />\r\n2.STARTUP EXPO<br />\r\n3.STARTUP HELP<br />\r\n4.STARTUP PITCH DECK:-Pitching &nbsp;registration fee is â‚¹500/- per team.<br />\r\n&nbsp;TOP 5 TEAM WILL HAVE CHANCE TO PITCH ON STAGE AND GET FUNDING FROM ANGEL INVESTORS. TOP 1 PITCHING IDEA WILL BE AWARDED WITH â‚¹1LAKH.<br />\r\n5.STARTUP ENTHUSIASTS&nbsp;<br />\r\n6.NETWORKING<br />\r\n7.ANGEL INVESTORS , JS GROUP and more.</p>\r\n\r\n<p>Entertainment LIVE &nbsp;WIRE 2K17.<br />\r\n1.DHAMINI (BAHUBALI FAME &amp;PLAY BACK SINGER)<br />\r\n2. RAHUL SIPLIGUNJ ( MAAKKIKIRKIRI FAME AND PLAY BACK SINGER TOLLYWOOD)<br />\r\n3.MC MIKE ,MC UNEEK ,OM SRIPATHI ( JIMPAK CHIPAK FAME )<br />\r\n4.SIANA CATHERINE (SUN BURN FAME DJ)<br />\r\n5.BRODHA V (INDIAN RAPPER &amp; *GIMA* AWARD WINNER)<br />\r\n6.SURPRISE ARTISTS&nbsp;</p>\r\n\r\n<p>Student Benefits on every ticket registration:<br />\r\n1. Grab on discount Coupons of worth upto Rs.50,000/- 1 YEAR OPEN VALIDITY<br />\r\n2.Unlimited LUNCH.<br />\r\n3.CERTIFICATE of participation.<br />\r\n4. Interaction with Eminent Entrepreneurs.<br />\r\n5. Free Transportation.&nbsp;<br />\r\n6. 1ST WEEK BHAUBALI TICKETS&nbsp;</p>\r\n\r\n<p>DON&#39;T MISS THE OPPORTUNITY,<br />\r\nGRAB THE REGISTRATION ASAP . LIMITED REGISTRATIONS !!<br />\r\nREGISTRATION cum ENTRY FEE Rs.1000/-</p>\r\n\r\n<p>For more details visit:-<br />\r\nwww.telanganaesummit.com<br />\r\nFb page:-https://www.facebook.com/Telangana-E-Summit-410637032618011/</p>\r\n\r\n<p>Contact: bhaskar-9573278936</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Gurunank institutions ibrahimpatnam', 'April8', 'Mrng 10 to 4', '1000', 'https://www.facebook.com/Telangana-E-Summit-410637032618011/', 'bhaskarpinna32@gmail.com', '9573278936', 61),
(6, 58, 1, 'Telangana E - Summit', 'Esummit , events', '04-04-17', 'Bhaskar', 'icon.jpg', '<p><strong>TELANGANA E-SUMMIT &amp; LIVEWIRE 2K17</strong>,is one of the biggest event hosted at GURU NANAK INSTITUTIONS,to be held on 8th april 2017 from 9:00A.M, Powered by JAWAHAR SUKHRA GROUPS &amp; Co-powered by GURU NANAK INSTITUTIONS&nbsp;</p>\r\n\r\n<p>TELANGANA E-SUMMIT.<br />\r\n&nbsp; &nbsp; &nbsp;<strong>THE HIGHLIGHTED EVENTS OF E-SUMMIT ARE</strong><br />\r\n1.STARTUP TALKS&nbsp;<br />\r\n&nbsp; &nbsp; &nbsp;BY NABOMITA MAZUMDAR,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ANIL CHHIKARA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DHARMA CHANDRA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ANKIT TIBREWAL,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TANUSREE ISHAANI,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PAKHI DIXIT,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; SAUMYA AGARWAL,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; DR.PERNA TANEJA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;APJMJ SHEIK SALEEM,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RAJIV LULLA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;RITUJA DIXIT,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; DEEPAK GOEL,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SHANKAR SRIVASTAVA,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;DR.S.AMAR PRASAD REDDY,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;AYESHA and many other Dignitaries.<br />\r\n2.STARTUP EXPO<br />\r\n3.STARTUP HELP<br />\r\n4.STARTUP PITCH DECK:-Pitching &nbsp;registration fee is â‚¹500/- per team.<br />\r\n&nbsp;TOP 5 TEAM WILL HAVE CHANCE TO PITCH ON STAGE AND GET FUNDING FROM ANGEL INVESTORS. TOP 1 PITCHING IDEA WILL BE AWARDED WITH â‚¹1LAKH.<br />\r\n5.STARTUP ENTHUSIASTS&nbsp;<br />\r\n6.NETWORKING<br />\r\n7.ANGEL INVESTORS , JS GROUP and more.</p>\r\n\r\n<p>Entertainment LIVE &nbsp;WIRE 2K17.<br />\r\n1.DHAMINI (BAHUBALI FAME &amp;PLAY BACK SINGER)<br />\r\n2. RAHUL SIPLIGUNJ ( MAAKKIKIRKIRI FAME AND PLAY BACK SINGER TOLLYWOOD)<br />\r\n3.MC MIKE ,MC UNEEK ,OM SRIPATHI ( JIMPAK CHIPAK FAME )<br />\r\n4.SIANA CATHERINE (SUN BURN FAME DJ)<br />\r\n5.BRODHA V (INDIAN RAPPER &amp; *GIMA* AWARD WINNER)<br />\r\n6.SURPRISE ARTISTS&nbsp;</p>\r\n\r\n<p>Student Benefits on every ticket registration:<br />\r\n1. Grab on discount Coupons of worth upto Rs.50,000/- 1 YEAR OPEN VALIDITY<br />\r\n2.Unlimited LUNCH.<br />\r\n3.CERTIFICATE of participation.<br />\r\n4. Interaction with Eminent Entrepreneurs.<br />\r\n5. Free Transportation.&nbsp;<br />\r\n6. 1ST WEEK BHAUBALI TICKETS&nbsp;</p>\r\n\r\n<p>DON&#39;T MISS THE OPPORTUNITY,<br />\r\nGRAB THE REGISTRATION ASAP . LIMITED REGISTRATIONS !!<br />\r\nREGISTRATION cum ENTRY FEE Rs.1000/-</p>\r\n\r\n<p><strong>For more details visit:-</strong><br />\r\nwww.telanganaesummit.com<br />\r\nFb page:-https://www.facebook.com/Telangana-E-Summit-410637032618011/<br />\r\nFor details contact :Bhaskar 9573278936</p>\r\n', 'Guru Nanak institution', '8 th April, 2017', '9.00 Am', '1000/-', 'https://www.facebook.com/Telangana-E-Summit-410637032618011/', '9573278936', '9573278936', 105);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`feedback_id` int(11) NOT NULL,
  `feedback_name` varchar(100) NOT NULL,
  `feedback_email` varchar(50) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `feedback_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_name`, `feedback_email`, `feedback`, `feedback_date`) VALUES
(10, 'jeevan teja', 'jeevanpadaga@gmail', 'Submit', '2017-04-02'),
(11, 'jeevan teja', 'jeevanpadaga@gmail.com', 'Submit', '2017-04-02'),
(12, 'Jeevan teja', 'jeevanpadaga@gmail.com', 'Submit', '2017-04-02'),
(13, 'R SAI KEERTHAN', 'keerthanrampalli98@gmail.com', 'Submit', '2017-04-04'),
(14, 'Maroju Mounika', 'marojumounika2406@gmail.com', 'Submit', '2017-04-04'),
(15, 'Kamal ', 'kamalshaheed423@gmail.com', 'Submit', '2017-04-04'),
(16, 'Mahesh kumar ', 'mahibinny43@gmail.com', 'Submit', '2017-04-05'),
(17, 'Chgx', 'rfc@gmail.com', 'Submit', '2017-05-03'),
(18, 'RonaldGam', 'ronaldpaype@mail.ru', 'Submit', '2017-05-03'),
(19, 'Jeroefforie', 'mail@try-rx.com', 'Submit', '2017-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

CREATE TABLE IF NOT EXISTS `follower` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `follow_id` int(11) DEFAULT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending',
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL,
  `deleted_at` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follower`
--

INSERT INTO `follower` (`id`, `user_id`, `follow_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 32, 57, 'pending', 1497852407, NULL, NULL),
(2, 32, 32, 'accepted', 1497852458, NULL, NULL),
(3, 32, 24, 'accepted', 1497852581, NULL, NULL),
(4, 24, 41, 'pending', 1497852669, NULL, NULL),
(5, 24, 32, 'accepted', 1497852681, NULL, NULL),
(6, 32, 80, 'pending', 1497853082, NULL, NULL),
(7, 24, 24, 'accepted', 1497854531, NULL, NULL),
(8, 32, 112, 'pending', 1498037718, NULL, NULL),
(9, 24, 33, 'pending', 1498241555, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE IF NOT EXISTS `interns` (
`interns_id` int(11) NOT NULL,
  `interns_name` varchar(100) NOT NULL,
  `interns_omurl` varchar(100) NOT NULL,
  `interns_email` varchar(100) NOT NULL,
  `interns_pass` varchar(100) NOT NULL,
  `interns_contact` varchar(100) NOT NULL,
  `interns_joineddate` date NOT NULL,
  `interns_college` varchar(100) NOT NULL,
  `interns_bday` date NOT NULL,
  `interns_skills` text NOT NULL,
  `interns_image` varchar(100) NOT NULL,
  `interns_position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE IF NOT EXISTS `internship` (
`intern_id` int(11) NOT NULL,
  `intern_name` varchar(100) NOT NULL,
  `intern_email` varchar(100) NOT NULL,
  `intern_contact` varchar(100) NOT NULL,
  `intern_skills` varchar(200) NOT NULL,
  `intern_content` text NOT NULL,
  `intern_gender` varchar(50) NOT NULL,
  `intern_birthday` date NOT NULL,
  `intern_image` varchar(150) NOT NULL,
  `intern_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`intern_id`, `intern_name`, `intern_email`, `intern_contact`, `intern_skills`, `intern_content`, `intern_gender`, `intern_birthday`, `intern_image`, `intern_date`) VALUES
(2, 'Srikanth Aridhela', 'aridhelasrikanth005@gmail.com', '9052525306', 'Blogging, Content Writing', 'My BLOGS\r\nhttps://eeemasabtank.blogspot.com\r\nhttps://eeetkrec.blogspot.com', 'male', '1998-08-30', '', '2017-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `like_unlike_eventsposts`
--

CREATE TABLE IF NOT EXISTS `like_unlike_eventsposts` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` int(2) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_unlike_eventsposts`
--

INSERT INTO `like_unlike_eventsposts` (`id`, `user_id`, `post_id`, `type`, `timestamp`) VALUES
(22, 32, 6, NULL, '2017-04-14 06:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `like_unlike_newsposts`
--

CREATE TABLE IF NOT EXISTS `like_unlike_newsposts` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` int(2) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=349 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_unlike_newsposts`
--

INSERT INTO `like_unlike_newsposts` (`id`, `user_id`, `post_id`, `type`, `timestamp`) VALUES
(30, 24, 31, NULL, '2017-04-02 18:09:03'),
(31, 33, 31, NULL, '2017-04-02 18:28:05'),
(32, 33, 29, NULL, '2017-04-02 18:28:42'),
(34, 32, 47, NULL, '2017-04-03 18:41:25'),
(35, 57, 47, NULL, '2017-04-03 19:16:41'),
(45, 37, 53, NULL, '2017-04-04 16:13:31'),
(46, 37, 55, NULL, '2017-04-04 16:13:38'),
(47, 38, 56, NULL, '2017-04-04 16:18:12'),
(49, 68, 57, NULL, '2017-04-04 16:33:15'),
(50, 44, 55, NULL, '2017-04-04 16:38:50'),
(53, 44, 56, NULL, '2017-04-04 17:19:46'),
(54, 71, 56, NULL, '2017-04-04 18:08:25'),
(55, 75, 51, NULL, '2017-04-05 01:54:26'),
(56, 28, 51, NULL, '2017-04-05 03:47:17'),
(57, 48, 53, NULL, '2017-04-05 04:19:21'),
(58, 48, 52, NULL, '2017-04-05 04:20:49'),
(62, 38, 47, NULL, '2017-04-05 04:56:24'),
(63, 33, 53, NULL, '2017-04-05 05:06:26'),
(81, 22, 59, NULL, '2017-04-05 12:05:04'),
(107, 32, 61, NULL, '2017-04-05 13:58:08'),
(123, 57, 62, NULL, '2017-04-05 18:19:45'),
(127, 57, 56, NULL, '2017-04-05 18:20:18'),
(131, 32, 62, NULL, '2017-04-06 10:18:36'),
(144, 68, 59, NULL, '2017-04-06 13:46:18'),
(147, 32, 63, NULL, '2017-04-06 14:40:17'),
(149, 32, 64, NULL, '2017-04-06 14:44:43'),
(150, 32, 67, NULL, '2017-04-06 16:09:14'),
(152, 57, 70, NULL, '2017-04-06 17:36:32'),
(163, 24, 72, NULL, '2017-04-07 06:29:57'),
(174, 85, 72, NULL, '2017-04-07 11:37:47'),
(181, 32, 71, NULL, '2017-04-07 12:10:46'),
(223, 32, 73, NULL, '2017-04-07 12:46:59'),
(224, 32, 59, NULL, '2017-04-07 12:47:04'),
(227, 22, 66, NULL, '2017-04-07 14:42:00'),
(246, 22, 74, NULL, '2017-04-08 04:08:17'),
(265, 32, 72, NULL, '2017-04-08 17:59:32'),
(329, 57, 76, NULL, '2017-04-14 04:27:33'),
(333, 32, 76, NULL, '2017-04-14 12:53:11'),
(338, 84, 76, NULL, '2017-04-15 05:39:59'),
(339, 32, 75, NULL, '2017-04-15 09:09:52'),
(341, 91, 76, NULL, '2017-04-17 16:13:20'),
(342, 33, 75, NULL, '2017-05-29 15:55:07'),
(343, 111, 76, NULL, '2017-06-17 12:58:28'),
(344, 111, 71, NULL, '2017-06-17 12:58:38'),
(345, 66, 59, NULL, '2017-06-18 01:36:03'),
(346, 66, 55, NULL, '2017-06-18 01:36:08'),
(347, 38, 76, NULL, '2017-06-22 18:03:56'),
(348, 32, 74, NULL, '2017-06-27 13:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `like_unlike_posts`
--

CREATE TABLE IF NOT EXISTS `like_unlike_posts` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` int(2) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=527 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_unlike_posts`
--

INSERT INTO `like_unlike_posts` (`id`, `user_id`, `post_id`, `type`, `timestamp`) VALUES
(86, 24, 17, NULL, '2017-04-02 11:43:28'),
(88, 27, 17, NULL, '2017-04-02 12:26:45'),
(94, 28, 18, NULL, '2017-04-02 13:26:11'),
(96, 28, 17, NULL, '2017-04-02 13:26:23'),
(99, 37, 18, NULL, '2017-04-02 14:32:55'),
(100, 37, 17, NULL, '2017-04-02 14:33:00'),
(102, 32, 17, NULL, '2017-04-02 14:42:35'),
(103, 32, 18, NULL, '2017-04-02 15:02:16'),
(105, 24, 18, NULL, '2017-04-02 17:22:48'),
(106, 48, 17, NULL, '2017-04-03 10:33:30'),
(107, 48, 18, NULL, '2017-04-03 10:37:23'),
(109, 45, 18, NULL, '2017-04-03 17:46:45'),
(110, 32, 26, NULL, '2017-04-03 18:16:06'),
(111, 32, 25, NULL, '2017-04-03 18:16:11'),
(112, 57, 26, NULL, '2017-04-03 18:53:20'),
(113, 57, 25, NULL, '2017-04-03 18:53:22'),
(114, 57, 18, NULL, '2017-04-03 18:53:34'),
(115, 32, 27, NULL, '2017-04-04 09:00:33'),
(116, 56, 28, NULL, '2017-04-04 09:18:48'),
(117, 56, 27, NULL, '2017-04-04 09:18:51'),
(118, 56, 26, NULL, '2017-04-04 09:18:55'),
(119, 56, 25, NULL, '2017-04-04 09:18:57'),
(120, 56, 18, NULL, '2017-04-04 09:18:59'),
(121, 56, 17, NULL, '2017-04-04 09:19:02'),
(122, 41, 27, NULL, '2017-04-04 09:37:19'),
(123, 32, 28, NULL, '2017-04-04 11:35:21'),
(124, 32, 29, NULL, '2017-04-04 11:35:25'),
(125, 32, 30, NULL, '2017-04-04 11:39:16'),
(126, 33, 30, NULL, '2017-04-04 12:10:53'),
(127, 48, 30, NULL, '2017-04-04 12:30:32'),
(129, 66, 28, NULL, '2017-04-04 12:59:51'),
(130, 38, 30, NULL, '2017-04-04 13:30:01'),
(131, 38, 18, NULL, '2017-04-04 13:30:19'),
(132, 41, 31, NULL, '2017-04-04 15:11:27'),
(133, 67, 30, NULL, '2017-04-04 15:24:14'),
(141, 27, 31, NULL, '2017-04-04 15:59:37'),
(142, 27, 30, NULL, '2017-04-04 15:59:43'),
(143, 27, 28, NULL, '2017-04-04 16:00:07'),
(144, 27, 27, NULL, '2017-04-04 16:00:10'),
(145, 27, 26, NULL, '2017-04-04 16:00:13'),
(146, 27, 25, NULL, '2017-04-04 16:00:15'),
(147, 27, 29, NULL, '2017-04-04 16:00:17'),
(148, 27, 18, NULL, '2017-04-04 16:00:20'),
(150, 62, 30, NULL, '2017-04-04 16:35:49'),
(152, 24, 35, NULL, '2017-04-04 17:19:31'),
(153, 24, 31, NULL, '2017-04-04 17:20:12'),
(156, 71, 18, NULL, '2017-04-04 18:01:41'),
(157, 71, 36, NULL, '2017-04-04 18:02:46'),
(158, 32, 34, NULL, '2017-04-04 18:34:50'),
(159, 32, 33, NULL, '2017-04-04 18:36:14'),
(160, 32, 31, NULL, '2017-04-04 18:36:17'),
(161, 32, 38, NULL, '2017-04-04 18:43:34'),
(162, 32, 37, NULL, '2017-04-04 18:44:32'),
(163, 32, 39, NULL, '2017-04-04 19:11:17'),
(164, 74, 39, NULL, '2017-04-04 20:15:10'),
(165, 74, 38, NULL, '2017-04-04 20:15:18'),
(166, 74, 37, NULL, '2017-04-04 20:15:26'),
(167, 74, 36, NULL, '2017-04-04 20:15:51'),
(168, 74, 35, NULL, '2017-04-04 20:15:55'),
(169, 74, 34, NULL, '2017-04-04 20:15:59'),
(170, 74, 33, NULL, '2017-04-04 20:16:03'),
(171, 74, 31, NULL, '2017-04-04 20:16:11'),
(172, 74, 30, NULL, '2017-04-04 20:16:17'),
(173, 74, 29, NULL, '2017-04-04 20:16:23'),
(174, 74, 28, NULL, '2017-04-04 20:16:26'),
(175, 74, 27, NULL, '2017-04-04 20:16:30'),
(176, 74, 26, NULL, '2017-04-04 20:16:34'),
(177, 74, 18, NULL, '2017-04-04 20:16:49'),
(178, 74, 17, NULL, '2017-04-04 20:16:52'),
(180, 48, 39, NULL, '2017-04-05 04:17:58'),
(181, 38, 33, NULL, '2017-04-05 04:50:53'),
(182, 38, 29, NULL, '2017-04-05 04:51:03'),
(183, 78, 40, NULL, '2017-04-05 05:33:56'),
(184, 78, 37, NULL, '2017-04-05 05:34:27'),
(185, 32, 46, NULL, '2017-04-05 06:35:54'),
(188, 32, 47, NULL, '2017-04-05 07:24:28'),
(191, 71, 51, NULL, '2017-04-05 10:11:33'),
(208, 32, 50, NULL, '2017-04-05 13:06:39'),
(222, 32, 36, NULL, '2017-04-05 15:14:14'),
(223, 32, 51, NULL, '2017-04-05 15:18:32'),
(224, 71, 52, NULL, '2017-04-05 17:19:02'),
(225, 57, 52, NULL, '2017-04-05 18:21:14'),
(226, 57, 48, NULL, '2017-04-05 18:21:23'),
(227, 57, 47, NULL, '2017-04-05 18:22:19'),
(228, 71, 53, NULL, '2017-04-06 13:14:13'),
(229, 43, 53, NULL, '2017-04-06 15:40:55'),
(230, 43, 28, NULL, '2017-04-06 17:15:15'),
(231, 43, 27, NULL, '2017-04-06 17:15:18'),
(232, 76, 46, NULL, '2017-04-06 17:50:02'),
(233, 24, 53, NULL, '2017-04-07 06:31:59'),
(235, 24, 52, NULL, '2017-04-07 06:46:57'),
(236, 84, 25, NULL, '2017-04-07 08:37:14'),
(237, 85, 40, NULL, '2017-04-07 11:35:36'),
(242, 32, 48, NULL, '2017-04-07 13:42:16'),
(246, 32, 52, NULL, '2017-04-07 16:56:49'),
(291, 32, 58, NULL, '2017-04-10 11:58:57'),
(342, 32, 53, NULL, '2017-04-11 12:43:43'),
(353, 24, 57, NULL, '2017-04-11 13:05:36'),
(355, 32, 59, NULL, '2017-04-11 13:16:21'),
(370, 88, 66, NULL, '2017-04-11 15:51:30'),
(371, 88, 67, NULL, '2017-04-11 15:51:33'),
(379, 43, 55, NULL, '2017-04-12 09:20:29'),
(384, 32, 70, NULL, '2017-04-12 13:46:18'),
(386, 32, 71, NULL, '2017-04-12 14:37:34'),
(388, 90, 30, NULL, '2017-04-12 15:44:59'),
(389, 90, 18, NULL, '2017-04-12 15:45:08'),
(390, 90, 71, NULL, '2017-04-12 15:51:59'),
(391, 32, 72, NULL, '2017-04-12 16:06:26'),
(392, 88, 74, NULL, '2017-04-13 03:25:03'),
(393, 88, 75, NULL, '2017-04-13 03:44:36'),
(394, 32, 75, NULL, '2017-04-13 06:06:31'),
(396, 24, 55, NULL, '2017-04-13 08:07:12'),
(397, 24, 71, NULL, '2017-04-13 08:07:33'),
(398, 32, 76, NULL, '2017-04-13 11:35:29'),
(400, 56, 71, NULL, '2017-04-13 11:46:45'),
(401, 56, 55, NULL, '2017-04-13 11:46:52'),
(402, 91, 76, NULL, '2017-04-13 12:03:05'),
(403, 91, 71, NULL, '2017-04-13 12:10:43'),
(404, 91, 55, NULL, '2017-04-13 12:10:53'),
(405, 91, 53, NULL, '2017-04-13 12:11:40'),
(406, 91, 52, NULL, '2017-04-13 12:13:35'),
(408, 56, 77, NULL, '2017-04-13 15:06:44'),
(409, 56, 79, NULL, '2017-04-13 15:07:51'),
(410, 32, 80, NULL, '2017-04-14 03:40:00'),
(411, 32, 79, NULL, '2017-04-14 03:40:02'),
(412, 32, 78, NULL, '2017-04-14 03:40:05'),
(413, 24, 80, NULL, '2017-04-14 04:10:38'),
(414, 24, 79, NULL, '2017-04-14 04:10:41'),
(415, 57, 80, NULL, '2017-04-14 04:31:31'),
(416, 57, 77, NULL, '2017-04-14 04:32:02'),
(417, 57, 76, NULL, '2017-04-14 04:32:16'),
(419, 56, 30, NULL, '2017-04-14 06:58:33'),
(421, 32, 77, NULL, '2017-04-14 07:00:14'),
(422, 56, 80, NULL, '2017-04-14 07:02:11'),
(423, 56, 78, NULL, '2017-04-14 07:02:17'),
(424, 56, 82, NULL, '2017-04-14 07:20:27'),
(425, 91, 78, NULL, '2017-04-14 08:55:56'),
(426, 91, 79, NULL, '2017-04-14 08:56:46'),
(427, 56, 76, NULL, '2017-04-14 09:30:23'),
(428, 54, 82, NULL, '2017-04-14 09:32:01'),
(429, 54, 71, NULL, '2017-04-14 09:32:32'),
(431, 32, 82, NULL, '2017-04-14 12:53:04'),
(432, 56, 83, NULL, '2017-04-15 02:57:53'),
(433, 91, 83, NULL, '2017-04-15 07:07:11'),
(434, 32, 83, NULL, '2017-04-15 08:55:40'),
(435, 24, 83, NULL, '2017-04-15 15:11:16'),
(437, 56, 84, NULL, '2017-04-16 01:10:45'),
(438, 32, 84, NULL, '2017-04-16 06:05:10'),
(440, 32, 85, NULL, '2017-04-16 08:05:46'),
(441, 91, 85, NULL, '2017-04-16 09:21:34'),
(442, 91, 84, NULL, '2017-04-16 09:21:47'),
(444, 24, 86, NULL, '2017-04-16 17:59:49'),
(445, 24, 85, NULL, '2017-04-16 18:00:56'),
(446, 24, 84, NULL, '2017-04-16 18:01:00'),
(447, 91, 86, NULL, '2017-04-16 19:55:24'),
(448, 32, 86, NULL, '2017-04-17 06:44:09'),
(449, 57, 86, NULL, '2017-04-18 01:55:56'),
(450, 57, 82, NULL, '2017-04-18 01:56:25'),
(451, 56, 87, NULL, '2017-04-18 02:35:03'),
(452, 41, 76, NULL, '2017-04-18 02:49:10'),
(453, 41, 85, NULL, '2017-04-18 02:51:56'),
(454, 56, 88, NULL, '2017-04-18 03:43:46'),
(455, 57, 88, NULL, '2017-04-18 03:55:53'),
(456, 32, 88, NULL, '2017-04-18 04:32:39'),
(457, 32, 87, NULL, '2017-04-18 04:32:43'),
(459, 102, 89, NULL, '2017-04-18 05:48:05'),
(461, 56, 89, NULL, '2017-04-18 15:38:29'),
(463, 74, 89, NULL, '2017-04-19 04:39:16'),
(464, 74, 86, NULL, '2017-04-19 04:39:40'),
(466, 74, 71, NULL, '2017-04-19 04:40:53'),
(467, 74, 55, NULL, '2017-04-19 04:41:32'),
(468, 32, 92, NULL, '2017-04-19 13:53:04'),
(469, 32, 93, NULL, '2017-04-20 05:31:27'),
(470, 24, 77, NULL, '2017-04-20 15:05:05'),
(472, 71, 86, NULL, '2017-04-20 18:40:56'),
(473, 91, 93, NULL, '2017-04-21 05:29:13'),
(474, 105, 93, NULL, '2017-04-21 09:41:26'),
(476, 32, 97, NULL, '2017-04-22 16:19:29'),
(477, 32, 96, NULL, '2017-04-22 16:22:26'),
(478, 62, 92, NULL, '2017-04-23 14:21:39'),
(479, 74, 99, NULL, '2017-04-25 13:27:00'),
(480, 32, 99, NULL, '2017-04-27 02:45:27'),
(481, 32, 98, NULL, '2017-04-27 02:45:34'),
(482, 71, 96, NULL, '2017-05-08 10:31:23'),
(483, 71, 93, NULL, '2017-05-08 10:31:27'),
(485, 110, 98, NULL, '2017-05-11 15:46:27'),
(486, 110, 93, NULL, '2017-05-11 15:46:34'),
(487, 110, 92, NULL, '2017-05-11 15:47:03'),
(488, 110, 85, NULL, '2017-05-11 15:47:43'),
(489, 110, 83, NULL, '2017-05-11 15:47:46'),
(490, 110, 82, NULL, '2017-05-11 15:47:51'),
(491, 110, 78, NULL, '2017-05-11 15:48:09'),
(492, 110, 55, NULL, '2017-05-11 15:48:28'),
(493, 110, 40, NULL, '2017-05-11 15:48:31'),
(494, 110, 39, NULL, '2017-05-11 15:48:36'),
(495, 110, 33, NULL, '2017-05-11 15:48:49'),
(497, 110, 29, NULL, '2017-05-11 15:49:09'),
(498, 110, 28, NULL, '2017-05-11 15:49:12'),
(499, 110, 99, NULL, '2017-05-11 16:38:06'),
(500, 32, 100, NULL, '2017-05-17 11:06:30'),
(501, 32, 57, NULL, '2017-05-18 22:32:14'),
(504, 32, 102, NULL, '2017-05-23 12:16:14'),
(505, 32, 103, NULL, '2017-05-27 15:45:19'),
(506, 33, 84, NULL, '2017-05-30 11:35:06'),
(507, 33, 71, NULL, '2017-05-30 11:35:46'),
(508, 38, 96, NULL, '2017-06-02 05:39:24'),
(509, 38, 93, NULL, '2017-06-02 05:39:31'),
(511, 41, 104, NULL, '2017-06-18 16:51:10'),
(512, 41, 103, NULL, '2017-06-18 16:51:51'),
(513, 41, 102, NULL, '2017-06-18 16:52:03'),
(514, 41, 88, NULL, '2017-06-18 16:52:23'),
(515, 41, 82, NULL, '2017-06-18 16:53:05'),
(516, 24, 104, NULL, '2017-06-19 05:31:18'),
(518, 32, 104, NULL, '2017-06-19 06:19:48'),
(519, 57, 104, NULL, '2017-06-19 07:25:08'),
(520, 32, 101, NULL, '2017-06-19 07:50:39'),
(521, 32, 105, NULL, '2017-06-20 13:46:06'),
(523, 24, 99, NULL, '2017-06-20 13:55:49'),
(524, 32, 89, NULL, '2017-06-27 13:13:21'),
(525, 119, 103, NULL, '2017-07-03 04:53:01'),
(526, 119, 125, NULL, '2017-07-04 21:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `like_unlike_startupsposts`
--

CREATE TABLE IF NOT EXISTS `like_unlike_startupsposts` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` int(2) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_unlike_startupsposts`
--

INSERT INTO `like_unlike_startupsposts` (`id`, `user_id`, `post_id`, `type`, `timestamp`) VALUES
(1, 3, 8, NULL, '2017-02-25 11:32:11'),
(2, 3, 7, NULL, '2017-02-25 11:32:11'),
(13, 3, 25, NULL, '2017-03-08 16:37:26'),
(15, 3, 9, NULL, '2017-03-08 16:37:36'),
(17, 3, 10, NULL, '2017-03-30 15:24:40'),
(18, 32, 16, NULL, '2017-04-03 06:40:47'),
(20, 57, 1, NULL, '2017-04-05 18:20:41'),
(22, 32, 1, NULL, '2017-04-14 06:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE IF NOT EXISTS `merchants` (
`merchants_id` int(11) NOT NULL,
  `merchants_orgname` varchar(100) NOT NULL,
  `merchants_email` varchar(100) NOT NULL,
  `merchants_pass` varchar(100) NOT NULL,
  `merchants_startingdate` date NOT NULL,
  `merchants_endingdate` date NOT NULL,
  `merchants_contact` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`msg_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `msg_topic` text NOT NULL,
  `reply` text NOT NULL,
  `status` text NOT NULL,
  `msg_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `sender`, `receiver`, `msg_topic`, `reply`, `status`, `msg_date`) VALUES
(64, 27, 29, 'Hiii....\r\nThis is Sandeep (c-sec), did u start writing?', 'no_reply', 'read', '2017-04-02'),
(65, 29, 28, 'hi\r\n', 'no_reply', 'read', '2017-04-02'),
(66, 32, 27, 'Hi Sandeep !', 'no_reply', 'read', '2017-04-02'),
(67, 32, 24, 'hi Bro!', 'no_reply', 'read', '2017-04-02'),
(68, 29, 24, 'bro i posted 2 times my article but it is not uploading\r\n', 'no_reply', 'read', '2017-04-02'),
(69, 29, 27, 'i posted two times the article but it is not uploading', 'no_reply', 'read', '2017-04-02'),
(70, 27, 29, 'y? have u enquired snrs', 'no_reply', 'read', '2017-04-02'),
(71, 27, 29, 'hiii bro', 'no_reply', 'read', '2017-04-02'),
(72, 29, 32, 'bro  i am trying to post my article but it is not publishing\r\n', 'no_reply', 'read', '2017-04-02'),
(73, 27, 29, 'bhaiya ippudu okasari chudu', 'no_reply', 'read', '2017-04-02'),
(74, 27, 29, 'sry ,wrong msg', 'no_reply', 'read', '2017-04-02'),
(75, 27, 29, 'bro ippudu okasari chuudu', 'no_reply', 'read', '2017-04-02'),
(76, 24, 29, 'We should approve u r article .   Then it will upload OK naa!!!', 'no_reply', 'read', '2017-04-02'),
(77, 24, 29, 'No need to worry!!! We r approving 2marrow.  ', 'no_reply', 'read', '2017-04-02'),
(78, 32, 43, 'hi rams', 'no_reply', 'read', '2017-04-03'),
(79, 32, 43, 'once check now', 'no_reply', 'read', '2017-04-03'),
(80, 47, 0, 'hi pavan how tos end frnd request in our media\r\n', 'no_reply', 'read', '2017-04-03'),
(81, 42, 49, 'em chesdam mari ? ', 'no_reply', 'read', '2017-04-03'),
(82, 42, 48, 'pampina pic chudu ', 'no_reply', 'read', '2017-04-03'),
(83, 49, 24, 'hi anna\r\nidhi indaka varki vere laaga vachindhi lyk ante\r\ncontent 3 parts lekka divide ayndhi\r\nippud mottam okate undhi\r\nso copy chyyaniki vasthaleh\r\n', 'no_reply', 'read', '2017-04-03'),
(84, 32, 57, 'change it ra....', 'no_reply', 'read', '2017-04-04'),
(85, 57, 32, 'changed ra\r\n', 'no_reply', 'read', '2017-04-04'),
(86, 32, 57, 'check messaging system....', 'no_reply', 'read', '2017-04-04'),
(87, 57, 37, 'Hiii Bro..??\r\n', 'no_reply', 'read', '2017-04-04'),
(88, 57, 32, 'working bro', 'no_reply', 'read', '2017-04-04'),
(89, 37, 57, 'Hello bro', 'no_reply', 'read', '2017-04-04'),
(90, 56, 24, 'Hlo', 'no_reply', 'read', '2017-04-04'),
(91, 32, 56, 'Hi Vinuthna', 'no_reply', 'read', '2017-04-04'),
(92, 24, 56, 'Try chey okasri', 'no_reply', 'read', '2017-04-04'),
(93, 24, 56, 'Once u try', 'no_reply', 'read', '2017-04-04'),
(94, 62, 32, 'How we can tag any of the person?', 'no_reply', 'read', '2017-04-05'),
(95, 32, 62, 'Here no option to tag bro..... Becz every post will reach to everyone.', 'no_reply', 'read', '2017-04-05'),
(96, 32, 69, 'hi bro do u have any dought in uploading you tube videos\r\n', 'no_reply', 'read', '2017-04-05'),
(97, 76, 24, 'Hi dude', 'no_reply', 'read', '2017-04-05'),
(98, 76, 79, 'Hi ', 'no_reply', 'unread', '2017-04-05'),
(99, 22, 38, 'reyi post chesaa ra\r\nchudu okasari 1 hr lo i think it will be posted\r\n', 'no_reply', 'read', '2017-04-05'),
(100, 43, 0, 'hi papa', 'no_reply', 'read', '2017-04-05'),
(101, 43, 53, 'hi papa', 'no_reply', 'read', '2017-04-05'),
(102, 38, 22, 'Raale kada Ra nka', 'no_reply', 'read', '2017-04-05'),
(103, 22, 32, 'bro i published the post but still i cannot see it\r\n', 'no_reply', 'read', '2017-04-05'),
(104, 32, 22, 'wait sourab i will check it out', 'no_reply', 'read', '2017-04-05'),
(105, 57, 43, 'Hii ra Reddy\r\n', 'no_reply', 'read', '2017-04-05'),
(106, 43, 57, 'Hi', 'no_reply', 'read', '2017-04-06'),
(107, 69, 32, 'No bro', 'no_reply', 'read', '2017-04-06'),
(108, 43, 53, 'hi pentamoham', 'no_reply', 'unread', '2017-04-06'),
(109, 32, 43, 'Arey font edit chey ra.....', 'no_reply', 'read', '2017-04-06'),
(110, 43, 32, 'k\r\n', 'no_reply', 'read', '2017-04-06'),
(111, 24, 76, 'Post chesava article', 'no_reply', 'read', '2017-04-07'),
(112, 24, 76, 'Post chesava article', 'no_reply', 'read', '2017-04-07'),
(113, 22, 84, 'hi mama naa post chudu ra ala undhoo story of a boy and a girl\r\n', 'no_reply', 'read', '2017-04-07'),
(114, 32, 57, 'okey ra', 'no_reply', 'read', '2017-04-08'),
(115, 62, 32, 'I applied for internship in our media.\r\nHow could I check my status of my application?', 'no_reply', 'read', '2017-04-10'),
(116, 32, 62, 'Very soon we will be contacting u .....', 'no_reply', 'read', '2017-04-10'),
(117, 24, 32, 'hlo', 'no_reply', 'read', '2017-04-10'),
(118, 76, 24, 'M article ra', 'no_reply', 'read', '2017-04-11'),
(119, 24, 76, 'students productivity ra\r\n', 'no_reply', 'unread', '2017-04-11'),
(120, 24, 32, 'hira\r\n', 'no_reply', 'read', '2017-04-11'),
(121, 32, 24, 'hi ra', 'no_reply', 'read', '2017-04-11'),
(122, 91, 57, 'Hlo venu', 'no_reply', 'read', '2017-04-13'),
(123, 56, 32, 'Hlo', 'no_reply', 'read', '2017-04-13'),
(124, 32, 56, 'Hi vinnu', 'no_reply', 'read', '2017-04-13'),
(125, 56, 32, 'Happy unav ga full ga', 'no_reply', 'read', '2017-04-13'),
(126, 32, 56, 'happy as well as feeling pressure!', 'no_reply', 'read', '2017-04-13'),
(127, 56, 32, 'Haha bt  ur straggle has given a grt  success', 'no_reply', 'read', '2017-04-14'),
(128, 32, 56, 'yes! But we r just in starting stage ...... need to scale up a lot....and we need to plan for that....\r\nbut anta chesna ma haritha aytey radu kada ......\r\nmsg avarke chupiyaku champuta', 'no_reply', 'read', '2017-04-14'),
(129, 56, 32, 'Haha haha tq naku epati varaku thought ledu epdu echinanduku', 'no_reply', 'read', '2017-04-14'),
(130, 32, 56, 'niiiii', 'no_reply', 'read', '2017-04-14'),
(131, 24, 93, 'Hlooo', 'no_reply', 'unread', '2017-04-14'),
(132, 24, 93, 'Ala undiii sitee', 'no_reply', 'unread', '2017-04-14'),
(133, 56, 24, 'Hlo anna', 'no_reply', 'read', '2017-04-14'),
(134, 24, 99, 'hloooo\r\n', 'no_reply', 'unread', '2017-04-17'),
(135, 56, 32, 'Hlo annaya', 'no_reply', 'read', '2017-04-18'),
(136, 32, 56, 'Hi vinnu', 'no_reply', 'read', '2017-04-18'),
(137, 91, 32, 'Hlo mr.pavan kumar', 'no_reply', 'read', '2017-04-21'),
(138, 32, 91, 'Hi mahi', 'no_reply', 'read', '2017-04-21'),
(139, 32, 32, 'Bbdx\r\n', 'no_reply', 'read', '2017-04-29'),
(140, 91, 32, 'Hii ra', 'no_reply', 'read', '2017-05-11'),
(141, 91, 32, 'Hii ra', 'no_reply', 'read', '2017-05-11'),
(142, 32, 91, 'hi mahi........ future lo chat chedam here....', 'no_reply', 'unread', '2017-05-12'),
(143, 24, 41, 'hi jeevan\r\n', 'no_reply', 'read', '2017-06-18'),
(144, 41, 24, 'arey chat box ni implement cheyandi\r\n', 'no_reply', 'read', '2017-06-19'),
(145, 24, 112, 'hi', 'no_reply', 'unread', '2017-06-22'),
(146, 32, 57, 'hjgfyfg', 'no_reply', 'unread', '2017-06-22'),
(147, 32, 91, 'Hello', 'no_reply', 'unread', '2017-06-27'),
(148, 32, 91, 'Hello', 'no_reply', 'unread', '2017-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `mst_chatmessage`
--

CREATE TABLE IF NOT EXISTS `mst_chatmessage` (
`id` int(11) NOT NULL,
  `sender_id` varchar(200) NOT NULL,
  `receiver_id` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `message_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=279 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_chatmessage`
--

INSERT INTO `mst_chatmessage` (`id`, `sender_id`, `receiver_id`, `message`, `message_time`, `status`) VALUES
(27, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'helloooo', '2017-06-01 12:41:14', 1),
(39, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'ddddddddddddddddddd', '2017-06-01 12:41:14', 1),
(38, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'helllo', '2017-06-01 12:41:14', 1),
(37, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'helllo', '2017-06-01 12:41:14', 1),
(36, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sadfasd', '2017-06-01 12:41:14', 1),
(35, 'sourab@lifeextracts.com', 'devarapallysandeepreddy@gmail.com', 'sadfads', '2017-06-01 12:41:14', 1),
(34, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asdfasdf', '2017-06-01 12:41:14', 1),
(33, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'rsfsadf', '2017-06-01 12:41:14', 1),
(32, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdfds', '2017-06-01 12:41:14', 1),
(31, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'hi reetu', '2017-06-01 12:41:14', 1),
(30, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'aaammmaaarr', '2017-05-31 07:59:29', 1),
(29, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'arunnnn', '2017-05-31 07:56:25', 1),
(28, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'hi suarabh', '2017-05-31 06:13:59', 1),
(40, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'ttttttttttttttttttttttttttttttttttt', '2017-06-01 12:41:14', 1),
(41, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'ffffffffffffff', '2017-06-01 12:41:14', 1),
(42, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'szdfsadf', '2017-06-01 12:41:14', 1),
(43, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asefdsa', '2017-06-01 12:41:14', 1),
(44, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asefdsa', '2017-06-01 12:41:14', 1),
(45, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asefdsa', '2017-06-01 12:41:14', 1),
(46, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdgfsd', '2017-06-01 12:41:14', 1),
(47, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'fffffffffffffffffffffffff', '2017-06-01 12:41:14', 1),
(48, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'ggggggggggggggggg', '2017-06-01 12:41:14', 1),
(49, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'aaaaaaaaaaaaaaaaaaa', '2017-06-01 12:41:14', 1),
(50, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdfsa', '2017-05-31 09:41:44', 1),
(123, 'sourab@lifeextracts.com', 'kotasaipravalika143@gmail.com', 'asdf asefd a asdfa fsafasdf asdf ', '2017-06-02 14:17:19', 1),
(52, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'aaaarrrrrnn', '2017-06-01 12:41:14', 1),
(53, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdfasdf', '2017-05-31 10:14:45', 1),
(54, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdfasdf', '2017-05-31 10:14:51', 1),
(55, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'raaaaaaaaaaaaaaaaaj', '2017-06-01 12:41:14', 1),
(56, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'rajesh', '2017-05-31 10:23:48', 1),
(57, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ttttttttttaare', '2017-05-31 10:23:48', 1),
(58, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'hhhhhhhhhhhhhhaa', '2017-05-31 10:24:39', 1),
(59, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'rafsdasdf', '2017-06-01 12:41:14', 1),
(60, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ddddd', '2017-05-31 10:27:29', 1),
(61, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sadfasdf', '2017-06-01 12:41:14', 1),
(62, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'szdfsadfsd', '2017-06-01 12:41:14', 1),
(63, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'zfdsd', '2017-06-01 12:41:14', 1),
(64, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdfasdf', '2017-06-01 12:41:14', 1),
(65, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asdf', '2017-06-01 12:41:14', 1),
(66, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'szdfsad', '2017-06-01 12:41:14', 1),
(67, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'fdsgfd', '2017-06-01 12:41:14', 1),
(68, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sadfsadfas', '2017-06-01 12:41:14', 1),
(69, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asdasd', '2017-06-01 12:41:14', 1),
(70, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdasfsa', '2017-05-31 10:52:51', 1),
(71, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asdfasd', '2017-06-01 12:41:14', 1),
(72, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'aaaaaaaaaaaaaaaaaaa', '2017-05-31 10:53:44', 1),
(73, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'helllloo', '2017-06-01 12:41:14', 1),
(74, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdsdsdsd', '2017-05-31 10:55:05', 1),
(75, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdsds', '2017-06-01 12:41:14', 1),
(76, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'ttttttttttttttttttttttttttttttttttttttttttttttttttttttttt', '2017-06-01 12:41:14', 1),
(77, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asfdasdfasdf', '2017-05-31 11:15:40', 1),
(78, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'adsfasd', '2017-05-31 11:18:51', 1),
(79, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdfasd', '2017-05-31 11:18:58', 1),
(80, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdfadsf', '2017-05-31 11:19:00', 1),
(96, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdfgsdfg', '2017-06-03 04:18:23', 1),
(97, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sfdgsdfg', '2017-06-03 04:18:23', 1),
(84, 'sourab@lifeextracts.com', 'devarapallysandeepreddy@gmail.com', 'zdcszd', '2017-06-01 12:41:14', 0),
(95, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'ttttttttttttttttt', '2017-06-03 04:18:23', 1),
(94, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdzfsdf', '2017-06-03 04:18:23', 1),
(93, 'sourab@lifeextracts.com', 'devarapallysandeep@gmail.com', 'sadfasdf', '2017-06-02 10:52:13', 0),
(92, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'hellloo', '2017-06-06 15:57:52', 1),
(91, 'sourab@lifeextracts.com', 'kakulavaram.navyareddy@gmail.com', 'asfdasdf', '2017-06-02 10:24:15', 0),
(90, 'sourab@lifeextracts.com', 'devarapallysandeep@gmail.com', 'sdfsad', '2017-06-02 10:15:28', 0),
(89, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'adsfasdfasdf', '2017-06-06 15:57:52', 1),
(88, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'asdfasdfsadf', '2017-06-06 15:57:52', 1),
(87, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'zsdfsdf', '2017-06-06 15:57:52', 1),
(86, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'helloooo', '2017-06-03 04:18:23', 1),
(98, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdfgsdf', '2017-06-03 04:18:23', 1),
(99, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdfgsdf', '2017-06-03 04:18:23', 1),
(100, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'asfsadfas', '2017-06-06 15:57:52', 1),
(101, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'zsdfasdf', '2017-06-06 15:57:52', 1),
(102, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'asdfasdf', '2017-06-06 15:57:52', 1),
(103, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'asdfadsfas', '2017-06-06 15:57:52', 1),
(104, 'sourab@lifeextracts.com', 'devarapallysandeep@gmail.com', 'hello', '2017-06-02 11:57:14', 0),
(105, 'sourab@lifeextracts.com', 'devarapallysandeep@gmail.com', 'how are you', '2017-06-02 11:57:27', 0),
(171, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'dddddddddddddddddd', '2017-06-03 04:53:55', 1),
(170, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ffffffffffffffff', '2017-06-03 04:53:55', 1),
(169, 'ritudec4@gmail.com', 'kotasaipravalika143@gmail.com', 'dfsdf', '2017-06-03 04:17:55', 0),
(168, 'ritudec4@gmail.com', 'kotasaipravalika143@gmail.com', 'sdfgsdf', '2017-06-03 04:14:06', 0),
(167, 'kotasaipravalika143@gmail.com', 'ritudec4@gmail.com', 'ddddd', '2017-06-02 15:01:55', 1),
(166, 'ritudec4@gmail.com', 'kotasaipravalika143@gmail.com', 'asdfasddddddddddddddddd', '2017-06-02 15:00:54', 1),
(165, 'kotasaipravalika143@gmail.com', 'ritudec4@gmail.com', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '2017-06-02 15:00:31', 1),
(164, 'ritudec4@gmail.com', 'kotasaipravalika143@gmail.com', 'asdADSasdsadsadddddddddddddddddddddddd', '2017-06-02 15:00:24', 1),
(163, 'kotasaipravalika143@gmail.com', 'ritudec4@gmail.com', 'sadfcdsafasd', '2017-06-02 15:00:15', 1),
(162, 'kotasaipravalika143@gmail.com', 'ritudec4@gmail.com', 'gggggggggggggggggggg', '2017-06-02 14:57:57', 1),
(161, 'ritudec4@gmail.com', 'kotasaipravalika143@gmail.com', 'hhhhhhhhhhhhhhhhhh', '2017-06-02 14:57:43', 1),
(160, 'kotasaipravalika143@gmail.com', 'ritudec4@gmail.com', 'hello', '2017-06-02 14:57:43', 1),
(172, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'dfghdfg', '2017-06-03 04:53:55', 1),
(173, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'fffffffffffffffffffffffffffffffffffffff', '2017-06-03 04:54:07', 1),
(174, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdsaasdfasdfas', '2017-06-03 04:54:17', 1),
(175, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asdfasdf', '2017-06-03 04:54:29', 1),
(176, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdfasdf', '2017-06-03 04:55:45', 1),
(177, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdfasdfffffffffffffffffffffffffffffffff', '2017-06-03 04:56:01', 1),
(178, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdfsa', '2017-06-03 05:04:53', 1),
(179, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'asdfasdfafffffffffffffffffffffffffffffffffffff', '2017-06-03 05:05:13', 1),
(180, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'asdfadsfdsaf', '2017-06-03 05:06:25', 1),
(181, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdfdsaffffffffffffffffff', '2017-06-03 05:06:41', 1),
(182, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'dd', '2017-06-03 05:06:49', 1),
(183, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdcdsfdsf', '2017-06-03 05:07:58', 1),
(184, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdffffffffffffffffffffffffffffffffff', '2017-06-03 05:08:05', 1),
(185, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'sdddddddddddddddddddddddddddd', '2017-06-03 05:08:38', 1),
(186, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'fffffffffffffffffffffffffffffffffff', '2017-06-03 05:09:22', 1),
(187, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ggggggggggggggggggggggggggggggggg', '2017-06-03 05:09:35', 1),
(188, 'sourab@lifeextracts.com', 'kotasaipravalika143@gmail.com', 'dsdfs', '2017-06-03 07:10:09', 0),
(189, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'dddddddddddd', '2017-06-03 07:12:04', 1),
(190, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fffffffffffffff', '2017-06-03 07:13:02', 1),
(191, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'zdsfsfs', '2017-06-03 07:19:11', 1),
(192, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdsdsd', '2017-06-03 07:19:35', 1),
(193, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdsdsdsd', '2017-06-03 07:19:44', 1),
(194, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdsdsdsddddd', '2017-06-03 07:19:49', 1),
(195, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdsdsdsddddd', '2017-06-03 07:19:50', 1),
(196, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdsdsdsddddd', '2017-06-03 07:19:50', 1),
(197, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'sdsdsdsddddd', '2017-06-03 07:19:51', 1),
(198, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ddddddddddddd', '2017-06-03 07:20:07', 1),
(199, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'dddd', '2017-06-03 07:21:25', 1),
(200, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'dddd', '2017-06-03 07:21:28', 1),
(201, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ggggggggggggggggggggg', '2017-06-03 07:21:35', 1),
(202, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ggggggggggggggggggggg', '2017-06-03 07:21:36', 1),
(203, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ggggggggggggggggggggg', '2017-06-03 07:21:37', 1),
(204, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ggggggggggggggggggggg', '2017-06-03 07:21:40', 1),
(205, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fff', '2017-06-03 07:22:15', 1),
(206, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fff', '2017-06-03 07:22:18', 1),
(207, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ffffffffffff', '2017-06-03 07:22:55', 1),
(208, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', '', '2017-06-03 07:22:56', 1),
(209, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fffffffffffffffff', '2017-06-03 07:23:04', 1),
(210, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ffffffffffffff', '2017-06-03 07:23:52', 1),
(211, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fffffffffffffffffff', '2017-06-03 07:23:56', 1),
(212, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fffffffffffffffffffff', '2017-06-03 07:24:01', 1),
(213, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fffffffffffffffffff', '2017-06-03 07:31:52', 1),
(214, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'dddddddddddddd', '2017-06-03 07:35:51', 1),
(215, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fffffffffffffffff', '2017-06-03 07:35:58', 1),
(216, 'ritudec4@gmail.com', 'bharath.hari444@gmail.com', 'ffffffffffffffff', '2017-06-03 07:38:34', 0),
(217, 'ritudec4@gmail.com', 'bharath.hari444@gmail.com', 'dddddddddddddd', '2017-06-03 07:39:39', 0),
(218, 'ritudec4@gmail.com', 'kotasaipravalika143@gmail.com', 'ddddddddddddd', '2017-06-03 07:41:25', 0),
(219, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'fffffffffffffff', '2017-06-03 07:54:07', 1),
(220, 'ritudec4@gmail.com', 'kotasaipravalika143@gmail.com', 'ddd', '2017-06-03 08:58:09', 0),
(221, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'ssss', '2017-06-03 08:58:59', 1),
(222, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'ffff', '2017-06-03 09:05:34', 1),
(223, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'aaaaaaaaaaaaa', '2017-06-03 09:06:39', 1),
(224, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ddddddddddddd', '2017-06-03 09:10:29', 1),
(225, 'sourab@lifeextracts.com', 'ritudec4@gmail.com', 'fffffffffff', '2017-06-03 09:17:13', 1),
(226, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', '', '2017-06-03 09:17:25', 1),
(227, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', '', '2017-06-03 09:17:27', 1),
(228, 'ritudec4@gmail.com', 'sourab@lifeextracts.com', 'ssss', '2017-06-03 09:45:16', 1),
(229, 'ritudec4@gmail.com', 'mahimatiwari@gmail.com', 'ggggggggggggggggg', '2017-06-03 14:25:25', 0),
(230, 'bharath.hari444@gmail.com', 'sourab@lifeextracts.com', 'hfsdkjf', '2017-06-22 07:12:48', 1),
(231, 'sourab@lifeextracts.com', 'devarapallysandeep@gmail.com', 'hello hi', '2017-06-22 07:05:38', 0),
(232, 'sourab@lifeextracts.com', 'devarapallysandeep@gmail.com', 'hsdjasjkdks', '2017-06-22 07:05:46', 0),
(233, 'sourab@lifeextracts.com', 'devarapallysandeep@gmail.com', 'sdfsfsdfsd vcsdfsdf', '2017-06-22 07:05:55', 0),
(234, 'sourab@lifeextracts.com', 'devarapallysandeep@gmail.com', 'hhfyui', '2017-06-22 07:08:11', 0),
(235, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'jgdfkgjdf', '2017-06-25 17:46:26', 1),
(236, 'sourab@lifeextracts.com', 'bharath.hari444@gmail.com', 'sdjfnsdkf', '2017-06-25 17:46:26', 1),
(237, 'bharath.hari444@gmail.com', 'sourab@lifeextracts.com', 'hi', '2017-06-25 17:46:33', 0),
(238, 'en.pavankumar@gmail.com', 'bharath.hari444@gmail.com', 'Vhgc', '2017-06-27 05:29:39', 1),
(239, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', 'hi', '2017-06-27 05:29:39', 0),
(240, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', 'Send message...', '2017-06-27 05:29:40', 0),
(241, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', 'hi hello', '2017-06-27 05:29:52', 0),
(242, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', 'hi', '2017-06-27 05:30:40', 0),
(243, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', 'Send message...', '2017-06-27 05:31:44', 0),
(244, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', '', '2017-06-27 05:31:45', 0),
(245, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', '', '2017-06-27 05:31:46', 0),
(246, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', '', '2017-06-27 05:31:46', 0),
(247, 'bharath.hari444@gmail.com', 'en.pavankumar@gmail.com', '', '2017-06-27 05:31:46', 0),
(248, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', 'Send message...', '2017-06-27 09:39:52', 0),
(249, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', 'df', '2017-06-27 09:40:09', 0),
(250, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', 'ff/', '2017-06-27 09:40:14', 0),
(251, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', 'dffg', '2017-06-27 09:40:18', 0),
(252, 'en.pavankumar@gmail.com', 'sourab@lifeextracts.com', 'hello', '2017-06-27 13:15:05', 0),
(253, 'en.pavankumar@gmail.com', 'sourab@lifeextracts.com', 'hello', '2017-06-27 13:15:14', 0),
(254, 'rajan.kumar@outlook.com', 'manishgupta2879@gmail.com', 'hi', '2017-06-29 09:29:06', 1),
(255, 'manishgupta2879@gmail.com', 'gangasaketh97@gmail.com', '', '2017-06-29 09:30:04', 0),
(256, 'atulvani2@gmail.com', 'bharath.hari444@gmail.com', 'hiii', '2017-06-29 10:49:55', 0),
(257, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', 'Send message...', '2017-06-29 13:29:53', 0),
(258, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', 'Send message...', '2017-06-29 13:29:54', 0),
(259, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', '', '2017-06-29 13:29:54', 0),
(260, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', 'Send message...', '2017-06-29 13:30:00', 0),
(261, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', '', '2017-06-29 13:30:01', 0),
(262, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', 'Send message...', '2017-06-29 13:30:07', 0),
(263, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', '', '2017-06-29 13:30:08', 0),
(264, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', '', '2017-06-29 13:30:08', 0),
(265, 'bharath.hari444@gmail.com', 'ramireddyseelam2@gmail.com', '', '2017-06-29 13:30:08', 0),
(266, 'deepaksharma.ina5@gmail.com', 'sourab@lifeextracts.com', 'hhfkf', '2017-06-30 15:09:39', 0),
(267, 'deepaksharma.ina5@gmail.com', 'sourab@lifeextracts.com', 'cdsjdk', '2017-06-30 15:09:46', 0),
(268, 'deepaksharma.ina5@gmail.com', 'bharath.hari444@gmail.com', 'djhdgjwh', '2017-07-01 08:44:11', 1),
(269, 'deepaksharma.ina5@gmail.com', 'bharath.hari444@gmail.com', 'fjegfeu', '2017-07-01 08:44:11', 1),
(270, 'deepaksharma.ina5@gmail.com', 'sourab@lifeextracts.com', 'hi every one', '2017-07-01 08:29:14', 0),
(271, 'deepaksharma.ina5@gmail.com', 'saipriya243@gmail.com', 'fdewgfwe', '2017-07-01 08:29:46', 0),
(272, 'deepaksharma.ina5@gmail.com', 'bharath.hari444@gmail.com', 'bharath', '2017-07-01 08:44:11', 1),
(273, 'bharath.hari444@gmail.com', 'deepaksharma.ina5@gmail.com', 'dfjhe', '2017-07-03 11:23:31', 1),
(274, 'deepaksharma.ina5@gmail.com', 'bharath.hari444@gmail.com', '', '2017-07-03 11:23:43', 0),
(275, 'deepaksharma.ina5@gmail.com', 'bharath.hari444@gmail.com', 'scnksjcnhksc', '2017-07-03 11:24:01', 0),
(276, 'deepaksharma.ina5@gmail.com', 'sourab@lifeextracts.com', 'asdlsaknl', '2017-07-03 13:41:18', 0),
(277, 'deepaksharma.ina5@gmail.com', 'ritudec4@gmail.com', 'csmncsa', '2017-07-03 13:41:47', 0),
(278, 'deepaksharma.ina5@gmail.com', 'mahimatiwari.997@gmail.com', 'xzcfmlas', '2017-07-05 08:21:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `cat_id` int(50) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`cat_id`, `cat_title`) VALUES
(1, 'Technology'),
(2, 'Mobiles'),
(3, 'Movies'),
(4, 'Sports'),
(5, 'Love Stories'),
(6, 'Motivational Stories'),
(7, 'Novels'),
(8, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `newsposts`
--

CREATE TABLE IF NOT EXISTS `newsposts` (
`post_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_keywords` varchar(255) NOT NULL,
  `post_date` text NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_image` text NOT NULL,
  `post_alt` varchar(100) NOT NULL,
  `post_content` text NOT NULL,
  `post_newstatus` varchar(50) NOT NULL,
  `view` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsposts`
--

INSERT INTO `newsposts` (`post_id`, `user_id`, `category_id`, `post_title`, `post_keywords`, `post_date`, `post_author`, `post_image`, `post_alt`, `post_content`, `post_newstatus`, `view`) VALUES
(47, 33, 5, 'The Man Who Changed My Life : Part-1', 'The man who changed my life ', '04-03-17', 'HarshiniReddy', 'PicsArt_04-02-06.55.24.png', 'post_alt', '<blockquote>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Joined the hostel of SSN college of engineering with lot of meek, anxiety and scare. Don&#39;t know what might be the reason but I was sick at heart. Leaving parents and new environment might be the reasons for this unhappiness, but something was killing my mind and heart. I&#39;m unaware of the reason behind it. I used to be like gloomy and ill-humoured everywhere and with every person who is new to me. The environment was wave less wherever I used to be. I was self contained and unapproachable. I didn&#39;t know what might be the reason for it, I just used to incorporate myself in my work every time. I had a friend in the hostel with whom I used to share some of my feelings. Aksha is her name.</p>\r\n</blockquote>\r\n\r\n<blockquote>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;The classes have been started and everyone was having fun in the college. Me and Aksha used to attend classes and we were continuing with our work. Later on, we became friends with some of girls and guys in our class. We all became a mob. We were used to bunk our classes and go for movies, go on Sunday rides and had fun around. But I used to be like reserved and just be like existed with them without really enjoying these little pleasures. Concurrently, I was observing a man in my gang, named Ayan. while others enjoy life to some extent, he enjoys his life to it&#39;s full potential, he enjoys little-little happiness in his life. He is an altruistic, optimist and is very energetic. He is very fascinating to all and he is the person full of grace. He gives respect to elder people and even people of age less than him. He hangs out with his friends and with everyone who he likes. He get&#39;s easily mingled with the new people, and the way he talks to different people in different situations astonished me a lot. The thing how he enjoys every moment in his life surprised me. I used to admire him personally. I was little bit free with him sharing my feelings and visions comparing with my other mates. I used to talk to him for hours on phone and we used to sit for hours in the canteens. This was continued for about 6 months.</p>\r\n</blockquote>\r\n\r\n<blockquote>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The days were normal and everything was okay. Suddenly one day, Ayan called me and said &quot;Ananya be ready by 7 in the evening, my inter mates planned a get together and we are going out there. Don&#39;t be late Ananya, I&#39;ll be picking up you at our college main gate. see you soon bye.&quot; He cut the call before I say something. &nbsp;</p>\r\n</blockquote>\r\n\r\n<blockquote>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; He picked me up at our college gate and we were going on our way to Mahabalipuram road. It was first time for me to sit on a bike with a man like him. I was anxious and excited at the same time happy too. I asked him &quot;why are you taking me to your get together?&quot; he smiled,and then replied &quot;Don&#39;t worry they will easily get mingled with you, just wait and see you will have a great time over there.&quot; I gave the response &quot;Ok&quot;. He didn&#39;t say me the place where we going to have the get-together. He took me straight ahead to Marina beach. I was like Oh My God! the place was so beautiful and my eyes were not enough to see such a wonderful beach at night. We sat down near the sea waves and I asked him &quot;where are your mates?&quot; then he hold my hand and said &quot; Ananya I brought you here to express my feelings on you.&quot; I was shocked for a moment and my heart was like raising too high. He admitted to me, &quot;You are a sweet and innocent person who doesn&#39;t harm anyone. You have a strong set of morals and you respect everyone. You are classy and you will do anything for your friends. You are a girl who respects other&#39;s feelings and does anything for her family. I like you and I love your character. I&#39;ll give you the entire happiness in the world. Give me a chance and I&#39;ll keep you forever in my heart. I love you Ananya. Will you accept my love?&quot;</p>\r\n</blockquote>\r\n\r\n<blockquote>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tears rolled down my cheeks and I was unable to speak a word at that moment. I thought &quot;I&#39;m observing him from 6 months and after knowing each and everything about him, I can&#39;t miss him.A person like him is a wonderful gift I would ever get in my life.&quot; I realized that I was happy for every second spent with him and I want that happiness for the rest of my life. But, a thought &quot;does my parents accept him&quot; was killing me inside. I said every little thing about my parents and our culture to him. He gave me assurance that he will impress my parents. Lastly I said &quot;yes I do, I&#39;ll love you until my last breath&quot;. Holding my face gently with his hands he said &quot;Thank you Ananya thank you so much for coming into my life, but you have to promise me on one thing which is very important to me. Will you?&quot;</p>\r\n</blockquote>\r\n', 'approved', 164),
(49, 36, 6, 'PERSONALITY', 'Personality Development', '04-04-17', 'Jyothika Ragolu', '17757828_455730928097495_2083038590_n.jpg', 'post_alt', '<p>Beauty gets the attention but personality gets the heart.</p>\r\n\r\n<p>&rdquo;Personality is to man what perfume is to flower&rdquo;-Charles M.Schwab</p>\r\n\r\n<p>&ldquo;Style is a reflection of your attitude and personality&rdquo;-Shawn Ashmore</p>\r\n\r\n<p>So what do you think personality is? Personality is the combination of qualities that form an individual&rsquo;s distinctive character.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Personality is the combination of an individual thoughts ,characteristics ,behavior ,attitude ,ideas and habits. Because people have different personalities all individuals are not alike. Every individual&rsquo;s life is different so as their personalities. Personality is what which differentiates every other person, people will like you or hate you because of it. Personality is what which builds you up.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>I would like to share a story which makes you understand what exactly personality is.</p>\r\n\r\n<p>A young dark skinned boy who is shy with low self-esteem went to a shop to buy gas balloons. He asked the shop keeper if the black coloured balloon flies high. The shop keeper smiled and said that the colour of the balloon doesn&rsquo;t matter because it is the gas inside the balloon which makes it fly high. The gas inside the balloon is what lifts up the balloon whether it maybe black or green or any other colour.</p>\r\n\r\n<p>Similarly inner personality builds you up and it is what matters. Outer beauty or looks doesn&rsquo;t matter as your personality is what which represents you. If you have an amazing personality then you are an extraordinary person.</p>\r\n\r\n<p>PERSONALITY can either kill or enhance your appearance. Looks may fade away but personality lasts forever.</p>\r\n', 'approved', 46),
(50, 52, 1, 'Boon to drought areas', 'Portable machine converts salt water to pure drinking water', '04-04-17', 'Vireechika gonam', 'Screenshot_2017-04-02-13-13-29-346.jpg', 'post_alt', '<p>&nbsp; &nbsp; &nbsp; &nbsp;It&#39;s time that many people wish come true.A process came into existence which converts salt water to pure drinking water in minutes, which could change the fate of many people, it&#39;s like a boon to the people surviving in drought areas.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;A brand new ultra cheap water purification process seems to be heartening, developed by the researchers of Alexandria university in Egypt.This procedure makes use of a technique called prevaporation to seperate the salt/dirt particles from water,by this process the salt particles get evaporated.And the remaining part is heated and is allowed to vaporize, which is condensed back to get pure drinking water.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Many such water plants are developed all over the world,so in very few days every person will be in reach of pure drinking water even in drought areas.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n', 'approved', 89),
(51, 28, 5, 'PURE VS IMPURE LOVE PART-1', 'It is the very interesting story about love in our present society. Nearly 90% of people believe in impure love and avoids pure love like Arjun..This story is the best example of it..', '04-04-17', 'Navya reddy', 'nav.jpg', 'post_alt', '<h2 style="font-style:italic;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;INTRODUCTION</h2>\r\n\r\n<p>&nbsp; In a village there is a boy named Arjun. He is very rich and has a very proudish behaviour. He talks to people who are in equal status to him.He is fond of talking to the people whom he love...</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; Near by his house, a mile away there lived a girl named Anjani. She lost her hand due to polio, which makes her physically handicapped by birth. But god blessed her with kindheartedness. She is very talktive too....</p>\r\n\r\n<h2 style="font-style:italic;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;CONTENT:</h2>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; One fine day she saw Arjun passing by infront of her house. She likes him very much at first sight. Her feelings towards him hasbeen building up daily by watching him. One day she made an attempt to talk to him. But he ignored and blamed her for her inability...</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;This made Anjani feel sad but hopes to make friendship with Arjun. But her attempts gone in vain and he remains ignoring.....</p>\r\n\r\n<p>&nbsp; &nbsp; But one day Arjun wanted to talk to Anjani... Why Arjun&nbsp;thinks to talk to Anjani...?? To punish her for her behaviour..? OR To talk to her friendly...?</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; GUESS IT....?</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;STORY CONTINUES....!!!!</p>\r\n', 'approved', 70),
(52, 49, 1, 'This VR stimulator will make you a Superhero', 'Hypersuit, VR', '04-04-17', 'Divya Reddy', '2017-04-03-19-55-17.jpg', 'HYPERSUIT', '<p>Have you ever escaped from your real world to enter into a new one ? (Or) Have you ever escaped from your body to enter into a high powered One?</p>\r\n\r\n<p>&nbsp; Well that&#39;s the promise of a Hypersuit.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Everything you&#39;ll see there is definitely virtual but all you&#39;ll experience is more than real . It was developed by CES in Jan 2017. Hypersuit is an extension of your body with infinite possibilities .This will enable you to have superpowers.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;While the Hypersuit sounds like something you wear ,it&#39;s not literally a suit but preferably a machine that you lay on before diving into a VR experience . Here we have armcontrols. A user can control where he flies in virtual reality by moving around these arm controls.Hypersuit uses a movable &#39;exoskeleton&#39; for virtual flight. This Hypersuit has a fan blowing at different air speeds depending on the virtual position .It has 8 censors . This is a full body immersive VR stimulator that depends on arm movements to control the users &#39;flight&#39; .</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; This Hypersuit essentially allows you to become a superhero in a matter of minutes. We can have different experiences from astronaut to deep sea river .It is used not only in gaming inspite of the fact that it&#39;s creators have said that the device could one day be used to train pilots in the military .It is also used in physiotherapy.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; The company said that it plans to start offering the Hypersuit in mid 2017 and they also said that they will not sell the piece directly to customers Instead the company plans to offer Hypersuit as rentals to theme parks,movie theaters,casinos.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Hypersuit won award for the BEST VR TECHNOLOGY OF CES 2017. Hypersuit provides us the safest way to experience the extreme.</p>\r\n', 'approved', 270),
(53, 48, 1, 'Touchless technology that takes you a way ahead', 'Soli, Radar', '04-04-17', 'sreechandanakurella', '17797289_394637954254752_813726129_o.jpg', 'post_alt', '<p>A new gesture-recognition technology developed by the advanced technology and project group of google, uses radio frequency spectrum which is radar to track human hand. Known as Soli, the sensor tracks and recognizes dynamic gestures expressed by fine motion of the fingers and hand. It enables a user to issue commands to a computer by rubbing a thumb and forefinger together in pre-defined patterns. Soli is a radar enabled sensor which has no moving parts, can fit onto a chip, consumes little energy, there is nothing to break and has no lenses.</p>\r\n\r\n<p>Radars have been used to track micro motions and then use that to interact with wearables, internet of things and other computing devices unlike those radars which have been used for many different things to track cars, big objects, satellites and planes.</p>\r\n\r\n<p>According to the project head Ivan Poupyrev, a former scientist for Disney Imagineering &ldquo;Soli sensor technology works by emitting electromagnetic waves in a broad beam. The concept of virtual tools is a key to Soli interactions.&rdquo;</p>\r\n\r\n<p>Soli can be described as a tiny pica radar for gesture sensing. It can be embedded in wearables, phones, computers, cars and lot more devices and used to compose and play music, security passwords, 3D imaging, in car remote control.</p>\r\n\r\n<p>The reason why Soli is able to interpret so much from one radar signal is because of the full gesture recognition pipeline. The various stages of this pipeline are designed to extract specific gesture information from one radar signal that is received at a high frame rate.</p>\r\n\r\n<p>Soli can distinguish complex finger movements and deforming hand shapes within its fields. Soli replaces all kinds of buttons and switches and makes the devices operable remotely. It has very high positional accuracy which means that you can sense the tiniest motions.</p>\r\n\r\n<p>In order to accomplish this with a single chip sensor, they developed a novel radar sensing paradigm with tailored hardware, software and algorithms.</p>\r\n\r\n<p>Soli would not be powerful enough to sense multiple gestures at a time but can detect fine motions with sub-millimeter accuracy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'approved', 269),
(55, 38, 1, 'Top 10 mobile OS', 'top os, best os, mobile os, top 10 mobiles', '04-04-17', 'Shiva Reddy Baddam', 'Photo Collage Maker_eZT4L2 (1).png', 'post_alt', '<p align="center">Top 10 Mobile OS</p>\r\n\r\n<p>For functioning of any electronic device there should be proper interface and instruction carrier between the user and the device. That carrier is called as Operating System (OS). Mobiles also run on an operating system. There are several operating systems for mobiles. Of them all the best 10 are described below in brief according to their reliability and users ratings.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>10) Palm or Garnet OS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This was released in 1996 on pilot 1000 handheld. This OS supports new processors, external SD cards, expansion ports. This is a good smart phone OS with capacitive security features and support to ARM processors. This is a proprietary source(cannot be developed by everyone and needs permission to develop).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>9) Web OS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This was even developed by the palm as its successor. This OS is pushed into number smart phones my well reputed company HP. It is also used in HP manufactured touch pads. This is even a proprietary source. This project wasn&rsquo;t a great success to the developers.</p>\r\n\r\n<p>8) Maemo OS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The foundation for the development of this OS was mad by the Nokia. It is developed to run on the smartphones, tablets. This OS had a menu bar that can take the user to any location. The phone that runs on this OS is Nokia N900.</p>\r\n\r\n<p>7) MeeGo OS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MeeGo was called a mobile platform, but it was designed to run multiple electronic devices including handhelds, in-car devices, television sets, and net books. This was developed as the collaborative form of Nokia&rsquo;s Maemo and Intel&rsquo;s Mobilin. In 2010, Moorestown Tablet PC was introduced at<a href="https://www.computextaipei.com.tw/" target="_blank"> COMPUTEX Taipei</a>, which was also a MeeGo powered device. Most of you will have heard the name Nokia N9, but you will not be aware of the fact that this large selling device is operating on MeeGo. It is an open source operating system.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>6) Symbian OS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Symbian OS is officially the <a href="http://mobilephones.pk/nokia" target="_blank">property of Nokia</a>. It means that any other company will have to take permission from Nokia before using this operating system. Nokia has remained a giant in the low-end mobile market, so after Java Symbian was the most used in the mobile phones till a couple of years ago. Still Symbian is widely used in <strong>low-end phones</strong> but the demand rate has ben continuously decreasing. By upgrading Symbian mobile OS, Nokia has made it capable to run smartphones efficiently. <strong>Symbian ANNA and BELLE</strong> are the two latest updates that are currently used in Nokia&rsquo;s smartphones. Overall, the Symbian OS is excellently designed and is very user-friendly. Symbian is probably the best OS of the times before Android. The mobiles running on this OS are Nokia C6-01, Nokia 603, Nokia 700, Nokia 808 Pure View, Nokia E6 (ANNA) and Nokia 701 (BELLE).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>5) Tizen OS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It is an open source and runs on Linux kernel. It is considered as the updated MeeGo OS by some users. This OS s totally user friendly and has good compatibility with hardware of the devices in which it is used till today. Members of the Tizen Association represent major sectors of the mobility industry, from numerous areas of the world. Current members include telecommunications network operators and electronics manufacturers: Fujitsu, Huawei, Intel, KT, NEC Casio, NTT DoCoMo, Orange, Panasonic, Samsung, SK Telecom, Sprint and Vodafone. The mobiles running on this OS are Samsung Z1, Samsung Z3.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>4) Blackberry OS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Blackberry OS is the property of RIM (Research In Motion) and was first released in 1999. RIM has developed this operating system for its Blackberry line of smartphones. Blackberry is much different from other operating systems. The interface style, as well as the Smartphone design, is also different having a trackball for moving on the menu and a qwerty keyboard. It is a proprietary OS and is sed only in Blackberry manufactured handsets. The mobiles running on this are Blackberry Bold, Blackberry Curve, Blackberry Torch and Blackberry 8520.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3) Windows OS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; All of you will be familiar with Windows OS because it is used in computers all over the world. Windows OS has also been used in mobile phones, but normal mobile phone users find it a bit difficult to operate it but at the same time it was very popular among people who were used to it. This was the case until Nokia and Microsoft joined hands to work together. The latest Windows release by Microsoft is known as Windows 8.1 which has gained immense popularity among all kind of users. With its colorful and user-friendly interface, it has given Windows OS a new life and is currently in demand all over the world. Another reason behind its success is that this latest OS is used in very powerful devices made by Nokia that eventually sold the rights on handset to Microsoft. The devices running on this are Samsung focus, HTC Titan2, all phones of Microsoft Lumia series.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2) iOS:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; iOS was introduced in <strong>29th</strong><strong> </strong><strong>June 2007</strong> when the first iPhone was developed. Since then iOS has been under gone many upgrades and currently the latest one is the iOS 10.3. the beta program also been launched and is currently running for iOS 10.3.2. Apple has still not allowed any other manufacturer to lay hands on its operating system. Unlike Android, Apple has more concentrated on the performance along with appearance. This is the reason that the basic appearance of iOS is almost the same as it was in 2007. Overall it is very user-friendly and is one of the mobile best operating systems in the world. The mobiles running on this are Apple&rsquo;s all iPhones.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Android OS:</li>\r\n</ol>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>September 20th, 2008</strong> was the date when Google released the first Android OS by the name of &lsquo;<strong>Astro</strong>&rsquo;. After sometime next upgraded versions &lsquo;Bender&rsquo; and &lsquo;Cupcake&rsquo; were also released. This was initially made to operate on digital cameras but eventually converted in mobile OS. Google then adopted the trend of naming Android versions after any dessert or a sweet in alphabetical order. The other releases are Donut, &Eacute;clair, Froyo, Gingerbread, Honeycomb, Ice Cream Sandwich, Jelly Bean, Lollipop and Marshmallow (Android 6.0). Noughat (Android 7) is so far the latest Android version from Google. Since the platform is not closed like iOS, there are too many great Android apps built by developers. Just after stepping into the smartphone and tablets market Android gained immense popularity due to its beautiful appearance and efficient working. Many new features were introduced which played a significant role in Android&rsquo;s success. <a href="https://play.google.com/store" target="_blank">Google Play</a> is an official app market that contains millions of different apps for Android devices. Android is the most used OS on the globe. The mobiles running on this are large in number. Some of the companies that manufacture android mobiles are Google, Lenovo powered Motorola, Lenovo, Samsung, One plus, HTC etc.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'approved', 529),
(56, 44, 5, 'Heart breaking... love ðŸ’', 'True love story,  rachana jagadeesh,  heart touching love story,  heart breaking love', '04-04-17', 'Nalla. Rachana jagadeesh', 'IMG_20170403_201543.jpg', 'post_alt', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<big>HEART BREAKING LOVE</big>&nbsp;(part:1)<br />\r\nAFTER 2 YEARS OF BREAKUP&hellip;&hellip;&hellip;!<br />\r\nI found a message in my face book I&rsquo;d<br />\r\nThis was from him..&nbsp;</p>\r\n\r\n<p>He wrote how is you&hellip;&hellip;&hellip;&hellip;hope you are OK.&nbsp;<br />\r\nMy first expression after that was shocking<br />\r\nThe boy whom I never wanted to remember he messaged me<br />\r\nWhole past got splash in my mind<br />\r\nThe time we had spent,<br />\r\nThat time when we dreamt of our beautiful future<br />\r\nI just started crying by remembering that and scrolled through your profile<br />\r\nAfter that I came to know that he was already on another relationship<br />\r\nHe loved that girl very much<br />\r\nBut I wanted to tell him&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;..<br />\r\nHow much I love him<br />\r\nHow much I care him<br />\r\nMy hand went to the key board &hellip;&hellip;&hellip;&hellip;.fingers on the key I write&hellip;&hellip;.nice to see you with her&hellip;&hellip;&hellip;&hellip;&hellip;..and gave him blessings<br />\r\nHe also wanted to say something&hellip;&hellip;&hellip;.<br />\r\nBut I know I should stay away from his life<br />\r\nAs I don&rsquo;t want&hellip;&hellip;&hellip;..that our spoils his new relationship<br />\r\nI simply said &hellip;..i have new bf and I have no love at least no care on him&nbsp;<br />\r\nAlthough I know that I should not lie<br />\r\nBut even today for his happiness was my only preference<br />\r\nI cried for him &hellip;&hellip;&hellip;&hellip;&hellip;.care for him&hellip;&hellip;.loved him&hellip;&hellip;.I have many thoughts for him that I want to put all in a paper and I did it<br />\r\nI wrote a book for him&hellip;But I don&rsquo;t want to give to him<br />\r\nI wanted to tell him&hellip;&hellip;&hellip;&hellip;..yes my heart still beats for you<br />\r\nBut I can&rsquo;t I never will<br />\r\nAfter some months&hellip;&hellip;.again he came to me and said that his new relationship was fake<br />\r\nI trusted him<br />\r\nBut he broken my trust&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;he was in relationship with both<br />\r\nAgain I cried a lot&hellip;&hellip;&hellip;&hellip;..<br />\r\nAfter few days his relationship with her was broken&hellip;&hellip;&hellip;&hellip;..<br />\r\nAgain he came to me<br />\r\nI have no trust on any one else&hellip;&hellip;&hellip;&hellip;..I said It&rsquo;s better to stay away from me<br />\r\nBut I still care for him&nbsp;<br />\r\nBut I don&rsquo;t want him&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.still I care for him</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(But the breakup was because of me&hellip;&hellip;&hellip;.why the story has breakup&hellip;&hellip;.what the story behind the breakup in part: 2)&nbsp;</p>\r\n', 'approved', 528),
(59, 38, 1, 'Is Jio a profit or loss? (Master plan)', 'jio, jio profit or loss, jio plan, jio master plan, jio profits, jio stats', '04-05-17', 'Shiva Reddy Baddam', 'Photo Collage Maker_bBHHxs.png', 'post_alt', '<p align="center">Reliance Jio (Profit or loss)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reliance Jio is the major mobile networking company that made revolution in Indian mobile networking field. The company ruled the field for nearly 7 months with its free services. It has become the fastest growing network in India breaking the records of previous networks. And finally after reaching 100,000,000 Jio users the company has ended its free services that were provided with the name of welcome offer and happy new year offer.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Till 31st march 2017 everything on Jio was free of cost. So what do you think? Did the free services brought company profits or ran it into losses? Let&rsquo;s have a look.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For the people who think it&rsquo;s a loss I ask for an apology. Reliance Jio provided everything for free and ended up with huge profits. A question that is running in everyone&rsquo;s mind- how can someone make profits by providing everything for free? Here is an answer.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The profits to this mobile operator is not actually through calls and SMS or any others. The matter is totally different and is beyond the thoughts of an average citizen. The plan behind Jio was actually making money through apps.</p>\r\n\r\n<p>How did he make money through Apps? Now consider WhatsApp. It is a chat app that is available for free and has no ads even. But still the owner stood in top listings of world&rsquo;s highest earners. The income actually comes through the traffic visiting the servers. Mark Zuckerberg made millions through single WhatsApp.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During early days all the Jio apps stood in top 20 highest grossing apps on Google play. Each app of Jio is equal to a WhatsApp. Some are even greater (income wise due to amount of data they consume). He provided free internet and free access to the apps. People started using most of them like MyJio, JioTV, JioNews, JioMags, JioCinema in appreciative way. Each of the app consume a minimum of 50MB of the data that is greater than total consumption of WhatsApp for 5 days. In this way he made a huge profit moved few places up in the list of top billionaires in India. In fact he stood first after Jio.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And the calls were carried on latest voice over LTE (VOLTE) technology. The technology actually uses the LTE services to carry a call. That means the calls are even charged in form of data packets. So the investment towards it is even very little.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Till today by providing everything for free Reliance Jio actually made people addicts to the internet and the apps. So due to that people for sure wait for a chance to take total benefit of any offer by Reliance Jio. For this kind of users Jio prime is introduced. This offer asks people to recharge Rs.99 and get subscribed to Jio Prime and then provides everything with further monthly recharges.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The plan that suits best for people is recharge of Rs.303/month. when compared to the charges by previous network operators it is a bit more. A customer is charged on an average of Rs.10/day. Already by 30th march 2017 jio has 50% subscriptions i.e., 50,000,000 subscribers. And registrations are going on on a large scale.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Till today company has made great profits by providing everything for free. And now it is charging some money for the same service. So just imagine the profits it is going to make. It may take the owner to one of the top 5 richest people in the world.</p>\r\n', 'approved', 648),
(62, 29, 4, 'April 2nd will be memorable for every Indian. ', 'World cup', '04-05-17', 'myself', 'main_900.jpg', 'Proud moment of every Indian', '<h3>&nbsp; &nbsp; &nbsp; India won the world cup after 28 years on april 2,2011 when they defeated Srilanka by six wickets in the final in mumbai (wankhede stadium).Every India on that day of world cup were with lot of &nbsp;enthusiasm and excitement ......every person had different excitement stories of that day....let us read my story on that day..... before six years.....</h3>\r\n\r\n<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; I was preparing for my annual science exam that fateful night which was on april 3rd,inspite of it i watched the whole match.I joined my friends who were in my neighbourhood and went on the terrace were all my family members sitting and watching the match so interesting .I made a plan of distubing them but inturn it reflected me and i was totally penetrated into the match....the &nbsp;total environment changed, my terrace became wankhede stadium.</h3>\r\n\r\n<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;By the time Srilanka inning ends,we all were very much tensed.We lost shewag as our first wicket ,then we lost Sachin ........ we all started depressing and were not even sitting.It was very unpleasant and painful watching Srilanka cricketers rans after Malinga after Sachin wicket.</h3>\r\n\r\n<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Finally at last what happend we all know.......last over India needed 6&nbsp;runs from 3 balls.Mr.Cool Mahi........ was batting.He ended the match in a tremendous manner creating smile in billions of faces...I was overwhelmed with joy and started shouting India....India....i got off my house and started burning crackers.The whole sky was sparkling with light.The whole media channels speculated &quot;chak de India&quot;.</h3>\r\n\r\n<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;The whole nation started their world cup festival .Roads were&nbsp;blocked .......in my street &quot; VANDEMATARAM &quot;,&quot;MAA &nbsp;TUJHA SALLAM&quot; was waving in my ears.All over the street processiong were going on , byke ralleys they were shouting &quot;jai ho India&quot;.It was my unforgetable moment .My next day was also superb &nbsp;because of yesterday&#39;s achievement.</h3>\r\n\r\n<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; I wont forgot this momement through my whole life time this is all because of .... Cool Mahi and his team.</h3>\r\n\r\n<h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&quot;The &nbsp;28 years of meditation succeded on April 2nd because of.....Mahi and his team&quot;.</h2>\r\n\r\n<h2>&nbsp; Commentary By Ravi Shastri will always be in ears of &nbsp;Every cricket fan..&quot;Dhoni finishes Off in style..A magnificient Shot into the crowd India lifts World Cup after 28 years.&quot;The party starts in the Dressing&quot;.</h2>\r\n\r\n<h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mahi captaincy was very good ..eagerly waiting for next World cup ......2019 under Chikoo captaincy</h2>\r\n', 'approved', 62),
(63, 35, 2, 'XIAOMI REDMI 4-A --features', 'Xiaomi Redmi 4A', '04-06-17', 'SoumyaChanda', '1491478110630.jpg', 'Xiaomi redmi 4-A', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The apple of china Xiaomi has launched a budget phone in India.Named Xiaomi Redmi 4-A ,has become one of the best budget phones for common people.As we know xiaomi has &nbsp;already released many phones in &nbsp;the mi series ,this phone can be best for common people<br />\r\n<strong>PRICE:</strong>RS 5,999/-<br />\r\n<strong>DISPLAY</strong>: This phone has a touch &nbsp;5 inch HD 720 pixel display and it have 296 pixels per inch resolution .That is really good in this price.<br />\r\n<strong>HARDWARE</strong>: Redmi 4A &nbsp;comes with a qualcom snapdragon 425 processor which is &nbsp;a quad-core CPU and runs at 1.4Ghz. It is based on CORTEX A 53 course which is made with 28 nm technology.<br />\r\n<strong>GPU: </strong>It has a ADRENO 308 Game processing unit,a little old one<br />\r\n<strong>CAMERA:</strong>It comes with&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1) 5 megapixel front camera &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2)13megapixel rear camera with a flash light and f2.2 aperture, it has a &nbsp;hybrid sim slot ,it supports volte also.<br />\r\n<strong>BATTERY</strong>: It&nbsp;has a 3120 mAh battery and has no fast charging feature.<br />\r\n<strong>DESIGN</strong>: The phone&#39;s body is made up of polycarbonate but unlike other mobiles its body looks very good and it feels like metal body only .<br />\r\n<strong>COLOR</strong>: It comes in three beautiful colours &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1)Dark Grey &nbsp; &nbsp; &nbsp; 2)gold &nbsp; &nbsp; &nbsp; 3) rose gold &nbsp; &nbsp;<strong>SENSORS:</strong>It has all the basic sensors but its speciality is that it packs a IR blast tool which can be used as remote control for many devices.<br />\r\n<strong>RAM AND STORAGE</strong>:It comes with 2GB ram and 16GB &nbsp;internal storage which is expandable.<br />\r\n<strong>Xiaomi-Redmi-4A-Full-Phone Specifications Review:</strong><br />\r\nBasically , this is a very good budget phone and we get almost everything in this phone .I can say that there are some features which can not be found even in very expensive phones like IR blast tool. Redmi 4-A packs with it an excellent camera that too in a cost of 6000 and in terms of speed also it is a ok as it comes with 2 GB RAM .<br />\r\nIt also have some defects like it is not having any fingerprint scanner and its touch is also comparatively less responsive .I do not say that it should have that but I say that &nbsp;as it does not have these features its price should have been a little lower then this .<br />\r\n<strong>MY OPINION:</strong><br />\r\nLet me share my opinion on this phone. I personally feel that it is handy and will work with normal users but it is not a correct choice for heavy users and gamers beacause it has got a snapdragon 425 which is not that fast and its gpu is also not that good.<br />\r\nI feel that if the price would be kept near to 5000 rupees it would we &nbsp;awesome.I am saying this as it is selling in china at around 400-450 yuan which is around 5000 indian rupee.<br />\r\nIf you want to buy this phone then what my personal suggestion is that if you want to do heavy usage and if you can afford a 1000 more then better buy redmi 3s which is around 7000 rupees and comes with snapdragon 430 and a better gpu.<br />\r\nBut Redmi 4-A is a perfect phone for normal users and it is a very compact and light weight phone so would be handy.</p>\r\n', 'approved', 213),
(64, 35, 6, 'FAILURE IS THE HIGHWAY TO SUCCESS', 'success ,abraham lincoln,colonel sanders,henry ford,wright brothers,edison', '04-06-17', 'SoumyaChanda', 'IMG_20170330_212438_383.JPG', 'Failure is the stepping stone to success', '<p>&nbsp; If you want to succeed then double, triple&hellip;, your failure rate. If you go through history&nbsp;, the success story of all the &nbsp;great personalities &nbsp;had &nbsp;no. of failures. There are many people who used their each failure in building their steps and reached the heights .Some of them were:<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;He is the son of a cobbler . He failed in the business and efforts to became a vice president, defeated in legislative race, lost a senatorial race and &nbsp;many more &hellip;. But at last he had elevated to a heights &nbsp;of president of US. This man was non-other other than <em>Abraham Lincoln. </em>so,&nbsp;<br />\r\n<strong>Defeat is detour and not a dead end.</strong><br />\r\n&nbsp;&nbsp; &nbsp;A News editorial had questioned them about their wisdom who were trying to invent a machine heavier than air ,that would fly. But , One week later, they took &nbsp;their famous flight. Those were <em>wright</em> <em>brothers</em>.Their invention reached heights, not only their invention they also reached &nbsp;the peaks in all the hearts of people.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Colonel &nbsp;sanders,<em>founder of kfc&nbsp;</em>&nbsp;&nbsp;had remembered his mothers recipe &nbsp;and went out for selling. How many doors did &nbsp;he have to knock on before he got his 1st order?? It is estimated about more than 1000&rsquo;s of doors .How many of us drop after 1,2,3,4.., 10 trials ? might be 95% people,but he proved that &nbsp;1000&rsquo;s of trials, determination , hardwork &nbsp;never fails and finally takes us to the peak.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Successful people don&rsquo;t do great things; they only do small things in a great way.</strong><br />\r\n&nbsp;&nbsp; &nbsp;<em>Thomas alva edison</em> &nbsp;who was partially deaf ,came home &nbsp;with a note having &rdquo;your tom is too stupid to learn ,get him out of the school &ldquo;.But later, experienced &nbsp;more than 10,000 failures to take us to the lightening world i.e &nbsp;invention of bulb. He also invented PHONOGRAPH. So, <em>Failure will never overtake us if our determination to succeed is strong enough.</em><br />\r\n&nbsp;<em>&nbsp; &nbsp;Henry ford &nbsp;</em>forgot to put &nbsp;the reverse gear in the 1st car he made .Do we consider this people as failures ? No!! inspite of considering as a failure ,think that they had &nbsp;given an opportunity to learna new thing. Don&rsquo;t read success stories you will &nbsp;only get a message but if you read failure stories you will get some ideas &nbsp;to get success.<br />\r\n<strong>DREAM , DREAM, DREAM ,DREAMS TRANSFORM INTO THOUGHTS .THOUGHTS RESULT IN ACTION .</strong><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;So, every successful story will &nbsp;have &nbsp;many failures behind it .Try hard and hard until you succeed .Dont think it as &nbsp;a failure, think that you have &nbsp;just &nbsp;found &nbsp;the ways &nbsp;that wont work.&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<strong>Cheer up guys, turn up your signature into an autograph.</strong></p>\r\n', 'approved', 126),
(66, 22, 5, 'Story of a boy and a girl', 'a boy and a girl', '04-06-17', 'Sourab sai', 'love.png', 'Love of a boy and a girl', '<p><strong>INTRODUCTION</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&nbsp;</strong>The boy completed his studies and presently working in a MNC (multi national company)</p>\r\n\r\n<p>The girl, she is very cute and rich, she completed her graduation and planning to go abroad for post graduation.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Let&rsquo;s see how they meet.................</p>\r\n\r\n<p><strong>CONTENT</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>One day the boy as usual completed his job for the day and went to the place where he meets his friends daily.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Their meeting place is so good, there is a lake and to the left side of the lake there is a park where families usually come and the kids play. Near the lake there is a railing and some benches to sit and even chat, ice-creams etc... are also available in the evening times and the view is simply awesome. So mostly friends, youth and lovers visit the place</p>\r\n\r\n<p><strong>how they meet is....</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The boy and his friends went to the bench on which they sit daily and started planning for the weekend. The evening was very pleasant and weather is a bit cloudy.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The boy then saw a girl, she was very beautiful. He liked her so much, he decided to become her friend and wanted to know everything about her. He said this to his friends and even they agreed with him.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; His friends forced him to go and speak to the girl. The boy was very tensed and walked to her slowly. She was buying an ice-cream and the boy thought to buy a ice-cream and then slowly wanted to start a conversation about the place (or) weather (or) about the taste of ice-cream.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;He went, took the ice-cream turned towards the girl and............................................</p>\r\n\r\n<p>Story to be continued in part 2</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'approved', 87);
INSERT INTO `newsposts` (`post_id`, `user_id`, `category_id`, `post_title`, `post_keywords`, `post_date`, `post_author`, `post_image`, `post_alt`, `post_content`, `post_newstatus`, `view`) VALUES
(70, 43, 8, 'My First Tag', 'goals , time', '04-06-17', 'Rami Reddy Seelam', 'summer-holiday-1510556_960_720.jpg', 'It is time to open our  doors', '<p>&nbsp; &nbsp; &nbsp; &nbsp;Together we could make a whole universe to come over our Google means planetary.Let&#39;s join in to get you sane.This rational and sensible change make my thoughts grasp ever follicle of my hair on my head grab attention towards my goal.<br />\r\n&nbsp; &nbsp; &nbsp; The recklessness of my power up to know stubble me to the ground. As a stump, I could only stubborn the mind.<br />\r\n<br />\r\n&nbsp; &nbsp; &nbsp; In the past, I could only remain as a stump as l lean my legs straddle.. not to become a stamp. Here the citizenship came from mother blood but the truth is it is only the worth medal awarded by our governance.<br />\r\nWhat a worthless I am??<br />\r\nwhat?<br />\r\nworthless?<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;My tag is appropriate for my discussion of my past. I came to know that time is sensitive not a man.The time is worthless for mankind. He could only be elaborated it from the nature of the fact of the universe.<br />\r\nNow change had to lounge in this gap of vacation. I got my loaf in my hands next to become a sage.<br />\r\n&nbsp; &nbsp; &nbsp; Yup, that&#39;s opaque, found my heart every day with transparent slides of this my recklessness. Fuddles, in the way of a gutter line of a rain spot nevertheless a gutty prank.<br />\r\nGosh, let me put down to my own treatments of being king or queen nor be a prime in heaven...<br />\r\n&nbsp; &nbsp; &nbsp;Now you had my view I&#39;m aware of the mankind.The human can&#39;t speak a truth for a while he had interviewed by the gosh he had been.<br />\r\nWhat&#39;s a vain in this brain?<br />\r\nCompulsory the surgeries had launched a sense of humor but what had it done means, the robots and machine can do a task for a mankind and what this for??<br />\r\n&nbsp; &nbsp; Their origin will get survived at the hands of their thrill and console... How these beings had survived without man&#39;s approval on the earth where the majority are human having a wildly confused nugget of brain. I&#39;m annoyed that manpower is put over robotic but his own talent can&#39;t be the tower which being in his image. Like a comic book, he can be narrated nevertheless which is not been. Mirthful his heart before and after he had been and what for?... So I&#39;m not. Ever every people not questioned that what they render the living on this earth..So lovingly I had taken my first dream to put forward.<br />\r\nAt first, I had to develop my roots of knowledge dulled with a wisdom. Knowledge grated with manpower can be fused to gain wisdom of book and wisdom granted with appropriate touch can be formed with logic.<br />\r\n&nbsp; &nbsp; This logic is the first root of my gift given by my vain less heart. OK, then it&#39;s not upended surprise or revolutionary movement against life. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Go chucking your brain for a moment while.<br />\r\n&nbsp; &nbsp; &nbsp;Get rid, disgusting matters of the other people. It may step down you to mud. The last year, the last season, the last month, the last day, the hour whatever it may be you should toil for the first person to become prominent.<br />\r\nConsoling these people for a grief to my knowledge is like a comic. May I try this assumption for a time in your manner get the time wasted, could you trust the time management I had suggested and the uplift of this first goal.<br />\r\n&nbsp; &nbsp; &nbsp; Suggestions are manhood for their kindness not for their worth gaining but for their worth living. These can do personal accomplishments further in any age to get the molding of stages of life.<br />\r\n&nbsp; &nbsp; &nbsp;Whatever it may be the first output may not satisfactory, further change the accommodation to get an inclination. Rendering this transformation while a long time gets basics for your life in this first dream. If Girl, boy are precautions then what if it get infected in the application. So polite I&#39;m, I think but this politeness up to this stanza in a poem said by a poet renders the poem continuation, but what he said means the change has to get transformed. I think after this I had to stay a bunch of time to get understood of my knowledge, here referring to the painful goal that gets started.<br />\r\n&nbsp; &nbsp; &nbsp; The budget should start with our own fewer premiums of our income, which could compete with the high budget per annual experience. These economical situations demand the companies (here means related with the goal target) with less tenure per annum. These are particular concepts I had bitten my brain with stuff I had.<br />\r\nThe second, a man could effect is by the disgusting people fare talk which mixes like fruit salad he had it tomorrow. These mixes get digest only if all the ingredients are sufficient for the satisfaction of mix. The blur is the mix I had to step down. The painful are fruitless and the other with care heart is fruitful. So next I had to lodge my heart in a fruitful mix which I had been. Null the points and these hoards are not masterful.<br />\r\n&nbsp; &nbsp; &nbsp; Let&#39;s begin our natural treatment of &#39; Rounding off the salt behind the head which is believed the removal of gosh and ghostly affairs.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;Here my mixes are not effective which could be toothed the war fair my mind like an unknown projection.<br />\r\n&nbsp; &nbsp; &nbsp;These known projections are due to foal thinking that gets specified to my life by day to day communications by effective thinking.<br />\r\n&nbsp; &nbsp; &nbsp;While unknowns decay the growth of sprouts since they may delay you in further growth. For example told by an author, There are two persons who are best forever get argued for a matter of incident, by this they won&#39;t talk silly. And another person, towering this point make them dislike each other by telling each other their badness added a colorful story to get separate them permanently. By this, there is no further formation of relations, then by the end to this. As a conclusion, to this author gives us wisdom, and we conclude to maintain fair affairs and relationships forever to your end.<br />\r\nDon&#39;t think the other people discourages talk and fix it to your mind. Make a tray of suggestions of encourages people. Some people tend to attend mood off by other suggestions, what they could tell me? of course they may think to the nonsense of this things. People with this attitude know this after this course of suggestions.</p>\r\n', 'approved', 83),
(71, 66, 5, 'Its Love (Part-1)', 'its love, love, best love story, love story', '04-06-17', 'Shethal Duvvalla', 'IMG-20170404-WA0193 - Copy.jpg', 'lovefile', '<p align="center"><strong>It&#39;s Love (Part-1)</strong></p>\r\n\r\n<p><br />\r\nGirl&rsquo;s side :</p>\r\n\r\n<p>&nbsp;&ldquo;Place the orchids in the front row,&rdquo; said my boss.<br />\r\n&ldquo;Then where shall I place these beautiful, rare blue roses?&rdquo;<br />\r\n&ldquo;Place them somewhere just like your day dreams.&rdquo;<br />\r\n&nbsp; &nbsp; &nbsp;So this is my life. I work in the flower shop owned by one who sounds only to put me down. It is the same till the day happened.<br />\r\n&nbsp; &nbsp; &nbsp;Yes the day. The day that daily occured in my day dreams. Life was never easy and the only things I wished for are, one-love, two-smile on someone&rsquo;s face on my sight.</p>\r\n\r\n<p><br />\r\nBoy&rsquo;s side : &nbsp; &nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&ldquo;Get off the logo man! After all it&rsquo;s my brand new BMW, don&rsquo;t let the shine go off the very first day. Get down and have a sip of this Hieneken,&rdquo; said me.<br />\r\n&ldquo;yo! I&rsquo;m coming,&rdquo; said one of my mates.<br />\r\n&nbsp;<br />\r\nRiches, riches and riches everywhere. Right form my childhood. But never my heart was so rich as the riches everywhere were. I had everything around but still there is something left behind. Beyond the riches, beyond cars,beyond everything, deep inside my heart, it asks for something that it never knew. My day starts with a hope and ends with the hope on next day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nThe day :</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The girl started to her place and boy was on the way to his firm in his BMW. On the way in the shop which sold pets, the girl stopped and had her senses moved towards the little bunny. Heart says her to buy it and love it but the pocket says &ldquo;no buddy, move on.&rdquo;<br />\r\nStood there for a while and started to play with the rabbit.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Meanwhile the boy, alone thinking about the unknown thing in his car stood on road awaiting the green to glow. The girl is playing aside the same road. Suddenly the wind started blowing and his senses strengthened so great that they were never before. He turned left and the black stuff in his eye pointed towards the girl and same the cupid&rsquo;s arrow towards him. Just a second of glance and the heart known the thing it never known before. Cupid shot so intense that the boy&#39;s senses paused a while and heart started saying &ldquo;She is yours. Step ahead.&rdquo; Immediately the boy got down the car and walked towards her with all his senses active only to the girl.</p>\r\n\r\n<p align="right"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&hellip;.To be continued</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For part-2 click<strong>&nbsp;<a href="http://ourmedia.in/details.php?post=NzI=" target="_blank">Here</a></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'approved', 1989),
(72, 66, 5, 'Its Love (Part-2)', 'its love, love, best love story', '04-06-17', 'Sheethal Duvvalla', 'IMG-20170404-WA0193 - Copy (2).jpg', 'lovefile2', '<p align="center"><strong>It&rsquo;s Love (PART-2)</strong></p>\r\n\r\n<p><br />\r\nHis steps towards her fastened and so is the wind.&nbsp;</p>\r\n\r\n<p>&ldquo;Looks like it&rsquo;s going to rain. Rush man!&rdquo; voices around.&nbsp;</p>\r\n\r\n<p>He keeps on going. And suddenly the hat of girl started to fly in the lap of the wind. Immediately the girl reflexes had a sting. And started running for her favorite hat.&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; Boy realised that he should step faster and then suddenly from his back &ldquo;carefull!&rdquo;&nbsp;</p>\r\n\r\n<p>&ldquo;Auch! Iam sorry,&rdquo;a boy who rushed into him said.</p>\r\n\r\n<p>Both were on the ground and and he looked at girl regaining his strength but the girl caught her hat and got into the bus. The boy with a hope started to run after the bus just like a fighter bull does towards the matador but failed.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; The boy, with eyes full of tears and heart full of weight, went back to his car and got back to his job thinking of the girl.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Next day he started in the same way hoping for the girl. Day one passed but no site of girl, day two with hope but in vain, day three down hearted but no site yet.&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Day four with love but only the lovely bunny was there. He was accelerating the car slowly, passing from the high school and at a shot his vision fallen down to 5 frames and the nature called him from his right. He then turned his head right and had the girl, on her bicycle, with a red rose in the basket with a smile on her face, on her way to work in front of his eyes.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The fourth day with love had the address of his love. He then followed her with a strong intension of gifting her his love. And slowly they reached the beautiful flower shop where the girl worked.</p>\r\n\r\n<p><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;The girl went in and the boy got down his car and made up himself to meet his love. He stood at the entrance and a conversation started inside him.</p>\r\n\r\n<p>&ldquo;What if she says no?&rdquo; mind.</p>\r\n\r\n<p>&ldquo;Step ahead,&rdquo; heart.</p>\r\n\r\n<p>&ldquo;Will she love you?&rdquo; mind.</p>\r\n\r\n<p>&ldquo;She is your love,&rdquo; heart.</p>\r\n\r\n<p>&ldquo;Let&rsquo;s go,&rdquo; mind.</p>\r\n\r\n<p>&ldquo;Let&rsquo;s even go. In a bet for love there should be no fear to express a word. If you win it&rsquo;s great. If you lose you actually lost nothing,&rdquo; heart.</p>\r\n\r\n<p>Boy gets in and finds the girl behind the rack full of red roses. He walks towards her. Then the girl asks him &ldquo;How can I help you sir?&rdquo;</p>\r\n\r\n<p>&ldquo;We-well! I am Perkin.&rdquo;</p>\r\n\r\n<p>&ldquo;Nice to meet you sir. What are you looking for?&rdquo;</p>\r\n\r\n<p>&ldquo;I&rsquo;m looking for that daisy that played with the bunny. I&rsquo;m looking &nbsp;for that iris that flashed spark in my iris. I&rsquo;m looking for that rose the blossomed in my garden named heart.&rdquo;</p>\r\n\r\n<p>&ldquo;Sir I am sorry but I&rsquo;m unable to figure you out. Can you tell me exactly what are you looking for?&rdquo;</p>\r\n\r\n<p>Boy with slight fear &ldquo; y-yo-y&hellip;. I&rsquo;m waiting for that jasmine that could fill my story with fragrance, turn up the vibe of my days.&rdquo;</p>\r\n\r\n<p>The girl understands the point and realizes that the boy had come there for her. She had no faith on what her eyes are seeing. Eventually boy gets down to his knees and takes a flower from the rack and says &ldquo;be my jasmine.&rdquo;</p>\r\n\r\n<p>Then girl replies with a smile &ldquo;jasmine that blossomed the night fragrant only the next day, and the next night it exists no more and new one blossom in place of it. I&#39;m sorry but I don&rsquo;t want to be either of them. I want to be the creep that bears them &rdquo;&nbsp;</p>\r\n\r\n<p>The boy thinks looking into her eyes wether it was her acceptance or rejectance.</p>\r\n\r\n<p align="right"><strong>_To be continued </strong></p>\r\n\r\n<p>For part-3 click&nbsp;<strong><a href="https://www.ourmedia.in/details.php?post=NzY=">here</a></strong></p>\r\n\r\n<p>For part-1 click&nbsp;<strong><a href="https://www.ourmedia.in/details.php?post=NzE=">here</a></strong></p>\r\n', 'approved', 1992),
(73, 43, 5, 'Love with Half Girl Friend', 'love, affection', '04-07-17', 'Rami Reddy Seelam', 'boardwalk-1783843.jpg', 'Its not Love, Just an Attraction', '<p><strong>Castings:</strong><br />\r\nSid<br />\r\nMr. Adam ( father of sid)<br />\r\nMrs. Adam ( mother of Sid)<br />\r\nVerna<br />\r\nJohn Robert<br />\r\nArmstrong<br />\r\nRhodes<br />\r\nMiss Cars<br />\r\nMr Strauch</p>\r\n\r\n<p><strong>Content:</strong> Difference between Love and Affection, a long story. all the characters in the story are introduced based on the play and the above characters are main roles of the story.</p>\r\n\r\n<p><br />\r\n<strong>(Part- 1)</strong><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sid came to the home and said dad the results are out Mr. Adams took his spectacles and put over to his eyes. Mr. Adams, the father of the boy named Sid and his wife Mrs. Adams natively settled in the city of Delhi, and he also had two daughters. Sid completed his secondary education in the rural schools of the city Delhi. After the scores of his secondary schools, he wanted to take up his under graduation in computers to achieve his goals to become an entrepreneur. After he completed his under graduation, as to fulfill his aims of his own and he decided to take up his MS in a computer&#39;s in the city of New York. So he was now going on the Airbus to America.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sid took his seat as provided by the airport authority and sat closing his eyes what he had done was remembering to his mind acting in a tipsy way. The person sitting beside Sid curiously wished Mr.Sid &quot; Hi, I&#39;m Mr. Robert and I&#39;m from Chennai who used to visit yearly a resort vacation in New York. Could you please tell me about yourself. This made Sid astonished and just kept calm for a while, Robert isSid slowly opened his eyes and he took his napkin which he put over his face to get rid of cool breeze of air conditioning system. Next, he memorizing the words of Mr. Robert wishes him Hi, I&#39;m Mr. Sid. At the while, Mr. Sid had an emerging cough and left over with struck off the neck and a rough voice with a little sound said that &quot; Sorry Mr. Robert could you please wait a minute &quot;. Yeah, of course, no problem said Mr. Robert. Then a moaned sound from Sid called the staff girl &quot;Hello could you help me&quot;. Yeah, sir how could I help you, sir? asked the girl. Could you please bring me a bottle of hot water to put on the tablet. Of course, sir, it&#39;s my pleasure. Then the girl strolls towards the staff room and groomed as if it is from official order.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Meanwhile, she brought a bottle of hot water and gave it to Mr. Sid. Thank you, Miss Cars. Welcome sir said the girl and she left. Then Sid had a short nap and he covered his uneasiness at a time. Then he said Hello to Mr. Robert, then Robert spelled &quot; Now how could you feel the young boy, Mr. Sid &quot;. Then he said yeah, I&#39;m doing well now, no worries left over &quot;. Then Sid now had a short analysis over Mr. Robert. Mr. Robert was a young bodybuilder of his time of the youth. He wore branded T-shirt and a black beard of the fashion trend and light dotted mustache to show his youth. His appearance has slight remedies of his Sid friend Mr. Strauch. He gathered that he was just a one year senior to Mr. Sid, actually, he masked himself during his studies to left his education to get improved and not his youthful joys.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Accordingly, Mr. Robert had a short talk with Sid. Then Sid said that &quot;Yup! Mr. Robert, I&#39;m from Hyderabad and my nativities belong to the rural of Hyderabad. Actually, I wanted to take MS in New York in the university of Stanford. For the case, I had my journey to the US. OK! then could I know you in full detailed,&quot; Yeah I&#39;m sure I can. My nativity is Medak of Telangana state. I&#39;m having my master degree in CS in the Stanford university during a year ago. Now I completed two semesters and I went for a holiday to India. Exactly as your feeling in journey for the first time to your journey of your life while leaving India is same for me during my first visit to take up my masters in the foreign , now you being foreigner to the people of America you will be somewhat anxious that you had an own country and why so I&#39;m here .<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sid put silent, not answering to the other, he wants some relief to his brain so he asked Mr. Robert &quot;Don&#39;t you need to have a cup of tea ??&quot;. Yeah sure said the other. Then Sid called the girl Miss Cars, Hello Cars could you please bring the cup of tea for each of us. This time the girl has the face of anger with his colleague girl in proper working. She said &quot;sure sir &quot;. Then the girl went to do his allotted job. Robert took his bottle of water and asked Sid &quot; Why the girl Miss Cars were so anger in answering to your request? , We could complain of her misbehavior to their higher authorities?. Aren&#39;t we? No, Mr. Robert, I observed that she had been frustrated by her work being unnoticed spelled Mr.Sid .,........<br />\r\n,,....<br />\r\n( Why Sid get astonished on looking at Mr.Robert<br />\r\nWhy Robert is anxious to know about Sid ?<br />\r\nWhy is Sid not so public to Mr.Robert? )<br />\r\n<br />\r\n....<strong>.continues in (Part - 2)</strong></p>\r\n', 'approved', 154),
(74, 22, 5, 'Story of a boy and a girl(Part 2)', 'a boy and a girl', '04-07-17', 'Sourab sai', 'love.png', 'Love of a boy and a girl', '<p>He took the ice-cream and his hands were shivering and then as he turned towards the girl there is heavy wind suddenly and his ice-cream fell on girls dress.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The girl&rsquo;s friend laughed and the girl misunderstood and scolded him badly and went away. The boy was hurt and thought not to meet her again.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; After few days the boy was coming home late night after attending the party with his friends. A car was coming so fast and a family was crossing road and they didn&rsquo;t see the car. In the attempt to save the family, the car rushed into the divider and the person in the car is badly injured.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The boy saw this and immediately went to the car and called the ambulance and took the person to hospital. He completed all the formalities and waited till the person woke up. The boy asked him to give someone&rsquo;s number to inform about this. The person gave his daughter&rsquo;s number. The boy called her and she immediately came.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The boy was shocked to see the same girl he saw on that evening. All the incidents flashed in his mind. The time slowed down and everything around him stood still and the boy cannot feel anything except the girl&rsquo;s breath.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The girl was speechless after seeing him. She went to her father and her father told her all the risk the boy took to save him and the girl then went to the boy gave a hug and said she was sorry.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; From then they used to meet frequently, chat daily and everything is going good and then one day...................</p>\r\n\r\n<p>To be continued......</p>\r\n', 'approved', 213),
(75, 24, 6, 'productivity hacks for students', 'Productivity hacks', '04-10-17', 'Bharath', '', '', '<p>1 Magical early morning<br />\r\nMagical morning can help you accomplish more in less time. This is a most fantastic period at which you can concentrate more on your work and stay longer working efficiently. This morning time helps you accomplish the task faster and efficiently.<br />\r\nConsider performing necessary duties during this period to bring out more prolific output by finishing a task.<br />\r\nThis time is more appropriate for anyone who wants to achieve more in less time. For example, artists can complete their arts in this time. Experts can accomplish any work so fast.<br />\r\nWhen it comes to students, they can use this time for studying which will help them remember what they learned easier and longer.<br />\r\nOne more fantastic benefit from utilizing this time is you can explore more during this time. It takes less time to complete studying as this period is very calm and you can have more concentration.<br />\r\nThis magical morning is very helpful for everyone as it has a high influence on individuals in making success possible in short time.<br />\r\nAlways take advantage of this valuable time period for your important works to achieve more in less time.</p>\r\n\r\n<p>2 Realize the truth fish cannot walk, the snake can&rsquo;t fly, etc.<br />\r\nThe most painful truth you should understand is we all are equal, but we are not equal. The modern education system teaches the same way to everyone irrespective of their different mindsets which make not everyone succeed at the school.<br />\r\nWe know that we all are different at learning habits and mental power. But we always try to compete to excel which mostly makes us fail at getting success.<br />\r\nWe know that there are several species of animals on this planet which have different abilities and talents. What if they were given the same task to perform in a competition? Do you think they would win? No. If there is a job like every animal has to fly. Every animal cannot fly because they have no such ability which is what they have to realize.<br />\r\nThink that we are different individuals who are having different mindsets and abilities. When a there is a competition. We all have been given a single task to accomplish which is irrespective of our various capacities and talents. This is what fails most of the students fail at getting success.<br />\r\nIt also makes people fail every day. The foremost thing you have to consider is finding out your talents and abilities and using them in the way that makes you achieve the competition. This approach helps you win and learn most of the time in life which can be considered as a productive sign.</p>\r\n\r\n<p>3 Plan in advance<br />\r\nThis is one more major hack you should make use of to get prepared for the future. This simple little trick can bring you amazing results. This is a very easy method which should become one of your habits.<br />\r\nHave you ever made any plans in your life? Have you ever followed them carefully to get more significant results? Plans are generally carried out before we start doing a task. They are typically made to get more efficient results from any work we do.<br />\r\nBut this productivity trick is little different which is about planning tomorrow, today itself. It&rsquo;s that simple. You know that we all plan things in advance but how about planning tomorrow today. This type of planning helps you achieve more with confidence.<br />\r\nThe plan is about planning what you have to do tomorrow, before night. Set clear deadlines and write down important tasks you have to finish doing tomorrow during night. Make a list to do tasks for tomorrow and then go to sleep and get up early in the morning with full of hope to finish tasks easily which helps you gain success.<br />\r\n4 Set clear deadlines<br />\r\nDo you know why many people fail or think they are failures? Many people fail at finishing tasks on time. This happens to most of the individuals. The reason why they fail is unclear deadlines. They set deadlines without understanding their work entirely.<br />\r\nThis failure in understanding the work they have to do, make them establish an unclear deadline which is why people fail at accomplishing tasks on time.<br />\r\nThe most important thing to consider before setting deadlines is to understand the work you have to accomplish. This type of understanding helps you create perfect deadlines in which you could complete the task without fail.<br />\r\nMany students fail at completing their assignments, studying their subjects in deadlines they have set, is because they don&rsquo;t understand their work. Try to know what you have to and why you have to do, and this way of understanding helps you set clear deadlines and work according to it.<br />\r\nOne more the important thing is to remember is always start doing tasks after the time limit is set without any late.<br />\r\n5 Never Postpone &lsquo;Now.&rsquo;<br />\r\nIt&rsquo;s imperative trick which will help you become productive. Do you know why many people become procrastinators? Do you know why many individuals behave lazily?<br />\r\nIt is all because of not performing the tasks at the moment. In simple words, postponing tasks for some other time is the reason why people become lazy and unproductive.<br />\r\nThis results in stress which make you mentally ill.this will soon make you hate the work and makes you procrastinate.<br />\r\nMany students become lazy at their studies because of postponing their works for some other time. This way they grow stress in their life and they start hating their education.<br />\r\nTherefore never postpone doing anything for later. Do it now if it has to be done now. This way of approach helps you to become productive and stress-free.<br />\r\nBecause if it isn&rsquo;t done now it may not be done ever. Always try to finish tasks in time without further postponing them for later to become productive and fruitful. Do I now or it would become never.</p>\r\n\r\n<p>-</p>\r\n', 'approved', 66),
(76, 66, 5, 'Its Love (Part-3)', 'its love, best love story, love love story', '04-13-17', 'Sheethal Duvvalla', '1492056508331.jpg', 'lovefilee', '<p align="center"><strong>It&rsquo;s love (part-3)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The boy stays on knees thinking whether it was a yes or no! And the girl leaves the place.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>He goes home with the same thought. Thinks all night about the same but fails to figure out anything. And he decides to see her once again the next day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Next morning he goes to same flower shop and waits for girl to come. Few moments later he finds the girl coming there wishing people she know on her way as she did daily. And as soon as the girl enters the flower shop the boy goes in and starts to walk after her.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Hey Jasmine!&rdquo; he calls her.</p>\r\n\r\n<p>Girl ignores.</p>\r\n\r\n<p>&ldquo;Hey!&rdquo; he calls once again.</p>\r\n\r\n<p>&ldquo;Yes,&rdquo; she says.</p>\r\n\r\n<p>&ldquo;Was it a yes or no?&rdquo;</p>\r\n\r\n<p>&ldquo;I answered you right that moment. Don&rsquo;t come back of me for that.&rdquo;</p>\r\n\r\n<p>Boy downhearted leaves the place. And as the same he decides to meet her again the next day.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Next day the sun is on and so is the boy. He wants to meet her in a different way. So he goes to the same flower shop quickly and buys some roses and gets them tied. He writes a letter and puts it in the roses and asks the shop owner to give that to her.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The boy waits in his car right next the shop. The girl enters the shop and the owner gives it to her. She surprisingly opens that and finds the letter. The letter read &ldquo;can the jasmine beat all these roses?&rdquo; She understands the thing and simply puts the flowers on the table and starts to work.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The boy again goes home and the same decision again. But this time with some more love. He gets the sketch of the surprise for the next day and sleeps.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Next day, like the previously he waits at the same flower shop but this time he stands in the shop. The girl starts to come to the shop. Few moments later she reaches the end of the street.</p>\r\n\r\n<p>Like every day she comes walking wishing everyone.</p>\r\n\r\n<p>&ldquo;Good morning!&rdquo; she wishes the butcher.</p>\r\n\r\n<p>&ldquo;Hey girl! It is for you,&rdquo; he says and gives a box to her.</p>\r\n\r\n<p>She opens the box and finds a hat which is same in color of her favorite hat with some flowers designed on them and finds a letter. The letter said &ldquo;Look at the flowers on hat, waiting for the world&rsquo;s most beautiful jasmine to bear them.&rdquo; She smiles and puts the hat on. And she starts walking.</p>\r\n\r\n<p>&ldquo;Hello!&rdquo; she says to the vegetable shop keeper.</p>\r\n\r\n<p>He smiles and gives another box. She takes it and opens it. She finds a pink colored teddy which is about one foot in height and a letter that read &ldquo;To the one who is cuter than the teddy that is jealous the cuteness of the one holding it.&rdquo;</p>\r\n\r\n<p>She moves on. &ldquo;hey!&rdquo; calls a boy on bicycle.</p>\r\n\r\n<p>&ldquo;Yes!&rdquo; she says.</p>\r\n\r\n<p>&ldquo;It&rsquo;s for you.&rdquo;</p>\r\n\r\n<p>&ldquo;Thank you!&rdquo;</p>\r\n\r\n<p>And again one more box she opens it and finds a rose that is about to die but saved and a letter. This time letter read &ldquo;To the girl who carried this rose. From the one who is hoping to be carried in that girl&rsquo;s heart.&rdquo; She gets excites and smiles out. And she stops in front of her destination and finds a box on her way. She takes it and opens it. She gets shocked immediately as she opens the box. The box contained the bunny with which she played the other day in the pet shop. She finds a letter under it which read &ldquo;the lucky bunny which is lucky enough to be loved by you. Make me even lucky.&rdquo;</p>\r\n\r\n<p>She takes the bunny and finds the boy waiting for her. She starts to pretend like nothing had happened. She wontedly ignores the boy and goes in. the boy calls her &ldquo;Jasmine! Jasmine!.&rdquo;</p>\r\n\r\n<p>&ldquo;I am not a jasmine,&rdquo; she says.</p>\r\n\r\n<p>&ldquo;One yes, only one yes and I will make you drown in love and fly in ardor.&rdquo;</p>\r\n\r\n<p>&ldquo;I already told what I have to say. It&rsquo;s up,&rdquo; girl says with smile and goes to carry on with her work. And the boy leaves the place down hearted.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It&rsquo;s evening and the sun is about to sink. The girl&rsquo;s job is up and she starts to her home. On her way by the side of the river she had a secret and favorite place where she used to play in her childhood. She goes there and sits thinking about the boy. And then she hears &ldquo;Sorry for coming to your favorite place without permission.&rdquo;</p>\r\n\r\n<p>She turns back and sees the boy. She ignores and turns straight again.</p>\r\n\r\n<p>&ldquo;I understood. It was no. by the way I really loves you and wanted you to be happy. If it is my presence that disturbs your happiness then let me kill it. Sorry for disturbing you all these days. I am taking leave hoping one day you will be mine. Good bye,&rdquo; says the boy and starts to leave. He turns around and starts to walk off. Then he hears something.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align="right"><strong>_To be continued</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For part-1 click<strong>&nbsp;<a href="https://www.ourmedia.in/details.php?post=NzE=">here</a></strong></p>\r\n\r\n<p>For part-2 click<strong>&nbsp;<a href="https://www.ourmedia.in/details.php?post=NzI=">here</a></strong></p>\r\n', 'approved', 2085),
(77, 33, 5, 'The Man Who Changed My Life : Part-2', 'The Man Who Changed My Life', '05-29-17', 'Harshini Reddy', 'PicsArt_03-30-10.03.54.png', 'Themanwhochangedmylifepart2', '<blockquote>\r\n<p>I said &quot;Sure Ayan, what&#39;s the promise you want me to make?&quot; he told me &quot; Ananya I&#39;m observing you<br />\r\nsince we became friends. Why are you always moody<br />\r\nwithout getting mingled with others? Why are you adjusting for the people who are not important to you? Why can&#39;t you<br />\r\nraise on them when they comment you? Don&#39;t let other&#39;s<br />\r\nchange your smile Ananya. You know, you are losing your<br />\r\nhappiness being like this. Fall in love with your life. Love yourself Ananya. Do whatever makes you happy and be with<br />\r\nwhoever makes you smile. Don&#39;t think like... &quot; if i admit this<br />\r\nwhat they&#39;ll think about me, I should be kind to everyone&quot;.<br />\r\nDon&#39;t be kind to everyone Ananya, it will bring you problems these days. Be like how you want to be. Don&#39;t live to impress and please others and don&#39;t make time for people who don&#39;t make time for you. Don&#39;t be gloomy around all, get indulged with them. Don&#39;t think about the experiences which<br />\r\nmade you feel down in the past and don&#39;t worry about the future. Live inpresent and enjoy the moment. Enjoy with your friends and Enjoy your time. Have fun in the class, in the hostel wherever you are. You will get happiness only when<br />\r\nyou enjoy little things in your life. Understand me Ananya why iam saying all these to you. Now you are good but&nbsp;improve yourself to be better and further to best. I&#39;m sure you will enjoy everything in your life if you change. Don&#39;t change for me, change for yourself Ananya. I&#39;ll try my level best to change you but the change should come within you. Trust me I will give you all the happiness in the world, but you can feel those only when you become free and allowed to yourself. You will have a great life ahead and we will together have all the fun. Please Ananya think about it and change for yourself.&quot; I realized what I missed till then in my life. I replied him &quot; I&#39;m lucky to get you Ayan.I want to see<br />\r\nmyself as a new Ananya and you will see me soon like that.&quot; &quot;That will be the most happiest day in my life Ananya&quot; he replied.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;It is not possible for a person to change all of a sudden. It took me around one year to change myself completely. Gradually I was enjoying small pleasures in my<br />\r\nlife. I realized how these little things makes me happy. Me<br />\r\nand Ayan enjoyed like everyday was the last day and we<br />\r\nshould make it count. we used to have fun at the golgappa<br />\r\nstreets, go on long drives. we used to have lot of fun in<br />\r\nrides... we used to comment the guys and girls on the<br />\r\nvehicles next to us. Sometimes we used to grab one/two<br />\r\nOranges from roadside fruit stalls. we used to go for window shoppings. we used to laugh together, sing and dance together. We enjoyed our lives like no one in the world enjoys their life.</p>\r\n</blockquote>\r\n\r\n<blockquote>\r\n<p>We used to talk about everything with each other. He gave me many advices and helped me a lot in improving myself. He was there for me whenever I was down.He boosted me whenever I was low. He cares me like a father, a mother, a brother and a sister. He forgives me for my mistakes and appreciates me for my achievements. He had done a lot more than me in improving myself. Now, I became what I wanted to be and how Ayan wanted to see me. As a complete matured woman. I realized what is important to me and what isn&#39;t.I learned to care less about what other people think of me and more about what I think of myself. I realized how far I&#39;ve come and I remember when I thought things were such a mess that I would never recover. And &nbsp;I smiled, I smiled because now i&#39;m truly proud of myself and the person I had fought to become.</p>\r\n</blockquote>\r\n', 'unapprove', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=554 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `content`, `post_id`, `post_date`, `category`, `status`) VALUES
(65, 28, 'Successfully Changed Your Cover Photo', 0, '2017-04-02', 'changecoverphoto', 'read'),
(66, 28, 'Successfully Changed Your Profile Photo', 0, '2017-04-02', 'changeprofilephoto', 'read'),
(67, 28, 'Successfully Changed Your Cover Photo', 0, '2017-04-02', 'changecoverphoto', 'read'),
(68, 28, 'Successfully Changed Your Cover Photo', 0, '2017-04-02', 'changecoverphoto', 'read'),
(69, 24, 'Your Post Has Been Successfully Posted', 0, '2017-04-02', 'userhome', 'read'),
(70, 24, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(71, 24, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(72, 31, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(73, 31, 'someone has commented on your post', 17, '2017-04-02', 'postscomments', 'read'),
(74, 31, 'someone has commented on your post', 17, '2017-04-02', 'postscomments', 'read'),
(75, 27, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(76, 31, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(77, 31, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(78, 29, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(79, 29, 'someone has commented on your post', 17, '2017-04-02', 'postscomments', 'read'),
(80, 29, 'someone has commented on your post', 27, '2017-04-02', 'newscomment', 'read'),
(81, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-02', 'userhome', 'read'),
(82, 29, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(83, 33, 'Successfully Changed Your Profile Photo', 0, '2017-04-02', 'changeprofilephoto', 'read'),
(84, 32, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(85, 28, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(86, 28, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(87, 28, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(88, 28, 'someone has commented on your post', 17, '2017-04-02', 'postscomments', 'read'),
(89, 32, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(90, 34, 'Successfully Changed Your Profile Photo', 0, '2017-04-02', 'changeprofilephoto', 'read'),
(91, 27, 'someone has commented on your post', 27, '2017-04-02', 'newscomment', 'read'),
(92, 26, 'Successfully Changed Your Profile Photo', 0, '2017-04-02', 'changeprofilephoto', 'read'),
(93, 37, 'Successfully Changed Your Status', 0, '2017-04-02', 'changestatus', 'read'),
(94, 37, 'Successfully Changed Your Cover Photo', 0, '2017-04-02', 'changecoverphoto', 'read'),
(95, 37, 'Successfully Changed Your Cover Photo', 0, '2017-04-02', 'changecoverphoto', 'read'),
(96, 27, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(97, 37, 'Successfully Changed Your Cover Photo', 0, '2017-04-02', 'changecoverphoto', 'read'),
(98, 37, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(99, 37, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(100, 32, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(101, 32, 'someone has liked your post', 17, '2017-04-02', 'postslike', 'read'),
(102, 32, 'Successfully Changed Your Profile Photo', 0, '2017-04-02', 'changeprofilephoto', 'read'),
(103, 32, 'Successfully Changed Your Status', 0, '2017-04-02', 'changestatus', 'read'),
(104, 32, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(105, 42, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(106, 24, 'someone has liked your post', 31, '2017-04-02', 'newslike', 'read'),
(107, 24, 'someone has liked your post', 18, '2017-04-02', 'postslike', 'read'),
(108, 24, 'someone has liked your post', 27, '2017-04-02', 'newslike', 'read'),
(109, 24, 'someone has liked your post', 31, '2017-04-02', 'newslike', 'read'),
(110, 33, 'someone has liked your post', 31, '2017-04-02', 'newslike', 'read'),
(111, 33, 'someone has liked your post', 29, '2017-04-02', 'newslike', 'read'),
(112, 24, 'someone has liked your post', 27, '2017-04-03', 'newslike', 'read'),
(113, 32, 'Your Post Will Be Approved And Published Within An Hour', 0, '2017-04-03', 'insertnews', 'read'),
(114, 43, 'someone has commented on your post', 18, '2017-04-03', 'postscomments', 'read'),
(115, 43, 'someone has commented on your post', 18, '2017-04-03', 'postscomments', 'read'),
(116, 43, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(117, 43, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(118, 33, 'Your Post Will Be Approved And Published Within An Hour', 0, '2017-04-03', 'insertnews', 'read'),
(119, 32, 'Your Post Will Be Approved And Published Within An Hour', 0, '2017-04-03', 'insertnews', 'read'),
(120, 32, 'Your Post Will Be Approved And Published Within An Hour', 0, '2017-04-03', 'insertnews', 'read'),
(121, 33, 'Successfully Changed Your Cover Photo', 0, '2017-04-03', 'changecoverphoto', 'read'),
(122, 33, 'Successfully Changed Your Cover Photo', 0, '2017-04-03', 'changecoverphoto', 'read'),
(123, 33, 'Successfully Changed Your Cover Photo', 0, '2017-04-03', 'changecoverphoto', 'read'),
(124, 33, 'Successfully Changed Your Cover Photo', 0, '2017-04-03', 'changecoverphoto', 'read'),
(125, 32, 'Your Post Will Be Approved And Published Within An Hour', 0, '2017-04-03', 'insertnews', 'read'),
(126, 33, 'Your Post Will Be Approved And Published Within An Hour', 0, '2017-04-03', 'insertnews', 'read'),
(127, 32, 'Your Post Will Be Approved And Published Within An Hour', 0, '2017-04-03', 'insertnews', 'read'),
(128, 32, 'someone has liked your post', 16, '2017-04-03', 'startupslike', 'read'),
(129, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(130, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(131, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(132, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(133, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(134, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(135, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(136, 43, 'Your Post Will Be Approved And Published Within An Hour', 0, '2017-04-03', 'insertnews', 'read'),
(137, 43, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(138, 0, 'Successfully Updated Your Post', 0, '2017-04-03', 'editnews', 'read'),
(139, 0, 'Successfully Updated Your Post', 0, '2017-04-03', 'editnews', 'read'),
(140, 48, 'someone has liked your post', 17, '2017-04-03', 'postslike', 'read'),
(141, 48, 'someone has liked your post', 18, '2017-04-03', 'postslike', 'read'),
(142, 42, 'someone has liked your post', 18, '2017-04-03', 'postslike', 'read'),
(143, 36, 'Successfully Updated Your Details', 0, '2017-04-03', 'editdetails', 'read'),
(144, 36, 'Successfully Updated Your Details', 0, '2017-04-03', 'editdetails', 'read'),
(145, 36, 'Successfully Updated Your Details', 0, '2017-04-03', 'editdetails', 'read'),
(146, 33, 'Successfully Changed Your Status', 0, '2017-04-03', 'changestatus', 'read'),
(147, 45, 'someone has liked your post', 18, '2017-04-03', 'postslike', 'unread'),
(148, 54, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(149, 54, 'Your Post Has Been Successfully Posted', 0, '2017-04-03', 'userhome', 'read'),
(150, 32, 'someone has liked your post', 26, '2017-04-03', 'postslike', 'read'),
(151, 32, 'someone has liked your post', 25, '2017-04-03', 'postslike', 'read'),
(152, 32, 'someone has liked your post', 1, '2017-04-03', 'startupslike', 'read'),
(153, 32, 'someone has liked your post', 47, '2017-04-04', 'newslike', 'read'),
(154, 57, 'Successfully Changed Your Profile Photo', 0, '2017-04-04', 'changeprofilephoto', 'read'),
(155, 57, 'Successfully Changed Your Profile Photo', 0, '2017-04-04', 'changeprofilephoto', 'read'),
(156, 57, 'someone has liked your post', 26, '2017-04-04', 'postslike', 'read'),
(157, 57, 'someone has liked your post', 25, '2017-04-04', 'postslike', 'read'),
(158, 57, 'someone has liked your post', 18, '2017-04-04', 'postslike', 'read'),
(159, 57, 'Successfully Changed Your Cover Photo', 0, '2017-04-04', 'changecoverphoto', 'read'),
(160, 57, 'Successfully Changed Your Profile Photo', 0, '2017-04-04', 'changeprofilephoto', 'read'),
(161, 57, 'someone has liked your post', 47, '2017-04-04', 'newslike', 'read'),
(162, 33, 'someone has liked your post', 47, '2017-04-04', 'newslike', 'read'),
(163, 58, 'Your Post Has Been Published Successfully', 0, '2017-04-04', 'insertevents', 'unread'),
(164, 43, 'Your Post Has Been Published Successfully', 0, '2017-04-04', 'insertevents', 'read'),
(165, 32, 'Your Post Has Been Published Successfully', 0, '2017-04-04', 'insertevents', 'read'),
(166, 0, 'Your Post Has Been Published Successfully', 0, '2017-04-04', 'insertevents', 'read'),
(167, 59, 'Successfully Changed Your Profile Photo', 0, '2017-04-04', 'changeprofilephoto', 'unread'),
(168, 36, 'someone has liked your post', 49, '2017-04-04', 'newslike', 'read'),
(169, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(170, 32, 'someone has liked your post', 27, '2017-04-04', 'postslike', 'read'),
(171, 56, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(172, 56, 'someone has liked your post', 28, '2017-04-04', 'postslike', 'read'),
(173, 56, 'someone has liked your post', 27, '2017-04-04', 'postslike', 'read'),
(174, 56, 'someone has liked your post', 26, '2017-04-04', 'postslike', 'read'),
(175, 56, 'someone has liked your post', 25, '2017-04-04', 'postslike', 'read'),
(176, 56, 'someone has liked your post', 18, '2017-04-04', 'postslike', 'read'),
(177, 56, 'someone has liked your post', 17, '2017-04-04', 'postslike', 'read'),
(178, 41, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(179, 41, 'someone has liked your post', 27, '2017-04-04', 'postslike', 'read'),
(180, 0, 'Successfully Updated Your Post', 0, '2017-04-04', 'editnews', 'read'),
(181, 32, 'someone has liked your post', 28, '2017-04-04', 'postslike', 'read'),
(182, 32, 'someone has liked your post', 29, '2017-04-04', 'postslike', 'read'),
(183, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(184, 32, 'Successfully Updated your post', 0, '2017-04-04', 'editposts', 'read'),
(185, 32, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'read'),
(186, 33, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'read'),
(187, 33, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(188, 33, 'someone has liked your post', 47, '2017-04-04', 'newslike', 'read'),
(189, 49, 'someone has liked your post', 50, '2017-04-04', 'newslike', 'read'),
(190, 48, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'read'),
(191, 42, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'read'),
(192, 66, 'someone has liked your post', 28, '2017-04-04', 'postslike', 'read'),
(193, 38, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'read'),
(194, 38, 'someone has liked your post', 18, '2017-04-04', 'postslike', 'read'),
(195, 38, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(196, 29, 'someone has commented on your post', 30, '2017-04-04', 'postscomments', 'read'),
(197, 33, 'someone has liked your post', 47, '2017-04-04', 'newslike', 'read'),
(198, 37, 'someone has liked your post', 50, '2017-04-04', 'newslike', 'read'),
(199, 37, 'someone has liked your post', 50, '2017-04-04', 'newslike', 'read'),
(200, 41, 'someone has liked your post', 31, '2017-04-04', 'postslike', 'read'),
(201, 67, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'unread'),
(202, 52, 'someone has liked your post', 50, '2017-04-04', 'newslike', 'unread'),
(203, 52, 'someone has liked your post', 50, '2017-04-04', 'newslike', 'unread'),
(204, 42, 'someone has liked your post', 31, '2017-04-04', 'postslike', 'read'),
(205, 42, 'someone has liked your post', 31, '2017-04-04', 'postslike', 'read'),
(206, 42, 'Successfully Changed Your Profile Photo', 0, '2017-04-04', 'changeprofilephoto', 'read'),
(207, 42, 'someone has liked your post', 29, '2017-04-04', 'postslike', 'read'),
(208, 42, 'someone has liked your post', 29, '2017-04-04', 'postslike', 'read'),
(209, 42, 'someone has liked your post', 29, '2017-04-04', 'postslike', 'read'),
(210, 42, 'someone has liked your post', 28, '2017-04-04', 'postslike', 'read'),
(211, 42, 'someone has liked your post', 29, '2017-04-04', 'postslike', 'read'),
(212, 27, 'someone has liked your post', 31, '2017-04-04', 'postslike', 'unread'),
(213, 27, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'unread'),
(214, 27, 'someone has commented on your post', 30, '2017-04-04', 'postscomments', 'unread'),
(215, 27, 'someone has liked your post', 28, '2017-04-04', 'postslike', 'unread'),
(216, 27, 'someone has liked your post', 27, '2017-04-04', 'postslike', 'unread'),
(217, 27, 'someone has liked your post', 26, '2017-04-04', 'postslike', 'unread'),
(218, 27, 'someone has liked your post', 25, '2017-04-04', 'postslike', 'unread'),
(219, 27, 'someone has liked your post', 29, '2017-04-04', 'postslike', 'unread'),
(220, 27, 'someone has liked your post', 18, '2017-04-04', 'postslike', 'unread'),
(221, 37, 'someone has liked your post', 53, '2017-04-04', 'newslike', 'read'),
(222, 37, 'someone has liked your post', 55, '2017-04-04', 'newslike', 'read'),
(223, 38, 'someone has liked your post', 56, '2017-04-04', 'newslike', 'read'),
(224, 62, 'Successfully Updated Your Details', 0, '2017-04-04', 'editdetails', 'read'),
(225, 24, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(226, 68, 'someone has liked your post', 57, '2017-04-04', 'newslike', 'unread'),
(227, 68, 'someone has liked your post', 57, '2017-04-04', 'newslike', 'unread'),
(228, 62, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(229, 62, 'Successfully Updated your post', 0, '2017-04-04', 'editposts', 'read'),
(230, 62, 'someone has liked your post', 33, '2017-04-04', 'postslike', 'read'),
(231, 62, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'read'),
(232, 44, 'someone has liked your post', 55, '2017-04-04', 'newslike', 'read'),
(233, 69, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(234, 69, 'someone has liked your post', 35, '2017-04-04', 'postslike', 'read'),
(235, 0, 'Successfully Updated Your Post', 0, '2017-04-04', 'editnews', 'read'),
(236, 69, 'someone has commented on your post', 56, '2017-04-04', 'newscomment', 'read'),
(237, 44, 'someone has liked your post', 56, '2017-04-04', 'newslike', 'read'),
(238, 0, 'Successfully Updated Your Post', 0, '2017-04-04', 'editnews', 'read'),
(239, 0, 'Successfully Updated Your Post', 0, '2017-04-04', 'editnews', 'read'),
(240, 24, 'someone has liked your post', 35, '2017-04-04', 'postslike', 'read'),
(241, 44, 'someone has liked your post', 56, '2017-04-04', 'newslike', 'read'),
(242, 44, 'someone has liked your post', 56, '2017-04-04', 'newslike', 'read'),
(243, 24, 'someone has liked your post', 31, '2017-04-04', 'postslike', 'read'),
(244, 24, 'someone has liked your post', 30, '2017-04-04', 'postslike', 'read'),
(245, 24, 'someone has liked your post', 33, '2017-04-04', 'postslike', 'read'),
(246, 71, 'Your Post Has Been Successfully Posted', 0, '2017-04-04', 'userhome', 'read'),
(247, 71, 'someone has liked your post', 18, '2017-04-04', 'postslike', 'read'),
(248, 71, 'someone has liked your post', 36, '2017-04-04', 'postslike', 'read'),
(249, 71, 'someone has liked your post', 56, '2017-04-04', 'newslike', 'read'),
(250, 71, 'Successfully Updated Your Details', 0, '2017-04-04', 'editdetails', 'read'),
(251, 32, 'someone has liked your post', 34, '2017-04-05', 'postslike', 'read'),
(252, 32, 'someone has commented on your post', 34, '2017-04-05', 'postscomments', 'read'),
(253, 32, 'someone has liked your post', 33, '2017-04-05', 'postslike', 'read'),
(254, 32, 'someone has liked your post', 31, '2017-04-05', 'postslike', 'read'),
(255, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(256, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(257, 32, 'someone has liked your post', 38, '2017-04-05', 'postslike', 'read'),
(258, 32, 'Successfully Updated your post', 0, '2017-04-05', 'editposts', 'read'),
(259, 32, 'someone has liked your post', 37, '2017-04-05', 'postslike', 'read'),
(260, 32, 'someone has commented on your post', 36, '2017-04-05', 'postscomments', 'read'),
(261, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(262, 32, 'someone has liked your post', 39, '2017-04-05', 'postslike', 'read'),
(263, 32, 'Successfully Updated your post', 0, '2017-04-05', 'editposts', 'read'),
(264, 74, 'someone has liked your post', 39, '2017-04-05', 'postslike', 'read'),
(265, 74, 'someone has liked your post', 38, '2017-04-05', 'postslike', 'read'),
(266, 74, 'someone has liked your post', 37, '2017-04-05', 'postslike', 'read'),
(267, 74, 'someone has commented on your post', 37, '2017-04-05', 'postscomments', 'read'),
(268, 74, 'someone has liked your post', 36, '2017-04-05', 'postslike', 'read'),
(269, 74, 'someone has liked your post', 35, '2017-04-05', 'postslike', 'read'),
(270, 74, 'someone has liked your post', 34, '2017-04-05', 'postslike', 'read'),
(271, 74, 'someone has liked your post', 33, '2017-04-05', 'postslike', 'read'),
(272, 74, 'someone has liked your post', 31, '2017-04-05', 'postslike', 'read'),
(273, 74, 'someone has liked your post', 30, '2017-04-05', 'postslike', 'read'),
(274, 74, 'someone has liked your post', 29, '2017-04-05', 'postslike', 'read'),
(275, 74, 'someone has liked your post', 28, '2017-04-05', 'postslike', 'read'),
(276, 74, 'someone has liked your post', 27, '2017-04-05', 'postslike', 'read'),
(277, 74, 'someone has liked your post', 26, '2017-04-05', 'postslike', 'read'),
(278, 74, 'someone has liked your post', 18, '2017-04-05', 'postslike', 'read'),
(279, 74, 'someone has liked your post', 17, '2017-04-05', 'postslike', 'read'),
(280, 69, 'Successfully Updated Your Details', 0, '2017-04-05', 'editdetails', 'read'),
(281, 75, 'someone has liked your post', 51, '2017-04-05', 'newslike', 'read'),
(282, 76, 'Successfully Changed Your Cover Photo', 0, '2017-04-05', 'changecoverphoto', 'read'),
(283, 76, 'Successfully Changed Your Cover Photo', 0, '2017-04-05', 'changecoverphoto', 'read'),
(284, 76, 'Successfully Changed Your Cover Photo', 0, '2017-04-05', 'changecoverphoto', 'read'),
(285, 28, 'someone has liked your post', 51, '2017-04-05', 'newslike', 'unread'),
(286, 48, 'someone has liked your post', 39, '2017-04-05', 'postslike', 'read'),
(287, 48, 'someone has liked your post', 39, '2017-04-05', 'postslike', 'read'),
(288, 48, 'someone has liked your post', 53, '2017-04-05', 'newslike', 'read'),
(289, 48, 'someone has liked your post', 52, '2017-04-05', 'newslike', 'unread'),
(290, 0, 'Successfully Updated Your Post', 0, '2017-04-05', 'editnews', 'read'),
(291, 38, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(292, 38, 'someone has commented on your post', 51, '2017-04-05', 'newscomment', 'read'),
(293, 49, 'someone has liked your post', 47, '2017-04-05', 'newslike', 'read'),
(294, 49, 'someone has liked your post', 47, '2017-04-05', 'newslike', 'read'),
(295, 49, 'someone has liked your post', 47, '2017-04-05', 'newslike', 'read'),
(296, 38, 'someone has liked your post', 33, '2017-04-05', 'postslike', 'read'),
(297, 62, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(298, 38, 'someone has liked your post', 29, '2017-04-05', 'postslike', 'read'),
(299, 38, 'someone has liked your post', 47, '2017-04-05', 'newslike', 'read'),
(300, 33, 'someone has liked your post', 53, '2017-04-05', 'newslike', 'read'),
(301, 78, 'someone has liked your post', 40, '2017-04-05', 'postslike', 'read'),
(302, 78, 'someone has liked your post', 37, '2017-04-05', 'postslike', 'read'),
(303, 76, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(304, 76, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(305, 76, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(306, 76, 'someone has commented on your post', 38, '2017-04-05', 'postscomments', 'read'),
(307, 76, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(308, 76, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(309, 32, 'someone has liked your post', 46, '2017-04-05', 'postslike', 'read'),
(310, 32, 'someone has liked your post', 40, '2017-04-05', 'postslike', 'read'),
(311, 32, 'someone has commented on your post', 38, '2017-04-05', 'postscomments', 'read'),
(312, 32, 'someone has commented on your post', 38, '2017-04-05', 'postscomments', 'read'),
(313, 76, 'Successfully Updated your post', 0, '2017-04-05', 'editposts', 'read'),
(314, 76, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(315, 76, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(316, 32, 'someone has liked your post', 6, '2017-04-05', 'eventslike', 'read'),
(317, 32, 'someone has liked your post', 48, '2017-04-05', 'postslike', 'read'),
(318, 32, 'someone has liked your post', 47, '2017-04-05', 'postslike', 'read'),
(319, 32, 'someone has commented on your post', 37, '2017-04-05', 'postscomments', 'read'),
(320, 42, 'someone has liked your post', 37, '2017-04-05', 'postslike', 'read'),
(321, 42, 'someone has liked your post', 37, '2017-04-05', 'postslike', 'read'),
(322, 71, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(323, 71, 'someone has commented on your post', 37, '2017-04-05', 'postscomments', 'read'),
(324, 71, 'someone has commented on your post', 37, '2017-04-05', 'postscomments', 'read'),
(325, 71, 'someone has commented on your post', 36, '2017-04-05', 'postscomments', 'read'),
(326, 71, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(327, 71, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(328, 71, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(329, 71, 'Successfully Changed Your Cover Photo', 0, '2017-04-05', 'changecoverphoto', 'read'),
(330, 71, 'Successfully Changed Your Cover Photo', 0, '2017-04-05', 'changecoverphoto', 'read'),
(331, 32, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(332, 32, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(333, 32, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(334, 32, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(335, 32, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(336, 22, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(337, 32, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(338, 22, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(339, 22, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(340, 22, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(341, 22, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(342, 22, 'someone has liked your post', 59, '2017-04-05', 'newslike', 'read'),
(343, 22, 'someone has liked your post', 59, '2017-04-05', 'newslike', 'read'),
(344, 22, 'someone has liked your post', 59, '2017-04-05', 'newslike', 'read'),
(345, 22, 'someone has liked your post', 59, '2017-04-05', 'newslike', 'read'),
(346, 22, 'someone has liked your post', 59, '2017-04-05', 'newslike', 'read'),
(347, 22, 'someone has liked your post', 59, '2017-04-05', 'newslike', 'read'),
(348, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(349, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(350, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(351, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(352, 22, 'someone has liked your post', 59, '2017-04-05', 'newslike', 'read'),
(353, 22, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(354, 22, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(355, 38, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(356, 38, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(357, 38, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(358, 38, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(359, 38, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(360, 38, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(361, 38, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(362, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(363, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(364, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(365, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(366, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(367, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(368, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(369, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(370, 32, 'someone has liked your post', 50, '2017-04-05', 'postslike', 'read'),
(371, 32, 'someone has liked your post', 50, '2017-04-05', 'postslike', 'read'),
(372, 32, 'someone has liked your post', 50, '2017-04-05', 'postslike', 'read'),
(373, 32, 'someone has liked your post', 50, '2017-04-05', 'postslike', 'read'),
(374, 32, 'someone has liked your post', 50, '2017-04-05', 'postslike', 'read'),
(375, 32, 'someone has liked your post', 50, '2017-04-05', 'postslike', 'read'),
(376, 32, 'someone has liked your post', 50, '2017-04-05', 'postslike', 'read'),
(377, 32, 'someone has liked your post', 50, '2017-04-05', 'postslike', 'read'),
(378, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(379, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(380, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(381, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(382, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(383, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(384, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(385, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(386, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(387, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(388, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(389, 32, 'someone has commented on your post', 51, '2017-04-05', 'postscomments', 'read'),
(390, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(391, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(392, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(393, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(394, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(395, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(396, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(397, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(398, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(399, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(400, 32, 'someone has liked your post', 51, '2017-04-05', 'postslike', 'read'),
(401, 71, 'Your Post Has Been Successfully Posted', 0, '2017-04-05', 'userhome', 'read'),
(402, 71, 'someone has liked your post', 52, '2017-04-05', 'postslike', 'read'),
(403, 71, 'someone has liked your post', 52, '2017-04-05', 'postslike', 'read'),
(404, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(405, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(406, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(407, 32, 'someone has liked your post', 59, '2017-04-05', 'newslike', 'read'),
(408, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(409, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(410, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(411, 32, 'someone has liked your post', 61, '2017-04-05', 'newslike', 'read'),
(412, 32, 'someone has liked your post', 51, '2017-04-05', 'newslike', 'read'),
(413, 32, 'someone has liked your post', 55, '2017-04-05', 'newslike', 'read'),
(414, 32, 'someone has liked your post', 55, '2017-04-05', 'newslike', 'read'),
(415, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(416, 32, 'someone has liked your post', 52, '2017-04-05', 'postslike', 'read'),
(417, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(418, 32, 'someone has liked your post', 6, '2017-04-05', 'eventslike', 'read'),
(419, 32, 'someone has liked your post', 6, '2017-04-05', 'eventslike', 'read'),
(420, 32, 'someone has liked your post', 52, '2017-04-05', 'postslike', 'read'),
(421, 32, 'someone has liked your post', 6, '2017-04-05', 'eventslike', 'read'),
(422, 32, 'someone has liked your post', 6, '2017-04-05', 'eventslike', 'read'),
(423, 32, 'someone has liked your post', 62, '2017-04-05', 'newslike', 'read'),
(424, 32, 'someone has liked your post', 40, '2017-04-05', 'postslike', 'read'),
(425, 32, 'someone has liked your post', 40, '2017-04-05', 'postslike', 'read'),
(426, 71, 'Your Post Has Been Successfully Posted', 0, '2017-04-06', 'userhome', 'read'),
(427, 32, 'someone has commented on your post', 66, '2017-04-06', 'newscomment', 'read'),
(428, 22, 'someone has commented on your post', 66, '2017-04-06', 'newscomment', 'read'),
(429, 24, 'Successfully Changed Your Cover Photo', 0, '2017-04-07', 'changecoverphoto', 'read'),
(430, 24, 'Successfully Changed Your Cover Photo', 0, '2017-04-07', 'changecoverphoto', 'read'),
(431, 24, 'Your Post Has Been Successfully Posted', 0, '2017-04-07', 'userhome', 'read'),
(432, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-08', 'userhome', 'read'),
(433, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-10', 'userhome', 'read'),
(434, 32, 'someone has commented on your post', 74, '2017-04-10', 'newscomment', 'read'),
(435, 24, 'Your Post Has Been Successfully Posted', 0, '2017-04-10', 'userhome', 'read'),
(436, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-10', 'userhome', 'read'),
(437, 32, 'someone has commented on your post', 73, '2017-04-11', 'newscomment', 'read'),
(438, 32, 'You Successfully Commented On A Article : PreCouponz, Coupons and Offers', 0, '2017-04-11', '', 'read'),
(439, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(440, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(441, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(442, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(443, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(444, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(445, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(446, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(447, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(448, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(449, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(450, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(451, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(452, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(453, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(454, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(455, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(456, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(457, 32, 'Successfully Updated your post', 0, '2017-04-11', 'editposts', 'read'),
(458, 32, 'Successfully Updated your post', 0, '2017-04-11', 'editposts', 'read'),
(459, 88, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(460, 88, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(461, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-11', 'userhome', 'read'),
(462, 88, 'Your Post Has Been Successfully Posted', 0, '2017-04-12', 'userhome', 'read'),
(463, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-12', 'userhome', 'read'),
(464, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-12', 'userhome', 'read'),
(465, 88, 'Your Post Has Been Successfully Posted', 0, '2017-04-12', 'userhome', 'read'),
(466, 88, 'Your Post Has Been Successfully Posted', 0, '2017-04-12', 'userhome', 'read'),
(467, 88, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(468, 88, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(469, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(470, 56, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(471, 91, 'Successfully Changed Your Profile Photo', 0, '2017-04-13', 'changeprofilephoto', 'read'),
(472, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(473, 32, 'Successfully Updated your post', 0, '2017-04-13', 'editposts', 'read'),
(474, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(475, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(476, 57, 'Successfully Changed Your Cover Photo', 0, '2017-04-13', 'changecoverphoto', 'read'),
(477, 56, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(478, 56, 'Your Post Has Been Successfully Posted', 0, '2017-04-13', 'userhome', 'read'),
(479, 91, 'Your Post Has Been Successfully Posted', 0, '2017-04-14', 'userhome', 'read'),
(480, 56, 'Successfully Changed Your Cover Photo', 0, '2017-04-14', 'changecoverphoto', 'read'),
(481, 24, 'Your Post Has Been Successfully Posted', 0, '2017-04-15', 'userhome', 'read'),
(482, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-16', 'userhome', 'read'),
(483, 32, 'Successfully Changed Your Status', 0, '2017-04-16', 'changestatus', 'read'),
(484, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-16', 'userhome', 'read'),
(485, 32, 'Successfully Updated your post', 0, '2017-04-16', 'editposts', 'read'),
(486, 24, 'Your Post Has Been Successfully Posted', 0, '2017-04-17', 'userhome', 'read'),
(487, 56, 'Your Post Has Been Successfully Posted', 0, '2017-04-17', 'userhome', 'read'),
(488, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-17', 'userhome', 'read'),
(489, 102, 'Your Post Has Been Successfully Posted', 0, '2017-04-17', 'userhome', 'unread'),
(490, 102, 'Your Post Has Been Successfully Posted', 0, '2017-04-17', 'userhome', 'unread'),
(491, 102, 'Your Post Has Been Successfully Posted', 0, '2017-04-18', 'userhome', 'unread'),
(492, 102, 'Your Post Has Been Successfully Posted', 0, '2017-04-18', 'userhome', 'unread'),
(493, 63, 'Your Post Has Been Successfully Posted', 0, '2017-04-19', 'userhome', 'unread'),
(494, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-19', 'userhome', 'read'),
(495, 104, 'Successfully Changed Your Profile Photo', 0, '2017-04-20', 'changeprofilephoto', 'unread'),
(496, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-21', 'userhome', 'read'),
(497, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-21', 'userhome', 'read'),
(498, 32, 'Successfully Updated your post', 0, '2017-04-21', 'editposts', 'read'),
(499, 32, 'Your Post Has Been Successfully Posted', 0, '2017-04-22', 'userhome', 'read'),
(500, 106, 'Your Post Has Been Successfully Posted', 0, '2017-04-22', 'userhome', 'read'),
(501, 106, 'Successfully Changed Your Profile Photo', 0, '2017-04-22', 'changeprofilephoto', 'read'),
(502, 32, 'Successfully Updated your post', 0, '2017-04-22', 'editposts', 'read'),
(503, 109, 'Your Post Has Been Successfully Posted', 0, '2017-04-24', 'userhome', 'read'),
(504, 109, 'Your Post Has Been Successfully Posted', 0, '2017-04-24', 'userhome', 'read'),
(505, 32, 'Your Post Has Been Successfully Posted', 0, '2017-05-17', 'userhome', 'read'),
(506, 32, 'Successfully Updated your post', 0, '2017-05-17', 'editposts', 'read'),
(507, 32, 'Successfully Updated your post', 0, '2017-05-17', 'editposts', 'read'),
(508, 32, 'Successfully Updated your post', 0, '2017-05-20', 'editposts', 'read'),
(509, 32, 'Your Post Has Been Successfully Posted', 0, '2017-05-21', 'userhome', 'read'),
(510, 32, 'Your Post Has Been Successfully Posted', 0, '2017-05-23', 'userhome', 'read'),
(511, 0, 'Successfully Updated your post', 0, '2017-05-25', 'editposts', 'read'),
(512, 32, 'Your Post Has Been Successfully Posted', 0, '2017-05-27', 'userhome', 'read'),
(513, 32, 'Successfully Changed Your Profile Photo', 0, '2017-05-28', 'changeprofilephoto', 'read'),
(514, 33, 'Successfully Changed Your Profile Photo', 0, '2017-05-29', 'changeprofilephoto', 'read'),
(515, 33, 'Your Post Has Been Successfully Posted', 0, '2017-05-29', 'userhome', 'read'),
(516, 33, 'Successfully Changed Your Profile Photo', 0, '2017-05-29', 'changeprofilephoto', 'read'),
(517, 33, 'Successfully Changed Your Profile Photo', 0, '2017-05-29', 'changeprofilephoto', 'read'),
(518, 57, 'Your Post Has Been Successfully Posted', 0, '2017-06-16', 'userhome', 'read'),
(519, 111, 'someone has commented on your post', 71, '2017-06-17', 'newscomment', 'unread'),
(520, 111, 'someone has commented on your post', 72, '2017-06-17', 'newscomment', 'unread'),
(521, 111, 'someone has commented on your post', 76, '2017-06-17', 'newscomment', 'unread'),
(522, 111, 'someone has commented on your post', 72, '2017-06-17', 'newscomment', 'unread'),
(523, 66, 'someone has commented on your post', 71, '2017-06-17', 'newscomment', 'unread'),
(524, 66, 'someone has commented on your post', 72, '2017-06-17', 'newscomment', 'unread'),
(525, 66, 'someone has commented on your post', 76, '2017-06-17', 'newscomment', 'unread'),
(526, 112, 'Your Post Has Been Successfully Posted', 0, '2017-06-20', 'userhome', 'read'),
(527, 112, 'Successfully Updated your post', 0, '2017-06-20', 'editposts', 'read'),
(528, 24, 'Successfully Updated your post', 0, '2017-06-27', 'editposts', 'read'),
(529, 32, 'Successfully Changed Your Cover Photo', 0, '2017-06-27', 'changecoverphoto', 'read'),
(530, 32, 'Successfully Changed Your Cover Photo', 0, '2017-06-27', 'changecoverphoto', 'read'),
(531, 118, 'Your Post Has Been Successfully Posted', 0, '2017-06-29', 'userhome', 'read'),
(532, 24, 'Your Post Has Been Successfully Posted', 0, '2017-07-01', 'userhome', 'read'),
(533, 24, 'Your Post Has Been Successfully Posted', 0, '2017-07-01', 'userhome', 'read'),
(534, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-02', 'userhome', 'read'),
(535, 119, 'Successfully Changed Your Status', 0, '2017-07-02', 'changestatus', 'read'),
(536, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(537, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(538, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(539, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(540, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(541, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(542, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(543, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(544, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(545, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(546, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(547, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(548, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(549, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-03', 'userhome', 'read'),
(550, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-04', 'userhome', 'read'),
(551, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-04', 'userhome', 'read'),
(552, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-04', 'userhome', 'read'),
(553, 119, 'Your Post Has Been Successfully Posted', 0, '2017-07-04', 'userhome', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `online_users`
--

CREATE TABLE IF NOT EXISTS `online_users` (
`id` int(11) NOT NULL,
  `session` char(100) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  `user_email` varchar(100) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(500) NOT NULL,
  `post_image` varchar(500) NOT NULL,
  `post_youtubeurl` varchar(100) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_title`, `post_image`, `post_youtubeurl`, `post_date`) VALUES
(17, 24, 'We r  officially releasing our media website on April 4th', '', '', '2017-04-02 11:40:48'),
(18, 32, '', 'IMG-20170331-WA0007.jpg', '', '2017-04-02 12:50:22'),
(25, 54, 'Dare to dream big ðŸ¯', '', '', '2017-04-03 17:53:28'),
(26, 54, 'Dare to dream big ðŸ¯', '', '', '2017-04-03 17:53:33'),
(27, 32, 'Successfully launched ourmedia.......', '', '', '2017-04-04 09:00:22'),
(28, 56, 'Very happy to be part of this', '', '', '2017-04-04 09:18:37'),
(29, 41, 'Successfully completed our OUR MEDIA startup...', '', '', '2017-04-04 09:36:31'),
(30, 32, 'Awesome.... No words...... ', 'Hyma Tkr 20170404_170009.jpg', '', '2017-04-04 11:37:14'),
(31, 33, 'Glad to be part of OURMEDIAðŸ˜', '', '', '2017-04-04 12:11:31'),
(33, 24, 'Successfully launched ourmedia website total credit goes to team coordinator n interns.....Tysm guys for supporting USS ..', '', '', '2017-04-04 16:32:03'),
(34, 62, 'Nice features...\r\nWe expect more from you @OurMedia.\r\nCongrats & All the best to #Team_OurMedia', '', '', '2017-04-04 16:34:54'),
(37, 32, 'Happy sri rama navami....', 'FB_IMG_1491331209360.jpg', '', '2017-04-04 18:41:28'),
(38, 32, 'Dont upload complete url of your YouTube video.....\r\nJust copy ur id... Which is after equal to symbol from your url......', '', '', '2017-04-04 18:44:05'),
(39, 32, 'Mind walkers..... Performance.... We just support them.... They are also students like us...', '', 'wpM67y1Vfio', '2017-04-04 19:12:46'),
(40, 38, 'First reaction on Baahubali the conclusion trailer', '', 'TmAPjpkN-pw', '2017-04-05 04:41:25'),
(46, 76, 'Janatha complex spoof of janatha garage, crossed above 77k views. It is only for fun enjoy it ', 'FB_IMG_1491373312648.jpg', 'QmEFHpQQCkM', '2017-04-05 06:37:19'),
(47, 76, 'Making of janatha complex. We shooted it with moblie phone my dop prashanth Sriram done a hard work to get a good output with a simple Android phone ', '', '5z-W_xxOO1g', '2017-04-05 06:43:45'),
(48, 76, 'This is my first short film trailer. Zero budget. Watch it in dark light with headphones ', '', 'QYuDNJ-1dI0', '2017-04-05 06:48:08'),
(52, 71, '', '', 'S30D71M-xKc', '2017-04-05 13:29:12'),
(53, 71, '', '', 'Mvq8EEpPwNc', '2017-04-06 13:10:44'),
(55, 32, 'enjoyed a Lot..........\r\nTraditional Day.......\r\n', 'fbc0211c-ff91-4caf-9eb2-23390e39ee59.jpg', '', '2017-04-08 17:42:35'),
(57, 24, 'feeling sad ....', '', '', '2017-04-10 11:41:09'),
(71, 32, '', '', '8umHz2Y7V30', '2017-04-12 14:37:22'),
(74, 88, '', '', 'hi0BJrLoDKA', '2017-04-13 03:22:17'),
(75, 88, '', '', 'gO736y3z67k', '2017-04-13 03:26:46'),
(76, 32, '', 'IMG_20170412_171901_828.jpg', '', '2017-05-20 15:09:38'),
(77, 56, 'Fulling very happy that our whole clg has got known abt ourmedia', '', '', '2017-04-13 11:53:01'),
(79, 32, '', '14522872_10153922712722371_6710046472513648553_n.jpg', '', '2017-04-13 13:14:18'),
(82, 56, 'A grt click', 'IMG_20170410_181712.jpg', '', '2017-04-14 06:56:34'),
(83, 91, 'Pic on Ourmedia launch...', 'received_987341294741584_1491364586374.jpeg', '', '2017-04-14 17:55:55'),
(84, 24, 'This 7logics help u in future to become success', 'FB_IMG_1492192413023.jpg', '', '2017-04-15 17:09:10'),
(85, 32, 'Many many happy returns of the day ra.......bakki sandhya.ðŸ˜â¤ðŸ˜', '2017-04-16-13-28-49-307.jpg', '', '2017-04-16 08:05:29'),
(87, 24, 'happy bday bablu have a blast ', '', '', '2017-04-17 18:03:07'),
(88, 56, 'A best click with the best bro', 'IMG_20170409_200426.jpg', '', '2017-04-18 03:43:29'),
(89, 32, 'Many many happy returns of the day baba....', 'IMG_9097.JPG', '', '2017-04-18 04:35:53'),
(92, 63, '', '', 'LJhuWLoSgtE', '2017-04-19 13:15:56'),
(93, 32, 'Bestie......ðŸ˜â¤ðŸ˜', 'IMG_20170415_010543_631-1.jpg', '', '2017-04-20 05:30:21'),
(96, 32, 'My video........<br> how to enable login approvals.', '', '5EPTWcWeKM0', '2017-04-22 16:21:49'),
(97, 106, 'frienda please like and subscribe and also share my friend first motion picture this is only first look so please kindly like and subscribe', '', 'keOt0WsUIBg', '2017-04-22 16:14:26'),
(98, 109, '', '', 'https://www.youtube.com/watch?v=JxhNpjed1u4', '2017-04-25 06:52:05'),
(99, 109, 'Ishq De Qaid By Sam Khan 2017 Latest Punjabi Sad Song', 'samkhanunits.jpg', 'https://www.youtube.com/watch?v=JxhNpjed1u4', '2017-04-25 06:53:56'),
(101, 32, 'I am going to change myself......', '2017-05-21-13-10-05-262.jpg', '', '2017-05-21 09:01:14'),
(102, 32, 'Congratulations bro..... All india level.', 'Screenshot_20170523-174214.jpg', '', '2017-05-23 12:15:59'),
(103, 32, 'When we love a friend .... in return he loves us.<br>\r\nWhen we hate a friend .... In return he hates us.<br>\r\nWhen we are disposal to him .... In return he will be.<br>\r\nThe only one person who will return only love is....... Our parents. ( U show irritation, U show angryness ...... They just show love in return. ).', 'IMG_9044_mr1490297941554.jpg', '', '2017-05-27 15:44:36'),
(104, 57, 'Bharath..!\r\n You are ..\r\n     A real human being,\r\n     A beautiful gift to many Girls,\r\n     A beautiful Gift in this beautiful Nature\r\n     8th wonder in this world,\r\n     Still a question mark for Google,\r\n     An hard core fan of sunnyleone,\r\n     Not only these mama...\r\n\r\n   Each and Everything which is related to u is a miracle.. \r\n   Hope all your Dreems come true and we believe that you''ll be one of the Best CEO of top most companies allover the world.\r\n   And you are the only person who', 'IMG-20170617-WA0003.jpg', '', '2017-06-16 21:28:08'),
(105, 112, 'WHO WE ARE ?\r\n\r\nOnline Web Jobs is an online advertising networkâ€”bringing together advertisers, online advertising agencies, and publishers to boost their digital ROI.\r\n\r\nWHAT WE DO ?\r\n\r\nWe increase your bottom line through powerful ad technologies. Whether you want better performing ad campaigns, or higher revenues from site traffic, World connecting now can deliver you superior results.\r\n\r\n\r\nHOW WE''RE DIFFERENT\r\n\r\nWhat sets us apart from other ad networks? Our powerful mix of industry-leadin', 'logo.png', 'https://youtu.be/AxHiIqhEhDg', '2017-06-20 09:38:15'),
(106, 118, 'hii\r\n', '', '', '2017-06-29 10:59:37'),
(107, 24, '', '6.jpg', '', '2017-07-01 12:28:50'),
(108, 24, '', '6.jpg', '', '2017-07-01 14:46:02'),
(109, 119, '', 'Abhishek-and-Aishwarya-perform-rituals.jpeg', '', '2017-07-02 08:44:07'),
(110, 119, 'dsfkifhia', 'Abhishek-and-Aishwarya-perform-rituals.jpeg', '', '2017-07-03 08:26:35'),
(111, 119, '', '24shaadi8.jpg', '', '2017-07-03 08:27:28'),
(112, 119, '', 'Abhishek-and-Aishwarya-perform-rituals.jpeg', '', '2017-07-03 08:32:39'),
(113, 119, '', '63141-31-Hilton-Universal-City-Indian-Wedding-Photography-CA.jpeg', '', '2017-07-03 08:41:52'),
(114, 119, '', '63141-31-Hilton-Universal-City-Indian-Wedding-Photography-CA.jpeg', '', '2017-07-03 09:33:22'),
(115, 119, '', '3.jpg', '', '2017-07-03 10:48:48'),
(116, 119, '', '8.jpg', '', '2017-07-03 11:20:54'),
(117, 119, '', 'p13.jpg', '', '2017-07-03 11:22:22'),
(118, 119, '', '10.jpg', '', '2017-07-03 13:21:04'),
(119, 119, '', 'Abhishek-and-Aishwarya-perform-rituals.jpeg', '', '2017-07-04 05:17:42'),
(120, 119, '', 'Abhishek-and-Aishwarya-perform-rituals.jpeg', '', '2017-07-04 05:23:31'),
(121, 119, '', 'Abhishek-and-Aishwarya-perform-rituals.jpeg', '', '2017-07-04 05:25:50'),
(122, 119, '', '63141-31-Hilton-Universal-City-Indian-Wedding-Photography-CA.jpeg', '', '2017-07-04 05:31:13'),
(123, 119, '', '63141-31-Hilton-Universal-City-Indian-Wedding-Photography-CA.jpeg', '', '2017-07-04 06:07:52'),
(124, 119, '', '6.jpg', '', '2017-07-04 10:54:04'),
(125, 119, '', '1.jpg', '', '2017-07-04 16:04:13'),
(126, 119, '', '6.jpg', '', '2017-07-05 05:59:24'),
(127, 119, '', '11.jpg', '', '2017-07-05 06:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE IF NOT EXISTS `post_comments` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `post_id` int(11) unsigned NOT NULL,
  `comment` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=548 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `post_id`, `comment`, `created`, `modified`) VALUES
(210, 32, 51, 'yes', '2017-04-05 18:39:08', '2017-04-05 18:39:08'),
(211, 32, 51, 'yes', '2017-04-05 18:39:08', '2017-04-05 18:39:08'),
(212, 32, 51, 'yes', '2017-04-05 18:39:08', '2017-04-05 18:39:08'),
(213, 32, 51, 'yes', '2017-04-05 18:39:08', '2017-04-05 18:39:08'),
(214, 32, 51, 'yes', '2017-04-05 18:39:09', '2017-04-05 18:39:09'),
(215, 32, 51, 'yes', '2017-04-05 18:39:09', '2017-04-05 18:39:09'),
(216, 32, 51, 'yes', '2017-04-05 18:39:09', '2017-04-05 18:39:09'),
(217, 32, 51, 'yes', '2017-04-05 18:39:10', '2017-04-05 18:39:10'),
(228, 32, 53, 'good', '2017-04-10 12:39:21', '2017-04-10 12:39:21'),
(230, 32, 58, 'abcd', '2017-04-10 17:29:05', '2017-04-10 17:29:05'),
(231, 32, 58, 'abcd', '2017-04-10 17:29:06', '2017-04-10 17:29:06'),
(232, 32, 58, 'abcd', '2017-04-10 17:29:07', '2017-04-10 17:29:07'),
(233, 32, 58, 'abcd', '2017-04-10 17:29:07', '2017-04-10 17:29:07'),
(234, 32, 58, 'abcd', '2017-04-10 17:29:08', '2017-04-10 17:29:08'),
(235, 32, 58, 'abcd', '2017-04-10 17:29:08', '2017-04-10 17:29:08'),
(236, 32, 58, 'abcd', '2017-04-10 17:29:08', '2017-04-10 17:29:08'),
(237, 32, 58, 'abcd', '2017-04-10 17:29:08', '2017-04-10 17:29:08'),
(238, 32, 58, 'abcd', '2017-04-10 17:29:08', '2017-04-10 17:29:08'),
(239, 32, 58, 'abcd', '2017-04-10 17:29:09', '2017-04-10 17:29:09'),
(240, 32, 58, 'abcd', '2017-04-10 17:29:09', '2017-04-10 17:29:09'),
(241, 32, 58, 'abcd', '2017-04-10 17:29:09', '2017-04-10 17:29:09'),
(242, 32, 58, 'abcd', '2017-04-10 17:29:10', '2017-04-10 17:29:10'),
(245, 32, 48, 'hg', '2017-04-11 16:46:15', '2017-04-11 16:46:15'),
(246, 32, 48, 'hg', '2017-04-11 16:46:16', '2017-04-11 16:46:16'),
(247, 32, 56, 'good', '2017-04-11 16:47:16', '2017-04-11 16:47:16'),
(248, 32, 56, 'good', '2017-04-11 16:47:16', '2017-04-11 16:47:16'),
(249, 32, 57, 'what happend', '2017-04-11 18:35:24', '2017-04-11 18:35:24'),
(250, 32, 57, 'what happend', '2017-04-11 18:35:24', '2017-04-11 18:35:24'),
(251, 32, 59, 'comment', '2017-04-11 18:41:17', '2017-04-11 18:41:17'),
(252, 32, 59, 'comment', '2017-04-11 18:41:18', '2017-04-11 18:41:18'),
(253, 32, 59, 'tes', '2017-04-11 18:47:11', '2017-04-11 18:47:11'),
(254, 32, 59, 'tes', '2017-04-11 18:47:11', '2017-04-11 18:47:11'),
(255, 32, 57, '', '2017-04-11 21:06:38', '2017-04-11 21:06:38'),
(256, 32, 57, '', '2017-04-11 21:06:38', '2017-04-11 21:06:38'),
(257, 32, 57, 'mhj', '2017-04-11 21:08:38', '2017-04-11 21:08:38'),
(258, 32, 57, 'mhj', '2017-04-11 21:08:38', '2017-04-11 21:08:38'),
(259, 32, 68, 'where is delete and edit button?', '2017-04-11 22:24:30', '2017-04-11 22:24:30'),
(260, 32, 68, 'where is delete and edit button?', '2017-04-11 22:24:30', '2017-04-11 22:24:30'),
(261, 32, 68, 'hmm', '2017-04-11 22:45:46', '2017-04-11 22:45:46'),
(262, 32, 68, 'hmm', '2017-04-11 22:45:46', '2017-04-11 22:45:46'),
(271, 32, 17, 'all the best', '2017-04-12 18:13:05', '2017-04-12 18:13:05'),
(272, 32, 17, 'all the best', '2017-04-12 18:13:08', '2017-04-12 18:13:08'),
(273, 32, 70, 'Hii', '2017-04-12 18:19:59', '2017-04-12 18:19:59'),
(274, 32, 70, 'Hii', '2017-04-12 18:19:59', '2017-04-12 18:19:59'),
(275, 32, 72, 'bro if u need any help regarding upload of ur youtube vide pls msg me here in ourmedia', '2017-04-12 21:37:18', '2017-04-12 21:37:18'),
(276, 32, 72, 'bro if u need any help regarding upload of ur youtube vide pls msg me here in ourmedia', '2017-04-12 21:37:18', '2017-04-12 21:37:18'),
(277, 32, 57, 'say me what happened ra...', '2017-04-12 21:41:09', '2017-04-12 21:41:09'),
(278, 32, 57, 'say me what happened ra...', '2017-04-12 21:41:09', '2017-04-12 21:41:09'),
(279, 88, 74, 'Everyone should know about this technical feature', '2017-04-13 08:53:25', '2017-04-13 08:53:25'),
(280, 88, 74, 'Everyone should know about this technical feature', '2017-04-13 08:53:25', '2017-04-13 08:53:25'),
(281, 24, 55, 'nyc', '2017-04-13 13:37:07', '2017-04-13 13:37:07'),
(282, 24, 55, 'nyc', '2017-04-13 13:37:07', '2017-04-13 13:37:07'),
(283, 56, 55, 'Very funny', '2017-04-13 17:17:12', '2017-04-13 17:17:12'),
(284, 56, 55, 'Very funny', '2017-04-13 17:17:12', '2017-04-13 17:17:12'),
(285, 32, 77, 'yes', '2017-04-13 18:42:40', '2017-04-13 18:42:40'),
(286, 32, 77, 'yes', '2017-04-13 18:42:40', '2017-04-13 18:42:40'),
(287, 57, 77, 'Yes...!!', '2017-04-13 21:32:12', '2017-04-13 21:32:12'),
(288, 57, 77, 'Yes...!!', '2017-04-13 21:32:12', '2017-04-13 21:32:12'),
(289, 56, 80, 'Devudaa', '2017-04-13 23:54:51', '2017-04-13 23:54:51'),
(290, 56, 80, 'Devudaa', '2017-04-13 23:54:51', '2017-04-13 23:54:51'),
(291, 56, 30, 'Tq ', '2017-04-13 23:58:50', '2017-04-13 23:58:50'),
(292, 56, 30, 'Tq ', '2017-04-13 23:58:50', '2017-04-13 23:58:50'),
(293, 32, 82, 'good looking', '2017-04-13 23:59:40', '2017-04-13 23:59:40'),
(294, 32, 82, 'good looking', '2017-04-13 23:59:40', '2017-04-13 23:59:40'),
(295, 56, 82, 'Tq bro', '2017-04-14 00:01:05', '2017-04-14 00:01:05'),
(296, 56, 82, 'Tq bro', '2017-04-14 00:01:05', '2017-04-14 00:01:05'),
(297, 24, 83, 'NYC pic', '2017-04-15 08:11:34', '2017-04-15 08:11:34'),
(298, 24, 83, 'NYC pic', '2017-04-15 08:11:34', '2017-04-15 08:11:34'),
(299, 91, 83, 'Tq bharath. ', '2017-04-16 02:22:16', '2017-04-16 02:22:16'),
(300, 91, 83, 'Tq bharath. ', '2017-04-16 02:22:16', '2017-04-16 02:22:16'),
(301, 24, 83, 'Hey nen missing', '2017-04-16 11:01:19', '2017-04-16 11:01:19'),
(303, 91, 83, '', '2017-04-16 12:55:42', '2017-04-16 12:55:42'),
(304, 91, 83, '', '2017-04-16 12:55:42', '2017-04-16 12:55:42'),
(305, 57, 82, 'Nice click', '2017-04-17 18:56:36', '2017-04-17 18:56:36'),
(306, 57, 82, 'Nice click', '2017-04-17 18:56:36', '2017-04-17 18:56:36'),
(307, 57, 82, 'Nice click', '2017-04-17 18:56:43', '2017-04-17 18:56:43'),
(309, 56, 82, 'Tq', '2017-04-17 19:35:41', '2017-04-17 19:35:41'),
(310, 56, 82, 'Tq', '2017-04-17 19:35:41', '2017-04-17 19:35:41'),
(311, 57, 88, 'TQ sis sorry TQ my best sis..', '2017-04-17 20:56:36', '2017-04-17 20:56:36'),
(312, 57, 88, 'TQ sis sorry TQ my best sis..', '2017-04-17 20:56:36', '2017-04-17 20:56:36'),
(313, 32, 87, 'Hpy bday bablu', '2017-04-17 21:32:50', '2017-04-17 21:32:50'),
(314, 32, 87, 'Hpy bday bablu', '2017-04-17 21:32:50', '2017-04-17 21:32:50'),
(315, 24, 89, 'Happy bday uncle', '2017-04-17 22:14:55', '2017-04-17 22:14:55'),
(317, 56, 88, 'Haha tq anduku chelli ki', '2017-04-17 23:40:47', '2017-04-17 23:40:47'),
(318, 56, 88, 'Haha tq anduku chelli ki', '2017-04-17 23:40:47', '2017-04-17 23:40:47'),
(319, 56, 88, 'Haha tq anduku chelli ki', '2017-04-17 23:40:53', '2017-04-17 23:40:53'),
(320, 56, 88, 'Haha tq anduku chelli ki', '2017-04-17 23:40:53', '2017-04-17 23:40:53'),
(321, 32, 91, 'Try to post only your id........', '2017-04-18 10:06:05', '2017-04-18 10:06:05'),
(322, 32, 91, 'Try to post only your id........', '2017-04-18 10:06:05', '2017-04-18 10:06:05'),
(323, 32, 91, 'Not complete url', '2017-04-18 10:06:19', '2017-04-18 10:06:19'),
(324, 32, 91, 'Not complete url', '2017-04-18 10:06:19', '2017-04-18 10:06:19'),
(325, 32, 91, 'nbvb', '2017-04-18 10:12:23', '2017-04-18 10:12:23'),
(326, 32, 91, 'nbvb', '2017-04-18 10:12:23', '2017-04-18 10:12:23'),
(327, 32, 91, 'nbvb', '2017-04-18 10:12:27', '2017-04-18 10:12:27'),
(328, 32, 91, 'nbvb', '2017-04-18 10:12:27', '2017-04-18 10:12:27'),
(329, 32, 91, 'g', '2017-04-18 10:12:38', '2017-04-18 10:12:38'),
(330, 32, 91, 'g', '2017-04-18 10:12:38', '2017-04-18 10:12:38'),
(331, 32, 91, 'testing', '2017-04-18 10:20:37', '2017-04-18 10:20:37'),
(332, 32, 91, 'testing', '2017-04-18 10:20:37', '2017-04-18 10:20:37'),
(333, 32, 91, 'testing', '2017-04-18 10:20:44', '2017-04-18 10:20:44'),
(334, 32, 91, 'testing', '2017-04-18 10:20:44', '2017-04-18 10:20:44'),
(335, 32, 91, 'good', '2017-04-18 10:20:49', '2017-04-18 10:20:49'),
(336, 32, 91, 'good', '2017-04-18 10:20:49', '2017-04-18 10:20:49'),
(337, 32, 90, 'testing', '2017-04-18 10:21:01', '2017-04-18 10:21:01'),
(338, 32, 90, 'testing', '2017-04-18 10:21:01', '2017-04-18 10:21:01'),
(339, 32, 91, 'fgh', '2017-04-18 10:21:53', '2017-04-18 10:21:53'),
(340, 32, 91, 'fgh', '2017-04-18 10:21:53', '2017-04-18 10:21:53'),
(341, 32, 91, 'bc', '2017-04-18 10:22:04', '2017-04-18 10:22:04'),
(342, 32, 91, 'bc', '2017-04-18 10:22:04', '2017-04-18 10:22:04'),
(343, 32, 91, 'b', '2017-04-18 10:22:07', '2017-04-18 10:22:07'),
(344, 32, 91, 'b', '2017-04-18 10:22:07', '2017-04-18 10:22:07'),
(345, 32, 91, 'g', '2017-04-18 10:22:11', '2017-04-18 10:22:11'),
(346, 32, 91, 'g', '2017-04-18 10:22:11', '2017-04-18 10:22:11'),
(347, 32, 91, 'g', '2017-04-18 10:22:16', '2017-04-18 10:22:16'),
(348, 32, 91, 'g', '2017-04-18 10:22:16', '2017-04-18 10:22:16'),
(349, 32, 91, 'jjj', '2017-04-18 10:22:20', '2017-04-18 10:22:20'),
(350, 32, 91, 'jjj', '2017-04-18 10:22:20', '2017-04-18 10:22:20'),
(351, 32, 91, '', '2017-04-18 10:22:23', '2017-04-18 10:22:23'),
(352, 32, 91, '', '2017-04-18 10:22:23', '2017-04-18 10:22:23'),
(353, 32, 91, '', '2017-04-18 10:22:24', '2017-04-18 10:22:24'),
(354, 32, 91, '', '2017-04-18 10:22:24', '2017-04-18 10:22:24'),
(355, 32, 91, '', '2017-04-18 10:22:25', '2017-04-18 10:22:25'),
(356, 32, 91, '', '2017-04-18 10:22:25', '2017-04-18 10:22:25'),
(357, 32, 91, '', '2017-04-18 10:22:26', '2017-04-18 10:22:26'),
(358, 32, 91, '', '2017-04-18 10:22:26', '2017-04-18 10:22:26'),
(359, 32, 91, '', '2017-04-18 10:22:26', '2017-04-18 10:22:26'),
(360, 32, 91, '', '2017-04-18 10:22:26', '2017-04-18 10:22:26'),
(361, 32, 91, '', '2017-04-18 10:22:27', '2017-04-18 10:22:27'),
(362, 32, 91, '', '2017-04-18 10:22:27', '2017-04-18 10:22:27'),
(363, 32, 91, '', '2017-04-18 10:22:27', '2017-04-18 10:22:27'),
(364, 32, 91, '', '2017-04-18 10:22:27', '2017-04-18 10:22:27'),
(365, 32, 91, '', '2017-04-18 10:22:28', '2017-04-18 10:22:28'),
(366, 32, 91, '', '2017-04-18 10:22:28', '2017-04-18 10:22:28'),
(367, 32, 91, 'fd', '2017-04-18 10:29:23', '2017-04-18 10:29:23'),
(368, 32, 91, 'fd', '2017-04-18 10:29:23', '2017-04-18 10:29:23'),
(369, 24, 78, 'piknav ley', '2017-04-20 08:05:43', '2017-04-20 08:05:43'),
(370, 24, 78, 'piknav ley', '2017-04-20 08:05:43', '2017-04-20 08:05:43'),
(371, 32, 97, 'All the best bhoga....', '2017-04-22 09:20:58', '2017-04-22 09:20:58'),
(372, 32, 97, 'All the best bhoga....', '2017-04-22 09:20:58', '2017-04-22 09:20:58'),
(373, 106, 97, 'tqq raa its not my film raa its my best frend film so plzzz kindly like and subscribe and share', '2017-04-22 09:23:28', '2017-04-22 09:23:28'),
(374, 106, 97, 'tqq raa its not my film raa its my best frend film so plzzz kindly like and subscribe and share', '2017-04-22 09:23:28', '2017-04-22 09:23:28'),
(375, 32, 97, 'Sure bro', '2017-04-22 22:47:10', '2017-04-22 22:47:10'),
(376, 32, 97, 'Sure bro', '2017-04-22 22:47:10', '2017-04-22 22:47:10'),
(377, 32, 99, 'Try to post only  id bro', '2017-04-26 19:46:07', '2017-04-26 19:46:07'),
(378, 32, 99, 'Try to post only  id bro', '2017-04-26 19:46:07', '2017-04-26 19:46:07'),
(383, 32, 89, 'fhf', '2017-06-18 23:24:38', '2017-06-18 23:24:38'),
(384, 32, 89, 'fhf', '2017-06-18 23:24:39', '2017-06-18 23:24:39'),
(385, 32, 89, 'u', '2017-06-18 23:24:42', '2017-06-18 23:24:42'),
(386, 32, 89, 'u', '2017-06-18 23:24:42', '2017-06-18 23:24:42'),
(387, 32, 89, 'go', '2017-06-18 23:24:46', '2017-06-18 23:24:46'),
(388, 32, 89, 'go', '2017-06-18 23:24:46', '2017-06-18 23:24:46'),
(393, 32, 87, 'hjk', '2017-06-22 04:45:15', '2017-06-22 04:45:15'),
(394, 32, 87, 'hjk', '2017-06-22 04:45:15', '2017-06-22 04:45:15'),
(395, 32, 103, 'testing', '2017-06-27 06:20:42', '2017-06-27 06:20:42'),
(396, 32, 103, 'testing', '2017-06-27 06:20:42', '2017-06-27 06:20:42'),
(415, 119, 104, 'fdhedf', '2017-06-30 06:18:12', '2017-06-30 06:18:12'),
(421, 119, 76, 'ghnjghjfg', '2017-07-01 00:39:34', '2017-07-01 00:39:34'),
(422, 119, 76, 'ghnjghjfg', '2017-07-01 00:39:34', '2017-07-01 00:39:34'),
(441, 24, 106, 'lkashfkahf', '2017-07-01 04:59:06', '2017-07-01 04:59:06'),
(450, 119, 108, 'fvjdsljgois', '2017-07-02 00:26:56', '2017-07-02 00:26:56'),
(451, 119, 108, 'dsflkijlf', '2017-07-02 00:26:59', '2017-07-02 00:26:59'),
(452, 119, 108, 'dsflkijlf', '2017-07-02 00:26:59', '2017-07-02 00:26:59'),
(453, 119, 108, 'fjeofi', '2017-07-02 00:27:02', '2017-07-02 00:27:02'),
(455, 119, 108, 'fdhfdh', '2017-07-02 01:41:51', '2017-07-02 01:41:51'),
(456, 119, 108, 'fdhfdh', '2017-07-02 01:41:51', '2017-07-02 01:41:51'),
(457, 119, 104, 'dsfkjg', '2017-07-02 01:42:04', '2017-07-02 01:42:04'),
(458, 119, 104, 'dsfkjg', '2017-07-02 01:42:04', '2017-07-02 01:42:04'),
(459, 119, 108, 'hjdhf', '2017-07-02 22:14:25', '2017-07-02 22:14:25'),
(460, 119, 108, 'hjdhf', '2017-07-02 22:14:25', '2017-07-02 22:14:25'),
(462, 119, 107, 'dfskjf', '2017-07-02 22:14:33', '2017-07-02 22:14:33'),
(463, 119, 106, 'cs', '2017-07-02 22:18:00', '2017-07-02 22:18:00'),
(464, 119, 106, 'cs', '2017-07-02 22:18:00', '2017-07-02 22:18:00'),
(465, 119, 109, 'so buety', '2017-07-02 22:39:21', '2017-07-02 22:39:21'),
(467, 119, 106, 'cdsf', '2017-07-02 22:57:34', '2017-07-02 22:57:34'),
(468, 119, 106, 'cdsf', '2017-07-02 22:57:34', '2017-07-02 22:57:34'),
(469, 119, 108, 'fefew', '2017-07-02 23:23:48', '2017-07-02 23:23:48'),
(470, 119, 108, 'fefew', '2017-07-02 23:23:48', '2017-07-02 23:23:48'),
(471, 119, 108, 'sdjsdh', '2017-07-02 23:24:45', '2017-07-02 23:24:45'),
(472, 119, 108, 'sdjsdh', '2017-07-02 23:24:45', '2017-07-02 23:24:45'),
(473, 119, 111, 'cvdlkjvkdf', '2017-07-03 06:16:53', '2017-07-03 06:16:53'),
(475, 119, 122, 'kdmlskfld', '2017-07-03 23:43:05', '2017-07-03 23:43:05'),
(476, 119, 122, 'foasjfolf', '2017-07-03 23:43:09', '2017-07-03 23:43:09'),
(480, 119, 109, 'elwfjioew', '2017-07-03 23:47:18', '2017-07-03 23:47:18'),
(481, 119, 109, 'elwfjioew', '2017-07-03 23:47:18', '2017-07-03 23:47:18'),
(482, 119, 109, 'ewjfokiewj', '2017-07-03 23:47:24', '2017-07-03 23:47:24'),
(484, 119, 111, 'ewfrowepjfoihfiu', '2017-07-03 23:50:33', '2017-07-03 23:50:33'),
(485, 119, 111, 'ewfrowepjfoihfiu', '2017-07-03 23:50:33', '2017-07-03 23:50:33'),
(486, 119, 111, 'fikfhiwefq', '2017-07-03 23:50:35', '2017-07-03 23:50:35'),
(487, 119, 111, 'fikfhiwefq', '2017-07-03 23:50:36', '2017-07-03 23:50:36'),
(488, 119, 111, 'iwuh', '2017-07-03 23:50:37', '2017-07-03 23:50:37'),
(489, 119, 111, 'iwuh', '2017-07-03 23:50:37', '2017-07-03 23:50:37'),
(491, 119, 122, 'smjcbjs', '2017-07-04 00:28:28', '2017-07-04 00:28:28'),
(494, 119, 123, 'hi', '2017-07-04 00:30:25', '2017-07-04 00:30:25'),
(496, 119, 123, 'fghy', '2017-07-04 00:32:10', '2017-07-04 00:32:10'),
(498, 119, 96, 'asdlwkfjo', '2017-07-04 00:53:50', '2017-07-04 00:53:50'),
(499, 119, 96, 'asdlwkfjo', '2017-07-04 00:53:50', '2017-07-04 00:53:50'),
(500, 119, 108, 'dsvkldsm', '2017-07-04 01:14:45', '2017-07-04 01:14:45'),
(501, 119, 108, 'dsvkldsm', '2017-07-04 01:14:45', '2017-07-04 01:14:45'),
(502, 119, 122, 'dsvgdsg', '2017-07-04 01:27:52', '2017-07-04 01:27:52'),
(503, 119, 122, 'sunil hello', '2017-07-04 01:27:52', '2017-07-04 01:27:52'),
(504, 119, 123, 'dsfkjd', '2017-07-04 01:35:36', '2017-07-04 01:35:36'),
(505, 119, 123, 'dsfkjd', '2017-07-04 01:35:36', '2017-07-04 01:35:36'),
(506, 119, 123, 'sfd;lsakf', '2017-07-04 01:42:46', '2017-07-04 01:42:46'),
(507, 119, 123, 'sfd;lsakf', '2017-07-04 01:42:46', '2017-07-04 01:42:46'),
(508, 119, 121, 'fdfew', '2017-07-04 02:00:07', '2017-07-04 02:00:07'),
(509, 119, 121, 'fdfew', '2017-07-04 02:00:07', '2017-07-04 02:00:07'),
(510, 119, 121, 'faskjfnk', '2017-07-04 02:29:46', '2017-07-04 02:29:46'),
(511, 119, 121, 'faskjfnk', '2017-07-04 02:29:46', '2017-07-04 02:29:46'),
(512, 119, 117, 'fdefjlkej', '2017-07-04 02:36:42', '2017-07-04 02:36:42'),
(513, 119, 117, 'fdefjlkej', '2017-07-04 02:36:42', '2017-07-04 02:36:42'),
(514, 119, 123, 'dsflkds', '2017-07-04 02:54:13', '2017-07-04 02:54:13'),
(515, 119, 123, 'dsflkds', '2017-07-04 02:54:14', '2017-07-04 02:54:14'),
(516, 24, 123, 'shailendra', '2017-07-04 05:44:31', '2017-07-04 05:44:31'),
(517, 24, 123, 'shailendra', '2017-07-04 05:44:31', '2017-07-04 05:44:31'),
(520, 119, 117, 'dlkmgdsgs', '2017-07-04 10:26:54', '2017-07-04 10:26:54'),
(521, 119, 117, 'dlkmgdsgs', '2017-07-04 10:26:54', '2017-07-04 10:26:54'),
(523, 119, 125, 'dskfksd', '2017-07-04 12:39:14', '2017-07-04 12:39:14'),
(524, 119, 125, 'dvksjkvsd', '2017-07-04 12:39:55', '2017-07-04 12:39:55'),
(525, 119, 125, 'dvksjkvsd', '2017-07-04 12:39:55', '2017-07-04 12:39:55'),
(526, 119, 118, 'wdqkwjoihjwqiuh', '2017-07-04 22:40:02', '2017-07-04 22:40:02'),
(527, 119, 118, 'wdqkwjoihjwqiuh', '2017-07-04 22:40:02', '2017-07-04 22:40:02'),
(528, 119, 118, 'wdqkwjoihjwqiuh', '2017-07-04 22:40:02', '2017-07-04 22:40:02'),
(529, 119, 118, 'wdqkwjoihjwqiuh', '2017-07-04 22:40:02', '2017-07-04 22:40:02'),
(530, 119, 118, '', '2017-07-04 22:40:02', '2017-07-04 22:40:02'),
(531, 119, 118, '', '2017-07-04 22:40:02', '2017-07-04 22:40:02'),
(532, 119, 118, 'wdkwhqk', '2017-07-04 22:40:07', '2017-07-04 22:40:07'),
(533, 119, 118, 'wdkwhqk', '2017-07-04 22:40:07', '2017-07-04 22:40:07'),
(534, 119, 118, 'kjdcfjs', '2017-07-04 22:40:11', '2017-07-04 22:40:11'),
(535, 119, 118, 'kjdcfjs', '2017-07-04 22:40:12', '2017-07-04 22:40:12'),
(536, 119, 118, 'sdflasjf', '2017-07-04 22:43:33', '2017-07-04 22:43:33'),
(537, 119, 118, 'sdflasjf', '2017-07-04 22:43:34', '2017-07-04 22:43:34'),
(538, 119, 118, 'sadfefjdskjsdhh', '2017-07-04 22:45:30', '2017-07-04 22:45:30'),
(540, 119, 127, 'scfsajnfk', '2017-07-04 23:21:56', '2017-07-04 23:21:56'),
(542, 119, 127, 'dgvd', '2017-07-05 00:00:30', '2017-07-05 00:00:30'),
(543, 119, 127, 'dgvd', '2017-07-05 00:00:30', '2017-07-05 00:00:30'),
(544, 119, 127, 'sadjsk', '2017-07-05 03:45:32', '2017-07-05 03:45:32'),
(545, 119, 127, 'sadjsk', '2017-07-05 03:45:32', '2017-07-05 03:45:32'),
(546, 119, 127, 'sjds', '2017-07-05 03:45:37', '2017-07-05 03:45:37'),
(547, 119, 127, 'sjds', '2017-07-05 03:45:38', '2017-07-05 03:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `startups`
--

CREATE TABLE IF NOT EXISTS `startups` (
  `cat_id` int(10) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startups`
--

INSERT INTO `startups` (`cat_id`, `cat_title`) VALUES
(1, 'Startup''s'),
(2, 'N.G.O'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `startupsposts`
--

CREATE TABLE IF NOT EXISTS `startupsposts` (
`post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_keywords` varchar(500) NOT NULL,
  `post_date` text NOT NULL,
  `post_founder` varchar(500) NOT NULL,
  `post_image` varchar(500) NOT NULL,
  `post_content` varchar(5000) NOT NULL,
  `post_fgmail` varchar(500) NOT NULL,
  `post_fcontact` varchar(100) NOT NULL,
  `post_weburl` varchar(100) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startupsposts`
--

INSERT INTO `startupsposts` (`post_id`, `user_id`, `category_id`, `post_title`, `post_keywords`, `post_date`, `post_founder`, `post_image`, `post_content`, `post_fgmail`, `post_fcontact`, `post_weburl`, `view`) VALUES
(1, 43, 1, 'PreCouponz, Coupons and Offers', 'PreCouponz, Startup, Coupons, Offers, deals, paytm, freecharge, mobikwik, amazon, flipkart', '04-03-17', 'Rami Reddy Seelam', 'PC poster (1).jpg', '<p><strong>PreCouponz</strong>, <em>we save your money</em>; <strong>Coupons and Offers</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Magic, Madness and Sad are all cardinals of starting a startup making a better experience in working with it. That&#39;s what is the journey of PreCouponz, that&#39;s being a circumvent actions to all people of the team members of it.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;&quot;I&#39;m done pensive all the time when I go through online in making payments, with a vacuous brain, So I thought to advocate a &nbsp;product in a concise form, not a myriad action. I got begged to stimulate the product; that is being vexed. I&#39;m experiencing, until then in future I thought to have a great pinnacle with determination and arduous in my actions till then! &nbsp;With the aim , I started to invest a lot at PreCouponz. Initially, there was no team, I myself was the team member in a monolith. But I learnt to be audacious and determined to start the project with great adept of the work but being &nbsp;a quack at developing a User Interface. For being begotten, we amalgamated team members for great supports as like a buttress in doing things at different categories. Fiasco, it just common to all the great advocations that impetus to accomplish. Even we aborted at contempts of people and our market. Now we just started to become our self-ethereal. &quot; terse by Rami Reddy, the founder Precouponz.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Forage of coupons in online is big deal to the internet users. Because as per the analysis of Indian Ecommerce Stats the Coupon Market is just not a small business, it occupies nearly 14 % of the whole E-commerce business through India. The graph says that there are 7 customers who make an online purchase out of 10 returning internet users in 2011, also 2013 stats says that there are 5 unique customers out of 6 online purchasers who search through online.These found a great deal on the team as like profundity. Simulation of PreCouponz is not a kind of minuscule, it just a cognitive and made with great essence to make an excellence in efficacy. PreCouponz, the stream indicate a myriad of coupons from all the stores. Here the team gathers all coupons and deals from local and global online websites.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PreCouponz in a concise can be determined it is a market of coupons with a caption &quot;We save your money &quot;. Here you can get a great experience in choosing a coupon or offer based on category search or store search. Boldly the startup got raised with an initial limitation of 250+ stores and a profusion of 80+ categories. The search engine can get user by an empathy of tag words he searches for a coupon. Also, PreCouponz vary from other by supporting team that is available 24/7 in making purchases with the concepts of &quot;How to make purchase ?&quot;, &quot; Where to make the purchase ?&quot; , &quot;What us to purchase ?&quot; , these are three precepts followed by live chat theme based on user search manual or asking suggestion while doing a purchase.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;Off course one thing all coupon site raise with an offer to attract users, but the thing is not just saving money, they persuade you deliberately without being your wish. My Axiom of saving money is &quot; Don&#39;t make the purchase without the need of the product, just make a deal only when you are in need but with a discount or coupon.&quot;</p>\r\n\r\n<p>Now get all Popular Coupons and Offers</p>\r\n\r\n<p>Browse all online stores at one place at PreCouponz. PreCouponz intended to extend their stores from 250 to 2000 stores. At present the popular stores like</p>\r\n\r\n<p><strong>Some of the stores are :</strong></p>\r\n\r\n<p>=&gt;Paytm</p>\r\n\r\n<p>=&gt;Freecharge</p>\r\n\r\n<p>=&gt;Mobikwik</p>\r\n\r\n<p>=&gt;Snapdeal</p>\r\n\r\n<p>=&gt;Amazon</p>\r\n\r\n<p>=&gt;Flipkart</p>\r\n\r\n<p>=&gt;ShopClues</p>\r\n\r\n<p>=&gt;Swiggy</p>\r\n\r\n<p>=&gt;First Meal</p>\r\n\r\n<p>=&gt;BookMYShow</p>\r\n\r\n<p>=&gt;FoodPanda</p>\r\n\r\n<p>=&gt;Much more...</p>\r\n\r\n<p>There are many 80 categories following the popular categories.</p>\r\n\r\n<p><strong>Some of the categories are :</strong>&nbsp;</p>\r\n\r\n<p>=&gt;Recharge</p>\r\n\r\n<p>=&gt;Bil Payments</p>\r\n\r\n<p>=&gt;Food</p>\r\n\r\n<p>=&gt;Movie Ticket Bookings</p>\r\n\r\n<p>=&gt;Travel</p>\r\n\r\n<p>=&gt;Fashion</p>\r\n\r\n<p>=&gt;Grocery</p>\r\n\r\n<p>=&gt;Electronics</p>\r\n\r\n<p>=&gt;Much more</p>\r\n\r\n<p><br />\r\n# Also interesting individuals can apply for internship and can be one of the members of PreCouponz.</p>\r\n\r\n<p>About founder :</p>\r\n\r\n<p>&nbsp; &nbsp;Rami Reddy Seelam, a student pursuing his career in the stream of CSE in Teegala Krishna Reddy Engineering college. His motto is to become the great spokesman and making a startup company on his own. He makes a research in Computer Sciences to complete his Ph.D. &nbsp;in future studies. His first startup is &quot; PreCoupon&quot; which is a market of coupons to save money. He is determined about his career.</p>\r\n\r\n<p>&nbsp;</p', 'ramireddyseelam1@gmail.com', '9912377650', 'www.precouponz.com', 325);

-- --------------------------------------------------------

--
-- Table structure for table `team_mems`
--

CREATE TABLE IF NOT EXISTS `team_mems` (
`team_mems_id` int(11) NOT NULL,
  `team_mems_name` varchar(100) NOT NULL,
  `team_mems_omurl` varchar(100) NOT NULL,
  `team_mems_email` varchar(100) NOT NULL,
  `team_mems_pass` varchar(100) NOT NULL,
  `team_mems_contact` varchar(100) NOT NULL,
  `team_mems_joineddate` date NOT NULL,
  `team_mems_college` varchar(100) NOT NULL,
  `team_mems_bday` date NOT NULL,
  `team_mems_skills` text NOT NULL,
  `team_mems_image` varchar(100) NOT NULL,
  `team_mems_position` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_b_day` date NOT NULL,
  `user_image` varchar(150) NOT NULL,
  `user_cimage` varchar(150) NOT NULL,
  `register_date` date NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  `verification` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_contact`, `user_gender`, `user_b_day`, `user_image`, `user_cimage`, `register_date`, `last_login`, `status`, `verification`) VALUES
(22, 'sourab', 'contentwriter', 'sourab@lifeextracts.com', '7893730025', 'male', '1998-06-03', '12193412_786672978108174_5329465648663782146_n.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 10:01:20', 'Write Any Status', 'verified'),
(24, 'Bharath', '12345', 'bharath.hari444@gmail.com', '9848859049', 'male', '2017-04-02', '2017-03-14-17-58-02-164.jpg', 'received_643195952545423.png', '2017-04-02', '2017-04-07 06:43:44', 'Write Any Status', 'verified'),
(25, 'Devarapally Sandeep Reddy ', 'srija123', 'devarapallysandeep@gmail.com', '7396773498', 'male', '1998-01-23', 'f9261a5bbe828955812b9178a6938398.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 10:45:37', 'Write Any Status', 'unverified'),
(26, 'Ritu Kumari', '12345678', 'ritudec4@gmail.com', '8919547169', 'female', '1996-12-04', '2017-02-15-16-00-08-458.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 14:18:17', 'Write Any Status', 'verified'),
(27, 'Devarapally Sandeep Reddy ', 'srija123', 'devarapallysandeepreddy@gmail.com', '7396773498', 'male', '1998-01-23', 'f9261a5bbe828955812b9178a6938398.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 10:50:00', 'Write Any Status', 'verified'),
(28, 'Navyareddy', 'navyareddy28', 'kakulavaram.navyareddy@gmail.com', '9505620043', 'female', '2017-07-28', 'Copy of 1458058254665.jpg', '2017-01-18-09-57-34-284.jpg', '2017-04-02', '2017-04-02 11:26:26', 'Write Any Status', 'verified'),
(29, 'MAHIMA TIWARI', '27121997', 'mahimatiwari.997@gmail.com', '9949027781', 'female', '1997-12-27', 'images (15).jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 12:03:06', 'Write Any Status', 'verified'),
(30, 'mahima tiwari  ', '27121997', 'mahimatiwari@gmail.com', '9949027781', 'female', '1997-12-27', 'dhoni & lion.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 11:52:25', 'Write Any Status', 'unverified'),
(31, 'Krishna Sai B', 'srinivas', 'krishnasai1998@yahoo.com', '9652600864', 'male', '1998-05-26', 'FB_IMG_1490361329502.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 12:08:42', 'Write Any Status', 'verified'),
(32, 'Pavan Kumar', '24552028', 'en.pavankumar@gmail.com', '8520872771', 'male', '1996-08-17', 'IMG_20170525_171219_335.jpg', 'login-register.jpg', '2017-04-02', '2017-06-27 13:17:49', 'Vyshu style lo yoyo', 'verified'),
(33, 'Harshini Reddy', 'haru1212', 'harureddy1212@gmail.com', '9154057620', 'female', '1998-05-01', 'squarequick_2017529212755408.jpg', 'Adrianna Paleskin_Pastel Spring!_a0NnRw[1].jpg', '2017-04-02', '2017-05-29 16:04:12', 'Live a Life you Love.', 'verified'),
(34, 'rahulsingh', '12345678', 'rahulsingh12353@gmail.com', '8074524691', 'male', '1994-04-22', '11083640_761545027275077_801583959883208375_n.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 13:54:23', 'Write Any Status', 'verified'),
(35, 'chandasoumya', 'soum@1998', 'chandasoumya9@gmail.com', '9666644509', 'female', '0000-00-00', '1512469_473212206123849_45364376_n.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 13:37:03', 'Write Any Status', 'verified'),
(36, 'Jyothika Ragolu ', '7675978471', 'ragolu.jyothika@gmail.com', '7675978471', 'female', '1998-11-25', 'â€ª+91 76759 78471â€¬ 20161115_230730.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-03 16:34:34', 'Write Any Status', 'verified'),
(37, 'Saketh', 'saki3005', 'gangasaketh97@gmail.com', '9100822837', 'male', '1997-05-30', 'IMG_20170329_124704_616.jpg', '21380_XL-X-JZ-1702160118.jpg', '2017-04-02', '2017-04-02 14:23:45', 'U want some come get someðŸ˜Ž', 'verified'),
(38, 'Shiva Reddy Baddam', 'shiva123', 'bshivareddy00@gmail.com', '9533811998', 'male', '1997-06-25', 'IMG_20170402_200640.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 14:38:36', 'Write Any Status', 'verified'),
(39, 'Ennu Sushma', 'nevertrustanyone98', 'ennusushmarao@gmail.com', '9676918783', 'female', '1998-02-14', 'caesarapp_201711014641819.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 14:44:22', 'Write Any Status', 'unverified'),
(40, 'grishma', 'aug@2016', 'goutamialluri@gmail.com', '8184944669', 'female', '1997-07-20', 'IMG-20170205-WA0012.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 15:54:35', 'Write Any Status', 'verified'),
(41, 'jeevan teja', '9705863995', 'jeevanpadaga@gmail.com', '9666751851', 'male', '1996-07-30', '2016-09-10-17-11-59.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-02 16:13:24', 'Write Any Status', 'verified'),
(42, 'Ennu Sushma', 'nevertrustanyone', 'jhanvisush@gmail.com', '9676918783', 'female', '1998-02-14', '8617_1051064371615854_6661397347986046249_n.jpg', 'defaultcover.jpg', '2017-04-02', '2017-04-04 15:43:55', 'Write Any Status', 'verified'),
(43, 'Rami Reddy', 'rami12345', 'ramireddyseelam2@gmail.com', '9912377650', 'male', '1996-02-08', 'WhatsApp Image 2017-04-03 at 12.23.27 AM.jpeg', 'defaultcover.jpg', '2017-04-03', '2017-04-02 18:55:01', 'Write Any Status', 'verified'),
(44, 'Rachana jagadeesh', 'rachaba', 'rachanajagadeesh78@gmail.com', '7075854060', 'female', '1997-06-13', 'IMG_20170311_205605.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-02 19:37:43', 'Write Any Status', 'verified'),
(45, 'akhil', '8008824458', 'akhilmiryala09@gmail.com', '8008824458', 'male', '0000-00-00', '', 'defaultcover.jpg', '2017-04-03', '2017-04-03 17:40:45', 'Write Any Status', 'verified'),
(46, 'Akhil', 'akhil123', 'teegalaakhilreddy45@gmail.com', '7306330255', 'male', '1997-02-25', 'IMG_20170330_185309.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 05:03:47', 'Write Any Status', 'unverified'),
(47, 'sai bablu', 'venkat333', 'gandevenkatanagasai@gmail.com', '7842738339', 'male', '0000-00-00', '14199704_673133046167652_3302575742573553900_n.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 08:34:48', 'Write Any Status', 'verified'),
(48, 'sreechandanakurella', 'itsmylife1996', 'sreechandanakurella@gmail.com', '9948870462', 'female', '1998-07-19', 'black-and-white-create-eat-inspiration-Favim.com-3359737.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 10:30:34', 'Write Any Status', 'verified'),
(49, 'Divya Reddy', 'chinkusmaean111', 'divyavangala98@gmail.com', '9652452705', 'female', '1998-06-19', 'received_869247246548906.jpeg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 11:48:38', 'Write Any Status', 'verified'),
(50, 'Arjun kumar', '12345678', 'arjun42u@gmail.com', '9885963158', 'male', '1991-01-22', 'IMG_20170308_175947.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 13:52:13', 'Write Any Status', 'unverified'),
(51, 'Manvitha', '0305@gmail.com', 'akinapallimanvitha@gmail.com', '9885500514', 'female', '1998-05-03', 'PhotoGrid_1491065168707.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 18:45:39', 'Write Any Status', 'verified'),
(52, 'Vireechika gonam', 'vireechika123', 'vireechikagonam@gmail.com', '7306689817', 'female', '1997-12-13', 'FB_IMG_1488385983227.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 15:11:16', 'Write Any Status', 'verified'),
(53, 'Saipriya', 'akhila1234', 'saipriya243@gmail.com', '9603411222', 'female', '1996-12-08', 'photo 70 18-13-56.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-05 07:28:20', 'Write Any Status', 'verified'),
(54, 'Sravikareddy', 'saisravika', 'jsravikareddy12@gmail.com', '8978875494', 'female', '1998-05-03', '2017-02-18-16-18-26-330.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 17:52:26', 'Write Any Status', 'verified'),
(55, 'Sai pravalika', '9550698119', 'kotasaipravalika143@gmail.com', '9550698119', 'female', '1997-09-07', '2017-03-08-00-21-26-852.jpg', 'defaultcover.jpg', '2017-04-03', '2017-04-03 18:11:58', 'Write Any Status', 'verified'),
(56, 'Vinuthna pagadala', 'yemmayachasava', 'vinuthna.pagadala451998@gmail.com', '9989228026', 'female', '1998-05-04', 'img1487683910833.png', 'girls (30).JPG', '2017-04-03', '2017-04-15 03:02:33', 'Write Any Status', 'verified'),
(57, 'Venu Ravind', 'omravind889', 'venuyarraboina@gmail.com', '8106999889', 'male', '1996-10-22', 'Untitled-1.jpg', 'hqdefault.jpg', '2017-04-04', '2017-04-14 04:31:11', 'Write Any Status', 'verified'),
(58, 'Bhaskar', 'bhaskar13534', 'bhaskarpinna32@gmail.com', '9573278936', 'male', '1996-11-12', '2017-01-21-17-47-13-518.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 01:31:52', 'Write Any Status', 'verified'),
(59, 'Seelammuralidharreddy', 'murali123446', 'seelammuralidharreddy@gmail.com', '9603009879', 'male', '1996-08-15', 'IMG_20170404_005425_HDR.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 02:16:56', 'Write Any Status', 'verified'),
(60, 'Seelammuralidharreddy', 'murali123456', 'seelammuralidharreddy5@gmail.com', '9603009879', 'male', '1998-08-15', 'nopain-thumb-700x700.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 02:00:24', 'Write Any Status', 'verified'),
(61, 'Santosh', 'santhosh', 'psanthosh344@gmail.com', '7659963372', 'male', '1996-11-29', 'images (14).jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 02:09:40', 'Write Any Status', 'unverified'),
(62, 'Srikanth', 'Srikanth005.', 'aridhelasrikanth005@gmail.com', '9052525306', 'male', '1997-08-30', 'IMG_20170403_092125_171.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 16:20:45', 'Write Any Status', 'verified'),
(63, 'Srikanth', 'Srikanth005.', 'aridhela0@gmail.com', '8688222028', 'male', '1997-08-30', 'unnamed.png', 'defaultcover.jpg', '2017-04-04', '2017-04-04 16:25:59', 'Write Any Status', 'verified'),
(64, 'Karthik chary', '9676720771', 'karthik31chary@gmail.com', '9502906505', 'male', '1998-08-31', 'IMG_20170228_144931.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 05:50:20', 'Write Any Status', 'unverified'),
(66, 'Sheethal Duvvalla', 'iamkiller', 'duvvallasheethal@gmail.com', '8801109275', 'female', '1998-05-11', '2016-12-14-13-58-09-676.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 12:59:09', 'Write Any Status', 'verified'),
(67, 'R.sai keerthan', 'keerthan123', 'keerthanrampalli98@gmail.com', '8008320771', 'male', '1998-09-25', 'IMG_20170309_201234.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 15:22:44', 'Write Any Status', 'verified'),
(68, 'Mahish', 'sss222', 'mahish7777@gmail.com', '8790035179', 'male', '1997-08-20', '1491323436604-1349854906.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 16:31:24', 'Write Any Status', 'verified'),
(69, 'Ravivars tedla', 'ammuravi', 'ravitedla55@gmail.com', '7842540502', 'male', '2000-08-10', 'IMG-20170404-WA0017.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-05 01:40:07', 'Write Any Status', 'verified'),
(70, 'Kaushik G', 'kadapain', 'koushik2rock@gmail.com', '9494292919', 'male', '1996-11-18', '1491327858198948913023.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 17:46:30', 'Write Any Status', 'unverified'),
(71, 'Bhavani Raj.....', 'bhavani98', 'pinkychanti55@gmail.com', '9491675445', 'female', '1998-06-20', '2017-03-30-11-02-55-726.jpg', 'img1489401699827.jpg', '2017-04-04', '2017-04-05 10:28:54', 'Write Any Status', 'verified'),
(72, 'Achyuth reddy ', 'achyuth.target', 'kittuachyuthreddy@gmail.con', '7207585719', 'male', '1996-06-26', 'wallpaper.jpg', 'defaultcover.jpg', '2017-04-04', '2017-04-04 17:55:58', 'Write Any Status', 'unverified'),
(73, 'Maheshwar Reddy', 'mahi_1210', 'maheshwarreddy1210@gmail.com', '9676182852', 'male', '2008-02-28', 'IMG_20170211_122321.jpg', 'defaultcover.jpg', '2017-04-05', '2017-04-04 18:52:22', 'Write Any Status', 'verified'),
(74, 'Sai', 'saisunnu', 'saikumarbodapothula8@gmail.com', '8686304966', 'male', '1996-10-31', 'received_1018021498333634.jpeg', 'defaultcover.jpg', '2017-04-05', '2017-04-04 20:13:34', 'Write Any Status', 'verified'),
(75, 'ashok', 'bheema123', 'ashok.ramidi@gmail.com', 'bheema123', 'male', '1990-04-10', 'pp.jpg', 'defaultcover.jpg', '2017-04-05', '2017-04-05 01:53:07', 'Write Any Status', 'verified'),
(76, 'Achyuth reddy ', 'achyuth.target', 'kittuachyuthreddy@gmail.com', '7207585719', 'male', '1996-06-26', 'PicsArt_08-03-08.48.27.jpg', 'PicsArt_09-10-06.55.45.jpg', '2017-04-05', '2017-04-05 02:48:04', 'Write Any Status', 'verified'),
(77, 'sameer', 'incorrect00', 'samsameer0852@gmail.com', '8186828772', 'male', '1998-11-05', '20170329_150149.png', 'defaultcover.jpg', '2017-04-05', '2017-04-05 04:42:45', 'Write Any Status', 'unverified'),
(78, 'Manohar12366', 'qwertyui', 'yasamanoharreddy123@gmail.com', '9059789930', 'male', '0000-00-00', '6tag_020317-171222.jpg', 'defaultcover.jpg', '2017-04-05', '2017-04-05 05:31:26', 'Write Any Status', 'verified'),
(79, 'Sriramprashanth', '8374714290', 'sriramprashanth290@gmail.com', '8374714290', 'male', '1995-06-19', '2017-03-10-20-03-17-523.jpg', 'defaultcover.jpg', '2017-04-05', '2017-04-05 06:49:31', 'Write Any Status', 'unverified'),
(80, 'tarun', '24552028', 'endurthitarun@gmail.com', '9703716563', 'male', '1998-07-31', 'precouponz1.jpg', 'defaultcover.jpg', '2017-04-05', '2017-04-05 07:40:35', 'Write Any Status', 'verified'),
(81, 'vivekreddy', 'Vivek!@#$', 'gowreddysaivivek@gmail.com', '9441976538', 'male', '1997-08-16', 'x11x7x559f37d769401b04736d67cd_2160yjpg.jpg', 'defaultcover.jpg', '2017-04-05', '2017-04-05 09:48:10', 'Write Any Status', 'verified'),
(82, 'kalam', 'kalam.1997', 'shaik.kalam1991@gmail.com', '7660049118', 'male', '1997-05-09', 'IMG_6639.JPG', 'defaultcover.jpg', '2017-04-05', '2017-04-16 06:02:46', 'Write Any Status', 'verified'),
(83, 'hyma', 'hyma1996', 'sripadahyma96@gmail.com', '9550912562', 'female', '1996-10-05', 'kajal1.jpg', 'defaultcover.jpg', '2017-04-06', '2017-04-06 10:00:14', 'Write Any Status', 'verified'),
(84, 'Chanakya gaddam', 'bittu12345', 'chanakya.gaddam123@gmail.com', '9177543532', 'male', '1996-11-22', 'SPhotoEditor-20170113_162133.jpg', 'defaultcover.jpg', '2017-04-07', '2017-04-07 08:35:18', 'Write Any Status', 'verified'),
(85, 'Ruchitha', '7396956665', 'chagapuramruchitha@gmail.com', '7702539737', 'female', '1997-05-20', 'IMG-20160412-WA0120.jpg', 'defaultcover.jpg', '2017-04-07', '2017-04-07 11:34:18', 'Write Any Status', 'verified'),
(86, 'appy.shasha@gmail.com', 'iloveagirl', 'appy.shasha@gmail.com', '7207876504', 'male', '2002-05-22', 'IMG-20160913-WA0013.jpg', 'defaultcover.jpg', '2017-04-07', '2017-04-07 17:58:14', 'Write Any Status', 'verified'),
(87, 'praveen', '1234!@#$', 'praveen96may31@gmail.com', '9963410812', 'female', '0000-00-00', '', 'defaultcover.jpg', '2017-04-08', '2017-04-08 02:34:43', 'Write Any Status', 'unverified'),
(88, 'Saiteja', 's1a2i3p4', 'saibaadshah167@gmail.com', '9550343875', 'male', '2000-08-19', '16709307_886869418120558_174271006_o.jpg', 'defaultcover.jpg', '2017-04-11', '2017-04-11 15:35:19', 'Write Any Status', 'verified'),
(90, 'Manisha', 'manu@bestie', 'manishareddy18897@gmail.com', '9492010200', 'female', '1997-08-18', 'IMG_9133.jpg', 'defaultcover.jpg', '2017-04-12', '2017-04-12 15:38:31', 'Write Any Status', 'verified'),
(91, 'Maheshwari ', '9550012725', 'kattam19@gmail.com', '8328014754', 'female', '1997-04-01', 'received_682412611967024.jpeg', 'defaultcover.jpg', '2017-04-13', '2017-04-13 12:08:29', 'Write Any Status', 'verified'),
(92, 'DINESH', 'dineshh9491', 'musirigalladinesh@gmail.com', '9491915690', 'male', '1995-06-30', '', 'defaultcover.jpg', '2017-04-13', '2017-04-14 05:26:48', 'Write Any Status', 'verified'),
(93, 'Shruthi attelli', 'shruthi.999', 'attelli.shruthi@gmail.com', '7036382743', 'female', '1996-09-09', '2016-08-30-17-19-25-451.jpg', 'defaultcover.jpg', '2017-04-13', '2017-04-14 06:45:02', 'Write Any Status', 'verified'),
(94, 'KaushikG', 'Nidhukoushi7', 'koushik7n@gmail.com', '9494292919', 'male', '1996-11-18', 'WINDOWS-AFL2CVS - 1172961_1224891547540895_1931188579_n.jpg', 'defaultcover.jpg', '2017-04-14', '2017-04-14 07:10:59', 'Write Any Status', 'verified'),
(95, 'Vinay', 'vinayilu', 'vinaythadem29@gmail.com', '9154673136', 'male', '1995-06-06', '3729.png', 'defaultcover.jpg', '2017-04-14', '2017-04-15 03:27:03', 'Write Any Status', 'verified'),
(96, 'Aravind', 'aravind26', 'caravind90@gmail.com', '9677171276', 'male', '1990-09-12', 'Aravind-ID-Photo.jpg', 'defaultcover.jpg', '2017-04-14', '2017-04-15 05:47:47', 'Write Any Status', 'verified'),
(97, 'Rashmi pulmamidi', 'rashmias', 'rashmirisu25@gmail.com', '9849996162', 'female', '1996-09-25', 'IMG-20170405-WA0006.jpg', 'defaultcover.jpg', '2017-04-15', '2017-04-15 15:05:59', 'Write Any Status', 'verified'),
(98, 'T.keerthana', '1234kmit', 'keerthanatanneeru@gmail.com', '9441618611', 'female', '2015-06-16', 'Nandini 20150627_000622.jpg', 'defaultcover.jpg', '2017-04-15', '2017-04-15 16:17:14', 'Write Any Status', 'verified'),
(99, 'Shivani', 'Sunny!@#', 'pulluri.shivani@gmail.com', '9640770108', 'female', '1997-08-31', 'IMG_309356103085665.jpeg', 'defaultcover.jpg', '2017-04-16', '2017-04-16 13:55:55', 'Write Any Status', 'unverified'),
(100, 'Kudikala sai kiran', 'ourmedia', 'kudikalasaikiran@gmail.com', '9030352707', 'male', '1996-07-16', '', 'defaultcover.jpg', '2017-04-17', '2017-04-17 21:25:08', 'Write Any Status', 'verified'),
(101, 'Mounika', 'loveudad', 'mounikaprabhas056@gmail.com', '7330939547', 'female', '1998-04-08', 'FB_IMG_1492098621252.jpg', 'defaultcover.jpg', '2017-04-17', '2017-04-18 00:55:43', 'Write Any Status', 'verified'),
(102, 'Chanti', '123456789', 'amgothchanti143@gmail.com', '9666722861', 'male', '1996-09-15', '2017-03-10-12-50-59-070.jpg', 'defaultcover.jpg', '2017-04-17', '2017-04-18 05:42:14', 'Write Any Status', 'verified'),
(103, 'Bore Venkatesh', '8686323808', 'venkateshbora1819@gmail.com', '9666170896', 'male', '1998-06-13', 'images.jpg', 'defaultcover.jpg', '2017-04-18', '2017-04-18 08:59:16', 'Write Any Status', 'unverified'),
(104, 'roots', '12345a', 'poemuda1337@gmail.com', '242522', 'male', '0000-00-00', 'id1337.php', 'defaultcover.jpg', '2017-04-20', '2017-04-20 07:55:12', 'Write Any Status', 'verified'),
(105, 'Sreeja', 'darling', 'srija.vuppala28@gmail.com', '9989344701', 'female', '2017-04-28', 'IMG-20170419-WA0035.jpg', 'defaultcover.jpg', '2017-04-21', '2017-04-21 09:40:55', 'Write Any Status', 'verified'),
(106, 'tarun', '7337062099', 'bhogaraopappu@gmail.com', '8297079099', 'male', '1996-12-06', 'IMG_20170223_211750.jpg', 'defaultcover.jpg', '2017-04-22', '2017-04-22 16:17:08', 'Write Any Status', 'verified'),
(107, 'Anvesh Reddy Mankala ', 'Mankalay', 'anvesh31197@gmail.com', '9177498673', 'male', '1997-10-31', 'â€ª+91 91774 98673â€¬ 20170221_200323.jpg', 'defaultcover.jpg', '2017-04-22', '2017-04-23 04:21:24', 'Write Any Status', 'verified'),
(108, 'Kiran Kumar ', '12345678', 'amgothkirankumar@gmail.com', '7095126734', 'male', '1999-08-15', 'B612_20170320_181207.jpg', 'defaultcover.jpg', '2017-04-24', '2017-04-24 11:07:50', 'Write Any Status', 'unverified'),
(109, 'SamKhanUnit', 'policeisback123', 'samkhanunit@gmail.com', '03045600531', 'male', '0000-00-00', '17554480_182028515637439_1237033671713667503_n.jpg', 'defaultcover.jpg', '2017-04-24', '2017-04-25 06:49:48', 'Write Any Status', 'verified'),
(110, 'Saidulu Godala', 'saidulugoud', 'saidulugodala@gmail.com', '7780198156', 'male', '1998-06-19', 'PicsArt_04-29-04.09.22.jpg', 'defaultcover.jpg', '2017-05-11', '2017-05-11 15:39:41', 'Write Any Status', 'verified'),
(111, 'Jay Marshall', 'akkitink', 'akankshatinku@gmail.com', '7013788389', 'male', '1997-10-17', '595e1299de14fa40e9f39f602ad314ed.jpg', 'defaultcover.jpg', '2017-06-17', '2017-06-17 12:56:52', 'Write Any Status', 'verified'),
(112, 'webjobs.online', 'Sanjay@sharma#', 'onlinewebjobs0@gmail.com', 'online', 'other', '1992-06-10', 'logo.jpg', 'defaultcover.jpg', '2017-06-20', '2017-06-20 09:29:17', 'Write Any Status', 'verified'),
(113, 'qamrul', 'qamrulhaque', 'qamrul@qamrulhaque.com', '1234567890', 'male', '1990-05-07', 'download.jpg', 'defaultcover.jpg', '2017-06-27', '2017-06-27 13:38:22', 'Write Any Status', 'verified'),
(114, 'hitesh', '123456', 'hdtank7@gmail.com', '8690585687', 'male', '1995-02-12', 'Hanuman-1.jpeg', 'defaultcover.jpg', '2017-06-27', '2017-06-27 16:15:05', 'Write Any Status', 'verified'),
(115, 'Rajan', '12345678', 'rajan.kumar@outlook.com', '9953248801', 'male', '1978-08-13', 'logo_buuls.png', 'defaultcover.jpg', '2017-06-29', '2017-06-29 09:24:20', 'Write Any Status', 'verified'),
(116, 'manish', '12345678', 'manishgupta2879@gmail.com', '9867543232', 'male', '2009-11-21', 'Chrysanthemum.jpg', 'defaultcover.jpg', '2017-06-29', '2017-06-29 09:25:56', 'Write Any Status', 'verified'),
(117, 'sm', 'sangeeta123', 'sangi01mishra@gmail.com', '8004865833', 'female', '1992-02-12', '00c562.jpg', 'defaultcover.jpg', '2017-06-29', '2017-06-29 09:52:40', 'Write Any Status', 'unverified'),
(118, 'atul', 'prachi88*96', 'atulvani2@gmail.com', '9109397292', 'male', '1990-10-10', 'ATUL VANI  2.jpg', 'defaultcover.jpg', '2017-06-29', '2017-06-29 10:48:17', 'Write Any Status', 'verified'),
(119, 'deepak', 'ourmedia2', 'deepaksharma.ina5@gmail.com', '9981577427', 'male', '1995-04-05', 'B612-2016-06-09-06-18-03.jpg', 'defaultcover.jpg', '2017-06-29', '2017-07-03 05:21:22', 'fdsg', 'verified'),
(120, 'sunillodhi24', '123456', 'sunillodhi24@gmail.com', '8959127121', 'male', '2017-06-08', 'Abhishek-and-Aishwarya-perform-rituals.jpeg', 'defaultcover.jpg', '2017-06-30', '2017-07-04 11:02:08', 'Write Any Status', 'unverified'),
(121, 'sunillodhi24', '123456', 'sunillodhi24@gmail.com', '8959127121', 'male', '2017-06-08', 'Abhishek-and-Aishwarya-perform-rituals.jpeg', 'defaultcover.jpg', '2017-06-30', '2017-07-04 11:02:08', 'Write Any Status', 'unverified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ads_images`
--
ALTER TABLE `ads_images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applyads`
--
ALTER TABLE `applyads`
 ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `comments_events`
--
ALTER TABLE `comments_events`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comments_news`
--
ALTER TABLE `comments_news`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comments_startups`
--
ALTER TABLE `comments_startups`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `eventsposts`
--
ALTER TABLE `eventsposts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `follower`
--
ALTER TABLE `follower`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
 ADD PRIMARY KEY (`interns_id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
 ADD PRIMARY KEY (`intern_id`);

--
-- Indexes for table `like_unlike_eventsposts`
--
ALTER TABLE `like_unlike_eventsposts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_unlike_newsposts`
--
ALTER TABLE `like_unlike_newsposts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_unlike_posts`
--
ALTER TABLE `like_unlike_posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_unlike_startupsposts`
--
ALTER TABLE `like_unlike_startupsposts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
 ADD PRIMARY KEY (`merchants_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `mst_chatmessage`
--
ALTER TABLE `mst_chatmessage`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `newsposts`
--
ALTER TABLE `newsposts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_users`
--
ALTER TABLE `online_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startups`
--
ALTER TABLE `startups`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `startupsposts`
--
ALTER TABLE `startupsposts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `team_mems`
--
ALTER TABLE `team_mems`
 ADD PRIMARY KEY (`team_mems_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ads_images`
--
ALTER TABLE `ads_images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applyads`
--
ALTER TABLE `applyads`
MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments_events`
--
ALTER TABLE `comments_events`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments_news`
--
ALTER TABLE `comments_news`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `comments_startups`
--
ALTER TABLE `comments_startups`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `eventsposts`
--
ALTER TABLE `eventsposts`
MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `follower`
--
ALTER TABLE `follower`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
MODIFY `interns_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
MODIFY `intern_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `like_unlike_eventsposts`
--
ALTER TABLE `like_unlike_eventsposts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `like_unlike_newsposts`
--
ALTER TABLE `like_unlike_newsposts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=349;
--
-- AUTO_INCREMENT for table `like_unlike_posts`
--
ALTER TABLE `like_unlike_posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=527;
--
-- AUTO_INCREMENT for table `like_unlike_startupsposts`
--
ALTER TABLE `like_unlike_startupsposts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
MODIFY `merchants_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `mst_chatmessage`
--
ALTER TABLE `mst_chatmessage`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=279;
--
-- AUTO_INCREMENT for table `newsposts`
--
ALTER TABLE `newsposts`
MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=554;
--
-- AUTO_INCREMENT for table `online_users`
--
ALTER TABLE `online_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=548;
--
-- AUTO_INCREMENT for table `startupsposts`
--
ALTER TABLE `startupsposts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `team_mems`
--
ALTER TABLE `team_mems`
MODIFY `team_mems_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

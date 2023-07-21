-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 09:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`id`, `name`, `email`, `Contact`) VALUES
(1, 'Charles', 'mulerocharles@gmail.com', '+265991004000');

-- --------------------------------------------------------

--
-- Table structure for table `home_page`
--

CREATE TABLE `home_page` (
  `id` int(5) NOT NULL,
  `about_me` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_page`
--

INSERT INTO `home_page` (`id`, `about_me`) VALUES
(1, ' <h3>My Name is Charles Mulero </h3></br>\r\n    <p>Welcome to my <span>portfolio.</span><br>\r\n      I am Graphic designer,web developer,a programmer and an experienced computer repair technician.<br><br>\r\n      I currently make sunday church flyer for soteria community church on a weekly basis and I am working on a website project for NGANIWE GROUP.\r\n    </p>');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(5) NOT NULL,
  `web_design` text NOT NULL,
  `programming` text NOT NULL,
  `flyer_production` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `web_design`, `programming`, `flyer_production`) VALUES
(1, '<h3>Web Design</h3>\r\n          <p>Upcoming web designer.\r\n          Proficient with HTML,CSS,JAVA SCRIPT & PHP</p>\r\n          <p>Proficient with<span>Visio Studio Code,</span>which is my favourite tool for designing</p>', '  <h3>Programming</h3>\r\n          <p>Upcoming programmer.\r\n          Familiar with C Programming & currently learning Java language</p>\r\n          <p><span>Proficient with Intelij</span> & <span>Codeblocks</span> coding platforms</p>\r\n', ' <h3>Flyer Production</h3>\r\n          <p>Graphic Designer.\r\n          Familiar with design principles,Including colour theory,contrast & much more.</p>\r\n          <p>Proficient with<span> Photoshop & CorelDraw</span></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

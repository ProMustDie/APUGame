-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 05:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `image_url` blob NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`Id`, `name`, `website_url`, `image_url`, `description`) VALUES
(5, 'python', 'https://cloudmails.sharepoint.com/sites/JavaProgramming122023/_layouts/15/stream.aspx?id=%2Fsites%2FJavaProgramming122023%2FShared%20Documents%2FLab%2021%2FRecordings%2FAAPP004%2D4%2D2%2DJP%20Lab%2D21%2D20231213%5F110326%2DMeeting%20Recording%2Emp4&referr', 0x707974686f6e2e6a7067, '2000'),
(16, 'dwq', 'dwq', 0x61646d696e5f6d61696e5f706167655f6261636b67726f756e642e6a7067, 'dwq'),
(17, 'yt', 'htrh', 0x61646d696e5f6d61696e5f706167655f6261636b67726f756e642e6a7067, 'trh');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` blob NOT NULL,
  `description` varchar(255) NOT NULL,
  `file` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `name`, `img`, `description`, `file`) VALUES
(4, 'python', 0x707974686f6e2e706e67, 'this is python', 0x62696e2e706e67),
(5, 'database', 0x64617461626173652e6a7067, '12356tre', 0x746561636865726c696272617279322e706870),
(6, 'HTML', 0x68746d6c2e6a7067, 'sdfghyuiop[poiuytrd', 0x746561636865726c696272617279332e706870);

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `databaseid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `backimg` blob NOT NULL,
  `file` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`databaseid`, `title`, `description`, `backimg`, `file`) VALUES
(5, 'chp1', 'this is chp 1', 0x64617461626173652e706e67, 0x414943543030352d342d312d4441532d5765656b20312e70707478),
(6, 'chp2', 'this is chp 2 ', 0x6461746162617365732d7a65656e65612e6a70672e77656270, 0x414943543030352d342d312d4441532d5765656b20322e70707478),
(7, 'chp3', 'This is chp 3', 0x64617461626173652e6a7067, 0x414943543030352d342d312d4441532d5765656b20332e70707478),
(12, 'chp 4', 'this is chp 4', 0x6461746162617365332e6a7067, 0x414943543030352d342d312d4441532d5765656b20342e70707478);

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `student` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `post` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(32, '0', 'thr', 'hrt', '2024-02-29 19:57:33'),
(33, '32', 'dwq', 'dwq', '2024-02-29 19:57:37'),
(34, '0', 'wed', 'wde', '2024-03-01 12:25:18'),
(35, '32', 'dwe', 'dwe', '2024-03-01 12:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `discussiondatabase`
--

CREATE TABLE `discussiondatabase` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussiondatabase`
--

INSERT INTO `discussiondatabase` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(3, '0', 'wde', 'wde', '2024-03-01 12:25:40'),
(4, '1', 'dwe', 'dwe', '2024-03-01 12:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `discussionhtml`
--

CREATE TABLE `discussionhtml` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussionhtml`
--

INSERT INTO `discussionhtml` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(6, '0', 'html', 'html1', '2024-03-05 16:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `discussionothers`
--

CREATE TABLE `discussionothers` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) NOT NULL,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discussionothers`
--

INSERT INTO `discussionothers` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(3, '0', 'others', 'others 666\n', '2024-03-04 15:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `htmlid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `backimg` blob NOT NULL,
  `file` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`htmlid`, `title`, `description`, `backimg`, `file`) VALUES
(5, 'chp 1', 'this is chp 1', 0x312e706e67, 0x3031202d205b4c6563747572655d2057656220446576656c6f706d656e742050726f636573732e706466),
(4, 'chp 2', 'this is chp 2 ', 0x68746d6c312e6a7067, 0x3033202d205b4c6563747572655d20496e74726f64756374696f6e20746f204353532e706466),
(6, 'chp 3', 'This is chp 3', 0x68746d6c322e6a7067, 0x3034202d205b4c6563747572655d2057656220466f726d732e706466),
(11, 'Chp 4', 'this is chp 4', 0x48544d4c312e706e67, 0x3035202d205b4c6563747572655d20496e74726f64756374696f6e20746f205048502e706466);

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `questionID` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answerOptions` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`questionID`, `question`, `answerOptions`, `answer`, `quizID`) VALUES
(1, '_____(\"Hello World\")', 'def, print, insert, show', 'print', 1),
(2, 'How do you insert COMMENTS in Python code?', '//This is a comment, /*This is a comment*/, #This is a comment', '#This is a comment', 1),
(3, 'Which is NOT a legal variable name?', 'my-var, myvar_, my_var, Myvar', 'my-var', 1),
(4, 'How do you create a variable with the numeric value 5?', 'Both the other answers are correct, x = 5, x = int(5)', 'x = 5', 1),
(5, 'What is the correct file extension for Python files?', '.pyt, .pt, .pyth, .py', '.py', 1),
(9, 'In Python, \'Hello\', is the same as \"Hello\"', 'True, False', 'True', 2),
(10, 'What is a correct syntax to return the first character in a string?', 'x = \"Hello\".sub(0,1), x=sub(\"Hello\",0,1), x = \"Hello\"[0]', 'x = \"Hello\"[0]', 2),
(11, 'Which method can be used to remove any whitespace from both the beginning and the end of a string?', 'strip(), len(), ptrim(), trim()', 'strip()', 2),
(12, 'Which method can be used to return a string in upper case letters?', 'uppercase(), toUpperCase(), upper(), upperCase()', 'upper()', 2),
(13, 'Which method can be used to replace parts of a string?', 'switch(), repl(), replace(), replaceString()', 'replace()', 2),
(14, 'Which operator is used to multiply numbers?', '%, x, #, *', '*', 3),
(15, 'Which operator can be used to compare two values?', '==, =, <>, ><', '==', 3),
(16, 'Which collection is ordered, changeable, and allows duplicate members?', 'TUPLE, LIST, DICTIONARY, SET', 'LIST', 3),
(17, 'Which collection does not allow duplicate members?', 'TUPLE, LIST, SET', 'SET', 3),
(18, 'How do you start writing an if statement in Python?', 'if (x > y), if x > y, if x > y then:', 'if (x > y)', 3),
(19, 'How do you start writing a while loop in Python?', 'while x > y:, while (x > y), while x > y {, x > y while{', 'while (x > y)', 3),
(20, 'Which statement is used to stop a loop?', 'return, break, exit, stop', 'break', 3);

-- --------------------------------------------------------

--
-- Table structure for table `memory`
--

CREATE TABLE `memory` (
  `questionID` int(11) NOT NULL,
  `cardOne` longtext NOT NULL,
  `cardTwo` longtext NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memory`
--

INSERT INTO `memory` (`questionID`, `cardOne`, `cardTwo`, `quizID`) VALUES
(1, 'print', 'Hello World', 9),
(2, 'x = 5', '5', 9),
(3, 'Creating integer variable', 'x = int(3)', 9),
(4, 'def myfunc(): print(\"python is awesome\")', 'summoning a function to print text', 9);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1247861105, 590611006, '5'),
(2, 1247861105, 590611006, 'h'),
(3, 937554796, 590611006, 'wqesdfghjn,./'),
(4, 937554796, 590611006, 'defghnjmk,l./'),
(5, 1247861105, 590611006, 'mnkl'),
(6, 243595392, 590611006, 'ghjkl;sdfgbhnjm,.'),
(7, 590611006, 243595392, 'hi\\'),
(8, 1247861113, 1247861110, 'hi'),
(9, 1247861112, 1247861110, 'hihihihi'),
(10, 1247861112, 1247861110, 'ew'),
(11, 1247861112, 1247861110, 'fw'),
(12, 1247861112, 1247861110, 'few'),
(13, 1247861112, 1247861110, 'efw'),
(14, 1247861112, 1247861110, 'fw'),
(15, 1247861116, 1247861110, 'hi'),
(16, 1247861116, 1247861112, '123'),
(17, 1247861112, 1247861111, 'aff'),
(18, 1247861112, 1247861111, 'af'),
(19, 1247861112, 1247861111, 'fwa'),
(20, 1247861112, 1247861111, 'f'),
(21, 1247861112, 1247861111, 'wa'),
(22, 1247861112, 1247861111, 'f'),
(23, 1247861112, 1247861111, '3'),
(24, 1247861112, 1247861111, 'fv'),
(25, 1247861112, 1247861111, 'w'),
(26, 1247861116, 1247861112, 'yyy 5.00'),
(27, 1247861113, 1247861112, 'hung 5.01'),
(28, 1247861111, 1247861112, 'yit 5.01'),
(29, 1247861116, 1247861113, 'qwertyui'),
(30, 1247861111, 1247861113, '23456789'),
(31, 1247861113, 1247861111, '234567890dfghjkl;'),
(32, 1247861116, 1247861111, 'yyy 5.10'),
(33, 1247861116, 1247861111, 'yyy 511'),
(34, 1247861113, 1247861111, 'yit 511'),
(35, 1247861112, 1247861111, 'yit 511'),
(36, 1247861116, 1247861112, '513'),
(37, 1247861116, 1247861111, '513'),
(38, 1247861116, 1247861111, '666'),
(39, 1247861113, 1247861111, '666'),
(40, 1247861112, 1247861111, '666'),
(41, 1247861116, 1247861112, '666'),
(42, 1247861113, 1247861112, '666'),
(43, 1247861111, 1247861112, '666'),
(44, 1247861116, 1247861113, '666'),
(45, 1247861112, 1247861113, '666'),
(46, 1247861111, 1247861113, '666'),
(47, 1247861111, 1247861116, '666'),
(48, 1247861112, 1247861116, '666'),
(49, 1247861113, 1247861116, '666'),
(50, 1247861116, 1247861111, '3.58'),
(51, 1247861113, 1247861111, '3.58'),
(52, 1247861112, 1247861111, '3.58'),
(53, 1247861111, 1247861112, '3.59'),
(54, 1247861113, 1247861112, '3.59'),
(55, 1247861116, 1247861112, '3.59'),
(56, 1247861112, 1247861113, '4.00'),
(57, 1247861111, 1247861113, '4.00'),
(58, 1247861116, 1247861113, '4.00'),
(59, 1247861113, 1247861116, '4.01'),
(60, 1247861112, 1247861116, '4.01'),
(61, 1247861111, 1247861116, '4.01');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `pythonid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `backimg` blob NOT NULL,
  `file` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`pythonid`, `title`, `description`, `backimg`, `file`) VALUES
(8, 'chp 1', 'this is chp 1', 0x707974686f6e2e706e67, 0x3035202d20707974686f6e20696e74726f64756374696f6e202831292e706466),
(9, 'chp2', 'this is chp 2 ', 0x707974686f6e322e6a7067, 0x3036202d20707974686f6e207661726961626c65732065787072657373696f6e7320616e642073746174656d656e74732e706466),
(27, 'chp 3 ', 'This is chp 3', 0x707974686f6e332e6a7067, 0x3037202d20707974686f6e20636f6e646974696f6e616c20657865637574696f6e2e706466),
(29, 'Chp 4', 'this is chp 4', 0x707974686f6e2e706e67, 0x3038202d20707974686f6e206c6f6f707320616e6420697465726174696f6e732e706466);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `quizID` int(11) NOT NULL,
  `gametype` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`quizID`, `gametype`, `name`) VALUES
(1, 'MCQ', 'mcq quiz 3'),
(7, 'rearrange', 'SQL Rearrange Game'),
(9, 'Memory', 'Python Matching Quiz');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `resultID` int(11) NOT NULL,
  `quizID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `results` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`resultID`, `quizID`, `userID`, `results`) VALUES
(34, 1, 1247861112, 2),
(37, 1, 1247861112, 3),
(43, 9, 1247861112, 4),
(67, 7, 1247861112, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sqlgame`
--

CREATE TABLE `sqlgame` (
  `questionID` int(11) NOT NULL,
  `questionText` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `answerOptions` longtext NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sqlgame`
--

INSERT INTO `sqlgame` (`questionID`, `questionText`, `answer`, `answerOptions`, `quizID`) VALUES
(1, 'Insert these values into the Book Table:\nBookID = \"B01\"\nName = \"Chemistry\" \nAuthor = \"H.Potter\"\nPrice = \"45.20\"\nPublishedDate = \"31 May 2017\"\nPublisherID = \"P02\"', 'INSERT INTO Book ( BookID , Name , Author , Price , PublishedDate , PublisherID ) VALUES ( \'B06\' , \'Chemistry\' , \'H.Potter\' , \'45.20\' , \'31May2017\' , \'P02\' ) ;', 'SELECT * FROM ADD =', 7),
(2, 'Delete a row for a Table \"Publisher\" where the Publisher is Named \"Deitel\"', 'DELETE FROM Publisher WHERE Name = \'Deitel\'', '; REMOVE TABLE VALUE :', 7),
(3, 'Display a list of Publishers where publisher Name starts with the alphabet \'r\'', 'SELECT * FROM Publisher WHERE NAME like \' r % \'', '+ START # = ', 7),
(4, 'What is the command needed to display the entire \"Book\" Table?', 'SELECT * FROM Book', 'ALL TABLE VIEW SEE', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `user_type`) VALUES
(1247861111, 'yit', 'yit@gmail.com', '1234567890', 'active', 'admin'),
(1247861112, 'yong', 'yong@gmail.com', '1234567890', 'active', 'student'),
(1247861113, 'hung', 'hung@gmail.com', '1234567890', 'active', 'teacher'),
(1247861116, 'yyy', 'yyy@gmail.com', 'yyy', 'active', 'parent');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`Id`, `username`, `password`) VALUES
(1, 'Admin1', 'admin123'),
(2, 'parent1', 'parent123'),
(3, 'teacher1', 'teacher123'),
(4, 'student1', 'student123');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `Id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`Id`, `username`, `password`, `email`, `phone_number`, `user_type`) VALUES
(1, 'Admin1', 'admin123', 'admin1@gmail.com', '0125858023', 'admin'),
(2, 'parent1', 'parent123', 'parent1@gmail.com', '0165859458', 'parents'),
(3, 'student1', 'student123', 'student1@gmail.com', '0128489555', 'students'),
(10, 'teacher1', 'teacher123', 'teacher@gmail.com', '60125158055', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`databaseid`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussiondatabase`
--
ALTER TABLE `discussiondatabase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussionhtml`
--
ALTER TABLE `discussionhtml`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussionothers`
--
ALTER TABLE `discussionothers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`htmlid`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `memory`
--
ALTER TABLE `memory`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`pythonid`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`quizID`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`resultID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `sqlgame`
--
ALTER TABLE `sqlgame`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `db`
--
ALTER TABLE `db`
  MODIFY `databaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `discussiondatabase`
--
ALTER TABLE `discussiondatabase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `discussionhtml`
--
ALTER TABLE `discussionhtml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `discussionothers`
--
ALTER TABLE `discussionothers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `htmlid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `memory`
--
ALTER TABLE `memory`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `python`
--
ALTER TABLE `python`
  MODIFY `pythonid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `resultID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1247861118;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

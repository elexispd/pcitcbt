-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 10:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcit`
--

-- --------------------------------------------------------

--
-- Table structure for table `security_exam`
--

CREATE TABLE `security_exam` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `question` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `answer` varchar(3) NOT NULL,
  `year` varchar(11) NOT NULL,
  `course_no` int(2) NOT NULL,
  `status` int(3) NOT NULL,
  `duration` int(4) NOT NULL,
  `exam_date` varchar(11) NOT NULL,
  `category` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security_exam`
--

INSERT INTO `security_exam` (`id`, `course_id`, `lecturer_id`, `q_no`, `question`, `question_id`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`, `year`, `course_no`, `status`, `duration`, `exam_date`, `category`) VALUES
(2, 159167, 1664182874, 0, 'what makes a weak  password strong?', 1664191728, 'three manaement tips consider', 'user disclosure', 'key logging', 'none of the above', 'A', '2022', 5, 1, 1200, '2022-09-28', 'mca'),
(3, 159167, 1664182874, 0, 'what are cyber criminal targetting?', 1664192766, 'user', '.Computers', 'public', 'none', 'A', '2022', 5, 1, 1200, '2022-09-28', 'mca'),
(4, 159167, 1664182874, 0, '.What are the defence layer against malware?', 1664197400, 'user education', 'viruses', 'worms', 'no', 'A', '2022', 5, 1, 1200, '2022-09-28', 'mca'),
(5, 159167, 1664182874, 0, '.Does worms executes a copy of itself on another systems', 1664196762, 'yes', 'no', 'none', 'yes/no', 'A', '2022', 5, 1, 1200, '2022-09-28', 'mca'),
(6, 159167, 1664182874, 0, 'common password threat is..........................', 1664189899, 'wireless  sniffing', 'bots', 'trojan', 'None of the above', 'A', '2022', 5, 1, 1200, '2022-09-28', 'mca'),
(7, 159167, 1664182874, 0, 'the first world wide web is known as........', 1664969259, 'intranet', 'mosaic', 'apranent', 'none of the above', 'B', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(9, 159167, 1664182874, 0, ' what makes a weak  password strong?', 1664967908, ' three manaement tips consider', ' user disclosure', ' key logging', ' none of the above', 'A', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(10, 159167, 1664182874, 0, ' what are cyber criminal targetting?', 1664965855, ' user', ' .Computers', ' public', ' none', 'A', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(11, 159167, 1664182874, 0, ' common password threat is..........................', 1664972564, ' wireless  sniffing', ' bots', ' trojan', ' None of the above', 'A', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(12, 159167, 1664182874, 0, ' .Does worms executes a copy of itself on another systems', 1664966319, ' yes', ' no', ' none', ' yes/no', 'A', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(13, 159167, 1664182874, 0, ' .What are the defence layer against malware?', 1664967991, ' user education', ' viruses', ' worms', ' no', 'A', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(14, 159167, 1664182874, 0, 'in cyber security CIA means.......', 1664972237, 'confidentiality,intesity,availbity', 'confidentiality,integrity,availability', 'none of the above', 'none', 'B', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(15, 159167, 1664182874, 0, 'the goals of ............................is to reduce the exposure of the organisation', 1664969278, 'anti...virus', 'access control', 'password', 'none', 'C', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(16, 159167, 1664182874, 0, 'the goals of ............................is to reduce the exposure of the organisation', 1664968133, 'anti...virus', 'access control', 'password', 'none', 'C', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(17, 159167, 1664182874, 0, '..................................... is the practise of protecting systems networks and programms from digital attacks', 1664965972, 'space cyber', 'principle of cyber', 'scope of cyber', 'cyber security', 'D', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(18, 159167, 1664182874, 0, 'Imagine the status/service of a bank if its customers are unable to make transactions using their. This scenario refers to what goals of network security', 1664973780, 'Authenticity', 'Availability', 'Integrity', 'Confidentiality', 'B', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(19, 159167, 1664182874, 0, 'Which of the following operating system does not support networking?', 1664972508, 'Windows XP', 'Windows 3.1', 'Windows Server 2000', 'Windows NT', 'B', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(20, 159167, 1664182874, 0, 'Feature of Windows include', 1664972081, 'Running several programs simultaneously', 'Switching between open applications', 'Multitasking', 'All of the above', 'D', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(21, 159167, 1664182874, 0, 'ICT Means...............................', 1664969594, 'information commune technol', 'inspection communication technology', 'invitation communication tecnic', 'information communication technology', 'D', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(22, 159167, 1664182874, 0, 'What protocol do Internet use', 1664970321, 'TCB/IP Protocol', 'DNS/IP Protocol', 'TCP/IP Protocol', 'TCP/IP Protocol', 'C', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(23, 159167, 1664182874, 0, 'Start Button was introduced in ____________ Operating System Removed _______________ Restored _________', 1664974910, 'Win 95, Win 2000, Win 10', 'Win 98, Win XP, Win 7', 'Win 95, Win 8, Win 10 ', 'Win 98, Win 7, Win 8', 'B', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(24, 159167, 1664182874, 0, 'fastest way of sending informations are.......................', 1664975065, 'network', 'internet', 'systems', 'all of the above', 'D', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(25, 159167, 1664182874, 0, 'is information technology of great help to the police force', 1664979487, 'yes', 'no', 'none of the above', 'still', 'A', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(26, 159167, 1664182874, 0, 'any programmer who takes advantage of a user  or exploit the weak of others user', 1664982229, 'ethical', 'hacker', 'technology', 'none of the above', 'B', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(27, 159167, 1664182874, 0, 'As A police officer how do you interprete information', 1664983554, 'confidentiality,intesity,availbity', 'confidentiality,integrity,availability', 'communication/ user education', 'none of the above', 'C', '2022', 5, 1, 1200, '2022-10-13', 'exam'),
(28, 159167, 1664182874, 0, ' what makes a weak  password strong?', 1667480567, ' three manaement tips consider', ' user disclosure', ' key logging', ' none of the above', 'A', '2022', 6, 0, 900, '', 'mca'),
(29, 159167, 1664182874, 0, ' what are cyber criminal targetting?', 1667475604, ' user', ' .Computers', ' public', ' none', 'A', '2022', 6, 0, 900, '', 'mca'),
(30, 159167, 1664182874, 0, ' .Does worms executes a copy of itself on another systems', 1667479548, ' yes', ' no', ' none', ' yes/no', 'A', '2022', 6, 0, 900, '', 'mca'),
(31, 159167, 1664182874, 0, ' common password threat is..........................', 1667480238, ' wireless  sniffing', ' bots', ' trojan', ' None of the above', 'A', '2022', 6, 0, 900, '', 'mca'),
(33, 159167, 1664182874, 0, 'pcit simply means what?.........................................', 1667474902, 'police college instructure technology', 'police college of informationtechnology', 'police  college inform them ', 'none of the above', 'B', '2022', 6, 0, 900, '', 'mca'),
(34, 159167, 1664182874, 0, ' the first world wide web is known as........', 1669198966, ' intranet', ' mosaic', ' apranent', ' none of the above', 'B', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(35, 159167, 1664182874, 0, '  what makes a weak  password strong?', 1669201900, '  three manaement tips consider', '  user disclosure', '  key logging', '  none of the above', 'A', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(36, 159167, 1664182874, 0, '  what are cyber criminal targetting?', 1669196846, '  user', '  .Computers', '  public', '  none', 'A', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(37, 159167, 1664182874, 0, '  common password threat is..........................', 1669205163, '  wireless  sniffing', '  bots', '  trojan', '  None of the above', 'A', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(41, 159167, 1664182874, 0, '  what are cyber criminal targetting?', 1669205134, '  user', '  .Computers', '  public', '  none', 'A', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(46, 159167, 1664182874, 0, '  .Does worms executes a copy of itself on another systems', 1669197659, '  yes', '  no', '  none', '  yes/no', 'A', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(47, 159167, 1664182874, 0, '  .What are the defence layer against malware?', 1669205087, '  user education', '  viruses', '  worms', '  no', 'A', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(50, 159167, 1664182874, 0, ' in cyber security CIA means.......', 1669200120, ' confidentiality,intesity,availbity', ' confidentiality,integrity,availability', ' none of the above', ' none', 'B', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(55, 159167, 1664182874, 0, '  .What are the defence layer against malware?', 1669199099, '  user education', '  viruses', '  worms', '  no', 'A', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(60, 159167, 1664182874, 0, ' the goals of ............................is to reduce the exposure of the organisation', 1669204415, ' anti...virus', ' access control', ' password', ' none', 'C', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(62, 159167, 1664182874, 0, ' ..................................... is the practise of protecting systems networks and programms from digital attacks', 1669204885, ' space cyber', ' principle of cyber', ' scope of cyber', ' cyber security', 'D', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(66, 159167, 1664182874, 0, ' Imagine the status/service of a bank if its customers are unable to make transactions using their. This scenario refers to what goals of network security', 1669204428, ' Authenticity', ' Availability', ' Integrity', ' Confidentiality', 'B', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(69, 159167, 1664182874, 0, ' Which of the following operating system does not support networking?', 1669199962, ' Windows XP', ' Windows 3.1', ' Windows Server 2000', ' Windows NT', 'B', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(73, 159167, 1664182874, 0, ' Feature of Windows include', 1669199152, ' Running several programs simultaneously', ' Switching between open applications', ' Multitasking', ' All of the above', 'D', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(74, 159167, 1664182874, 0, ' ICT Means...............................', 1669198352, ' information commune technol', ' inspection communication technology', ' invitation communication tecnic', ' information communication technology', 'D', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(75, 159167, 1664182874, 0, ' What protocol do Internet use', 1669197973, ' TCB/IP Protocol', ' DNS/IP Protocol', ' TCP/IP Protocol', ' TCP/IP Protocol', 'C', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(86, 159167, 1664182874, 0, ' Start Button was introduced in ____________ Operating System Removed _______________ Restored _________', 1669203462, ' Win 95, Win 2000, Win 10', ' Win 98, Win XP, Win 7', ' Win 95, Win 8, Win 10 ', ' Win 98, Win 7, Win 8', 'B', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(87, 159167, 1664182874, 0, ' fastest way of sending informations are.......................', 1669205529, ' network', ' internet', ' systems', ' all of the above', 'D', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(95, 159167, 1664182874, 0, ' is information technology of great help to the police force', 1669201829, ' yes', ' no', ' none of the above', ' still', 'A', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(96, 159167, 1664182874, 0, ' any programmer who takes advantage of a user  or exploit the weak of others user', 1669199716, ' ethical', ' hacker', ' technology', ' none of the above', 'B', '2022', 6, 1, 900, '2022-11-25', 'exam'),
(102, 159167, 1664182874, 0, ' As A police officer how do you interprete information', 1669203076, ' confidentiality,intesity,availbity', ' confidentiality,integrity,availability', ' communication/ user education', ' none of the above', 'C', '2022', 6, 1, 900, '2022-11-25', 'exam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `security_exam`
--
ALTER TABLE `security_exam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `security_exam`
--
ALTER TABLE `security_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

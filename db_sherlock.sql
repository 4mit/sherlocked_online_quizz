-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2017 at 04:02 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sherlock`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `ans` char(1) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `qid` int(5) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `option1` char(100) NOT NULL,
  `option2` char(100) NOT NULL,
  `option3` char(100) NOT NULL,
  `option4` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`qid`, `question`, `answer`, `option1`, `option2`, `option3`, `option4`) VALUES
(10000, 'Who is the author of Sherlock Holmes?', 'D', 'William Shakespear', 'JK Rowling', 'Robert Ludlum', 'Arthur Conan Doyle'),
(10001, 'Where does Sherlock live?', 'C', '331 Baker Street', '201 Baker Street', '221 Baker Street\r\n', '211 Baker Street\r\n'),
(10003, 'How many sickles to a galleon? ', 'C', '16', '21', '17', '18'),
(10004, 'Who is the author of Sherlock Holmes?', 'A', 'Arthur Conan Doyle', 'Robert Ludlum', 'JK Rowling', 'William Shakespear'),
(10005, 'Where does Sherlock live? ', 'D', '211 Baker Street', '201 Baker Street', '331 Baker Street', '221 Baker Street'),
(10006, 'Who is the ghost of Slytherin? 	', 'D', ' The Grey Lady', 'Fat Friar', 'Nearly Headless Nick', 'Bloody Baron'),
(10007, 'How many knuts to a  sickle? 	', 'B', '12', '29', '41', '34'),
(10008, 'What is Sherlock''s brother''s name?', 'A', 'Mycroft', ' Mathew', 'Mike', 'Mark'),
(10009, 'What is fatal to a basilisk?', 'C', 'Scream of a Mandrakes', 'Mongoose', 'The crowing of a rooster', 'Scuttle of a Spider'),
(10010, 'What is Sherlock''s landlady''s name?', 'D', 'Mrs Johnson', 'Mrs Stamford', 'Mrs Robin', 'Mrs Hudson'),
(10011, 'What is  the meaning of the Hogwarts motto “Draco dormiens nunquam titillandus”? ', 'A', 'Never tickle a sleeping dragon', 'We the wizard community', 'Wizards Ho', 'We came,we saw, we conquered'),
(10012, 'What is helpful in recovering from a dementor attack? 	', 'D', 'Butterbeer', 'Water', 'Coffee', 'Choclate'),
(10013, 'What is John Watson’s sister’s name? ', 'A', 'Harriet', 'James', 'Polly', 'Joan'),
(10014, 'What is the name of the actor who played James Moriarty?', '', 'Todd Bryce', 'Mark Gatiss', 'Andrew Scott', 'Martin Freeman'),
(10015, 'What spell did Hermione work constantly with Harry before his first task? ', 'A', 'Accio', 'Alohamora', ' Expelliarmus', 'Stupefy'),
(10016, 'How many points if you catch a Golden Snitch? ', 'C', '10', '500', '150', '100'),
(10017, 'What is John Watson''s middle name? ', 'B', 'Hubris', 'Hamish', 'Harriet', 'Henry'),
(10018, 'Who wins the Quidditch cup in Harry Potter And Goblet Of Fire? ', 'D', 'England', 'Bulgaria', 'Spain', 'Ireland'),
(10019, 'What is Sherlock''s sister''s name? ', 'A', 'Eurus', 'Theresa', 'Molly', 'Evelyn'),
(10020, 'What animal does Rita Skeeter turn into to spy on people? ', 'B', 'Crow', 'Beetle', 'Fly', 'Rat'),
(10021, 'What was Sherlock’s childhood pirate name?', 'C', ' Blackbeard', ' Redbeard', ' Yellowbeard', ' Bluebeard'),
(10022, 'When was Harry’s Parents murdered? ', 'D', 'Dec 31', 'Sept 31', 'Aug 31', 'Oct 31'),
(10023, 'What is the name of Sherlock’s childhood best friends? ', 'A', 'Victor Trevor', 'Toby Sweet', 'Todd Markiss', 'James Arthur'),
(10024, 'What magazine does Luna’s father publish?	', 'B', 'Challenges in Charming', 'The Quibbler', 'The daily propher', 'The Wizarding Times'),
(10025, 'What is Harry’s patronus? ', 'D', 'Griffon 	', 'Lion', 'Dog', 'Stag'),
(10026, 'Who did the Mayfly man disguise as at John and Mary’s wedding? ', 'B', 'A priest', 'A photographer', 'A florist', 'A planner'),
(10027, 'What was the name of Watson’s former commander? ', 'A', 'James Sholto', 'Mark Tyler', 'Johnathan Donovan', 'Reed Poe'),
(10028, 'What is Harry''s youngest son''s name? ', 'C', 'James', 'Remus', 'Albus', 'Ronald 	'),
(10029, 'What was Harry''s first broomstick? ', 'B', 'Thunderbolt', 'Nimbus 2000', 'Firebolt', 'Cleansweep Two'),
(10030, 'What is Irene Adler’s twitter handle? ', 'B', '@ireneadler', '@thewhiphand', '@thedominatrix', ' @theteacher'),
(10031, 'What is the name of the restaurant that John and Mary go where they are surprised by Sherlock', 'C', 'Koffman’s', 'The Square', 'The Landmark', 'The Greenhouse'),
(10032, 'What is the first name of Lestrade? ', 'D', 'George', 'Gary', 'Mike', 'Greg'),
(10033, 'What is Ron''s middle name? ', 'C', 'Prewett', 'Muriel', 'Bilius', 'Francis'),
(10034, 'In The Empty Hearse what codeword did Sherlock text Mycroft', 'D', 'Bach', 'Sherlocked', 'Moriarty', ' Lazarus'),
(10035, 'In Harry Potter and the Philosopher’s Stone which Gringotts vault was the Philosopher’s Stone kept? ', 'C', '217', '504', '713', '703'),
(10036, 'In which country was army doctor Watson invalided?', 'A', 'Afghanistan', ' Vietnam', 'Iran', 'Iraq'),
(10037, 'Who plays John Watson?', 'B', 'Mike Shinoda', 'Martin Freeman', 'Martin Sasgrad', ' Michael Haynes'),
(10038, 'What is Mrs Hudson’s maiden name? ', 'C', 'Sessions', 'Shearsmith', 'Sissions', 'Stubbs'),
(10039, 'How many brothers does Ron have? ', 'A', '5', '6', '4', '7'),
(10040, 'When is Harry Potter’s birthday? ', 'B', ' 30th July', '31st July', '31st August', '30th June'),
(10041, 'Where did John train to become a doctor? ', 'D', 'Weill Cornell', 'St George’s', 'Walden’s', 'St Barthelomew’s'),
(10042, 'What is the name of Magnussen’s company? ', 'C', ' Magnussen News Corp', 'CNM', 'CAM Global News', 'CMN'),
(10043, 'What does R.A.B stand for? ', 'C', 'Regulus Andrew Black', ' Regulus Arumty Black', 'Regulus Arcturus Black', 'Regulus Artwin Black'),
(10044, 'How many members in a quiddich team? 	', 'C', '11', '9', '7', '10'),
(10045, 'Which serial killer does Culverton Smith have a keen interest in? ', 'D', 'Harold Shipman', 'John Christie', 'Jack the Ripper', 'HH Holmes'),
(10046, 'What is the Abominable Bride’s real name? ', 'A', 'Emilia Ricoletti', 'Florence Loretti', ' Aurelia Moretti', 'Emily Gianetti'),
(10047, 'What is Dumbledore’s full name? ', 'C', 'Albus Wulfric Percival', ' Wulfric Percival Brian', 'Albus Wulfric Percival Brian Dumbledore', 'Percival Brian Dumbledore'),
(10048, 'Who is Harry''s Godson? ', 'B', 'Lorcan Scamander 	', 'Teddy Lupin', 'Ryan Malfoy', 'Hugo Weasley'),
(10049, 'How many children do Harry have? ', 'C', '2', '4', '3', '1'),
(10050, 'What is Sherlock Holmes profession? ', 'C', ' Police, Spy', 'Private Investigator', 'Consulting Detective', 'Spy'),
(10051, 'What instrument does Sherlock play? ', 'D', 'Guitar', 'Flute', 'Piano', 'Violin'),
(10052, 'What does O.W.L stand for? ', 'C', 'Outstanding Wizard Lesson', 'Official Wizarding Licence', 'Ordinary Wizarding Level', 'Organized Wizard Learning'),
(10053, 'What is the street address of the home owned by the Dursleys? 	', 'D', '11 Privet Drive', '7 Privet Drive', '12 Privet Drive', '4 Privet Drive'),
(10054, 'Who plays Sherlock? ', 'A', 'Benedict Cumberbatch', '', '', ''),
(10055, 'In The Empty Hearse what did Sherlock save Watson from?', 'B', 'Drowning', 'Fire', ' Gunshot', ' Bomb'),
(10056, 'Who killed Bellatrix Lestrange? 	', 'C', 'Hermione', 'Ginny	', 'Mrs Weasley', ' Harry'),
(10057, 'Where did Mary shoot Sherlock? ', 'D', 'A lung', 'The Heart', 'The stomach', 'Between the ribs'),
(10058, 'What is the name of Dumbledore’s Phoenix? ', 'B', 'Firenze', 'Fawkes', 'Fluffy 			', 'Hermes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(29) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `state` varchar(100) NOT NULL,
  `institute` varchar(150) NOT NULL,
  `submitted` char(1) NOT NULL DEFAULT 'n',
  `password` varchar(100) NOT NULL,
  `ip` varchar(39) NOT NULL,
  `locked` char(1) NOT NULL DEFAULT 'n',
  `dateTime` time NOT NULL DEFAULT '00:00:00',
  `lockedDateTime` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `phone`, `state`, `institute`, `submitted`, `password`, `ip`, `locked`, `dateTime`, `lockedDateTime`) VALUES
('fsfsfs', 'sfsf', 'afsfgjsahfg@fdfds.com', '7878787878', 'kerala', 'd jhgjshgd jsdgsdgajd', 'n', 'ddddddddd', '::1', 'n', '00:00:00', '00:00:00'),
('rtrrt', 'rtrtr', 'amitadnsakj@gdfhgkfjg.com', '7878787878', 'kerala', 'fdfd dffdf dffdf', 'n', 'eeeeeeee', '::1', 'n', '00:00:00', '00:00:00'),
('amitamora', 'sdhkajshd', 'amitfhd@gmail.fdom', '7878787878', 'kerala', 'DFD FD DF FDFDF DFD', 'y', '23232323', '::1', 'n', '09:03:59', '00:00:00'),
('dsd', 'sdhkajshd', 'amitfhdsd@gmail.fdom', '7878787878', 'kerala', 'DFD FD DF FDFDF DFD', 'y', 'dsdsdsds', '::1', 'n', '12:32:46', '00:00:00'),
('fdsdsd', 'sdsdsd', 'dsdsd@sfdgdjfg.com', '7878787878', 'kerala', 'fdfd fd d df df', 'y', 'fdfdfdfd', '::1', 'n', '12:49:59', '00:00:00'),
('fdsdsd', 'dfdfgdg', 'sfsdfsf@fgfhgfhg.com', '8989898989', 'kerala', 'dddddddddddd', 'y', 'eeeeeeee', '::1', 'n', '14:27:31', '13:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `que`
--
ALTER TABLE `que`
  MODIFY `qid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10059;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

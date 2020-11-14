-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 11:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10-ivan-ziv-biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10-ivan-ziv-biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10-ivan-ziv-biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `ID` int(11) NOT NULL,
  `ISBN` varchar(255) DEFAULT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `COVER` varchar(255) DEFAULT NULL,
  `AUTHOR` varchar(255) DEFAULT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `PUBLISHED` date DEFAULT NULL,
  `PUBLISHER` varchar(255) DEFAULT NULL,
  `TYPE` enum('BOOK','CD','DVD') DEFAULT NULL,
  `STATUS_OF_BOOK` enum('available','reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`ID`, `ISBN`, `TITLE`, `COVER`, `AUTHOR`, `DESCRIPTION`, `PUBLISHED`, `PUBLISHER`, `TYPE`, `STATUS_OF_BOOK`) VALUES
(1, '9780575079939', 'Do Androids Dream of Electric Sheep?', 'https://upload.wikimedia.org/wikipedia/en/e/ee/DoAndroidsDream.png', 'Philip K. Dick ', 'World War Terminus had left the Earth devastated. Through its ruins, bounty hunter Rick Deckard stalked, in search of the renegade replicants who were his prey. ', '1968-03-15', 'Doubleday', 'CD', 'reserved'),
(2, '978-0-575-08484-1', 'The Witcher- Blood of Elves', 'https://upload.wikimedia.org/wikipedia/en/6/61/Blood_of_Elves_UK.jpg', 'Andrzej Sapkowski', 'For more than a hundred years, humans, dwarves, gnomes and elves lived together in relative peace. But times have changed, the uneasy peace is over and now the races are fighting once again - killing their own kind and each other.', '2020-11-12', 'superNOWA', 'BOOK', 'reserved'),
(3, '978-0553573404', 'A Song of Fire - A Game of Thrones', 'https://upload.wikimedia.org/wikipedia/en/9/93/AGameOfThrones.jpg', 'George R. R. Martin', 'Eddard Stark, Lord of Winterfell, is called to the court of his king to assist him as an advisor and confidante. But schemers, assassins and unscrupulous nobles crowd around the throne, whose whisperings the weak king has nothing to counter.', '2020-11-10', 'Bantam', 'BOOK', 'available'),
(4, '978-0316362474', 'Kings of the Wyld', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1477027207l/30841984.jpg', 'Nicholas Eames', 'Clay Cooper and his band were once the best of the best, the most feared and renowned crew of mercenaries this side of the Heartwyld.Their glory days long past, the mercs have grown apart and grown old, fat, drunk, or a combination of the three.', '2017-02-22', 'Orbit ', 'CD', 'available'),
(5, '0-7653-1178-X', 'Mistborn - The Final Empire', 'https://upload.wikimedia.org/wikipedia/en/4/44/Mistborn-cover.jpg', 'Brandon Sanderson', 'For a thousand years the ash fell and no flowers bloomed. For a thousand years the Skaa slaved in misery and lived in fear. For a thousand years the Lord Ruler, the ', '2006-07-12', 'Tor Books', 'CD', 'available'),
(6, '979-8552195589', 'War and Peace', 'https://images-na.ssl-images-amazon.com/images/I/51ltMW40TbL._SX320_BO1,204,203,200_.jpg', 'Leo Tolstoy', 'From the breathless excitement of Natasha Rostovs first ball, to Prince Andrei Bolkonskys, the novel abounds in memorable incidents.', '1899-08-20', 'The Russian Messenger', 'BOOK', 'reserved'),
(7, '978-0804139021', 'The Martian', 'https://upload.wikimedia.org/wikipedia/en/c/c3/The_Martian_2014.jpg', 'Andy Weir', 'Six days ago, Mark Watney became one of the first people to walk on Mars. Now, he’s sure he’ll be the first person to die there. After a dust storm nearly kills him and forces his crew to evacuate while thinking him dead, Mark finds himself stranded.', '2014-02-10', 'Ballantine Books', 'BOOK', 'reserved'),
(8, '978-0007149902', 'The Last Kingdom', 'https://upload.wikimedia.org/wikipedia/en/7/75/BernardCornwell_TheLastKingdom.jpg', 'Bernard Cornwell', 'he Last Kingdom is set in England during the reign of King Alfred. Uhtred is an English boy, born into the aristocracy of ninth-century Northumbria. Orphaned at ten, he is captured and adopted by a Dane and taught the Viking ways.', '2004-10-04', 'Harpercollins', 'CD', 'available'),
(9, '978-1784971571', 'The Three-Body Problem', 'https://upload.wikimedia.org/wikipedia/en/0/0f/Threebody.jpg', 'Cixin Liu', 'Ye Wenjie witnesses Red Guards beat her father to death during Chinas Revolution. Four decades later, the police asks engineer Wang Miao to infiltrate a secretive cabal of scientists. ', '2015-12-03', 'Head of Zeus', 'BOOK', 'reserved'),
(10, '978-0141036144', '1984', 'https://m.media-amazon.com/images/I/51L+QipqfaL.jpg', 'George Orwell', 'Winston Smith works for the Ministry of Truth. Big Brother stares out from every poster, the Police uncover every act of betrayal. When Winston finds love, he discovers that life does not have to be dull and deadening, and awakens to new possibilities.', '1949-06-04', 'Penguin', 'CD', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

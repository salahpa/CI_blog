-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2021 at 05:53 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_list`
--

DROP TABLE IF EXISTS `tbl_blog_list`;
CREATE TABLE IF NOT EXISTS `tbl_blog_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(100) NOT NULL,
  `blog_desc` text,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog_list`
--

INSERT INTO `tbl_blog_list` (`id`, `blog_title`, `blog_desc`, `created_date`, `updated_date`) VALUES
(1, 'What Is Lorem Ipsum?', 'Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry\'s Standard Dummy Text Ever Since The 1500s, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book. It Has Survived Not Only Five Centuries, But Also The Leap Into Electronic Typesetting, Remaining Essentially Unchanged. It Was Popularised In The 1960s With The Release Of Letraset Sheets Containing Lorem Ipsum Passages, And More Recently With Desktop Publishing Software Like Aldus Pagemaker Including Versions Of Lorem Ipsum.', '2021-11-03 00:00:00', '2021-11-04 09:40:49'),
(2, 'Where Does It Come From?', 'Contrary To Popular Belief, Lorem Ipsum Is Not Simply Random Text. It Has Roots In A Piece Of Classical Latin Literature From 45 Bc, Making It Over 2000 Years Old. Richard Mcclintock, A Latin Professor At Hampden-sydney College In Virginia, Looked Up One Of The More Obscure Latin Words, Consectetur, From A Lorem Ipsum Passage, And Going Through The Cites Of The Word In Classical Literature, Discovered The Undoubtable Source. Lorem Ipsum Comes From Sections 1.10.32 And 1.10.33 Of \"de Finibus Bonorum Et Malorum\" (the Extremes Of Good And Evil) By Cicero, Written In 45 Bc. This Book Is A Treatise On The Theory Of Ethics, Very Popular During The Renaissance. The First Line Of Lorem Ipsum, \"lorem Ipsum Dolor Sit Amet..\", Comes From A Line In Section 1.10.32.', '2021-11-03 19:16:12', '2021-11-04 07:03:34'),
(3, 'Why Do We Use It?', 'It Is A Long Established Fact That A Reader Will Be Distracted By The Readable Content Of A Page When Looking At Its Layout. The Point Of Using Lorem Ipsum Is That It Has A More-or-less Normal Distribution Of Letters, As Opposed To Using \'content Here, Content Here\', Making It Look Like Readable English. Many Desktop Publishing Packages And Web Page Editors Now Use Lorem Ipsum As Their Default Model Text, And A Search For \'lorem Ipsum\' Will Uncover Many Web Sites Still In Their Infancy. Various Versions Have Evolved Over The Years, Sometimes By Accident, Sometimes On Purpose (injected Humour And The Like).', '2021-11-03 19:16:39', '2021-11-04 07:03:56'),
(4, 'Where Can I Get Some?', 'There Are Many Variations Of Passages Of Lorem Ipsum Available, But The Majority Have Suffered Alteration In Some Form, By Injected Humour, Or Randomised Words Which Don\'t Look Even Slightly Believable. If You Are Going To Use A Passage Of Lorem Ipsum, You Need To Be Sure There Isn\'t Anything Embarrassing Hidden In The Middle Of Text. All The Lorem Ipsum Generators On The Internet Tend To Repeat Predefined Chunks As Necessary, Making This The First True Generator On The Internet. It Uses A Dictionary Of Over 200 Latin Words, Combined With A Handful Of Model Sentence Structures, To Generate Lorem Ipsum Which Looks Reasonable. The Generated Lorem Ipsum Is Therefore Always Free From Repetition, Injected Humour, Or Non-characteristic Words Etc.', '2021-11-03 19:16:41', '2021-11-04 07:04:22'),
(5, 'Lorem Ipsum', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Praesent Pharetra Justo Rutrum Purus Elementum, Eu Finibus Ex Ornare. Fusce In Convallis Sem. Curabitur Eu Dolor Justo. In Pharetra Dictum Dui, Ut Luctus Odio Imperdiet In. Cras Ut Leo Nec Diam Eleifend Interdum. In Ante Justo, Sodales Faucibus Lectus Sit Amet, Pulvinar Tempor Nulla. Donec Tempus Viverra Orci, Vulputate Condimentum Enim Posuere Quis. Nullam Posuere Mattis Nisl Dignissim Condimentum. Vivamus Tincidunt Magna Gravida Mauris Finibus Sagittis. Sed Enim Lorem, Dignissim Non Suscipit A, Congue At Turpis. Vivamus Ac Est Nec Sem Sollicitudin Luctus. Donec Hendrerit Cursus Libero, Ac Maximus Odio Tristique At. Fusce In Ligula Vitae Nisi Facilisis Porttitor Non Id Nunc.\r\n\r\nNam Lorem Est, Auctor Quis Vestibulum Non, Efficitur Placerat Orci. Cras A Urna Quis Felis Gravida Euismod. Quisque Et Elit Nec Libero Faucibus Blandit. Integer Est Sem, Dictum Sed Auctor Eu, Mollis Sed Quam. Proin Semper Finibus Purus, Non Sollicitudin Nisi Egestas Ac. Nunc Faucibus Semper Urna, A Tempus Dui Lacinia In. Proin Vulputate Fermentum Laoreet. Cras Commodo Elit At Dui Maximus, Vel Viverra Tortor Egestas. Aliquam Elementum Leo Vitae Massa Ultrices, Eget Semper Neque Tincidunt. Suspendisse Lobortis Nunc Efficitur Magna Sodales Venenatis. Donec Eget Lacus Quis Elit Malesuada Volutpat. Sed Quis Tristique Sapien, Ut Iaculis Velit. In Nec Posuere Libero. Integer Tristique Bibendum Ultricies. Etiam Sollicitudin Sem Ut Tellus Vestibulum, Eu Cursus Dui Elementum. Sed Gravida Facilisis Eros, Sed Ornare Mi Tempus Ut.\r\n\r\nEtiam Porta Erat Id Ipsum Bibendum Vulputate. Nunc Rhoncus Purus Fermentum Lacinia Gravida. Aliquam Vulputate Ultrices Ante Sit Amet Vulputate. Quisque Malesuada, Libero Ac Condimentum Placerat, Leo Tortor Suscipit Urna, Congue Congue Ante Eros Sit Amet Libero. Nunc Malesuada Dolor Eu Felis Dictum Varius. In Hendrerit Volutpat Felis, Semper Luctus Neque Condimentum Nec. Vestibulum Vel Massa At Diam Accumsan Efficitur Id Vitae Nisl. Sed Non Varius Urna. Cras In Diam Vitae Neque Pellentesque Tristique Non A Sem. Aenean Gravida Lacinia Euismod. Aliquam Augue Diam, Dignissim Et Arcu Et, Rutrum Mattis Orci.\r\n\r\nInteger Sed Vehicula Enim, Eget Vestibulum Purus. Morbi Non Risus Sem. Curabitur In Elit Sit Amet Sapien Commodo Gravida. Cras Hendrerit Magna Sed Massa Tincidunt Maximus. Vestibulum Porta Velit Efficitur, Dapibus Nibh Sit Amet, Condimentum Massa. Sed Malesuada Nec Magna Vitae Mattis. Integer Rutrum Gravida Sodales.\r\n\r\nSed Et Volutpat Mauris. Morbi Imperdiet Dignissim Sagittis. Suspendisse Dictum Enim Vitae Ligula Ullamcorper Tincidunt. Etiam Ullamcorper Gravida Lacinia. In Ac Rutrum Elit. In Consequat Dui In Accumsan Cursus. Duis Quis Risus Eget Leo Tincidunt Rhoncus Quis Et Dolor.', '2021-11-03 19:16:43', '2021-11-04 08:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

DROP TABLE IF EXISTS `tbl_comments`;
CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `blog_id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `comment` text,
  `created_date` datetime DEFAULT NULL,
  `parent_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `blog_id`, `username`, `comment`, `created_date`, `parent_id`) VALUES
(1, 3, 'Salahudheen', 'Test Comment', '2021-11-04 12:10:47', 0),
(2, 3, 'Albert', 'Second Comment', '2021-11-04 13:07:18', 0),
(3, 3, 'Blog User 1', 'Nice Blog', '2021-11-04 18:54:02', 1),
(4, 3, 'Blog User 2', 'Very Helpfull', '2021-11-04 18:54:02', 1),
(5, 3, 'Blog User 3', 'Very Informative', '2021-11-04 13:32:25', 4),
(6, 3, 'Haseeb', 'Very Good Article', '2021-11-04 16:45:16', 2),
(7, 3, 'Albert', 'Thanks', '2021-11-04 16:45:33', 6),
(8, 3, 'Blog User 2', 'Thanks', '2021-11-04 16:53:57', 5),
(9, 4, 'Salahudheen', 'First Commet', '2021-11-04 17:16:33', 0),
(10, 4, 'Haseeb', 'First Reply For First Comment', '2021-11-04 17:16:59', 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

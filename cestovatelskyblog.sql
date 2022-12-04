-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 04.Dec 2022, 15:58
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `cestovatelskyblog`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `messages`
--

CREATE TABLE `messages` (
  `id_mail` int(11) NOT NULL,
  `meno` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `nazov` varchar(100) NOT NULL,
  `sprava` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `messages`
--

INSERT INTO `messages` (`id_mail`, `meno`, `email`, `nazov`, `sprava`) VALUES
(1, 'Dominik Paulenka', 'dmnikp241@atlas.sk', 'Font is not very readable', 'I am having problems with reading this blog, the font that was used is too hard on the eyes'),
(2, 'Alexander Dánsky', 'alexdansky@atlas.cz', 'Zle', 'Zle všetko'),
(3, 'Alizard', 'alizardos@gmail.cpm', 'safa', 'fyxbxcbxn'),
(4, 'savasv', 'avyxvyxv@gmail.xo', 'safgg', 'xcbxcsdsd'),
(7, 'yxvyxv', 'asasfsa@sfoasfo.sk', 'agsdyxvyx', 'bsdfjdfjfc'),
(11, 'safew', 'gwezherh@safasgf.saf', 'fgbsdfhr', 'srhsdfha');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `kategoria` varchar(50) NOT NULL,
  `nazov` varchar(50) NOT NULL,
  `popis` varchar(255) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `post`
--

INSERT INTO `post` (`id_post`, `kategoria`, `nazov`, `popis`, `datum`) VALUES
(1, 'Africa', 'Our Nigerian adventure', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur erat vel mi commodo placerat. Fusce suscipit risus non feugiat dictum. Mauris vestibulum lobortis lacinia. Integer iaculis ligula vitae tortor posuere, eleifend dictum enim maximus.', '2022-12-02 23:50:30'),
(2, 'Asia', 'Traversing Eastern Siberia', 'Suspendisse aliquam nisi vel velit fermentum, vitae tincidunt sem ornare. Donec molestie pretium tristique. Donec vitae metus aliquam, accumsan lacus vitae, commodo augue. Fusce et eleifend leo, a hendrerit lorem. Sed eget libero ac arcu rhoncus laoreet.', '2022-12-02 23:50:30'),
(3, 'South America', 'Brazilian hospitality', 'Donec tempus interdum quam, sed euismod nisi ullamcorper vel. Nullam sit amet consectetur lacus. Phasellus sit amet iaculis enim. Etiam malesuada arcu malesuada dui interdum, vitae iaculis velit imperdiet.', '2022-12-02 23:53:49'),
(4, 'Europe', 'A walk through an Irish brewery', 'Pellentesque bibendum congue euismod. Integer blandit quis orci quis laoreet. Ut placerat magna sit amet massa ornare, vel consectetur tortor mollis. ', '2022-12-02 23:53:49'),
(9, 'Australia', 'Fires in Sydney', 'Dolor sit amet.', '2022-12-14 22:15:00');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexy pre tabuľku `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `messages`
--
ALTER TABLE `messages`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pre tabuľku `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

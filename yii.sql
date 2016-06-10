-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 10 2016 г., 03:07
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yii`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_local`
--

CREATE TABLE IF NOT EXISTS `tbl_local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL,
  `adress` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `tbl_local`
--

INSERT INTO `tbl_local` (`id`, `city`, `adress`, `name`) VALUES
(2, 'Хмельницький', 'Незалежності', 'Тест 2'),
(3, 'Киев', 'Хрещатик', 'Хрещатик-центр'),
(4, 'Житомир', 'ул.Киевская 53', 'Альта-центр'),
(5, 'Бровари', 'Франка 17', 'Акрополь'),
(6, 'Ирпень', 'ул.Сабурова 1', 'Саб-центр'),
(7, 'Борисполь', 'ул.Шевченка 14', 'Шев-тайм'),
(8, 'Петропавловская-Борщаговка', 'ул.Ленина 10', 'Б-центр');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

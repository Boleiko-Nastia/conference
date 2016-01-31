-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 31 2016 г., 21:07
-- Версия сервера: 5.6.26
-- Версия PHP: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `conference`
--

-- --------------------------------------------------------

--
-- Структура таблицы `conference_article`
--

CREATE TABLE IF NOT EXISTS `conference_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `addedby` varchar(255) DEFAULT NULL,
  `date_create` date DEFAULT NULL,
  `full_text` date DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `conference_config`
--

CREATE TABLE IF NOT EXISTS `conference_config` (
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `conference_config`
--

INSERT INTO `conference_config` (`login`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `conference_files`
--

CREATE TABLE IF NOT EXISTS `conference_files` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(250) NOT NULL DEFAULT '0',
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `conference_files`
--

INSERT INTO `conference_files` (`id`, `file_name`, `create_date`) VALUES
(1, 'asdfasd', '2016-01-24'),
(2, 'sdfasdfa', '2016-01-24'),
(3, 'sdfasdfa', '2016-01-24'),
(4, 'sdfasdfa', '2016-01-24'),
(5, 'sdfasdfa', '2016-01-24'),
(6, 'sdfasdfa', '2016-01-24'),
(7, 'sdfasdfa', '2016-01-24'),
(8, 'sdfasdfa', '2016-01-24'),
(9, 'sdfasdfa', '2016-01-24'),
(10, 'sdfasdfa', '2016-01-25'),
(11, 'sdfasdfa', '2016-01-25'),
(12, 'sdfasdfa', '2016-01-25'),
(13, 'sdfasdfa', '2016-01-25'),
(14, 'sdfasdfa', '2016-01-25'),
(15, 'sdfasdfa', '2016-01-25'),
(16, 'sdfasdfa', '2016-01-25');

-- --------------------------------------------------------

--
-- Структура таблицы `conference_lang`
--

CREATE TABLE IF NOT EXISTS `conference_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `conference_lang`
--

INSERT INTO `conference_lang` (`id`, `lang`) VALUES
(1, 'ru'),
(2, 'ua'),
(3, 'en');

-- --------------------------------------------------------

--
-- Структура таблицы `conference_members`
--

CREATE TABLE IF NOT EXISTS `conference_members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `section_id` int(10) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `job` varchar(250) DEFAULT NULL,
  `lecture_title` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `conference_members`
--

INSERT INTO `conference_members` (`id`, `section_id`, `name`, `job`, `lecture_title`) VALUES
(1, 5, 'asdfasdfa asdfasd asdfasdf', 'asdfasdfasdf', 'asdadfa');

-- --------------------------------------------------------

--
-- Структура таблицы `conference_sections`
--

CREATE TABLE IF NOT EXISTS `conference_sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `conference_sections`
--

INSERT INTO `conference_sections` (`id`, `title`) VALUES
(1, 'Инновации в производстве печатной продукции'),
(2, 'Технические и технологические инновации в упаковочном производстве'),
(3, 'Информационные системы и технологии в полиграфии'),
(4, 'Технологии обработки цифровых изображений и управление цветом'),
(5, 'Мультимедийные и web-технологии'),
(6, 'Разработка приложений для мобильных устройств'),
(7, 'Компьютерная графика, графический дизайн и трехмерное моделирование'),
(8, 'Маркетинг и реклама в полиграфии'),
(9, 'Использование новых методов обучения в издательско-полиграфической отрасли');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

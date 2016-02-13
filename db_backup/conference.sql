-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 14 2016 г., 02:44
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_create` date DEFAULT NULL,
  `addedby` varchar(250) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `conference_article`
--

INSERT INTO `conference_article` (`id`, `date_create`, `addedby`, `image_id`) VALUES
(2, '2016-02-01', 'Носков Г.А.', 16),
(3, '2016-02-06', 'Васерман', 17),
(4, '2016-02-14', 'asdfasdfa', 18);

-- --------------------------------------------------------

--
-- Структура таблицы `conference_article_translation`
--

CREATE TABLE IF NOT EXISTS `conference_article_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_id` enum('1','2','3') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `full_text` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `conference_article_translation`
--

INSERT INTO `conference_article_translation` (`id`, `lang_id`, `title`, `article_id`, `full_text`) VALUES
(2, '1', 'Мой первый заголовок', 2, 'Расскажите про покупки, про какие про покупки? \r\nСкоро будет конференция, налетай народ. Билеты уже в продаже.'),
(3, '2', 'Мой перший заголівок', 2, 'Роскажітє про покіпки, про какие про покіпки?'),
(6, '3', 'asdasdfasdfa', 2, 'asfasdfasdfasdfasdfasdfa'),
(7, '1', 'тыры пыры', 3, 'самый основной текст новости'),
(8, '2', '444444444444444444444', 3, 'вафывафыафывафыавфыв'),
(9, '1', 'asdfasdf', 4, 'asdfasdfasdfas');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

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
(16, 'sdfasdfa', '2016-01-25'),
(17, '121313131', '2016-01-31');

-- --------------------------------------------------------

--
-- Структура таблицы `conference_images`
--

CREATE TABLE IF NOT EXISTS `conference_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL DEFAULT '0',
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `conference_images`
--

INSERT INTO `conference_images` (`id`, `type`, `name`) VALUES
(1, '0', 'rendering-3d-hd-brine-mind.jpg'),
(2, '0', 'rendering-3d-hd-brine-mind.jpg'),
(3, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(4, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(5, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(6, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(7, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(8, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(9, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(10, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(11, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(12, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(13, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(14, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(15, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(16, 'jpg', 'rendering-3d-hd-brine-mind.jpg'),
(17, 'png', 'ЧастьМеню.png'),
(18, '', '');

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
  `head` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `conference_members`
--

INSERT INTO `conference_members` (`id`, `section_id`, `name`, `job`, `lecture_title`, `head`) VALUES
(1, 5, 'asdfasdfa asdfasd asdfasdf', 'asdfasdfasdf', 'asdadfa', NULL),
(2, NULL, 'aasdff asdf asdf ', 'ХНУРЭ', 'Как я победил дракона', 'aaaaaaaaaaaaa aaaaaaaaaaa aaaaaaaaaa');

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

-- --------------------------------------------------------

--
-- Структура таблицы `conference_users`
--

CREATE TABLE IF NOT EXISTS `conference_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `middlename` varchar(250) DEFAULT NULL,
  `job` varchar(250) DEFAULT NULL,
  `degree` varchar(250) DEFAULT NULL,
  `academictitle` varchar(250) DEFAULT NULL,
  `surname` varchar(250) DEFAULT NULL,
  `internally` enum('on','off') DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `conference_users`
--

INSERT INTO `conference_users` (`id`, `name`, `middlename`, `job`, `degree`, `academictitle`, `surname`, `internally`, `email`) VALUES
(1, 'asfdasdf asdfasdf asfdas ', NULL, NULL, NULL, NULL, NULL, NULL, 'noskovgleb@mail.ru'),
(4, 'asdf asfd fdsa f ', NULL, NULL, NULL, NULL, NULL, NULL, 'asfasf@asfasdf.com'),
(5, 'Семен Семенович Гриб', NULL, NULL, NULL, NULL, NULL, NULL, 'grib@mail.ru'),
(6, 'asdfsfdasfd ', NULL, NULL, NULL, NULL, NULL, NULL, 'gleasdfasf@asdf.com'),
(7, 'asdfasdf ', NULL, NULL, NULL, NULL, NULL, NULL, 'asdfasdfasdf'),
(8, 'asdaasdf', NULL, NULL, NULL, NULL, NULL, NULL, 'asdfasf@asdf.com'),
(9, 'adasdfasfd', NULL, NULL, NULL, NULL, NULL, NULL, 'asdfasfasf@asdfasf.com'),
(10, 'saaaaaaaaaaaaaaa', NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaaaa'),
(11, 'aaaaaaaaaaaaaaaaa', NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(12, 'asdfasfdasdf', NULL, NULL, NULL, NULL, NULL, NULL, 'asdfasdfafffffffffffffffffff'),
(13, 'afasfafdadf', NULL, NULL, NULL, NULL, NULL, NULL, 'adfasdfasfafaaaaaaaaa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

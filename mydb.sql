-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 22 2022 г., 09:31
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `publication_id_publ` int(11) NOT NULL,
  `place_of_publication` varchar(45) DEFAULT NULL,
  `publishing_year` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`publication_id_publ`, `place_of_publication`, `publishing_year`) VALUES
(412, 'Журнал', '2012');

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `publication_id_publ` int(11) NOT NULL,
  `printed_version` varchar(11) DEFAULT NULL,
  `number_of_pages` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `conference_abstracts`
--

CREATE TABLE `conference_abstracts` (
  `publication_id_publ` int(11) NOT NULL,
  `conference` varchar(255) DEFAULT NULL,
  `conference_date` datetime DEFAULT NULL,
  `place_of_publication` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `conference_abstracts`
--

INSERT INTO `conference_abstracts` (`publication_id_publ`, `conference`, `conference_date`, `place_of_publication`, `city`) VALUES
(413, 'Міжнародна', '2022-06-01 00:00:00', 'Збірник', 'Харків');

-- --------------------------------------------------------

--
-- Структура таблицы `dissertation`
--

CREATE TABLE `dissertation` (
  `publication_id_publ` int(11) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dissertation`
--

INSERT INTO `dissertation` (`publication_id_publ`, `topic`, `level`) VALUES
(380, 'Тестова тема', 'Магістр');

-- --------------------------------------------------------

--
-- Структура таблицы `eresource`
--

CREATE TABLE `eresource` (
  `publication_id_publ` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `guidelines`
--

CREATE TABLE `guidelines` (
  `publication_id_publ` int(11) NOT NULL,
  `discipline` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `login_user`
--

CREATE TABLE `login_user` (
  `id_user` int(11) NOT NULL,
  `login_email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_patronymic` varchar(50) NOT NULL,
  `role` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `login_user`
--

INSERT INTO `login_user` (`id_user`, `login_email`, `password`, `user_firstname`, `user_name`, `user_patronymic`, `role`) VALUES
(34, 'onyx.soft.art@gmail.com', 'b717415eb5e699e4989ef3e2c4e9cbf7', 'Онипченко', 'Артем', 'Олександрович', 1),
(45, 'artem.onypchenko@nure.ua', 'd41d8cd98f00b204e9800998ecf8427e', 'Иващенко', 'Георгий', 'Станиславович', 1),
(46, 'onyx.soft.art@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'test', 'Johnnie Walker', 'dasdasd', 1),
(47, '', 'd41d8cd98f00b204e9800998ecf8427e', 'Онипченко', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `monograph`
--

CREATE TABLE `monograph` (
  `publication_id_publ` int(11) NOT NULL,
  `topic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `patent`
--

CREATE TABLE `patent` (
  `publication_id_publ` int(11) NOT NULL,
  `patent_duration` varchar(255) DEFAULT NULL,
  `patent_number` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `patent_holder_number` varchar(45) DEFAULT NULL,
  `date_of_application` varchar(255) DEFAULT NULL,
  `bulletin_number` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `patent`
--

INSERT INTO `patent` (`publication_id_publ`, `patent_duration`, `patent_number`, `country`, `patent_holder_number`, `date_of_application`, `bulletin_number`) VALUES
(411, 'до 2025 року', '000', 'Україна', '8998', '2022-06-01', '1'),
(414, 'до 2028 року', '0002105104', 'Україна', '89983825', '2022-05-30', '512');

-- --------------------------------------------------------

--
-- Структура таблицы `publication`
--

CREATE TABLE `publication` (
  `id_publ` int(11) NOT NULL,
  `publ_type` varchar(255) DEFAULT NULL,
  `publ_name` varchar(255) DEFAULT NULL,
  `publ_date` varchar(255) DEFAULT NULL,
  `login_user_id_user` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publication`
--

INSERT INTO `publication` (`id_publ`, `publ_type`, `publ_name`, `publ_date`, `login_user_id_user`, `url`) VALUES
(380, 'Дисертація', 'Тестова назва дисертації', '2022-06-18', 34, 'https://docs.google.com/document/d/1XKQJLxz3BJ7UzggZgkoA5ZDX_Bp649CmEU1c_hvV39Y/edit'),
(411, 'Патент', 'Тестова назва патенту', '2022-06-14', 34, 'https://docs.google.com/document/d/1XKQJLxz3BJ7UzggZgkoA5ZDX_Bp649CmEU1c_hvV39Y/edit'),
(412, 'Стаття', 'Тестова назва статті', '2022-06-04', 34, 'https://docs.google.com/document/d/1XKQJLxz3BJ7UzggZgkoA5ZDX_Bp649CmEU1c_hvV39Y/edit'),
(413, 'Тези конференцій', 'Тестова назва тез', '2022-06-10', 34, 'https://translate.google.com/?hl=ru&sl=ru&tl=en&text=%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5%20%D0%BF%D0%BE%D0%B8%D1%81%D0%BA%D0%B0&op=translate'),
(414, 'Патент', 'Патент №2', '2022-06-01', 34, 'https://docs.google.com/document/d/1XKQJLxz3BJ7UzggZgkoA5ZDX_Bp649CmEU1c_hvV39Y/edit');

-- --------------------------------------------------------

--
-- Структура таблицы `report`
--

CREATE TABLE `report` (
  `publication_id_publ` int(11) NOT NULL,
  `discipline` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tutorial`
--

CREATE TABLE `tutorial` (
  `publication_id_publ` int(11) NOT NULL,
  `discipline` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `workshop`
--

CREATE TABLE `workshop` (
  `publication_id_publ` int(11) NOT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `cource` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD KEY `fk_article_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD KEY `fk_book_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `conference_abstracts`
--
ALTER TABLE `conference_abstracts`
  ADD KEY `fk_conference_abstracts_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `dissertation`
--
ALTER TABLE `dissertation`
  ADD KEY `fk_dissertation_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `eresource`
--
ALTER TABLE `eresource`
  ADD KEY `fk_eresource_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `guidelines`
--
ALTER TABLE `guidelines`
  ADD KEY `fk_guidelines_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_user_2` (`id_user`);

--
-- Индексы таблицы `monograph`
--
ALTER TABLE `monograph`
  ADD KEY `fk_monograph_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `patent`
--
ALTER TABLE `patent`
  ADD KEY `fk_patent_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_publ`),
  ADD KEY `fk_publication_login_user_idx` (`login_user_id_user`);

--
-- Индексы таблицы `report`
--
ALTER TABLE `report`
  ADD KEY `fk_report_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `tutorial`
--
ALTER TABLE `tutorial`
  ADD KEY `fk_tutorial_publication1_idx` (`publication_id_publ`);

--
-- Индексы таблицы `workshop`
--
ALTER TABLE `workshop`
  ADD KEY `fk_workshop_publication1_idx` (`publication_id_publ`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `publication`
--
ALTER TABLE `publication`
  MODIFY `id_publ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_book_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `conference_abstracts`
--
ALTER TABLE `conference_abstracts`
  ADD CONSTRAINT `fk_conference_abstracts_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `dissertation`
--
ALTER TABLE `dissertation`
  ADD CONSTRAINT `fk_dissertation_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `eresource`
--
ALTER TABLE `eresource`
  ADD CONSTRAINT `fk_eresource_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `guidelines`
--
ALTER TABLE `guidelines`
  ADD CONSTRAINT `fk_guidelines_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `monograph`
--
ALTER TABLE `monograph`
  ADD CONSTRAINT `fk_monograph_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `patent`
--
ALTER TABLE `patent`
  ADD CONSTRAINT `fk_patent_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `fk_publication_login_user` FOREIGN KEY (`login_user_id_user`) REFERENCES `login_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `fk_report_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `tutorial`
--
ALTER TABLE `tutorial`
  ADD CONSTRAINT `fk_tutorial_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `fk_workshop_publication1` FOREIGN KEY (`publication_id_publ`) REFERENCES `publication` (`id_publ`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

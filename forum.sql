-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 24 2018 г., 11:32
-- Версия сервера: 10.1.28-MariaDB
-- Версия PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `forum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `imgpath` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `message_text` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`message_id`, `imgpath`, `message_text`, `date`, `author_id`) VALUES
(1, '', 'awdawdwada', '2018-12-22', 2),
(2, '', 'awdaw', '2018-12-22', 2),
(3, '', 'awdawd', '2018-12-22', 2),
(4, '', 'awdawd', '2018-12-22', 2),
(5, '', 'wadawdad', '2018-12-22', 2),
(6, '', 'kuku', '2018-12-22', 2),
(7, '', 'На джаваскрипте кодишь?', '2018-12-22', 2),
(8, '', 'Без фреймворков - нет', '2018-12-23', 2),
(9, '', 'Фу, ДЖс. кодю на рнр отлично себя чувствую', '2018-12-23', 2),
(13, 'images/1545582615.jpg', 'програмирую на html, все прекрасно', '2018-12-23', 2),
(14, '', '<b>ЖИРНОООО</b>', '2018-12-23', 2),
(15, '', '&lt;b&gt;bold&lt;/b&gt;', '2018-12-23', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(11) NOT NULL,
  `thread_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_name`) VALUES
(1, 'СУП, Двощ!'),
(2, 'ЕОТ, прошу совета'),
(3, 'Програмист в треде задавайте ответы'),
(4, 'Побампаю ДжС фреймворки'),
(5, 'Помогите назвать песю, дабл думаю квадрипл называю'),
(6, 'Привет, как дела?');

-- --------------------------------------------------------

--
-- Структура таблицы `thread_message`
--

CREATE TABLE `thread_message` (
  `thread_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `thread_message`
--

INSERT INTO `thread_message` (`thread_id`, `message_id`) VALUES
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'user1', '123', 's@m.ua'),
(2, 'user2', '12345', 'email@ukr.net');

-- --------------------------------------------------------

--
-- Структура таблицы `user_message`
--

CREATE TABLE `user_message` (
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Индексы таблицы `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

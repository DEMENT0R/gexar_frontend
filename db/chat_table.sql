-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 20 2018 г., 22:54
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gexar_bot`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `mesage_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `already_exist` tinyint(1) DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`mesage_id`, `user_id`, `user_name`, `timestamp`, `already_exist`, `text`) VALUES
(1, 1, 'admin', '2018-10-20 18:41:53', 0, 'Genesis Text'),
(2, 2, 'second user', '2018-10-20 19:08:20', 0, 'text'),
(3, 1, 'admin', '2018-10-20 19:13:42', 0, 'Next test'),
(4, 1, 'admin', '2018-10-20 19:22:22', 0, 'third text'),
(5, 1, 'admin', '2018-10-20 19:30:17', 0, 'fourth text'),
(9, 1, 'admin', '2018-10-20 19:35:02', 0, 'fourth text'),
(10, 1, 'admin', '2018-10-20 19:35:09', 0, 'fourth text'),
(11, 1, 'admin', '2018-10-20 19:36:21', 0, 'test text'),
(12, 1, 'admin', '2018-10-20 19:37:05', 0, 'test text'),
(13, 1, 'admin', '2018-10-20 19:37:19', 0, 'test text'),
(14, 1, 'admin', '2018-10-20 19:42:08', 0, '.$message_text.'),
(15, 1, 'admin', '2018-10-20 19:44:20', 0, 'Мне нужен ...'),
(16, 1, 'admin', '2018-10-20 19:47:08', 0, 'test 123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD UNIQUE KEY `mesage_id` (`mesage_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `mesage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

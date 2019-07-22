-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июл 22 2019 г., 18:04
-- Версия сервера: 8.0.15
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `comments`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `messageBody` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `messageBody`) VALUES
(120, 'inc_meta', 'solodukha.rabota@mail.ru', 'sdfv'),
(127, 'Алексей', 'solodukha.rabota@mail.ru', 'work'),
(143, 'Алексей', 'email@email.com', 'text'),
(144, 'Алексей', 'email@email.com', '123'),
(145, 'Алексей', 'sadas@mail.ru', 'sdf'),
(146, 'Алексей', 'sadas@mail.ru', 'sdf'),
(147, 'Алексей', 'sadas@mail.ru', 'sdf'),
(148, 'Алексей', 'sadas@mail.ru', 'sdf'),
(149, '123', 'sadas@mail.ru', 'dsc'),
(150, '123', 'sadas@mail.ru', 'dsc'),
(151, '123', 'sadas@mail.ru', 'dsc'),
(152, '123', 'sadas@mail.ru', 'dsc'),
(153, '123', 'sadas@mail.ru', 'dsc'),
(154, '123', 'sadas@mail.ru', 'dsc'),
(155, '123', 'sadas@mail.ru', 'dsc'),
(156, '123', 'sadas@mail.ru', 'wec'),
(157, '12 cewwe ыва', 'sadas@mail.ru', 'qfew'),
(158, '12 cewwe ыва', 'sadas@mail.ru', 'asc'),
(159, 'Алексей', 'email@email.com', '123'),
(160, 'Алексей', 'email@email.com', '123'),
(161, 'Алексей', 'email@email.com', '123'),
(162, 'Алексей', 'email@email.com', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

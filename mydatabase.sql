-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Ноя 18 2020 г., 09:06
-- Версия сервера: 5.7.30
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `mydatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `imges`
--

CREATE TABLE `imges` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `size` int(11) NOT NULL,
  `format` varchar(255) NOT NULL,
  `click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `imges`
--

INSERT INTO `imges` (`id`, `name`, `url`, `size`, `format`, `click`) VALUES
(1, '1_1', 'http://localhost:8888/img/1_1.jpg', 311, 'КБ', 2),
(2, '1_2', 'http://localhost:8888/img/1_2.jpg', 2, 'МБ', 11),
(3, '1_3', 'http://localhost:8888/img/1_3.jpg', 791, 'КБ', 4),
(4, '1_4', 'http://localhost:8888/img/1_4.jpg', 527, 'КБ', 24),
(5, '1_5', 'http://localhost:8888/img/1_5.jpg', 614, 'КБ', 26),
(6, '1_6', 'http://localhost:8888/img/1_6.jpg', 2, 'МБ', 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `imges`
--
ALTER TABLE `imges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `click` (`click`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `imges`
--
ALTER TABLE `imges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

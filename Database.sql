-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 17 2021 г., 23:01
-- Версия сервера: 10.4.19-MariaDB
-- Версия PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `coding`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authorized`
--

CREATE TABLE `authorized` (
  `autorized_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `authorized`
--

INSERT INTO `authorized` (`autorized_id`) VALUES
(5),
(7),
(8),
(5),
(7);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `article_id` int(2) NOT NULL,
  `article_title` varchar(50) NOT NULL,
  `article_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`article_id`, `article_title`, `article_description`) VALUES
(1, 'Example title #1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, optio. Labore, tempora! Accusamus distinctio necessitatibus possimus maxime a facilis minima architecto vel soluta obcaecati. Odio similique ut id deleniti saepe.\r\nUnde repellendus enim consequatur fugit animi deserunt sint placeat obcaecati repudiandae perspiciatis pariatur quo blanditiis qui nihil officia aliquam dolore rem id in ea, sunt nisi debitis! Nesciunt, odio, omnis?\r\nAperiam tenetur quam officia nostrum dolorem eligendi architecto possimus ratione, tempora dolores voluptas. Iusto nobis necessitatibus repudiandae accusamus hic maiores earum temporibus maxime ab optio. Repudiandae molestiae animi, obcaecati quod.\r\nA nisi mollitia ex quaerat quia voluptatibus iure voluptatum repellat enim quos ipsa ut, velit recusandae veniam aliquam. Inventore animi officiis ipsum adipisci ab corrupti fugit reiciendis recusandae cumque ea.\r\nConsequuntur ipsam quo assumenda nihil. Unde repellendus delectus vero amet inventore necessitatibus provident cumque, doloremque. Assumenda molestiae qui, error natus labore exercitationem tempora, iste saepe sapiente dolor recusandae ratione quam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aperiam dolore in magnam quaerat repellendus similique sit, temporibus! Ab adipisci aperiam hic labore, nisi nobis odio suscipit. Eos, magnam!'),
(2, 'Example title #2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias aperiam dolore in magnam quaerat repellendus similique sit, temporibus! Ab adipisci aperiam hic labore, nisi nobis odio suscipit. Eos, magnam!'),
(3, 'Example title #3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, optio. Labore, tempora! Accusamus distinctio necessitatibus possimus maxime a facilis minima architecto vel soluta obcaecati. Odio similique ut id deleniti saepe.\r\nUnde repellendus enim consequatur fugit animi deserunt sint placeat obcaecati repudiandae perspiciatis pariatur quo blanditiis qui nihil officia aliquam dolore rem id in ea, sunt nisi debitis! Nesciunt, odio, omnis?\r\nAperiam tenetur quam officia nostrum dolorem eligendi architecto possimus ratione, tempora dolores voluptas. Iusto nobis necessitatibus repudiandae accusamus hic maiores earum temporibus maxime ab optio. Repudiandae molestiae animi, obcaecati quod.\r\nA nisi mollitia ex quaerat quia voluptatibus iure voluptatum repellat enim quos ipsa ut, velit recusandae veniam aliquam. Inventore animi officiis ipsum adipisci ab corrupti fugit reiciendis recusandae cumque ea.\r\nConsequuntur ipsam quo assumenda nihil. Unde repellendus delectus vero amet inventore necessitatibus provident cumque, doloremque. Assumenda molestiae qui, error natus labore exercitationem tempora, iste saepe sapiente dolor recusandae ratione quam?'),
(4, 'Example title #4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, optio. Labore, tempora! Accusamus distinctio necessitatibus possimus maxime a facilis minima architecto vel soluta obcaecati. Odio similique ut id deleniti saepe.\r\nUnde repellendus enim consequatur fugit animi deserunt sint placeat obcaecati repudiandae perspiciatis pariatur quo blanditiis qui nihil officia aliquam dolore rem id in ea, sunt nisi debitis! Nesciunt, odio, omnis?\r\nAperiam tenetur quam officia nostrum dolorem eligendi architecto possimus ratione, tempora dolores voluptas. Iusto nobis necessitatibus repudiandae accusamus hic maiores earum temporibus maxime ab optio. Repudiandae molestiae animi, obcaecati quod.\r\nA nisi mollitia ex quaerat quia voluptatibus iure voluptatum repellat enim quos ipsa ut, velit recusandae veniam aliquam. Inventore animi officiis ipsum adipisci ab corrupti fugit reiciendis recusandae cumque ea.\r\nConsequuntur ipsam quo assumenda nihil. Unde repellendus delectus vero amet inventore necessitatibus provident cumque, doloremque. Assumenda molestiae qui, error natus labore exercitationem tempora, iste saepe sapiente dolor recusandae ratione quam?'),
(5, 'Example title #5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, optio. Labore, tempora! Accusamus distinctio necessitatibus possimus maxime a facilis minima architecto vel soluta obcaecati. Odio similique ut id deleniti saepe.\r\nUnde repellendus enim consequatur fugit animi deserunt sint placeat obcaecati repudiandae perspiciatis pariatur quo blanditiis qui nihil officia aliquam dolore rem id in ea, sunt nisi debitis! Nesciunt, odio, omnis?\r\nAperiam tenetur quam officia nostrum dolorem eligendi architecto possimus ratione, tempora dolores voluptas. Iusto nobis necessitatibus repudiandae accusamus hic maiores earum temporibus maxime ab optio. Repudiandae molestiae animi, obcaecati quod.\r\nA nisi mollitia ex quaerat quia voluptatibus iure voluptatum repellat enim quos ipsa ut, velit recusandae veniam aliquam. Inventore animi officiis ipsum adipisci ab corrupti fugit reiciendis recusandae cumque ea.\r\nConsequuntur ipsam quo assumenda nihil. Unde repellendus delectus vero amet inventore necessitatibus provident cumque, doloremque. Assumenda molestiae qui, error natus labore exercitationem tempora, iste saepe sapiente dolor recusandae ratione quam?');

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `second_name` varchar(32) NOT NULL,
  `number` text NOT NULL,
  `service` varchar(32) NOT NULL,
  `doctor` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `service_type`
--

CREATE TABLE `service_type` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `service_type`
--

INSERT INTO `service_type` (`id`, `name`) VALUES
(1, 'Neurosciences '),
(2, 'Allergy '),
(3, 'Pediatrics '),
(4, 'Pathology '),
(5, 'Surgery '),
(6, 'Cancer care');

-- --------------------------------------------------------

--
-- Структура таблицы `specialists`
--

CREATE TABLE `specialists` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `second_name` text NOT NULL,
  `time_1` int(2) NOT NULL,
  `time_2` int(2) NOT NULL,
  `time_3` int(2) NOT NULL,
  `time_4` int(2) NOT NULL,
  `time_5` int(2) NOT NULL,
  `time_6` int(2) NOT NULL,
  `time_7` int(2) NOT NULL,
  `time_8` int(2) NOT NULL,
  `time_9` int(2) NOT NULL,
  `time_10` int(2) NOT NULL,
  `job` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `specialists`
--

INSERT INTO `specialists` (`id`, `first_name`, `second_name`, `time_1`, `time_2`, `time_3`, `time_4`, `time_5`, `time_6`, `time_7`, `time_8`, `time_9`, `time_10`, `job`, `photo`) VALUES
(3, 'Aslan', 'Yergaliev', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Allergy ', 'http://senim-clinic.kz/assets/doc/ergaliev.jpg'),
(5, 'Aliya', 'Mukanova', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pediatrics ', 'http://senim-clinic.kz/assets/doc/Mukanova%20A.%20A.jpg'),
(6, 'Zhaskairat', 'Satayev', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pathology ', 'http://senim-clinic.kz/assets/FullSizeRender-20-03-19-10-47-14.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `first_name` text NOT NULL,
  `second_name` text NOT NULL,
  `token1` int(2) NOT NULL,
  `token2` int(2) NOT NULL,
  `verified` int(1) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `first_name`, `second_name`, `token1`, `token2`, `verified`, `type`) VALUES
(11, 'zhasik', '0000', 'Zhaksylyk', 'Yermukhanbetov', 0, 0, 1, 'admin'),
(12, 'sauken', '0000', 'Sauken', 'Daniyarov', 0, 0, 1, 'user'),
(14, 'doctor', '0000', 'Doctor', 'Doctor', 0, 0, 1, 'doctor'),
(15, 'admin', '0000', 'Admin', 'Admin', 0, 0, 1, 'admin'),
(16, 'user', '0000', 'User', 'User', 0, 0, 1, 'user'),
(17, 'new_user', '0000', 'New', 'NEw', 0, 0, 1, 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`article_id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `article_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

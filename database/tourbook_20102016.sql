-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 20 2016 г., 13:51
-- Версия сервера: 5.7.14-8-beget-log
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nikola16_tour`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--
-- Создание: Окт 20 2016 г., 03:11
-- Последнее обновление: Окт 20 2016 г., 06:42
--

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `description`, `user_id`, `created_at`) VALUES
('GodMode', 'GodMode', '1', 1473127860),
('operator', 'operator', '3', NULL),
('user', 'user', '2', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--
-- Создание: Окт 20 2016 г., 03:11
-- Последнее обновление: Окт 20 2016 г., 06:35
--

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admins', 1, 'admins', NULL, NULL, NULL, NULL),
('GodMode', 1, 'GodeMode', NULL, NULL, 1460024437, 1460024437),
('operator', 1, 'operator', NULL, NULL, NULL, NULL),
('user', 1, 'user', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--
-- Создание: Окт 20 2016 г., 03:11
--

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--
-- Создание: Окт 20 2016 г., 03:12
--

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--
-- Создание: Окт 19 2016 г., 10:49
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `options` int(11) NOT NULL,
  `images` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--
-- Создание: Окт 19 2016 г., 10:47
-- Последнее обновление: Окт 20 2016 г., 09:44
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `full_description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `country_id`, `name`, `description`, `full_description`, `status`) VALUES
(1, 1, 'Novosibirsk', 'Itsa full of trash city, the most populat place in the Novosibirsk is the Red Square :))', 'Itsa full of trash city, the most populat place in the Novosibirsk is the Red Square :))', 1),
(2, 1, 'Moscow', 'This is test content, this is the capital of Russian Federation and generally most favorite place between east and west coasts of Eurasia', 'This is test content, this is the capital of Russian Federation and generally most favorite place between east and west coasts of Eurasia\r\n', 1),
(3, 2, 'Thaipei', 'In Thaipei manufacted a lot of things from the begining of the century', 'In Thaipei manufacted a lot of things from the begining of the century', 1),
(4, 2, 'Bangkok', ' Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand', ' Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand Bagkok itsa capitol of Thailand', 1),
(6, 1, 'test city', 'this is disabled test city', 'this is disabled test city', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `codes`
--
-- Создание: Окт 19 2016 г., 10:54
--

DROP TABLE IF EXISTS `codes`;
CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--
-- Создание: Окт 19 2016 г., 10:19
-- Последнее обновление: Окт 20 2016 г., 08:49
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `full_description` text NOT NULL,
  `options` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`, `description`, `full_description`, `options`, `status`) VALUES
(1, 'Russia', 'Itsa full of wonderfull nature ', 'Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature ', 'Itsa full of wonderfull nature \r\n\r\nItsa full of wonderfull nature \r\n\r\nItsa full of wonderfull nature ', 1),
(2, 'Thailand', 'It is very good It is very good It is very good It is very good ', 'It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good ', 'It is very good \r\nIt is very good \r\nIt is very good It is very good \r\nIt is very good ', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--
-- Создание: Окт 19 2016 г., 10:51
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `discount` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--
-- Создание: Окт 19 2016 г., 10:43
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--
-- Создание: Окт 19 2016 г., 10:53
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `comment` text NOT NULL,
  `error_code` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--
-- Создание: Окт 19 2016 г., 10:44
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Окт 20 2016 г., 04:06
-- Последнее обновление: Окт 20 2016 г., 06:41
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `second_name`, `last_name`, `phone`, `email`, `birthday`, `bonus`, `money`, `created_at`, `updated_at`, `password_reset_token`, `password_hash`, `auth_key`, `status`) VALUES
(1, 'admin', 'admin', 'adminovich', 'adminov', '+79833161472', 'admin@admin.com', 0, 1000, 1000, 0, 0, 'NULL', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', 1),
(2, 'user', 'user', 'userovich', 'userov', '+154654646546', 'email@gang.nsk.ru', 0, 100, 100, 0, 0, '', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', 1),
(3, 'operator', 'operator', 'operatorvich', 'operatorov', '+45485687878', 'ololo@ororo.com', 0, 150, 150, 0, 0, '', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--
-- Создание: Окт 20 2016 г., 07:31
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wish` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`,`country_id`);

--
-- Индексы таблицы `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Индексы таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 11 2016 г., 20:14
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
-- Создание: Дек 01 2016 г., 00:13
-- Последнее обновление: Дек 11 2016 г., 16:54
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
('admin', 'Nikolay', '9', NULL),
('GodMode', 'GodMode', '1', 1473127860),
('operator', 'operator', '3', NULL),
('user', NULL, '10', 1477984798),
('user', NULL, '11', 1478014740),
('user', NULL, '12', 1481475291),
('user', 'user', '2', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--
-- Создание: Дек 01 2016 г., 00:13
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
('admin', 1, 'admin', NULL, NULL, NULL, NULL),
('GodMode', 1, 'GodeMode', NULL, NULL, 1460024437, 1460024437),
('operator', 1, 'operator', NULL, NULL, NULL, NULL),
('user', 1, 'user', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--
-- Создание: Дек 01 2016 г., 00:13
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
-- Создание: Дек 01 2016 г., 00:13
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
-- Структура таблицы `basket`
--
-- Создание: Дек 01 2016 г., 00:13
-- Последнее обновление: Дек 11 2016 г., 16:57
--

DROP TABLE IF EXISTS `basket`;
CREATE TABLE `basket` (
  `id` int(1) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `user_id`, `booking_id`, `status`) VALUES
(1, 1, 2, 1),
(2, 1, 2, 1),
(3, 1, 2, 1),
(4, 1, 2, 1),
(5, 1, 2, 1),
(6, 1, 2, 1),
(7, 1, 2, 1),
(8, 1, 2, 1),
(9, 1, 2, 1),
(12, 1, 2, 1),
(13, 1, 2, 1),
(14, 1, 2, 1),
(15, 1, 2, 1),
(16, 1, 2, 1),
(17, 1, 2, 1),
(18, 1, 2, 1),
(19, 1, 2, 1),
(20, 1, 2, 1),
(21, 1, 2, 1),
(22, 1, 2, 1),
(23, 1, 2, 1),
(24, 1, 2, 1),
(25, 1, 2, 1),
(26, 1, 2, 1),
(27, 1, 2, 1),
(28, 1, 2, 1),
(29, 1, 2, 1),
(30, 1, 2, 1),
(31, 1, 2, 1),
(32, 1, 2, 1),
(33, 1, 2, 1),
(34, 1, 2, 1),
(35, 12, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--
-- Создание: Дек 01 2016 г., 00:13
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `options` text NOT NULL,
  `images` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `city_id`, `name`, `description`, `type_id`, `price`, `options`, `images`, `status`, `bonus`, `discount`) VALUES
(1, NULL, 'Stella Artois', '<p>телки, бухич, капитан морган</p>', 1, 100, 'телки, бухич, капитан морган', 0, 0, 10, 10),
(2, NULL, 'Отель Сибирь', 'Комфортабельный отель эконом класса', 3, 250, 'шлюхи шконка блэкджек расчет в баксах', 0, 1, 25, 10),
(3, NULL, 'Отель Аврора', 'Баня ебальня', 3, 250, 'шлюхи шконка ноу инклудед', 0, 1, 25, 10),
(4, NULL, 'Аренда яхты на Обском море', '<p>Аренда яхты на Обском море - охуительно )</p>', 1, 1500, 'нет', 0, 1, 10, 10),
(6, NULL, 'Профессиональный фотограф и гид людоед к вашим услугам', '<p><strong>Профессиональный фотограф и гид людоед к вашим услугам</strong></p>', 7, 22222, '112', 0, 1, 11, 10),
(7, NULL, 'Phi-Phi Islands', '<p style="color: #333333; font-family: \'Trebuchet MS\', Arial, Helvetica, sans-serif; font-size: 16px;" align="justify">&nbsp; Острова Пхи-Пхи расположены в 40 км на юго-восток от Пхукета. Пхи-Пхи - это небольшой архипелаг, состоящий из 6 островов:&nbsp;<strong>Phi-Phi Don</strong>&nbsp;(единственный обитаемый),<strong>Phi-Phi Ley</strong>&nbsp;c бухтой Майа (Maya bay), где снимался фильм "Пляж",&nbsp;<strong>Mosquito</strong>&nbsp;(в переводе "комар"),&nbsp;<strong>Bamboo</strong>&nbsp;(в переводе "бамбуковый") и две небольшие скалы&nbsp;<strong>Bida Nok</strong>&nbsp;и&nbsp;<strong>Bida Nai</strong>.</p>\r\n<p style="color: #333333; font-family: \'Trebuchet MS\', Arial, Helvetica, sans-serif; font-size: 16px;" align="justify">&nbsp;&nbsp;&nbsp;Во время однодневной экскурсии вы посетите Phi-Phi Ley, где находятс</p>', 4, 1500, 'russ guide', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `booking_images`
--
-- Создание: Ноя 25 2016 г., 07:35
-- Последнее обновление: Дек 01 2016 г., 00:13
-- Последняя проверка: Дек 01 2016 г., 00:13
--

DROP TABLE IF EXISTS `booking_images`;
CREATE TABLE `booking_images` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `path` text,
  `imageFile` blob,
  `status` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking_images`
--

INSERT INTO `booking_images` (`id`, `booking_id`, `path`, `imageFile`, `status`) VALUES
(18, 3, 'uploads/3.2868652.jpg', NULL, 1),
(17, 2, 'uploads/2.66061402.jpg', NULL, 1),
(15, 1, 'uploads/1.1092529.jpg', NULL, 1),
(16, 2, 'uploads/2.77352906.jpg', NULL, 1),
(14, 1, 'uploads/1.54605103.jpg', NULL, 1),
(13, 1, 'uploads/1.70263672.jpg', NULL, 1),
(19, 3, 'uploads/3.47485352.jpg', NULL, 1),
(20, 3, 'uploads/3.16644287.jpg', NULL, 1),
(21, 4, 'uploads/4.1248168.jpg', NULL, 1),
(22, 4, 'uploads/4.10421753.jpg', NULL, 1),
(23, 4, 'uploads/4.857543.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--
-- Создание: Дек 01 2016 г., 00:13
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
(7, 2, 'Chiang Mai', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 0),
(8, 4, 'Buenos-Aires', 'Buenos-Aires is the capital of Argentina and the most popular touristic place', 'Buenos-Aires is the capital of Argentina and the most popular touristic place', 1),
(9, 1, 'Новоуральск', 'Новоуральск', 'Новоуральск', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `city_images`
--
-- Создание: Дек 01 2016 г., 00:13
--

DROP TABLE IF EXISTS `city_images`;
CREATE TABLE `city_images` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `path` text,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city_images`
--

INSERT INTO `city_images` (`id`, `city_id`, `path`, `status`) VALUES
(1, 1, 'uploads/1.14990234.jpg', 1),
(2, 1, 'uploads/1.97933960.jpg', 1),
(3, 1, 'uploads/1.34231567.jpg', 1),
(4, 2, 'uploads/2.83087159.jpg', 1),
(5, 2, 'uploads/2.57788086.jpg', 1),
(6, 2, 'uploads/2.96609498.jpg', 1),
(7, 2, 'uploads/2.70812988.jpg', 1),
(8, 3, 'uploads/3.79116822.jpg', 1),
(9, 3, 'uploads/3.66546631.jpg', 1),
(10, 3, 'uploads/3.49075317.jpg', 1),
(11, 4, 'uploads/4.6683349.jpg', 1),
(12, 4, 'uploads/4.66094971.jpg', 1),
(13, 4, 'uploads/4.94381714.jpg', 1),
(14, 7, 'uploads/7.26400757.jpg', 1),
(15, 7, 'uploads/7.30957031.jpg', 1),
(16, 7, 'uploads/7.19284057.jpg', 1),
(17, 7, 'uploads/7.78549195.jpg', 1),
(18, 8, 'uploads/8.49258423.jpg', 1),
(19, 8, 'uploads/8.3698730.jpg', 1),
(20, 8, 'uploads/8.85668946.jpg', 1),
(21, 9, 'uploads/9.33197021.jpg', 1),
(22, 9, 'uploads/9.80987549.jpg', 1),
(23, 9, 'uploads/9.23596191.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `codes`
--
-- Создание: Дек 01 2016 г., 00:13
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
-- Создание: Дек 01 2016 г., 00:13
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `full_description` text NOT NULL,
  `options` text NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `flag` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`, `description`, `full_description`, `options`, `currency`, `flag`, `status`) VALUES
(1, 'Russia', 'Itsa full of wonderfull nature ', 'Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature ', 'Itsa full of wonderfull nature \r\n\r\nItsa full of wonderfull nature \r\n\r\nItsa full of wonderfull nature ', NULL, NULL, 1),
(2, 'Thailand', 'It is very good It is very good It is very good It is very good ', 'It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good It is very good ', 'It is very good \r\nIt is very good \r\nIt is very good It is very good \r\nIt is very good ', NULL, NULL, 1),
(3, 'Vietnam', 'м остров Джеймса Бонда, такое название получил остров Ко Тапу, что в переводе будет (Гвоздь), и остров Ко Пин Кан (Ko Ping Kan) на котором и проходили съёмки фильма "Человек с золотым пистолетом" в 1974 году. Тут у вас будет около 40 минут свободного времени, ', 'Далее вы остановитесь на жемчужине этой экскурсии сам остров Джеймса Бонда, такое название получил остров Ко Тапу, что в переводе будет (Гвоздь), и остров Ко Пин Кан (Ko Ping Kan) на котором и проходили съёмки фильма "Человек с золотым пистолетом" в 1974 году. Тут у вас будет около 40 минут свободного времени, чтобы сделать красивые фотографии, купить сувениры и осмотреть знаменитый остров со всех сторон.Далее вы остановитесь на жемчужине этой экскурсии сам остров Джеймса Бонда, такое название получил остров Ко Тапу, что в переводе будет (Гвоздь), и остров Ко Пин Кан (Ko Ping Kan) на котором и проходили съёмки фильма "Человек с золотым пистолетом" в 1974 году. Тут у вас будет около 40 минут свободного времени, чтобы сделать красивые фотографии, купить сувениры и осмотреть знаменитый остров со всех сторон.Далее вы остановитесь на жемчужине этой экскурсии сам остров Джеймса Бонда, такое название получил остров Ко Тапу, что в переводе будет (Гвоздь), и остров Ко Пин Кан (Ko Ping Kan) на котором и проходили съёмки фильма "Человек с золотым пистолетом" в 1974 году. Тут у вас будет около 40 минут свободного времени, чтобы сделать красивые фотографии, купить сувениры и осмотреть знаменитый остров со всех сторон.', 'Hi', NULL, '', 1),
(4, 'Argentina', 'Argentina', 'very dangerous country', 'sea flat beach sun and more fun two chiken wings please', NULL, '', 1),
(5, 'Korea', '<p><span style="color: #252525; font-family: sans-serif;">Респу́блика Коре́я (кор. 대한민국?, 大韓民國? Тэханмингук), ранее было принято написание Коре́йская Респу́блика[4], официальное сокращённое название Коре́я (кор. 한국?, 韓國? Хангук или кор. 대한?, 大韓? Тэхан)[5] &mdash;государство в Восточной Азии, расположенное на Корейском полуострове. Столица &mdash; Сеул. Неофициальное название страны, широко употребляемое в СМИ, &mdash; Ю́жная Коре́я.</span></p>', '<p><span style="color: #252525; font-family: sans-serif;">Респу́блика Коре́я (кор. 대한민국?, 大韓民國? Тэханмингук), ранее было принято написание Коре́йская Респу́блика[4], официальное сокращённое название Коре́я (кор. 한국?, 韓國? Хангук или кор. 대한?, 大韓? Тэхан)[5] &mdash;государство в Восточной Азии, расположенное на Корейском полуострове. Столица &mdash; Сеул. Неофициальное название страны, широко употребляемое в СМИ, &mdash; Ю́жная Коре́я.&nbsp;Респу́блика Коре́я (кор. 대한민국?, 大韓民國? Тэханмингук), ранее было принято написание Коре́йская Респу́блика[4], официальное сокращённое название Коре́я (кор. 한국?, 韓國? Хангук или кор. 대한?, 大韓? Тэхан)[5] &mdash;государство в Восточной Азии, расположенное на Корейском полуострове. Столица &mdash; Сеул. Неофициальное название страны, широко употребляемое в СМИ, &mdash; Ю́жная Коре́я.Респу́блика Коре́я (кор. 대한민국?, 大韓民國? Тэханмингук), ранее было принято написание Коре́йская Респу́блика[4], официальное сокращённое название Коре́я (кор. 한국?, 韓國? Хангук или кор. 대한?, 大韓? Тэхан)[5] &mdash;государство в Восточной Азии, расположенное на Корейском полуострове. Столица &mdash; Сеул. Неофициальное название страны, широко употребляемое в СМИ, &mdash; Ю́жная Коре́я.</span></p>', '2', NULL, '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `country_images`
--
-- Создание: Дек 01 2016 г., 00:13
--

DROP TABLE IF EXISTS `country_images`;
CREATE TABLE `country_images` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `path` text,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country_images`
--

INSERT INTO `country_images` (`id`, `country_id`, `path`, `status`) VALUES
(1, 1, 'uploads/1.75457764.jpg', 1),
(2, 1, 'uploads/1.95208741.jpg', 1),
(3, 1, 'uploads/1.64395142.png', 1),
(4, 2, 'uploads/2.96343995.jpg', 1),
(5, 2, 'uploads/2.40914917.jpg', 1),
(6, 2, 'uploads/2.47134399.jpg', 1),
(7, 2, 'uploads/2.3195190.jpg', 1),
(8, 3, 'uploads/3.9985351.jpg', 1),
(9, 3, 'uploads/3.86462403.jpg', 1),
(10, 3, 'uploads/3.36044311.jpg', 1),
(11, 3, 'uploads/3.43551636.jpg', 1),
(12, 4, 'uploads/4.20767212.jpg', 1),
(13, 4, 'uploads/4.32067871.jpg', 1),
(14, 4, 'uploads/4.55010986.jpg', 1),
(15, 4, 'uploads/4.43325806.jpg', 1),
(16, 1, 'uploads/1.52179806.jpg', 1),
(17, 5, 'uploads/5.32897949.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--
-- Создание: Дек 01 2016 г., 00:13
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `comment` text,
  `transaction_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date`, `comment`, `transaction_id`, `status`) VALUES
(1, 1, '2016-10-04 13:50:00', 'Купил экскурсию по пляжу с бухлом, блекджеком и шлюхами.', NULL, 1),
(2, 1, '2016-11-23 20:55:00', 'штобы фсе было вовримя', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders_items`
--
-- Создание: Дек 01 2016 г., 00:13
--

DROP TABLE IF EXISTS `orders_items`;
CREATE TABLE `orders_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `bonus` int(11) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `comment` text,
  `status_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_items`
--

INSERT INTO `orders_items` (`id`, `order_id`, `book_id`, `price`, `bonus`, `discount`, `comment`, `status_id`, `status`) VALUES
(1, 1, 1, 100, 10, 15, 'my comment', NULL, 1),
(2, 1, 2, 200, 22, 10, 'Bla bla bla coment', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--
-- Создание: Дек 01 2016 г., 00:13
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
-- Создание: Дек 01 2016 г., 00:13
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
-- Создание: Дек 01 2016 г., 00:13
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `options` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `name`, `description`, `options`, `status`) VALUES
(1, 'yacht', 'Yacht', 'туда, сюда, есть то, се, пятое, десятое', 1),
(2, 'car', 'Car', 'туда, сюда, есть то, се, пятое, десятое', 1),
(3, 'hotel', 'Hotel', 'туда, сюда, есть то, се, пятое, десятое', 1),
(4, 'sightseeing', 'Sightseeing', 'sightseeing, asd, aaa, bbb', 1),
(5, 'tour', 'Tour', 'tour, tour, tour, tour, tour, tour', 1),
(6, 'transfer', 'Transfer', 'transfer, transfer, huyansfer', 1),
(7, 'photosession', 'Photosession', 'photosession, photosession, photosession', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Дек 01 2016 г., 00:13
-- Последнее обновление: Дек 11 2016 г., 16:54
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthday` int(11) DEFAULT NULL,
  `bonus` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `second_name`, `last_name`, `phone`, `email`, `birthday`, `bonus`, `money`, `created_at`, `updated_at`, `password_reset_token`, `password_hash`, `password`, `auth_key`, `status`) VALUES
(1, 'admin', 'admin', 'adminovich', 'adminov', '+79833161472', 'admin@admin.com', 0, 1000, 1000, 0, 0, 'NULL', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', NULL, 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', 1),
(2, 'user', 'user', 'userovich', 'userov', '+154654646546', 'email@gang.nsk.ru', 0, 100, 100, 0, 0, '', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', NULL, 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', 1),
(3, 'operator', 'operator', 'operatorvich', 'operatorov', '+45485687878', 'ololo@ororo.com', 0, 150, 150, 0, 0, '', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', NULL, 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', 1),
(8, 'Misha', NULL, NULL, NULL, NULL, 'misha@ef.com', NULL, NULL, NULL, 1477912744, 1477912744, NULL, '$2y$13$fD93LkfBT96uGPTY.AaHjueDCOWnwoD2Y0SJMP5SvrcIEMum0a4nS', '123qwe', 'QPQ-uKdFBD6ypVyqY2t2WkB3pU_ymp2k', 1),
(9, 'Nikolay', NULL, NULL, NULL, NULL, 'nikola@nikola.com', NULL, NULL, NULL, 1477912880, 1477912880, NULL, '$2y$13$YjZsAeAo6/ly3BLZdtbup.YY3mDPRBgxcyUrR5MnyVjcJ8/mv24nS', '123qwe', 'ACli_wS8qCYb6USmzRZBt1FEjvQ8a32Q', 1),
(10, 'Evgeny', 'Knish', '', '', '6576667665', 'knishev@inbox.ru', NULL, NULL, NULL, 1477984798, 1479758006, '', '$2y$13$0hg5LDjslfBmxlC9Ko91heUP4PGxtp466SlmpxAaj/b8SlYCOpkAS', '198432qazxsw', 'wYdCMo_1moxQTIeUaiOUS8P6RMSAAF43', 1),
(11, 'Evgeny K', NULL, NULL, NULL, NULL, 'svambeer@mail.ru', NULL, NULL, NULL, 1481094095, 1481094095, NULL, '$2y$13$/0jC7mHzpZi1NaZo2FWciOMWX1wvI4IuSsQru1mHjZ1yf3e0E3ub.', '198432qazxsw', 'VfSXrv1XU6SLNPXNGe8dujmWJDKSwXXW', 1),
(12, 'Vasily', NULL, NULL, NULL, NULL, 'vasy@asd.com', NULL, NULL, NULL, 1481475291, 1481475291, NULL, '$2y$13$IlPj96QTIf02fCaygMeTz.jT0rkyw/dX8ivCpY.8aiak9hAx8em1S', '111111', 'OkBTp3IqXCBnrNty89eyIyAlcNA0OO3P', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--
-- Создание: Дек 01 2016 г., 00:13
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
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `booking_images`
--
ALTER TABLE `booking_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`,`country_id`);

--
-- Индексы таблицы `city_images`
--
ALTER TABLE `city_images`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `country_images`
--
ALTER TABLE `country_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_items`
--
ALTER TABLE `orders_items`
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
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `booking_images`
--
ALTER TABLE `booking_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `city_images`
--
ALTER TABLE `city_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `country_images`
--
ALTER TABLE `country_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `orders_items`
--
ALTER TABLE `orders_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

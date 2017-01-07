-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 07 2017 г., 10:18
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

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

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

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
(1, 1, 2, 0),
(2, 1, 2, 0),
(3, 1, 2, 0),
(4, 1, 2, 0),
(5, 1, 2, 0),
(6, 1, 2, 0),
(7, 1, 2, 0),
(8, 1, 2, 0),
(9, 1, 2, 0),
(12, 1, 2, 0),
(13, 1, 2, 0),
(14, 1, 2, 0),
(15, 1, 2, 0),
(16, 1, 2, 0),
(17, 1, 2, 0),
(18, 1, 2, 0),
(19, 1, 2, 0),
(20, 1, 2, 0),
(21, 1, 2, 0),
(22, 1, 2, 0),
(23, 1, 2, 0),
(24, 1, 2, 0),
(25, 1, 2, 0),
(26, 1, 2, 0),
(27, 1, 2, 0),
(28, 1, 2, 0),
(29, 1, 2, 0),
(30, 1, 2, 0),
(31, 1, 2, 0),
(32, 1, 2, 0),
(33, 1, 2, 0),
(34, 1, 2, 0),
(36, 12, 2, 1),
(37, 12, 2, 0),
(38, 12, 2, 1),
(39, 12, 2, 1),
(40, 1, 2, 0),
(41, 1, 2, 0),
(42, 1, 2, 0),
(43, 1, 2, 0),
(44, 1, 2, 0),
(45, 1, 2, 0),
(46, 1, 2, 0),
(47, 1, 2, 0),
(48, 1, 2, 0),
(49, 1, 2, 0),
(50, 1, 2, 0),
(51, 1, 2, 0),
(52, 1, 4, 0),
(53, 1, 3, 0),
(54, 1, 2, 0),
(55, 1, 3, 0),
(56, 1, 4, 0),
(57, 1, 3, 0),
(58, 1, 3, 0),
(59, 1, 3, 0),
(60, 1, 3, 0),
(61, 1, 3, 0),
(62, 1, 3, 0),
(63, 1, 3, 0),
(64, 1, 3, 0),
(65, 1, 3, 0),
(66, 1, 3, 0),
(67, 1, 4, 0),
(68, 1, 4, 0),
(69, 1, 4, 0),
(70, 1, 4, 0),
(71, 1, 4, 0),
(72, 1, 4, 0),
(73, 1, 4, 0),
(74, 1, 4, 0),
(75, 1, 4, 0),
(76, 1, 3, 0),
(77, 1, 4, 0),
(78, 1, 3, 1),
(79, 1, 2, 1),
(80, 1, 3, 0),
(81, 1, 3, 1),
(82, 1, 4, 1),
(83, 1, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `price_child` int(11) DEFAULT NULL,
  `child_before` int(11) DEFAULT NULL,
  `options` text NOT NULL,
  `images` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `coords_lat` text,
  `coords_lng` text,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking`
--

INSERT INTO `booking` (`id`, `city_id`, `name`, `description`, `type_id`, `price`, `price_child`, `child_before`, `options`, `images`, `status`, `bonus`, `coords_lat`, `coords_lng`, `discount`) VALUES
(1, 1, 'Stella Artois', '<p>телки, бухич, капитан морган</p>', 1, 100, NULL, NULL, 'телки, бухич, капитан морган', 0, 0, 10, '', '', 10),
(2, 1, 'Отель Сибирь', '<p>Комфортабельный отель эконом класса</p>', 3, 250, NULL, NULL, 'шлюхи шконка блэкджек расчет в баксах', 0, 1, 25, '55.02920280123825', '82.90462374687195', 10),
(3, 1, 'Отель Аврора', '<p>Баня ебальня</p>', 3, 250, NULL, NULL, 'шлюхи шконка ноу инклудед', 0, 1, 25, '55.0207773372204', '82.98860907554626', 10),
(4, 1, 'Аренда яхты на Андаманском море', '<p>Аренда яхты на Обском море - охуительно )</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; color: #444444; font-family: Arial, Helvetica, sans-serif;">Cпортивная и очень быстрая яхта, бывший олимпийский класс. В умеренный ветер Вас ожидает сухая и комфортная прогулка, а в сильный ветер - мокрое приключение для самых смелых.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; color: #444444; font-family: Arial, Helvetica, sans-serif;">Характеристики яхты "Бибигон": длина - 8 м, ширина - 2 м, осадка - 1,3 м.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; color: #444444; font-family: Arial, Helvetica, sans-serif;">Каюты нет. На борту имеются спасательные жилеты, а также яхтенные перчатки для желающих подёргать верёвки и порулить яхтой.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; color: #444444; font-family: Arial, Helvetica, sans-serif;">Капитан имеет яхтенные права второго класса. Экипаж яхты - участник и призёр парусных гонок.</p>', 1, 1500, 500, 6, 'нет', 0, 1, 10, '54.83035881387406', '82.95089721679688', 10),
(6, NULL, 'Профессиональный фотограф и гид людоед к вашим услугам', '<p><strong>Профессиональный фотограф и гид людоед к вашим услугам</strong></p>', 7, 22222, NULL, NULL, '112', 0, 1, 11, NULL, NULL, 10),
(7, NULL, 'Phi-Phi Islands', '<p style="color: #333333; font-family: \'Trebuchet MS\', Arial, Helvetica, sans-serif; font-size: 16px;" align="justify">&nbsp; Острова Пхи-Пхи расположены в 40 км на юго-восток от Пхукета. Пхи-Пхи - это небольшой архипелаг, состоящий из 6 островов:&nbsp;<strong>Phi-Phi Don</strong>&nbsp;(единственный обитаемый),<strong>Phi-Phi Ley</strong>&nbsp;c бухтой Майа (Maya bay), где снимался фильм "Пляж",&nbsp;<strong>Mosquito</strong>&nbsp;(в переводе "комар"),&nbsp;<strong>Bamboo</strong>&nbsp;(в переводе "бамбуковый") и две небольшие скалы&nbsp;<strong>Bida Nok</strong>&nbsp;и&nbsp;<strong>Bida Nai</strong>.</p>\r\n<p style="color: #333333; font-family: \'Trebuchet MS\', Arial, Helvetica, sans-serif; font-size: 16px;" align="justify">&nbsp;&nbsp;&nbsp;Во время однодневной экскурсии вы посетите Phi-Phi Ley, где находятс</p>', 4, 1500, NULL, NULL, 'russ guide', 0, 1, 0, NULL, NULL, 0),
(9, 4, 'Phi-Phi Islands', '<p><span style="color: #2c2c2c; font-family: Georgia, \'Times New Roman\', serif; font-size: 16px; text-align: justify; text-indent: 16px; background-color: #fcfcfc;">Что за выходные без покупок? Подарки для близких, друзей и коллег, что-нибудь, что можно повесить на стену или поставить на каминную полку. Готовы</span><span style="background-color: #fcfcfc; color: #2c2c2c; font-family: Georgia, \'Times New Roman\', serif; font-size: 16px; text-align: justify; text-indent: 16px;">Что за выходные без покупок? Подарки для близких, друзей и коллег, что-нибудь, что можно повесить на стену или поставить на каминную полку. Готовы</span><span style="background-color: #fcfcfc; color: #2c2c2c; font-family: Georgia, \'Times New Roman\', serif; font-size: 16px; text-align: justify; text-indent: 16px;">Что за выходные без покупок? Подарки для близких, друзей и коллег, что-нибудь, что можно повесить на стену или поставить на каминную полку. Готовы</span><span style="background-color: #fcfcfc; color: #2c2c2c; font-family: Georgia, \'Times New Roman\', serif; font-size: 16px; text-align: justify; text-indent: 16px;">Что за выходные без покупок? Подарки для близких, друзей и коллег, что-нибудь, что можно повесить на стену или поставить на каминную полку. Готовы</span></p>', 5, 1200, NULL, NULL, '1', 0, 1, 1, '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `booking_images`
--

CREATE TABLE `booking_images` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `path` text,
  `imageFile` blob,
  `main` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `booking_images`
--

INSERT INTO `booking_images` (`id`, `booking_id`, `path`, `imageFile`, `main`, `status`) VALUES
(18, 3, 'uploads/3.2868652.jpg', NULL, 0, 1),
(17, 2, 'uploads/2.66061402.jpg', NULL, 1, 1),
(15, 1, 'uploads/1.1092529.jpg', NULL, NULL, 1),
(16, 2, 'uploads/2.77352906.jpg', NULL, 0, 1),
(14, 1, 'uploads/1.54605103.jpg', NULL, NULL, 1),
(13, 1, 'uploads/1.70263672.jpg', NULL, NULL, 1),
(19, 3, 'uploads/3.47485352.jpg', NULL, 0, 1),
(20, 3, 'uploads/3.16644287.jpg', NULL, 1, 1),
(21, 4, 'uploads/4.1248168.jpg', NULL, 1, 1),
(22, 4, 'uploads/4.10421753.jpg', NULL, 0, 0),
(23, 4, 'uploads/4.857543.jpg', NULL, 0, 1),
(27, 4, 'uploads/4.83676148.jpg', NULL, 0, 0),
(24, 4, 'uploads/4.76095581.jpg', NULL, 0, 0),
(25, 4, 'uploads/4.22760009.jpg', NULL, 0, 0),
(26, 1, 'uploads/1.83585639.jpg', NULL, NULL, 0),
(28, 8, 'uploads/8.43609120.jpg', NULL, NULL, 1),
(29, 8, 'uploads/8.91267222.jpg', NULL, NULL, 1),
(30, 4, 'uploads/4.62414551.jpg', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

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
(7, 2, 'Chiang Mai', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>', 1),
(8, 4, 'Buenos-Aires', 'Buenos-Aires is the capital of Argentina and the most popular touristic place', 'Buenos-Aires is the capital of Argentina and the most popular touristic place', 1),
(9, 1, 'Новоуральск', 'Новоуральск', 'Новоуральск', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `city_images`
--

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
(23, 9, 'uploads/9.23596191.jpg', 1),
(24, 1, 'uploads/1.7406616.jpg', 1),
(25, 1, 'uploads/1.82763672.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `codes`
--

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

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `full_description` text NOT NULL,
  `options` text NOT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `language` int(1) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`, `description`, `full_description`, `options`, `currency`, `language`, `locale`, `status`) VALUES
(1, 'Russia', '<p>Itsa full of wonderfull nature</p>', '<p>Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature</p>', 'Itsa full of wonderfull nature Itsa full of wonderfull nature Itsa full of wonderfull nature ', 'RUR', 1, 'ru', 1),
(2, 'Thailand', '<p><strong style="color: #252525; font-family: sans-serif;">Thailand</strong><span style="color: #252525; font-family: sans-serif;">&nbsp;(</span><span class="nowrap" style="white-space: nowrap; color: #252525; font-family: sans-serif;"><span class="IPA nopopups"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for English" href="https://en.wikipedia.org/wiki/Help:IPA_for_English">/<span style="border-bottom: 1px dotted;"><span title="/ˈ/ primary stress follows">ˈ</span><span title="\'t\' in \'tie\'">t</span><span title="/aɪ/ long \'i\' in \'tide\'">aɪ</span><span title="\'l\' in \'lie\'">l</span><span title="/&aelig;/ short \'a\' in \'bad\'">&aelig;</span><span title="\'n\' in \'no\'">n</span><span title="\'d\' in \'dye\'">d</span></span>/</a></span></span><span style="color: #252525; font-family: sans-serif;">&nbsp;</span><span style="color: #252525; font-family: sans-serif;" title="English pronunciation respelling"><a style="text-decoration: none; color: #0b0080; background: none;" title="Help:Pronunciation respelling key" href="https://en.wikipedia.org/wiki/Help:Pronunciation_respelling_key"><em><strong><span class="smallcaps"><span style="font-variant-numeric: normal; font-variant-caps: small-caps; text-transform: lowercase;">ty</span></span></strong>-land</em></a></span><span style="color: #252525; font-family: sans-serif;">&nbsp;or&nbsp;</span><span class="nowrap" style="white-space: nowrap; color: #252525; font-family: sans-serif;"><span class="IPA nopopups"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for English" href="https://en.wikipedia.org/wiki/Help:IPA_for_English">/<span style="border-bottom: 1px dotted;"><span title="/ˈ/ primary stress follows">ˈ</span><span title="\'t\' in \'tie\'">t</span><span title="/aɪ/ long \'i\' in \'tide\'">aɪ</span><span title="\'l\' in \'lie\'">l</span><span title="/ə/ \'a\' in \'about\'">ə</span><span title="\'n\' in \'no\'">n</span><span title="\'d\' in \'dye\'">d</span></span>/</a></span></span><span style="color: #252525; font-family: sans-serif;">&nbsp;</span><span style="color: #252525; font-family: sans-serif;" title="English pronunciation respelling"><a style="text-decoration: none; color: #0b0080; background: none;" title="Help:Pronunciation respelling key" href="https://en.wikipedia.org/wiki/Help:Pronunciation_respelling_key"><em><strong><span class="smallcaps"><span style="font-variant-numeric: normal; font-variant-caps: small-caps; text-transform: lowercase;">ty</span></span></strong>-lənd</em></a></span><span style="color: #252525; font-family: sans-serif;">;</span><sup id="cite_ref-13" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: #252525; font-family: sans-serif;"><a style="text-decoration: none; color: #0b0080; background: none;" href="https://en.wikipedia.org/wiki/Thailand#cite_note-13">[13]</a></sup><span style="color: #252525; font-family: sans-serif;">&nbsp;</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Thai language" href="https://en.wikipedia.org/wiki/Thai_language">Thai</a><span style="color: #252525; font-family: sans-serif;">:&nbsp;</span><span lang="th" style="color: #252525; font-family: sans-serif;"><a class="extiw" style="text-decoration: none; color: #663366; background: none;" title="wikt:ประเทศไทย" href="https://en.wiktionary.org/wiki/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2">ประเทศไทย</a></span><span style="color: #252525; font-family: sans-serif;">,&nbsp;</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Royal Thai General System of Transcription" href="https://en.wikipedia.org/wiki/Royal_Thai_General_System_of_Transcription"><span class="smallcaps" style="font-variant-numeric: normal; font-variant-caps: small-caps;">rtgs</span></a><span style="color: #252525; font-family: sans-serif;">:&nbsp;</span><span class="Unicode" style="color: #252525; font-family: sans-serif;" title="Thai transliteration"><em>Prathet Thai</em></span><span style="color: #252525; font-family: sans-serif;">,&nbsp;</span><small style="font-size: 11.9px; color: #252525; font-family: sans-serif;">pronounced</small><span style="color: #252525; font-family: sans-serif;">&nbsp;</span><span class="IPA" style="color: #252525; font-family: sans-serif;" title="Representation in the International Phonetic Alphabet (IPA)"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for Thai and Lao" href="https://en.wikipedia.org/wiki/Help:IPA_for_Thai_and_Lao">[pra.tʰ&ecirc;ːt tʰaj]</a></span><small class="nowrap metadata" style="font-size: 11.9px; white-space: nowrap; color: #252525; font-family: sans-serif;">&nbsp;(<a style="text-decoration: none; color: #0b0080; background: none;" title="File:Th-Thailand.ogg" href="https://en.wikipedia.org/wiki/File:Th-Thailand.ogg"><img style="border: none; vertical-align: middle; margin: 0px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/13px-Speaker_Icon.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/20px-Speaker_Icon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/26px-Speaker_Icon.svg.png 2x" alt="" width="13" height="13" data-file-width="500" data-file-height="500" /></a>&nbsp;<a class="internal" style="text-decoration: none; color: #0b0080; background: none;" title="Th-Thailand.ogg" href="https://upload.wikimedia.org/wikipedia/commons/0/06/Th-Thailand.ogg">listen</a>)</small><span style="color: #252525; font-family: sans-serif;">), officially the&nbsp;</span><strong style="color: #252525; font-family: sans-serif;">Kingdom of Thailand</strong><span style="color: #252525; font-family: sans-serif;">&nbsp;(</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Thai language" href="https://en.wikipedia.org/wiki/Thai_language">Thai</a><span style="color: #252525; font-family: sans-serif;">:&nbsp;</span><span lang="th" style="color: #252525; font-family: sans-serif;"><a class="extiw" style="text-decoration: none; color: #663366; background: none;" title="wikt:ราชอาณาจักรไทย" href="https://en.wiktionary.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%AD%E0%B8%B2%E0%B8%93%E0%B8%B2%E0%B8%88%E0%B8%B1%E0%B8%81%E0%B8%A3%E0%B9%84%E0%B8%97%E0%B8%A2">ราชอาณาจักรไทย</a></span><span style="color: #252525; font-family: sans-serif;">,&nbsp;</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Royal Thai General System of Transcription" href="https://en.wikipedia.org/wiki/Royal_Thai_General_System_of_Transcription"><span class="smallcaps" style="font-variant-numeric: normal; font-variant-caps: small-caps;">rtgs</span></a><span style="color: #252525; font-family: sans-serif;">:&nbsp;</span><span class="Unicode" style="color: #252525; font-family: sans-serif;" title="Thai transliteration"><em>Ratcha-anachak Thai</em></span><span style="color: #252525; font-family: sans-serif;">&nbsp;&nbsp;</span><span class="IPA" style="color: #252525; font-family: sans-serif;" title="Representation in the International Phonetic Alphabet (IPA)"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for Thai and Lao" href="https://en.wikipedia.org/wiki/Help:IPA_for_Thai_and_Lao">[r&acirc;ːt.t͡ɕʰa.ʔaː.naː.t͡ɕ&agrave;k tʰaj]</a></span><small class="nowrap metadata" style="font-size: 11.9px; white-space: nowrap; color: #252525; font-family: sans-serif;">&nbsp;(<a style="text-decoration: none; color: #0b0080; background: none;" title="File:Th-pratheidthai raachaanaajakthai.ogg" href="https://en.wikipedia.org/wiki/File:Th-pratheidthai_raachaanaajakthai.ogg"><img style="border: none; vertical-align: middle; margin: 0px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/13px-Speaker_Icon.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/20px-Speaker_Icon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/26px-Speaker_Icon.svg.png 2x" alt="" width="13" height="13" data-file-width="500" data-file-height="500" /></a>&nbsp;<a class="internal" style="text-decoration: none; color: #0b0080; background: none;" title="Th-pratheidthai raachaanaajakthai.ogg" href="https://upload.wikimedia.org/wikipedia/commons/7/77/Th-pratheidthai_raachaanaajakthai.ogg">listen</a>)</small><span style="color: #252525; font-family: sans-serif;">), formerly known as&nbsp;</span><strong style="color: #252525; font-family: sans-serif;">Siam</strong><span style="color: #252525; font-family: sans-serif;">&nbsp;(</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Thai language" href="https://en.wikipedia.org/wiki/Thai_language">Thai</a><span style="color: #252525; font-family: sans-serif;">:&nbsp;</span><span lang="th" style="color: #252525; font-family: sans-serif;"><a class="extiw" style="text-decoration: none; color: #663366; background: none;" title="wikt:สยาม" href="https://en.wiktionary.org/wiki/%E0%B8%AA%E0%B8%A2%E0%B8%B2%E0%B8%A1">สยาม</a></span><span style="color: #252525; font-family: sans-serif;">,&nbsp;</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Royal Thai General System of Transcription" href="https://en.wikipedia.org/wiki/Royal_Thai_General_System_of_Transcription"><span class="smallcaps" style="font-variant-numeric: normal; font-variant-caps: small-caps;">rtgs</span></a><span style="color: #252525; font-family: sans-serif;">:&nbsp;</span><span class="Unicode" style="color: #252525; font-family: sans-serif;" title="Thai transliteration"><em>Sayam</em></span><span style="color: #252525; font-family: sans-serif;">&nbsp;&nbsp;</span><span class="IPA" style="color: #252525; font-family: sans-serif;" title="Representation in the International Phonetic Alphabet (IPA)"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for Thai and Lao" href="https://en.wikipedia.org/wiki/Help:IPA_for_Thai_and_Lao">[sa.jǎːm]</a></span><span style="color: #252525; font-family: sans-serif;">), is a country at the centre of the&nbsp;</span><a class="mw-redirect" style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Indochinese peninsula" href="https://en.wikipedia.org/wiki/Indochinese_peninsula">Indochinese peninsula</a><span style="color: #252525; font-family: sans-serif;">&nbsp;in&nbsp;</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Southeast Asia" href="https://en.wikipedia.org/wiki/Southeast_Asia">Southeast Asia</a><span style="color: #252525; font-family: sans-serif;">. With a total area of approximately 513,000&nbsp;km</span><sup style="line-height: 1; font-size: 11.2px; color: #252525; font-family: sans-serif;">2</sup><span style="color: #252525; font-family: sans-serif;">&nbsp;(198,000&nbsp;sq&nbsp;mi), Thailand is the world\'s&nbsp;</span><a class="mw-redirect" style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="List of countries and dependencies by area" href="https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_area">51st-largest country</a><span style="color: #252525; font-family: sans-serif;">. It is the&nbsp;</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="List of countries and dependencies by population" href="https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_population">20th-most-populous country</a><span style="color: #252525; font-family: sans-serif;">&nbsp;in the world, with around 66 million people. The capital and largest city is&nbsp;</span><a style="text-decoration: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;" title="Bangkok" href="https://en.wikipedia.org/wiki/Bangkok">Bangkok</a><span style="color: #252525; font-family: sans-serif;">.</span></p>', '<p style="margin: 0.5em 0px; line-height: inherit; color: #252525; font-family: sans-serif;"><strong>Thailand</strong>&nbsp;(<span class="nowrap" style="white-space: nowrap;"><span class="IPA nopopups"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for English" href="https://en.wikipedia.org/wiki/Help:IPA_for_English">/<span style="border-bottom: 1px dotted;"><span title="/ˈ/ primary stress follows">ˈ</span><span title="\'t\' in \'tie\'">t</span><span title="/aɪ/ long \'i\' in \'tide\'">aɪ</span><span title="\'l\' in \'lie\'">l</span><span title="/&aelig;/ short \'a\' in \'bad\'">&aelig;</span><span title="\'n\' in \'no\'">n</span><span title="\'d\' in \'dye\'">d</span></span>/</a></span></span>&nbsp;<span title="English pronunciation respelling"><a style="text-decoration: none; color: #0b0080; background: none;" title="Help:Pronunciation respelling key" href="https://en.wikipedia.org/wiki/Help:Pronunciation_respelling_key"><em><strong><span class="smallcaps"><span style="font-variant-numeric: normal; font-variant-caps: small-caps; text-transform: lowercase;">ty</span></span></strong>-land</em></a></span>&nbsp;or&nbsp;<span class="nowrap" style="white-space: nowrap;"><span class="IPA nopopups"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for English" href="https://en.wikipedia.org/wiki/Help:IPA_for_English">/<span style="border-bottom: 1px dotted;"><span title="/ˈ/ primary stress follows">ˈ</span><span title="\'t\' in \'tie\'">t</span><span title="/aɪ/ long \'i\' in \'tide\'">aɪ</span><span title="\'l\' in \'lie\'">l</span><span title="/ə/ \'a\' in \'about\'">ə</span><span title="\'n\' in \'no\'">n</span><span title="\'d\' in \'dye\'">d</span></span>/</a></span></span>&nbsp;<span title="English pronunciation respelling"><a style="text-decoration: none; color: #0b0080; background: none;" title="Help:Pronunciation respelling key" href="https://en.wikipedia.org/wiki/Help:Pronunciation_respelling_key"><em><strong><span class="smallcaps"><span style="font-variant-numeric: normal; font-variant-caps: small-caps; text-transform: lowercase;">ty</span></span></strong>-lənd</em></a></span>;<sup id="cite_ref-13" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a style="text-decoration: none; color: #0b0080; background: none;" href="https://en.wikipedia.org/wiki/Thailand#cite_note-13">[13]</a></sup>&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Thai language" href="https://en.wikipedia.org/wiki/Thai_language">Thai</a>:&nbsp;<span lang="th"><a class="extiw" style="text-decoration: none; color: #663366; background: none;" title="wikt:ประเทศไทย" href="https://en.wiktionary.org/wiki/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B9%84%E0%B8%97%E0%B8%A2">ประเทศไทย</a></span>,&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Royal Thai General System of Transcription" href="https://en.wikipedia.org/wiki/Royal_Thai_General_System_of_Transcription"><span class="smallcaps" style="font-variant-numeric: normal; font-variant-caps: small-caps;">rtgs</span></a>:&nbsp;<span class="Unicode" title="Thai transliteration"><em>Prathet Thai</em></span>,&nbsp;<small style="font-size: 11.9px;">pronounced</small>&nbsp;<span class="IPA" title="Representation in the International Phonetic Alphabet (IPA)"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for Thai and Lao" href="https://en.wikipedia.org/wiki/Help:IPA_for_Thai_and_Lao">[pra.tʰ&ecirc;ːt tʰaj]</a></span><small class="nowrap metadata" style="font-size: 11.9px; white-space: nowrap;">&nbsp;(<a style="text-decoration: none; color: #0b0080; background: none;" title="File:Th-Thailand.ogg" href="https://en.wikipedia.org/wiki/File:Th-Thailand.ogg"><img style="border: none; vertical-align: middle; margin: 0px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/13px-Speaker_Icon.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/20px-Speaker_Icon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/26px-Speaker_Icon.svg.png 2x" alt="" width="13" height="13" data-file-width="500" data-file-height="500" /></a>&nbsp;<a class="internal" style="text-decoration: none; color: #0b0080; background: none;" title="Th-Thailand.ogg" href="https://upload.wikimedia.org/wikipedia/commons/0/06/Th-Thailand.ogg">listen</a>)</small>), officially the&nbsp;<strong>Kingdom of Thailand</strong>&nbsp;(<a style="text-decoration: none; color: #0b0080; background: none;" title="Thai language" href="https://en.wikipedia.org/wiki/Thai_language">Thai</a>:&nbsp;<span lang="th"><a class="extiw" style="text-decoration: none; color: #663366; background: none;" title="wikt:ราชอาณาจักรไทย" href="https://en.wiktionary.org/wiki/%E0%B8%A3%E0%B8%B2%E0%B8%8A%E0%B8%AD%E0%B8%B2%E0%B8%93%E0%B8%B2%E0%B8%88%E0%B8%B1%E0%B8%81%E0%B8%A3%E0%B9%84%E0%B8%97%E0%B8%A2">ราชอาณาจักรไทย</a></span>,&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Royal Thai General System of Transcription" href="https://en.wikipedia.org/wiki/Royal_Thai_General_System_of_Transcription"><span class="smallcaps" style="font-variant-numeric: normal; font-variant-caps: small-caps;">rtgs</span></a>:&nbsp;<span class="Unicode" title="Thai transliteration"><em>Ratcha-anachak Thai</em></span>&nbsp;&nbsp;<span class="IPA" title="Representation in the International Phonetic Alphabet (IPA)"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for Thai and Lao" href="https://en.wikipedia.org/wiki/Help:IPA_for_Thai_and_Lao">[r&acirc;ːt.t͡ɕʰa.ʔaː.naː.t͡ɕ&agrave;k tʰaj]</a></span><small class="nowrap metadata" style="font-size: 11.9px; white-space: nowrap;">&nbsp;(<a style="text-decoration: none; color: #0b0080; background: none;" title="File:Th-pratheidthai raachaanaajakthai.ogg" href="https://en.wikipedia.org/wiki/File:Th-pratheidthai_raachaanaajakthai.ogg"><img style="border: none; vertical-align: middle; margin: 0px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/13px-Speaker_Icon.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/20px-Speaker_Icon.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/21/Speaker_Icon.svg/26px-Speaker_Icon.svg.png 2x" alt="" width="13" height="13" data-file-width="500" data-file-height="500" /></a>&nbsp;<a class="internal" style="text-decoration: none; color: #0b0080; background: none;" title="Th-pratheidthai raachaanaajakthai.ogg" href="https://upload.wikimedia.org/wikipedia/commons/7/77/Th-pratheidthai_raachaanaajakthai.ogg">listen</a>)</small>), formerly known as&nbsp;<strong>Siam</strong>&nbsp;(<a style="text-decoration: none; color: #0b0080; background: none;" title="Thai language" href="https://en.wikipedia.org/wiki/Thai_language">Thai</a>:&nbsp;<span lang="th"><a class="extiw" style="text-decoration: none; color: #663366; background: none;" title="wikt:สยาม" href="https://en.wiktionary.org/wiki/%E0%B8%AA%E0%B8%A2%E0%B8%B2%E0%B8%A1">สยาม</a></span>,&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Royal Thai General System of Transcription" href="https://en.wikipedia.org/wiki/Royal_Thai_General_System_of_Transcription"><span class="smallcaps" style="font-variant-numeric: normal; font-variant-caps: small-caps;">rtgs</span></a>:&nbsp;<span class="Unicode" title="Thai transliteration"><em>Sayam</em></span>&nbsp;&nbsp;<span class="IPA" title="Representation in the International Phonetic Alphabet (IPA)"><a style="text-decoration: none !important; color: #0b0080; background: none;" title="Help:IPA for Thai and Lao" href="https://en.wikipedia.org/wiki/Help:IPA_for_Thai_and_Lao">[sa.jǎːm]</a></span>), is a country at the centre of the&nbsp;<a class="mw-redirect" style="text-decoration: none; color: #0b0080; background: none;" title="Indochinese peninsula" href="https://en.wikipedia.org/wiki/Indochinese_peninsula">Indochinese peninsula</a>&nbsp;in&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Southeast Asia" href="https://en.wikipedia.org/wiki/Southeast_Asia">Southeast Asia</a>. With a total area of approximately 513,000&nbsp;km<sup style="line-height: 1; font-size: 11.2px;">2</sup>&nbsp;(198,000&nbsp;sq&nbsp;mi), Thailand is the world\'s&nbsp;<a class="mw-redirect" style="text-decoration: none; color: #0b0080; background: none;" title="List of countries and dependencies by area" href="https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_area">51st-largest country</a>. It is the&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="List of countries and dependencies by population" href="https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_population">20th-most-populous country</a>&nbsp;in the world, with around 66 million people. The capital and largest city is&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Bangkok" href="https://en.wikipedia.org/wiki/Bangkok">Bangkok</a>.</p>\r\n<p style="margin: 0.5em 0px; line-height: inherit; color: #252525; font-family: sans-serif;">Thailand is a&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Constitutional monarchy" href="https://en.wikipedia.org/wiki/Constitutional_monarchy">constitutional monarchy</a>&nbsp;and has switched between&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Parliamentary system" href="https://en.wikipedia.org/wiki/Parliamentary_system">parliamentary democracy</a>&nbsp;and&nbsp;<a class="mw-redirect" style="text-decoration: none; color: #0b0080; background: none;" title="Military junta" href="https://en.wikipedia.org/wiki/Military_junta">military junta</a>&nbsp;for decades, the latest coup being in&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="2014 Thai coup d\'&eacute;tat" href="https://en.wikipedia.org/wiki/2014_Thai_coup_d%27%C3%A9tat">May 2014</a>&nbsp;by the&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="National Council for Peace and Order" href="https://en.wikipedia.org/wiki/National_Council_for_Peace_and_Order">National Council for Peace and Order</a>. Its capital and most populous city is&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Bangkok" href="https://en.wikipedia.org/wiki/Bangkok">Bangkok</a>. It is bordered to the north by&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Myanmar" href="https://en.wikipedia.org/wiki/Myanmar">Myanmar</a>&nbsp;and&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Laos" href="https://en.wikipedia.org/wiki/Laos">Laos</a>, to the east by Laos and&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Cambodia" href="https://en.wikipedia.org/wiki/Cambodia">Cambodia</a>, to the south by the&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Gulf of Thailand" href="https://en.wikipedia.org/wiki/Gulf_of_Thailand">Gulf of Thailand</a>&nbsp;and&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Malaysia" href="https://en.wikipedia.org/wiki/Malaysia">Malaysia</a>, and to the west by the&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Andaman Sea" href="https://en.wikipedia.org/wiki/Andaman_Sea">Andaman Sea</a>&nbsp;and the southern extremity of Myanmar. Its maritime boundaries include&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Vietnam" href="https://en.wikipedia.org/wiki/Vietnam">Vietnam</a>&nbsp;in the Gulf of Thailand to the southeast, and&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Indonesia" href="https://en.wikipedia.org/wiki/Indonesia">Indonesia</a>&nbsp;and&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="India" href="https://en.wikipedia.org/wiki/India">India</a>&nbsp;on the Andaman Sea to the southwest.</p>\r\n<p style="margin: 0.5em 0px; line-height: inherit; color: #252525; font-family: sans-serif;">The&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Economy of Thailand" href="https://en.wikipedia.org/wiki/Economy_of_Thailand">Thai economy</a>&nbsp;is the world\'s&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="List of countries by GDP (nominal)" href="https://en.wikipedia.org/wiki/List_of_countries_by_GDP_(nominal)">20th largest</a>&nbsp;by nominal GDP and the&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="List of countries by GDP (PPP)" href="https://en.wikipedia.org/wiki/List_of_countries_by_GDP_(PPP)">27th largest</a>&nbsp;by GDP at PPP. It became a&nbsp;<a class="mw-redirect" style="text-decoration: none; color: #0b0080; background: none;" title="Newly industrialised country" href="https://en.wikipedia.org/wiki/Newly_industrialised_country">newly industrialised country</a>&nbsp;and a major exporter in the 1990s. Manufacturing, agriculture, and&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Tourism in Thailand" href="https://en.wikipedia.org/wiki/Tourism_in_Thailand">tourism</a>&nbsp;are leading sectors of the economy.<sup id="cite_ref-middleIncomeCountry_14-0" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a style="text-decoration: none; color: #0b0080; background: none;" href="https://en.wikipedia.org/wiki/Thailand#cite_note-middleIncomeCountry-14">[14]</a></sup><sup id="cite_ref-GuardianThailandOverview_15-0" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a style="text-decoration: none; color: #0b0080; background: none;" href="https://en.wikipedia.org/wiki/Thailand#cite_note-GuardianThailandOverview-15">[15]</a></sup>&nbsp;It is considered a&nbsp;<a style="text-decoration: none; color: #0b0080; background: none;" title="Middle power" href="https://en.wikipedia.org/wiki/Middle_power">middle power</a>&nbsp;in the region and around the world.<sup id="cite_ref-16" class="reference" style="line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;"><a style="text-decoration: none; color: #0b0080; background: none;" href="https://en.wikipedia.org/wiki/Thailand#cite_note-16">[16]</a></sup></p>', 'It is very good It is very good It is very good It is very good It is very good ', 'BAT', 1, 'th', 1),
(3, 'Vietnam', 'м остров Джеймса Бонда, такое название получил остров Ко Тапу, что в переводе будет (Гвоздь), и остров Ко Пин Кан (Ko Ping Kan) на котором и проходили съёмки фильма "Человек с золотым пистолетом" в 1974 году. Тут у вас будет около 40 минут свободного времени, ', 'Далее вы остановитесь на жемчужине этой экскурсии сам остров Джеймса Бонда, такое название получил остров Ко Тапу, что в переводе будет (Гвоздь), и остров Ко Пин Кан (Ko Ping Kan) на котором и проходили съёмки фильма "Человек с золотым пистолетом" в 1974 году. Тут у вас будет около 40 минут свободного времени, чтобы сделать красивые фотографии, купить сувениры и осмотреть знаменитый остров со всех сторон.Далее вы остановитесь на жемчужине этой экскурсии сам остров Джеймса Бонда, такое название получил остров Ко Тапу, что в переводе будет (Гвоздь), и остров Ко Пин Кан (Ko Ping Kan) на котором и проходили съёмки фильма "Человек с золотым пистолетом" в 1974 году. Тут у вас будет около 40 минут свободного времени, чтобы сделать красивые фотографии, купить сувениры и осмотреть знаменитый остров со всех сторон.Далее вы остановитесь на жемчужине этой экскурсии сам остров Джеймса Бонда, такое название получил остров Ко Тапу, что в переводе будет (Гвоздь), и остров Ко Пин Кан (Ko Ping Kan) на котором и проходили съёмки фильма "Человек с золотым пистолетом" в 1974 году. Тут у вас будет около 40 минут свободного времени, чтобы сделать красивые фотографии, купить сувениры и осмотреть знаменитый остров со всех сторон.', 'Hi', NULL, NULL, 'vt', 1),
(4, 'Argentina', 'Argentina', 'very dangerous country', 'sea flat beach sun and more fun two chiken wings please', NULL, NULL, 'es', 1),
(5, 'Korea', '<p><span style="color: #252525; font-family: sans-serif;">Респу́блика Коре́я (кор. 대한민국?, 大韓民國? Тэханмингук), ранее было принято написание Коре́йская Респу́блика[4], официальное сокращённое название Коре́я (кор. 한국?, 韓國? Хангук или кор. 대한?, 大韓? Тэхан)[5] &mdash;государство в Восточной Азии, расположенное на Корейском полуострове. Столица &mdash; Сеул. Неофициальное название страны, широко употребляемое в СМИ, &mdash; Ю́жная Коре́я.</span></p>', '<p><span style="color: #252525; font-family: sans-serif;">Респу́блика Коре́я (кор. 대한민국?, 大韓民國? Тэханмингук), ранее было принято написание Коре́йская Респу́блика[4], официальное сокращённое название Коре́я (кор. 한국?, 韓國? Хангук или кор. 대한?, 大韓? Тэхан)[5] &mdash;государство в Восточной Азии, расположенное на Корейском полуострове. Столица &mdash; Сеул. Неофициальное название страны, широко употребляемое в СМИ, &mdash; Ю́жная Коре́я.&nbsp;Респу́блика Коре́я (кор. 대한민국?, 大韓民國? Тэханмингук), ранее было принято написание Коре́йская Респу́блика[4], официальное сокращённое название Коре́я (кор. 한국?, 韓國? Хангук или кор. 대한?, 大韓? Тэхан)[5] &mdash;государство в Восточной Азии, расположенное на Корейском полуострове. Столица &mdash; Сеул. Неофициальное название страны, широко употребляемое в СМИ, &mdash; Ю́жная Коре́я.Респу́блика Коре́я (кор. 대한민국?, 大韓民國? Тэханмингук), ранее было принято написание Коре́йская Респу́блика[4], официальное сокращённое название Коре́я (кор. 한국?, 韓國? Хангук или кор. 대한?, 大韓? Тэхан)[5] &mdash;государство в Восточной Азии, расположенное на Корейском полуострове. Столица &mdash; Сеул. Неофициальное название страны, широко употребляемое в СМИ, &mdash; Ю́жная Коре́я.</span></p>', '2', 'WON', 1, 'kr', 1),
(6, 'USA', '<p>USA the pendostan</p>', '<p>USA the pendostan</p>', 'no options', 'USD', 1, 'en', 1),
(7, 'Japan', '<p>Sjsjjddddjdhdjdjkssj djdjdddjdhx xbsakpssksjs djddjnxxpepwuuwywwbsdjdjd</p>', '<p style="text-align: left;">Sjsjddjdjj havwhksxjhdltpvvkdje Jessica a cnmxxnzbkalskhh hshakjxpprieuwehhzjz</p>', '1', 'Yen', 1, 'jp', 1),
(8, 'Китай', '<p>Китай</p>', '<p>Китай</p>', 'хунвейбин', 'YUN', 1, 'cn', 1),
(9, 'Черногория', '<p>Черногория</p>', '<p>Черногория</p>', 'cnhfyf', 'EUR', 1, 'hr', 1),
(10, 'Франция', '<p>Франция</p>', '<p>Франция</p>', 'starna', 'EUR', 1, 'fr', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `country_flags`
--

CREATE TABLE `country_flags` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `path` text,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country_flags`
--

INSERT INTO `country_flags` (`id`, `country_id`, `path`, `status`) VALUES
(21, 2, 'uploads/2.216674.png', 1),
(22, 1, 'uploads/1.53698731.png', 1),
(23, 5, 'uploads/5.56765747.png', 1),
(24, 6, 'uploads/6.25857544.png', 1),
(25, 7, 'uploads/7.7861328.png', 1),
(26, 8, 'uploads/8.91809082.png', 1),
(27, 10, 'uploads/10.61982880.png', 1),
(28, 9, 'uploads/9.57014089.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `country_images`
--

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
(17, 5, 'uploads/5.32897949.jpg', 1),
(18, 6, 'uploads/6.85186768.jpg', 1),
(19, 6, 'uploads/6.33813476.jpg', 1),
(20, 6, 'uploads/6.68353272.jpg', 1),
(21, 6, 'uploads/6.91595459.jpg', 1),
(22, 6, 'uploads/6.4458618.jpg', 1),
(23, 6, 'uploads/6.94964600.jpg', 1),
(24, 8, 'uploads/8.20364380.jpg', 1),
(25, 8, 'uploads/8.88613892.jpg', 1),
(26, 8, 'uploads/8.71755982.jpg', 1),
(27, 8, 'uploads/8.83145142.jpg', 1),
(28, 10, 'uploads/10.48781405.jpg', 1),
(29, 10, 'uploads/10.48554299.jpg', 1),
(30, 10, 'uploads/10.59066895.jpg', 1),
(31, 9, 'uploads/9.1024437.jpg', 1),
(32, 9, 'uploads/9.85261509.jpg', 1),
(33, 9, 'uploads/9.63445292.jpg', 1),
(34, 9, 'uploads/9.75597088.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `description` text,
  `rate` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `booking_id`, `description`, `rate`, `date`, `status`) VALUES
(1, 1, 4, 'Отличная хрень повеселились от души', 9, '2016-12-13 05:05:00', 1),
(2, 1, 4, 'Очень класное место всем советую епте', 5, '2016-12-21 05:30:00', 1),
(3, 1, 4, 'Еще какой то комментарий какого-то пользователя на 10 страниц Еще какой то комментарий какого-то пользователя на 10 страниц Еще какой то комментарий какого-то пользователя на 10 страниц Еще какой то комментарий какого-то пользователя на 10 страниц Еще какой то комментарий какого-то пользователя на 10 страниц Еще какой то комментарий какого-то пользователя на 10 страниц', 8, '2016-12-07 14:50:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

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
-- Структура таблицы `static_pages`
--

CREATE TABLE `static_pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `static_pages`
--

INSERT INTO `static_pages` (`id`, `name`, `content`, `status`) VALUES
(1, 'О нас политика безопасности', '<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><u><strong>О НАС</strong></u></span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;&ndash; рекламно-информа<wbr />ционная и сервисно-маркети<wbr />нговая платформа, предоставляющая возможность бронирования экскурсионных пакетов, туристических пакетов, туристических гидов и переводчиков, вечерних шоу, поездок в развлекательные центры, билеты в тематические парки, парки аттракционов и музеи; активных туров, а так же других продуктов и услуг, которые позволяют провести незабываемый отдых и получить массу положительных эмоций непосредственно от поставщиков и организаторов таких услуг.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Наша компания понимает, что размещая информацию на нашем Веб-сайте/сайтах в режиме онлайн, Вы оказываете нам доверие. Мы это очень ценим и поэтому обеспечиваем высокую степень защиты и конфиденциальнос<wbr />ти Ваших персональных данных.&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;прилагает все усилия для соблюдения правил, обуславливающих защиту данных наших пользователей. При обработке, сборе и передаче личных данных пользователей мы непременно следуем всем правовым нормам.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Администрация Сайта/Сайтов хочет, чтобы использование TOURBOOK не вызывало у Вас какого-либо беспокойства, и поэтому очень серьезно подходим к вопросам защиты информации, которую Вы нам предоставляете. Несмотря на то, что ни один веб-сайт не может в полной мере гарантировать безопасность данных, мы приняли ряд соответствующих административных<wbr />, технических и физических мер для защиты Ваших персональных данных. Например, только уполномоченные лица имеют доступ к персональным данным, и этот доступ они получают исключительно для выполнения разрешенных служебных действий. Кодирование и использование брандмауэров и системы обнаружения вторжения помогает нам защитить информацию от несанкционирован<wbr />ного доступа.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Перед размещением своих персональных данных на нашем Веб-сайте/сайтах<wbr />, пожалуйста, внимательно прочитайте данную&nbsp;</span><span style="font-size: 10pt;"><u><strong>Политику Конфиденциальнос<wbr />ти</strong></u></span><span style="font-size: 10pt;">&nbsp;для ознакомления с практическими вопросами защиты персональных данных.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Посещая наш Веб-сайт/сайты, Вы даете согласие на сбор, использование, передачу и обработку ваших личных данных в соответствии с данной Политикой конфиденциальнос<wbr />ти.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">TOURBOOK оставляет за собой право вносить изменения в&nbsp;</span><span style="font-size: 10pt;"><u><strong>Политику Конфиденциальнос<wbr />ти</strong></u></span><span style="font-size: 10pt;">&nbsp;в случае изменений в законодательстве<wbr />, в методах сбора и обработки личных данных, возможностях нашего Веб сайта/сайтов либо в случае изменений, обусловленных технологическим прогрессом. Изменения в порядке сбора и использования ваших личных данных вносятся в Политику конфиденциальнос<wbr />ти; дата вступления изменений в силу указывается вверху текста Политики конфиденциальнос<wbr />ти.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Если Вы переходите на сторонний веб-сайт/сайты, по ссылке, расположенной на TOURBOOK, то Вам необходимо учесть, что эти веб-сайты не руководствуются настоящей Политикой конфиденциальнос<wbr />ти. Поэтому мы рекомендуем Вам внимательно ознакомиться с положениями сбора, использования и защиты персональных данных, размещенных на этих веб-сайтах.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Если Вы не согласны с изменениями или модификациями Политики конфиденциальнос<wbr />ти, пожалуйста, не продолжайте использовать Сайт. Любое использование Вами Веб-сайта/сайтов будет считаться как согласие с данной Политикой конфиденциальнос<wbr />ти.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><u><strong>Информация, которую мы собираем и храним.</strong></u></span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Когда Вы находитесь на странице, то мы можем собирать и сохранять информацию (Вы вводите на нашем Веб-сайте или передаете нам каким-либо иным образом), которая напрямую не идентифицирует вашу личность, но может быть связана с вашими личными данными - Ваш IP адрес, географические данные, дату и время Вашего посещения веб-сайта, дату повторного использования веб-сайта и версию Вашего браузера, а также любую информацию в соответствии с настройками по умолчанию. Так же мы можем сохранять Ваши личные данные, предоставляемые в процессе пользования сайтом. Мы собираем данную информацию для предотвращения ошибок на сайте, а также для улучшения наших услуг. Личные данные могут включать Ваше имя, адрес, номер телефона, детали кредитной карты, адрес электронной почты, посещаемые экскурсии, название отеля, расположение отеля и длительность проживания. Когда Вы отправляете нам любые запросы в разделе &laquo;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">HELP</span></span><span style="font-size: 10pt;">/</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">INFO</span></span><span style="font-size: 10pt;">/</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">SERVICE</span></span><span style="font-size: 10pt;">&nbsp;и др.&raquo;, то для обработки этой информации мы собираем Ваши контактные данные (имя и адрес электронной почты). Данная информация и любая переписка между Вами и нашим сотрудником будет сохранена, чтобы улучшить предоставляемые нами услуги. Мы прилагаем все усилия, чтобы Ваша информация использовалась по назначению, была точной и полной. Получить доступ и обновить контактную информацию Вы можете на персональной странице. Вы можете удалить Вашу учетную запись на нашем Веб-сайте, связавшись с нами по электронной почте, указанной ниже. В ответ Вы получите письмо с запросом подтверждения удаления. Помните, что после удаления Вашей учетной записи вы не сможете получить доступ к Вашей персональной информации и зайти на Веб-сайт по данным этой учетной записи. Между тем, Вы в любое время можете создать новую учетную запись. Также просим Вас учесть, что мы можем хранить определенную информацию, связанную с Вашей учетной записью, в наших архивах, в том числе с целью анализа и учета.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Мы используем личные данные и прочую собранную информацию: (1) для вашей регистрации на сайте и создании вашего аккаунта, (2) для предоставления запрашиваемых вами услуг (в основном для обработки и подтверждения ваших бронирований в объектах размещения) после проверки учетных данных, (3) чтобы предоставить Вам информацию о наших услугах на сайте или на других веб-сайтах и общаться с вами в объеме, необходимом для обеспечения запрашиваемых услуг, (4) для разработки функций, делающих сайт проще в использовании, (5) для улучшения пользовательског<wbr />о интерфейса и общей оптимизации или, е) для связи с вами в случае вопросов, связанных с вашей резервацией. Оптимизация работы нашего ресурса включает в себя ускорение обработки запросов на покупку, улучшение клиентской поддержки и оперативное уведомление о новых услугах и специальных предложениях. Причиной обращения к вам может являться запрос на отзыв о работе сайта с целью улучшения ресурса, новостные письма, или уведомление вас как пользователя сайта о специальных скидках и предложениях (если вы дали согласие на получение такой информации или подобных маркетинговых сообщений). При нежелании получать уведомления о специальных скидках и предложениях отмените подписку на их получение (&laquo;отписаться&raquo;), перейдя по указанной гиперссылке в любое время. Электронные письма о подтверждении бронирований, текстовые сообщения, отправленные после бронирования и письма об отзывах, отправленные после вашего отъезда, не являются маркетинговыми сообщениями, так как являются частью процесса вашего бронирования. Это позволит Вам осуществить регистрацию заезда, а также оставить отзыв после вашего отдыха, при желании. Вы будете получать их, даже если вы отказались от наших маркетинговых сообщений. Отзыв гостя является совершенно необязательным, но поможет другим пользователям сделать обоснованное решение. При входе в систему, Вы будете иметь возможность сохранять данные кредитной карты в вашем личном кабинете для ускорения бронирования и оплаты заказов. Данные ваших кредитных карт защищены с помощью надежного шифрования. Войдя в Ваш личный кабинет, всегда сможете - удалить, изменить или добавить определенную информацию о кредитной карте. Для безопасности, номер не может быть изменен (но кредитная карта может быть удалена). При просмотре информации о кредитной карте, только последние 4 цифры номера будут показаны. Пожалуйста, обратите внимание, что мы будем хранить последние 4 цифры вашей кредитной карты надежно для любого совершенного бронирования (это требуется для управления какими-либо запросами на возврат для этого бронирования).</span></p>', 1),
(2, 'Охрана личных данных', '<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><u><strong>Охрана личных данных</strong></u></span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">В целях предотвращения несанкционирован<wbr />ного доступа мы предпринимаем надлежащие физические, электронные и организационные меры по защите личных данных от случайного и противозаконного уничтожения или случайной потери, изменения или несанкционирован<wbr />ного разглашения и доступа. В настоящее время для защиты операций с кредитными картами портал&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;использует протокол с технологией Secure Socket Layer, которая зашифровывает данные кредитной карты при осуществлении транзакций.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><br /><br /></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><u><strong>Личные Данные, предоставление третьим лицам</strong></u></span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><br /><br /></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;может предоставлять личные данные поставщикам, таким как&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">OPERATOR</span></span><span style="font-size: 10pt;">&nbsp;и другим третьим лицам, которых мы можем назначать для оказания услуг от нашего имени, таких как сторонние программы лояльности, хостинг, анализ данных, продвижение (включая веб-сайты третьих лиц), поддержка пользователей, услуги оплаты и кредитных карт и прочих соответствующих услуг. Все третьи лица берут на себя обязательства обеспечивать безопасность и конфиденциальнос<wbr />ть личных данных, а также обрабатывать личные данные исключительно в соответствии с нашими инструкциями.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">В некоторых случаях компания&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;может потребовать, чтобы вы напрямую взаимодействовал<wbr />и с третьей стороной для получения услуг, а в случае использования сайта для бронирования&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOUR</span></span><span style="font-size: 10pt;">&nbsp;у&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">OPERATOR</span></span><span style="font-size: 10pt;">&nbsp;или получения другой услуги, мы можем сообщить Ваши личные данные этому</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">OPERATOR</span></span><span style="font-size: 10pt;">&nbsp;или другой участвующей стороне.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;может предлагать другие услуги (как правило, "дополнения"), чтобы помочь спланировать путешествие, для получения определенных преимуществ (например, получить очки для сторонних программ лояльности или программы накопления миль) или для других целей, которые могут вас заинтересовать. Эти услуги предлагаются сторонними поставщиками. Как указано выше, соответствующие данные для этих услуг могут быть переданы таким сторонним поставщикам услуг для обеспечения оптимального обслуживания.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">За исключением случаев, упомянутых в настоящей политике конфиденциальнос<wbr />ти или в соответствии с законом в любой соответствующей юрисдикции, как указано ниже и раскрытия ваших личных данных и информации, необходимых для оформления бронирования с соответствующим</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">OPERATOR</span></span><span style="font-size: 10pt;">&nbsp;по вашему выбору и совместного использования некоторых личных данных с выбранными партнерами в соответствующих случаях (ваши данные будут использоваться только в целях отчетности и анализа), мы не будем раскрывать Ваши личные данные третьим лицам без Вашего согласия. Так же, мы оставляем за собой право раскрыть Ваши личные данные для наших дочерних (группы) компаний (внутри и за пределами Вашей страны), в том числе сотрудников наших дочерних (группы) компаний, а также доверенных агентов и представителей, которые имеют доступ к этой информации с нашего разрешения, и кто должен знать или иметь доступ к этой информации для выполнения услуг, запрошенных вами (в том числе обслуживание клиентов) и внутренних расследований (аудит и тд.).</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;может доступ к Вашей информации &ndash; (1) Независимым третьим лицам, предоставляющим нам различные услуги, включая бизнес-анализ, работу с покупателями, маркетинг, обеспечение опросов или лотерей, предотвращение мошенничества. Мы также можем разрешить третьим лицам собирать информацию для наших целей, например, для работы Веб-сайта или рассылки актуальной рекламы. Третьи лица имеют доступ и могут собирать только необходимую для оказания услуги информацию и при этом не имеют права использовать ее в каких-нибудь других целях. (2)Деловым партнерам, с которыми мы совместно предоставляем продукты и услуги. Вы всегда можете определить, какие третьи лица предоставляют тот или иной продукт или услугу, так как их наименования всегда будут указаны рядом с нашим. Если Вы решите использовать эти дополнительные услуги, мы можем предоставить нашим партнерам доступ к Вашей информации, в том числе и к персональным данным. Помните, что мы не контролируем защиту Вашей информации такими деловыми партнерами. (3)</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">&nbsp;</span></span><span style="font-size: 10pt;">Ссылающимся веб-сайтам. Если Вы заходите на сайт/сайты&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;по ссылке с другого веб-сайта, мы можем предоставить этому веб-сайту доступ к Вашей регистрационной информации, например, Вашему имени, почтовому и электронному адресу, номеру телефона, предпочтениям в путешествиях. Ссылающийся веб-сайт получает полный доступ к Вашей информации, поэтому мы рекомендуем Вам ознакомится с политикой конфиденциальнос<wbr />ти соответствующего веб-сайта, прежде чем переходить с этого веб-сайта на&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">. (4) Социальные сети. С нашего Веб-сайта Вы можете зайти на ряд социальных сетей (например,&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">VK</span></span><span style="font-size: 10pt;">.</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">COM</span></span><span style="font-size: 10pt;">). Переходя на эти веб-сайты, Вы предоставляете им свои персональные данные, и защита такой информации будет проводится согласно политике уже этих веб-сайтов. На этих веб-сайтах Вы также можете изменить настройки конфиденциальнос<wbr />ти информации. Компаниям внутри группы. (5) Компаниям, входящим в группу&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">: компаниям-учреди<wbr />телям, внутренним и международным аффилированным компаниям и веб-сайту/сайтам<wbr />. Совместное использование данных позволяет нам обеспечить Вас информацией о продуктах и услугах, которые могут Вас заинтересовать. При использовании информации компании-учредит<wbr />ели и аффилированные компании следуют текущей Политике конфиденциальнос<wbr />ти.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">В целях собственной защиты от ответственности, в соответствии с действующим законодательство<wbr />м, компания&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;может разглашать личные данные в ответ на судебные либо следственные запросы, ордеры или эквивалентные документы, законные требования правоохранительн<wbr />ых органов или властей, для расследования мошенничества или других правонарушений, или при иной законодательно-о<wbr />бусловленной необходимости, защищать наши законные интересы; также может сообщать данные покупателям при продаже, передаче или ином полном или частичном переходе прав собственности. Разглашение личных данных, в соответствии с действующим законодательство<wbr />м, также возможно в целях принудительного соблюдения условий предоставления наших услуг, а также для защиты прав, собственности и безопасности компании&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">, наших клиентов и прочих лиц.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">В описанных выше ситуациях получатель личных данных может находиться в юрисдикции, уровень защиты данных в которой может отличаться от стандартов вашего местного законодательства<wbr />.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><u><strong>"сookie" и тэги веб-страниц</strong></u></span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Посещая наш Сайт/сайты, вы даете согласие на использование файлов "сookie" и тэгов, как описано ниже. Наш сайт использует временные и постоянные cookie-файлы, а также тэги веб-страниц, чтобы собирать и хранить определенную информацию о вас. Файл cookie - это небольшой фрагмент данных, который посылается на компьютер с сайта и хранится на жестком диске вашего компьютера. Тэг страницы - это фрагмент кода, который распознает и записывает данные файлов "сookie". Тэги веб-страниц и файлы "сookie" могут быть от&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;и/или сторонних поставщиков, с которыми мы работаем. Временные cookie-файлы удаляются с компьютера после выхода из браузера. Постоянные cookie-файлы остаются на вашем компьютере даже после того, как браузер был закрыт, но могут быть удалены в любое время через настройки браузера. Использование этих файлов "сookie" и тегов страниц может варьироваться, это описано в соответствующих разделах ниже.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Если вы хотите, чтобы Ваш браузер не принимал cookie-файлы, если вы хотите быть оповещенными, когда cookie-файлы сохраняются на вашем компьютере или если вы хотите удалить cookie-файлы с вашего компьютера, пожалуйста, внесите необходимые изменения в настройки вашего интернет-браузер<wbr />а, как правило, в разделах "Помощь" или "Свойства обозревателя". Если вы отключите или удалите cookie-файлы в настройках интернет-браузер<wbr />а, вы возможно не сможете получить доступ или использовать некоторые из важных функций нашего Сайта/Сайтов, и Вам будет необходимо повторно ввести свой логин. Пожалуйста, так же обратите внимание, что отключая cookie-файлы третьих лиц (см. ниже) не означает, что Вы больше не будете получать онлайн-рекламу или Ваши данные не будут использованы для маркетингового анализа. Это означает, что сеть, от которой Вы отказались, больше не будет показывать рекламные объявления с учетом ваших предпочтений в сети интернет. Пожалуйста, обратите внимание, что если Вы удалите все cookie в вашем браузере, или используете другой браузер или компьютер, Вы должны будете повторить процедуру отключения cookie-файлов третьих лиц снова.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;использует временные cookie-файлы, которые позволяют аутентифицироват<wbr />ь вас в течение посещения Сайта.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;использует cookie-файлы, чтобы &laquo;персонализирова<wbr />ть&raquo; сайт для каждого пользователя, запоминая информацию о визите и действиях пользователя на сайте, например, выбранный вами язык, или ваши данные для входа на Сайт, так что вам не нужно повторно вводить их при следующем посещении Сайта.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;также использует постоянные cookie-файлы или тэги веб-страниц, чтобы проанализировать ваше поведение при посещении Сайта, что позволит нам улучшить Сайт и качество наших услуг, а так же адаптировать нашу рекламу (по электронной почте, на нашем сайте и на других сайтах) в соответствии с интересами наших пользователей. Такие cookie-файлы и тэги веб-страниц собирают информацию о страницах, которые вы посетили на сайте, и выполненных поисках.</span></p>', 1),
(3, 'Аналитика Веб-сайта/Сайтов', '<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><u><strong>Аналитика Веб-сайта/Сайтов</strong></u></span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Компании, которые мы привлекаем/Компа<wbr />нии партнеры могут использовать cookie-файлы, чтобы проанализировать Ваше поведение в сети и Ваше посещение этого Сайта/Сайтов, а также других веб-сайтов, позволяя нам улучшить Сайт/Сайты и качество наших услуг. Платформы аналитики могут быть использованы для сбора не опознаваемой информации для отчетов, таких как отчеты о показах, демографической отчетности и процентной отчетности. Чтобы отказаться от сбора информации третьими лицами для аналитических целей, пожалуйста, нажмите на одну или несколько ссылок на третьих лиц выше в разделе "Отказ"</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;может привлекать сторонние рекламные компании. Они могут включать 1) деловых партнеров, которые собирают информацию о Ваших интересах, когда вы просматриваете и взаимодействуете с их рекламой на наших Веб-сайтах и (2) рекламные сети, которые собирают информацию о Ваших интересах, когда вы просматриваете и взаимодействуете с рекламой, которую они поместили на различных веб-сайтах в Интернете могут размещать cookie-файлы или тэги веб-станиц на некоторых из посещенных Вами страниц на Сайте/Сайтах. Мы не разрешаем третьим сторонам собирать Ваши персональные контактные данные (например, адрес электронной почты) и не передаем им эти данные.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Также мы можем предоставить общую или анонимную информацию третьим лицам, в том числе рекламодателям и инвесторам. Например, мы можем сообщить нашим рекламодателям количество посетителей Веб-сайта или наиболее популярные экскурсии и места отдыха. Эта информация не содержит каких-либо персональных данных и используется для развития Веб-сайта.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Файлы или тэги веб-страниц предназначены для сбора не персонализирован<wbr />ной информации для того, чтобы проанализировать ваши интересы и поиск при посещении нашего Сайта/Сайтов и предложить вам рекламу с учетом ваших интересов и запросов, когда вы посещаете наш сайт, другие веб-сайты или при использовании мобильных приложений. Не личная информация, собранная через cookie-файлы и тэги веб-страниц, может быть передана третьим лицам для целей управления и нацеливания рекламы, а так же для анализа исследования рынка. Кроме того, мы можем поделиться односторонними хэшированными (не поддающимися расшифровке) данными со сторонними поставщиками используя рекламно ориентированные продукты. Такие сторонние поставщики обычно используют хэшированные идентификаторы устройств для обслуживания пользовательских объявлений на основе предыдущих посещений сайта пользователем. Как следствие, сторонние поставщики могут показывать наши объявления на других сайтах или мобильных приложениях.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><u><strong>Реклама/онлайн-м<wbr />аркетинг</strong></u></span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Мы используем поисковый ремаркетинг для адаптации содержания объявлений.&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;может использовать комбинацию вышеуказанных файлов &laquo;cookie&raquo; и тегов страниц в зависимости от Вашего опыта использования нашего Сайта, нашего мобильного приложения и объявлений по вашим предпочтениям.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Если другая реклама может не требовать использования файлов &laquo;cookie&raquo; или тегов страниц, для определения, когда будет показано объявление</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">, используются данные третьей стороны.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Мы хотим, чтобы Вы всецело могли использовать возможности нашего Веб-сайта. Одним из способов достижения этой цели является рассылка электронных писем с информацией, касающейся Ваших туристических интересов. Например, если Вы ищете рейс на Пхукет на нашем Веб-сайте, мы можем направить Вам письмо с возможными&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOUR</span></span><span style="font-size: 10pt;">&nbsp;и ценами на экскурсии. Мы полагаем, что эти сообщения обеспечивают Вас полезной информацией о специальных туристических предложениях, доступных на нашем Веб-сайте. Помните, что Вы можете отменить рассылку таких сообщений. Пожалуйста, прочтите "Ваши предпочтения относительно сбора и использования Вашей информации", для того чтобы узнать больше.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;принимает разумные усилия, чтобы не собирать, а также для предупреждения использования, личной информации в сторонних рекламных решениях, если только вы не авторизовали это. Чтобы отказаться от сбора информации третьими лицами в рекламных целях, пожалуйста, нажмите на одну или несколько ссылок сторонних в предыдущем разделе "Отказ".</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;использует инструменты третьих лиц для распространения объявлений на различных веб-сайтах.&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;ни поддерживает, ни одобряет цели, убеждения или заявления сайтов, которые отображают нашу рекламу.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;снабжает Вас необходимой информацией на всех наших веб-сайтах. Например, если Вы собираетесь отдохнуть в Таиланде и ищете связанные с этим&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOUR</span></span><span style="font-size: 10pt;">&nbsp;на&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">, Вы можете просмотреть рекламу туристических компаний, предоставляющих такие услуги, на этом же Веб-сайте или на другом веб-сайте, который Вы посещаете. Для этого мы собираем информацию относительного вашего поиска, например, поиск экскурсий или вечерних программ, и используем ее, чтобы предоставить Вам информацию, наиболее соответствующую Вашим интересам.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Мы не предоставляем Ваши персональные контактные данные (например, адрес электронной почты) сторонним веб-сайтам, чтобы они не могли использовать эти данные для рассылок рекламных сообщений. Вы можете отменить получение с других веб-сайтов рекламы, касающейся вашего поиска на веб-сайте&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">, нажав здесь. Помните, что если Вы отмените получение актуальной рекламы, Вы будете видеть рекламу в режиме онлайн, но она будет носить более общий характер и меньше соответствовать вашим конкретным интересам.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Рекламу, которую вы можете видеть на наших веб-сайтах, предоставляется веб-сайтом&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;или нашими провайдерами. Но мы также позволяем собирать информацию о Ваших действиях в сети третьим лицам посредством cookies или других технологий.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Пожалуйста, учтите, что у нас нет доступа и мы не можем контролировать cookies или другие технологии, которые эти третьи лица могут использовать для сбора информации о Ваших интересах.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Если во время вашего пребывания на веб-сайте или перед его посещением осуществлялся доступ к сторонним сервисам, таким как социально-развле<wbr />кательные проекты, в нашей системе могут сохраняться определенные сведения (имя пользователя, пароль и т. д.), передаваемые ей этими сервисами. Сбор данных осуществляется с целью повышения уровня персонализации и качества предоставляемых услуг.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><u><strong>Получение доступа к личной информации, ее изменению</strong></u></span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><a id="_GoBack" name="_GoBack"></a><span style="font-size: 10pt;">Если вы хотите обновить предоставленные ранее личные данные либо исправить, удалить или запретить обработку личных данных, данное право вам может быть гарантировано действующим законодательство<wbr />м, свяжитесь с нами через страницу Службы Поддержки (</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">help</span></span><span style="font-size: 10pt;">@</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">tourbook</span></span><span style="font-size: 10pt;">.</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">com</span></span><span style="font-size: 10pt;">). Для предотвращения несанкционирован<wbr />ного доступа к информации мы просим пользователей подтвердить свою личность и принадлежность им информации, после чего предоставляем доступ к изменению личных данных. На любой запрос о доступе к личным данным мы ответим в разумные сроки. Вы также можете возражать против обработки ваших персональных данных в целях рекламы, маркетинговых исследований и изучения общественного мнения. Мы оставляем за собой право взимать разумную плату за такой доступ в соответствии с действующим законодательство<wbr />м.</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Если вы желаете связаться с отделом защиты данных&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOURBOOK</span></span><span style="font-size: 10pt;">&nbsp;или нашим агентом службы клиентской поддержки по поводу проблем конфиденциальнос<wbr />ти по электронной почте, то отправьте письмо на:</span></p>\r\n<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">info</span></span><span style="font-size: 10pt;">@</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">tourbook</span></span><span style="font-size: 10pt;">.com</span></p>', 1),
(4, 'Ограничения', '<p style="font-family: \'Times New Roman\', Times, serif; font-size: 16px; margin-bottom: 0.14in;" align="justify"><span style="font-size: 10pt;">Лица, не достигшие 16-летнего возраста, не имеют права использовать услуги бронирования&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOUR</span></span><span style="font-size: 10pt;">&nbsp;на нашем сайте. Несовершеннолетн<wbr />ие могут сопровождать своих родителей, которые забронировали&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">TOUR</span></span><span style="font-size: 10pt;">, если это позволяет политика&nbsp;</span><span style="font-size: 10pt;"><span lang="en-US" xml:lang="en-US">OPERATOR</span></span><span style="font-size: 10pt;">.</span></p>\r\n<p><span style="font-size: 10pt;">&nbsp;</span></p>', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `delivery` int(11) NOT NULL,
  `statui` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `status`) VALUES
(1, 'Можно инвалидам', 1),
(2, '4-х местный', 1),
(3, 'Обед', 1),
(4, 'Халява', 1),
(6, 'Халяль', 1),
(7, 'Харашо', 1),
(8, 'Transfer', 1),
(9, 'Хуета', 1),
(14, 'Капитан долбоеб', 1),
(15, 'Dinner', 1),
(16, 'Bungalow', 1),
(18, 'Night', 1),
(20, 'Бомж', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tags_images`
--

CREATE TABLE `tags_images` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `path` text,
  `main` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tags_images`
--

INSERT INTO `tags_images` (`id`, `tag_id`, `path`, `main`, `status`) VALUES
(35, 1, 'uploads/1.90646363.jpg', 1, 0),
(36, 1, 'uploads/1.85379029.jpg', NULL, 0),
(37, 1, 'uploads/1.14831543.png', NULL, 1),
(38, 2, 'uploads/2.20108032.png', NULL, 1),
(39, 3, 'uploads/3.14483642.png', NULL, 1),
(40, 4, 'uploads/4.76522827.png', NULL, 1),
(41, 6, 'uploads/6.99768067.png', NULL, 1),
(42, 14, 'uploads/14.68032837.png', NULL, 1),
(43, 9, 'uploads/9.6256103.png', NULL, 1),
(44, 15, 'uploads/15.63314819.png', NULL, 1),
(45, 16, 'uploads/16.87109375.png', NULL, 1),
(46, 20, 'uploads/20.62844849.png', NULL, 1),
(47, 18, 'uploads/18.10687255.png', NULL, 1),
(48, 8, 'uploads/8.10983276.png', NULL, 1),
(49, 7, 'uploads/7.74163819.png', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tags_links`
--

CREATE TABLE `tags_links` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tags_links`
--

INSERT INTO `tags_links` (`id`, `tag_id`, `booking_id`, `status`) VALUES
(1, 4, 4, 0),
(2, 5, 4, 0),
(3, 6, 4, 0),
(4, 7, 4, 0),
(6, 3, 4, 0),
(7, 7, 4, 0),
(8, 1, 4, 0),
(9, 3, 4, 0),
(10, 2, 4, 0),
(11, 3, 4, 0),
(12, 4, 4, 0),
(13, 2, 4, 0),
(14, 7, 4, 0),
(15, 4, 4, 0),
(16, 6, 4, 0),
(17, 7, 4, 0),
(18, 4, 4, 0),
(19, 4, 4, 0),
(20, 3, 4, 0),
(21, 5, 4, 0),
(22, 2, 4, 0),
(23, 3, 3, 0),
(24, 4, 4, 0),
(25, 3, 4, 0),
(26, 2, 4, 0),
(27, 10, 4, 0),
(28, 9, 4, 0),
(29, 11, 4, 0),
(30, 2, 4, 0),
(31, 12, 4, 0),
(32, 13, 1, 0),
(33, 14, 4, 0),
(34, 18, 4, 0),
(35, 17, 4, 0),
(36, 14, 4, 1),
(37, 3, 4, 1),
(38, 2, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

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
(1, 'Yacht', 'Yacht', 'туда, сюда, есть то, се, пятое, десятое', 1),
(2, 'car', 'Car', 'туда, сюда, есть то, се, пятое, десятое', 1),
(3, 'hotel', 'Hotel', 'туда, сюда, есть то, се, пятое, десятое', 1),
(4, 'sightseeing', 'Sightseeing', 'sightseeing, asd, aaa, bbb', 1),
(5, 'tour', 'Tour', 'tour, tour, tour, tour, tour, tour', 1),
(6, 'transfer', 'Transfer', 'transfer, transfer, huyansfer', 1),
(7, 'photosession', 'Photosession', 'photosession, photosession, photosession', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `types_images`
--

CREATE TABLE `types_images` (
  `id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `path` text,
  `main` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types_images`
--

INSERT INTO `types_images` (`id`, `type_id`, `path`, `main`, `status`) VALUES
(1, 1, 'uploads/1.90646363.jpg', 0, 0),
(2, 1, 'uploads/1.79049683.png', 0, 0),
(3, 1, 'uploads/1.19787597.png', 0, 0),
(4, 1, 'uploads/1.70108032.png', 0, 0),
(5, 1, 'uploads/1.46157837.jpg', 0, 0),
(6, 1, 'uploads/1.26339721.png', 0, 0),
(7, 1, 'uploads/1.64938355.jpg', 0, 0),
(8, 1, 'uploads/1.12789917.jpg', 0, 0),
(9, 1, 'uploads/1.54403687.png', 1, 1),
(10, 2, 'uploads/2.98937989.png', 1, 1),
(11, 3, 'uploads/3.44741821.png', 1, 1),
(12, 4, 'uploads/4.40972900.png', 1, 1),
(13, 5, 'uploads/5.2133178.png', 1, 1),
(14, 6, 'uploads/6.29248047.png', 1, 1),
(15, 7, 'uploads/7.98147583.png', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `types_links`
--

CREATE TABLE `types_links` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types_links`
--

INSERT INTO `types_links` (`id`, `tag_id`, `type_id`, `status`) VALUES
(1, 4, 4, 0),
(2, 5, 4, 0),
(3, 6, 4, 0),
(4, 7, 4, 0),
(6, 3, 4, 0),
(7, 7, 4, 0),
(8, 1, 4, 0),
(9, 3, 4, 0),
(10, 2, 4, 0),
(11, 3, 4, 0),
(12, 4, 4, 0),
(13, 2, 4, 0),
(14, 7, 4, 0),
(15, 4, 4, 0),
(16, 6, 4, 0),
(17, 7, 4, 1),
(18, 4, 4, 0),
(19, 4, 4, 0),
(20, 3, 4, 0),
(21, 5, 4, 0),
(22, 2, 4, 0),
(23, 3, 3, 1),
(24, 4, 4, 1),
(25, 3, 4, 0),
(26, 2, 4, 0),
(27, 10, 4, 0),
(28, 9, 4, 0),
(29, 11, 4, 0),
(30, 2, 4, 0),
(31, 12, 4, 1),
(32, 13, 1, 0),
(33, 14, 4, 1),
(34, 18, 4, 1),
(35, 17, 4, 1),
(36, 4, 1, 1),
(37, 4, 1, 1),
(38, 5, 1, 0),
(39, 4, 1, 1),
(40, 20, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

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
  `locale` varchar(5) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `second_name`, `last_name`, `phone`, `email`, `birthday`, `bonus`, `money`, `created_at`, `updated_at`, `password_reset_token`, `password_hash`, `password`, `auth_key`, `locale`, `status`) VALUES
(1, 'admin', 'admin', 'adminovich', 'adminov', '+79833161472', 'admin@admin.com', 0, 1000, 1000, 0, 1483517164, 'NULL', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', NULL, 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', 'ru', 1),
(2, 'user', 'user', 'userovich', 'userov', '+154654646546', 'email@gang.nsk.ru', 0, 100, 100, 0, 0, '', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', NULL, 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', NULL, 1),
(3, 'operator', 'operator', 'operatorvich', 'operatorov', '+45485687878', 'ololo@ororo.com', 0, 150, 150, 0, 0, '', '$2y$13$L0tAgmdVDqwvuINLrcjFUemHG0UaJdTgjcour5GpjaOSf518bLaRW', NULL, 'wxEtC7QqF5GbTUoZzoM2_n5UYHc8RfJr', NULL, 1),
(8, 'Misha', NULL, NULL, NULL, NULL, 'misha@ef.com', NULL, NULL, NULL, 1477912744, 1477912744, NULL, '$2y$13$fD93LkfBT96uGPTY.AaHjueDCOWnwoD2Y0SJMP5SvrcIEMum0a4nS', '123qwe', 'QPQ-uKdFBD6ypVyqY2t2WkB3pU_ymp2k', NULL, 1),
(9, 'Nikolay', NULL, NULL, NULL, NULL, 'nikola@nikola.com', NULL, NULL, NULL, 1477912880, 1477912880, NULL, '$2y$13$YjZsAeAo6/ly3BLZdtbup.YY3mDPRBgxcyUrR5MnyVjcJ8/mv24nS', '123qwe', 'ACli_wS8qCYb6USmzRZBt1FEjvQ8a32Q', NULL, 1),
(10, 'Evgeny', 'Knish', '', '', '6576667665', 'knishev@inbox.ru', NULL, NULL, NULL, 1477984798, 1479758006, '', '$2y$13$0hg5LDjslfBmxlC9Ko91heUP4PGxtp466SlmpxAaj/b8SlYCOpkAS', '198432qazxsw', 'wYdCMo_1moxQTIeUaiOUS8P6RMSAAF43', NULL, 1),
(11, 'Evgeny K', NULL, NULL, NULL, NULL, 'svambeer@mail.ru', NULL, NULL, NULL, 1481094095, 1481094095, NULL, '$2y$13$/0jC7mHzpZi1NaZo2FWciOMWX1wvI4IuSsQru1mHjZ1yf3e0E3ub.', '198432qazxsw', 'VfSXrv1XU6SLNPXNGe8dujmWJDKSwXXW', NULL, 1),
(12, 'Vasily', NULL, NULL, NULL, NULL, 'vasy@asd.com', NULL, NULL, NULL, 1481475291, 1481475291, NULL, '$2y$13$IlPj96QTIf02fCaygMeTz.jT0rkyw/dX8ivCpY.8aiak9hAx8em1S', '111111', 'OkBTp3IqXCBnrNty89eyIyAlcNA0OO3P', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wish` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `wish`, `status`) VALUES
(1, 1, 4, 1),
(8, 1, 3, 1),
(9, 1, 4, 1),
(10, 1, 3, 1),
(11, 1, 3, 1),
(12, 1, 4, 1),
(13, 1, 4, 1),
(14, 1, 2, 1);

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
-- Индексы таблицы `country_flags`
--
ALTER TABLE `country_flags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `country_images`
--
ALTER TABLE `country_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
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
-- Индексы таблицы `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags_images`
--
ALTER TABLE `tags_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags_links`
--
ALTER TABLE `tags_links`
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
-- Индексы таблицы `types_images`
--
ALTER TABLE `types_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `types_links`
--
ALTER TABLE `types_links`
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
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT для таблицы `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `booking_images`
--
ALTER TABLE `booking_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `city_images`
--
ALTER TABLE `city_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `country_flags`
--
ALTER TABLE `country_flags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `country_images`
--
ALTER TABLE `country_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT для таблицы `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `tags_images`
--
ALTER TABLE `tags_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT для таблицы `tags_links`
--
ALTER TABLE `tags_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
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
-- AUTO_INCREMENT для таблицы `types_images`
--
ALTER TABLE `types_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `types_links`
--
ALTER TABLE `types_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

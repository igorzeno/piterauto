-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 08 2020 г., 15:10
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `car_luxe`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auto`
--

CREATE TABLE `auto` (
  `id` int(11) UNSIGNED NOT NULL,
  `name_auto` varchar(32) DEFAULT NULL,
  `alias_auto` varchar(32) DEFAULT NULL,
  `brand_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto`
--

INSERT INTO `auto` (`id`, `name_auto`, `alias_auto`, `brand_id`) VALUES
(1, 'C-HR', 'c-hr', 1),
(2, 'Camry', 'camry', 1),
(3, 'Corolla', 'corolla', 1),
(4, 'RAV4', 'rav4', 1),
(5, 'Vision Coupe', 'vision-coupe', 2),
(6, 'Koeru', 'koeru', 2),
(7, 'RX-Vision', 'rx-vision', 2),
(8, 'Kabura', 'kabura', 2),
(9, 'C-класс', 'c-class', 3),
(10, 'E-класс', 'e-class', 3),
(11, 'CLA-класс', 'cla-class', 3),
(12, 'GLA', 'gla', 3),
(13, 'GLE Coupe', 'gle-coupe', 3),
(14, 'Maybach Pullman', 'maybach-pullman', 3),
(15, 'Maybach S', 'Maybach-S', 3),
(16, '2 Gran Coupe', '2-gran-coupe', 4),
(17, '3 Gran Turismo', '3-gran-turismo', 4),
(18, '5 Серия', '5-series', 4),
(19, 'E65', 'e65', 4),
(20, 'M5', 'm5', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `auto_drive`
--

CREATE TABLE `auto_drive` (
  `id` int(11) UNSIGNED NOT NULL,
  `auto_id` int(11) UNSIGNED DEFAULT NULL,
  `drive_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto_drive`
--

INSERT INTO `auto_drive` (`id`, `auto_id`, `drive_id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 2, 2),
(4, 2, 1),
(5, 3, 2),
(6, 3, 1),
(7, 4, 2),
(8, 4, 1),
(9, 5, 2),
(10, 5, 1),
(11, 6, 2),
(12, 6, 1),
(13, 7, 2),
(14, 7, 1),
(15, 8, 2),
(16, 8, 1),
(17, 9, 2),
(18, 9, 1),
(19, 10, 2),
(20, 10, 1),
(21, 12, 2),
(22, 12, 1),
(23, 11, 2),
(24, 11, 1),
(25, 13, 2),
(26, 13, 1),
(27, 14, 2),
(28, 14, 1),
(29, 15, 2),
(30, 15, 1),
(31, 16, 2),
(32, 16, 1),
(33, 17, 2),
(34, 17, 1),
(35, 18, 2),
(36, 18, 1),
(37, 19, 2),
(38, 19, 1),
(39, 20, 2),
(40, 20, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `auto_engine`
--

CREATE TABLE `auto_engine` (
  `id` int(11) UNSIGNED NOT NULL,
  `auto_id` int(11) UNSIGNED DEFAULT NULL,
  `engine_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auto_engine`
--

INSERT INTO `auto_engine` (`id`, `auto_id`, `engine_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 2),
(4, 2, 1),
(5, 2, 3),
(6, 2, 2),
(7, 3, 1),
(8, 3, 3),
(9, 3, 2),
(10, 4, 1),
(11, 4, 3),
(12, 4, 2),
(13, 5, 1),
(14, 5, 3),
(15, 5, 2),
(16, 6, 1),
(17, 6, 3),
(18, 6, 2),
(19, 7, 1),
(20, 7, 3),
(21, 7, 2),
(22, 8, 1),
(23, 8, 3),
(24, 8, 2),
(25, 9, 1),
(26, 9, 3),
(27, 9, 2),
(28, 10, 1),
(29, 10, 3),
(30, 10, 2),
(31, 12, 1),
(32, 12, 3),
(33, 12, 2),
(34, 11, 1),
(35, 11, 3),
(36, 11, 2),
(37, 13, 1),
(38, 13, 3),
(39, 13, 2),
(40, 14, 1),
(41, 14, 3),
(42, 14, 2),
(43, 15, 1),
(44, 15, 3),
(45, 15, 2),
(46, 16, 1),
(47, 16, 3),
(48, 16, 2),
(49, 17, 1),
(50, 17, 3),
(51, 17, 2),
(52, 18, 1),
(53, 18, 3),
(54, 18, 2),
(55, 19, 1),
(56, 19, 3),
(57, 19, 2),
(58, 20, 1),
(59, 20, 3),
(60, 20, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(11) UNSIGNED NOT NULL,
  `name_brand` varchar(32) DEFAULT NULL,
  `alias_brand` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `name_brand`, `alias_brand`) VALUES
(1, 'Toyota', 'toyota'),
(2, 'Mazda', 'mazda'),
(3, 'Mercedes', 'mercedes'),
(4, 'BMW', 'bmw');

-- --------------------------------------------------------

--
-- Структура таблицы `drive`
--

CREATE TABLE `drive` (
  `id` int(11) UNSIGNED NOT NULL,
  `drive` varchar(32) DEFAULT NULL,
  `alias_drive` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `drive`
--

INSERT INTO `drive` (`id`, `drive`, `alias_drive`) VALUES
(1, 'Полный', 'awd'),
(2, 'Передний', 'front');

-- --------------------------------------------------------

--
-- Структура таблицы `engine`
--

CREATE TABLE `engine` (
  `id` int(11) UNSIGNED NOT NULL,
  `engine` varchar(32) DEFAULT NULL,
  `alias_engine` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `engine`
--

INSERT INTO `engine` (`id`, `engine`, `alias_engine`) VALUES
(1, 'Бензин', 'benzine'),
(2, 'Дизель', 'dizel'),
(3, 'Гибрид', 'gibrid');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1599288869),
('m130524_201442_init', 1599288888),
('m190124_110200_add_verification_token_column_to_user_table', 1599288888),
('m200905_070140_create_model_table', 1599289325),
('m200905_070346_create_brand_table', 1599289440),
('m200905_070938_create_engine_table', 1599289787),
('m200905_070957_create_drive_table', 1599289802),
('m200905_071609_create_model_engine_table', 1599290175),
('m200905_071634_create_model_drive_table', 1599290238),
('m200905_160608_create_auto_table', 1599321984),
('m200905_160716_create_auto_engine_table', 1599322044),
('m200905_160820_create_auto_drive_table', 1599322107);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'dssPeozyJGswdhPV2OU9fxJjo8zH_S4h', '$2y$13$lwYkqpT.DQm0wDCo/Akgde2WOFz0t2nGsga9dCkqy69JmJnTCpE1W', NULL, 'admin@cars.com', 10, 1599305480, 1599305480, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Индексы таблицы `auto_drive`
--
ALTER TABLE `auto_drive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_id` (`auto_id`),
  ADD KEY `drive_id` (`drive_id`);

--
-- Индексы таблицы `auto_engine`
--
ALTER TABLE `auto_engine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_id` (`auto_id`),
  ADD KEY `engine_id` (`engine_id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `drive`
--
ALTER TABLE `drive`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `engine`
--
ALTER TABLE `engine`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `auto_drive`
--
ALTER TABLE `auto_drive`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT для таблицы `auto_engine`
--
ALTER TABLE `auto_engine`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `drive`
--
ALTER TABLE `drive`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `engine`
--
ALTER TABLE `engine`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);

--
-- Ограничения внешнего ключа таблицы `auto_drive`
--
ALTER TABLE `auto_drive`
  ADD CONSTRAINT `auto_drive_ibfk_1` FOREIGN KEY (`auto_id`) REFERENCES `auto` (`id`),
  ADD CONSTRAINT `auto_drive_ibfk_2` FOREIGN KEY (`drive_id`) REFERENCES `drive` (`id`);

--
-- Ограничения внешнего ключа таблицы `auto_engine`
--
ALTER TABLE `auto_engine`
  ADD CONSTRAINT `auto_engine_ibfk_1` FOREIGN KEY (`auto_id`) REFERENCES `auto` (`id`),
  ADD CONSTRAINT `auto_engine_ibfk_2` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

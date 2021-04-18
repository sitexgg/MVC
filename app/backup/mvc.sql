-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 17 2021 г., 15:14
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_index_page`
--

CREATE TABLE `mvc_index_page` (
  `id` int(5) NOT NULL,
  `title_ru` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kz` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_index_page`
--

INSERT INTO `mvc_index_page` (`id`, `title_ru`, `title_kz`, `title_en`) VALUES
(1, 'Казахский Государственный Женский Педагогический Университет &lt;br&gt; Научная библиотека', 'Қазақ Мемлекеттік Қыздар Шедагогикалық Университеті &lt;br&gt; Ғылыми кітапхана', 'Kazakh State Women\'s Teacher Training University &lt;br&gt; Research Library');

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_menu_en`
--

CREATE TABLE `mvc_menu_en` (
  `id` int(5) NOT NULL,
  `item` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_menu_en`
--

INSERT INTO `mvc_menu_en` (`id`, `item`, `link`) VALUES
(1, '123123212345', '/main/index'),
(2, '2345', '/main/qq'),
(3, '3245', '/main/qq'),
(4, '234523', '/main/qq'),
(5, '3245234', '/main/qq'),
(6, '2354362', '/main/qq');

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_menu_kz`
--

CREATE TABLE `mvc_menu_kz` (
  `id` int(5) NOT NULL,
  `item` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_menu_kz`
--

INSERT INTO `mvc_menu_kz` (`id`, `item`, `link`) VALUES
(1, 'sadfasdf', '/main/index'),
(2, 'Главная                                ', '/main/qq'),
(3, 'Страница', '/main/qq'),
(4, 'Контакты', '/main/qq'),
(5, 'О нас', '/main/qq'),
(6, 'asdfasdfsdf', '/main/qq');

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_menu_ru`
--

CREATE TABLE `mvc_menu_ru` (
  `id` int(5) NOT NULL,
  `item` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_menu_ru`
--

INSERT INTO `mvc_menu_ru` (`id`, `item`, `link`) VALUES
(1, 'Электронная библиотека', '/main/index'),
(2, 'Главная                                ', '/main/qq'),
(3, 'Страница', '/main/qq'),
(4, 'Контакты', '/main/qq'),
(5, 'О нас', '/main/qq'),
(6, 'О библиотеке', '/main/qq');

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_routes`
--

CREATE TABLE `mvc_routes` (
  `id` int(5) NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_routes`
--

INSERT INTO `mvc_routes` (`id`, `page`, `controller`, `action`) VALUES
(1, 'account/login', 'account', 'login'),
(2, 'account/register', 'account', 'register'),
(3, 'main/index', 'main', 'index'),
(4, 'admin/panel', 'admin', 'panel'),
(5, 'admin/settings', 'admin', 'settings'),
(6, 'admin/createPage', 'admin', 'createPage'),
(30, 'main/qwe', 'main', 'qwe'),
(31, 'main/qq', 'main', 'qq'),
(32, 'main/qwe1', 'main', 'qwe1'),
(33, 'main/zxcvzxcvzxc', 'main', 'zxcvzxcvzxc');

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_users`
--

CREATE TABLE `mvc_users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_users`
--

INSERT INTO `mvc_users` (`id`, `user`, `pass`) VALUES
(1, '123', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mvc_index_page`
--
ALTER TABLE `mvc_index_page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mvc_menu_en`
--
ALTER TABLE `mvc_menu_en`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mvc_menu_kz`
--
ALTER TABLE `mvc_menu_kz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mvc_menu_ru`
--
ALTER TABLE `mvc_menu_ru`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mvc_routes`
--
ALTER TABLE `mvc_routes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mvc_users`
--
ALTER TABLE `mvc_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `mvc_index_page`
--
ALTER TABLE `mvc_index_page`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `mvc_menu_en`
--
ALTER TABLE `mvc_menu_en`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `mvc_menu_kz`
--
ALTER TABLE `mvc_menu_kz`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `mvc_menu_ru`
--
ALTER TABLE `mvc_menu_ru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `mvc_routes`
--
ALTER TABLE `mvc_routes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `mvc_users`
--
ALTER TABLE `mvc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

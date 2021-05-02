-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2021 г., 14:07
-- Версия сервера: 10.1.44-MariaDB
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
-- Структура таблицы `mvc_company`
--

CREATE TABLE `mvc_company` (
  `id` int(5) NOT NULL,
  `adress_ru` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress_kz` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_company`
--

INSERT INTO `mvc_company` (`id`, `adress_ru`, `adress_kz`, `adress_en`, `phone`, `fax`, `email`) VALUES
(1, 'г. Алматы, ул. Айтеке би, 99', 'Алматы қаласы, Әйтеке би қөшесі 99\r\n\r\n', 'c. Almaty, st. Aiteke bi 99', '8 (727) 233 19 25, 233 18 50', '8 (727) 233 19 25', 'bakit_59@mail.ru');

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
(1, 'About the Library', '/main/index'),
(2, 'E-library', '/main/qq'),
(4, 'New receipt', '/main/qq'),
(7, 'Virtual Exhibition', '/main/index'),
(8, 'Периодические издания', '/main/index'),
(9, 'State symbols', '/main/index');

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
(1, 'Кітапхана туралы', '/main/index'),
(2, 'Электрондық кітапхана', '/main/index'),
(3, 'Жаңа түскен', '/main/qq'),
(16, 'Виртуалды көрме  ', '/main/index'),
(17, 'Периодические издания', '/main/index'),
(18, 'Мемлекеттік рәміздер', '/main/index');

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
(1, 'О библиотеке', '/main/index'),
(7, 'Электронная библиотека', '/main/index'),
(8, 'Новое поступление', '/main/index'),
(9, 'Виртуальная выставка', '/main/index'),
(11, 'Периодические издания', '/main/index'),
(12, 'Государственные символы', '/main/index');

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
(30, 'account/logout', 'account', 'logout'),
(31, 'main/qq', 'main', 'qq'),
(32, 'admin/menu', 'admin', 'menu'),
(33, 'main/zxcvzxcvzxc', 'main', 'zxcvzxcvzxc');

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_submenu_en`
--

CREATE TABLE `mvc_submenu_en` (
  `id` int(5) NOT NULL,
  `menu_id` int(5) DEFAULT NULL,
  `item` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_submenu_en`
--

INSERT INTO `mvc_submenu_en` (`id`, `menu_id`, `item`, `link`) VALUES
(4, 1, 'Scientific Library', '/main/index'),
(5, 1, 'The structure of the scientific library', '/main/index'),
(6, 1, 'List of employees of the scientific library', '/main/index'),
(7, 1, 'Working hours', '/main/index'),
(8, 1, 'Service of the Library', '/main/index'),
(9, 1, 'Contacts', '/main/index'),
(10, 1, 'Photo gallery', '/main/index'),
(11, 1, 'Questions and answers', '/main/index'),
(12, 1, 'Документооборот НБ', '/main/index'),
(13, 1, 'Документы СМК', '/main/index'),
(14, 7, 'Magazines', '/main/index'),
(15, 7, 'Bibliographic pointers', '/main/index'),
(16, 7, 'Ретрофонд', '/main/index'),
(17, 123, 'asD', 'asd'),
(18, 123, 'asd', 'asdf');

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_submenu_kz`
--

CREATE TABLE `mvc_submenu_kz` (
  `id` int(5) NOT NULL,
  `item` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_submenu_kz`
--

INSERT INTO `mvc_submenu_kz` (`id`, `item`, `link`, `menu_id`) VALUES
(4, ' Ғылыми кітапхана тарихы', '/main/index', 1),
(5, 'Ғылыми кітапхана құрылымы', '/main/index', 1),
(6, 'Ғылыми кітапхана қызметкерлерінің құрамы ', '/main/index', 1),
(7, 'Жұмыс кестесі', '/main/index', 1),
(8, 'Кітапхана қызметтері ', '/main/index', 1),
(9, 'Байланыс ақпараты', '/main/index', 1),
(10, 'Фотогалерея', '/main/index', 1),
(11, 'Кітапханашыдан сұра', '/main/index', 1),
(12, 'Ғылыми кітапхананың құжаттама айналымы', '/main/index', 1),
(13, 'Документы СМК', '/main/index', 1),
(14, 'Журналдар', '/main/index', 16),
(15, ' Библиографиялық көрсеткіштер', '/main/index', 16),
(16, 'Ретрофонд', '/main/index', 16);

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_submenu_ru`
--

CREATE TABLE `mvc_submenu_ru` (
  `id` int(5) NOT NULL,
  `item` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_submenu_ru`
--

INSERT INTO `mvc_submenu_ru` (`id`, `item`, `link`, `menu_id`) VALUES
(13, 'История библиотеки', '/main/index', 1),
(14, 'Структура библиотеки', '/main/index', 1),
(15, 'Штат библиотеки', '/main/index', 1),
(16, 'График работы', '/main/index', 1),
(17, 'Услуги библиотеки', '/main/index', 1),
(18, 'Фотогалерея', '/main/index', 1),
(19, 'Документооборот НБ', '/main/index', 1),
(20, 'Документы СМК', '/main/index', 1),
(21, 'Журналы', '/main/index', 9),
(22, 'Библиографические указатели', '/main/index', 9),
(23, 'Ретрофонд', '/main/index', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `mvc_users`
--

CREATE TABLE `mvc_users` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mvc_users`
--

INSERT INTO `mvc_users` (`id`, `user`, `pass`, `role`) VALUES
(1, '123', '123', 0),
(2, 'q1', '123', 1),
(3, 'q2', '123', 2),
(4, 'q', 'q', 1),
(5, 'q3', '123', 1),
(6, 'q4', '123', 1),
(7, 'qq', '123', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `mvc_company`
--
ALTER TABLE `mvc_company`
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
-- Индексы таблицы `mvc_submenu_en`
--
ALTER TABLE `mvc_submenu_en`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mvc_submenu_kz`
--
ALTER TABLE `mvc_submenu_kz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mvc_submenu_ru`
--
ALTER TABLE `mvc_submenu_ru`
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
-- AUTO_INCREMENT для таблицы `mvc_company`
--
ALTER TABLE `mvc_company`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `mvc_menu_en`
--
ALTER TABLE `mvc_menu_en`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `mvc_menu_kz`
--
ALTER TABLE `mvc_menu_kz`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `mvc_menu_ru`
--
ALTER TABLE `mvc_menu_ru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `mvc_routes`
--
ALTER TABLE `mvc_routes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `mvc_submenu_en`
--
ALTER TABLE `mvc_submenu_en`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `mvc_submenu_kz`
--
ALTER TABLE `mvc_submenu_kz`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `mvc_submenu_ru`
--
ALTER TABLE `mvc_submenu_ru`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `mvc_users`
--
ALTER TABLE `mvc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

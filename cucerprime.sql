-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2020 г., 18:42
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cucerprime`
--

-- --------------------------------------------------------

--
-- Структура таблицы `crossbreeding`
--

CREATE TABLE `crossbreeding` (
  `ID horse` int NOT NULL,
  `ID customer` int NOT NULL,
  `Female breed` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `crossbreeding`
--

INSERT INTO `crossbreeding` (`ID horse`, `ID customer`, `Female breed`, `Email`, `Phone`) VALUES
(3, 1, 'Шайр', 'horseman1329@mail.com', '+373-894-94-219'),
(2, 2, 'Ахалтекинец', 'evahazer4160@mail.com', '+373-301-24-156'),
(4, 3, 'Донская', 'surrudesef4862@mail.com', '+373-971-18-927'),
(5, 5, 'Ауксуа', 'elemgeeks@mail.com', '+373-737-85-747');

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `ID horse` int NOT NULL,
  `ID school` int NOT NULL,
  `Age group` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`ID horse`, `ID school`, `Age group`, `Email`, `Phone`) VALUES
(2, 1, '14-18', 'HorseSchool@mail.com', '+373-240-95-314'),
(7, 2, '21-28', 'Zverf3299@mail.com', '+373-147-82-455'),
(4, 3, '8-12', 'luxomopeqi5612@mail.com', '+373-078-98-629'),
(8, 4, '15-17', 'hiqannexyb1329@mail.com', '+373-767-92-049'),
(6, 5, '10-20', 'kindkids23@mail.com', '+373-761-35-369');

-- --------------------------------------------------------

--
-- Структура таблицы `farms`
--

CREATE TABLE `farms` (
  `ID horse` int NOT NULL,
  `ID farm` int NOT NULL,
  `Specialization` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `farms`
--

INSERT INTO `farms` (`ID horse`, `ID farm`, `Specialization`, `Email`, `Phone`) VALUES
(3, 1, 'Молочные и зерновые продукты', 'johnthefarmer@mail.com', '+373-043-12-540'),
(1, 2, 'Птицефабрика', 'xexiselu9832@mail.com', '+373-785-30-546'),
(6, 3, 'Крупный рогатый скот', 'bigchiksanddicks@mail.com', '+373-144-48-249'),
(2, 5, 'Сады и теплицы', 'fruitty1807@mail.com', '+373-640-49-183'),
(3, 10, 'Фрукты и овощи', 'zheka1273@gmail.com', '+373-761-35-369');

-- --------------------------------------------------------

--
-- Структура таблицы `horses`
--

CREATE TABLE `horses` (
  `ID horse` int NOT NULL,
  `Name` text NOT NULL,
  `Weight` float NOT NULL,
  `Growth` float NOT NULL,
  `Speed` float NOT NULL,
  `Age` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `horses`
--

INSERT INTO `horses` (`ID horse`, `Name`, `Weight`, `Growth`, `Speed`, `Age`) VALUES
(1, 'Рубин', 475, 1.5, 60, 5),
(2, 'Вегас', 420, 1.4, 67, 4.5),
(3, 'Мустанг', 1200, 2, 50, 15),
(4, 'Валент', 521, 1.63, 65, 6),
(5, 'Вольт', 450, 1.5, 80, 7),
(6, 'Оствинд', 980, 1.75, 66, 11),
(7, 'Гром', 733, 1.7, 73, 9),
(8, 'Сэнди', 640, 1.55, 70, 21),
(14, 'Арамис', 590, 1.65, 67, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `races`
--

CREATE TABLE `races` (
  `ID horse` int NOT NULL,
  `ID customer` int NOT NULL,
  `Type of race` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `races`
--

INSERT INTO `races` (`ID horse`, `ID customer`, `Type of race`, `Email`, `Phone`) VALUES
(5, 1, 'Гладкий', 'GoodmanDrake4744@mail.com', '+373-761-53-220'),
(1, 2, 'Барьерный', 'Ibethewinner9499@mail.com', '+373-525-04-019'),
(8, 4, 'Стипль-чез', 'ziveriffe3127@mail.com', '+373-883-17-613'),
(6, 5, 'Гладкий', 'exagyti8729@mail.com', '+373-322-16-171'),
(5, 6, 'Стипль-чез\r\n', 'lullissitiz4757@mail.com', '+373-456-85-587'),
(1, 7, 'С препятствиями ', 'kocavurru2052@mail.com', '+373-772-67-915'),
(4, 8, 'Римские колесницы', 'Octavian01@mail.com', '+373-782-25-894');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `crossbreeding`
--
ALTER TABLE `crossbreeding`
  ADD PRIMARY KEY (`ID customer`),
  ADD KEY `ID horse` (`ID horse`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`ID school`),
  ADD KEY `ID horse` (`ID horse`);

--
-- Индексы таблицы `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`ID farm`),
  ADD KEY `ID horse` (`ID horse`);

--
-- Индексы таблицы `horses`
--
ALTER TABLE `horses`
  ADD PRIMARY KEY (`ID horse`);

--
-- Индексы таблицы `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`ID customer`),
  ADD KEY `ID horse` (`ID horse`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `crossbreeding`
--
ALTER TABLE `crossbreeding`
  MODIFY `ID customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `ID school` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `farms`
--
ALTER TABLE `farms`
  MODIFY `ID farm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `horses`
--
ALTER TABLE `horses`
  MODIFY `ID horse` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `races`
--
ALTER TABLE `races`
  MODIFY `ID customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

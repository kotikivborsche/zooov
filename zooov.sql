-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 19 2022 г., 11:52
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zooov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `question`) VALUES
(2, 'Иван Иванов', 'ivanivanov@mail.ru', 'Скока могу купить жрачьбки?'),
(3, 'Вась Вась', 'vasvas@yandex.ru', 'ВАсь Вась Вась?');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(1, 'Не опасны ли бактерии, которые находятся в сыром мясе?', 'У здоровых собак отличная иммунная система, готовая ко всем видам бактерий. Рацион BARF как раз укрепит иммунитет вашей собаки и защитит ее от влияния бактерий, которые находятся на улице или даже в вашем доме.'),
(2, 'Надо ли давать дополнительно витамины к рациону BARF?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(3, 'А если моя собака уже давно питается промышленным кормом и у нее нет проблем со здоровьем?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio.'),
(4, 'Можно ли смешивать натуральный корм и корм промышленного производства?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio.'),
(5, 'Могу ли я сам составить для своей собаки рацион по системе BARF?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(6, 'Присутствует ли в ZOOOV рационах рыба?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(7, 'Как перевести питомца на натуральное питание?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(8, 'Как готовить рацион ZOOOV?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(9, 'При переходе на рацион ZOOOV у собаки начались проблемы с ЖКТ. Это нормально?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(10, 'Тупа тестовый вопрос))000))0)', 'Тупа тестовый ответ Дибл)0)0)');

-- --------------------------------------------------------

--
-- Структура таблицы `ration_asks`
--

CREATE TABLE `ration_asks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `weight` int(3) NOT NULL,
  `age` int(2) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ration_asks`
--

INSERT INTO `ration_asks` (`id`, `name`, `phone`, `weight`, `age`, `message`) VALUES
(2, 'Димасик', '88005553535', 10, 3, 'Нету'),
(3, 'Данечка', '89005674324', 103, 14, 'У меня жырный кот');

-- --------------------------------------------------------

--
-- Структура таблицы `ration_cards`
--

CREATE TABLE `ration_cards` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comp` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `weight` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `gost_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ration_cards`
--

INSERT INTO `ration_cards` (`id`, `title`, `comp`, `description`, `weight`, `picture`, `gost_pic`) VALUES
(1, 'Для взрослых собак', 'Индейка/Говядина', 'Подходит для ежедневного кормления. Богат животными белками и Омега-3.', '700г / 500г / 300г / 150г / 100г', 'card_1.png', 'card_12.png'),
(2, 'Для щенков', 'Индейка/Говядина', 'Подходит для ежедневного кормления. Богат животными белками и Омега-3.', '700г / 500г / 300г / 150г / 100г', 'card_2.png', 'card_12.png'),
(3, 'Для взрослых собак', 'Баранина/Кролик', 'Подходит для ежедневного кормления. Богат животными белками и Омега-3.', '700г / 500г / 300г / 150г / 100г', 'card_3.png', 'card_34.png'),
(4, 'Для щенков', 'Баранина/Кролик', 'Подходит для ежедневного кормления. Богат животными белками и Омега-3.', '700г / 500г / 300г / 150г / 100г', 'card_4.png', 'card_34.png'),
(5, 'Для Вундервафельки', 'Человечина/Человечина', 'Подходит для ежедневного кормления. Богат животными бЕлками и Омега-3.', '700кг / 500кг / 300кг / 150кг / 100кг', 'card_4.png', 'card_34.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ration_asks`
--
ALTER TABLE `ration_asks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ration_cards`
--
ALTER TABLE `ration_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `ration_asks`
--
ALTER TABLE `ration_asks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `ration_cards`
--
ALTER TABLE `ration_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

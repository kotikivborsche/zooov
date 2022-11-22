-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 22 2022 г., 18:40
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
(3, 'Вась Вась', 'vasvas@yandex.ru', 'ВАсь Вась Вась?'),
(4, 'Иван Иванов Васильевич', 'vasilich@rambler.ru', 'Как задать вам вопрос я непонимаю'),
(5, '', 'dsf', 'kioo'),
(6, 'Gutten', 'morgen@mail.ru', 'Who is who?'),
(7, 'Иван Иванов fda', 'sdafsdafasdf@@mail.com', 'afsadfsdfasdf'),
(8, 'Иван Иванов erqer', 'qwerqwer', 'wqerqwer'),
(9, 'Иван Иванов erqerefzsdf', 'qwerqwerdfsdf', 'wqerqwersdfsddfeaf'),
(10, 'asdf', 'asdf', 'asdf'),
(11, 'asdfgg', 'gg', 'ggg'),
(12, 'Иван Иванов ff', 'ff', 'ff'),
(13, 'Иван Иванов', 'dsfg', 'fdgdfs'),
(14, 'Иван Иванов', 'dsfg', 'fdgdfsasdf'),
(15, 'dsfad', 'asdfsda', 'fdgdfsasdfasdfasd'),
(16, 'dsfadsdfads', 'asdfsdasdfa', 'fdgdfsasdfasdfasdasdf'),
(17, 'Иван Ивановgfh', 'dfh', 'dfghdfg'),
(18, 'Иван Ивановgfh', 'dfh', 'dfghdfgvcff'),
(19, 'Иван Ивановgfh', 'dfh', 'dfghdfgvcff'),
(20, 'Иван Иванов', 'y', 'h'),
(21, 'Иван Иванов', 'dfg', 'dfg'),
(22, 'Иван Иванов', 'dfg', 'dfg'),
(23, 'Иван Иванов', 'fgsdf', 'dfg');

-- --------------------------------------------------------

--
-- Структура таблицы `main`
--

CREATE TABLE `main` (
  `id` int(1) NOT NULL,
  `head_text_1` text NOT NULL,
  `head_text_2` text NOT NULL,
  `text` text NOT NULL,
  `phone` varchar(16) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main`
--

INSERT INTO `main` (`id`, `head_text_1`, `head_text_2`, `text`, `phone`, `logo`) VALUES
(1, 'Питание, <br/>которое полюбит<br/>ваш хвостик стопудова)00)', 'Узнали? Согласны? <br/>Натуральные рационы питания для собак<br/>по системе BARF', 'Мы и САМИ не знаем, что это такое... Если бы мы знали, что это такое, но мы не знаем, что это такое... Мы сами владельцы собак и знаем, как важно правильное и качественное питание для долгой и счастливой жизни вашего питомца. Для нас ZOOOV это не просто бизнес, это наш вклад в повышение качества жизни всех собак.', '+7(900)000-00-98', 'cat_logo.png');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `status`, `question`, `answer`) VALUES
(1, 0, 'Не опасны ли бактерии, которые находятся в сыром мясе?', 'У здоровых собак отличная иммунная система, готовая ко всем видам бактерий. Рацион BARF как раз укрепит иммунитет вашей собаки и защитит ее от влияния бактерий, которые находятся на улице или даже в вашем доме.'),
(2, 0, 'Надо ли давать дополнительно витамины к рациону BARF?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(3, 0, 'А если моя собака уже давно питается промышленным кормом и у нее нет проблем со здоровьем?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio.'),
(4, 0, 'Можно ли смешивать натуральный корм и корм промышленного производства?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio.'),
(5, 0, 'Могу ли я сам составить для своей собаки рацион по системе BARF?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(6, 0, 'Присутствует ли в ZOOOV рационах рыба?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(7, 0, 'Как перевести питомца на натуральное питание?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(8, 0, 'Как готовить рацион ZOOOV?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(9, 0, 'При переходе на рацион ZOOOV у собаки начались проблемы с ЖКТ. Это нормально?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente at vero dolorum placeat perferendis repellendus sed ipsa optio. Hic architecto ipsum quas quam iure doloribus amet quisquam nobis beatae ab veritatis velit, minus magni, ea praesentium ducimus eligendi et eveniet molestias esse asperiores! Iure ad expedita porro voluptates voluptatibus iste.'),
(10, 1, 'Тупа тестовый вопрос))000))0)', 'Тупа тестовый ответ Дибл)0)0)'),
(12, 1, 'Lorem?', 'Конечно'),
(15, 1, 'dsffffffffffff', 'asddddddddddddddddsdfffffffffff dsfaa'),
(16, 0, 'Тест', 'Тоже тест');

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
  `message` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ration_asks`
--

INSERT INTO `ration_asks` (`id`, `name`, `phone`, `weight`, `age`, `message`, `status`) VALUES
(2, 'Димасик', '88005553535', 10, 3, 'Нету', 1),
(3, 'Данечка', '89005674324', 103, 14, 'У меня жырный попуг', 1),
(4, 'Дмитрий Алкоголь', '88005654785', 15, 4, 'Любит выбить\r\nЯ тоже люблю', 1),
(5, 'Данила', '88005654789', 1000, 10000, '---------------------\r\n------------------', 0),
(6, 'sadfg', '65476454', 4, 5, 'asdfdsf', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `ration_cards`
--

CREATE TABLE `ration_cards` (
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
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

INSERT INTO `ration_cards` (`id`, `status`, `title`, `comp`, `description`, `weight`, `picture`, `gost_pic`) VALUES
(1, 0, 'Для взрослых собак', 'Индейка/Говядина', 'Подходит для ежедневного кормления. Богат животными белками и Омега-3.', '700г / 500г / 300г / 150г / 100г', 'card_1.png', 'card_12.png'),
(2, 0, 'Для щенков', 'Индейка/Говядина', 'Подходит для ежедневного кормления. Богат животными белками и Омега-3.', '700г / 500г / 300г / 150г / 100г', 'card_2.png', 'card_12.png'),
(3, 0, 'Для взрослых собак', 'Баранина/Кролик', 'Подходит для ежедневного кормления. Богат животными белками и Омега-3.', '700г / 500г / 300г / 150г / 100г', 'card_3.png', 'card_34.png'),
(4, 0, 'Для щенков', 'Баранина/Кролик', 'Подходит для ежедневного кормления. Богат животными белками и Омега-3.', '700г / 500г / 300г / 150г / 100г', 'card_4.png', 'card_34.png'),
(5, 0, 'Для Вундервафельки', 'Человечина/Человечина', 'Подходит для ежедневного кормления. Богат животными бЕлками и Омега-3.', '700кг / 500кг / 300кг / 150кг / 100кг', 'card_4.png', 'card_34.png'),
(13, 1, '-', '-', '-', '-', 'no_image.png', 'no_image.png'),
(15, 0, 'qqqqqqqqqqqq', 'qqqqqqqqqqqqqq', 'qqqqqqqqqqqq', 'qqqqqqqqqqqqqqqqqqqq', 'no_image.png', 'no_image.png'),
(16, 1, 'Тестируем тесты', 'тест', 'стТес ', 'Тест', 'no_image.png', 'no_image.png'),
(17, 0, 'dddddddddddddddddddddd', 'dddddddddddddddddddd', 'ddddddddddddddddddd', 'dddddddddddddddddddddd', 'no_image.png', 'no_image.png'),
(18, 0, 'Для успеха', 'Успешные люди', 'Подходит для экстремально успешного закармливания. Содержит все необходимые жыры.', '6г', 'no_image.png', 'no_image.png'),
(19, 0, 'qwerqwer', 'qwerqwer', 'qwerqwerqwerqwert', 'qwerqwer', 'no_image.png', 'no_image.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `user_type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main`
--
ALTER TABLE `main`
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
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `main`
--
ALTER TABLE `main`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `ration_asks`
--
ALTER TABLE `ration_asks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `ration_cards`
--
ALTER TABLE `ration_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

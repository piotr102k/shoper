-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Lis 2021, 22:40
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `liki`
--

CREATE TABLE `liki` (
  `id` int(10) NOT NULL,
  `likeowane` int(1) NOT NULL,
  `dlikeowane` int(1) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_post` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `liki`
--

INSERT INTO `liki` (`id`, `likeowane`, `dlikeowane`, `id_user`, `id_post`) VALUES
(76, 1, 0, 1, 17),
(78, 1, 0, 3, 22),
(79, 1, 0, 1, 22),
(80, 0, 1, 2, 22),
(81, 0, 1, 2, 21);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `ilolike` int(100) NOT NULL,
  `ilodlike` int(100) NOT NULL,
  `tworca` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `post`
--

INSERT INTO `post` (`id`, `tytul`, `text`, `ilolike`, `ilodlike`, `tworca`) VALUES
(17, 'Ege is a lawyer', 'he is a gae lawyer', 1, 0, 1),
(21, 'f12', 'f1', 0, 1, 1),
(22, 'hasła do kont (w &quot;edit&quot; lepiej widać nwm dlaczego)', 'login: admin\r\nhasło: admin\r\nbrak uprawnien admina\r\n\r\nlogin: uczen\r\nhasło: uczen\r\nuprawnienia admina\r\n\r\nlogin: user\r\nhasło: user\r\nbrak uprawnien admina', 2, 1, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `login` varchar(1000) NOT NULL,
  `haslo` varchar(1000) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `haslo`, `admin`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 0),
(2, 'uczen', '5812ee50a70e63ef00e70b8e4b249192928d46018781f316cc21578941022b0d', 1),
(3, 'user', '04f8996da763b7a969b1028ee3007569eaf3a635486ddab211d512c85b9df8fb', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `liki`
--
ALTER TABLE `liki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `liki`
--
ALTER TABLE `liki`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT dla tabeli `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

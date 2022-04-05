-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Sty 2022, 00:33
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `trener1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwa` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `podzial` text NOT NULL,
  `grupa` text NOT NULL,
  `miejsce` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `image`
--

INSERT INTO `image` (`id`, `image`, `nazwa`, `text`, `podzial`, `grupa`, `miejsce`) VALUES
(72, 'Benchpress.gif', '', '1) Utrzymując prawidłowo pozycje wyjściową, wykonaj wdech i powolnym ruchem opu?? sztang? do ?rodkowej cz??ci klatki piersiowej, uginaj?c ramiona w ?okciach.\r\n\r\n2) Po przytrzymaniu sztangi w okolicach klatki przez u?amek sekundy zacznij unosi? sztang? z powrotem do pozycji wyj?ciowej, wykonuj?c wydech powietrza. Skup si?, aby wyciskanie nast?powa?o z mi??nia piersiowego.\r\n\r\n3) W momencie wyprostowania ramion ze sztang? (unikaj przeprostu\r\n\r\nw ?okciach) mocno dopnij mi?sie? piersiowy, po czym ponownie zacznij opuszcza? sztang?.\r\n\r\n4) Wykonaj wyznaczon? liczb? powt?rze?.', 'Wielostowawe', 'klatka', ''),
(73, 'rozpietki.gif', '', 'Wypychanie przed siebie\r\nPrzywodzenie i opuszczenie ramienia\r\nPrzyci?ganie ?opatki do przodu\r\nOdwiedzenie ramienia do ?rodka i do zewn?trz\r\nRozpi?tki przy u?yciu oboj?tnie jakich narz?dzi treningowych to ?wiczenie izolowane rozci?gaj?ce mi??nie klatki piersiowej. Podczas ruchu klatka piersiowa jest mocno spinana i rozci?gana. Jest to znakomite ?wiczenie, kt?re mo?e pe?ni? funkcj? rozgrzewki, przed treningiem klatki piersiowej.', 'Izolacyjne', 'klatka', ''),
(74, 'Arnold Press - Shoulder Workouts _ Professional Bodybuilding.png', '', 'Arnoldki', 'Wielostowawe', 'barki', ''),
(75, 'Standing Dumbbell Curls Bicep Exercise _ professionalbodybuilding_xyz.gif', '', 'wznosy', 'Izolacyjne', 'barki', ''),
(76, 'Chest Dips _ Triceps Dips _ Weighted Parallel Bar Dips.gif', '', 'Dips', 'Wielostowawe', 'ramiona', ''),
(77, 'Workouts to Prepare You for the CPAT_ The Fire Department Physical Ability Test - Breaking Muscle (1).jpg', '', 'podciaganie na biceps', 'Wielostowawe', 'ramiona', ''),
(78, 'Standing Dumbbell Curls Bicep Exercise _ professionalbodybuilding_xyz.gif', '', 'uginanie', 'Izolacyjne', 'ramiona', ''),
(79, 'Standing Calf Raises - Professional Bodybuilding Exercise for Legs.gif', 'Uginanie Lydek', 'lydki', 'Izolacyjne', 'nogi', ''),
(80, 'Leg Press _ Professional Bodybuilding.gif', 'Wypychanie nog na maszynie', 'suwnica', 'Wielostowawe', 'nogi', ''),
(82, 'Dumbbell Rows - Exercise for Deltoid, Biceps, Trapezius Strengthening_.gif', '', 'wioslowanie', 'Wielostowawe', 'plecy', ''),
(83, 'Bent Over Rear Deltoid Raise _ Exercise Guides & Bodybuilding Tips.gif', '', 'odwrotne rozpietki', 'Izolacyjne', 'plecy', ''),
(84, '', '', '', '', '', ''),
(86, 'rozpietki.gif', '', 'asdas', 'Wielostowawe', 'klatka', 'barki'),
(87, 'Seated Cable Rows _ Top Bodybuilding Exercise for Bigger Back Muscles _.gif', '', 'asdasd', 'Izolacyjne', 'plecy', 'ramiona'),
(88, 'rozpietki.gif', '', 'SDADS', 'Wielostowawe', 'ramiona', 'HOME'),
(89, 'Machine Bench Press - Chest Workouts - Professional Bodybuilding.gif', '', 'asdasd', 'Izolacyjne', 'barki', 'HOME'),
(91, 'Overhead Squat.png', 'Przysiad', 'asdas', 'Wielostowawe', 'klatka', 'GYM'),
(92, 'Triceps Pushdown with Cable _ Triceps Cable Pressdowns.gif', 'Wyciag gorny triceps', 'Uginanie ramion pod katem porstym 90- stopni', 'Izolacyjne', 'ramiona', 'GYM');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klient` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `id_trenera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klient`, `user`, `haslo`, `email`, `imie`, `nazwisko`, `id_trenera`) VALUES
(31, 'trenuje', '$2y$10$OsPExpdJbNeiz2HYdPST9uOaOhVWJiWqmKjZW4sDEXc86IAuvBxUG', 'treneuje@wp.pl', 'pawel', 'pawel', NULL),
(33, 'adam123', '$2y$10$k57.iUt829V13d3MuJiQ/eZpHBmIqRUgK8kIUd6z/sejI1VqfBzyK', '123222@wp.pl', 'ada', 'ada', NULL),
(34, 'pawel', '$2y$10$BGZzRY9nJea7bAn4b9RIK.wiuGF4dwbqb8ENmYyrJbngW.mumCEjO', 'pawel@wp.pl', 'pawel', 'pawel', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient_cwiczenie`
--

CREATE TABLE `klient_cwiczenie` (
  `id_Klient_cwiczenie` int(11) NOT NULL,
  `id_klient` int(11) NOT NULL,
  `id_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `id` int(11) NOT NULL,
  `nick` text COLLATE utf8_polish_ci NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `opinie`
--

INSERT INTO `opinie` (`id`, `nick`, `tresc`, `data`) VALUES
(43, 'Dawid', 'Jest git dobrze robią xD', '2021-12-11'),
(45, 'Dawid', 'Jest git dobrze robią xD', '2021-12-11'),
(46, 'Dawid', 'Jest git dobrze robią xD', '2021-12-11'),
(48, 'Dawid', 'Jest git dobrze robią xD', '2021-12-11'),
(49, 'białko', 'aplickajca fajna jest git', '2021-12-12'),
(52, 'anonin', 'Aplikacja interowa', '2021-12-15'),
(57, '', '', '2021-12-20'),
(58, 'Adrian', 'Super!!!\r\nProsze o dodanie ćwiczeń brzucha!!!', '2022-01-03');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `trener`
--

CREATE TABLE `trener` (
  `id_trenera` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `trener`
--

INSERT INTO `trener` (`id_trenera`, `user`, `haslo`, `email`, `imie`, `nazwisko`) VALUES
(5, '123', '$2y$10$2Ai9X76lUN8yHs5sc6Ak2u5Dc9gHRybj4cJcNdDWyYO.jNvH.SJTu', '123@wp.pl', '123', '123'),
(6, '1234', '$2y$10$PISBvlWHBoVhha9i65r6uejronyr/GnGw6gxC/oNzCURCnUWf/y0e', '1234@wp.pl', 'daw', 'daw'),
(7, '12345', '$2y$10$FzhKWO7F/wieoB0bh2jFGOjVzbrbyMTVzX81VCWSKIKCJyLOKR6Oe', '12345@wp.pl', '123', '123'),
(8, '123455', '$2y$10$G/eprWvR5RNgRBblM5z7Pemr0LWlN5KYd9b1SqAvScpLtcqYvt1F6', '123455@wp.pl', '123', '123'),
(9, '', '', '', '', ''),
(10, '1234555', '$2y$10$msp6t8GjehMCVnJ5Njita.h5eG2hlTYKv52/RIz5JB1BQlMmJFbVW', '1234555@wp.pl', '123', '123'),
(11, 'qwerty', '$2y$10$Nzk0wxwhw2KnNoCmZVWKxu2Ll70EtPopBqIXIhU0YSi9rvHpHoGna', 'qwerty@wp.pl', 'qwerty', 'qwerty');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klient`),
  ADD KEY `klienci_ibfk_1` (`id_trenera`);

--
-- Indeksy dla tabeli `klient_cwiczenie`
--
ALTER TABLE `klient_cwiczenie`
  ADD PRIMARY KEY (`id_Klient_cwiczenie`),
  ADD KEY `id_klient` (`id_klient`,`id_image`);

--
-- Indeksy dla tabeli `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `trener`
--
ALTER TABLE `trener`
  ADD PRIMARY KEY (`id_trenera`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT dla tabeli `trener`
--
ALTER TABLE `trener`
  MODIFY `id_trenera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD CONSTRAINT `klienci_ibfk_1` FOREIGN KEY (`id_trenera`) REFERENCES `trener` (`id_trenera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

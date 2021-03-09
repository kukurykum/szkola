-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Gru 2020, 13:59
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `formaty`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `formaty`
--

CREATE TABLE `formaty` (
  `nazwa` text NOT NULL,
  `tekst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `formaty`
--

INSERT INTO `formaty` (`nazwa`, `tekst`) VALUES
('25622', 'ghu'),
('gif', 'GIF\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
('jpg', 'prace nad standardem zaczęły się w 1983 roku. Został jednak oficjalnie opublikowany dopiero w 1992 roku.\r\n<br><br>\r\njpeg jest alorytmem kompresji stranej grafiki rastrowej.\r\n<br><br>\r\nhierarchiczny typ kompresji pozawala na zapis w jedny pliku tego samego obrazu jako sekwencji kadrów o różnych rozdzielczościach. Umożliwia to szybki podgląd bez długo trwającej dekompresji obrazu - ma to zastosowanie np. w fotografii cyfrowej.\r\n<br><br>\r\npliki jpg niestety nie pozwalają zapisywać elementów transparętnych. W tym celu  lepiej skorzysać z możliwośći jakie daje nam format png. (ciekwostka JPEG2000 ma wsparcie dla transparentnośći lecz jest to zupełnie inny format, a nie rozszerzenie oryginalnego formatu JPEG).\r\n<br><br>\r\njpg nie obsulguje animacji, lepiej do tego użyć formatu gif.\r\n<br><br>\r\npliki dzięki kompresji zachowują znacznie mniejsze rozmiary, a przy relatynie niskiej kompresji pliki ważą znacznie mniej, a nie tracą aż tak na jakości.'),
('png', 'PNG\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when \r\nlooking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'),
('svg', 'SVG\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `formaty`
--
ALTER TABLE `formaty`
  ADD PRIMARY KEY (`nazwa`(10));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

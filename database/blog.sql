-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 27 Mar 2014, 20:25
-- Wersja serwera: 5.5.21-log
-- Wersja PHP: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `blog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_polish_ci NOT NULL,
  `content` text COLLATE utf8_polish_ci NOT NULL,
  `excerpt` text COLLATE utf8_polish_ci NOT NULL,
  `author` text COLLATE utf8_polish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=12 ;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `excerpt`, `author`, `date`) VALUES
(10, 'KaczyÅ„ski w kontekÅ›cie Ukrainy pyta o nasz patriotyzm', '<p>&ndash; PowinniÅ›my mieÄ‡ nowoczesnÄ… armiÄ™, ale powinniÅ›my mieÄ‡ takÅ¼e Å¼oÅ‚nierzy, kt&oacute;rzy sÄ… gotowi poÅ›wiÄ™caÄ‡ siÄ™ dla ojczyzny &ndash; m&oacute;wiÅ‚ w Å›rodÄ™ w Sejmie JarosÅ‚aw KaczyÅ„ski. I, jak p&oacute;Åºniej tÅ‚umaczyÅ‚, chodziÅ‚o mu nie tyle o morale Wojska Polskiego, co o gotowoÅ›Ä‡ zwykÅ‚ych Polak&oacute;w do wyrzeczeÅ„ na rzecz swojego kraju.<br />&nbsp;</p><p>JAROSÅAW KACZYÅƒSKI<br />W Polsce sÄ… wyniki badaÅ„, Å¼e 41 proc. Polak&oacute;w nie jest gotowych niczego poÅ›wiÄ™ciÄ‡ dla Polski. SÄ… w Polsce celebryci, kt&oacute;rzy m&oacute;wiÄ…, Å¼e jeÅ¼eli zacznie siÄ™ coÅ› niebezpiecznego, to zniknÄ… z Polski.</p><p><br />Dlatego teÅ¼ prezes nawoÅ‚ywaÅ‚, by wobec narastajÄ…cego zagroÅ¼enia ze strony Rosji odbudowaÄ‡ w Polsce poczucie&nbsp;patriotyzmu. &ndash; Musimy byÄ‡ silniejsi w sferze moralnej &ndash; apelowaÅ‚ KaczyÅ„ski. Czy jego diagnoza jest sÅ‚uszna? Czy przykÅ‚ad UkraiÅ„c&oacute;w, kt&oacute;rzy oddawali na Majdanie Å¼ycie walczÄ…c o wolnoÅ›Ä‡ swojego kraju, powinien staÄ‡ siÄ™ dla nas wstrzÄ…sem?<br /><br /><strong>Patriotyzm sondaÅ¼owy?</strong><br />Kiedy prezes KaczyÅ„ski m&oacute;wiÅ‚ w swoim wystÄ…pieniu o celebrytach, z caÅ‚Ä… pewnoÅ›ciÄ… miaÅ‚ na myÅ›li MariÄ™ Peszek (autorkÄ™ piosenki &ldquo;Sorry Polsko&rdquo;) i jej sÅ‚owa z jednego z wywiad&oacute;w:<br />&nbsp;</p><p>MARIA PESZEK<br />Gdyby moja ojczyzna popadÅ‚a w jakieÅ› tarapaty, myÅ›lÄ™ tu o sytuacji zbrojnej, to ja natychmiast zostajÄ™ dezerterem. Nie zostajÄ™ sanitariuszkÄ…, nie schodzÄ™ do kanaÅ‚u. Pierwsza rzecz, jakÄ… robiÄ™, to spier****m po prostu.</p><p><br />&ndash; Niech Maria Peszek sobie Å›piewa co chce. Nie moÅ¼na na tej podstawie wnioskowaÄ‡ o patriotyzmie Polak&oacute;w &ndash; irytuje siÄ™ przewodniczÄ…cy sejmowej komisji Obrony Narodowej Stefan NiesioÅ‚owski. Dodaje teÅ¼, Å¼e &ldquo;wsp&oacute;Å‚czesna szkoÅ‚a patriotyzmu nie polega na gÅ‚oÅ›nym krzyczeniu precz z Putinem&rdquo;.&nbsp;<br />&ndash; Patriotyzm to codzienna praca dla Polski, a nie konkurs polegajÄ…cy na tym, kto odwaÅ¼niej zadeklaruje, Å¼e byÅ‚by w stanie zginÄ…Ä‡ za ojczyznÄ™. Takie deklaracje nic nie znaczÄ… &ndash; twierdzi NiesioÅ‚owski.</p><p>Å¹r&oacute;dÅ‚o:<a href="http://natemat.pl/94167,sorry-polsko-czy-kamienie-na-szaniec-kaczynski-w-kontekscie-ukrainy-pyta-o-nasz-patriotyzm">&nbsp;http://natemat.pl/94167,sorry-polsko-czy-kamienie-na-szaniec-kaczynski-w-kontekscie-ukrainy-pyta-o-nasz-patriotyzm</a></p>', '', 'user', '2014-03-07 17:07:16'),
(11, 'Niszczyciel USA juÅ¼ na Morzu Czarnym. Ale rakiety!', '<p>Niszczyciel USS Truxtun minÄ…Å‚ cieÅ›ninÄ™ Dardanele, Morze Marmara i&nbsp;cieÅ›ninÄ… Bosfor po czym wpÅ‚ynÄ…Å‚ na Morze Czarne. Amerykanie przekonujÄ…, Å¼e to rutynowy rejs.</p><p>Z&nbsp;bazy Souda na Krecie okrÄ™t wyruszyÅ‚ 6 marca.&nbsp;<br /><br />OkrÄ™t uzbrojony jest w&nbsp;rakiety samonaprowa&shy;dza&shy;jÄ…&shy;ce systemu AEGIS. Jego zadaniem jest ochrona przeciwlot&shy;ni&shy;cza i&nbsp;przeciwrakie&shy;to&shy;wa obszaru dziaÅ‚aÅ„ floty. SÅ‚uÅ¼y takÅ¼e do niszczenia cel&oacute;w nawodnych i&nbsp;podwodnych.</p>', '', 'user', '2014-03-07 17:09:32');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `content` text COLLATE utf8_polish_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=37 ;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `content`, `author`, `date`, `active`) VALUES
(28, 11, ' 11', '11', '2014-03-14 14:10:33', 1),
(29, 11, ' 22', '22', '2014-03-14 14:12:42', 1),
(30, 10, '10 ', '10', '2014-03-14 14:12:54', 1),
(31, 11, ' obrazliwy komentarz', 'heheh', '2014-03-14 14:18:44', 1),
(32, 11, 'lubie szafta ', 'szaft', '2014-03-14 14:40:02', 1),
(33, 11, ' 2341123412342342341', '1234234234', '2014-03-14 14:41:10', 1),
(34, 11, ' 1111111111111', '11111', '2014-03-14 14:42:35', 1),
(35, 11, ' 11111111111', '11111111', '2014-03-14 14:44:17', 1),
(36, 10, ' testowy na 10', 'testowy na 10', '2014-03-27 19:24:22', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments2`
--

CREATE TABLE IF NOT EXISTS `comments2` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `content` text COLLATE utf8_polish_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `comments2`
--

INSERT INTO `comments2` (`id`, `article_id`, `content`, `author`, `date`, `active`) VALUES
(0, 13, 'Hhehe wojna', 'Wojna', '2014-03-14 13:26:49', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `moderator` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `active`, `moderator`) VALUES
(1, 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'Administrator', '', 'admin@admin.pl', 1, 1),
(2, 'karol', 'f9b84a4e15aaed226618dbb267ff6a65', 'karol', '', 'karlososhd@gmail.com', 1, 0),
(3, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Testowy', '', 'user@user.pl', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

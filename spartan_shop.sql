-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mai 2018 la 19:36
-- Versiune server: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spartan_shop`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `categori`
--

CREATE TABLE `categori` (
  `id` int(11) NOT NULL,
  `nume` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `categori`
--

INSERT INTO `categori` (`id`, `nume`) VALUES
(1, 'Echipament'),
(2, 'Arme'),
(3, 'Lupte'),
(4, 'MMA'),
(5, 'Saltele'),
(6, 'Promotii');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `cos`
--

CREATE TABLE `cos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `produs_id` int(11) NOT NULL,
  `cantitate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `produse`
--

CREATE TABLE `produse` (
  `id` int(11) NOT NULL,
  `nume_produs` varchar(50) NOT NULL,
  `producator` varchar(50) NOT NULL,
  `pret` float NOT NULL,
  `caracteristici` text NOT NULL,
  `detalii_tehnice` text NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `stoc` int(11) NOT NULL,
  `poza_nume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `produse`
--

INSERT INTO `produse` (`id`, `nume_produs`, `producator`, `pret`, `caracteristici`, `detalii_tehnice`, `categorie_id`, `stoc`, `poza_nume`) VALUES
(1, 'Katana', 'SPARTAN SHOP', 99, 'Este o sabie moderna de practicare a artelor martiale. Curbata, usoara, cu o singura lama, cu garda de forma circulara sau patrata, si cu manerul destul de lung pentru a putea fi tinut cu ambele maini. Vine insotita cu o teaca neagra. Ito-ul de pe maner ii da un aspect traditional japonez.', 'Lungime: 107 cm.', 2, 31, 'images\\database_img\\arme\\1.jpg'),
(2, 'Tanto', 'SPARTAN SHOP', 43, 'Este una dintre sabiile japoneze traditionale ( nihonto ) purtate de clasa samurai a Japoniei feudale. Tanto dateaza din perioada Heian, cand a fost folosita in principal ca arma.', 'Este confectionata din maner de lemn si lama metalica', 2, 13, 'images\\database_img\\arme\\2.jpg'),
(3, 'Nunchaku Negru', 'SPARTAN SHOP', 69, 'Arma  formata din doua bastoane conectate la un capat printr-un lant sau o franghie scurta. Nunchaku este cel mai utilizat in artele martiale, cum ar fi Okinawan kobuda si karate , si este folosit ca o arma de antrenament, deoarece permite dezvoltarea miscarilor mai rapide ale mainilor si imbunatateste postura.', 'Lungime segment  31 cm.', 2, 19, 'images\\database_img\\arme\\3.jpg'),
(4, 'Nunchaku Rosu', 'SPARTAN SHOP', 76, 'Arma  formata din doua bastoane conectate la un capat printr-un lant sau o franghie scurta. Nunchaku este cel mai utilizat in artele martiale, cum ar fi Okinawan kobuda si karate , si este folosit ca o arma de antrenament, deoarece permite dezvoltarea miscarilor mai rapide ale mainilor si imbunatateste postura.', 'Lungime segment  31 cm.', 2, 22, 'images\\database_img\\arme\\4.jpg'),
(5, 'Sai', 'SPARTAN SHOP', 119, 'Este o arma traditionala folosita in Okinawa. Forma de baza a armei este cea a unui pumnal cu doua varfuri curbate (yoku) care ies din maner (tsuka). De regula se foloseste in perechi, cate unul in fiecare mana.', 'Lungime: S 46 cm, M 50 cm, L 55 cm', 2, 19, 'images\\database_img\\arme\\5.jpg'),
(6, 'Stele ninja cauciuc', 'SPARTAN SHOP', 12, 'Arme suplimentare pentru sabie sau diverse alte arme intr-un arsenal de samurai folosite inca din perioada feudala a Japoniei. Destinatia lor era de a distrage atentia adversarului.', 'Sunt confectionate din cauciuc.', 2, 99, 'images\\database_img\\arme\\6.jpg'),
(7, 'Sabie Cauciuc', 'SPARTAN SHOP', 35, 'Arma folosita pentru practicarea tehnicilor la antrenament.', 'Este confectionataa din polipropilena. Lungime: 86 cm.', 2, 51, 'images\\database_img\\arme\\7.png'),
(8, 'Kimono Judo', 'Adidas', 180, 'Noul kimono Champion II este conform cu noile reguli IJF. Creat pentru sportivi puternici care concureaza  atat in competitii nationale cat si in cele internationale.', 'Croi imbunatatit, in special in zona axilelor pentru a reduce posibilitatea  adversarului de prindere. Este confectionat din 75% bumbac, 25% poliester la jacheta si 100% bumbac la pantaloni.', 1, 15, 'images\\database_img\\echipament\\1.jpg'),
(9, 'Kimono Karate', 'Adidas', 34, 'Kimono creat special atat pentru proba de kumite cat si pentru kata, fiind ideal pentru antrenament dar si pentru competitii. Ofera o ventilatie optima si regleaza temperatura si perspiratia datorita materialului de eficienta inalta care optimizeaza performanta.', 'Material de aproximativ 280 gr/m2, 60% poliester - 40% bumbac. Croi lucrat pentru a permite sportivului sa execute tehnicile in viteza si forta.', 1, 40, 'images\\database_img\\echipament\\2.jpg'),
(10, 'Sort Adidas', 'Adidas', 24, 'Sort Adidas creat special pentru practicantii de box, indiferent de nivelul lor de pregatire (incepatori, avansati, etc).', 'Material poliester flexibil, placut si aerisit. Este prevazut cu centura elastica.', 1, 78, 'images\\database_img\\echipament\\3.jpg'),
(11, 'Sac de box', 'SPARTAN SHOP', 120, 'Echipament pentru antrenamentele de box si arte martiale. Acest sac nu este plin dar este prevazut cu fermoar in partea de sus pentru a permite utilizatorului sa il umple.', 'Este confectionat din piele de vaca de cea mai buna calitate.Dimensiuni: 150 cm x 35 cm ;', 3, 34, 'images\\database_img\\lupte\\1.jpg'),
(12, 'Manusi Energy', 'Adidas', 84, 'Manusi de Box confectionate din material foarte rezistent PU la exterior cu efect unic \"Carbon\", material lucios care ofera un aspect foarte modern.', 'In interiorul palmei sunt captusite cu tafta. Inchidere ferma, rigida datorita faptului ca este tunata dint-o singura bucata, cu manseta si scai.', 3, 61, 'images\\database_img\\lupte\\2.jpg'),
(13, 'Casca Training', 'Adidas', 109, 'Aceasta casca a fost conceputa pentru sportivii de performanta pentru a le asigura o cat mai buna protectie in timpul antrenamentelor sau a competitilor.', 'Casca confectionata din piele de vaca de inalta calitate, captusita la interior cu material tehnologia I-CONFORT cu uscare rapida si anti-alunecare.', 3, 19, 'images\\database_img\\lupte\\3.jpg'),
(14, 'Ghete Combat', 'Adidas', 60, 'Incaltaminte creata pentru a indeplini cerintele sportivilor atat la antrenament cat si in competitii. Dungile laterale TPU  au dublu rol, sustin partea de sus a ghetei dar ofera si un aspect placut.', 'Incaltari confectionate din piele de caprioara si material Clima Cool care asigura un control optim asupra transpiratiei si maxim de confort pentru meciuri de lunga durata.', 4, 43, 'images\\database_img\\mma\\1.jpg'),
(15, 'Ghiozdan Military', 'Adidas', 42, 'Model si imagine concepute special pentru arte martiale si sporturi de contact. Acest ghiozdan a fost conceput pentru a satisfice cererile tuturor practicantilor acestor sporturi.', 'Acest ghiozdan unic are la exterior material rezistent \"PES\" pentru a permite incarcarea cu echipamentele necesare.', 4, 61, 'images\\database_img\\mma\\2.jpg'),
(16, 'Manusi Sac', 'Adidas', 50, 'Manusi Adidas realizate special pentru loviturile la sac, pentru antrenamente intensive. Create pentru a optimiza forta si performanta in antrenamentul unui sportiv, indiferent de nivelul acestuia de performanta.', 'Manusi confectionate din piele de bivol la exterior si PU in interior. Umplutura din spuma turnata preformata care ofera un nivel ridicat de absorbtie a socului produs de lovituri.', 4, 41, 'images\\database_img\\mma\\3.png'),
(17, 'Tatami', 'SPARTAN SHOP', 32, 'Partea de la suprafata are un model striat care impiedica alunecarea. Este o suprafata care izoleaza termic astfel ca se poate lucra pe ea indiferent de anotimp.', '1m x 1m x 2cm duritate 35+-2% Tatami de calitate superioara confectionat din material de ultima generatie.', 5, 542, 'images\\database_img\\saltele\\1.png'),
(18, 'Palmar Curbat', 'SPARTAN SHOP', 12, 'Palmarul este conceput special pentru antrenament, ideal pentru exersarea tehnicilor de brate si picioare.', 'Materialul exterior PU. Palma este confectionata din material fin, confortabil. Interior din spuma EVA care asigura o absorbtie ridicata a socului produs de lovituri, cu bare PolyFlex.', 6, 321, 'images\\database_img\\promotii\\1.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `useri`
--

CREATE TABLE `useri` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `adress` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `useri`
--

INSERT INTO `useri` (`id`, `email`, `password`, `full_name`, `adress`, `phone`, `country`, `admin`) VALUES
(1, 'pnkrack@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'Vlad John', 'Str G. Cosbuc 39 49 Academia Tehnica Militara', '0762423975', 'romania', 0),
(2, 'vlad@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', 'Vlad Alin', 'Str G. CoÈ™buc 39 49 Academia Tehnica Militara', '0762423975', 'rep_moldova', 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `produs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `produs_id`) VALUES
(1, 1, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `produs_id` (`produs_id`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Indexes for table `useri`
--
ALTER TABLE `useri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `produs_id` (`produs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `cos`
--
ALTER TABLE `cos`
  ADD CONSTRAINT `cos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `useri` (`id`),
  ADD CONSTRAINT `cos_ibfk_2` FOREIGN KEY (`produs_id`) REFERENCES `produse` (`id`);

--
-- Restrictii pentru tabele `produse`
--
ALTER TABLE `produse`
  ADD CONSTRAINT `produse_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categori` (`id`);

--
-- Restrictii pentru tabele `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `useri` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`produs_id`) REFERENCES `produse` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

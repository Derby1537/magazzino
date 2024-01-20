-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 20, 2024 alle 12:44
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 7.4.29
-- Gabriele Dell'Erba

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazzino`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` bigint(20) NOT NULL,
  `nome_prodotto` varchar(30) NOT NULL,
  `giacenza` int(11) NOT NULL,
  `prezzo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `nome_prodotto`, `giacenza`, `prezzo`) VALUES
(1, 'IPhone 15', 0, 900),
(2, 'iPhone 12', 6, 600),
(4, 'MacBook Pro', 9, 2500),
(8, 'Tastiera', 293, 20),
(9, 'Penna blu', 691, 1),
(11, 'Acqua 2L', 60, 0.3),
(12, 'Controller PS5', 48, 70),
(13, 'iPhone 14', 80, 800),
(14, 'iPhone 15', 40, 900),
(15, 'Penna rossa', 300, 1),
(16, 'iPhone 15 pro max', 8, 1500);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

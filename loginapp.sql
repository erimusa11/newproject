-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2019 at 01:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(100) NOT NULL,
  `adminMail` varchar(350) NOT NULL,
  `adminPasword` varchar(350) NOT NULL,
  `adminNome` varchar(350) NOT NULL,
  `adminCognome` varchar(350) NOT NULL,
  `adminRagione` varchar(350) NOT NULL,
  `adminIndirizzo` varchar(600) NOT NULL,
  `adminTelefono` int(100) NOT NULL,
  `adminPatritaIva` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminMail`, `adminPasword`, `adminNome`, `adminCognome`, `adminRagione`, `adminIndirizzo`, `adminTelefono`, `adminPatritaIva`) VALUES
(1, 'beni@hotmail.com', 'beni12', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `start_event` int(11) NOT NULL,
  `end_event` int(11) NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obbiettivi_strategici`
--

CREATE TABLE `obbiettivi_strategici` (
  `obbiettiviId` int(11) NOT NULL,
  `obbiettivi` text NOT NULL,
  `obbiettiviTipo` varchar(30) NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obbiettivi_strategici`
--

INSERT INTO `obbiettivi_strategici` (`obbiettiviId`, `obbiettivi`, `obbiettiviTipo`, `userId`) VALUES
(1, 'dvdvd', 'Finanziari', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opportunita`
--

CREATE TABLE `opportunita` (
  `opportunitaId` int(100) NOT NULL,
  `opportunita` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problemi_strategici`
--

CREATE TABLE `problemi_strategici` (
  `problemiId` int(11) NOT NULL,
  `problemi` varchar(100) NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problemi_strategici`
--

INSERT INTO `problemi_strategici` (`problemiId`, `problemi`, `userId`) VALUES
(4, 'ewff', 2),
(5, 'fsfes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `punti_deboli`
--

CREATE TABLE `punti_deboli` (
  `deboliId` int(100) NOT NULL,
  `deboli` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `punti_di_forza`
--

CREATE TABLE `punti_di_forza` (
  `forzaId` int(100) NOT NULL,
  `forza` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punti_di_forza`
--

INSERT INTO `punti_di_forza` (`forzaId`, `forza`, `userId`) VALUES
(1, 'fddgd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rischi`
--

CREATE TABLE `rischi` (
  `rischiId` int(100) NOT NULL,
  `rischi` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `strategia_generale`
--

CREATE TABLE `strategia_generale` (
  `strategiaId` int(100) NOT NULL,
  `strategia` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strategia_generale`
--

INSERT INTO `strategia_generale` (`strategiaId`, `strategia`, `userId`) VALUES
(1, 'fwfewfw', 2),
(2, 'fsefs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `swotSelect`
--

CREATE TABLE `swotSelect` (
  `idSelect` int(11) NOT NULL,
  `DataSelect` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `useId` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `userpasword` varchar(100) NOT NULL,
  `Nome` varchar(300) NOT NULL,
  `Cognome` varchar(300) NOT NULL,
  `ragione` varchar(300) NOT NULL,
  `indirizzo` varchar(300) NOT NULL,
  `telefono` int(100) NOT NULL,
  `partita_iva` varchar(300) NOT NULL,
  `adminId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`useId`, `username`, `userpasword`, `Nome`, `Cognome`, `ragione`, `indirizzo`, `telefono`, `partita_iva`, `adminId`) VALUES
(1, 'erimusa@gmail.com', 'eri12', 'Alban', 'Musa', 'Albania', 'Aleksander Goga', 692359162, 'VAdas4f4445', 1),
(2, 'mario@gmail.com', 'mario', 'Mzrio', 'Monti', 'Germany', 'Mambi', 25454555, 'sf4455', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_missione`
--

CREATE TABLE `user_missione` (
  `missioneId` int(100) NOT NULL,
  `missione` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_missione`
--

INSERT INTO `user_missione` (`missioneId`, `missione`, `userId`) VALUES
(1, 'r4rewrw', 1),
(2, 'wr4wr4wr', 1),
(3, 'wr', 1),
(4, 'wrw4rw', 1),
(5, 'rwr4wrw', 1),
(6, 'wrwrwrw', 1),
(7, 'gegege', 1);

-- --------------------------------------------------------

--
-- Table structure for table `valori_fondamentali`
--

CREATE TABLE `valori_fondamentali` (
  `valoriId` int(100) NOT NULL,
  `valori` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vantaggi_competitivi`
--

CREATE TABLE `vantaggi_competitivi` (
  `vantaggiId` int(100) NOT NULL,
  `vantaggi` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visioni`
--

CREATE TABLE `visioni` (
  `visioneId` int(100) NOT NULL,
  `visione` text NOT NULL,
  `userId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `obbiettivi_strategici`
--
ALTER TABLE `obbiettivi_strategici`
  ADD PRIMARY KEY (`obbiettiviId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `opportunita`
--
ALTER TABLE `opportunita`
  ADD PRIMARY KEY (`opportunitaId`);

--
-- Indexes for table `problemi_strategici`
--
ALTER TABLE `problemi_strategici`
  ADD PRIMARY KEY (`problemiId`);

--
-- Indexes for table `punti_deboli`
--
ALTER TABLE `punti_deboli`
  ADD PRIMARY KEY (`deboliId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `punti_di_forza`
--
ALTER TABLE `punti_di_forza`
  ADD PRIMARY KEY (`forzaId`);

--
-- Indexes for table `rischi`
--
ALTER TABLE `rischi`
  ADD PRIMARY KEY (`rischiId`);

--
-- Indexes for table `strategia_generale`
--
ALTER TABLE `strategia_generale`
  ADD PRIMARY KEY (`strategiaId`);

--
-- Indexes for table `swotSelect`
--
ALTER TABLE `swotSelect`
  ADD PRIMARY KEY (`idSelect`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`useId`);

--
-- Indexes for table `user_missione`
--
ALTER TABLE `user_missione`
  ADD PRIMARY KEY (`missioneId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `valori_fondamentali`
--
ALTER TABLE `valori_fondamentali`
  ADD PRIMARY KEY (`valoriId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `vantaggi_competitivi`
--
ALTER TABLE `vantaggi_competitivi`
  ADD PRIMARY KEY (`vantaggiId`);

--
-- Indexes for table `visioni`
--
ALTER TABLE `visioni`
  ADD PRIMARY KEY (`visioneId`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `obbiettivi_strategici`
--
ALTER TABLE `obbiettivi_strategici`
  MODIFY `obbiettiviId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opportunita`
--
ALTER TABLE `opportunita`
  MODIFY `opportunitaId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problemi_strategici`
--
ALTER TABLE `problemi_strategici`
  MODIFY `problemiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `punti_deboli`
--
ALTER TABLE `punti_deboli`
  MODIFY `deboliId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `punti_di_forza`
--
ALTER TABLE `punti_di_forza`
  MODIFY `forzaId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rischi`
--
ALTER TABLE `rischi`
  MODIFY `rischiId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `strategia_generale`
--
ALTER TABLE `strategia_generale`
  MODIFY `strategiaId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `swotSelect`
--
ALTER TABLE `swotSelect`
  MODIFY `idSelect` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `useId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_missione`
--
ALTER TABLE `user_missione`
  MODIFY `missioneId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `valori_fondamentali`
--
ALTER TABLE `valori_fondamentali`
  MODIFY `valoriId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vantaggi_competitivi`
--
ALTER TABLE `vantaggi_competitivi`
  MODIFY `vantaggiId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visioni`
--
ALTER TABLE `visioni`
  MODIFY `visioneId` int(100) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`useId`);

--
-- Constraints for table `obbiettivi_strategici`
--
ALTER TABLE `obbiettivi_strategici`
  ADD CONSTRAINT `obbiettivi_strategici_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`useId`);

--
-- Constraints for table `punti_deboli`
--
ALTER TABLE `punti_deboli`
  ADD CONSTRAINT `punti_deboli_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`useId`);

--
-- Constraints for table `user_missione`
--
ALTER TABLE `user_missione`
  ADD CONSTRAINT `user_missione_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`useId`);

--
-- Constraints for table `valori_fondamentali`
--
ALTER TABLE `valori_fondamentali`
  ADD CONSTRAINT `valori_fondamentali_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`useId`);

--
-- Constraints for table `visioni`
--
ALTER TABLE `visioni`
  ADD CONSTRAINT `visioni_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`useId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

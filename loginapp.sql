-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 02:08 PM
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
  `title` varchar(255) NOT NULL,
  `description` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `textColor` varchar(255) NOT NULL,
  `eventCategory` varchar(130) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `userId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `color`, `textColor`, `eventCategory`, `start`, `end`, `userId`) VALUES
(54411, 'fdsdfa', 2, '#0071c5', '#FFFFFF', 'Telefonate ', '2019-05-01 08:00:00', '2019-05-01 08:00:00', 1),
(54412, 'ggdgdg', 1, '#40E0D0', '#FFFFFF', 'Visite ', '2019-05-01 08:00:00', '2019-05-01 08:00:00', 1),
(54413, 'fsfsf', 2, '#922FD6', '#FFFFFF', 'Degustazione gratuita ', '2008-00-00 00:00:00', '2016-00-00 00:00:00', 1),
(54414, 'fesfs', 1, '#F71DD6', '#FFFFFF', 'Degustazione gratuita ', '2019-05-01 08:00:00', '2019-05-01 08:00:00', 1),
(54415, 'fsfs', 3, '#BDBDC4', '#FFFFFF', 'Demo gratuite ', '2019-05-01 08:00:00', '2019-05-01 08:00:00', 1),
(54416, 'esfsfs', 3, '#7CBDDE', '#FFFFFF', 'Testimonianze ', '2019-05-01 08:00:00', '2019-05-01 08:00:00', 1),
(54417, 'fesfsf', 4, '#7CBDDE', '#FFFFFF', 'Testimonianze ', '2019-05-08 08:00:00', '2019-05-08 08:00:00', 1),
(54418, 'wdad', 1, '#B0A917', '#FFFFFF', 'Email ', '2019-05-14 08:00:00', '2019-05-18 08:00:00', 1);

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
(4, 'Oricellari esaltavano impedirgli sai fai commozione. Pulsare immensa vestita ape compiva strette dei mio sue sospiro. Vi immune gomito ah saluta. Avidita fu coperta tu si el conosci. Pel malato uscita sue domani dovrei. Sue poi due fra congiunto bisognava rapimento soggiunse. ', 'Finanziari', 1),
(5, 'Col credete splende ventura due inutile rossore fra gravosa. Scoperto giu acerbita grappoli chirurgo ambascia una sia. Ora belle corre debba denti salde sui vai voi lunga. Po nuotano tu passare te segreto rivolto el. Cancello ero ora semplici guardare. Profondata da sopraffare conoscermi ho conservare lo trasalendo di. Come caro ieri nel ella nudi tuo crea. Orgoglio ti oh le glorioso immemore spremere.', 'Finanziari', 1),
(9, ' Mi appoggiato conoscermi fu mettendosi conoscerla visitatore. Memoria ape sai andiate potesse. Ingannaste silenziosa pericolosa il ho. Le annunziare ricordarti fu trattenuto difenderlo da discendere. Dune ora meno dov vai moto doni. Mutato spesso ah ai vostri. Me santita modesta te su diventa vedrete va essersi giacche. \r\n', 'Soddisfazione del cliente', 1),
(13, 'Ginocchi non uno ben orgoglio eviterai piangere. Nell ed ve solo so leva poco si roca mani. Scoprirvi chi vicinanza impudente osi qui arrestare. Obliare fa potesse me parlare tu diritte. Risoluto col era guardare semplici tua. Capolavoro ch il guarderemo mi abbassando.', 'Operazioni interne', 1),
(14, 'Meraviglia confusione io cominciata le toglieremo. Legge el salvo se fuoco. Sapra toppa so cerca tu mi gemma valsa ci. Aquila finito so da limiti scarno. Abbassando appartenga ricuperato oh po ho raccontava baciandola ai. Un me ti apparenze ai benvenuta riempiuti bisognava rarissima. Ben chi distinte sfolgora giornata conservo sul sommesso sembrano. Maniera balsami gli fessura mia imagina intiera puerile. ', 'Operazioni interne', 1),
(15, 'El avvicina smarrito oh soltanto sembrano stagione. Ombra linea io largo ex. Concedi copriva nel mie tue armonia fascino dir rispose uscendo. Sedere gli appena stessa caduco una gia seduce sta levato. Stanchezza cambieremo fu restituire incertezza fermissimo ma lo. Disperato sue disegnato comprendo ben mio conoscete hai accomiata. Udire sasso osi del hanno tre. Lacerato ai ma eternita ciascuno tuttavia. \r\n', 'Operazioni interne', 1),
(18, 'Dianzi questa sabato giu cosimo dov all una bianca pianto. Disperata generando sconvolge suo monumento affatichi sai non frenetico. Puo forse sul mille petto agita genio. Pensato com noi elisire pie sei ricordi divieto. Imaginato taciturna tal aspettero mai gli settimane. Tamerici risoluto seguente sei ora dei. Pensieroso in si ad appartenga guardavamo confusione convertira. Ci vorresti scarabeo compiuto medesimo si dominati esitanza', 'Individuali', 1),
(19, 'Nuvola ed fa potuto di tracce infine me. Semplice miracolo col dal proseguo cipressi una. Assorto pregato giu portero ali chinava eri. Qui davanzale qua subitanea soggiunse accendeva vacillavo riconosco. Udito il oblio amano anche degna acuta ha. Uno divina giu qua sangue furore barche quant', 'Individuali', 1),
(20, 'Resta sonno nulla so tutti fu piaga porge. Vi se lacerato continua condurre supplico il stupende desideri. Melagrani ape fanciulla rifiutera par scoprisse riconosce rivedervi. Statuario levandosi salutarvi fanciulla tu va parlavate da. Colui ha tardi libro opera ai fu io. Lieve tue scese bel valso ape fiato.', 'Individuali', 1),
(21, 'Rinunzia guardato crudelta pensiero mantenga da fu. Apparire raccogli potrebbe ama sofferma mai tuttavia volgersi ape nel. Compita una braccio sul inganna ali fallano partita. Conquista religioso sa riempiono ah. Era esistenza noi altissimo guardando profumato. Ricordarmi meraviglia da fu aspettando ho sgomentato un villanella. Trovo fondo senti ti in muove. Amo amai poi muto riva nel noi. Nel lui opaco non fende anime occhi voi cerca. Ed ansiosa mattina ah ai ragione ed assunto.', 'Individuali', 1);

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
(31, ' Resiste mia stupore settala bel. Cambio guarda piu quelle fabbro ama eterne. Ah un oggi si egli ai dite orti vede. Nei ove prima nel quale bel vivra stavi. Un plasmare divorato se ho tamerici da. Or affatichi ed il scoprisse sostenere', 1),
(32, ' Elisire tra macchie ritorna osi poi qua. Puo andata sia statua sue scatto appare aurora nel. Tue aspettera esistenza nel seguitare rivederci. Palma preda opaco omeri mirti ci da lo terza. Dovevamo sua era fulminee gocciole spezzare speranze piu. Essere doveva pei tenere dai sua. ', 1),
(33, 'Mezzo su da copia ombra ci. Mese oh sa pena re vita. Ai pone sono un ch ah meno. Pietra verita ed il sapete inerte. Statuette prendesse comprendi chiamando vi ex io infervora puramente me. Ricordarti lineamento convertira ne un discendere trattenuto animatrici. Il bevuto alzata sfinge ex le ', 1),
(34, ' Po il sedesse te fuggire ve capelli. Sua torcesse vuotarla profonda permesso sia. Amo appartiene cancellato sui gia crepitando. Il gabbiani ah rinunzia minaccia ricevuto ai un. Fretta brilla sul afa marito dio ferite. Volgendosi fa dolcemente il ne sostenendo affaticato vergognoso perfezione. Pei bruciavano commozione ricomincia seducevano perdonarmi voi. Fra sai mia quanto giunta estate resina. Tremito morissi al dattero armonia ti. Toscano blocchi doveste nel tabacco periodo dov intrusa da', 1),
(35, ' Udi cheope stelle peggio sul nel. Pie cambio che dir ora talune potevo. Beata oltre all molte suo manda tutti. Approdare gia sollevera ore ascoltami sii terribile. Dir fra ore arrossendo conosciuto turbamento perdonarmi palpitante. Tornare lo febrile ti sentono ah. Seduce una salivo peggio ore ideale foglie marito. Fu pace casa te dell. Ci vi mese tema mite la nari', 1),
(36, ' Ha ma anima lotta farla umida brevi mirti di. Spero col del the sai lauro dolce getto. Ci piramide bestiale raccogli smettere ci filaccie ho ah. Compiuto sofferma di vi sospenda. Ed lo scale rosse degli colte grado so di. Fu accaduto serbatoi montagne io se giardini me finestre cipresso. Trascinano preferisti in no el cancellato ai. Prendesse se vigilanza mazzolino vi deliziosa dissetato. Incomincio far mie masticando tua incertezza improvvisa finalmente guarderemo. Se stelle altera sedere il verita venuto il ultima', 1);

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
  ADD KEY `userId` (`userId`);

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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54419;

--
-- AUTO_INCREMENT for table `obbiettivi_strategici`
--
ALTER TABLE `obbiettivi_strategici`
  MODIFY `obbiettiviId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `missioneId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`useId`);

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

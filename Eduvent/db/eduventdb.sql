-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Okt 2016 um 23:51
-- Server-Version: 10.1.10-MariaDB
-- PHP-Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `eduventdb`
--

-- --------------------------------------------------------

SET storage_engine=innodb;

--
-- Tabellenstruktur für Tabelle `addresses`
--

CREATE TABLE `addresses` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(20),
  `Street` varchar(20),
  `HouseNumber` int(11),
  `City` varchar(20),
  `Postcode` int(11),
  `Country` varchar(20),
  `Longitude` float,
  `Latitude` float,
   PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bookings`
--

CREATE TABLE `bookings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL,
  `BookingDateTime` datetime,
  `PaymentID` int(11),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eventproposals`
--

CREATE TABLE `eventproposals` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EPCreatorID` int(11) NOT NULL,
  `EPDescription` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eventproposalvotes`
--

CREATE TABLE `eventproposalvotes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EventProposalID` int(11) NOT NULL,
  `EPVoterID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `EventTypeID` int(11) NOT NULL,
  `EventTitle` varchar(100),
  `EventDescription` text,
  `EventDateTime` datetime,
  `EventLocation` varchar(100),
  `EventTopics` varchar(45),
  `EventPriceCategory` int(11) NOT NULL,
  `EventPrice` double,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `eventtypes`
--

CREATE TABLE `eventtypes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TypeLabel` varchar(20),
  `TypeDescription` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `frequentsearches`
--

CREATE TABLE `frequentsearches` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SearchTerm` varchar(20),
  `Frequency` int(11),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gender`
--

CREATE TABLE `gender` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Gender` varchar(10),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `interests`
--

CREATE TABLE `interests` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `Interest` varchar(20),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `newslettersubscriptions`
--

CREATE TABLE `newslettersubscriptions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `NewsletterID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `payments`
--

CREATE TABLE `payments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `PaymentDate` date,
  `PaymentAmount` double,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pricecategories`
--

CREATE TABLE `pricecategories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(100),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SettingDescription` varchar(100),
  `Constrained` tinyint(1),
  `DataType` varchar(20),
  `SMinValue` int(11),
  `SMaxValue` int(11),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `topics`
--

CREATE TABLE `topics` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TopicName` varchar(100),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usernotifications`
--

CREATE TABLE `usernotifications` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `NotificationTimestamp` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `NotificationType` int(11),
  `NotificationReadStatus` tinyint(1),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `OrganizerAcc` tinyint(1),
  `AddressID` int(11) NOT NULL,
  `userName` varchar(20),
  `EmailAddress` int(11),
  `GenderID` int(11) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `tokenCode` varchar(100) NOT NULL,
  `userBirth` char(50) DEFAULT NULL,
  `DOB` date,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usersettings`
--

CREATE TABLE `usersettings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `SettingID` int(11) NOT NULL,
  `ValidSettingValueID` int(11),
  `UnconstrainedValue` int(11),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `validsettingvalues`
--

CREATE TABLE `validsettingvalues` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SettingID` int(11) NOT NULL,
  `ValidValue` int(11),
  `ValueLabel` varchar(100),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `EventID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--
/*
--
-- Indizes für die Tabelle `bookings`
--
ALTER TABLE `bookings`
  ADD KEY `fk_bookings_events1_idx` (`EventID`),
  ADD KEY `fk_bookings_users1_idx` (`UserID`),
  ADD KEY `fk_bookings_payments1_idx` (`PaymentID`);

--
-- Indizes für die Tabelle `eventproposals`
--
ALTER TABLE `eventproposals`
  ADD KEY `fk_eventproposals_users1_idx` (`EPCreatorID`);

--
-- Indizes für die Tabelle `eventproposalvotes`
--
ALTER TABLE `eventproposalvotes`
  ADD KEY `fk_eventproposalvotes_eventproposals1_idx` (`EventProposalID`),
  ADD KEY `fk_eventproposalvotes_users1_idx` (`EPVoterID`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD KEY `fk_events_eventtypes1_idx` (`EventTypeID`),
  ADD KEY `fk_events_pricecategories1_idx` (`EventPriceCategory`);

--
-- Indizes für die Tabelle `interests`
--
ALTER TABLE `interests`
  ADD KEY `fk_interests_users1_idx` (`UserID`);

--
-- Indizes für die Tabelle `newslettersubscriptions`
--
ALTER TABLE `newslettersubscriptions`
  ADD KEY `fk_newslettersubscriptions_users1_idx` (`UserID`);

--
-- Indizes für die Tabelle `payments`
--
ALTER TABLE `payments`
  ADD KEY `fk_payments_users_idx` (`UserID`);

--
-- Indizes für die Tabelle `usernotifications`
--
ALTER TABLE `usernotifications`
  ADD KEY `fk_usernotifications_users1_idx` (`UserID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD KEY `fk_users_addresses1_idx` (`AddressID`),
  ADD KEY `fk_users_gender1_idx` (`GenderID`);

--
-- Indizes für die Tabelle `usersettings`
--
ALTER TABLE `usersettings`
  ADD KEY `fk_usersettings_settings1_idx` (`SettingID`),
  ADD KEY `fk_usersettings_validsettingvalues1_idx` (`ValidSettingValueID`),
  ADD KEY `fk_usersettings_users1_idx` (`UserID`);

--
-- Indizes für die Tabelle `validsettingvalues`
--
ALTER TABLE `validsettingvalues`
  ADD KEY `fk_validsettingvalues_settings1_idx` (`SettingID`);

--
-- Indizes für die Tabelle `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `fk_wishlist_events1_idx` (`EventID`),
  ADD KEY `fk_wishlist_users1_idx` (`UserID`);

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_bookings_events1` FOREIGN KEY (`EventID`) REFERENCES `events` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bookings_payments1` FOREIGN KEY (`PaymentID`) REFERENCES `payments` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bookings_users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `eventproposals`
--
ALTER TABLE `eventproposals`
  ADD CONSTRAINT `fk_eventproposals_users1` FOREIGN KEY (`EPCreatorID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `eventproposalvotes`
--
ALTER TABLE `eventproposalvotes`
  ADD CONSTRAINT `fk_eventproposalvotes_eventproposals1` FOREIGN KEY (`EventProposalID`) REFERENCES `eventproposals` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_eventproposalvotes_users1` FOREIGN KEY (`EPVoterID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_events_eventtypes1` FOREIGN KEY (`EventTypeID`) REFERENCES `eventtypes` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_events_pricecategories1` FOREIGN KEY (`EventPriceCategory`) REFERENCES `pricecategories` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `interests`
--
ALTER TABLE `interests`
  ADD CONSTRAINT `fk_interests_users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `newslettersubscriptions`
--
ALTER TABLE `newslettersubscriptions`
  ADD CONSTRAINT `fk_newslettersubscriptions_users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_payments_users` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `usernotifications`
--
ALTER TABLE `usernotifications`
  ADD CONSTRAINT `fk_usernotifications_users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_addresses1` FOREIGN KEY (`AddressID`) REFERENCES `addresses` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_gender1` FOREIGN KEY (`GenderID`) REFERENCES `gender` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `usersettings`
--
ALTER TABLE `usersettings`
  ADD CONSTRAINT `fk_usersettings_settings1` FOREIGN KEY (`SettingID`) REFERENCES `settings` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usersettings_users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usersettings_validsettingvalues1` FOREIGN KEY (`ValidSettingValueID`) REFERENCES `validsettingvalues` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `validsettingvalues`
--
ALTER TABLE `validsettingvalues`
  ADD CONSTRAINT `fk_validsettingvalues_settings1` FOREIGN KEY (`SettingID`) REFERENCES `settings` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_wishlist_events1` FOREIGN KEY (`EventID`) REFERENCES `events` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wishlist_users1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
*/
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 29 nov. 2021 à 06:51
-- Version du serveur : 8.0.26
-- Version de PHP : 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `olx`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `image_id` int UNSIGNED NOT NULL,
  `path` varchar(45) DEFAULT NULL,
  `feather` tinyint(1) DEFAULT NULL,
  `product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int UNSIGNED NOT NULL,
  `title` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` longtext,
  `prix` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `title`, `description`, `prix`) VALUES
(1, 'CASE IH Jx1070U laster 4wd', '<p>Tractor vândut dacă prețul este corect. Cea mai mare ofertă poate fi vândută cu afișaj redus de TVA gjerdrum Duminică 5 septembrie Sunați la 90649364</p>', '10500'),
(2, 'TYM T273 HST turf', 'Søreng Maskin AS cooperează cu importatorul danez. Au în permanență majoritatea modelelor de tractoare, ceea ce ne oferă timpi de livrare scurți.\r\nDe asemenea, au un depozit de piese bine dezvoltat, de care noi și clienții noștri putem beneficia.', '8200'),
(5, 'Solis 26HK 4WD HYDRAULISK FRONTLØFT - KRAFTUTTAK FORAN & BAK - 3. FUNKSJON HYDRAULIKK', 'SOLIS 26\r\n\r\n\r\n\r\nFlott og velutstyrt traktor med følgende ekstrautstyr påmontert\r\n\r\n3-funksjons hydraulik front til Solis 26 4WD \r\nHydraulisk frontløft, 2 syl inkl frontPTO til Solis 26 4wd\r\nVelgerventil montert\r\nIndustridekk til Solis 26 4WD\r\n\r\n\r\nStandard utstyr:\r\n\r\nMitsubishi SL3L2, 3 sylindret 26hk motor\r\nHastighet 17,5 kmt\r\nGear 6+2\r\n2WD/4WD\r\nServo\r\nHøy og lavgear\r\nSperreaksling bak\r\nPto 540/1000 omdr\r\nHydr. mengde/uttak 14,85 L/min\r\nHydr. trykk 175 bar\r\nBosch dieselpumpe\r\nFrontvekter\r\nFoldbar veltebøyle\r\nSetebelte\r\nLys på veltebøyle/arbeidslys\r\nVarsellampe\r\n1 doble hydr. uttak\r\nLøftekapasitet trekkarmer 600kg\r\n\r\n\r\nVi tilbyr levering dør /', '10000'),
(6, 'Massey Ferguson 6270 MVA FRI\r\n', 'Fără TVA!\r\n\r\nSarcini cu 3 funcții și funcție de amortizare. Aer condiționat care funcționează.\r\n\r\nTocmai s-au schimbat uleiul de motor, filtrul și filtrul de aer.\r\n\r\nVândut așa cum se arată.\r\n\r\ntel. 48 32 40 01 întrebări prin telefon și nu sms.', '13500');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product` (`product`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

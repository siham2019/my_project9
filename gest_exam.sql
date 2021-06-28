-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 28 juin 2021 à 20:02
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gest_exam`
--

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

CREATE TABLE `effectuer` (
  `id_h` int(11) NOT NULL,
  `id_l` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `effectuer`
--

INSERT INTO `effectuer` (`id_h`, `id_l`) VALUES
(117, 8);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id_e` char(4) NOT NULL,
  `nom_e` varchar(45) NOT NULL,
  `prenom_e` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `N_Tel` int(11) NOT NULL,
  `grade` enum('M A/A','M A/B','M C/A','M C/B','vacataire') NOT NULL,
  `limite_horaire` int(11) NOT NULL DEFAULT 0,
  `identifiant` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id_e`, `nom_e`, `prenom_e`, `email`, `N_Tel`, `grade`, `limite_horaire`, `identifiant`) VALUES
('AR44', 'chadli', 'hadil', 'donyadina994@gmail.com', 123, 'M C/A', 1, 'ENAR44'),
('DF12', 'wakar', 'ilyas', 'donyadina994@yahoo.com', 646238302, 'M A/A', 1, 'ENDF12'),
('MA10', 'baz', 'mhamed', 'info2017chlef@gmail.com', 2345678, 'M A/B', 0, NULL),
('MA19', 'dafir', 'driro', 'siham02hdd@gmail.com', 123, 'M A/B', 0, NULL),
('MA1C', 'zad', 'mhamed', 'donyadina994@gmail.com', 2345678, 'M A/A', 0, NULL),
('MA1W', 'farid', 'mhamed', 'donyadina994@gmail.com', 2345678, 'M A/A', 0, NULL),
('MA34', 'jzck', 'jack', 'donyadina994@yahoo.com', 2345678, 'M A/B', 0, NULL),
('MF11', 'guzel', 'vani', 'zadmomo312@gmail.com', 123, 'M C/A', 0, NULL),
('MF16', 'guzel', 'car', 'DF@gh.cp', 123, 'M C/A', 0, NULL),
('MF1D', 'guzel', 'guzel', 'DF@gh.cp', 123, 'M C/A', 0, NULL),
('MS31', 'zad', 'mhamed', 'fafo@fif.com', 2345678, 'M A/A', 0, NULL),
('MS34', 'darline', 'mhamed', 'fafo@fif.com', 2345678, 'M A/A', 0, NULL),
('MSZ4', 'zad', 'frah', 'fafo@fif.com', 2345678, 'M A/A', 0, NULL),
('MSZB', 'zad', 'fraq', 'fafo@fif.com', 2345678, 'M A/A', 0, NULL),
('MSZE', 'zad', 'frah', 'fafo@fif.com', 2345678, 'M A/A', 0, NULL),
('MSZQ', 'zad', 'fraq', 'fafo@fif.com', 2345678, 'M A/A', 0, NULL),
('MSZv', 'zad', 'fraq', 'info2017chlef@gmail.com\r\n', 2345678, 'M A/A', 0, NULL),
('QS23', 'hadj', 'krim', 'siham02hdd@gmail.com', 123, 'M A/A', 0, NULL),
('WAR1', 'zas', 'faida', 'info2017chlef@gmail.com', 666978302, 'M A/A', 0, 'ENWAR1'),
('WX12', 'dormi', 'khalil', 'siham02hdd@gmail.com', 123, 'M A/A', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `num_ins` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `prenome` varchar(45) NOT NULL,
  `N_Tele` int(11) NOT NULL,
  `emaile` varchar(100) NOT NULL,
  `idG` int(11) DEFAULT NULL,
  `id_l` int(11) DEFAULT NULL,
  `identifiant` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`num_ins`, `nome`, `prenome`, `N_Tele`, `emaile`, `idG`, `id_l`, `identifiant`) VALUES
(21423, 'garido', 'kamilia', 666978302, 'donyadina994@gmail.com', 11, NULL, NULL),
(23356, 'hali', 'hadil', 123, 'info2017chlef@gmail.com', 25, NULL, NULL),
(23798, 'fari', 'friro', 23456, 'dodi.fa@gmail.com', 23, NULL, NULL),
(32156, 'dahman', 'zola', 666978302, 'donyadina994@gmail.com', 21, NULL, 'ET32156'),
(32411, 'sali', 'dar', 123, 'donyadina994@gmail.com', 12, NULL, NULL),
(34563, 'sami', 'lolo', 9776, 'dodi.fa@gmail.com', 3, NULL, NULL),
(41278, 'nouri', 'ikbal', 666978302, 'donyadina994@gmail.com', 11, NULL, 'ET41278'),
(45611, 'kalili', 'omar', 9776, 'do@g.com', 19, 8, 'ET45611'),
(278933, 'quer', 'qsl', 123, 'info2017chlef@gmail.com', 19, 8, NULL),
(453287, 'ragh', 'rawda', 23111, 'ser@gmil.com', 19, 8, NULL),
(456231, 'raghy', 'raw', 23111, 'ser@gmil.com', 19, 8, NULL),
(775663, 'sami', 'samo', 646238302, 'info2017chlef@gmail.com', 19, 8, NULL),
(2234111, 'sa', 'gbbbvbv', 9776, 'dgfg', 19, 8, NULL),
(2345126, 'cara', 'xar', 24444, 'donyadina994@gmail.com', 4, NULL, 'ET23451'),
(45678911, 'kari', 'faida', 123, 'donyadina994@gmail.com', 21, NULL, NULL),
(234567111, 'dddd', 'fffffffffffffffffffff', 123, 'info2017chlef@gmail.com', 23, NULL, NULL),
(2147483647, 'dar', 'dar', 123, 'donyadina994@gmail.com', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `idG` int(11) NOT NULL,
  `nomG` int(11) NOT NULL,
  `id_section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`idG`, `nomG`, `id_section`) VALUES
(3, 3, 4),
(4, 4, 3),
(11, 1, 6),
(12, 2, 3),
(19, 1, 7),
(20, 2, 4),
(21, 2, 6),
(23, 1, 5),
(25, 34, 3),
(26, 31, 4),
(29, 3, 11);

-- --------------------------------------------------------

--
-- Structure de la table `horaire_examen`
--

CREATE TABLE `horaire_examen` (
  `id_h` int(11) NOT NULL,
  `date_h` date NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `horaire_examen`
--

INSERT INTO `horaire_examen` (`id_h`, `date_h`, `heure_debut`, `heure_fin`) VALUES
(0, '0000-00-00', '00:00:00', '00:00:00'),
(109, '2020-09-18', '13:00:00', '14:30:00'),
(110, '2020-09-17', '08:30:00', '10:00:00'),
(117, '2020-10-19', '08:30:00', '10:00:00'),
(118, '2020-10-21', '11:30:00', '13:00:00'),
(119, '2020-10-31', '11:30:00', '13:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `locaux`
--

CREATE TABLE `locaux` (
  `id_l` int(11) NOT NULL,
  `nom_l` varchar(45) NOT NULL,
  `type_l` enum('salle','emphi') NOT NULL,
  `capacité` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `locaux`
--

INSERT INTO `locaux` (`id_l`, `nom_l`, `type_l`, `capacité`) VALUES
(8, 'dk', 'emphi', 6),
(10, 'ui', 'salle', 3),
(11, 'yu', 'salle', 1),
(15, 'rt', 'salle', 1),
(20, 'A', 'emphi', 12);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `identifiant` char(7) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`identifiant`, `pass`) VALUES
('CH123', 'sdf'),
('ENAR44', 'dlNcAR4E4iah'),
('ENDF12', 'aDkEwFrNa21'),
('ENWAR1', 'sRaNzWEA1'),
('ENWX12', 'om1X2dNWiEr'),
('ET21423', 'dfg'),
('ET23451', '2T16E52256334421'),
('ET32156', '3251235T61E6'),
('ET41278', '741821T2748E'),
('ET45611', 'dfg');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` int(11) NOT NULL,
  `nom_module` varchar(45) NOT NULL,
  `id_e` char(4) DEFAULT NULL,
  `id_n` int(11) NOT NULL,
  `id_h` int(11) NOT NULL DEFAULT 0,
  `id_p` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `id_e`, `id_n`, `id_h`, `id_p`) VALUES
(25, 'algorithmique', 'QS23', 6, 117, 49),
(26, 'thg2', NULL, 5, 0, NULL),
(28, 'se', 'QS23', 2, 0, NULL),
(29, 'ia', 'WAR1', 5, 0, NULL),
(38, 'big data', 'WX12', 6, 118, 50),
(39, 'prolog', 'WX12', 1, 0, NULL),
(40, 'systeme d\'information', NULL, 1, 0, NULL),
(41, 'anglais', NULL, 4, 0, NULL),
(42, 'anglais', 'MS31', 6, 119, 51),
(44, 'aze', NULL, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `niveau_de_formation`
--

CREATE TABLE `niveau_de_formation` (
  `id_n` int(11) NOT NULL,
  `nom_n` enum('l3','l2','M1','M2') NOT NULL,
  `specialité` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `niveau_de_formation`
--

INSERT INTO `niveau_de_formation` (`id_n`, `nom_n`, `specialité`) VALUES
(1, 'l2', 'systeme informatique'),
(2, 'l3', 'systeme informatique'),
(3, 'M1', 'isia'),
(4, 'M2', 'isia'),
(5, 'M1', 'il'),
(6, 'M2', 'il'),
(8, 'l2', 'ad');

-- --------------------------------------------------------

--
-- Structure de la table `periode_examen`
--

CREATE TABLE `periode_examen` (
  `id_p` int(11) NOT NULL,
  `heure_debut` time NOT NULL DEFAULT current_timestamp(),
  `heure_fin` time NOT NULL,
  `date_p` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `periode_examen`
--

INSERT INTO `periode_examen` (`id_p`, `heure_debut`, `heure_fin`, `date_p`) VALUES
(48, '13:00:00', '14:30:00', '2020-10-14'),
(49, '10:00:00', '11:30:00', '2020-10-16'),
(50, '08:30:00', '10:00:00', '2020-10-22'),
(51, '13:00:00', '14:30:00', '2020-10-29');

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE `section` (
  `id_section` int(11) NOT NULL,
  `nom_section` varchar(1) NOT NULL,
  `id_n` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `section`
--

INSERT INTO `section` (`id_section`, `nom_section`, `id_n`) VALUES
(3, 'Z', 2),
(4, 'A', 3),
(5, 'A', 5),
(6, 'A', 4),
(7, 'A', 6),
(11, 'Q', 1),
(12, 'X', 8);

-- --------------------------------------------------------

--
-- Structure de la table `surveiller`
--

CREATE TABLE `surveiller` (
  `id_e` char(4) NOT NULL,
  `id_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `surveiller`
--

INSERT INTO `surveiller` (`id_e`, `id_h`) VALUES
('AR44', 117),
('DF12', 117);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD PRIMARY KEY (`id_h`,`id_l`),
  ADD KEY `id_h` (`id_h`),
  ADD KEY `id_l` (`id_l`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `identifiant` (`identifiant`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`num_ins`),
  ADD KEY `idG` (`idG`),
  ADD KEY `id_l` (`id_l`),
  ADD KEY `identifiant` (`identifiant`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`idG`),
  ADD KEY `id_section` (`id_section`);

--
-- Index pour la table `horaire_examen`
--
ALTER TABLE `horaire_examen`
  ADD PRIMARY KEY (`id_h`);

--
-- Index pour la table `locaux`
--
ALTER TABLE `locaux`
  ADD PRIMARY KEY (`id_l`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`identifiant`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`),
  ADD KEY `id_n` (`id_n`),
  ADD KEY `id_h` (`id_h`),
  ADD KEY `id_p` (`id_p`),
  ADD KEY `id_e` (`id_e`);

--
-- Index pour la table `niveau_de_formation`
--
ALTER TABLE `niveau_de_formation`
  ADD PRIMARY KEY (`id_n`);

--
-- Index pour la table `periode_examen`
--
ALTER TABLE `periode_examen`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id_section`),
  ADD KEY `id_n` (`id_n`);

--
-- Index pour la table `surveiller`
--
ALTER TABLE `surveiller`
  ADD PRIMARY KEY (`id_e`,`id_h`),
  ADD KEY `id_e` (`id_e`),
  ADD KEY `id_h` (`id_h`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `idG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `horaire_examen`
--
ALTER TABLE `horaire_examen`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT pour la table `locaux`
--
ALTER TABLE `locaux`
  MODIFY `id_l` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `niveau_de_formation`
--
ALTER TABLE `niveau_de_formation`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `periode_examen`
--
ALTER TABLE `periode_examen`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `section`
--
ALTER TABLE `section`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD CONSTRAINT `effectuer_ibfk_1` FOREIGN KEY (`id_h`) REFERENCES `horaire_examen` (`id_h`),
  ADD CONSTRAINT `effectuer_ibfk_2` FOREIGN KEY (`id_l`) REFERENCES `locaux` (`id_l`);

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`identifiant`) REFERENCES `login` (`identifiant`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_2` FOREIGN KEY (`idG`) REFERENCES `groupe` (`idG`),
  ADD CONSTRAINT `etudiant_ibfk_3` FOREIGN KEY (`id_l`) REFERENCES `locaux` (`id_l`),
  ADD CONSTRAINT `etudiant_ibfk_4` FOREIGN KEY (`identifiant`) REFERENCES `login` (`identifiant`);

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`id_section`) REFERENCES `section` (`id_section`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`id_n`) REFERENCES `niveau_de_formation` (`id_n`),
  ADD CONSTRAINT `module_ibfk_2` FOREIGN KEY (`id_h`) REFERENCES `horaire_examen` (`id_h`),
  ADD CONSTRAINT `module_ibfk_3` FOREIGN KEY (`id_p`) REFERENCES `periode_examen` (`id_p`),
  ADD CONSTRAINT `module_ibfk_4` FOREIGN KEY (`id_e`) REFERENCES `enseignant` (`id_e`);

--
-- Contraintes pour la table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`id_n`) REFERENCES `niveau_de_formation` (`id_n`);

--
-- Contraintes pour la table `surveiller`
--
ALTER TABLE `surveiller`
  ADD CONSTRAINT `surveiller_ibfk_2` FOREIGN KEY (`id_h`) REFERENCES `horaire_examen` (`id_h`),
  ADD CONSTRAINT `surveiller_ibfk_3` FOREIGN KEY (`id_e`) REFERENCES `enseignant` (`id_e`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

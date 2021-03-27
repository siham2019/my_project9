-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 13 mai 2020 à 17:34
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

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id_e` varchar(45) NOT NULL,
  `nom_e` varchar(45) NOT NULL,
  `prenom_e` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `N_Tel` int(11) NOT NULL,
  `grade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id_e`, `nom_e`, `prenom_e`, `email`, `N_Tel`, `grade`) VALUES
('dfg234', 'farid', 'jack', 'fgàlm.COM', 2345678, 'vacataire');

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
  `id_l` int(11) DEFAULT NULL,
  `idG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`num_ins`, `nome`, `prenome`, `N_Tele`, `emaile`, `id_l`, `idG`) VALUES
(554, 'tiziri', 'hriya', 56711, 'rtuio', NULL, 10),
(785, 'kadar', 'dina', 6987, 'dfdssssfd', NULL, 5),
(2234, 'haki', 'lolo', 9776, 'donyadina994@gmail.com', NULL, 5),
(12345, 'nazim', 'fadar', 9766554, 'qs@flm.fr', NULL, 1),
(23798, 'fari', 'friro', 23456, 'dodi.fa@gmail.com', NULL, 5),
(56431, 'raqok', 'ridha', 2345789, 'df@ol.com', NULL, 1),
(453287, 'raghi', 'rawda', 23111, 'ser@gmil.com', NULL, 5),
(556787, 'fadi', 'fadila', 2222222, 'az@ghty.com', NULL, 10),
(678935, 'samir', 'salo', 9776, 'samir.s@gmail.com', NULL, 1),
(785443, 'kadar', 'jomana', 23456987, 'ert@tyu.com', NULL, 1),
(1222222, 'radig', 'radhia', 4444567, 'az@op.fr', NULL, 10),
(3444567, 'zaki', 'zozo', 5567489, 'azer@ghj.com', NULL, 1),
(7766554, 'tiziri', 'kamilia', 23456711, 'ert@opml.com', NULL, 1),
(55633221, 'sdfg', 'karim', 34444444, 'drtyy@gh.com', NULL, 1),
(77661254, 'zola', 'zobida', 456731, 'rty@ui.com', NULL, 1);

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
(1, 13, 5),
(3, 1, 4),
(4, 2, 6),
(5, 1, 1),
(6, 2, 1),
(7, 3, 1),
(8, 4, 1),
(9, 5, 2),
(10, 6, 2),
(11, 7, 2),
(12, 8, 2),
(13, 1, 3),
(14, 2, 3),
(15, 4, 3),
(16, 5, 3),
(17, 6, 3),
(18, 0, 2),
(19, 7, 2),
(20, 7, 2),
(21, 3, 7),
(22, 42, 1);

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
(47, '2020-05-11', '12:00:00', '14:30:00'),
(48, '2020-05-11', '12:23:00', '16:00:00'),
(49, '2020-04-15', '08:00:00', '10:00:00'),
(50, '2020-04-15', '09:00:00', '12:00:00');

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
(3, 'H1', 'salle', 5),
(5, 'dr1', 'salle', 10),
(8, 'dk', 'emphi', 5),
(10, 'ui', 'salle', 4),
(11, 'yu', 'salle', 4),
(15, 'rt', 'salle', 7),
(16, 'zer', 'emphi', 7);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `identifiant` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `type` enum('etudiant','enseignant','chef') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`identifiant`, `pass`, `type`) VALUES
('dfg234', 'dfg', 'enseignant');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` int(11) NOT NULL,
  `nom_module` varchar(45) NOT NULL,
  `id_n` int(11) NOT NULL,
  `id_h` int(11) NOT NULL DEFAULT 0,
  `id_p` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `id_n`, `id_h`, `id_p`) VALUES
(23, 'se2', 2, 47, NULL),
(24, 'poo', 1, 50, NULL),
(25, 'algorithmique', 3, 48, NULL),
(26, 'thg', 5, 48, NULL),
(27, 'archi', 1, 50, NULL),
(28, 'se', 2, 50, NULL),
(29, 'ia', 5, 49, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `niveau_de_formation`
--

CREATE TABLE `niveau_de_formation` (
  `id_n` int(11) NOT NULL,
  `nom_n` varchar(45) NOT NULL,
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
(6, 'M2', 'il');

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
(4, '05:00:00', '06:30:00', '2020-04-16'),
(5, '23:59:00', '01:29:00', '2020-04-10'),
(6, '01:59:00', '03:29:00', '2020-04-15'),
(7, '23:59:00', '01:29:00', '2020-04-10');

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE `section` (
  `id_section` int(11) NOT NULL,
  `nom_section` varchar(1) NOT NULL,
  `id_n` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `section`
--

INSERT INTO `section` (`id_section`, `nom_section`, `id_n`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'A', 2),
(4, 'A', 3),
(5, 'A', 5),
(6, 'A', 4),
(7, 'A', 6);

-- --------------------------------------------------------

--
-- Structure de la table `surveiller`
--

CREATE TABLE `surveiller` (
  `id_e` varchar(45) NOT NULL,
  `id_h` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`id_e`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`num_ins`),
  ADD KEY `etudiant_ibfk_1` (`id_l`),
  ADD KEY `idG` (`idG`);

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
  ADD KEY `id_p` (`id_p`);

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
  MODIFY `idG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `horaire_examen`
--
ALTER TABLE `horaire_examen`
  MODIFY `id_h` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `locaux`
--
ALTER TABLE `locaux`
  MODIFY `id_l` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `niveau_de_formation`
--
ALTER TABLE `niveau_de_formation`
  MODIFY `id_n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `periode_examen`
--
ALTER TABLE `periode_examen`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `section`
--
ALTER TABLE `section`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`id_l`) REFERENCES `locaux` (`id_l`),
  ADD CONSTRAINT `etudiant_ibfk_2` FOREIGN KEY (`idG`) REFERENCES `groupe` (`idG`);

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
  ADD CONSTRAINT `module_ibfk_3` FOREIGN KEY (`id_p`) REFERENCES `periode_examen` (`id_p`);

--
-- Contraintes pour la table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`id_n`) REFERENCES `niveau_de_formation` (`id_n`);

--
-- Contraintes pour la table `surveiller`
--
ALTER TABLE `surveiller`
  ADD CONSTRAINT `surveiller_ibfk_1` FOREIGN KEY (`id_e`) REFERENCES `enseignant` (`id_e`),
  ADD CONSTRAINT `surveiller_ibfk_2` FOREIGN KEY (`id_h`) REFERENCES `horaire_examen` (`id_h`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

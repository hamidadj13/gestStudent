-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 oct. 2022 à 01:49
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `geststudent`
--

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `filiere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `nom`, `prenom`, `sexe`, `date_naissance`, `filiere`) VALUES
(3, 'Adagboto', 'bertrand', 'Masculin', '2022-10-26', 'IG'),
(4, 'DANSOU', 'Pierre', 'Masculin', '2000-10-10', 'IG'),
(5, 'GBEDEDJI', 'Ulrich', 'Masculin', '2003-07-10', 'IG'),
(6, 'AGBO', 'Kmimina', 'Feminin', '2002-04-15', 'IG'),
(7, 'Adagboto', 'bertrand', 'Masculin', '2022-10-26', 'IG'),
(8, 'DANSOU', 'Pierre', 'Masculin', '2000-10-10', 'IG'),
(9, 'GBEDEDJI', 'Ulrich', 'Masculin', '2003-07-10', 'IG'),
(10, 'AGBO', 'Kmimina', 'Feminin', '2002-04-15', 'IG'),
(11, 'Adagboto', 'bertrand', 'Masculin', '2022-10-26', 'IG'),
(12, 'DANSOU', 'Pierre', 'Masculin', '2000-10-10', 'IG'),
(13, 'GBEDEDJI', 'Ulrich', 'Masculin', '2003-07-10', 'IG'),
(14, 'AGBO', 'Kmimina', 'Feminin', '2002-04-15', 'IG'),
(15, 'Adagboto', 'bertrand', 'Masculin', '2022-10-26', 'IG'),
(16, 'DANSOU', 'Pierre', 'Masculin', '2000-10-10', 'IG'),
(17, 'GBEDEDJI', 'Ulrich', 'Masculin', '2003-07-10', 'IG'),
(18, 'AGBO', 'Kmimina', 'Feminin', '2002-04-15', 'IG'),
(19, 'Adagboto', 'bertrand', 'Masculin', '2022-10-26', 'IG'),
(20, 'DANSOU', 'Pierre', 'Masculin', '2000-10-10', 'IG'),
(21, 'GBEDEDJI', 'Ulrich', 'Masculin', '2003-07-10', 'IG'),
(22, 'AGBO', 'Kmimina', 'Feminin', '2002-04-15', 'IG'),
(23, 'Adagboto', 'bertrand', 'Masculin', '2022-10-26', 'IG'),
(24, 'DANSOU', 'Pierre', 'Masculin', '2000-10-10', 'IG'),
(25, 'GBEDEDJI', 'Ulrich', 'Masculin', '2003-07-10', 'IG'),
(26, 'AGBO', 'Kmimina', 'Feminin', '2002-04-15', 'IG'),
(27, 'Adagboto', 'bertrand', 'Masculin', '2022-10-26', 'IG'),
(28, 'DANSOU', 'Pierre', 'Masculin', '2000-10-10', 'IG'),
(29, 'GBEDEDJI', 'Ulrich', 'Masculin', '2003-07-10', 'IG'),
(30, 'AGBO', 'Kmimina', 'Feminin', '2002-04-15', 'IG'),
(31, 'Adagboto', 'bertrand', 'Masculin', '2022-10-26', 'IG'),
(32, 'DANSOU', 'Pierre', 'Masculin', '2000-10-10', 'IG'),
(33, 'DOSSOU', 'NIco', 'Masculin', '2001-10-10', 'IG'),
(34, 'QOJI', 'Marielle', 'Feminin', '1999-01-01', 'IG'),
(35, 'ADO', 'Karl', 'Feminin', '1999-02-10', 'BF'),
(36, 'DOE', 'John', 'Masculin', '1998-01-01', 'ASS'),
(37, 'DOE', 'John', 'Masculin', '1998-02-01', 'MRH');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

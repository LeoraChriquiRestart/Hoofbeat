-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 30 juin 2023 à 11:58
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hoofbeat`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `author_id` int NOT NULL,
  `contenu` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `images` blob,
  `tag` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `contenu`, `images`, `tag`, `date`) VALUES
(123, 7, 'Un coucours au top aujourd\'hui !', 0x696d616765732f686f727365706f7374322e6a7067, '#Compétition', '2023-06-28 15:49:15'),
(124, 10, 'Il vous surveille ;)', 0x696d616765732f686f727365706f7374342e6a7067, '#Propriétaire', '2023-06-28 15:51:08'),
(125, 9, 'Toujours concentrée', 0x696d616765732f686f727365706f7374352e6a7067, '#Dressage', '2023-06-28 15:55:35'),
(129, 9, 'Vrai mannequin ', 0x696d616765732f686f727365706f73742e6a7067, '#Random', '2023-06-29 15:50:19');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `nom` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `pseudo` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `pseudo`, `mail`, `mdp`) VALUES
(7, 'Léora', 'mimanouma', 'leora@chriqui', '$2y$10$xorTeK.Y5NgKq3z0dgHrrO99mSDC6JKFPcR5KVNSST5bb5bnLg84W'),
(8, 'Moi', 'tjrsmoi', 'moi@moi.moi', '$2y$10$p8COLPfPmm15/bwrJZptGeWpbhZlSSnhAlGMPo26yPIOD3ejIEydm'),
(9, 'Elsa', 'Boubou', 'boubou@boubou.boubou', '$2y$10$O2npWLliBdTpPQTNzbAI6.0GufmfsFSlC3etWfamRowiT3pRR/oGq'),
(10, 'eva', 'evalaba', 'eva@eva.eva', '$2y$10$um1PP3hCIaK.pzFnMsMTz.G72eneZNU1P6XrhHVeat2nuOWsLOehu');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

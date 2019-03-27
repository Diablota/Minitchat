-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 27 mars 2019 à 09:44
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exercicetchat`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `id` int(11) NOT NULL,
  `message` varchar(250) COLLATE utf8_bin NOT NULL,
  `utilisateurId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id`, `message`, `utilisateurId`) VALUES
(150, 'Salut', 1),
(152, 'Salut', 1),
(153, 'Salut', 1),
(154, 'Salut', 1),
(155, 'Salut', 1),
(156, 'Salut', 1),
(157, 'Salut', 1),
(158, 'Salut', 1),
(159, 'Salut', 1),
(160, 'Salut', 1),
(161, 'Salut', 1),
(162, 'Salut', 1),
(163, 'Salut', 1),
(164, 'Salut', 1),
(165, 'Salut', 1),
(166, 'Salut', 1),
(167, 'Salut', 1),
(168, 'Salut', 1),
(169, 'Salut', 1),
(170, 'Salut', 1),
(171, 'Salut', 1),
(172, 'Salut', 1),
(173, 'Salut', 1),
(174, 'Salut', 1),
(175, 'Salut', 1),
(176, 'Salut', 1),
(177, 'Salut', 1),
(178, 'Salut', 1),
(179, 'Salut', 1),
(180, 'Salut', 1),
(181, 'Salut', 1),
(182, 'Salut', 1),
(183, 'Salut', 1),
(184, 'Salut', 1),
(185, 'Salut', 1),
(186, 'Salut', 1),
(187, 'Salut', 1),
(188, 'Salut', 1),
(189, 'Salut', 1),
(190, 'Salut', 4),
(191, 'pppp', 4),
(192, 'pppp', 2),
(193, 'Salut', 2),
(194, 'lloll', 2),
(195, 'Salut', 4),
(196, 'Salut', 4),
(197, 'Salut', 4),
(198, 'Salut', 4),
(199, 'Salut', 4),
(200, 'Salut', 4),
(201, 'Salut', 4),
(202, 'Salut', 4),
(203, 'Salut', 4),
(204, 'Salut', 4),
(205, 'Salut', 4),
(206, 'Salut', 4),
(207, 'Salut', 4),
(208, 'Salut', 4),
(209, 'Salut', 4),
(210, 'Salut', 4),
(211, 'Salut', 4),
(212, 'Salut', 4),
(213, 'Salut', 4),
(214, 'AZERTY', 4),
(215, 'AZERTY', 4),
(216, 'AZERTY', 4),
(217, 'AZERTY', 4),
(218, 'Salut', 4),
(219, 'g', 4),
(220, 'g', 4),
(221, 'g', 4),
(222, 'g', 4),
(223, 'g', 4),
(224, 'g', 4),
(225, 'g', 4),
(226, 'g', 4),
(227, 'g', 4),
(228, 'g', 4),
(229, 'g', 4),
(230, 'g', 4),
(231, 'g', 4),
(232, 'g', 4),
(233, 'g', 4),
(234, 'g', 4),
(235, 'g', 4),
(236, 'g', 4),
(237, 'g', 4),
(238, 'g', 4),
(239, 'g', 4),
(240, 'g', 4),
(241, 'g', 4),
(242, 'g', 4),
(243, 'd', 4),
(244, 'Salut', 4),
(245, 'Salut', 4),
(246, 'Salut', 4),
(247, 'Salut', 4),
(248, 'Salut', 4),
(249, 'Salut', 4),
(250, 'Salut', 4),
(251, 'Salut', 4),
(252, 'Salut', 4),
(253, 'Salut', 4),
(254, 'pppp', 4),
(255, 'dazdazd', 4),
(256, 'YOUPI', 4),
(257, 'YOUPI', 4),
(258, 'ppppJHG', 4),
(259, 'ppppJHG', 4),
(260, 'ppppJHG', 4),
(261, 'ppppJHG', 4),
(262, 'ppppJHG', 4),
(263, 'SalutYYY', 4),
(264, 'd', 5),
(265, 'qzdqzdqzd', 5),
(266, 'qzdqzdqzd', 5),
(267, 'test', 5),
(268, 'd', 5),
(269, 'lolilol', 5),
(270, '', 5),
(271, 'test ', 4),
(272, 'Salut', 4),
(273, '', 4),
(274, 'Salut', 4),
(275, 'pppp', 4),
(276, 'Salut', 4),
(277, 'Salut', 4),
(278, 'dazdaz', 4),
(279, 'dazdazdazdazdaz', 4),
(280, '', 4),
(281, '', 4),
(282, 'Salut', 4),
(283, 'Salut', 4),
(284, 'pppp', 4),
(285, 'dazdaz', 4),
(286, 'm', 4),
(287, 'Salut', 4),
(288, 'Salutgfff', 4),
(289, 'Salut', 4),
(290, '', 4),
(291, '', 4),
(292, 'a', 4),
(293, 'a', 8),
(294, 'a', 8),
(295, 'oooooo', 4),
(296, 'coucou', 9);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(25) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(25) COLLATE utf8_bin NOT NULL,
  `pseudo` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `email`, `mdp`, `prenom`, `pseudo`) VALUES
(1, 'LOUV', 'jp@live.fr', 'jp57', 'Jean Pierre', 'jeanpierre57'),
(2, 'GUL', 'jaja44@msn.fr', 'jane44', 'Janine', 'jane'),
(4, 'BONNET', 'snowbella@live.fr', 'poiuyt987', 'Laetitia', 'Diablota'),
(5, 'd', 'd@d.d', 'd', 'd', 'd'),
(6, '', '', '', '', ''),
(7, 'dazdaz', 'snowbella@live.frdzadaz', 'poiuyt987dazdaz', 'dazdaz', 'dazdaz'),
(8, 'aa', 'aaa@live.fr', 'aaa', 'a', 'aaa'),
(9, 'Gerber', 'jlggladiator@gmail.com', 'jlggladiators', 'Jean Louis', 'jlggladiator');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 jan. 2026 à 08:52
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mediatheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `titre` varchar(255) NOT NULL,
  `realisateur` varchar(255) NOT NULL,
  `duree` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`titre`, `realisateur`, `duree`, `synopsis`, `id`) VALUES
('Your Name.', ' Makoto Shinkai', '110', 'Mitsuha, adolescente coincée dans une famille traditionnelle, rêve de quitter ses montagnes natales pour découvrir la vie trépidante de Tokyo. Elle est loin d’imaginer pouvoir vivre l’aventure urbaine dans la peau de… Taki, un jeune lycéen vivant à Tokyo, occupé entre son petit boulot dans un restaurant italien et ses nombreux amis. À travers ses rêves, Mitsuha se voit littéralement propulsée dans la vie du jeune garçon au point qu’elle croit vivre la réalité... Tout bascule lorsqu’elle réalise que Taki rêve également d’une vie dans les montagnes, entouré d’une famille traditionnelle… dans la peau d’une jeune fille ! Une étrange relation s’installe entre leurs deux corps qu’ils accaparent mutuellement. Quel mystère se cache derrière ces rêves étranges qui unissent deux destinées que tout oppose et qui ne se sont jamais rencontrées ?', 5),
('Crows Explode', 'Toshiaki Toyoda', '125', 'Une nouvelle rentrée se prépare au lycée Suzuran. Les boss de l’établissement, Genji et Tamao, ont été diplômés. Une bataille s’engage alors entre les nouveaux lycéens pour déterminer qui contrôlera l’établissement...', 4),
('Je veux manger ton pancréas\r\n', 'Shin\'ichirô Ushijima', '108', 'Sakura est une lycéenne populaire et pleine de vie. Tout l\'opposé d\'un de ses camarades solitaires qui, tombant par mégarde sur son journal intime, découvre qu\'elle n\'a plus que quelques mois à vivre. Unis par ce secret, ils se rapprochent et s\'apprivoisent. Sakura lui fait alors une proposition : vivre ensemble toute une vie en accéléré, le temps d\'un printemps.', 7),
('Intouchables', ' Olivier Nakache', '112', 'Tout les oppose et il était peu probable qu\'ils se rencontrent un jour, et pourtant. Philippe, un riche aristocrate devenu tétraplégique après un accident de parapente va engager Driss, un jeune homme d\'origine sénégalaise tout droit sorti de prison, comme auxiliaire de vie à domicile. Pourquoi lui ? Tout simplement parce qu\'il ne regarde pas Philippe avec le même regard de pitié que les autres candidats.', 8);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `genre_film`
--

DROP TABLE IF EXISTS `genre_film`;
CREATE TABLE IF NOT EXISTS `genre_film` (
  `id` int NOT NULL,
  `id_genre` int NOT NULL,
  `id_film` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

DROP TABLE IF EXISTS `realisateur`;
CREATE TABLE IF NOT EXISTS `realisateur` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`prenom`, `nom`, `password`, `id`) VALUES
('mylan', 'brasier', '', 1),
('leo', 'lenul', '', 2),
('vincent', 'leperdant', '', 8),
('vincent', 'leperdant', '', 5),
('vincent', 'leperdant', '', 7),
('vincent', 'leperdant', '', 9),
('Brasier', 'Mylan', '', 10),
('Brasier', 'Mylan', '', 11),
('Brasier', 'Mylan', '', 12),
('Brasier', 'Mylan', '', 13),
('Brasier', 'Mylan', '', 14),
('Brasier', 'Mylan', '', 15),
('Brasier', 'Mylan', '', 16),
('Brasier', 'Mylan', '', 17),
('Brasier', 'Mylan', '', 18),
('Brasier', 'Mylan', '', 19),
('Brasier', 'Mylan', '', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

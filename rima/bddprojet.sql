-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 05 juil. 2019 à 13:16
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bddprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `annoncecolis`
--

CREATE TABLE `annoncecolis` (
  `numeroparticulier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `adressedepart` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `adressearrive` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dateenvoie` date NOT NULL,
  `datedepot` date NOT NULL,
  `taille` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `poids` int(100) NOT NULL,
  `photocolis` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `demandespecial` text COLLATE utf8_unicode_ci NOT NULL,
  `idcolis` int(11) NOT NULL,
  `supprimer` int(11) NOT NULL,
  `dateannonce` date NOT NULL,
  `trouvtrajet` int(11) DEFAULT NULL,
  `notefiabilte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `annoncecolis`
--

INSERT INTO `annoncecolis` (`numeroparticulier`, `description`, `adressedepart`, `adressearrive`, `dateenvoie`, `datedepot`, `taille`, `poids`, `photocolis`, `demandespecial`, `idcolis`, `supprimer`, `dateannonce`, `trouvtrajet`, `notefiabilte`) VALUES
('P156', 'izanamardussandl3vd', 'boira', 'khenchla', '0000-00-00', '0000-00-00', 'm', 2, 'ff', 'walou fff', 14, 0, '0000-00-00', 0, 4),
('P2', 'fef', 'ff', 'fef', '2019-03-14', '2019-02-28', 'l', 0, 'PHOTO_Colis/78.png', ' fef', 78, 0, '0000-00-00', NULL, 5),
('P1', 'vÃªtement', 'bouira', 'alger', '2019-07-14', '2019-07-15', 'l', 0, 'PHOTO_Colis/79.', ' rien', 79, 0, '0000-00-00', 0, 0),
('P8', 'masmar', 'Annaba', 'Annaba', '2019-03-02', '2019-03-01', 'l', 0, 'PHOTO_Colis/80.', ' ef', 80, 0, '0000-00-00', 1, 2),
('P1', 'porte', 'Oran', 'Annaba', '2019-03-03', '2019-03-02', 'l', 0, 'PHOTO_Colis/81.jpg', ' JE VOUS REMERCIE ? RIEN', 81, 0, '0000-00-00', 1, 2),
('', 'cafÃ©', 'bouira', 'bejaia', '2019-06-05', '2019-06-14', 'm', 0, 'PHOTO_Colis/82.', ' rien', 82, 0, '0000-00-00', NULL, 0),
('', 'caba', 'annaba', 'alger', '2019-06-30', '2019-06-15', '', 45, 'PHOTO_Colis/83.png', ' je vous remercie pour ne pas etre qar3ajiste', 83, 0, '0000-00-00', NULL, 0),
('', 'COUVIRTA', 'tebssa', 'm3askar', '2019-06-29', '2019-06-14', 'm', 4, 'PHOTO_Colis/84.png', ' ne pas toucher mes affaires', 84, 0, '0000-00-00', NULL, 0),
('P8', 'cafÃ©', 'alger', 'biskra', '2019-06-30', '2019-06-28', 'm', 0, 'PHOTO_Colis/85.png', ' razere', 85, 0, '0000-00-00', 1, 0),
('', 'fruits', 'saida', 'jmila', '2019-06-23', '2019-06-09', 'l', 70, 'PHOTO_Colis/86.png', ' chwiya brouda t3ichou', 86, 0, '0000-00-00', NULL, 0),
('P8', 'jan', 'sryx mlih', 'bzf sryx', '2019-07-19', '2019-07-12', 'xl', 5, 'PHOTO_Colis/87.png', 'anlamaz', 87, 0, '0000-00-00', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `annoncetrajet`
--

CREATE TABLE `annoncetrajet` (
  `matriculetrajet` int(11) NOT NULL,
  `matriculetransporteur` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `lieudepart` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lieuarrive` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kilometre` int(11) NOT NULL,
  `regulier` int(11) NOT NULL,
  `datedepart` date NOT NULL,
  `dateretour` date NOT NULL,
  `frequencevoyage` int(11) NOT NULL,
  `jourdepart` date NOT NULL,
  `moyentransport` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `taille` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `poids` int(11) NOT NULL,
  `matriculevoiture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numerotransporteur` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `supprimer` int(11) NOT NULL,
  `premium` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `notefinale` int(11) NOT NULL,
  `nbcolisAvis` int(11) NOT NULL,
  `differentslieuxarrerts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `annoncetrajet`
--

INSERT INTO `annoncetrajet` (`matriculetrajet`, `matriculetransporteur`, `lieudepart`, `lieuarrive`, `kilometre`, `regulier`, `datedepart`, `dateretour`, `frequencevoyage`, `jourdepart`, `moyentransport`, `taille`, `poids`, `matriculevoiture`, `numerotransporteur`, `supprimer`, `premium`, `note`, `notefinale`, `nbcolisAvis`, `differentslieuxarrerts`) VALUES
(1, '1', 'Annaba', 'Annaba', 0, 0, '2019-04-22', '2019-03-31', 0, '0000-00-00', 'Camion', 'L', 0, '', '5456465', 1, 0, 0, 0, 0, 0),
(2, '2', 'Annaba', 'Annaba', 0, 0, '2019-03-11', '2019-03-15', 0, '0000-00-00', 'Camion', 'L', 0, '', '0599874511', 1, 1, 3, 2, 2, 0),
(3, '3', 'Annaba', 'Annaba', 0, 0, '2019-03-15', '2019-03-15', 0, '0000-00-00', 'Camion', 'L', 0, '', '453', 1, 1, 0, 0, 0, 0),
(4, '4', 'alger', 'biskra', 450, 0, '2019-07-14', '2019-07-27', 0, '0000-00-00', 'Camion', 'L', 0, '', '53453', 0, 0, 27, 2, 14, 0),
(5, '5', 'Oran', 'Annaba', 850, 0, '2019-03-01', '2019-03-23', 0, '0000-00-00', 'Camion', 'L', 0, '', '0789102256', 0, 0, 14, 3, 5, 0),
(6, '6', 'Oran', 'Annaba', 850, 0, '2019-03-01', '2019-03-23', 0, '0000-00-00', 'VÃ©lo', 'L', 0, '', '051249876', 0, 0, 0, 0, 0, 0),
(7, '7', 'bouira', 'bejaia', 422, 0, '2019-06-02', '2019-06-15', 3, '0000-00-00', '', '', 0, '47-98612/k', '', 0, 0, 0, 0, 0, 0),
(8, '8', 'PARIS', 'LION', 84, 0, '2019-06-08', '2019-06-23', 3, '0000-00-00', 'Voiture', '', 0, '47-98612/k', '', 0, 0, 0, 0, 0, 0),
(9, '9', 'bouira', 'bejaia', 455, 0, '2019-06-09', '2019-06-16', 3, '0000-00-00', '', '', 0, '47-98612/k', '', 0, 0, 0, 0, 0, 0),
(10, '10', 'e', 'l', 5335, 0, '2019-06-09', '2019-06-23', 3, '0000-00-00', 'moto', '', 0, 'fegf', '', 0, 0, 0, 0, 0, 0),
(11, '11', 'tizi ouzou', 'blida', 4796, 1, '2019-06-29', '2019-06-30', 2, '2019-06-28', 'voiture', 'l', 0, 'lk/9841-=$$', '', 0, 0, 0, 0, 0, 0),
(12, '12', 'tizi ouzou', 'blida', 4796, 1, '2019-06-29', '2019-06-30', 2, '2019-06-28', 'voiture', 'l', 0, 'lk/9841-=$$', '', 0, 0, 0, 0, 0, 0),
(13, '13', '', '', 0, 0, '0000-00-00', '0000-00-00', 3, '0000-00-00', '', '', 0, '', '', 0, 0, 0, 0, 0, 0),
(14, '14', 'ilizi', 'gaghdaia', 4256, 1, '2019-06-08', '2019-06-21', 3, '2019-06-22', 'voiture', 'xl', 365, 'ka-1/56+$', '', 0, 0, 0, 0, 0, 0),
(15, '15', 'jijel', 'alger', 0, 0, '2019-06-09', '2019-06-16', 3, '0000-00-00', 'camion', 'xxl', 4, '66dsd', '', 0, 0, 0, 0, 0, 1),
(16, '16', 'skikda', 'bouira', 664, 0, '2019-06-08', '2019-06-22', 3, '0000-00-00', 'bus', 'xxl', 56, 'maya/951556-', '', 0, 0, 0, 0, 0, 1),
(17, '17', 'skikda', 'batna', 1489, 0, '2019-07-07', '2019-07-27', 3, '0000-00-00', '', 'l', 25, 'lmk/789626-4', '', 0, 0, 0, 0, 0, 1),
(18, '18', 'skikda', 'batna', 1489, 0, '2019-07-07', '2019-07-27', 3, '0000-00-00', '', 'l', 25, 'lmk/789626-4', '', 0, 0, 0, 0, 0, 1),
(19, '19', 'skikda', 'batna', 1489, 0, '2019-07-07', '2019-07-27', 3, '0000-00-00', '', 'l', 25, 'lmk/789626-4', '', 0, 0, 0, 0, 0, 1),
(20, '20', 'cv chwiya', 'labas hamdullah', 1478956230, 0, '2019-07-06', '2019-07-20', 3, '0000-00-00', 'moto', 'xl', 78, 'cvxhiya/22', '', 0, 0, 0, 0, 0, 1),
(21, '21', 'papa', 'papo', 47789, 0, '2019-07-05', '2019-07-19', 3, '0000-00-00', 'bus', 'l', 74, 'papsiiiii/789', '', 0, 0, 0, 0, 0, 1),
(22, 'T14', 'papa', 'papo', 47789, 0, '2019-07-05', '2019-07-19', 3, '0000-00-00', 'bus', 'l', 74, 'papsiiiii/789', '', 0, 0, 0, 0, 0, 1),
(23, 'T14', 'salama', 'tariiiiiq', 14789, 0, '2019-07-04', '2019-07-28', 3, '0000-00-00', 'camion', 'l', 147, 'matricule/47996', '', 0, 0, 0, 0, 0, 1),
(24, 'T14', 'amchich', 'imchach', 89, 0, '2019-07-13', '2019-07-21', 3, '0000-00-00', 'voiture', 'xl', 4, 'amchich/147', '', 0, 0, 0, 0, 0, 1),
(25, 'T14', 'mouuunika', 'moooooooooooooooooooooooooooooniii', 8878, 0, '2019-07-12', '2019-07-21', 3, '0000-00-00', 'voiture', 'xl', 455, 'mouni/78', '', 0, 0, 0, 0, 0, 1),
(26, 'T14', 'mouuunika', 'moooooooooooooooooooooooooooooniii', 8878, 0, '2019-07-12', '2019-07-21', 3, '0000-00-00', 'voiture', 'xl', 455, 'mouni/78', '', 0, 0, 0, 0, 0, 1),
(27, 'T14', 'velo', 'vevelo', 66, 0, '2019-07-27', '2019-07-31', 3, '0000-00-00', 'moto', 'l', 78, 'veeeeeeeeeeeeeeelooooooooooooooo', '', 1, 0, 0, 0, 0, 1),
(28, 'T14', '3yiiiiiiiiiiiiigh', 'izan', 8, 0, '2019-07-14', '2019-07-20', 3, '0000-00-00', 'voiture', 'xl', 5, '3yigh', '', 0, 0, 0, 0, 0, 1),
(29, 'T14', 'gz', 'gd', 55, 0, '2019-07-07', '2019-07-21', 3, '0000-00-00', 'moto', 'xl', 45, 'id', '', 0, 0, 0, 0, 0, 1),
(30, 'T14', 'tttttttttttttttttttiiiiiiiiiiii', 't', 489, 0, '2019-07-07', '2019-07-20', 3, '0000-00-00', 'moto', 'xl', 78, 'titi', '', 0, 0, 0, 0, 0, 1),
(31, 'T14', 'edff', 'fe', 5, 0, '2019-07-07', '2019-07-28', 3, '0000-00-00', 'moto', 'xl', 6, 'jjjjjj', '', 0, 0, 0, 0, 0, 0),
(32, 'T14', 'iz', 'an', 545, 0, '2019-07-07', '2019-07-21', 3, '0000-00-00', 'moto', 'l', 44, 'rf', '', 0, 0, 0, 0, 0, 1),
(33, 'T14', 'sryx mlih', 'bzf sryx', 4, 0, '2019-07-21', '2019-07-28', 3, '0000-00-00', 'moto', 'l', 5, 'sryx', '', 1, 0, 0, 0, 0, 1),
(34, 'T14', 'habat', 'izan', 100, 0, '2019-07-13', '2019-07-21', 3, '0000-00-00', 'voiture', 'l', 14, 'nasyama', '', 0, 0, 0, 0, 0, 1),
(35, 'T14', 'bouira', 'bejaia', 54586, 0, '2019-06-06', '2019-06-10', 3, '0000-00-00', 'voiture', 'l', 14, 'baby/147*ha', '', 0, 0, 0, 0, 0, 1),
(36, 'T14', 'bouira', 'alger', 12, 0, '2019-07-01', '2019-07-26', 3, '0000-00-00', 'bus', 'l', 566, 'kaka/**98756', '', 0, 0, 0, 0, 0, 1),
(37, 'T14', 'Skikda, AlgÃ©rie', 'Alger Centre, AlgÃ©rie', 485, 1, '2019-07-20', '2019-07-25', 2, '2019-07-19', 'voiture', 'l', 145, 'kY/145-98', '', 1, 0, 0, 0, 0, 0),
(38, 'T14', 'Annaba, AlgÃ©rie', 'Oran, AlgÃ©rie', 969, 0, '2019-07-06', '2019-07-10', 3, '0000-00-00', 'voiture', 'l', 45, 'ml/9825', '', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `arret`
--

CREATE TABLE `arret` (
  `id` int(11) NOT NULL,
  `id_trajet` int(11) NOT NULL,
  `arret1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `arret2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `arret3` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `arret4` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `arret`
--

INSERT INTO `arret` (`id`, `id_trajet`, `arret1`, `arret2`, `arret3`, `arret4`) VALUES
(1, 1, 'rfrgr', 'ge', 'rg', 'gr'),
(2, 2, 'dg', 'gfe', 'fef', 'ef'),
(7, 3, 'ddddddddd', 'fef', 'fef', 'aaaa'),
(21, 5, 'fef', 'az', 'zaz', 'eeeeeeeeee'),
(22, 0, 'akbou', '', '', ''),
(23, 0, 'heh', 'h', 'e', 'gt'),
(24, 0, 'akbou', 'fr', 'rrrrrr', 'fffff'),
(25, 0, 'd', '', '', ''),
(26, 0, 'alger', 'tipaza', '', ''),
(27, 0, 'alger', 'tipaza', '', ''),
(28, 22, 'tip', 'hello', 'lvdv', ''),
(29, 0, 'ain salah', 'tamneaset', '', ''),
(30, 15, 'kaka', 'izan', '', ''),
(31, 23, 'jijel', 'canstantine', 'bejaia', ''),
(32, 17, 'alger', '', '', ''),
(33, 18, 'alger', '', '', ''),
(34, 19, 'alger', '', '', ''),
(35, 20, 'yahwayi', 'wayiway', '', ''),
(36, 21, 'paaaapp', 'papp', 'pappapapa', 'ppppop'),
(37, 24, 'paaaapp', 'papp', 'pappapapa', 'ppppop'),
(38, 25, 'salamtk', '3youni', '', ''),
(39, 26, 'mounika', '', '', ''),
(40, 27, 'mooooniiiiiiiiiiiiiiiiiiiiiiii', 'moninio', '', ''),
(41, 29, 'mooooniiiiiiiiiiiiiiiiiiiiiiii', 'moninio', '', ''),
(42, 30, 'ivilothen', 'vvvvvvvvvvv', '', ''),
(43, 0, 'na3ya', '', '', ''),
(44, 0, 'id', 'id', '', ''),
(45, 0, 'tima', 'ttttttttim', '', ''),
(46, 0, '', '', '', ''),
(47, 0, 'izzzzzan', '', '', ''),
(48, 33, 'sssryx', 'oisryx', '', ''),
(49, 34, 'lets go home', 'take u home', '', ''),
(50, 35, 'tisemsilt', '', '', ''),
(51, 36, 'tizi ouzou', '', '', ''),
(52, 37, 'setif', 'borj bouririj', '', ''),
(53, 38, 'tizi ouzou', 'canstantine', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `matricule` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numerodetelephone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `motdepasse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nature` int(11) NOT NULL,
  `premium` int(11) NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contrat` int(11) NOT NULL,
  `declarationhonneur` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pieceidentite` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `N°` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`matricule`, `nom`, `prenom`, `genre`, `numerodetelephone`, `email`, `motdepasse`, `nature`, `premium`, `photo`, `contrat`, `declarationhonneur`, `pieceidentite`, `N°`) VALUES
('P1', 'qlq', 'un', 'homme', '35', 'lala@esi.dz', 'lal', 0, 1, '', 0, '', '', 1),
('P2', 'gasmi', 'zeyneb', 'femme', '0123456987', 'iz_gasmi@esi.dz', 'qatchi', 0, 1, '', 0, 'ATTES/P2.png', 'ID/P2.png', 2),
('T3', 'benbrek', 'hassiba', 'femme', '0569876', 'ih_benbrek@esi.dz', 'zoubida', 1, 1, '', 0, 'ATTES/T3.docx', 'ID/T3.pdf', 3),
('T4', 'maya', 'larbi', '', '0699287812', 'mayalarbi9991@gmail.com', 'mother', 1, 1, '', 0, '../profil/ATTES/T4.jpg', '../profil/ID/T4.jpg', 4),
('T5', 'maya', 'larbi', '', '8949879', 'mayalarbi9991@gmail.com', 'mom', 1, 1, '', 0, '../profil/ATTES/T5.jpg', '../profil/ID/T5.jpg', 5),
('P6', 'amirat', 'rima', '', '544897', 'mayalarbi9991@gmail.com', 'papa', 0, 0, '', 0, '', '', 6),
('P7', 'izan', 'izan', '', '36453476', 'izan@fef.comdz', 'hello', 0, 0, '', 0, '', '', 7),
('P8', 'particulier', 'particulier', '', '02647879', 'particulier@gmail.com', 'particulier', 0, 0, '', 0, '', '', 8),
('T9', 'transporteur', 'transporteur', '', '458966', 'transporteur@gmail.com', 'transporteur', 1, 1, '', 0, '../profil/ATTES/T9.png', '../profil/ID/T9.png', 9),
('T10', 'reda', 'reda', '', '0798766292', 'reda9627@gmail.com', 'esi2019fier', 1, 0, '', 0, '', '', 10),
('T11', 'taha', 'taha', '', '4564', 'taha@gmail.com', 'taha', 1, 0, '', 0, '', '', 11),
('P12', 'mimi', 'mimi', '', '88', 'mimi@gmail.com', 'mimi', 0, 0, '', 0, '', '', 12),
('T13', 'transporteur', 'lux', '', '45466', 'trans@gmail.com', 'trans', 1, 1, '', 0, '../profil/ATTES/T13.png', '../profil/ID/T13.png', 13),
('T14', 'rima', 'amirat', '', '544', 'rima@gmail.com', 'rima', 1, 0, '', 0, '', '', 14);

-- --------------------------------------------------------

--
-- Structure de la table `trajet_colis`
--

CREATE TABLE `trajet_colis` (
  `id` int(11) NOT NULL,
  `id_trajet` int(11) NOT NULL,
  `id_colis` int(11) NOT NULL,
  `prix` double NOT NULL,
  `demande` int(11) NOT NULL,
  `effectue` int(11) NOT NULL,
  `donneravis` int(11) NOT NULL,
  `refuser` int(11) NOT NULL,
  `accepter` int(11) NOT NULL,
  `demande_colis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `trajet_colis`
--

INSERT INTO `trajet_colis` (`id`, `id_trajet`, `id_colis`, `prix`, `demande`, `effectue`, `donneravis`, `refuser`, `accepter`, `demande_colis`) VALUES
(2, 4, 78, 0, 0, 0, 0, 1, 0, 1),
(4, 5, 79, 0, 0, 0, 0, 0, 1, 0),
(14, 2, 80, 0, 0, 0, 0, 0, 0, 0),
(15, 5, 87, 0, 0, 0, 0, 0, 0, 0),
(16, 33, 82, 0, 1, 0, 0, 0, 1, 1),
(17, 5, 81, 0, 0, 0, 0, 1, 0, 0),
(18, 4, 85, 0, 0, 1, 1, 0, 0, 1),
(19, 5, 81, 0, 1, 0, 0, 1, 0, 0),
(20, 4, 85, 0, 1, 0, 0, 0, 0, 0),
(21, 33, 87, 0, 1, 0, 0, 1, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annoncecolis`
--
ALTER TABLE `annoncecolis`
  ADD PRIMARY KEY (`idcolis`);

--
-- Index pour la table `annoncetrajet`
--
ALTER TABLE `annoncetrajet`
  ADD PRIMARY KEY (`matriculetrajet`);

--
-- Index pour la table `arret`
--
ALTER TABLE `arret`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`N°`);

--
-- Index pour la table `trajet_colis`
--
ALTER TABLE `trajet_colis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annoncecolis`
--
ALTER TABLE `annoncecolis`
  MODIFY `idcolis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `annoncetrajet`
--
ALTER TABLE `annoncetrajet`
  MODIFY `matriculetrajet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `arret`
--
ALTER TABLE `arret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `N°` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `trajet_colis`
--
ALTER TABLE `trajet_colis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

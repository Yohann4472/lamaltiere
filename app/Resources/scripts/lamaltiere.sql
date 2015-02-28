-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db542482770.db.1and1.com
-- Généré le :  Dim 15 Février 2015 à 00:14
-- Version du serveur :  5.1.73-log
-- Version de PHP :  5.4.36-0+deb7u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db542482770`
--

-- drop table t_videos;
-- drop table t_type_videos;
-- drop table t_sites;
-- drop table t_types_site;
-- drop table t_modele;
-- drop table t_articles;
-- drop table t_categorie_modele;
-- drop table t_produit;

-- --------------------------------------------------------

--
-- Structure de la table `t_articles`
--

CREATE TABLE IF NOT EXISTS `t_articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `publicateur_article` varchar(255) DEFAULT NULL,
  `date_article` varchar(255) DEFAULT NULL,
  `commentaire_article` varchar(255) DEFAULT NULL,
  `chemin_article` varchar(255) DEFAULT NULL,
  `lang_article` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `t_articles`
--

INSERT INTO `t_articles` (`id_article`, `publicateur_article`, `date_article`, `commentaire_article`, `chemin_article`, `lang_article`) VALUES
(1, 'Le Publicateur Libre', 'Décembre 2010', '', 'Publicateur.jpg', 'fr'),
(2, 'Ouest France', 'Novembre 2010', 'Arrivée à Lévaré', 'OuestFrance.jpg', 'fr'),
(3, 'Presse Océan', 'Avril 2010', '', 'PresseOcean.pdf', 'fr'),
(4, 'Le Carnassier Magazine', 'Décembre-Janvier 2008-2009 n°1', '', 'CARN1.pdf', 'fr'),
(5, 'Le Carnassier Magazine', 'Décembre-Janvier 2008-2009 n°2', '', 'CARN2.pdf', 'fr'),
(6, 'Le Chasseur Francais', '', '', 'CHASS.pdf', 'fr'),
(7, 'Le Publicateur Libre', 'December 2010', '', 'Publicateur.jpg', 'en'),
(8, 'Ouest France', 'November 2010', 'Arrivée à Lévaré', 'OuestFrance.jpg', 'en'),
(9, 'Presse Océan', 'April 2010', '', 'PresseOcean.pdf', 'en'),
(10, 'Le Carnassier Magazine', 'December-January 2008-2009 n°1', '', 'CARN1.pdf', 'en'),
(11, 'Le Carnassier Magazine', 'December-January 2008-2009 n°1', '', 'CARN2.pdf', 'en'),
(12, 'Le Chasseur Francais', '', '', 'CHASS.pdf', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_modele`
--

CREATE TABLE IF NOT EXISTS `t_categorie_modele` (
  `id_cat_modele` int(2) NOT NULL AUTO_INCREMENT,
  `libelle_cat_modele` varchar(255) DEFAULT NULL,
  `lang_cat_modele` varchar(2) DEFAULT NULL,
  `produit_id` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_cat_modele`),
  KEY `produit_id` (`produit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `t_categorie_modele`
--

INSERT INTO `t_categorie_modele` (`id_cat_modele`, `libelle_cat_modele`, `lang_cat_modele`, `produit_id`) VALUES
(1, 'Nez plat relevé', 'fr', 1),
(2, 'Nez pointu', 'fr', 1),
(3, 'Tous', 'fr', 2),
(4, 'Garde corps', 'fr', 3),
(5, 'Roues - Tapis chekker', 'fr', 3),
(6, 'Vivier - Pompe de cale', 'fr', 3),
(7, 'Divers aménagements supplémentaires', 'fr', 3),
(8, 'Plateforme - Demi plateforme', 'fr', 3),
(9, 'Diverses options spécifiques', 'fr', 3),
(10, 'Sièges', 'fr', 3),
(11, 'Accastillage', 'fr', 3),
(12, 'Basculante', 'fr', 2),
(13, 'Réalisations spécifiques', 'fr', 3),
(14, 'Ponton - Passerelle', 'fr', 3),
(15, 'Nosed statement', 'en', 1),
(16, 'Pointed nose', 'en', 1),
(17, 'All', 'en', 2),
(18, 'Edge of the ground', 'en', 3),
(19, 'Wheels - Carpet', 'en', 3),
(20, 'Fish - Tank', 'en', 3),
(21, 'Various additional facilities', 'en', 3),
(22, 'Plateform - Half plateforme', 'en', 3),
(23, 'Various specific options', 'en', 3),
(24, 'Seats', 'en', 3),
(25, 'Schandlers', 'en', 3),
(26, 'Tilting', 'en', 2),
(27, 'Specifics realisations', 'en', 3),
(28, 'Pontoon - Bridge', 'en', 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_modele`
--

CREATE TABLE IF NOT EXISTS `t_modele` (
  `id_modele` varchar(50) NOT NULL,
  `nom_modele` varchar(255) DEFAULT NULL,
  `description_modele` varchar(1000) DEFAULT NULL,
  `capacite_modele` varchar(30) DEFAULT NULL,
  `moteur_modele` varchar(15) DEFAULT NULL,
  `longueur_bateau_modele` varchar(10) DEFAULT NULL,
  `longueur_remorque_modele` varchar(10) DEFAULT NULL,
  `largeur_bateau_modele` varchar(10) DEFAULT NULL,
  `largeur_remorque_modele` varchar(10) DEFAULT NULL,
  `hauteur_modele` varchar(10) DEFAULT NULL,
  `poids_modele` varchar(10) DEFAULT NULL,
  `charge_modele` varchar(10) DEFAULT NULL,
  `ptc_modele` varchar(10) DEFAULT NULL,
  `nb_rouleaux_modele` varchar(40) DEFAULT NULL,
  `roues_modele` varchar(20) DEFAULT NULL,
  `prix_modele` varchar(10) DEFAULT NULL,
  `boutique_modele` tinyint(1) DEFAULT '0',
  `video_modele` tinyint(1) DEFAULT '0',
  `commande_modele` tinyint(1) DEFAULT '0',
  `lang_modele` varchar(2) DEFAULT NULL,
  `categorie_modele_id` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_modele`, `lang_modele`),
  KEY `categorie_modele_id` (`categorie_modele_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_modele`
--

INSERT INTO `t_modele` (`id_modele`, `lang_modele`, `nom_modele`, `description_modele`, `capacite_modele`, `moteur_modele`, `longueur_bateau_modele`, `longueur_remorque_modele`, `largeur_bateau_modele`, `largeur_remorque_modele`, `hauteur_modele`, `poids_modele`, `charge_modele`, `ptc_modele`, `nb_rouleaux_modele`, `roues_modele`, `prix_modele`, `boutique_modele`, `video_modele`, `commande_modele`, `categorie_modele_id`) VALUES
('2700', 'fr', 'Modèle 2700', 'Ce modèle a forgé notre réputation. Légère, indestructibe, peu encombrante, dotée de poulie et taquets avant et arrière. Elle vous séduira dès les premiers coups de rames.', '2 personnes', '1 à 3 cv', '2m70', NULL, '1m20', NULL, '0m35', '31kg', '185kg', NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('2700', 'en', 'Model 2700', 'This model forged our reputation. \nLight, indestructibe, not at all cumbersome, endowed with pulleys and wedges fore and aft. \nShe will seduce you from the first pull of the oars.', '2 people', '1 to 3 cv', '2m70', NULL, '1m20', NULL, '0m35', '31kg', '185kg', NULL, NULL, NULL, NULL, 0, 0, 0, 15),
('285', 'fr', 'Modèle 285', 'Doté d''un équipement complet, ce modèle s''imposera trés vite comme référence dans sa catégorie. \nUn moteur de 3 à 6 cv suffit amplement.', '2-3 personnes', '3 à 5 cv', '2m85', NULL, '1m22', NULL, '0m41', '42kg', '220kg', NULL, NULL, NULL, NULL,0, 0, 0, 2),
('285', 'en', 'Model 285', 'Equipped with complete equipment, this model will be essential quickly like reference in its category. \nAn engine from 3 to 6 cv is enough amply.', '2-3 people', '3 to 5 cv', '2m85', NULL, '1m22', NULL, '0m41', '42kg', '220kg', NULL, NULL, NULL, NULL,0, 0, 0, 16),
('3000', 'fr', 'Modèle 3000', 'De taille polyvalente, c''est le modèle tout terrain par excellence.\nUn moteur de 3 à 6 cv. fait merveille, modèle éprouvé avec un moteur 9.9 cv.', '2-3 personnes', '3 à 5 cv', '3m', NULL, '1m22', NULL, '0m41', '42kg', '220kg', NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('3000', 'en', 'Model 3000', 'Of general-purpose size, it''s the model any ground by excellence. \nAn engine from 3 to 6 cv. makes wonder, model tested with an engine 9.9 cv. ', '2-3 people', '3 to 5 cv', '3m', NULL, '1m22', NULL, '0m41', '42kg', '220kg', NULL, NULL, NULL, NULL, 0, 0, 0, 15),
('3600', 'fr', 'Modèle 3600', 'Notre modèle Best seller. Un moteur de 3 à 6 cv. fait merveille, modèle éprouvé avec un moteur 9.9 cv.', '3-4 personnes', '3 à 6 cv', '3m65', NULL, '1m22', NULL, '0m41', '49kg', '270kg',  NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('3600', 'en', 'Model 3600', 'Our model Best seller. An engine from 3 to 6 cv. makes wonder, model tested with an engine 9.9 cv.', '3-4 people', '3 to 6 cv', '3m65', NULL, '1m22', NULL, '0m41', '49kg', '270kg', NULL, NULL, NULL, NULL, 0, 0, 0, 15),
('3600g', 'fr', 'Modèle 3600g', 'Notre nouveau modèle compact pour encore plus de stabilité et de confort. \nCe modèle reste très spacieux avec 3 à 4 personnes à bord. \nBien qu''éprouvé avec un 9.9, un moteur de 3 à 6 cv suffit amplement.', '3-4 personnes', '3 à 6 cv', '3m65', NULL, '1m50', NULL, '0m41', '52kg', '290kg', NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('3600g', 'en', 'Model 3600g', 'Our new compact model for even more stability and of comfort. \nThis model remains very roomy with 3 A 4 people has edge.\nAlthough experienced with one 9.9, an engine of 3 A 6 cv is enough amply.', '3-4 people', '3 to 6 cv', '3m65', NULL, '1m50', NULL, '0m41', '52kg', '290kg', NULL, NULL, NULL, NULL, 0, 0, 0, 15),
('385', 'fr', 'Modèle 385', '3 sièges - 2 positions rameurs. \nComme pour tous les autres modèles, son fond plat lui confère une stabilité et un volume habitable exceptionnel. \nComme le modèle 4000, elle se comporte bien en virage et déjauge facilement. \nUn moteur 9.9 cv. est séduisant mais rarement utilisable à pleine puissance.', '4-5 personnes', '6 à 9.9 cv', '3m85', NULL, '1m22', NULL, '0m43', '53kg', '300kg', NULL, NULL, NULL, NULL, 0, 0, 0, 2),
('385', 'en', 'Model 385', '3 sieges - 2 positions oarsmen. \nAs for all the other models, its flat bottom confers a stability and an exceptional livable volume to him. \nLike it model 4000, it behaves well in turn and dejauge easily. \nAn engine 9.9 cv. is tempting but seldom usable with full power.', '4-5 people', '6 to 9.9 cv', '3m85', NULL, '1m22', NULL, '0m43', '53kg', '300kg', NULL, NULL, NULL, NULL, 0, 0, 0, 16),
('4000', 'fr', 'Modèle 4000', '3 sièges et 2 positions rameurs.\nC''est la familiale particulièrement appréciée pour les grandes randonnées et les longues parties de pêche.\nUn moteur 9.9 cv. est séduisant mais rarement utilisable à pleine puissance.', '4-5 personnes', '6 à 9.9 cv', '4m', NULL, '1m22', NULL, '0m43', '53kg', '300kg', NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('4000', 'en', 'Model 4000', 'It''s family particularly the appreciee for the great excursions and the long fishing parties.\n3 seats and 2 positions oarsmen. \nAn engine 9.9 cv. is tempting but seldom usable with full power.', '4-5 people', '6 à 9.9 cv', '4m', NULL, '1m22', NULL, '0m43', '53kg', '300kg', NULL, NULL, NULL, NULL, 0, 0, 0, 15),
('4000g', 'fr', 'Modèle 4000g', 'Idéal pour vos parties de pêche aux carnassiers. \nLe modèle 4000 G est léger, spacieux, hyper stable et accessible.\nCe modèle est ce que l''on trouve de mieux sur le marché. \nUn moteur 9.9 cv. est séduisant mais rarement utilisable à pleine puissance.', '4-5 personnes', '6 à 9.9 cv', '4m', NULL, '1m52', NULL, '0m48', '65kg', '380kg', NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('4000g', 'en', 'Model 4000g', 'Ideal for your fishing parties to the carnivores. \nThe model 4000 G is light, roomy, hyper stable and accessible. \nThis model is what one finds of better on the market. \nAn engine 9.9 cv. is tempting but seldom usable with full power.', '4-5 people', '6 to 9.9 cv', '4m', NULL, '1m52', NULL, '0m48', '65kg', '380kg', NULL, NULL, NULL, NULL, 0, 0, 0, 15),
('5000g', 'fr', 'Modèle 5000g', 'Le modèle 5000G reste léger mais s''avère idéal en embarcation de travail ou pour la pêche sportive.\nLa stabilité de ce modèle est sans conteste excellente.\nUn moteur de 6 cv est suffisant mais ce modèle peut recevoir aisément un moteur de 15 cv.', '6-7 personnes', '6 à 15 cv', '5m', NULL, '1m52', NULL, '0m48', '87kg', '475kg', NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('5000g', 'en', 'Model 5000g', 'The modele 5000G rest leger but turns out ideal in working boat or for the sports fishing. \nThe stability of this model is unquestionably excellent. \nAn engine of 6 cv is sufficient but this model can receive easily an engine of 15 cv.', '6-7 people', '6 to 15 cv', '5m', NULL, '1m52', NULL, '0m48', '87kg', '475kg', NULL, NULL, NULL, NULL, 0, 0, 0, 15),
('BAE', 'fr', 'Banc escamotable', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 7),
('BAE', 'en', 'Retractable bench', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 21),
('BAPTI', 'fr', 'Baptiser son embarcation', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '40,00 €', 1, 0, 0, 11),
('BAPTI', 'en', 'Baptized his boat', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '40,00 €', 1, 0, 0, 25),
('BERGE', 'fr', 'Nettoyage des berges', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 13),
('BERGE', 'en', 'Shoreline cleanup', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 27),
('CAMPA', 'fr', 'Coffre avant marche-pied avant', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 7),
('CAMPA', 'en', 'Market-foot front trunk before', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 21),
('CHGA', 'fr', 'Chaîne galva', 'Prix au mètre. Vacarme de la chaîne galvanisé', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '5,00 €', 1, 0, 1, 11),
('CHGA', 'en', 'String galva', 'Price per meter. Galvanised chain din', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '5,00 €', 1, 0, 1, 25),
('COS', 'fr', 'Coffres supplémentaires (toutes dimensions)', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 7),
('COS', 'en', 'Additional chests (all sizes)', NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 21),
('CTD', 'fr', 'Cordage 3 torons diam 10', 'Prix au mètre', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '3,00 €', 1, 0, 1, 11),
('CTD', 'en', 'Rope 3 torons diam 10', 'Price per meter. Polyester braided rope without core of excellent quality\r\n- Sinkable\r\n- Easy to plait\r\n- Good resistance to abrasion\r\n- Undeformable working\r\n- Blue', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '3,00 €', 1, 0, 1, 25),
('DIVERS', 'fr', 'Divers', '', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '', 0, 0, 0, 13),
('DIVERS', 'en', 'Various', '', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '', 0, 0, 0, 27),
('ECH', 'fr', 'Echelle', 'Échelle d''embarquement pliable', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 9),
('ECH', 'en', 'Scale', 'Boarding foldable ladder', NULL, NULL, '', '', NULL,'', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 23),
('EMBA', 'fr', 'Embase de siège', 'Haut de pedestral pivotant pour siège . Il peut être utilisé de deux manières différentes . Elle peut être réglée entre la base et le siège, tourner la base dans un tournant . Il peut également être utilisé comme une base rotative.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '40,00 €', 1, 0, 0, 10),
('EMBA', 'en', 'Seat frame', 'Turnable pedestral top for seat. It can be used in two different ways. It can be adjusted between base and seat, turning the base into rotary one. It can also be used as a rotary base.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '40,00 €', 1, 0, 0, 24),
('ENTRET', 'fr', 'Entretoise', 'Taille de 30 cm et en inox', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '55,00 €', 1, 0, 0, 10),
('ENTRET', 'en', 'Brace', 'Size of 30 cm and stainless steel', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '55,00 €', 1, 0, 0, 24),
('GCAV', 'fr', 'Garde corps avant-arrière', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 4),
('GCAV', 'en', 'Front Body Guard', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 18),
('GCEN', 'fr', 'Garde corps entier', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 4),
('GCEN', 'en', 'Full Body Guard', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 18),
('GRAP', 'fr', 'Grappin de 4kg', 'Ancre pliante. Large clou. Acier galvanisé à chaud.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '25,00 €', 1, 0, 0, 11),
('GRAP', 'en', 'Folding anchor 4kg', 'Folding Anchor. Wide nail. Hot galvanized steel.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '25,00 €', 1, 0, 0, 25),
('HYDRO', 'fr', 'Hydroglisseur', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 13),
('HYDRO', 'en', 'Hydroplane', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 27),
('N271AP', 'fr', 'Modèle N 271 AP', 'Le top de la remorque routière inspirée de la technologie automobile avec ses ressorts hélicoidaux epoxy et ses amortisseurs hydroliques. Moyeux étanches et une garantie de deux ans', NULL, NULL, '3.70', '4.00', NULL, '1.69', NULL, NULL, '240', '350', '2 patins + 3 rouleaux', '145/70x13', NULL, 0, 0, 0, 3),
('N271AP', 'en', 'Model N 271 AP', 'Le top de la remorque routière inspirée de la technologie automobile avec ses ressorts hélicoidaux epoxy et ses amortisseurs hydroliques. Moyeux étanches et une garantie de deux ans', NULL, NULL, '3.70', '4.00', NULL, '1.69', NULL, NULL, '240', '350', '2 patins + 3 rouleaux', '145/70x13', NULL, 0, 0, 0, 17),
('N331A', 'fr', 'Modèle N331 A', '', NULL, NULL, '4.50', '4.70', NULL, '1.89', NULL, NULL, '350', '470', '2 rampes + 3 rouleaux', '145x70x13', NULL, 0, 0, 0, 12),
('N331A', 'en', 'Model N331 A', '', NULL, NULL, '4.50', '4.70', NULL, '1.89', NULL, NULL, '350', '470', '2 rampes + 3 rouleaux', '145x70x13', NULL, 0, 0, 0, 26),
('PABA', 'fr', 'Pare-battage', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '15,00 €', 1, 0, 0, 11),
('PABA', 'en', 'Fender blue', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '15,00 €', 1, 0, 0, 25),
('PLA', 'fr', 'Plateforme', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 8),
('PLA', 'en', 'Plateform', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 22),
('PLATI', 'fr', 'Platine de siège', 'Base de siège. Elle peut être utilisé de deux manières différentes . Elle peut être réglée entre la base et le siège, tourner la base dans un tournant . Elle peut également être utilisé comme une base rotative.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '28,00€', 1, 0, 0, 10),
('PLATI', 'en', 'Platinium seat', 'Seat base. It can be used in two different ways. It can be adjusted between base and seat, turning the base into rotary one. It can also be used as a rotary base.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '28,00€', 1, 0, 0, 24),
('POH', 'fr', 'Porte hameçon', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 9),
('POH', 'en', 'Holder hook', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 23),
('POLAIR', 'fr', 'Polaire bleu marine', 'Polaire bleu marine brodé\r\nLa brodure est de couleur orange\r\nTaille XL', '', '', '', '', '', '', '', '', '', '', '', '', '35,00 €', 1, 0, 0, 11),
('POLAIR', 'en', 'Navy blue fleece', 'Navy blue fleece\r\nThe orange brodure\r\nSize XL', '', '', '', '', '', '', '', '', '', '', '', '', '35,00 €', 1, 0, 0, 25),
('POM', 'fr', 'Pompe de cale', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 6),
('POM', 'en', 'Bilge pump', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 20),
('PONTON', 'fr', 'Ponton - Passerelle', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 1, 14),
('PONTON', 'en', 'Pontoon - Bridge', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 1, 28),
('POR', 'fr', 'Porte rames', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 9),
('POR', 'en', 'Rowing door', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 23),
('ROE', 'fr', 'Roues escamotables', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 5),
('ROE', 'en', 'Retractable wheels', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 19),
('SANG', 'fr', 'Sangle “La Maltière”', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '12,00 €', 1, 0, 0, 11),
('SANG', 'en', 'Strap “La Maltière”', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '12,00 €', 1, 0, 0, 25),
('SB', 'fr', 'Modèle SB', '', NULL, NULL, '4.50', '4.00 / 4.5', NULL, '1.69', NULL, NULL, '220', '300', '2 patins', '400x480x8', NULL, 0, 0, 0, 3),
('SB', 'en', 'Model SB', '', NULL, NULL, '4.50', '4.00 / 4.5', NULL, '1.69', NULL, NULL, '220', '300', '2 patins', '400x480x8', NULL, 0, 0, 0, 17),
('SCAD', 'fr', 'Siège de combat assis/debout', 'Disponible en bleu, vert ou gris. Largeur de 38 cm avec 7,5 cm de plus à l''arrière.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '50,00 €', 1, 0, 0, 10),
('SCAD', 'en', 'Seat', 'Blue or green and grey. Width 38 cm with 7.5 cm rise at the back.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '50,00 €', 1, 0, 0, 24),
('SCDM', 'fr', 'Siège de combat avec dossier matelassé', 'Extrêment confortable et résistant. Compatible avec toutes les bases de sièges.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '80,00 €', 1, 0, 0, 10),
('SCDM', 'en', 'Foldable seat-grey', 'Extremely comfortable and resistant. Combined with all seat bases.', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '80,00 €', 1, 0, 0, 24),
('SCNA', 'fr', 'Support de cannes noir à adapter', 'Réglable avec fixation latérale , diamètre 40 mm', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '25,00€', 1, 0, 0, 11),
('SCNA', 'en', 'Rod holder plastic', 'Adjustable with side mount, diam 40 mm', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '25,00€', 1, 0, 0, 25),
('SMA', 'fr', 'Support moteur avant', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 9),
('SMA', 'en', 'Front engine mount', NULL, NULL, NULL,  '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 23),
('SUC', 'fr', 'Support de cannes', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL,  '', '', '', '', NULL, 0, 0, 0, 9),
('SUC', 'en', 'Support cane', NULL, NULL, NULL,  '', '', NULL,  '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 23),
('TAC', 'fr', 'Tapis chekker', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 5),
('TAC', 'en', 'Carpet chekker', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 19),
('TAPC', 'fr', 'Tapis chekker', 'Prix au mètre carré', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '29,90 €', 1, 0, 1, 11),
('TAPC', 'en', 'Chekker carpet', 'Price per square meter', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '29,90 €', 1, 0, 1, 25),
('TBMPP', 'fr', 'Taud bleu marine prêt à poser', 'Fournit une protection absolue contre le soleil sur de petites structures gonflables et de l''artisanat . Fait de toile enduite de PU , résistant aux UV et le poids de 330 gr/m² . Ses cadres sont en r. diam 22 mm en acier et ne sont pas amovible, vous débarrassait de l''obligation de les mettre ensemble . Il bénéficie d''une garantie de tissu de 3 ans . Couleur: Bleu', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '200,00 €', 1, 0, 0, 11),
('TBMPP', 'en', 'Foldable Stainless steel canopy (with three frames)', 'Provides absolute protection from the sun on small inflatables and crafts. Made of canvas coated by PU, UV resistant and weight 330 gr/m². Its frames are made of st. steel diam 22 mm and are not removable disposing you from the duty of putting them together. It carries a 3 year fabric guarantee. Color : Blue', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', '200,00 €', 1, 0, 0, 25),
('VIV', 'fr', 'Vivier', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 6),
('VIV', 'en', 'Fish tank', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, 0, 0, 0, 20);

-- --------------------------------------------------------

--
-- Structure de la table `t_produit`
--

CREATE TABLE IF NOT EXISTS `t_produit` (
  `id_produit` int(1) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;

--
-- Contenu de la table `t_produit`
--

INSERT INTO `t_produit` (`id_produit`, `nom_produit`) VALUES
(1, 'Les barques'),
(2, 'Les remorques'),
(3, 'Les options');

-- --------------------------------------------------------

--
-- Structure de la table `t_sites`
--

CREATE TABLE IF NOT EXISTS `t_sites` (
  `id_site` int(11) NOT NULL AUTO_INCREMENT,
  `nom_site` varchar(255) DEFAULT NULL,
  `adresse_site` varchar(255) DEFAULT NULL,
  `id_type_site` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_site`),
  KEY `id_type_site` (`id_type_site`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `t_sites`
--

INSERT INTO `t_sites` (`id_site`, `nom_site`, `adresse_site`, `id_type_site`) VALUES
(1, 'http://www.magicsilure.fr', 'http://www.magicsilure.fr', 1),
(2, 'http://www.facebook.com/capbanga', 'http://www.facebook.com/capbanga', 1),
(3, 'http://pechaillon28.over-blog.com', 'http://pechaillon28.over-blog.com', 1),
(4, 'http://gabiche37.skyrock.com/58.html', 'http://gabiche37.skyrock.com/58.html', 1),
(5, 'http://www.guidepechelaurent.com', 'http://www.guidepechelaurent.com', 1),
(6, 'Artisans de France : De nombreuses ressources professionnelles pour les artisans et particuliers. Consulter l''annuaire de l''artisanat de France.', 'http://www.artisanat-de-france.fr/', 2),
(7, 'Inox du bocage : Fabrique artisanale de sieges de bateaux inox', 'http://www.inoxdubocage.com/', 2),
(8, 'Commune de Lévaré en Mayenne', 'http://levare.fr/', 2),
(9, 'Google : Moteur de recherche', 'http://www.google.com', 2),
(10, 'http://www.roussillonfishing.com/', 'http://www.roussillonfishing.com/', 1),
(11, 'Palais Royal du Maroc', '', 3),
(12, 'Protection Civile (Les Pompiers)', '', 3),
(13, 'Total', '', 3),
(14, 'AREVA', '', 3),
(15, 'CGM CMA', '', 3),
(16, 'Les Châteaux de France', '', 3),
(17, 'Les Gîtes de France', '', 3),
(18, 'Lac de La Landie', '', 3),
(19, 'L’université de Louvain (Belgique)', '', 3),
(20, 'Conseil généraux, essentiellement pour nettoyage des berges', '', 3),
(21, 'Brezac Artifices', '', 3),
(22, 'Cap Banga, Niger', '', 3),
(23, 'Club d’avirons', '', 3),
(24, 'Club de voile', '', 3),
(25, 'Cabinet de Géomètre', '', 3),
(26, 'Office National des Forêts', '', 3),
(27, 'Mairies de France', '', 3),
(28, 'Fédération Régional d’Art Contemporain', '', 3),
(29, 'Akwalys (Vietnam)', '', 3),
(30, 'CNRS', '', 3),
(31, 'Crozel Travaux Public', '', 3),
(32, 'Parc Floral de Maulévrier', '', 3),
(33, 'Parc National Des Ecrins', '', 3),
(34, 'Euro Trading', '', 3),
(35, 'Hotellerie Des Gorges', '', 3),
(36, 'Laurent, guide de Pêche professionnel en Irlande', '', 3),
(37, 'Golf de Nouméa (Nouvelle Calédonie)', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_type_videos`
--

CREATE TABLE IF NOT EXISTS `t_type_videos` (
  `id_type_video` int(2) NOT NULL AUTO_INCREMENT,
  `nom_type_video` varchar(100) NOT NULL,
  PRIMARY KEY (`id_type_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `t_type_videos`
--

INSERT INTO `t_type_videos` (`id_type_video`, `nom_type_video`) VALUES
(1, 'Vidéos La Maltiere'),
(2, 'Vidéos clients');

-- --------------------------------------------------------

--
-- Structure de la table `t_types_site`
--

CREATE TABLE IF NOT EXISTS `t_types_site` (
  `id_type_site` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_site` varchar(255) DEFAULT NULL,
  `lang_type_site` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id_type_site`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `t_types_site`
--

INSERT INTO `t_types_site` (`id_type_site`, `nom_type_site`, `lang_type_site`) VALUES
(1, 'Sites de clients', 'fr'),
(2, 'Sites de professionnels', 'fr'),
(3, 'Références professionnelles', 'fr'),
(4, 'Customers website', 'en'),
(5, 'Professionals website', 'en'),
(6, 'Professionals references', 'en');

-- --------------------------------------------------------

--
-- Structure de la table `t_videos`
--

CREATE TABLE IF NOT EXISTS `t_videos` (
  `id_video` int(3) NOT NULL AUTO_INCREMENT,
  `url_video` varchar(100) NOT NULL,
  `id_type_video` int(2) NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `t_videos_ibfk_1` (`id_type_video`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `t_videos`
--

INSERT INTO `t_videos` (`id_video`, `url_video`, `id_type_video`) VALUES
(1, 'http://www.youtube.com/embed/jb26ufyNhvc', 1),
(2, 'http://www.youtube.com/embed/DsMmCYP2SNs', 1),
(3, 'http://www.youtube.com/embed/YMmysCNPL8g', 1),
(4, 'http://www.youtube.com/embed/4FjgGR3F-DI', 1),
(5, 'http://www.youtube.com/embed/d5VcvTrNSdw', 1),
(6, 'http://www.youtube.com/embed/p2CYzMHTR3Q', 1),
(7, 'http://www.youtube.com/embed/NO6levZ4HlY', 1),
(8, 'http://www.youtube.com/embed/qFZPVVqqg5M', 1),
(9, 'http://www.youtube.com/embed/ZFi7ROVr4UQ', 2),
(10, 'http://www.youtube.com/embed/zmjhHXtC3fk', 2),
(11, 'http://www.youtube.com/embed/e6LSEbsWAEI', 2),
(12, 'http://www.youtube.com/embed/qFZPVVqqg5M', 2),
(13, 'http://www.youtube.com/embed/c4Cl2kIgNT4', 2),
(14, '//www.dailymotion.com/embed/video/xpgu37', 2),
(15, '//www.dailymotion.com/embed/video/xqsngd', 2);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_categorie_modele`
--
ALTER TABLE `t_categorie_modele`
  ADD CONSTRAINT `t_categorie_modele_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `t_produit` (`id_produit`);

--
-- Contraintes pour la table `t_modele`
--
ALTER TABLE `t_modele`
  ADD CONSTRAINT `t_modele_ibfk_1` FOREIGN KEY (`categorie_modele_id`) REFERENCES `t_categorie_modele` (`id_cat_modele`);

--
-- Contraintes pour la table `t_modele`
--
ALTER TABLE `t_sites`
  ADD CONSTRAINT `t_sites_ibfk_1` FOREIGN KEY (`id_type_site`) REFERENCES `t_types_site` (`id_type_site`);

--
-- Contraintes pour la table `t_modele`
--
ALTER TABLE `t_videos`
  ADD CONSTRAINT `t_videos_ibfk_1` FOREIGN KEY (`id_type_video`) REFERENCES `t_type_videos` (`id_type_video`);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

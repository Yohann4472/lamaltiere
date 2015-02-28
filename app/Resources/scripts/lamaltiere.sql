-- phpMyAdmin SQL Dump
DROP DATABASE lamaltiere;
--
-- Base de données: `lamaltiere`
--
CREATE DATABASE `lamaltiere` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lamaltiere`;

-- --------------------------------------------------------

--
-- Structure de la table `t_articles`
--

CREATE TABLE IF NOT EXISTS `t_articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `publicateur_article` varchar(255) DEFAULT NULL,
  `date_article_fr` varchar(255) DEFAULT NULL,
  `date_article_en` varchar(255) DEFAULT NULL,
  `commentaire_article_fr` varchar(255) DEFAULT NULL,
  `commentaire_article_en` varchar(255) DEFAULT NULL,
  `chemin_article` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_articles`
--

INSERT INTO `t_articles` (`id_article`, `publicateur_article`, `date_article_fr`, `date_article_en`, `commentaire_article_fr`, `commentaire_article_en`, `chemin_article`) VALUES
(1, 'Le Publicateur Libre', 'Décembre 2010', 'December 2010', '', '', 'Publicateur.jpg'),
(2, 'Ouest France', 'Novembre 2010', 'November 2010', 'Arrivée à Lévaré', 'Arrivée à Lévaré', 'OuestFrance.jpg'),
(3, 'Presse Océan', 'Avril 2010', 'April 2010', '', '', 'PresseOcean.pdf'),
(4, 'Le Carnassier Magazine', 'Décembre-Janvier 2008-2009 n°1', 'December-January 2008-2009 n°1', '', '', 'CARN1.pdf'),
(5, 'Le Carnassier Magazine', 'Décembre-Janvier 2008-2009 n°2', 'December-January 2008-2009 n°1', '', '', 'CARN2.pdf'),
(6, 'Le Chasseur Francais', '', '', '', '', 'CHASS.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie_modele`
--

CREATE TABLE IF NOT EXISTS `t_categorie_modele` (
  `id_cat_modele` int(2) NOT NULL AUTO_INCREMENT,
  `libelle_cat_modele_fr` varchar(255) DEFAULT NULL,
  `libelle_cat_modele_en` varchar(255) DEFAULT NULL,
  `id_produit` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_cat_modele`),
  KEY `id_produit` (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_categorie_modele`
--

INSERT INTO `t_categorie_modele` (`id_cat_modele`, `libelle_cat_modele_fr`, `libelle_cat_modele_en`, `id_produit`) VALUES
(1, 'Nez plat relevé', 'Nosed statement', 1),
(2, 'Nez pointu', 'Pointed nose', 1),
(3, 'Tous', 'All', 2),
(4, 'Garde corps', 'Garde corps', 3),
(5, 'Roues - Tapis chekker', 'Roues - Tapis chekker', 3),
(6, 'Vivier - Pompe de cale', 'Vivier - Pompe de cale', 3),
(7, 'Divers aménagements supplémentaires', 'Divers aménagements supplémentaires', 3),
(8, 'Plateforme - Demi plateforme', 'Plateforme - Demi plateforme', 3),
(9, 'Diverses options spécifiques', 'Diverses options spécifiques', 3),
(10, 'Sièges', 'Sièges', 3),
(11, 'Accastillage', 'Accastillage', 3),
(12, 'Basculante', 'Basculante', 2),
(13, 'Réalisations spécifiques', 'Specifics realisations', 3);


-- --------------------------------------------------------

--
-- Structure de la table `t_modele`
--

CREATE TABLE IF NOT EXISTS `t_modele` (
  `id_modele` varchar(50) NOT NULL,
  `nom_modele_fr` varchar(255) DEFAULT NULL,
  `nom_modele_en` varchar(255) DEFAULT NULL,
  `description_modele_fr` varchar(1000) DEFAULT NULL,
  `description_modele_en` varchar(1000) DEFAULT NULL,
  `capacite_modele_fr` varchar(30) DEFAULT NULL,
  `capacite_modele_en` varchar(30) DEFAULT NULL,
  `moteur_modele_fr` varchar(15) DEFAULT NULL,
  `moteur_modele_en` varchar(15) DEFAULT NULL,
  `longueur_bateau_modele_fr` varchar(10) DEFAULT NULL,
  `longueur_bateau_modele_en` varchar(10) DEFAULT NULL,
  `longueur_remorque_modele_fr` varchar(10) DEFAULT NULL,
  `longueur_remorque_modele_en` varchar(10) DEFAULT NULL,
  `largeur_bateau_modele_fr` varchar(10) DEFAULT NULL,
  `largeur_bateau_modele_en` varchar(10) DEFAULT NULL,
  `largeur_remorque_modele_fr` varchar(10) DEFAULT NULL,
  `largeur_remorque_modele_en` varchar(10) DEFAULT NULL,
  `hauteur_modele_fr` varchar(10) DEFAULT NULL,
  `hauteur_modele_en` varchar(10) DEFAULT NULL,
  `poids_modele_fr` varchar(10) DEFAULT NULL,
  `poids_modele_en` varchar(10) DEFAULT NULL,
  `charge_modele_fr` varchar(10) DEFAULT NULL,
  `charge_modele_en` varchar(10) DEFAULT NULL,
  `ptc_modele_fr` varchar(10) DEFAULT NULL,
  `ptc_modele_en` varchar(10) DEFAULT NULL,
  `nb_rouleaux_modele_fr` varchar(40) DEFAULT NULL,
  `nb_rouleaux_modele_en` varchar(40) DEFAULT NULL,
  `roues_modele_fr` varchar(20) DEFAULT NULL,
  `roues_modele_en` varchar(20) DEFAULT NULL,
  `prix_modele` varchar(10) DEFAULT NULL,
  `boutique_modele` tinyint(1) DEFAULT false,
  `video_modele` tinyint(1) DEFAULT false,
  `commande_modele` tinyint(1) DEFAULT false,
  `id_cat_modele` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_modele`),
  KEY `id_cat_modele` (`id_cat_modele`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_modele`
--

INSERT INTO `t_modele` (`id_modele`, `nom_modele_fr`, `nom_modele_en`, `description_modele_fr`, `description_modele_en`, `capacite_modele_fr`, `capacite_modele_en`, `moteur_modele_fr`, `moteur_modele_en`, `longueur_bateau_modele_fr`, `longueur_bateau_modele_en`, `longueur_remorque_modele_fr`, `longueur_remorque_modele_en`, `largeur_bateau_modele_fr`, `largeur_bateau_modele_en`, `largeur_remorque_modele_fr`, `largeur_remorque_modele_en`, `hauteur_modele_fr`, `hauteur_modele_en`, `poids_modele_fr`, `poids_modele_en`, `charge_modele_fr`, `charge_modele_en`, `ptc_modele_fr`, `ptc_modele_en`, `nb_rouleaux_modele_fr`, `nb_rouleaux_modele_en`, `roues_modele_fr`, `roues_modele_en`, `prix_modele`, `boutique_modele`, `video_modele`, `commande_modele`, `id_cat_modele`) VALUES
('2700', 'Modèle 2700', 'Model 2700', 'Ce modèle a forgé notre réputation. Légère, indestructibe, peu encombrante, dotée de poulie et taquets avant et arrière. Elle vous séduira dès les premiers coups de rames.', 'This model forged our reputation. \nLight, indestructibe, not at all cumbersome, endowed with pulleys and wedges fore and aft. \nShe will seduce you from the first pull of the oars.', '2 personnes', '2 people', '1 à 3 cv', '1 to 3 cv', '2m70', '2m70', NULL, NULL, '1m20', '1m20', NULL, NULL, '0m35', '0m35', '31kg', '31kg', '185kg', '185kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('3000', 'Modèle 3000', 'Model 3000', 'De taille polyvalente, c''est le modèle tout terrain par excellence.\nUn moteur de 3 à 6 cv. fait merveille, modèle éprouvé avec un moteur 9.9 cv.', 'Of general-purpose size, it''s the model any ground by excellence. \nAn engine from 3 to 6 cv. makes wonder, model tested with an engine 9.9 cv. ', '2-3 personnes', '2-3 people', '3 à 5 cv', '3 to 5 cv', '3m', '3m', NULL, NULL, '1m22', '1m22', NULL, NULL, '0m41', '0m41', '42kg', '42kg', '220kg', '220kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('3600', 'Modèle 3600', 'Model 3600', 'Notre modèle Best seller. Un moteur de 3 à 6 cv. fait merveille, modèle éprouvé avec un moteur 9.9 cv.', 'Our model Best seller. An engine from 3 to 6 cv. makes wonder, model tested with an engine 9.9 cv.', '3-4 personnes', '3-4 people', '3 à 6 cv', '3 to 6 cv', '3m65', '3m65', NULL, NULL, '1m22', '1m22', NULL, NULL, '0m41', '0m41', '49kg', '49kg', '270kg', '270kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('3600g', 'Modèle 3600g', 'Model 3600g', 'Notre nouveau modèle compact pour encore plus de stabilité et de confort. \nCe modèle reste très spacieux avec 3 à 4 personnes à bord. \nBien qu''éprouvé avec un 9.9, un moteur de 3 à 6 cv suffit amplement.', 'Our new compact model for even more stability and of comfort. \nThis model remains very roomy with 3 A 4 people has edge.\nAlthough experienced with one 9.9, an engine of 3 A 6 cv is enough amply.', '3-4 personnes', '3-4 people', '3 à 6 cv', '3 to 6 cv', '3m65', '3m65', NULL, NULL, '1m50', '1m50', NULL, NULL, '0m41', '0m41', '52kg', '52kg', '290kg', '290kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('4000', 'Modèle 4000', 'Model 4000', '3 sièges et 2 positions rameurs.\nC''est la familiale particulièrement appréciée pour les grandes randonnées et les longues parties de pêche.\nUn moteur 9.9 cv. est séduisant mais rarement utilisable à pleine puissance.', 'It''s family particularly the appreciee for the great excursions and the long fishing parties.\n3 seats and 2 positions oarsmen. \nAn engine 9.9 cv. is tempting but seldom usable with full power.', '4-5 personnes', '4-5 people', '6 à 9.9 cv', '6 to 9.9 cv', '4m', '4m', NULL, NULL, '1m22', '1m22', NULL, NULL, '0m43', '0m43', '53kg', '53kg', '300kg', '300kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('4000g', 'Modèle 4000g', 'Model 4000g', 'Idéal pour vos parties de pêche aux carnassiers. \nLe modèle 4000 G est léger, spacieux, hyper stable et accessible.\nCe modèle est ce que l''on trouve de mieux sur le marché. \nUn moteur 9.9 cv. est séduisant mais rarement utilisable à pleine puissance.', 'Ideal for your fishing parties to the carnivores. \nThe model 4000 G is light, roomy, hyper stable and accessible. \nThis model is what one finds of better on the market. \nAn engine 9.9 cv. is tempting but seldom usable with full power.', '4-5 personnes', '4-5 people', '6 à 9.9 cv', '6 to 9.9 cv', '4m', '4m', NULL, NULL, '1m52', '1m52', NULL, NULL, '0m48', '0m48', '65kg', '65kg', '380kg', '380kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('5000g', 'Modèle 5000g', 'Model 5000g', 'Le modèle 5000G reste léger mais s''avère idéal en embarcation de travail ou pour la pêche sportive.\nLa stabilité de ce modèle est sans conteste excellente.\nUn moteur de 6 cv est suffisant mais ce modèle peut recevoir aisément un moteur de 15 cv.', 'The modele 5000G rest leger but turns out ideal in working boat or for the sports fishing. \nThe stability of this model is unquestionably excellent. \nAn engine of 6 cv is sufficient but this model can receive easily an engine of 15 cv.', '6-7 personnes', '6-7 people', '6 à 15 cv', '6 to 15 cv', '5m', '5m', NULL, NULL, '1m52', '1m52', NULL, NULL, '0m48', '0m48', '87kg', '87kg', '475kg', '475kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1),
('285', 'Modèle 285', 'Model 285', 'Doté d''un équipement complet, ce modèle s''imposera trés vite comme référence dans sa catégorie. \nUn moteur de 3 à 6 cv suffit amplement.', 'Equipped with complete equipment, this model will be essential quickly like reference in its category. \nAn engine from 3 to 6 cv is enough amply.', '2-3 personnes', '2-3 people', '3 à 5 cv', '3 to 5 cv', '2m85', '2m85', NULL, NULL, '1m22', '1m22', NULL, NULL, '0m41', '0m41', '42kg', '42kg', '220kg', '220kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2),
('385', 'Modèle 385', 'Model 385', '3 sièges - 2 positions rameurs. \nComme pour tous les autres modèles, son fond plat lui confère une stabilité et un volume habitable exceptionnel. \nComme le modèle 4000, elle se comporte bien en virage et déjauge facilement. \nUn moteur 9.9 cv. est séduisant mais rarement utilisable à pleine puissance.', '3 sieges - 2 positions oarsmen. \nAs for all the other models, its flat bottom confers a stability and an exceptional livable volume to him. \nLike it model 4000, it behaves well in turn and dejauge easily. \nAn engine 9.9 cv. is tempting but seldom usable with full power.', '4-5 personnes', '4-5 people', '6 à 9.9 cv', '6 to 9.9 cv', '3m85', '3m85', NULL, NULL, '1m22', '1m22', NULL, NULL, '0m43', '0m43', '53kg', '53kg', '300kg', '300kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 2),
('SB', 'Modèle SB', 'Model SB', 'Ajouter une description', 'Ajouter une description', NULL, NULL, NULL, NULL, '4.50', '4.50', '4.00 / 4.5', '4.00 / 4.5', NULL, NULL, '1.69', '1.69', NULL, NULL, NULL, NULL, '220', '220', '300', '300', '2 patins', '2 patins', '400x480x8', '400x480x8', NULL, 0, 0, 0, 3),
('N271AP', 'Modèle N 271 AP', 'Model N 271 AP', 'Le top de la remorque routière inspirée de la technologie automobile avec ses ressorts hélicoidaux epoxy et ses amortisseurs hydroliques. Moyeux étanches et une garantie de deux ans', 'Le top de la remorque routière inspirée de la technologie automobile avec ses ressorts hélicoidaux epoxy et ses amortisseurs hydroliques. Moyeux étanches et une garantie de deux ans', NULL, NULL, NULL, NULL, '3.70', '3.70', '4.00', '4.00', NULL, NULL, '1.69', '1.69', NULL, NULL, NULL, NULL, '240', '240', '350', '350', '2 patins + 3 rouleaux', '2 patins + 3 rouleaux', '145/70x13', '145/70x13', NULL, 0, 0, 0, 3),
('N331A', 'Modèle N331 A', 'Model N331 A', 'Ajouter une description', 'Ajouter une description', NULL, NULL, NULL, NULL, '4.50', '4.50', '4.70', '4.70', NULL, NULL, '1.89', '1.89', NULL, NULL, NULL, NULL, '350', '350', '470', '470', '2 rampes + 3 rouleaux', '2 rampes + 3 rouleaux', '145x70x13', '', NULL, 0, 0, 0, 12),
('GCAV', 'Garde corps avant-arrière', 'Garde corps avant', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 4),
('GCEN', 'Garde corps entier', 'Garde corps entier', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 4),
('TAC', 'Tapis chekker', 'Tapis chekker', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 5),
('ROE', 'Roues escamotables', 'Roues escamotables', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 5),
('VIV', 'Vivier', 'Vivier', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 6),
('POM', 'Pompe de cale', 'Pompe de cale', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 6),
('CAMPA', 'Coffre avant marche-pied avant', 'Coffre avant marche-pied avant', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 7),
('BAE', 'Banc escamotable', 'Banc escamotable', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 7),
('COS', 'Coffres supplémentaires (toutes dimensions)', 'Coffres supplémentaires (toutes dimensions)', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 7),
('PLA', 'Plateforme', 'Plateforme', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 8),
('SMA', 'Support moteur avant', 'Support moteur avant', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 9),
('POR', 'Porte rames', 'Porte rames', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 9),
('SUC', 'Support de cannes', 'Support de cannes', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 9),
('POH', 'Porte hameçon', 'Porte hameçon', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 9),
('ECH', 'Echelle', 'Echelle', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 9),
('SCDM', 'Siège de combat avec dossier matelassé', 'Siège de combat avec dossier matelassé', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '80,00 €', 1, 0, 0, 10),
('SCAD', 'Siège de combat assis/debout', 'Siège de combat assis/debout', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '50,00 €', 1, 0, 0, 10),
('EMBA', 'Embase de siège', 'Embase de sièg', 'En inox', 'En inox', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '40,00 €', 1, 0, 0, 10),
('GRAP', 'Grappin de 4kg', 'Grappin de 4kg', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '25,00 €', 1, 0, 0, 11),
('SANG', 'Sangle “La Maltière”', 'Sangle “La Maltière”', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '12,00 €', 1, 0, 0, 11),
('PABA', 'Pare-battage', 'Pare-battage', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '15,00 €', 1, 0, 0, 11),
('TBMPP', 'Taud bleu marine prêt à poser', 'Taud bleu marine prêt à poser', 'Entièrement monté avec housse et structure de rabais', 'Entièrement monté avec housse et structure de rabais', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '200,00 €', 1, 0, 0, 11),
('SCNA', 'Support de cannes noir à adapter', 'Support de cannes noir à adapter', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '25,00€', 1, 0, 0, 11),
('CHGA', 'Chaîne galva', 'Chaîne galva', 'Prix au mètre', 'Prix au mètre', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '5,00 €', 1, 0, 1, 11),
('CTD', 'Cordage 3 torons diam 10', 'Cordage 3 torons diam 10', 'Prix au mètre', 'Prix au mètre', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '3,00 €', 1, 0, 1, 11),
('TAPC', 'Tapis chekker', 'Tapis chekker', 'Prix au mètre carré', 'Prix au mètre carré', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '29,90 €', 1, 0, 1, 11),
('HYDRO', 'Hydroglisseur', 'Hydroglisseur', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 13),
('BAPTI', 'Baptiser son embarcation', 'Baptiser son embarcation', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '40,00 €', 1, 0, 0, 11),
('BERGE', 'Nettoyage des berges', 'Nettoyage des berges', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL, 0, 0, 0, 13),
('PLATI', 'Platine de siège', 'Platine de siège', 'En inox', 'En inox', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '28,00€', 1, 0, 0, 10),
('ENTRET', 'Entretoise', 'Entretoise', 'Taille de 30 cm et en inox', 'Taille de 30 cm et en inox', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '55,00 €', 1, 0, 0, 10);
-- --------------------------------------------------------

--
-- Structure de la table `t_produit`
--

CREATE TABLE IF NOT EXISTS `t_produit` (
  `id_produit` int(1) NOT NULL AUTO_INCREMENT,
  `nom_produit_fr` varchar(20) DEFAULT NULL,
  `nom_produit_en` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_produit`
--

INSERT INTO `t_produit` (`id_produit`, `nom_produit_fr`, `nom_produit_en`) VALUES
(1, 'Les barques', 'The boats'),
(2, 'Les remorques', 'The trailers'),
(3, 'Les options', 'The options');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(36, 'Laurent, guide de Pêche professionnel en Irlande', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_types_site`
--

CREATE TABLE IF NOT EXISTS `t_types_site` (
  `id_type_site` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_site_fr` varchar(255) DEFAULT NULL,
  `nom_type_site_en` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_type_site`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_types_site`
--

INSERT INTO `t_types_site` (`id_type_site`, `nom_type_site_fr`, `nom_type_site_en`) VALUES
(1, 'Sites de clients', 'Customers website'),
(2, 'Sites de professionnels', 'Professionals website'),
(3, 'Références professionnelles', 'Professionals references');

-- --------------------------------------------------------

--
-- Structure de la table `t_type_videos`
--

CREATE TABLE IF NOT EXISTS `t_type_videos` (
  `id_type_video` int(2) NOT NULL AUTO_INCREMENT,
  `nom_type_video_fr` varchar(100) NOT NULL,
  `nom_type_video_en` varchar(100) NOT NULL,
  PRIMARY KEY (`id_type_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `t_type_videos` (`id_type_video`, `nom_type_video_fr`, `nom_type_video_en`) VALUES
(1, 'Vidéos La Maltiere', 'Videos La Maltiere'),
(2, 'Vidéos clients','Videos customers');

--
-- Structure de la table `t_videos`
--

CREATE TABLE IF NOT EXISTS `t_videos` (
  `id_video` int(3) NOT NULL AUTO_INCREMENT,
  `url_video` varchar(100) NOT NULL,
  `id_type_video` int(2) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `t_types_site`
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
  ADD CONSTRAINT `t_categorie_modele_ibfk_1` FOREIGN KEY (`id_produit`) REFERENCES `t_produit` (`id_produit`);

--
-- Contraintes pour la table `t_modele`
--
ALTER TABLE `t_modele`
  ADD CONSTRAINT `t_modele_ibfk_1` FOREIGN KEY (`id_cat_modele`) REFERENCES `t_categorie_modele` (`id_cat_modele`);

--
-- Contraintes pour la table `t_sites`
--
ALTER TABLE `t_sites`
  ADD CONSTRAINT `t_sites_ibfk_1` FOREIGN KEY (`id_type_site`) REFERENCES `t_types_site` (`id_type_site`);

--
-- Contraintes pour la table `t_sites`
--
ALTER TABLE `t_videos`
  ADD CONSTRAINT `t_videos_ibfk_1` FOREIGN KEY (`id_type_video`) REFERENCES `t_type_videos` (`id_type_video`);

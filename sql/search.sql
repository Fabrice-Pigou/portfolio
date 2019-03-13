-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 13 Mars 2019 à 02:34
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `goupy`
--

-- --------------------------------------------------------

--
-- Structure de la table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `search`
--

INSERT INTO `search` (`id`, `name`, `resume`) VALUES
(1, 'Victor Hugo', 'Victor Hugo est un poète, dramaturge, prosateur et dessinateur romantique français, né le 26 février 1802 à Besançon et mort le 22 mai 1885 à Paris. Il est considéré comme l\'un des plus importants écrivains de langue française.'),
(2, 'Charles Baudelaire', 'Charles Baudelaire est un poète français. Né à Paris le 9 avril 1821, il meurt dans la même ville le 31 août 1867'),
(3, 'Arthur Rimbaud', 'Arthur Rimbaud est un poète français, né le 20 octobre 1854 à Charleville et mort le 10 novembre 1891 à Marseille. Bien que brève, la densité de son œuvre poétique fait d\'Arthur Rimbaud une des figures premières de la littérature française. Arthur Rimbaud écrit ses premiers poèmes à 15 ans.'),
(4, 'Paul Verlaine', 'Paul Verlaine est un écrivain et poète français du XIXᵉ siècle, né à Metz le 30 mars 1844 et mort à Paris le 8 janvier 1896. Il s\'essaie à la poésie et publie son premier recueil, Poèmes saturniens en 1866, à 22 ans. Sa vie est bouleversée quand il rencontre Arthur Rimbaud en septembre 1871.'),
(5, 'Gustave Flaubert', 'Gustave Flaubert est un écrivain français né à Rouen le 12 décembre 1821 et mort à Croisset, lieu-dit de la commune de Canteleu, le 8 mai 1880.'),
(6, 'Edgar Allan Poe', 'Edgar Allan Poe [ˈɛdɡɚ ˈælən poʊ], né le 19 janvier 1809 à Boston et mort à Baltimore le 7 octobre 1849, est un poète, romancier, nouvelliste, critique littéraire, dramaturge et éditeur américain, ainsi que l\'une des principales figures du romantisme américain.'),
(7, 'Honoré de Balzac', 'Honoré de Balzac, né Honoré Balzac à Tours le 20 mai 1799 et mort à Paris le 18 août 1850, est un écrivain français.'),
(8, 'Émile Zola', 'Émile Zola est un écrivain et journaliste français, né le 2 avril 1840 à Paris, où il est mort le 29 septembre 1902. Considéré comme le chef de file du naturalisme, c\'est l\'un des romanciers français les plus populaires, les plus publiés, traduits et commentés au monde.'),
(9, 'Jules Verne', 'Jules Verne, né le 8 février 1828 à Nantes et mort le 24 mars 1905 à Amiens, est un écrivain français dont l\'œuvre est, pour la plus grande partie, constituée de romans d\'aventures évoquant les progrès scientifiques du XIXᵉ siècle.'),
(10, 'Alexandre Dumas', 'Alexandre Dumas est un écrivain français né le 24 juillet 1802 à Villers-Cotterêts et mort le 5 décembre 1870 au hameau de Puys, ancienne commune de Neuville-lès-Dieppe, aujourd\'hui intégrée à Dieppe.'),
(11, 'Charles Dickens', 'Charles John Huffam Dickens, né à Landport, près de Portsmouth, dans le Hampshire, comté de la côte sud de l\'Angleterre, le 7 février 1812 et mort à Gad\'s Hill Place à Higham dans le Kent, le 9 juin 1870, est considéré comme le plus grand romancier de l\'époque victorienne.'),
(12, 'Mark Twain', 'Mark Twain, de son vrai nom Samuel Langhorne Clemens, né le 30 novembre 1835 à Florida dans le Missouri et mort le 21 avril 1910 à Redding, Connecticut, est un écrivain, essayiste et humoriste américain.'),
(13, 'Fiodor Dostoïevski', 'Fiodor Mikhaïlovitch Dostoïevski est un écrivain russe, né à Moscou le 30 octobre 1821 et mort à Saint-Pétersbourg le 28 janvier 1881. Considéré comme l\'un des plus grands romanciers russes, il a influencé de nombreux écrivains et philosophes.'),
(14, 'Guy de Maupassant', 'Henry-René-Albert-Guy de Maupassant [gi d mo.pa.ˈsɑ̃] est un écrivain et journaliste littéraire français né le 5 août 1850 au château de Miromesnil à Tourville-sur-Arques et mort le 6 juillet 1893 à Paris.'),
(15, 'Jules Vallès', 'Jules Vallès, né au Puy-en-Velay le 11 juin 1832, mort à Paris le 14 février 1885 est un journaliste, écrivain et homme politique français d\'extrême gauche. Fondateur du journal Le Cri du Peuple, il fait partie des élus lors de la Commune de Paris en 1871. Condamné à mort, il doit s\'exiler à Londres de 1871 à 1880.'),
(16, 'Eugène Varlin', 'Louis Eugène Varlin, né le 5 octobre 1839 à Claye et mort le 28 mai 1871 à Paris, est un militant socialiste et libertaire, membre de la Commune de Paris et de la Première Internationale.'),
(17, 'Louise Michel', 'Clémence-Louise Michel, dite Louise Michel, née le 29 mai 1830 à Vroncourt-la-Côte, Haute-Marne et morte le 9 janvier 1905 à Marseille, alias « Enjolras », est une institutrice, militante anarchiste, franc-maçonne, aux idées féministes et l’une des figures majeures de la Commune de Paris.'),
(18, 'Jean-Paul Sartre', 'Jean-Paul Charles Aymard Sartre [ ʒãpol saχtχ]1, né le 21 juin 1905 dans le 16e arrondissement de Paris et mort le 15 avril 1980 dans le 14e arrondissement, est un écrivain et philosophe français, représentant du courant existentialiste, dont l\'œuvre et la personnalité ont marqué la vie intellectuelle et politique de la France de 1945 à la fin des années 1970. '),
(19, 'Albert Camus', 'Albert Camus, né le 7 novembre 1913 à Mondovi, près de Bône, en Algérie, et mort accidentellement le 4 janvier 1960 à Villeblevin, dans l\'Yonne en France, est un écrivain, philosophe, romancier, dramaturge, journaliste, essayiste et nouvelliste français.'),
(20, 'Simone de Beauvoir', 'Simone de Beauvoir [simɔn də bovwaʁ], née le 11 janvier 1908 dans le 6ᵉ arrondissement de Paris, ville où elle est morte le 14 avril 1986, est une philosophe, romancière, mémorialiste et essayiste française.'),
(21, 'Friedrich Nietzsche', 'Friedrich Wilhelm Nietzsche [ˈfʁiːdʁɪç ˈvɪlhɛlm ˈniːt͡sʃə] est un philologue, philosophe, poète, pianiste et compositeur allemand, né le 15 octobre 1844 à Röcken, en Prusse, et mort le 25 août 1900 à Weimar, en Allemagne.'),
(22, 'Martin Heidegger', 'Martin Heidegger, né le 26 septembre 1889 à Meßkirch et mort le 26 mai 1976 à Fribourg-en-Brisgau, est un philosophe allemand. D\'abord étudiant auprès d\'Edmund Husserl et immergé dans le projet phénoménologique de son maître, son intérêt se porte rapidement sur la question du « sens de l\'être ».'),
(23, 'Søren Kierkegaard', 'Søren Aabye Kierkegaard, né le 5 mai 1813 et mort le 11 novembre 1855 à Copenhague, est un écrivain, poète, théologien, et philosophe danois, dont l’œuvre est considérée comme une première forme de l\'existentialisme.'),
(24, 'Emmanuel Kant', 'Emmanuel Kant, né le 22 avril 1724 à Königsberg, capitale de la Prusse-Orientale, et mort dans cette même ville le 12 février 1804, est un philosophe allemand, fondateur du criticisme et de la doctrine dite « idéalisme transcendantal ».'),
(25, 'Georg Wilhelm Friedrich Hegel', 'Georg Wilhelm Friedrich Hegel, né le 27 août 1770 à Stuttgart et mort le 14 novembre 1831 à Berlin, est un philosophe allemand. Son œuvre, postérieure à celle de Kant, est l\'une des plus représentatives de l\'idéalisme allemand et a eu une influence décisive sur l\'ensemble de la philosophie contemporaine.'),
(26, 'Michel Foucault', 'Paul-Michel (dit Michel) Foucault1 est un philosophe français né le 15 octobre 1926 à Poitiers et mort le 25 juin 1984 à Paris. Il est généralement connu pour ses critiques des institutions sociales, principalement la psychiatrie, la médecine, le système carcéral, et pour ses idées et développements sur l\'histoire de la sexualité, ses théories générales concernant le pouvoir et les relations complexes entre pouvoir et connaissance. '),
(27, 'Karl Marx', 'Karl Marx, né le 5 mai 1818 à Trèves en Rhénanie et mort le 14 mars 1883 à Londres, est un historien, journaliste, philosophe, sociologue, économiste, essayiste, théoricien de la révolution, socialiste et communiste allemand. '),
(28, 'Sigmund Freud', 'Sigmund Freud, né Sigismund Schlomo Freud le 6 mai 1856 à Freiberg et mort le 23 septembre 1939 à Londres, est un neurologue autrichien, fondateur de la psychanalyse. Médecin viennois, Freud rencontre plusieurs personnalités importantes pour le développement de la psychanalyse, dont il est le principal théoricien. '),
(29, 'René Descartes', 'René Descartes, né le 31 mars 1596 à La Haye-en-Touraine et mort le 11 février 1650 à Stockholm, est un mathématicien, physicien et philosophe français. Il est considéré comme l’un des fondateurs de la philosophie moderne.'),
(30, 'Edmund Husserl', 'Edmund Husserl est un philosophe et logicien, autrichien de naissance, puis prussien, fondateur de la phénoménologie, qui eut une influence majeure sur l\'ensemble de la philosophie du XXᵉ siècle. Husserl a étudié les mathématiques avec Karl Weierstrass et Leo Königsberger.'),
(31, 'Arthur Schopenhauer', 'Arthur Schopenhauer [aʁtyʁ ʃɔpɛn‿awœʁ] est un philosophe allemand, né le 22 février 1788 à Dantzig, mort le 21 septembre 1860 à Francfort-sur-le-Main.'),
(32, 'Platon', 'Platon est un philosophe antique de la Grèce classique, contemporain de la démocratie athénienne et des sophistes, qu\'il critiqua vigoureusement.'),
(33, 'Franz Kafka', 'Franz Kafka est un écrivain pragois de langue allemande et de religion juive, né le 3 juillet 1883 à Prague et mort le 3 juin 1924 à Kierling. Il est considéré comme l\'un des écrivains majeurs du XXᵉ siècle.'),
(34, 'Jean-Jacques Rousseau', 'Jean-Jacques Rousseau, né le 28 juin 1712 à Genève et mort le 2 juillet 1778 à Ermenonville, est un écrivain, philosophe et musicien genevois francophone. Orphelin très jeune, sa vie est marquée par l\'errance.'),
(35, 'Maurice Merleau-Ponty', 'Maurice Merleau-Ponty est un philosophe français, né à Rochefort-sur-Mer le 14 mars 1908 et mort le 3 mai 1961 à Paris. Il est le cousin du philosophe des sciences Jacques Merleau-Ponty.'),
(36, 'Marcel Proust', 'Marcel Proust, né à Paris le 10 juillet 1871 et mort à Paris le 18 novembre 1922, est un écrivain français, dont l\'œuvre principale est une suite romanesque intitulée À la recherche du temps perdu, publiée de 1913 à 1927.'),
(37, 'Jacques Derrida', 'Jacques Derrida est un philosophe français né le 15 juillet 1930 à El Biar et mort le 9 octobre 2004 à Paris. Professeur à l\'École normale supérieure, puis directeur d\'études à l\'École des hautes études en sciences sociales, il a créé et développé l\'école de pensée autour du déconstructionnisme.'),
(38, 'Samuel Beckett', 'Samuel Barclay Beckett, né le 13 avril 1906 à Foxrock et mort le 22 décembre 1989 à Paris, est un écrivain, poète et dramaturge irlandais d\'expression principalement française, anglaise et aussi allemande, prix Nobel de littérature en 1969.'),
(39, 'Baruch Spinoza', 'Baruch Spinoza, né le 24 novembre 1632 à Amsterdam et mort le 21 février 1677 à La Haye, est un philosophe néerlandais d\'origine portugaise dont la pensée eut une influence considérable sur ses contemporains et nombre de penseurs postérieurs.'),
(40, 'Bertrand Russell', 'Bertrand Arthur William Russell, 3ᵉ comte Russell, né le 18 mai 1872 à Trellech, et mort le 2 février 1970 près de Penrhyndeudraeth, au pays de Galles, est un mathématicien, logicien, philosophe, épistémologue, homme politique et moraliste britannique.'),
(41, 'Aristote', 'Aristote est un philosophe grec de l\'Antiquité. Avec Platon, dont il fut le disciple à l\'Académie, il est l\'un des penseurs les plus influents que le monde ait connus.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

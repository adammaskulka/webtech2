-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2017 at 08:53 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zadanie_10`
--

-- --------------------------------------------------------

--
-- Table structure for table `Aktuality`
--

CREATE TABLE `Aktuality` (
  `ID` int(11) NOT NULL,
  `Typ` int(11) NOT NULL,
  `skTitle` varchar(30) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `enTitle` varchar(30) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `Img` varchar(150) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `skAnnotation` text CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `enAnnotation` text CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `Date` date NOT NULL,
  `Uploaded` varchar(30) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Aktuality`
--

INSERT INTO `Aktuality` (`ID`, `Typ`, `skTitle`, `enTitle`, `Img`, `skAnnotation`, `enAnnotation`, `Date`, `Uploaded`) VALUES
(1, 2, 'Test1SK', 'Test1EN', 'http://147.175.98.124/FINAL/img/media/motokara.jpg', 'Slovenský textSlovenský textSlovenský textSlovenský textSlovenský textSlovenský textSlovenský text a tak to niak ide.\r\nligula at dolor pellentesque, ac gravida justo tristique. Phasellus tristique quam diam, sagittis lacinia orci interdum id.', 'Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.\r\nDuis convallis fringilla lorem, ac suscipit libero sagittis id. Nam risus eros, consectetur quis porta vitae, pellentesque quis magna. Ut sed nisi at eros auctor convallis. In a luctus dolor. Sed suscipit tristique augue vitae consequat. Fusce viverra felis et imperdiet tristique. In hac habitasse platea dictumst. Donec et erat eget enim elementum pharetra. Donec imperdiet ligula at dolor pellentesque, ac gravida justo tristique. Phasellus tristique quam diam, sagittis lacinia orci interdum id.', '2017-07-20', 'Andrej'),
(2, 1, 'Aktualita1SK', '', 'img/blog/img7.jpg', 'Táto aktualita je len v SK jazyku a pri prepnutí na EN jazyk sa nezobrazí.! slúži na kontrolu ', '', '2017-07-13', 'admin'),
(3, 2, 'TEST1SK', 'TEST1EN', 'img/blog/img7.jpg', 'Slovenský text-Slovenský text-Slovenský text-fLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', 'Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', '2017-06-07', 'Andrej'),
(4, 1, 'TEST2SK', 'TEST2EN', 'img/blog/img7.jpg', 'Slovenský text-Slovenský text-Slovenský text-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', 'Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', '2017-05-24', 'Andrej'),
(5, 2, 'TEST3SK', 'TEST3EN', 'img/blog/img7.jpg', 'Slovenský text-Slovenský text-Slovenský text-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', 'Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', '2017-05-31', 'Andrej'),
(6, 1, 'TEST4SK', 'TEST4EN', 'img/blog/img7.jpg', 'Slovenský text-Slovenský text-Slovenský text-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', 'Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', '2017-05-21', 'Andrej'),
(9, 1, 'TEST5SK', 'TEST5EN', 'img/blog/img7.jpg', 'Slovenský text-Slovenský text-Slovenský text-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', 'Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', '2017-05-10', 'Andrej'),
(10, 1, 'TEST6SK', 'TEST6EN', 'img/blog/img7.jpg', 'Slovenský text-Slovenský text-Slovenský text-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', 'Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', '2017-05-10', 'Andrej'),
(11, 1, 'TEST7SK', 'TEST7EN', 'img/blog/img7.jpg', 'Slovenský text-Slovenský text-Slovenský text-Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', 'Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Anglický text.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at tellus dolor. Phasellus blandit eget elit ut hendrerit. Nulla vel malesuada dolor. Proin tempor turpis vel ex ultrices vulputate. Sed fermentum convallis rutrum. Vestibulum blandit finibus placerat. Nam at nunc dolor. Nullam interdum erat ac mauris molestie, vitae auctor turpis ullamcorper. In dapibus, ante eu tempor rutrum, dolor est blandit erat, a scelerisque mauris dui eu felis.', '2017-05-10', 'Andrej'),
(32, 1, 'Pridanécezfunkciu', 'added_function', 'img/blog/img7.jpg', 'Pridané pomocou funkcie v intranete', 'Added by intranet function', '2017-07-14', 'Intranet-Andrej');

-- --------------------------------------------------------

--
-- Table structure for table `dochadzka`
--

CREATE TABLE `dochadzka` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `typeOfDay` varchar(4) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intranet`
--

CREATE TABLE `intranet` (
  `ID` int(11) NOT NULL,
  `Kategoria` varchar(30) NOT NULL,
  `Prilohy` varchar(50) DEFAULT NULL,
  `subor` varchar(30) DEFAULT NULL,
  `stranka` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `intranet`
--

INSERT INTO `intranet` (`ID`, `Kategoria`, `Prilohy`, `subor`, `stranka`) VALUES
(56, 'Kategoria 2', 'Priloha 1', 'priloha1.txt', 'doktorandi'),
(57, 'Kategoria 2', 'Priloha 2', 'priloha2.txt', 'doktorandi'),
(58, 'Kategoria 1', NULL, NULL, 'doktorandi'),
(96, 'Test', NULL, NULL, 'publikacie'),
(97, 'Test', NULL, NULL, 'sluzcesty'),
(98, 'Kategoria test', NULL, NULL, 'pedagogika'),
(99, 'Kategoria test', 'Test', 'skuskyLS.txt', 'pedagogika');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title_sk` text COLLATE utf8_slovak_ci NOT NULL,
  `title_en` text COLLATE utf8_slovak_ci,
  `url` text COLLATE utf8_slovak_ci,
  `photo` text COLLATE utf8_slovak_ci,
  `pdf` text COLLATE utf8_slovak_ci,
  `date` text COLLATE utf8_slovak_ci NOT NULL,
  `page` text COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Newsletter`
--

CREATE TABLE `Newsletter` (
  `ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `skOdber` tinyint(1) NOT NULL,
  `enOdber` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Newsletter`
--

INSERT INTO `Newsletter` (`ID`, `Email`, `skOdber`, `enOdber`) VALUES
(6, 'ndrj13@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `folder` varchar(255) COLLATE utf8_slovak_ci NOT NULL,
  `title_sk` varchar(255) COLLATE utf8_slovak_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_slovak_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `folder`, `title_sk`, `title_en`, `date`) VALUES
(1, 'events001', 'Deň otvorených dverí na ÚAMT FEI STU', 'Open day at UAMT FEI STU', '07.02.2017'),
(8, 'events002', 'Noc výskumníkov', 'Night of researchers', '25.09.2015');

-- --------------------------------------------------------

--
-- Table structure for table `Projekty`
--

CREATE TABLE `Projekty` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `Number` varchar(50) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `skTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `enTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `StartDuration` date NOT NULL,
  `EndDuration` date NOT NULL,
  `Coordinator` varchar(255) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `Partners` varchar(1000) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `Web` varchar(255) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `InternalCode` varchar(10) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `skAnnotation` text CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `enAnnotation` text CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Projekty`
--

INSERT INTO `Projekty` (`ID`, `Type`, `Number`, `skTitle`, `enTitle`, `StartDuration`, `EndDuration`, `Coordinator`, `Partners`, `Web`, `InternalCode`, `skAnnotation`, `enAnnotation`) VALUES
(1, 'VEGA', '1/0937/14 ', 'Pokrocilé metódy nelineárneho modelovania a riadenia mechatronických systémov \r\n\r\n', 'Advanced methods for nonlinear modeling and control of mechatronic systems \r\n', '2014-01-01', '2017-01-01', 'prof. Ing. Mikuláš Huba, PhD. \r\n', '', '', '1425', 'Projekt sa zameriava na rozvoj metód nelineárneho riadenia a ich aplikácií. Zahrňuje metódy algebrického a diferenciálneho prístupu k návrhu nelineárnych systémov, riadenie časovo oneskorených (time delayed) systémov a systémov s obmedzeniami uvažovaných ako súčasť hybridných, autonómnych a inteligentných systémov, metódy simulácie, modelovania a automatizovaného návrhu s využitím podporných numerických a symbolických metód a programov. Venuje sa formulácii riešených problémov v rámci vnorených (embedded) systémov a PLC, spracovaniu signálov, zohľadneniu aspektov riadenia cez Internet, mobilné a rádiové siete, identifikácii a kompenzácii nelinearít, integrácii jednotlivých prístupov pri implementácii a fyzickej realizácii konkrétnych algoritmov a štruktúr riadenia. Pôjde najmä o riadenie mechatronických, robotických a ďalších systémov s dominantnými nelinearitami.\r\n', 'The project focuses on development of nonlinear control methods and their applications. It includes algebraic and differential approach to nonlinear control, control of time-delayed and constrained systems considered as a part of hybrid autonomous intelligent systems, simulations modeling and automatized design based on numeric and symbolic computer aided methods. It is dealing with formulation of solved problems within the embedded systems and PLCs, with signal processing, control via Internet, mobile and radio networks, with identification and compensation of nonlinearities, integration of particular approaches in implementing and physically accomplishing particular algorithms and structures. Thereby, one considers especially mechatronic and robotic systems and other systems with dominating nonlinear behavior.\r\n'),
(2, 'VEGA', '1/0228/14 ', 'Modelovanie termohydraulických a napätostných pomerov vo vybraných komponentoch tlakovodných jadrových reaktorov \r\n', 'Modelling of thermohydraulic and stress conditions in selected components of NPP with pressurized water reactor \r\n', '2014-01-01', '2016-01-01', 'doc. Ing. Vladimír Kutiš, PhD. \r\n', '', '', '1435', 'Cieľom predkladaného projektu je tvorba matematických modelov vybraných komponentov jadrových zariadení tlakovodného jadrového reaktora ako sú palivová kazeta, aktívna zóna ako aj celý jadrový reaktor. Tieto komponenty budú analyzované z pohľadu termohydrauliky ako aj z pohľadu mechanického (napätostného) namáhania. Takto získané numerické výsledky budú konfrontované s dostupnými experimentálnymi údajmi daných zariadení, pričom cieľom má byť zvyšovanie bezpečnosti prevádzky týchto zariadení. Pri tvorbe jednotlivých matematických modelov budú použité moderné numerické metódy, ako sú Computational Fluid Dynamics (CFD) a Metóda Konečných Prvkov (MKP), ktoré sú implementované v programoch ANSYS CFX a ANSYS Multiphysics. Súčasťou predkladaného projektu bude realizácia prepojenia matematických modelov termohydrauliky a mechanického namáhania, ktoré bude realizované tak, aby jednotlivé fyzikálne domény boli priamo previazané. Výstupom projektu okrem matematických modelov budú aj vedecké a odborné články a príspevky.\r\n', 'The aim of this project is to create mathematical models of selected components of nuclear power plants like fuel assembly, the active zone as well as a nuclear reactor itself considering pressurized water reactor. These components will be analyzed in terms of thermo-hydraulics and mechanical point of view (stress loading). Obtained numerical results will be confronted with available experimental data to increase operational safety of these devices. In the process of developing the mathematical models modern numerical methods such as Computational Fluid Dynamics (CFD) and Finite Element Method (FEM) will be used. These methods are implemented in programs ANSYS CFX and ANSYS Multiphysics. The proposed project will interconnect the thermo-hydraulic and mechanical mathematical models, which will be implemented so that the individual physical domains were directly connected. The outcome of the project will be the mathematical models and also scientific and technical papers and conference contributions.\r\n'),
(3, 'VEGA', '1/0453/15 ', 'Výskum stiesneného krútenia uzatvorených prierezov \r\n', 'Research of nonuniform torsion of cross-sections \r\n', '2015-01-01', '2017-01-01', 'prof. Ing. Justín Murín, DrSc. \r\n', '', '', '1479', '"Podstatou projektu je skúmanie účinkov stiesneného krútenia v nosníkoch s uzatvoreným tenkostenným prierezom numerickými metódami ako aj experimentálnym meraním na fyzikálnych modeloch. Bude vytvorený nový 3D nosníkový konečný prvok so zahrnutím stiesneného krútenia uzatvorených prierezov, kde sa uplatní deformačný účinok sekundárneho krútiaceho momentu. Matica tuhosti a hmotnosti bude zostavená pre homogénny materiál ako aj pre kompozitné nosníky s pozdĺžnou premenlivosťou materiálových vlastností.\r\nOdvodené vzťahy a rovnice budú implementované do počítačového programu pre elastostatickú a modálnu analýzu s uvažovaním stiesneného krútenia. Bude navrhnuté a vyrobené meracie zariadenie, ktorým sa budú verifikovať výsledky teoretických výpočtov novým konečným prvkom. Predpokladá sa, že výsledky riešenia projektu prispejú ku zmene tvrdenia normy EC 3, podľa ktorej vplyv stiesneného krútenia možno pri nosníkoch uzatvoreného prierezu zanedbať. Výsledky nášho výskumu majú za cieľ zvýšiť bezpečnosť projektovania mechanických sústav."\r\n', 'The project aim is to examine the effects of non-uniform torsion in thin-walled beams with closed cross-section by numerical methods and experimental measurements on physical models. A 3D beam finite element will be created including the non-uniform torsion with the secondary torsion moment deformation effect. The stiffness and mass matrix will be prepared for a homogeneous material as well as for composite beams with longitudinal variation of material properties. Derived relations and equations will be implemented in the computer programs for elastic-static and modal analyses. Measurement equipment will be designed, by which the results of theoretical calculations by the new finite elements will be verified. It is expected that the results of the project will contribute to review the arguments of the Eurocode 3, according to which the effect of non-uniform torsion can be neglected in the closed cross-section beams. The results of the project are intended to enhance the safety of the beam structures design.\r\n'),
(4, 'KEGA', '035STU-4/2014 ', 'Návrh virtuálneho laboratória pre implementáciu pokrocilých metodík výucby v novom študijnom programe Elektromobilita \r\n', 'Development of virtual laboratory for implementation of advanced methods of teaching in the new study program Electromobility \r\n', '2014-01-01', '2016-01-01', 'prof. Ing. Viktor Ferencey, PhD. \r\n', '', '', '1709', '"Projekt je zameraný na vybudovanie moderného špecializovaného virtuálneho laboratória pre pripravovaný študijný program Elektromobilita. V projekte sú navrhnuté pokročilé metódy výučby, ktoré integrujú tvorivú implementáciu teoretických poznatkov priamo do virtuálneho modelovania a simulovania mechatronických systémov v inteligentných vozidlách s elektrickým pohonom, t.j. elektromobiloch.\r\nPre podporu špecializovaného vzdelávania a novú metodológiu v študijnom programe Elektromobilita bude v projekte spracovaná nová moderná študijná literatúra a vybudované Špecializované virtuálne laboratórium s inovatívnym vybavením pre teoretickú i praktickú výučbu predmetov v tomto študijnom programe. Všetky predmety programu Elektromobilita sú zamerané na virtuálne prototypovanie smart mechatronických systémov používaných v elektromobiloch s náväznosťou na nové systémy pohonu dopravných prostriedkov s využitím virtuálneho prototypovania.\r\nSúčasťou projektu bude spracovanie študijných materiálov, vedeckých monografií, tvorba inovatívnej web stránky, publikovanie v odborných časopisoch a účasť na vedeckých konferenciách. Špecializované virtuálne laboratórium bude vybavené mechatronickými učebnými modulmi pre výučbu a štúdium sofistikovaných technológií."\r\n', 'The project aim it to build a modern specialized virtual laboratory for prepared study program Electromobility. In this project, advanced teaching methods are proposed that integrate theoretical knowledge into practical application directly into mechatronic systems in vehicles with electric drive (electric vehicles). To promote specialized training and a new methodology in the study program Electromobility, the project will support processing of a new modern study literature and creating a dedicated virtual laboratory with innovative facilities for theoretical and practical training courses in this program of study. These courses aim at smart mechatronic systems used in electromobility systems with links to the new drive systems of vehicles using virtual prototyping. The project includes new study materials processing, writing scientific monographs, creating innovative websites, publications in peer-reviewed journals and participation in scientific conferences. Dedicated virtual laboratory will be equipped with educational mechatronic modules for teaching and learning sophisticated technology.\r\n'),
(5, 'KEGA', '032STU-4/2013 ', 'Online laboratórium pre výucbu predmetov automatického riadenia \r\n', 'Online laboratory for teaching automation control subjects \r\n', '2013-01-01', '2015-12-31', 'doc. Ing. Katarína Žáková, PhD. \r\n', '', '', '1719', '"Projekt sa zameriava na tvorbu interaktívnych znovupoužiteľných vzdelávacích objektov pre zvolené segmenty teórie automatického riadenia, na budovanie širšej škály experimentov ilustrujúcich aplikáciu študovaných teoretických prístupov na riešenie praktických problémov, ktoré umožňujú a podporujú nadobúdanie vedomostí, zručností, návykov a postojov v kvázi-autentickom prostredí.\r\nProjekt má za cieľ podporovať využitie nielen proprietárnych, ale aj open technológií, ktoré prinášajú viaceré výhody v oblasti šírenia výsledkov a nesporne aj po finančnej stránke. Snahou je uľahčiť prístup k laboratórnym experimentom v rámci rôznych foriem vzdelávania (denných, dištančných, resp. elektronických foriem)."\r\n', '"The project is focussed on development of interactive reusable learning objects for chosen segments of automatic control, on building broader spectrum of experiments illustrating application of studied\r\ntheoretical approaches onto practical problems enabling and supporting acquisition of knowledge, skills, habits and attitudes in an quasi-authentic environment.\r\nThe project is going to support the use of not only proprietary but also open technologies that bring various advantages in the area of results dissemination and from the financial point of view as well. Our aim is to facilitate approach to laboratory experiments for students in daily or distance form of education."\r\n'),
(6, 'KEGA', '030STU-4/2015 ', 'Multimediálna podpora vzdelávania v mechatronike \r\n', 'Multimedial education in mechatronics \r\n', '2015-01-01', '2017-01-01', 'doc. Ing. Danica Rosinová, PhD. \r\n', '', 'http://uamt.fei.stuba.sk/KEGA_MM/\r\n', '1723', 'Svetovým trendom v oblasti modernej a bezbariérovej výučby sú jej interaktívne formy na báze internetu, videa, audiovizuálnych pomôcok a vzdialených laboratórií (on-line vzdelávanie), ktoré sa uplatňujú nielen v dištančnom vzdelávaní, ale aj v prezenčnej forme vzdelávanie s podporou nových technológií (technology augmented classroom teaching). Popri slide-show prezentáciách a edukačných miniaplikáciách (dynamické web stránky, flash animácie, Java Applets a pod.) preferujú svetové výskumné univerzity vývoj a tvorbu edukačných videí, ktorých cieľovou skupinou sú poslucháči konkrétneho predmetu (kurzu). Edukačné videá sú voľne dostupné a umožňujú študentom sledovať výklad danej problematiky kdekoľvek a kedykoľvek. Návrh a realizácia zrozumiteľného a zaujímavo podaného edukačného videa z technickej oblasti je komplexná úloha, ktorá si vyžaduje synergiu odborných, pedagogických a umeleckých kvalít jeho tvorcov. Projekt je zameraný na multimediálnu podporu vzdelávania v oblasti mechatroniky, s dôrazom na poznatky z aplikovanej informatiky, automatizácie a príbuzných vedných disciplín. Cieľom projektu je vybudovanie multimediálneho laboratória na tvorbu kvalitných edukačných videomateriálov pre prezenčnú aj dištančnú formu univerzitného vzdelávania v oblasti mechatroniky a vytvorenie a otestovanie viacerých modulov takýchto materiálov. Výstupy projektu budú ďalej využiteľné pre účely vzdelávania odborníkov z praxe vrámci celoživotného vzdelávania, a tiež popularizácie mechatroniky a automatizácie u širokej verejnosti a žiakov stredných škôl - potenciálnych študentov vysokých škôl technického zamerania.\r\n', '"Presently, interactive education forms based on exploitation of Internet, video, audiovisual aids and remote laboratories (on-line education) are world trends in modern and barrier-free education;\r\nit is applied not only in distance education but in the attendance teaching as technology augmented classroom teaching. Along with slide-shows and educational miniapplications (dynamic websites,\r\nflash animations, Java Applets etc.) research universities usually prefer to develop their own education videos targeted to the audience in a single course. Education videos are freely available and enable the students to follow the explanatory discourse on the subject topic anytime and anywhere. Design and realization of a comprehensible and interesting educational video on a technological field is a quite complex task requiring synergy of technical, educational and artistic qualities of its creators. The project deals with the multimedia support of education in mechatronics engineering, with the focus on applied informatics, automation and related fields. The objective of the project is to build a multimedia laboratory for creating high-quality educational videomaterial for both distance and attendance education in mechatronics engineering. Project outcomes will be further employed in life-long education of practitioners, and for popularization of mechatronics and automation among the public and potential university students of technology."\r\n'),
(7, 'KEGA', '011STU-4/2015 ', 'Elektronické pedagogicko-experimentálne laboratóriá mechatroniky \r\n', 'Electronic educational-experimental laboratories of Mechatronics \r\n', '2015-01-01', '2017-01-01', 'doc. Ing. Peter Drahoš, PhD. \r\n', '', 'http://uamt.fei.stuba.sk/kega/\r\n', '1724', '"Projekt sa zaoberá vytvorením modernej vedomostnej a experimentálnej základne pre výučbu mechatroniky s dôrazom na jej elektronické súčasti. Vzhľadom na to, že mechatronika integruje viaceré oblasti poznania a ich spojením vytvára synergický efekt, budú v rámci projektu budú vypracované nové metódy a formy vo výučbe, ktoré študentom umožnia získať nové poznatky s praktickou skúsenosťou s využívaním moderných elektronických prvkov a systémov, ktoré tvoria neoddeliteľnú súčasť komplexných mechatronických systémov v oblasti výrobkov spotrebnej elektroniky, energetiky, automobilovej techniky a v zdravotníctve.\r\nPodnetnou výzvou pre podanie projektu bol vznik nových študijných programoch""""Automobilová mechatronika"""" (Bc. program) a """"Aplikovaná mechatronika a elektromobilita"""" (Ing. program). Pre tieto študijné programy budú vytvorené elektronické učebné texty pre 7 predmetov.\r\nZa účelom ďalšieho zvyšovania kvality výučby a výskumu sa plánuje v rámci v rámci riešenia projektu vytvoriť 5 nových experimentálnych pracovísk podľa najnovších trendov v elektronike, snímacej technike a riadiacich systémoch, ktoré budú mať viacúčelové využitie v priamej pedagogike, v individuálnych a tímových študentských projektoch ako aj pri výskumnej a vývojovej činnosti ústavu.\r\nCieľom projektu je zvýšiť odborné kompetencie študentov, učiteľov a výskumných pracovníkov a všetkých zúčastnených v týchto oblastiach: moderné senzory a MEMS, aktuátory na báze smart materiálov, elektrické trakčné pohony, mikroradiče a DSP pre vstavané riadiace systémy a spracovanie signálov, návrh riadiacich algoritmov a ich programovanie, elektronika a integrované obvody (ASICs) pre mechatroniku. Ďalším dôležitým sub-cieľom riešenej problematiky je získať široké kompetencie v komunikačných systémoch pre rôzne aplikačné oblasti mechatronických systémov najmä v automobilovom priemysle.\r\nNavrhovaný projekt bude podporovaný prostredníctvom moderných audiovizuálnych systémov, prostredníctvom web stránky a videí s multimediálnym spracovaním."\r\n', 'The project deals with the creation of modern knowledge and experimental basis for education in Mechatronics Engineering with the emphasis on electronic components. Due to the fact that mechatronics integrates several fields of knowledge and their junction yields a synergy effect, new methods and forms of eduation will be elaborated within the project allowing students to acquire new knowledge combined with practical experience in using modern electronic components and systems; such systems are integral parts of complex pervasive mechatronic systems (in consumer electronics, energy and automotive industries, healthcare). Inspiration for elaboration of the proposed project was launching of new study programs ""Automotive Mechatronics"" (Bachelor degree), and ""Applied Mechatronics and Electromobility"" (Master degree). For these study programs electronic textbooks for 7 subjects will be created. To further increase quality of education and research, 5 new experimental workplaces are planned to be created within the project to according to the latest development trends electronics, sensing technology and control systems having multi-purpose exploitation in direct teaching, individual and team projects as well as in research and development activities of the Institute. The objective of the project is to increase professional competences of students, teachers and researchers, and all involved in the areas: advanced sensors and MEMS, smart materials based actuators, electric traction motors, microcontrollers and digital signal processors (DSP´s) for embedded control systems and signal processing, design of control algorithms and their programming, electronics and integrated circuits (ASICs) for mechatronics. Another important sub-objective is to acquire wide competences in communication systems for various application areas of mechatronic systems, in particular in automotive industry. Modern audiovisual systems, web pages and multimedia processed videos will be widely used to support project results.\r\n'),
(8, 'APVV', 'APVV-0246-12 ', 'Pokročilé metódy modelovania a simulácie SMART mechatronických systémov \r\n', 'Advanced Methods and Simulations of SMART Mechatronic Systems \r\n', '2013-10-01', '2016-09-30', 'prof. Ing. Justín Murín, DrSc. \r\n', '', '', 'AK14', 'V prvej fáze riešenia projektu bude kladený dôraz na materiálové, technické a prístrojové zabezpečenie experimentálnych častí, ktoré budú v projekte riešené. V tejto fáze takisto budú odvodené MKP rovnice pre 3D-FGM nosníky ako aj multifyzikálne modely pre SMA. Súčasťou prvej fázy riešenia projektu bude taktiež začatá príprava fyzikálnych experimentov za účelom verifikácie matematických modelov FGM a SMA systémov. V nasledovnom období riešenia projektu bude vykonaná verifikácia matematických modelov na vybraných experimentálnych vzorkách, ktoré boli dôsledne experimentálne analyzované z hľadiska materiálového zloženia. Výsledky experimentálnych meraní na SMA aktuátore budú využité v nasledovnom období riešenia projektu pri návrhu a realizácii alternatívneho spôsobu uchytenia SMA aktuátora. Bude nasledovať vytvorenie nelineárneho modelu aktuátora SMA a návrhu nových metód syntézy zameraných na riadenie polohy a potlačenie dominantných porúch. V tomto období budú súčasne prebiehať výskumné práce na teoretickom odvodení MKP rovníc pre FGM škrupinu a jej spojenia s 3D-FGM nosníkovým prvkom do kombinovaného nosníkovo-škrupinového MEMSu. V záverečnej fáze projektu bude kladený dôraz jednak na verifikáciu odvodených MKP rovníc pre nosníkovo-škrupinový MEMS pomocou fyzikálneho experimentu ako aj na riadenie SMA aktuátora konvenčnými a inteligentnými metódami riadenia.\r\n', 'In the first phase, attention will be given to the material, technical and equipment set-up required for the first set experiments. At the same time, the FGM-beam FEM equations will be derived and SMA models designed. In addition, the first sets of experiments will be used for the verification of numerical models of 3D-FGM and SMA systems. A complex verification of numerical models will take place on selected samples whose chemistry has been consistently analyzed. Results of SMA actuator measurements will be used in the consecutive stages of the project in the design and application of alternative anchoring for SMA actuators. Next the nonlinear model of SMA actuator and new methods of synthesis focused on position control and error elimination will be proposed. This research will take place in parallel with the theoretical analysis and FEM equations derivation of FGM shells. In the final stage, emphasis will be given to both the verification of the derived FGM beam-shell equations by real sample measurements and the control of the SMA actuator by conventional and intelligent methods.\r\n'),
(9, 'APVV', 'APVV-0343-12 ', 'Počítačová podpora návrhu robustných nelineárnych regulátorov \r\n', 'Computer aided robust nonlinear control design \r\n', '2013-10-01', '2017-03-31', 'prof. Ing. Mikuláš Huba, PhD. \r\n', '', '', 'AK29', 'Projekt sa zaoberá vypracovaním podporného počítačového systému na návrh robustných nelineárnych regulátorov s obmedzeniami vo verzii pre Matlab/Simulink a web a vytvorením integrovaného elektronického prostredia v LMS Moodle, ktoré ho spája s webovou stránkou projektu, s elearningovými modulmi a s prístupom k vzdialeným experimentom umožňujúcim jeho overenie online. Systém je založený na novej metóde návrhu regulátorov vychádzajúcej s obmedzovania odchýlok od požadovaných tvarov vstupných a výstupných, resp. stavových veličín. Táto integruje výsledky viacerých doteraz izolovaných prístupov k návrhu regulátorov - tradičnú teóriu PID regulátorov, moderný stavový prístup s teóriou pozorovateľov, časovo optimálne riadenie, nelineárne systémy a riadenie systémov s veľkým dopravným oneskorením a robustný návrh regulátorov. Vyvíjaný systém bude vhodný pre širokú triedu neurčitých a nelineárnych objektov, ktoré predstavujú väčšinu bežných aplikácií v praxi. Systém bude pozostávať z centrálnej pracovnej stanice umožňujúcej dostatočne rýchle generovanie tzv. portrétu správania riadeného objektu s uvažovaným typom regulátora, z úložiska vytvorených portrétov správania a z grafických staníc, ktoré umožnia na základe špecifikácie neurčitých parametrov riadeného objektu a zadaných kvalitatívnych požiadaviek na riadené procesy určiť optimálne nastavenie regulátora zaručujúce pre zadané požiadavky dosiahnutie najvyššej možnej dynamiky prechodových dejov aj pri zohľadnení neurčitostí.\r\n', 'The project deals with development and introduction into practice of the computer aided system for design of robust constrained nonlinear control (in versions for Matlab/Simulink and web) and of the integrated electronic environment in LMS Moodle interconnecting the system with the project web page, with the elearning modules and with access to remote experiments enabling its online verification. The system will be based on a new robust control method based on constraining deviations from required shapes of the input, output, or state variables. This is holistically integrating several up to now isolated control design approaches - the traditional PID control, modern state & disturbance observer approach, minimum time control, nonlinear control, control of systems with long dead time and robust control. The developed system is intended for a broad class of uncertain and nonlinear plants that represent a majority of all applications in practice. The system will consist of a central work station enabling a sufficiently fast generation of the so called performance portrait of given plant with a considered type of control, from a repository of generated performance portraits and from graphical terminals enabling by means of specifying parameters of given plant and the required shape-related performance measures to determine the optimal controller tuning guaranteeing the fastest possible transients responses in the control loop under consideration of the given uncertainties.\r\n'),
(10, 'APVV', 'APVV-0772-12 ', 'Moderné metódy riadenia s využitím FPGA štruktúr \r\n', 'Advanced control methods based on FPGA structures \r\n', '2013-10-01', '2017-09-30', 'doc. Ing. Alena Kozáková, PhD. \r\n', '', '', 'AK39', 'Projekt rieši aktuálne otázky výskumu a vývoja moderných metód riadenia s využitím hardvérových realizácií konvenčných (PID) ako aj moderných (optimálne, robustné, prediktívne) algoritmov riadenia pre procesy s rýchlou dynamikou. V súčasnosti dominujú vo výskume a implementácii moderných riadiacich systémov tieto smery: riešenia na báze mikroprocesorov (softvérový prístup), jednoúčelové riešenia ASIC a riešenia na báze programovateľných hradlových polí (Field Programmable Gate Arrays, FPGA), ktoré predstavujú konfigurovateľné obvody vysokého stupňa integrácie (VLSI) schopné integrovať rôzne logické a riadiace funkcie. Hardvérové implementácie algoritmov riadenia sú v porovnaní so softvérovými realizáciami vo všeobecnosti o niekoľko rádov rýchlejšie, pretože spracovanie v nich prebieha paralelne, navyše sú kompaktnejšie a vo všeobecnosti lacnejšie. Hlavným cieľom projektu je výskum a vývoj algoritmov na báze FPGA štruktúr, ktorý bude skúmaný na vývojových FPGA systémoch a verifikovaný na fyzikálnych laboratórnych modeloch s rýchlou dynamikou.\r\n', 'The project deals with research and development of advanced control methods based on HW implementation of conventional (PID) as well as modern optimal, robust and predictive algorithms applicable in control of plants with fast dynamics. Predominating approaches in the research of modern control systems implementation are microprocessor-based solutions (software approach), ASIC (dedicated approach) and the FPGA based approach. Field Programmable Gate Arrays (FPGA) are configurable circuits of very-large-scale-integration (VLSI) able to integrate various logical and control functions. In general, HW implementations of control algorithms are faster by several orders compared with SW implementations due to parallel processing of information; moreover they are more compact and also less expensive. The main objective of the project is research and development of FPGA-based control algorithms. Their research and development will be studied on available FPGA development kits and verified on laboratory plants with fast dynamics.\r\n'),
(11, 'APVV', 'APVV-14-0613 ', 'Širokopásmový MEMS detektor terahertzového žiarenia \r\n', 'Broadband MEMS detector of terahertz radiaton \r\n', '2015-01-01', '2018-01-01', 'doc. Ing. Vladimír Kutiš, PhD. \r\n', '', '', '', '', 'The project is aimed on research and development of new types of broadband detectors for terahertz frequency range. This new type of detector is designed in a concept of micro-electro-mechanical system and uses the bolometric sensing principle. The design construction of the detector consists of a microbolometric sensing device coupled to a broadband antenna. Thermal conversion of the incident THz radiation takes place on a thin polyimide membrane which enables (a) to achieve high thermal conversion efficiency and (b) to design detectors with balanced amplitude characteristics even at high frequency range. The proposed MEMS detector concept will be optimized by a sophisticated process of modeling and simulation in direct mutual iteration with experimental analysis of functionality and detection capability. The completion of the project will be given by the developed state-of-the-art methodology of characterization, broadband THz detection and simulation of the MEMS detector device applicable in the research and education.\r\n'),
(12, 'Inter', 'SK06-II-01-004 ', 'Podpora medzinárodnej mobility medzi STU Bratislava, NTNU Trondheim a Universität Liechtenstein \r\n', 'Support of international mobilites between STU Bratislava, NTNU Trondheim, and Universität Liechtenstein \r\n', '2015-06-02', '2016-09-30', 'ÚAMT - prof. Ing. Mikuláš Huba, PhD. \r\n', 'Norwegian University of Science and Technology Trondheim (prof. Skogestad, prof. Johansen, prof. Hovd)|Universität Liechtenstein, Liechtenstein (prof. Droege)\r\n', '', '', 'Projekt rieši aktuálne otázky výskumu a vývoja moderných metód riadenia s využitím hardvérových realizácií konvenčných (PID) ako aj moderných (optimálne, robustné, prediktívne) algoritmov riadenia pre procesy s rýchlou dynamikou. V súčasnosti dominujú vo výskume a implementácii moderných riadiacich systémov tieto smery: riešenia na báze mikroprocesorov (softvérový prístup), jednoúčelové riešenia ASIC a riešenia na báze programovateľných hradlových polí (Field Programmable Gate Arrays, FPGA), ktoré predstavujú konfigurovateľné obvody vysokého stupňa integrácie (VLSI) schopné integrovať rôzne logické a riadiace funkcie. Hardvérové implementácie algoritmov riadenia sú v porovnaní so softvérovými realizáciami vo všeobecnosti o niekoľko rádov rýchlejšie, pretože spracovanie v nich prebieha paralelne, navyše sú kompaktnejšie a vo všeobecnosti lacnejšie. Hlavným cieľom projektu je výskum a vývoj algoritmov na báze FPGA štruktúr, ktorý bude skúmaný na vývojových FPGA systémoch a verifikovaný na fyzikálnych laboratórnych modeloch s rýchlou dynamikou.\r\n', 'The aim of the project is to support international mobility of students, PhD students, and staff members of four participating faculties of STU in Bratislava with partners from NTNU Trondheim and Universität Liechtenstein. It will initiate academic cooperation between the University of Liechtenstein and STU Bratislava in construction, architecture, and space planning, focusing on the use of alternative energy sources in operation of buildings, including computer-aided simulations of energy needs and internal environment, and spatial planning of rural settlements as well. The project also contributes to further strengthening of already existing cooperation between NTNU Trondheim and faculties of STU in Bratislava in the field of advanced methods of automatic control and to progress of inter-faculty cooperation at STU in Bratislava.\r\n'),
(13, 'INE', 'TB ', 'Softvérové riadenie smerovej dynamiky vozidla UGV 6x6 \r\n', 'Softvérové riadenie smerovej dynamiky vozidla UGV 6x6 \r\n', '2015-01-01', '2015-01-01', 'Ing. Martin Bugár, PhD. \r\n', '', '', '7506', '', ''),
(14, 'INE', 'VW ', 'Predlžovanie životnosti akumulátorového systému \r\n', 'Predlžovanie životnosti akumulátorového systému \r\n', '2015-01-01', '2015-01-01', 'Ing. Martin Bugár, PhD. \r\n', '', '', '7509', '', ''),
(15, 'INE', 'MV ', 'REST platforma pre online riadenie experimentov \r\n', 'REST Platform for Online Control of Experiments \r\n', '2015-01-01', '2015-01-01', 'Ing. Miroslav Gula \r\n', '', '', '1361', '"Tento projekt je súčasťou rozsiahlejšieho cieľa o vytvorenie univerzálneho protokolu pre vzdialené riadenie reálnych sústav a tiež balíka softvérových nástrojov na jeho implementáciu. Hlavným cieľom celého úsilia je zjednodušiť a urýchliť budovanie modulárnych online laboratórií.\r\nÚlohami projektu sú návrh a vytvorenie nástroaj pre vzdialený prístup k softvéru Scilab, zavŕšenie implementácie podobného nástroja určeného pre softvérový balík Matlab/Simulink, a návrh a čiastočná implementácia mechatronického systému, ktorý bude v budúcnosti slúžiť na demonštráciu spomenutých nástrojov a následne ako učebná pomôcka."\r\n', 'The project is a part of an extensive endeavor to create universal protocol for remote control of real plants, and a suite of software tools to implement this protocol. The main objective of this whole endeavor is to simplify and accelerate implementation of modular online laboratories. Tasks of this project include design and implementation of a software tool for remote access to Scilab, completion of implementation of a similar tool for Matlab/Simulink, and design and partial implementation of a mechatronic system which will serve for demonstration of mentioned tools and later on as teaching aid.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `role_name` enum('user','hr','reporter','editor','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `users_id`, `role_name`) VALUES
(1, 1, 'user'),
(14, 1, 'admin'),
(15, 5, 'user'),
(16, 5, 'admin'),
(17, 3, 'user'),
(18, 6, 'user'),
(19, 3, 'admin'),
(20, 6, 'admin'),
(21, 8, 'user'),
(22, 8, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `text` varchar(2500) CHARACTER SET utf16 COLLATE utf16_slovak_ci NOT NULL,
  `header` varchar(255) CHARACTER SET utf16 COLLATE utf16_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `text`, `header`) VALUES
(1, 'ahoj2', 'nadpis2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `name` varchar(255) CHARACTER SET cp1251 COLLATE cp1251_general_cs NOT NULL,
  `surname` varchar(255) CHARACTER SET cp1250 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `surname`) VALUES
(1, 'xvrabec', 'Juraj', 'Vrabec'),
(3, 'xmaskulka', 'Adam', 'Maskulka'),
(5, 'xskopek', 'xskopek', 'xskopek'),
(6, 'xdubena1', 'xdubena1', 'xdubena1'),
(8, 'xmeluchm', 'xmeluchm', 'xmeluchm');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `url`) VALUES
(1, 'https://www.youtube.com/embed/Z0zBwR_MKOI'),
(2, 'https://www.youtube.com/embed/NKZmJB0PW3k'),
(3, 'https://www.youtube.com/embed/vCYq4JspSCI'),
(4, 'https://www.youtube.com/embed/qmijnl8jwaw'),
(5, 'https://www.youtube.com/embed/ymqYxRYt5sY'),
(6, 'https://www.youtube.com/embed/CLwEjKN9ixg'),
(7, 'https://www.youtube.com/embed/IiNXYgbOKxw'),
(8, 'https://www.youtube.com/embed/eBZjZ6eAzMw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Aktuality`
--
ALTER TABLE `Aktuality`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dochadzka`
--
ALTER TABLE `dochadzka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intranet`
--
ALTER TABLE `intranet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Newsletter`
--
ALTER TABLE `Newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Projekty`
--
ALTER TABLE `Projekty`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Aktuality`
--
ALTER TABLE `Aktuality`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `dochadzka`
--
ALTER TABLE `dochadzka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `intranet`
--
ALTER TABLE `intranet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Newsletter`
--
ALTER TABLE `Newsletter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `Projekty`
--
ALTER TABLE `Projekty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

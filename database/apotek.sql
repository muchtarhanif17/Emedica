-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2021 pada 05.49
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_access`
--

CREATE TABLE `tbl_access` (
  `accessid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_access`
--

INSERT INTO `tbl_access` (`accessid`, `roleid`, `mid`) VALUES
(1, 2, 1),
(2, 2, 6),
(3, 2, 7),
(4, 1, 1),
(5, 1, 3),
(6, 1, 4),
(7, 1, 5),
(8, 3, 1),
(9, 3, 2),
(10, 3, 3),
(11, 3, 4),
(12, 3, 5),
(13, 3, 6),
(14, 3, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `mid` int(11) NOT NULL,
  `mnama` varchar(128) NOT NULL,
  `murl` varchar(128) NOT NULL,
  `micon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`mid`, `mnama`, `murl`, `micon`) VALUES
(1, 'Dashboard', 'dashboard', 'fa fa-dashboard'),
(2, 'Data User', 'user', 'fa fa-user'),
(3, 'Data Satuan Obat', 'satuan', 'fas fa-prescription-bottle-alt'),
(4, 'Data Obat', 'obat', 'fas fa-capsules'),
(5, 'Penjualan Obat', 'penjualan', 'fas fa-shopping-basket'),
(6, 'Laporan Penjualan', 'lappenjualan', 'fas fa-file-invoice'),
(7, 'Laporan Obat Terlaris', 'lapterlaris', 'fas fa-file');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `obid` int(11) NOT NULL,
  `satid` int(11) NOT NULL,
  `obnama` varchar(50) NOT NULL,
  `obstok` int(11) NOT NULL,
  `obharga` int(11) NOT NULL,
  `obstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`obid`, `satid`, `obnama`, `obstok`, `obharga`, `obstatus`) VALUES
(2, 1, 'Acetazolamide', 0, 12000, 0),
(3, 1, 'Acetylcysteine', 0, 1001, 0),
(4, 1, 'Acyclovir Tablet', 27, 1324, 0),
(5, 2, 'Adapalene', 0, 1140, 1),
(6, 5, 'Adem Sari', 31, 956, 1),
(7, 3, 'Agonis Beta', 17, 1185, 1),
(8, 4, 'Albendazole', 33, 1128, 1),
(9, 2, 'Allylestrenol', 20, 1272, 1),
(10, 3, 'Amfetamin', 11, 1203, 1),
(11, 2, 'Amiodarone', 44, 1230, 1),
(12, 1, 'Amitriptyline', 26, 1079, 1),
(13, 2, 'Amlodipine', 22, 1361, 1),
(14, 4, 'Amphotericin B', 14, 812, 1),
(15, 3, 'Analgetik-Antipiretik', 28, 1267, 1),
(16, 4, 'Antiansietas', 36, 942, 1),
(17, 2, 'Antibiotik Polipeptida', 26, 947, 1),
(18, 2, 'Antidepresan', 26, 1284, 1),
(19, 5, 'Antidepresan Trisiklik', 10, 970, 1),
(20, 2, 'Antiplatelet', 48, 933, 1),
(21, 5, 'Arginine', 10, 1400, 1),
(22, 3, 'Aripiprazole', 23, 1241, 1),
(23, 3, 'Asam Borat Tetes Telinga', 23, 1397, 1),
(24, 2, 'Asam Mefenamat', 12, 1288, 1),
(25, 4, 'Asam Traneksamat', 47, 929, 1),
(26, 4, 'Asam Ursodeoksikolat', 23, 993, 1),
(27, 2, 'Asetilkolin', 37, 922, 1),
(28, 3, 'Atenolol', 21, 859, 1),
(29, 1, 'Attapulgite', 25, 1201, 1),
(30, 5, 'Azathioprine', 48, 1284, 1),
(31, 2, 'Baby&Me Organic', 17, 1323, 1),
(32, 5, 'Baclofen', 19, 1387, 1),
(33, 5, 'Benzalkonium Chloride', 22, 950, 1),
(34, 3, 'Benzodiazepine', 24, 1104, 1),
(35, 4, 'Benzoyl Peroxide', 17, 1138, 1),
(36, 1, 'Besi', 36, 1270, 1),
(37, 3, 'Betahistine', 46, 821, 1),
(38, 4, 'Betametason', 30, 1223, 1),
(39, 5, 'Betametason Topikal', 41, 969, 1),
(40, 4, 'Bilberry', 47, 1423, 1),
(41, 2, 'Bismuth Subsalicylate', 31, 1055, 1),
(42, 5, 'Bleomycin', 10, 889, 1),
(43, 5, 'Bodrex', 38, 1157, 1),
(44, 2, 'Bortezomib', 13, 1121, 1),
(45, 3, 'Bromelain', 20, 1241, 1),
(46, 1, 'Bromhexine', 32, 1100, 1),
(47, 5, 'Bromocriptine', 30, 1058, 1),
(48, 5, 'Budesonide', 28, 1004, 1),
(49, 3, 'Bupivacaine', 31, 1101, 1),
(50, 1, 'Calcium D Redoxon (CDR)', 43, 1441, 1),
(51, 4, 'Candesartan', 15, 1419, 1),
(52, 1, 'Carbamazepine', 33, 1471, 1),
(53, 2, 'Carbapenem', 23, 1394, 1),
(54, 5, 'Carbimazole', 32, 867, 1),
(55, 2, 'Carvedilol', 26, 1256, 1),
(56, 3, 'Cefadroxil', 35, 1360, 1),
(57, 5, 'Cefazolin', 45, 1126, 1),
(58, 1, 'Cefepime', 49, 1357, 1),
(59, 1, 'Cefixime', 21, 1429, 1),
(60, 1, 'Cefoperazone', 30, 1233, 1),
(61, 3, 'Cefoperazone-Sulbactam', 44, 1363, 1),
(62, 4, 'Cefotaxim', 46, 1460, 1),
(63, 4, 'Ceftazidime', 18, 1204, 1),
(64, 3, 'Ceftriaxone', 50, 1148, 1),
(65, 3, 'Cefuroxime', 42, 1459, 1),
(66, 5, 'Celecoxib', 12, 1418, 1),
(67, 4, 'Cephalexin', 25, 1278, 1),
(68, 2, 'Cetirizine', 48, 1045, 1),
(69, 4, 'Chloramphenicol', 38, 819, 1),
(70, 2, 'Chlordiazepoxide-Clidinium', 45, 989, 1),
(71, 3, 'Chlorhexidine', 16, 1391, 1),
(72, 4, 'Chlorpheniramine', 45, 1474, 1),
(73, 3, 'Chlorpromazine', 29, 831, 1),
(74, 3, 'Cholestyramine', 10, 963, 1),
(75, 3, 'Cimetidine', 49, 827, 1),
(76, 1, 'Cisapride', 14, 1281, 1),
(77, 2, 'Clenbuterol', 43, 801, 1),
(78, 5, 'Clomifene', 26, 1328, 1),
(79, 3, 'Clomipramine', 34, 1060, 1),
(80, 5, 'Clonazepam', 30, 949, 1),
(81, 5, 'Clonidine', 35, 1266, 1),
(82, 1, 'Clopidogrel', 43, 1453, 1),
(83, 2, 'Clotrimazole', 13, 1086, 1),
(84, 2, 'Clozapine', 47, 1240, 1),
(85, 1, 'Codeine', 33, 1082, 1),
(86, 5, 'Coenzyme Q10', 46, 1432, 1),
(87, 1, 'Colchicine', 28, 1315, 1),
(88, 4, 'Counterpain', 31, 929, 1),
(89, 5, 'Cyclophosphamide', 45, 944, 1),
(90, 3, 'Cyproheptadine', 13, 1204, 1),
(91, 1, 'Dapsone', 28, 945, 1),
(92, 2, 'Deferiprone', 44, 985, 1),
(93, 2, 'Dekongestan', 23, 1395, 1),
(94, 5, 'Dermatix', 39, 1023, 1),
(95, 4, 'Desloratadine', 33, 1145, 1),
(96, 5, 'Desoximetasone', 26, 942, 1),
(97, 2, 'Dexamethasone', 31, 833, 1),
(98, 2, 'Dexketoprofen', 11, 1039, 1),
(99, 1, 'Dextromethorphan', 34, 1392, 1),
(100, 2, 'Dextrose', 50, 947, 1),
(101, 3, 'Diapet', 10, 1069, 1),
(102, 5, 'Diazepam', 20, 1008, 1),
(103, 4, 'Diclofenac', 35, 1353, 1),
(104, 5, 'Diethylcarbamazine', 45, 1430, 1),
(105, 5, 'Diltiazem', 40, 889, 1),
(106, 1, 'Dimenhydrinate', 29, 1451, 1),
(107, 5, 'Dimethicone', 44, 955, 1),
(108, 4, 'Diphenhydramine', 33, 880, 1),
(109, 1, 'Diuretik', 18, 848, 1),
(110, 2, 'Diuretik Hemat Kalium', 18, 1030, 1),
(111, 2, 'Docosahexaenoic Acid (DHA)', 10, 1448, 1),
(112, 4, 'Docusate', 29, 1340, 1),
(113, 4, 'Domperidone', 30, 1329, 1),
(114, 3, 'Donepezil', 26, 1348, 1),
(115, 4, 'Doxycycline', 14, 1210, 1),
(116, 4, 'Duloxetine', 15, 1370, 1),
(117, 3, 'Enervon C', 50, 901, 1),
(118, 4, 'Entecavir', 15, 1456, 1),
(119, 2, 'Enzalutamide', 26, 1096, 1),
(120, 2, 'Eperisone', 36, 1083, 1),
(121, 5, 'Ephedrine Tetes Hidung', 28, 1492, 1),
(122, 3, 'Epinephrine', 38, 928, 1),
(123, 5, 'Erdosteine', 17, 919, 1),
(124, 2, 'Ergotamine', 44, 1392, 1),
(125, 2, 'Esomeprazole', 29, 1353, 1),
(126, 4, 'Estrogen', 45, 955, 1),
(127, 1, 'Etanercept', 43, 1012, 1),
(128, 3, 'Etravirine', 18, 948, 1),
(129, 1, 'Famotidine', 43, 1047, 1),
(130, 5, 'Feminax', 41, 1491, 1),
(131, 2, 'Fenilbutazon', 18, 1208, 1),
(132, 1, 'Fenofibrate', 39, 1046, 1),
(133, 3, 'Fentanyl', 44, 1345, 1),
(134, 4, 'Fexofenadine', 20, 1237, 1),
(135, 3, 'FG Troches', 48, 999, 1),
(136, 4, 'Fibrinogen', 18, 1371, 1),
(137, 5, 'Finasteride', 21, 1212, 1),
(138, 3, 'Fluconazole', 20, 940, 1),
(139, 2, 'Fluoxetine', 17, 1165, 1),
(140, 2, 'Fluphenazine', 39, 869, 1),
(141, 5, 'Furosemide', 25, 1150, 1),
(142, 2, 'Gabapentin', 37, 1097, 1),
(143, 2, 'Gallium Nitrate', 41, 929, 1),
(144, 5, 'Gemfibrozil', 46, 1082, 1),
(145, 2, 'Gentamicin', 18, 973, 1),
(146, 4, 'Glibenclamide', 48, 1204, 1),
(147, 4, 'Glimepiride', 14, 1210, 1),
(148, 4, 'Gliquidone', 22, 1284, 1),
(149, 1, 'Gliserol', 16, 1184, 1),
(150, 2, 'Gliserol Topikal', 14, 1066, 1),
(151, 4, 'Granisetron', 34, 848, 1),
(152, 1, 'Griseofulvin', 21, 1442, 1),
(153, 2, 'Guaifenesin', 22, 1320, 1),
(154, 5, 'Haloperidol', 33, 1045, 1),
(155, 4, 'Heparin', 49, 1070, 1),
(156, 4, 'Hydrochlorothiazide', 30, 1349, 1),
(157, 1, 'Hydrocortisone', 16, 1000, 1),
(158, 4, 'Hydroquinone', 48, 1216, 1),
(159, 1, 'Hydroxychlroquine', 18, 972, 1),
(160, 2, 'Hyoscine Butylbromide', 36, 813, 1),
(161, 1, 'Ibandronate', 30, 967, 1),
(162, 1, 'Ibuprofen', 28, 1052, 1),
(163, 5, 'Ifosfamide', 29, 985, 1),
(164, 1, 'Imipenem-Cilastatin', 25, 1141, 1),
(165, 4, 'Indomethacin', 43, 1263, 1),
(166, 1, 'Interferon', 16, 927, 1),
(167, 5, 'Irbesartan', 43, 826, 1),
(168, 2, 'Isosorbide Dinitrate', 19, 851, 1),
(169, 3, 'Isotretinoin', 48, 1445, 1),
(170, 2, 'Itraconazole', 49, 1377, 1),
(171, 1, 'Ivermectin', 24, 1033, 1),
(173, 3, 'Amoxicilin', 100, 1500, 1),
(176, 3, 'Paracetamol', 60, 680, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `pjid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pjfaktur` varchar(255) NOT NULL,
  `pjtgl` date NOT NULL,
  `pjtotal` int(11) NOT NULL,
  `pjbayar` int(11) NOT NULL,
  `pjfeedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`pjid`, `uid`, `pjfaktur`, `pjtgl`, `pjtotal`, `pjbayar`, `pjfeedback`) VALUES
(16, 48, 'PJ20210610115928', '2021-06-08', 6981, 7000, ''),
(17, 48, 'PJ20210610115937', '2021-06-08', 6981, 10000, ''),
(18, 48, 'PJ20210610122420', '2021-06-07', 6291, 10000, 'good'),
(19, 48, 'PJ20210610011249', '2021-06-07', 5790, 7000, ''),
(20, 48, 'PJ20210610011401', '2021-06-08', 9300, 10000, ''),
(21, 48, 'PJ20210610012517', '2021-06-09', 12685, 1321314, ''),
(22, 48, 'PJ20210610012536', '2021-06-09', 12685, 1231241412, ''),
(23, 48, 'PJ20210610012629', '2021-06-09', 12685, 34324123, ''),
(24, 48, 'PJ20210610012821', '2021-06-10', 12685, 112223, ''),
(25, 48, 'PJ20210610012841', '2021-06-10', 12685, 60000, ''),
(26, 48, 'PJ20210610012841', '2021-06-11', 12685, 60000, ''),
(27, 48, 'PJ20210610013212', '2021-06-10', 12685, 10000, ''),
(28, 48, 'PJ20210610051413', '2021-06-10', 12685, 15000, 'good'),
(29, 48, 'PJ20210610063447', '2021-06-10', 4053, 312313124, 'bad'),
(30, 48, 'PJ20210610070342', '2021-06-10', 2896, 1500, 'good'),
(31, 48, 'PJ20210611040200', '2021-06-13', 2325, 3000, 'good'),
(32, 48, 'PJ20210611054131', '2021-06-11', 1624, 1800, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan_detail`
--

CREATE TABLE `tbl_penjualan_detail` (
  `pjdid` int(11) NOT NULL,
  `pjid` int(11) NOT NULL,
  `obid` int(11) NOT NULL,
  `pjdqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penjualan_detail`
--

INSERT INTO `tbl_penjualan_detail` (`pjdid`, `pjid`, `obid`, `pjdqty`) VALUES
(16, 16, 5, 1),
(17, 16, 7, 2),
(18, 16, 43, 3),
(19, 17, 5, 1),
(20, 17, 7, 2),
(21, 17, 43, 3),
(22, 18, 142, 3),
(23, 18, 173, 2),
(24, 19, 5, 4),
(25, 19, 11, 1),
(26, 20, 11, 2),
(27, 20, 5, 6),
(28, 21, 5, 3),
(29, 21, 11, 2),
(30, 21, 13, 5),
(31, 22, 5, 3),
(32, 22, 11, 2),
(33, 22, 13, 5),
(34, 23, 5, 3),
(35, 23, 11, 2),
(36, 23, 13, 5),
(37, 24, 5, 3),
(38, 24, 11, 2),
(39, 24, 13, 5),
(40, 25, 5, 3),
(41, 25, 11, 2),
(42, 25, 13, 5),
(43, 26, 5, 3),
(44, 26, 11, 2),
(45, 26, 13, 5),
(46, 27, 5, 3),
(47, 27, 11, 2),
(48, 27, 13, 5),
(49, 28, 5, 3),
(50, 28, 11, 2),
(51, 28, 13, 5),
(52, 29, 6, 3),
(53, 29, 7, 1),
(54, 30, 9, 1),
(55, 30, 14, 2),
(56, 31, 7, 1),
(57, 31, 5, 1),
(58, 32, 14, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role_user`
--

CREATE TABLE `tbl_role_user` (
  `id` int(11) NOT NULL,
  `role_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_role_user`
--

INSERT INTO `tbl_role_user` (`id`, `role_user`) VALUES
(1, 'Pegawai'),
(2, 'Owner'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_satuan_obat`
--

CREATE TABLE `tbl_satuan_obat` (
  `satid` int(11) NOT NULL,
  `satnama` varchar(50) NOT NULL,
  `satstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_satuan_obat`
--

INSERT INTO `tbl_satuan_obat` (`satid`, `satnama`, `satstatus`) VALUES
(1, 'Kapsul', 1),
(2, 'Pil', 1),
(3, 'Tablet', 1),
(4, 'Kaplet', 1),
(5, 'Serbuk', 1),
(6, 'asdasd', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `unama` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `role_user` int(11) NOT NULL,
  `ustatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `unama`, `uemail`, `upassword`, `role_user`, `ustatus`) VALUES
(1, 'Putra', 'wahyufs996@gmail.com', '123', 1, 1),
(2, 'ryan', 'ryan@gmail.com', '123', 2, 0),
(3, 'Adi Pamungkas', 'adipam@gmail.com', '$2y$10$8Nl.UmNyduflwwOqP//fee1oCcOKHP0K6sk5K0xt08X1gvlfvMxki', 1, 1),
(4, 'Roni', 'roni@gmail.com', '123', 0, 0),
(5, 'Dana', 'dana@gmail.com', '123', 2, 0),
(43, 'Muhammad Muchtarul Hanif', 'muchtarhanif17@gmail.com', '$2y$10$Wgbm2osblS2/2tn8598SFOZBGHfOJzbobcmtZHxbqb.q8gvsOpwby', 3, 1),
(44, 'Budi', 'muhammad@gmail.com', '$2y$10$KbP6jrFEC17S/gusasjTvuSp6lGQU5mbNfAH7YxBwLdtUeMZs.NHS', 0, 0),
(45, 'DEVI HARI GUNAWAN,SE', 'asd123@gmail.com', '$2y$10$vrQIO81sH/83XpvMXVQEqeUHM1p8FP5keVuqNlmz6DuS7lSpvbPxq', 1, 0),
(46, 'DEVI HARI', 'rhezarizqi.if@gmail.com', '$2y$10$s/VxapNC3c97xPiN/28KreSqHIMHw3/8oc2.Jcs2CWRRUCm4Z2pMG', 0, 1),
(47, 'Budi', 'rheza@gmail.com', '$2y$10$rbT3pyq1qhYSRigma/o5Wuz4G7IpzhNWXyOslHkKG0qE444WycYZC', 0, 1),
(48, 'Super User', 'superuser@gmail.com', '$2y$10$8Nl.UmNyduflwwOqP//fee1oCcOKHP0K6sk5K0xt08X1gvlfvMxki', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_access`
--
ALTER TABLE `tbl_access`
  ADD PRIMARY KEY (`accessid`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indeks untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`obid`);

--
-- Indeks untuk tabel `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`pjid`);

--
-- Indeks untuk tabel `tbl_penjualan_detail`
--
ALTER TABLE `tbl_penjualan_detail`
  ADD PRIMARY KEY (`pjdid`);

--
-- Indeks untuk tabel `tbl_role_user`
--
ALTER TABLE `tbl_role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_satuan_obat`
--
ALTER TABLE `tbl_satuan_obat`
  ADD PRIMARY KEY (`satid`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_access`
--
ALTER TABLE `tbl_access`
  MODIFY `accessid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `obid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT untuk tabel `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `pjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tbl_penjualan_detail`
--
ALTER TABLE `tbl_penjualan_detail`
  MODIFY `pjdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `tbl_role_user`
--
ALTER TABLE `tbl_role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_satuan_obat`
--
ALTER TABLE `tbl_satuan_obat`
  MODIFY `satid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2021 pada 13.29
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
-- Database: `db_apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_apoteker`
--

CREATE TABLE `tbl_apoteker` (
  `aptid` int(11) NOT NULL,
  `aptnama` varchar(50) NOT NULL,
  `aptstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_apoteker`
--

INSERT INTO `tbl_apoteker` (`aptid`, `aptnama`, `aptstatus`) VALUES
(1, 'Rama Hamdani, Apt.', 0),
(2, 'Linda arini, Apt.', 0),
(3, 'Rudi Ahmad, Apt.', 0);

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
(2, 3, 'Acetazolamide', 11, 1137, 0),
(3, 5, 'Acetylcysteine', 16, 1001, 0),
(4, 1, 'Acyclovir Tablet', 27, 1324, 0),
(5, 2, 'Adapalene', 32, 1140, 0),
(6, 5, 'Adem Sari', 31, 956, 0),
(7, 3, 'Agonis Beta', 17, 1185, 0),
(8, 4, 'Albendazole', 33, 1128, 0),
(9, 2, 'Allylestrenol', 20, 1272, 0),
(10, 3, 'Amfetamin', 11, 1203, 0),
(11, 2, 'Amiodarone', 44, 1230, 0),
(12, 1, 'Amitriptyline', 26, 1079, 0),
(13, 2, 'Amlodipine', 22, 1361, 0),
(14, 4, 'Amphotericin B', 14, 812, 0),
(15, 3, 'Analgetik-Antipiretik', 28, 1267, 0),
(16, 4, 'Antiansietas', 36, 942, 0),
(17, 2, 'Antibiotik Polipeptida', 26, 947, 0),
(18, 2, 'Antidepresan', 26, 1284, 0),
(19, 5, 'Antidepresan Trisiklik', 10, 970, 0),
(20, 2, 'Antiplatelet', 48, 933, 0),
(21, 5, 'Arginine', 10, 1400, 0),
(22, 3, 'Aripiprazole', 23, 1241, 0),
(23, 3, 'Asam Borat Tetes Telinga', 23, 1397, 0),
(24, 2, 'Asam Mefenamat', 12, 1288, 0),
(25, 4, 'Asam Traneksamat', 47, 929, 0),
(26, 4, 'Asam Ursodeoksikolat', 23, 993, 0),
(27, 2, 'Asetilkolin', 37, 922, 0),
(28, 3, 'Atenolol', 21, 859, 0),
(29, 1, 'Attapulgite', 25, 1201, 0),
(30, 5, 'Azathioprine', 48, 1284, 0),
(31, 2, 'Baby&Me Organic', 17, 1323, 0),
(32, 5, 'Baclofen', 19, 1387, 0),
(33, 5, 'Benzalkonium Chloride', 22, 950, 0),
(34, 3, 'Benzodiazepine', 24, 1104, 0),
(35, 4, 'Benzoyl Peroxide', 17, 1138, 0),
(36, 1, 'Besi', 36, 1270, 0),
(37, 3, 'Betahistine', 46, 821, 0),
(38, 4, 'Betametason', 30, 1223, 0),
(39, 5, 'Betametason Topikal', 41, 969, 0),
(40, 4, 'Bilberry', 47, 1423, 0),
(41, 2, 'Bismuth Subsalicylate', 31, 1055, 0),
(42, 5, 'Bleomycin', 10, 889, 0),
(43, 5, 'Bodrex', 38, 1157, 0),
(44, 2, 'Bortezomib', 13, 1121, 0),
(45, 3, 'Bromelain', 20, 1241, 0),
(46, 1, 'Bromhexine', 32, 1100, 0),
(47, 5, 'Bromocriptine', 30, 1058, 0),
(48, 5, 'Budesonide', 28, 1004, 0),
(49, 3, 'Bupivacaine', 31, 1101, 0),
(50, 1, 'Calcium D Redoxon (CDR)', 43, 1441, 0),
(51, 4, 'Candesartan', 15, 1419, 0),
(52, 1, 'Carbamazepine', 33, 1471, 0),
(53, 2, 'Carbapenem', 23, 1394, 0),
(54, 5, 'Carbimazole', 32, 867, 0),
(55, 2, 'Carvedilol', 26, 1256, 0),
(56, 3, 'Cefadroxil', 35, 1360, 0),
(57, 5, 'Cefazolin', 45, 1126, 0),
(58, 1, 'Cefepime', 49, 1357, 0),
(59, 1, 'Cefixime', 21, 1429, 0),
(60, 1, 'Cefoperazone', 30, 1233, 0),
(61, 3, 'Cefoperazone-Sulbactam', 44, 1363, 0),
(62, 4, 'Cefotaxim', 46, 1460, 0),
(63, 4, 'Ceftazidime', 18, 1204, 0),
(64, 3, 'Ceftriaxone', 50, 1148, 0),
(65, 3, 'Cefuroxime', 42, 1459, 0),
(66, 5, 'Celecoxib', 12, 1418, 0),
(67, 4, 'Cephalexin', 25, 1278, 0),
(68, 2, 'Cetirizine', 48, 1045, 0),
(69, 4, 'Chloramphenicol', 38, 819, 0),
(70, 2, 'Chlordiazepoxide-Clidinium', 45, 989, 0),
(71, 3, 'Chlorhexidine', 16, 1391, 0),
(72, 4, 'Chlorpheniramine', 45, 1474, 0),
(73, 3, 'Chlorpromazine', 29, 831, 0),
(74, 3, 'Cholestyramine', 10, 963, 0),
(75, 3, 'Cimetidine', 49, 827, 0),
(76, 1, 'Cisapride', 14, 1281, 0),
(77, 2, 'Clenbuterol', 43, 801, 0),
(78, 5, 'Clomifene', 26, 1328, 0),
(79, 3, 'Clomipramine', 34, 1060, 0),
(80, 5, 'Clonazepam', 30, 949, 0),
(81, 5, 'Clonidine', 35, 1266, 0),
(82, 1, 'Clopidogrel', 43, 1453, 0),
(83, 2, 'Clotrimazole', 13, 1086, 0),
(84, 2, 'Clozapine', 47, 1240, 0),
(85, 1, 'Codeine', 33, 1082, 0),
(86, 5, 'Coenzyme Q10', 46, 1432, 0),
(87, 1, 'Colchicine', 28, 1315, 0),
(88, 4, 'Counterpain', 31, 929, 0),
(89, 5, 'Cyclophosphamide', 45, 944, 0),
(90, 3, 'Cyproheptadine', 13, 1204, 0),
(91, 1, 'Dapsone', 28, 945, 0),
(92, 2, 'Deferiprone', 44, 985, 0),
(93, 2, 'Dekongestan', 23, 1395, 0),
(94, 5, 'Dermatix', 39, 1023, 0),
(95, 4, 'Desloratadine', 33, 1145, 0),
(96, 5, 'Desoximetasone', 26, 942, 0),
(97, 2, 'Dexamethasone', 31, 833, 0),
(98, 2, 'Dexketoprofen', 11, 1039, 0),
(99, 1, 'Dextromethorphan', 34, 1392, 0),
(100, 2, 'Dextrose', 50, 947, 0),
(101, 3, 'Diapet', 10, 1069, 0),
(102, 5, 'Diazepam', 20, 1008, 0),
(103, 4, 'Diclofenac', 35, 1353, 0),
(104, 5, 'Diethylcarbamazine', 45, 1430, 0),
(105, 5, 'Diltiazem', 40, 889, 0),
(106, 1, 'Dimenhydrinate', 29, 1451, 0),
(107, 5, 'Dimethicone', 44, 955, 0),
(108, 4, 'Diphenhydramine', 33, 880, 0),
(109, 1, 'Diuretik', 18, 848, 0),
(110, 2, 'Diuretik Hemat Kalium', 18, 1030, 0),
(111, 2, 'Docosahexaenoic Acid (DHA)', 10, 1448, 0),
(112, 4, 'Docusate', 29, 1340, 0),
(113, 4, 'Domperidone', 30, 1329, 0),
(114, 3, 'Donepezil', 26, 1348, 0),
(115, 4, 'Doxycycline', 14, 1210, 0),
(116, 4, 'Duloxetine', 15, 1370, 0),
(117, 3, 'Enervon C', 50, 901, 0),
(118, 4, 'Entecavir', 15, 1456, 0),
(119, 2, 'Enzalutamide', 26, 1096, 0),
(120, 2, 'Eperisone', 36, 1083, 0),
(121, 5, 'Ephedrine Tetes Hidung', 28, 1492, 0),
(122, 3, 'Epinephrine', 38, 928, 0),
(123, 5, 'Erdosteine', 17, 919, 0),
(124, 2, 'Ergotamine', 44, 1392, 0),
(125, 2, 'Esomeprazole', 29, 1353, 0),
(126, 4, 'Estrogen', 45, 955, 0),
(127, 1, 'Etanercept', 43, 1012, 0),
(128, 3, 'Etravirine', 18, 948, 0),
(129, 1, 'Famotidine', 43, 1047, 0),
(130, 5, 'Feminax', 41, 1491, 0),
(131, 2, 'Fenilbutazon', 18, 1208, 0),
(132, 1, 'Fenofibrate', 39, 1046, 0),
(133, 3, 'Fentanyl', 44, 1345, 0),
(134, 4, 'Fexofenadine', 20, 1237, 0),
(135, 3, 'FG Troches', 48, 999, 0),
(136, 4, 'Fibrinogen', 18, 1371, 0),
(137, 5, 'Finasteride', 21, 1212, 0),
(138, 3, 'Fluconazole', 20, 940, 0),
(139, 2, 'Fluoxetine', 17, 1165, 0),
(140, 2, 'Fluphenazine', 39, 869, 0),
(141, 5, 'Furosemide', 25, 1150, 0),
(142, 2, 'Gabapentin', 37, 1097, 0),
(143, 2, 'Gallium Nitrate', 41, 929, 0),
(144, 5, 'Gemfibrozil', 46, 1082, 0),
(145, 2, 'Gentamicin', 18, 973, 0),
(146, 4, 'Glibenclamide', 48, 1204, 0),
(147, 4, 'Glimepiride', 14, 1210, 0),
(148, 4, 'Gliquidone', 22, 1284, 0),
(149, 1, 'Gliserol', 16, 1184, 0),
(150, 2, 'Gliserol Topikal', 14, 1066, 0),
(151, 4, 'Granisetron', 34, 848, 0),
(152, 1, 'Griseofulvin', 21, 1442, 0),
(153, 2, 'Guaifenesin', 22, 1320, 0),
(154, 5, 'Haloperidol', 33, 1045, 0),
(155, 4, 'Heparin', 49, 1070, 0),
(156, 4, 'Hydrochlorothiazide', 30, 1349, 0),
(157, 1, 'Hydrocortisone', 16, 1000, 0),
(158, 4, 'Hydroquinone', 48, 1216, 0),
(159, 1, 'Hydroxychlroquine', 18, 972, 0),
(160, 2, 'Hyoscine Butylbromide', 36, 813, 0),
(161, 1, 'Ibandronate', 30, 967, 0),
(162, 1, 'Ibuprofen', 28, 1052, 0),
(163, 5, 'Ifosfamide', 29, 985, 0),
(164, 1, 'Imipenem-Cilastatin', 25, 1141, 0),
(165, 4, 'Indomethacin', 43, 1263, 0),
(166, 1, 'Interferon', 16, 927, 0),
(167, 5, 'Irbesartan', 43, 826, 0),
(168, 2, 'Isosorbide Dinitrate', 19, 851, 0),
(169, 3, 'Isotretinoin', 48, 1445, 0),
(170, 2, 'Itraconazole', 49, 1377, 0),
(171, 1, 'Ivermectin', 24, 1033, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `pjid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `aptid` int(11) NOT NULL,
  `pjfaktur` varchar(255) NOT NULL,
  `pjtgl` date NOT NULL,
  `pjtotal` int(11) NOT NULL,
  `pjfeedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan_detail`
--

CREATE TABLE `tbl_penjualan_detail` (
  `pjdid` int(11) NOT NULL,
  `pjid` int(11) NOT NULL,
  `obid` int(11) NOT NULL,
  `pjqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Kapsul', 0),
(2, 'Pil', 0),
(3, 'Tablet', 0),
(4, 'Kaplet', 0),
(5, 'Serbuk', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `unama` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `ustatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `unama`, `uemail`, `upassword`, `ustatus`) VALUES
(1, 'Putra', 'wahyufs996@gmail.com', '123', 0),
(2, 'ryan', 'ryan@gmail.com', '123', 0),
(3, 'Adi Pamungkas', 'adipam@gmail.com', '$2y$10$8Nl.UmNyduflwwOqP//fee1oCcOKHP0K6sk5K0xt08X1gvlfvMxki', 1),
(4, 'Roni', 'roni@gmail.com', '123', 0),
(5, 'Dana', 'dana@gmail.com', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_apoteker`
--
ALTER TABLE `tbl_apoteker`
  ADD PRIMARY KEY (`aptid`);

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
-- AUTO_INCREMENT untuk tabel `tbl_apoteker`
--
ALTER TABLE `tbl_apoteker`
  MODIFY `aptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `obid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT untuk tabel `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `pjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_penjualan_detail`
--
ALTER TABLE `tbl_penjualan_detail`
  MODIFY `pjdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_satuan_obat`
--
ALTER TABLE `tbl_satuan_obat`
  MODIFY `satid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

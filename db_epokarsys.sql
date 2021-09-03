-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 01:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_epokarsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `sandi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `sandi`) VALUES
('adi', 'adi123'),
('Admin', 'admin1122');

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `kode_bagian` varchar(10) NOT NULL,
  `nama_bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`kode_bagian`, `nama_bagian`) VALUES
('Finishing', 'Finishing'),
('Gulung', 'Gulung'),
('Gunting', 'Gunting'),
('Ikat', 'Ikat');

-- --------------------------------------------------------

--
-- Table structure for table `line`
--

CREATE TABLE `line` (
  `kode_line` varchar(10) NOT NULL,
  `nama_line` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `line`
--

INSERT INTO `line` (`kode_line`, `nama_line`) VALUES
('LA', 'Line A'),
('LB', 'Line B'),
('LC', 'LIne C'),
('LD', 'Line D'),
('LE', 'LIne E'),
('L_KLA', 'Line Kaligelang A'),
('L_KLB', 'Line Kaligelang B');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_bagian` varchar(10) NOT NULL,
  `kode_line` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`nip`, `nama`, `kode_bagian`, `kode_line`, `nik`, `telepon`, `pendidikan`, `alamat`) VALUES
('160900065', 'AYU AMBARWATI', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('160900080', 'WIWI ASTUTI', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('170200234', 'NITA NOVERA', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('170500506', 'HASAN BASRI', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('170700823', 'MUHAMAD BAGUS RUWANTO', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('170800831', 'SAHRONI', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('170800832', 'HASTIN SARI ASIH', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('170800947', 'ALIFAH', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('170901020', 'NOVIA ANGGRIYANI', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('180101696', 'NOVI AMALIA', 'GULUNG', 'LINE A', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('180201879', 'ELLIS NURDIYANA', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('180602404', 'SUGIARTI', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('180702468', 'RINA RUNJIANAH', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('180702588', 'SUTRISMAN', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('180802742', 'USWATUN KHASANAH', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('180802774', 'UUN UNAYAH', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('180802842', 'FATKHUR ROHMAN', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('181003166', 'DIAH PITALOKA', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('181103216', 'NANANG WIDIYANTO', 'GULUNG', 'LINE B', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('181203376', 'NURHANA', 'GULUNG', 'LINE C', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('181203393', 'TRI AAT SEPTIANI', 'GULUNG', 'LINE C', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('190103403', 'YUNIRA TRI KURNIASIH', 'GULUNG', 'LINE C', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('190303581', 'RAMA DHIYANTI', 'GULUNG', 'LINE C', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('190603726', 'SHIFA NADILA IRFA', 'GULUNG', 'LINE C', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('190603741', 'TARNINGSIH', 'GULUNG', 'LINE C', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('190703820', 'LUTFIANI', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('191103967', 'RISTIANA NURHIDAYAH', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('191103996', 'ELNI MUSYAROFAH', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('191204059', 'WIJIYATI', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('200104118', 'RAS PUJIANA', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('200204197', 'RIZKA FADILA', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('200204198', 'AYU PENDAWI', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('200204199', 'KAROMAH AMALIA', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG'),
('200204200', 'WIDODO SETIAJI', 'GULUNG', 'LINE D', '3327080910960002', '087766546767', 'SLTA', 'PEMALANG');

-- --------------------------------------------------------

--
-- Table structure for table `performa`
--

CREATE TABLE `performa` (
  `kode_performa` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_bagian` varchar(10) NOT NULL,
  `kode_line` varchar(10) NOT NULL,
  `target` decimal(10,0) NOT NULL,
  `hasil` decimal(10,0) NOT NULL,
  `selisih` decimal(10,0) NOT NULL,
  `kode_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performa`
--

INSERT INTO `performa` (`kode_performa`, `tgl`, `nip`, `nama`, `kode_bagian`, `kode_line`, `target`, `hasil`, `selisih`, `kode_status`) VALUES
(53, '2021-08-10', '160900080', 'WIWI ASTUTI', 'GULUNG', 'LINE A', '50', '50', '0', 'Target'),
(54, '2021-08-10', '160900065', 'AYU AMBARWATI', 'GULUNG', 'LINE A', '50', '50', '0', 'Target'),
(55, '2021-08-10', '170200234', 'NITA NOVERA', 'GULUNG', 'LINE A', '50', '20', '30', 'Tidak Target'),
(56, '2021-08-10', '170500506', 'HASAN BASRI', 'GULUNG', 'LINE A', '50', '10', '40', 'Tidak Target'),
(57, '2021-08-10', '170700823', 'MUHAMAD BAGUS RUWANTO', 'GULUNG', 'LINE A', '50', '20', '30', 'Tidak Target'),
(58, '2021-08-10', '170800831', 'SAHRONI', 'GULUNG', 'LINE A', '50', '30', '20', 'Tidak Target'),
(59, '2021-08-10', '170800832', 'HASTIN SARI ASIH', 'GULUNG', 'LINE A', '50', '50', '0', 'Target'),
(60, '2021-08-10', '170800947', 'ALIFAH', 'GULUNG', 'LINE A', '50', '50', '0', 'Target'),
(61, '2021-08-10', '170901020', 'NOVIA ANGGRIYANI', 'GULUNG', 'LINE A', '50', '50', '0', 'Target'),
(62, '2021-08-10', '180101696', 'NOVI AMALIA', 'GULUNG', 'LINE A', '50', '10', '40', 'Tidak Target'),
(63, '2021-08-10', '180201879', 'ELLIS NURDIYANA', 'GULUNG', 'LINE B', '50', '40', '10', 'Tidak Target'),
(64, '2021-08-10', '180602404', 'SUGIARTI', 'GULUNG', 'LINE B', '50', '50', '0', 'Target'),
(65, '2021-08-10', '180702468', 'RINA RUNJIANAH', 'GULUNG', 'LINE B', '50', '50', '0', 'Target'),
(66, '2021-08-10', '180702588', 'SUTRISMAN', 'GULUNG', 'LINE B', '50', '50', '0', 'Target'),
(67, '2021-08-10', '180802742', 'USWATUN KHASANAH', 'GULUNG', 'LINE B', '50', '50', '0', 'Target'),
(68, '2021-08-10', '180802774', 'UUN UNAYAH', 'GULUNG', 'LINE B', '50', '40', '10', 'Tidak Target'),
(69, '2021-08-10', '180802842', 'FATKHUR ROHMAN', 'GULUNG', 'LINE B', '50', '20', '30', 'Tidak Target'),
(70, '2021-08-10', '181003166', 'DIAH PITALOKA', 'GULUNG', 'LINE B', '50', '20', '30', 'Tidak Target'),
(71, '2021-08-10', '181103216', 'NANANG WIDIYANTO', 'GULUNG', 'LINE B', '50', '30', '20', 'Tidak Target'),
(72, '2021-08-10', '181203376', 'NURHANA', 'GULUNG', 'LINE C', '50', '50', '0', 'Target'),
(73, '2021-08-10', '181203393', 'TRI AAT SEPTIANI', 'GULUNG', 'LINE C', '50', '10', '40', 'Tidak Target'),
(74, '2021-08-10', '190103403', 'YUNIRA TRI KURNIASIH', 'GULUNG', 'LINE C', '50', '20', '30', 'Tidak Target'),
(75, '2021-08-10', '190303581', 'RAMA DHIYANTI', 'GULUNG', 'LINE C', '50', '50', '0', 'Target'),
(76, '2021-08-10', '190603726', 'SHIFA NADILA IRFA', 'GULUNG', 'LINE C', '50', '50', '0', 'Target'),
(77, '2021-08-10', '190603741', 'TARNINGSIH', 'GULUNG', 'LINE C', '50', '50', '0', 'Target'),
(78, '2021-08-10', '190703820', 'LUTFIANI', 'GULUNG', 'LINE D', '50', '50', '0', 'Target'),
(79, '2021-08-10', '191103967', 'RISTIANA NURHIDAYAH', 'GULUNG', 'LINE D', '50', '50', '0', 'Target'),
(80, '2021-08-10', '191103996', 'ELNI MUSYAROFAH', 'GULUNG', 'LINE D', '50', '50', '0', 'Target'),
(81, '2021-08-10', '191204059', 'WIJIYATI', 'GULUNG', 'LINE D', '50', '50', '0', 'Target'),
(82, '2021-08-10', '200104118', 'RAS PUJIANA', 'GULUNG', 'LINE D', '50', '10', '40', 'Tidak Target'),
(83, '2021-08-10', '200204197', 'RIZKA FADILA', 'GULUNG', 'LINE D', '50', '20', '30', 'Tidak Target'),
(84, '2021-08-10', '200204198', 'AYU PENDAWI', 'GULUNG', 'LINE D', '50', '30', '20', 'Tidak Target'),
(85, '2021-08-10', '200204199', 'KAROMAH AMALIA', 'GULUNG', 'LINE D', '50', '40', '10', 'Tidak Target'),
(86, '2021-08-10', '200204200', 'WIDODO SETIAJI', 'GULUNG', 'LINE D', '50', '50', '0', 'Target'),
(87, '2021-08-13', '12234', 'Asep', 'Gulung', 'Line A', '50', '40', '10', 'Tidak Target'),
(90, '2021-09-04', '180602404', 'SUGIARTI', 'GULUNG', 'LINE B', '90', '90', '0', 'Target');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `kode_status` varchar(30) NOT NULL,
  `nama_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`kode_status`, `nama_status`) VALUES
('Target', 'Target'),
('Tidak', 'Tidak Target');

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `id_target` int(10) NOT NULL,
  `kode_bagian` varchar(10) NOT NULL,
  `kode_line` varchar(10) NOT NULL,
  `target` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `sandi_user` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `sandi_user`) VALUES
('hrd', 'qwerty'),
('produksi', 'produksi4455');

-- --------------------------------------------------------

--
-- Table structure for table `usermid`
--

CREATE TABLE `usermid` (
  `id_mid` varchar(15) NOT NULL,
  `sandi_mid` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermid`
--

INSERT INTO `usermid` (`id_mid`, `sandi_mid`) VALUES
('produksi', 'produksi4455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`kode_bagian`);

--
-- Indexes for table `line`
--
ALTER TABLE `line`
  ADD PRIMARY KEY (`kode_line`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `kode_bagian` (`kode_bagian`);

--
-- Indexes for table `performa`
--
ALTER TABLE `performa`
  ADD PRIMARY KEY (`kode_performa`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kode_bagian` (`kode_bagian`),
  ADD KEY `kode_status` (`kode_status`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`kode_status`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id_target`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `usermid`
--
ALTER TABLE `usermid`
  ADD PRIMARY KEY (`id_mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `performa`
--
ALTER TABLE `performa`
  MODIFY `kode_performa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `id_target` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`kode_bagian`) REFERENCES `bagian` (`kode_bagian`);

--
-- Constraints for table `performa`
--
ALTER TABLE `performa`
  ADD CONSTRAINT `performa_ibfk_2` FOREIGN KEY (`kode_bagian`) REFERENCES `bagian` (`kode_bagian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

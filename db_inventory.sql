-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2018 at 02:52 PM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.12-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` varchar(50) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `jumlahbaik` int(4) NOT NULL,
  `jumlahrusak` int(3) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `tempat_barang` enum('gudang','rak1','rak2','lemari') NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `nama_barang`, `jumlah`, `jumlahbaik`, `jumlahrusak`, `tgl_pembelian`, `tempat_barang`, `keterangan`) VALUES
('46a765d0-28fc-11e8-b460-d0509974b5f7', 'komputer', 20, 20, 0, '2017-10-13', 'rak1', '-'),
('596d4057-28fc-11e8-b460-d0509974b5f7', 'power supply', 12, 2, 10, '2018-03-06', 'rak2', '-'),
('596d497e-28fc-11e8-b460-d0509974b5f7', 'motherboard', 35, 35, 0, '2018-03-07', 'lemari', '-'),
('596d5de4-28fc-11e8-b460-d0509974b5f7', 'Access Point TP-Link', 20, 20, 0, '2015-04-12', 'rak1', '-'),
('596d6796-28fc-11e8-b460-d0509974b5f7', 'Cisco Router', 4, 4, 0, '2016-05-01', 'rak1', '-'),
('596d6cb0-28fc-11e8-b460-d0509974b5f7', 'Casing PC', 3, 3, 0, '2015-12-03', 'rak2', '-'),
('64324427-6c7a-443e-ae14-a91f0da5ec75', 'dfmlvndhfjbvh', 12, 12, 0, '0000-00-00', '', 'hjvcguv'),
('672fc350-a904-4b90-baf4-55f3fb1f9978', '', 0, 0, 0, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alat_bahan`
--

CREATE TABLE `tb_alat_bahan` (
  `id` varchar(50) NOT NULL,
  `nama_alat_bahan` varchar(50) NOT NULL,
  `jml` int(3) NOT NULL,
  `baik` int(3) NOT NULL,
  `rusak` int(3) NOT NULL,
  `jenis` enum('Barang','Sekali Pakai','Alat','Bahan','Sparepart','DLL') NOT NULL,
  `tgl_beli` date NOT NULL,
  `ket` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_alat_bahan`
--

INSERT INTO `tb_alat_bahan` (`id`, `nama_alat_bahan`, `jml`, `baik`, `rusak`, `jenis`, `tgl_beli`, `ket`) VALUES
('0712bdd7-e837-4ebb-a887-2d4b3c1cce3c', '2 Rak', 2, 2, 0, 'Barang', '2011-07-06', '-'),
('11af548a-42ec-40ad-96c9-32b6353a448a', 'Switch D-Link', 10, 10, 0, 'Alat', '2015-10-15', '-'),
('17065d59-7f1e-4fc8-b307-3520b4c57378', 'Pinset', 20, 0, 0, 'Alat', '2015-10-15', '-'),
('3b7331ff-a789-11e8-a925-d99043a15dec', 'Obeng', 24, 2, 22, 'Alat', '2014-06-16', 'Keterangan Obeng'),
('3b734f61-a789-11e8-a925-d99043a15dec', 'Jam Dinding', 4, 3, 1, 'Sparepart', '2018-07-05', 'Di semua lab terdapat jam dinding'),
('4f3bc678-562e-4d1d-801b-3403749a0845', 'Lemari', 2, 2, 0, 'Barang', '2011-07-06', '-'),
('55535bbb-876f-4d1c-bf3f-8031d1f58b1e', 'Switch TP-Link 8 port', 1, 0, 0, 'Alat', '2015-10-15', '-'),
('5e9892a2-4584-4f25-baaa-2baad7c70a83', 'Obeng -', 27, 25, 2, 'Alat', '2015-10-15', '-'),
('69f5563b-2f19-4d25-b72b-f0b94f419b93', 'Drawer Toolbax Pan', 2, 2, 0, 'Alat', '2011-07-06', '-'),
('a20c362e-4cea-40b8-9e79-8ba545fed984', 'Toolbox 13\"', 5, 5, 0, 'Alat', '2015-10-15', '-'),
('a458a988-02c4-42e0-ad4f-ace2e2269317', 'Toolbox 13\" Maspion', 18, 18, 0, 'Alat', '2015-10-15', '-'),
('b2473917-94a6-4858-9111-0e75dbe9c2cb', 'Obeng +', 17, 17, 0, 'Alat', '2015-10-15', '-'),
('b868ad4f-eaf6-445c-848e-d254f7ef92cb', 'Toolbox 17\"', 2, 2, 0, 'Alat', '2015-10-15', '-'),
('cfbbb22c-f1f8-44fe-81a3-fbbbe62800cf', 'Switch TP-Link', 13, 13, 0, 'Alat', '2015-10-15', '-'),
('d61bf119-410e-4f3b-bb68-4052c35e6d9f', 'Kuas', 21, 21, 0, 'Alat', '2015-10-15', '-'),
('ec25c24a-419e-46b4-9055-83c762dc36a2', 'Obeng ±', 5, 5, 0, 'Alat', '2015-10-15', '-'),
('f32c5082-65dd-4bfe-9a87-06b43b83598b', 'Mini Toolbox', 1, 1, 0, 'Alat', '2015-10-15', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inv_tkj`
--

CREATE TABLE `tb_inv_tkj` (
  `id` int(11) NOT NULL,
  `id_nama_brg` int(5) NOT NULL,
  `jml` int(3) NOT NULL,
  `baik` int(3) NOT NULL,
  `rusak` int(3) NOT NULL,
  `id_tmpt` int(4) NOT NULL,
  `id_ruang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_beli` date NOT NULL,
  `id_ket` int(5) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pc`
--

CREATE TABLE `tb_pc` (
  `id_pc` varchar(50) NOT NULL,
  `kodepc` varchar(15) NOT NULL,
  `prosesor` varchar(30) NOT NULL,
  `ram` varchar(30) NOT NULL,
  `hdd` varchar(25) NOT NULL,
  `mobo` varchar(40) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ruang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letak` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`, `letak`) VALUES
('176d7790-7881-46cb-aa85-bc7005c5aed8', 'Lab DNA Evercoss', 'Lantai 3'),
('31448af8-22b1-4b19-a1aa-a697945008a9', 'Ruang Multimedia', 'Lantai 2'),
('81775a3e-5626-4018-b36c-06e828f16a5c', 'Ruang KKPI 2', 'Lantai 2'),
('9beaf44a-22c2-4885-98c7-88f1c1699eae', 'Lab KKPI 2', 'Lantai 1'),
('ae896d26-5527-4bf4-9390-35345fd1dbd3', 'Lab. Akuntansi', 'Lantai 1'),
('b182610b-a676-400b-b060-54e6596ef27d', 'Ruang Guru TKJ', 'Lantai 2'),
('bb482b8c-6893-11e8-be3f-5f752b78d8d3', 'Lab TKJ', 'Lantai 3'),
('bb4835b9-6893-11e8-be3f-5f752b78d8d3', 'Lab Server', 'Lantai 2'),
('ce944f9c-fc6d-4bf5-8864-918308222a96', 'Lab KKPI 1', 'Lantai 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` varchar(50) NOT NULL,
  `nis` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('L','P','','') NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nis`, `nama`, `jk`, `kelas`) VALUES
('006d9b0b-8a4d-4f07-b0da-db49086fa08d', 1661, 'HAMAM FADLLI', 'L', 'XII TKJ A'),
('02f89c2e-829b-4cef-8e75-732d30ffc559', 1665, 'ITA SA\'ADATUR. R', 'P', 'XII TKJ A'),
('0e266f61-c5e5-41e9-93a0-8379f1b46bde', 1677, 'MUHAMMAD KHOFIF AQIFATUL HUDA', 'L', 'XII TKJ A'),
('0f6ca8db-1168-4cd9-b39f-970297142ad9', 1669, 'M. ANDIS MAULANA', 'L', 'XII TKJ A'),
('1141f80f-d542-499b-95aa-fc07bf835cd6', 1847, 'Adi Pramono Aji', 'L', 'XI TKJ A'),
('1186c885-2b96-4d3b-ae9a-9a3262273352', 2130, 'Wahyu Saputra', 'L', 'X TKJ B'),
('12d1504c-4f9a-4881-8563-cb240d251c47', 1893, 'Nur Aita Sari', 'P', 'XI TKJ B '),
('13338384-44c4-4b13-9486-f7e999e50170', 1684, 'RAHMADHANI DWI FATMAWATI', 'P', 'XII TKJ A'),
('134ca533-7486-4a45-a0d5-dbc62600e51a', 1652, 'AFRI ISLAMI PUTRI', 'P', 'XII TKJ A'),
('13ce7307-2616-4c8a-ace3-360669763818', 2088, 'Komariatun Afifa Nurcahyani', 'P', 'X TKJ A'),
('13f226c4-04ce-4525-ab36-42d9d76ddee8', 1874, 'Wahyu Reza Sandi', 'L', 'XI TKJ A'),
('1408a12b-216a-45e6-85aa-e75ffd0c5e27', 1876, 'Adinda Ayu Wardani', 'P', 'XI TKJ B '),
('162677ba-1344-4f95-b22a-77e94dbdcf25', 2131, 'Winda Nia Absokh', 'P', 'X TKJ A'),
('18076ebe-726f-42a6-977b-b1fbdbac6073', 1673, 'MAMIK LUTFIANA', 'P', 'XII TKJ A'),
('1b0c4bfc-b655-4f05-b2e4-a082f7738216', 1857, 'Fitria Ervi Yani', 'P', 'XI TKJ A'),
('1bf131eb-afc0-4dc5-ae26-1641589955d9', 1752, 'Tri Venia Dezanri', 'P', 'XII TKJ B'),
('1dbf9951-97b3-4dfd-9720-83742aea574a', 1656, 'BAHARUDIN YUSUF MAULANA', 'L', 'XII TKJ B'),
('221934e8-1047-48c0-b7db-513e0ef43f1d', 1110, 'Percobaan', 'P', 'XII TKJ A'),
('265d635e-0115-4ad5-b103-663cd404946e', 1851, 'Alfan Maulana Febrilian', 'L', 'XI TKJ A'),
('2788d4c4-9ede-438a-b276-b88778dc4fea', 2075, 'Durrotun Nafisah', 'P', 'X TKJ B'),
('27a7fd26-24ab-4555-8d58-2a801547d1a8', 2099, 'Maula Yusuf Wafi Yuddin', 'L', 'X TKJ A'),
('29891c14-9880-498a-857d-39fe2e88a12e', 1681, 'MUHAMMAD MIFTAHUL ULUM', 'L', 'XII TKJ B'),
('2a0998d1-f6c8-4da7-989e-d5c85e921b4e', 1678, 'MUHAMMAD KHOIRUDDIN', 'L', 'XII TKJ B'),
('2a5b577d-c4b8-4d5f-bfff-2b400c5d7080', 2094, 'Maftuh Ahnan', 'L', 'X TKJ A'),
('2bcbaf70-fabc-4e42-854b-af62921a4dc9', 2063, 'Alimul Hadi', 'L', 'X TKJ B'),
('2cdf5a69-ea2c-413f-b4fb-5409ad4a5659', 2115, 'Niam Kholidin Ghofur', 'L', 'X TKJ A'),
('2f08c93f-325a-4f7a-8f04-fd4d0d83aecf', 2074, 'Dimas Arifin Ilham', 'L', 'X TKJ A'),
('30c0981f-8409-4c6e-ae33-76f0a8af0e5e', 1897, 'Rahmad Syafi\'i', 'L', 'XI TKJ B '),
('344a7521-e500-49f3-afdd-502492cc6dcb', 2089, 'Lucky Ardimansah', 'L', 'X TKJ A'),
('346fa506-3ed8-47b5-a7bd-1b204cd5cda3', 1682, 'MUHAMAD SULTANU FAHMI', 'L', 'XII TKJ A'),
('34e12d0c-5ece-4d4f-997c-22026d094ec4', 2079, 'Erni Irmawati', 'P', 'X TKJ B'),
('376b93f6-bc55-46b8-8a64-f092666bf849', 1848, 'Ahmad Nurul Nafis', 'L', 'XI TKJ A'),
('37730584-3f78-4754-b7a8-92e6219af3a4', 1689, 'SILAH NASIRUL UMAM', 'L', 'XII TKJ B'),
('38ecf11a-392e-4858-b3d6-6d4c0d9a84a1', 1670, 'MUHAMMAD MALIK NUR RAHMAN', 'L', 'XII TKJ B'),
('3c699752-0f81-4e0b-a8ab-24d500a4d7f6', 2132, 'Yovie Arvian Naufal', 'L', 'X TKJ B'),
('3d20adb1-694e-4926-8235-5c25b327d273', 2084, 'Fisal Asori', 'L', 'X TKJ B'),
('3d2591e5-6fab-4d2e-a452-eff96fbf67a4', 1680, 'MUHAMMAD LATIF RIDWAN', 'L', 'XII TKJ B'),
('3d363806-1049-4258-9de6-1881b13faba3', 1668, 'KHOTIMATUL KHASANAH', 'P', 'XII TKJ A'),
('3d60cb06-a392-41e8-a6a6-430ba97005b7', 2106, 'Muhammad Ilham', 'L', 'X TKJ B'),
('3e773e84-ce79-425b-95b1-d831eb745faa', 2062, 'Ali Shodikin', 'L', 'X TKJ B'),
('3e8ff87d-40db-4a24-8438-7befd26e8297', 2092, 'M Azka Taslimi Choeri', 'L', 'X TKJ A'),
('3ea5802c-4202-4a08-bcc4-755494ef4599', 1666, 'JAFAR HIDAYATULLAH', 'L', 'XII TKJ A'),
('3ebf1d21-439e-4a48-9181-dd903f74e44d', 2120, 'Riky Hakim Maulana', 'L', 'X TKJ A'),
('3fe836a7-cc80-493d-91c7-78428e1096a8', 1868, 'Muhammad Ficky Fahrozi', 'L', 'XI TKJ A'),
('41542f24-6bc1-41bc-af53-7774523f0595', 2110, 'Muhammad Nabil Ghufron', 'L', 'X TKJ B'),
('431a8937-c534-4bde-bedb-52712540622e', 1805, 'Miftahur Rohman', 'L', 'XI TKJ A'),
('4403459a-777e-477a-9e5e-3dfe417a98bb', 1662, 'HANAFI', 'L', 'XII TKJ A'),
('459fc2d1-ea2d-4590-b61e-299a370479e9', 2087, 'Ina Azimatul Lailiyah', 'P', 'X TKJ B'),
('46b4791d-8dbb-45d5-9f64-6ee085ab9b70', 2046, 'Risky Fani Maulana', 'L', 'X TKJ B'),
('47fda8bd-6e52-40f5-a9c3-79f11fab7417', 2061, 'Aldi Nur Rochman', 'L', 'X TKJ A'),
('49076b61-dd58-4d2b-8f4e-ee91424ec163', 1691, 'SITI ROFIATUN', 'P', 'XII TKJ B'),
('4a6a6534-b2fb-4bfb-967a-a9082a1b0066', 1654, 'AHMAD SYAFIQUL ANAM', 'L', 'XII TKJ A'),
('4baa07e9-caac-4999-94af-8591a3fd2133', 2056, 'Ahmad Habib Awwaluddin', 'L', 'X TKJ A'),
('4c2d7413-f429-4bd5-a9e9-7073b1646c48', 1878, 'Ainul Falaq', 'L', 'XI TKJ B '),
('4ea30969-b958-4b44-aafb-e45284b60917', 2124, 'Sirojul Munir', 'L', 'X TKJ B'),
('4f6cbe2e-c757-4ed4-9200-52a83eeaa0d0', 1859, 'Hevi Yohana', 'P', 'XI TKJ A'),
('5240d989-e543-41ae-becd-b821d1bf6d40', 2073, 'Diah Puji Lestari', 'P', 'X TKJ A'),
('529aa9f2-491e-4e38-bca7-0a3ecc6aa8cc', 1879, 'Angga Setiawan', 'L', 'XI TKJ B '),
('531dddda-b1a1-415c-b440-5dfe0905bd6f', 2113, 'Muhammad Umar Faruq', 'L', 'X TKJ A'),
('539efdf2-cba3-4d61-b9c8-99a3ac019662', 1873, 'Nila Fitriyani', 'P', 'XI TKJ A'),
('547eb16c-a639-46a5-ad73-2d55b472b467', 1899, 'Rizky Kurnia Ramadhan', 'L', 'XI TKJ B '),
('572aafde-2a31-418c-b912-943b0102e434', 1686, 'ROHBATUN NAILIN NAJAH', 'P', 'XII TKJ A'),
('593b6541-b5b7-42b4-bc5b-dc40e820bcee', 1659, 'FERY FIRMAN MAULANA', 'L', 'XII TKJ B'),
('5955163f-3db7-4505-a7e8-cd0cd6bdac05', 1675, 'MUHAMMAD FANNY RAMDHAN', 'L', 'XII TKJ B'),
('5bd48d81-fce8-4ca4-b85e-5a79da0f8e64', 1881, 'Dian Nafisah Izzati', 'P', 'XI TKJ B '),
('5f963104-9fa0-4fa7-91be-170f551dd5cf', 2055, 'Adit Eka Saputra', 'L', 'X TKJ A'),
('606c16cc-7482-41a5-b0bb-647e814c5ebb', 1903, 'Vernanda Amelia Putri', 'P', 'XI TKJ B '),
('6278449d-6cf4-4afd-ae20-62cead8151a5', 1866, 'Muhammad Amirul Hakim', 'L', 'XI TKJ A'),
('64225d6a-6d32-43cd-943a-bb30e285b898', 2102, 'Muhammad Anwarul Ulum', 'L', 'X TKJ A'),
('65573314-b329-49eb-b580-05ed2662e7ad', 2129, 'Ula Innani Rozanah', 'P', 'X TKJ B'),
('67ef73ca-aaf9-45b3-94d1-003b8d780595', 2082, 'Feti Ainun Khusnani', 'P', 'X TKJ B'),
('6896d1c1-6a73-4dec-ba81-1422160a5515', 1875, 'Achmad Robiansyah', 'L', 'XI TKJ B '),
('6a4dae47-23d3-43a5-bec5-17bdcf6e7be0', 2059, 'Ahmad Riski Bayu Ryansyah', 'L', 'X TKJ A'),
('6b126232-90af-4262-b185-cdae8d8428ba', 2114, 'Muhammad Zahirul Khabsi', 'L', 'X TKJ B'),
('6bf918c1-0786-418b-bc6a-07a15df4ca9d', 1888, 'Muhammad Dlohiruddin Zuhair', 'L', 'XI TKJ B '),
('6c2686db-dc74-40ba-9b3e-4dea391bbd6f', 1697, 'ZAENAL ARIFIN', 'L', 'XII TKJ B'),
('700de7b4-1082-43f9-8c29-e152cb5fd4bc', 2127, 'Thoriq Nahdi Najah', 'L', 'X TKJ B'),
('70d5385f-ea40-4aa2-9ed1-c73e6d17417c', 2072, 'Dewi Safitri', 'P', 'X TKJ A'),
('71805db5-3aaa-413a-8588-fd07773b5d9f', 2086, 'Ilham Suyadi', 'L', 'X TKJ A'),
('7206e4a2-71d2-4237-ac45-63bb085e419b', 2070, 'Brian Abdul Jabbar', 'L', 'X TKJ B'),
('7a44a9c6-21df-4a4c-ad30-07a71c96d215', 1685, 'RAMADHAN YUDHA MAULANA', 'L', 'XII TKJ B'),
('7ab7200e-b678-4ebb-96b6-4fccf8e51805', 2112, 'Muhammad Ulil Albab', 'L', 'X TKJ B'),
('7b4c4362-fc6b-4579-9d8c-278ad286fd4d', 1880, 'Arief Purnomo Shidik', 'L', 'XI TKJ B '),
('7b6b4615-880e-41c0-9998-88706eee3b80', 2078, 'Eko Listiawan', 'L', 'X TKJ A'),
('7e6dff9c-b62f-45b3-b4b1-b1f0299bd505', 1696, 'YAZID YADHIYA HAQIQI', 'L', 'XII TKJ B'),
('7e86a601-6ba5-4bdb-8760-38ec34eaeec0', 2116, 'Nilam Sari', 'P', 'X TKJ A'),
('7faf202d-4fdb-4950-b355-b3502f430301', 1860, 'Irvan Rahardian Ahmad Amru Rit', 'L', 'XI TKJ A'),
('800db9c0-8e5e-4bb7-b29e-aaa98485a53e', 1679, 'MUHAMMAD KHOIRUZZADIT TAQWA', 'L', 'XII TKJ A'),
('830fbac2-3976-4f03-ac6b-e7eb20d66683', 1690, 'SILVIA DWI ASTUTI', 'P', 'XII TKJ B'),
('8738660d-b0a6-4747-8ebd-9a1c1970b75c', 2085, 'Herli Afriyan', 'L', 'X TKJ B'),
('8ba6d28c-a574-4572-813f-48fc41d9ae55', 2093, 'M. Salman Farisi Faisal Fais', 'L', 'X TKJ A'),
('8be0d68e-9caf-485c-966b-f0a982105c59', 1900, 'Rizqi Arizal', 'L', 'XI TKJ B '),
('8be8f2a2-aa24-46ff-9bc3-4b3ff5ea76c7', 2128, 'Tsaqib Khiyarul Hasani', 'L', 'X TKJ B'),
('8d6d3f39-42d0-4ab5-b86c-a203223bb9bd', 2058, 'Ahmad Muallim', 'L', 'X TKJ A'),
('8dbd7620-86f8-4f86-b82e-da1c86bf071b', 2091, 'Lutfiyatul Malikhah', 'P', 'X TKJ A'),
('8e0622f1-8e8b-41ac-a9a7-91f7cd4bdaa2', 1864, 'Mita Fitria Dewi', 'P', 'XI TKJ A'),
('8f289473-c706-41e5-9442-2361ff2af238', 1885, 'Muhammad Khabiballah', 'L', 'XI TKJ B '),
('8f35784d-03ea-455f-b12f-38d19904f11b', 2065, 'Ana Faida Hidayah', 'P', 'X TKJ B'),
('8fa15d5e-cde1-4e82-8f9e-8b67b95c00cf', 1660, 'Fiki Zulfikar', '', 'XI TKJ B '),
('8fd262cb-3a92-440d-92cd-fc219d96c894', 2083, 'Fini Isnindia Indiana', 'P', 'X TKJ B'),
('903a91b0-8c61-4bcb-9b2c-2ece0869d260', 1694, 'TIA ROHMAH', 'P', 'XII TKJ B'),
('92eb3854-d521-4707-9eef-e099f2ff06c6', 1854, 'Egi Nur Rizki', 'L', 'XI TKJ A'),
('938b3e0c-1c35-43a1-b3df-21752ee2ba90', 2121, 'Rizki Bagas Saputra', 'L', 'X TKJ B'),
('949d7eca-5c22-4c50-bd78-72f6b7b6bfe7', 1867, 'Muhammad Erick Patriotick', 'L', 'XI TKJ A'),
('95319289-19c1-4998-b634-957587c00d69', 2108, 'Muhammad Latif', 'L', 'X TKJ B'),
('97025151-ca64-4bcc-a293-0f8dc181480b', 1651, 'ADHELLAS BAGUS PERMANA', 'L', 'XII TKJ A'),
('9b8c4b7c-33dd-4729-a00f-9462bc1f900a', 1658, 'ERIKA WATI', 'P', 'XII TKJ A'),
('9c60e582-1aaf-4655-8270-9053e6166bda', 2071, 'Dani Feri Febriandi', 'L', 'X TKJ A'),
('9eb43429-e961-45ee-9d49-4010b382f12c', 2119, 'Rafly Yusuf', 'L', 'X TKJ A'),
('a027493f-a696-4b43-86cc-c55b8261001a', 2118, 'Nur Faizatul Amalia', 'P', 'X TKJ B'),
('a2cdc8cc-5786-4109-8395-31209b12b83d', 2098, 'Maria Aufa', 'P', 'X TKJ A'),
('a2cf8ab2-bb47-4147-a0b6-a704c031f63d', 1858, 'Friska Audry Amalia', 'P', 'XI TKJ A'),
('a3a1b168-cfe5-4daf-be5a-b46f591062ab', 1667, 'JEFRI DWI HIDAYAT', 'L', 'XII TKJ A'),
('a492b296-963f-46b6-b7ce-86abda72ee7a', 2134, 'Zulfa Maulana', 'P', 'X TKJ A'),
('a53b0286-b961-48b0-bea0-6baabbb2d859', 1674, 'MUHAMMAD FAIZAL NI`AM MUBAROK', 'L', 'XII TKJ A'),
('a611a9ba-bcea-43a8-8c22-408637345e1d', 1687, 'SALSA BELLA', 'P', 'XII TKJ B'),
('a6798dc1-0275-47fd-beef-7c67b6e72957', 2104, 'Muhammad Azka Romansyah', 'L', 'X TKJ B'),
('a76921b7-ae67-4fed-9a1f-d52359a6881c', 2080, 'Fanya Trisyawati', 'P', 'X TKJ A'),
('a8e24db0-8ca4-43fc-9c22-89da203d13b4', 1886, 'Muhammad Sofyan Maulana', 'L', 'XI TKJ B '),
('aa820bc3-804d-4b6e-84a9-188f51e6550c', 1969, 'Meisun Ratna Sari', 'P', 'X TKJ A'),
('acff79db-c224-47f0-ba70-0999f63e32d5', 2105, 'Muhammad Farros Hidayat', 'L', 'X TKJ B'),
('afdcb0e1-a2b8-4470-bd55-62a6c6da0a6e', 2103, 'Muhammad Arif Kusmanto', 'L', 'X TKJ B'),
('b3451e0f-a440-4e67-8d39-c8c381493397', 2111, 'Muhammad Rafli', 'L', 'X TKJ B'),
('b393a001-4e47-4f88-be9e-d20f7af80630', 1896, 'Putri Widyawati', 'P', 'XI TKJ B '),
('b5b462e4-da7e-4494-bc5b-537ef46dfaf4', 1653, 'AHMAD JEFRIYANTOMI', 'L', 'XII TKJ B'),
('b76360ea-3960-4619-aa47-c697ed332228', 1959, 'Fany Prastiyo', 'L', 'XI TKJ B '),
('b7e6d611-eca1-42f6-8eec-6ee553d74fbf', 2064, 'Alvina Hariyanti', 'P', 'X TKJ B'),
('b819d9b4-57b1-4a5b-9992-8715ce4f2b51', 2107, 'Muhammad Irkham Makhis', 'L', 'X TKJ B'),
('b89c2d30-17ed-4d46-99eb-a9364f0f2cf0', 1850, 'Ahmad Suyanto', 'L', 'XI TKJ A'),
('bbb85176-7dc6-469b-8bf8-13e16c5d0f27', 2096, 'Mahmud Sufa\'At', 'L', 'X TKJ A'),
('bc41ef6f-dd08-443a-8544-aa2f005078ca', 1862, 'Mahir Arriyadl', 'L', 'XI TKJ A'),
('bcd64cce-d6f7-46a3-bcfd-ee7f825f1920', 1671, 'M. RIFQI MUSLIM', 'L', 'XII TKJ A'),
('bce3c28a-95bc-4d1a-9ec9-2332306d8120', 1664, 'INDRA AMIRUL MAJID', 'L', 'XII TKJ A'),
('bcedd060-7aa0-4f62-92b2-51aecba499b5', 2060, 'Ahmad Riza Aftoni', 'L', 'X TKJ A'),
('bcf9a8ee-269e-4e96-a5bc-9047dda5a685', 1889, 'Muhammad Ikbal Maulana', 'L', 'XI TKJ B '),
('bd3b1bf7-5f2b-4011-aae6-58551cd95de5', 2117, 'Nova Afrizal', 'L', 'X TKJ B'),
('bd867dce-ed86-471c-88e0-1dabdbc456f4', 1884, 'Khafid Tamtazzaini', 'L', 'XI TKJ B '),
('be6abf60-43d6-41f1-84f2-8de01cf8fa51', 2076, 'Durrotun Nashehah', 'P', 'X TKJ B'),
('bfaa1974-266b-4fee-bc45-2aee1baf15d8', 1891, 'Muhammad Taba Akbar', 'L', 'XI TKJ B '),
('bfce2a05-4f5a-4eb9-aacd-ce5bf7de704b', 1892, 'Nanang Kholilur Rohman', 'L', 'XI TKJ B '),
('c0a4b5db-55e8-46b8-ae19-768de7e7fe71', 1822, 'Alvin Latiful Qohar', 'L', 'XI TKJ B '),
('c16dca9e-9931-4eb2-8c00-70f5f34ae82d', 1676, 'MUHAMMAD FATKHUL WAHAB', 'L', 'XII TKJ B'),
('c187f914-9585-420d-a5f7-2c8abc4af887', 1663, 'IIN INDRIYANI', 'P', 'XII TKJ A'),
('c1cd10a2-2c71-465c-b64b-c819a76e47ec', 1688, 'SHERLY CHOIRUN NISA', 'P', 'XII TKJ B'),
('c3888053-c9e3-4541-a1b6-787a4da2a2b2', 1655, 'AQSAL ILHAM SAFATULLAH', 'L', 'XII TKJ A'),
('c4f2b6f4-c5df-46ee-b523-ec3f9ffc8ab6', 2122, 'Safiul Khamid', 'L', 'X TKJ B'),
('c5051c1e-8cd3-46ce-9cc7-f0d8d0aeee59', 1853, 'Arief Syarifudin', 'L', 'XI TKJ A'),
('c5e8d1ae-969f-409f-8d65-faf9e69f13a3', 2066, 'Angga Wahyu Saputrta', 'L', 'X TKJ B'),
('c6999822-b845-4b87-80bd-232ef58ed7f1', 2067, 'Arif Rohman', 'L', 'X TKJ B'),
('c983aa90-483c-4eab-93ff-f4241c7d3cb4', 1894, 'Octavianna Aurellia', 'P', 'XI TKJ B '),
('cc1ff356-9601-4b1d-abcb-08061a8682fd', 2100, 'Mohamad Azka Fahmi', 'L', 'X TKJ A'),
('cd7ad8fc-f045-4c2e-9e84-eb9c8649e1c1', 1887, 'Muhammad Alif Fiyan', 'L', 'XI TKJ B '),
('ce7aef7c-ef43-43cb-bbe0-09448b4b5fc7', 1872, 'Niken Ayu Ria Rosalina', 'P', 'XI TKJ A'),
('d9383b2b-d3f5-4dca-aa9e-7392e6f04e06', 1890, 'Muhammad Shofwan', 'L', 'XI TKJ B '),
('d95b33e4-74af-46bf-b555-62dedc69ffbd', 2101, 'Muhammad Alfin Syaifudin', 'L', 'X TKJ A'),
('dad7f33c-465c-414c-8566-34263dd9e6b5', 2125, 'Tangguh Arifian Saputra', 'L', 'X TKJ A'),
('db47ea8d-8335-47b0-b113-0b78317ee3ff', 2123, 'Sailal Ikhfiya', 'P', 'X TKJ A'),
('dbbf37e9-dc04-4ad2-be92-9e2e37791440', 2133, 'Zida Taqiyya', 'P', 'X TKJ B'),
('dbceebf1-09b9-42dc-a5d8-ba3149e284e5', 1855, 'Fadlilatul Faiqoh', 'P', 'XI TKJ A'),
('dc48db4c-ad6d-4258-9f7e-7e5e00ae95db', 1902, 'Ulul Albab', 'L', 'XI TKJ B '),
('dc5df9ab-b969-4c68-9c76-e49a4006c8ee', 2095, 'Maftukhatu Rizqiyah', 'P', 'X TKJ A'),
('df60ef05-d40c-4606-8baf-3b584a8df9bc', 1865, 'Muhammad  Fikar Munandar', 'L', 'XI TKJ A'),
('dfddb6ad-a73a-4d8f-b088-7261a41835ca', 1695, 'VEGA WIZAYANTI', 'P', 'XII TKJ B'),
('e24f63c0-b33e-4beb-9e80-bde7c347b961', 1901, 'Saik Maulana Yusuf', 'L', 'XI TKJ B '),
('e41ea93e-e960-44ab-bb81-c83c33915d8c', 2068, 'Atika Anik Matulfadhilah', 'P', 'X TKJ B'),
('e439c3d8-7626-4850-b1c1-e22bdc0b6488', 2081, 'Farah Dian Puspita', 'P', 'X TKJ A'),
('e669e2c2-7ab9-4a23-8f82-2c96980ab62f', 1863, 'Marisa Istaltofa', 'P', 'XI TKJ A'),
('e8a2560a-a70e-4c99-85ef-afc6b6a1db13', 1849, 'Ahmad Rizqi Mubarok', 'L', 'XI TKJ A'),
('e9ce9796-718f-4ebe-9a2f-b47f7b411589', 1895, 'Okky Irmina Safitri', 'P', 'XI TKJ B '),
('ead7e948-6d96-4378-82b2-0453d32dd627', 2097, 'Maria Ana Elina', 'P', 'X TKJ A'),
('eb4b54ce-376e-45ec-84b1-c25b8fd38193', 1869, 'Muhammad Rizqi Indra Rismana', 'L', 'XI TKJ A'),
('ebf7481e-dd32-45e6-b02a-ebea4b6796df', 1692, 'TAHSINUL MAAL', 'L', 'XII TKJ B'),
('ed8fba4b-6f0e-4058-8a88-6369c1a39270', 1898, 'Rifda Nur Faizah', 'P', 'XI TKJ B '),
('edbc82ab-86d0-4431-9e99-5cc81441abe7', 1870, 'Muhammad Syahrul Rohman', 'L', 'XI TKJ A'),
('f09f5f8d-2fbd-42ec-a28d-3e85b55c882f', 2077, 'Dwi Mubarokha', 'P', 'X TKJ B'),
('f4894bbd-f516-4d0f-8d7d-53bc7d2d6357', 2126, 'Teguh Budi Prastyo', 'L', 'X TKJ A'),
('f7c54390-7052-4725-8473-2886ad90ccef', 1856, 'Fery Lukmansyah', 'L', 'XI TKJ A'),
('f8e77d43-3b11-442c-91d2-2f84d8bad41c', 1748, 'SARIFATUL ISLAMIYAH', 'P', 'XII TKJ B'),
('fa71e242-711f-4a56-8d22-7f5f0984b74d', 1861, 'Luqman As\'Ari', 'L', 'XI TKJ A'),
('fc9f8a8b-ac5a-494a-8ff6-d198a577a8ed', 2069, 'Bahrul Alam', 'L', 'X TKJ A'),
('fcfa03fe-72d8-4d1e-ba3b-d012286b1737', 2057, 'Ahmad Khoirudin', 'L', 'X TKJ A'),
('fd998127-2a0e-4381-9563-057e4f34d18a', 1846, 'Adel Laila Fatmawati', 'P', 'XI TKJ A'),
('fdc94f9c-88e6-40f8-a420-7947afd2279c', 2090, 'Ludvi Arjuna', 'L', 'X TKJ B'),
('fdeb49d2-cf09-4a61-a3c4-bfb9d1ef3bd9', 2109, 'Muhammad Mabaul Ulil Absor', 'L', 'X TKJ B'),
('ff05fede-7dfe-4620-a59e-d787cd186f78', 1871, 'Nafis Zuhairoh', 'P', 'XI TKJ A'),
('ff5fce19-771c-4074-a641-d03a2ef95d30', 1882, 'Eka Novita Nor Safitri', 'P', 'XI TKJ B ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tempat`
--

CREATE TABLE `tb_tempat` (
  `id` int(11) NOT NULL,
  `nama_tempat` varchar(40) NOT NULL,
  `penanggung_jawab` varchar(40) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tempat`
--

INSERT INTO `tb_tempat` (`id`, `nama_tempat`, `penanggung_jawab`, `jabatan`) VALUES
(1, 'Gudang', 'Sugiyono, A.Md.', 'SARPRAS'),
(2, 'Rak 1', 'Ah. Sholikul, A.Md.', 'KKK TKJ'),
(3, 'Rak 2', 'Ah. Sholikul, A.Md.', 'KKK TKJ'),
(4, 'Lemari TKJ', 'Ah. Sholikul, A.Md.', 'KKK TKJ'),
(5, 'Meja', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tengah`
--

CREATE TABLE `tb_tengah` (
  `id_inv` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `baik` int(11) NOT NULL,
  `rusak` int(11) NOT NULL,
  `pengadaan` date NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tkjl3`
--

CREATE TABLE `tb_tkjl3` (
  `id_inv` varchar(50) NOT NULL,
  `id_alat` varchar(50) NOT NULL,
  `id_ruang` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tkjl3`
--

INSERT INTO `tb_tkjl3` (`id_inv`, `id_alat`, `id_ruang`, `ket`) VALUES
('640c6372-e70a-48c8-894e-6f9f9aede3c8', 'a20c362e-4cea-40b8-9e79-8ba545fed984', 'b182610b-a676-400b-b060-54e6596ef27d', ''),
('cc35bdc7-8b72-4f4a-8f64-c8324c86e15b', '4f3bc678-562e-4d1d-801b-3403749a0845', '176d7790-7881-46cb-aa85-bc7005c5aed8', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(80) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(80) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
('824f4516-81a8-11e8-8f97-d0509974b5f7', 'faiz', '9e13342cfc1ea881aeb27a51e009ee9162d45dfb', '2'),
('873a095f-243e-11e8-9caf-d0509974b5f7', 'admin', '8ab7b004f4ac17eab77eebf3b0e733fa74ddbf99', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_alat_bahan`
--
ALTER TABLE `tb_alat_bahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_alat_bahan` (`nama_alat_bahan`),
  ADD KEY `jenis` (`jenis`),
  ADD KEY `nama_alat_bahan_2` (`nama_alat_bahan`),
  ADD KEY `nama_alat_bahan_3` (`nama_alat_bahan`,`ket`);

--
-- Indexes for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tkjl3`
--
ALTER TABLE `tb_tkjl3`
  ADD PRIMARY KEY (`id_inv`),
  ADD KEY `id_alat` (`id_alat`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_tkjl3`
--
ALTER TABLE `tb_tkjl3`
  ADD CONSTRAINT `tb_tkjl3_ibfk_1` FOREIGN KEY (`id_alat`) REFERENCES `tb_alat_bahan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

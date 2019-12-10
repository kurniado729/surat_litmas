-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 05:43 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_litmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `litmas_diversi`
--

CREATE TABLE `litmas_diversi` (
  `id` int(11) NOT NULL,
  `file` varchar(128) NOT NULL,
  `pengirim` varchar(128) NOT NULL,
  `no_surat` varchar(128) NOT NULL,
  `tgl_surat` varchar(128) NOT NULL,
  `ringkasan` varchar(128) NOT NULL,
  `status_buat` enum('0','1') NOT NULL,
  `hapus` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `litmas_diversi`
--

INSERT INTO `litmas_diversi` (`id`, `file`, `pengirim`, `no_surat`, `tgl_surat`, `ringkasan`, `status_buat`, `hapus`) VALUES
(111, 'BAB_II_LANDASAN_TEORI_2_1_Konsep_Dasar_S.pdf', 'ini litmas diversi', '134134', '01-12-2019', 'diversi', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `bagian` enum('TU','BKA','BKD') NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `hapus` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `bagian`, `jabatan`, `hapus`) VALUES
(52, '123134', 'dsfa', 'laki-laki', 'tapung', '26-11-2019', 'tapung', 'TU', 'jabatan1', '0'),
(53, 'dsafdsaf', 'asdfsdfasdf', 'laki-laki', '1', '27-11-2019', 'panam', 'BKD', 'jabatan3', '0'),
(54, 'dsfsadfasdf', 'dsfasd', 'laki-laki', '1', '04-12-2019', '4413', 'BKA', 'jabatan2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `surat_disposisi`
--

CREATE TABLE `surat_disposisi` (
  `id_surat_disposisi` int(11) NOT NULL,
  `pengirim` varchar(128) NOT NULL,
  `no_surat_masuk` varchar(128) NOT NULL,
  `tgl_surat_masuk` varchar(128) NOT NULL,
  `ringkasan` varchar(128) NOT NULL,
  `tujuan` enum('BKD','BKA') DEFAULT NULL,
  `file_disposisi_sudah_disetujui` varchar(128) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `status_spt` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_disposisi`
--

INSERT INTO `surat_disposisi` (`id_surat_disposisi`, `pengirim`, `no_surat_masuk`, `tgl_surat_masuk`, `ringkasan`, `tujuan`, `file_disposisi_sudah_disetujui`, `status`, `status_spt`) VALUES
(80, 'lapas indargiri hilir', 'W4-PS-12', '12-12-2019', 'penelitian masyarakat an. ilham sauly', 'BKD', 'jbptunikompp-gdl-muhammadsy-35135-3-unikom_m-i3.pdf', '1', '1'),
(81, 'lapas inhu', '12321', '04-12-2019', 'penelitian masyarakat an. ilham sauly', 'BKD', '237578-sistem-informasi-perjalanan-dinas-berbas-c00f9fe0.pdf', '1', '1'),
(82, 'lapas indragirihulu', '23143', '13-12-2019', 'penelitian masyarakat an. reza purnomo', 'BKA', 'transaksi10.pdf', '1', '1'),
(83, 'surat baru', '14', '26-11-2019', 'surat baru', 'BKA', 'transaksi11.pdf', '1', '1'),
(84, 'surat lama', '134', '04-12-2019', 'surat lama', 'BKD', 'transaksi12.pdf', '1', '1'),
(85, 'surat lagi', '14425', '12-12-2019', 'surat lagi', 'BKA', 'data_pengawas.pdf', '1', '1'),
(86, 'surat bka', '13423', '27-11-2019', 'surat', 'BKA', 'transaksi14.pdf', '1', '1'),
(87, 'surat bkd', '245', '05-12-2019', 'surat', 'BKD', 'transaksi13.pdf', '1', '1'),
(88, 'adda', 'a', '28-11-2019', 'a', 'BKD', 'transaksi15.pdf', '1', '1'),
(89, 'qefewqr', 'eqwrqereqwr', '25-11-2019', 'adfa', 'BKA', 'FORM_KP-07.pdf', '1', '1'),
(90, 'riyan', '1', '06-12-2019', 'adfa', 'BKD', 'FORM_KP-05_(1).pdf', '1', '1'),
(91, 'surat bkd', '3414', '09-12-2019', 'bka', 'BKD', 'FORM_KP-05_(1)1.pdf', '1', '1'),
(92, 'surat bka', '123123412', '26-11-2019', 'adfa', 'BKA', 'FORM_KP-05_(1)2.pdf', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `file_surat_masuk` varchar(128) NOT NULL,
  `pengirim` varchar(128) NOT NULL,
  `no_surat_masuk` varchar(128) NOT NULL,
  `tgl_surat_masuk` varchar(128) NOT NULL,
  `ringkasan` varchar(128) NOT NULL,
  `disposisi` enum('0','1') NOT NULL,
  `hapus` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `file_surat_masuk`, `pengirim`, `no_surat_masuk`, `tgl_surat_masuk`, `ringkasan`, `disposisi`, `hapus`) VALUES
(98, 'BAB_II2.pdf', 'lapas indargiri hilir', 'W4-PS-12', '12-12-2019', 'penelitian masyarakat an. ilham sauly', '1', '0'),
(99, 'BAB_III4.pdf', 'lapas inhu', '12321', '04-12-2019', 'penelitian masyarakat an. ilham sauly', '1', '0'),
(100, 'transaksi10.pdf', 'lapas indragirihulu', '23143', '13-12-2019', 'penelitian masyarakat an. reza purnomo', '1', '0'),
(101, 'transaksi11.pdf', 'surat baru', '14', '26-11-2019', 'surat baru', '1', '0'),
(102, 'transaksi12.pdf', 'surat lama', '134', '04-12-2019', 'surat lama', '1', '0'),
(103, 'transaksi13.pdf', 'surat lagi', '14425', '12-12-2019', 'surat lagi', '1', '0'),
(104, 'transaksi14.pdf', 'surat bkd', '245', '05-12-2019', 'surat', '1', '0'),
(105, 'transaksi15.pdf', 'surat bka', '13423', '27-11-2019', 'surat', '1', '0'),
(106, 'transaksi16.pdf', 'adda', 'a', '28-11-2019', 'a', '1', '0'),
(107, 'FORM_KP-06.pdf', 'riyan', '1', '06-12-2019', 'adfa', '1', '0'),
(108, 'FORM_KP-05_(1).pdf', 'qefewqr', 'eqwrqereqwr', '25-11-2019', 'adfa', '1', '0'),
(109, 'FORM_KP-05_(1)3.pdf', 'surat bka', '123123412', '26-11-2019', 'adfa', '1', '0'),
(110, 'FORM_KP-05_(1)4.pdf', 'surat bkd', '3414', '09-12-2019', 'bka', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `surat_spt`
--

CREATE TABLE `surat_spt` (
  `id_surat_spt` int(11) NOT NULL,
  `pengirim` varchar(128) NOT NULL,
  `no_surat_masuk` varchar(128) NOT NULL,
  `tgl_surat_masuk` varchar(128) NOT NULL,
  `tgl_akhir_spt` varchar(128) NOT NULL,
  `ringkasan` varchar(256) NOT NULL,
  `nama_pegawai` varchar(128) NOT NULL,
  `nip_pegawai` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `bagian` enum('BKD','BKA') NOT NULL,
  `status_pengajuan` enum('0','1') NOT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `file_spt_sudah_disetujui` varchar(128) DEFAULT NULL,
  `file_spt_lengkap` varchar(128) DEFAULT NULL,
  `status_telat` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_spt`
--

INSERT INTO `surat_spt` (`id_surat_spt`, `pengirim`, `no_surat_masuk`, `tgl_surat_masuk`, `tgl_akhir_spt`, `ringkasan`, `nama_pegawai`, `nip_pegawai`, `jabatan`, `bagian`, `status_pengajuan`, `status`, `file_spt_sudah_disetujui`, `file_spt_lengkap`, `status_telat`) VALUES
(42, 'lapas indargiri hilir', 'W4-PS-12', '12-12-2019', '02-12-2019', 'penelitian masyarakat an. ilham sauly', 'fauzan', '1341341', 'jabatan2', 'BKD', '1', '1', '2012-2-00081-MNSI_Bab2001.pdf', NULL, '0'),
(43, 'lapas inhu', '12321', '04-12-2019', '09-12-2019', 'penelitian masyarakat an. ilham sauly', 'fauzan', '1341341', 'jabatan2', 'BKD', '1', '1', 'jbptppolban-gdl-sarrinoorf-4117-3-bab2--71.pdf', 'transaksi2.pdf', '0'),
(44, 'lapas indragirihulu', '23143', '13-12-2019', '05-12-2019', 'penelitian masyarakat an. reza purnomo', 'rani', '134554353', 'jabatan1', 'BKA', '1', '1', 'transaksi4.pdf', 'transaksi1.pdf', '0'),
(45, 'surat baru', '14', '26-11-2019', '05-12-2019', 'surat baru', 'rani', '134554353', 'jabatan1', 'BKA', '1', '1', 'data_pengawas.pdf', 'FORM_KP-05_(1)2.pdf', '1'),
(46, 'surat lama', '134', '04-12-2019', '09-12-2019', 'surat lama', 'astri', '23451', 'jabatan4', 'BKD', '1', '0', 'transaksi5.pdf', NULL, NULL),
(47, 'surat lagi', '14425', '12-12-2019', '05-12-2019', 'surat lagi', 'rani', '134554353', 'jabatan1', 'BKA', '1', '1', 'FORM_KP-05_(1)5.pdf', NULL, '1'),
(48, 'surat bkd', '245', '05-12-2019', '09-12-2019', 'surat', 'fauzan', '', '', 'BKD', '1', '1', 'FORM_KP-05_(1)3.pdf', NULL, NULL),
(49, 'surat bka', '13423', '27-11-2019', '05-12-2019', 'surat', 'rani', '134554353', 'jabatan1', 'BKA', '1', '1', 'FORM_KP-05_(1)4.pdf', NULL, '1'),
(50, 'riyan', '1', '06-12-2019', '12-12-2019', 'adfa', 'fauzan', '1341341', 'jabatan2', 'BKD', '1', '1', 'FORM_KP-07.pdf', 'FORM_KP-05_(1).pdf', NULL),
(51, 'qefewqr', 'eqwrqereqwr', '25-11-2019', '08-12-2019', 'adfa', 'rani', '134554353', 'jabatan1', 'BKA', '1', '1', 'FORM_KP-05_(1).pdf', 'FORM_KP-05_(1)1.pdf', NULL),
(52, 'surat bkd', '3414', '09-12-2019', '12-12-2019', 'bka', 'fauzan', '', '', 'BKD', '0', NULL, NULL, NULL, NULL),
(53, 'adda', 'a', '28-11-2019', '12-12-2019', 'a', 'fauzan', '1341341', 'jabatan2', 'BKD', '1', '1', 'FORM_KP-05_(1)1.pdf', 'FORM_KP-05_(1)3.pdf', NULL),
(54, 'surat bka', '123123412', '26-11-2019', '08-12-2019', 'adfa', 'rani', '134554353', 'jabatan1', 'BKA', '1', '1', 'FORM_KP-05_(1)2.pdf', 'FORM_KP-05_(1)4.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `hapus` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `hapus`) VALUES
(5, 'admin', 'admin@gmail.com', 'default1.jpg', '$2y$10$GQqx57xSYwweXknlxNLiZ.WF5ohSYavlv1elk3g71xmmN6ZmYZeDi', 1, 1, 1568817562, '0'),
(12, 'Admin TU', 'admintu@gmail.com', 'default.jpg', '$2y$10$GQqx57xSYwweXknlxNLiZ.WF5ohSYavlv1elk3g71xmmN6ZmYZeDi', 3, 1, 1569952744, '0'),
(13, 'Admin BKD', 'adminbkd@gmail.com', 'default.jpg', '$2y$10$GQqx57xSYwweXknlxNLiZ.WF5ohSYavlv1elk3g71xmmN6ZmYZeDi', 4, 1, 1569952744, '0'),
(14, 'Admin BKA', 'adminbka@gmail.com', 'default.jpg', '$2y$10$GQqx57xSYwweXknlxNLiZ.WF5ohSYavlv1elk3g71xmmN6ZmYZeDi', 5, 1, 1569952744, '0'),
(15, 'kepala', 'kepala@gmail.com', 'default.jpg', '$2y$10$GQqx57xSYwweXknlxNLiZ.WF5ohSYavlv1elk3g71xmmN6ZmYZeDi', 6, 1, 1569952744, '0'),
(16, 'kurniado', 'kurniado729@gmail.com', 'default.jpg', '$2y$10$eGkesCi6vbfZb5xEarspvOsJilbwDXJX./ok3PIRo.VNbGQb7LVny', 2, 1, 1574694274, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(16, 2, 2),
(38, 1, 14),
(44, 1, 18),
(46, 3, 2),
(50, 3, 17),
(52, 4, 20),
(54, 4, 2),
(57, 5, 2),
(58, 6, 2),
(63, 5, 23),
(64, 6, 19),
(65, 6, 24),
(493, 3, 1),
(494, 4, 1),
(495, 5, 1),
(496, 6, 1),
(497, 11, 2),
(498, 11, 3),
(499, 12, 2),
(504, 3, 66),
(506, 1, 3),
(507, 1, 1),
(546, 1, 2),
(561, 1, 19),
(562, 1, 70),
(564, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(60, 'Pegawai'),
(70, 'Kelola_Berkas');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'SubMenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(15, 17, 'Surat Masuk', 'surat_masuk', 'fas fa-fw fa-envelope-open-text', 1),
(16, 17, 'Trash', 'surat_masuk/trash', 'fas fa-fw fa-trash-alt', 1),
(47, 70, 'Litmas Diversi', 'kelola_berkas', 'fas fa-fw fa-user-tie', 1),
(48, 70, 'Trash', 'kelola_berkas/trash', 'fas fa-fw fa-user-tie', 1),
(49, 4, 'Pegawai TU', 'pegawai', 'fas fa-fw fa-user-tie', 1),
(50, 4, 'Pegawai BKD', 'pegawai/pegawaibkd', 'fas fa-fw fa-user-tie', 1),
(51, 4, 'Pegawai BKA', 'pegawai/pegawaibka', 'fas fa-fw fa-user-tie', 1),
(52, 60, 'Pegawai TU', 'pegawai', 'fas fa-fw fa-user-tie', 1),
(53, 60, 'Pegawai BKD', 'pegawai/pegawaibkd', 'fas fa-fw fa-user-tie', 1),
(55, 60, 'Pegawai BKA', 'pegawai/pegawaibka', 'fas fa-fw fa-key', 1),
(56, 60, 'Trash', 'pegawai/trash', 'fas fa-fw fa-user-tie', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(7, 'kurniado729@gmail.com', 'hIDuD9pM9QIwt0/8F95FlPbbCraHrcvkNkvI6smUuZQ=', 1574694348),
(8, 'admin@gmail.com', 'jbbl9gKzGzQtsBJGbi27TvPBp9VgIdj+af7Je3duRlM=', 1574694400),
(9, 'admin@gmail.com', 'WAfX4sbbEqQKi+EoIbTbwe0+7U41iOIZ14Fge2iCzKM=', 1574694563),
(10, 'kurniado729@gmail.com', 'Zpiylue5Lpovj24bMm5pXcB2mD/KdJavwu/OyUxiOwM=', 1574872167),
(11, 'kurniado729@gmail.com', '0QHju8F87rPEoZz3AJdDgMi850xy1ismZs+hxUl+5C0=', 1575039450),
(12, 'kurniado729@gmail.com', '431m7AbBoqwBuOZYnJmn/5rug816uIOYaG8ogtIgq90=', 1575039720);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `litmas_diversi`
--
ALTER TABLE `litmas_diversi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `surat_disposisi`
--
ALTER TABLE `surat_disposisi`
  ADD PRIMARY KEY (`id_surat_disposisi`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `surat_spt`
--
ALTER TABLE `surat_spt`
  ADD PRIMARY KEY (`id_surat_spt`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `litmas_diversi`
--
ALTER TABLE `litmas_diversi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `surat_disposisi`
--
ALTER TABLE `surat_disposisi`
  MODIFY `id_surat_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `surat_spt`
--
ALTER TABLE `surat_spt`
  MODIFY `id_surat_spt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=566;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

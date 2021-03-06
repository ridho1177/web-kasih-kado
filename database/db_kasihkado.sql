-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 07:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasihkado`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(5, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'Febri Kurniawan', 'admin1', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'Arif Muttama ', 'admin2', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_brg` int(20) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `FileFoto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_brg`, `jml_barang`, `deskripsi`, `foto`, `id_kategori`, `FileFoto`) VALUES
(1, 'Mobil remot 1', 1000000, 3, 'mobil remot baguus', '3.jpg', 11, ''),
(2, 'Iphone 11', 11000000, 3, 'iphone 11', '2.jpg', 2, ''),
(3, 'Jam Tangan Pria', 100000, 3, 'jam tangan pra', '3.jpg', 3, ''),
(4, 'Robot transformer', 250000, 5, 'Robot transformer', '4.jpg', 4, ''),
(5, 'Boneka Barbie', 150000, 3, 'boneka barbie', '5.jpg', 5, ''),
(6, 'Mainan masak-masakan', 130000, 5, 'mainan masak masakan', '6.jpg', 7, ''),
(9, 'Mobil RC ', 300000, 4, 'Mobil Rc', '9.jpg', 6, ''),
(10, 'PSP', 1400000, 3, 'PSP', '10.jpg', 6, ''),
(11, 'PS 4', 3500000, 3, 'PS 4', '12.jpg', 3, ''),
(12, 'XBOX', 5400000, 5, 'XBOX', '12.jpg', 3, ''),
(13, 'contoh tittle yang panjang banget', 100000, 5, 'aaasas', '1.jpg', 6, ''),
(14, 'baju', 20000, 3, 'baju bukalapak', 'logo-google-graph.png', 2, ''),
(15, 'baju', 20000, 3, 'baju bukalapak', 'logo-google-graph.png', 2, ''),
(17, 'celana', 100000, 43, 'celana jeans', 'logo-google-graph.png', 8, ''),
(28, 'baju', 100000, 3, 'baju bukalapak', 'logo-google-graph.png', 2, ''),
(29, 'mobil mainan', 100000, 3, 'celana jeans', 'logo-google-graph.png', 10, ''),
(30, 'kotak kado', 100000, 43, 'aaaaa', 'logo-google-graph.png', 13, '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `umur` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jk`, `umur`) VALUES
(1, 'L', '0-5'),
(2, 'P', '0-5'),
(3, 'L', '6-10'),
(4, 'P', '6-10'),
(5, 'L', '11-15'),
(6, 'P', '11-15'),
(7, 'L', '16-20'),
(8, 'P', '16-20'),
(9, 'L', '21-25'),
(10, 'P', '21-25'),
(11, 'L', '26-30'),
(12, 'P', '26-30'),
(13, 'L', '31-40'),
(14, 'P', '31-40'),
(15, 'L', '41-50'),
(16, 'P', '41-50'),
(17, 'L', '51-60'),
(18, 'P', '51-60'),
(19, 'L', '61-80'),
(20, 'P', '61-80');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `status_pembayaran` varchar(100) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_pembayaran` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `resi` varchar(20) NOT NULL,
  `jenis_kurir` varchar(100) NOT NULL,
  `alamat_kirim` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `ket`, `email`, `no_hp`, `isi_pesan`) VALUES
(1, 'aa', 'aa', 'aa', '3232', 'ss'),
(2, 'ridho', 'coba', 'contoh123@gmail.cpm', '0937823232', 'coba kirim');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `total_harga` int(25) NOT NULL,
  `jml_barang` int(11) NOT NULL,
  `alamat_kirim` text NOT NULL,
  `pengiriman` varchar(20) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_transaksi` varchar(100) NOT NULL DEFAULT 'Belum Bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_penerima`, `total_harga`, `jml_barang`, `alamat_kirim`, `pengiriman`, `tgl_transaksi`, `id_barang`, `id_user`, `status_transaksi`) VALUES
(13, 'arif kurniawan', 100000, 1, 'yogyakarta, Kota Tual, Maluku, qqq', 'POS', '2021-01-07', 10, 11, 'Dikirim'),
(14, 'ridho tri prasetyo', 100000, 1, 'jl ponegoro, Kota Singkawang, Kalimantan Barat, 34554', 'JNE', '2021-01-07', 10, 11, 'Dikirim'),
(15, 'ridho tri', 100000, 1, 'jl ponegoro, Kabupaten Belitung, Bangka Belitung, 45434', 'JNE', '2021-01-07', 28, 11, 'Belum Bayar'),
(16, 'Ridho tri prasetyo', 250000, 1, 'jl ponegoro, Kabupaten Pontianak, Kalimantan Barat, 34554', 'J&T', '2021-01-07', 4, 11, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `no_hp`, `alamat`, `username_user`, `password`) VALUES
(8, 'pengguna 1', '082159571180', '42534242', 'yogyakarta', 'admin', '202cb962ac59075b964b07152d234b70'),
(9, 'pengguna 1', 'contoh123@gmail.cpm', '0937823232', 'yogyakarta', 'user', '202cb962ac59075b964b07152d234b70'),
(10, 'pengguna 1', 'contoh123@gmail.cpm', '0937823232', 'yogyakarta', 'user11', '202cb962ac59075b964b07152d234b70'),
(11, 'pengguna 1', 'contoh123@gmail.cpm', '42534242', 'yogyakarta', '111', '698d51a19d8a121ce581499d7b701668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pengiriman` (`pengiriman`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

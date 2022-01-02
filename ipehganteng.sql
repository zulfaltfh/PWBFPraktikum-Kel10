-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 02, 2022 at 12:35 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipehganteng`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang`
--

CREATE TABLE `detail_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kode_bar` bigint(20) UNSIGNED NOT NULL,
  `id_ukuran` bigint(20) UNSIGNED NOT NULL,
  `id_warna` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_barang`
--

INSERT INTO `detail_barang` (`id`, `created_at`, `updated_at`, `kode_bar`, `id_ukuran`, `id_warna`) VALUES
(1, NULL, NULL, 1, 5, 10),
(2, '2021-12-21 20:41:56', '2021-12-21 20:41:56', 2, 5, 19),
(3, '2021-12-21 20:44:57', '2021-12-21 20:44:57', 1, 1, 1),
(4, '2021-12-21 20:46:55', '2021-12-21 20:46:55', 1, 4, 1),
(5, '2021-12-21 20:47:50', '2021-12-21 20:47:50', 1, 4, 1),
(6, '2021-12-21 20:56:52', '2021-12-21 20:56:52', 1, 4, 8),
(7, '2021-12-21 20:57:32', '2021-12-21 20:57:32', 6, 5, 4),
(8, '2021-12-21 20:59:48', '2021-12-21 20:59:48', 6, 3, 3),
(9, '2021-12-21 21:00:21', '2021-12-21 21:00:21', 6, 3, 3),
(10, '2021-12-24 06:34:14', '2021-12-24 06:34:14', 1, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_up` int(11) NOT NULL,
  `harga_up` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_pesan` bigint(20) UNSIGNED NOT NULL,
  `kode_bar` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id`, `jumlah_up`, `harga_up`, `created_at`, `updated_at`, `id_pesan`, `kode_bar`) VALUES
(1, 90, 70000, '2021-12-29 23:56:37', '2021-12-29 23:56:37', 2, 2),
(2, 90, 70000, '2021-12-29 23:57:01', '2021-12-29 23:57:01', 2, 2),
(3, 3, 1231123, '2021-12-31 20:21:43', '2021-12-31 20:21:43', 2, 1),
(4, 33, 12313, '2021-12-31 20:22:47', '2021-12-31 20:22:47', 3, 6),
(5, 33, 1133, '2021-12-31 20:24:01', '2021-12-31 20:24:01', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penerimaan`
--

CREATE TABLE `detail_penerimaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga_his` int(11) NOT NULL,
  `jumlah_his` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_terima` bigint(20) UNSIGNED NOT NULL,
  `kode_bar` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_penerimaan`
--

INSERT INTO `detail_penerimaan` (`id`, `harga_his`, `jumlah_his`, `sub_total`, `created_at`, `updated_at`, `id_terima`, `kode_bar`) VALUES
(1, 123, 1, 123, '2022-01-19 03:40:14', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_10_07_142602_create_table_kota', 1),
(5, '2021_10_07_142658_create_table_role', 1),
(6, '2021_10_07_142736_create_table_user', 1),
(7, '2021_10_07_142851_create_table_supplier', 1),
(8, '2021_10_07_143023_create_table_warna', 1),
(9, '2021_10_07_143056_create_table_ukuran', 1),
(10, '2021_10_07_143136_create_table_jenis_barang', 1),
(11, '2021_10_07_143203_create_table_barang', 1),
(12, '2021_10_07_143234_create_table_history_stock', 1),
(13, '2021_10_07_143351_create_detail_barang', 1),
(14, '2021_10_07_143627_create_table_pemesanan', 1),
(15, '2021_10_07_143648_create_detail_pemesanan', 1),
(16, '2021_10_07_143712_create_table_penerimaan', 1),
(17, '2021_10_07_143732_create_detail_penerimaan', 1),
(18, '2021_10_07_143803_create_table_pembayaran', 1),
(19, '2021_10_22_115844_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `role`, `updated_at`, `created_at`) VALUES
('1', 'hepi', 1, '2022-01-01 06:32:40', '2022-01-01 06:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `table_barang`
--

CREATE TABLE `table_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_barang` int(11) NOT NULL,
  `harga_beli_bar` int(11) NOT NULL,
  `harga_jual_bar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_jb` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_barang`
--

INSERT INTO `table_barang` (`id`, `foto`, `nama_bar`, `stock_barang`, `harga_beli_bar`, `harga_jual_bar`, `created_at`, `updated_at`, `id_jb`) VALUES
(1, '', 'kaos', 4, 10000, 20000, '2021-10-25 05:43:47', '2021-11-18 15:12:38', 2),
(2, '', 'trasher', 10, 30000, 100000, '2021-10-30 05:50:17', '2021-10-31 04:36:59', 2),
(6, 'ipeh.jpg', 'q', 1, 1, 1, '2021-12-14 19:59:27', '2021-12-14 19:59:27', 1),
(7, '357c43b4-a49e-40e0-834d-892721a4f6ae.jpg', 'qwe', 1, 1, 1, '2021-12-14 21:14:19', '2021-12-14 21:14:19', 2),
(8, 'bloodseeker-wallpaper.jpg', 'qeqwe', 123, 3131, 1311, '2021-12-21 19:46:01', '2021-12-21 19:46:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_history_stock`
--

CREATE TABLE `table_history_stock` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_hs` date NOT NULL,
  `update_stok_hs` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kode_bar` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_jenis_barang`
--

CREATE TABLE `table_jenis_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_barang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_jenis_barang`
--

INSERT INTO `table_jenis_barang` (`id`, `jenis_barang`, `created_at`, `updated_at`) VALUES
(1, 'Baju', '2021-10-24 00:07:14', '2021-10-24 00:07:14'),
(2, 'Celana', '2021-10-24 00:07:22', '2021-10-24 00:07:22'),
(3, 'Topi', '2021-10-24 00:07:27', '2021-10-24 00:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `table_kota`
--

CREATE TABLE `table_kota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kota` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_kota`
--

INSERT INTO `table_kota` (`id`, `nama_kota`, `created_at`, `updated_at`) VALUES
(1, 'SBY', NULL, NULL),
(2, 'JBG', NULL, NULL),
(3, 'Padangpanjang', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(4, 'Bima', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(5, 'Bukittinggi', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(6, 'Pekalongan', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(7, 'Manado', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(8, 'Lhokseumawe', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(9, 'Makassar', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(10, 'Palopo', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(11, 'Padang', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(12, 'Tual', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(13, 'Palangka Raya', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(14, 'Gunungsitoli', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(15, 'Binjai', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(16, 'Gorontalo', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(17, 'Bandung', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(18, 'Mataram', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(19, 'Blitar', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(20, 'Tarakan', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(21, 'Probolinggo', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(22, 'Banjar', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(23, 'Sorong', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(24, 'Serang', '2021-12-18 00:55:20', '2021-12-18 00:55:20'),
(25, 'Subulussalam', '2021-12-18 00:55:20', '2021-12-18 00:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `table_pembayaran`
--

CREATE TABLE `table_pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_terima` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_pembayaran`
--

INSERT INTO `table_pembayaran` (`id`, `total_bayar`, `created_at`, `updated_at`, `id_terima`) VALUES
(1, '12345661234', '2021-12-29 21:11:37', '2021-12-29 21:11:37', 2),
(2, '321', '2021-12-29 23:35:33', '2021-12-29 23:35:33', 3),
(3, '123123', '2021-12-29 23:42:28', '2021-12-29 23:42:28', 3),
(4, '123123', '2021-12-29 23:43:30', '2021-12-29 23:43:30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `table_pemesanan`
--

CREATE TABLE `table_pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_pesan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_sup` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_pemesanan`
--

INSERT INTO `table_pemesanan` (`id`, `status_pesan`, `created_at`, `updated_at`, `id_user`, `id_sup`) VALUES
(2, '0', '2021-11-21 06:30:18', '2021-11-21 06:30:18', 9, 1),
(3, '0', '2021-12-29 23:20:00', '2021-12-29 23:20:00', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_penerimaan`
--

CREATE TABLE `table_penerimaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_terima` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_sup` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_penerimaan`
--

INSERT INTO `table_penerimaan` (`id`, `total_harga`, `status_terima`, `created_at`, `updated_at`, `id_user`, `id_sup`, `id_pemesanan`) VALUES
(1, 900000000, '0', '2021-12-29 20:50:00', '2021-12-29 20:50:00', 1, 2, 0),
(2, 54678, '1', '2021-12-29 20:50:30', '2021-12-29 20:50:30', 1, 2, 0),
(3, 321, '0', '2021-12-29 23:35:09', '2021-12-29 23:35:09', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `table_role`
--

CREATE TABLE `table_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pegawai',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_role`
--

INSERT INTO `table_role` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Pegawai', NULL, NULL),
(2, 'pemilik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_supplier`
--

CREATE TABLE `table_supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sup` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sup` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_sup` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kota` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_supplier`
--

INSERT INTO `table_supplier` (`id`, `nama_sup`, `alamat_sup`, `telp_sup`, `created_at`, `updated_at`, `id_kota`) VALUES
(1, 'Suplier', 'adoh', '01238', '2021-11-21 12:48:26', '2021-11-21 12:48:26', 1),
(2, 'PT. Mencari Cinta Sejati', 'disana', '1233123', '2021-11-21 06:42:39', '2021-11-21 06:42:39', 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_ukuran`
--

CREATE TABLE `table_ukuran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_ukuran`
--

INSERT INTO `table_ukuran` (`id`, `ukuran`, `created_at`, `updated_at`) VALUES
(1, 'XS', '2021-12-18 00:55:18', '2021-12-18 00:55:18'),
(2, 'XL', '2021-12-18 00:55:18', '2021-12-18 00:55:18'),
(3, 'M', '2021-12-18 00:55:18', '2021-12-18 00:55:18'),
(4, 'S', '2021-12-18 00:55:18', '2021-12-18 00:55:18'),
(5, 'L', '2021-12-18 00:55:18', '2021-12-18 00:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_user` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `nama_user`, `alamat_user`, `telp_user`, `username`, `email`, `password`, `created_at`, `updated_at`, `id_kota`, `id_role`) VALUES
(1, 'hepi', 'adoh', '081', 'hepi', 'hepi321321321@gmail.com', '123', '2021-10-23 23:47:39', '2021-10-23 23:47:39', 2, 1),
(2, 'julpa', 'adoh', '081', 'julpa', 'julpa@gmail.com', '123', '2021-10-23 23:48:14', '2021-10-23 23:48:14', 2, 1),
(4, 'agif', 'a', '1', 'agif', 'agif', '1', NULL, NULL, 2, 2),
(9, 'pegawai', 'pegawai', '123', 'pegawai', 'pegawai', 'pegawai', '2021-11-18 16:05:45', '2021-11-18 16:05:45', 1, 1),
(10, 'pemilik', 'pemilik', '123', 'pemilik', 'pemilik', 'pemilik', '2021-11-18 16:06:13', '2021-11-18 16:06:13', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_warna`
--

CREATE TABLE `table_warna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warna` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_warna`
--

INSERT INTO `table_warna` (`id`, `warna`, `created_at`, `updated_at`) VALUES
(1, 'jingga', '2021-12-18 00:55:18', '2021-12-18 00:55:18'),
(2, 'nila', '2021-12-18 00:55:18', '2021-12-18 00:55:18'),
(3, 'putih', '2021-12-18 00:55:18', '2021-12-18 00:55:18'),
(4, 'krem', '2021-12-18 00:55:18', '2021-12-18 00:55:18'),
(5, 'teal', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(6, 'mawar', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(7, 'ungu', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(8, 'magenta', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(9, 'emas', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(10, 'abu-abu', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(11, 'sepia', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(12, 'hijau', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(13, 'cokelat', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(14, 'violet', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(15, 'biru laut', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(16, 'merah', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(17, 'perak', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(18, 'biru', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(19, 'zaitun', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(20, 'hitam', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(21, 'merah marun', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(22, 'biru dongker', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(23, 'merah jambu', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(24, 'toska', '2021-12-18 00:55:19', '2021-12-18 00:55:19'),
(25, 'kuning', '2021-12-18 00:55:19', '2021-12-18 00:55:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_barang_kode_bar_foreign` (`kode_bar`),
  ADD KEY `detail_barang_id_ukuran_foreign` (`id_ukuran`),
  ADD KEY `detail_barang_id_warna_foreign` (`id_warna`);

--
-- Indexes for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pemesanan_id_pesan_foreign` (`id_pesan`),
  ADD KEY `detail_pemesanan_kode_bar_foreign` (`kode_bar`);

--
-- Indexes for table `detail_penerimaan`
--
ALTER TABLE `detail_penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_penerimaan_id_terima_foreign` (`id_terima`),
  ADD KEY `detail_penerimaan_kode_bar_foreign` (`kode_bar`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_barang`
--
ALTER TABLE `table_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_barang_id_jb_foreign` (`id_jb`);

--
-- Indexes for table `table_history_stock`
--
ALTER TABLE `table_history_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_history_stock_kode_bar_foreign` (`kode_bar`);

--
-- Indexes for table `table_jenis_barang`
--
ALTER TABLE `table_jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_kota`
--
ALTER TABLE `table_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pembayaran`
--
ALTER TABLE `table_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_pembayaran_id_terima_foreign` (`id_terima`);

--
-- Indexes for table `table_pemesanan`
--
ALTER TABLE `table_pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_pemesanan_id_user_foreign` (`id_user`),
  ADD KEY `table_pemesanan_id_sup_foreign` (`id_sup`);

--
-- Indexes for table `table_penerimaan`
--
ALTER TABLE `table_penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_penerimaan_id_user_foreign` (`id_user`),
  ADD KEY `table_penerimaan_id_sup_foreign` (`id_sup`);

--
-- Indexes for table `table_role`
--
ALTER TABLE `table_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_supplier`
--
ALTER TABLE `table_supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_supplier_id_kota_foreign` (`id_kota`);

--
-- Indexes for table `table_ukuran`
--
ALTER TABLE `table_ukuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `table_user_username_unique` (`username`),
  ADD KEY `table_user_id_kota_foreign` (`id_kota`),
  ADD KEY `table_user_id_role_foreign` (`id_role`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `table_warna`
--
ALTER TABLE `table_warna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_barang`
--
ALTER TABLE `detail_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_penerimaan`
--
ALTER TABLE `detail_penerimaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_barang`
--
ALTER TABLE `table_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_history_stock`
--
ALTER TABLE `table_history_stock`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_jenis_barang`
--
ALTER TABLE `table_jenis_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_kota`
--
ALTER TABLE `table_kota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `table_pembayaran`
--
ALTER TABLE `table_pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_pemesanan`
--
ALTER TABLE `table_pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_penerimaan`
--
ALTER TABLE `table_penerimaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_role`
--
ALTER TABLE `table_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_supplier`
--
ALTER TABLE `table_supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_ukuran`
--
ALTER TABLE `table_ukuran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_warna`
--
ALTER TABLE `table_warna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD CONSTRAINT `detail_barang_id_ukuran_foreign` FOREIGN KEY (`id_ukuran`) REFERENCES `table_ukuran` (`id`),
  ADD CONSTRAINT `detail_barang_id_warna_foreign` FOREIGN KEY (`id_warna`) REFERENCES `table_warna` (`id`),
  ADD CONSTRAINT `detail_barang_kode_bar_foreign` FOREIGN KEY (`kode_bar`) REFERENCES `table_barang` (`id`);

--
-- Constraints for table `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_id_pesan_foreign` FOREIGN KEY (`id_pesan`) REFERENCES `table_pemesanan` (`id`),
  ADD CONSTRAINT `detail_pemesanan_kode_bar_foreign` FOREIGN KEY (`kode_bar`) REFERENCES `table_barang` (`id`);

--
-- Constraints for table `detail_penerimaan`
--
ALTER TABLE `detail_penerimaan`
  ADD CONSTRAINT `detail_penerimaan_id_terima_foreign` FOREIGN KEY (`id_terima`) REFERENCES `table_penerimaan` (`id`),
  ADD CONSTRAINT `detail_penerimaan_kode_bar_foreign` FOREIGN KEY (`kode_bar`) REFERENCES `table_barang` (`id`);

--
-- Constraints for table `table_barang`
--
ALTER TABLE `table_barang`
  ADD CONSTRAINT `table_barang_id_jb_foreign` FOREIGN KEY (`id_jb`) REFERENCES `table_jenis_barang` (`id`);

--
-- Constraints for table `table_history_stock`
--
ALTER TABLE `table_history_stock`
  ADD CONSTRAINT `table_history_stock_kode_bar_foreign` FOREIGN KEY (`kode_bar`) REFERENCES `table_barang` (`id`);

--
-- Constraints for table `table_pembayaran`
--
ALTER TABLE `table_pembayaran`
  ADD CONSTRAINT `table_pembayaran_id_terima_foreign` FOREIGN KEY (`id_terima`) REFERENCES `table_penerimaan` (`id`);

--
-- Constraints for table `table_pemesanan`
--
ALTER TABLE `table_pemesanan`
  ADD CONSTRAINT `table_pemesanan_id_sup_foreign` FOREIGN KEY (`id_sup`) REFERENCES `table_supplier` (`id`),
  ADD CONSTRAINT `table_pemesanan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id`);

--
-- Constraints for table `table_penerimaan`
--
ALTER TABLE `table_penerimaan`
  ADD CONSTRAINT `table_penerimaan_id_sup_foreign` FOREIGN KEY (`id_sup`) REFERENCES `table_supplier` (`id`),
  ADD CONSTRAINT `table_penerimaan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id`);

--
-- Constraints for table `table_supplier`
--
ALTER TABLE `table_supplier`
  ADD CONSTRAINT `table_supplier_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `table_kota` (`id`);

--
-- Constraints for table `table_user`
--
ALTER TABLE `table_user`
  ADD CONSTRAINT `table_user_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `table_kota` (`id`),
  ADD CONSTRAINT `table_user_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `table_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

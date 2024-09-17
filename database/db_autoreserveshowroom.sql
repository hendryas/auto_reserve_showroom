-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2024 pada 16.20
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_autoreserveshowroom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking_mobil`
--

CREATE TABLE `booking_mobil` (
  `id_booking_mobil` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `no_telp` varchar(128) DEFAULT NULL,
  `domisili` text DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `tgl_kedatangan` datetime DEFAULT NULL,
  `jam_kedatangan` time DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `booking_mobil`
--

INSERT INTO `booking_mobil` (`id_booking_mobil`, `id_user`, `id_mobil`, `nama`, `no_telp`, `domisili`, `provinsi`, `kota`, `tgl_kedatangan`, `jam_kedatangan`, `status`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 2, 2, 'Adamas', '0856971526585', 'Jl. Sudirman RT 5/RW 03', 'DKI JAKARTA', 'Jakarta', '2024-06-13 00:00:00', '22:27:00', 'Waiting', '2024-06-13 21:26:48', NULL, 0),
(2, 2, 1, 'tomas', '08567458964', 'Jl. Jendral Sudirman ', 'DKI Jakarta', 'Jakarta Utara', '2024-06-13 00:00:00', '23:09:00', 'Reject', '2024-06-13 23:17:02', '2024-06-17 21:11:43', 0),
(3, 5, 6, 'Mario', '0895659522356', 'jl. Imam Bonjol', 'DKI Jakarta', 'Jakarta Utara', '2024-06-19 00:00:00', '00:05:00', 'Diterima', '2024-06-19 00:05:58', '2024-06-19 00:21:14', 0),
(4, 5, 4, 'Mario', '08596574523', 'Jl. Gatot Subroto', 'DKI Jakarta', 'Jakarta Utara', '2024-06-22 00:00:00', '19:05:00', 'Reject', '2024-06-22 19:05:03', '2024-06-22 19:25:14', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_merk`
--

CREATE TABLE `gambar_merk` (
  `id_gambar_merk` int(11) NOT NULL,
  `id_merk_mobil` int(11) DEFAULT NULL,
  `gambar_merk` varchar(256) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gambar_merk`
--

INSERT INTO `gambar_merk` (`id_gambar_merk`, `id_merk_mobil`, `gambar_merk`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 1, 'toyota-logo.png', '2024-05-30 11:19:21', '2024-05-30 11:19:21', 0),
(2, 2, 'honda-logo.png', '2024-05-30 11:19:21', '2024-05-30 11:19:21', 0),
(3, 3, 'mitsubushi-logo.png', '2024-05-30 11:20:23', '2024-05-30 11:20:23', 0),
(4, 4, 'suzuki-logo.png', '2024-05-30 11:20:23', '2024-05-30 11:20:23', 0),
(5, 5, 'daihatsu-logo.png', '2024-05-30 11:20:23', '2024-05-30 11:20:23', 0),
(6, 6, 'nissan-logo.png', '2024-05-30 11:20:23', '2024-05-30 11:20:23', 0),
(7, 7, 'mazda-logo.png', '2024-05-30 11:20:23', '2024-05-30 11:20:23', 0),
(8, 8, 'hyundai-logo.png', '2024-05-30 11:20:23', '2024-05-30 11:20:23', 0),
(9, 9, 'kia-logo.png', '2024-05-30 11:22:58', '2024-05-30 11:22:58', 0),
(10, 10, 'wuling-logo.jpg', '2024-05-30 11:23:18', '2024-05-30 11:23:18', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_mobil`
--

CREATE TABLE `gambar_mobil` (
  `id_gambar_mobil` int(11) NOT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `gambar_mobil` varchar(256) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gambar_mobil`
--

INSERT INTO `gambar_mobil` (`id_gambar_mobil`, `id_mobil`, `gambar_mobil`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 1, 'car_20240616-083750-0.jpg', '2024-05-26 21:58:17', NULL, 0),
(2, 3, 'img_mobil_20240526-220019.jpg', '2024-05-26 22:00:19', NULL, 0),
(3, 3, 'img_mobil_20240526-220353.jpg', '2024-05-26 22:03:53', NULL, 0),
(4, 4, 'car_20240616-083750-0.jpg', '2024-06-16 08:37:50', NULL, 0),
(5, 4, 'car_20240616-083750-1.jpg', '2024-06-16 08:37:50', NULL, 0),
(6, 5, 'car_20240616-084103-0.jpg', '2024-06-16 08:41:03', NULL, 0),
(7, 5, 'car_20240616-084103-1.jpg', '2024-06-16 08:41:03', NULL, 0),
(8, 6, 'car_20240618-231026-0.jpeg', '2024-06-18 23:10:26', NULL, 0),
(9, 6, 'car_20240618-231026-1.jpg', '2024-06-18 23:10:26', NULL, 0),
(10, 7, 'car_20240621-063148-0.png', '2024-06-21 06:31:48', NULL, 0),
(11, 7, 'car_20240621-063148-1.png', '2024-06-21 06:31:48', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_mobil`
--

CREATE TABLE `jenis_mobil` (
  `id_jenis_mobil` int(11) NOT NULL,
  `jenis_mobil` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_mobil`
--

INSERT INTO `jenis_mobil` (`id_jenis_mobil`, `jenis_mobil`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 'Toyota Avanza', '2024-05-23 16:06:03', '2024-05-23 16:09:21', 0),
(2, 'Daihatsu Xenia', '2024-05-23 16:09:48', '2024-05-23 16:09:48', 0),
(3, 'Mitsubishi Xpander', '2024-05-23 16:09:48', '2024-05-23 16:09:48', 0),
(4, 'Suzuki Ertiga', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0),
(5, 'Toyota Fortuner', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0),
(6, 'Mitsubishi Pajero Sport', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0),
(7, 'Honda CR-V', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0),
(8, 'Daihatsu Terios', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0),
(9, 'Honda Jazz', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0),
(10, 'Toyota Yaris', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0),
(11, 'Suzuki Swift', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0),
(12, 'Mazda 2', '2024-05-23 16:10:15', '2024-05-23 16:10:15', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_level_1`
--

CREATE TABLE `menu_level_1` (
  `id_menu_level_1` int(11) NOT NULL,
  `menu` varchar(128) DEFAULT NULL,
  `menu_name` varchar(128) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_level_2`
--

CREATE TABLE `menu_level_2` (
  `id_menu_level_2` int(11) NOT NULL,
  `id_menu_level_1` int(11) DEFAULT NULL,
  `menu_name` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `sub_status` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_level_3`
--

CREATE TABLE `menu_level_3` (
  `id_menu_level_3` int(11) NOT NULL,
  `id_menu_level_2` int(11) DEFAULT NULL,
  `menu_name` varchar(128) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `icon` varchar(128) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk_mobil`
--

CREATE TABLE `merk_mobil` (
  `id_merk_mobil` int(11) NOT NULL,
  `merk` varchar(128) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `merk_mobil`
--

INSERT INTO `merk_mobil` (`id_merk_mobil`, `merk`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 'Toyota', '2024-05-23 15:32:00', '2024-05-23 15:34:49', 0),
(2, 'Honda', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0),
(3, 'Mitsubishi', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0),
(4, 'Suzuki', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0),
(5, 'Daihatsu', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0),
(6, 'Nissan', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0),
(7, 'Mazda', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0),
(8, 'Hyundai', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0),
(9, 'Kia', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0),
(10, 'Wuling', '2024-05-23 15:52:41', '2024-05-23 15:52:41', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_merk_mobil` int(11) DEFAULT NULL,
  `id_model_mobil` int(11) DEFAULT NULL,
  `id_variant_mobil` int(11) DEFAULT NULL,
  `id_jenis_mobil` int(11) DEFAULT NULL,
  `tahun_pembuatan` varchar(128) DEFAULT NULL,
  `id_warna_mobil` int(11) DEFAULT NULL,
  `kilometer_mobil` varchar(128) DEFAULT NULL,
  `plat_nomor` varchar(128) DEFAULT NULL,
  `transmisi` varchar(128) DEFAULT NULL,
  `bebas_tabrak` varchar(128) DEFAULT NULL,
  `bebas_banjir` varchar(128) DEFAULT NULL,
  `bpkb` varchar(128) DEFAULT NULL,
  `buku_service` varchar(128) DEFAULT NULL,
  `grade_mobil` varchar(128) DEFAULT NULL,
  `harga_cash` varchar(128) DEFAULT NULL,
  `harga_credit` varchar(128) DEFAULT NULL,
  `url_video_mobil` varchar(256) DEFAULT NULL,
  `lokasi` varchar(256) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_merk_mobil`, `id_model_mobil`, `id_variant_mobil`, `id_jenis_mobil`, `tahun_pembuatan`, `id_warna_mobil`, `kilometer_mobil`, `plat_nomor`, `transmisi`, `bebas_tabrak`, `bebas_banjir`, `bpkb`, `buku_service`, `grade_mobil`, `harga_cash`, `harga_credit`, `url_video_mobil`, `lokasi`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 1, 1, 1, 1, '2018', 2, '1000', 'H 8989 GH', 'CVT', 'Tidak', 'Tidak', 'Ya', 'Ya', 'A', '250000000', '300000000', 'https://www.youtube.com/embed/ARK5zXz8shc', 'Jakarta', '2024-05-26 21:58:17', NULL, 0),
(2, 1, 1, 1, 1, '2018', 2, '1000', 'H 8989 GH', 'CVT', 'Tidak', 'Tidak', 'Ya', 'Ya', 'A', '250000000', '300000000', 'https://www.youtube.com/embed/ARK5zXz8shc', 'Jakarta', '2024-05-26 22:00:19', NULL, 0),
(3, 3, 2, 1, 9, '92', 7, '82', 'Culpa sed dolorem cu', 'Auto', 'Ya', 'Ya', 'Tidak', 'Ya', 'C', '250000000', '250000000', 'Veritatis aspernatur', 'Sed dolor voluptatem', '2024-05-26 22:03:53', NULL, 0),
(4, 2, 1, 1, 2, '2023', 2, '10000', 'H 276826 HH', 'Automatic', 'yes', 'yes', 'yes', 'yes', 'B', NULL, NULL, NULL, NULL, '2024-06-16 08:37:50', NULL, 0),
(5, 3, 2, 1, 8, '2018', 3, '10000', 'H 276810 HH', 'Automatic', 'yes', 'yes', 'yes', 'yes', 'B', NULL, NULL, NULL, NULL, '2024-06-16 08:41:03', NULL, 0),
(6, 1, 1, 1, 1, '2018', 1, '10000', 'H 9080 GH', 'Automatic', 'Ya', 'Ya', 'Ya', 'Ya', 'B', NULL, NULL, NULL, NULL, '2024-06-18 23:10:26', NULL, 0),
(7, 2, 2, 1, 7, '2018', 1, '10000', 'H 2322 KK', 'Automatic', 'Ya', 'Ya', 'Ya', 'Ya', 'A', '250000000', '125000000', 'https://www.youtube.com/watch?v=cL0rTF8YEa0', 'Jakarta Utara', '2024-06-21 06:31:48', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_mobil`
--

CREATE TABLE `model_mobil` (
  `id_model_mobil` int(11) NOT NULL,
  `id_merk_mobil` int(11) DEFAULT NULL,
  `model` varchar(128) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `model_mobil`
--

INSERT INTO `model_mobil` (`id_model_mobil`, `id_merk_mobil`, `model`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 5, 'Daihatsu Xenia', '2024-05-23 16:24:54', '2024-05-23 16:25:02', 0),
(2, 5, 'Daihatsu Ayla', '2024-05-23 16:26:18', NULL, 0),
(3, 1, 'Hatchback', '2024-06-24 15:44:39', '2024-06-24 15:45:53', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi_admin`
--

CREATE TABLE `notifikasi_admin` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `isi_notifikasi` longtext DEFAULT NULL,
  `status_notif` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `notifikasi_admin`
--

INSERT INTO `notifikasi_admin` (`id`, `id_user`, `nama`, `isi_notifikasi`, `status_notif`, `tanggal`, `created_date`, `updated_at`, `delete_sts`) VALUES
(1, 1, 'samsudin', 'Ok, no.wa 085325026589', 0, '2024-06-17 20:50:49', '2024-06-17 20:50:49', NULL, 0),
(2, 1, 'samsudin', 'Ok, Aku WA', 0, '2024-06-17 20:55:45', '2024-06-17 20:55:45', NULL, 0),
(3, 1, 'samsudin', 'Aku batalin', 0, '2024-06-17 20:59:24', '2024-06-17 20:59:24', NULL, 0),
(4, 1, 'samsudin', 'Tolak penjualan mobil ini', 0, '2024-06-17 21:11:43', '2024-06-17 21:11:43', NULL, 0),
(5, 1, 'samsudin', 'Tolak penjualan mobil ini', 0, '2024-06-17 21:12:18', '2024-06-17 21:12:18', NULL, 0),
(6, 4, 'gujunpyo', 'OK di Acc, No.HP : 086985745896', 0, '2024-06-18 23:25:49', '2024-06-18 23:25:49', NULL, 0),
(7, 5, 'Mario', 'Ok acc, silahkan hubungi nomer ini : 059856547566856', 0, '2024-06-22 19:15:21', '2024-06-22 19:15:21', NULL, 0),
(8, 5, 'Mario', 'Pembelian mobil ini ditolak, silahkan booking kembali.', 0, '2024-06-22 19:23:16', '2024-06-22 19:23:16', NULL, 0),
(9, 5, 'Mario', 'Pembelian mobil ini ditolak, silahkan booking kembali.', 0, '2024-06-22 19:25:14', '2024-06-22 19:25:14', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi_member`
--

CREATE TABLE `notifikasi_member` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `isi_notifikasi` longtext DEFAULT NULL,
  `status_notif` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `notifikasi_member`
--

INSERT INTO `notifikasi_member` (`id`, `id_user`, `nama`, `isi_notifikasi`, `status_notif`, `tanggal`, `created_date`, `updated_at`, `delete_sts`) VALUES
(1, 1, 'samsudin', 'Ok, no.wa 085325026589', 0, '2024-06-17 20:50:49', '2024-06-17 20:50:49', NULL, 0),
(2, 1, 'samsudin', 'Ok, Aku WA', 0, '2024-06-17 20:55:45', '2024-06-17 20:55:45', NULL, 0),
(3, 1, 'samsudin', 'Aku batalin', 0, '2024-06-17 20:59:24', '2024-06-17 20:59:24', NULL, 0),
(4, 1, 'samsudin', NULL, 0, '2024-06-17 21:11:43', '2024-06-17 21:11:43', NULL, 0),
(5, 1, 'samsudin', NULL, 0, '2024-06-17 21:12:18', '2024-06-17 21:12:18', NULL, 0),
(6, 4, 'gujunpyo', 'OK di Acc, No.HP : 086985745896', 0, '2024-06-18 23:25:49', '2024-06-18 23:25:49', NULL, 0),
(7, 5, 'Mario', 'Ok acc, silahkan hubungi nomer ini : 059856547566856', 0, '2024-06-22 19:15:21', '2024-06-22 19:15:21', NULL, 0),
(8, 5, 'Mario', 'Pembelian mobil ini ditolak, silahkan booking kembali.', 0, '2024-06-22 19:23:16', '2024-06-22 19:23:16', NULL, 0),
(9, 5, 'Mario', 'Pembelian mobil ini ditolak, silahkan booking kembali.', 0, '2024-06-22 19:25:14', '2024-06-22 19:25:14', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjual_mobil`
--

CREATE TABLE `penjual_mobil` (
  `id_penjual_mobil` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `no_telp` varchar(128) DEFAULT NULL,
  `domisili` text DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `perkiraan_harga_mobil` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `alasan` longtext DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjual_mobil`
--

INSERT INTO `penjual_mobil` (`id_penjual_mobil`, `id_user`, `id_mobil`, `nama`, `no_telp`, `domisili`, `provinsi`, `kota`, `perkiraan_harga_mobil`, `status`, `alasan`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 1, 4, 'ijal', '08554644485', 'Jl. Sudirman RT 5/RW 03', 'Palembang', 'Jakarta Utara', '200000000', 'Menunggu Verifikasi Admin', '', '2024-06-16 08:37:50', NULL, 0),
(2, 1, 5, 'samsudin', '0865745895656', 'Jl Gatot Kaca', 'Palembang', 'Jakarta Selatan', '200000000', 'Reject', '', '2024-06-16 08:41:03', '2024-06-17 21:12:18', 0),
(3, 4, 6, 'gujunpyo', '089562359559', 'Jl.Gatot Kaca', 'DKI Jakarta', 'Jakarta Utara', '150000000', 'Diterima', NULL, '2024-06-18 23:10:26', '2024-06-18 23:25:49', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `date_of_birth`, `gender`, `phone`, `username`, `email`, `password`, `id_role`, `is_active`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 'Admin', '1997-05-01 19:22:08', 'Laki-Laki', '08569856214', 'admin', 'admin@gmail.com', '$2y$10$1Y5ALImDUmwS.kCBQGzUeeo//N2l/rECscqfPRxLuLHnkzbYXNlia', 1, 1, '2024-05-23 14:17:41', '2024-05-23 14:17:41', 0),
(2, 'Customer', '1997-05-02 19:22:08', 'Perempuan', '08974532157', 'customer', 'customer@gmail.com', '$2y$10$1Y5ALImDUmwS.kCBQGzUeeo//N2l/rECscqfPRxLuLHnkzbYXNlia', 2, 1, '2024-05-23 14:17:41', '2024-05-23 14:17:41', 0),
(3, 'adamasphotoshop', NULL, NULL, NULL, NULL, 'adamshop@gmail.com', '$2y$10$Uc90UBrbocMOSM4tQMA1buhq8tHOuUMYXKl4Lylmso63ocdDiIYIK', 4, 1, '2024-06-14 21:44:24', NULL, 0),
(4, 'sasa', NULL, NULL, NULL, NULL, 'susi@gmail.com', '$2y$10$RT1Q9vZ7.VHuacTfKP0EaOnhx7zIJdvgHtteoG9tPUDArnP16bbsO', 4, 1, '2024-06-14 21:46:08', NULL, 0),
(5, 'Mario', NULL, NULL, NULL, 'super', 'super@gmail.com', '$2y$10$2LwYpUMaQjIAQLkgQOAG3eTXK/5aAEIM2wmi6EoX0oBSoClhwOGIe', 4, 1, '2024-06-14 21:47:51', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 2, 1),
(11, 2, 2),
(12, 2, 3),
(13, 1, 3),
(21, 3, 9),
(22, 3, 7),
(23, 3, 8),
(26, 2, 0),
(28, 2, 11),
(29, 2, 12),
(30, 2, 22),
(31, 2, 23),
(32, 1, 1),
(33, 2, 24),
(34, 1, 24),
(35, 2, 25),
(36, 1, 25),
(37, 2, 26),
(38, 1, 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_has_sub_menu`
--

CREATE TABLE `user_has_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `status_sub` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_has_sub_menu`
--

INSERT INTO `user_has_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `status_sub`, `date_created`) VALUES
(1, 1, 'Role', 'admin/role', 'fal fa-fw fa-list', 1, 1, '2022-07-06 00:00:00'),
(3, 1, 'Management User', 'admin/user', 'fal fa-fw fa-user', 1, 1, '2022-07-06 00:00:00'),
(4, 3, 'Menu Management', '-', 'fal fa-fw fa-bars', 1, 0, '2022-08-02 20:30:48'),
(10, 5, 'Pendataan UMKM', 'pendataanumkm/cpendataanumkm', 'fal fa-fw fa-barcode', 1, 1, '2023-04-07 13:45:56'),
(11, 6, 'Pengujian', 'naivebayes/datauji', 'fal fa-fw fa-pen', 1, 1, '2023-04-08 14:13:58'),
(15, 9, 'Hasil Perhitungan', 'laporan/hitung', '-', 1, 1, '2024-05-19 08:10:38'),
(16, 9, 'Rangking', 'laporan/rangking', '-', 1, 1, '2024-05-19 08:15:31'),
(17, 7, 'Penilaian', 'nilai', '-', 1, 1, '2024-05-19 10:01:50'),
(18, 8, 'Perhitungan', 'hitung', '-', 1, 1, '2024-05-19 10:02:36'),
(19, 10, 'Setting', 'user/setting', '-', 1, 1, '2024-05-19 20:59:15'),
(20, 0, 'Fakultas', 'fakultas', '-', 1, 1, '2024-05-21 21:46:20'),
(21, 0, 'Program Studi', 'programstudi', '-', 1, 1, '2024-05-21 21:48:28'),
(22, 12, 'Data Mahasiswa', 'mahasiswa', '-', 1, 1, '2024-05-21 21:52:59'),
(23, 22, 'Data Dosen', 'dosen', '-', 1, 1, '2024-05-21 21:53:20'),
(24, 11, 'Fakultas', 'fakultas', '-', 1, 1, '2024-05-21 21:53:57'),
(25, 11, 'Program Studio', 'programstudi', '-', 1, 1, '2024-05-21 21:54:21'),
(26, 23, 'Mata Kuliah', 'matakuliah', '-', 1, 1, '2024-05-21 21:58:47'),
(27, 24, 'Mobil', 'mobil', '-', 1, 1, '2024-05-23 14:58:10'),
(28, 24, 'Merek Mobil', 'merekmobil', '-', 1, 1, '2024-05-23 15:00:14'),
(29, 24, 'Jenis Mobil', 'jenismobil', '-', 1, 1, '2024-05-23 15:00:46'),
(30, 24, 'Model Mobil', 'modelmobil', '-', 1, 1, '2024-05-23 15:01:08'),
(31, 24, 'Varian Mobil', 'varianmobil', '-', 1, 1, '2024-05-23 15:01:38'),
(32, 24, 'Warna Mobil', 'warnamobil', '-', 1, 1, '2024-05-23 15:02:05'),
(34, 25, 'Riwayat Pembelian Mobil', 'riwayatpembelianmobil', '-', 1, 1, '2024-06-13 21:36:03'),
(35, 25, 'Riwayat Penjualan Mobil', 'riwayatpenjualanmobil', '-', 1, 1, '2024-06-13 21:36:29'),
(36, 26, 'Dashboard', 'admin', '-', 1, 1, '2024-06-17 14:07:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `menu_nama` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `menu_nama`, `date_created`) VALUES
(1, 'Admin', 'Admin', '2022-06-14 00:00:00'),
(2, 'User', 'User', '2022-06-14 00:00:00'),
(3, 'Master', 'Master', '2022-08-02 20:22:27'),
(24, 'datamobil', 'Data Mobil', '2024-05-23 14:57:12'),
(25, 'riwayattransaksi', 'Riwayat Transaksi', '2024-06-13 21:36:51'),
(26, 'dashboardadmin', 'Dashboard Admin', '2024-06-17 14:02:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(4, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `has_sub_menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `has_sub_menu_id`, `title`, `url`, `icon`, `is_active`, `date_created`) VALUES
(1, 1, 4, 'Menu Management (Level 1)', 'master/menulevel1', 'fal fa-fw fa-folder', 1, '2022-07-06 00:00:00'),
(2, 1, 4, 'Submenu Management (Level 2)', 'master/menulevel2', 'fal fa-fw fa-folder-open', 1, '2022-07-06 00:00:00'),
(3, 1, 4, 'Submenu Management (Level 3)', 'master/menulevel3', 'fal fa-fw fa-folder-open', 1, '2022-07-06 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `variant_mobil`
--

CREATE TABLE `variant_mobil` (
  `id_variant_mobil` int(11) NOT NULL,
  `id_model_mobil` int(11) DEFAULT NULL,
  `variant_mobil` varchar(128) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `variant_mobil`
--

INSERT INTO `variant_mobil` (`id_variant_mobil`, `id_model_mobil`, `variant_mobil`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 1, 'Avanza 1.3 E', '2024-05-23 16:38:29', '2024-05-23 16:39:10', 0),
(2, 3, 'GS Sport', '2024-06-24 15:51:55', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna_mobil`
--

CREATE TABLE `warna_mobil` (
  `id_warna_mobil` int(11) NOT NULL,
  `warna_mobil` varchar(128) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `delete_sts` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `warna_mobil`
--

INSERT INTO `warna_mobil` (`id_warna_mobil`, `warna_mobil`, `date_created`, `date_updated`, `delete_sts`) VALUES
(1, 'Putih', '2024-05-23 17:27:35', '2024-05-23 17:27:46', 0),
(2, 'Hitam', '2024-05-23 17:28:26', NULL, 0),
(3, 'Abu-abu', '2024-05-23 17:28:34', NULL, 0),
(4, 'Perak', '2024-05-23 17:28:40', NULL, 0),
(5, 'Merah', '2024-05-23 17:28:45', NULL, 0),
(6, 'Biru', '2024-05-23 17:28:51', NULL, 0),
(7, 'Coklat', '2024-05-23 17:28:57', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking_mobil`
--
ALTER TABLE `booking_mobil`
  ADD PRIMARY KEY (`id_booking_mobil`);

--
-- Indeks untuk tabel `gambar_merk`
--
ALTER TABLE `gambar_merk`
  ADD PRIMARY KEY (`id_gambar_merk`);

--
-- Indeks untuk tabel `gambar_mobil`
--
ALTER TABLE `gambar_mobil`
  ADD PRIMARY KEY (`id_gambar_mobil`);

--
-- Indeks untuk tabel `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  ADD PRIMARY KEY (`id_jenis_mobil`);

--
-- Indeks untuk tabel `menu_level_1`
--
ALTER TABLE `menu_level_1`
  ADD PRIMARY KEY (`id_menu_level_1`);

--
-- Indeks untuk tabel `menu_level_2`
--
ALTER TABLE `menu_level_2`
  ADD PRIMARY KEY (`id_menu_level_2`);

--
-- Indeks untuk tabel `menu_level_3`
--
ALTER TABLE `menu_level_3`
  ADD PRIMARY KEY (`id_menu_level_3`);

--
-- Indeks untuk tabel `merk_mobil`
--
ALTER TABLE `merk_mobil`
  ADD PRIMARY KEY (`id_merk_mobil`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `model_mobil`
--
ALTER TABLE `model_mobil`
  ADD PRIMARY KEY (`id_model_mobil`);

--
-- Indeks untuk tabel `notifikasi_admin`
--
ALTER TABLE `notifikasi_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notifikasi_member`
--
ALTER TABLE `notifikasi_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjual_mobil`
--
ALTER TABLE `penjual_mobil`
  ADD PRIMARY KEY (`id_penjual_mobil`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_has_sub_menu`
--
ALTER TABLE `user_has_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `variant_mobil`
--
ALTER TABLE `variant_mobil`
  ADD PRIMARY KEY (`id_variant_mobil`);

--
-- Indeks untuk tabel `warna_mobil`
--
ALTER TABLE `warna_mobil`
  ADD PRIMARY KEY (`id_warna_mobil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking_mobil`
--
ALTER TABLE `booking_mobil`
  MODIFY `id_booking_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gambar_merk`
--
ALTER TABLE `gambar_merk`
  MODIFY `id_gambar_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `gambar_mobil`
--
ALTER TABLE `gambar_mobil`
  MODIFY `id_gambar_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jenis_mobil`
--
ALTER TABLE `jenis_mobil`
  MODIFY `id_jenis_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `menu_level_1`
--
ALTER TABLE `menu_level_1`
  MODIFY `id_menu_level_1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu_level_2`
--
ALTER TABLE `menu_level_2`
  MODIFY `id_menu_level_2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu_level_3`
--
ALTER TABLE `menu_level_3`
  MODIFY `id_menu_level_3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `merk_mobil`
--
ALTER TABLE `merk_mobil`
  MODIFY `id_merk_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `model_mobil`
--
ALTER TABLE `model_mobil`
  MODIFY `id_model_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `notifikasi_admin`
--
ALTER TABLE `notifikasi_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `notifikasi_member`
--
ALTER TABLE `notifikasi_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penjual_mobil`
--
ALTER TABLE `penjual_mobil`
  MODIFY `id_penjual_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user_has_sub_menu`
--
ALTER TABLE `user_has_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `variant_mobil`
--
ALTER TABLE `variant_mobil`
  MODIFY `id_variant_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `warna_mobil`
--
ALTER TABLE `warna_mobil`
  MODIFY `id_warna_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

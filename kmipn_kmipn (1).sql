-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 11 Sep 2018 pada 04.59
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmipn_kmipn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@kmipn.com', '$2y$10$82ISN4uIRebkA6WweQ5HMe.EFuRphEbOZonr.FKpl2uE2KbCjrx6W', 'hAGONbL7MUR43OYgBvBCFWyo0AVQpeeog5iLBA3t0zfvVnMiRpz6laxtX2e5', '2018-08-03 08:22:13', '2018-09-04 20:03:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `status` enum('Publish','Draft') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `slug`, `photo`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Buku Panduan KMIPN', 'buku-panduan-kmipn', '11553.PNG', '<p>Update Buku Panduan KMIPN 2018 <br><a href=\"https://drive.google.com/file/d/1_b7pqVZMO_CDUVzp54mKbaiLvU9-XpLj/view\">di sini</a><br></p>', 'Publish', '2018-08-31 02:48:10', '2018-08-31 02:48:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `counters`
--

CREATE TABLE `counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Cipta Inovasi', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(2, 'Bisnis Tik', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(3, 'Game Development', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(4, 'E-Goverment', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(5, 'IoT (Internet of Things)', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(6, 'Desain Animasi', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(7, 'Keamanan Jaringan', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(8, 'Hackathon', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lomba`
--

CREATE TABLE `lomba` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `pengumuman` text COLLATE utf8_unicode_ci,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `peraturan` text COLLATE utf8_unicode_ci,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `lomba`
--

INSERT INTO `lomba` (`id`, `kategori_id`, `pengumuman`, `deskripsi`, `peraturan`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Lomba Cipta Inovasi KMIPN 2018 adalah wadah \n                                bagi para mahasiswa politeknik seluruh Indonesia untuk \n                                menuliskan terobosan ide kreatif mereka sebagai salah satu \n                                bentuk intellectual respons atas segala permasalahan nyata\n                                di bidang TIK (Teknologi Informasi dan Komunikasi) \n                                masyarakat Indonesia. Ide yang diajukan diharapkan \n                                bersifat unik, kreatif, visioner, futuristik dan bermanfaat.', 'Cipta_Inovasi.pdf', 'lamp.svg', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(2, 2, '', 'Lomba Bisnis TIK adalah kompetisi pengembangan \n                                model bisnis dengan produk TIK. Lomba ini memberikan \n                                kesempatan kepada peserta yang memiliki ide bisnis, \n                                startup dan pengembangan usaha yang berorientasi pada \n                                produk TIK, berupa jasa atau produk.', 'LOMBA_BISNIS_TIK.pdf', 'briefcase.svg', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(3, 3, '', 'Game Development adalah salah satu cabang kompetisi \n                                KMIPN yang diadakan oleh PENS. Game Development \n                                KMIPN ditujukan untuk seluruh mahasiswa politeknik se- \n                                Indonesia. Game Development KMIPN tidak membatasi \n                                tema sehingga para peserta dapat berkreasi sekreatif \n                                mungkin dalam permainan mereka.', 'Game_Development.pdf', 'console.svg', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(4, 4, '', 'e-Government merupakan pemanfaatan teknologi \n                                informasi berbasis internet oleh pemerintah dalam \n                                memberikan informasi dan layanan kepada masyarakat, \n                                bisnis, pegawai, atau pemerintah lainnya, atau sebaliknya \n                                masyarakat atau bisnis dapat berinteraksi, atau \n                                memberikan informasi kepada pemerintah.', 'KATEGORI_LOMBA_E-Gov.pdf', 'city-hall.svg', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(5, 5, '', 'Lomba Piranti Cerdas adalah kompetisi karya rekayasa \n                                pada keilmuan teknik elektro yang bertujuan untuk \n                                mendorong yang dihasilkan karya-karya penelitian inovatif \n                                yang mengintegrasikan aspek-aspek design dari design \n                                sistem hingga perangkat, metodologi dan implementasi.', '', 'cpu.svg', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(6, 6, '', 'Desain animasi adalah sebuah kompetisi pembuatan video \n                                animasi pendek dalam bentuk 2D/3D yang memberikan \n                                informasi dan pengenalan singkat yang unik dan menarik \n                                tentang revolusi industri di Indonesia, untuk memberikan \n                                kesadaran terhadap masyarakat luas tentang \n                                perkembangan teknologi di industri Indonesia.', 'Rancangan_Desain_Animasi.pdf', 'video-player.svg', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(7, 7, '', 'Lomba keamanan jaringan adalah lomba untuk menguji \n                                kemampuan mengamankan sistemkomputer beserta \n                                jaringannya. Peserta akan berkompetisi dengan peserta lain \n                                dalam kemampuan mengkongurasi sistem yang aman dan \n                                melakukan identikasi potensi celahkeamanan dari sistem \n                                komputer yang ada kemudian memberikan solusi \n                                keamanannya.', 'KEAMANAN_JARINGAN_Today.pdf', 'shield.svg', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05'),
(8, 8, '', 'Hacking adalah pemecahan masalah yang kretif (tidak \n                                harus melibatkan teknologi). Hackathon adalah acara \n                                tentang apapun dari suatu waktu tertentu dimana orang \n                                berkumpul untuk menyelesaikan masalah. Kebanyakan \n                                hackathon yang dilakukan juga memiliki trek parallel untuk \n                                karya hackathon (banyak karya yang dihasilkan).', 'Hackathon.pdf', 'programmer.svg', NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(119, '2014_10_12_000000_create_users_table', 1),
(120, '2014_10_12_100000_create_password_resets_table', 1),
(121, '2016_11_01_152432_create_users_activation_table', 1),
(122, '2018_01_15_025120_create_kategori_table', 1),
(123, '2018_04_30_074104_create_lomba_table', 1),
(124, '2018_05_02_013804_create_counters_table', 1),
(125, '2018_05_03_221550_create_artikel_table', 1),
(126, '2018_05_03_221607_create_galeri_table', 1),
(127, '2018_05_07_024951_create_tim_table', 1),
(128, '2018_05_08_111015_create_admins_table', 1),
(129, '2018_07_18_090712_create_politeknik_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ketua@kmipn.com', 'WpTzk', '2018-08-30 01:55:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `politeknik`
--

CREATE TABLE `politeknik` (
  `id` int(10) UNSIGNED NOT NULL,
  `politeknik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `politeknik`
--

INSERT INTO `politeknik` (`id`, `politeknik`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Politeknik Manufaktur Bandung', NULL, NULL, NULL),
(2, 'Politeknik Negeri Jakarta', NULL, NULL, NULL),
(3, 'Politeknik Negeri Medan', NULL, NULL, NULL),
(4, 'Politeknik Negeri Bandung', NULL, NULL, NULL),
(5, 'Politeknik Negeri Semarang', NULL, NULL, NULL),
(6, 'Politeknik Negeri Sriwijaya', NULL, NULL, NULL),
(7, 'Politeknik Negeri Lampung', NULL, NULL, NULL),
(8, 'Politeknik Negeri Ambon', NULL, NULL, NULL),
(9, 'Politeknik Negeri Padang', NULL, NULL, NULL),
(10, 'Politeknik Negeri Bali', NULL, NULL, NULL),
(11, 'Politeknik Negeri Pontianak', NULL, NULL, NULL),
(12, 'Politeknik Negeri Ujung Pandang', NULL, NULL, NULL),
(13, 'Politeknik Negeri Manado', NULL, NULL, NULL),
(14, 'Politeknik Perkapalan Negeri Surabaya', NULL, NULL, NULL),
(15, 'Politeknik Negeri Banjarmasin', NULL, NULL, NULL),
(16, 'Politeknik Negeri Lhokseumawe', NULL, NULL, NULL),
(17, 'Politeknik Negeri Kupang', NULL, NULL, NULL),
(18, 'Politeknik Elektronik Negeri Surabaya', NULL, NULL, NULL),
(19, 'Politeknik Negeri Jember', NULL, NULL, NULL),
(20, 'Politeknik Pertanian Negeri Pangkajene Kepulauan', NULL, NULL, NULL),
(21, 'Politeknik Pertanian Negeri Kupang', NULL, NULL, NULL),
(22, 'Politeknik Perikanan Negeri Tual', NULL, NULL, NULL),
(23, 'Politeknik Negeri Malang', NULL, NULL, NULL),
(24, 'Politeknik Pertanian Negeri Samarinda', NULL, NULL, NULL),
(25, 'Politeknik Pertanian Negeri Payakumbuh', NULL, NULL, NULL),
(26, 'Politeknik Negeri Samarinda', NULL, NULL, NULL),
(27, 'Politeknik Negeri Media Kreatif', NULL, NULL, NULL),
(28, 'Politeknik Manufaktur Negeri Bangka Belitung', NULL, NULL, NULL),
(29, 'Politeknik Negeri Batam', NULL, NULL, NULL),
(30, 'Politeknik Negeri Nusa Utara', NULL, NULL, NULL),
(31, 'Politeknik Negeri Bengkalis', NULL, NULL, NULL),
(32, 'Politeknik Negeri Balikpapan', NULL, NULL, NULL),
(33, 'Politeknik Negeri Madura', NULL, NULL, NULL),
(34, 'Politeknik Maritim Negeri Indonesia', NULL, NULL, NULL),
(35, 'Politeknik Negeri Banyuwangi', NULL, NULL, NULL),
(36, 'Politeknik Negeri Madiun', NULL, NULL, NULL),
(37, 'Politeknik Negeri Fakfak', NULL, NULL, NULL),
(38, 'Politeknik Negeri Sambas', NULL, NULL, NULL),
(39, 'Politeknik Negeri Tanah Laut', NULL, NULL, NULL),
(40, 'Politeknik Negeri Subang', NULL, NULL, NULL),
(41, 'Politeknik Negeri Ketapang', NULL, NULL, NULL),
(42, 'Politeknik Negeri Cilacap', NULL, NULL, NULL),
(43, 'Politeknik Negeri Indramayu', NULL, NULL, NULL),
(44, 'Politeknik Unggul LP3M', NULL, NULL, NULL),
(45, 'Politeknik Ganesha', NULL, NULL, NULL),
(46, 'Politeknik Mandiri Bina Prestasi', NULL, NULL, NULL),
(47, 'Politeknik Profesional Mandiri', NULL, NULL, NULL),
(48, 'Politeknik Poliprofesi Medan', NULL, NULL, NULL),
(49, 'Politeknik LP3I Medan', NULL, NULL, NULL),
(50, 'Politeknik Tugu 45 Medan', NULL, NULL, NULL),
(51, 'Politeknik Santo Thomas', NULL, NULL, NULL),
(52, 'Politeknik Trijaya Krama', NULL, NULL, NULL),
(53, 'Politeknik Yanada', NULL, NULL, NULL),
(54, 'Politeknik Tanjungbalai', NULL, NULL, NULL),
(55, 'Politeknik Kesehatan YRSU Dr Rusdi', NULL, NULL, NULL),
(56, 'Politeknik IT&B Medan', NULL, NULL, NULL),
(57, 'Politeknik Bisnis Indonesia', NULL, NULL, NULL),
(58, 'Politeknik Gihon', NULL, NULL, NULL),
(59, 'Politeknik Wilmar Bisnis Indonesia', NULL, NULL, NULL),
(60, 'Politeknik Akamigas Palembang', NULL, NULL, NULL),
(61, 'Politeknik Anika Palembang', NULL, NULL, NULL),
(62, 'Politeknik Darusalam', NULL, NULL, NULL),
(63, 'Politeknik Sekayu', NULL, NULL, NULL),
(64, 'Politeknik YPPB Belitang', NULL, NULL, NULL),
(65, 'Politeknik Raflesia', NULL, NULL, NULL),
(66, 'Politeknik Gajah Sakti', NULL, NULL, NULL),
(67, 'Politeknik Muara Dua', NULL, NULL, NULL),
(68, 'Politeknik Palcomtech', NULL, NULL, NULL),
(69, 'Politeknik Darma Ganesha', NULL, NULL, NULL),
(70, 'Politeknik Manufaktur Astra', NULL, NULL, NULL),
(71, 'Politeknik Swadharma', NULL, NULL, NULL),
(72, 'Politeknik Bunda Kandung', NULL, NULL, NULL),
(73, 'Politeknik Tugu Jakarta', NULL, NULL, NULL),
(74, 'Politeknik LP3I Jakarta', NULL, NULL, NULL),
(75, 'Politeknik Global Indonesia', NULL, NULL, NULL),
(76, 'Politeknik Karya Husada', NULL, NULL, NULL),
(77, 'Politeknik Soca', NULL, NULL, NULL),
(78, 'Politeknik Bina Budaya Cipta', NULL, NULL, NULL),
(79, 'Politeknik Kelapa Sawit Citra Widya Edukasi', NULL, NULL, NULL),
(80, 'Politeknik Kent', NULL, NULL, NULL),
(81, 'Politeknik Piksi Input Serang', NULL, NULL, NULL),
(82, 'Politeknik TEDC', NULL, NULL, NULL),
(83, 'Politeknik Agroindustri', NULL, NULL, NULL),
(84, 'Politeknik Al-Islam Bandung', NULL, NULL, NULL),
(85, 'Politeknik Enjinering Indorama', NULL, NULL, NULL),
(86, 'Politeknik Gajah Tunggal', NULL, NULL, NULL),
(87, 'Politeknik Geologi Dan Pertambangan Agp', NULL, NULL, NULL),
(88, 'Politeknik Gunakarya Indonesia Bekasi', NULL, NULL, NULL),
(89, 'Politeknik Kesehatan Bhakti Pertiwi Husada', NULL, NULL, NULL),
(90, 'Politeknik Kesehatan TNI-AU Ciumbuleuit', NULL, NULL, NULL),
(91, 'Politeknik Komputer Niaga Lpkia', NULL, NULL, NULL),
(92, 'Politeknik Krakatau', NULL, NULL, NULL),
(93, 'Politeknik Kridatama Bandung', NULL, NULL, NULL),
(94, 'Politeknik LP3I Bandung', NULL, NULL, NULL),
(95, 'Politeknik Meta Industri Cikarang', NULL, NULL, NULL),
(96, 'Politeknik Mitra Kusuma', NULL, NULL, NULL),
(97, 'Politeknik Pajajaran Insan Cinta Bangsa Bandung', NULL, NULL, NULL),
(98, 'Politeknik Perdana Mandiri', NULL, NULL, NULL),
(99, 'Politeknik PGRI Banten', NULL, NULL, NULL),
(100, 'Politeknik Piksi Ganesha', NULL, NULL, NULL),
(101, 'Politeknik Pos Indonesia', NULL, NULL, NULL),
(102, 'Politeknik Praktisi Bandung', NULL, NULL, NULL),
(103, 'Politeknik Sukabumi', NULL, NULL, NULL),
(104, 'Politeknik Tri Mitra Karya Mandiri', NULL, NULL, NULL),
(105, 'Politeknik Triguna Tasikmalaya', NULL, NULL, NULL),
(106, 'Politeknik Tunas Pemuda', NULL, NULL, NULL),
(107, 'Politeknik Mekatronika Sanata Dharma', NULL, NULL, NULL),
(108, 'Politeknik Muhammadiyah Yogyakarta', NULL, NULL, NULL),
(109, 'Politeknik API Yogyakarta', NULL, NULL, NULL),
(110, 'Politeknik LPP Yogyakarta', NULL, NULL, NULL),
(111, 'Politeknik Seni Yogyakarta', NULL, NULL, NULL),
(112, 'Politeknik Kesehatan Bhakti Setya Indonesia', NULL, NULL, NULL),
(113, 'Politeknik Kesehatan Permata Indonesia Yogyakarta', NULL, NULL, NULL),
(114, 'Politeknik Harapan Bersama', NULL, NULL, NULL),
(115, 'Politeknik Sawunggalih Aji', NULL, NULL, NULL),
(116, 'Politeknik Pratama Mulia', NULL, NULL, NULL),
(117, 'Politeknik Muhammadiyah Magelang', NULL, NULL, NULL),
(118, 'Politeknik Pratama', NULL, NULL, NULL),
(119, 'Politeknik Ma arif', NULL, NULL, NULL),
(120, 'Politeknik Dharma Patria', NULL, NULL, NULL),
(121, 'Politeknik Indonusa Surakarta', NULL, NULL, NULL),
(122, 'Politeknik Pusmanu', NULL, NULL, NULL),
(123, 'Politeknik Purbaya', NULL, NULL, NULL),
(124, 'Politeknik Unggulan Sragen', NULL, NULL, NULL),
(125, 'Politeknik Manufaktur Ceper', NULL, NULL, NULL),
(126, 'Politeknik Stibisnis', NULL, NULL, NULL),
(127, 'Politeknik Muhammadiyah Pekalongan', NULL, NULL, NULL),
(128, 'Politeknik Banjarnegara', NULL, NULL, NULL),
(129, 'Politeknik Muhammadiyah Tegal', NULL, NULL, NULL),
(130, 'Politeknik Kesehatan Bhakti Mulia', NULL, NULL, NULL),
(131, 'Politeknik ATMI', NULL, NULL, NULL),
(132, 'Politeknik Trisila Dharma', NULL, NULL, NULL),
(133, 'Politeknik Baja Tegal', NULL, NULL, NULL),
(134, 'Politeknik Mitra Karya Mandiri', NULL, NULL, NULL),
(135, 'Politeknik Santo Paulus Surakarta', NULL, NULL, NULL),
(136, 'Politeknik Bina Trada Semarang', NULL, NULL, NULL),
(137, 'Politeknik Kesehatan RS Dr Soepraoen Kesdam V', NULL, NULL, NULL),
(138, 'Politeknik Kota Malang', NULL, NULL, NULL),
(139, 'Politeknik NSC', NULL, NULL, NULL),
(140, 'Politeknik Ubaya', NULL, NULL, NULL),
(141, 'Politeknik Unisma Malang', NULL, NULL, NULL),
(142, 'Politeknik Cahaya Surya', NULL, NULL, NULL),
(143, 'Politeknik Surabaya', NULL, NULL, NULL),
(144, 'Politeknik Kesehatan Majapahit', NULL, NULL, NULL),
(145, 'Politeknik Sakti Surabaya', NULL, NULL, NULL),
(146, 'Politeknik Kediri', NULL, NULL, NULL),
(147, 'Politeknik 17 Agustus 1945 Surabaya', NULL, NULL, NULL),
(148, 'Politeknik Pertanian dan Peternakan Mapena', NULL, NULL, NULL),
(149, 'Politeknik Nasional Denpasar', NULL, NULL, NULL),
(150, 'Politeknik St Wilhelmus', NULL, NULL, NULL),
(151, 'Politeknik Ganesa Guru', NULL, NULL, NULL),
(152, 'Politeknik Widya Dharma Bali', NULL, NULL, NULL),
(153, 'Politeknik Medica Farma Husada Mataram', NULL, NULL, NULL),
(154, 'Politeknik Informatika Nasional', NULL, NULL, NULL),
(155, 'Politeknik Gorontalo', NULL, NULL, NULL),
(156, 'Politeknik Palu', NULL, NULL, NULL),
(157, 'Politeknik Indotec Kendari', NULL, NULL, NULL),
(158, 'Politeknik Bosowa', NULL, NULL, NULL),
(159, 'Politeknik Caltex', NULL, NULL, NULL),
(160, 'Politeknik Jambi', NULL, NULL, NULL),
(161, 'Politeknik Kesehatan Siteba', NULL, NULL, NULL),
(162, 'Politeknik Kampar', NULL, NULL, NULL),
(163, 'Politeknik Pariwisata Batam', NULL, NULL, NULL),
(164, 'Politeknik Hasnur', NULL, NULL, NULL),
(165, 'Politeknik Muara Teweh', NULL, NULL, NULL),
(166, 'Politeknik Tonggak Equator', NULL, NULL, NULL),
(167, 'Politeknik Putra Bangsa Pontianak', NULL, NULL, NULL),
(168, 'Politeknik Kotabaru', NULL, NULL, NULL),
(169, 'Politeknik Sendawar', NULL, NULL, NULL),
(170, 'Politeknik Malinau', NULL, NULL, NULL),
(171, 'Politeknik Islam Syekh Salman Al-Farisi Rantau', NULL, NULL, NULL),
(172, 'Politeknik Tanah Laut', NULL, NULL, NULL),
(173, 'Politeknik Bisnis Lamda', NULL, NULL, NULL),
(174, 'Politeknik Ilmu Pelayaran Balikpapan', NULL, NULL, NULL),
(175, 'Politeknik Unggulan Kalimantan', NULL, NULL, NULL),
(176, 'Politeknik Batulicin', NULL, NULL, NULL),
(177, 'Politeknik Perdamaian Halmahera', NULL, NULL, NULL),
(178, 'Politeknik Sains & Teknologi Wiratama Maluku Utara', NULL, NULL, NULL),
(179, 'Politeknik Halmahera', NULL, NULL, NULL),
(180, 'Politeknik Aceh', NULL, NULL, NULL),
(181, 'Politeknik Aceh Selatan', NULL, NULL, NULL),
(182, 'Politeknik Indonesia Venezuela', NULL, NULL, NULL),
(183, 'Politeknik Amamapare', NULL, NULL, NULL),
(184, 'Politeknik Katolik Saint Paul', NULL, NULL, NULL),
(185, 'Politeknik Pertanian Yasanto', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `politeknik_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_proposal` text COLLATE utf8_unicode_ci,
  `total_anggota` int(11) DEFAULT NULL,
  `status` enum('Daftar','Tahap Seleksi','Lolos','Tidak Lolos') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Daftar',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id`, `users_id`, `kategori_id`, `nama_tim`, `politeknik_id`, `file_proposal`, `total_anggota`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'TIM', '1', 'operasi linux word.docx', 0, 'Tahap Seleksi', '2018-09-05 12:47:15', '2018-08-03 08:22:13', '2018-09-05 12:47:15'),
(2, 4, 7, 'Aloha', '18', NULL, 2, 'Daftar', '2018-09-05 12:48:02', '2018-08-17 03:11:22', '2018-09-05 12:48:02'),
(3, 53, 5, 'Pringgo TESTER', '18', 'wcms_381565.pdf', 2, 'Tahap Seleksi', NULL, '2018-08-31 02:09:08', '2018-09-10 21:15:08'),
(4, 54, 1, 'Ilham', '1', NULL, 2, 'Daftar', '2018-09-04 21:33:45', '2018-08-31 02:22:52', '2018-09-04 21:33:45'),
(5, 55, 4, 'Faz', '23', NULL, 2, 'Daftar', NULL, '2018-08-31 10:46:58', '2018-08-31 10:46:58'),
(6, 56, 2, 'Labako', '19', NULL, 0, 'Daftar', NULL, '2018-08-31 18:19:18', '2018-08-31 21:38:46'),
(7, 59, 1, 'Cihuy', '3', NULL, 2, 'Daftar', '2018-09-05 12:47:56', '2018-09-01 00:47:03', '2018-09-05 12:47:56'),
(8, 60, 3, 'Kindness Hunter', '2', NULL, 2, 'Daftar', NULL, '2018-09-01 03:28:59', '2018-09-01 03:28:59'),
(9, 61, 7, 'JTK 404', '4', NULL, 0, 'Daftar', NULL, '2018-09-02 04:12:27', '2018-09-03 02:39:37'),
(10, 63, 1, ' <script> window.location=\'https://excess-xss.com/\' </script> ', '2', NULL, 2, 'Daftar', '2018-09-05 12:47:46', '2018-09-02 06:58:57', '2018-09-05 12:47:46'),
(11, 64, 3, 'Vedici Studio', '4', NULL, 0, 'Daftar', NULL, '2018-09-02 20:43:31', '2018-09-02 21:06:54'),
(12, 67, 4, 'Semanggi-Dev', '18', NULL, 1, 'Daftar', NULL, '2018-09-02 21:09:51', '2018-09-02 21:30:37'),
(13, 70, 2, 'Dedik Test Daftar', '2', NULL, 2, 'Daftar', '2018-09-05 12:47:30', '2018-09-04 20:21:28', '2018-09-05 12:47:30'),
(14, 71, 5, 'Tim Hore', '18', NULL, 0, 'Daftar', NULL, '2018-09-05 07:51:23', '2018-09-06 20:00:46'),
(15, 72, 2, 'Batuah Group', '159', NULL, 2, 'Daftar', NULL, '2018-09-06 04:03:49', '2018-09-06 04:03:49'),
(16, 73, 2, 'RADlite project', '23', NULL, 2, 'Daftar', NULL, '2018-09-06 08:19:58', '2018-09-06 08:19:58'),
(17, 76, 3, 'Seghah Kami', '31', NULL, 2, 'Daftar', NULL, '2018-09-09 05:46:58', '2018-09-09 05:46:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci DEFAULT NULL,
  `jurusan` text COLLATE utf8_unicode_ci,
  `no_mahasiswa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text COLLATE utf8_unicode_ci,
  `no_telp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tim_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('Ketua','Anggota') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Anggota',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `jenis_kelamin`, `jurusan`, `no_mahasiswa`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `tim_id`, `photo`, `role`, `remember_token`, `deleted_at`, `created_at`, `updated_at`, `is_activated`) VALUES
(1, 'ketua', 'ketua@kmipn.com', '$2y$10$Io3tTWg76xkWu4PeuTeAaOcZbKGP1fCIZo6sbneHdNCdgA75/hcW2', 'Laki-laki', 'IT', '2103171036', 'Surabaya', '2018-08-03', 'Surabaya', '0895337348558', '1', NULL, 'Ketua', 'Q23TqC2H01SfHNmStrWgidcvn3bB2GpomzZbKhKQSSOtvQznUDYUXIZ3KWFE', NULL, '2018-08-03 08:22:05', '2018-09-01 05:40:42', 0),
(2, 'anggota1', 'anggota1@kmipn.com', NULL, 'Laki-laki', 'IT', '2103171036', 'Surabaya', '2018-08-03', 'Surabaya', '0895337348558', '1', NULL, 'Anggota', NULL, NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05', 0),
(3, 'Anggota2', 'Anggota2@kmipn.com', NULL, 'Laki-laki', 'IT', '2103171036', 'Surabaya', '2018-08-03', 'Surabaya', '0895337348558', '1', NULL, 'Anggota', NULL, NULL, '2018-08-03 08:22:05', '2018-08-03 08:22:05', 0),
(4, 'ilham', 'fadlifarham10@gmail.com', '$2y$10$AqS0v/cpFfkdHxAnzYRML.0W7icQSyTgPZ2UjeXY/46JTP/jY/iDO', 'Laki-laki', 'IY', '21212', 'Surabaya', '2018-08-01', 'asfagasgag', '082232666431', '2', NULL, 'Ketua', '1yDn7uG0l9jLTjdBHXSqDF0mCgwsoFOfgM4xiKtkrtKQDfscLCbXs9treX2l', NULL, '2018-08-17 03:11:12', '2018-08-31 02:49:15', 1),
(53, 'Pringgo', 'odyinggo@gmail.com', '$2y$10$RiatZjba5jhvh8wkqLVyYOngt2E6UQEmNyJXIhRV/XK/5pZKEhfIu', 'Laki-laki', 'TI', '2103177042', 'Ponorogo', '1995-01-31', 'Kampus Politeknik Elektronika Negeri Surabaya (PENS) , Jl. Raya ITS, Keputih, Sukolilo, Kota SBY, Jawa Timur 60111', '085736676648', '3', NULL, 'Ketua', 'KRlqiWaHzcbxr64MLyU3ZdwIp05TgZlDToL2DXtCL2mJaz2y2HQyKpacus1z', NULL, '2018-08-31 02:09:03', '2018-08-31 02:10:05', 1),
(54, 'Jos', 'ilhammaulana@it.student.pens.ac.id', '$2y$10$Uh4XLNLeYtlHlv3L.dm50.A50nAn3nty4IVezVP.i//.erHRrJUY2', 'Laki-laki', 'It', '211', '8hjd', '2018-08-31', 'Pos', '0811111', '4', NULL, 'Ketua', NULL, NULL, '2018-08-31 02:22:48', '2018-08-31 02:24:11', 1),
(55, 'Adnin Diba Purnomo', 'adnindibap@gmail.com', '$2y$10$eYuKy4WmlUl9D9/nhY8pmesg81gDR5kZkbUldxFoErgrVQB8Dm/HG', 'Perempuan', 'Teknologi Informasi', '1541180060', 'Trengggalek', '1996-06-17', 'Nama : Adnin Diba\r\nAlamat Kos : Jalan Senggani 18, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141 (Kos Ariro kamar 1E)\r\nAlamat Rumah : Jalan K.H Agus Salim 20 RT12/RW4 \r\nKelurahan Sumbergedong, Kecamatan Trenggalek, \r\nKabupaten Trenggalek, Provinsi Jawa Timur\r\nKode Pos 66315', '085755055131', '5', NULL, 'Ketua', 'kL6uca4UvxcD9q4BstQ2gCDkv2y0tLFeKJ5f8xUGO4XnSuDjoHJppLVnbeU1', NULL, '2018-08-31 10:46:53', '2018-09-03 03:15:52', 0),
(56, 'Damar Novtahaning', 'dnovtahaning.ifu@gmail.com', '$2y$10$qON690FuzEGGlaEn66f4oudnHWVuOobPe6ytyQ.ByW054Z7e6jvY6', 'Perempuan', 'Teknologi Informasi / Teknik Informatika', 'E41161281', 'Surabaya', '1997-11-13', 'Jl. Sucipto Yudhodiharjo 277, Bondowoso, Jawa Timur', '082245471019', '6', '59276.jpeg', 'Ketua', NULL, NULL, '2018-08-31 18:19:13', '2018-08-31 18:40:22', 1),
(57, 'Gea Ayu Wulandari', 'geaayu16@gmail.com', NULL, 'Perempuan', 'Teknologi Informasi / Teknik Informatika', 'E41160711', 'Ujung pandang', '1997-08-16', 'Jl.Gajah Masa XXXI no.153 Jember', '082233860297', '6', '76017.jpeg', 'Anggota', NULL, NULL, '2018-08-31 20:34:28', '2018-08-31 20:34:46', 0),
(58, 'Muhammad Yusuf', 'myuusuff31@gmail.com', NULL, 'Laki-laki', 'Teknologi Informasi / Teknik Informatika', 'E41160388', 'Jember', '1998-01-31', 'Jl Sawo 3 No 8 Perumahan Puri Sadewo', '082147613330', '6', '45807.jpeg', 'Anggota', NULL, NULL, '2018-08-31 21:38:46', '2018-08-31 21:38:57', 0),
(59, 'asd', 'asd@asd.asd', '$2y$10$01TFb6eakCo6d5Aic7G9l.jGMXJouAxEz/pQA/6wdAvoXPX72BHye', 'Laki-laki', 'TI', '2123123123123', 'asdasd', '1212-12-12', 'tuhtuhu', '078123123123', '7', NULL, 'Ketua', NULL, NULL, '2018-09-01 00:46:55', '2018-09-01 00:47:03', 0),
(60, 'Fransiskus Xaverius Ananda Tri Prasetio', 'nandaprasesoft98@gmail.com', '$2y$10$9/2rEbqj9ug8OuVUahRcmOdBT7hYV8A66S7YTR4ssA6A0z0IwInIi', 'Laki-laki', 'Teknik Informatika', '4816040213', 'Jakarta', '1997-07-27', 'Cimanggis Indah Blok L Nomor 4, RT/RW 003/011, Kelurahan Sukamaju, Kecamatan Cilodong, Kota Depok, Provinsi Jawa Barat, Indonesia', '088213652449', '8', NULL, 'Ketua', NULL, NULL, '2018-09-01 03:28:55', '2018-09-01 03:30:01', 1),
(61, 'Jeremia Geraldi', 'akaedmpl@gmail.com', '$2y$10$fzAcCA1OnPJQobdxsHakXuNk4SVwZ2qGaArDJdeQLhfQxRiSnzL8a', 'Laki-laki', 'D-3 Teknik Informatika', '161511014', 'Bandung', '1998-05-27', 'Jln.Cijerah Gg.Hj.Anwar No.8', '+6281313003560', '9', NULL, 'Ketua', 'iU5IF74MlmY64LWLKD9jLGxcFahZX6r9unH51zzVKO6rOgHmVPZcpIO9Ykxy', NULL, '2018-09-02 04:12:21', '2018-09-02 05:53:38', 1),
(62, 'Muhammad Fikri Oktoriza', 'muhammad.fikri.tif16@polban.ac.id', NULL, 'Laki-laki', 'D-3 Teknik Informatika', '161511023', 'Cimahi', '1998-10-27', 'Komplek Permata Kopo D-17', '+628112271098', '9', '55227.jpg', 'Anggota', NULL, NULL, '2018-09-02 05:48:48', '2018-09-02 05:50:04', 0),
(63, 'Dadad', 'nanang@example.com', '$2y$10$4MBNaGX3EM6hX62DwpU2wOQgynNyUH0F.EdiYqGQBLr2BWCxSJ.H.', 'Perempuan', 'DSFSDF', '12312424', 'B', '2018-09-11', ' <script>\r\nwindow.location=\'https://excess-xss.com/\'\r\n</script> ', '214324', '10', NULL, 'Ketua', 'Nd0owtjv8NVJRkQ0xefSsIi6XugVorkr0reWNnhskwd0npyFpmQcjsDK7SQW', NULL, '2018-09-02 06:58:54', '2018-09-02 06:59:24', 0),
(64, 'Kivlan Aziz Al-Falaah', 'kivlan.aziz.tif16@polban.ac.id', '$2y$10$PC5RjDiIe83MindM6br/ru2d9.Jl9Tm2cUSCoJUntxTbYK0Sqs2eC', 'Laki-laki', 'Jurusan Teknik Komputer dan Informatika', '161511016', 'Bandung', '1999-07-16', 'Komp. Cimindi Raya V Blok A No 12', '0895327360120', '11', '56321.jpg', 'Ketua', NULL, NULL, '2018-09-02 20:43:27', '2018-09-02 20:46:46', 1),
(65, 'Alpin Jestinera', 'alpinjestinera@gmail.com', NULL, 'Laki-laki', 'Jurusan Teknik Komputer dan Informatika', '161511005', 'Jakarta', '1998-11-03', 'Jl. Dahlia 2 No. 6 Perumahan Pondok Tanah Mas, Cibitung, Bekasi', '081315591195', '11', '74694.jpg', 'Anggota', NULL, NULL, '2018-09-02 20:56:27', '2018-09-02 20:59:26', 0),
(66, 'Muhammad Fadhil', 'muhammad.fadhil225@gmail.com', NULL, 'Laki-laki', 'Jurusan Teknik Komputer dan Informatika', '161511022', 'Jakarta', '1998-06-22', 'Karawang Green Village 2, Blok F2 no.31 Pinayungan, Teluk Jambe, Karawang Barat', '082298332988', '11', '76977.jpg', 'Anggota', NULL, NULL, '2018-09-02 21:06:54', '2018-09-02 21:07:25', 0),
(67, 'Budi Santoso', 'budi.itpens@gmail.com', '$2y$10$x0DFukKCEfqiutQWZjaMbepIOJjTRqzR.OruDr1Pys3oMY7LmIz3S', 'Laki-laki', 'D4 Teknik Informatika', '2110151005', 'Bojonegoro', '1996-11-07', 'Jalan Gajah Mada No.03 Sumbang, Bojonegoro', '085233020036', '12', '53757.jpg', 'Ketua', 'kuESh9FVYPvYmlVjDEX8y7ZH2raOd7iB8iMnwarYiQCRjXlZhRYDFg5ovAGp', NULL, '2018-09-02 21:09:48', '2018-09-07 05:54:00', 1),
(68, 'Sandy Gio Pratama', 'sandygiopratama@gmail.com', NULL, 'Laki-laki', 'D4 Teknik Informatika', '2110151009', 'Sidoarjo', '1997-05-14', 'Sugihwaras Rt 11 Rw 03, Candi, Sidoarjo', '081385098039', '12', '89175.jpeg', 'Anggota', NULL, NULL, '2018-09-02 21:30:37', '2018-09-02 21:34:34', 0),
(69, 'Mufid Jamaluddin', '', NULL, 'Laki-laki', 'D-3 Teknik Informatika', '161511019', 'Bandung', '1998-11-01', 'Dusun Babakanbandung RT 04 RW 01 Desa Situraja Utara Kec Situraja Kab Sumedang Jawa Barat', '081563532000', '9', '75910.jpg', 'Anggota', NULL, NULL, '2018-09-03 02:39:37', '2018-09-03 02:39:56', 0),
(70, 'Dedik', 'dediksugiharto.com@gmail.com', '$2y$10$hK5qEr3jviuAbuobxNsvt.wGVxRG1jNzekEaINhjUdlO0Vo6/VSBq', 'Laki-laki', 'Teknik Informatika', '2110161046', 'Tuban', '2001-11-30', 'Surabaya', '0895388732121', '13', NULL, 'Ketua', '5c9Kz8iI1d9m9MQA8USeBrdE0vikr2tArGa5isOFKQv0i6OX8z0ooHgM8q4q', NULL, '2018-09-04 20:21:24', '2018-09-04 20:22:58', 1),
(71, 'Mohamad Faisal', 'mhmfaisal96@gmail.com', '$2y$10$7kSUCqqL63K2PlPRfcKVOOLR1x7viv1zWgAvj1TbXu/1XvmWMryuG', 'Laki-laki', 'Teknik Mekatronika', '3110161040', 'Ponorogo', '1996-07-12', 'Jl.Mangga No. 2 A Beduri', '085235839193', '14', NULL, 'Ketua', 'XriwEgiVREmxIwy7KfA2VdkxGIgLoo4UbPsaggMBQBjx6215dDt3bfwSViE4', NULL, '2018-09-05 07:51:18', '2018-09-06 20:01:37', 1),
(72, 'Yopie Hidayat', 'yopiehidayat12@gmail.com', '$2y$10$jdUSoCx9YoiMKOWokSn5Kux1lSgUEIh.30hWaOb5GfFXZ0pH0/Kh2', 'Laki-laki', 'Teknik Informatika', '1455301092', 'Situjuh', '1996-08-31', 'Perumahan Budi Sari no 16, Kel. Umban Sari, Rumbai, Pekanbaru', '081270355866', '15', NULL, 'Ketua', NULL, NULL, '2018-09-06 04:03:44', '2018-09-06 04:06:24', 1),
(73, 'DION MAULANA WILLIAWARMA', 'Mwilliawarma13@gmail.com', '$2y$10$AKYqbwQcB02snizHm272OecuAZwjdRfaEMU0jTTaydq5dNQSLXZdm', 'Laki-laki', 'MANAJEMENEN INFORMATIKA', '1731710111', 'MALANG', '1999-01-22', 'JL. PROF MOCH YAMIN 3 NO 175 RT 05 RW 07 KECAMATAN KLOJEN KOTA MALANG', '083848065143', '16', NULL, 'Ketua', NULL, NULL, '2018-09-06 08:19:54', '2018-09-06 08:53:46', 1),
(74, 'Muhammad Yusron Turmudzi', 'mhmmdyusront0101@gmail.com', NULL, 'Laki-laki', 'Teknik Mekatronika', '3110161059', 'Surabaya', '1998-01-01', 'Jl. Karah V/17 Surabaya', '089665848569', '14', '93231.JPG', 'Anggota', NULL, NULL, '2018-09-06 19:50:27', '2018-09-06 19:51:32', 0),
(75, 'Irvan Eksa Mahendra', 'irvan.mahendra77@gmail.com', NULL, 'Laki-laki', 'Teknik Informatika', '2103181049', 'Samarinda', '1998-06-11', 'Jalan Mulawarman RT/RW 17/00 Desa Bangun Rejo Kecamatan Tenggarong Seberang, Kalimantan Timur', '085889967039', '14', '', 'Anggota', NULL, NULL, '2018-09-06 20:00:46', '2018-09-06 20:00:46', 0),
(76, 'Muhammad Fauzi', 'fauzijuventini@gmail.com', '$2y$10$TWlMm5EK.o/0WLcgbHT/uOyJ2WzG3YKBxU32G3JYkJsh/lmTbeNyu', 'Laki-laki', 'Teknik Informatika', '6204161011', 'Gresik', '1997-03-11', 'Jln Kemuning Desa Sebauk Kec. Bengkalis Kab. Bengkalis, Riau', '082350460808', '17', NULL, 'Ketua', 'B65BRdKxJPhGkwDx8fdM6TLT1drw11QIWmmeENSJfCjZPNy7vtPhO6c8BsPf', NULL, '2018-09-09 05:46:53', '2018-09-09 05:54:39', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_activations`
--

CREATE TABLE `user_activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user_activations`
--

INSERT INTO `user_activations` (`id`, `users_id`, `token`, `created_at`) VALUES
(51, 55, 'daDnoYDnOF8G5ZzxCWq9FIm0jWKhe9', '2018-08-31 17:46:53'),
(53, 59, 'fs9Fa2UwPthf79xNMYQUuldA3jh3lh', '2018-09-01 07:46:55'),
(56, 63, 'Y8jwo6A5oSRgQBTB8kX5Oi3b3aclVQ', '2018-09-02 13:58:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lomba_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `politeknik`
--
ALTER TABLE `politeknik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tim_users_id_foreign` (`users_id`),
  ADD KEY `tim_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_activations_users_id_foreign` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `politeknik`
--
ALTER TABLE `politeknik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lomba`
--
ALTER TABLE `lomba`
  ADD CONSTRAINT `lomba_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD CONSTRAINT `tim_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `tim_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_activations`
--
ALTER TABLE `user_activations`
  ADD CONSTRAINT `user_activations_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

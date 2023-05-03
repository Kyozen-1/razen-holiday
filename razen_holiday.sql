-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Bulan Mei 2023 pada 02.44
-- Versi server: 5.7.33
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `razen_holiday`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guides`
--

CREATE TABLE `guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guides`
--

INSERT INTO `guides` (`id`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Salmon Thuir', 'Senior Agent', '644f701b2e51b-230501.jpg', '2023-05-01 00:54:03', '2023-05-01 00:54:03'),
(2, 'Horke Pels', 'Head Officer', '644f703f9c102-230501.jpg', '2023-05-01 00:54:39', '2023-05-01 00:54:39'),
(3, 'Solden kalos', 'Supervisor', '644f7050123f3-230501.jpg', '2023-05-01 00:54:56', '2023-05-01 00:54:56'),
(4, 'Nelson Bam', 'Quality Assurance', '644f70613bc6a-230501.jpg', '2023-05-01 00:55:13', '2023-05-01 00:55:13'),
(5, 'Cacics Coold', 'Asst. Manager', '644f707606f3b-230501.jpg', '2023-05-01 00:55:34', '2023-05-01 00:55:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_berandas`
--

CREATE TABLE `landing_page_berandas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `section_3` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `section_5` json DEFAULT NULL,
  `section_6` json DEFAULT NULL,
  `section_7` json DEFAULT NULL,
  `section_8` json DEFAULT NULL,
  `section_9` json DEFAULT NULL,
  `section_10` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_berandas`
--

INSERT INTO `landing_page_berandas` (`id`, `section_1`, `section_2`, `section_3`, `section_4`, `section_5`, `section_6`, `section_7`, `section_8`, `section_9`, `section_10`, `created_at`, `updated_at`) VALUES
(1, '{\"judul\": \"Start Planning Your Dream Trip Today!\", \"gambar\": \"644b6f12c7599-230428.png\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>\", \"sub_judul\": \"Explore The World\", \"gambar_background\": \"644b6f1310395-230428.png\"}', '{\"judul\": \"Find Travel Perfection\", \"konten\": [{\"id\": \"644b7627af65b\", \"ikon\": \"icon-flag\", \"judul\": \"Tell Us What You Want To Do\", \"deskripsi_singkat\": \"Lorem ipsum dolor sit amet, consectetur adipiscing.\"}, {\"id\": \"644b7627af65e\", \"ikon\": \"icon-location-pin\", \"judul\": \"Share Your Travel Locations\", \"deskripsi_singkat\": \"Lorem ipsum dolor sit amet, consectetur adipiscing.\"}, {\"id\": \"644b7627af65f\", \"ikon\": \"icon-directions\", \"judul\": \"Share Your Travel Preference\", \"deskripsi_singkat\": \"Lorem ipsum dolor sit amet, consectetur adipiscing.\"}, {\"id\": \"644b771120d9a\", \"ikon\": \"icon-compass\", \"judul\": \"We are 100% Trusted Tour Agency\", \"deskripsi_singkat\": \"Lorem ipsum dolor sit amet, consectetur adipiscing.\"}], \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"3 Step Of The Perfect Tour\"}', '{\"judul\": \"Explore Top Destinations\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"Top Destinations\"}', '{\"judul\": \"Explore All Tour Of The World With Us.\", \"gambar\": \"644bbe7fb3fbe-230428.png\", \"konten\": [{\"id\": \"644bbf503758c\", \"ikon\": \"icon-location-pin\", \"judul\": \"Tour Guide\"}, {\"id\": \"644bbf503758e\", \"ikon\": \"icon-briefcase\", \"judul\": \"Friendly Price\"}, {\"id\": \"644bc06c2fff9\", \"ikon\": \"icon-folder\", \"judul\": \"Reliable Tour Package\"}], \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\\r\\n<br />\\r\\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\", \"sub_judul\": \"Get To Know Us\", \"gambar_background\": \"644bbe802146d-230428.png\"}', '{\"judul\": \"Best Tour Packages\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"Top Pick\"}', '{\"judul\": \"The Last Minute Deals\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"Top Deals\"}', '{\"judul\": \"Explore Your Life, <span class=\\\"theme1\\\"> Travel Where You Want!</span>\", \"gambar\": \"644bc48bbb4ed-230428.png\", \"konten\": \"\", \"tautan\": \"https://www.youtube.com/embed/swzeCMnHrXg\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>\\r\\n\\r\\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ut labore et dolore magna aliqua.</p>\", \"sub_judul\": \"Love Where Your\'re Going\"}', '{\"judul\": \"Special <span class=\\\"theme\\\">Offers & Discount </span> Packages\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"Top Offers\"}', '{\"judul\": \"Meet Our <span class=\\\"theme\\\">Excellent Guides</span>\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"Tour Guides\"}', '{\"judul\": \"Recent <span class=\\\"theme\\\">Articles & Posts</span>\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"Our Blogs Offers\"}', '2023-04-28 00:00:35', '2023-04-28 06:11:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_kontaks`
--

CREATE TABLE `landing_page_kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_kontaks`
--

INSERT INTO `landing_page_kontaks` (`id`, `section_1`, `section_2`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar\": \"644cc2a038f3f-230429.jpg\"}', '{\"judul\": \"Sagittis posuere id nam quis vestibulum vestibulum a facilisi at elit hendrerit scelerisque sodales nam dis orci.\", \"sub_judul\": \"INFORMATION ABOUT US\"}', '2023-04-29 00:09:20', '2023-04-29 00:10:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_layanans`
--

CREATE TABLE `landing_page_layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_layanans`
--

INSERT INTO `landing_page_layanans` (`id`, `section_1`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar\": \"644cbb3212362-230429.jpg\"}', '2023-04-28 23:37:38', '2023-04-28 23:37:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_perusahaans`
--

CREATE TABLE `landing_page_perusahaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_4` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_perusahaans`
--

INSERT INTO `landing_page_perusahaans` (`id`, `section_1`, `section_4`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar\": \"644cba0f60d93-230429.jpg\"}', '{\"judul\": \"Meet Our Excellent Guides\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"Tour Guides\"}', '2023-04-28 23:32:47', '2023-04-28 23:37:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `landing_page_proyeks`
--

CREATE TABLE `landing_page_proyeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_1` json DEFAULT NULL,
  `section_2` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `landing_page_proyeks`
--

INSERT INTO `landing_page_proyeks` (`id`, `section_1`, `section_2`, `created_at`, `updated_at`) VALUES
(1, '{\"gambar\": \"644cbe931de96-230429.jpg\"}', '{\"judul\": \"Some Beautiful Snapshoots\", \"deskripsi\": \"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>\", \"sub_judul\": \"Our Gallery\"}', '2023-04-28 23:52:03', '2023-04-28 23:52:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_media_sosials`
--

CREATE TABLE `master_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_ikon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_media_sosials`
--

INSERT INTO `master_media_sosials` (`id`, `nama`, `kode_ikon`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fab fa-facebook', '2023-04-25 23:53:37', '2023-04-25 23:53:37'),
(2, 'Twitter', 'fab fa-twitter', '2023-04-25 23:53:50', '2023-04-25 23:53:50'),
(3, 'Instagram', 'fab fa-instagram', '2023-04-25 23:53:59', '2023-04-25 23:53:59'),
(4, 'LinkedIn', 'fab fa-linkedin', '2023-04-25 23:54:07', '2023-04-25 23:54:07');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_04_23_064725_create_profils_table', 1),
(5, '2023_04_26_064350_create_master_media_sosials_table', 2),
(6, '2023_04_26_065847_add_column_kerja_dari_jam_to_profils', 3),
(7, '2023_04_28_034714_create_pivot_profil_media_sosials_table', 4),
(8, '2023_04_28_042316_add_column_deskripsi_to_profils', 5),
(9, '2023_04_28_062553_create_landing_page_berandas_table', 6),
(10, '2023_04_28_225518_create_landing_page_perusahaans_table', 7),
(11, '2023_04_29_062552_create_landing_page_layanans_table', 7),
(12, '2023_04_29_064132_create_landing_page_proyeks_table', 8),
(13, '2023_04_29_070537_create_landing_page_kontaks_table', 9),
(14, '2023_04_30_020415_create_section_testimonials_table', 10),
(15, '2023_04_30_020802_create_testimonials_table', 10),
(16, '2023_04_30_033107_drop_column_gambar_to_testimonials', 11),
(17, '2023_04_30_033152_add_column_foto_to_testimonials', 11),
(18, '2023_04_30_034533_create_partners_table', 12),
(19, '2023_05_01_072004_create_guides_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `nama`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'cl-5', '644de69b28ae4-230430.png', '2023-04-29 20:55:07', '2023-04-29 20:55:07'),
(2, 'cl-4', '644de6a837b30-230430.png', '2023-04-29 20:55:20', '2023-04-29 20:55:20'),
(3, 'cl-3', '644de6b744b76-230430.png', '2023-04-29 20:55:35', '2023-04-29 20:55:35'),
(4, 'cl-2', '644de6bdc3bc9-230430.png', '2023-04-29 20:55:41', '2023-04-29 20:55:41'),
(5, 'cl-1', '644de6c49663f-230430.png', '2023-04-29 20:55:48', '2023-04-29 20:55:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pivot_profil_media_sosials`
--

CREATE TABLE `pivot_profil_media_sosials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_sosial_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profil_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tautan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pivot_profil_media_sosials`
--

INSERT INTO `pivot_profil_media_sosials` (`id`, `media_sosial_id`, `profil_id`, `tautan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Razen Holiday', '2023-04-27 21:15:02', '2023-04-27 21:15:02'),
(2, 2, 1, 'Razen Holiday', '2023-04-27 21:15:02', '2023-04-27 21:15:02'),
(3, 3, 1, 'Razen Holiday', '2023-04-27 21:15:02', '2023-04-27 21:15:02'),
(4, 4, 1, 'Razen Holiday', '2023-04-27 21:15:02', '2023-04-27 21:15:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kerja_dari_jam` time DEFAULT NULL,
  `kerja_sampai_jam` time DEFAULT NULL,
  `kerja_dari_hari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerja_sampai_hari` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `nama`, `pt`, `no_hp`, `email`, `logo`, `alamat`, `created_at`, `updated_at`, `kerja_dari_jam`, `kerja_sampai_jam`, `kerja_dari_hari`, `kerja_sampai_hari`, `deskripsi`) VALUES
(1, 'Razen Holiday', 'PT Razen Teknologi Indonesia', '082299449494', 'hello@razen.co.id', '644b47cdb493c-230428.png', 'Yogyakarta', NULL, '2023-04-27 23:13:28', '08:00:00', '16:00:00', 'Senin', 'Jumat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio suspendisse leo neque iaculis molestie sagittis maecenas aenean eget molestie sagittis.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `section_testimonials`
--

CREATE TABLE `section_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `gambar_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `section_testimonials`
--

INSERT INTO `section_testimonials` (`id`, `sub_judul`, `judul`, `deskripsi`, `gambar_background`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Our Testimonails', 'Good Reviews By Clients', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>', '644ddd357189d-230430.png', '644ddd35858b7-230430.png', '2023-04-29 20:15:01', '2023-04-29 20:15:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimoni` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `nama`, `jabatan`, `testimoni`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'Jared Erondu', 'Supervisor', 'Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry\'s standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.', '2023-04-29 20:36:49', '2023-04-29 20:36:49', '644de2517ca27-230430.jpg'),
(2, 'Jared Erondu', 'Supervisor', 'Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry\'s standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero dolorem.', '2023-04-29 20:37:51', '2023-04-29 20:37:51', '644de28f47050-230430.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `behaviour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radius` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `color_layout`, `nav_color`, `placement`, `behaviour`, `layout`, `radius`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Razen Holiday', 'razen_holiday@razen.co.id', NULL, '$2y$10$vUlaHLsUBySNV17OB4bA0OgYjwnU1ThdLwFcLlbghO900K8Jz.1f.', 'dark-sky', 'default', 'vertical', 'pinned', 'fluid', 'rounded', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_kontaks`
--
ALTER TABLE `landing_page_kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_layanans`
--
ALTER TABLE `landing_page_layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_perusahaans`
--
ALTER TABLE `landing_page_perusahaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `landing_page_proyeks`
--
ALTER TABLE `landing_page_proyeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_profil_media_sosials_media_sosial_id_foreign` (`media_sosial_id`),
  ADD KEY `pivot_profil_media_sosials_profil_id_foreign` (`profil_id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `section_testimonials`
--
ALTER TABLE `section_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guides`
--
ALTER TABLE `guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `landing_page_berandas`
--
ALTER TABLE `landing_page_berandas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_kontaks`
--
ALTER TABLE `landing_page_kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_layanans`
--
ALTER TABLE `landing_page_layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_perusahaans`
--
ALTER TABLE `landing_page_perusahaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `landing_page_proyeks`
--
ALTER TABLE `landing_page_proyeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `master_media_sosials`
--
ALTER TABLE `master_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `section_testimonials`
--
ALTER TABLE `section_testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pivot_profil_media_sosials`
--
ALTER TABLE `pivot_profil_media_sosials`
  ADD CONSTRAINT `pivot_profil_media_sosials_media_sosial_id_foreign` FOREIGN KEY (`media_sosial_id`) REFERENCES `master_media_sosials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pivot_profil_media_sosials_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

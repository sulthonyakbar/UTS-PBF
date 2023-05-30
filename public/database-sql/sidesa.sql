-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 04:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_article` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_article`, `title`, `content`, `image`, `category_id`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Profil SiDesa', 'lorem ipsum dolor sit amet', '/article_img/1685456801.png', 1, 1, '2023-05-30 14:03:44', '2023-05-30 14:27:10'),
(2, 'Tentang SiDesa', 'Artikel pengenalan SiDesa kepada khalayak umum', '/article_img/1685458263.png', 3, 2, '2023-05-30 14:09:49', '2023-05-30 14:51:03'),
(5, 'Pemandangan SiDesa', 'Pemandangan SiDesa adalah keindahan alam yang memikat di desa kami. Desa ini dikelilingi oleh perbukitan yang hijau dengan pepohonan yang rimbun. Saat matahari terbit, sinar matahari yang lembut menerobos melalui daun-daun pohon menciptakan bayangan yang indah. Udara segar dan sejuk memeluk kami saat berjalan menyusuri jalan setapak yang mengelilingi desa. Pemandangan alam yang menenangkan dan damai ini membuat SiDesa menjadi tempat yang sempurna untuk bersantai dan menghilangkan stres.\r\n\r\nDesa kami juga memiliki sebuah sungai yang mengalir di tengah-tengahnya. Sungai ini menjadi sumber kehidupan bagi masyarakat desa. Air yang jernih mengalir dengan riak-riak kecil, menghadirkan suara alam yang menenangkan. Di sepanjang sungai, terdapat pepohonan rindang dan semak-semak yang memberikan naungan dan menjadi tempat tinggal bagi berbagai jenis burung dan binatang liar. Saat matahari terbenam, pemandangan sungai ini menjadi magis dengan cahaya senja yang memantulkan warna-warni di permukaan air.\r\n\r\nSelain itu, terdapat ladang-ladang subur yang membentang luas di desa kami. Ladang-ladang ini ditanami dengan berbagai jenis tanaman pangan seperti padi, jagung, dan sayuran. Ketika musim panen tiba, desa kami menjadi penuh dengan aktivitas petani yang bekerja keras memanen hasil pertanian mereka. Pemandangan ladang-ladang yang hijau dan subur ini menciptakan panorama yang menakjubkan dan memberikan kontribusi penting terhadap ketahanan pangan masyarakat desa.\r\n\r\nDesa kami juga memiliki kebun-kebun buah yang indah. Buah-buah segar seperti mangga, rambutan, dan durian dapat ditemukan di kebun-kebun ini. Saat musim buah tiba, kebun-kebun ini dipenuhi dengan buah-buah yang berwarna cerah dan harum. Banyak warga desa yang menanam buah-buahan di halaman rumah mereka, sehingga setiap sudut desa dipenuhi dengan keindahan dan aroma buah-buahan yang segar. Wisatawan sering datang ke desa kami untuk menikmati kebun-kebun buah ini dan merasakan sensasi memetik buah langsung dari pohonnya.\r\n\r\nTidak hanya keindahan alam yang menarik, tetapi juga kehidupan masyarakat yang harmonis dan ramah. Warga desa saling mengenal dan saling membantu satu sama lain. Kegiatan gotong-royong sering dilakukan untuk menjaga kebersihan desa dan memperbaiki infrastruktur. Ketika matahari terbenam, terdengar suara tawa dan canda warga desa yang berkumpul di', '/article_img/1685456801.png', 1, 1, '2023-05-30 14:26:41', '2023-05-30 14:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Profil Desa', '2023-05-30 13:35:01', '2023-05-30 13:35:01'),
(2, 'Pemerintahan Desa', '2023-05-30 13:39:19', '2023-05-30 13:39:19'),
(3, 'Program Pembangunan', '2023-05-30 13:39:32', '2023-05-30 13:45:01'),
(4, 'Pendidikan', '2023-05-30 13:39:38', '2023-05-30 13:39:38'),
(5, 'Kesehatan', '2023-05-30 13:39:44', '2023-05-30 13:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_diperoleh` date NOT NULL,
  `sumber` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id`, `nama_barang`, `jenis_barang`, `deskripsi_barang`, `harga`, `tgl_diperoleh`, `sumber`, `status`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'Kursi', 'Non Elektronik', 'Kursi Desa', 40000, '2023-05-30', 'Pemerintah', 'Baru', 200, '2023-05-30 12:24:23', '2023-05-30 12:24:23'),
(25, 'Meja', 'Non Elektronik', 'Eveniet eligendi ducimus corrupti. Autem mollitia nobis in distinctio molestias. Eius soluta beatae veritatis ea porro molestias praesentium corrupti.', 785349, '2014-07-17', 'Bantuan', 'Baru', 8, '2023-05-30 05:38:29', '2023-05-30 12:39:09'),
(26, 'Sapu', 'Non Elektronik', 'Eos consequatur dolores iure ut odit illum. Esse voluptatem sequi doloribus facere delectus consequatur. Fugit saepe est temporibus consectetur tempore soluta perferendis.', 64, '1994-01-11', 'Dana Desa', 'Baru', 4, '2023-05-30 05:38:29', '2023-05-30 12:39:22'),
(27, 'Papan Tulis', 'Non Elektronik', 'Aut sed quia sed dolorem pariatur eveniet quos error. Et ab qui voluptatem et earum nam. Eveniet molestiae itaque iusto id beatae magni.', 594, '2000-03-17', 'Bantuan', 'Baru', 458793506, '2023-05-30 05:38:46', '2023-05-30 12:39:34'),
(28, 'Proyektor', 'Elektronik', 'Consequatur sed autem corporis quis optio id vel. Beatae blanditiis ad ratione nihil. Et nesciunt enim qui id rem et.', 569255861, '2004-02-26', 'Bantuan', 'Bekas', 24118310, '2023-05-30 05:38:46', '2023-05-30 12:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_27_151814_create_warga_table', 1),
(7, '2023_05_30_113652_create_inventaris_table', 1),
(8, '2023_05_30_125953_create_category_table', 2),
(9, '2023_05_30_130008_create_article_table', 3),
(10, '2023_05_30_131352_create_categories_table', 4),
(11, '2023_05_30_131400_create_articles_table', 4),
(12, '2023_05_30_141748_create_test_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@itts.com', '2023-05-30 11:42:06', '$2y$10$1.zbD3wNukWfWkQb5BDkruGtGlFru.TnmraDPMiMhO9xbWGi8b0Ia', NULL, '2023-05-30 11:42:06', '2023-05-30 11:42:06'),
(2, 'Ryan Adi', 'ryanadi@mail.com', '2023-05-30 11:42:56', '$2y$10$FXLsCXiFTIAKjlPfT.q8zepqhYlMOGbs/pfaH2j5lY3FsohR0rnfG', NULL, '2023-05-30 11:42:56', '2023-05-30 11:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `wargas`
--

CREATE TABLE `wargas` (
  `id_warga` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wargas`
--

INSERT INTO `wargas` (`id_warga`, `nik`, `nama`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(1, '3515170312020003', 'RYAN ADI', '2002-12-03', 'Laki-Laki', 'Jl. Dares Pedaleman', 'Islam', 'Mahasiswa', '2023-05-30 12:19:19', '2023-05-30 12:19:44'),
(3, '5406711053295752', 'Marisa Boehm', '1994-12-10', 'Laki-Laki', '873 McDermott Route\nWildermanmouth, IA 49974-6086', 'Buddha', 'Infantry', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(4, '5681460896907128', 'Prof. Jaylon Lynch', '2017-07-08', 'Perempuan', '76650 Devonte Glens\nNorth Markushaven, VT 30161', 'Hindu', 'Correctional Officer', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(5, '1710088426177077', 'Prof. Elton Klocko IV', '2020-01-03', 'Laki-Laki', '8755 Theo Vista\nNicolasmouth, MO 37906', 'Konghucu', 'Earth Driller', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(6, '1259796907073662', 'Ludie Quigley', '1982-08-06', 'Laki-Laki', '779 Oda Point Suite 564\nLarsonport, UT 89898-4929', 'Buddha', 'Transportation Manager', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(7, '7489437929142927', 'Faustino Kshlerin', '1979-08-17', 'Perempuan', '277 Johnny Circle Apt. 594\nRutherfordton, OH 02819-7696', 'Katolik', 'Plant Scientist', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(8, '0192206743230705', 'Emilio Stracke', '1987-04-28', 'Laki-Laki', '4744 Rohan Course\nDagmarburgh, MN 72437', 'Islam', 'Insurance Appraiser', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(9, '7792735422940410', 'Kaley Ernser', '1982-01-15', 'Perempuan', '7699 Addie Ways Apt. 500\nNorth Rebecaside, NY 64314-9836', 'Islam', 'Assessor', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(10, '2619849120846683', 'Mr. Westley Wyman', '2011-08-26', 'Laki-Laki', '8961 Gislason Plaza Suite 465\nReillyville, IA 31030', 'Kristen', 'Armored Assault Vehicle Officer', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(11, '7513648757178242', 'Elouise Yost', '2022-09-15', 'Perempuan', '23628 Misty Parks\nDibbertview, VT 27864', 'Konghucu', 'Rail Yard Engineer', '2023-05-30 05:20:36', '2023-05-30 05:20:36'),
(12, '7371722024268497', 'Emanuel Rutherford', '2013-12-25', 'Perempuan', '286 Sibyl Run\nKrystinaborough, TX 11758-1783', 'Buddha', 'Brokerage Clerk', '2023-05-30 05:20:36', '2023-05-30 05:20:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wargas`
--
ALTER TABLE `wargas`
  ADD PRIMARY KEY (`id_warga`),
  ADD UNIQUE KEY `wargas_nik_unique` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wargas`
--
ALTER TABLE `wargas`
  MODIFY `id_warga` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

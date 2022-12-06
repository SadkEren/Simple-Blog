-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Ara 2022, 00:15:26
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `duyuk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'Daily', 1, '2022-12-03 22:22:18', '2022-12-03 22:22:18'),
(2, 'Sports', 2, '2022-12-03 22:22:18', '2022-12-03 22:22:18');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `entries`
--

CREATE TABLE `entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageEntry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `entries`
--

INSERT INTO `entries` (`id`, `title`, `content`, `imageEntry`, `created_at`, `updated_at`, `user_id`, `user_name`, `categories_name`) VALUES
(2, 'Test31', 'Test 1 Test 1Test 1 Test 1Test 1 Test 1Test 1 Test 1', '1670333079-Test31.png', '2022-12-04 16:39:04', '2022-12-06 10:24:39', '1', 'admin', 'Sports'),
(3, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum condimentum tellus non fringilla. Morbi sodales rutrum ante, sit amet semper mi tempor eu. Aliquam ornare non enim eu gravida. Suspendisse potenti. Aenean non ligula at eros posuere', '1670333204-Lorem Ipsum.jpg', '2022-12-04 20:33:18', '2022-12-06 10:26:44', '8', 'Hamlet', 'Daily'),
(4, 'Messi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed eleifend nisl. In ultricies odio tellus, eu bibendum tortor eleifend eu. Curabitur eget dictum libero. Donec enim lacus, porttitor nec nisl cursus, rhoncus scelerisque mi.', '1670333560-Messi.png', '2022-12-06 10:32:40', '2022-12-06 10:32:40', '7', 'Lionel Messi', 'Sports'),
(5, 'WordCup', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed eleifend nisl. In ultricies odio tellus, eu bibendum tortor eleifend eu. Curabitur eget dictum libero. Donec enim lacus, porttitor nec nisl cursus, rhoncus scelerisque mi. Fusce ut rhonc', '1670333583-WordCup.png', '2022-12-06 10:33:03', '2022-12-06 10:33:03', '7', 'Lionel Messi', 'Daily'),
(6, 'Lorem Ipsum', 'Pellentesque mattis a libero nec scelerisque. Pellentesque a maximus nisi. Etiam ut odio sed est malesuada consequat egestas et eros. Proin purus odio, egestas ac porta vel, tincidunt quis augue. Proin et ex neque. Integer molestie eget erat ut porta. Cla', '1670333830-Lorem Ipsum.jpg', '2022-12-06 10:37:10', '2022-12-06 10:37:10', '9', 'Sadık Eren', 'Daily'),
(7, 'Ts', 'Fusce consequat nisi vitae neque porttitor, non sollicitudin lacus placerat. Fusce tempus porttitor fermentum. Curabitur ultrices, erat eget volutpat cursus, velit dolor sollicitudin enim, non viverra massa ipsum a neque. Nulla tempor hendrerit luctus.', '1670333916-Ts.jpg', '2022-12-06 10:38:36', '2022-12-06 10:38:36', '9', 'Sadık Eren', 'Sports'),
(8, 'Admin', 'Phasellus suscipit ullamcorper sollicitudin. Sed consectetur massa nec sodales mattis. Duis mi enim, placerat nec ex at, rhoncus congue lacus. Duis in purus eu leo pellentesque ullamcorper at in elit.', '1670339896-Admin.png', '2022-12-06 12:18:16', '2022-12-06 12:18:16', '1', 'admin', 'Daily'),
(9, 'User Test1', 'Phasellus suscipit ullamcorper sollicitudin. Sed consectetur massa nec sodales mattis. Duis mi enim, placerat nec ex at, rhoncus congue lacus. Duis in purus eu leo pellentesque ullamcorper at in elit. Duis iaculis metus semper, elementum dui id, efficitur', '1670339929-User Test1.png', '2022-12-06 12:18:49', '2022-12-06 12:18:49', '3', 'user', 'Daily');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_14_214736_create_entries_table', 1),
(6, '2022_11_15_134129_add_user_id_to_entries_table', 1),
(7, '2022_11_28_235310_create_categories_table', 1),
(8, '2022_11_29_140041_add_catagories_catagories_id_to_entries_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duyuks` int(11) DEFAULT NULL,
  `ban` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user','editor') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `userImage`, `about`, `from`, `duyuks`, `ban`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$IoBHpCD4x4iqCYAy8ePcnOmbtFk2xf124Zl8Oe.6DoEnAz58G/Nuu', '1670162620-admin.png', 'Web Developer', 'New York', NULL, '1', 'admin', NULL, '2022-12-03 19:25:40', '2022-12-04 11:03:40'),
(2, 'editor', 'editor@gmail.com', NULL, '$2y$10$1izoi1ljycpDqwW6.go75e.Rel8L5Yj.7OdZHGOCTNcT0vL0eTrFG', '1670175123-editor.png', 'Pro Football Player , 7 times Ballon D\'ore Ödülü', 'New York', NULL, '1', 'editor', NULL, '2022-12-03 19:25:40', '2022-12-04 14:32:03'),
(3, 'user', 'user@gmail.com', NULL, '$2y$10$tKc7MrnbNAX1V7DfVwblQeo1uDQMQaQ8h8nWZqVndfhNWgDNKhiw6', '1670182525-user.png', 'Pro Football Player , 7 times Ballon D\'ore Ödülü', 'New York123123', NULL, '0', 'user', NULL, '2022-12-03 19:25:40', '2022-12-04 16:35:25'),
(7, 'Lionel Messi', 'messi@gmail.com', NULL, '$2y$10$PPhdp4S6nKjFduOq/rQQjOp/2mMjb6II.jO6RaXgi48QNh./3LA2C', '1670333379-Lionel Messi.png', 'Pro Football Player , 7 times Ballon D\'ore Trophy', 'Argentina', NULL, '1', 'user', NULL, '2022-12-04 16:12:54', '2022-12-06 10:29:39'),
(8, 'Hamlet', 'ham@gmail.com', NULL, '$2y$10$suZkY.1fiLCYPhFa5S8evO5t6WUeuQH2ljeZXDgzvcXDZ.fjudKiO', '1670333124-Hamlet.jpg', 'I am book.', 'England', NULL, '1', 'user', NULL, '2022-12-04 20:33:10', '2022-12-06 10:25:24'),
(9, 'Sadık Eren', 'sadikeren61@gmail.com', NULL, '$2y$10$FWeD46jO7wXri.ORsreowOyYoU55hYVZcNmPx17UBdxBZcXmN4hzu', '1670333738-Sadık Eren.jpg', 'Web Developer', 'Kaldradya', NULL, '1', 'user', NULL, '2022-12-06 10:35:04', '2022-12-06 10:35:38');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `entries`
--
ALTER TABLE `entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

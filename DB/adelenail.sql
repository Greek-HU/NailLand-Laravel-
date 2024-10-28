-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Okt 28. 15:21
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `adelenail`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `eyelashes_groupment`
--

CREATE TABLE `eyelashes_groupment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `opp_id` bigint(20) UNSIGNED NOT NULL,
  `price_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `eyelashes_groupment`
--

INSERT INTO `eyelashes_groupment` (`id`, `type_id`, `opp_id`, `price_id`) VALUES
(1, 1, 1, 15),
(2, 1, 2, 19),
(3, 1, 3, 20),
(4, 1, 4, 21),
(5, 1, 5, 22),
(6, 1, 6, 23),
(7, 2, 1, 9),
(8, 2, 2, 13),
(9, 2, 3, 15),
(10, 2, 4, 17),
(11, 2, 5, 18),
(12, 2, 6, 19),
(13, 2, 7, 6);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `eyelashes_opportunities`
--

CREATE TABLE `eyelashes_opportunities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `eyelashes_opportunities`
--

INSERT INTO `eyelashes_opportunities` (`id`, `option`) VALUES
(1, '1D classic'),
(2, '2D classic'),
(3, '3D light volume'),
(4, '4D light volume'),
(5, '5D russian volume'),
(6, '6D russian volume'),
(7, 'Utó pótlás szett');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `eyelashes_types`
--

CREATE TABLE `eyelashes_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `eyelashes_types`
--

INSERT INTO `eyelashes_types` (`id`, `type`) VALUES
(1, 'Építés'),
(2, 'Töltés');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
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
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(84, '2014_10_12_000000_create_users_table', 1),
(85, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(86, '2019_08_19_000000_create_failed_jobs_table', 1),
(87, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(88, '2024_04_23_091918_create_nail_type_table', 1),
(89, '2024_04_26_085559_create_nail_opportunities_table', 1),
(90, '2024_05_30_112725_create_prices_table', 1),
(91, '2024_05_30_112725_create_sizes_table', 1),
(92, '2024_05_30_124218_create_nails_groupment_table', 1),
(93, '2024_06_01_103017_create_opp_size_table', 1),
(94, '2024_07_02_082654_create_comment_table', 1),
(95, '2024_10_17_124400_create_eyelashes_opportunities_table', 1),
(96, '2024_10_17_124504_create_eyelashes_types_table', 1),
(97, '2024_10_17_133246_create_eyelashes_groupment_table', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nails_groupment`
--

CREATE TABLE `nails_groupment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `opp_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `nails_groupment`
--

INSERT INTO `nails_groupment` (`id`, `type_id`, `opp_id`, `size_id`, `price_id`) VALUES
(1, 1, 11, 1, 10),
(2, 1, 11, 2, 11),
(3, 1, 11, 3, 12),
(4, 1, 11, 4, 14),
(5, 1, 11, 5, 16),
(6, 2, 12, 1, 9),
(7, 2, 12, 2, 10),
(8, 2, 12, 3, 11),
(9, 2, 12, 4, 12),
(10, 2, 12, 5, 14);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nail_opportunities`
--

CREATE TABLE `nail_opportunities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `nail_opportunities`
--

INSERT INTO `nail_opportunities` (`id`, `option`, `created_at`, `updated_at`) VALUES
(1, 'Géllakk', '2024-10-17 14:59:31', NULL),
(2, 'Prémium erősített géllakk', '2024-10-17 14:59:31', NULL),
(3, 'Teli kő', '2024-10-17 14:59:30', NULL),
(4, 'Festett minta', '2024-10-17 14:59:32', NULL),
(5, 'Beépített francia vég babyboomer', '2024-10-17 14:59:33', NULL),
(6, 'Műköröm eltávolítás', '2024-10-17 14:59:33', NULL),
(7, 'Géllakk eltávolítás', '2024-10-17 14:59:34', NULL),
(8, 'Eltávolítás új szett esetén', '2024-10-17 14:59:34', NULL),
(9, 'Műköröm pótlás garancián felül', '2024-10-17 14:59:35', NULL),
(10, 'Parafinos kézápolás', '2024-10-17 14:59:35', NULL),
(11, 'Zselé építés', '2024-10-17 15:01:13', NULL),
(12, 'Zselé töltés', '2024-10-17 15:01:14', NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nail_type`
--

CREATE TABLE `nail_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `img_place` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `nail_type`
--

INSERT INTO `nail_type` (`id`, `type`, `img_place`, `created_at`, `updated_at`) VALUES
(1, 'Műkörömépítés', 'img/beautiful.jpg', '2024-10-17 14:56:31', '2024-10-17 14:56:32'),
(2, 'Géllakk', 'img/uyj-min.jpg', '2024-10-17 14:56:33', '2024-10-17 14:56:33'),
(3, 'Díszítés', 'img/ersg-min.jpg', '2024-10-17 14:56:34', '2024-10-17 14:56:35'),
(4, 'Eltávolítás', 'img/clean.jpg', '2024-10-17 14:56:35', '2024-10-17 14:56:36');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `opp_size`
--

CREATE TABLE `opp_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `opp_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
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
-- Tábla szerkezet ehhez a táblához `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `prices`
--

INSERT INTO `prices` (`id`, `amount`, `created_at`, `updated_at`) VALUES
(1, '500', NULL, NULL),
(2, '1000', NULL, NULL),
(3, '2000', NULL, NULL),
(4, '3000', NULL, NULL),
(5, '3500', NULL, NULL),
(6, '4000', NULL, NULL),
(7, '4800', NULL, NULL),
(8, '5300', NULL, NULL),
(9, '6000', NULL, NULL),
(10, '6500', NULL, NULL),
(11, '7000', NULL, NULL),
(12, '7500', NULL, NULL),
(13, '8000', NULL, NULL),
(14, '8500', NULL, NULL),
(15, '9000', NULL, NULL),
(16, '9500', NULL, NULL),
(17, '10000', NULL, NULL),
(18, '11000', NULL, NULL),
(19, '12000', NULL, NULL),
(20, '13000', NULL, NULL),
(21, '14000', NULL, NULL),
(22, '15000', NULL, NULL),
(23, '16000', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'S', '2024-10-17 14:59:57', NULL),
(2, 'M', '2024-10-17 14:59:57', NULL),
(3, 'L', '2024-10-17 14:59:58', NULL),
(4, 'XL', '2024-10-17 14:59:59', NULL),
(5, 'XXL', '2024-10-17 14:59:59', NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phoneNum` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `comment_email_unique` (`email`);

--
-- A tábla indexei `eyelashes_groupment`
--
ALTER TABLE `eyelashes_groupment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eyelashes_groupment_type_id_foreign` (`type_id`),
  ADD KEY `eyelashes_groupment_opp_id_foreign` (`opp_id`),
  ADD KEY `eyelashes_groupment_price_id_foreign` (`price_id`);

--
-- A tábla indexei `eyelashes_opportunities`
--
ALTER TABLE `eyelashes_opportunities`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `eyelashes_types`
--
ALTER TABLE `eyelashes_types`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `nails_groupment`
--
ALTER TABLE `nails_groupment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nails_groupment_type_id_foreign` (`type_id`),
  ADD KEY `nails_groupment_opp_id_foreign` (`opp_id`),
  ADD KEY `nails_groupment_size_id_foreign` (`size_id`),
  ADD KEY `nails_groupment_price_id_foreign` (`price_id`);

--
-- A tábla indexei `nail_opportunities`
--
ALTER TABLE `nail_opportunities`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `nail_type`
--
ALTER TABLE `nail_type`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `opp_size`
--
ALTER TABLE `opp_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opp_size_opp_id_foreign` (`opp_id`),
  ADD KEY `opp_size_size_id_foreign` (`size_id`);

--
-- A tábla indexei `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- A tábla indexei `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- A tábla indexei `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `eyelashes_groupment`
--
ALTER TABLE `eyelashes_groupment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT a táblához `eyelashes_opportunities`
--
ALTER TABLE `eyelashes_opportunities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `eyelashes_types`
--
ALTER TABLE `eyelashes_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT a táblához `nails_groupment`
--
ALTER TABLE `nails_groupment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `nail_opportunities`
--
ALTER TABLE `nail_opportunities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT a táblához `nail_type`
--
ALTER TABLE `nail_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `opp_size`
--
ALTER TABLE `opp_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT a táblához `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `eyelashes_groupment`
--
ALTER TABLE `eyelashes_groupment`
  ADD CONSTRAINT `eyelashes_groupment_opp_id_foreign` FOREIGN KEY (`opp_id`) REFERENCES `eyelashes_opportunities` (`id`),
  ADD CONSTRAINT `eyelashes_groupment_price_id_foreign` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`),
  ADD CONSTRAINT `eyelashes_groupment_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `eyelashes_types` (`id`);

--
-- Megkötések a táblához `nails_groupment`
--
ALTER TABLE `nails_groupment`
  ADD CONSTRAINT `nails_groupment_opp_id_foreign` FOREIGN KEY (`opp_id`) REFERENCES `nail_opportunities` (`id`),
  ADD CONSTRAINT `nails_groupment_price_id_foreign` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`),
  ADD CONSTRAINT `nails_groupment_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`),
  ADD CONSTRAINT `nails_groupment_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `nail_type` (`id`);

--
-- Megkötések a táblához `opp_size`
--
ALTER TABLE `opp_size`
  ADD CONSTRAINT `opp_size_opp_id_foreign` FOREIGN KEY (`opp_id`) REFERENCES `nail_opportunities` (`id`),
  ADD CONSTRAINT `opp_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

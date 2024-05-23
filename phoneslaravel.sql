-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 23-05-2024 a les 10:21:10
-- Versió del servidor: 10.4.32-MariaDB
-- Versió de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `phoneslaravel`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `failed_jobs`
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
-- Estructura de la taula `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_21_160323_create_phones_table', 1),
(6, '2024_05_21_160407_create_subscriptions_table', 1),
(7, '2024_05_21_161746_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `personal_access_tokens`
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
-- Estructura de la taula `phones`
--

CREATE TABLE `phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `imei` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `phones`
--

INSERT INTO `phones` (`id`, `model`, `description`, `price`, `stock`, `image`, `manufacturer`, `release_date`, `os`, `imei`, `created_at`, `updated_at`) VALUES
(4, 'iPhone 13 Pro', 'El iPhone 13 Pro ofrece un rendimiento increíblemente rápido, una cámara Pro más avanzada y la pantalla más brillante en un iPhone.', 999.99, 50, 'https://d2e6ccujb3mkqf.cloudfront.net/9a6ca30b-05f7-4a92-8165-c701c6913f5d-1_bc0f9ce3-57fe-4707-8cbd-9c334212a14d.jpg', 'Apple', '2023-09-24', 'iOS', '35925507836901', NULL, NULL),
(5, 'Samsung Galaxy S21', 'El Samsung Galaxy S21 ofrece una pantalla Dynamic AMOLED 2X, cámara de alta resolución y una batería de larga duración.', 799.99, 30, 'https://media3.allzone.es/1156530-large_default/smartphones-samsung-galaxy-s21-fe-g990-5g-6gb-ram-128gb-gris-sams21feg990128greu.jpg', 'Samsung', '2023-01-29', 'Android', '35225507836902', NULL, NULL),
(6, 'iPhone 12 Pro', 'El iPhone 12 Pro es un teléfono inteligente diseñado y fabricado por Apple Inc. Es parte de la serie iPhone 12, anunciada el 13 de octubre de 2020, junto con el iPhone 12 mini, el iPhone 12 y el iPhone 12 Pro Max.', 999.99, 50, 'https://d2e6ccujb3mkqf.cloudfront.net/9a6ca30b-05f7-4a92-8165-c701c6913f5d-1_bc0f9ce3-57fe-4707-8cbd-9c334212a14d.jpg', 'Apple Inc.', '2020-10-23', 'iOS', '123456789012345', '2024-05-23 07:36:25', '2024-05-23 07:36:25'),
(7, 'Samsung Galaxy S21 Ultra', 'El Samsung Galaxy S21 Ultra es un teléfono inteligente Android fabricado por Samsung Electronics como parte de la serie Samsung Galaxy S21. Fue anunciado el 14 de enero de 2021 junto con el Galaxy S21 y el Galaxy S21+. Es el sucesor del Galaxy S20 Ultra.', 1099.99, 30, 'https://d2e6ccujb3mkqf.cloudfront.net/9a6ca30b-05f7-4a92-8165-c701c6913f5d-1_bc0f9ce3-57fe-4707-8cbd-9c334212a14d.jpg', 'Samsung Electronics', '2021-01-29', 'Android', '987654321098765', '2024-05-23 07:36:25', '2024-05-23 07:36:25'),
(20, 'iPhone 12 Pro', 'El iPhone 12 Pro es un teléfono inteligente diseñado y fabricado por Apple Inc. Es parte de la serie iPhone 12, anunciada el 13 de octubre de 2020, junto con el iPhone 12 mini, el iPhone 12 y el iPhone 12 Pro Max.', 999.99, 50, 'https://d2e6ccujb3mkqf.cloudfront.net/9a6ca30b-05f7-4a92-8165-c701c6913f5d-1_bc0f9ce3-57fe-4707-8cbd-9c334212a14d.jpg', 'Apple Inc.', '2020-10-23', 'iOS', '123456789012345', '2024-05-23 07:54:41', '2024-05-23 07:54:41');

-- --------------------------------------------------------

--
-- Estructura de la taula `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `starting_date` datetime NOT NULL,
  `expiring_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `userID`, `active`, `starting_date`, `expiring_date`, `created_at`, `updated_at`) VALUES
(8, 9, 1, '2024-05-23 08:02:11', '2024-08-21 08:02:11', '2024-05-23 06:02:11', '2024-05-23 06:03:20');

-- --------------------------------------------------------

--
-- Estructura de la taula `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phoneID` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_amount` decimal(6,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('guest','user','admin') NOT NULL DEFAULT 'guest',
  `subscribed` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `subscribed`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Jan Blanco Robles', 'janblanco1911@gmail.com', NULL, '$2y$10$UfW0578W.cM4aaJW1NRlz.kCo2Sv4xhiJK0cWQ/WjVlt77Q3K9Izq', 'admin', 0, NULL, '2024-05-22 22:22:02', '2024-05-22 22:22:02'),
(5, 'Ayoub', 'ayoub1911@gmail.com', NULL, '$2y$10$v/KR06QKHRtp/UE79UOJTOPdQk0wdLAGdi/OEcAvgzUGqDu3ZuMZi', 'guest', 0, NULL, '2024-05-22 22:30:15', '2024-05-22 22:30:15'),
(6, 'sergi lopez lopez', 'asdasdasda@gmail.com', NULL, '$2y$10$RFRtdEtnmjUOxRHTYi1FlO7SzzXL.ZmWT5WlaDRx4aY7coyQvE3UW', 'user', 0, NULL, '2024-05-22 22:31:42', '2024-05-22 22:31:42'),
(9, 'Toni', 'toni@gmail.com', NULL, '$2y$10$5ApaLMEOkPvpXAbcV7QjzeTeMmTXLZbQyUuo71HGDPnRjUhfFDqqC', 'user', 0, NULL, '2024-05-23 06:02:11', '2024-05-23 06:02:11');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índexs per a la taula `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índexs per a la taula `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índexs per a la taula `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_userid_foreign` (`userID`);

--
-- Índexs per a la taula `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_phoneid_foreign` (`phoneID`);

--
-- Índexs per a la taula `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la taula `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `phones`
--
ALTER TABLE `phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la taula `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la taula `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la taula `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Restriccions per a la taula `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_phoneid_foreign` FOREIGN KEY (`phoneID`) REFERENCES `phones` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

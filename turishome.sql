-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2025 a las 17:13:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turishome`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamentos`
--

CREATE TABLE `apartamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `codigo_postal` varchar(255) NOT NULL,
  `precio_venta` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `apartamentos`
--

INSERT INTO `apartamentos` (`id`, `direccion`, `ciudad`, `pais`, `codigo_postal`, `precio_venta`, `created_at`, `updated_at`) VALUES
(1, 'Av. Siempre Viva 742', 'Springfield', 'Estados Unidos', '12345', 120000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(2, 'Calle Falsa 123', 'Madrid', 'España', '28080', 95000.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(3, 'Rua das Flores 45', 'Lisboa', 'Portugal', '1000-123', 80000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(4, 'Via Roma 10', 'Roma', 'Italia', '00100', 150000.75, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(5, 'Unter den Linden 5', 'Berlín', 'Alemania', '10117', 132500.99, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(6, 'Boulevard Saint-Michel 12', 'París', 'Francia', '75005', 175000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(7, 'Oxford Street 221B', 'Londres', 'Reino Unido', 'W1D 1NN', 200000.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(8, 'Avenida Paulista 1578', 'São Paulo', 'Brasil', '01310-200', 110000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(9, 'King Street 45', 'Toronto', 'Canadá', 'M5H 1J8', 140000.75, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(10, 'Soi Sukhumvit 24', 'Bangkok', 'Tailandia', '10110', 90000.99, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(11, 'Calle 50 #20-30', 'Bogotá', 'Colombia', '110111', 95000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(12, 'Avenida Libertador 1001', 'Buenos Aires', 'Argentina', 'C1425', 125000.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(13, 'Queen Street 15', 'Auckland', 'Nueva Zelanda', '1010', 130000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(14, 'Kaiserstrasse 89', 'Viena', 'Austria', '1010', 145000.75, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(15, 'Laugavegur 10', 'Reikiavik', 'Islandia', '101', 160000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(16, 'Rue de la Paix 7', 'Bruselas', 'Bélgica', '1000', 115000.99, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(17, 'Via della Conciliazione 25', 'Vaticano', 'Ciudad del Vaticano', '00120', 180000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(18, 'Tverskaya Street 3', 'Moscú', 'Rusia', '125009', 140000.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(19, 'Jalan Sudirman 50', 'Jakarta', 'Indonesia', '10220', 95000.75, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(20, 'Elgin Street 21', 'Edimburgo', 'Reino Unido', 'EH2 4PA', 120000.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `apartamento_id` bigint(20) UNSIGNED NOT NULL,
  `gasto_factura_sin_iva` decimal(8,2) NOT NULL,
  `concepto_gasto` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `nif_proveedor` varchar(255) DEFAULT NULL,
  `iva` decimal(5,2) DEFAULT NULL,
  `total_iva` date DEFAULT NULL,
  `total_gasto` decimal(8,2) NOT NULL,
  `pagado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intermediarios`
--

CREATE TABLE `intermediarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `comision` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `intermediarios`
--

INSERT INTO `intermediarios` (`id`, `nombre`, `apellidos`, `correo_electronico`, `telefono`, `comision`, `created_at`, `updated_at`) VALUES
(1, 'Carlos', 'González Márquez', 'carlos1@correo.com', '600111111', 10.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(2, 'Laura', 'Sánchez Ruiz', 'laura2@correo.com', '600111112', 12.75, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(3, 'Miguel', 'Ramírez Soto', 'miguel3@correo.com', '600111113', 8.30, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(4, 'Sofía', 'Martínez Díaz', 'sofia4@correo.com', '600111114', 11.90, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(5, 'Javier', 'Moreno Castro', 'javier5@correo.com', '600111115', 9.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(6, 'Valentina', 'Navarro Reyes', 'valentina6@correo.com', '600111116', 13.25, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(7, 'Luis', 'Pérez Gallardo', 'luis7@correo.com', '600111117', 10.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(8, 'Camila', 'Rojas Fernández', 'camila8@correo.com', '600111118', 7.45, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(9, 'Andrés', 'Delgado Vidal', 'andres9@correo.com', '600111119', 14.10, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(10, 'Isabela', 'Romero Peña', 'isabela10@correo.com', '600111120', 9.75, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(11, 'Daniel', 'Molina Torres', 'daniel11@correo.com', '600111121', 11.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(12, 'Paula', 'Carrillo Lozano', 'paula12@correo.com', '600111122', 10.30, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(13, 'Diego', 'Ortega Salas', 'diego13@correo.com', '600111123', 12.10, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(14, 'Lucía', 'Cabrera Cano', 'lucia14@correo.com', '600111124', 6.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(15, 'Ángel', 'Ibáñez Vera', 'angel15@correo.com', '600111125', 13.60, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(16, 'Elena', 'Blanco León', 'elena16@correo.com', '600111126', 7.90, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(17, 'Santiago', 'Fuentes Bravo', 'santiago17@correo.com', '600111127', 8.80, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(18, 'Marina', 'Aguilar Nieto', 'marina18@correo.com', '600111128', 10.20, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(19, 'Iván', 'Herrera Campos', 'ivan19@correo.com', '600111129', 9.35, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(20, 'Carla', 'Serrano Domínguez', 'carla20@correo.com', '600111130', 12.95, '2025-05-19 21:57:32', '2025-05-19 21:57:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_17_021956_create_apartamentos_table', 1),
(5, '2025_05_17_025036_create_intermediarios_table', 1),
(6, '2025_05_17_025048_create_tarifas_table', 1),
(7, '2025_05_17_025101_create_gastos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fbLCMuTb3xhU4vbvhW97eMiva72WrsQ8Pe7qRXAV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMTBFbmlDVThOZUtKZmFZNmhVZHA3VEN6cUljc200OGRSdTdQckxaUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGFydGFtZW50b3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1747729883),
('Q58cwLdG6ayszPnEw2SrjgLi6wKJLA8kZd6oPRPg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQmMxaFN4OHk1ODBHc25mRUhBbXo3ODFsUkRVMjFLbUdDdVZieWhyeCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBhcnRhbWVudG9zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1747739671);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_tarifa` varchar(255) NOT NULL,
  `tarifa_aplicada` decimal(5,2) NOT NULL,
  `coste_tarifa` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`id`, `nombre_tarifa`, `tarifa_aplicada`, `coste_tarifa`, `created_at`, `updated_at`) VALUES
(2, 'Tarifa Premium', 20.00, 15.75, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(3, 'Tarifa Económica', 7.50, 6.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(4, 'Tarifa Business', 30.00, 22.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(5, 'Tarifa Nocturna', 12.00, 10.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(6, 'Tarifa Fin de Semana', 18.00, 14.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(7, 'Tarifa Festivos', 25.00, 20.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(8, 'Tarifa Mensual', 300.00, 250.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(9, 'Tarifa Estudiante', 8.00, 6.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(10, 'Tarifa Familiar', 22.00, 17.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(11, 'Tarifa Último Minuto', 9.50, 7.80, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(12, 'Tarifa Madrugador', 11.00, 9.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(13, 'Tarifa Corporativa', 35.00, 28.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(14, 'Tarifa Especial', 16.00, 12.75, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(15, 'Tarifa por Hora', 5.00, 4.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(16, 'Tarifa por Día', 45.00, 35.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(17, 'Tarifa por Semana', 200.00, 160.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(18, 'Tarifa de Verano', 19.00, 15.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(19, 'Tarifa de Invierno', 17.50, 13.50, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(20, 'Tarifa de Primavera', 15.00, 12.00, '2025-05-19 21:57:32', '2025-05-19 21:57:32'),
(21, 'tarifa inventada', 12.00, 123.00, '2025-05-19 22:21:34', '2025-05-19 22:21:34'),
(22, 'tarifa inventada2', 12.00, 32043.00, '2025-05-19 22:22:17', '2025-05-19 22:22:17'),
(23, 'tarifa inventad3', 90.00, 12.00, '2025-05-19 22:24:53', '2025-05-19 22:24:53'),
(24, 'tarifa inventadasda', 100.00, 415.00, '2025-05-19 22:25:14', '2025-05-19 22:25:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ruben', 'ruben@gmail.com', NULL, '$2y$12$L.SUj6Wut5icIX/bLKIixeYx1PmlqUN0DoPAsUSubOVJA7qMpu55u', NULL, NULL, NULL),
(2, 'Antonio', 'antonio.boronat@gmail.com', NULL, '$2y$12$L.SUj6Wut5icIX/bLKIixeYx1PmlqUN0DoPAsUSubOVJA7qMpu55u', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gastos_apartamento_id_foreign` (`apartamento_id`);

--
-- Indices de la tabla `intermediarios`
--
ALTER TABLE `intermediarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `intermediarios`
--
ALTER TABLE `intermediarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_apartamento_id_foreign` FOREIGN KEY (`apartamento_id`) REFERENCES `apartamentos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

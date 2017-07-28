-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2017 a las 17:01:50
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Calles', 'calles', '2017-07-27 18:10:24', '2017-07-27 18:10:24'),
(2, 'Bacheos', 'bacheos', '2017-07-27 18:10:32', '2017-07-27 18:10:32'),
(3, 'Luminaria', 'luminaria', '2017-07-27 18:10:38', '2017-07-27 18:10:38'),
(4, 'Tránsito', 'transito', '2017-07-27 18:10:57', '2017-07-27 18:10:57'),
(5, 'Agua y Saneamiento', 'agua-y-saneamiento', '2017-07-28 13:32:52', '2017-07-28 13:32:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `original_name`, `item_id`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'WhatsApp Image 2017-07-18 at 09.21.55.jpeg', '1', 'whatsapp-image-2017-07-18-at-092155.jpeg', '2017-07-18 18:44:03', '2017-07-18 18:44:03'),
(2, 'WhatsApp Image 2017-07-18 at 09.30.25.jpeg', '1', 'whatsapp-image-2017-07-18-at-093025.jpeg', '2017-07-18 18:44:53', '2017-07-18 18:44:53'),
(3, '1de88543-cdcf-4c92-841f-2640e00af5c9.jpg', '3', '1de88543-cdcf-4c92-841f-2640e00af5c9.jpg', '2017-07-28 13:40:31', '2017-07-28 13:40:31'),
(4, '3_asfalto.jpg', '4', '3asfalto.jpg', '2017-07-28 14:16:09', '2017-07-28 14:16:09'),
(5, '4f8c26a2-b8be-41f5-b375-8a686257d714.jpg', '5', '4f8c26a2-b8be-41f5-b375-8a686257d714.jpg', '2017-07-28 14:18:36', '2017-07-28 14:18:36'),
(6, '59c4896f-8852-4f57-bf78-d7979024c576_1.jpg', '5', '59c4896f-8852-4f57-bf78-d7979024c5761.jpg', '2017-07-28 14:18:36', '2017-07-28 14:18:36'),
(7, 'piedras_barrio_blanco_1.jpg', '6', 'piedrasbarrioblanco1.jpg', '2017-07-28 14:20:14', '2017-07-28 14:20:14'),
(8, 'piedras_barrio_blanco_2.jpg', '6', 'piedrasbarrioblanco2.jpg', '2017-07-28 14:20:14', '2017-07-28 14:20:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `lng` decimal(11,7) DEFAULT NULL,
  `lat` decimal(11,7) DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `titulo`, `foto`, `categoria`, `descripcion`, `fecha_inicio`, `fecha_fin`, `lng`, `lat`, `slug`, `created_at`, `updated_at`, `deleted_at`, `activo`) VALUES
(3, 'Limpieza de desagues', NULL, 'agua-y-saneamiento', 'Se realizó la limpieza y el destape de las cámaras que estaban obstruidas por el barro acumulado en las calles Mastropietro, 245, 247 y Angueira. También se realizó el zanjeo y colocación de tubos en el cruce de la calle 247.\r\n\r\nAdemás se arregló un tubo sobre la calle Angueira que estaba visiblemente dañado. Con toda esta obra se va a permitir la evacuación del agua de toda la zona los días de lluvia. El trabajo era pedido que los vecinos venían solicitando a la Secretaría y a la que se le pudo dar una respuesta satisfactoria.', NULL, NULL, '-59.0919828', '-35.1638452', 'limpieza-de-desagues', '2017-07-28 13:40:30', '2017-07-28 13:40:35', NULL, 1),
(4, 'Pavimento en la calle 233', NULL, 'calles', 'En cuanto al pavimento de hormigón nuevo, que dota a los vecinos de la calle 233 entre Cardoner y Rivadavia del Barrio Virgen de Lujan en particular y quienes diariamente utilizan esas calles, mejora la circulación y resuelve los desagües pluviales, completando el proyecto original con una arteria más de circulación mejorando sustancialmente la calidad de vida de los lobenses con más calles pavimentadas enmarcado dentro del plan de pavimentado de calles que se está llevando delante de manera óptima con los requerimientos que cada obra merece.', NULL, NULL, '-59.0952873', '-35.1696513', 'pavimento-en-la-calle-233', '2017-07-28 14:16:09', '2017-07-28 14:16:12', NULL, 1),
(5, 'Puente peatonal sobre el puente de la calle Emilio Castro', NULL, 'calles', 'Con la creación del puente peatonal en la calle Emilio Castro, se concreta una obra que brindará a los vecinos de Empalme Lobos un cruce más seguro y reducirá de forma importante los riesgos de accidentes de tránsito provocados por no contar por años con un acceso peatonal adecuado, a lo que se suma el ordenamiento de tránsito vehicular que dará la flamante rotonda de cinco esquinas.', NULL, NULL, '-59.0952873', '-35.1517492', 'puente-peatonal-sobre-el-puente-de-la-calle-emilio-castro', '2017-07-28 14:18:35', '2017-07-28 14:18:39', NULL, 1),
(6, 'Limpieza de calles en el Barrio de la Escuela 7', NULL, 'calles', 'Como parte de los trabajos desarrollados por la Secretaría de Obras y Servicios Públicos del Plan de Mejoramiento de Calles que se lleva a cabo en calles internas de los diferentes barrios del distrito, se estuvo trabajando en esta semana en el Barrio Blanco. Los arreglos son para mejorar su tránsito, sobre todo en días lluviosos, y el trabajo que se hizo fue de entoscada, despliegue de piedras para consolidar el suelo, destape de cañerías y cuneteada.', NULL, NULL, '-59.1009307', '-35.1508807', 'limpieza-de-calles-en-el-barrio-de-la-escuela-7', '2017-07-28 14:20:14', '2017-07-28 14:20:16', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2015_08_07_125128_CreateImages', 1),
(8, '2017_06_24_184244_create_items_table', 1),
(10, '2017_07_19_153511_agregar_estado_itemstable', 2),
(11, '2017_07_25_145137_create_categorias_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `activo`) VALUES
(1, 'Federico Lucesoli', 'fedelucesoli@gmail.com', '$2y$10$LswDYrZA/x0u.ns8dH69ouVb2HUtIl3U.gIDHVcixfDUp/Fg5fD56', 'NucWUpI9Ib3uHK4mM4DQ27clwSoUJGCP9fwxpdXrRn9xm4stzHvCrajpWOeO', '2017-07-18 18:26:17', '2017-07-18 18:26:17', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_slug_unique` (`slug`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

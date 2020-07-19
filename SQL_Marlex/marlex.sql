-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2020 a las 09:33:49
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `marlex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(5) NOT NULL,
  `codigo_raiz` int(5) NOT NULL,
  `codigo_reciente` int(10) DEFAULT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` int(8) DEFAULT NULL,
  `nota` varchar(300) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `codigo_raiz`, `codigo_reciente`, `nombre`, `apellido`, `telefono`, `nota`, `condicion`) VALUES
(1, 728, 0, 'Maximo', 'Ortiz', 0, '', 1),
(2, 751, 0, 'Victor ', 'Gomez', 0, '', 1),
(3, 727, 733, 'Juan Carlos', 'Almengor', 47064577, '', 1),
(4, 729, 0, 'Ambrocio', 'Jimenes', 0, '', 1),
(5, 730, 0, 'Pavel', 'Bamaca', 0, '', 1),
(6, 731, 0, 'Josue', 'Chiti', 58576037, '', 1),
(7, 732, 0, 'Nelson ', 'Orozco', 52728489, '', 1),
(8, 734, 0, 'Angelo', 'Esposito', 0, '', 1),
(9, 735, 0, 'Jener', 'Velasquez', 33291607, '', 1),
(10, 737, 0, 'Henry', 'Mauricio', 30900465, '', 1),
(11, 427, 738, 'Julio', 'Melendes', 0, '', 1),
(12, 739, 0, 'Jose ', 'Orozco', 0, '', 1),
(13, 740, 0, 'Baudilio', 'Perez', 50561494, '', 1),
(14, 741, 0, 'Juan Diego', 'Orozco', 0, '', 1),
(15, 742, 0, 'Dina ', 'Chavez', 0, '', 1),
(16, 743, 0, 'Marcos', 'Sanchez', 49539220, '', 1),
(17, 744, 0, 'Vinicio', 'Aguilar', 55697957, '', 1),
(18, 745, 0, 'Belizario', 'Gabriel', 0, '', 1),
(19, 747, 0, 'Ofelia', 'de leon', 0, '', 1),
(20, 749, 0, 'Roberto', 'Fuentes', 55214240, '', 1),
(21, 752, 0, 'Marco ', 'Leonardo', 47287144, '', 1),
(22, 754, 0, 'Abel', 'Orozco', 0, '', 1),
(23, 755, 0, 'Oliver', 'Garcia', 0, '', 1),
(24, 756, 0, 'Elder ', 'Garcia', 0, '', 1),
(25, 757, 0, 'Alejandro ', 'Miranda', 0, '', 1),
(26, 758, 0, 'Mario ', 'Bautista', 0, '', 1),
(27, 759, 0, 'Gerson', 'Juarez', 0, '', 1),
(28, 760, 0, 'Juan Leonardo', 'Lopez', 0, '', 1),
(29, 761, 0, 'Amignady', 'Godinez', 0, '', 1),
(30, 762, 0, 'Mario', 'Lopez', 0, '', 1),
(31, 763, 0, 'Dr.Melin', 'Lopez', 0, '', 1),
(32, 764, 0, 'Faustino ', 'Velasquez', 0, '', 1),
(33, 765, 0, 'Hainer', 'Lorenzo', 0, '', 1),
(34, 767, 0, 'Juan Jose', 'Calderon', 58801010, '', 1),
(35, 768, 0, 'Armando', 'Fuentes', 0, '', 1),
(36, 769, 0, 'Lic. Victor', 'Cifuentes', NULL, NULL, 1),
(37, 770, 0, 'Carlos ', 'Velasquez', 55527892, '', 1),
(38, 771, 0, 'Rafael', 'Velasquez', 0, '', 1),
(39, 772, 0, 'Elder Santizo', 'Escobar', 0, '', 1),
(40, 773, 0, 'Lic. Yonatan ', 'Barrios', 58926659, '', 1),
(41, 774, 0, 'Gregorio', 'Aguilon', 0, '', 1),
(42, 775, 0, 'Martin ', 'Cardona', 0, '', 1),
(43, 776, 0, 'Delmar', 'Morales', 54823245, '', 1),
(44, 778, 0, 'Selvin', 'Velasquez', 0, '', 1),
(45, 779, 0, 'Fernando', 'Calderon', 0, '', 1),
(46, 780, 0, 'Juan', 'Calderon', 0, '', 1),
(47, 783, 0, 'Luis Enrique', 'Fuentes Lopez', 0, '', 1),
(48, 786, 829, 'Guillermo', 'Velasquez', 41038322, '', 1),
(49, 787, 0, 'Marvin', ' Navarro', 0, '', 1),
(50, 788, 0, 'Gustavo', 'Sai', 0, '', 1),
(51, 789, 0, 'Miriam', 'Lopez', 0, '', 1),
(52, 790, 0, 'Alexander ', 'Lopez', 0, '', 1),
(53, 541, 791, 'Josue', 'Miranda', 0, '', 1),
(54, 792, 0, 'Orlando', 'Godinez', 0, '', 1),
(55, 793, 0, 'Juan Jose', 'Hijo ', 0, '', 1),
(56, 796, 0, 'Luis', 'Lopez', 0, '', 1),
(57, 797, 826, 'Antonio ', 'Bravo', 33450570, '', 1),
(58, 798, 0, 'Lic. Rodolfo ', 'Godinez', 47699702, '', 1),
(59, 799, 0, 'Roxana ', 'Godinez', 0, '', 1),
(60, 800, 0, 'Gumercindo', 'Bautista', 0, '', 1),
(61, 801, 0, 'Pastor Ahizer ', 'Gomez', 50027202, '', 1),
(62, 802, 0, 'Rerdin', 'Cordoba', 53810882, '', 1),
(63, 803, 0, 'Osiel', 'Cardona', 53757936, '', 1),
(64, 804, 0, 'Carlos ', 'PeÃ±a', 57302249, '', 1),
(65, 805, 0, 'Gilverto ', 'Merida', 54278130, '', 1),
(66, 806, 0, 'Lic. Oslando', 'Ramirez', 41022331, '', 1),
(67, 807, 0, 'Isaias', 'Navarro', 50134799, '', 1),
(68, 808, 0, 'Fermin', 'Perez', 0, '', 1),
(69, 809, 0, 'Udine ', 'Fuentes', 58928312, '', 1),
(70, 810, 0, 'Marvin ', 'Navarro', 42156017, '', 1),
(71, 811, 0, 'Lic. Rolando ', 'Morales', 55698907, '', 1),
(72, 812, 0, 'Santiago ', 'Lopez', 46639064, '', 1),
(73, 813, 0, 'Jorge ', 'Orozco', 0, '', 1),
(74, 814, 0, 'Byron', 'Ramirez', 0, '', 1),
(75, 815, 0, 'Juan', 'Orozco', 0, '', 1),
(76, 816, 0, 'Anibal ', 'Orozco', 77603901, '', 1),
(77, 817, 0, 'Marvin Vinicio', 'Fuentes', 0, '', 1),
(78, 818, 0, 'Luis ', 'Morales', 0, '', 1),
(79, 819, 0, 'Marcos', 'Velasquez', 0, '', 1),
(80, 820, 0, 'Jose', 'Orozco', 54823059, '', 1),
(81, 821, 0, 'Werner', 'Godinez', 0, '', 1),
(82, 822, 0, 'Elder ', 'Lopez', 30112373, '', 1),
(83, 823, 0, 'Josue', 'Lopez', 0, '', 1),
(84, 824, 0, 'Ahizer', 'Gomez Hijo', 47829098, '', 1),
(85, 825, 0, 'Werner', 'Diaz', 31907973, NULL, 1),
(86, 1, 1, 'pruebas', 'prueba', 54562362, 'pruebas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevos`
--

CREATE TABLE `nuevos` (
  `id_cliente` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telinmediato` int(8) NOT NULL,
  `fecha` date NOT NULL,
  `talla` int(5) NOT NULL,
  `largo` int(5) DEFAULT NULL,
  `color` varchar(50) NOT NULL,
  `estilo` varchar(50) NOT NULL,
  `nota` varchar(300) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ronald Fuentes', 'sonymusik.rf@gmail.com', NULL, '$2y$10$2SIcS9e525DQQfGCO7m7G.CC8M7pAvCgv/2b43rHIBIYyAGhm2jZi', NULL, '2020-05-24 22:49:24', '2020-05-24 22:49:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nuevos`
--
ALTER TABLE `nuevos`
  ADD PRIMARY KEY (`id_cliente`);

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
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nuevos`
--
ALTER TABLE `nuevos`
  MODIFY `id_cliente` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

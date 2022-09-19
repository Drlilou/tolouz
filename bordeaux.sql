-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 sep. 2022 à 03:23
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bordeaux`
--

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE `club` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal_deference` int(10) NOT NULL DEFAULT 0,
  `points` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`id`, `Team`, `goal_deference`, `points`) VALUES
(1, 'nice', 7, 128),
(11, 'psg', 7, 1),
(14, 'fcb', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `coachs`
--

CREATE TABLE `coachs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(52) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'man'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `coachs`
--

INSERT INTO `coachs` (`id`, `first_name`, `last_name`, `img`, `birth_date`, `remember_token`, `created_at`, `updated_at`, `category`, `mission`, `sex`) VALUES
(14, 'azerty', 'azedfrtghj', 'images/coachs/2022-09-07 at 22-48-00.png', '2022-09-23', NULL, NULL, NULL, 'category1', 'edfrtghjkl', 'man'),
(15, 'qsdfrtgyhjk', 'rfghjkla', 'images/coachs/Chrysanthemum.jpg', '2022-09-16', NULL, NULL, NULL, 'category1', 'fghjklm', 'woman');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `matchs`
--

CREATE TABLE `matchs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stadium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rival_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_rival_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(52) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matchs`
--

INSERT INTO `matchs` (`id`, `cup`, `stadium`, `rival_team`, `logo_rival_team`, `game_place`, `time`, `remember_token`, `created_at`, `updated_at`, `category`) VALUES
(23, 'ligue 1', '4564', 'bayarn miyonikhe', '', 'interior', '0000-00-00 00:00:00', NULL, NULL, NULL, 'category1'),
(24, 'ligue 1', 'qzdsfghjk', '6544564', '', 'interior', '0000-00-00 00:00:00', NULL, NULL, NULL, 'category1'),
(25, 'ligue 1', 'dfggggghjk', 'sdfgb', 'images/matchs/2022-09-07 at 12-05-34.png', 'outside', '2022-09-24 20:45:00', NULL, NULL, NULL, 'category1'),
(26, 'ligue 1', 'zertyuiomù', 'azertyjk', 'images/matchs/2022-05-30 at 22-09-40.png', 'outside', '2022-09-28 20:45:00', NULL, NULL, NULL, 'category1'),
(27, 'ligue 1', 'SDFGHJKLM', 'QDCFGHJKL/', 'images/matchs/2022-06-23 at 10-19-30.png', 'interior', '0000-00-00 00:00:00', NULL, NULL, NULL, 'category1');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2022_08_04_195131_matchs', 2),
(6, '2022_08_07_103251_players', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sex` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'man',
  `category` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `players`
--

INSERT INTO `players` (`id`, `position`, `first_name`, `last_name`, `img`, `birth_date`, `remember_token`, `created_at`, `updated_at`, `sex`, `category`) VALUES
(11, 'gardian', 'aaaaaaa', 'aftygjhklm', 'images/players/2022-07-20 at 12-22-41.png', '2022-09-06', NULL, NULL, NULL, 'woman', 'category2'),
(12, 'gardian', 'aaaaZ', 'zzzzzzzzzzzzzzzz', 'images/players/téléchargement.jpg', '2022-09-16', NULL, NULL, NULL, 'man', 'category2'),
(13, 'gardian', 'dfghjkl', 'dfghjklm', 'images/players/2022-09-07 at 22-48-00.png', '2022-09-21', NULL, NULL, NULL, 'woman', 'category1'),
(14, 'attaquant', 'qqqqqqqdfghjklmù', 'zzzzzzzztyguhjk', 'images/players/2022-05-30 at 22-09-40.png', '2022-09-17', NULL, NULL, NULL, 'man', 'category1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '123456789', NULL, '2022-08-05 07:00:42', '2022-08-05 07:00:42');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `coachs`
--
ALTER TABLE `coachs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `coachs`
--
ALTER TABLE `coachs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `matchs`
--
ALTER TABLE `matchs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

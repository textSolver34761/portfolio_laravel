-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 02 mai 2018 à 07:42
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `chefv7`
--
CREATE DATABASE IF NOT EXISTS `chefv7` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chefv7`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--
-- Création :  mar. 24 avr. 2018 à 08:30
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'plokijhg', 'poiyghf', '^pmolikjuy', '2018-04-24 13:28:25', '2018-04-24 13:28:25', NULL),
(2, 'iy', 'opiuy', 'op:i;uyt', '2018-04-24 13:36:15', '2018-04-24 13:36:15', NULL),
(3, 'IA', 'IA', 'ncsbfsoimHVF', '2018-04-24 13:36:43', '2018-04-24 13:36:43', NULL),
(4, 'Chatbot', 'qknfzof', 'foiezgbeozh', '2018-04-25 06:00:11', '2018-04-25 06:00:11', NULL),
(5, 'Chatbot', 'jomvhdsigidz', 'fhzisohfziegf', '2018-04-25 06:00:48', '2018-04-25 06:00:48', NULL),
(6, '123', '2', 'iguig', '2018-04-25 08:04:46', '2018-04-25 08:04:46', NULL),
(7, '1', '1', '2', '2018-04-25 08:16:05', '2018-04-25 08:16:05', NULL),
(8, 'NBH', 'HJH', 'JHJ', '2018-04-26 05:42:26', '2018-04-26 05:42:26', NULL),
(9, 'Chatbot', 'This article is about Chatbot', 'jfsdonosdfnoisdb voidbvoideug', '2018-04-26 06:10:43', '2018-04-26 06:10:43', NULL),
(10, 'Chatbot', 'This article is about Chatbot', 'mofhoeqmbfgoegfoqegf', '2018-04-26 06:23:17', '2018-04-26 06:23:17', NULL),
(11, ',ojn', 'opkij', 'p^koùij', '2018-04-26 06:25:09', '2018-04-26 06:25:09', NULL),
(12, ',ojn', 'opkij', 'p^koùij', '2018-04-26 06:28:44', '2018-04-26 06:28:44', NULL),
(13, 'Test', 'vlsndmon', 'higiuf', '2018-04-26 06:29:48', '2018-04-26 06:29:48', NULL),
(14, 'Change chatbot', 'This article is about Chatbot', 'Chatbot are....', '2018-04-26 06:30:12', '2018-04-26 09:35:33', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_tag`
--
-- Création :  mar. 24 avr. 2018 à 08:30
--

DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE IF NOT EXISTS `article_tag` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `articles_id` int(10) UNSIGNED NOT NULL,
  `tags_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_tag_articles_id_index` (`articles_id`),
  KEY `article_tag_tags_id_index` (`tags_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article_tag`
--

INSERT INTO `article_tag` (`id`, `articles_id`, `tags_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(9, 13, 2),
(10, 14, 2),
(11, 10, 2),
(16, 4, 1),
(17, 4, 2),
(19, 14, 1),
(21, 12, 1),
(22, 12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--
-- Création :  mar. 24 avr. 2018 à 08:30
-- Dernière modification :  ven. 27 avr. 2018 à 08:45
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2014_10_12_102719_create_users_table', 1),
(10, '2018_04_04_102718_create_projects_table', 1),
(11, '2018_04_04_102721_create_articles_table', 1),
(12, '2018_04_04_102722_create_tags_table', 1),
(13, '2018_04_04_102724_create_article_tags_table', 1),
(14, '2018_04_04_102725_create_project_tags_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--
-- Création :  mar. 24 avr. 2018 à 15:20
-- Dernière modification :  mar. 24 avr. 2018 à 15:20
-- Dernière vérification :  mar. 24 avr. 2018 à 15:20
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--
-- Création :  mar. 24 avr. 2018 à 08:30
-- Dernière modification :  lun. 30 avr. 2018 à 08:34
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Iot project / Arduino initiation', 'https://github.com/textSolver34761/Initiation_Arduino', NULL, NULL, NULL),
(2, 'Laravel project', 'https://github.com/textSolver34761/portfolio_laravel', NULL, NULL, NULL),
(3, 'Chatbot project', 'https://github.com/textSolver34761/HelloBen', NULL, NULL, NULL),
(4, 'PHP native project', 'https://github.com/textSolver34761/jaroflife', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `project_tag`
--
-- Création :  mar. 24 avr. 2018 à 15:20
--

DROP TABLE IF EXISTS `project_tag`;
CREATE TABLE IF NOT EXISTS `project_tag` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) UNSIGNED NOT NULL,
  `tags_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_tag_projects_id_index` (`projects_id`),
  KEY `project_tag_tags_id_index` (`tags_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--
-- Création :  mar. 24 avr. 2018 à 08:30
-- Dernière modification :  lun. 30 avr. 2018 à 08:35
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Artificial Intelligence', NULL, '2018-04-26 11:45:07', NULL),
(2, 'chatbot', NULL, NULL, NULL),
(3, 'Laravel', NULL, NULL, NULL),
(4, 'Connected objects', NULL, NULL, NULL),
(5, 'Native projects', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--
-- Création :  mar. 24 avr. 2018 à 08:30
-- Dernière modification :  Dim 29 avr. 2018 à 21:20
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `email`, `password`, `role`, `avatar`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pradon', 'Ben', 'benpradon@gmail.com', '$2y$10$94Jg4GICZNl42/5jndUMcOSO6HuOPmLglOlU3VA20ox0KNUGU5m8W', 1, 'default.png', 'RPmDkbwbzVyTrtnSntzEap59gOz0fOA5jEwasw17u5KXYRLHB6JB6nMwCbKt', '2018-04-24 13:23:03', '2018-04-24 13:23:03', NULL),
(2, 'Pradon', 'Ben', 'benpradon@hotmail.fr', '$2y$10$Ej6nQmsHOz9UQIlnjeeLluJdcICWZwMhhy6rFFADHBHdwbPXTLHhW', 1, 'default.png', NULL, '2018-04-25 05:58:45', '2018-04-25 05:58:45', NULL),
(3, 'Benjamin Pradon', 'Benjamin', 'benpradon@test.fr', '$2y$10$pmZg0J5az.hdHzZBgEolo.tOA9PtyNgqu67Shag2Y/8kJkD4DxKMa', 1, 'default.png', 'RaiClL276hsLKVhyrV4F2ra1LnKqduAndLgpVBxVbnPM1ZX3wfwOBHn43k5Q', '2018-04-25 16:20:50', '2018-04-25 16:20:50', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_articles_id_foreign` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_tag_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`);

--
-- Contraintes pour la table `project_tag`
--
ALTER TABLE `project_tag`
  ADD CONSTRAINT `project_tag_projects_id_foreign` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `project_tag_tags_id_foreign` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

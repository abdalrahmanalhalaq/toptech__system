-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2023 at 01:59 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toptech_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companies_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `mobile`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Oral Krajcik', '970591231234', 'Dolorem qui aut aspernatur.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(2, 'Jovany Harris I', '970591231234', 'Ut sit porro consequuntur cumque.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(3, 'Mr. Sterling Greenholt', '970591231234', 'Explicabo harum qui iusto eum aut quos dolorem.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(4, 'Miss Kendra Wolff Sr.', '970591231234', 'Eveniet labore neque molestiae.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(5, 'Eulalia Corkery', '970591231234', 'Aut est a doloribus rem et eius qui.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(6, 'Nathanael Schiller', '970591231234', 'Tenetur voluptatem quo adipisci similique et.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(7, 'Julianne Gorczany', '970591231234', 'Non earum rerum aspernatur debitis consectetur.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(8, 'Dr. Dameon Kohler II', '970591231234', 'Dolores consequatur quo necessitatibus nemo.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(9, 'Earl Jenkins', '970591231234', 'Aspernatur facilis aut qui fuga repellat.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(10, 'Jacey Ferry', '970591231234', 'Omnis fugiat dignissimos laborum deserunt.', '2023-05-17 10:14:41', '2023-05-17 10:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `courses_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Major Gorczany Jr.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(2, 'Mrs. Celine Parker', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(3, 'Norma Pouros', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(4, 'Sophie Franecki', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(5, 'Miss Keely Lockman Sr.', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(6, 'Adolfo Moore', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(7, 'Dr. Avery Emmerich III', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(8, 'Skyla Altenwerth', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(9, 'Hattie Conroy', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(10, 'General Schneider Sr.', '2023-05-17 10:14:41', '2023-05-17 10:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `course_trainers`
--

DROP TABLE IF EXISTS `course_trainers`;
CREATE TABLE IF NOT EXISTS `course_trainers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_trainer_course_id_foreign` (`course_id`),
  KEY `course_trainer_trainer_id_foreign` (`trainer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_trainers`
--

INSERT INTO `course_trainers` (`id`, `course_id`, `trainer_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'dmksfugsjcjk', NULL, NULL),
(2, 1, 2, '', NULL, NULL),
(5, 2, 1, 'dlnsljvlssf', NULL, NULL),
(6, 2, 4, 'dlnsljvlssf', NULL, NULL),
(7, 2, 3, 'dlnsljvlssf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

DROP TABLE IF EXISTS `divisions`;
CREATE TABLE IF NOT EXISTS `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `hours_number` bigint(20) NOT NULL,
  `min_student_to_open` bigint(20) NOT NULL,
  `status` enum('pending_progressing','information_meeting','in_progress','finished','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending_progressing',
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `trainer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `finished_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `divisions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `price`, `hours_number`, `min_student_to_open`, `status`, `course_id`, `trainer_id`, `finished_at`, `created_at`, `updated_at`) VALUES
(1, 'Jacey Vandervort', 143, 208825, 162170329, 'closed', 2, 3, '2008-05-25', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(2, 'Mr. Chaz Gutmann', 13, 2, 791152, 'finished', 2, 1, '2011-08-05', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(3, 'William Ortiz MD', 832760174, 328636, 9098923, 'finished', 2, 0, '1982-01-21', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(4, 'Mr. Uriah McCullough V', 5, 81, 90359694, 'in_progress', 2, 3, '1983-01-11', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(5, 'Graciela Gulgowski', 987, 1608625, 38064, 'in_progress', 0, 2, '1986-08-11', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(6, 'Miss Daniela Goyette MD', 2, 3, 9194, 'in_progress', 5, 3, '1999-05-18', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(7, 'Monty Schoen', 30491, 322, 13119033, 'closed', 5, 5, '1988-03-26', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(8, 'Ms. Patsy Schmitt IV', 53450, 26566, 3, 'closed', 1, 3, '1970-08-09', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(9, 'Lucio Hoppe', 720, 8, 836078, 'in_progress', 0, 2, '1972-07-17', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(10, 'Winfield Hodkiewicz', 3039, 8506, 30457178, 'closed', 1, 4, '2004-07-18', '2023-05-17 10:14:41', '2023-05-17 10:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(81, '2014_10_12_000000_create_users_table', 1),
(82, '2014_10_12_100000_create_password_resets_table', 1),
(83, '2019_08_19_000000_create_failed_jobs_table', 1),
(84, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(85, '2023_03_29_101603_create_companies_table', 1),
(86, '2023_05_02_111448_create_students_table', 1),
(87, '2023_05_02_133857_create_courses_table', 1),
(88, '2023_05_14_111403_create_trainers_table', 1),
(89, '2023_05_14_113124_create_divisions_table', 1),
(90, '2023_05_14_122319_create_course_trainer_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_name_unique` (`name`),
  UNIQUE KEY `students_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `mobile`, `address`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Zoie Effertz III', 'sschmidt@sipes.net', '970591231234', 'At labore et cum.', 'female', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(2, 'Mona Frami', 'dakota.casper@gmail.com', '970591231234', 'Dolores quaerat incidunt ut.', 'female', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(3, 'Lilliana Huel', 'gabe54@hotmail.com', '970591231234', 'Sit est aut illo.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(4, 'Talia Rutherford', 'stokes.melissa@gusikowski.com', '970591231234', 'Ducimus quam non quos molestias velit.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(5, 'Trent Towne', 'harber.tressie@gmail.com', '970591231234', 'Omnis aut autem quibusdam ut sunt.', 'female', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(6, 'Jamison Bailey', 'gerhold.keanu@weber.net', '970591231234', 'Modi reprehenderit est id.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(7, 'Jewel Jakubowski', 'stroman.princess@yahoo.com', '970591231234', 'Est velit voluptas minus eligendi suscipit non.', 'female', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(8, 'Pasquale Bauch II', 'sylvan29@yahoo.com', '970591231234', 'Ratione possimus officiis et ut delectus non.', 'female', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(9, 'Brandt Hand', 'ahintz@gmail.com', '970591231234', 'A ut vero eum illo earum recusandae nobis.', 'female', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(10, 'Lambert Corwin', 'saul84@hotmail.com', '970591231234', 'Minima optio ut animi illum eligendi sed quod.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

DROP TABLE IF EXISTS `trainers`;
CREATE TABLE IF NOT EXISTS `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trainers_name_unique` (`name`),
  UNIQUE KEY `trainers_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `email`, `mobile`, `address`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Ethel Dickens', 'elenora.dare@hotmail.com', '970591231234', 'Optio quia praesentium qui rerum velit.', 'female', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(2, 'Samanta Dicki', 'lionel.padberg@waters.com', '970591231234', 'Quaerat qui consequuntur voluptatum velit.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(3, 'Loraine Heidenreich', 'guido94@gmail.com', '970591231234', 'Praesentium ut sunt eos nihil laboriosam quia.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(4, 'Amya Ondricka', 'pagac.yesenia@gerlach.com', '970591231234', 'Ea dolore iure temporibus quis aut.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(5, 'Mrs. Shyann Purdy PhD', 'america.trantow@rutherford.com', '970591231234', 'Et eius ut eum id aut nulla mollitia aliquid.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(6, 'Ben Heathcote', 'daryl36@stokes.info', '970591231234', 'Debitis voluptatibus facere rerum dolor quasi.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(7, 'Cali Kreiger III', 'ressie.thiel@gmail.com', '970591231234', 'Recusandae optio alias laborum.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(8, 'Prof. Lucie Kuphal Sr.', 'justen40@altenwerth.com', '970591231234', 'Asperiores in et tempore aut beatae facilis.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(9, 'Mrs. Breana Keeling II', 'mconsidine@gmail.com', '970591231234', 'Officiis dolorem cumque vitae error.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41'),
(10, 'Reva Sporer', 'yankunding@gmail.com', '970591231234', 'Non ex minus nulla sunt consequatur.', 'male', '2023-05-17 10:14:41', '2023-05-17 10:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

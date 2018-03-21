-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 11:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehab`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_descript` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tip_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `rating_id` int(10) UNSIGNED NOT NULL,
  `emoji_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `short_descript`, `picture`, `tip_id`, `level_id`, `category_id`, `rating_id`, `emoji_id`, `created_at`, `updated_at`) VALUES
(1, 'Do the Twist', 'Help your child practice twisting', 'Help your child practice twisting to the right and left while sitting…', 'none', 1, 3, 1, 1, 1, '2018-03-21 22:37:38', '2018-03-21 22:37:38'),
(2, 'Where is it?', 'Help your child to find hidden objects', 'Help your child to find hidden objects and to understand that objects still exist even after the have been hidden ….', 'none', 2, 2, 2, 2, 1, '2018-03-21 22:39:16', '2018-03-21 22:39:16'),
(3, 'Want a Cracker?', 'Help your child to learn what words mean', 'Help your child to learn what words mean', 'none', 4, 1, 5, 3, 2, '2018-03-21 22:40:56', '2018-03-21 22:40:56'),
(4, 'Dancing with the Stars', 'Help your child to enjoy music', 'Help your child to enjoy music and making a connection with you by getting a positive reaction.', 'none', 7, 1, 6, 2, 4, '2018-03-21 22:42:42', '2018-03-21 22:42:42'),
(5, 'Life’s a Beach!', 'To stimulate your child’s tactile sense.', 'To stimulate your child’s tactile sense.', 'none', 8, 2, 3, 2, 1, '2018-03-21 22:45:36', '2018-03-21 22:45:36'),
(6, 'Snack Time for Two', 'Any small food item', 'Any small food item', 'none', 10, 4, 1, 3, 3, '2018-03-21 22:49:23', '2018-03-21 22:49:23'),
(7, 'Animal Magic', 'Your child’s ability to imitate and copy sounds is vital to overall development including speech and language.', 'Your child’s ability to imitate and copy sounds', 'none', 13, 4, 5, 3, 3, '2018-03-21 22:51:48', '2018-03-21 22:51:48');

-- --------------------------------------------------------

--
-- Table structure for table `activity_step`
--

CREATE TABLE `activity_step` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(10) UNSIGNED NOT NULL,
  `step_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_user`
--

CREATE TABLE `activity_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_user`
--

INSERT INTO `activity_user` (`id`, `activity_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 5, 1, NULL, NULL),
(3, 6, 1, NULL, NULL),
(4, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Physical', '2018-03-21 21:51:30', '2018-03-21 21:51:30'),
(2, 'Cognitive', '2018-03-21 21:51:34', '2018-03-21 21:51:34'),
(3, 'Sensory', '2018-03-21 21:51:38', '2018-03-21 21:51:38'),
(4, 'Thinking Skills', '2018-03-21 21:51:44', '2018-03-21 21:51:44'),
(5, 'Language', '2018-03-21 21:51:48', '2018-03-21 21:51:48'),
(6, 'Social-Emotional', '2018-03-21 21:51:51', '2018-03-21 21:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `emojis`
--

CREATE TABLE `emojis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emojis`
--

INSERT INTO `emojis` (`id`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Happy', 'happy.jpg', NULL, NULL),
(2, 'sad', 'sad.jpg', NULL, NULL),
(3, 'upset', 'upset', NULL, NULL),
(4, 'bored', 'bored', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Any Stage', '2018-03-21 21:52:00', '2018-03-21 21:52:00'),
(2, 'Infant Stage', '2018-03-21 21:52:04', '2018-03-21 21:52:04'),
(3, 'Older Infant Stage', '2018-03-21 21:52:07', '2018-03-21 21:52:07'),
(4, 'Pre-School Stage', '2018-03-21 21:52:12', '2018-03-21 21:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_04_121819_create_roles_table', 1),
(4, '2018_02_04_121952_create_role_user_table', 1),
(5, '2018_02_04_123619_create_categories_table', 1),
(6, '2018_02_04_123700_create_levels_table', 1),
(7, '2018_02_04_123904_create_emojis_table', 1),
(8, '2018_02_04_123943_create_ratings_table', 1),
(9, '2018_03_09_203334_create_tips_table', 1),
(10, '2018_03_09_203405_create_steps_table', 1),
(11, '2018_03_10_000543_create_activities_table', 1),
(12, '2018_03_10_000734_create_activity_user_table', 1),
(13, '2018_03_10_000849_create_activity_step_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Too Easy', NULL, NULL),
(2, 'Just Right', NULL, NULL),
(3, 'Too Hard', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user', 'A parent', '2018-03-21 21:50:15', '2018-03-21 21:50:15'),
(2, 'admin', 'A therapist', '2018-03-21 21:50:15', '2018-03-21 21:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-03-21 21:50:15', '2018-03-21 21:50:15'),
(2, 2, '2018-03-21 21:50:16', '2018-03-21 21:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tip_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `title`, `description`, `picture`, `tip_id`, `created_at`, `updated_at`) VALUES
(1, 'Setup', 'Sit on the floor across from your child and put a few small toys on their right and left sides.', NULL, 1, '2018-03-21 22:08:09', '2018-03-21 22:08:09'),
(2, 'Twist Right', 'Pick a toy and offer it to your child on the right side while holding their right hand. This will require them to twist and reach out for the toy with their left hand.', NULL, 3, '2018-03-21 22:09:02', '2018-03-21 22:10:17'),
(3, 'Twist Left', 'Repeat by offering toy on the left side and holding their left hand. Watch them rotate and reach out for the toy using the right hand', NULL, 3, '2018-03-21 22:10:07', '2018-03-21 22:10:25'),
(4, 'Setup', 'Place a small toy in front of your child', NULL, 2, '2018-03-21 22:11:22', '2018-03-21 22:11:22'),
(5, 'Hide', 'While he/she is looking at it, cover it with 1-3 pieces of cloth e.g. a towel, scarf or napkin.', NULL, 2, '2018-03-21 22:11:50', '2018-03-21 22:11:50'),
(6, 'Where?', 'Ask your child to find the toy, saying “Where is it?” and gesturing with open hands and questioning facial expression.', NULL, 2, '2018-03-21 22:12:47', '2018-03-21 22:12:47'),
(7, 'Repeat', 'Repeat a number of times with either a different number or set of coverings, and offer help when needed', NULL, 2, '2018-03-21 22:13:25', '2018-03-21 22:13:25'),
(8, 'Food', 'At mealtime put a cracker or other food within easy reach of your child. Ask them to take the cracker', NULL, 4, '2018-03-21 22:14:11', '2018-03-21 22:14:11'),
(9, 'Talking', 'Practice using only 1-3 words when introducing your child to new vocabulary and use consistent gestures.  E.g., touch the cracker when you say, “take the cracker”', NULL, 5, '2018-03-21 22:14:56', '2018-03-21 22:14:56'),
(10, 'Narrate', 'Give your child time to process what you have said and narrate what they do. If they reach out for the cracker and get it praise them, saying “You took the cracker!”', NULL, 6, '2018-03-21 22:15:48', '2018-03-21 22:15:48'),
(11, 'Dance', 'Play your child’s favourite song or any song your family enjoys. If they start moving and dancing straight away, join in the dance party. If not start dancing to the first song.', NULL, 7, '2018-03-21 22:17:30', '2018-03-21 22:17:30'),
(12, 'Encourage', 'If your child copies you applaud and cheer them on.', NULL, 7, '2018-03-21 22:18:28', '2018-03-21 22:18:28'),
(13, 'Songs', '3)	Try a variety of songs and repeat, just make sure not to overwhelm your child with too much variety. Pay attention to the volume and the length of time you spend doing this activity.', NULL, 7, '2018-03-21 22:20:05', '2018-03-21 22:20:05'),
(14, 'Notice', 'Make sure to notice what your child is dawn to or excited about and focus your positive attention and words on that. Discontinue if there is any negative response.', NULL, 7, '2018-03-21 22:21:14', '2018-03-21 22:21:14'),
(15, 'Sandbox', 'To complete this activity play in a sandbox, if this is not possible, fill a container with sand.', NULL, 8, '2018-03-21 22:22:08', '2018-03-21 22:22:08'),
(16, 'Sand', 'Next invite your child to play with the sand by smoothing it out, flattening and patting it. Lead by example-show your child how to do it!', NULL, 9, '2018-03-21 22:23:12', '2018-03-21 22:23:12'),
(17, 'Observe', 'Observe your child’s movements and how they experiment and react to contact with different textures. Do they like touching the sand?', NULL, 8, '2018-03-21 22:23:56', '2018-03-21 22:23:56'),
(18, 'Sensory', 'Sensory activities like this enhance your child’s tactile sense.', NULL, 9, '2018-03-21 22:24:20', '2018-03-21 22:24:20'),
(19, 'Tasks', 'Sit at the table next to your child. As you eat a snack together ask your child to perform simple tasks related to eating.', NULL, 10, '2018-03-21 22:25:11', '2018-03-21 22:25:11'),
(20, 'Praise', 'Give your child time to respond before helping. Look at them encouragingly. When they complete the actin, praise and confirm what they did: “You picked up the food! Thank-you.”', NULL, 11, '2018-03-21 22:26:14', '2018-03-21 22:26:14'),
(21, 'Narrate', 'If your child would rather do their own thing, model the action for them and narrate what you are doing.', NULL, 12, '2018-03-21 22:26:58', '2018-03-21 22:26:58'),
(22, 'Puppet', 'Using a stuffed animal or a puppet, initiate a conversation with your child as the puppet. Remain focused on your child’s face so you can continue doing whatever your child likes most.', NULL, 13, '2018-03-21 22:28:47', '2018-03-21 22:28:47'),
(23, 'Talking', 'Examples of what you can say are “Hi there! I am a sheep. I say ‘baa baa’! Can you say ‘Baa’?” Exaggerate the sounds you make and the actions of the toy', NULL, 14, '2018-03-21 22:29:38', '2018-03-21 22:29:38'),
(24, 'Response', 'Wait for your child to respond to the animal chatter and then imitate what she says.', NULL, 15, '2018-03-21 22:30:04', '2018-03-21 22:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Seated', 'As your child learns to twist around, be watchful when they are seated in their high chair, buggy or shopping trolley. Make sure safety belts are fastened.', '2018-03-21 21:55:44', '2018-03-21 21:55:44'),
(2, 'Hidden', 'Watch to see if your child looks or gestures at the area where you’ve hidden the object. You are working on your child’s memory and persistence in completing a task.', '2018-03-21 21:56:20', '2018-03-21 21:57:03'),
(3, 'Twist', 'Your child may get into a crawling position instead of twisting. If they seem interested in trying to twist, gently hold their hips while sitting to help them twist.', '2018-03-21 21:56:51', '2018-03-21 21:56:51'),
(4, 'Words', 'Your child cannot process more than 1-3 words when learning new vocabulary or trying to pair a motor movement with the matching language', '2018-03-21 21:58:25', '2018-03-21 21:58:25'),
(5, 'Words', 'Watch to see if your child follows your gaze and looks at the correct object. Try using 1-2-word phrases to make it even simpler (e.g. “Take cracker”, or “Look Cracker”)', '2018-03-21 21:59:33', '2018-03-21 21:59:33'),
(6, 'Talk', 'Avoid asking too many questions or giving too many directions. Just repeat 1-2 simple requests and don’t put pressure on your child to respond.', '2018-03-21 22:00:25', '2018-03-21 22:00:25'),
(7, 'Repeat actions', 'Children love attention and will take note of anything they do that gets then noticed. Look for your child to repeat actions that get positive reactions from you or other adults.', '2018-03-21 22:00:59', '2018-03-21 22:00:59'),
(8, 'Reactions', 'Experiments with and reacts to different textures', '2018-03-21 22:01:29', '2018-03-21 22:01:29'),
(9, 'Movements', 'Uses his/her hands to make intentional movements', '2018-03-21 22:01:46', '2018-03-21 22:01:46'),
(10, 'Understanding', 'Your child may demonstrate understanding of your request by looking, gesturing or touching-even if they don’t complete the action as described.', '2018-03-21 22:02:26', '2018-03-21 22:02:26'),
(11, 'Understanding', 'Your child might take several seconds before they demonstrate understanding of the request', '2018-03-21 22:02:58', '2018-03-21 22:02:58'),
(12, 'Avoid', 'Avoid asking too many questions or going too fast to avoid pressuring your child.', '2018-03-21 22:03:09', '2018-03-21 22:03:09'),
(13, 'Copy', 'Watch to see if your child copies you when you pair a consonant with a vowel (consonant first).', '2018-03-21 22:03:31', '2018-03-21 22:03:31'),
(14, 'Talk', 'Developmentally we see this combination first, as it is harder to pair a vowel with consonants.', '2018-03-21 22:04:32', '2018-03-21 22:04:32'),
(15, 'Talk', 'The vowel sounds “ah”, “aaah”, “uh” are probably the easiest to produce at this stage.', '2018-03-21 22:04:49', '2018-03-21 22:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '1',
  `consent` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `consent`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mary Bloggs', 'mary@bloggs.com', '$2y$10$7a7km/9HBYsfi2tEBNfyUunxxIGEMNrVv51jk8DjoXlCKaKOOske.', 0, 1, NULL, '2018-03-21 21:50:15', '2018-03-21 21:50:15'),
(2, 'Joe Bloggs', 'joe@bloggs.com', '$2y$10$muJd1o2FPgftUqTv4/TJ3.5FG3/XHAoGI24hDkJNnnrYWi9x4pyqW', 1, 1, 'KKmxxibIyEahunleMiaD8OsAazgNbOZP1x6Xg97de321ovBUMn8nSvbHMZRR', '2018-03-21 21:50:16', '2018-03-21 21:50:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_level_id_foreign` (`level_id`),
  ADD KEY `activities_category_id_foreign` (`category_id`),
  ADD KEY `activities_rating_id_foreign` (`rating_id`),
  ADD KEY `activities_emoji_id_foreign` (`emoji_id`),
  ADD KEY `activities_tip_id_foreign` (`tip_id`);

--
-- Indexes for table `activity_step`
--
ALTER TABLE `activity_step`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_step_activity_id_foreign` (`activity_id`),
  ADD KEY `activity_step_step_id_foreign` (`step_id`);

--
-- Indexes for table `activity_user`
--
ALTER TABLE `activity_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_user_activity_id_foreign` (`activity_id`),
  ADD KEY `activity_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emojis`
--
ALTER TABLE `emojis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `steps_tip_id_foreign` (`tip_id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `activity_step`
--
ALTER TABLE `activity_step`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_user`
--
ALTER TABLE `activity_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `emojis`
--
ALTER TABLE `emojis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `activities_emoji_id_foreign` FOREIGN KEY (`emoji_id`) REFERENCES `emojis` (`id`),
  ADD CONSTRAINT `activities_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `activities_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `ratings` (`id`),
  ADD CONSTRAINT `activities_tip_id_foreign` FOREIGN KEY (`tip_id`) REFERENCES `tips` (`id`);

--
-- Constraints for table `activity_step`
--
ALTER TABLE `activity_step`
  ADD CONSTRAINT `activity_step_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activity_step_step_id_foreign` FOREIGN KEY (`step_id`) REFERENCES `steps` (`id`);

--
-- Constraints for table `activity_user`
--
ALTER TABLE `activity_user`
  ADD CONSTRAINT `activity_user_activity_id_foreign` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activity_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `steps`
--
ALTER TABLE `steps`
  ADD CONSTRAINT `steps_tip_id_foreign` FOREIGN KEY (`tip_id`) REFERENCES `tips` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

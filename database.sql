-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 05 juin 2025 à 08:47
-- Version du serveur : 8.4.5
-- Version de PHP : 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `simulator`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessory`
--

CREATE TABLE `accessory` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `accessory_effect`
--

CREATE TABLE `accessory_effect` (
  `id_accessory_id` int NOT NULL,
  `id_effect_id` int NOT NULL,
  `value` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `armor`
--

CREATE TABLE `armor` (
  `id` int NOT NULL,
  `armor_type_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blunt_res` int NOT NULL,
  `slashing_res` int NOT NULL,
  `piercing_res` int NOT NULL,
  `fire_res` int NOT NULL,
  `otherworldly_res` int NOT NULL,
  `equipment_type_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `armor_effect`
--

CREATE TABLE `armor_effect` (
  `id_armor_id` int NOT NULL,
  `id_effect_id` int NOT NULL,
  `value` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `armor_restrict_type`
--

CREATE TABLE `armor_restrict_type` (
  `id` int NOT NULL,
  `armor_restrict` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `armor_restrict_type`
--

INSERT INTO `armor_restrict_type` (`id`, `armor_restrict`) VALUES
(1, 'girl'),
(2, 'no_armor'),
(3, 'enki'),
(4, 'no_restrict');

-- --------------------------------------------------------

--
-- Structure de la table `armor_type`
--

CREATE TABLE `armor_type` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `armor_type`
--

INSERT INTO `armor_type` (`id`, `name`) VALUES
(1, 'None'),
(2, 'Light Armor'),
(3, 'Heavy Armor'),
(4, 'Small Shield');

-- --------------------------------------------------------

--
-- Structure de la table `character`
--

CREATE TABLE `character` (
  `id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attack` int NOT NULL,
  `agility` int NOT NULL,
  `armor_restrict_type_id` int NOT NULL,
  `weapon_restrict_type_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `damage_type`
--

CREATE TABLE `damage_type` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `damage_type`
--

INSERT INTO `damage_type` (`id`, `name`) VALUES
(1, 'None'),
(2, 'HP Damage'),
(3, 'MP Damage'),
(4, 'HP Recover'),
(5, 'MP Recover'),
(6, 'HP Drain'),
(7, 'MP Drain');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250604221928', NULL, NULL),
('DoctrineMigrations\\Version20250604230951', '2025-06-04 23:10:02', 203),
('DoctrineMigrations\\Version20250605003415', '2025-06-05 00:35:34', 157),
('DoctrineMigrations\\Version20250605003755', '2025-06-05 00:38:03', 222),
('DoctrineMigrations\\Version20250605004039', '2025-06-05 00:40:47', 147),
('DoctrineMigrations\\Version20250605004501', '2025-06-05 00:45:04', 45),
('DoctrineMigrations\\Version20250605004959', '2025-06-05 00:50:08', 179),
('DoctrineMigrations\\Version20250605005453', '2025-06-05 00:54:58', 141),
('DoctrineMigrations\\Version20250605005823', '2025-06-05 00:58:26', 151),
('DoctrineMigrations\\Version20250605005850', '2025-06-05 00:58:54', 179),
('DoctrineMigrations\\Version20250605010102', '2025-06-05 01:01:09', 135),
('DoctrineMigrations\\Version20250605011052', '2025-06-05 01:10:56', 341),
('DoctrineMigrations\\Version20250605011458', '2025-06-05 01:15:05', 225),
('DoctrineMigrations\\Version20250605011629', '2025-06-05 01:16:33', 49),
('DoctrineMigrations\\Version20250605014408', '2025-06-05 01:44:12', 222),
('DoctrineMigrations\\Version20250605025215', '2025-06-05 02:52:20', 56),
('DoctrineMigrations\\Version20250605071938', '2025-06-05 07:19:44', 71),
('DoctrineMigrations\\Version20250605072014', '2025-06-05 07:20:19', 54);

-- --------------------------------------------------------

--
-- Structure de la table `effect`
--

CREATE TABLE `effect` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_dot` tinyint(1) NOT NULL,
  `value` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `effect`
--

INSERT INTO `effect` (`id`, `name`, `description`, `is_dot`, `value`) VALUES
(1, 'Severe DoT', 'HP Regeneration -10%', 1, -10);

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

CREATE TABLE `element` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`id`, `name`) VALUES
(1, 'Typeless'),
(2, 'Slashing'),
(3, 'Piercing'),
(4, 'Fire'),
(5, 'Otherworldly'),
(6, 'Blunt');

-- --------------------------------------------------------

--
-- Structure de la table `equipment_type`
--

CREATE TABLE `equipment_type` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipment_type`
--

INSERT INTO `equipment_type` (`id`, `name`) VALUES
(1, 'Shield'),
(2, 'Head'),
(3, 'Body'),
(4, 'Accessory');

-- --------------------------------------------------------

--
-- Structure de la table `hit_type`
--

CREATE TABLE `hit_type` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hit_type`
--

INSERT INTO `hit_type` (`id`, `name`) VALUES
(1, 'Certain hit'),
(2, 'Physical Attack'),
(3, 'Magical Attack');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope_id_id` int NOT NULL,
  `element_id_id` int NOT NULL,
  `damage_type_id_id` int NOT NULL,
  `hit_type_id_id` int NOT NULL,
  `is_consumed` tinyint(1) NOT NULL,
  `success_rate` int NOT NULL,
  `formula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `limb`
--

CREATE TABLE `limb` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_hp` int NOT NULL,
  `blunt_res` int NOT NULL,
  `slashing_res` int NOT NULL,
  `piercing_res` int NOT NULL,
  `fire_res` int NOT NULL,
  `otherworldly_res` int NOT NULL,
  `evasion` int NOT NULL,
  `magical_evasion` int NOT NULL,
  `hard_max_hp` int NOT NULL,
  `accuracy` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `limb`
--

INSERT INTO `limb` (`id`, `name`, `max_hp`, `blunt_res`, `slashing_res`, `piercing_res`, `fire_res`, `otherworldly_res`, `evasion`, `magical_evasion`, `hard_max_hp`, `accuracy`) VALUES
(1, 'Guard [torso]', 1300, 100, 115, 100, 100, 100, 5, 0, 2500, 95),
(2, 'Guard [head]', 20, 100, 115, 100, 100, 100, 55, 40, 20, 95),
(3, 'Guard [right arm]', 20, 100, 115, 100, 100, 100, 5, 0, 250, 95),
(4, 'Guard [left arm]', 20, 100, 115, 100, 100, 100, 5, 0, 250, 95),
(5, 'Guard [stinger]', 20, 100, 115, 100, 100, 100, 5, 0, 250, 95),
(6, 'Guard [left leg]', 20, 100, 115, 100, 100, 100, 5, 0, 20, 95),
(7, 'Guard [right leg]', 20, 100, 115, 100, 100, 100, 5, 0, 20, 95);

-- --------------------------------------------------------

--
-- Structure de la table `limb_effect`
--

CREATE TABLE `limb_effect` (
  `id_limb_id` int NOT NULL,
  `id_effect_id` int NOT NULL,
  `value` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `limb_skill`
--

CREATE TABLE `limb_skill` (
  `id_limb_id` int NOT NULL,
  `id_skill_id` int NOT NULL,
  `rating` int NOT NULL,
  `skill_trigger` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_occurence` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `limb_skill`
--

INSERT INTO `limb_skill` (`id_limb_id`, `id_skill_id`, `rating`, `skill_trigger`, `skill_occurence`, `id`) VALUES
(4, 1, 5, 'Always', 1, 1),
(3, 2, 99, 'Every third turn, starting on turn 2  (failed coinflip)', 1, 2),
(5, 5, 5, 'Always', 2, 3),
(5, 3, 3, 'Always', 1, 4),
(1, 4, 5, 'If armless', 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `limb_troop`
--

CREATE TABLE `limb_troop` (
  `limb_id` int NOT NULL,
  `troop_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `limb_troop`
--

INSERT INTO `limb_troop` (`limb_id`, `troop_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `occasion`
--

CREATE TABLE `occasion` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `occasion`
--

INSERT INTO `occasion` (`id`, `name`) VALUES
(1, 'Always'),
(2, 'Battle Screen'),
(3, 'Menu Screen'),
(4, 'Never');

-- --------------------------------------------------------

--
-- Structure de la table `scope`
--

CREATE TABLE `scope` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `scope`
--

INSERT INTO `scope` (`id`, `name`) VALUES
(1, 'None'),
(2, '1 Enemy'),
(3, 'All enemies'),
(4, '1 Random Enemy'),
(5, '2 Random Enemies'),
(6, '3 Random Enemies'),
(7, '4 Random Enemies'),
(8, '1 Ally'),
(9, 'All Allies'),
(10, '1 Ally (dead)'),
(11, 'All Allies (dead)'),
(12, 'The User');

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE `skill` (
  `id` int NOT NULL,
  `scope_id` int NOT NULL,
  `occasion_id` int NOT NULL,
  `element_id` int NOT NULL,
  `damage_type_id` int NOT NULL,
  `hit_type_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_enemy_only` tinyint(1) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `success_rate` int NOT NULL,
  `repeat_action` int NOT NULL,
  `formula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `skill`
--

INSERT INTO `skill` (`id`, `scope_id`, `occasion_id`, `element_id`, `damage_type_id`, `hit_type_id`, `name`, `is_enemy_only`, `description`, `success_rate`, `repeat_action`, `formula`) VALUES
(1, 2, 2, 2, 2, 2, 'Hack', 1, 'guard\'s cleaver arm attack', 90, 1, '35'),
(2, 2, 2, 6, 2, 2, 'Mad rush', 1, 'guard\'s empty hand coinflip attack', 90, 5, '22'),
(3, 2, 1, 3, 2, 1, 'Stringer thrust', 1, 'guard\'s stinger attack', 100, 1, '45'),
(4, 2, 1, 6, 2, 1, 'Tackle', 1, 'guard\'s torso attack when armless', 100, 1, '20'),
(5, 1, 1, 1, 1, 1, 'The stinger is pulsating...', 1, 'guard\'s stinger non-attack attack', 100, 1, '0');

-- --------------------------------------------------------

--
-- Structure de la table `state`
--

CREATE TABLE `state` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_duration` int DEFAULT NULL,
  `max_duration` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `state_effect`
--

CREATE TABLE `state_effect` (
  `id_state_id` int NOT NULL,
  `id_effect_id` int NOT NULL,
  `value` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `troop`
--

CREATE TABLE `troop` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_die_at_end_of_turn` tinyint(1) NOT NULL,
  `torso_threshhold` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `troop`
--

INSERT INTO `troop` (`id`, `name`, `image`, `is_die_at_end_of_turn`, `torso_threshhold`) VALUES
(1, 'Guard', 'https://fearandhunger.wiki.gg/images/7/74/Guard.png?519ff8=&format=original', 1, 75);

-- --------------------------------------------------------

--
-- Structure de la table `weapon`
--

CREATE TABLE `weapon` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attack` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `weapon`
--

INSERT INTO `weapon` (`id`, `name`, `description`, `icon`, `attack`) VALUES
(1, 'Short sword', 'Short iron sword. Blade is a bit worn out, but the sword itself is easy and quick to handle.', 'https://fearandhunger.wiki.gg/images/3/3b/Short_sword_small.png?4817a2&format=original', 10);

-- --------------------------------------------------------

--
-- Structure de la table `weapon_effect`
--

CREATE TABLE `weapon_effect` (
  `id_weapon_id` int NOT NULL,
  `id_effect_id` int NOT NULL,
  `value` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `weapon_element`
--

CREATE TABLE `weapon_element` (
  `weapon_id` int NOT NULL,
  `element_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `weapon_element`
--

INSERT INTO `weapon_element` (`weapon_id`, `element_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `weapon_restrict_type`
--

CREATE TABLE `weapon_restrict_type` (
  `id` int NOT NULL,
  `weapon_restrict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `weapon_restrict_type`
--

INSERT INTO `weapon_restrict_type` (`id`, `weapon_restrict`) VALUES
(1, 'girl'),
(2, 'enki'),
(3, 'ghouls'),
(4, 'skeleton'),
(5, 'no_restrict');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `accessory_effect`
--
ALTER TABLE `accessory_effect`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_603C4B8A429B90A` (`id_accessory_id`),
  ADD KEY `IDX_603C4B8A75DC041C` (`id_effect_id`);

--
-- Index pour la table `armor`
--
ALTER TABLE `armor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BF27FEFCA5BF8724` (`armor_type_id`),
  ADD KEY `IDX_BF27FEFCB337437C` (`equipment_type_id`);

--
-- Index pour la table `armor_effect`
--
ALTER TABLE `armor_effect`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5E5F36DA571DAF6` (`id_armor_id`),
  ADD KEY `IDX_F5E5F36D75DC041C` (`id_effect_id`);

--
-- Index pour la table `armor_restrict_type`
--
ALTER TABLE `armor_restrict_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `armor_type`
--
ALTER TABLE `armor_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `character`
--
ALTER TABLE `character`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_937AB034A5DB102C` (`armor_restrict_type_id`),
  ADD KEY `IDX_937AB0347200557` (`weapon_restrict_type_id`);

--
-- Index pour la table `damage_type`
--
ALTER TABLE `damage_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `effect`
--
ALTER TABLE `effect`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipment_type`
--
ALTER TABLE `equipment_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hit_type`
--
ALTER TABLE `hit_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1F1B251E842D55A2` (`scope_id_id`),
  ADD KEY `IDX_1F1B251EBB66EACE` (`element_id_id`),
  ADD KEY `IDX_1F1B251E4B3C5BF0` (`damage_type_id_id`),
  ADD KEY `IDX_1F1B251EB991DAD1` (`hit_type_id_id`);

--
-- Index pour la table `limb`
--
ALTER TABLE `limb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `limb_effect`
--
ALTER TABLE `limb_effect`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F166F29349919E5B` (`id_limb_id`),
  ADD KEY `IDX_F166F29375DC041C` (`id_effect_id`);

--
-- Index pour la table `limb_skill`
--
ALTER TABLE `limb_skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EA91FA9949919E5B` (`id_limb_id`),
  ADD KEY `IDX_EA91FA9955E2DD7` (`id_skill_id`);

--
-- Index pour la table `limb_troop`
--
ALTER TABLE `limb_troop`
  ADD PRIMARY KEY (`limb_id`,`troop_id`),
  ADD KEY `IDX_4E014DA2970C372B` (`limb_id`),
  ADD KEY `IDX_4E014DA2263060AC` (`troop_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `occasion`
--
ALTER TABLE `occasion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `scope`
--
ALTER TABLE `scope`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_5E3DE477682B5931` (`scope_id`),
  ADD KEY `IDX_5E3DE4774034998F` (`occasion_id`),
  ADD KEY `IDX_5E3DE4771F1F2A24` (`element_id`),
  ADD KEY `IDX_5E3DE47741E13755` (`damage_type_id`),
  ADD KEY `IDX_5E3DE477D50BC975` (`hit_type_id`);

--
-- Index pour la table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `state_effect`
--
ALTER TABLE `state_effect`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BFA44E5D5503D054` (`id_state_id`),
  ADD KEY `IDX_BFA44E5D75DC041C` (`id_effect_id`);

--
-- Index pour la table `troop`
--
ALTER TABLE `troop`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `weapon`
--
ALTER TABLE `weapon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `weapon_effect`
--
ALTER TABLE `weapon_effect`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8B95BED5158D9E54` (`id_weapon_id`),
  ADD KEY `IDX_8B95BED575DC041C` (`id_effect_id`);

--
-- Index pour la table `weapon_element`
--
ALTER TABLE `weapon_element`
  ADD PRIMARY KEY (`weapon_id`,`element_id`),
  ADD KEY `IDX_E4771E7D95B82273` (`weapon_id`),
  ADD KEY `IDX_E4771E7D1F1F2A24` (`element_id`);

--
-- Index pour la table `weapon_restrict_type`
--
ALTER TABLE `weapon_restrict_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accessory`
--
ALTER TABLE `accessory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `accessory_effect`
--
ALTER TABLE `accessory_effect`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `armor`
--
ALTER TABLE `armor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `armor_effect`
--
ALTER TABLE `armor_effect`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `armor_restrict_type`
--
ALTER TABLE `armor_restrict_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `armor_type`
--
ALTER TABLE `armor_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `character`
--
ALTER TABLE `character`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `damage_type`
--
ALTER TABLE `damage_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `effect`
--
ALTER TABLE `effect`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `element`
--
ALTER TABLE `element`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `equipment_type`
--
ALTER TABLE `equipment_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `hit_type`
--
ALTER TABLE `hit_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `limb`
--
ALTER TABLE `limb`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `limb_effect`
--
ALTER TABLE `limb_effect`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `limb_skill`
--
ALTER TABLE `limb_skill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `occasion`
--
ALTER TABLE `occasion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `scope`
--
ALTER TABLE `scope`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `state`
--
ALTER TABLE `state`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `state_effect`
--
ALTER TABLE `state_effect`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `troop`
--
ALTER TABLE `troop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `weapon`
--
ALTER TABLE `weapon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `weapon_effect`
--
ALTER TABLE `weapon_effect`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `weapon_restrict_type`
--
ALTER TABLE `weapon_restrict_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accessory_effect`
--
ALTER TABLE `accessory_effect`
  ADD CONSTRAINT `FK_603C4B8A429B90A` FOREIGN KEY (`id_accessory_id`) REFERENCES `accessory` (`id`),
  ADD CONSTRAINT `FK_603C4B8A75DC041C` FOREIGN KEY (`id_effect_id`) REFERENCES `effect` (`id`);

--
-- Contraintes pour la table `armor`
--
ALTER TABLE `armor`
  ADD CONSTRAINT `FK_BF27FEFCA5BF8724` FOREIGN KEY (`armor_type_id`) REFERENCES `armor_type` (`id`),
  ADD CONSTRAINT `FK_BF27FEFCB337437C` FOREIGN KEY (`equipment_type_id`) REFERENCES `equipment_type` (`id`);

--
-- Contraintes pour la table `armor_effect`
--
ALTER TABLE `armor_effect`
  ADD CONSTRAINT `FK_F5E5F36D75DC041C` FOREIGN KEY (`id_effect_id`) REFERENCES `effect` (`id`),
  ADD CONSTRAINT `FK_F5E5F36DA571DAF6` FOREIGN KEY (`id_armor_id`) REFERENCES `armor` (`id`);

--
-- Contraintes pour la table `character`
--
ALTER TABLE `character`
  ADD CONSTRAINT `FK_937AB0347200557` FOREIGN KEY (`weapon_restrict_type_id`) REFERENCES `weapon_restrict_type` (`id`),
  ADD CONSTRAINT `FK_937AB034A5DB102C` FOREIGN KEY (`armor_restrict_type_id`) REFERENCES `armor_restrict_type` (`id`);

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `FK_1F1B251E4B3C5BF0` FOREIGN KEY (`damage_type_id_id`) REFERENCES `damage_type` (`id`),
  ADD CONSTRAINT `FK_1F1B251E842D55A2` FOREIGN KEY (`scope_id_id`) REFERENCES `scope` (`id`),
  ADD CONSTRAINT `FK_1F1B251EB991DAD1` FOREIGN KEY (`hit_type_id_id`) REFERENCES `hit_type` (`id`),
  ADD CONSTRAINT `FK_1F1B251EBB66EACE` FOREIGN KEY (`element_id_id`) REFERENCES `element` (`id`);

--
-- Contraintes pour la table `limb_effect`
--
ALTER TABLE `limb_effect`
  ADD CONSTRAINT `FK_F166F29349919E5B` FOREIGN KEY (`id_limb_id`) REFERENCES `limb` (`id`),
  ADD CONSTRAINT `FK_F166F29375DC041C` FOREIGN KEY (`id_effect_id`) REFERENCES `effect` (`id`);

--
-- Contraintes pour la table `limb_skill`
--
ALTER TABLE `limb_skill`
  ADD CONSTRAINT `FK_EA91FA9949919E5B` FOREIGN KEY (`id_limb_id`) REFERENCES `limb` (`id`),
  ADD CONSTRAINT `FK_EA91FA9955E2DD7` FOREIGN KEY (`id_skill_id`) REFERENCES `skill` (`id`);

--
-- Contraintes pour la table `limb_troop`
--
ALTER TABLE `limb_troop`
  ADD CONSTRAINT `FK_4E014DA2263060AC` FOREIGN KEY (`troop_id`) REFERENCES `troop` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4E014DA2970C372B` FOREIGN KEY (`limb_id`) REFERENCES `limb` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `FK_5E3DE4771F1F2A24` FOREIGN KEY (`element_id`) REFERENCES `element` (`id`),
  ADD CONSTRAINT `FK_5E3DE4774034998F` FOREIGN KEY (`occasion_id`) REFERENCES `occasion` (`id`),
  ADD CONSTRAINT `FK_5E3DE47741E13755` FOREIGN KEY (`damage_type_id`) REFERENCES `damage_type` (`id`),
  ADD CONSTRAINT `FK_5E3DE477682B5931` FOREIGN KEY (`scope_id`) REFERENCES `scope` (`id`),
  ADD CONSTRAINT `FK_5E3DE477D50BC975` FOREIGN KEY (`hit_type_id`) REFERENCES `hit_type` (`id`);

--
-- Contraintes pour la table `state_effect`
--
ALTER TABLE `state_effect`
  ADD CONSTRAINT `FK_BFA44E5D5503D054` FOREIGN KEY (`id_state_id`) REFERENCES `state` (`id`),
  ADD CONSTRAINT `FK_BFA44E5D75DC041C` FOREIGN KEY (`id_effect_id`) REFERENCES `effect` (`id`);

--
-- Contraintes pour la table `weapon_effect`
--
ALTER TABLE `weapon_effect`
  ADD CONSTRAINT `FK_8B95BED5158D9E54` FOREIGN KEY (`id_weapon_id`) REFERENCES `weapon` (`id`),
  ADD CONSTRAINT `FK_8B95BED575DC041C` FOREIGN KEY (`id_effect_id`) REFERENCES `effect` (`id`);

--
-- Contraintes pour la table `weapon_element`
--
ALTER TABLE `weapon_element`
  ADD CONSTRAINT `FK_E4771E7D1F1F2A24` FOREIGN KEY (`element_id`) REFERENCES `element` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E4771E7D95B82273` FOREIGN KEY (`weapon_id`) REFERENCES `weapon` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

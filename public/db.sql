-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 31 mars 2023 à 13:30
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `qel`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

DROP TABLE IF EXISTS `choix`;
CREATE TABLE IF NOT EXISTS `choix` (
  `idParticipation` int(11) NOT NULL,
  `idReponse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `choix`
--

INSERT INTO `choix` (`idParticipation`, `idReponse`) VALUES
(1, 7),
(2, 7),
(3, 8),
(7, 23),
(7, 24),
(7, 25),
(7, 26),
(9, 37),
(10, 38),
(10, 37),
(12, 41),
(14, 52),
(15, 54),
(16, 55),
(17, 55),
(18, 55),
(19, 59),
(20, 64),
(23, 67),
(32, 76),
(33, 76),
(34, 77),
(36, 78),
(37, 82),
(38, 84),
(40, 88),
(41, 89),
(43, 93),
(50, 104),
(51, 107),
(52, 107),
(53, 110),
(54, 108),
(57, 114),
(58, 115),
(59, 118),
(60, 121),
(61, 119),
(62, 121),
(64, 124),
(65, 122),
(66, 122),
(67, 127),
(68, 125),
(69, 125);

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuestionnaire` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `participation`
--

INSERT INTO `participation` (`id`, `idQuestionnaire`, `token`) VALUES
(1, 5, 'UNojJVOZ5DhmcN9fBv3Q'),
(2, 5, 'KHX8FTOQZGd1VEf9ZNvF'),
(3, 5, '9.4k7O_BK9Tz6wa6GlX2'),
(4, 6, 'osCadClT4suTL86__DbM'),
(5, 6, '247q1aRTyaJvIh8cjx9H'),
(6, 6, 'mM1IwsVR_P1Lh9OpzNmm'),
(7, 18, '6Vjjt0swZjzuJwImJFP3'),
(8, 24, 'm2YZicNuumMHNqje3J4z'),
(9, 25, 'BwXWuSy3RJ3J3JIf5BnM'),
(10, 25, 'wdkMmta5OBk6wjMKmfYH'),
(11, 26, 'r0Vhk2pxCWw0n0RhOPP3'),
(12, 26, 'Z_PJa9RnuUWhr4Mxy4dl'),
(13, 28, 'o85OBFgNcpD.daLiexEK'),
(14, 34, 'HfeRQdc2MaPKAzS2wEFY'),
(15, 35, 'sF287Mvaiuy5Uj7D8.Sp'),
(16, 35, 'ZW99o.La_oh3xt9pGxVa'),
(17, 35, 'vYknrbJ34TPteR3EFipS'),
(18, 35, 'FOdGnXl0fWigW3xlXBT4'),
(19, 36, 'CdlqYTjDMcQLj4n2SMsJ'),
(20, 37, 'ZNHA9rJbotxJ7ApmFHfd'),
(21, 40, 'Ooj31r_qJ0yTuQ73ga7y'),
(22, 41, '.uVbdbdnnHaTg_Xb5jSJ'),
(23, 41, 'nLui7kU03D7RPes5gJ7Z'),
(24, 42, 'jBcOTjGzE6BgcmrCQDiF'),
(25, 43, '3Gn4NwzjyuffO.dPqGzk'),
(26, 44, 'IYYtuSmDdRdV1dXSRmUe'),
(27, 45, '6v95er9mHFn_GtLzIc0g'),
(28, 46, 'Z7YnQqVn0UyiXkmTfSY4'),
(29, 47, 'nhFifW37_uscipUwnrAX'),
(30, 48, '_48wDTNEuusb.vGb_bey'),
(31, 49, '5wzeeg8Dz0EXGC4OlDIb'),
(32, 50, 'zESr.9YUj9junIcdmTT9'),
(33, 50, 'MbNXhZYHqMwWQkpWBqLx'),
(34, 50, 'R1W84jIy3KdZeZ4IRlIy'),
(35, 51, 'CF4KRXADqx9aJ2BI3pWt'),
(36, 53, 'Kf_liZRXPz6J6IKbuoUg'),
(37, 54, 'hzPO.0.p2Fn90bM3UIZY'),
(38, 55, 'VmsmZ.LXhwJ0QJGkULwK'),
(39, 55, 'fTIaC3fAOzopTY.yr8oT'),
(40, 56, 'kgFvLJApi76Dygi46Qzg'),
(41, 56, 'Dbos.yF5EN7.rpfTJZGl'),
(42, 57, 'W6X12qsaBfxo8xnwGw5s'),
(43, 58, '6WsGKgao_2ngz0lf0G_c'),
(44, 58, 'vktbTMNLJmIh7vEAP8T9'),
(45, 58, 'Rc2Q1sylAInw0wu2vxlc'),
(46, 59, '2f9oxZfUKsmNC8zPELYp'),
(47, 60, 'E.Poeesn3alV4UCBd0AX'),
(48, 61, '3rl.oNL0O8uKmIzx1XWd'),
(49, 61, 'YUMRAJOw8MNvWkrvx1sW'),
(50, 62, 'VLi2XIhdFzQ2JL5dkIYu'),
(51, 62, 'D3uLzbhGlYiPiUHQmYUa'),
(52, 62, 'LG8estbjce.HZ2v8UJ7S'),
(53, 63, 'KBf41ol_niQkgLj0iiyO'),
(54, 63, 'sJHMbS3B4jO0o7qAOHfb'),
(55, 63, 'f8EKzZsf.YDAKJY1b4ZT'),
(56, 64, '0RHtJxptewGVJJyI9n4D'),
(57, 65, 'np6ry54P.NRXKd9hPEEu'),
(58, 65, 'zXA.dJ1.xmNe..7LCSG9'),
(59, 65, 'GF05PpjydbNdTGrdZwRP'),
(60, 66, '8l1_49Noq23Fs5rtaMAM'),
(61, 66, 'sQISadViJX_O1VAHdR_b'),
(62, 66, '5QeTTdLKMjJbHAIEOiXR'),
(63, 67, 'k_1gB1IoeaHD.X0FSz4h'),
(64, 67, 'hPzdUkf8qfu6r3JosLwx'),
(65, 67, 'AQLuRQxATHBRjhey7O3F'),
(66, 67, '_I8mk87YREFcS2wAfqV_'),
(67, 68, 'j.EWaNLCOklLhiY2jHtM'),
(68, 68, 'ymmGbbFrTwQPoRYwv1wb'),
(69, 68, 'w.NWz_Q0gRVk.Xia.rN2'),
(70, 69, 'o..rZnpjmiXklGADsUWO');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuestionnaire` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ouverte` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `idQuestionnaire`, `question`, `ouverte`) VALUES
(1, 1, 'Qui l\'a réalisé ?', 0),
(2, 2, 'Rona', 0),
(3, 3, 'test', 0),
(4, 4, 'RYU', 0),
(5, 5, 'Ronan', 0),
(6, 6, 'RONAN est beau', 0),
(7, 7, 'qddzds', 0),
(8, 8, 'cs', 0),
(9, 9, 'hgrrehgger', 0),
(10, 10, 'vfzssdffc', 0),
(11, 11, 'fdsfzsfs', 0),
(12, 12, 'csdcs', 0),
(13, 13, 'nfd', 0),
(14, 14, 'fsfs', 0),
(15, 15, 'sv', 0),
(16, 16, 'dzdzsq', 0),
(17, 17, 'fefe', 0),
(18, 18, 'hjrthr', 0),
(19, 18, 'zdffz', 0),
(20, 18, 'zdffz', 0),
(21, 18, 'fsdfeds', 0),
(22, 19, 'Ici', 0),
(23, 19, 'autre', 0),
(24, 20, 'ndfg', 0),
(25, 21, 'bdf', 0),
(26, 21, 'jthg', 0),
(27, 22, 'jtytj', 0),
(28, 22, 'htht', 0),
(29, 23, 'gjkgk', 0),
(30, 23, 'gjkg', 0),
(31, 24, 'cgfjg', 0),
(32, 25, 'ghgh', 0),
(33, 25, 'jhkj', 0),
(34, 26, 'hfjkdsh', 0),
(35, 26, 'est-il beau ?', 0),
(36, 27, 'ggik', 0),
(37, 27, 'ghk', 0),
(38, 28, 'pfff', 0),
(39, 29, 'sffs', 0),
(40, 30, 'sdsc', 0),
(41, 30, 'vss', 0),
(42, 31, 'cscds', 0),
(43, 31, ' vxwvxw', 0),
(44, 32, 'TROR', 0),
(45, 33, 'zffz', 0),
(46, 34, 'qffq', 0),
(47, 35, 'Je t\'aime', 0),
(48, 36, 'Je t\'aime', 0),
(49, 37, 'Je t\'aime', 0),
(50, 39, 'dzdz', 0),
(51, 40, 'dzdzzd', 1),
(52, 41, 'cscs', 1),
(53, 42, 'cwcwcwwc', 1),
(54, 43, '2105', 1),
(55, 44, 'heegh', 1),
(56, 45, 'csdz', 1),
(57, 46, 'vsdvds', 1),
(58, 47, 'Qui est le plus beau', 1),
(59, 48, 'gsgs', 1),
(60, 49, 'gzeg', 1),
(61, 50, 'Je t\'aime', 0),
(62, 51, 'Je t\'aime', 1),
(63, 52, 'q21:44', 1),
(64, 53, 'Q21:51', 0),
(65, 54, 'Q21:54', 1),
(66, 55, 'Q21:59', 1),
(67, 56, 'Q22:07', 1),
(68, 57, 'Q22:16', 1),
(69, 58, 'Q22:20', 1),
(70, 59, 'Q22:31', 1),
(71, 60, 'dq', 1),
(72, 61, 'dq', 1),
(73, 62, 'Je t\'aime', 1),
(74, 63, 'Je t\'aime', 1),
(75, 64, 'test 1 de fin', 0),
(76, 65, 'test 1', 1),
(77, 66, 'est le plus beau', 1),
(78, 67, 'Cela marche-t-il ?', 1),
(79, 68, 'ça marche toujours ?', 1),
(80, 69, 'dqdq', 1);

-- --------------------------------------------------------

--
-- Structure de la table `questionnaire`
--

DROP TABLE IF EXISTS `questionnaire`;
CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tokenAdmin` varchar(25) NOT NULL,
  `tokenUser` varchar(25) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `visibilite` varchar(16) NOT NULL DEFAULT 'toujours',
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `statut` varchar(8) NOT NULL DEFAULT 'creation',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tokenAdmin` (`tokenAdmin`),
  UNIQUE KEY `tokenUser` (`tokenUser`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `tokenAdmin`, `tokenUser`, `titre`, `visibilite`, `debut`, `fin`, `statut`) VALUES
(1, 'PhyHlXIcakHuUFgo4yY_', 'uiUFmag9BZONCyDvCioj', 'The Fabelmans', 'toujours', '2023-03-29 12:52:54', '2023-03-29 13:52:00', 'creation'),
(2, 'wmF35BPhEMUJ6Wg4YK4t', 'WFfE7Sr0wOCy4DAQwafT', 'Film', 'toujours', '2023-03-29 15:53:52', '2023-03-29 16:52:00', 'creation'),
(3, 'bssM0aIJq6XioiDwHpC2', 'eZfTXgu488QrY_dndACY', 'test', 'toujours', '2023-03-29 16:17:27', '2023-03-29 17:17:00', 'creation'),
(4, '4XqKzWK6awbdMG2B_a3a', 'WIQDeZgLs6bGHXI4AyyL', 'Films', 'toujours', '2023-03-29 18:13:35', '2023-03-31 19:13:00', 'termine'),
(5, 'WFIh3dbzzkIyN.T4aqcC', 'nbm_jQFAwxwnMX9Rw.i0', 'Film', 'toujours', '2023-03-29 18:51:38', '2023-03-30 19:51:00', 'creation'),
(6, 'g.rtRsoLdNwqbdEOO6UO', '7Lku7CCMQJJotmZMhjv7', 'Ronan', 'toujours', '2023-03-29 19:31:46', '2023-03-30 20:31:00', 'publie'),
(7, '_MfmhBUFXYAZ_B7XlHUE', 'cNV8Q34yW5FQfujCC8VF', 'Ronan', 'toujours', '2023-03-29 19:49:15', '2023-03-29 20:49:00', 'publie'),
(8, 'BzyWH5McjFhRjU2Wq2eu', 'uWojUDLC92HWeY0QndIM', 'cs', 'toujours', '2023-03-29 19:49:53', '2023-03-29 20:49:00', 'publie'),
(9, 'ucKvG_xuv585RZIhY170', 'dA.U8Hy8wn.vKKmJdZDT', 'uyehrdghre', 'toujours', '2023-03-29 19:51:38', '2023-03-29 20:51:00', 'publie'),
(10, 'GQKYLheLsv5ui9DJcKZh', '1Vf.YDthOkOVL2Z5uGJZ', 'sdsdffczsf', 'toujours', '2023-03-29 19:54:09', '2023-03-29 20:54:00', 'publie'),
(11, 'xDEgNViACxnHXn_fBuEQ', 'xBDVsJB..NBPsn4xYDNE', 'fdsfsfs', 'toujours', '2023-03-29 19:56:02', '2023-03-29 20:55:00', 'publie'),
(12, 'XWwlbZ7KEbFIAzznyCYn', '19oZgZF2Z_f.gMdbXPqx', 'dscs', 'toujours', '2023-03-29 19:57:03', '2023-03-29 20:56:00', 'publie'),
(13, 'SF6_tUqr8H3sQcO9z2Sv', '2qhfUHyukcdMdvlW34eh', 'ngbnc', 'toujours', '2023-03-29 19:58:03', '2023-03-29 20:57:00', 'publie'),
(14, 'nWwkp3jQa_Czw_pgxy3F', 'nTnjxdzagZMUq6ATHHpx', 'dzfsdf', 'toujours', '2023-03-29 20:01:02', '2023-03-29 21:00:00', 'creation'),
(15, 'FamvUv9bnYYxFv68a4JY', 'O78frA1QWl2OKN5XfnQE', 'vs', 'toujours', '2023-03-29 20:04:16', '2023-03-29 21:04:00', 'creation'),
(16, 'vwNlE4S1eTxwdBCctuOt', 'PtlISQrApCMonlcJrBJy', 'sqdzsd', 'toujours', '2023-03-29 20:12:29', '2023-03-29 21:12:00', 'creation'),
(17, 'TRWI_PkTVhxLgEoO5mEg', '8D1Va5eIfNUzablfdQIX', 'fefe', 'toujours', '2023-03-29 20:31:09', '2023-03-29 21:31:00', 'creation'),
(18, 'N0gWhjJkytrCZv6fgR0b', 'JHLT4Vl5g7TG0c9AThmq', 'hdghrtr', 'toujours', '2023-03-29 20:44:19', '2023-03-29 21:44:00', 'creation'),
(19, 'gTa_PmYPe6DctU5Ruqoa', '4CRuXifR5fQqbaimlyia', 'Fin', 'toujours', '2023-03-29 20:56:24', '2023-03-29 21:56:00', 'creation'),
(20, 'PVk9a95WrKwjxX2yNHwk', 'WRVBQW4_K7f2ISwgwiXN', 'jthgg', 'toujours', '2023-03-29 20:57:49', '2023-03-29 21:57:00', 'creation'),
(21, 'E3JHg0ogPUDhgBIKMYM7', 'XF61AOX9JrcSMmiMqxmx', 'bgrdfd', 'toujours', '2023-03-29 20:58:43', '2023-03-29 21:58:00', 'creation'),
(22, 'nzS1m4h.S9CsGRUzEj73', '0E5T0q.m.whx64qjUsRi', 'tkyujty', 'toujours', '2023-03-29 21:00:39', '2023-03-29 22:00:00', 'termine'),
(23, 'xziZzFsWLD37ihE288jd', 'a4QmjOkEEOnqFeFffuLF', 'bhjghj', 'toujours', '2023-03-29 21:13:44', '2023-03-29 22:13:00', 'publie'),
(24, 'zcHzQ61XdIGpQE1X9u93', 'avUQAnJvGvPfLoyUB30p', 'gfg', 'toujours', '2023-03-29 21:17:00', '2023-03-29 22:16:00', 'creation'),
(25, '6ZrOZYTd19QdKOgYph2x', 'Rv75iQrzLwPP9iXnv_dU', 'gjgi', 'toujours', '2023-03-30 08:14:54', '2023-03-30 09:14:00', 'publie'),
(26, 'fShmijW6eYEMLHpVJPAj', 'x2f.5zlld0JTQz5aVYus', 'husky (le film du chien)', 'toujours', '2023-03-30 08:40:18', '2023-03-30 09:37:00', 'creation'),
(27, 'hkvc3d3pKN8igNOMUYkp', 'HXBTvYOLvi.mPFL0B.me', 'ghjgiu', 'toujours', '2023-03-30 11:25:04', '2023-03-30 12:24:00', 'creation'),
(28, 'dIOq_NNZ8X.BGqsQz1js', '3Wry7rU6j5rGVAfP3wTS', 'pfff', 'toujours', '2023-03-30 14:30:37', '2023-03-30 15:30:00', 'creation'),
(29, '3c5Dn6VX.DaRcRR_4hKJ', 'sfkI6yNVuLojiwoPUaDb', 'vcsvs', 'toujours', '2023-03-30 17:55:04', '2023-03-30 18:54:00', 'creation'),
(30, '_YAzYMgo_2vQ5XQVTn73', '0_biGxWDu.oJN5KXdMQ7', 'fsfs', 'toujours', '2023-03-30 17:57:25', '2023-03-30 18:56:00', 'creation'),
(31, 'J7TZaySWbVEE4Gdclac6', 'kurxqLVd.OaZPoNuXXRy', 'sccsd', 'toujours', '2023-03-30 18:22:18', '2023-03-30 19:19:00', 'creation'),
(32, 'hWJrRafnP0rKREe2bnZK', 'WxWo5hr5k2wgeYVSF36s', 'Test', 'toujours', '2023-03-30 18:25:17', '2023-03-30 19:25:00', 'creation'),
(33, 'VwwVWP.3tCIXYWMZV6BX', 'jRE.x49Tcerwh391xGqV', 'sfsfdzs', 'apresfin', '2023-03-30 18:30:54', '2023-03-30 19:28:00', 'creation'),
(34, 'tgWzduYBfLa4sx0MhwJ9', 'oq0S0siLFByxjYe8eMlB', 'dfsfqqfds', 'apresfin', '2023-03-30 18:31:45', '2023-03-30 19:31:00', 'publie'),
(35, 'Ovr2A5bt7swpZ4DPSrp2', 'FG5Xq6Hxa8PmBdbJKift', 'test formulaire', 'apresfin', '2023-03-30 18:41:27', '2023-03-30 19:40:00', 'publie'),
(36, 'HmcYPwnSx3Cqz.CO1yBT', '5c66E5Ix7m0H1pHPqlk_', 'Test après avoir répondu', 'apresreponse', '2023-03-30 18:55:20', '2023-03-30 19:54:00', 'publie'),
(37, 'wkp5UNp2zLGQUFTjStRx', 'cVuysNBMz01RVGKHI4ys', 'Test après fin', 'apresfin', '2023-03-30 18:57:39', '2023-03-30 19:56:00', 'termine'),
(38, 'lO0NgLhUB6HqvMwZxo90', 'JbrFizxQh2wrwy.Yfi1w', 'dzdzdz', 'toujours', '2023-03-30 19:41:28', '2023-03-30 20:37:00', 'creation'),
(39, 'dcnmS_zOKspPwdiDmGad', '9C5bg7DWjuqcz_CBpUp3', 'dzdzdz', 'toujours', '2023-03-30 19:43:32', '2023-03-30 20:37:00', 'termine'),
(40, 'TpaQJyKmquK9ilukX_Bd', '94dTZc.7TGQ16JatpPJ4', 'zdzd', 'toujours', '2023-03-30 19:44:51', '2023-03-30 20:44:00', 'termine'),
(41, 'HIKaqS.6tD56IQKLtNBY', '4b5yQlKkprr3F9i1yWzE', 'cscs', 'toujours', '2023-03-30 20:50:23', '2023-03-30 21:50:00', 'termine'),
(42, 'rrmdW1nceF78u8F1qV4y', 'M8v1FpubIjj10ElaW7l7', 'ccwwccxw', 'toujours', '2023-03-30 21:00:47', '2023-03-30 22:00:00', 'termine'),
(43, 'ao87fHKEiULB1wLEFGrP', 'pU5kWiKM_kpcoliJKkG6', 'fdfer', 'toujours', '2023-03-30 21:05:54', '2023-03-30 22:05:00', 'termine'),
(44, 'YVLevGLjThoIRyi9ZC45', 'i3HbCYkNm1B837Ml2iFq', 'hergherger', 'toujours', '2023-03-30 21:25:02', '2023-03-30 22:24:00', 'termine'),
(45, 'qOzH4JmqHIlBnfiukGEM', 'OCDXXHPSxOkwkLS0rEtl', 'sccs', 'toujours', '2023-03-30 21:28:28', '2023-03-30 22:28:00', 'termine'),
(46, '2eMhQtsu86zdzB_sRkve', 'BZd0budvzzTJD6dzkSFo', 'bdsvsxvds', 'toujours', '2023-03-30 21:31:38', '2023-03-30 22:31:00', 'termine'),
(47, 'WJQHOapNnJjXhtBJXqu3', 'pye_ksWq2vx9zAcLA4mW', 'réponse libre non choisie', 'toujours', '2023-03-30 21:33:25', '2023-03-30 22:32:00', 'termine'),
(48, 'vz.v2Qaz45wAP1oWwK8N', '.eVigaH3Z2kq9cC_tG0c', 'geg', 'toujours', '2023-03-30 21:37:32', '2023-03-30 22:37:00', 'termine'),
(49, 'neuow3fnhliLqYTjTUA0', 'ZmLA4Gk26qWoZ.fpmx1p', 'grezgez', 'toujours', '2023-03-30 21:38:52', '2023-03-30 22:38:00', 'termine'),
(50, 'g5ZysHPK7CiD3OMaTLmE', 'pa.l73VptS4jDAbCi_R3', 'dzdzdz', 'toujours', '2023-03-30 21:40:55', '2023-03-30 22:40:00', 'termine'),
(51, '8vEBDgDC7oK.qshKlgvi', 'XDqkoD_d5jxIjyxNC7wX', 'Comme avant', 'toujours', '2023-03-30 21:42:30', '2023-03-30 22:42:00', 'termine'),
(52, '_Xu_aCJATheSMdqljU.Q', 'hvsD.jk0xYZD42y8VGLH', '21:44', 'toujours', '2023-03-30 21:44:46', '2023-03-30 22:44:00', 'termine'),
(53, '7gtQKn93Q34cqOGJ8UJA', 'KPZBaeZ989c9uZwXyDcH', '21:52', 'toujours', '2023-03-30 21:52:28', '2023-03-30 22:52:00', 'termine'),
(54, 'mFSahCE6eeQhA50mDujW', 'z.hU4cIOYLG3_XflRUsm', '21:54', 'toujours', '2023-03-30 21:54:30', '2023-03-30 22:53:00', 'termine'),
(55, 'JC4jIaGzW54RiE3LprRU', 'td5IHe9.vH89jX2m1ALa', '21:59', 'toujours', '2023-03-30 21:59:59', '2023-03-30 22:59:00', 'termine'),
(56, 'x_KWnjQTWt2AqYaUP.Gb', 'PfEPdtsuYz96W7NK4zYk', '22:07', 'toujours', '2023-03-30 22:08:05', '2023-03-30 23:07:00', 'termine'),
(57, 'nuFl5uINIv_rN0p13R22', 'LD0hJNGCyDvkpo3CudWK', '22:16', 'toujours', '2023-03-30 22:16:21', '2023-03-30 23:16:00', 'termine'),
(58, 'I.NQulbmE3C3tfl..qWr', 'jlrsF5CbW4OZ6o3HSJtQ', '22:20', 'toujours', '2023-03-30 22:21:00', '2023-03-30 23:20:00', 'termine'),
(59, 'G9VYpH3T8sxNEa2CZMjz', 'HratyNcsoV8EvKyhB.Tz', '22:31', 'toujours', '2023-03-30 22:31:16', '2023-03-30 23:31:00', 'termine'),
(60, 'sThpidX5inTEjRj8vy79', 'H0xnFIfdGlUwCzOjbxIi', 'q', 'toujours', '2023-03-30 22:32:26', '2023-03-30 23:32:00', 'termine'),
(61, '9Bh013odLweC9GkvqNC4', 'j90T5GLSmTcg0u.jKmRH', 'dqdq', 'toujours', '2023-03-30 22:32:58', '2023-03-30 23:32:00', 'termine'),
(62, 'yZqLG2iDwwpYyikx7szM', 'uwVRs16wdpPtIkt3ioWH', 'high can fly', 'toujours', '2023-03-30 22:45:48', '2023-03-30 23:45:00', 'termine'),
(63, 'CQ5LvD4.5C4OT7Zkg4nU', 'QYhXKhKJVeNwAajVw2r_', 'fin', 'apresreponse', '2023-03-30 22:48:10', '2023-03-30 23:47:00', 'termine'),
(64, 'CPQ_58MuMMFkhCQFp0.r', 'Qk7YcBU5bXrEUcrGYH.1', 'premier test de fin', 'toujours', '2023-03-30 23:04:54', '2023-03-31 00:04:00', 'termine'),
(65, 'uacHB8xtyFOsE_oUNS6x', 'XPCCwyz1zx4xUF1IxmTa', 'test de fin', 'toujours', '2023-03-30 23:06:10', '2023-03-31 00:05:00', 'termine'),
(66, 'sk4vT.A_gmzRC6ukPUV5', 'W9Kq4DwXQplnb2u5Z9rO', 'Ronan', 'toujours', '2023-03-31 06:55:53', '2023-03-31 07:55:00', 'termine'),
(67, '4hxnNQaDgaEKpS8fJ_Zm', 'nGPRbFvreMiBBteJOzE5', 'Test 1 téléphone ', 'toujours', '2023-03-31 07:04:46', '2023-03-31 08:03:00', 'termine'),
(68, 'FGexxfwxPXdXLnHp9zAS', '5xtrVbGeaJ9_IL1bTQTG', 'test 2 dernier jour', 'toujours', '2023-03-31 08:21:53', '2023-03-31 09:21:00', 'termine'),
(69, '1p3qm7vH8VC6IoXwtw.D', 'wvlE22Z_tqjNPv.782oG', 'dqdqdq', 'toujours', '2023-03-31 10:06:17', '2023-03-31 11:06:00', 'termine');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idQuestion` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `reponse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`id`, `idQuestion`, `position`, `reponse`) VALUES
(1, 1, 1, 'Steve (Steven Spielberg)'),
(2, 2, 1, 'dddd'),
(3, 3, 1, 'test'),
(4, 3, 2, 'teste'),
(5, 4, 1, 'UN'),
(6, 4, 2, 'DEUX'),
(7, 5, 1, 'Un'),
(8, 5, 2, 'DSeux'),
(9, 6, 1, 'OUI'),
(10, 6, 2, 'OUI'),
(11, 7, 1, 'dsqdq'),
(12, 8, 1, 'cs'),
(13, 9, 1, 'ghrgergr'),
(14, 10, 1, 'fds'),
(15, 10, 2, 'zfdsd'),
(16, 11, 1, 'fzdzf'),
(17, 12, 1, 'csdcs'),
(18, 13, 1, 'bnfd'),
(19, 14, 1, 'sffsf'),
(20, 15, 1, 'fsd'),
(21, 16, 1, 'dsq'),
(22, 17, 1, 'fefe'),
(23, 18, 1, 'rjhthtr'),
(24, 19, 1, 'fz'),
(25, 20, 1, 'fz'),
(26, 21, 1, 'sfdfdzs'),
(27, 22, 1, 'la'),
(28, 23, 1, 'oui'),
(29, 24, 1, 'ndf'),
(30, 25, 1, 'gdr'),
(31, 26, 1, 'hdrgf'),
(32, 27, 1, 'jyjrty'),
(33, 28, 1, 'hthtr'),
(34, 29, 1, 'hgohio'),
(35, 30, 1, 'huh'),
(36, 31, 1, 'fjf'),
(37, 32, 1, 'gjgi'),
(38, 33, 1, 'jkhoh'),
(39, 34, 1, 'fdhjflhdlsj'),
(40, 35, 1, 'oui'),
(41, 35, 2, 'non'),
(42, 36, 1, 'ghjk'),
(43, 37, 1, 'hjkh'),
(44, 38, 1, 'pfff'),
(45, 39, 1, 'sf'),
(46, 40, 1, 'cscs'),
(47, 41, 1, 'svsccs'),
(48, 42, 1, 'fqqs'),
(49, 43, 1, 'cxwvvcxw'),
(50, 44, 1, 'qdsdq'),
(51, 45, 1, 'fzfzfz'),
(52, 46, 1, 'fqsfq'),
(53, 46, 2, 'fqfq'),
(54, 47, 1, 'pas du tout'),
(55, 47, 2, 'Un Peur'),
(56, 47, 3, 'beacoup'),
(57, 48, 1, 'un peu'),
(58, 48, 2, 'beaucoup'),
(59, 48, 3, 'passionnément'),
(60, 48, 4, 'à la folie'),
(61, 49, 1, 'Un peu'),
(62, 49, 2, 'Beaucoup'),
(63, 49, 3, 'Très beaucoup'),
(64, 49, 4, 'tré tré bocou'),
(65, 50, 1, '1'),
(66, 51, 1, '1'),
(67, 52, 1, '1'),
(68, 53, 1, '1'),
(69, 54, 1, '1'),
(70, 54, 1, 'Ma réponse'),
(71, 55, 1, '1'),
(72, 56, 1, '1'),
(73, 56, 1, 'Ma réponse'),
(74, 57, 1, '1'),
(75, 58, 1, '1'),
(76, 61, 1, 'Un peu'),
(77, 61, 2, 'beaucoup'),
(78, 64, 1, 'rep1'),
(79, 64, 2, 'rep2'),
(80, 65, 1, 'A1'),
(81, 65, 2, 'A2'),
(82, 65, 1, 'A3'),
(83, 66, 1, 'R1'),
(84, 66, 2, 'R2'),
(85, 66, 1, 'R3'),
(86, 66, 1, 'xsws'),
(87, 67, 1, 'Q1'),
(88, 67, 2, 'Q2'),
(89, 67, 1, 'Q3'),
(90, 68, 1, 'R1'),
(91, 68, 2, 'R2'),
(92, 68, 1, 'R3'),
(93, 69, 1, 'R1'),
(94, 69, 2, 'R2'),
(96, 70, 1, 'Q1'),
(97, 70, 2, 'Q2'),
(98, 70, 1, 'Q3'),
(99, 71, 1, 'dq'),
(100, 71, 1, 'ddd'),
(101, 72, 1, 'dq'),
(102, 72, 1, 'dqdqd'),
(104, 73, 1, 'beaucoup'),
(105, 73, 2, 'beaucoup'),
(107, 73, 0, 'énormement'),
(108, 74, 1, 'oui'),
(109, 74, 2, 'non'),
(110, 74, 0, 'peut etre'),
(112, 75, 1, 'R1'),
(113, 75, 2, 'R2'),
(114, 76, 1, 'R1'),
(115, 76, 2, 'R2'),
(118, 76, 0, 'R5'),
(119, 77, 1, 'oui'),
(120, 77, 2, 'non'),
(121, 77, 0, 'évidemment'),
(122, 78, 1, 'Oui'),
(123, 78, 2, 'Non'),
(124, 78, 0, 'Peut-être'),
(125, 79, 1, 'R1'),
(126, 79, 2, 'R2'),
(127, 79, 0, 'R3'),
(128, 80, 1, 'dqdq'),
(129, 80, 2, 'dqqd'),
(130, 80, 0, 'dqsdq');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

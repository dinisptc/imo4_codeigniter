-- phpMyAdmin SQL Dump
-- version 4.0.10.5
-- http://www.phpmyadmin.net
--
-- M√°quina: localhost
-- Data de Cria√ß√£o: 21-Nov-2014 √†s 10:37
-- Vers√£o do servidor: 5.5.40-cll
-- vers√£o do PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `imocom_imo4`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_query`
--

CREATE TABLE IF NOT EXISTS `ci_query` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query_string` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=207 ;

--
-- Extraindo dados da tabela `ci_query`
--

INSERT INTO `ci_query` (`id`, `query_string`) VALUES
(1, 'titulo=0&texto=vxc'),
(2, 'titulo=0&texto=ww'),
(3, 'titulo=0&texto='),
(4, 'titulo=0&texto=wwwwwwwwwwwwww'),
(5, 'titulo=wwwwwwwwwwwwwww&texto=wwwwwwwwwwwwww'),
(6, 'titulo=xdg&texto=fdg'),
(7, 'titulo=&texto='),
(8, 'titulo=eeeeeeeeeeeeeeeeeeeeeeeeeeee&texto='),
(9, 'titulo=kjgkvvlv&texto='),
(10, 'titulo=wwwwwwwwwwwww&texto='),
(11, 'titulo=fdgf&texto='),
(12, 'titulo=eeeeeeeeeeeeeeeeeeeeeeeeeeee&texto='),
(13, 'titulo=bcvb&texto='),
(14, 'titulo=eeeeeeeeeeeeeeeeeeeeeeeeeeee&texto='),
(15, 'titulo=dadsaf&texto='),
(16, 'titulo=ww&texto='),
(17, 'titulo=dffgf&texto='),
(18, 'titulo=wwwwwwwwwwwwwww&texto='),
(19, 'titulo=eeeeeeeeeeeeeeeeeeeeeeeeeeee&texto='),
(20, 'titulo=&texto=dd'),
(21, 'titulo=bbbbbbbbbbbbbbbb&texto='),
(22, 'titulo=w&texto='),
(23, 'titulo=w&texto='),
(24, 'titulo=d&texto=s'),
(25, 'titulo=eeeeeeeeeeeeeeeeeeeeeeeeeeee&texto='),
(26, 'titulo=w&texto='),
(27, 'titulo=&texto='),
(28, 'titulo=k&texto='),
(29, 'titulo=&texto='),
(30, 'titulo=ww&texto='),
(31, 'titulo=wwwwwwwwwwwwwww&texto='),
(32, 'titulo=w&texto='),
(33, 'titulo=ww&texto='),
(34, 'titulo=&texto='),
(35, 'titulo=&texto='),
(36, 'titulo=&texto='),
(37, 'titulo=w&texto='),
(38, 'titulo=c%2B%2B&texto='),
(39, 'titulo=c%2B%2B&texto='),
(40, 'titulo=c%2B%2B&texto='),
(41, 'titulo=d&texto='),
(42, 'titulo=&texto=c%2B%2B'),
(43, 'titulo=a&texto='),
(44, 'titulo=s&texto='),
(45, 'titulo=w&texto='),
(46, 'titulo=dgstyhettw&texto='),
(47, 'titulo=&texto=sdfgsdag'),
(48, 'titulo=qwww&texto='),
(49, 'titulo=qw&texto='),
(50, 'titulo=q+w&texto='),
(51, 'titulo=w&texto='),
(52, 'titulo=w+q&texto='),
(53, 'titulo=&texto='),
(54, 'titulo=er&texto='),
(55, 'titulo=&texto='),
(56, 'titulo=novo&texto='),
(57, 'titulo=ruA&texto=0'),
(58, 'titulo=rua&texto=0'),
(59, 'titulo=canto&texto=0'),
(60, 'titulo=canto&texto='),
(61, 'titulo=canto&texto=0'),
(62, 'titulo=canto&texto=0'),
(63, 'titulo=canto&texto=0'),
(64, 'titulo=canto&texto='),
(65, 'titulo=rua&texto=0'),
(66, 'titulo=canto&texto=0'),
(67, 'titulo=canto&texto='),
(68, 'titulo=canto&texto=0'),
(69, 'titulo=canto&texto='),
(70, 'titulo=canto&texto=0'),
(71, 'titulo=canto&texto=0'),
(72, 'titulo=canto&texto=0'),
(73, 'titulo=canto&texto=0'),
(74, 'titulo=canto&texto='),
(75, 'titulo=canto&texto='),
(76, 'titulo=canto&texto=0'),
(77, 'titulo=&texto=0'),
(78, 'titulo=&texto=0'),
(79, 'titulo=&texto=0'),
(80, 'titulo=&texto=0'),
(81, 'titulo=&texto=0'),
(82, 'titulo=&texto=0'),
(83, 'titulo=rsgt&texto=0'),
(84, 'titulo=&texto=0'),
(85, 'titulo=gdgg&texto=0'),
(86, 'titulo=&texto=0'),
(87, 'titulo=q&texto=0'),
(88, 'titulo=&texto=0'),
(89, 'titulo=250&texto=0'),
(90, 'titulo=cant&texto='),
(91, 'titulo=cant&texto='),
(92, 'titulo=cant&texto='),
(93, 'titulo=cant&texto='),
(94, 'titulo=xd&texto=0'),
(95, 'titulo=cant&texto=0'),
(96, 'titulo=How+to+install+xdebug-netbeans+on+ubuntu+linux+12.04+%5Bsolved%5D&texto='),
(97, 'titulo=cant&texto='),
(98, 'titulo=How+to+install+xdebug-netbeans+on+ubuntu+linux+12.04+%5Bsolved%5D&texto='),
(99, 'titulo=cant&texto='),
(100, 'titulo=t1+porto&texto='),
(101, 'titulo=T1+porto&texto='),
(102, 'titulo=porto&texto=0'),
(103, 'titulo=t1&texto=0'),
(104, 'titulo=T1%2Cporto&texto=0'),
(105, 'titulo=300&texto=0'),
(106, 'titulo=Porto&texto=0'),
(107, 'titulo=rua+de+vilar&texto=0'),
(108, 'titulo=T1&texto=0'),
(109, 'titulo=T1+porto&texto=0'),
(110, 'titulo=massarelos+porto&texto=0'),
(111, 'titulo=por+300&texto=0'),
(112, 'titulo=&texto=0'),
(113, 'titulo=&texto='),
(114, 'titulo=T1+porto&texto='),
(115, 'titulo=massarelos+porto&texto='),
(116, 'titulo=&texto=0'),
(117, 'titulo=T1+porto&texto=0'),
(118, 'titulo=cant&texto='),
(119, 'titulo=T1+porto&texto='),
(120, 'titulo=massarelos+porto&texto='),
(121, 'titulo=T1&texto='),
(122, 'titulo=por+300&texto='),
(123, 'titulo=250&texto='),
(124, 'titulo=&texto=0'),
(125, 'titulo=gaia&texto=0'),
(126, 'titulo=&texto=0'),
(127, 'titulo=apartamento&texto=0'),
(128, 'titulo=&texto=0'),
(129, 'titulo=&texto=0'),
(130, 'titulo=t3+porto&texto=0'),
(131, 'titulo=&texto=0'),
(132, 'titulo=&texto=0'),
(133, 'titulo=&texto=0'),
(134, 'titulo=moradia&texto='),
(135, 'titulo=matosinhos&texto=0'),
(136, 'titulo=vila+do+conde&texto=0'),
(137, 'titulo=&texto=0'),
(138, 'titulo=matosinhos&texto='),
(139, 'titulo=can&texto='),
(140, 'titulo=&texto=0'),
(141, 'titulo=t2&texto=cantanhede'),
(142, 'titulo=lisboa&texto=0'),
(143, 'titulo=T2+Cacem&texto=0'),
(144, 'titulo=agualva&texto=0'),
(145, 'titulo=coimbra&texto=0'),
(146, 'titulo=coimbra&texto=0'),
(147, 'titulo=porto&texto=0'),
(148, 'titulo=t3+odivelas&texto=0'),
(149, 'titulo=&texto=0'),
(150, 'titulo=porto&texto=0'),
(151, 'titulo=t1&texto=0'),
(152, 'titulo=t0&texto=0'),
(153, 'titulo=200&texto=0'),
(154, 'titulo=250&texto=0'),
(155, 'titulo=&texto='),
(156, 'titulo=&texto=can'),
(157, 'titulo=&texto=0'),
(158, 'titulo=cascais&texto=0'),
(159, 'titulo=&texto='),
(160, 'titulo=&texto=0'),
(161, 'titulo=T1+Bonfim++Ref.+8742%2FA&texto='),
(162, 'titulo=porto&texto='),
(163, 'titulo=cantanhede&texto='),
(164, 'titulo=cantanhede&texto=0'),
(165, 'titulo=porto&texto=0'),
(166, 'titulo=lusia&texto=0'),
(167, 'titulo=0&texto=0'),
(168, 'titulo=0&texto=0'),
(169, 'titulo=0&texto=0'),
(170, 'titulo=Strasbourg&texto=0'),
(171, 'titulo=&texto=0'),
(172, 'titulo=&texto=0'),
(173, 'titulo=&texto=0'),
(174, 'titulo=coimbra&texto=0'),
(175, 'titulo=comprar+t3+coimbra&texto=0'),
(176, 'titulo=0&texto=0'),
(177, 'titulo=0&texto=0'),
(178, 'titulo=0&texto=0'),
(179, 'titulo=0&texto=0'),
(180, 'titulo=0&texto=0'),
(181, 'titulo=&texto=0'),
(182, 'titulo=cantanhede&texto=0'),
(183, 'titulo=cantanhede+loja&texto=0'),
(184, 'titulo=loja&texto=0'),
(185, 'titulo=loja+%2C+cantanhede&texto=0'),
(186, 'titulo=&texto=0'),
(187, 'titulo=porto&texto='),
(188, 'titulo=&texto=porto'),
(189, 'titulo=0&texto=0'),
(190, 'titulo=loja&texto='),
(191, 'titulo=&texto=0'),
(192, 'titulo=&texto=0'),
(193, 'titulo=&texto=0'),
(194, 'titulo=&texto=0'),
(195, 'titulo=&texto=0'),
(196, 'titulo=&texto=0'),
(197, 'titulo=&texto=0'),
(198, 'titulo=&texto=0'),
(199, 'titulo=&texto=0'),
(200, 'titulo=&texto=0'),
(201, 'titulo=&texto=0'),
(202, 'titulo=&texto=0'),
(203, 'titulo=wallpapers&texto=0'),
(204, 'titulo=0&texto=0'),
(205, 'titulo=0&texto=0'),
(206, 'titulo=eee&texto=0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotosquartos`
--

CREATE TABLE IF NOT EXISTS `fotosquartos` (
  `idfotosquartos` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `idquarto` int(11) NOT NULL,
  PRIMARY KEY (`idfotosquartos`),
  KEY `fk_fotosquartos_1` (`idquarto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=320 ;

--
-- Extraindo dados da tabela `fotosquartos`
--

INSERT INTO `fotosquartos` (`idfotosquartos`, `user_id`, `file_name`, `idquarto`) VALUES
(140, 2, 'd638e1e9f5a0b3389b4f0bc7519cb255.jpg', 122),
(141, 2, '3c3aded69128aa4e632c22e18f85615a.jpg', 122),
(142, 2, '138129779267678434b066fdc099c2f4.jpg', 122),
(143, 2, 'aa53727a75abe5fc6fd5b6b7efba6061.jpg', 122),
(150, 8, '1.jpg', 127),
(151, 8, '2.jpg', 127),
(152, 8, '3.jpg', 127),
(153, 8, '4.jpg', 127),
(154, 8, '5.jpg', 127),
(155, 8, '6.jpg', 127),
(156, 8, '7.jpg', 127),
(157, 8, '8.jpg', 127),
(158, 8, '9.jpg', 127),
(159, 8, '10.jpg', 127),
(160, 8, '11.jpg', 127),
(161, 8, '12.jpg', 127),
(162, 8, '13.jpg', 127),
(163, 8, '14.jpg', 127),
(164, 8, '15.jpg', 127),
(165, 10, '5f4675a87f3d6f98c08beddd27d05426.JPG', 128),
(166, 10, 'b3449b81cf8c69316699874264a4463c.JPG', 128),
(167, 10, '06b45de54ad9e7b7ae6fc2a9c404af33.JPG', 128),
(168, 10, 'a3d8e94687d7265463ed078615365d85.JPG', 128),
(169, 10, '190a3e83d3ce2b539d2317f227aa7e90.JPG', 128),
(170, 10, '89c68e3caede657a7f332d8bcf2d0cf3.JPG', 128),
(171, 10, 'c7212e1aa7a0f6765addb8e67ef61511.JPG', 128),
(172, 10, 'd56d76c0e7a30bb3701ccc3e4c08803d.JPG', 128),
(173, 10, '8e9cc6c01ee5b63fc9c58e55968ecc61.JPG', 128),
(174, 10, '3a6409128fb97a60cb7219a4302d8889.JPG', 128),
(175, 10, 'd50aeebd54f0a008bb0026fccf192e25.JPG', 128),
(176, 10, '244d641ff94b8b09d1d29de664229761.JPG', 128),
(177, 10, 'bea952521ba84076efd5b437f4637dee.JPG', 128),
(178, 10, '347fe0526845f297e611926f61bdc62f.JPG', 128),
(179, 10, 'bed8afb3d9d67db626c1587cef7281e2.JPG', 128),
(180, 10, 'd36e11558f9a2caaeff2390d3addfc13.JPG', 128),
(181, 10, '8bedc3d0758fd5d029d60d65ef556975.JPG', 128),
(182, 10, 'bed4c8ff6be907321657331113826393.JPG', 128),
(183, 10, 'b27e6d09d5605f6b0e99ba57c152f8f6.JPG', 128),
(184, 10, '8f2a5df622edc80fcd85b0dece4a745e.JPG', 128),
(185, 11, '2be9f0b4207d6035cd058367bd0a4b77.JPG', 130),
(186, 6, 'b9d5a25bc071fac13e31a18474668c1d.jpg', 133),
(187, 6, '704be7c4672eca2cf66134adc5ef0a05.jpg', 133),
(188, 6, '580a3110704e7bcdb2b04a0492abde6b.jpg', 133),
(189, 6, '1ce163a84f605f0e9a6fa841784b068e.jpg', 133),
(190, 6, 'b2e44b68beaeb0b6c4dbe7bd4a9c9d81.jpg', 133),
(191, 6, '88a8450c8f9a05ea14036a00cf64742d.jpg', 133),
(192, 6, '3ea1bc11929901d370805604aed8c750.jpg', 133),
(193, 6, '8ab6aba641d76cb1160e0e6e3fac7082.jpg', 133),
(194, 6, 'ff4cb53d32a1e19d9aa2cb0f29c97116.jpg', 133),
(195, 6, 'fe21a19b5655c5c65ebe60348441cd38.jpg', 133),
(196, 6, '41431c9d6baeb863a4cc67802df1e09c.jpg', 133),
(197, 6, '10d24639cf95e214f5538382734a98d6.jpg', 133),
(198, 6, 'a1e222a324269f12b4cea0b18bf58e81.jpg', 134),
(199, 6, '18f6949d9dbf6b2167c85f7a5cbe4c04.jpg', 134),
(200, 6, '31bebe9cd25015c62fc40d201eb172c9.jpg', 134),
(201, 6, '462d657547c31445d290b46fb3507fdd.jpg', 134),
(202, 6, '4a3f2871474ae9cd954784b4dae9eaa3.jpg', 134),
(203, 6, 'e6952fb1564f2e55e5f7e21f94d0401d.jpg', 134),
(204, 6, '86c0a6e31220fb2e22df9cf85e31a7ac.jpg', 134),
(205, 6, '383fa68f49e508ce13c30bdf654fa64a.jpg', 134),
(206, 6, 'ce48ef6a64d50cadc03217f70f646de8.jpg', 134),
(207, 6, 'c9efd1ce13d30d932f1f4bb4345d5b7e.jpg', 134),
(208, 6, '41096f163c2bd46941e9743f1684689a.jpg', 134),
(209, 6, 'f42b8fa25930f98e5942103f3e3d75e0.jpg', 134),
(210, 6, 'f1f3a1c05ee9172479f641abd0c00978.jpg', 134),
(211, 6, '021ca88b4bcbb0a03e47425e35a1ae6e.jpg', 134),
(212, 6, '3b661234f09784feabc4ed758f519a93.jpg', 134),
(213, 6, '799781e4b727206af2206030a6abc340.jpg', 134),
(214, 6, 'c242846a415acb4248ab9663b2aced2e.jpg', 134),
(215, 6, '9ee9ee517a6735fc152c18fb4b9d1bc1.jpg', 134),
(216, 6, 'afe1cd4fbb4b0513d20d7877d125e1d7.jpg', 134),
(217, 6, 'ae3ebedb54c47f94276c8c8aeba3fedc.jpg', 134),
(218, 6, '1d5dbbd7ea3d9db768a80123ad9a4d01.jpg', 135),
(219, 6, '9c83aff634c13c5fcb927e763346f242.jpg', 135),
(220, 6, '094a3f87e331b6cc558c5b58747d86ad.jpg', 135),
(221, 6, 'fa063e311d8e59a965dfa258ba3cbd0e.jpg', 135),
(222, 6, 'c160f1d413917210deb66f82bcb96d02.jpg', 135),
(223, 6, 'e23a3c8566b61cdca72b4288055f4315.jpg', 135),
(224, 6, '8ee9828e55181a951db5e2704dd3e24b.jpg', 135),
(225, 6, '9d75c762b5f26027c0835ccec854d149.jpg', 135),
(226, 6, '49ee700a47cc27a0c8a51cde73cbfb3b.jpg', 135),
(227, 6, 'eefb594e36e96dfcc6a22713b8fe691f.jpg', 135),
(228, 6, 'bb5232fb77e4da5d1ec4867107ee3742.jpg', 135),
(229, 6, 'a565a5da4b9a6d0f99926bc8598275b6.jpg', 135),
(230, 6, '0c3cccc20f9d127e98da0b9f6e075106.jpg', 135),
(231, 6, '24f0c864daba1dcbe480982662af9778.jpg', 135),
(232, 6, '621970a9ff4d202e9e5440765fd5a16b.jpg', 135),
(233, 6, '68bbeadfce86faf888ee9a799d62f90d.jpg', 135),
(234, 6, 'e13db06c2fee0cbf5ff12e1b1db8016c.jpg', 135),
(235, 6, 'd52da2a4a3f25f75eaf1e07b83414a87.jpg', 135),
(236, 6, '3485b6bd8cdbbc5adf33d5dcdbb7adab.jpg', 135),
(237, 6, '1a91bc3787472d623809591ec9479eab.jpg', 135),
(238, 12, 'c225e58f5b8b4dec06cab06da8d6b90e.jpg', 136),
(239, 13, 'd8df7533138b1806c420cafb40e92b60.jpg', 137),
(240, 13, 'a727b57f4ca42428b198885d3eb97769.jpg', 137),
(241, 13, '81610518823a3240ccb82a9d2ffb917f.jpg', 137),
(242, 13, '73a9b92ca7a8d96777b0e8308ebef780.jpg', 137),
(243, 13, 'd028fe065b215e2defefad0b0d532907.jpg', 137),
(244, 13, '6260e1e420e0fe9bc6ea2f64e354f02f.jpg', 137),
(245, 13, 'bf2d33452d5ce3edc197e22578fd964e.jpg', 137),
(246, 13, '598d271b5a032fa40ad79eea929c7662.jpg', 137),
(247, 13, '43b003cbf126b42db90e76d5482a4072.jpg', 137),
(248, 13, 'eab42acb3d1beb6e6c7e9e39c937579a.jpg', 137),
(249, 13, '2de9a1f55c37b2a8eda2d5cb0bccbed3.jpg', 137),
(250, 13, '922b9416575446ee2a5637ca569e7493.jpg', 137),
(251, 13, '551e0c8f62dcc5f4d72a81c3ac7421e4.jpg', 137),
(252, 13, 'b2f0531c0f3f1d2127901b7cf6088231.jpg', 137),
(253, 13, 'a4efca73e209306b2da3dcf5e9e38e44.jpg', 137),
(254, 13, 'c4edf3dfb013f4020320536c0f5e5fa1.jpg', 137),
(255, 12, '3b399eb4e47bcf53a0a7f041c79c7c54.jpg', 138),
(261, 12, '264365a24175a3a7f86953f39c06df7a.jpg', 144),
(262, 12, '81f73a6c0dffb0af0d51ad1d8db7fc93.jpg', 145),
(263, 12, '2458dea536cd7346674a7333677bcf8c.jpg', 146),
(264, 12, '395c0768feaaa8cbac31c481069cdb80.jpg', 146),
(265, 12, '60214863e704ddff7332b19fe4d4c7e3.jpg', 146),
(266, 12, 'f4ecf7a289e0d60657753ac9ddbfff7e.jpg', 146),
(267, 12, '8c3a499adf66a9aa57a6d3a1b4f63135.jpg', 146),
(268, 12, 'e39a8762f63f748b6fa82f8e4918ee21.jpg', 146),
(269, 12, '449d9f9c16b60b1250eca6cac6f34dd2.jpg', 146),
(270, 12, 'fe0db8b0eed2d3000a11529e0e6e617a.jpg', 146),
(271, 12, 'e706dff98588e0d5ffa41feebc7f8028.jpg', 146),
(272, 12, '2552f778d8173a308f64e3f302ea68e6.jpg', 146),
(273, 12, '9b5d3356c7f425778e660b2fa3717a30.jpg', 145),
(274, 12, '46f928387340cc6e2cab43e449200daa.jpg', 145),
(275, 12, 'a052bde9066878f6e686543c18700552.jpg', 145),
(276, 12, '927879075e3a5ad7f4babdea4c4a6553.jpg', 145),
(277, 12, '4e7a634ebe33c6c007097b9d86bb5568.jpg', 144),
(279, 12, '714f822bb15b42643c8cf4ffa89f1706.jpg', 144),
(280, 12, 'c75face22bad58ceb0b7769ea7d3648a.jpg', 144),
(281, 12, '401754f92509e95b7c9d0243bbb959f2.JPG', 144),
(282, 12, '4b990edb2d10fec11ff25eb4a176fa03.jpg', 144),
(283, 12, '6cc068dc02284bf90f67482c3e6880ae.jpg', 138),
(284, 12, '61a2f6f608a346d55bab1778dbf6dfc3.jpg', 138),
(285, 12, '5e91512630e7d4a808dfdbc3a84e5c82.jpg', 138),
(286, 12, '23b6edbfab3359403040094382d063d1.jpg', 138),
(287, 12, 'f28310e97fa9c23549dc58db80465fef.jpg', 136),
(288, 12, 'd8ac4b93833ebddcc63e7a87b4d49f22.jpg', 136),
(289, 12, 'ca8a837a7ec0803639c803ed112c8537.jpg', 136),
(290, 12, '67b7ff14e51ede18d70b3f6c1096edb3.jpg', 136),
(291, 12, '29edc65f5134b40ea4cdec3bdbd88ce0.jpg', 136),
(292, 12, '1dbb3cc2b5de442d8368345b2d1ae761.jpg', 136),
(293, 12, '4055353b14d1d41ad784590706f42d14.jpg', 147),
(294, 12, '2db2b9d605666fd0c15236df04362d5b.jpg', 147),
(295, 12, '23b8254efea911be5aa494d3357f80c7.jpg', 147),
(296, 12, '1228c4a7cee21a104be367aeb7acf515.jpg', 147),
(297, 12, '9d05c8686b07e8bc119109e551c1eb05.jpg', 147),
(298, 12, '9b7a2f77ae461e858501df16843283c9.jpg', 147),
(299, 12, '4aad1668d42067ff582ae879647de3a8.jpg', 147),
(300, 12, '1dbbab4ee40b159bf64b925a38fe2029.jpg', 148),
(301, 15, '3a119e0ffd3ed9af2f9c398781703484.jpg', 149),
(302, 15, '8bc22ef36decfa7be8bff4b39c27f06e.jpg', 149),
(303, 15, '70f37078ca32727c748e61142a98d0ed.jpg', 149),
(304, 15, 'd59cc15e4804c6214f7a72e3e1011376.jpg', 149),
(305, 15, 'd00ab92b5666fc36ecd72a5cf82c9636.jpg', 149),
(306, 15, 'fb056423f965ee9933519ca790e18909.jpg', 149),
(307, 15, '1f515d551fae4476232f1e66aefb139c.jpg', 149),
(308, 15, 'dc5efde0ebe796583cf3c9c57cdc408d.jpg', 149),
(309, 15, '44eab8edb0147ade8903e780fe2ae145.jpg', 149),
(310, 15, 'abca34098cce2c3809943da6ea933222.jpg', 149),
(311, 2, 'b98aa8c336ef658e4296d8ae83349005.jpg', 150),
(312, 2, '4bc0ade5f2582db49a311f2e35f467fa.jpg', 150),
(313, 2, '0be2713090276b191234436cc7eaa0bd.jpg', 150),
(314, 2, '88fe2f480915e51fb8324ed4235db91a.jpg', 150),
(315, 16, '6ab6976412642ae77e4fc41652a1ad1b.jpg', 152),
(316, 16, '8807cbba3d9808aeedced3eddb5443c8.jpg', 152),
(317, 16, 'c506be406f793177fec70611d244130c.jpg', 152),
(318, 16, 'cb50b69600144c7d0ba479f06fc55ce8.jpg', 152),
(319, 16, 'e0e335349cd026a457828e834c46ea8e.jpg', 152);

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'pago', 'pagante');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE IF NOT EXISTS `pagamentos` (
  `idpagamentos` int(11) NOT NULL AUTO_INCREMENT,
  `info_texto` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `datacriacao` datetime NOT NULL,
  PRIMARY KEY (`idpagamentos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pagamentos`
--

INSERT INTO `pagamentos` (`idpagamentos`, `info_texto`, `user_id`, `datacriacao`) VALUES
(1, '<p>\n	jose</p>\n<p>\n	silva nif 235423</p>\n', 3, '2013-11-12 11:38:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quartos`
--

CREATE TABLE IF NOT EXISTS `quartos` (
  `idquartos` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(1000) NOT NULL,
  `texto` text NOT NULL,
  `numvisitas` int(11) NOT NULL,
  `datacriacao` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 - pending / 1 - activo / 2 - desactivado',
  `endereco` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idquartos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=153 ;

--
-- Extraindo dados da tabela `quartos`
--

INSERT INTO `quartos` (`idquartos`, `titulo`, `texto`, `numvisitas`, `datacriacao`, `user_id`, `status`, `endereco`) VALUES
(122, 'Terreno urbano para venda com projecto aprovado, escap√£es sepins cantanhede , coimbra', '<p>\n	a 2 km da entrada da autoestrada da mealhada<br />\n	proximo da zona industrial de murtede<br />\n	<br />\n	tem centro de saude em sepins a 1 km<br />\n	tem escola primaria em sepins<br />\n	tem farmacia em sepins</p>\n', 197, '2013-11-12 18:06:49', 2, 1, 'rua canto escapaes sepins cantanhede coimbra portugal'),
(127, 'Andar Moradia T3 com garagem fechada para dois carros', '<p>\n	Garagem para dois carros&nbsp;</p>\n<p>\n	lavandaria exterior</p>\n<p>\n	sala com lareira</p>\n<p>\n	suite com roupeiros embutidos</p>\n<p>\n	boas &aacute;reas</p>\n<p>\n	&nbsp;</p>\n', 138, '2013-11-14 12:13:03', 8, 1, NULL),
(128, '3 Assoalhadas cozinha 100% equipada / mobilado/arrecada√ß√£o/ Agualva', '<div>\n	3 ASSOALHADAS NA AGUALVA, COZINHA 100% EQUIPADA (PLACA+FORNO+ESQUENTADOR+FRIGOR&Iacute;FICO+MAQUINA DA LOI&Ccedil;A)</div>\n<div>\n	SALA MOBILADA CONFORME FOTOS, ( PODER&Aacute; N&Atilde;O FICAR MOBILADA)</div>\n<div>\n	QUARTOS COM EXCELENTES &Aacute;REAS &nbsp;18M2 + 16M2 COM ROUPEIRO, WC COMPLETA</div>\n<div>\n	ARRECADA&Ccedil;&Atilde;O NO SOT&Atilde;O COM 10M2. CERTIFICADO ENERG&Eacute;TICO B+</div>\n<div>\n	J&Aacute; DISPON&Iacute;VEL PARA VISITA E ARRENDAMENTO</div>\n<div>\n	PEDE-SE 2 &Uacute;LTIMOS RECIBOS DE ORDENADO+IRS+PREFERENCIALMENTE FIADOR DE ACORDO COM OS RENDIMENTOS, UM M&Ecirc;S DE RENDA E UM DE CAU&Ccedil;&Atilde;O. &nbsp;2 &ordm; andar sem elevador</div>\n', 131, '2013-11-18 10:18:55', 10, 1, NULL),
(130, 'Apartamento T2 arrenda-se, Malveira, 450 ‚Ç¨', '<p>\n	Apartamento T2 com boas &aacute;reas, cozinha equipada, sala com lareira e recuperador de calor. Aquecimento central e um lugar de estacionamento. Centro da Malveira, concelho de Mafra.</p>\n', 108, '2013-11-18 15:36:30', 11, 1, 'malveira mafra portugal'),
(133, 'Apartamento T1 Mobilado e Equipado Matosinhos Sul', '<p>\n	<a href="http://almada.olx.pt/q/apartamento/c-367">Apartamento</a> T1 em <a href="http://www.olx.pt/">Matosinhos</a> Sul, junto ao Parque da Cidade e junto &agrave; praia, excelente estado de Conserva&ccedil;&atilde;o, situado na Av. Comendador Ferreira de Matos, condom&iacute;nio Fechado com parque para crian&ccedil;as, <a href="http://www.olx.pt/">campo</a> de jogos e relvado enorme, arrendamento com Condom&iacute;nio Inclu&iacute;do.</p>\n<p>\n	Marque ainda hoje sua visita</p>\n', 119, '2013-11-19 10:44:29', 6, 1, 'Rua Sousa Aroso'),
(134, 'T3+1 Le√ßa da Palmeira', '<p>\n	Apartamento usado em muito bem estado, 2 frentes, cozinha totalmente equipada, su&iacute;te, wc c/polyban, s/garagem, localizado a 500 Mts da praia, zoa de muito com&eacute;rcio.</p>\n<p>\n	Marque ainda hoje sua visita</p>\n', 109, '2013-11-19 10:47:38', 6, 1, 'Rua Hintze Ribeiro'),
(135, 'T-3 Duplex Lavra Novo', '<div style="font-family: arial, sans-serif; font-size: 13px;">\n	&nbsp;Tipologia &nbsp;&quot;tipo moradia&quot; (acesso directo da garagem aos apartamentos)</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Garagem individual fechada</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Duplex</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Casa de banho de servi&ccedil;o</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Pe&ccedil;as sanitarias suspensas</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Pavimetno &quot;Wicanders - Amorim&quot; Flutuante com 25 anos de garantia</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Cozinhas lacadas de alto brilho com tampos em silstone branco da marca &quot;J.dias&quot;</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Electrodom&eacute;sticos encastrados da marca &quot;Teka&quot; com frigorifico &quot;side by Side&quot;</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Carpintaria em sucupira com portas e roupeiros a toda a altura</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Ar condicionado da marca &quot;Daikin&quot; modelo &quot;Emura&quot; sistema &quot;inverter&quot;</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Portadas de protec&ccedil;&atilde;o em al&uacute;minio lacado</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Caixilharias de correr elevat&oacute;rias com corte t&eacute;rmico e vidro duplo sendo o exterior laminado</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Aspira&ccedil;&atilde;o central</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Pain&eacute;is solares t&eacute;rmicos</div>\n<div style="font-family: arial, sans-serif; font-size: 13px;">\n	- Casas de banho com paredes em vidro com impress&atilde;o digital</div>\n<div>\n	&nbsp;</div>\n', 122, '2013-11-19 10:51:49', 6, 1, 'Rua Professora Of√©lia Cruz Costa'),
(136, 'T1 Bonfim  Ref. 8742/A', '<p>\n	&Aacute;rea coberta: 60 m2.</p>\n<p>\n	2 frentes: Nascente/ Poente</p>\n<p>\n	1 Varanda</p>\n<p>\n	marquise</p>\n<p>\n	1 banho completo</p>\n<p>\n	pavimento quarto e sala em madeira</p>\n<p>\n	<strong>250 &euro;</strong></p>\n<p>\n	<strong>HABIPORTO PROPRIEDADES</strong></p>\n', 116, '2013-11-19 15:20:20', 12, 1, 'BONFIM'),
(137, 'T3 Senhora da Hora em condominio fechado, com terra√ßo, lugar duplo de garagem e arrumos', '<p>\n	Apartamento T3 com cerca de 150m2 de &aacute;rea &uacute;til, terra&ccedil;o de 14m2, com boa exposi&ccedil;&atilde;o solar (Nascente/Poente).</p>\n<p>\n	O apartamento est&aacute; inserido num condominio fechado, com zonas verdes, sala de condominio e &eacute; composto por:</p>\n<p>\n	Hall de entrada amplo</p>\n<p>\n	Sala com 36m2 e acesso ao terra&ccedil;o</p>\n<p>\n	Cozinha com imensa arruma&ccedil;&atilde;o</p>\n<p>\n	Lavandaria</p>\n<p>\n	Hall de quartos</p>\n<p>\n	Casa de banho completa</p>\n<p>\n	Quarto com 18m2 e roupeiro embutido</p>\n<p>\n	Quarto com 13 m2</p>\n<p>\n	Suite com roupeiros v&aacute;rios embutidos e varanda</p>\n<p>\n	&nbsp;</p>\n<p>\n	Arrumos</p>\n<p>\n	Lugar duplo de garagem</p>\n', 129, '2013-11-19 23:53:50', 13, 1, 'senhora da hora , porto'),
(138, 'T1 Kit  Baixa  Ref. 8714/A', '<p>\n	&Aacute;rea coberta: 50 m2.</p>\n<p>\n	Remodelado.</p>\n<p>\n	1 frente: Nascente.</p>\n<p>\n	1 banho completo.</p>\n<p>\n	Pavimento quarto em madeira e sala em ceramica</p>\n<p>\n	<strong>275,00 &euro;</strong></p>\n<p>\n	<strong>HABIPORTO PROPRIEDADES</strong></p>\n', 135, '2013-11-21 15:08:54', 12, 1, 'porto,portugal'),
(144, 'T0 Baixa equip. Ref. 8749/A', '<p>\n	&Aacute;rea coberta: 40 m2</p>\n<div>\n	Cozinha independente</div>\n<div>\n	Cozinha equipada com Placa, forno, frigorifico</div>\n<div>\n	1 Varanda</div>\n<div>\n	1 roupeiro</div>\n<div>\n	1 banho completo com banheira</div>\n<div>\n	pavimento em madeira</div>\n<div>\n	&nbsp;</div>\n<div>\n	<strong>275,00 &euro;&nbsp;</strong></div>\n<div>\n	&nbsp;</div>\n<div>\n	<strong>HABIPORTO PROPRIEDADES</strong></div>\n', 129, '2013-11-21 15:23:29', 12, 1, 'porto,portugal'),
(145, 'T1 Kit Constitui√ß√£o  Ref. 8265/A', '<p>\n	&Aacute;rea coberta: 39 m2</p>\n<p>\n	1 Frente</p>\n<p>\n	Sala: 18 m2</p>\n<p>\n	cozinha com fog&atilde;o</p>\n<p>\n	vidros duplos no quarto</p>\n<p>\n	1 banho completo</p>\n<p>\n	pavimento quarto em madeira e sala em ceramica</p>\n<p>\n	<strong>280,00 &euro;</strong></p>\n<p>\n	<strong>HABIPORTO PROPRIEDADES</strong></p>\n<p>\n	&nbsp;</p>\n', 124, '2013-11-21 15:30:23', 12, 1, 'Constitui√ß√£o'),
(146, 'T1 Ao Hosp. S. Jo√£o equip. Ref. 8706/A', '<div>\n	&Aacute;rea &nbsp;coberta: 50 m2</div>\n<div>\n	1 frente : Poente</div>\n<div>\n	1 Varanda</div>\n<div>\n	Cozinha equipada com placa, forno &nbsp;e frigorifico</div>\n<div>\n	lavandaria</div>\n<div>\n	1 roupeiro</div>\n<div>\n	1 banho completo</div>\n<div>\n	video porteiro</div>\n<div>\n	Pavimento quarto em madeira e sala em ceramica</div>\n<div>\n	&nbsp;</div>\n<div>\n	<strong>280,00 &euro;&nbsp;</strong></div>\n<div>\n	&nbsp;</div>\n<div>\n	<strong>HABIPORTO PROPRIEDADES</strong></div>\n', 142, '2013-11-21 15:44:35', 12, 1, 'Ao Hosp. S. Jo√£o'),
(147, 'T0+1 Faria Guimar√£es - Metro mob. equip. Ref. 8831/A', '<div>\n	&Aacute;rea coberta: 60 m2</div>\n<div>\n	Cozinha equipada com fog&atilde;o, frigorifico, maq. lavar roupa</div>\n<div>\n	lavandaria</div>\n<div>\n	1 banho completo</div>\n<div>\n	1 roupeiro</div>\n<div>\n	pavimento quarto e sala em madeira</div>\n<div>\n	Est&aacute; mobilado</div>\n<div>\n	&nbsp;</div>\n<div>\n	<strong>280,00 &euro;</strong></div>\n<div>\n	&nbsp;</div>\n<div>\n	<strong>HABIPORTO PROPRIEDADES</strong></div>\n<div>\n	&nbsp;</div>\n', 144, '2013-11-21 16:18:57', 12, 1, 'faria guimar√£es,metro ,porto,portugal'),
(148, 'T1 Kit √Ä Lus√≠ada c/ Terra√ßo Ref. 8465/A', '<p>\n	Terra&ccedil;o: 40 m2</p>\n<p>\n	&Aacute;rea coberta: 45 m2</p>\n<p>\n	1 banho completo</p>\n<p>\n	pavimento quarto em madeira e sala em ceramica</p>\n<p>\n	<strong>300,00 &euro;&nbsp;</strong></p>\n<p>\n	<strong>HABIPORTO PROPRIEDADES</strong></p>\n', 183, '2013-11-21 16:27:44', 12, 1, 'lusidia, porto'),
(149, 'T1 Quinta Seca Matosinhos', '<p style="padding: 10px 10px 0px 5px; margin: 0px; border: 0px; outline: 0px; font-size: 10pt; font-family: Arial, Helvetica, sans-serif; color: rgb(62, 62, 62); background-color: rgb(176, 182, 196);">\n	Apartamento usado em excelente estado, 2 frentes, pr&eacute; instala&ccedil;&atilde;o de aquecimento central, porta de seguran&ccedil;a, g&aacute;s canalizado, vidros duplos, cozinha equipada c/placa, forno, m&aacute;quina de lavar lou&ccedil;a e combinado, lugar de garagem e arrumos.</p>\n<div>\n	&nbsp;</div>\n', 145, '2013-12-05 12:52:28', 15, 1, 'quinta seca'),
(150, 'loja para alugar em cantanhede coimbra, portugal - 250‚Ç¨', '<p>\n	loja para alugar em cantanhede coimbra, portugal</p>\n<p>\n	26 loja 8 rua luis de camoes, cantanhede</p>\n<p>\n	pre&ccedil;o 250 &euro; por m&ecirc;s</p>\n<p>\n	proximo das escolas em cantanhede</p>\n<p>\n	certifica&ccedil;&atilde;o energetica G</p>\n<p>\n	tambem vendo por 75 000 &euro;</p>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n<p>\n	&nbsp;</p>\n', 328, '2013-12-21 16:41:32', 2, 1, '26 loja 8 rua luis de camoes, cantanhede'),
(152, 'T3 Pinheiro Manso - Porto', '<p>\n	T3 Rigorosamente Novo no Pinheiro Manso.<br />\n	Excelente localiza&ccedil;&atilde;o.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\n	2 Frentes Nascente/Poente.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\n	Cozinha com 12m2 equipada, lavandaria.<br />\n	Sala com 22m2.<br />\n	Marque j&aacute; a sua visita!!!</p>\n', 188, '2014-01-14 18:58:43', 16, 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `paydate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `paydate`) VALUES
(1, '\0\0', 'administrator', 'fc3a843d0945a1669c1099c6151cc18a8f200ea9', '9462e8eee0', 'pedro@dinispt.com', '', '4c5f41ffbe1ccf0f896416aac4ab44601897da23', 1384353642, 'aa952007a465f0e7191320ef481d3ba56b0d7d58', 1268889823, 1400506095, 1, 'Admin', 'istrator', 'ADMIN', '0', '2014-11-11'),
(2, '\0\0', 'jose silva', '9c0620c74bccd1f9064fec101adb3dec30c98982', NULL, 'dinisnet@hotmail.com', NULL, '652f4bd12ba1c9505bdba16c4fc75f6dede8fb98', 1384276485, '9f7d38080b4aab5a9f72ec486f4a6b64e075defd', 1384184589, 1395677288, 1, 'jose', 'silva', 'silva', '23432543', '2014-11-12'),
(3, '\0\0', 'joana silva', '49b1581793b6418e31831aeba57c0d3bbd09e58f', NULL, 'vilar156@gmail.com', NULL, 'dd7a7da75b0f6ae7f63b3bfd802a161e0843cd24', 1384353635, NULL, 1384196128, 1384257585, 1, 'joana', 'silva', 'silva', '2222222222222222', '2014-11-13'),
(4, '\0\0', 'joana silva1', '6febc8d44a0ec964a36a5c7ebcab2402753f8145', NULL, 'pedro@geniusapp.com', NULL, NULL, NULL, 'f104823504b8eef6002ebdf4fd7435584630edac', 1384196304, 1384196304, 1, 'joana', 'silva', 'silva', '22222222222222222222', '2014-11-12'),
(5, 'º˙µH', 'alice gon√ßalves', '142badb80e5ad2e8e426fd7a874b79efcf721352', NULL, 'alicasasmediacao@gmail.com', NULL, NULL, NULL, '7ee45c222f8f49381e94d31c297001087f150b84', 1384370066, 1384370066, 1, 'Alice', 'Gon√ßalves', 'ALICASAS Media√ß√£o Imobili√°ria Unipessoal Lda', '912084838', '2014-11-14'),
(6, '_à}õ', 'j√∫lio gouveia', 'cf32ad28ce3db038a92e3406839a35316bec1dbf', NULL, 'au.juliogouveia@gmail.com', NULL, NULL, NULL, 'e443bf14f656fab6e390985e2ba736fb9bc4c637', 1384383905, 1386247893, 1, 'J√∫lio', 'Gouveia', 'AuMatosinhos', '916485627', '2014-11-14'),
(7, '^ÑC‘', 'manuel pereira', '56a55fcde50ebc65529dc262d992cfbba2117cd0', NULL, 'geral@caisnorte.com', NULL, NULL, NULL, '08b5a56b3a2fa6269e7ed4952e5825d93951aaba', 1384384114, 1384384114, 1, 'Manuel', 'Pereira', 'Cais Norte Lda', '224223669', '2014-11-14'),
(8, '_àwD', 'pedro tavares', 'd1d6f8c09a5f854c5e51013310d89b260e3fa442', NULL, 'pedromt.au@gmail.com', NULL, 'd3731ca3cbbe217b8e91efc1e92dd978e35507f4', 1386247342, 'bba2c2f53c0a590c7bcaca916f4cd90ee51502de', 1384430939, 1384509988, 1, 'Pedro', 'Tavares', 'AU', '937097992', '2014-11-14'),
(9, '≤¶ê', 'predial foz predial foz', 'f1a2b48094c0b2a3de3a53480315c09df3eb1ca9', NULL, 'predialfoz@predialfoz.com', NULL, NULL, NULL, 'a004bfa7beecd510a697364507c06a5611943864', 1384447907, 1384876092, 1, 'Predial Foz', 'Predial Foz', 'Predial Foz', '226198800', '2014-11-14'),
(10, '__‚§', 'anabela robalo robalo', '64023dcafce45a2cdfcf76cf99f106d92f70790e', NULL, 'anabelarobalo@filiperobalo.com', NULL, NULL, NULL, '64d22c4c0566d08a629ffcb51a49a2a01e2c5ebd', 1384769604, 1384769604, 1, 'Anabela Robalo', 'Robalo', 'Filipe Robalo & Filhos Lda', '963033952', NULL),
(11, 'UˆJ‡', 'raiz geom√©trica', '2c7547aff5ef836ce8d3b6a6e6f3d96607249232', NULL, 'raizgeometrica@gmail.com', NULL, NULL, NULL, '584806ce0cd49db2794b760e0601ecfa38eb7483', 1384788712, 1384788712, 1, 'Raiz', 'Geom√©trica', 'Imoplace', '219863153', NULL),
(12, 'ºRç@', 'habiporto propriedades habiporto propriedades', 'e27690d03d3f9c990e87b3123c5bc8ad0d1b5b9f', NULL, 'habiporto@mail.telepac.pt', NULL, NULL, NULL, '60cd77003b738257d507faefb9c5e6f0242488cb', 1384873799, 1385046255, 1, 'HABIPORTO PROPRIEDADES', 'HABIPORTO PROPRIEDADES', 'HABIPORTO PROPRIEDADES', '226094007', '2014-11-19'),
(13, 'ºS’7', 'sofia melo', '84a49a1d1eb664761ce6d0fea2981b4a2bee0797', NULL, 'au.sofiamelo@gmail.com', NULL, NULL, NULL, '39d49775f9605ded1f7b3fdbf9f00913c6f12c7a', 1384905046, 1384951309, 1, 'Sofia', 'Melo', 'Au Consultoria Matosinhos', '+351960483391', '2014-11-20'),
(14, 'ºRá‡', 'andreia areias', '71eedea46022d9c5e51371be788098b65a63997c', NULL, 'geral@cidadefozmediacao.com', NULL, NULL, NULL, 'd6e57fa936390f98aef653560cead36e9edc7c7a', 1384945908, 1384945908, 1, 'Andreia', 'Areias', 'Cidade Foz II', '223771220', '2014-11-20'),
(15, '_àwD', 'pedro  tavares', '82776a481a09128bcfde3f2333b5ea8bf8b4acdc', NULL, 'meira.au@gmail.com', NULL, NULL, NULL, 'f80e27beb5a8e4e793655592bb649a8bfb37b138', 1386247592, 1386247592, 1, 'Pedro ', 'Tavares', 'AU', '937097992', '2014-12-05'),
(16, 'M6H', 'boavista frontal', '0a38612beb2a4f0183bca804c6e18669784ed2a1', NULL, 'boavista@frontal.pt', NULL, NULL, NULL, 'fea3e2a9a8666b4f26acc16586dedd67973f7d96', 1389715526, 1389786425, 1, 'Boavista', 'Frontal', 'Frontal Imobili√°ria', '913996438', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Extraindo dados da tabela `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(7, 1, 1),
(14, 2, 3),
(17, 3, 2),
(18, 4, 2),
(22, 5, 3),
(23, 6, 3),
(24, 7, 3),
(26, 8, 3),
(28, 9, 3),
(29, 10, 2),
(30, 11, 2),
(32, 12, 3),
(34, 13, 3),
(36, 14, 3),
(38, 15, 3),
(39, 16, 2);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotosquartos`
--
ALTER TABLE `fotosquartos`
  ADD CONSTRAINT `fk_fotosquartos_1` FOREIGN KEY (`idquarto`) REFERENCES `quartos` (`idquartos`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

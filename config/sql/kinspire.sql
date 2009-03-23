-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Mar 23, 2009 at 02:05 AM
-- Server version: 5.0.68
-- PHP Version: 5.2.6
-- 
-- Database: `exqsoft_kinspiredemo`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `acos`
-- 

CREATE TABLE `acos` (
  `id` int(10) NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default NULL,
  `foreign_key` int(10) default NULL,
  `alias` varchar(255) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

-- 
-- Dumping data for table `acos`
-- 

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (1, NULL, NULL, NULL, 'controllers', 1, 202),
(2, 1, NULL, NULL, 'Pages', 2, 7),
(3, 2, NULL, NULL, 'display', 3, 4),
(4, 2, NULL, NULL, 'logAction', 5, 6),
(5, 1, NULL, NULL, 'Priorities', 8, 19),
(6, 5, NULL, NULL, 'index', 9, 10),
(7, 5, NULL, NULL, 'add', 11, 12),
(8, 5, NULL, NULL, 'edit', 13, 14),
(9, 5, NULL, NULL, 'delete', 15, 16),
(10, 5, NULL, NULL, 'logAction', 17, 18),
(11, 1, NULL, NULL, 'Icons', 20, 23),
(12, 11, NULL, NULL, 'logAction', 21, 22),
(13, 1, NULL, NULL, 'Projects', 24, 35),
(14, 13, NULL, NULL, 'index', 25, 26),
(15, 13, NULL, NULL, 'tasks', 27, 28),
(16, 13, NULL, NULL, 'add', 29, 30),
(17, 13, NULL, NULL, 'edit', 31, 32),
(18, 13, NULL, NULL, 'logAction', 33, 34),
(19, 1, NULL, NULL, 'ActionLogs', 36, 39),
(20, 19, NULL, NULL, 'logAction', 37, 38),
(21, 1, NULL, NULL, 'Versions', 40, 51),
(22, 21, NULL, NULL, 'index', 41, 42),
(23, 21, NULL, NULL, 'add', 43, 44),
(24, 21, NULL, NULL, 'edit', 45, 46),
(25, 21, NULL, NULL, 'delete', 47, 48),
(26, 21, NULL, NULL, 'logAction', 49, 50),
(27, 1, NULL, NULL, 'Groups', 52, 63),
(28, 27, NULL, NULL, 'index', 53, 54),
(29, 27, NULL, NULL, 'add', 55, 56),
(30, 27, NULL, NULL, 'edit', 57, 58),
(31, 27, NULL, NULL, 'delete', 59, 60),
(32, 27, NULL, NULL, 'logAction', 61, 62),
(33, 1, NULL, NULL, 'Events', 64, 77),
(34, 33, NULL, NULL, 'index', 65, 66),
(35, 33, NULL, NULL, 'add', 67, 68),
(36, 33, NULL, NULL, 'edit', 69, 70),
(37, 33, NULL, NULL, 'view', 71, 72),
(38, 33, NULL, NULL, 'delete', 73, 74),
(39, 33, NULL, NULL, 'logAction', 75, 76),
(40, 1, NULL, NULL, 'Tasks', 78, 89),
(41, 40, NULL, NULL, 'index', 79, 80),
(42, 40, NULL, NULL, 'view', 81, 82),
(43, 40, NULL, NULL, 'add', 83, 84),
(44, 40, NULL, NULL, 'edit', 85, 86),
(45, 40, NULL, NULL, 'logAction', 87, 88),
(46, 1, NULL, NULL, 'Milestones', 90, 103),
(47, 46, NULL, NULL, 'index', 91, 92),
(48, 46, NULL, NULL, 'add', 93, 94),
(49, 46, NULL, NULL, 'edit', 95, 96),
(50, 46, NULL, NULL, 'complete', 97, 98),
(51, 46, NULL, NULL, 'delete', 99, 100),
(52, 46, NULL, NULL, 'logAction', 101, 102),
(53, 1, NULL, NULL, 'Severities', 104, 115),
(54, 53, NULL, NULL, 'index', 105, 106),
(55, 53, NULL, NULL, 'add', 107, 108),
(56, 53, NULL, NULL, 'edit', 109, 110),
(57, 53, NULL, NULL, 'delete', 111, 112),
(58, 53, NULL, NULL, 'logAction', 113, 114),
(59, 1, NULL, NULL, 'TaskChanges', 116, 121),
(60, 59, NULL, NULL, 'add', 117, 118),
(61, 59, NULL, NULL, 'logAction', 119, 120),
(62, 1, NULL, NULL, 'TaskComments', 122, 127),
(63, 62, NULL, NULL, 'add', 123, 124),
(64, 62, NULL, NULL, 'logAction', 125, 126),
(65, 1, NULL, NULL, 'Configurations', 128, 131),
(66, 65, NULL, NULL, 'logAction', 129, 130),
(67, 1, NULL, NULL, 'Users', 132, 151),
(68, 67, NULL, NULL, 'initDB', 133, 134),
(69, 67, NULL, NULL, 'login', 135, 136),
(70, 67, NULL, NULL, 'logout', 137, 138),
(71, 67, NULL, NULL, 'index', 139, 140),
(72, 67, NULL, NULL, 'view', 141, 142),
(73, 67, NULL, NULL, 'add', 143, 144),
(74, 67, NULL, NULL, 'edit', 145, 146),
(75, 67, NULL, NULL, 'delete', 147, 148),
(76, 67, NULL, NULL, 'logAction', 149, 150),
(77, 1, NULL, NULL, 'Elements', 152, 163),
(78, 77, NULL, NULL, 'index', 153, 154),
(79, 77, NULL, NULL, 'add', 155, 156),
(80, 77, NULL, NULL, 'edit', 157, 158),
(81, 77, NULL, NULL, 'delete', 159, 160),
(82, 77, NULL, NULL, 'logAction', 161, 162),
(83, 1, NULL, NULL, 'Types', 164, 175),
(84, 83, NULL, NULL, 'index', 165, 166),
(85, 83, NULL, NULL, 'add', 167, 168),
(86, 83, NULL, NULL, 'edit', 169, 170),
(87, 83, NULL, NULL, 'delete', 171, 172),
(88, 83, NULL, NULL, 'logAction', 173, 174),
(89, 1, NULL, NULL, 'Statuses', 176, 187),
(90, 89, NULL, NULL, 'index', 177, 178),
(91, 89, NULL, NULL, 'add', 179, 180),
(92, 89, NULL, NULL, 'edit', 181, 182),
(93, 89, NULL, NULL, 'delete', 183, 184),
(94, 89, NULL, NULL, 'logAction', 185, 186),
(95, 1, NULL, NULL, 'Timeclocks', 188, 201),
(96, 95, NULL, NULL, 'index', 189, 190),
(97, 95, NULL, NULL, 'add', 191, 192),
(98, 95, NULL, NULL, 'edit', 193, 194),
(99, 95, NULL, NULL, 'out', 195, 196),
(100, 95, NULL, NULL, 'delete', 197, 198),
(101, 95, NULL, NULL, 'logAction', 199, 200);

-- --------------------------------------------------------

-- 
-- Table structure for table `action_logs`
-- 

CREATE TABLE `action_logs` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `controller` varchar(255) NOT NULL default '',
  `action` varchar(255) NOT NULL default '',
  `params` varchar(255) NOT NULL default '',
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `action_logs`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `aros`
-- 

CREATE TABLE `aros` (
  `id` int(10) NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default NULL,
  `foreign_key` int(10) default NULL,
  `alias` varchar(255) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `aros`
-- 

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (1, 0, 'Group', 1, 'Group:1', 1, 6),
(2, 1, 'Group', 2, 'Group:2', 2, 3),
(3, 1, 'User', 1, 'User:1', 4, 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `aros_acos`
-- 

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL auto_increment,
  `aro_id` int(10) NOT NULL default '0',
  `aco_id` int(10) NOT NULL default '0',
  `_create` char(2) NOT NULL default '0',
  `_read` char(2) NOT NULL default '0',
  `_update` char(2) NOT NULL default '0',
  `_delete` char(2) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `aros_acos`
-- 

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES (1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `configurations`
-- 

CREATE TABLE `configurations` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `value` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `configurations`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `elements`
-- 

CREATE TABLE `elements` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `project_id` int(11) NOT NULL default '0',
  `owner_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

-- 
-- Dumping data for table `elements`
-- 

INSERT INTO `elements` (`id`, `name`, `description`, `project_id`, `owner_id`) VALUES (1, 'General', '', 0, NULL),
(4, 'Forms', '', 0, NULL),
(5, 'Models', '', 0, NULL),
(6, 'Views', '', 0, NULL),
(7, 'Database', '', 0, NULL),
(10, 'Permissions', '', 0, NULL),
(11, 'Users', '', 0, NULL),
(14, 'None', '', 0, NULL),
(22, 'Controllers', '', 0, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `events`
-- 

CREATE TABLE `events` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `event_date` datetime default NULL,
  `alert_date` date default NULL,
  `notes` text,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- 
-- Dumping data for table `events`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `events_users`
-- 

CREATE TABLE `events_users` (
  `id` int(11) NOT NULL auto_increment,
  `event_id` int(11) default NULL,
  `user_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

-- 
-- Dumping data for table `events_users`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `groups`
-- 

CREATE TABLE `groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `parent_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `groups`
-- 

INSERT INTO `groups` (`id`, `name`, `parent_id`) VALUES (1, 'Developers', NULL),
(2, 'Clients', NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `icons`
-- 

CREATE TABLE `icons` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001 ;

-- 
-- Dumping data for table `icons`
-- 

INSERT INTO `icons` (`id`, `name`) VALUES (1, 'accept.png'),
(2, 'add.png'),
(3, 'anchor.png'),
(4, 'application.png'),
(5, 'application_add.png'),
(6, 'application_cascade.png'),
(7, 'application_delete.png'),
(8, 'application_double.png'),
(9, 'application_edit.png'),
(10, 'application_error.png'),
(11, 'application_form.png'),
(12, 'application_form_add.png'),
(13, 'application_form_delete.png'),
(14, 'application_form_edit.png'),
(15, 'application_form_magnify.png'),
(16, 'application_get.png'),
(17, 'application_go.png'),
(18, 'application_home.png'),
(19, 'application_key.png'),
(20, 'application_lightning.png'),
(21, 'application_link.png'),
(22, 'application_osx.png'),
(23, 'application_osx_terminal.png'),
(24, 'application_put.png'),
(25, 'application_side_boxes.png'),
(26, 'application_side_contract.png'),
(27, 'application_side_expand.png'),
(28, 'application_side_list.png'),
(29, 'application_side_tree.png'),
(30, 'application_split.png'),
(31, 'application_tile_horizontal.png'),
(32, 'application_tile_vertical.png'),
(33, 'application_view_columns.png'),
(34, 'application_view_detail.png'),
(35, 'application_view_gallery.png'),
(36, 'application_view_icons.png'),
(37, 'application_view_list.png'),
(38, 'application_view_tile.png'),
(39, 'application_xp.png'),
(40, 'application_xp_terminal.png'),
(41, 'arrow_branch.png'),
(42, 'arrow_divide.png'),
(43, 'arrow_down.png'),
(44, 'arrow_in.png'),
(45, 'arrow_inout.png'),
(46, 'arrow_join.png'),
(47, 'arrow_left.png'),
(48, 'arrow_merge.png'),
(49, 'arrow_out.png'),
(50, 'arrow_redo.png'),
(51, 'arrow_refresh.png'),
(52, 'arrow_refresh_small.png'),
(53, 'arrow_right.png'),
(54, 'arrow_rotate_anticlockwise.png'),
(55, 'arrow_rotate_clockwise.png'),
(56, 'arrow_switch.png'),
(57, 'arrow_turn_left.png'),
(58, 'arrow_turn_right.png'),
(59, 'arrow_undo.png'),
(60, 'arrow_up.png'),
(61, 'asterisk_orange.png'),
(62, 'asterisk_yellow.png'),
(63, 'attach.png'),
(64, 'award_star_add.png'),
(65, 'award_star_bronze_1.png'),
(66, 'award_star_bronze_2.png'),
(67, 'award_star_bronze_3.png'),
(68, 'award_star_delete.png'),
(69, 'award_star_gold_1.png'),
(70, 'award_star_gold_2.png'),
(71, 'award_star_gold_3.png'),
(72, 'award_star_silver_1.png'),
(73, 'award_star_silver_2.png'),
(74, 'award_star_silver_3.png'),
(75, 'basket.png'),
(76, 'basket_add.png'),
(77, 'basket_delete.png'),
(78, 'basket_edit.png'),
(79, 'basket_error.png'),
(80, 'basket_go.png'),
(81, 'basket_put.png'),
(82, 'basket_remove.png'),
(83, 'bell.png'),
(84, 'bell_add.png'),
(85, 'bell_delete.png'),
(86, 'bell_error.png'),
(87, 'bell_go.png'),
(88, 'bell_link.png'),
(89, 'bin.png'),
(90, 'bin_closed.png'),
(91, 'bin_empty.png'),
(92, 'bomb.png'),
(93, 'book.png'),
(94, 'book_add.png'),
(95, 'book_addresses.png'),
(96, 'book_delete.png'),
(97, 'book_edit.png'),
(98, 'book_error.png'),
(99, 'book_go.png'),
(100, 'book_key.png'),
(101, 'book_link.png'),
(102, 'book_next.png'),
(103, 'book_open.png'),
(104, 'book_previous.png'),
(105, 'box.png'),
(106, 'brick.png'),
(107, 'bricks.png'),
(108, 'brick_add.png'),
(109, 'brick_delete.png'),
(110, 'brick_edit.png'),
(111, 'brick_error.png'),
(112, 'brick_go.png'),
(113, 'brick_link.png'),
(114, 'briefcase.png'),
(115, 'bug.png'),
(116, 'bug_add.png'),
(117, 'bug_delete.png'),
(118, 'bug_edit.png'),
(119, 'bug_error.png'),
(120, 'bug_go.png'),
(121, 'bug_link.png'),
(122, 'building.png'),
(123, 'building_add.png'),
(124, 'building_delete.png'),
(125, 'building_edit.png'),
(126, 'building_error.png'),
(127, 'building_go.png'),
(128, 'building_key.png'),
(129, 'building_link.png'),
(130, 'bullet_add.png'),
(131, 'bullet_arrow_bottom.png'),
(132, 'bullet_arrow_down.png'),
(133, 'bullet_arrow_top.png'),
(134, 'bullet_arrow_up.png'),
(135, 'bullet_black.png'),
(136, 'bullet_blue.png'),
(137, 'bullet_delete.png'),
(138, 'bullet_disk.png'),
(139, 'bullet_error.png'),
(140, 'bullet_feed.png'),
(141, 'bullet_go.png'),
(142, 'bullet_green.png'),
(143, 'bullet_key.png'),
(144, 'bullet_orange.png'),
(145, 'bullet_picture.png'),
(146, 'bullet_pink.png'),
(147, 'bullet_purple.png'),
(148, 'bullet_red.png'),
(149, 'bullet_star.png'),
(150, 'bullet_toggle_minus.png'),
(151, 'bullet_toggle_plus.png'),
(152, 'bullet_white.png'),
(153, 'bullet_wrench.png'),
(154, 'bullet_yellow.png'),
(155, 'cake.png'),
(156, 'calculator.png'),
(157, 'calculator_add.png'),
(158, 'calculator_delete.png'),
(159, 'calculator_edit.png'),
(160, 'calculator_error.png'),
(161, 'calculator_link.png'),
(162, 'calendar.png'),
(163, 'calendar_add.png'),
(164, 'calendar_delete.png'),
(165, 'calendar_edit.png'),
(166, 'calendar_link.png'),
(167, 'calendar_view_day.png'),
(168, 'calendar_view_month.png'),
(169, 'calendar_view_week.png'),
(170, 'camera.png'),
(171, 'camera_add.png'),
(172, 'camera_delete.png'),
(173, 'camera_edit.png'),
(174, 'camera_error.png'),
(175, 'camera_go.png'),
(176, 'camera_link.png'),
(177, 'camera_small.png'),
(178, 'cancel.png'),
(179, 'car.png'),
(180, 'cart.png'),
(181, 'cart_add.png'),
(182, 'cart_delete.png'),
(183, 'cart_edit.png'),
(184, 'cart_error.png'),
(185, 'cart_go.png'),
(186, 'cart_put.png'),
(187, 'cart_remove.png'),
(188, 'car_add.png'),
(189, 'car_delete.png'),
(190, 'cd.png'),
(191, 'cd_add.png'),
(192, 'cd_burn.png'),
(193, 'cd_delete.png'),
(194, 'cd_edit.png'),
(195, 'cd_eject.png'),
(196, 'cd_go.png'),
(197, 'chart_bar.png'),
(198, 'chart_bar_add.png'),
(199, 'chart_bar_delete.png'),
(200, 'chart_bar_edit.png'),
(201, 'chart_bar_error.png'),
(202, 'chart_bar_link.png'),
(203, 'chart_curve.png'),
(204, 'chart_curve_add.png'),
(205, 'chart_curve_delete.png'),
(206, 'chart_curve_edit.png'),
(207, 'chart_curve_error.png'),
(208, 'chart_curve_go.png'),
(209, 'chart_curve_link.png'),
(210, 'chart_line.png'),
(211, 'chart_line_add.png'),
(212, 'chart_line_delete.png'),
(213, 'chart_line_edit.png'),
(214, 'chart_line_error.png'),
(215, 'chart_line_link.png'),
(216, 'chart_organisation.png'),
(217, 'chart_organisation_add.png'),
(218, 'chart_organisation_delete.png'),
(219, 'chart_pie.png'),
(220, 'chart_pie_add.png'),
(221, 'chart_pie_delete.png'),
(222, 'chart_pie_edit.png'),
(223, 'chart_pie_error.png'),
(224, 'chart_pie_link.png'),
(225, 'clock.png'),
(226, 'clock_add.png'),
(227, 'clock_delete.png'),
(228, 'clock_edit.png'),
(229, 'clock_error.png'),
(230, 'clock_go.png'),
(231, 'clock_link.png'),
(232, 'clock_pause.png'),
(233, 'clock_play.png'),
(234, 'clock_red.png'),
(235, 'clock_stop.png'),
(236, 'cog.png'),
(237, 'cog_add.png'),
(238, 'cog_delete.png'),
(239, 'cog_edit.png'),
(240, 'cog_error.png'),
(241, 'cog_go.png'),
(242, 'coins.png'),
(243, 'coins_add.png'),
(244, 'coins_delete.png'),
(245, 'color_swatch.png'),
(246, 'color_wheel.png'),
(247, 'comment.png'),
(248, 'comments.png'),
(249, 'comments_add.png'),
(250, 'comments_delete.png'),
(251, 'comment_add.png'),
(252, 'comment_delete.png'),
(253, 'comment_edit.png'),
(254, 'compress.png'),
(255, 'computer.png'),
(256, 'computer_add.png'),
(257, 'computer_delete.png'),
(258, 'computer_edit.png'),
(259, 'computer_error.png'),
(260, 'computer_go.png'),
(261, 'computer_key.png'),
(262, 'computer_link.png'),
(263, 'connect.png'),
(264, 'contrast.png'),
(265, 'contrast_decrease.png'),
(266, 'contrast_high.png'),
(267, 'contrast_increase.png'),
(268, 'contrast_low.png'),
(269, 'controller.png'),
(270, 'controller_add.png'),
(271, 'controller_delete.png'),
(272, 'controller_error.png'),
(273, 'control_eject.png'),
(274, 'control_eject_blue.png'),
(275, 'control_end.png'),
(276, 'control_end_blue.png'),
(277, 'control_equalizer.png'),
(278, 'control_equalizer_blue.png'),
(279, 'control_fastforward.png'),
(280, 'control_fastforward_blue.png'),
(281, 'control_pause.png'),
(282, 'control_pause_blue.png'),
(283, 'control_play.png'),
(284, 'control_play_blue.png'),
(285, 'control_repeat.png'),
(286, 'control_repeat_blue.png'),
(287, 'control_rewind.png'),
(288, 'control_rewind_blue.png'),
(289, 'control_start.png'),
(290, 'control_start_blue.png'),
(291, 'control_stop.png'),
(292, 'control_stop_blue.png'),
(293, 'creditcards.png'),
(294, 'cross.png'),
(295, 'css.png'),
(296, 'css_add.png'),
(297, 'css_delete.png'),
(298, 'css_go.png'),
(299, 'css_valid.png'),
(300, 'cup.png'),
(301, 'cup_add.png'),
(302, 'cup_delete.png'),
(303, 'cup_edit.png'),
(304, 'cup_error.png'),
(305, 'cup_go.png'),
(306, 'cup_key.png'),
(307, 'cup_link.png'),
(308, 'cursor.png'),
(309, 'cut.png'),
(310, 'cut_red.png'),
(311, 'database.png'),
(312, 'database_add.png'),
(313, 'database_connect.png'),
(314, 'database_delete.png'),
(315, 'database_edit.png'),
(316, 'database_error.png'),
(317, 'database_gear.png'),
(318, 'database_go.png'),
(319, 'database_key.png'),
(320, 'database_lightning.png'),
(321, 'database_link.png'),
(322, 'database_refresh.png'),
(323, 'database_save.png'),
(324, 'database_table.png'),
(325, 'date.png'),
(326, 'date_add.png'),
(327, 'date_delete.png'),
(328, 'date_edit.png'),
(329, 'date_error.png'),
(330, 'date_go.png'),
(331, 'date_link.png'),
(332, 'date_magnify.png'),
(333, 'date_next.png'),
(334, 'date_previous.png'),
(335, 'delete.png'),
(336, 'disconnect.png'),
(337, 'disk.png'),
(338, 'disk_multiple.png'),
(339, 'door.png'),
(340, 'door_in.png'),
(341, 'door_open.png'),
(342, 'door_out.png'),
(343, 'drink.png'),
(344, 'drink_empty.png'),
(345, 'drive.png'),
(346, 'drive_add.png'),
(347, 'drive_burn.png'),
(348, 'drive_cd.png'),
(349, 'drive_cd_empty.png'),
(350, 'drive_delete.png'),
(351, 'drive_disk.png'),
(352, 'drive_edit.png'),
(353, 'drive_error.png'),
(354, 'drive_go.png'),
(355, 'drive_key.png'),
(356, 'drive_link.png'),
(357, 'drive_magnify.png'),
(358, 'drive_network.png'),
(359, 'drive_rename.png'),
(360, 'drive_user.png'),
(361, 'drive_web.png'),
(362, 'dvd.png'),
(363, 'dvd_add.png'),
(364, 'dvd_delete.png'),
(365, 'dvd_edit.png'),
(366, 'dvd_error.png'),
(367, 'dvd_go.png'),
(368, 'dvd_key.png'),
(369, 'dvd_link.png'),
(370, 'email.png'),
(371, 'email_add.png'),
(372, 'email_attach.png'),
(373, 'email_delete.png'),
(374, 'email_edit.png'),
(375, 'email_error.png'),
(376, 'email_go.png'),
(377, 'email_link.png'),
(378, 'email_open.png'),
(379, 'email_open_image.png'),
(380, 'emoticon_evilgrin.png'),
(381, 'emoticon_grin.png'),
(382, 'emoticon_happy.png'),
(383, 'emoticon_smile.png'),
(384, 'emoticon_surprised.png'),
(385, 'emoticon_tongue.png'),
(386, 'emoticon_unhappy.png'),
(387, 'emoticon_waii.png'),
(388, 'emoticon_wink.png'),
(389, 'error.png'),
(390, 'error_add.png'),
(391, 'error_delete.png'),
(392, 'error_go.png'),
(393, 'exclamation.png'),
(394, 'eye.png'),
(395, 'feed.png'),
(396, 'feed_add.png'),
(397, 'feed_delete.png'),
(398, 'feed_disk.png'),
(399, 'feed_edit.png'),
(400, 'feed_error.png'),
(401, 'feed_go.png'),
(402, 'feed_key.png'),
(403, 'feed_link.png'),
(404, 'feed_magnify.png'),
(405, 'female.png'),
(406, 'film.png'),
(407, 'film_add.png'),
(408, 'film_delete.png'),
(409, 'film_edit.png'),
(410, 'film_error.png'),
(411, 'film_go.png'),
(412, 'film_key.png'),
(413, 'film_link.png'),
(414, 'film_save.png'),
(415, 'find.png'),
(416, 'flag_blue.png'),
(417, 'flag_green.png'),
(418, 'flag_orange.png'),
(419, 'flag_pink.png'),
(420, 'flag_purple.png'),
(421, 'flag_red.png'),
(422, 'flag_yellow.png'),
(423, 'folder.png'),
(424, 'folder_add.png'),
(425, 'folder_bell.png'),
(426, 'folder_brick.png'),
(427, 'folder_bug.png'),
(428, 'folder_camera.png'),
(429, 'folder_database.png'),
(430, 'folder_delete.png'),
(431, 'folder_edit.png'),
(432, 'folder_error.png'),
(433, 'folder_explore.png'),
(434, 'folder_feed.png'),
(435, 'folder_find.png'),
(436, 'folder_go.png'),
(437, 'folder_heart.png'),
(438, 'folder_image.png'),
(439, 'folder_key.png'),
(440, 'folder_lightbulb.png'),
(441, 'folder_link.png'),
(442, 'folder_magnify.png'),
(443, 'folder_page.png'),
(444, 'folder_page_white.png'),
(445, 'folder_palette.png'),
(446, 'folder_picture.png'),
(447, 'folder_star.png'),
(448, 'folder_table.png'),
(449, 'folder_user.png'),
(450, 'folder_wrench.png'),
(451, 'font.png'),
(452, 'font_add.png'),
(453, 'font_delete.png'),
(454, 'font_go.png'),
(455, 'group.png'),
(456, 'group_add.png'),
(457, 'group_delete.png'),
(458, 'group_edit.png'),
(459, 'group_error.png'),
(460, 'group_gear.png'),
(461, 'group_go.png'),
(462, 'group_key.png'),
(463, 'group_link.png'),
(464, 'heart.png'),
(465, 'heart_add.png'),
(466, 'heart_delete.png'),
(467, 'help.png'),
(468, 'hourglass.png'),
(469, 'hourglass_add.png'),
(470, 'hourglass_delete.png'),
(471, 'hourglass_go.png'),
(472, 'hourglass_link.png'),
(473, 'house.png'),
(474, 'house_go.png'),
(475, 'house_link.png'),
(476, 'html.png'),
(477, 'html_add.png'),
(478, 'html_delete.png'),
(479, 'html_go.png'),
(480, 'html_valid.png'),
(481, 'image.png'),
(482, 'images.png'),
(483, 'image_add.png'),
(484, 'image_delete.png'),
(485, 'image_edit.png'),
(486, 'image_link.png'),
(487, 'information.png'),
(488, 'ipod.png'),
(489, 'ipod_cast.png'),
(490, 'ipod_cast_add.png'),
(491, 'ipod_cast_delete.png'),
(492, 'ipod_sound.png'),
(493, 'joystick.png'),
(494, 'joystick_add.png'),
(495, 'joystick_delete.png'),
(496, 'joystick_error.png'),
(497, 'key.png'),
(498, 'keyboard.png'),
(499, 'keyboard_add.png'),
(500, 'keyboard_delete.png'),
(501, 'keyboard_magnify.png'),
(502, 'key_add.png'),
(503, 'key_delete.png'),
(504, 'key_go.png'),
(505, 'layers.png'),
(506, 'layout.png'),
(507, 'layout_add.png'),
(508, 'layout_content.png'),
(509, 'layout_delete.png'),
(510, 'layout_edit.png'),
(511, 'layout_error.png'),
(512, 'layout_header.png'),
(513, 'layout_link.png'),
(514, 'layout_sidebar.png'),
(515, 'lightbulb.png'),
(516, 'lightbulb_add.png'),
(517, 'lightbulb_delete.png'),
(518, 'lightbulb_off.png'),
(519, 'lightning.png'),
(520, 'lightning_add.png'),
(521, 'lightning_delete.png'),
(522, 'lightning_go.png'),
(523, 'link.png'),
(524, 'link_add.png'),
(525, 'link_break.png'),
(526, 'link_delete.png'),
(527, 'link_edit.png'),
(528, 'link_error.png'),
(529, 'link_go.png'),
(530, 'lock.png'),
(531, 'lock_add.png'),
(532, 'lock_break.png'),
(533, 'lock_delete.png'),
(534, 'lock_edit.png'),
(535, 'lock_go.png'),
(536, 'lock_open.png'),
(537, 'lorry.png'),
(538, 'lorry_add.png'),
(539, 'lorry_delete.png'),
(540, 'lorry_error.png'),
(541, 'lorry_flatbed.png'),
(542, 'lorry_go.png'),
(543, 'lorry_link.png'),
(544, 'magifier_zoom_out.png'),
(545, 'magnifier.png'),
(546, 'magnifier_zoom_in.png'),
(547, 'male.png'),
(548, 'map.png'),
(549, 'map_add.png'),
(550, 'map_delete.png'),
(551, 'map_edit.png'),
(552, 'map_go.png'),
(553, 'map_magnify.png'),
(554, 'medal_bronze_1.png'),
(555, 'medal_bronze_2.png'),
(556, 'medal_bronze_3.png'),
(557, 'medal_bronze_add.png'),
(558, 'medal_bronze_delete.png'),
(559, 'medal_gold_1.png'),
(560, 'medal_gold_2.png'),
(561, 'medal_gold_3.png'),
(562, 'medal_gold_add.png'),
(563, 'medal_gold_delete.png'),
(564, 'medal_silver_1.png'),
(565, 'medal_silver_2.png'),
(566, 'medal_silver_3.png'),
(567, 'medal_silver_add.png'),
(568, 'medal_silver_delete.png'),
(569, 'money.png'),
(570, 'money_add.png'),
(571, 'money_delete.png'),
(572, 'money_dollar.png'),
(573, 'money_euro.png'),
(574, 'money_pound.png'),
(575, 'money_yen.png'),
(576, 'monitor.png'),
(577, 'monitor_add.png'),
(578, 'monitor_delete.png'),
(579, 'monitor_edit.png'),
(580, 'monitor_error.png'),
(581, 'monitor_go.png'),
(582, 'monitor_lightning.png'),
(583, 'monitor_link.png'),
(584, 'mouse.png'),
(585, 'mouse_add.png'),
(586, 'mouse_delete.png'),
(587, 'mouse_error.png'),
(588, 'music.png'),
(589, 'new.png'),
(590, 'newspaper.png'),
(591, 'newspaper_add.png'),
(592, 'newspaper_delete.png'),
(593, 'newspaper_go.png'),
(594, 'newspaper_link.png'),
(595, 'note.png'),
(596, 'note_add.png'),
(597, 'note_delete.png'),
(598, 'note_edit.png'),
(599, 'note_error.png'),
(600, 'note_go.png'),
(601, 'overlays.png'),
(602, 'package.png'),
(603, 'package_add.png'),
(604, 'package_delete.png'),
(605, 'package_go.png'),
(606, 'package_green.png'),
(607, 'package_link.png'),
(608, 'page.png'),
(609, 'page_add.png'),
(610, 'page_attach.png'),
(611, 'page_code.png'),
(612, 'page_copy.png'),
(613, 'page_delete.png'),
(614, 'page_edit.png'),
(615, 'page_error.png'),
(616, 'page_excel.png'),
(617, 'page_find.png'),
(618, 'page_gear.png'),
(619, 'page_go.png'),
(620, 'page_green.png'),
(621, 'page_key.png'),
(622, 'page_lightning.png'),
(623, 'page_link.png'),
(624, 'page_paintbrush.png'),
(625, 'page_paste.png'),
(626, 'page_red.png'),
(627, 'page_refresh.png'),
(628, 'page_save.png'),
(629, 'page_white.png'),
(630, 'page_white_acrobat.png'),
(631, 'page_white_actionscript.png'),
(632, 'page_white_add.png'),
(633, 'page_white_c.png'),
(634, 'page_white_camera.png'),
(635, 'page_white_cd.png'),
(636, 'page_white_code.png'),
(637, 'page_white_code_red.png'),
(638, 'page_white_coldfusion.png'),
(639, 'page_white_compressed.png'),
(640, 'page_white_copy.png'),
(641, 'page_white_cplusplus.png'),
(642, 'page_white_csharp.png'),
(643, 'page_white_cup.png'),
(644, 'page_white_database.png'),
(645, 'page_white_delete.png'),
(646, 'page_white_dvd.png'),
(647, 'page_white_edit.png'),
(648, 'page_white_error.png'),
(649, 'page_white_excel.png'),
(650, 'page_white_find.png'),
(651, 'page_white_flash.png'),
(652, 'page_white_freehand.png'),
(653, 'page_white_gear.png'),
(654, 'page_white_get.png'),
(655, 'page_white_go.png'),
(656, 'page_white_h.png'),
(657, 'page_white_horizontal.png'),
(658, 'page_white_key.png'),
(659, 'page_white_lightning.png'),
(660, 'page_white_link.png'),
(661, 'page_white_magnify.png'),
(662, 'page_white_medal.png'),
(663, 'page_white_office.png'),
(664, 'page_white_paint.png'),
(665, 'page_white_paintbrush.png'),
(666, 'page_white_paste.png'),
(667, 'page_white_php.png'),
(668, 'page_white_picture.png'),
(669, 'page_white_powerpoint.png'),
(670, 'page_white_put.png'),
(671, 'page_white_ruby.png'),
(672, 'page_white_stack.png'),
(673, 'page_white_star.png'),
(674, 'page_white_swoosh.png'),
(675, 'page_white_text.png'),
(676, 'page_white_text_width.png'),
(677, 'page_white_tux.png'),
(678, 'page_white_vector.png'),
(679, 'page_white_visualstudio.png'),
(680, 'page_white_width.png'),
(681, 'page_white_word.png'),
(682, 'page_white_world.png'),
(683, 'page_white_wrench.png'),
(684, 'page_white_zip.png'),
(685, 'page_word.png'),
(686, 'page_world.png'),
(687, 'paintbrush.png'),
(688, 'paintcan.png'),
(689, 'palette.png'),
(690, 'paste_plain.png'),
(691, 'paste_word.png'),
(692, 'pencil.png'),
(693, 'pencil_add.png'),
(694, 'pencil_delete.png'),
(695, 'pencil_go.png'),
(696, 'phone.png'),
(697, 'phone_add.png'),
(698, 'phone_delete.png'),
(699, 'phone_sound.png'),
(700, 'photo.png'),
(701, 'photos.png'),
(702, 'photo_add.png'),
(703, 'photo_delete.png'),
(704, 'photo_link.png'),
(705, 'picture.png'),
(706, 'pictures.png'),
(707, 'picture_add.png'),
(708, 'picture_delete.png'),
(709, 'picture_edit.png'),
(710, 'picture_empty.png'),
(711, 'picture_error.png'),
(712, 'picture_go.png'),
(713, 'picture_key.png'),
(714, 'picture_link.png'),
(715, 'picture_save.png'),
(716, 'pilcrow.png'),
(717, 'pill.png'),
(718, 'pill_add.png'),
(719, 'pill_delete.png'),
(720, 'pill_go.png'),
(721, 'plugin.png'),
(722, 'plugin_add.png'),
(723, 'plugin_delete.png'),
(724, 'plugin_disabled.png'),
(725, 'plugin_edit.png'),
(726, 'plugin_error.png'),
(727, 'plugin_go.png'),
(728, 'plugin_link.png'),
(729, 'printer.png'),
(730, 'printer_add.png'),
(731, 'printer_delete.png'),
(732, 'printer_empty.png'),
(733, 'printer_error.png'),
(734, 'rainbow.png'),
(735, 'report.png'),
(736, 'report_add.png'),
(737, 'report_delete.png'),
(738, 'report_disk.png'),
(739, 'report_edit.png'),
(740, 'report_go.png'),
(741, 'report_key.png'),
(742, 'report_link.png'),
(743, 'report_magnify.png'),
(744, 'report_picture.png'),
(745, 'report_user.png'),
(746, 'report_word.png'),
(747, 'resultset_first.png'),
(748, 'resultset_last.png'),
(749, 'resultset_next.png'),
(750, 'resultset_previous.png'),
(751, 'rosette.png'),
(752, 'rss.png'),
(753, 'rss_add.png'),
(754, 'rss_delete.png'),
(755, 'rss_go.png'),
(756, 'rss_valid.png'),
(757, 'ruby.png'),
(758, 'ruby_add.png'),
(759, 'ruby_delete.png'),
(760, 'ruby_gear.png'),
(761, 'ruby_get.png'),
(762, 'ruby_go.png'),
(763, 'ruby_key.png'),
(764, 'ruby_link.png'),
(765, 'ruby_put.png'),
(766, 'script.png'),
(767, 'script_add.png'),
(768, 'script_code.png'),
(769, 'script_code_red.png'),
(770, 'script_delete.png'),
(771, 'script_edit.png'),
(772, 'script_error.png'),
(773, 'script_gear.png'),
(774, 'script_go.png'),
(775, 'script_key.png'),
(776, 'script_lightning.png'),
(777, 'script_link.png'),
(778, 'script_palette.png'),
(779, 'script_save.png'),
(780, 'server.png'),
(781, 'server_add.png'),
(782, 'server_chart.png'),
(783, 'server_compressed.png'),
(784, 'server_connect.png'),
(785, 'server_database.png'),
(786, 'server_delete.png'),
(787, 'server_edit.png'),
(788, 'server_error.png'),
(789, 'server_go.png'),
(790, 'server_key.png'),
(791, 'server_lightning.png'),
(792, 'server_link.png'),
(793, 'server_uncompressed.png'),
(794, 'shading.png'),
(795, 'shape_align_bottom.png'),
(796, 'shape_align_center.png'),
(797, 'shape_align_left.png'),
(798, 'shape_align_middle.png'),
(799, 'shape_align_right.png'),
(800, 'shape_align_top.png'),
(801, 'shape_flip_horizontal.png'),
(802, 'shape_flip_vertical.png'),
(803, 'shape_group.png'),
(804, 'shape_handles.png'),
(805, 'shape_move_back.png'),
(806, 'shape_move_backwards.png'),
(807, 'shape_move_forwards.png'),
(808, 'shape_move_front.png'),
(809, 'shape_rotate_anticlockwise.png'),
(810, 'shape_rotate_clockwise.png'),
(811, 'shape_square.png'),
(812, 'shape_square_add.png'),
(813, 'shape_square_delete.png'),
(814, 'shape_square_edit.png'),
(815, 'shape_square_error.png'),
(816, 'shape_square_go.png'),
(817, 'shape_square_key.png'),
(818, 'shape_square_link.png'),
(819, 'shape_ungroup.png'),
(820, 'shield.png'),
(821, 'shield_add.png'),
(822, 'shield_delete.png'),
(823, 'shield_go.png'),
(824, 'sitemap.png'),
(825, 'sitemap_color.png'),
(826, 'sound.png'),
(827, 'sound_add.png'),
(828, 'sound_delete.png'),
(829, 'sound_low.png'),
(830, 'sound_mute.png'),
(831, 'sound_none.png'),
(832, 'spellcheck.png'),
(833, 'sport_8ball.png'),
(834, 'sport_basketball.png'),
(835, 'sport_football.png'),
(836, 'sport_golf.png'),
(837, 'sport_raquet.png'),
(838, 'sport_shuttlecock.png'),
(839, 'sport_soccer.png'),
(840, 'sport_tennis.png'),
(841, 'star.png'),
(842, 'status_away.png'),
(843, 'status_busy.png'),
(844, 'status_offline.png'),
(845, 'status_online.png'),
(846, 'stop.png'),
(847, 'style.png'),
(848, 'style_add.png'),
(849, 'style_delete.png'),
(850, 'style_edit.png'),
(851, 'style_go.png'),
(852, 'sum.png'),
(853, 'tab.png'),
(854, 'table.png'),
(855, 'table_add.png'),
(856, 'table_delete.png'),
(857, 'table_edit.png'),
(858, 'table_error.png'),
(859, 'table_gear.png'),
(860, 'table_go.png'),
(861, 'table_key.png'),
(862, 'table_lightning.png'),
(863, 'table_link.png'),
(864, 'table_multiple.png'),
(865, 'table_refresh.png'),
(866, 'table_relationship.png'),
(867, 'table_row_delete.png'),
(868, 'table_row_insert.png'),
(869, 'table_save.png'),
(870, 'table_sort.png'),
(871, 'tab_add.png'),
(872, 'tab_delete.png'),
(873, 'tab_edit.png'),
(874, 'tab_go.png'),
(875, 'tag.png'),
(876, 'tag_blue.png'),
(877, 'tag_blue_add.png'),
(878, 'tag_blue_delete.png'),
(879, 'tag_blue_edit.png'),
(880, 'tag_green.png'),
(881, 'tag_orange.png'),
(882, 'tag_pink.png'),
(883, 'tag_purple.png'),
(884, 'tag_red.png'),
(885, 'tag_yellow.png'),
(886, 'telephone.png'),
(887, 'telephone_add.png'),
(888, 'telephone_delete.png'),
(889, 'telephone_edit.png'),
(890, 'telephone_error.png'),
(891, 'telephone_go.png'),
(892, 'telephone_key.png'),
(893, 'telephone_link.png'),
(894, 'television.png'),
(895, 'television_add.png'),
(896, 'television_delete.png'),
(897, 'textfield.png'),
(898, 'textfield_add.png'),
(899, 'textfield_delete.png'),
(900, 'textfield_key.png'),
(901, 'textfield_rename.png'),
(902, 'text_align_center.png'),
(903, 'text_align_justify.png'),
(904, 'text_align_left.png'),
(905, 'text_align_right.png'),
(906, 'text_allcaps.png'),
(907, 'text_bold.png'),
(908, 'text_columns.png'),
(909, 'text_dropcaps.png'),
(910, 'text_heading_1.png'),
(911, 'text_heading_2.png'),
(912, 'text_heading_3.png'),
(913, 'text_heading_4.png'),
(914, 'text_heading_5.png'),
(915, 'text_heading_6.png'),
(916, 'text_horizontalrule.png'),
(917, 'text_indent.png'),
(918, 'text_indent_remove.png'),
(919, 'text_italic.png'),
(920, 'text_kerning.png'),
(921, 'text_letterspacing.png'),
(922, 'text_letter_omega.png'),
(923, 'text_linespacing.png'),
(924, 'text_list_bullets.png'),
(925, 'text_list_numbers.png'),
(926, 'text_lowercase.png'),
(927, 'text_padding_bottom.png'),
(928, 'text_padding_left.png'),
(929, 'text_padding_right.png'),
(930, 'text_padding_top.png'),
(931, 'text_replace.png'),
(932, 'text_signature.png'),
(933, 'text_smallcaps.png'),
(934, 'text_strikethrough.png'),
(935, 'text_subscript.png'),
(936, 'text_superscript.png'),
(937, 'text_underline.png'),
(938, 'text_uppercase.png'),
(939, 'thumb_down.png'),
(940, 'thumb_up.png'),
(941, 'tick.png'),
(942, 'time.png'),
(943, 'timeline_marker.png'),
(944, 'time_add.png'),
(945, 'time_delete.png'),
(946, 'time_go.png'),
(947, 'transmit.png'),
(948, 'transmit_add.png'),
(949, 'transmit_blue.png'),
(950, 'transmit_delete.png'),
(951, 'transmit_edit.png'),
(952, 'transmit_error.png'),
(953, 'transmit_go.png'),
(954, 'tux.png'),
(955, 'user.png'),
(956, 'user_add.png'),
(957, 'user_comment.png'),
(958, 'user_delete.png'),
(959, 'user_edit.png'),
(960, 'user_female.png'),
(961, 'user_go.png'),
(962, 'user_gray.png'),
(963, 'user_green.png'),
(964, 'user_orange.png'),
(965, 'user_red.png'),
(966, 'user_suit.png'),
(967, 'vcard.png'),
(968, 'vcard_add.png'),
(969, 'vcard_delete.png'),
(970, 'vcard_edit.png'),
(971, 'vector.png'),
(972, 'vector_add.png'),
(973, 'vector_delete.png'),
(974, 'wand.png'),
(975, 'weather_clouds.png'),
(976, 'weather_cloudy.png'),
(977, 'weather_lightning.png'),
(978, 'weather_rain.png'),
(979, 'weather_snow.png'),
(980, 'weather_sun.png'),
(981, 'webcam.png'),
(982, 'webcam_add.png'),
(983, 'webcam_delete.png'),
(984, 'webcam_error.png'),
(985, 'world.png'),
(986, 'world_add.png'),
(987, 'world_delete.png'),
(988, 'world_edit.png'),
(989, 'world_go.png'),
(990, 'world_link.png'),
(991, 'wrench.png'),
(992, 'wrench_orange.png'),
(993, 'xhtml.png'),
(994, 'xhtml_add.png'),
(995, 'xhtml_delete.png'),
(996, 'xhtml_go.png'),
(997, 'xhtml_valid.png'),
(998, 'zoom.png'),
(999, 'zoom_in.png'),
(1000, 'zoom_out.png');

-- --------------------------------------------------------

-- 
-- Table structure for table `milestones`
-- 

CREATE TABLE `milestones` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `codename` varchar(255) NOT NULL default '',
  `description` longtext NOT NULL,
  `project_id` int(11) NOT NULL default '0',
  `owner_id` int(11) default NULL,
  `due` datetime default NULL,
  `completed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `milestones`
-- 

INSERT INTO `milestones` (`id`, `name`, `codename`, `description`, `project_id`, `owner_id`, `due`, `completed`, `created`) VALUES (1, '0.1b', 'beta', 'Here is a description for this milestone, we plan on completing things on this one!', 1, 1, '2009-04-01 01:57:00', NULL, '2009-03-23 01:58:13'),
(2, '0.1b', '', '', 2, 1, '2009-03-23 02:03:00', NULL, '2009-03-23 02:03:52');

-- --------------------------------------------------------

-- 
-- Table structure for table `priorities`
-- 

CREATE TABLE `priorities` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  `icon_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `priorities`
-- 

INSERT INTO `priorities` (`id`, `name`, `order`, `icon_id`) VALUES (1, 'Very Low', 1, 417),
(2, 'Low', 2, 416),
(3, 'Medium', 3, 422),
(4, 'High', 4, 418),
(5, 'Critical', 5, 421);

-- --------------------------------------------------------

-- 
-- Table structure for table `projects`
-- 

CREATE TABLE `projects` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `description` longtext NOT NULL,
  `client_id` int(11) NOT NULL default '0',
  `owner_id` int(11) NOT NULL default '0',
  `is_active` tinyint(1) NOT NULL default '0',
  `task_count` int(11) NOT NULL default '0',
  `open_task_count` int(11) NOT NULL default '0',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `projects`
-- 

INSERT INTO `projects` (`id`, `name`, `description`, `client_id`, `owner_id`, `is_active`, `task_count`, `open_task_count`, `created`, `updated`) VALUES (1, 'Test Project 1', 'This is a description for test project 1.', 1, 1, 1, 3, 2, '2009-03-23 01:56:40', '2009-03-23 02:03:21'),
(2, 'Test Project 2', 'Here is my second test project, with nothing added to it yet.', 1, 1, 1, 0, 0, '2009-03-23 02:02:14', '2009-03-23 02:02:14');

-- --------------------------------------------------------

-- 
-- Table structure for table `severities`
-- 

CREATE TABLE `severities` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  `icon_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `severities`
-- 

INSERT INTO `severities` (`id`, `name`, `order`, `icon_id`) VALUES (1, 'Trivial', 1, 417),
(2, 'Minor', 2, 416),
(3, 'Normal', 3, 422),
(4, 'Major', 4, 418),
(5, 'Critical', 5, 421);

-- --------------------------------------------------------

-- 
-- Table structure for table `statuses`
-- 

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  `icon_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `statuses`
-- 

INSERT INTO `statuses` (`id`, `name`, `order`, `icon_id`) VALUES (1, 'New', 1, 589),
(4, 'Resolved', 8, 464),
(5, 'Duplicate', 3, 6),
(6, 'Reopened', 5, 846),
(7, 'Assigned', 2, 1),
(8, 'Won''t Fix', 4, 335),
(9, 'Pending', 6, 487),
(10, 'To Merge', 7, 48);

-- --------------------------------------------------------

-- 
-- Table structure for table `task_changes`
-- 

CREATE TABLE `task_changes` (
  `id` int(11) NOT NULL auto_increment,
  `task_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `type_id` int(11) NOT NULL default '0',
  `element_id` int(11) NOT NULL default '0',
  `severity_id` int(11) NOT NULL default '0',
  `priority_id` int(11) NOT NULL default '0',
  `version_id` int(11) NOT NULL default '0',
  `milestone_id` int(11) NOT NULL default '0',
  `description` longtext,
  `resolution` longtext,
  `status_id` int(11) NOT NULL default '0',
  `is_active` tinyint(1) NOT NULL default '0',
  `due` datetime default NULL,
  `completed` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `task_changes`
-- 

INSERT INTO `task_changes` (`id`, `task_id`, `user_id`, `type_id`, `element_id`, `severity_id`, `priority_id`, `version_id`, `milestone_id`, `description`, `resolution`, `status_id`, `is_active`, `due`, `completed`, `created`) VALUES (1, 1, 1, 3, 1, 3, 4, 1, 1, 'Here is a description for my test task.', NULL, 1, 1, NULL, NULL, '2009-03-23 01:59:07'),
(2, 2, 1, 1, 1, 5, 5, 1, 1, 'Here is my test bug.', NULL, 1, 1, NULL, NULL, '2009-03-23 02:01:48'),
(3, 3, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1, 0, NULL, NULL, '2009-03-23 02:03:11'),
(4, 3, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 4, 1, NULL, NULL, '2009-03-23 02:03:21');

-- --------------------------------------------------------

-- 
-- Table structure for table `task_comments`
-- 

CREATE TABLE `task_comments` (
  `id` int(11) NOT NULL auto_increment,
  `task_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `body` longtext NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `task_comments`
-- 

INSERT INTO `task_comments` (`id`, `task_id`, `user_id`, `title`, `body`, `created`, `updated`) VALUES (1, 1, 1, 'oh by the way', 'I need to add some comments to this one.', '2009-03-23 01:59:25', '2009-03-23 01:59:25');

-- --------------------------------------------------------

-- 
-- Table structure for table `tasks`
-- 

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `project_id` int(11) NOT NULL default '0',
  `reporter_id` int(11) NOT NULL default '0',
  `owner_id` int(11) default NULL,
  `is_open` tinyint(1) NOT NULL default '0',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `tasks`
-- 

INSERT INTO `tasks` (`id`, `title`, `project_id`, `reporter_id`, `owner_id`, `is_open`, `created`, `updated`) VALUES (1, 'Test Task', 1, 1, NULL, 1, '2009-03-23 01:59:07', '2009-03-23 01:59:07'),
(2, 'Test bug', 1, 1, NULL, 1, '2009-03-23 02:01:48', '2009-03-23 02:01:48'),
(3, 'task to close', 1, 1, 1, 0, '2009-03-23 02:03:11', '2009-03-23 02:03:21');

-- --------------------------------------------------------

-- 
-- Table structure for table `timeclocks`
-- 

CREATE TABLE `timeclocks` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `project_id` int(11) NOT NULL default '0',
  `milestone_id` int(11) NOT NULL default '0',
  `element_id` int(11) NOT NULL default '0',
  `clocked_in` datetime default NULL,
  `clocked_out` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `timeclocks`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `types`
-- 

CREATE TABLE `types` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  `icon_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `types`
-- 

INSERT INTO `types` (`id`, `name`, `order`, `icon_id`) VALUES (1, 'Bug', 1, 115),
(2, 'Enhancement', 2, 381),
(3, 'Key Feature', 3, 497),
(4, 'Wish', 4, 841),
(5, 'General Task', 5, 991);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `username` varchar(255) NOT NULL default '',
  `password` varchar(255) NOT NULL default '',
  `group_id` int(11) NOT NULL default '0',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `name`, `username`, `password`, `group_id`, `created`, `updated`) VALUES (1, 'Demo Developer', 'demo', 'b1f19797031a9f073b6afcf03bf5c7a6d1e09b26', 1, '2009-03-23 01:51:50', '2009-03-23 01:51:50');

-- --------------------------------------------------------

-- 
-- Table structure for table `versions`
-- 

CREATE TABLE `versions` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `project_id` int(11) NOT NULL default '0',
  `owner_id` int(11) default NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `versions`
-- 

INSERT INTO `versions` (`id`, `name`, `description`, `project_id`, `owner_id`, `created`, `updated`) VALUES (1, '0.1a', 'alpha', 1, 1, '2009-03-23 01:57:39', '2009-03-23 01:57:39'),
(2, '0.1a', '', 2, 1, '2009-03-23 02:04:02', '2009-03-23 02:04:02');

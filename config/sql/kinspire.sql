-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2009 at 05:04 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `kinspire`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(3, NULL, 'Version', NULL, 'Versions', 5, 14),
(4, 3, 'Version', NULL, 'index', 6, 7),
(5, 3, 'Version', NULL, 'add', 8, 9),
(6, 3, 'Version', NULL, 'edit', 10, 11),
(7, 3, 'Version', NULL, 'delete', 12, 13),
(8, NULL, 'Element', NULL, 'Elements', 15, 24),
(9, 8, 'Element', NULL, 'index', 16, 17),
(10, 8, 'Element', NULL, 'add', 18, 19),
(11, 8, 'Element', NULL, 'edit', 20, 21),
(12, 8, 'Element', NULL, 'delete', 22, 23),
(13, NULL, 'TicketChange', NULL, 'TicketChanges', 25, 28),
(14, 13, 'TicketChange', NULL, 'add', 26, 27),
(15, NULL, 'TicketComment', NULL, 'TicketComments', 29, 32),
(16, 15, 'TicketComment', NULL, 'add', 30, 31),
(17, NULL, 'Severity', NULL, 'Severities', 33, 42),
(18, 17, 'Severity', NULL, 'index', 34, 35),
(19, 17, 'Severity', NULL, 'add', 36, 37),
(20, 17, 'Severity', NULL, 'edit', 38, 39),
(21, 17, 'Severity', NULL, 'delete', 40, 41),
(22, NULL, 'Page', NULL, 'Pages', 43, 46),
(23, 22, 'Page', NULL, 'display', 44, 45),
(24, NULL, 'Type', NULL, 'Types', 47, 56),
(25, 24, 'Type', NULL, 'index', 48, 49),
(26, 24, 'Type', NULL, 'add', 50, 51),
(27, 24, 'Type', NULL, 'edit', 52, 53),
(28, 24, 'Type', NULL, 'delete', 54, 55),
(29, NULL, 'Status', NULL, 'Statuses', 57, 66),
(30, 29, 'Status', NULL, 'index', 58, 59),
(31, 29, 'Status', NULL, 'add', 60, 61),
(32, 29, 'Status', NULL, 'edit', 62, 63),
(33, 29, 'Status', NULL, 'delete', 64, 65),
(34, NULL, 'User', NULL, 'Users', 67, 82),
(35, 34, 'User', NULL, 'login', 68, 69),
(36, 34, 'User', NULL, 'logout', 70, 71),
(37, 34, 'User', NULL, 'index', 72, 73),
(38, 34, 'User', NULL, 'view', 74, 75),
(39, 34, 'User', NULL, 'add', 76, 77),
(40, 34, 'User', NULL, 'edit', 78, 79),
(41, 34, 'User', NULL, 'delete', 80, 81),
(42, NULL, 'Milestone', NULL, 'Milestones', 83, 94),
(43, 42, 'Milestone', NULL, 'index', 84, 85),
(44, 42, 'Milestone', NULL, 'add', 86, 87),
(45, 42, 'Milestone', NULL, 'edit', 88, 89),
(46, 42, 'Milestone', NULL, 'complete', 90, 91),
(47, 42, 'Milestone', NULL, 'delete', 92, 93),
(48, NULL, 'Ticket', NULL, 'Tickets', 95, 104),
(49, 48, 'Ticket', NULL, 'index', 96, 97),
(50, 48, 'Ticket', NULL, 'view', 98, 99),
(51, 48, 'Ticket', NULL, 'add', 100, 101),
(52, 48, 'Ticket', NULL, 'edit', 102, 103),
(53, NULL, 'Action', NULL, 'Actions', 105, 110),
(54, 53, 'Action', NULL, 'beforeFilter', 106, 107),
(55, 53, 'Action', NULL, 'index', 108, 109),
(56, NULL, 'Project', NULL, 'Projects', 111, 120),
(57, 56, 'Project', NULL, 'index', 112, 113),
(58, 56, 'Project', NULL, 'add', 114, 115),
(59, 56, 'Project', NULL, 'edit', 116, 117),
(60, 56, 'Project', NULL, 'delete', 118, 119),
(61, NULL, 'Timeclock', NULL, 'Timeclocks', 121, 132),
(62, 61, 'Timeclock', NULL, 'index', 122, 123),
(63, 61, 'Timeclock', NULL, 'add', 124, 125),
(64, 61, 'Timeclock', NULL, 'edit', 126, 127),
(65, 61, 'Timeclock', NULL, 'out', 128, 129),
(66, 61, 'Timeclock', NULL, 'delete', 130, 131),
(67, NULL, 'Group', NULL, 'Groups', 133, 144),
(68, 67, 'Group', NULL, 'index', 134, 135),
(69, 67, 'Group', NULL, 'add', 136, 137),
(70, 67, 'Group', NULL, 'edit', 138, 139),
(71, 67, 'Group', NULL, 'delete', 140, 141),
(72, 67, 'Group', NULL, 'security', 142, 143),
(73, NULL, 'Priority', NULL, 'Priorities', 145, 154),
(74, 73, 'Priority', NULL, 'index', 146, 147),
(75, 73, 'Priority', NULL, 'add', 148, 149),
(76, 73, 'Priority', NULL, 'edit', 150, 151),
(77, 73, 'Priority', NULL, 'delete', 152, 153);

-- --------------------------------------------------------

--
-- Table structure for table `action_logs`
--

CREATE TABLE IF NOT EXISTS `action_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `params` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=519 ;



--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(2, NULL, 'Group', 1, 'Group:1', 3, 6),
(9, 0, 'Group', 4, 'Group:4', 1, 2),
(4, 2, 'User', 2, 'User:2', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=238 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 2, 2, '1', '1', '1', '1'),
(2, 2, 4, '1', '1', '1', '1'),
(3, 2, 5, '1', '1', '1', '1'),
(4, 2, 6, '1', '1', '1', '1'),
(5, 2, 7, '1', '1', '1', '1'),
(6, 2, 9, '1', '1', '1', '1'),
(7, 2, 10, '1', '1', '1', '1'),
(8, 2, 11, '1', '1', '1', '1'),
(9, 2, 12, '1', '1', '1', '1'),
(10, 2, 14, '1', '1', '1', '1'),
(11, 2, 16, '1', '1', '1', '1'),
(12, 2, 18, '1', '1', '1', '1'),
(13, 2, 19, '1', '1', '1', '1'),
(14, 2, 20, '1', '1', '1', '1'),
(15, 2, 21, '1', '1', '1', '1'),
(16, 2, 23, '1', '1', '1', '1'),
(17, 2, 25, '1', '1', '1', '1'),
(18, 2, 26, '1', '1', '1', '1'),
(19, 2, 27, '1', '1', '1', '1'),
(20, 2, 28, '1', '1', '1', '1'),
(21, 2, 30, '1', '1', '1', '1'),
(22, 2, 31, '1', '1', '1', '1'),
(23, 2, 32, '1', '1', '1', '1'),
(24, 2, 33, '1', '1', '1', '1'),
(25, 2, 35, '1', '1', '1', '1'),
(26, 2, 36, '1', '1', '1', '1'),
(27, 2, 37, '1', '1', '1', '1'),
(28, 2, 38, '1', '1', '1', '1'),
(29, 2, 39, '1', '1', '1', '1'),
(30, 2, 40, '1', '1', '1', '1'),
(31, 2, 41, '1', '1', '1', '1'),
(32, 2, 43, '1', '1', '1', '1'),
(33, 2, 44, '1', '1', '1', '1'),
(34, 2, 45, '1', '1', '1', '1'),
(35, 2, 46, '1', '1', '1', '1'),
(36, 2, 47, '1', '1', '1', '1'),
(37, 2, 49, '1', '1', '1', '1'),
(38, 2, 50, '1', '1', '1', '1'),
(39, 2, 51, '1', '1', '1', '1'),
(40, 2, 52, '1', '1', '1', '1'),
(41, 2, 54, '1', '1', '1', '1'),
(42, 2, 55, '1', '1', '1', '1'),
(43, 2, 57, '1', '1', '1', '1'),
(44, 2, 58, '1', '1', '1', '1'),
(45, 2, 59, '1', '1', '1', '1'),
(46, 2, 60, '1', '1', '1', '1'),
(47, 2, 62, '1', '1', '1', '1'),
(48, 2, 63, '1', '1', '1', '1'),
(49, 2, 64, '1', '1', '1', '1'),
(50, 2, 65, '1', '1', '1', '1'),
(51, 2, 66, '1', '1', '1', '1'),
(52, 2, 68, '1', '1', '1', '1'),
(53, 2, 69, '1', '1', '1', '1'),
(54, 2, 70, '1', '1', '1', '1'),
(55, 2, 71, '1', '1', '1', '1'),
(56, 2, 72, '1', '1', '1', '1'),
(57, 2, 74, '1', '1', '1', '1'),
(58, 2, 75, '1', '1', '1', '1'),
(59, 2, 76, '1', '1', '1', '1'),
(60, 2, 77, '1', '1', '1', '1'),
(61, 4, 4, '1', '1', '1', '1'),
(62, 4, 5, '1', '1', '1', '1'),
(63, 4, 6, '1', '1', '1', '1'),
(64, 4, 7, '1', '1', '1', '1'),
(65, 4, 9, '1', '1', '1', '1'),
(66, 4, 10, '1', '1', '1', '1'),
(67, 4, 11, '1', '1', '1', '1'),
(68, 4, 12, '1', '1', '1', '1'),
(69, 4, 14, '1', '1', '1', '1'),
(70, 4, 16, '1', '1', '1', '1'),
(71, 4, 18, '1', '1', '1', '1'),
(72, 4, 19, '1', '1', '1', '1'),
(73, 4, 20, '1', '1', '1', '1'),
(74, 4, 21, '1', '1', '1', '1'),
(75, 4, 23, '1', '1', '1', '1'),
(76, 4, 25, '1', '1', '1', '1'),
(77, 4, 26, '1', '1', '1', '1'),
(78, 4, 27, '1', '1', '1', '1'),
(79, 4, 28, '1', '1', '1', '1'),
(80, 4, 30, '1', '1', '1', '1'),
(81, 4, 31, '1', '1', '1', '1'),
(82, 4, 32, '1', '1', '1', '1'),
(83, 4, 33, '1', '1', '1', '1'),
(84, 4, 35, '1', '1', '1', '1'),
(85, 4, 36, '1', '1', '1', '1'),
(86, 4, 37, '1', '1', '1', '1'),
(87, 4, 38, '1', '1', '1', '1'),
(88, 4, 39, '1', '1', '1', '1'),
(89, 4, 40, '1', '1', '1', '1'),
(90, 4, 41, '1', '1', '1', '1'),
(91, 4, 43, '1', '1', '1', '1'),
(92, 4, 44, '1', '1', '1', '1'),
(93, 4, 45, '1', '1', '1', '1'),
(94, 4, 46, '1', '1', '1', '1'),
(95, 4, 47, '1', '1', '1', '1'),
(96, 4, 49, '1', '1', '1', '1'),
(97, 4, 50, '1', '1', '1', '1'),
(98, 4, 51, '1', '1', '1', '1'),
(99, 4, 52, '1', '1', '1', '1'),
(100, 4, 54, '1', '1', '1', '1'),
(101, 4, 55, '1', '1', '1', '1'),
(102, 4, 57, '1', '1', '1', '1'),
(103, 4, 58, '1', '1', '1', '1'),
(104, 4, 59, '1', '1', '1', '1'),
(105, 4, 60, '1', '1', '1', '1'),
(106, 4, 62, '1', '1', '1', '1'),
(107, 4, 63, '1', '1', '1', '1'),
(108, 4, 64, '1', '1', '1', '1'),
(109, 4, 66, '1', '1', '1', '1'),
(110, 4, 68, '1', '1', '1', '1'),
(111, 4, 69, '1', '1', '1', '1'),
(112, 4, 70, '1', '1', '1', '1'),
(113, 4, 71, '1', '1', '1', '1'),
(114, 4, 72, '1', '1', '1', '1'),
(115, 4, 74, '1', '1', '1', '1'),
(116, 4, 75, '1', '1', '1', '1'),
(117, 4, 76, '1', '1', '1', '1'),
(118, 4, 77, '1', '1', '1', '1'),
(221, 9, 58, '1', '1', '1', '1'),
(220, 9, 57, '1', '1', '1', '1'),
(219, 9, 55, '1', '1', '1', '1'),
(218, 9, 54, '-1', '-1', '-1', '-1'),
(217, 9, 52, '1', '1', '1', '1'),
(216, 9, 51, '1', '1', '1', '1'),
(215, 9, 50, '1', '1', '1', '1'),
(214, 9, 49, '1', '1', '1', '1'),
(213, 9, 47, '-1', '-1', '-1', '-1'),
(212, 9, 46, '-1', '-1', '-1', '-1'),
(211, 9, 45, '-1', '-1', '-1', '-1'),
(210, 9, 44, '-1', '-1', '-1', '-1'),
(209, 9, 43, '1', '1', '1', '1'),
(208, 9, 38, '1', '1', '1', '1'),
(207, 9, 37, '1', '1', '1', '1'),
(206, 9, 36, '1', '1', '1', '1'),
(205, 9, 35, '1', '1', '1', '1'),
(204, 9, 33, '-1', '-1', '-1', '-1'),
(203, 9, 32, '-1', '-1', '-1', '-1'),
(202, 9, 31, '-1', '-1', '-1', '-1'),
(201, 9, 30, '1', '1', '1', '1'),
(200, 9, 28, '-1', '-1', '-1', '-1'),
(199, 9, 27, '-1', '-1', '-1', '-1'),
(198, 9, 26, '-1', '-1', '-1', '-1'),
(197, 9, 25, '1', '1', '1', '1'),
(196, 9, 23, '1', '1', '1', '1'),
(195, 9, 21, '-1', '-1', '-1', '-1'),
(194, 9, 20, '-1', '-1', '-1', '-1'),
(193, 9, 19, '-1', '-1', '-1', '-1'),
(192, 9, 18, '-1', '-1', '-1', '-1'),
(191, 9, 16, '1', '1', '1', '1'),
(190, 9, 14, '1', '1', '1', '1'),
(189, 9, 12, '1', '1', '1', '1'),
(188, 9, 11, '1', '1', '1', '1'),
(187, 9, 10, '1', '1', '1', '1'),
(186, 9, 9, '1', '1', '1', '1'),
(185, 9, 7, '-1', '-1', '-1', '-1'),
(184, 9, 6, '-1', '-1', '-1', '-1'),
(183, 9, 5, '-1', '-1', '-1', '-1'),
(182, 9, 4, '1', '1', '1', '1'),
(178, 9, 41, '-1', '-1', '-1', '-1'),
(177, 9, 40, '1', '1', '1', '1'),
(176, 9, 39, '-1', '-1', '-1', '-1'),
(222, 9, 59, '1', '1', '1', '1'),
(223, 9, 60, '-1', '-1', '-1', '-1'),
(224, 9, 62, '1', '1', '1', '1'),
(225, 9, 63, '1', '1', '1', '1'),
(226, 9, 64, '1', '1', '1', '1'),
(227, 9, 65, '1', '1', '1', '1'),
(228, 9, 66, '1', '1', '1', '1'),
(229, 9, 68, '1', '1', '1', '1'),
(230, 9, 69, '-1', '-1', '-1', '-1'),
(231, 9, 70, '-1', '-1', '-1', '-1'),
(232, 9, 71, '-1', '-1', '-1', '-1'),
(233, 9, 72, '-1', '-1', '-1', '-1'),
(234, 9, 74, '1', '1', '1', '1'),
(235, 9, 75, '1', '1', '1', '1'),
(236, 9, 76, '1', '1', '1', '1'),
(237, 9, 77, '-1', '-1', '-1', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE IF NOT EXISTS `elements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `elements`
--


-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `parent_id`) VALUES
(1, 'Developers', 0),
(4, 'Clients', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE IF NOT EXISTS `milestones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `codename` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `project_id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `due` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `milestones`
--


-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE IF NOT EXISTS `priorities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `priorities`
--


-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `client_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `ticket_count` int(11) NOT NULL,
  `open_ticket_count` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `projects`
--


-- --------------------------------------------------------

--
-- Table structure for table `severities`
--

CREATE TABLE IF NOT EXISTS `severities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `severities`
--


-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `statuses`
--


-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `is_open` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tickets`
--


-- --------------------------------------------------------

--
-- Table structure for table `ticket_changes`
--

CREATE TABLE IF NOT EXISTS `ticket_changes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_owner_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `severity_id` int(11) NOT NULL,
  `priority_id` int(11) NOT NULL,
  `version_id` int(11) NOT NULL,
  `milestone_id` int(11) NOT NULL,
  `description` longtext,
  `resolution` longtext,
  `status_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `due` datetime DEFAULT NULL,
  `completed` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ticket_changes`
--


-- --------------------------------------------------------

--
-- Table structure for table `ticket_comments`
--

CREATE TABLE IF NOT EXISTS `ticket_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ticket_comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `timeclocks`
--

CREATE TABLE IF NOT EXISTS `timeclocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `milestone_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `clocked_in` datetime NOT NULL,
  `clocked_out` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `timeclocks`
--


-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `types`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `group_id`, `created`, 'modified') VALUES
(2, 'kinspire admin', 'admin', '74bc469af3d692f9d15242af00e556a3b0a4bc76', 1, NULL, NULL);

ALTER TABLE `users` ADD `modified` DATETIME NULL AFTER `created` 
-- --------------------------------------------------------

--
-- Table structure for table `versions`
--

CREATE TABLE IF NOT EXISTS `versions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `versions`
--



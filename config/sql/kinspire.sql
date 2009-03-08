-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Mar 08, 2009 at 01:44 AM
-- Server version: 4.1.22
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
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

-- 
-- Dumping data for table `acos`
-- 

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (1, NULL, NULL, NULL, 'controllers', 1, 184),
(2, 1, NULL, NULL, 'Pages', 2, 7),
(3, 2, NULL, NULL, 'display', 3, 4),
(4, 2, NULL, NULL, 'logAction', 5, 6),
(5, 1, NULL, NULL, 'Users', 8, 25),
(6, 5, NULL, NULL, 'login', 9, 10),
(7, 5, NULL, NULL, 'logout', 11, 12),
(8, 5, NULL, NULL, 'index', 13, 14),
(9, 5, NULL, NULL, 'view', 15, 16),
(10, 5, NULL, NULL, 'add', 17, 18),
(11, 5, NULL, NULL, 'edit', 19, 20),
(12, 5, NULL, NULL, 'delete', 21, 22),
(13, 5, NULL, NULL, 'logAction', 23, 24),
(14, 1, NULL, NULL, 'Groups', 26, 37),
(15, 14, NULL, NULL, 'index', 27, 28),
(16, 14, NULL, NULL, 'add', 29, 30),
(17, 14, NULL, NULL, 'edit', 31, 32),
(18, 14, NULL, NULL, 'delete', 33, 34),
(19, 14, NULL, NULL, 'logAction', 35, 36),
(20, 1, NULL, NULL, 'TicketComments', 38, 43),
(21, 20, NULL, NULL, 'add', 39, 40),
(22, 20, NULL, NULL, 'logAction', 41, 42),
(23, 1, NULL, NULL, 'Statuses', 44, 55),
(24, 23, NULL, NULL, 'index', 45, 46),
(25, 23, NULL, NULL, 'add', 47, 48),
(26, 23, NULL, NULL, 'edit', 49, 50),
(27, 23, NULL, NULL, 'delete', 51, 52),
(28, 23, NULL, NULL, 'logAction', 53, 54),
(29, 1, NULL, NULL, 'Severities', 56, 67),
(30, 29, NULL, NULL, 'index', 57, 58),
(31, 29, NULL, NULL, 'add', 59, 60),
(32, 29, NULL, NULL, 'edit', 61, 62),
(33, 29, NULL, NULL, 'delete', 63, 64),
(34, 29, NULL, NULL, 'logAction', 65, 66),
(35, 1, NULL, NULL, 'Milestones', 68, 81),
(36, 35, NULL, NULL, 'index', 69, 70),
(37, 35, NULL, NULL, 'add', 71, 72),
(38, 35, NULL, NULL, 'edit', 73, 74),
(39, 35, NULL, NULL, 'complete', 75, 76),
(40, 35, NULL, NULL, 'delete', 77, 78),
(41, 35, NULL, NULL, 'logAction', 79, 80),
(42, 1, NULL, NULL, 'Configurations', 82, 85),
(43, 42, NULL, NULL, 'logAction', 83, 84),
(44, 1, NULL, NULL, 'Projects', 86, 97),
(45, 44, NULL, NULL, 'index', 87, 88),
(46, 44, NULL, NULL, 'add', 89, 90),
(47, 44, NULL, NULL, 'edit', 91, 92),
(48, 44, NULL, NULL, 'delete', 93, 94),
(49, 44, NULL, NULL, 'logAction', 95, 96),
(50, 1, NULL, NULL, 'Types', 98, 109),
(51, 50, NULL, NULL, 'index', 99, 100),
(52, 50, NULL, NULL, 'add', 101, 102),
(53, 50, NULL, NULL, 'edit', 103, 104),
(54, 50, NULL, NULL, 'delete', 105, 106),
(55, 50, NULL, NULL, 'logAction', 107, 108),
(56, 1, NULL, NULL, 'ActionLogs', 110, 113),
(57, 56, NULL, NULL, 'logAction', 111, 112),
(58, 1, NULL, NULL, 'Tickets', 114, 127),
(59, 58, NULL, NULL, 'index', 115, 116),
(60, 58, NULL, NULL, 'open_by_project', 117, 118),
(61, 58, NULL, NULL, 'view', 119, 120),
(62, 58, NULL, NULL, 'add', 121, 122),
(63, 58, NULL, NULL, 'edit', 123, 124),
(64, 58, NULL, NULL, 'logAction', 125, 126),
(65, 1, NULL, NULL, 'Versions', 128, 139),
(66, 65, NULL, NULL, 'index', 129, 130),
(67, 65, NULL, NULL, 'add', 131, 132),
(68, 65, NULL, NULL, 'edit', 133, 134),
(69, 65, NULL, NULL, 'delete', 135, 136),
(70, 65, NULL, NULL, 'logAction', 137, 138),
(71, 1, NULL, NULL, 'Timeclocks', 140, 153),
(72, 71, NULL, NULL, 'index', 141, 142),
(73, 71, NULL, NULL, 'add', 143, 144),
(74, 71, NULL, NULL, 'edit', 145, 146),
(75, 71, NULL, NULL, 'out', 147, 148),
(76, 71, NULL, NULL, 'delete', 149, 150),
(77, 71, NULL, NULL, 'logAction', 151, 152),
(78, 1, NULL, NULL, 'TicketChanges', 154, 159),
(79, 78, NULL, NULL, 'add', 155, 156),
(80, 78, NULL, NULL, 'logAction', 157, 158),
(81, 1, NULL, NULL, 'Priorities', 160, 171),
(82, 81, NULL, NULL, 'index', 161, 162),
(83, 81, NULL, NULL, 'add', 163, 164),
(84, 81, NULL, NULL, 'edit', 165, 166),
(85, 81, NULL, NULL, 'delete', 167, 168),
(86, 81, NULL, NULL, 'logAction', 169, 170),
(87, 1, NULL, NULL, 'Elements', 172, 183),
(88, 87, NULL, NULL, 'index', 173, 174),
(89, 87, NULL, NULL, 'add', 175, 176),
(90, 87, NULL, NULL, 'edit', 177, 178),
(91, 87, NULL, NULL, 'delete', 179, 180),
(92, 87, NULL, NULL, 'logAction', 181, 182);

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
) ENGINE=MyISAM AUTO_INCREMENT=598 DEFAULT CHARSET=latin1 AUTO_INCREMENT=598 ;

-- 
-- Dumping data for table `action_logs`
-- 

INSERT INTO `action_logs` (`id`, `user_id`, `controller`, `action`, `params`, `created`) VALUES (519, 9, 'projects', 'index', '', '2009-03-06 21:09:26'),
(520, 9, 'users', 'login', '', '2009-03-06 21:12:16'),
(521, 9, 'projects', 'index', '', '2009-03-08 01:22:32'),
(522, 9, 'tickets', 'index', '', '2009-03-08 01:22:49'),
(523, 1, 'tickets', 'index', '', '2009-03-08 01:25:28'),
(524, 1, 'projects', 'index', '', '2009-03-08 01:26:23'),
(525, 1, 'projects', 'add', '', '2009-03-08 01:26:25'),
(526, 1, 'projects', 'add', '', '2009-03-08 01:26:33'),
(527, 1, 'projects', 'index', '', '2009-03-08 01:26:33'),
(528, 1, 'tickets', 'open_by_project', '1', '2009-03-08 01:26:36'),
(529, 1, 'projects', 'index', '', '2009-03-08 01:26:37'),
(530, 1, 'tickets', 'add', '1', '2009-03-08 01:26:42'),
(531, 1, 'types', 'index', '', '2009-03-08 01:26:53'),
(532, 1, 'types', 'add', '', '2009-03-08 01:26:55'),
(533, 1, 'types', 'add', '', '2009-03-08 01:27:03'),
(534, 1, 'types', 'index', '', '2009-03-08 01:27:03'),
(535, 1, 'statuses', 'index', '', '2009-03-08 01:27:07'),
(536, 1, 'statuses', 'add', '', '2009-03-08 01:27:12'),
(537, 1, 'statuses', 'add', '', '2009-03-08 01:27:19'),
(538, 1, 'statuses', 'index', '', '2009-03-08 01:27:19'),
(539, 1, 'types', 'index', '', '2009-03-08 01:27:24'),
(540, 1, 'types', 'edit', '1', '2009-03-08 01:27:26'),
(541, 1, 'types', 'edit', '1', '2009-03-08 01:27:31'),
(542, 1, 'types', 'index', '', '2009-03-08 01:27:31'),
(543, 1, 'statuses', 'index', '', '2009-03-08 01:27:33'),
(544, 1, 'priorities', 'index', '', '2009-03-08 01:27:36'),
(545, 1, 'severities', 'index', '', '2009-03-08 01:27:37'),
(546, 1, 'severities', 'add', '', '2009-03-08 01:27:38'),
(547, 1, 'severities', 'add', '', '2009-03-08 01:27:43'),
(548, 1, 'severities', 'index', '', '2009-03-08 01:27:44'),
(549, 1, 'priorities', 'index', '', '2009-03-08 01:27:45'),
(550, 1, 'priorities', 'add', '', '2009-03-08 01:27:46'),
(551, 1, 'priorities', 'add', '', '2009-03-08 01:27:52'),
(552, 1, 'priorities', 'index', '', '2009-03-08 01:27:52'),
(553, 1, 'milestones', 'index', '', '2009-03-08 01:27:57'),
(554, 1, 'elements', 'index', '', '2009-03-08 01:28:00'),
(555, 1, 'elements', 'add', '', '2009-03-08 01:28:03'),
(556, 1, 'elements', 'index', '', '2009-03-08 01:28:03'),
(557, 1, 'elements', 'add', '', '2009-03-08 01:28:05'),
(558, 1, 'elements', 'index', '', '2009-03-08 01:28:05'),
(559, 1, 'elements', 'add', '', '2009-03-08 01:28:09'),
(560, 1, 'elements', 'index', '', '2009-03-08 01:28:09'),
(561, 1, 'elements', 'add', '1', '2009-03-08 01:28:13'),
(562, 1, 'elements', 'add', '', '2009-03-08 01:28:19'),
(563, 1, 'elements', 'index', '', '2009-03-08 01:28:19'),
(564, 1, 'milestones', 'add', '1', '2009-03-08 01:28:56'),
(565, 1, 'milestones', 'add', '', '2009-03-08 01:29:11'),
(566, 1, 'milestones', 'index', '', '2009-03-08 01:29:11'),
(567, 1, 'versions', 'add', '1', '2009-03-08 01:29:15'),
(568, 1, 'versions', 'add', '', '2009-03-08 01:29:25'),
(569, 1, 'versions', 'index', '', '2009-03-08 01:29:25'),
(570, 1, 'versions', 'edit', '1', '2009-03-08 01:29:28'),
(571, 1, 'versions', 'edit', '1', '2009-03-08 01:29:31'),
(572, 1, 'versions', 'index', '', '2009-03-08 01:29:31'),
(573, 1, 'tickets', 'add', '1', '2009-03-08 01:29:35'),
(574, 1, 'tickets', 'add', '', '2009-03-08 01:29:43'),
(575, 1, 'tickets', 'view', '1', '2009-03-08 01:29:43'),
(576, 1, 'tickets', 'open_by_project', '1', '2009-03-08 01:29:48'),
(577, 1, 'tickets', 'view', '1', '2009-03-08 01:29:48'),
(578, 1, 'tickets', 'view', '1', '2009-03-08 01:31:22'),
(579, 1, 'tickets', 'view', '1', '2009-03-08 01:31:42'),
(580, 1, 'tickets', 'open_by_project', '1', '2009-03-08 01:31:45'),
(581, 1, 'users', 'logout', '', '2009-03-08 01:31:49'),
(582, 1, 'projects', 'index', '', '2009-03-08 01:34:38'),
(583, 1, 'users', 'login', '', '2009-03-08 01:34:38'),
(584, 1, 'users', 'login', '', '2009-03-08 01:35:16'),
(585, 1, 'projects', 'index', '', '2009-03-08 01:35:17'),
(586, 1, 'users', 'login', '', '2009-03-08 01:35:17'),
(587, 1, 'users', 'logout', '', '2009-03-08 01:35:19'),
(588, 1, 'projects', 'index', '', '2009-03-08 01:35:25'),
(589, 1, 'users', 'login', '', '2009-03-08 01:35:26'),
(590, 1, 'users', 'login', '', '2009-03-08 01:40:17'),
(591, 1, 'tickets', 'open_by_project', '1', '2009-03-08 01:40:21'),
(592, 1, 'users', 'initDB', '', '2009-03-08 01:42:12'),
(593, 1, 'users', 'initDB', '', '2009-03-08 01:42:13'),
(594, 1, 'users', 'initDB', '', '2009-03-08 01:43:00'),
(595, 1, 'users', 'logout', '', '2009-03-08 01:43:36'),
(596, 1, 'tickets', 'index', '', '2009-03-08 01:43:47'),
(597, 1, 'tickets', 'open_by_project', '1', '2009-03-08 01:43:49');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `aros`
-- 

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES (2, NULL, 'Group', 1, 'Group:1', 3, 6),
(9, 0, 'Group', 2, 'Group:2', 1, 2),
(4, 2, 'User', 1, 'User:1', 4, 5);

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

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES (1, 2, 1, '1', '1', '1', '1'),
(2, 9, 1, '1', '1', '1', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `configurations`
-- 

INSERT INTO `configurations` (`id`, `name`, `value`) VALUES (1, 'foo', 'bar');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `elements`
-- 

INSERT INTO `elements` (`id`, `name`, `description`, `project_id`, `owner_id`) VALUES (1, 'General', '', 1, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `groups`
-- 

CREATE TABLE `groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `parent_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `groups`
-- 

INSERT INTO `groups` (`id`, `name`, `parent_id`) VALUES (1, 'Developers', 0),
(2, 'Clients', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `milestones`
-- 

INSERT INTO `milestones` (`id`, `name`, `codename`, `description`, `project_id`, `owner_id`, `due`, `completed`, `created`) VALUES (1, '1.0', 'release', '', 1, 1, '2009-03-15 01:28:00', NULL, '2009-03-08 01:29:11');

-- --------------------------------------------------------

-- 
-- Table structure for table `priorities`
-- 

CREATE TABLE `priorities` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `priorities`
-- 

INSERT INTO `priorities` (`id`, `name`, `order`) VALUES (1, 'Critical', 1);

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
  `ticket_count` int(11) NOT NULL default '0',
  `open_ticket_count` int(11) NOT NULL default '0',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `projects`
-- 

INSERT INTO `projects` (`id`, `name`, `description`, `client_id`, `owner_id`, `is_active`, `ticket_count`, `open_ticket_count`, `created`, `updated`) VALUES (1, 'Test Project', '', 1, 1, 1, 1, 1, '2009-03-08 01:26:33', '2009-03-08 01:29:43');

-- --------------------------------------------------------

-- 
-- Table structure for table `severities`
-- 

CREATE TABLE `severities` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `severities`
-- 

INSERT INTO `severities` (`id`, `name`, `order`) VALUES (1, 'Critical', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `statuses`
-- 

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `statuses`
-- 

INSERT INTO `statuses` (`id`, `name`, `order`) VALUES (1, 'New', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `ticket_changes`
-- 

CREATE TABLE `ticket_changes` (
  `id` int(11) NOT NULL auto_increment,
  `ticket_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `ticket_owner_id` int(11) NOT NULL default '0',
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `ticket_changes`
-- 

INSERT INTO `ticket_changes` (`id`, `ticket_id`, `user_id`, `ticket_owner_id`, `type_id`, `element_id`, `severity_id`, `priority_id`, `version_id`, `milestone_id`, `description`, `resolution`, `status_id`, `is_active`, `due`, `completed`, `created`) VALUES (1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1, 1, NULL, NULL, '2009-03-08 01:29:43');

-- --------------------------------------------------------

-- 
-- Table structure for table `ticket_comments`
-- 

CREATE TABLE `ticket_comments` (
  `id` int(11) NOT NULL auto_increment,
  `ticket_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `body` longtext NOT NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `ticket_comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tickets`
-- 

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `project_id` int(11) NOT NULL default '0',
  `reporter_id` int(11) NOT NULL default '0',
  `is_open` tinyint(1) NOT NULL default '0',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tickets`
-- 

INSERT INTO `tickets` (`id`, `title`, `project_id`, `reporter_id`, `is_open`, `created`, `updated`) VALUES (1, 'test the tickets', 1, 1, 1, '2009-03-08 01:29:43', '2009-03-08 01:29:43');

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
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `types`
-- 

INSERT INTO `types` (`id`, `name`, `order`) VALUES (1, 'General', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL default '',
  `username` varchar(255) NOT NULL default '',
  `password` varchar(255) NOT NULL default '',
  `group_id` int(11) NOT NULL default '0',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `name`, `username`, `password`, `group_id`, `created`, `updated`) VALUES (1, 'kinspire admin', 'admin', '74bc469af3d692f9d15242af00e556a3b0a4bc76', 1, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `versions`
-- 

INSERT INTO `versions` (`id`, `name`, `description`, `project_id`, `owner_id`, `created`, `updated`) VALUES (1, '0.1a', '', 1, 1, '2009-03-08 01:29:25', '2009-03-08 01:29:31');

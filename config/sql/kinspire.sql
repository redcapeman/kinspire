-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2009 at 03:22 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exqsoft_kinspire`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default NULL,
  `foreign_key` int(10) default NULL,
  `alias` varchar(255) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `acos`
--


-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `model` varchar(255) default NULL,
  `foreign_key` int(10) default NULL,
  `alias` varchar(255) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 6),
(2, 1, 'User', 1, NULL, 2, 3),
(3, NULL, 'Group', 2, NULL, 7, 8),
(4, NULL, 'Group', 3, NULL, 9, 10),
(5, 1, 'User', 2, NULL, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL auto_increment,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL default '0',
  `_read` varchar(2) NOT NULL default '0',
  `_update` varchar(2) NOT NULL default '0',
  `_delete` varchar(2) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `aros_acos`
--


-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE IF NOT EXISTS `elements` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `owner_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `name`, `description`, `project_id`, `owner_id`) VALUES
(1, 'General', '', 0, NULL),
(4, 'Forms', '', 0, NULL),
(5, 'Models', '', 0, NULL),
(6, 'Views', '', 0, NULL),
(7, 'Database', '', 0, NULL),
(10, 'Permissions', '', 0, NULL),
(14, 'None', '', 0, NULL),
(22, 'Controllers', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Administrators'),
(2, 'Developers'),
(3, 'Clients');

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE IF NOT EXISTS `milestones` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `codename` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `project_id` int(11) NOT NULL,
  `due` datetime default NULL,
  `completed` datetime default NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`id`, `name`, `codename`, `description`, `project_id`, `due`, `completed`, `created`) VALUES
(1, '1.0', 'omega', '', 1, '2009-03-24 12:00:00', NULL, '2009-02-24 21:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE IF NOT EXISTS `priorities` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `priorities`
--

INSERT INTO `priorities` (`id`, `name`, `order`) VALUES
(1, 'Very Low', 1),
(2, 'Low', 2),
(3, 'Medium', 3),
(4, 'High', 4),
(5, 'Critical', 5);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `client_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `client_id`, `owner_id`, `is_active`, `created`, `updated`) VALUES
(1, 'Some Project', '', 1, 1, 1, '2009-02-24 21:57:06', '2009-02-24 21:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `severities`
--

CREATE TABLE IF NOT EXISTS `severities` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `severities`
--

INSERT INTO `severities` (`id`, `name`, `order`) VALUES
(1, 'Trivial', 1),
(2, 'Minor', 2),
(3, 'Normal', 3),
(4, 'Major', 4),
(5, 'Critical', 5);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `order`) VALUES
(1, 'New', 1),
(2, 'Open', 2),
(3, 'Closed', 3),
(4, 'Resolved', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `severity_id` int(11) NOT NULL,
  `priority_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `version_id` int(11) NOT NULL,
  `milestone_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `project_id`, `type_id`, `element_id`, `severity_id`, `priority_id`, `owner_id`, `reporter_id`, `version_id`, `milestone_id`, `status_id`, `created`, `updated`) VALUES
(1, 'write some code', 1, 3, 1, 4, 5, 1, 1, 1, 1, 2, '2009-02-24 21:59:29', '2009-02-24 21:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_changes`
--

CREATE TABLE IF NOT EXISTS `ticket_changes` (
  `id` int(11) NOT NULL auto_increment,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` longtext,
  `resolution` longtext,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ticket_changes`
--

INSERT INTO `ticket_changes` (`id`, `ticket_id`, `user_id`, `description`, `resolution`, `created`) VALUES
(1, 1, 1, 'I really need to write some code', NULL, '2009-02-24 21:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_comments`
--

CREATE TABLE IF NOT EXISTS `ticket_comments` (
  `id` int(11) NOT NULL auto_increment,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ticket_comments`
--

INSERT INTO `ticket_comments` (`id`, `ticket_id`, `user_id`, `title`, `body`, `created`, `updated`) VALUES
(1, 1, 1, 'oh hey', 'I forgot, we need to do this now!', '2009-02-24 21:59:52', '2009-02-24 21:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `timeclocks`
--

CREATE TABLE IF NOT EXISTS `timeclocks` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `milestone_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `clocked_in` datetime NOT NULL,
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

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `order`) VALUES
(1, 'Bug', 1),
(2, 'Enhancement', 2),
(3, 'Core Feature', 3),
(4, 'Wish', 4),
(5, 'General Task', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `parent_id` int(11) default NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `parent_id`, `created`, `updated`) VALUES
(1, 'Travis', '6c6fbe59c8d4d2c5cf3945bcca9f366c05e76dbe', 1, NULL, '2009-02-24 21:47:11', '2009-02-24 21:47:11'),
(2, 'test', '6c6fbe59c8d4d2c5cf3945bcca9f366c05e76dbe', 1, NULL, '2009-02-24 22:00:30', '2009-02-24 22:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `versions`
--

CREATE TABLE IF NOT EXISTS `versions` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `versions`
--

INSERT INTO `versions` (`id`, `name`, `description`, `project_id`, `created`) VALUES
(1, '0.1', '', 1, '2009-02-24 21:58:28');

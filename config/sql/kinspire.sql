-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Mar 22, 2009 at 09:41 PM
-- Server version: 5.0.68
-- PHP Version: 5.2.6
-- 
-- Database: `exqsoft_kinspire`
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
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

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
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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

-- --------------------------------------------------------

-- 
-- Table structure for table `icons`
-- 

CREATE TABLE `icons` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=490 DEFAULT CHARSET=latin1 AUTO_INCREMENT=490 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=294 DEFAULT CHARSET=latin1 AUTO_INCREMENT=294 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

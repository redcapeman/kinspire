-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Mar 11, 2009 at 10:38 PM
-- Server version: 4.1.22
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
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=4223 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `groups`
-- 

CREATE TABLE `groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `parent_id` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `icons`
-- 

CREATE TABLE `icons` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `ticket_changes`
-- 

CREATE TABLE `ticket_changes` (
  `id` int(11) NOT NULL auto_increment,
  `ticket_id` int(11) NOT NULL default '0',
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `tickets`
-- 

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `project_id` int(11) NOT NULL default '0',
  `reporter_id` int(11) NOT NULL default '0',
  `owner_id` int(11) default NULL,
  `is_open` tinyint(1) NOT NULL default '0',
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `upload_folders`
-- 

CREATE TABLE `upload_folders` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `parent_id` int(10) default NULL,
  `lft` int(10) default NULL,
  `rght` int(10) default NULL,
  `name` varchar(255) default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- 
-- Table structure for table `uploads`
-- 

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(75) NOT NULL default '',
  `type` varchar(255) NOT NULL default '',
  `size` int(11) NOT NULL default '0',
  `data` longblob NOT NULL,
  `upload_folder_id` int(11) default NULL,
  `created` datetime default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

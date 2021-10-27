-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 27, 2021 at 07:12 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `url_shortener`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `short_url_data`
-- 

CREATE TABLE `short_url_data` (
  `id` varchar(5) NOT NULL,
  `orig_url` varchar(500) NOT NULL,
  `unique_exten` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `short_url_data`
-- 

INSERT INTO `short_url_data` (`id`, `orig_url`, `unique_exten`) VALUES 
('1', 'https://mail.google.com/mail/u/0/#inbox', '567'),
('', 'https://www.youtube.com/watch?v=NWDYl4E6LVM', '9d5'),
('', 'https://mail.google.com/mail/u/0/#inbox', '88e'),
('', 'https://mail.google.com/mail/u/0/#inbox', '256'),
('', 'http://localhost/Vidyayan/Vidyayan_TASK2/linkshort.php', 'a6d'),
('', 'https://www.youtube.com/watch?v=NWDYl4E6LVM', '90b'),
('', 'https://mail.google.com/mail/u/0/#inbox', '1f4'),
('', 'https://mail.google.com/mail/u/0/#inbox', '20f'),
('', 'https://mail.google.com/mail/u/0/#inbox', '1f8'),
('', 'https://mail.google.com/mail/u/0/#inbox', '05f'),
('', 'https://mail.google.com/mail/u/0/#inbox', '72b'),
('', 'https://mail.google.com/mail/u/0/#inbox', 'd1d'),
('', 'https://mail.google.com/mail/u/0/#inbox', '05b'),
('', '', '10b'),
('', 'https://www.linkedin.com/feed/', 'f03'),
('', 'https://www.linkedin.com/feed/', '383'),
('', '', 'cca'),
('', 'https://mail.google.com/mail/u/0/#inbox', 'c78'),
('', 'http://mis.nita.ac.in/mis/iitmsv4eGq0RuNHb0G5WbhLmTKLmTO7YBcJ4RHuXxCNPvuIw=?enc=qm57Gj5z5rxbHHlVDqp3SJDByosTs/DTNv9GsAbS/uj2Z0xhu7+wCgfuRiZMFqoE', '985'),
('', '', '250'),
('', 'https://www.linkedin.com/feed/', 'a53'),
('', 'https://mail.google.com/mail/u/0/#inbox', '65e'),
('', 'https://www.vidyayan.in/aboutus', '626'),
('', 'https://mis.nita.ac.in/mis/iitmsv4eGq0RuNHb0G5WbhLmTKLmTO7YBcJ4RHuXxCNPvuIw=?enc=qm57Gj5z5rxbHHlVDqp3SJDByosTs/DTNv9GsAbS/uj2Z0xhu7+wCgfuRiZMFqoE', '30e');

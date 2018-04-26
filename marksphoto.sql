-- Table structure for table `contact`

--


DROP TABLE IF EXISTS `contact`;

CREATE TABLE IF NOT EXISTS `contact` (

 `description` varchar(160) DEFAULT NULL,

 `date` date DEFAULT NULL,

 `time` time DEFAULT NULL,

 `location` varchar(20) DEFAULT NULL,

 `fname` varchar(20) DEFAULT NULL,

 `lname` varchar(20) DEFAULT NULL,

 `email` varchar(50) DEFAULT NULL,

 `pnumber` varchar(15) DEFAULT NULL,

 `services` varchar(50) DEFAULT NULL,

 `bridal` varchar(20) DEFAULT NULL,

 `reach` varchar(20) DEFAULT NULL,

 `search` varchar(20) DEFAULT NULL,

 `weddingwire` varchar(20) DEFAULT NULL,

 `thumbtack` varchar(20) DEFAULT NULL,

 `gigmaster` varchar(20) DEFAULT NULL,

 `other` varchar(20) DEFAULT NULL,

 `othertext` varchar(20) DEFAULT NULL

) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--

-- Table structure for table `newsletter`

--


DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE IF NOT EXISTS `newsletter` (

 `email` varchar(50) DEFAULT NULL

) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--

-- Table structure for table `reviews`

--


DROP TABLE IF EXISTS `reviews`;

CREATE TABLE IF NOT EXISTS `reviews` (

 `review` varchar(300) DEFAULT NULL

) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS `blogEntry`;

CREATE TABLE IF NOT EXISTS `blogEntry`(
	`blogTitle` varchar(100) DEFAULT NULL,
	`blogPhoto` blob        DEFAULT NULL,
	
	`blogText` varchar(700) DEFAULT NULL
)ENGINE = MyISAM DEFAULT CHARSET=latin1;











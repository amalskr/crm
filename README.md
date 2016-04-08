# crm
CRM login 
Database configuration,

Database: `crm`
table `login` (`id`, `username`, `password`, `action`)

`id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
  
  Dumping data
  
  VALUES
(1, 'admin', '12345', 'ADMINISTRATOR'),
(2, 'manager', 'mngr123', 'MANAGER'),
(3, 'admin_cl', 'cl123', 'Course Leader'),
(4, 'admin_cm', 'cm123', 'Course Moderator'),
(5, 'admin_pvc', 'pvc123', 'Pro Vice Chancellor'),
(6, 'admin_dlt', 'dlt123', 'Director of Learning and Quality')

Don't change the 'action' name. That's the key value for redirect pages. 

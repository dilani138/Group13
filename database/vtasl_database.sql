/* 
	+--------------------------------------------------------------------------------------------------+
	|	# This is the sample database for Vocational Training Authority Sri Lanka new website.		   |
	|	# Here we have created four tables such as company, graduates, courses, appliers.              |
	|	# graduates, courses tables and courses, appliers tables are inter connected.                  |
	+--------------------------------------------------------------------------------------------------+
*/

CREATE DATABASE vtasl; 

USE vtasl;

CREATE TABLE company
(
	com_user_name VARCHAR(10) NOT NULL,
	com_password VARCHAR(8) NOT NULL,
	com_name VARCHAR(100),
	com_address VARCHAR(150),
	com_telephone_1 VARCHAR(10) NOT NULL,
	com_telephone_2 VARCHAR(10) ,
	com_fax VARCHAR(10),
	com_email VARCHAR(30),
	com_descr VARCHAR(255),
	PRIMARY KEY(com_user_name)
)ENGINE=INNODB;

CREATE TABLE graduates 
(
	st_user_name VARCHAR(10) NOT NULL,
	st_password VARCHAR(8) NOT NULL,
	st_name VARCHAR(30),
	results VARCHAR(50),
	extra_qulification VARCHAR(150),
	st_telephone_1 VARCHAR(10) NOT NULL,
	st_telephone_2 VARCHAR(10),
	st_email VARCHAR(30),
	course_id VARCHAR(8) NOT NULL,
	PRIMARY KEY(st_user_name),
	FOREIGN KEY(course_id) REFERENCES courses(course_id)
)ENGINE=INNODB;

CREATE TABLE courses 
(
	course_id VARCHAR(8) NOT NULL,
	course_name VARCHAR(50),
	time_period VARCHAR(10),
	nvq_level VARCHAR(10),
	district VARCHAR(20),
	brach VARCHAR(20),
	PRIMARY KEY(course_id),
)ENGINE=INNODB;

CREATE TABLE appliers 
(
	applier_no VARCHAR(10) NOT NULL,
	applier_name VARCHAR(30), 
	applier_birthday VARCHAR(10),
	applier_nic_no VARCHAR(10) NOT NULL,
	applier_district VARCHAR(20),
	applier_city VARCHAR(20),
	applier_telephone_1 VARCHAR(10) NOT NULL,
	applier_telephone_2 VARCHAR(10),
	applier_email VARCHAR(30),
	course_id VARCHAR(8) NOT NULL,
	PRIMARY KEY(applier_no),
	FOREIGN KEY(course_id) REFERENCES courses(course_id)
)ENGINE=INNODB;


create database hsms;
use hsms;

SHOW TABLES;
drop table Document;
select * from users;

SHOW CREATE TABLE User;

-- view att student
select * from Attendance left join users on att_user_id = user_id left join Subject on att_subject_id = sub_id; 
-- view score 
select * from  Score left join users on sco_user_id = user_id left join Subject on sub_id = sco_subject_id left join Information on imf_id = user_id;
-- viwe schedule 
select * from Schedule  left join Subject on sub_id = sch_subject_id left join users on sub_user_id = user_id;
-- view all subject 
select * from Subject;
-- all student 
select * from users left join Information on imf_id = user_id where user_type = "stu";
-- view document 
select * from Document left join users on doc_user_id = user_id;

USE login_test;




CREATE TABLE Information (
    imf_id INT PRIMARY KEY,
    imf_firstName VARCHAR(50),
    imf_lastName VARCHAR(50),
    imf_age INT,
    imf_password VARCHAR(255),
    imf_phoneNumber INT,
    imf_dob DATE,
    imf_username VARCHAR(255),
    imf_profile varchar(255)
    
);
CREATE TABLE users (
    user_id INT PRIMARY KEY,
    user_type ENUM('stu', 'tec', 'maz', 'adm') DEFAULT 'stu',
    user_information_id INT,
    FOREIGN KEY (user_information_id) REFERENCES Information(imf_id)
);
CREATE TABLE Document (
    doc_id INT PRIMARY KEY,
    doc_name VARCHAR(255),
    doc_details VARCHAR(255),
    doc_comment VARCHAR(255),
    doc_type enum ('homework','lecture','announcement') default 'announcement',
    doc_user_id INT,
    FOREIGN KEY (doc_user_id) REFERENCES Users(user_id)
);
CREATE TABLE Subject ( 
    sub_id INT PRIMARY KEY, 
    sub_name VARCHAR(255), 
    sub_user_id INT, 
    FOREIGN KEY (sub_user_id) REFERENCES Users(user_id) 
);

CREATE TABLE Schedule ( 
    sch_id INT PRIMARY KEY, 
    sch_grade INT, 
    sch_group INT, 

    sch_subject_id INT, 
    FOREIGN KEY (sch_subject_id) REFERENCES Subject(sub_id) 
);

CREATE TABLE Attendance ( 
    att_id INT PRIMARY KEY, 
    att_user_id INT, 
    att_subject_id INT, 
    att_code_mfa VARCHAR(255), 
    att_date DATE,
    att_status ENUM('present', 'absent', 'late', 'none') default 'none',
    FOREIGN KEY (att_user_id) REFERENCES Users(user_id), 
    FOREIGN KEY (att_subject_id) REFERENCES Subject(sub_id) 
);
create table att_psw(
		attp_id int primary key auto_increment,
        attp_date date,
        attp_code varchar(255),
        attp_user_id int,
		FOREIGN KEY (attp_user_id) REFERENCES Users(user_id)
        );

CREATE TABLE Score ( 
    sco_id INT PRIMARY KEY, 
    sco_subject_id INT, 
    sco_user_id INT, 
    sco_point DOUBLE, 
    sco_date_mont DATE, 
    FOREIGN KEY (sco_subject_id) REFERENCES Subject(sub_id), 
    FOREIGN KEY (sco_user_id) REFERENCES Users(user_id) 
	);


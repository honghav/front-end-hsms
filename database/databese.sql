create database high_school;

use high_school;

-- Teacher table
create table teachers(
    tea_id INT AUTO_INCREMENT PRIMARY KEY,
    tea_fname VARCHAR(255) not null,
    tea_gender VARCHAR(50) not null,
    tea_subject INT not null,
    tea_username VARCHAR(255) not null,
    tea_password VARCHAR(255) not null,
    tea_dob date not null,
    tea_ph_number VARCHAR(255) null,
    tea_profile VARCHAR(255) null,
    FOREIGN KEY (tea_subject) REFERENCES subjects(sub_id) ON DELETE SET NULL
);

-- Students table
create table students(
    stu_id INT AUTO_INCREMENT PRIMARY KEY,
    stu_fname VARCHAR(255) not null,
    stu_grade INT not null,
    stu_username VARCHAR(255) not null,
    stu_password VARCHAR(255) not null,
    stu_group VARCHAR(255) not null,
    stu_gender VARCHAR(255) not null,
    stu_dob DATE not null,
    stu_ph_number INT not null,
    stu_parent_number INT not null,
    stu_profile VARCHAR(255)
);

-- Admin table
create table admin(
    adm_id INT AUTO_INCREMENT PRIMARY KEY,
    adm_username VARCHAR(255),
    adm_profile VARCHAR(255),
    adm_password VARCHAR(255)
);

-- Subjects table
create table subjects(
    sub_id INT AUTO_INCREMENT PRIMARY KEY,
    sub_name VARCHAR(255) not null,
    sub_image VARCHAR(255) null
);

-- Courses table
create table courses (
    cou_id INT AUTO_INCREMENT PRIMARY KEY,
    cou_sub_id INT not null,
    cou_tea_id INT not null,
    FOREIGN KEY (cou_sub_id) REFERENCES subjects(sub_id) ON DELETE CASCADE,
    FOREIGN KEY (cou_tea_id) REFERENCES teachers(tea_id) ON DELETE CASCADE
);

-- Attendances table
create table attendances(
    att_id INT AUTO_INCREMENT PRIMARY KEY,
    att_student_id INT not null,
    att_code VARCHAR(255),
    att_startime DATETIME not null,
    att_subtime DATETIME not null,
    att_endtime DATETIME not null,
    att_course_id INT not null,
    FOREIGN KEY (att_student_id) REFERENCES students(stu_id) ON DELETE CASCADE,
    FOREIGN KEY (att_course_id) REFERENCES courses(cou_id) ON DELETE CASCADE
);

-- Scores table
create table scores (
    sco_id INT AUTO_INCREMENT PRIMARY KEY,
    sco_point INT not null,
    sco_month DATE not null,
    sco_cou_id INT not null,
    sco_stu_id INT not null,
    FOREIGN KEY (sco_cou_id) REFERENCES courses(cou_id) ON DELETE CASCADE,
    FOREIGN KEY (sco_stu_id) REFERENCES students(stu_id) ON DELETE CASCADE
);

-- Schedule table
create table schedule(
    sch_id INT AUTO_INCREMENT PRIMARY KEY,
    sch_start_time TIME not null,
    sch_end_time TIME not null,
    sch_day ENUM('monday','tuesday','wednesday','thursday','friday','saturday','sunday') not null,
    sch_cou_id INT not null,
    FOREIGN KEY (sch_cou_id) REFERENCES courses(cou_id) ON DELETE CASCADE
);

-- Documents table
create table documents (
    doc_id INT AUTO_INCREMENT PRIMARY KEY,
    doc_type ENUM('lecture','homework','none') DEFAULT 'none',
    doc_name VARCHAR(255) not null,
    doc_deatial VARCHAR(255) not null,
    doc_cou_id INT not null,
    doc_date DATETIME not null,
    FOREIGN KEY (doc_cou_id) REFERENCES courses(cou_id) ON DELETE CASCADE
);

-- Recovery Tables (Recreate after any deletion or modifications)

create table re_student(
    re_stu_id INT AUTO_INCREMENT PRIMARY KEY,
    re_stu_fname VARCHAR(255) not null,
    re_stu_grade INT not null,
    re_stu_username VARCHAR(255) not null,
    re_stu_password VARCHAR(255) not null,
    re_stu_group VARCHAR(255) not null,
    re_stu_gender VARCHAR(255) not null,
    re_stu_dob DATE not null,
    re_stu_ph_number INT not null,
    re_stu_parent_number INT not null,
    re_stu_profile VARCHAR(255),
    re_admin_id INT not null,
    FOREIGN KEY (re_admin_id) REFERENCES admin(adm_id) ON DELETE CASCADE
);

create table re_course(
    re_cou_id INT AUTO_INCREMENT PRIMARY KEY,
    re_cou_sub_id INT not null,
    re_cou_tea_id INT not null,
    FOREIGN KEY (re_cou_sub_id) REFERENCES subjects(sub_id) ON DELETE CASCADE,
    FOREIGN KEY (re_cou_tea_id) REFERENCES teachers(tea_id) ON DELETE CASCADE
);

create table re_attendances(
    re_att_id INT AUTO_INCREMENT PRIMARY KEY,
    re_att_student_id INT not null,
    re_att_code VARCHAR(255),
    re_att_startime DATETIME not null,
    re_att_subtime DATETIME not null,
    re_att_endtime DATETIME not null,
    re_att_course_id INT not null,
    FOREIGN KEY (re_att_student_id) REFERENCES students(stu_id) ON DELETE CASCADE,
    FOREIGN KEY (re_att_course_id) REFERENCES courses(cou_id) ON DELETE CASCADE
);

create table re_scores (
    re_sco_id INT AUTO_INCREMENT PRIMARY KEY,
    re_sco_point INT not null,
    re_sco_month DATE not null,
    re_sco_cou_id INT not null,
    re_sco_stu_id INT not null,
    FOREIGN KEY (re_sco_cou_id) REFERENCES courses(cou_id) ON DELETE CASCADE,
    FOREIGN KEY (re_sco_stu_id) REFERENCES students(stu_id) ON DELETE CASCADE
);

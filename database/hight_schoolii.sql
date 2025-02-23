create database hight_school;


use hight_school;
select * from  teachers;
drop table teachers; 

create table students(
    stu_id int PRIMARY Key,
    stu_fname varchar(255) not null,
    stu_grade int not null,
    stu_username varchar(255) not null,
    stu_password VARCHAR(255) not null,
    stu_group VARCHAR(255) not null,
    stu_gender VARCHAR(255) not null,
    stu_dob DATE not null,
    stu_ph_number int not null,
    stu_parent_number int not null,
    stu_profile VARCHAR(255) 
);

create table teachers(
    tea_id INT PRIMARY KEY,
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

create table admin(
    adm_id int primary key,
    adm_username varchar(255),
    adm_profile varchar(255),
    adm_password varchar(255)
);

create table subjects(
    sub_id int primary key,
    sub_name VARCHAR(255) not null,
    sub_image VARCHAR(255) null

);
create table courses (
    cou_id int primary key,
    cou_sub_id int not null,
    cou_tea_id int not null,
    FOREIGN KEY (cou_sub_id) REFERENCES subjects(sub_id) ON DELETE CASCADE,
    FOREIGN KEY (cou_tea_id) REFERENCES teachers(tea_id) ON DELETE CASCADE
);

create table attendances(
    att_id int primary key,
    att_student_id int not null,
    att_code varchar(255),
    att_startime datetime not null,
    att_subtime datetime not null,
    att_endtime datetime not null,
    att_course_id int not null,
    FOREIGN KEY (att_student_id) REFERENCES students(stu_id) ON DELETE CASCADE,
    FOREIGN KEY (att_course_id) REFERENCES courses(cou_id) ON DELETE CASCADE

);
create table scores (
    sco_id int primary key,
    sco_point int not null,
    sco_month date not null,
    sco_cou_id int not null,
    sco_stu_id int not null,
    FOREIGN KEY (sco_cou_id) REFERENCES courses(cou_id) ON DELETE CASCADE,
    FOREIGN KEY (sco_stu_id) REFERENCES students(stu_id) ON DELETE CASCADE

);

create table schedule(
    sch_id int primary key,
    sch_start_time time not null,
    sch_end_time time not null,
    sch_day enum('monday','tuesday','wednesday','thursday','friday','saturday','sunday') not null,
    sch_cou_id int not null,
    FOREIGN KEY (sch_cou_id) REFERENCES courses(cou_id) ON DELETE CASCADE
);



create table documents (
    doc_id int primary key,
    doc_type enum('lecture','homework','none')default'none',
    doc_name varchar(255) not null,
    doc_deatial varchar(255) not null,
    doc_cou_id int not null,
    doc_date datetime not null,
    FOREIGN KEY (doc_cou_id) REFERENCES courses(cou_id) ON DELETE CASCADE
);

-- recovery table 

create table re_student(

    re_stu_id int PRIMARY Key,
    re_stu_fname varchar(255) not null,
    re_stu_grade int not null,
    re_stu_username varchar(255) not null,
    re_stu_password VARCHAR(255) not null,
    re_stu_group VARCHAR(255) not null,
    re_stu_gender VARCHAR(255) not null,
    re_stu_dob DATE not null,
    re_stu_ph_number int not null,
    re_stu_parent_number int not null,
    re_stu_profile VARCHAR(255),
    re_admin_id int not null,
    FOREIGN KEY (re_admin_id) REFERENCES admin(adm_id) ON DELETE CASCADE 
);
create table re_course(
    re_cou_id int primary key,
    re_cou_sub_id int not null,
    re_cou_tea_id int not null,
    FOREIGN KEY (re_cou_sub_id) REFERENCES subjects(sub_id) ON DELETE CASCADE,
    FOREIGN KEY (re_cou_tea_id) REFERENCES teachers(tea_id) ON DELETE CASCADE
);
create table re_attendances(
    re_att_id int primary key,
    re_att_student_id int not null,
    re_att_code varchar(255),
    re_att_startime datetime not null,
    re_att_subtime datetime not null,
    re_att_endtime datetime not null,
    re_att_course_id int not null,
    FOREIGN KEY (re_att_student_id) REFERENCES students(stu_id) ON DELETE CASCADE,
    FOREIGN KEY (re_att_course_id) REFERENCES courses(cou_id) ON DELETE CASCADE

);
create table re_scores (
    re_sco_id int primary key,
    re_sco_point int not null,
    re_sco_month date not null,
    re_sco_cou_id int not null,
    re_sco_stu_id int not null,
    FOREIGN KEY (re_sco_cou_id) REFERENCES courses(cou_id) ON DELETE CASCADE,
    FOREIGN KEY (re_sco_stu_id) REFERENCES students(stu_id) ON DELETE CASCADE
);













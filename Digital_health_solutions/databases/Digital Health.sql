create DATABASE dhs;
use dhs;

create table person (
 person_id int not null auto_increment,
 fname varchar(40) not null,
 lname varchar(40),
 username varchar(50),
 dob date not null,
 location varchar(60),
 contact int(20),
 plan varchar(40),
 pass varchar(40),
 primary key (person_id)
);

-- password --
-- uppercase, lowercase, number and special character.

insert into person (fname,lname, username, dob, location, contact,plan, pass) values 
('Ropa','Daniels','ropadaniels','1990-01-30','Berekuso','0249984352','Basic Monthly','Ropadaniels123@'),
('Rodney','Adams','rodneyadams','1960-07-01','East Legon','0242984332','Premium Monthly','Rodneyadams456#'),
('Samantha','Quaye','samanthaquaye','1985-06-12','Dansoman','0209584352','Basic Yearly','Samanthaquaye789*'),
('Stephen','Opana','stephenopana','1970-01-30','Devtraco','0249984332','Premium Monthly','Stephenopana987)'),
('Yoofi','Awuah','yoofiawuah','1989-02-21','Amasaman','0249983272','Basic Monthly','Yoofiawuah892('),
('Bruce','Jacks','brucejacks','1973-04-29','Dansoman','0249989332','','Brucejacks676&'),
('Grace','Andrews','graceandrews','1980-02-21','Amasaman','0240083272','','Graceandrews324()');


-- patient --
-- patient status could be part of the dashboard

create table patient (
patient_id int not null,
Diabetes_status enum ('Diabetic','Non-Diabetic'),
HBP_status enum('Hypertensive','non-Hypertensive'),
primary key (patient_id),
foreign key(patient_id) references person(person_id) on update cascade 
);

insert into patient (patient_id,Diabetes_status,HBP_status ) values 
(1, 'Diabetic','Hypertensive'),
(2, 'Diabetic','non-Hypertensive'),
(3, 'Non-Diabetic','non-Hypertensive'),
(4, 'Diabetic','Hypertensive'),
(5, 'Diabetic', 'Hypertensive');


-- health personnel
-- on dashboard

create table health_personnel (
healthpersonnelID int not null,
qualification varchar(40),
no_of_Patients_assigned int not null,
primary key(healthpersonnelID),
foreign key(healthpersonnelID) references person(person_id)
);

insert into health_personnel (healthpersonnelID, qualification,no_of_Patients_assigned) values 
(6,'Nurse', 2),
(7,'Doctor', 3);


create table products ( 
item_id int not null,
item_name varchar(20),
price varchar(20),
quantity int not null,
primary key (item_id)
);

insert into products(item_id, item_name, price, quantity) values
(001, 'Bpkit', 190, 2),
(002, 'TempGun', 90, 1),
(003, 'Needle', 200, 1),
(004, 'Nosemask', 40, 2),
(005, 'sanitizer', 120, 3);

create table patient_products(
patientID int not null,
item_id int not null, 
quantity tinyint,
foreign key(patientID) references person(person_id) on update cascade,
foreign key(item_id) references products(item_id) on update cascade 
);
 
create table Health_center(
patientID int not null,
center_id int not null, 
center_name varchar(40),
contact varchar(30),
location varchar(40),
primary key(center_id),
foreign key(patientID) references person(person_id) on update cascade
);

insert into Health_center (patientID, center_id,center_name, contact,location) values
(1,488, 'Tabea', 0244666036, 'Berekuso'),
(2,489, 'Minou', 0244666036, 'Dansoman'),
(3,410, 'Giroud', 0244666036, 'Achimota'),
(4,411, 'Greenwood', 0244666036, 'Accra'),
(5,412, 'Mata', 0244666036, 'East Legon'),
(6,413, 'Siuuu', 0244666036, 'Lapaz'),
(7,414, 'Siuuu', 0244556036, 'Achimota');


--
-- patient_healthpersonnel
-- patient should contact healthpersonnel
--

create table patient_healthpersonnel(
patientID int not null,
healthpersonnelID int not null,
messageToHealthPersonnel varchar(1000),
messageFromHealthPersonnel varchar(1000),
foreign key(patientID) references person(person_id),
foreign key(healthpersonnelID) references person(person_id)
);

insert into patient_healthpersonnel(patientID, healthpersonnelID, messageToHealthPersonnel, messageFromHealthPersonnel) values
(1, 6, 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
It has roots in a piece of classical Latin literature from 45 BC, 
making it over 2000 years old. Richard McClintock,','Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,'),
(2, 6, 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
It has roots in a piece of classical Latin literature from 45 BC, 
making it over 2000 years old. Richard McClintock,','Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,'),
(3, 6, 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
It has roots in a piece of classical Latin literature from 45 BC, 
making it over 2000 years old. Richard McClintock,','Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,'),
(4, 7, 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
It has roots in a piece of classical Latin literature from 45 BC, 
making it over 2000 years old. Richard McClintock,','Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,'),
(5, 7, 'Contrary to popular belief, Lorem Ipsum is not simply random text. 
It has roots in a piece of classical Latin literature from 45 BC, 
making it over 2000 years old. Richard McClintock,','Contrary to popular belief, Lorem Ipsum is not simply random text. It has 
roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,');




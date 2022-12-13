create table data1(
Id int not null auto_increment,
firstName varchar(20),
lastName varchar(20),
age varchar(30),
primary key(Id));

create table admint(
Id int not null auto_increment,
firstName varchar(20),
lastName varchar(20),
email varchar(30),
pass_word varchar(2000),
primary key(Id));
INSERT INTO admint (firstName, lastName, email, pass_word) VALUES ('a', 'a', 'a@a.co', 'a');
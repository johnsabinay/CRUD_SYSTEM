CREATE TABLE employee_tb (
ID INT (3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
NAME VARCHAR (100), 
AGE INT (3),
EMAIL VARCHAR (100) UNIQUE,
CONTACTNO VARCHAR (100) UNIQUE,
BIRTHDATE DATE,
POSITION VARCHAR (100)
);

INSERT INTO employee_tb (ID,NAME,AGE,EMAIL,CONTACTNO,BIRTHDATE,POSITION)
VALUES (001,"John D. Baptis",40,"johndbaptis@email.com","009213145","1984-12-20","MESSENGER"),
 ("","Matt T. Kolektor",25,"matttax@email.com","00431552","1999-09-01","COLLECTOR"),
 ("","Jude Dust Escariot",30,"itsmejdust@email.com","00667552","1994-01-04","TREASURER");
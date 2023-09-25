CREATE DATABASE APCSP; 
USE APCSP; 
DROP TABLE TeamOne;
CREATE TABLE TeamOne (
    FirstName varchar (30),
    LastName varchar (30), 
    TeamPosition varchar(50)
    );

INSERT INTO TeamOne (FirstName, LastName, TeamPosition)
VALUES
	("Sanjana", "Mohan", "Backend Developer"),
    ("Ishika", "Singh", "Webmaster"),
    ("Sonal", "Madala", "Content Specialist"), 
    ("Priyanka", "Manglani", "Backend Developer"), 
    ("Varna", "Srinivasan", "Frontend Developer"), 
    ("Satya", "Edidi", "Frotnend Developer"); 
		
SELECT * FROM TeamOne; 
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
	("Satya", "Edidi", "Frontend Developer"); 
	("Sonal", "Madala", "Content Specialist"), 
	("Priyanka", "Manglani", "Backend Developer"), 
	("Sanjana", "Mohan", "Backend Developer"),
	("Ishika", "Singh", "Webmaster"),
	("Varna", "Srinivasan", "Frontend Developer"), 
		
SELECT * FROM TeamOne; 

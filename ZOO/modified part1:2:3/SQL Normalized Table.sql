/* create tables from normalized tables*/
CREATE TABLE Employee (
	ID			char		PRIMARY KEY,
	Salary		int(4)		not null,
	Age			int(2)		not null,
	Gender		char(6)		not null,
	Job_type	char(20)	not null
);

CREATE TABLE Employee_Name (
	ID			char		PRIMARY KEY,
	FirstName	char	not null,
	MiddleName	char,
	LastName	char	not null
);

CREATE TABLE Employee_Birthday (
	ID			char		PRIMARY KEY,
	Birth_Year	int(4)	not null,
	Birth_Month	int(2)	not null,
	Birth_Day	int(2)	not null
);

CREATE TABLE Employee_Address (
	ID				char		PRIMARY KEY,
	Street_Name		char(100)	not null,
	Street_Number	int(4)	not null,
	Postal_Code		char(6)	not null
);

CREATE TABLE Employee_ContactInfo (
	ID				char			PRIMARY KEY,
	Email			char(100)		not null,
	Phone_Number	char(12)		not null
);

CREATE TABLE Animal_Species	(
	Species_ID		int(3)			PRIMARY KEY,
	Name			char(20)		not null,
	Age				char(10)			not null,
	Sex				char(20)		not null,
	Species			char(100)		not null,
	Domain			char(20)		not null,
	Quantity		int(3)			not null
);

CREATE TABLE Animal_Preferences (
	Species_ID		int(5)			PRIMARY KEY,
	Diet			char(200)		not null,
	Environment		char(100)		not null
);

CREATE TABLE Department (
	Department_Code		char(8)	PRIMARY KEY,
	Phone				char(13)		not null
);

CREATE TABLE Service (
	Service_Number	int		PRIMARY KEY,
	Phone_Number	char(15)	not null,
	Opening_Hours	char(15)	not null
);

CREATE TABLE Visitor (
	Visitor_ID	char(10)	PRIMARY KEY,
	Age			int(3)		not null,
	First_Name	char(20)	not null,
	Middle_Name	char(20),
	Last_Name	char(20)
);

CREATE TABLE Ticket (
	Ticket_ID	int(12)		PRIMARY KEY,
	Price		int(3)		not null,
	Type		char(10)	not null
);

CREATE TABLE Ticket_OverdueDate (
	Ticket_ID		int(12)		not null,
	Overdue_Day		int(2)		not null,
	Overdue_Month	int(2)		not null,
	Overdue_Year	int(4)		not null
);

/*insert values*/
INSERT INTO Employee (ID, Salary, Age,Gender,Job_type)
VALUES ('0000_9611', 3400, 45, 'Male', 'Trainer');

INSERT INTO Employee (ID, Salary, Age,Gender,Job_type)
VALUES ('0000_3147', 5670, 40, 'Female', 'Technician');

INSERT INTO Employee (ID, Salary, Age,Gender,Job_type)
VALUES ('0001_9461', 1200, 21, 'Male', 'Cleaner');

INSERT INTO Employee (ID, Salary, Age,Gender,Job_type)
VALUES ('0002_1322', 2400, 25, 'Female', 'Cleaner');

INSERT INTO Employee_Name (ID, FirstName, MiddleName,LastName)
VALUES ('0000_9611', 'Jordan', null, 'Burgery');

INSERT INTO Employee_Name (ID, FirstName, MiddleName,LastName)
VALUES ('0000_3147', 'Luisa','Mary','Dunken');

INSERT INTO Employee_Name (ID, FirstName, MiddleName,LastName)
VALUES ('0001_9461', 'Sasha', null, 'Black');

INSERT INTO Employee_Name (ID, FirstName, MiddleName,LastName)
VALUES ('0002_1322', 'Alice', null, 'Wang');

INSERT INTO Employee_Birthday (ID, Birth_Year, Birth_Month, Birth_Day)
VALUES ('0000_9611', 1975, 12, 13);

INSERT INTO Employee_Birthday (ID, Birth_Year, Birth_Month, Birth_Day)
VALUES ('0000_3147', 1980, 11, 9);

INSERT INTO Employee_Birthday (ID, Birth_Year, Birth_Month, Birth_Day)
VALUES ('0001_9461', 1999, 2, 11);

INSERT INTO Employee_Birthday (ID, Birth_Year, Birth_Month, Birth_Day)
VALUES ('0002_1322', 1995, 6, 7);

INSERT INTO Employee_Address (ID, Street_Name, Street_Number, Postal_Code)
VALUES ('0000_9611', 'Blair', 234, 'K2SB23');

INSERT INTO Employee_Address (ID, Street_Name, Street_Number, Postal_Code)
VALUES ('0000_3147', 'Faketoo', 198, 'K34B34');

INSERT INTO Employee_Address (ID, Street_Name, Street_Number, Postal_Code)
VALUES ('0001_9461', 'Fakeagain', 457, 'K982H8');

INSERT INTO Employee_Address (ID, Street_Name, Street_Number, Postal_Code)
VALUES ('0002_1322', 'Fakealso', 568, 'H9J8HB');

INSERT INTO Employee_ContactInfo (ID, Email, Phone_Number)
VALUES ('0000_9611', 'idontknow@iii.com', '789-1792-2798');

INSERT INTO Employee_ContactInfo (ID, Email, Phone_Number)
VALUES ('0000_3147', 'ialsodontknow@dd.com', '312-389-1223');

INSERT INTO Employee_ContactInfo (ID, Email, Phone_Number)
VALUES ('0001_9461', 'whatisthis@idk.com', '567-1231-9892');

INSERT INTO Employee_ContactInfo (ID, Email, Phone_Number)
VALUES ('0002_1322', 'pleasetellme@idk.com', '760-8989-2133');

INSERT INTO Animal_Species (Species_ID, Name, Age, Sex, Species, Domain, Quantity)
VALUES (1, 'Panda', '22~30', 'Male,Female', 'Panda', 'China', 2);

INSERT INTO Animal_Species (Species_ID, Name, Age, Sex, Species, Domain, Quantity)
VALUES (23, 'Blue Whale', '90~100', 'Male, Female', 'Whale', 'Four Oceans', 2);

INSERT INTO Animal_Species (Species_ID, Name, Age, Sex, Species, Domain, Quantity)
VALUES (676, 'Panthera leo krugeri', '20~35', 'Male, Female', 'Lion', 'Africa', 3);

INSERT INTO Animal_Species (Species_ID, Name, Age, Sex, Species, Domain, Quantity)
VALUES (198, 'Poison dart frog', '3~15', 'Male,Female', 'Frog', 'South Africa', 14);

INSERT INTO Animal_Preferences (Species_ID, Diet, Environment)
VALUES (1, 'Bamboo', 'Bamboo Forest, Mountain Area');

INSERT INTO Animal_Preferences (Species_ID, Diet, Environment)
VALUES (23, 'Ocean Creatures', 'Deep Ocean');

INSERT INTO Animal_Preferences (Species_ID, Diet, Environment)
VALUES (676, 'Animals', 'Prairie');

INSERT INTO Animal_Preferences (Species_ID, Diet, Environment)
VALUES (198, 'Inspects', 'Rain Forest');

INSERT INTO Department (Department_Code, Phone)
VALUES ('123-083', '132-1233-3245');

INSERT INTO Department (Department_Code, Phone)
VALUES ('324-723', '938-2398-2347');

INSERT INTO Department (Department_Code, Phone)
VALUES ('344-891', '383-1353-1349');

INSERT INTO Department (Department_Code, Phone)
VALUES ('132-389', '311-3231-3545');

INSERT INTO Service (Service_Number, Phone_Number, Opening_Hours)
VALUES (1, '673-9893-3243', '8:00-18:00');

INSERT INTO Service (Service_Number, Phone_Number, Opening_Hours)
VALUES (2, '431-4375-1432', '9:00-18:00');

INSERT INTO Service (Service_Number, Phone_Number, Opening_Hours)
VALUES (3, '532-9438-1987', '10:00-19:00');

INSERT INTO Service (Service_Number, Phone_Number, Opening_Hours)
VALUES (4, '782-4291-3127', '9:00-17:00');

INSERT INTO Visitor (Visitor_ID, Age, First_Name, Middle_Name, Last_Name)
VALUES ('643864KJHG', 56, 'Sara', null, 'Black');

INSERT INTO Visitor (Visitor_ID, Age, First_Name, Middle_Name, Last_Name)
VALUES ('317423DQSY', 34, 'Norden', 'Jowl', 'Smith');

INSERT INTO Visitor (Visitor_ID, Age, First_Name, Middle_Name, Last_Name)
VALUES ('357886JDST', 12, 'Well', 'Ark', 'White');

INSERT INTO Visitor (Visitor_ID, Age, First_Name, Middle_Name, Last_Name)
VALUES ('468565GUXI', 36, 'Dorthy', 'Yellow', 'Bricks');

INSERT INTO Ticket (Ticket_ID, Price, Type)
VALUES (202009128922, 45, 'Adult');

INSERT INTO Ticket (Ticket_ID, Price, Type)
VALUES (202008078933, 45, 'Adult');

INSERT INTO Ticket (Ticket_ID, Price, Type)
VALUES (202007125634, 30, 'Student');

INSERT INTO Ticket (Ticket_ID, Price, Type)
VALUES (202005237863, 45, 'Adult');

INSERT INTO Ticket_OverdueDate (Ticket_ID, Overdue_Day, Overdue_Month, Overdue_Year)
VALUES (202009128922, 12, 9 ,2021);

INSERT INTO Ticket_OverdueDate (Ticket_ID, Overdue_Day, Overdue_Month, Overdue_Year)
VALUES (202008078933, 7, 8, 2021);

INSERT INTO Ticket_OverdueDate (Ticket_ID, Overdue_Day, Overdue_Month, Overdue_Year)
VALUES (202007125634, 12, 7, 2021);

INSERT INTO Ticket_OverdueDate (Ticket_ID, Overdue_Day, Overdue_Month, Overdue_Year)
VALUES (202005237863, 23, 5, 2021);

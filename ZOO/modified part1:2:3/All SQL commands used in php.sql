--create record --
INSERT INTO Employee (ID, Age, Salary, Job_type, Gender, Permission) VALUES ('$ID', $Age, $Salary, '$JobType', '$Gender', $Permission); 
INSERT INTO Employee_Name (FirstName, MiddleName, LastName, ID) VALUES ('$FirstName','$MiddleName','$LastName', '$ID');

--update record --
SELECT ID, Salary, Job_type, Permission FROM Employee WHERE ID = '$ID';

--search record --
SELECT Species ID, Name, Species, Domain FROM Animal_Species WHERE Species_ID = $ID;
SELECT Species ID, Name, Species, Domain FROM Animal_Species WHERE Species = '$Animal_Species';
SELECT Species ID, Name, Species, Age, Quantity FROM Animal_Species WHERE Domain = '$Animal_Domain';
SELECT * FROM Animal_Preferences WHERE Name = '$Animal_Name';

--join tables --
SELECT Employee.ID, Employee.Salary, Employee.Age, Employee.Job_type, Employee_Name.FirstName, Employee_Name.MiddleName, Employee_Name.LastName FROM Employee JOIN Employee_Name ON Employee.ID = Employee_Name.ID WHERE Employee.ID ='".$Employee_ID."';

--delete record --
DELETE FROM Employee_Name WHERE LastName ='$lname' AND FirstName = '$fname';

--view image--
SELECT * FROM ANIMAL_IMG ORDER BY ID ASC;

--add image --
INSERT INTO ANIMAL_IMG (imageData, imageType, imageName) VALUES('$imgData', '$imageType','$imgName');






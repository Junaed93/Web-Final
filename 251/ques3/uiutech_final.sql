CREATE DATABASE IF NOT EXISTS uiutech_final;

CREATE TABLE IF NOT EXISTS employee_final(
    EmployeeID INT PRIMARY KEY,
	EmployeeName VARCHAR(255) NOT NULL,
	DepartmentID INT NOT NULL,
    DepartmentName VARCHAR(255) NOT NULL,
	Salary INT NOT NULL,
	PerformanceRating VARCHAR(10) NOT NULL    
)

INSERT INTO employee_final VALUES
(1,'Arif Rahman',201,'Software Development',45000,'B'),
(2,'Marium Khan',201,'Software Development',52000,'A'),
(3,'Sabbir Hossain',202,'Quality Assurance',38000,'C'),
(4,'Samira Begum',203,'UI/UX Design',42000,'B');

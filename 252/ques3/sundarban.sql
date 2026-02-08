CREATE DATABASE sundarban;

CREATE TABLE IF NOT EXISTS sales_data(
  SaleId INT PRIMARY KEY,
  ProductName VARCHAR(100) NOT NULL,
  CategoryID INT NOT NULL,
  CatagoryName VARCHAR(60) NOT NULL,
  Quantity INT NOT NULL,
  Revenue INT NOT NULL
)

INSERT INTO sales_data VALUES
(1, 'Laptop', 301, 'Electronics', 5, 350000),
(2, 'Mouse', 301, 'Electronics', 15, 45000),
(3, 'Chair', 302, 'Furniture', 8, 64000),
(4, 'Desk', 302, 'Furniture', 6, 72000),
(5, 'Bottle', 303, 'Accessories', 20, 30000),
(6, 'Pen', 303, 'Accessories', 25, 20000);

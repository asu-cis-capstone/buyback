-- SQL SERVER DB & TABLE SCRIPTS --


-- CREATE DATATBASE -- 
CREATE DATABASE BBBoss;
USE BBBoss;

-- CREATE TABLES --
CREATE TABLE Models
(
	Id int IDENTITY(1,1) NOT NULL PRIMARY KEY,
	Brand varchar(255),
	Model varchar(255),
	Carrier varchar(255),
	Size int

);

CREATE TABLE Quotes
(
	ModelId int NOT NULL FOREIGN KEY REFERENCES Models(Id),
	Mint int NOT NULL,
	Good int NOT NULL,
	Poor int NOT NULL,
	Broken int NOT NULL,
	Dead int NOT NULL
);

CREATE TABLE Accounts
(
	AccountId int IDENTITY(1,1) NOT NULL PRIMARY KEY,
	Email varchar(255) NOT NULL,
	LastName varchar(255) NOT NULL,
	FirstName varchar(255) NOT NULL,
	PhoneNum int,
	Address1 varchar(255) NOT NULL,
	Address2 varchar(255),
	City varchar(255) NOT NULL,
	State varchar(255) NOT NULL,
	Zip int NOT NULL,
	ReferralCode varchar(255) NOT NULL
);

CREATE TABLE Orders
(
	OrderId int IDENTITY(1,1) NOT NULL PRIMARY KEY,
	AccountId int FOREIGN KEY REFERENCES Accounts(AccountId),
	ModelId int FOREIGN KEY REFERENCES Models(Id),
	ESN varchar(30) NOT NULL,
	PostedPrice float NOT NULL,
	AdjustedPrice float NOT NULL,
	ShipStatus varchar(50) NOT NULL,
	DateRecieved DateTime NOT NULL,
	DateShipped DateTime,
	DateConfirmed DateTime,
	Payment varchar(30) NOT NULL,
	ReferralCode varchar(255),
	PostalRouting varchar(255),
	TrackingNumber varchar(255)
);



-- TEST DATA --

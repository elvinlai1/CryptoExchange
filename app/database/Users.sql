CREATE DATABASE CryptoTrader; 
USE CryptoTrader; 

CREATE TABLE Users(
    AccountID           VarChar(36)     NOT NULL,
    LoginID             VarChar(36)     NOT NULL,
    Password            VarChar(255)    NOT NULL,
    FirstName           VarChar(25)     NOT NULL,
    LastName            VarChar(25)     NOT NULL,
    DateOfBirth         Date            NOT NULL,
    Email               VarChar(36)     NOT NULL,
    PRIMARY KEY(AccountID)                      
    );

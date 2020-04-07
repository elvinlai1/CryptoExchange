CREATE DATABASE CryptoTrader; 
USE CryptoTrader; 

CREATE TABLE Users(
    AccountID           VarChar(255)    NOT NULL,
    LoginID             VarChar(36)     NOT NULL,
    Password            VarChar(255)    NOT NULL,
    FirstName           VarChar(25)     NOT NULL,
    LastName            VarChar(25)     NOT NULL,
    Email               VarChar(36)     NOT NULL,
    CONSTRAINT PK_Users PRIMARY KEY(AccountID)                      
    );


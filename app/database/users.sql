CREATE DATABASE CryptoTrader; 
USE CryptoTrader; 

CREATE  TABLE USERS(
    AccountID           VarChar(36)     NOT NULL,
    LoginID             VarChar(36)     Not NULL,
    AccountPassword     VarChar(255)    NOT NULL,
    FirstName           VarChar(25)     NOT NULL,
    LastName            VarChar(25)     NOT NULL,
    DateOfBirth         Date            NOT NULL,
    Email               VarChar(36)     NOT NULL,
    CONSTRAINT          ACCOUNT_PK      PRIMARY KEY(AccountID)                      
    );

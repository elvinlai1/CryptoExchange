

CREATE DATABASE CryptoTrader; 
USE CryptoTrader; 

CREATE TABLE Users(
    email           VarChar(36),   
    password        VarChar(36)               
    );

INSERT INTO `users` (`email`, `password`) VALUES ('test@email.com', 'test');
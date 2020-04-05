USE CryptoTrader; 

CREATE TABLE Cryptos(
    CryptoID            VarChar(36)     NOT NULL,
    Name                VarChar(36)     NOT NULL,
    Price               Decimal(10)     NOT NULL,
    Change              VarChar(10)     NOT NULL,
    MarketCapital       VarChar(10)     NOT NULL,
    PRIMARY KEY(CryptoID)                      
    );
    

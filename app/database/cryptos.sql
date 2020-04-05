USE CryptoTrader; 

CREATE TABLE CRYPTOS(
    CryptoID            VarChar(36)     NOT NULL,
    Name                VarChar(36)     NOT NULL,
    Price               Decimal(10)     NOT NULL,
    Change              VarChar(10)     NOT NULL,
    MarketCapital       VarChar(10)     NOT NULL,
    CONSTRAINT          CRYPTO_PK       PRIMARY KEY(CryptoID)                      
    );
    

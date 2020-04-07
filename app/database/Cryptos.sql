USE CryptoTrader; 

CREATE TABLE Cryptos(
    CryptoID            VarChar(36)     NOT NULL,
    Name                VarChar(36)     NOT NULL,
    Price               Varchar(10)     NOT NULL,
    Change              VarChar(10)     NOT NULL,
    Stock               Varchar(10)     NOT NULL,
    MarketCapital       DECIMAL AS (Price * Stock),
    CONSTRAINT PK_Cryptos PRIMARY KEY(CryptoID)                      
    );
    
    
    INSERT INTO Cryptos (CryptoID, Name, Price, PercentChange, Stock)
    VALUES  (1, 'Bitcoin', '10290.50', '0.0375', 100),
	    (2, 'Ethereum', '242.40', '0.1489', 50),
            (3, 'XRP', '0.28', '0.0746', 75),
            (4, 'Tether', '1.40', '0.0017', 200);
    

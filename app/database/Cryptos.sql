USE CryptoTrader; 

CREATE TABLE Cryptos (
	CryptoID INT NOT NULL,
  	Name VARCHAR(45) NOT NULL,
  	BeginningPrice DECIMAL(10,2) NOT NULL,
  	Price DECIMAL (10,2),
	PercentChange DECIMAL (10,6) AS (((Price - BeginningPrice) / BeginningPrice) * 100),
  	Stock INT NOT NULL,
  	MarketCapital DECIMAL AS (Price * Stock),
  	PRIMARY KEY (CryptoID)
);    
    
INSERT INTO Cryptos (CryptoID, Name, BeginningPrice,Price, Stock)
VALUES  (1, 'Bitcoin', 10290.50, 10290.50, 100),
	(2, 'Ethereum', 242.40, 242.40, 50),
        (3, 'XRP', 0.28,0.28, 75),
        (4, 'Tether', 1.40, 1.40, 200);

UPDATE Cryptos
SET Price = 10288.80, Stock = 110
WHERE Name = 'Bitcoin';

SELECT * FROM Cryptos;


USE CryptoTrader; 
CREATE TABLE Funds (
	Currency_Type VARCHAR(64) DEFAULT 'Canadian_Dollar',
	Balance VARCHAR(64),
	AccountID VARCHAR(64) NOT NUll
);
  	INSERT INTO Funds(Balance,AccountID)
    VALUES  ('50000',1),
            ('100000',2),
            ('25000',3),
            ('20',4),

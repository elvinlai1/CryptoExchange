USE CryptoTrader; 
CREATE TABLE Funds (
	Currency_Type VARCHAR(64) DEFAULT 'CAD',
	Balance VARCHAR(64),
	AccountID VARCHAR(64) NOT NUll
);



/* 

Doesn't Work

	USE CryptoTrader;
    INSERT INTO Funds(Currency_Type,Balance,AccountID)
    VALUES  ('CAD','50000',1),
            ('CAD','100000',2),
            ('CAD','25000',3),
            ('CAD','20',4);

            
*/
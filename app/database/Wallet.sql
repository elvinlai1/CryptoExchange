USE CryptoTrader; 

CREATE TABLE Wallet(
    WalletID            VarChar(36)     NOT NULL,
    CryptoID            VarChar(36)     NOT NULL,
    CoinName            VarChar(36)     NOT NULL,
    Cointotal           VarChar(36)     NOT NULL,
    AccID               VarChar(36)     NOT NULL,
    Balance             Decimal(10,2)   NOT NULL,
    Cash                VarChar(36)
    PRIMARY KEY (WalletID),
    FOREIGN KEY (AccID) REFERENCES Users(AccountID);

INSERT INTO Wallet (WalletID, CryptoID, CoinName, Cointotal, AccID, Balance)
    VALUES  ('1', '1', 'Bitcoin', '1', '1', 10000),
            ('2', '2', 'Ethereum', '0', '2', 340000),
            ('3', '3', 'XRP', '2', '3', 0),
            ('4', '4', 'Tether', '3', '4', 2000);




INSERT INTO Wallet (WalletID, CryptoID, CoinName, Cointotal, AccID, Balance, Cash)
    VALUES  ('1', '1', 'Bitcoin', '1', '1', 10000,'5000'),
            ('2', '2', 'Ethereum', '0', '2', 340000,'5000'),
            ('3', '3', 'XRP', '2', '3', 0, '5000'),
            ('4', '4', 'Tether', '3', '4', 2000,'5000');

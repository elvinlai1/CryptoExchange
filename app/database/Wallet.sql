USE CryptoTrader; 

CREATE TABLE Wallet(
    WalletID            int NOT NULL    AUTO_INCREMENT,
    CryptoID            VarChar(36)     NOT NULL,
    CoinName            VarChar(36)     NOT NULL,
    Cointotal           VarChar(36)     NOT NULL,
    AccID               VarChar(36)     NOT NULL,
    PRIMARY KEY (WalletID),
    FOREIGN KEY (AccID) REFERENCES Users(AccountID);

INSERT INTO Wallet (CryptoID, CoinName, Cointotal, AccID, )
    VALUES  ('1', 'Bitcoin', '1', '1'),
            ('2', 'Ethereum', '0', '2'),
            ('3', 'XRP', '2', '3'),
            ('4', 'Tether', '3', '4');




INSERT INTO Wallet (CryptoID, CoinName, Cointotal, AccID)
    VALUES  ('1', 'Bitcoin', '1', '1'),
            ('2', 'Ethereum', '0', '2'),
            ('3', 'XRP', '2', '3'),
            ('4', 'Tether', '3', '4');

USE CryptoTrader; 

CREATE TABLE Wallet(
    WalletID            VarChar(36)     NOT NULL,
    CryptoID            VarChar(36)     NOT NULL,
    CoinName            VarChar(36)     NOT NULL,
    Cointotal           VarChar(36)     NOT NULL,
    AccountID           VarChar(36)     NOT NULL,
    CONSTRAINT PK_Wallet PRIMARY KEY (WalletID),
    CONSTRAINT FK_Cryptos FOREIGN KEY (CryptoID)  REFERENCES cryptos(cryptoID),
    CONSTRAINT FK_Account FOREIGN KEY (AccountID) REFERENCES users(AccountID)
    );

INSERT INTO Wallet (WalletID, CryptoID, CoinName, Cointotal, AccountID)
    VALUES  ('1', '1', 'Bitcoin', '1', '1'),
        ('2', '2', 'Ethereum', '0', '2'),
            ('3', '3', 'XRP', '2', '3'),
            ('4', '4', 'Tether', '3', '4');
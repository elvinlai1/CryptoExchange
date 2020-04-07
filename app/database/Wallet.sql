USE CryptoTrader; 

CREATE TABLE Wallet(
    WalletID            VarChar(36)     NOT NULL,
    CryptoID            VarChar(36)     NOT NULL,
    CoinName            VarChar(36)     NOT NULL,
    Cointotal           VarChar(36)     NOT NULL,
    AccountID           VarChar(36)     NOT NULL,
    Balance             Decimal(10,2)     NOT NULL,
    CONSTRAINT PK_Wallet PRIMARY KEY (WalletID);

INSERT INTO Wallet (WalletID, CryptoID, CoinName, Cointotal, AccountID, Balance)
    VALUES  ('1', '1', 'Bitcoin', '1', '1', 10000),
            ('2', '2', 'Ethereum', '0', '2', 340000),
            ('3', '3', 'XRP', '2', '3', 0),
            ('4', '4', 'Tether', '3', '4', 2000);

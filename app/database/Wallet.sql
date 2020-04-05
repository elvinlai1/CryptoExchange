USE CryptoTrader; 

CREATE TABLE Wallet(
    WalletID            VarChar(36)     NOT NULL,
    CryptoID            VarChar(36)     NOT NULL,
    Cointotal           INT(5)          NOT NULL,
    AccountID           VarChar(25)     NOT NULL,
    PRIMARY KEY (WalletID),
    FOREIGN KEY (CryptoID)  REFERENCES cryptos(cryptoID),
    FOREIGN KEY (AccountID) REFERENCES users(AccountID)
    );

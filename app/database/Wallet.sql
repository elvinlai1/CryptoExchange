USE CryptoTrader; 

CREATE TABLE Wallet(
    WalletID            VarChar(36)     NOT NULL,
    CryptoID            VarChar(36)     NOT NULL,
    Cointotal           INT(5)          NOT NULL,
    AccountID           VarChar(25)     NOT NULL,
    CONSTRAINT PK_Wallet PRIMARY KEY (WalletID),
    CONSTRAINT FK_Cryptos FOREIGN KEY (CryptoID)  REFERENCES cryptos(cryptoID),
    CONSTRAINT FK_Account FOREIGN KEY (AccountID) REFERENCES users(AccountID)
    );

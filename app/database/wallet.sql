USE CryptoTrader; 

CREATE TABLE wallet(
    walletID            VarChar(36)     NOT NULL,
    cryptoID            VarChar(36)     NOT NULL,
    cointotal           INT(5)          NOT NULL,
    AccountID           VarChar(25)     NOT NULL,
    PRIMARY KEY (walletID),
    FOREIGN KEY (cryptoID)  REFERENCES cryptos(cryptoID),
    FOREIGN KEY (AccountID) REFERENCES users(AccountID)
    );

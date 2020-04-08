USE CryptoTrader; 

CREATE TABLE Transaction(
    TransactionID       VarChar(36)     NOT NULL,
    AccountID           VarChar(36)     NOT NULL,
    CryptoID            VarChar(255)    NOT NULL,
    CryptoName          VarChar(36)     NOT NULL,
    PurchasePrice       VarChar(25)     NOT NULL,
    PurchaseAmount      INT(10)         NOT NULL,
    CONSTRAINT PK_Transaction PRIMARY KEY (TransactionID)
    );

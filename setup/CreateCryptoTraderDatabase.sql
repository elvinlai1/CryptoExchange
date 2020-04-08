SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `cryptos` (
  `CryptoID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `BeginningPrice` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `PercentChange` decimal(10,6) GENERATED ALWAYS AS ((`Price` - `BeginningPrice`) / `BeginningPrice` * 100) VIRTUAL,
  `Stock` int(11) NOT NULL,
  `MarketCapital` decimal(10,0) GENERATED ALWAYS AS (`Price` * `Stock`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `cryptos` (`CryptoID`, `Name`, `BeginningPrice`, `Price`, `Stock`) VALUES
(1, 'Bitcoin', '10290.50', '10290.50', 100),
(2, 'Ethereum', '242.40', '242.40', 50),
(3, 'XRP', '0.28', '0.28', 75),
(4, 'Tether', '1.40', '1.40', 200);

CREATE TABLE `funds` (
  `Currency_Type` varchar(64) DEFAULT 'CAD',
  `Balance` varchar(64) DEFAULT NULL,
  `AccountID` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `transaction` (
  `TransactionID` varchar(36) NOT NULL,
  `AccountID` varchar(36) NOT NULL,
  `CryptoID` varchar(255) NOT NULL,
  `CryptoName` varchar(36) NOT NULL,
  `PurchasePrice` varchar(25) NOT NULL,
  `PurchaseAmount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `AccountID` varchar(255) NOT NULL,
  `LoginID` varchar(36) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Email` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `wallet` (
  `WalletID` int(11) NOT NULL,
  `CryptoID` varchar(36) NOT NULL,
  `CoinName` varchar(36) NOT NULL,
  `Cointotal` varchar(36) NOT NULL,
  `AccID` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `cryptos`
  ADD PRIMARY KEY (`CryptoID`);

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TransactionID`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`AccountID`);

ALTER TABLE `wallet`
  ADD PRIMARY KEY (`WalletID`),
  ADD KEY `AccID` (`AccID`);


ALTER TABLE `wallet`
  MODIFY `WalletID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`AccID`) REFERENCES `users` (`AccountID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

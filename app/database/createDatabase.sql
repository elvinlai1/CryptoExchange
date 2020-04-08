-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2020 at 08:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptotrader`
--

-- --------------------------------------------------------

--
-- Table structure for table `cryptos`
--

CREATE TABLE `cryptos` (
  `CryptoID` varchar(36) NOT NULL,
  `Name` varchar(36) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Changes` varchar(10) NOT NULL,
  `Stock` varchar(10) NOT NULL,
  `MarketCapital` decimal(10,0) GENERATED ALWAYS AS (`Price` * `Stock`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cryptos`
--

INSERT INTO `cryptos` (`CryptoID`, `Name`, `Price`, `Changes`, `Stock`) VALUES
('1', 'Bitcoin', '10290.50', '0.0375', '100'),
('2', 'Ethereum', '242.40', '0.1489', '50'),
('3', 'XRP', '0.28', '0.0746', '75'),
('4', 'Tether', '1.40', '0.0017', '200');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TransactionID` varchar(36) NOT NULL,
  `AccountID` varchar(36) NOT NULL,
  `CryptoID` varchar(255) NOT NULL,
  `CryptoName` varchar(36) NOT NULL,
  `PurchasePrice` varchar(25) NOT NULL,
  `PurchaseAmount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `AccountID` varchar(255) NOT NULL,
  `LoginID` varchar(36) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Email` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`AccountID`, `LoginID`, `Password`, `FirstName`, `LastName`, `Email`) VALUES
('5e8d00388f7c0', 'adssadadsa', '$2y$10$zcybf7PkhPDtaNh.KPQYzebzFWBz3lKIBKWc.4wPCDhZdtrlnAC26', 'ad', 'sadad', 'sadad@email.com'),
('5e8cfb38865d7', 'alpha', '$2y$10$r4Z.k46yP0P0Rr6ET.98..qB2FnwSJkFp180Qlnw96SLKuZEKgqeO', 'elv', 'elv', 'alha@email.com'),
('5e8cfafa123ab', 'test', '$2y$10$.WNWVkPbvNy.YPIVE5tYKe/kUR5GI/P7AXQhatcPaoXayrXKzdRUu', 'test', 'test', 'test@email.com'),
('5e8d004558d4c', 'test2', '$2y$10$9T/y8PkRaycgeOjG50IFm.8h7ENubQ84dSHtQOBAvXb/kMnrxB5/e', 'test', 'test', 'test@email.com'),
('5e8d08fe50e04', 'test3', '$2y$10$mqiMuBcaXeJSpEcvodVNsOpM8jjyRulRey29nX7w8H3yLiqD3q9GC', 'elv', 'elv', 'test@email.com'),
('5e8d57fce92e3', 'test4', '$2y$10$AtjYdZJB20UZrQBwnXXZiuVxqDFTNsSvRLglqeUq2Bvzivei3C.he', 'test', 'test', 'test@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `WalletID` varchar(36) NOT NULL,
  `CryptoID` varchar(36) NOT NULL,
  `CoinName` varchar(36) NOT NULL,
  `Cointotal` varchar(36) NOT NULL,
  `AccountID` varchar(36) NOT NULL,
  `Balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`WalletID`, `CryptoID`, `CoinName`, `Cointotal`, `AccountID`, `Balance`) VALUES
('1', '1', 'Bitcoin', '1', '1', '10000.00'),
('2', '2', 'Ethereum', '0', '2', '340000.00'),
('3', '3', 'XRP', '2', '3', '0.00'),
('4', '4', 'Tether', '3', '4', '2000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cryptos`
--
ALTER TABLE `cryptos`
  ADD PRIMARY KEY (`CryptoID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TransactionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`LoginID`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`WalletID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
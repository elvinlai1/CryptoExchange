GRANT ALL PRIVILEGES ON *.* TO 'Crypto'@'localhost' IDENTIFIED BY PASSWORD '*41DF1551772DE66FF056F5E2BF92ACD0EC0F9CCC' WITH GRANT OPTION;

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, REFERENCES, INDEX, ALTER, CREATE TEMPORARY TABLES, LOCK TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EVENT, TRIGGER ON `cryptotrader`.* TO 'Crypto'@'localhost';
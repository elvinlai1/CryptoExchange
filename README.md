# CryptoExchange (dev branch)

## Setup 

1. Install Xampp 
2. `git clone [this repo]` 
3. Copy folder (depending on where you cloned it) into `C:\xampp\htdocs`. Result should be `C:\xampp\htdocs\CryptoExchange\` 
4. Head over to `localhost/phpmyadmin` on your browser to configure the database and connection privileges 
5. Copy and execute the `CreateCryptoExchangeUser.sql` file from the setup folder using the SQL Tab to create user access for our database connection
6. Copy and execute the `CreateCryptoExchange.sql` file to create the CryptoExchangeDatabase with values. 
7. `localhost/CryptoExchange/` should direct you to the index. 



## non functional testing

1. Create user
2. Sign in 
3. Fund Account with cash
4. Buy Crypto 
5. Sell Crypto 


## System testing

- Page control access *works*
- Login/Logout *works*
- View Market Data *works*
- View Wallet Data *works*
- View Homepage Data *works*

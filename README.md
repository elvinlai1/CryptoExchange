# CryptoExchange (dev branch)

## Setup 

1. Install Xampp 
2. `git clone [this repo]` or download zip and rename and remove `-dev` from the folder name
3. Copy folder (depending on where you cloned it) into `C:\xampp\htdocs`. Result should be `C:\xampp\htdocs\CryptoExchange\` 
4. Head over to `localhost/phpmyadmin` on your browser to configure the database and connection privileges 
5. Import `CreateCryptoTraderDatabase.sql` file to create the database
6. Import `CreateCryptoTraderUser.sql` file to create the database connection
7. `localhost/CryptoExchange/` should direct you to the index. 


## Test case scenerio

1. Create user
2. Sign in 
3. Fund Account with cash
4. Buy Crypto 
5. Sell Crypto 

## Unit testing

- Crypto 
- User
- Wallet 
- Login/Logout **works**
- Signup **works**

## System testing

- Page control access **works**
- Login/Logout **works**
- View Market Data **works**
- View Wallet Data **works**
- View Homepage Data **works**

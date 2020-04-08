# CryptoExchange (dev branch)

## Setup 

1. Install Xampp 
2. `git clone [this repo]` or download zip and rename and remove `-dev` from the folder name
3. Copy folder (depending on where you cloned it) into `C:\xampp\htdocs`. Result should be `C:\xampp\htdocs\CryptoExchange\` 
4. Head over to `localhost/phpmyadmin` on your browser to configure the database and connection privileges 
5. Import `CreateCryptoTraderDatabase.sql` file to create the database
6. Import `CreateCryptoTraderUser.sql` file to allow the database connection
7. `localhost/CryptoExchange/` should direct you to the index. 


## Test case scenerio

1. Create user
2. Sign in 
3. Fund Account
4. Buy Crypto 
5. Sell Crypto 

## Unit testing

- Crypto class methods *wip*
- User class methods *wip*
- Wallet class methods *wip*
- transaction class methods *wip*
- Login/Logout **works**
- Signup **works**

## System testing

- Page control access **works**
- Login/Logout **works**
- View Market Data **works**
- View Wallet Data 
- View Homepage Data **works**
- Buy Crypto *wip*
- Sell Crypto *wip*
- Post Transaction *wip*
- Retrieve Transaction History *wip*

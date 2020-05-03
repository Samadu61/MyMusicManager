<h1 align="center">My Music Manager</h1>

<p align="center">MyMusicManager is a Symfony 5 web app used to store and manage musical tracks</p>

Technical stack
---------------

- Symfony 5
- REST API
- Webpack.js
- Vue.js

Install
-------

#### Clone repository

- First of all, you have to [install git](https://git-scm.com/) and clone this repository :

    `$ git clone https://github.com/Samadu61/MyMusicManager.git`


#### Dependencies install
- Install [composer](https://getcomposer.org)

- Install project dependencies :

    `$ composer install`
    
#### Environment variables
- Create `.env` file using `.env.example` template and fill missing parameters :

    `$ cp .env.example .env`
    
- Add the secret file decryption using your environment and decrypt missing env parameters :

    `/config/secrets/prod/prod.decrypt.private.php`
    `/config/secrets/dev/dev.decrypt.private.php` 
    
   `$ php bin/console secrets:decrypt-to-local`

#### Database configuration
- Create the database and setting up schema :

    `$ php bin/console doctrine:database:create`
    `$ php bin/console doctrine:schema:create`

#### (Optional) Symfony server
- Launch the symfony server :

    `$ php bin/console server:run`

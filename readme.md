# Carbon admin laravel
## Introduction

Carbon admin laravel is a boilerplate template made to you get started your Laravel application. 🚀

## Installation

#### Clone the repo.
```sh
$ git clone https://github.com/isamuhiro/carbon-admin-laravel.git my-awesome-app && cd my-awesome-app
```
#### Environment dependencies (Ubuntu 18.04 LTS)

If apache
```
sudo apt-get install apache2
```

If nginx

```
sudo apt-get install nginx
```

```bash
sudo apt-get install php7.2 php7.2-mbstring php7.2-bcmath php7.2-xml php7.2-mysql php7.2-fpm mariadb-server
```

#### Be sure to run composer install and cp your .env
```sh
$ composer install && cp .env.example .env
```

Configure an user in mysql

```sh
mysql -uroot -p
```

```sql
CREATE DATABASE homestead;
CREATE USER 'homestead'@'localhost' IDENTIFIED BY 'secret';
GRANT ALL PRIVILEGES ON homestead.* TO homestead@localhost;
FLUSH PRIVILEGES;
```

#### After configurate your `.env` file run the migrations, seeds and key generate 

```sh
$  php artisan key:generate && php artisan migrate:fresh --seed
```

Then you should good to go and start develop your laravel application. 🙌

### Contributions

Pull requests are welcome.

### Troubleshootings

Any troubleshootings shuold be posted on `issues`.

## Requirements
- [XAMPP 7.1.3.](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.1.33/)
- Composer 2.2
- Terminal (cmd,pwsh)
## Installation
1. Clone this repo on your machine
2. Start Apache and MySQL on XAMPP
3. Run `composer update`
4. Create a database in `localhost/phpmyadmin`
5. Make a copy of .env.example `cp .env.example .env`
6. Edit `.env` to match database details
7. Migrate tables by `php artisan migrate:fresh`
8. Seed database `php artisan db:seed`
9. Generate new key `php artisan key:generate`
10. Run website `php artisan serve` 

## Others
**Login Details**
```php
email: admin@gmail.com
pass: admin
```

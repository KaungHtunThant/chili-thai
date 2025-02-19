<h1>Chili Thai Laravel Draft</h1>
</hr>
<h3>Requirements/ Tested Environments</h3>
<ol>
    <li> PHP 8.2 </li>
    <li> MySQL Database server </li>
    <li> Composer v2.8.3 </li>
</ol>
</br>
<h3>Installation Steps</h3>

1. Copy/ duplicate .env.example file in the same root directory and rename it to .env
2. Open the .env file and edit the database credentials.
3. Download and install dependencies by running ```composer install``` in the root directory
4. Generate App key by running ```php artisan key:generate```
5. Set up database by running  ```php artisan migrate --seed```
6. Serve by running ```php artisan serve```

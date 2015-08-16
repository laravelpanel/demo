# Demo of laravelpanel

This is a demo of Laravel Panel (https://github.com/serverfireteam/panel). It's based on Laravel 5.1

# installtions 
1. Clone it from github .
  ```
  git clone git@github.com:laravelpanel/demo.git
  ```
2. Go to demo folder 
  ```
  cd demo
  ```
3. Install require pacakge .
 ```
 composer install 
 ```
4. Edit .env file and put your db name and db user name and password  .

5. run laravel migration 
  ```
  php artisan migrate 
  ```
6. run panel install
  ```
  php artisan panel:install
  ```
5. go to public folder and run .
  ```
  cd public 
  php -S localhost:2000
  ```

6. Open browser and go to .

  localhost:2000/panel

7. Login with user: admin@change.me password: 12345  .

Note: you need fill link table to get other controller working 

8. Read the [document](http://laravelpanel.com/docs)to add other crud , etc  .

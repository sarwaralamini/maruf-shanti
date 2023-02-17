## How to install?

-   Clone the repository: run command - git clone https://github.com/sarwaralamini/maruf-shanti.git
-   After clone navigate to project folder, open PowerShell/CMD and run command: **composer install** (Composer must be installed on your system)
-   run command: **copy .env.example .env** to generate .env file
-   run command **php artisan key:generate**
-   Create database on your local/live server
-   edit .env file and put correct database credentials
-   run command **php artisan optimize:clear** (usually need after editing .env file)
-   run command **php artisan migrate**
-   run command **php artisan db:seed**
-   or run command **php artisan migrate:fresh --seed**
-   now finally run command **php artisan serve**

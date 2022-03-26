Local development: 
-Linux
-- composer install
-- vendor/bin/sail up -d
-- vendor/bin/sail artisan migrate
-- vendor/bin/sail db:seed

--- For CORS issue:
----Edit `vendor/laravel/sanctum/src/Http/Middleware/EnsureFrontendRequestsAreStateful.php`
----Comment `config('sanctum.middleware.verify_csrf_token', \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class),`

-database rollback
--  vendor/bin/sail artisan migrate:reset
--  vendor/bin/sail artisan migrate
--  sail artisan db:seed --class=AdminSeeder

Deployment: https://dev.to/jsf00/deploy-laravel-application-with-database-to-heroku-l50
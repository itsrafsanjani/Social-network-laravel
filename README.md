# Social-network-laravel

# User: admin@admin.com

# Password: secret

# Change env.example to .env

# composer Install

# in .env file configure your database

# npm install

# php artisan key:generate
# php artisan vendor:publish --provider="Liliom\Acquaintances\AcquaintancesServiceProvider"
# php artisan migrate
# Configure the published config in:

# config\acquaintances.php
'friendships_groups' => [
        'acquaintances' => 0,
        'close_friends' => 1,
        'family' => 2,
        'school_friends' => 3,
        'class_friends' => 4

    ],

(sqlstate 42000)
use Illuminate\Support\Facades\Schema;

public function boot()
{
Schema::defaultStringLength(191);
}

https://stackoverflow.com/questions/23786359/laravel-migration-unique-key-is-too-long-even-if-specified

# php artisan db:seed

# npm run dev

# php artisan storage:link

# fin/

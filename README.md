<p align="center"><h2>Good For Laravel Lerner: How to install</h2></p>


## Installation

Clone the repository form github and use follwoing command

` composer install `

` php artisan key:generate `

` php artisan migrate:fresh `

` php artisan tinker `

Inside tinker, use following command:

` App\Models\Post::factory(20)->create() `

And see all contents

You can register as admin as well as general user for comment.

For admin user please go to ` App\Providers\AppServiceProviders.php `, You can change the admin name: puspjoshi to your username


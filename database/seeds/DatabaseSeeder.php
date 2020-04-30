<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        App\User::create([
        	'name' => 'Diego Zacarias',
        	'email' => 'diego@admin.com',
        	'password' => bcrypt('123456'),
        ]);

        factory(App\Client::class, 5)->create();
    }
}

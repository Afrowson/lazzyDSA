<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Afrowner',
            'email' => 'f.kahl@yahoo.de',
            'password' => '$2y$10$YAPeRdo7bA2XjyA4IBxzaunKPp4mYFEY8N6VXc2JreEQYrvhR39ri',
        ]);
    }
}

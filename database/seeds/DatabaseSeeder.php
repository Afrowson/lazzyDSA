<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TalentsSeeder::class);
        $this->call(LeonardoSeeder::class);
        $this->call(DegroSeeder::class);

    }
}

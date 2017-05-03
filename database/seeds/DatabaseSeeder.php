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
        $this->call(LanguagesSeeder::class);
        $this->call(LetteringSeeder::class);
        $this->call(FightingtalentsSeeder::class);
        $this->call(BeneficesSeeder::class);
        $this->call(HandicapsSeeder::class);
        $this->call(DegroSeeder::class);
        $this->call(LeonardoSeeder::class);

    }
}

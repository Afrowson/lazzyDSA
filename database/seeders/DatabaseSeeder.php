<?php

namespace Database\Seeders;

use Database\Seeders\Characters\DegroSeeder;
use Database\Seeders\Characters\LeonardoSeeder;
use Database\Seeders\Items\ItemsSeeder;
use Database\Seeders\Weapons\ArmorsSeeder;
use Database\Seeders\Weapons\RangeweaponsSeeder;
use Database\Seeders\Weapons\ShieldsSeeder;
use Database\Seeders\Weapons\WeaponsSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
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
        $this->call(ArmorsSeeder::class);
        $this->call(WeaponsSeeder::class);
        $this->call(RangeweaponsSeeder::class);
        $this->call(ShieldsSeeder::class);
        $this->call(SpecialfightingtalentsSeeder::class);
        $this->call(SpecialmagictalentSeeder::class);
        $this->call(SpecialtalentsSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(MagictricksSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(DegroSeeder::class);
        $this->call(LeonardoSeeder::class);

    }
}

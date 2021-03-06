<?php

namespace Database\Seeders;

use App\Language;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'name'=>'Alaani',
            ]);
        Language::create([
            'name'=>'Angram',
        ]);
        Language::create([
            'name'=>'Asdharia',
        ]);
        Language::create([
            'name'=>'Atak',
        ]);
        Language::create([
            'name'=>'Aureliani',
        ]);
        Language::create([
            'name'=>'Bosparano',
        ]);
        Language::create([
            'name'=>'Fjarningsch',
        ]);
        Language::create([
            'name'=>'Garethi',
        ]);
        Language::create([
            'name'=>'Goblinisch',
        ]);
        Language::create([
            'name'=>'Isdira',
        ]);
        Language::create([
            'name'=>'Mohisch',
        ]);
        Language::create([
            'name'=>'Nujuka',
        ]);
        Language::create([
            'name'=>'Ogrisch',
        ]);
        Language::create([
            'name'=>'Oloarkh',
        ]);
        Language::create([
            'name'=>'Ologhaijan',
        ]);
        Language::create([
            'name'=>'Rabensprache',
        ]);
        Language::create([
            'name'=>'Rogolan',
        ]);
        Language::create([
            'name'=>'Rssahh',
        ]);
        Language::create([
            'name'=>'Ruuz',
        ]);
        Language::create([
            'name'=>'Saga-Thorwalsch',
        ]);
        Language::create([
            'name'=>'Thorwalsch',
        ]);
        Language::create([
            'name'=>'Trollisch',
        ]);
        Language::create([
            'name'=>'Tulamidya',
        ]);
        Language::create([
            'name'=>'Ur-Tulamidya',
        ]);
        Language::create([
            'name'=>'Zelemja',
        ]);
        Language::create([
            'name'=>'Zhayad',
        ]);
        Language::create([
            'name'=>'Zyklopäisch',
        ]);
    }
}

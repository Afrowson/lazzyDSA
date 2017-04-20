<?php

use App\Character;
use Illuminate\Database\Seeder;

class LeonardoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Character::create([
            'name' => 'Leonardo Descartes',
            'race' => 'Mensch',
            'profession' => 'Grau Magier',
            'gender' => '1',
            'height' => '195',
            'weight' => '85',
            'age' => '19',
            'hair' => 'blond',
            'eyes' => 'blau',
            'culture' => 'Horasier',
            'social' => 'Frei',
            'title' => 'Adeptuus',
            'MU' => '13',
            'KL' => '14',
            'IN' => '14',
            'CH' => '13',
            'FF' => '12',
            'GE' => '10',
            'KO' => '12',
            'KK' => '12',
            'ap_total' => '1100',
            'ap_spend' => '1100',

        ]);
    }
}

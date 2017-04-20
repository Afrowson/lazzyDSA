<?php

use App\Character;
use App\CharacterTalents;
use Illuminate\Database\Seeder;

class DegroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $id=  Character::create([
            'name' => 'Degro',
            'race' => 'Zwerg',
            'profession' => 'Warrior',
            'gender' => '1',
            'height' => '135',
            'weight' => '61',
            'age' => '55',
            'hair' => 'feuerrot',
            'eyes' => 'grün',
            'culture' => 'Ambosszwerg',
            'social' => 'Frei',
            'place_of_birth' => '-',
            'MU' => '14',
            'KL' => '13',
            'IN' => '13',
            'CH' => '8',
            'FF' => '13',
            'GE' => '13',
            'KO' => '14',
            'KK' => '14',
            'ap_total' => '1147',
            'ap_spend' => '1119',

        ])->id;
        dump($id);
        CharacterTalents::create([
           'character_id'=> $id,
            'talent_id'=> '0',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '1',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '2',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '3',
            'value'=>'6'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '4',
            'value'=>'5'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '5',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '6',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '7',
            'value'=>'5'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '8',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '9',
            'value'=>'6'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '10',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '11',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '12',
            'value'=>'4'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '13',
            'value'=>'10'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '14',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '15',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '16',
            'value'=>'7'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '17',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '18',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '19',
            'value'=>'5'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '20',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '21',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '22',
            'value'=>'3'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '23',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '24',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '25',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '26',
            'value'=>'5'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '27',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '28',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '29',
            'value'=>'3'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '30',
            'value'=>'5'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '31',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '32',
            'value'=>'1'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '33',
            'value'=>'3'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '34',
            'value'=>'8'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '35',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '36',
            'value'=>'5'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '37',
            'value'=>'8'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '38',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '39',
            'value'=>'5'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '40',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '41',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '42',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '43',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '44',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '45',
            'value'=>'2'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '46',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '47',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '48',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '49',
            'value'=>'5'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '50',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '51',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '52',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '53',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '54',
            'value'=>'6'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '55',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '56',
            'value'=>'0'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '57',
            'value'=>'4'

        ]);
        CharacterTalents::create([
            'character_id'=> $id,
            'talent_id'=> '58',
            'value'=>'0'

        ]);

    }

}
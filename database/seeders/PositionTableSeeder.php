<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('positions')->delete();

        
        $positions = [

            [
                'en'=> 'pos_1_en',
                'ar'=> 'pos_1'
            ],
            [
                'en'=> 'pos_2_en',
                'ar'=> 'pos_2'
            ],
            [
                'en'=> 'pos_3_en',
                'ar'=> 'pos_3'
            ],

        ];

        foreach($positions as  $position){
            Position::create(['name' => $position]);
        }
    }
}

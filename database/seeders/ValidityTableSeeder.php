<?php

namespace Database\Seeders;

use App\Models\Validity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValidityTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('validities')->delete();

        $validities = [1,2,3,4,5,6,7,8,9,10,11,12];

        foreach($validities as  $validity){
            Validity::create(['name' => $validity]);
        }
    }
}

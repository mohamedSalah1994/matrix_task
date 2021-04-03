<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('types')->delete();

        $types = ['Internal' , 'External'];

        foreach($types as  $type){
            Type::create(['name' => $type]);
        }
    }
}

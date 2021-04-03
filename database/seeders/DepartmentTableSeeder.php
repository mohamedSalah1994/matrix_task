<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('departments')->delete();

        
        $departments = [

            [
                'en'=> 'dep_1_en',
                'ar'=> 'dep_1'
            ],
            [
                'en'=> 'dep_2_en',
                'ar'=> 'dep_2'
            ],
            [
                'en'=> 'dep_3_en',
                'ar'=> 'dep_3'
            ],

        ];

        foreach($departments as  $department){
            Department::create(['name' => $department]);
        }
    }
}

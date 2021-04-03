<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('projects')->delete();

        $projects = [

            [
                'en'=> 'project_1_en',
                'ar'=> 'project_1'
            ],
            [
                'en'=> 'project_2_en',
                'ar'=> 'project_2'
            ],
            [
                'en'=> 'project_3_en',
                'ar'=> 'project_3'
            ],

        ];

        foreach($projects as  $project){
            Project::create(['name' => $project]);
        }
    }
}

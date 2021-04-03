<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ValidityTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

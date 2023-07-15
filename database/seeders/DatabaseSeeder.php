<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Course;
use App\Models\Division;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        
        Company::factory(10)->create();
        Student::factory(10)->create();
        Course::factory(10)->create();
        Trainer::factory(10)->create();
        Division::factory(10)->create();
    }
}

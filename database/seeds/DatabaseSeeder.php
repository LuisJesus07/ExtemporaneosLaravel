<?php

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
        $this->call(DegreesTableSeeder::class);
        $this->call(StudyPlansTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SemestersTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(PeriodsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ExamRequestsTableSeeder::class);
    }
}

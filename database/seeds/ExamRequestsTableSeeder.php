<?php

use Illuminate\Database\Seeder;
use App\ExamRequest;

class ExamRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ExamRequest::class, 100)->create();
    }
}

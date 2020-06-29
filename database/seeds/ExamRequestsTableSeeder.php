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
        $examRequest = new ExamRequest();
        $examRequest->user_id = 2;
        $examRequest->subject_id = 3;
        $examRequest->period_id = 1;
        $examRequest->save();
    }
}

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

        $examRequest = new ExamRequest();
        $examRequest->user_id = 2;
        $examRequest->subject_id = 5;
        $examRequest->period_id = 1;
        $examRequest->save();

        $examRequest = new ExamRequest();
        $examRequest->user_id = 2;
        $examRequest->subject_id = 7;
        $examRequest->period_id = 1;
        $examRequest->status = false;
        $examRequest->save();

        $examRequest = new ExamRequest();
        $examRequest->user_id = 2;
        $examRequest->subject_id = 9;
        $examRequest->period_id = 1;
        $examRequest->status = false;
        $examRequest->save();

        $examRequest = new ExamRequest();
        $examRequest->user_id = 2;
        $examRequest->subject_id = 15;
        $examRequest->period_id = 1;
        $examRequest->status = false;
        $examRequest->save();
    }
}

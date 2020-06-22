<?php

use Illuminate\Database\Seeder;
use App\Semester;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semester = new Semester();
        $semester->semester = "1";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "2";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "3";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "4";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "5";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "6";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "7";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "8";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "9";
        $semester->save();

        $semester = new Semester();
        $semester->semester = "10";
        $semester->save();
    }
}

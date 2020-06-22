<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonData = json_decode(file_get_contents("database/jsons/materias.json"), true);

        foreach ($jsonData as $value) {
        	
        	$subject = new Subject();
        	$subject->nombre = $value['nombre'];
        	$subject->semester_id = $value['semester_id'];
        	$subject->study_plan_id = $value['study_plan_id'];
        	$subject->save();
        }
    }
}

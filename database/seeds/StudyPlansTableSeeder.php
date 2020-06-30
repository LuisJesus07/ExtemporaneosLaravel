<?php

use Illuminate\Database\Seeder;
use App\StudyPlan;

class StudyPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonData = json_decode(file_get_contents("database/jsons/planesDeEstudio.json"), true);

        foreach ($jsonData as $value) {
        	
        	$study_plan = new StudyPlan();
        	$study_plan->nombre = $value['nombre'];
            $study_plan->slug = $value['slug'];
        	$study_plan->degree_id = $value['degree_id'];
        	$study_plan->save();
        }
    }
}

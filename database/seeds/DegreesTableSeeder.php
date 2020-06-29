<?php

use Illuminate\Database\Seeder;
use App\Degree;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonData = json_decode(file_get_contents("database/jsons/carreras.json"), true);

        foreach ($jsonData as $value) {
        	
        	$degree = new Degree();
        	$degree->nombre = $value['nombre'];
            $degree->slug = $value['slug'];
        	$degree->save();
        }
    }
}

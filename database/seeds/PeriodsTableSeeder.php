<?php

use Illuminate\Database\Seeder;
use App\Period;

class PeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periodo = new Period();
        $periodo->nombre = "2020-I";
        $periodo->fecha_inicio = "2020-06-17 13:00:00";
        $periodo->fecha_fin = "2020-06-20 13:00:00";
        $periodo->status = true;
        $periodo->save();
    }
}

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
        $periodo->nombre = "2021-I";
        $periodo->fecha_inicio = "2021-02-08 13:00:00";
        $periodo->fecha_fin = "2021-11-26 13:00:00";
        $periodo->status = true;
        $periodo->save();
    }
}

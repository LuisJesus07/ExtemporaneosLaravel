<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;

class PeriodController extends Controller
{
    public function index()
    {
    	$periods = Period::all();
    }

    public function store(Request $request)
    {
    	//obtener el ultimo periodo
    	$last_active_period = Period::orderBy('created_at','DESC')
    						  ->first();

        if($last_active_period){
            //deshabilitar el ultimo periodo
            if($last_active_period->status == true){
				$last_active_period->status = false;
				$last_active_period->save();
            }

        }

    	//crear el nuevo periodo
    	$period = Period::create($request->all());

    	if($period){
    		return "Periodo agregado";
    	}

    	return "Error";
    }

    public function show_period_active()
    {
		$period = Period::orderBy('created_at','DESC')->first();//Obtengo el ultimo periodo registrado

    	return $period;
	}
	
	public function getEstadoPeriodo(){

		$period = Period::orderBy('created_at','DESC')->first();//Obtengo el ultimo periodo registrado

        $today = date('Y-m-d H:i:s');

		if($today >= $period->fecha_inicio && $today <= $period->fecha_fin &&$period->status == 1){
			return "activo";
		}else{
			return "inactivo";
		}
	}

    public function desactivar_periodo()
    {
		$period = Period::orderBy('created_at','DESC')->first();//Obtengo el ultimo periodo registrado

    	if($period->status == true){
			$period->status = false;
			$period->save();
			return "periodo desactivado";
		}else{
			$period->status = true;
			$period->save();
			return "periodo activado";
		}

    	
    }
}

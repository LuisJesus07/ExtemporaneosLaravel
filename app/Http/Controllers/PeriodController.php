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
    	//obetner el ultimo periodo
    	$last_active_period = Period::where('status',true)
    						  ->orderBy('created_at','DESC')
    						  ->first();

        if($last_active_period){
            //deshabilitar el ultimo periodo
            if($last_active_period->status == true){
                $last_active_period->status = false;
            }
            
        }

    	

    	//crear el nuevo periodo
    	$period = Period::create($request->all());

    	if($period){
    		return redirect()->back()->with('success','ok');
    	}

    	return redirect()->back()->with('error','No permitido');
    }

    public function show($id)
    {
    	$period = Period::where('id',$id)->first();

    	return $period;
    }

    public function desactivar_periodo($id)
    {
    	$period = Period::where('id',$id)->first();

    	$period->status = false;

    	return $period;
    }
}

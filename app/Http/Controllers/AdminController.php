<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Degree;
use App\Subject;
use App\Period;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasPermissionTo('Visualizar')){

    

        }else{
            //return reditect()->back()->with('error','no tiene permisos');
        }
    }

    public function solicitudes_by_carrera($degree)
    {

        $solicitudes = Period::where('status',true)
           ->with(['exam_requests' => function($q) use($degree){
                $q->where('status',true);
                $q->with('subject');
                $q->withAndWhereHas('user.study_plan.degree', function($q)use($degree){
                    $q->where('slug',$degree);
                });
           }])->get();


        return $solicitudes;

    }


    public function solicitudes_by_plan($plan)
    {

        $solicitudes = Period::where('status',true)
           ->with(['exam_requests' => function($q) use($plan){
                $q->where('status',true);
                $q->with('subject');
                $q->withAndWhereHas('user.study_plan', function($q) use($plan){
                    $q->where('slug',$plan);
                    $q->with('degree');
                });
           }])->get();


        return $solicitudes;

    }

    public function solicitudes_by_materia($subject)
    {

        $solicitudes = Period::where('status',true)
                ->with(['exam_requests' => function($q) use($subject){
                    $q->where('status',true);
                    $q->withAndWhereHas('subject', function($q) use($subject){
                        $q->where('slug',$subject);
                    });
                    $q->with('user.study_plan.degree');
                }])->get();

        return $solicitudes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

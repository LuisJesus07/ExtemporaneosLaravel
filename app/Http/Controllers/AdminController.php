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

            $users = User::where('status',true)
                ->where('role_id',2)
                ->with(['subjects' => function($q){
                    $q->with('study_plan');
                    $q->with('semester');
                    $q->wherePivot('status',true);
                }])
                ->get();

            return $users;

            //return view('admin.menu');

        }else{
            //return reditect()->back()->with('error','no tiene permisos');
        }
    }

    public function solicitudes_by_carrera($degree)
    {

        $solicitudes = Period::where('status',true)
           ->with(['exam_requests' => function($q) use($degree){
                $q->where('status',true);
                $q->withAndWhereHas('user.study_plan.degree', function($q)use($degree){
                    $q->where('slug',$degree);
                });
           }])->get();


        return $solicitudes;

    }


    public function solicitudes_by_plan($study_plan_id)
    {

        $solicitudes = Period::where('status',true)
       ->withAndWhereHas('user', function($q) use($study_plan_id){
            $q->where('study_plan_id',$study_plan_id);
       })->get();

        return $solicitudes;

    }

    public function solicitudes_by_materia($subject_id)
    {

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

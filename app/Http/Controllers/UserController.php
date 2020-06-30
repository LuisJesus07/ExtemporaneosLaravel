<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Period;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('status',true)
                ->where('role_id',2)
                ->with(['subjects' => function($q){
                    $q->with('study_plan');
                    $q->with('semester');
                }])
                ->get();

        return $users;
    }

    public function create_solicitud($subject_id)
    {
        $user = User::where('id',Auth::user()->id)->first();
        $period = Period::where('status',true)->first();


        if(count($user->subjects) >= 2){
            $status = false;
        }else{
            $status = true;
        }

        //crear solicitud
        $user->subjects()->attach($subject_id,
            [
                'period_id' => $period->id, 
                'status' => $status,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]);

        return "Examen agregado";

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
        $user = new User();
        $user->num_control = $request->num_control;
        $user->nombre = $request->nombre;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->role_id = 2;
        $user->study_plan_id = $request->study_plan_id;

        $user->save();
        return $user;
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

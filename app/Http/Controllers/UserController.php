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


    public function mis_solicitudes()
    {
        $solicitudes = User::where('id', Auth::user()->id)
                       ->with(['exam_requests' => function($q){
                            $q->with('subject', 'period');
                       }])->get();

        return $solicitudes;
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

        $request['password'] = bcrypt($request['password']);

        if($user = User::create($request->all())){

            $user->assignRole(2);

            return "usuario creado";

        }

        return "error en el servidor";

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

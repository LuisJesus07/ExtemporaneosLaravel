<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Period;
use App\Subject;
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


    public function get_materias($semester_id)
    {
        $subjects = Subject::where('semester_id',$semester_id)
                    ->where('study_plan_id', Auth::user()->study_plan_id)
                    ->get();

        return $subjects;
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

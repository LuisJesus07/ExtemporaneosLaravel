<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Period;
use App\Subject;
use App\ExamRequest;
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
        //obetener periodo mas reciente
        $period = Period::orderBy('created_at','DESC')->first();

        $solicitudes = User::where('id', Auth::user()->id)
                       ->with(['exam_requests' => function($q) use($period){
                            $q->where('period_id',$period->id);
                            $q->with('subject', 'period');
                       }])->get();

        return $solicitudes;
    }

    public function create_solicitud($subject_id)
    {
        //obetener periodo mas reciente
        $period = Period::orderBy('created_at','DESC')->first();

        //obetener usuario con las solicitudes del periodo mas reciente
        $user = User::where('id', Auth::user()->id)
                       ->with(['exam_requests' => function($q) use($period){
                            $q->where('period_id',$period->id);
                       }])->first();

        $period = Period::orderBy('created_at','DESC')->first();

        if($period){

            $today = date('Y-m-d H:i:s');

            if($today >= $period->fecha_inicio && $today <= $period->fecha_fin." 23:59:59"){

                if(count($user->exam_requests) >= 2){
                    $status = false;
                }else{
                    $status = true;
                }

                //crear solicitud
                $examRequest = ExamRequest::create([
                    'user_id' => $user->id,
                    'subject_id' => $subject_id,
                    'period_id' => $period->id, 
                    'status' => $status,
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                ]);

                if($examRequest){
                    return "Examen agregado";
                }

                return "error";

            }

            return "solicitud fuera de tiempo";

        }

        return "no hay periodo disponible actualmente";  

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
        $solicitud_examen = ExamRequest::where('id',$id)->first();


        //ver si la solicitud a eliminar esta aceptada o no
        if($solicitud_examen->status == true){

            //eliminar la solicitud
            $solicitud_examen->delete();

            //obtener las solicitudes del alumno
            $all_solicitudes = ExamRequest::where('user_id', Auth::user()->id)->get();

            //aceptar la solicitud mas cercana
            $all_solicitudes[1]->status = true;


            if($all_solicitudes[1]->save()){

                return response()->json([
                    'message' => "Solicitud eliminada correctamente",
                    'code' => 2,
                    'data' => null
                ], 200);

            }


        }else{

            //eliminar la solicitud
            if($solicitud_examen->delete()){

                return response()->json([
                    'message' => "Solicitud eliminada  correctamente",
                    'code' => 2,
                    'data' => null
                ], 200);

            }

        }


    }
}

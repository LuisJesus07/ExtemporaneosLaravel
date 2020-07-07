<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Degree;
use App\Subject;
use App\Period;
use App\ExamRequest;
use App\StudyPlan;
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

    public function get_materias_by_plan($plan_id)
    {
        $subjects = Subject::where('study_plan_id',$plan_id)
                    ->get();

        return $subjects;
    }

    public function solicitudes_by_carrera($degree)
    {
        $title = "carrera";

        $solicitudes = Period::where('status',true)
           ->with(['exam_requests' => function($q) use($degree){
                $q->where('status',true);
                $q->with('subject');
                $q->withAndWhereHas('user.study_plan.degree', function($q)use($degree){
                    $q->where('slug',$degree);
                });
           }])->first();


        return view('admin.solicitudes',compact('solicitudes','title'));
        //return $solicitudes;

    }


    public function solicitudes_by_plan($plan)
    {
        $title = "plan";

        $solicitudes = Period::where('status',true)
           ->with(['exam_requests' => function($q) use($plan){
                $q->where('status',true);
                $q->with('subject');
                $q->withAndWhereHas('user.study_plan', function($q) use($plan){
                    $q->where('slug',$plan);
                    $q->with('degree');
                });
           }])->first();


        return view('admin.solicitudes',compact('solicitudes','title'));

    }

    public function solicitudes_by_materia($subject)
    {
        $title = "materia";

        $solicitudes = Period::where('status',true)
                ->with(['exam_requests' => function($q) use($subject){
                    $q->where('status',true);
                    $q->withAndWhereHas('subject', function($q) use($subject){
                        $q->where('slug',$subject);
                    });
                    $q->with('user.study_plan.degree');
                }])->first();

        return view('admin.solicitudes',compact('solicitudes','title'));
    }


    public function solicitudes_no_aceptadas()
    {
        $solicitudes = Period::where('status',true)
                ->with(['exam_requests' => function($q){
                    $q->where('status',false);
                    $q->with('subject');
                    $q->with('user.study_plan.degree');
                }])->first();

        return $solicitudes;
        //return view('admin.aceptar_solicitudes', compact('solicitudes'));

    }


    public function aceptar_examen($id)
    {
        $solicitud_examen = ExamRequest::where('status',false)
                            ->where('id',$id)->first();

        //aceptar examen
        $solicitud_examen->status = true;

        if($solicitud_examen->save()){

            return response()->json([
                'message' => "Examen aceptado correctamente",
                'code' => 2,
                'data' => null
            ], 200);  

        }

        return response()->json([
            'message' => "No se ha podido aceptar",
            'code' => 2,
            'data' => null
        ], 200); 
    }



   
}

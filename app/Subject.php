<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nombre', 'study_plan_id', 'status'
	];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

	public function study_plan()
    {
        return $this->belongsTo(StudyPlan::class);
    }

    public function exam_requests()
    {
        return $this->hasMany(ExamRequest::class);
    }

    
}

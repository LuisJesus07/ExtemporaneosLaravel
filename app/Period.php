<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nombre', 'fecha_inicio', 'fecha_fin', 'status'
	];


	public function exam_requests()
	{
		return $this->hasMany(ExamRequest::class);
	}


	
}

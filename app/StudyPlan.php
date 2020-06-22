<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyPlan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nombre', 'degree_id', 'status'
	];

	public function degree()
	{
		return $this->belongsTo(Degree::class);
	}
}

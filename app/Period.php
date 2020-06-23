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


	public function users()
	{
		return $this->belongsToMany(User::class, 'period_subject_user')
					->withPivot('user_id','status');
	}

	public function subjects()
	{
		return $this->belongsToMany(Subject::class, 'period_subject_user')
					->withPivot('suebject_id','status');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'semestre', 'status'
	];

	public function subjects()
	{
		return $this->hasMany(Subject::class);
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamRequest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'status', 'user_id', 'subject_id', 'period_id'
	];

	public function period()
	{
		return $this->belongsTo(Period::class);
	}

	public function subject()
	{
		return $this->belongsTo(Subject::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

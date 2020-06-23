<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'num_control', 'nombre', 'apellido_paterno', 'apellido_materno', 'email', 'password', 'study_plan_id', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function study_plan()
    {
        return $this->belongsTo(StudyPlan::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'period_subject_user')
                    ->withPivot('subject_id','status');
    }

    public function periods()
    {
        return $this->belongsToMany(Period::class, 'period_subject_user')
                    ->withPivot('period_id','status');
    }

    public function scopeWithAndWhereHas($query, $relation, $constraint){
        return $query->whereHas($relation, $constraint)
                     ->with([$relation => $constraint]);
    }
}

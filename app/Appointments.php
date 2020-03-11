<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

    protected $fillable = [
        'start_time', 'finish_time', 'comments', 'employee_id'
    ];

    public function employee()
    {
        return $this->belongsTo('Employee');
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
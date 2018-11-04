<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $fillable = 
        ['work_date',
        'nb_hours',
        'project_id',
        'activity_id',
        'collaborator_id'];
}

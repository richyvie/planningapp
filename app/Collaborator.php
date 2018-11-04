<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    protected $fillable = 
        ['last_name',
        'first_name',
        'function_id',
        'staff_number'];
}

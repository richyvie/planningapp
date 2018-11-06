<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Client extends Model
{
    protected $fillable = 
        ['client_name', 
        'main_contact',
        'address',
        'zip',
        'city',
        'phone',
        'email'];
    
    public function projects(){
        return $this->hasMany(Project::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Project extends Model
{
    protected $fillable = 
        ['project_name',
        'client_id',
        'start_date',
        'end_date'];
    
    public function client(){
        return $this->belongsTo(Client::class);
    }

}

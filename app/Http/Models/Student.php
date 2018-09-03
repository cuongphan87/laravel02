<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //ten table
    protected $table = 'student';
    
    public $timestamps = false;
    
    protected $dateFormat = 'U';
    
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    
    
}

<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    //ten table
    protected $table = 'nhanvien';
    
    public $timestamps = false;
    
    protected $dateFormat = 'U';
    
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}

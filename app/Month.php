<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    // Table
    protected $table = 'monthmt';

    // Primary Key 
    public $primaryKey = 'monthid';
    
    // Timestamps
    public $timestamps = true;
    
    // Fillable
    public $fillable = [
        'mthname',
        'mthcolor'
    ];
}

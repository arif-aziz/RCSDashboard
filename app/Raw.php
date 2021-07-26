<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raw extends Model
{
    // Table
    protected $table = 'rcssummary';

    // Primary Key 
    public $primaryKey = 'rcsid';
    
    // Timestamps
    public $timestamps = true;
    
    // Fillable
    public $fillable = [
        'rcsdate',
        'rcsmonth',
        'rcsyear',
        'rcscluster',
        'rcsoutletid',
        'rcsoutletname',
        'rcssalesname',
        'rcsscc',
        'dla2',
        'dlbse',
        'dlprime',
        'dll',
        'dlmifi',
        'dlspgsm',
        'dlspnow',
        'dlspnowplus',
        'opa2',
        'opbse',
        'opprime',
        'opl',
        'opmifi',
        'opspgsm',
        'opspnow',
        'opspnowplus',
        'chipeloadreg',
        'chipeloadtrx',
        'srisreg',
        'srisinsentive',
        'jcplan',
        'jcactual',
        'jceffective'
    ];
}

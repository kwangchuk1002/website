<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $table = 'photos'; //Db table name

    public $dates = ['created_at', 'updated_at'];
    
    const CREATED_AT = 'created_at'; 
    const UPDATED_AT = 'updated_at'; 
    
    protected $primaryKey = 'id'; //primary key of the db table

    protected $uniqueValue = 'photos';
    
    protected $fillable = [     //see yourself in the db table 
            
            'photos',         
            'created_by'
        ];
}

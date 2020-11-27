<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts'; //Db table name

    public $dates = ['created_at', 'updated_at'];
    
    const CREATED_AT = 'created_at'; 
    const UPDATED_AT = 'updated_at'; 
    
    protected $primaryKey = 'id'; //primary key of the db table

    protected $uniqueValue = 'name';
    
    protected $fillable = [     //see yourself in the db table 
            
            'name',
            'email',
            'number',
            'subject',
            'message',          
            'created_by'
        ];
}

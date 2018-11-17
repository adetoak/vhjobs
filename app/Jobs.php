<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public static $rules = [
                        
        'title' 		=> 'min:3|required',
        'category' 		=> 'required',      
        'description' 	=> 'min:10|required',      
        'state' 		=> 'required',  
        'location'		=> 'required',
        'address'		=> 'min:10|required',
        'duration'		=> 'required',
        'price'			=> 'required',

    ];
}

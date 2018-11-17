<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    public static $rules = [
                        
        'title' 		=> 'min:3|required',
        'category' 		=> 'required',      
        'description' 	=> 'min:10|required',      
        'state' 		=> 'required',  
        'location'		=> 'required',
        'workingdays'	=> 'required',
        'workinghours'	=> 'required',

    ];
}

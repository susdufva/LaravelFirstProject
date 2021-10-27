<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User3 extends Model
{
    use HasFactory;
    protected $fillable = [        
        'name',
        'gender1', 
        'partner_name', 
        'gender2',         
        'date',        
        'location',        
        'budget'        
       ];
}

<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps =false;
    
    // protected $table = 'students';

}

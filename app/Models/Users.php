<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table='users';
    protected $primatyKey= 'id';
    protected $fillable=['username','password','status','profile'];
    protected $guarded=[];
    public $timestamp=false;
}
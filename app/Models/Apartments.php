<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartments extends Model
{
    use HasFactory;
    protected $table='apartments';
    protected $primatyKey= 'id';
    protected $fillable=['rooms','bathrooms', 'floor_p', 'tenant', 'image'];
    protected $guarded=[];
    public $timestamp=false;
}
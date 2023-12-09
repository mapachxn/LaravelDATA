<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraServices extends Model
{
    use HasFactory;
    protected $table='extraservices';
    protected $primatyKey= 'id';
    protected $fillable=[
    'name',
    'typese',
    'owner',
    'phone',
    'street',
    'neighborhood',
    'hours',
    'price',
    ];
    protected $guarded=[];
    public $timestamp=false;
}
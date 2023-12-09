<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    use HasFactory;
    protected $table='areas';
    protected $primatyKey= 'id';
    protected $fillable=['unit'];
    protected $guarded=[];
    public $timestamp=false;
}
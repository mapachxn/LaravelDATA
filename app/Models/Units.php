<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'units';
    protected $primatyKey = 'id';
    protected $fillable = [
        'street',
        'neighborhood',
        'extra_services',
        'apartment',
        'floors',
        'locality',
    ];
    protected $guarded = [];
    public $timestamp = false;
}
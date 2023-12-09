<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'userinfo';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'lastname',
        'birthday',
        'account_number',
        'bank_name',
        'account_type',
        'account_holder',
        'cvv',
        'month_c',
        'year_c',
        'gender',
        'phone',
        'photo',
        'bio',
        'RFC',
        'email',
        'status',
    ];

    protected $guarded = [];
}
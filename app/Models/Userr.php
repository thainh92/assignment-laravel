<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userr extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'userr';
    protected $fillable = [
        'id',
        'username',
        'fullname',
        'address',
        'email',
        'phone',
        'password',
        'image'
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'authId',
        'name',
        'tableNo',
        'phone',
        'guest',
        'date',
        'time',
        'comment',
        'read_at',
        'status',
    ];
}

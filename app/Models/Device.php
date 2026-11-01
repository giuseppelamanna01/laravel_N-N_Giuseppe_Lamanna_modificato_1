<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'name', 'category', 'serialNumber', 'image', 'user_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'serialNumber', 'image', 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class, 'genre_device');
    }
}

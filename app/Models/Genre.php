<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Device;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function devices(){
        return $this->belongsToMany(Device::class, 'genre_device');
    }
}
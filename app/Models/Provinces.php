<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;
    protected $table = 'provinces';

    public function regencies()
    {
        return $this->hasMany(Regencies::class);
    }
    public function users_portal () 
    {
        return $this->hasMany(Users_portal::class, 'provinces_id');
    }
}

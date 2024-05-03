<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;
    protected $table = 'districts';

    public function regencies()
    {
        return $this->belongsTo(Regencies::class);
    }
    public function villages()
    {
        return $this->hasMany(Villages::class);
    }
    public function users_portal () 
    {
        return $this->hasMany(Users_portal::class, 'districts_id');
    }

}

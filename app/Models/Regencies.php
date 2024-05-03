<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regencies extends Model
{
    use HasFactory;
    protected $table = 'regencies';
    
    public function provinces()
    {
        return $this->belongsTo(Provinces::class);
    }
    public function districts()
    {
        return $this->hasMany(Districts::class);
    }
    public function users_portal () 
    {
        return $this->hasMany(Users_portal::class, 'regencies_id');
    }
}

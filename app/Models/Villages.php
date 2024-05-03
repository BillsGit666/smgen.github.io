<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villages extends Model
{
    use HasFactory;
    protected $table = 'villages';

    public function districts()
    {
        return $this->belongsTo(Districts::class);
    }
    public function users_portal () 
    {
        return $this->hasMany(Users_portal::class, 'villages_id');
    }
}

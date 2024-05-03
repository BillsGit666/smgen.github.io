<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $table = 'position';
    protected $fillable = ['name'];

    public function smgen_team () 
    {
        return $this->hasMany(Smgen_team::class, 'position_id');
    }
}

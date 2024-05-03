<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smgen_team extends Model
{
    use HasFactory;
    protected $table = 'smgen_team';
    protected $fillable = ['thumbnnail_team', 'name_team', 'position_id'];

    public function position () 
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}

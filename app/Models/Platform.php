<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
    protected $table = 'platform';
    protected $fillable = ['thumbnnail_platform', 'name_socmed'];

    public function platform_children () 
    {
        return $this->hasMany(Platform_children::class, 'platform_id');
    }
}

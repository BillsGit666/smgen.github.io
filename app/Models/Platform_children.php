<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform_children extends Model
{
    use HasFactory;
    protected $guarded = ['platform_id'];
    protected $table = 'platform_children';
    protected $fillable = ['profile_platform', 'username_platform', 'link_platform', 'followers'];

    public function platform () 
    {
        return $this->belongsTo(Platform::class, 'platform_id');
    }
}

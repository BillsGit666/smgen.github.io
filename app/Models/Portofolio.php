<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $table = 'portofolio';
    protected $fillable = ['thumbnnail_portofolio', 'title_portofolio', 'description', 'link_portofolio'];
}

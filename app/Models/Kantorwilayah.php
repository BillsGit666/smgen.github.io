<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kantorwilayah extends Model
{
    use HasFactory;
    protected $table = 'kantorwilayah';
    protected $fillable = ['thumbnnail_kantorwilayah', 'name_kantorwilayah', 'deskripsi_kantorwilayah'];
}

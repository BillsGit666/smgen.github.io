<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable = ['klien', 'email', 'telepon', 'service', 'kantorwilayah', 'detail', 'deadline', 'status'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur_kanwil extends Model
{
    use HasFactory;
    protected $guarded = ['kantorwilayah_id'];
    protected $table = 'struktur_kanwil';
    protected $fillable = ['thumbnail_struktur', 'name_struktur', 'position_id'];

    public function position () 
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
    public function kantorwilayah () 
    {
        return $this->belongsTo(Kantorwilayah::class, 'kantorwilayah_id');
    }
}

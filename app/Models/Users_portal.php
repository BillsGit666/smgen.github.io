<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Users_portal extends Model
{

    use HasFactory;
    protected $table = 'users_portal';
    protected $fillable = ['membership', 'name', 'email', 'password', 'provinsi', 'kota', 'kecamatan', 'kelurahan'];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function provinces () 
    {
        return $this->belongsTo(Provinces::class, 'provinces_id');
    }
    public function regencies()
    {
        return $this->belongsTo(Regencies::class, 'regencies_id');
    }
    public function districts()
    {
        return $this->belongsTo(Districts::class, 'districts_id');
    }
    public function villages()
    {
        return $this->belongsTo(Villages::class, 'villages_id');
    }
}

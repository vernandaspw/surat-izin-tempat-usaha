<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSitu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'pemilik_id', 'id');
    }
    public function jenis_usaha()
    {
        return $this->belongsTo(JenisUsaha::class, 'jenis_usaha_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lowongan extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'lowongan';
    protected $guarded = ['id'];
    // protected $with = ['tempatMagang'];

    // public function tempatMagang()
    // {
    //     return $this->belongsTo(TempatMagang::class, 'tempat_magang_id');
    // }

    public function pengajuanMagang()
    {
        return $this->hasMany(PengajuanMagang::class, 'id_lowongan');
    }

}

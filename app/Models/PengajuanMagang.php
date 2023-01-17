<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengajuanMagang extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_magang';
    protected $guarded = ['id'];

    public static function get_all_content()
    {

        $contents = DB::table('pengajuan_magang')
            ->join('lowongan', 'pengajuan_magang.id_lowongan', '=', 'lowongan.id')
            ->join('tempat_magang', 'lowongan.tempat_magang_id', '=', 'tempat_magang.id')
            ->where('pengajuan_magang.id_peserta', '=', auth()->user()->id)
            ->select('*')
            ->get();

        return $contents;
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'id_lowongan');
    }
    public function peserta()
    {
        return $this->belongsTo(User::class, 'id_peserta');
    }

}
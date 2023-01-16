<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempatMagang extends Model
{
    use HasFactory;
    protected $table = 'tempat_magang';
    protected $guarded = 'id';

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class);
    }
}
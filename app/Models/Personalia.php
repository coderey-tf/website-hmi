<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalia extends Model
{
    use HasFactory;

    protected $fillable = [
        'jabatan_id',
        'bidang_id',
        'name',
        'angkatan',
        'jurusan',
        'image',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function jabatan()
    {
        return $this->hasMany(Jabatan::class, 'bidang_id');
    }

    public function personalia()
    {
        return $this->hasMany(Personalia::class, 'bidang_id');
    }
}

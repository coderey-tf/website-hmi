<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bidang_id',
    ];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'bidang_id');
    }

    public function personalia()
    {
        return $this->hasMany(Personalia::class);
    }
}

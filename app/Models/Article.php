<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'body', 'slug', 'kategori_id', 'user_id', 'gambar_artikel', 'is_active', 'views'
    ];

    protected $with = ['category', 'users'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori_id', 'id');
        return $this->belongsTo(Category::class, 'kategori_id', 'nama_kategori');
    }


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        return $this->belongsTo(User::class, 'user_id', 'name');
    }

    const EXCERPT_LENGTH = 100;
    public function excerpt()
    {
        return Str::limit($this->body, Article::EXCERPT_LENGTH);
    }
}

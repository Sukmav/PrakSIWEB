<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';
    protected $fillable = ['nama_kategori'];

    // Relasi One to Many ke Product
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}

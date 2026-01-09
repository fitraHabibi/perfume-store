<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    // produk ini milik satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // produk ini bisa ada di banyak pesanan
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

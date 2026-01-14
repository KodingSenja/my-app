<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'price',
        'cost',
        'description',
        'image_path',
        'is_active',
        'stock',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }

    public function isAvailable()
    {
        return $this->is_active && $this->stock > 0;
    }

    public function profit()
    {
        return $this->price - $this->cost;
    }
}

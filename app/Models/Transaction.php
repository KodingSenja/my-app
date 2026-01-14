<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'total',
        'status',
        'payment_method'
    ];

    public function items()
    {
        return $this->hasMany(TransactionItem::class);
    }

    public function barcode()
    {
        return $this->hasOne(Barcode::class);
    }
}


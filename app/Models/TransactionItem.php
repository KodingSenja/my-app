<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionItemFactory> */
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'food_id',
        'qty',
        'price',
        'subtotal'
    ];

    public function transaction ()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}

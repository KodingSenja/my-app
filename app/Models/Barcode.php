<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    /** @use HasFactory<\Database\Factories\BarcodeFactory> */
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'qr_image_path'
    ];


    // Relasi ke transaksi
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}

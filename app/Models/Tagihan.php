<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    /** @use HasFactory<\Database\Factories\TagihanFactory> */
    use HasFactory;
    protected $fillable = ['warga_id', 'jumlah', 'bulan', 'tahun', 'status'];

    public function warga() {
        return $this->belongsTo(Warga::class);
    }
}
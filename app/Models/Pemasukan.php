<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    /** @use HasFactory<\Database\Factories\PemasukanFactory> */
    use HasFactory;

    protected $fillable = ['sumber', 'jumlah', 'keterangan'];
}
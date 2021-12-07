<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukPembelanjaan extends Model
{
    use HasFactory;
    
    protected $table = 'struk_pembelanjaan';

    public $timestamps = true;

    protected $fillable = [
        'TotalPembayaran',
        'JenisPembayaran',
        'DeskripsiPembelanjaan',
        'StrukMember'
    ];
}

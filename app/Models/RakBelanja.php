<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakBelanja extends Model
{
    use HasFactory;
    
    protected $table = 'rak_belanja';

    public $timestamps = true;

    protected $fillable = [
        'NamaProduk',
        'MerkProduk',
        'JenisProduk',
        'PersedianProduk',
        'HargaProduk',
        'DeskripsiProduk'
    ];
}

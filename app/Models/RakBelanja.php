<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\JenisProduk;

class RakBelanja extends Model
{
    use HasFactory;
    
    protected $table = 'rak_belanja';

    public $timestamps = true;

    protected $fillable = [
        'NamaProduk',
        'MerkProduk',
        'JenisProduk',
        'PersediaanProduk',
        'HargaProduk',
        'DeskripsiProduk'
    ];

    public function JenisProdukRela()
    {
        return $this->belongsTo(JenisProduk::class, 'JenisProduk', 'id');
    }
}

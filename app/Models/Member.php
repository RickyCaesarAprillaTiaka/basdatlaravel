<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    public $timestamps = true;

    protected $fillable = [
        'NamaLengkapMember',
        'NoHandphoneMember',
        'LevelMember',
        'AlamatLengkapMember'
    ];
}

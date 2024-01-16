<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'nama',
        'nip', // Tambahkan atribut lain yang perlu diisi massal
        'foto',        // Tambahkan _token ke dalam fillable
    ];
}

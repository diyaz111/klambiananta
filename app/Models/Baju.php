<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    use HasFactory;
    protected $table = 'bajus';
    protected $fillable = ['nama', 'isi', 'harga', 'diskon', 'gambar1', 'gambar2', 'gambar3', 'gambar4', 'gambar5'];

}

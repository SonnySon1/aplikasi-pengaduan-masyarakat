<?php

namespace App\Models;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded = ['id'];


    // relasi dari kategori ke pengaduan engan sifat relasi one to many
    public function kategori() {
        return $this->hasMany(Pengaduan::class);
    }
}

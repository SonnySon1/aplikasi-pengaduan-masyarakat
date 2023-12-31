<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
        use HasFactory;
        protected $table = "pengaduan";
        protected $guarded = ['id'];

        // nilai balik dari kategori
        public function kategori() {
            return $this->belongsTo(Kategori::class);
        }

        // nilai balik dari user
        public function user(){
            return $this->belongsTo(User::class);
        }

        // relasi ke table tanggapan
        public function tanggapan(){
            return $this->hasMany(Tanggapan::class);
        }
}

<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = "tanggapan";

    protected $guarded = ['id'];


    // nilai balik relasi user
    public function user() {
        return $this->belongsTo(User::class);
    }

    // nilai balik relasi pengaduan
    public function pengaduan() {
        return $this->belongsTo(Pengaduan::class);
    }



}

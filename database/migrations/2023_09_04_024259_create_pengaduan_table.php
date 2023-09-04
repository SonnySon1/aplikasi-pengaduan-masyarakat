<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
            $table->text('judul_pengaduan');
            $table->timestamp('tgl_pengaduan');
            $table->text('laporan_pengaduan');
            $table->text('foto')->nullable();
            $table->enum('status', ['new',  'accepted', 'process', 'finished', 'rejected'])->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
};

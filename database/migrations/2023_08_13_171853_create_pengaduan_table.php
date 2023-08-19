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
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_kategori');
            $table->text('judul_pengaduan');
            $table->timestamp('tgl_pengaduan');
            $table->text('laporan_pengaduan');
            $table->text('foto')->nullable();
            $table->enum('status', ['new', 'process', 'denied'])->default('new');
            $table->timestamps();
            $table->index(['id_user', 'id_kategori']);
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

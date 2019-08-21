<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_buku', function (Blueprint $table) {
            $table->bigIncrements('id_buku');
            $table->string('judul_buku', 40);
            $table->string('deskripsi', 100);
            $table->foreign('kategori')->references('kategori')->on('table_kategori')->onDelete('cascade');
            $table->string('cover_img', 50);
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
        Schema::dropIfExists('table_buku');
    }
}

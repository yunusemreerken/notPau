<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('not_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('filename');
            $table->string('ders_adi');
            $table->string('sayfa_sayisi');
            $table->string('universite');
            $table->string('fakulte');
            $table->string('bolum');
            $table->string('donem');
            $table->string('yil');
            $table->string('ogretim_uyesi');
            $table->string('fiyat');
            $table->string('konu_icerik');
            $table->strimg('durum');




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
        Schema::dropIfExists('not_images');
    }
}

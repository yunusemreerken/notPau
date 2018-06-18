<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dogum_gunu')->nullable();
            $table->string('cinsiyet')->nullable();
            $table->string('hakkimda')->nullable();
            $table->string('universite')->nullable();
            $table->string('fakulte')->nullable();
            $table->string('derece')->nullable();
            $table->string('baslama_tarihi')->nullable();
            $table->string('bitis_tarihi')->nullable();
            $table->string('mezuniyet_durumu')->nullable();
            $table->string('tel')->nullable();
            $table->string('sehir')->nullable();
            $table->string('posta_kodu')->nullable();
            $table->string('adres')->nullable();
            $table->string('tc')->nullable();
            $table->string('iban')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

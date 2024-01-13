<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranEsportsPubgmobileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_esports_pubgmobile', function (Blueprint $table) {
            $table->id();

            $table->string("fakultas");
            $table->string("no_wa_ketua");

            $table->string("nama_ketua");
            $table->string("nim_jurusan_ketua");
            $table->string("ttl_ketua");
            $table->string("nickname_ketua");
            $table->string("id_game_ketua");
            $table->string("ktm_ketua")->default('');
            $table->string("foto_ketua")->default('');

            $table->string("nama_anggota_1")->nullable();
            $table->string("nim_jurusan_anggota_1")->nullable();
            $table->string("ttl_anggota_1")->nullable();
            $table->string("nickname_anggota_1")->nullable();
            $table->string("id_game_anggota_1")->nullable();
            $table->string("ktm_anggota_1")->default('')->nullable();
            $table->string("foto_anggota_1")->default('')->nullable();

            $table->string("nama_anggota_2")->nullable();
            $table->string("nim_jurusan_anggota_2")->nullable();
            $table->string("ttl_anggota_2")->nullable();
            $table->string("nickname_anggota_2")->nullable();
            $table->string("id_game_anggota_2")->nullable();
            $table->string("ktm_anggota_2")->default('')->nullable();
            $table->string("foto_anggota_2")->default('')->nullable();

            $table->string("nama_anggota_3")->nullable();
            $table->string("nim_jurusan_anggota_3")->nullable();
            $table->string("ttl_anggota_3")->nullable();
            $table->string("nickname_anggota_3")->nullable();
            $table->string("id_game_anggota_3")->nullable();
            $table->string("ktm_anggota_3")->default('')->nullable();
            $table->string("foto_anggota_3")->default('')->nullable();

            $table->string("nama_anggota_4")->nullable();
            $table->string("nim_jurusan_anggota_4")->nullable();
            $table->string("ttl_anggota_4")->nullable();
            $table->string("nickname_anggota_4")->nullable();
            $table->string("id_game_anggota_4")->nullable();
            $table->string("ktm_anggota_4")->default('')->nullable();
            $table->string("foto_anggota_4")->default('')->nullable();

            $table->string("nama_anggota_cadangan")->nullable();
            $table->string("nim_jurusan_anggota_cadangan")->nullable();
            $table->string("ttl_anggota_cadangan")->nullable();
            $table->string("nickname_anggota_cadangan")->nullable();
            $table->string("id_game_anggota_cadangan")->nullable();
            $table->string("ktm_anggota_cadangan")->default('')->nullable();
            $table->string("foto_anggota_cadangan")->default('')->nullable();

            $table->boolean("konfirmasi")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran_esports_pubgmobile');
    }
}

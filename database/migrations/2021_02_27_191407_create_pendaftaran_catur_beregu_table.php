<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranCaturBereguTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_catur_beregu', function (Blueprint $table) {
            $table->id();
            ///

            $table->string('email');
            $table->string('fakultas');
            $table->string("id_lichess_tim")->nullable();

            $table->string('nama_ketua');
            $table->string('nim_jurusan_ketua');
            $table->string('no_wa_ketua');
            $table->string("id_lichess_ketua");
			$table->string('ktm_ketua')->default('');
            $table->string('foto_ketua')->default('');

            $table->string('nama_anggota_1')->nullable();
            $table->string('nim_jurusan_anggota_1')->nullable();
            $table->string('no_wa_anggota_1')->nullable();
            $table->string("id_lichess_anggota_1")->nullable();
            $table->string('ktm_anggota_1')->nullable()->default('');
            $table->string('foto_anggota_1')->nullable()->default('');

            $table->string('nama_anggota_2')->nullable();
            $table->string('nim_jurusan_anggota_2')->nullable();
            $table->string('no_wa_anggota_2')->nullable();
            $table->string("id_lichess_anggota_2")->nullable();
            $table->string('ktm_anggota_2')->nullable()->default('');
            $table->string('foto_anggota_2')->nullable()->default('');

            $table->string('nama_anggota_3')->nullable();
            $table->string('nim_jurusan_anggota_3')->nullable();
            $table->string('no_wa_anggota_3')->nullable();
            $table->string("id_lichess_anggota_3")->nullable();
            $table->string('ktm_anggota_3')->nullable()->default('');
            $table->string('foto_anggota_3')->nullable()->default('');

            ///

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
        Schema::dropIfExists('pendaftaran_catur_beregu');
    }
}

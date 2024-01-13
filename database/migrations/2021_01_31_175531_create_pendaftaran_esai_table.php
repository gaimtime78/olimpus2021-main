<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranEsaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_esai', function (Blueprint $table) {
			$table->id();
			$table->string("fakultas");
			$table->string("no_wa_ketua");

			$table->string("nama_ketua");
			$table->string("jurusan_ketua");
			$table->string("angkatan_ketua");
			$table->string("foto_ketua")->default('');
			$table->string("ktm_ketua")->default('');

			$table->string("nama_anggota")->nullable();
			$table->string("jurusan_anggota")->nullable();
			$table->string("angkatan_anggota")->nullable();
			$table->string("foto_anggota")->default('');
			$table->string("ktm_anggota")->default('');

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
        Schema::dropIfExists('pendaftaran_esai');
    }
}

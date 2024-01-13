<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranPosterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_poster', function (Blueprint $table) {
            $table->id();
			$table->string("fakultas");
			
			$table->string("nama_ketua");
			$table->string("no_wa_ketua");
			$table->string("nim_jurusan_ketua");
			$table->string("foto_ketua")->default('');
			$table->string("ktm_ketua")->default('');

			$table->string("nama_anggota")->nullable();
			$table->string("no_wa_anggota");
			$table->string("nim_jurusan_anggota")->nullable();
			$table->string("foto_anggota")->nullable()->default('');
			$table->string("ktm_anggota")->nullable()->default('');
			
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
        Schema::dropIfExists('pendaftaran_poster');
    }
}

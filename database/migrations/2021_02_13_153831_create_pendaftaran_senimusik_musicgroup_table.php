<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranSenimusikMusicgroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_senimusik_musicgroup', function (Blueprint $table) {
            $table->id();
			$table->string("email");
			$table->string("fakultas");
			$table->string("judul_lagu");
			
			$table->string("nama_peserta_1");
			$table->string("nim_peserta_1");
			$table->string("no_wa_peserta_1");
			$table->string("foto_peserta_1")->default('');
			$table->string("ktm_peserta_1")->default('');
            
			$table->string("nama_peserta_2")->nullable();
			$table->string("nim_peserta_2")->nullable();
			$table->string("no_wa_peserta_2")->nullable();
			$table->string("foto_peserta_2")->default('')->nullable();
			$table->string("ktm_peserta_2")->default('')->nullable();
            
			$table->string("nama_peserta_3")->nullable();
			$table->string("nim_peserta_3")->nullable();
			$table->string("no_wa_peserta_3")->nullable();
			$table->string("foto_peserta_3")->default('')->nullable();
			$table->string("ktm_peserta_3")->default('')->nullable();
            
			$table->string("nama_peserta_4")->nullable();
			$table->string("nim_peserta_4")->nullable();
			$table->string("no_wa_peserta_4")->nullable();
			$table->string("foto_peserta_4")->default('')->nullable();
			$table->string("ktm_peserta_4")->default('')->nullable();
            
			$table->string("nama_peserta_5")->nullable();
			$table->string("nim_peserta_5")->nullable();
			$table->string("no_wa_peserta_5")->nullable();
			$table->string("foto_peserta_5")->default('')->nullable();
			$table->string("ktm_peserta_5")->default('')->nullable();
			
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
        Schema::dropIfExists('pendaftaran_senimusik_musicgroup');
    }
}

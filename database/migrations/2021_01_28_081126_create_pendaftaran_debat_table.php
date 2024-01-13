<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranDebatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_debat', function (Blueprint $table) {
            $table->id();
			$table->string("nama_tim");
			$table->string("fakultas");
			
			$table->string("nama_speaker_1");
			$table->string("angkatan_nim_speaker_1");
			$table->string("no_wa_speaker_1");
			$table->string("foto_speaker_1")->default('');
			$table->string("ktm_speaker_1")->default('');
			
			$table->string("nama_speaker_2");
			$table->string("angkatan_nim_speaker_2");
			$table->string("no_wa_speaker_2");
			$table->string("foto_speaker_2")->default('');
			$table->string("ktm_speaker_2")->default('');

			$table->string("nama_speaker_3");
			$table->string("angkatan_nim_speaker_3");
			$table->string("no_wa_speaker_3");
			$table->string("foto_speaker_3")->default('');
			$table->string("ktm_speaker_3")->default('');

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
        Schema::dropIfExists('pendaftaran_debat');
    }
}

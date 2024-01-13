<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranSenirupaKomikstripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_senirupa_komikstrip', function (Blueprint $table) {
            $table->id();
			$table->string("email");
			$table->string("fakultas");
			
			$table->string("no_wa_peserta");
			$table->string("nama_peserta");
			$table->string("nim_peserta");
            
			$table->string("foto_peserta")->default('');
			$table->string("ktm_peserta")->default('');
			
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
        Schema::dropIfExists('pendaftaran_senirupa_komikstrip');
    }
}

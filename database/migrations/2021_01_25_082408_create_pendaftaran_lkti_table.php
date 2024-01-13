<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranLktiTable extends Migration
{
	public function up()
	{
		Schema::create('pendaftaran_lkti', function (Blueprint $table) {
			$table->id();
			$table->string("email");
			$table->string("fakultas");
			
			$table->string("no_wa_ketua");
			$table->string("nama_ketua");
			$table->string("nim_jurusan_ketua");
			$table->string("foto_ketua")->default('');
			$table->string("ktm_ketua")->default('');

			$table->string("nama_anggota_1")->nullable();
			$table->string("nim_jurusan_anggota_1")->nullable();
			$table->string("foto_anggota_1")->nullable()->default('');
			$table->string("ktm_anggota_1")->nullable()->default('');
			
			$table->string("nama_anggota_2")->nullable();
			$table->string("nim_jurusan_anggota_2")->nullable();
			$table->string("foto_anggota_2")->nullable()->default('');
			$table->string("ktm_anggota_2")->nullable()->default('');
			
			$table->boolean("konfirmasi")->default(false);
		});
	}
	
	public function down()
	{
		Schema::dropIfExists('pendaftaran_lkti');
	}
}

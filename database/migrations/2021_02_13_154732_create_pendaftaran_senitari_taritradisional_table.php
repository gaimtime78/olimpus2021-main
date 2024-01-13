<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranSenitariTaritradisionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_senitari_taritradisional', function (Blueprint $table) {
            $table->id();

			// BARU
			$table->string('judul_karya');
			$table->string('fakultas');

			$table->string('nama_ketua');
			$table->string('nim_ketua');
			$table->string('ttl_ketua');
			$table->string('alamat_ketua');
			$table->string('no_wa_ketua');
			$table->string('email_ketua');
			$table->string('jurusan_angkatan_ketua');
			$table->string("foto_ketua")->default('');
			$table->string("ktm_ketua")->default('');

			$table->string('nama_anggota_1')->nullable();
			$table->string('nim_anggota_1')->nullable();
			$table->string('ttl_anggota_1')->nullable();
			$table->string('alamat_anggota_1')->nullable();
			$table->string('no_wa_anggota_1')->nullable();
			$table->string('email_anggota_1')->nullable();
			$table->string('jurusan_angkatan_anggota_1')->nullable();
			$table->string("foto_anggota_1")->default('')->nullable();
			$table->string("ktm_anggota_1")->default('')->nullable();

			$table->string('nama_anggota_2')->nullable();
			$table->string('nim_anggota_2')->nullable();
			$table->string('ttl_anggota_2')->nullable();
			$table->string('alamat_anggota_2')->nullable();
			$table->string('no_wa_anggota_2')->nullable();
			$table->string('email_anggota_2')->nullable();
			$table->string('jurusan_angkatan_anggota_2')->nullable();
			$table->string("foto_anggota_2")->default('')->nullable();
			$table->string("ktm_anggota_2")->default('')->nullable();
			
			$table->string('nama_anggota_3')->nullable();
			$table->string('nim_anggota_3')->nullable();
			$table->string('ttl_anggota_3')->nullable();
			$table->string('alamat_anggota_3')->nullable();
			$table->string('no_wa_anggota_3')->nullable();
			$table->string('email_anggota_3')->nullable();
			$table->string('jurusan_angkatan_anggota_3')->nullable();
			$table->string("foto_anggota_3")->default('')->nullable();
			$table->string("ktm_anggota_3")->default('')->nullable();
			
			$table->string('nama_anggota_4')->nullable();
			$table->string('nim_anggota_4')->nullable();
			$table->string('ttl_anggota_4')->nullable();
			$table->string('alamat_anggota_4')->nullable();
			$table->string('no_wa_anggota_4')->nullable();
			$table->string('email_anggota_4')->nullable();
			$table->string('jurusan_angkatan_anggota_4')->nullable();
			$table->string("foto_anggota_4")->default('')->nullable();
			$table->string("ktm_anggota_4")->default('')->nullable();

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
        Schema::dropIfExists('pendaftaran_senitari_taritradisional');
    }
}

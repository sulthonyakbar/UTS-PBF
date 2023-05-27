<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};

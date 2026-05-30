<?php

use App\Models\Fakultas;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
            $table->foreignIDFor(Fakultas::class)->constrained('fakultas');
            $table->string('nama_prodi', 100);
            $table->string('nama_kaprodi', 100);
            $table->string('alias_prodi');
            $table->string('photo_kaprodi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prodis');
    }
};
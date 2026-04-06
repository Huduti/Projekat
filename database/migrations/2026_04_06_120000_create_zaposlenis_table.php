<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('zaposlenis', function (Blueprint $table) {
            $table->id();
            $table->string('ime');
            $table->string('prezime');
            $table->string('email')->unique();
            $table->string('pozicija');
            $table->string('strucnasprema');
            $table->string('odjeljenje');
            $table->date('datum_zaposlenja');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('zaposlenis');
    }
};

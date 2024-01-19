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
        Schema::table('users', function (Blueprint $table) {
            $table->string('about')->nullable()->default("Je suis un simple utilisateur, mais je peux modifier ma description");
            $table->string('country')->nullable()->default('Bénin');
            $table->string('enterprise')->nullable()->default('Carlocation');
            $table->string('phone')->nullable()->default('Non fourni');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};

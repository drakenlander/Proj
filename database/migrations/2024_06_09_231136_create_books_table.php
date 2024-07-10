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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('object');
            $table->string('color');
            $table->text('description');
            $table->text('location');
            $table->string('idcard');
            $table->timestamps();
        });

        Schema::table('books', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');

        Schema::table('books', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};

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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->foreinId('father_id');
            $table->string('child_name');
            $table->timestamps();

            $table->foreign('father_id')->references('id')->on('fathers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};

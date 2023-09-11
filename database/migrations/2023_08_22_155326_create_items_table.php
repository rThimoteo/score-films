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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('episodes')->nullable();
            $table->string('img_url')->nullable();
            $table->string('banner_url')->nullable();
            $table->integer('year')->nullable();
            $table->foreignId('type_id')->constrained('types');
            $table->foreignId('universe_id')->nullable()->constrained('universes');
            $table->foreignId('parent_id')->nullable()->constrained('items');
            $table->timestamps();

            $table->unique('parent_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};

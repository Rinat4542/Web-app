<?php

use App\Models\House;
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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('square')->nullable();
            $table->string('layout')->nullable();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->unsignedBigInteger('house_id')->nullable();
            $table->index('house_id', 'apartment_house_idx');
            $table->foreign('house_id', 'apartment_house_fk')->references('id')->on('houses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};

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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('deadline');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->index('project_id', 'house_project_idx');
            $table->foreign('project_id', 'house_project_fk')->references('id')->on('projects');
            $table->timestamps();
        });
    }
    //'name', 'deadline', 'project_id'

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};

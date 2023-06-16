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
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug', 200);
            $table->string('location', 100);
            $table->longText('about');
            $table->string('featured_event', 100);
            $table->string('language', 100);
            $table->string('foods', 100);
            $table->date('departure_date');
            $table->string('duration', 100);
            $table->string('type', 100);
            $table->integer('price');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_packages');
    }
};

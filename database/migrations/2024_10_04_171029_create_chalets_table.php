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
        Schema::create('chalets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('location');
            $table->decimal('price_per_night', 8, 2);
            $table->integer('capacity');
            $table->text('amenities');
            $table->string('address')->nullable();
            $table->decimal('deposit', 8, 2)->default(0);
            $table->text('facilities')->nullable();
            $table->text('insurance')->nullable();
            $table->text('terms')->nullable();
            $table->boolean('active')->default(true);
            $table->longText('bio_data')->nullable();
            $table->string('currency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chalets');
    }
};

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
        Schema::create('feature_instructions', function (Blueprint $table) {
            $table->id();
            $table->string('instruction');
            $table->string('photo');
            $table->string('slug');
            $table->string('lang')->default('en');
            $table->foreignId('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_instructions');
    }
};

// php artisan migrate --path=/database/migrations/2024_07_19_181449_create_feature_instructions_table.php
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
        Schema::create('feature_services', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('slug');
            $table->string('photo');
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
        Schema::dropIfExists('feature_services');
    }
};
//php artisan migrate --path=/database/migrations/2024_07_19_181403_create_feature_services_table.php
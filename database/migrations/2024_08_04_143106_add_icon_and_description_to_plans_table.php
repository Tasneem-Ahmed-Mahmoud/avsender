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
        Schema::table('plans', function (Blueprint $table) {
            $table->string('icon')->nullable()->after('title');
            $table->boolean('is_popular')->default(false)->after('lang');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
         $table->dropColumn('icon');
            $table->dropColumn('description');
            $table->dropColumn('business_size');
            $table->dropColumn('lang');
            $table->dropColumn('is_popular');
           
        });
    }
};

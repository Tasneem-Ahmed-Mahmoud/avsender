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
            if (!Schema::hasColumn('plans', 'price')) {
                $table->double('price')->default(0.00);
            }
            if (!Schema::hasColumn('plans', 'is_featured')) {
                $table->boolean('is_featured')->default(false);
            }
            if (!Schema::hasColumn('plans', 'is_recommended')) {
                $table->boolean('is_recommended')->default(false);
            }
            if (!Schema::hasColumn('plans', 'is_trial')) {
                $table->boolean('is_trial')->default(false);
            }
            if (!Schema::hasColumn('plans', 'is_popular')) {
                $table->boolean('is_popular')->default(false);
            }
            if (!Schema::hasColumn('plans', 'status')) {
                $table->boolean('status')->default(false);
            }
            if (!Schema::hasColumn('plans', 'days')) {
                $table->integer('days');
            }
            if (!Schema::hasColumn('plans', 'trial_days')) {
                $table->integer('trial_days')->nullable();
            }
            if (!Schema::hasColumn('plans', 'business_size')) {
                $table->string('business_size');
            }
            if (!Schema::hasColumn('plans', 'icon')) {
                $table->string('icon');
            }
            if (!Schema::hasColumn('plans', 'title')) {
                $table->string('title');
            }
            if (!Schema::hasColumn('plans', 'description')) {
                $table->string('description');
            }
            if (!Schema::hasColumn('plans', 'limits')) {
                $table->text('limits');
            }


            // Adding new columns
            $table->double('price')->default(0.00);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_recommended')->default(false);
            $table->boolean('is_trial')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->boolean('status')->default(false);
            $table->integer('days');
            $table->integer('trial_days')->nullable();
            $table->string('business_size');
            $table->string('icon');
            $table->string('title');
            $table->string('description');
            $table->text('limits');
        });



          
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn([
                'price',
                'is_featured',
                'is_recommended',
                'is_trial',
                'is_popular',
                'status',
                'days',
                'trial_days',
                'business_size',
                'icon',
                'title',
                'description',
                'limits',
            ]);
        });
    }
};


//php artisan migrate --path=/database/migrations/2024_09_01_152428_modify_plans_table.php



// ALTER TABLE `plans`
// ADD COLUMN `price` DOUBLE DEFAULT 0.00,
// ADD COLUMN `is_featured` BOOLEAN DEFAULT FALSE,
// ADD COLUMN `is_recommended` BOOLEAN DEFAULT FALSE,
// ADD COLUMN `is_trial` BOOLEAN DEFAULT FALSE,
// ADD COLUMN `is_popular` BOOLEAN DEFAULT FALSE,
// ADD COLUMN `status` BOOLEAN DEFAULT FALSE,
// ADD COLUMN `days` INT NOT NULL,
// ADD COLUMN `trial_days` INT NULL,
// ADD COLUMN `business_size` VARCHAR(255) NOT NULL,
// ADD COLUMN `icon` VARCHAR(255) NOT NULL,
// ADD COLUMN `title` VARCHAR(255) NOT NULL,
// ADD COLUMN `description` VARCHAR(255) NOT NULL,
// ADD COLUMN `limits` TEXT NOT NULL;

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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('weight')->default(0);
            $table->dateTime('date_of_production')->nullable();
            $table->unsignedSmallInteger('shelf_life_days');
            $table->dateTime('date_of_expiration');

            $table->foreignId('unit_category_id')
                ->nullable()
                ->constrained('unit_categories')
                ->restrictOnDelete();

            $table->foreignId('backpack_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};

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
            $table->enum('type', ['simple', 'group']);
            $table->string('name');
            $table->unsignedSmallInteger('quantity');
            $table->unsignedSmallInteger('weight')->default(0);
            $table->unsignedTinyInteger('position');

            $table->dateTime('date_of_production')->nullable();
            $table->unsignedSmallInteger('shelf_life_days')->nullable();
            $table->dateTime('date_of_expiration')->nullable();

            $table->foreignId('description_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId('group_id')
                ->nullable()
                ->constrained('units')
                ->cascadeOnDelete();

            $table->foreignId('category_id')
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

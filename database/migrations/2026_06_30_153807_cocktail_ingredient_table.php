<?php

use App\Models\Cocktail;
use App\Models\Ingredient;
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
        Schema::create('cocktail_ingredient', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Cocktail::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignIdFor(Ingredient::class)
                ->constrained()
                ->cascadeOnDelete();

            $table->integer('amount');
            $table->string('unit');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

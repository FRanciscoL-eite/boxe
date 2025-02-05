<?php

use App\Models\Category;
use App\Models\Fighter;
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
        Schema::create('fights', function (Blueprint $table) {        
            $table->id();
            $table->text('local');
            $table->date('data');            
            $table->string('liga');
            $table->foreignId('fighter1')->references('id')->on('fighters')->constrained()->cascadeOnDelete();
            $table->foreignId('fighter2')->references('id')->on('fighters')->constrained()->cascadeOnDelete();
            $table->foreignId('winner_id')->nullable()->references('id')->on('fighters')->cascadeOnDelete();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fights');
    }
};

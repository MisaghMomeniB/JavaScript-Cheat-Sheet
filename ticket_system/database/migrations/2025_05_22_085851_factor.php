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
        Schema::create('factor', function (Blueprint $table) {
            $table->string('shop_name', 50);
            $table->enum('sort', ['sort1', 'sort2', 'sort3']);
            $table->int('price');
            $table->string('description', 120);
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

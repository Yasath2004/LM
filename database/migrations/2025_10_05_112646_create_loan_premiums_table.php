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
        Schema::create('loan_premiums', function (Blueprint $table) {
            $table->id();
            $table->integer('loan_id');
            $table->string('loan_premium_number')->nullable();
            $table->decimal('amount', 15, 2);
            $table->string('method');
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_premiums');
    }
};

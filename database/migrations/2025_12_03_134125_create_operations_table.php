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
        Schema::create('operations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('compte_id')->constrained('compte')->onDelete('cascade');
        $table->enum('type_op', ['DEPOSIT', 'WITHDRAW']);
        $table->decimal('montant', 10, 2);
        $table->dateTime('date_op');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};

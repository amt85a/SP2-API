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
        Schema::create('sock_operations', function (Blueprint $table) {
            $table->foreignId('sock_id')->constrained();
            $table->foreignId('operation_id')->constrained();
            $table->primary(['sock_id', 'operation_id']);
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

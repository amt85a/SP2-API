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
        Schema::create('operation_sock', function (Blueprint $table) {
            $table->foreignId('operation_id')->constrained();
            $table->foreignId('sock_id')->constrained();
            $table->primary(['operation_id', 'sock_id']);
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

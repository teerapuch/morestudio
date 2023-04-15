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
        Schema::create('saleshistories', function (Blueprint $table) {
            $table->id('SalesID');
            $table->foreignId('ModelID');
            $table->foreignId('EmployeeID');
            $table->dateTime('SaleDate');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
            $table->integer('deleted_at')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saleshistories');
    }
};

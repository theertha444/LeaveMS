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
        Schema::create('userleaves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('leavetype');
            $table->string('fromdate');
            $table->string('todate');
            
            $table->string('description');
            $table->string('status')->default('applied');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userleaves');
    }
};

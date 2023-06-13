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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('id_card');
            $table->date('birthday');
            $table->string('name');
            $table->string('lastname');
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('sector');
            $table->string('street');
            $table->string('address')->nullable();
            $table->string('department');
            $table->string('job_title');
            $table->string('contract');
            $table->date('date_of_entry');             
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

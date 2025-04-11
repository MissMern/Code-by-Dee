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
        Schema::create('management_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserId')->nullable();
            $table->foreign('UserId')->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
            $table->string('PayrollNum',12)->nullable();
            $table->index('PayrollNum');
            $table->string('Names')->nullable();
            $table->string('RoleName')->nullable();
            $table->date('StartDate')->nullable();
            $table->date('EndDate')->nullable();
            $table->string('AccountStatus')->default('Active');
            $table->string('DocumentRef')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_users');
    }
};

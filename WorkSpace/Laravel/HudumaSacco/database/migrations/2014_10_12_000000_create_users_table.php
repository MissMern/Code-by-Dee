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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('org_id');
            $table->string('name');
           
            $table->string('email')->unique();
            $table->string('username')->unique()->nullable();
            $table->string('telephone')->nullable();
            $table->string('avatar')->nullable();
            $table->string('role_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verification_code')->nullable()->unique();
            $table->string('token_2fa')->nullable();
            $table->datetime('token_2fa_expiry')->nullable();
            $table->enum('user_status',['Active',"Blocked"])->default("Active");
            $table->enum('user_type',['Internal','External'])->default("Internal");
            $table->string('password');
            $table->string('token')->nullable();
            $table->datetime('token_expiry')->nullable();
            $table->datetime('lastlogindate')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->date('password_expiry')->nullable();
            $table->integer('password_status')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->integer('is_deleted')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
             $table->string('DocCategory',60)->nullable();
             $table->string('DocumentName')->nullable();
             $table->date('DocumentDate')->nullable();
             $table->string('DocumentAuthor')->nullable();
             $table->string('DocumentVersion')->default('Version 1.0');
             $table->string('DocumentRef')->nullable();
             $table->string('DocumentSubject')->nullable();
             $table->string('AccessType')->default('Open');
             $table->string('DocumentStorageName')->nullable();
             $table->string('UploadedByName')->nullable();
             $table->unsignedBigInteger('created_by')->nullable();
             $table->unsignedBigInteger('updated_by')->nullable();
             $table->integer('is_deleted')->nullable();
             $table->unsignedBigInteger('deleted_by')->nullable();
             $table->index('DocCategory');
              $table->foreign('DocCategory')->references('CategoryName')->on('document_categories')->nullOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

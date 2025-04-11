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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
             
            $table->unsignedBigInteger('MemberId')->nullable();
            $table->foreign('MemberId')->references('id')->on('members')->nullOnDelete()->cascadeOnUpdate();
            $table->string('PayrollNum',12)->nullable();
            $table->index('PayrollNum');
            $table->string('IdNumber')->nullable();
            $table->index('IdNumber');
            $table->string('Names')->nullable();
            $table->date('ApplicationDate')->nullable();
            $table->date('ApprovedDate')->nullable();
            $table->string('AgentType')->nullable();
            $table->string('RegNum')->nullable();
            $table->string('AgentCode')->nullable();
            $table->string('BranchCode')->nullable();
            $table->string('AccountNum')->nullable();
            $table->string('EDCode',6)->nullable();
            $table->string("EdName",250)->nullable();
            $table->double('LoanAmount')->nullable();
            $table->double('Rate')->nullable();
            $table->double('InterestAmount')->nullable();
            $table->double('Principal')->default(0);
            $table->double('Amount')->default(0);
            $table->double('PaidAmount')->default(0);
            $table->double('Balance')->default(0);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};

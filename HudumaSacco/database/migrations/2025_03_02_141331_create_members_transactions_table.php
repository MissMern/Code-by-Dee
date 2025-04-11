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
        Schema::create('member_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('MemberId')->nullable();
            $table->foreign('MemberId')->references('id')->on('members')->nullOnDelete()->cascadeOnUpdate();
            $table->date('Paydate')->nullable();
            $table->string('SiteId')->nullable();
            $table->string('PayrollNum',12)->nullable();
            $table->index('PayrollNum');
            $table->string('IdNumber')->nullable();
            $table->index('IdNumber');
            $table->string('AgentType')->nullable();
            $table->string('RegNum')->nullable();
            $table->string('AgentCode')->nullable();
            $table->string('BranchCode')->nullable();
            $table->string('AccountNum')->nullable();
            $table->string('EDCode',6)->nullable();
            $table->string("EdName",250)->nullable();
            $table->double('Amount')->default(0);
            $table->double('Balance')->default(0);
            $table->string('Name')->nullable();
            $table->longText('Remarks')->nullable();
            $table->string('Status')->default('Active');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_transactions');
    }
};

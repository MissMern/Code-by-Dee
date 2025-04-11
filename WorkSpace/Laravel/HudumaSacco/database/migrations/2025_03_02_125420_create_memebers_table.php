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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserId')->nullable();
            $table->foreign('UserId')->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
            $table->string('PayrollNum',12)->unique();
            $table->string('IdNumber')->nullable();
            $table->string('MemberName')->nullable();
            $table->string("MemberGender")->nullable();
            $table->date('MemberBirthDate')->nullable();
            $table->string('MemberEmployerCode')->nullable();
            $table->string('MemberEmployerName')->nullable();
            $table->date('MemberHireDate')->nullable();
            $table->date('MemberDoca')->nullable();
            $table->date('MemberROD')->nullable();

            $table->date('JoiningDate')->nullable();
            $table->string('MemberEmail')->nullable();
            $table->string('MemberTelephone')->nullable();
            $table->string('MemberAltTelephone')->nullable();
            $table->string('MemberNextofKinName')->nullable();
            $table->string('MemberNextOfKinRelation')->nullable();
            $table->string('MemberNextOfKinTelephone')->nullable();
            $table->string('MemberNextofKinEmail')->nullable();
            $table->string('MemberNextofkinCurrentAddress')->nullable();
            $table->string('MemberNextofPostalAddress')->nullable();
            $table->string('MemberNextOfKinIdNum')->nullable();
            $table->string('HomeCounty')->nullable();
            $table->string('HomeSubCounty')->nullable();
            $table->string('HomePhysicalLocation')->nullable();
            $table->string('ResidentCounty')->nullable();
             $table->string('ResidentSubCounty')->nullable();
            $table->string('ResidentAddress')->nullable();
            $table->string('PostalAddress')->nullable();
            $table->string('Town')->nullable();
            $table->double('MonthlyContribution')->nullable();
            $table->double('CurrentBalance')->nullable();
            $table->double('MonthlyProcessingFee')->default(200);
            $table->string('CreatedByName')->nullable();
            $table->string('SubmittedByName')->nullable();
            $table->string('ApprovedBy')->nullable();
            $table->datetime('SubmitDate')->nullable();
            $table->string('ApprovalDate')->nullable();
            $table->string('MemberStatus')->default('Active');
            $table->date('MemberExitDate')->nullable();
            $table->text('MemberExitReason')->nullable();
            $table->string('UserAccountStatus')->default("Pending Creation");
            $table->datetime('UserAccountCreatedAt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

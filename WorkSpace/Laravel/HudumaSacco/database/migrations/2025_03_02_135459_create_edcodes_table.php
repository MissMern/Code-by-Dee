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
        Schema::create('edcodes', function (Blueprint $table) {
            $table->id();
            $table->string('EDCode',6)->unique();
            $table->string("EdName",250)->nullable()->unique();
            $table->timestamps();
        });

        
         DB::table('edcodes')->insert([
                    'EDCode'=>"937",
                    'EdName' =>"SACCO Loan Interest",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                   ]);


          DB::table('edcodes')->insert([
                    'EDCode'=>"938",
                    'EdName' =>"SACCO Loan Recovery",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                   ]);


          DB::table('edcodes')->insert([
                    'EDCode'=>"939",
                    'EdName' =>"SACCO Share Contribution",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                   ]);
          DB::table('edcodes')->insert([
                    'EDCode'=>"940",
                    'EdName' =>"SACCO Share Investments",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                   ]);


          DB::table('edcodes')->insert([
                    'EDCode'=>"949",
                    'EdName' =>"SACCO Risk Fund",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                   ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edcodes');
    }
};

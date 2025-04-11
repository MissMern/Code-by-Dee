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
        Schema::create('relationships', function (Blueprint $table) {
            $table->id();
            $table->string('RelationName',255)->unique();
            $table->timestamps();
        });


        $list=array("Parent","Spouse","Sibling","Son","Daughter","Guardian","Relative","Neighbour","Other");



        foreach($list as $key)
  {



      DB::table('relationships')->insert([
                    'RelationName'=>trim($key),
                   
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                   ]);
  }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relationships');
    }
};

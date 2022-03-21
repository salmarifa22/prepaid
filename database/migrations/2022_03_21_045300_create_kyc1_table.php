<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->string('cname');
            $table->string('pname');
            $table->string('email')->unique();
            $table->string('w')->nullable();
            $table->string('date');
            $table->string('mobile')->unique();
            $table->string('pan')->unique();
            $table->string('doc_name');
            $table->string('doc_file');
            $table->string('address');
            $table->string('state');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kyc1');
    }
};

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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('introduction');
            $table->string('address');
            $table->string('post_code');
            $table->string('phone_number'); //$table->unsignedInteger('phone_number');だとデータ型がFakerを使うとstrだから使えない
            $table->time('opening_time')->nullable(); 
            $table->time('closing_time')->nullable();
            $table->string('regular_holiday');
            $table->string('sns_account')->nullable(); 
            $table->string('official_website')->nullable();
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
        Schema::dropIfExists('shops');
    }
};

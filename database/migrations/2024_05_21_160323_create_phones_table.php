<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->text('description');
            $table->decimal('price', 6, 2);
            $table->integer('stock')->default(0);
            $table->string('image')->nullable();
            $table->string('manufacturer')->nullable();
            $table->date('release_date')->nullable();
            $table->string('os')->nullable();
            $table->string('imei')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phones');
    }
};

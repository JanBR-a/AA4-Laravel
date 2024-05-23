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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->boolean('active')->default(false);
            $table->dateTime('starting_date');
            $table->dateTime('expiring_date');
            $table->timestamps();
            $table->foreign('userID')->unique()->references('id')->on('users')->onDelete('cascade');        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};

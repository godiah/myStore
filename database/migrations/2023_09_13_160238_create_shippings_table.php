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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile');
            $table->string('mobile2');
            $table->string('email');
            $table->string('email2');
            $table->string('address')->nullable();
            $table->string('residence')->nullable();
            $table->string('country')->default('Kenya');
            $table->string('county');
            $table->string('subcounty')->nullable();
            $table->string('town');
            $table->string('specificarea');
            $table->text('addinfo')->nullable();
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shippings');
    }
};

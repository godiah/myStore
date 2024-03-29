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
            $table->string('lastname')->nullable();
            $table->string('mobile');
            $table->string('mobile2')->nullable();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('address')->nullable();
            $table->string('residence')->nullable();
            $table->string('country')->default('Kenya')->nullable();
            $table->string('county')->nullable();
            $table->string('subcounty')->nullable();
            $table->string('town')->nullable();
            $table->string('specificarea')->nullable();
            $table->string('streetname')->nullable();
            $table->string('aptnumber')->nullable();
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

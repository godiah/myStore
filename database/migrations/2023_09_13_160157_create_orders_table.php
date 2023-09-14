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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->decimal('subtotal',12,2,'.', ',')->nullable();
            // $table->decimal('discount')->default (0);
            $table->decimal('tax',12,2,'.', ',')->nullable();
            $table->decimal('total',12,2,'.', ',')->nullable();
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
            $table->string('streetname');
            $table->string('aptnumber');
            $table->text('addinfo')->nullable();
            $table->enum('status', ['ordered', 'delivered', 'canceled'])->default('ordered');
            $table->boolean ('is_shipping_different')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references ('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

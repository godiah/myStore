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
            $table->string('specificarea');
            $table->string('streetname')->nullable();
            $table->string('aptnumber')->nullable();
            $table->text('addinfo')->nullable();
            $table->enum('status', ['ordered', 'delivered', 'canceled'])->default('ordered');
            $table->boolean ('is_shipping_different')->default(false);
            $table->enum('delivered_status', ['pending', 'delivered', 'canceled'])->default('pending');
            $table->timestamp('delivered_date')->nullable();
            $table->timestamp('canceled_date')->nullable();
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

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
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('shipping_id');
            $table->unsignedBigInteger('coupon_id')->nullable();

            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onDelete('cascade');

            $table->foreign('payment_id')
                ->references('id')->on('payments')
                ->onDelete('cascade');

            $table->foreign('shipping_id')
                ->references('id')->on('shippings')
                ->onDelete('cascade');

            $table->foreign('coupon_id')
                ->references('id')->on('coupons')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

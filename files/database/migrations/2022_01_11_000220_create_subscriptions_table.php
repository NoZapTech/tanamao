<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->boolean('is_active')->default(true);

            $table->unsignedBigInteger('tenant_id');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');

            $table->string('ipag_id');
            $table->enum('status', ['pending', 'paid', 'overdue'])->default('pending');
            $table->string('order_id')->unique();

            $table->unsignedBigInteger('seller_id')->nullable();
            $table->foreign('seller_id')->references('id')->on('users');

            $table->boolean('toc')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}

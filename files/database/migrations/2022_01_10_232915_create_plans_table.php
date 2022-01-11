<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->boolean('is_active')->default(true);

            $table->string('name');
            $table->string('uri')->unique();

            $table->text('description')->nullable();

            $table->double('amount', 10, 2);
            $table->enum('frequency', ['monthly', 'weekly', 'daily'])->default('monthly');
            $table->integer('interval')->default(1);

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
        Schema::dropIfExists('plans');
    }
}

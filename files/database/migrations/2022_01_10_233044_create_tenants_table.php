<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->boolean('is_active')->default(true);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');

            $table->unsignedBigInteger('segment');
            $table->foreign('segment')->references('id')->on('segments')->onDelete('cascade');
            $table->string('segment_custom')->nullable();

            $table->string('name');
            $table->string('cnpj')->nullable();
            $table->string('answerable')->nullable();
            $table->string('answerable_cpf')->nullable();

            $table->string('address_zipcode');
            $table->string('address_neighborhood');
            $table->string('address_street');
            $table->string('address_number');
            $table->string('address_complement')->nullable();
            $table->string('address_city');
            $table->string('address_state');

            $table->enum('nozap_status', ['não cadastrado', 'cadastrado'])->default('não cadastrado');

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
        Schema::dropIfExists('tenants');
    }
}

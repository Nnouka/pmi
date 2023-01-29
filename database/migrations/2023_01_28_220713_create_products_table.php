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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('info')->nullable();
            $table->string('composition')->nullable();
            $table->string('packaging')->nullable();
            $table->text('intended_use')->nullable();
            $table->text('dosage')->nullable();
            $table->text('equipment_methods')->nullable();
            $table->text('outcomes')->nullable();
            $table->text('outcome_images')->nullable();
            $table->text('images')->nullable();
            $table->integer('manufacturer_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

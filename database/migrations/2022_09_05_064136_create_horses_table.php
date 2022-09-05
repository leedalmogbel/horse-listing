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
        Schema::create('horses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('colour');
            $table->string('age');
            $table->string('country');
            $table->string('sex');
            $table->string('father');
            $table->string('mother');
            $table->string('microNo')->nullable();
            $table->string('passportNo')->nullable();
            $table->string('flag')->nullable();
            $table->string('status')->nullable();
            $table->boolean('active')->default(1);
            $table->json('metadata')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('horses');
    }
};

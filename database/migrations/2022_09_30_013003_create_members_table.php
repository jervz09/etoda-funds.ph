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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('birthdate');
            $table->string('mobile_number');
            $table->string('address');
            $table->string('toda_group');
            $table->string('plate_number');
            $table->string('photo_url')->nullable();
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
        Schema::dropIfExists('members');
    }
};

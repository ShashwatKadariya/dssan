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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('full_name');
            $table->string('email');
            $table->string('address');
            $table->string('contact');
            $table->foreignId('batch_id')->references('id')->on('batches');
            $table->mediumText('social_link');
            $table->date('birth_date');
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->mediumText('current_university');
            $table->string('major_subject');
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
        Schema::dropIfExists('alumnis');
    }
};

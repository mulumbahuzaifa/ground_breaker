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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dob');
            $table->string('phone_number');
            $table->string('email');
            $table->string('whatsapp_number');
            $table->string('region');
            $table->string('district');
            $table->string('village');
            $table->string('guardian_name');
            $table->string('guardian_number');
            $table->text('about_us');
            $table->text('living_situation');
            $table->text('about_family');
            $table->text('deserve');
            $table->text('challenges');
            $table->string('level_of_education');
            $table->string('combination');
            $table->string('points');
            $table->text('experience');
            $table->text('passion_of_tech');
            $table->text('prepared');
            $table->text('motivated');
            $table->text('plan_to_contribute');
            $table->text('question1');
            $table->text('question2');
            $table->text('question3');
            $table->text('question4');
            $table->text('additional_information');
            $table->text('recommend_friend');
            $table->string('certificate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};

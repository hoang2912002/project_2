<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('gender')->default(0);
            $table->date('birthdate');
            $table->string('avatar')->nullable();
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->foreignId('course_id')->constrained();
            $table->foreignId('major_id')->constrained();
            $table->string('password');
            $table->string('address');
            $table->string('city_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('ward_id')->nullable();
            //$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

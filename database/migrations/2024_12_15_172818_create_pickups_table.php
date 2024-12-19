<?php

// database/migrations/xxxx_xx_xx_create_pickups_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupsTable extends Migration
{
    public function up()
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->string('pickup_name');
            $table->boolean('face_detection')->default(false);
            $table->date('date');
            $table->time('time');
            $table->string('status')->default('pending'); // Tambahkan kolom status
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pickups');
    }
}
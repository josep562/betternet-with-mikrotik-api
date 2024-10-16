<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Primary key
            $table->text('payload'); // To store serialized session data
            $table->integer('last_activity'); // Timestamp for last activity
            $table->unsignedBigInteger('user_id')->nullable(); // To associate with a user
            $table->string('ip_address')->nullable(); // User's IP address
            $table->string('user_agent')->nullable(); // User's browser agent
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions');
    }
};

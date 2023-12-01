<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 15);
            $table->string('email', 20);
            $table->string('password', 60);
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->string('image', 200)->default('uploads/default-profile.jpg');
            $table->string('age')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->enum('gender', ['Male', 'Female', 'NA'])->default('NA');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

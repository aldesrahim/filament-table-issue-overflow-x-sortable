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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
	        $table->string('password');
	        $table->string('word1');
	        $table->string('word2');
	        $table->string('word3');
	        $table->string('word4');
	        $table->string('word5');
	        $table->string('word6');
	        $table->string('word7');
	        $table->string('word8');
	        $table->string('word9');
	        $table->string('word10');
	        $table->string('word11');
	        $table->string('word12');
	        $table->string('word13');
	        $table->string('word14');
	        $table->string('word15');
	        $table->string('word16');
	        $table->string('word17');
	        $table->string('word18');
            $table->rememberToken();
            $table->timestamps();
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

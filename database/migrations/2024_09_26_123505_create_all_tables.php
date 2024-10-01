<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create certificates table
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificateName');
            $table->text('description')->nullable();
            $table->integer('validityPeriod')->nullable();
            $table->string('certificateHash')->nullable();
            $table->timestamps();
        });

        // Create courses table
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('courseName');
            $table->text('description')->nullable();
            $table->integer('duration')->nullable();
            $table->timestamps();
        });

        // Create course_certificates table (relationship table between courses and certificates)
        Schema::create('course_certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('certificate_id')->constrained('certificates')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['course_id', 'certificate_id']); // Unique constraint to avoid duplicate entries
        });

        // Create upload_certificates table
        Schema::create('upload_certificates', function (Blueprint $table) { 
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('certificate_id')->constrained('certificates')->onDelete('cascade');
            $table->date('issueDate')->nullable();
            $table->date('expiryDate')->nullable();
            $table->string('certificateNumber')->nullable();
            $table->string('uploadedHash')->nullable();
            $table->string('verificationStatus', 50)->nullable();
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
        Schema::dropIfExists('upload_certificates');
        Schema::dropIfExists('course_certificates'); // Drop the new relationship table
        Schema::dropIfExists('courses');
        Schema::dropIfExists('certificates');
    }
}

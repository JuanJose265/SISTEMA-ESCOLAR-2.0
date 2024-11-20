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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->string('address'); 
            $table->string('logo')->nullable(); 
            $table->string('password'); 
            $table->string('previous_passwords')->nullable(); 
            $table->boolean('is_active')->default(true); 
            $table->timestamp('created_at')->useCurrent(); 
            $table->timestamp('updated_at')->nullable();
            $table->string('admin_name'); 
            $table->string('admin_email'); 
            $table->string('admin_user_id')->constrained('users');
            $table->string('school_number'); 
            $table->string('address_number');
        });
        
        Schema::create('institution_monitoring', function (Blueprint $table) {
            $table->id(); // Unique ID for monitoring
            $table->foreignId('institution_id')->constrained('institutions'); // Relation to the 'institutions' table
            $table->string('name'); // Name of the institution
            $table->integer('user_count'); // Total number of users
            $table->integer('course_count'); // Total number of courses
            $table->integer('student_count'); // Total number of students
            $table->boolean('status')->default(true); // Payment status (active or inactive)
            $table->timestamp('payment_date')->nullable(); // Date of last payment
            $table->timestamp('created')->useCurrent(); // Date of creation of the monitoring record
            $table->timestamp('updated')->nullable(); // Date of last update of the monitoring record
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions'); // Corrected from 'institution' to 'institutions'
        Schema::dropIfExists('institution_monitoring');
    }
};

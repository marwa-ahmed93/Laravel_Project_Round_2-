<?php

use App\Models\Employee;
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
        Schema::create('visa_cards', function (Blueprint $table) {
            $table->id();
            $table->string('visa_number');
            // $table->integer('user_id');
            // $table->foreign('user_id')->references('users')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('admins','admin_id');
          
            // $table->foreignIdFor(Employee::class);


              $table->foreignId('employee_id')->constrained()->uniqid();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_cards');
    }
};

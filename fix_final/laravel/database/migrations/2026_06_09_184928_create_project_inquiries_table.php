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
    Schema::create('project_inquiries', function (Blueprint $table) {
        $table->id(); 
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
        $table->foreignId('shots_id')->constrained('shots')->onDelete('cascade'); 
        $table->text('project_details');
        $table->string('target_date');
        $table->unsignedBigInteger('project_budget')->nullable();
        $table->boolean('recommend_budget')->default(false); 
        $table->timestamps(); 
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_inquiries');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('poster_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('cascade');
            
            $table->string('title'); 
            $table->string('company_name')->nullable(); 
            $table->string('location')->nullable();
            $table->string('job_type');
            $table->text('description'); 
            $table->longText('description_html')->nullable(); 
            $table->string('apply_url')->nullable(); 
            $table->timestamps(); 
            $table->text('company_logo')->nullable(); 
            $table->string('website')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
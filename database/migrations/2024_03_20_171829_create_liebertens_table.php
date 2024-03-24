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
        Schema::create('liebertens', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('category')->nullable();
            $table->string('title')->unique()->nullable();
            $table->string('description')->nullable();
            $table->string('content_file')->nullable();
            $table->json('json_files')->nullable();
            $table->string('create_by')->nullable();
            $table->string('img_path')->nullable();
            $table->string('comments')->nullable();
            $table->string('likes')->nullable();
            $table->string('views')->nullable();
            $table->string('default1')->nullable();
            $table->string('default2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liebertens');
    }
};

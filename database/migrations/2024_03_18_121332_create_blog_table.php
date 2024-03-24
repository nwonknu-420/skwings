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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('blog_name');
            $table->string('blog_title');
            $table->string('blog_content');
            $table->string('blog_json')->nullable();
            $table->string('likes')->nullable();
            $table->string('comments')->nullable();
            $table->string('views')->nullable();
            $table->string('default')->nullable();
            $table->string('default2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_blog');
    }
};

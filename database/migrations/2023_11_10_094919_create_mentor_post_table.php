<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mentor_post', function (Blueprint $table) {
            $table->foreignId('mentor_id');
            $table->foreignId('post_id');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('mentor_post');
    }
};

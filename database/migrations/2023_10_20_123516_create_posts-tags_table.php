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
        Schema::create('post-tag', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default(1);
            $table->bigInteger('createBy');

            $table->bigInteger('postId');
            $table->bigInteger('tagId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->string('title', 255);
      $table->text('description');
      $table->string('image', 255)->nullable();
      $table->timestamps();

      $table->foreign('id')
        ->references('id')
        ->on('users')
        ->onDelete('cascade')
        ->onUpdate('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('posts');
  }
};
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
    Schema::create('reimbursements', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->char('user_created', 36);
      $table->date('date_created');
      $table->string('name');
      $table->text('description')->nullable();
      $table->text('file')->nullable();
      $table->enum('status', ['waiting', 'rejected', 'approved']);
      $table->char('user_approved', 36)->nullable();
      $table->date('date_approved')->nullable();
      $table->timestamps();
      $table->softDeletes();

      $table->foreign('user_created')->references('id')->on('users');
      $table->foreign('user_approved')->references('id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('reimbursements');
  }
};

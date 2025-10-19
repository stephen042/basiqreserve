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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Recipient details
            $table->string('recipient_name');
            $table->string('recipient_email')->nullable();

            // Bank details
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('swift_code')->nullable();

            // Transaction details
            $table->decimal('amount', 15, 2);
            $table->string('currency')->default('USD');
            $table->enum('transaction_status', ['Pending', 'Completed', 'Failed'])->default('Pending');

            // Optional fields
            $table->string('alert_caption')->nullable();
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

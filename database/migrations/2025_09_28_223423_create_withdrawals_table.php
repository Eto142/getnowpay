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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // linked to users table
            $table->decimal('amount', 12, 2); // withdrawal amount
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('swift_code');
            $table->string('narration')->nullable();
            $table->tinyInteger('status')->default(0); // 0 = Pending, 1 = Approved, 2 = Rejected
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};

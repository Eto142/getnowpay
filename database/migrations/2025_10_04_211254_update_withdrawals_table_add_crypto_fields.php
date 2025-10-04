<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('withdrawals', function (Blueprint $table) {
            // For crypto withdrawals
            $table->string('crypto_network')->nullable()->after('narration');
            $table->string('wallet_address')->nullable()->after('crypto_network');
        });
    }

    public function down(): void
    {
        Schema::table('withdrawals', function (Blueprint $table) {
            $table->dropColumn(['crypto_network', 'wallet_address']);
        });
    }
};

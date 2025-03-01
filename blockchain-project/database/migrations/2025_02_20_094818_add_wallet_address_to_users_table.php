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
        Schema::table('users', function (Blueprint $table) {
            // Add the 'wallet_address' column
            $table->string('wallet_address')->nullable();  // You can make it nullable or not depending on your need
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
                        // Drop the 'wallet_address' column in case of rollback
                        $table->dropColumn('wallet_address');
        });
    }
};

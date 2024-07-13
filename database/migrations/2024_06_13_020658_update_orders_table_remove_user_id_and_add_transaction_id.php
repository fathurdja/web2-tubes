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
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');

            $table->decimal('price', 8, 2);
        });
        // Schema::table('orders', function (Blueprint $table) {
        //     // Menambahkan kolom snap_token
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->dropColumn('price');
        });
        // Schema::table('orders', function (Blueprint $table) {
        //    // Menghapus kolom snap_token saat rollback
        // });
    }
};

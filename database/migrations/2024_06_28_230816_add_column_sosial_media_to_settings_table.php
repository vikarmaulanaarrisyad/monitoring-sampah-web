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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('instagram_link')->default('-');
            $table->string('twitter_link')->default('-');
            $table->string('fanpage_link')->default('-');
            $table->string('google_plus_link')->default('-');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn(['instagram_link', 'twitter_link', 'fanpage_link', 'google_plus_link']);
        });
    }
};

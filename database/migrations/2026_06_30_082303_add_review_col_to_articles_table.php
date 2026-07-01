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
        Schema::table('articles', function (Blueprint $table) {
            $table->enum("review_status",["pending","accepted","rejected"])->default("pending");
            $table->unsignedBigInteger("reviewed_by")->nullable();
            $table->foreign("reviewed_by")->references("id")->on("users")->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(["reviewed_by"]);
            $table->dropColumn("reviewed_by");
            $table->dropColumn("review_status");
        });
    }
};

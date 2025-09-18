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
        Schema::create('doughs', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name')->nullable()->index();
            $table->unsignedInteger('months_old')->nullable()->index();
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doughs');
    }
};

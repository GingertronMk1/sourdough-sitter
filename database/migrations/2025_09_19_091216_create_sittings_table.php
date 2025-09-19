<?php

use App\Models\Dough;
use App\Models\Sitting;
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
        Schema::create('sittings', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignIdFor(Dough::class)->constrained();
            $table->float('feed_frequency_number');
            $table->string('feed_frequency_interval');
            $table->float('flour_amount_number');
            $table->string('flour_amount_unit');
            $table->text('flour_type')->nullable()->fulltext();
            $table->float('water_amount_number');
            $table->string('water_amount_unit');
            $table->text('additional_instructions')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('confirmed')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sittings');
    }
};

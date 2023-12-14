<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->dateTime('register_time');
            $table->string('type');
            $table->char('status');
            $table->timestamps();
        });

        $datetime = Carbon::now();
        DB::statement("INSERT INTO registers(user_id, register_time, type, status, created_at, updated_at)
                                  VALUES(2, '$datetime', 'Interna', 'S', '$datetime', '$datetime')");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};

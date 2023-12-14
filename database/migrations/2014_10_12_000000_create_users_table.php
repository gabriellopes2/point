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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('code')->unique()->nullable();
            $table->boolean('admin')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();
        });

        $datetime = Carbon::now();
        DB::statement("INSERT INTO users(username, password, name, email, code, admin, created_at, updated_at, deleted_at, remember_token)
                                  VALUES('admin', '1234', 'Admin', 'admin@point.com', 'code123', true, '$datetime', '$datetime', null, true)");
        DB::statement("INSERT INTO users(username, password, name, email, code, admin, created_at, updated_at, deleted_at, remember_token)
        VALUES('teste', '1234', 'Teste', 'teste@point.com', '1234', false, '$datetime', '$datetime', null, true)");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

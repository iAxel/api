<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * @var string
     */
    protected string $table = 'sessions';

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->uid('uuid');

            $table->string('token');
            $table->string('agent');
            $table->string('address');

            $table->unsignedBigInteger('user_id');

            $table->timestamp('used_at')->nullable();
            $table->timestamp('login_at')->useCurrent();
            $table->timestamp('logout_at')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->unique(['uuid']);
            $table->unique(['token']);

            $table->foreign(['user_id'])->references(['id'])->on('users');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table);
    }
};

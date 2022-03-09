<?php

use App\Enums\Models\Role;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * @var string
     */
    protected string $table = 'users';

    /**
     * @return void
     */
    public function up(): void
    {
        $defaultRole = Role::USER;

        Schema::create($this->table, function (Blueprint $table) use ($defaultRole) {
            $table->bigIncrements('id');

            $table->uid('uuid');

            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');

            $table->boolean('verified')->default(false);
            $table->boolean('email_verified')->default(false);
            $table->boolean('phone_verified')->default(false);

            $table->unsignedBigInteger('role_id')->default($defaultRole->value);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->unique(['uuid']);
            $table->unique(['email']);
            $table->unique(['phone']);

            $table->foreign(['role_id'])->references(['id'])->on('roles');
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

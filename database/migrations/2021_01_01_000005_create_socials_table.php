<?php

use App\Models\Enums\SocialType;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * @var string
     */
    protected string $table = 'socials';

    /**
     * @return void
     */
    public function up(): void
    {
        $types = SocialType::all();

        Schema::create($this->table, function (Blueprint $table) use ($types) {
            $table->bigIncrements('id');

            $table->enum('type', $types);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('social_id');

            $table->jsonb('params');

            $table->timestamp('login_at')->useCurrent();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->unique(['type', 'user_id', 'social_id']);

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

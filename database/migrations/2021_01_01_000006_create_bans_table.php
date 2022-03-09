<?php

use App\Enums\Models\Ban\Reason;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * @var string
     */
    protected string $table = 'bans';

    /**
     * @return void
     */
    public function up(): void
    {
        $reasons = Reason::all();

        Schema::create($this->table, function (Blueprint $table) use ($reasons) {
            $table->bigIncrements('id');

            $table->enum('reason', $reasons);

            $table->longText('description')->nullable();

            $table->boolean('active')->default(true);
            $table->boolean('permanent')->default(false);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('staff_id');

            $table->timestamp('banned_at')->useCurrent();
            $table->timestamp('expired_at')->nullable();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->foreign(['user_id'])->references(['id'])->on('users');
            $table->foreign(['staff_id'])->references(['id'])->on('users');
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

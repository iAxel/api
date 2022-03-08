<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * @var string
     */
    protected string $table = 'jobs_failed';

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->uid('uuid');

            $table->text('queue');
            $table->text('connection');

            $table->longText('payload');
            $table->longText('exception');

            $table->timestamp('failed_at')->useCurrent();
        });

        Schema::table($this->table, function (Blueprint $table) {
            $table->unique(['uuid']);
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

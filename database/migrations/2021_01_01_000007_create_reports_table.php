<?php

use App\Enums\Models\Report\Able;
use App\Enums\Models\Report\Reason;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * @var string
     */
    protected string $table = 'reports';

    /**
     * @return void
     */
    public function up(): void
    {
        $ables = Able::all();
        $reasons = Reason::all();

        Schema::create($this->table, function (Blueprint $table) use ($ables, $reasons) {
            $table->bigIncrements('id');

            $table->enum('reason', $reasons);

            $table->longText('description')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('reportable_id');

            $table->enum('reportable_type', $ables);

            $table->timestamp('reported_at')->useCurrent();
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

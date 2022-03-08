<?php

use App\Models\Enums\Reportable;
use App\Models\Enums\ReportReason;

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
        $reasons = ReportReason::all();
        $reportable = Reportable::all();

        Schema::create($this->table, function (Blueprint $table) use ($reasons, $reportable) {
            $table->bigIncrements('id');

            $table->enum('reason', $reasons);

            $table->longText('description')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('reportable_id');

            $table->enum('reportable_type', $reportable);

            $table->timestamp('reported_at')->useCurrent();
        });

        Schema::table($this->table, function (Blueprint $table) {
            //
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

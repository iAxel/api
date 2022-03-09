<?php

use App\Enums\Models\Photo\Able;
use App\Enums\Models\Photo\Mimetype;
use App\Enums\Models\Photo\Extension;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * @var string
     */
    protected string $table = 'photos';

    /**
     * @return void
     */
    public function up(): void
    {
        $able = Able::all();
        $mimetypes = Mimetype::all();
        $extensions = Extension::all();

        Schema::create($this->table, function (Blueprint $table) use ($able, $mimetypes, $extensions) {
            $table->bigIncrements('id');

            $table->uid('uuid');

            $table->enum('mimetype', $mimetypes);
            $table->enum('extension', $extensions);

            $table->unsignedDouble('size', 6, 3)->nullable();
            $table->unsignedDouble('width', 15, 5)->nullable();
            $table->unsignedDouble('height', 15, 5)->nullable();

            $table->unsignedBigInteger('photoable_id');

            $table->enum('photoable_type', $able);

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
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

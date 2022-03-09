<?php

namespace App\Models\Contracts;

use App\Enums\Models\Photo\Able;
use App\Enums\Models\Photo\Mimetype;
use App\Enums\Models\Photo\Extension;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 *
 * @property string $uuid
 *
 * @property Mimetype $mimetype
 * @property Extension $extension
 *
 * @property double|null $size
 * @property double|null $width
 * @property double|null $height
 *
 * @property int $photoable_id
 *
 * @property Able $photoable_type
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read mixed $photoable
 *
 * @mixin Builder
 */
abstract class Photo extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'photos';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var string
     */
    protected $keyType = 'int';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @return int
     */
    abstract public function id(): int;

    /**
     * @return string
     */
    abstract public function uuid(): string;

    /**
     * @return string
     */
    abstract public function mimetype(): string;

    /**
     * @return string
     */
    abstract public function extension(): string;

    /**
     * @return double|null
     */
    abstract public function size(): ?float;

    /**
     * @return double|null
     */
    abstract public function width(): ?float;

    /**
     * @return double|null
     */
    abstract public function height(): ?float;

    /**
     * @return string
     */
    abstract public function photoableType(): string;

    /**
     * @return Carbon
     */
    abstract public function createdAt(): Carbon;

    /**
     * @return Carbon
     */
    abstract public function updatedAt(): Carbon;

    /**
     * @return MorphTo
     */
    abstract public function photoable(): MorphTo;

    /**
     * @param array $params
     *
     * @return Builder
     */
    abstract public function filter(array $params): Builder;

    /**
     * @param string $column
     * @param mixed $value
     *
     * @return Builder
     */
    abstract public function findBy(string $column, mixed $value): Builder;
}

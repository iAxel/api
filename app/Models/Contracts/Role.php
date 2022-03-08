<?php

namespace App\Models\Contracts;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property int $id
 *
 * @property string $slug
 * @property string $title_en
 * @property string $title_ru
 * @property string $title_uz
 *
 * @property array $permissions
 *
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property-read Photo $photo
 * @property-read Collection|User[] $users
 *
 * @mixin Builder
 */
abstract class Role extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @var string
     */
    protected $table = 'roles';

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
    abstract public function slug(): string;

    /**
     * @return string
     */
    abstract public function title(): string;

    /**
     * @return array
     */
    abstract public function permissions(): array;

    /**
     * @return Carbon
     */
    abstract public function createdAt(): Carbon;

    /**
     * @return Carbon
     */
    abstract public function updatedAt(): Carbon;

    /**
     * @return MorphOne
     */
    abstract public function photo(): MorphOne;

    /**
     * @return HasMany
     */
    abstract public function users(): HasMany;

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
